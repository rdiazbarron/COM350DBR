/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Interface.java to edit this template
 */
package com.mycompany.zoologico;

/**
 *
 * @author diazb
 */
public interface IFabricaAbstractaAnimales {
    
    IMamiferos crearMamifero(String mamifero, String nombre, int temp, int patas, String color);
    IPeces crearPez(String pez, String nombre, float longitud);
    IAves crearAve(String ave, String nombre, float peso, float tamanoalas);
    
}
