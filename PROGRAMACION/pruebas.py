import funciones_bbdd as bdd
conexion = bdd.conectar('ANIMALES')
'''
cursor = conexion.cursor()
consulta = """
select ANIMAL.animal, FAMILIA.familia 
FROM ANIMAL
JOIN FAMILIA ON ANIMAL.idFamilia = FAMILIA.idfamilia;
"""

cursor.execute(consulta)
resultados = cursor.fetchall()
for animal, familia in resultados:
    print(f"Animal: {animal}, Familia: {familia}")
cursor.close()
conexion.close()

cursor = conexion.cursor()
consulta="""
SELECT FAMILIA.familia, COUNT(ANIMAL.animal) AS total_animales
FROM ANIMAL
JOIN FAMILIA ON ANIMAL.idFamilia = FAMILIA.idfamilia
GROUP BY FAMILIA.familia;
"""
cursor.execute(consulta)
resultados = cursor.fetchall()
for familia, total in resultados:
    print(f"Familia: {familia}, Total de animales: {total}")

cursor.close()
conexion.close()

cursor = conexion.cursor()
nuevo_animal = (10,2,'Tigre',2)
consulta = "INSERT INTO ANIMAL (idAnimal, idFamilia, animal, cuantos) VALUES(%s,%s,%s,%s)"
cursor.execute(consulta,nuevo_animal)
conexion.commit()
cursor.close()
conexion.close()

cursor = conexion.cursor()
nueva_cantidad = 6
animal_id = 1
consulta = "UPDATE ANIMAL SET cuantos = (%s) WHERE idAnimal = (%s)"

cursor.execute(consulta, (nueva_cantidad, animal_id))
conexion.commit()
print("Cantidad actualizada correctamente")

cursor.close()
conexion.close()
'''
cursor = conexion.cursor()
animal_id = 10
consulta = "DELETE FROM ANIMAL WHERE idAnimal = %s"

cursor.execute(consulta, (animal_id,))

conexion.commit()
print("Animal eliminado correctamente")

cursor.close()
conexion.close()










