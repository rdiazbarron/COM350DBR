def factorial(n):
   if n==0 or n==1:
            resultado=1
   elif n>1:
            resultado=n*factorial(n-1)
   return resultado

n = int(input("Ingrese un numero: "))
p = int(input("Ingrese un numero: "))
fn = factorial(n)
fp= factorial(p)
fmenosp = factorial(n-p)
combinacion = fn/(fp*(fmenosp))
print("El resultado es: ",combinacion)