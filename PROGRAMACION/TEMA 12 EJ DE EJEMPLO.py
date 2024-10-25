'''
numeros = [4, 9, 16, 25, 1, 7, 12]
def mayor5(n):
    return n>5
devolucion = filter(mayor5,numeros)
print(list(devolucion))
'''

alturas_metros = [1.60, 1.75, 1.80, 1.50]

def a_metros(cm):
    return cm * 100
conversion = map(a_metros,alturas_metros)
print(list(conversion))







