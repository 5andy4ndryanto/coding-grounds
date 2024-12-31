# Install Dependency => pip install -r requirements.txt

from sqlalchemy import create_engine
from sqlalchemy.orm import sessionmaker
from sqlalchemy import text
from dotenv import load_dotenv
import os

# Load .env file
load_dotenv()

# Get environment variables
DB_DIALECT = os.getenv('DB_DIALECT', 'postgresql')
DB_USERNAME = os.getenv('DB_USERNAME')
DB_PASSWORD = os.getenv('DB_PASSWORD')
DB_HOST = os.getenv('DB_HOST', 'localhost')
DB_PORT = os.getenv('DB_PORT', '5432')
DB_NAME = os.getenv('DB_NAME')

# Construct the connection string
connection_string = f"{DB_DIALECT}://{DB_USERNAME}:{DB_PASSWORD}@{DB_HOST}:{DB_PORT}/{DB_NAME}"

# Create the SQLAlchemy engine
engine = create_engine(connection_string)

# Create a session factory
SessionLocal = sessionmaker(autocommit=False, autoflush=False, bind=engine)

# Test the connection
try:
    with engine.connect() as connection:
        print("Database connection successful!")
except Exception as e:
    print(f"Error connecting to the database: {e}")
    
    
with engine.begin() as conn:
    result = conn.execute(text("SELECT * FROM hrm_departments"))
    
    for row in result:
        print(row)