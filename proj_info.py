# update_mysql_from_csv.py
import pandas as pd
import mysql.connector

# Function to establish a connection to MySQL
host_G = '10.198.49.5'
user_G = 'ugacademics'
password_G = 'zsVgOLEGSxewJbgk'
database_G = 'ugacademics_wids_2023'

def create_mysql_connection():
    try:
        connection = mysql.connector.connect(
            host=host_G,
            user=user_G,
            password=password_G,
            database=database_G
        )
    except:
        print("error")
    return connection

# Function to read data from CSV and update MySQL
def csv_to_mysql(csv_file, table_name):
    # Read CSV file into a Pandas DataFrame
    df = pd.read_csv(csv_file)
    print(df)
    df.replace('nan', '', inplace=True)
    # Connect to MySQL
    connection = create_mysql_connection()
    cursor = connection.cursor()

    create_table_query = f'''
        CREATE TABLE IF NOT EXISTS {table_name} (
                            uid VARCHAR(255),
                            Mentor_Name VARCHAR(255),
                            Mentor_LDAP VARCHAR(255),
                            Project_Title VARCHAR(255),
                            Project_Description TEXT,
                            Difficulty VARCHAR(255),
                            Category VARCHAR(255),
                            Prerequisites TEXT,
                            Duration VARCHAR(50),
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
            INSERT INTO {table_name} (uid,Mentor_Name, Mentor_LDAP, Project_Title, Project_Description, Difficulty, Category, Prerequisites, Duration, image)
            VALUES ("{row['UID']}","{row['Mentor Name']}","{row['Mentor LDAP']}", "{row['Project Title']}", "{row['Project Description']}", "{row['Difficulty']}", "{row['Category']}", "{row['Pre-Requisites (if any)']}", "{row['Duration']}", "{row['image']}");
        '''
        # cursor.execute(insert_query)

        try:
            cursor.execute(insert_query)
        except:
            print(insert_query)
        connection.commit()

    # Close the connection
    connection.close()

# Example usage
csv_file_path = r"proj_info.csv"
table_name = 'proj_info'

csv_to_mysql(csv_file_path, table_name)


