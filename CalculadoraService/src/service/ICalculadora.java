/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package service;

import java.rmi.Remote;
import java.rmi.RemoteException;

/**
 *
 * @author Gabriel
 */
public interface ICalculadora extends Remote{
    public static final int PORT = 1999;
    public static final String SERVICE_NAME = "calculadora";
    public static final String SERVICE_HOST = "192.168.15.21";
    
    
    //Metodos
    public abstract double soma(double a, double b) throws RemoteException;
    public abstract double subtracao(double a, double b) throws RemoteException;
    public abstract double multiplicacao(double a, double b) throws RemoteException;
    public abstract double divisao(double a, double b) throws RemoteException;
    public abstract double potenciacao(double a, double b) throws RemoteException;
    public abstract double log(double a) throws RemoteException;
    public abstract double celcius(double a) throws RemoteException;
    public abstract double fahrenheit(double a) throws RemoteException;
}
