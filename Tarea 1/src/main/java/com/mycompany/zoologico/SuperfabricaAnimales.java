/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.zoologico;

/**
 *
 * @author diazb
 */
public class SuperfabricaAnimales{
    public static IFabricaAbstractaAnimales crearTipoAnimal(String tipoAnimal){
        if(tipoAnimal.equalsIgnoreCase("mamifero")){
            return new MamiferosFabrica();  
    }else if(tipoAnimal.equalsIgnoreCase("ave")){
        return new AvesFabrica();
        
    }else if(tipoAnimal.equalsIgnoreCase("pez")){
        return new PecesFabrica();
        }
        return null;
    
    }
}
