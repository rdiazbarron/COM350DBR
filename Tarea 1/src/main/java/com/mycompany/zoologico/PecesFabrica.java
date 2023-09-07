/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.zoologico;

/**
 *
 * @author diazb
 */
public class PecesFabrica implements IFabricaAbstractaAnimales {

    @Override
    public IMamiferos crearMamifero(String mamifero, String nombre, int temp, int patas, String color) {
        System.out.println("PecesFabrica no produce mamíferos.");
        return null;
    }

    @Override
    public IPeces crearPez(String tipo, String nombre, float longitud) {
        if (tipo.equalsIgnoreCase("Sabalo")) {
            return new Sabalo(nombre, longitud);
        } else if (tipo.equalsIgnoreCase("Pacu")) {
            return new Pacu(nombre, longitud);
        }
        
        return null;
    }

    @Override
    public IAves crearAve(String ave, String nombre, float peso, float tamanoalas) {
        System.out.println("PecesFabrica no produce aves.");
        return null;
    }
}
