import mysql.connector

def conectar ():
    conexion = mysql.connector.connect(
        host="localhost",    
        user="root",      
        password="curso",  
        database="SUPERMERCADO"
        )
    return conexion


