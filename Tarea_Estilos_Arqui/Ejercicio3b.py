
import mysql.connector

connection = mysql.connector.connect(host="localhost",user="root",password="",database="bd_personas")

if connection.is_connected():
    cursor = connection.cursor()
    cursor.execute("""
    CREATE TABLE IF NOT EXISTS ciudadano (
        ci INT PRIMARY KEY,
        nombres VARCHAR(30),
        apellidos VARCHAR(45),
        fecha DATE
    )
    """)
    print("Table ciudadano created (or already exists)")
else:
    print('Failed to connect')
connection.close()