/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.zoologico;

/**
 *
 * @author diazb
 */
public class Leon implements IMamiferos{
    
    private String nombre;
    private int temp;
    private int patas;
    private String color;
    
    public Leon(String nombre, int temp, int patas, String color) {
        this.nombre = nombre;
        this.temp = temp;
        this.patas = patas;
        this.color = color;
    }
    
    
    @Override
    public void getTemperatura(){
        System.out.println("La temperatura del leon es " +this.temp);
    };

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public int getTemp() {
        return temp;
    }

    public void setTemp(int temp) {
        this.temp = temp;
    }

    public int getPatas() {
        return patas;
    }

    public void setPatas(int patas) {
        this.patas = patas;
    }

    public String getColor() {
        return color;
    }

    public void setColor(String color) {
        this.color = color;
    }

    @Override
    public String toString() {
        return "Leon{" + "nombre=" + nombre + ", temp=" + temp + ", patas=" + patas + ", color=" + color + '}';
    }
    
    
    
    

    
}
