import funciones_bbdd1 as bdd
conexion = bdd.conectar('SUPERMERCADO')



menu = {}
menu = {
1:'INSERT',
2:'SELECT',
3:'UPDATE',
4:'DELATE'
}
for i in menu:
     print(i, ":", menu[i])


accion = input("escribe la accion que quieres realizar")

idcategoria = input ("Escribe la idcategoria")
nombre_idcategoria = input ("Escribe el nombre de la categoria")

cursor = conexion.cursor()
