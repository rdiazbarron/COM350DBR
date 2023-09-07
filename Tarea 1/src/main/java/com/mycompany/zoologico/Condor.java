/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.zoologico;

/**
 *
 * @author diazb
 */
public class Condor implements IAves {
    
    private String nombre;
    private float peso;
    private float tamanoalas;

    public Condor(String nombre, float peso, float tamanoalas) {
        this.nombre = nombre;
        this.peso = peso;
        this.tamanoalas = tamanoalas;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public float getPeso() {
        return peso;
    }

    public void setPeso(float peso) {
        this.peso = peso;
    }

    public float getTamanoalas() {
        return tamanoalas;
    }

    public void setTamanoalas(float tamanoalas) {
        this.tamanoalas = tamanoalas;
    }
    
    
    @Override
    public void volar(){
        System.out.println("El Condor vuela muy alto");
    }

    @Override
    public String toString() {
        return "Condor{" + "nombre=" + nombre + ", peso=" + peso + ", tamanoalas=" + tamanoalas + '}';
    }
    
    
    
}
