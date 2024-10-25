'''

###falta el rpint de cada menu en cada eleccion y lo de si la opcion no es correcta
Figuras = {}
lista = []
valor = int
forma = ()
Figuras[valor] = (forma)
Figuras = {
    1 : "Cuadrado",
    2 : "Rectangulo",
    3 : "Salida"
}
for i in Figuras:
    valor = print (i)

lista.append(valor, forma)

eleccion = int(input("Escribe la figura sobre la cual quieres calcular "))

while eleccion != 3:
    
    if eleccion == 1:
        lado_cuadrado = int(input("Por favor, dime el cuanto mide el lado del cuadrado "))
        area_cuadrado = lado_cuadrado * lado_cuadrado
        perimetro_cuadrado = lado_cuadrado * 4
        for i in range (lado_cuadrado):
            print("*" * lado_cuadrado)
        print("El area del cuadrado que me pides es ", area_cuadrado)
        print("El perimetro del cuadrado que me pides es ", perimetro_cuadrado)

    elif eleccion == 2:
        base_rectangulo = int(input("Por favor, dime el cuanto mide el base del rectangulo "))
        altura_rectangulo = int(input("Por favor, dime el cuanto mide la altura del rectangulo "))
        area_rectangulo = base_rectangulo * altura_rectangulo
        perimetro_rectangulo = (base_rectangulo + altura_rectangulo )* 2
        for i in range (altura_rectangulo):
            print ("*" * base_rectangulo)
        print("El area del rectangulo que me pides es ", area_rectangulo)
        print("El perimetro del rectangulo que me pides es ", perimetro_rectangulo)
    print(Figuras)
    eleccion = int(input("Escribe si quieres hacer otro cálculo o salir "))      
print("Fin del programa")  


puntos_maquina = 0
tu_puntuacion = 0
eleccion_maquina_escrito = str
tu_eleccion = input("Escribe si quieres elegir Piedra, Papel o Tijeras ")
while puntos_maquina < 3 and tu_puntuacion < 3:
    
    import random
    eleccion_maquina = random.randint(1,3)
    if eleccion_maquina == 1:
        eleccion_maquina_escrito = "Piedra"
        
    elif eleccion_maquina == 2:
        eleccion_maquina_escrito = "Papel"
        
    elif eleccion_maquina == 3:
        eleccion_maquina_escrito = "Tijeras" 
        
    if tu_eleccion == ("Piedra"):
        print("Has eligido Piedra")
        print("La elección de la maquina es ", eleccion_maquina_escrito)
        if eleccion_maquina == 1: 
            print("La máquina tambien escogio piedra, se juega de nuevo") 
            
        elif eleccion_maquina == 2:
            puntos_maquina = puntos_maquina + 1
            print("La máquina ha ganado esta ronda, su puntuacion es de: ", puntos_maquina) 
            
        elif eleccion_maquina == 3:
            tu_puntuacion = tu_puntuacion + 1     
            print("Has ganado esta ronda tu puntuacion es de: ", tu_puntuacion) 
        
    elif tu_eleccion == ("Papel"):
        print("Has eligido Papel")
        print("La elección de la maquina es ", eleccion_maquina_escrito)
        
        if eleccion_maquina == 1: 
            tu_puntuacion = tu_puntuacion + 1  
            print("Has ganado esta ronda tu puntuacion es de: ", tu_puntuacion) 
            
        elif eleccion_maquina == 2:
            print("La máquina tambien escogio papel, se juega de nuevo") 
            
        elif eleccion_maquina == 3:
            puntos_maquina = puntos_maquina + 1 
            print("La máquina ha ganado esta ronda, su puntuacion es de: ", puntos_maquina) 
            
    elif tu_eleccion == ("Tijeras"):
        print("Has eligido Tijeras")
        print("La elección de la maquina es ", eleccion_maquina_escrito)
        if eleccion_maquina == 1: 
            puntos_maquina = puntos_maquina + 1 
            print("La máquina ha ganado esta ronda, su puntuacion es de: ", puntos_maquina) 
            
        elif eleccion_maquina == 2:
            tu_puntuacion = tu_puntuacion + 1  
            print("Has ganado esta ronda tu puntuacion es de: ", tu_puntuacion) 
            
        elif eleccion_maquina == 3:
            print("La máquina tambien escogio tijeras, se juega de nuevo")      
    if puntos_maquina < 3:
        if tu_puntuacion < 3:
            tu_eleccion = input("Escribe si quieres elegir Piedra, Papel o Tijeras ") 
    
if puntos_maquina == 3:
    print("El juego se ha acabado, la maquina ha ganado la partida, suerte la proxima vez")

elif tu_puntuacion == 3:
    print("El juego se ha acabado, !Felicidades has ganado la partida!")
'''
opciones = int
accion = str
ingreso = 0.0
retiro = 0.0

contador_retiros = 0
contador_ingresos = 0
contador_mostrar_saldo = 0

menu = {}
menu[opciones] = (accion)
saldo_inicial = 0.0
if saldo_inicial == 0:
    saldo_inicial = float(input("Escribe el saldo inicial de la cuenta"))

menu = {
    1. : ("Ingresar dinero"),
    2. : ("retirar dinero"),
    3. : ("Mostrar saldo"),
    4. : ("Estadísticas"),
    5. : ("Salir")
}

opciones = int(input("Escibe la el número de la operacion que quieres realizar" ))
 
while opciones != 5:
    if opciones == 1:
        ingreso = float(input("Escribe la cantidad a ingresar"))
        if ingreso < 0:
            ingreso = float(input("No puedes ingresar una cantidad negativa, escribe la cantidad a ingresar"))
        saldo_inicial = saldo_inicial + ingreso
        contador_ingresos = contador_ingresos + 1

    if opciones == 2:
        retirar = float(input("Escribe la cantidad a retirar"))
        if retirar > saldo_inicial:
            retirar = float(input("No puedes retirar una cantidad mayor a la disponible, por favor inserta otra cantidad"))
        saldo_inicial = saldo_inicial - retirar
        contador_retiros = contador_retiros + 1
   
    if opciones == 3:
            print(f"El saldo que tienes en la cuenta es {saldo_inicial}")
            contador_mostrar_saldo = contador_mostrar_saldo + 1
    opciones = int(input("Escibe la el número de la operacion que quieres realizar" ))

    if opciones == 4:
        print(f"La cantidad de veces que has hecho ingresos es de {contador_ingresos}")
        print(f"La cantidad de veces que has hecho retiros es de {contador_retiros}")
        print(f"La cantidad de veces que has pedido la visualización del saldo es de {contador_mostrar_saldo}")




print("Muchas gracias por usar nuestros servicios, !Hasta la próxima!")











