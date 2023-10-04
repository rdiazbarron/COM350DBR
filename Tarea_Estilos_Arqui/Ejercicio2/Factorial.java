package com.example.combinatoria;

public class Factorial {
    private int n;

    public Factorial(int n) {
        this.n = n;
    }

    public int getN() {
        return n;
    }

    public void setN(int n) {
        this.n = n;
    }

    public int calcularFactorial(){
        return calcularFactorialRecursivo(this.n);
    }

    private int calcularFactorialRecursivo(int n) {
        if (n == 0 || n == 1) {
            return 1;
        } else {
            return n * calcularFactorialRecursivo(n - 1);
        }
    }

}
