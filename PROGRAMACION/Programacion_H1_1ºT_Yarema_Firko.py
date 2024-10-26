

'''
##Damos valores
print("Yarema Firko")
eleccion = 0
Figuras = {
    1 : "Cuadrado",
    2 : "Rectangulo",
    3 : "Salida"
}

##Imprmimos el menu para el usuario
print("Figuras:")
for numero, (forma) in Figuras.items():
    print(f"- {numero}: {forma}")
    
##Hacemos este código para que las únicas opciones válidas sean el 1,2 o 3
eleccion = input("Escribe la figura sobre la cual quieres calcular ")
while eleccion != ("1","2","3"):
    if eleccion == "1":
        eleccion = int(1)
        break
    elif eleccion == "2":
        eleccion = int(2)
        break
    elif eleccion == "3":
        eleccion = int(3)
        break
    eleccion = input("Esa no es una opción válida, eligue otra opción ")

##Hacemos un while con 3 opciones. 1 para calcular el cuadrado, 2 para el rectángulo y si se elige la 3ra opción se sale del whiile
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
   
    ##Imprimimos el menu otra vez
    print("Figuras:")
    for numero, (forma) in Figuras.items():
        print(f"- {numero}: {forma}")
        
    ##Otra vez hacemos que las unicas posibles opciones sean 1, 2 o 3
    while eleccion != ("1","2","3"):
        if eleccion == "1":
            eleccion = int(1)
            break
        elif eleccion == "2":
            eleccion = int(2)
            break
        elif eleccion == "3":
            eleccion = int(3)
            break
        eleccion = input("Decide si hacer otro cálculo o salir ")   
print("Fin del programa")  

print("Yarema Firko")
##Damos valores, creamos contadores 
puntos_maquina = 0
tu_puntuacion = 0
eleccion_maquina_escrito = str

##Pedimos que haga su elección
tu_eleccion = input("Escribe si quieres elegir Piedra, Papel o Tijeras ")

##Hacemos un wile hasta que alguno de los dos llegue a los 3 puntos
while puntos_maquina < 3 and tu_puntuacion < 3:
    ##Hacemos que la máquina saque un número del 1 al 3 teniendo cada uno un significado
    import random
    eleccion_maquina = random.randint(1,3)
    if eleccion_maquina == 1:
        eleccion_maquina_escrito = "Piedra"
        
    elif eleccion_maquina == 2:
        eleccion_maquina_escrito = "Papel"
        
    elif eleccion_maquina == 3:
        eleccion_maquina_escrito = "Tijeras" 
        
    ##Hacemos condiconales, donde dependiendo de la elección del jugador se verá si ganó la ronda o no    
    ##Aparte en donde la máquina o la persona gana subimos 1 punto en el contador
    ##Pedimos al jugador que Haga otra elección
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
            
##Cuando se salga del while comprobamos quien de los dos llegó a los 3 puntos y escribimos un mensaje
if puntos_maquina == 3:
    print("El juego se ha acabado, la maquina ha ganado la partida, suerte la proxima vez")

elif tu_puntuacion == 3:
    print("El juego se ha acabado, !Felicidades has ganado la partida!")


'''
print("Yarema Firko")
##Damos valores y contadores de cada acción pedida
ingreso = 0.0
retiro = 0.0
contador_retiros = 0
contador_ingresos = 0
contador_mostrar_saldo = 0
menu = {}
saldo_inicial = float

##Escribimos el menú de interacción
menu = {
    1 : ("Ingresar dinero"),
    2 : ("retirar dinero"),
    3 : ("Mostrar saldo"),
    4 : ("Estadísticas"),
    5 : ("Salir")
}

##Mostramos el menú
for i, (resultado) in menu.items():

    print(f"- {i} : {resultado}")

##Pedimos el saldo inicial de la cuenta, donde este no puede ser 0
##Lo pedimos 1 vez y si lo insertado es un 0 mediante un if lo metemos a un bucle while hasta que deje de se 0
saldo_inicial = float(input("Escribe el saldo inicial de la cuenta "))
if saldo_inicial == 0:
    while saldo_inicial == 0:
        saldo_inicial = float(input("El saldo no puede ser 0, escribelo de nuevo "))
    
##Ponemos las operaciones que puede realizar
opciones = int(input("Escibe el número de la operacion que quieres realizar " ))
##Hacemos un bucle while con if y elif donde dependiendo de la elección del usuario se hará una cosa u otra.
##Se saldrá del bucle cuando elija la opcion 5
##Cada vez que se seleccione una opción, se suma al contador de operaciones
while opciones != 5:
    ##En esta opción sumamos al saldo, excepto si lo que ingresa es un número negativo
    if opciones == 1:
        ingreso = float(input("Escribe la cantidad a ingresar "))
        if ingreso < 0:
            ingreso = float(input("No puedes ingresar una cantidad negativa, escribe la cantidad a ingresar "))
        saldo_inicial = saldo_inicial + ingreso
        contador_ingresos = contador_ingresos + 1
    ##En esta retiramos una cantidad. Pero si la cantidad a retirar es mayor al saldo se cancela la operación.
    if opciones == 2:
        retirar = float(input("Escribe la cantidad a retirar "))
        if retirar > saldo_inicial:
            retirar = float(input("No puedes retirar una cantidad mayor a la disponible, por favor inserta otra cantidad "))
        saldo_inicial = saldo_inicial - retirar
        contador_retiros = contador_retiros + 1
    ##Mostramos el saldo despues del banco
    if opciones == 3:
            print(f"El saldo que tienes en la cuenta es {saldo_inicial}")
            contador_mostrar_saldo = contador_mostrar_saldo + 1
    opciones = int(input("Escibe la el número de la operacion que quieres realizar " ))
    ##Mostramos la cantidad de veces que pediste hacer cada operación
    if opciones == 4:
        print(f"La cantidad de veces que has hecho ingresos es de {contador_ingresos}")
        print(f"La cantidad de veces que has hecho retiros es de {contador_retiros}")
        print(f"La cantidad de veces que has pedido la visualización del saldo es de {contador_mostrar_saldo}")


print("Muchas gracias por usar nuestros servicios, !Hasta la próxima!")
