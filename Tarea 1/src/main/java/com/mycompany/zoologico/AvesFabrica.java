/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.zoologico;

/**
 *
 * @author diazb
 */
public class AvesFabrica implements IFabricaAbstractaAnimales {

    @Override
    public IAves crearAve(String tipo, String nombre, float peso, float tamanoalas) {
        if (tipo.equalsIgnoreCase("Aguila")) {
            return new Aguila(nombre, peso, tamanoalas);
        } else if (tipo.equalsIgnoreCase("Condor")) {
            return new Condor(nombre, peso, tamanoalas);
        } else if (tipo.equalsIgnoreCase("Loro")) {
            return new Loro(nombre, peso, tamanoalas);
        }
        return null;
    }
    
    @Override
    public IMamiferos crearMamifero(String mamifero, String nombre, int temp, int patas, String color) {
        System.out.println("AvesFabrica no produce mamíferos.");
        return null;
    }

    @Override
    public IPeces crearPez(String pez, String nombre, float longitud) {
        System.out.println("AvesFabrica no produce peces.");
        return null;
    }
}
