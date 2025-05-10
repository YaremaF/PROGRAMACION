import numpy as np
import random
tablero_intentos= np.zeros([5,5])
tablero = np.zeros([5,5])
contador = 0




fila_barco = random.randint(0,4)
columna_barco = random.randint(0,4)
posicion = (fila_barco,columna_barco)
print(posicion)


tablero[fila_barco,columna_barco] = 1
fila_ataque = 0
columna_ataque = 0
ataque = ()


while ataque != posicion:
    if ataque == posicion:
        break
    else:
        fila_ataque = int(input("Escribe la fila de ataque "))-1
        if fila_ataque not in range(5):
            while fila_ataque not in range(5):
             fila_ataque = int(input("Escribe la fila de ataque "))-1
             
        columna_ataque = int(input("Escribe la columna de ataque "))-1
        if columna_ataque not in range(5):
            while columna_ataque not in range(5):
                columna_ataque = int(input("Escribe la columna de ataque "))-1


        tablero[fila_ataque,columna_ataque] = -1
        tablero_intentos[fila_ataque,columna_ataque] = -1
        ataque = (fila_ataque, columna_ataque)
        contador = contador + 1
        if ataque != posicion:
            print("Agua!,prueba de nuevo ")
            print (tablero_intentos)
            tablero[fila_ataque,columna_ataque] = -1
print("Felicidades has acertado! tu número de intentos fue de:", contador)
tablero[fila_barco,columna_barco] = 1
print(tablero)
print ("Yarema Firko")
