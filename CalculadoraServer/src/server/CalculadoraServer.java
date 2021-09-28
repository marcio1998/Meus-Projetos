/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package server;

import java.rmi.AlreadyBoundException;
import java.rmi.RemoteException;
import java.rmi.registry.LocateRegistry;
import java.rmi.registry.Registry;
import java.rmi.server.UnicastRemoteObject;
import service.ICalculadora;

/**
 *
 * @author Gabriel
 */
public class CalculadoraServer extends UnicastRemoteObject implements ICalculadora {

    public CalculadoraServer() throws RemoteException {
        super();
    }

    @Override
    public double soma(double a, double b) throws RemoteException {
        return a + b;
    }

    @Override
    public double subtracao(double a, double b) throws RemoteException {
        return a - b;
    }

    @Override
    public double multiplicacao(double a, double b) throws RemoteException {
        return a * b;
    }

    @Override
    public double divisao(double a, double b) throws RemoteException {
        if (b <= 0) {
            throw new UnsupportedOperationException("Not supported yet.");
        } else {
            return a / b;
        }
    }

    @Override
    public double potenciacao(double a, double b) throws RemoteException {
        return Math.pow(a, b);
    }

    @Override
    public double log(double a) throws RemoteException {
        if (a < 0) {
            throw new UnsupportedOperationException("Not supported yet.");
        } else {
            return Math.log(a);
        }
    }

    @Override
    public double celcius(double a) throws RemoteException {
        double C = (((a - 32) *5)/9);
        return C;
    }

    @Override
    public double fahrenheit(double a) throws RemoteException {
        double F = (((9 * a) + 160) / 5);
        return F;
    }
    
   



    public static void main(String[] args) {
        try {
            ICalculadora srv = new CalculadoraServer();
            Registry rg = LocateRegistry.createRegistry(ICalculadora.PORT);
            rg.bind(ICalculadora.SERVICE_NAME, srv);
            System.out.println("Servidor em Execução");
        } catch (Exception e) {
        }

    }
    
   
}
