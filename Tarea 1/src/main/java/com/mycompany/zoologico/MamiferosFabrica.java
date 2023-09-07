/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.zoologico;

/**
 *
 * @author diazb
 */
public class MamiferosFabrica implements IFabricaAbstractaAnimales {
    
    @Override
    public IMamiferos crearMamifero(String tipo, String nombre, int temp, int patas, String color) {
    if (tipo.equalsIgnoreCase("Leon")){
        return new Leon(nombre, temp, patas, color);
    }else if (tipo.equalsIgnoreCase("Mono")){
        return new Mono(nombre, temp, patas,color);
    }else if(tipo.equalsIgnoreCase("Oso")){
        return new Oso(nombre,temp,patas,color);
    }
    return null;
}
    @Override
    public IPeces crearPez(String pez, String nombre, float longitud) {
        System.out.println("MamiferosFabrica no produce peces.");
        return null;
    }

    @Override
    public IAves crearAve(String ave, String nombre, float peso, float tamanoalas) {
        System.out.println("MamiferosFabrica no produce aves.");
        return null;
    }
}
