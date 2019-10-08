-- Create a new database called 'users'
-- Connect to the 'master' database to run this snippet
USE master
GO
-- Create the new database if it does not exist already
IF NOT EXISTS (
    SELECT name
        FROM sys.databases
        WHERE name = N'users'
)
CREATE DATABASE users
GO

-- Create a new database called 'boardgame'
-- Connect to the 'master' database to run this snippet
USE master
GO
-- Create the new database if it does not exist already
IF NOT EXISTS (
    SELECT name
        FROM sys.databases
        WHERE name = N'boardgame'
)
CREATE DATABASE boardgame
GO

