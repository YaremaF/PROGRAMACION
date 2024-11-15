'''
def sumapro(numero1, numero2):
    suma = numero1 + numero2
    print(f"La suma de {numero1} y {numero2} es {suma}")
    
def restapro(numero1, numero2):
    resta = numero1 - numero2
    print(f"La resta de {numero1} y {numero2} es {resta}")
    
def divisionpro(numero1, numero2):
    division= numero1 / numero2
    print(f"La division de {numero1} y {numero2} es {division}")
    
   
def multiplicacionpro(numero1, numero2):
    multiplicacion= numero1 * numero2
    print(f"La multiplicacion de {numero1} y {numero2} es {multiplicacion}")
           
    

patata = int(input("Escribe el primer número"))    
banana = int(input("Escribe el segundo númeor"))    
cr7 = int(input("Escribe el primer número"))    
messi = int(input("Escribe el segundo númeor"))    
   
#españa#
        
sumapro(num1, num2)
restapro(num1, num2)
divisionpro(patata, banana)
multiplicacionpro(cr7, messi)
'''

def sumapro2(numero1, numero2):
    suma = numero1 + numero2
    return suma



def espar(numero):
    if numero % 2:
        valor = True
    else:
        valor = False
    return valor

num1 = int(input("Dame el primer número: "))    
num2 = int(input("Dame el segundo número: "))    

resultadosuma = sumapro2(num1, num2)
print(f"El resultado de la suma es {resultadosuma}")


if espar(num1) == True:
    print(f"El número {num1} es par")

else:
    print(f"El número {num1} es impar")






