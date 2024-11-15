'''
def area_triángulo(base, altura):
    return (base * altura) / 2

base_1 = float(input("Introduce la base del triánfulo"))
altura_2 = float(input("introduce el área del triángulo"))

resultado = area_triángulo (base_1, altura_2)
print ("El área del triángulo es :", resultado)
'''
def es_par(numero):
    numero == False
    if numero % 2 == 0:
        numero == True
        return numero

numero_1 = int(input("Escribe el numero"))


numero_2 = int(input("Escribe el numero"))


numero_3 = int(input("Escribe el numero"))

if es_par(numero_1) == True:
    print(f"El numero {numero_1} es par")
else:
    print(f"El numero {numero_1} es impar")
    
 
if es_par(numero_2) == True:
    print(f"El numero {numero_2} es par")
else:
    print(f"El numero {numero_2} es impar")   



