import numpy as np
import random
tablero = np.zeros([20,20])
contador_barco1 = 0
contador_barco2 = 0


def barco (fila):
    fila = random.randrange(1,2)
    if fila == 1:
        fila = 1

    elif fila == 2:
        fila = -1

b1_fila = random.randint(1,19)
b1_columna = random.randint(1,19)
tablero[b1_fila,b1_columna] = 1

columna_o_fila1 = random.randint(1,2)
while contador_barco1<1:
    if columna_o_fila1 == 1:
        izquierda_o_derecha = random.randint(1,2)
        if izquierda_o_derecha == 1:
            b1_fila = b1_fila+1
            tablero[b1_fila,b1_columna] = 1
        elif izquierda_o_derecha == 2:
            b1_fila = b1_fila-1
            tablero[b1_fila,b1_columna] = 1

        contador_barco1 = contador_barco1 + 1

    elif columna_o_fila1 == 2:
        izquierda_o_derecha = random.randint(1,2)
        if izquierda_o_derecha == 1:
            b1_columna = b1_columna+1
            tablero[b1_columna,b1_columna] = 1

        elif izquierda_o_derecha == 2:
            b1_columna = b1_columna-1
            tablero[b1_fila,b1_columna] = 1
        contador_barco1 = contador_barco1 + 1

b2_fila = random.randint(1,19)
b2_columna = random.randint(1,19)
tablero[b2_fila,b2_columna] = 1
columna_o_fila2 = random.randint(1,2)

while contador_barco2<3:
    if columna_o_fila2 == 1:
        izquierda_o_derecha = random.randint(1,2)
        if izquierda_o_derecha == 1:
            b2_fila = b2_fila+1
            tablero[b2_fila,b2_columna] = 1
        elif izquierda_o_derecha == 2:
            b2_fila = b2_fila-1
            tablero[b2_fila,b2_columna] = 1

        contador_barco2 = contador_barco2 + 1

    elif columna_o_fila2 == 2:
        izquierda_o_derecha = random.randint(1,2)
        if izquierda_o_derecha == 1:
            b2_columna = b2_columna+1
            tablero[b2_columna,b2_columna] = 1

        elif izquierda_o_derecha == 2:
            b2_columna = b2_columna-1
            tablero[b2_fila,b2_columna] = 1
        contador_barco2 = contador_barco2 + 1

print(tablero)

