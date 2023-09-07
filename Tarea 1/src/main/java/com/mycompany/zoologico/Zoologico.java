/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */

package com.mycompany.zoologico;

/**
 *
 * @author diazb
 */
public class Zoologico {

    public static void main(String[] args) {
        
        IFabricaAbstractaAnimales fabricaMamiferos = SuperfabricaAnimales.crearTipoAnimal("mamifero");
        IMamiferos leon = fabricaMamiferos.crearMamifero("Leon", "Simba", 37, 4, "Amarillo");
        if (leon != null) {
            System.out.println(leon);
        } else {
            System.out.println("Error al crear el mamífero.");
        }
    }
}
