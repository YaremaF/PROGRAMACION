import numpy as np
import random

numeros = [random.randint(1,100) for _ in range(10)]

with open('numeros.txt','w') as archivo:
    for i in numeros:
     numero_texto = str(i)
     archivo.write(f'{numero_texto}\n')
    archivo.close()   

with open('numeros.txt','r') as archivo:
   array = np.array([numeros])
   archivo.close()
print(array)



with open ('temperaturas.txt','w') as archivo:
    archivo.write('10\n')
    archivo.write('20\n')
    archivo.write('30\n')
    archivo.write('11\n')
    archivo.write('19\n')
    archivo.write('15\n')
    archivo.write('13\n')
    archivo.write('22\n')
    archivo.write('26\n')
    archivo.write('35\n')
    archivo.write('5\n')
    archivo.write('4\n')
    archivo.close()

with open ('temperaturas.txt', 'r') as archivo:
    lineas = [float(linea.strip()) for linea in archivo.readlines()]
    array1 = np.array([lineas])
    promedio = np.mean(array1)
    minimo = np.min(array1)
    maximo = np.max(array1)
    archivo.close()

print(promedio)
print(minimo)
print(maximo)



with open('notas_estudiantes.txt','w') as archivo:
    archivo.write('85,90,78\n')
    archivo.write('50,14,65\n')
    archivo.write('16,77,25\n')
    archivo.write('74,21,33\n')
    archivo.write('14,99,84\n')
    archivo.close()

with open('notas_estudiantes.txt','r') as archivo:
    lineas = [linea.strip() for linea in archivo.readlines()]
    array2 = np.array([lineas])
    for i in array2:
       i   
    archivo.close()
print(array2)


numeros_aleatorios = [random.randint(-50,50) in range(15)]
with open('valores.txt', 'w') as archivo:
    for i in numeros_aleatorios:
      archivo.write(f'{i}\n')

with open('valores.txt', 'r') as archivo:
    array3 = np.array([i])
    archivo.close()
print(array3)











