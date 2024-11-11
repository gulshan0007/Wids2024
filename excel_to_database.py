# update_mysql_from_csv.py
import pandas as pd
import mysql.connector
from mysql.connector import Error
# Function to establish a connection to MySQL
host_G = 'localhost'
user_G = 'root'
password_G = ''
database_G = 'wids2024'

def create_mysql_connection():
    try:
        connection = mysql.connector.connect(
            host=host_G,
            user=user_G,
            password=password_G,
            database=database_G
        )
        return connection
    except Error as e:
        print(f'Error: {e}')
    return
        

# Function to read data from CSV and update MySQL
def csv_to_mysql(csv_file, table_name):
    # Read CSV file into a Pandas DataFrame
    df = pd.read_csv(csv_file)

    # Connect to MySQL
    connection = create_mysql_connection()
    cursor = connection.cursor()

    # Create table (if it doesn't exist)
    create_table_query = f'''
        CREATE TABLE IF NOT EXISTS {table_name} (
            pid INT,
            LDAP_ID VARCHAR(255),
            Roll_Number VARCHAR(255),
            Year_of_Study INT,
            GitHub_Link VARCHAR(500),
            Category VARCHAR(255),
            Verified BOOLEAN,
            Project_Category VARCHAR(255),
            image VARCHAR(255)
        );
    '''
    cursor.execute(create_table_query)
    connection.commit()

    # Update data in MySQL table
    for index, row in df.iterrows():
        # print("hi")
        # print(row['GitHub link/Google Drive link for the project statement and the data set here'])
        
        insert_query = f'''
            INSERT INTO {table_name} (pid, LDAP_ID, Roll_Number, Year_of_Study, GitHub_Link, Category, Verified, Project_Category,image)
            VALUES ('{row['pid']}', '{row['LDAP-ID:']}', '{row['Roll Number:']}', '{row['Year of Study']}', '{row['GitHub link/Google Drive link for the project statement and the data set here'][:400]}', '{row['In which category do you classify the project?']}', '{row['Verified']}', '{row['Category']}' , '{row['image']}');
        '''
        cursor.execute(insert_query)
        connection.commit()

    # Close the connection
    connection.close()

# Example usage
csv_file_path = r"project_info.csv"
table_name = 'project_info'

csv_to_mysql(csv_file_path, table_name)
