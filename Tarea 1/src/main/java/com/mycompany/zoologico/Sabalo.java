/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.zoologico;

/**
 *
 * @author diazb
 */
public class Sabalo implements IPeces{
    
    private String nombre;
    private float longitud;

    public Sabalo(String nombre, float longitud) {
        this.nombre = nombre;
        this.longitud = longitud;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public float getLongitud() {
        return longitud;
    }

    public void setLongitud(float longitud) {
        this.longitud = longitud;
    }
    
    @Override
    public void nadar(){
        System.out.println("El sabalo nada por el lago");
    }

    @Override
    public String toString() {
        return "Sabalo{" + "nombre=" + nombre + ", longitud=" + longitud + '}';
    }
    
}
