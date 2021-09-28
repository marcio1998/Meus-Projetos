/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package client;

import java.rmi.RemoteException;
import java.rmi.registry.LocateRegistry;
import java.rmi.registry.Registry;
import java.text.DecimalFormat;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.JTextField;
import service.ICalculadora;

/**
 *
 * @author Gabriel
 */
public class CalculadoraClient {

    Registry srv;
    ICalculadora op;   
    public CalculadoraClient(){
        this.srv = run();
        this.op = instanciarOperacoes();
    }

    public Registry run() {
        try {
            Registry srv = LocateRegistry.getRegistry(ICalculadora.SERVICE_HOST, ICalculadora.PORT);
            return srv;

        } catch (Exception e) {
            System.out.println("Erro: " + e.getMessage());
        }
        return srv;
    }

    public void soma(double a, double b, JTextField txt) {
        try {
            double soma = op.soma(a, b);
            txt.setText(Double.toString(soma));
        } catch (RemoteException e) {
            System.out.println("Erro: " + e.getMessage());
        }
    }
    
    public void subtracao(double a, double b, JTextField txt) {
        try {
            double soma = op.subtracao(a, b);
            txt.setText(Double.toString(soma));
        } catch (RemoteException e) {
            System.out.println("Erro: " + e.getMessage());
        }
    }
    
    public void divisao(double a, double b, JTextField txt) {
        try {
            double soma = op.divisao(a, b);
            txt.setText(Double.toString(soma));
        } catch (RemoteException | UnsupportedOperationException e) {
            txt.setText("Error");
        }
    }
    
    public void multiplicacao(double a, double b, JTextField txt) {
        try {
            double soma = op.multiplicacao(a, b);
            txt.setText(Double.toString(soma));
        } catch (RemoteException e) {
             System.out.println("Erro: " + e.getMessage());
        }
    }
    
    public void potenciacao(double a, double b, JTextField txt) {
        try {
            double soma = op.potenciacao(a, b);
            txt.setText(Double.toString(soma));
        } catch (RemoteException e) {
             System.out.println("Erro: " + e.getMessage());
        }
    }
    
    public void log(double a,JTextField txt) {
        try {
            double soma = op.log(a);
            txt.setText(Double.toString(soma));
            
        } catch (RemoteException |UnsupportedOperationException e) {
             txt.setText("Error");
        }
    }
    
    public void celcius(double a,JTextField txt) {
        try {

            double soma = op.celcius(a);
            txt.setText(Double.toString(soma));
            
        } catch (RemoteException |UnsupportedOperationException e) {
             txt.setText("Error");
        }
    }
    
    public void fahrenheit(double a,JTextField txt) {
        try {
            double soma = op.fahrenheit(a);
            txt.setText(Double.toString(soma));
            
        } catch (RemoteException |UnsupportedOperationException e) {
             txt.setText("Error");
        }
    }

    private ICalculadora instanciarOperacoes() {
        try {
            return (ICalculadora) srv.lookup(ICalculadora.SERVICE_NAME);
        } catch (Exception e) {
            System.out.println("Erro: " + e.getMessage());
        }
        return null;
    }

    

}
