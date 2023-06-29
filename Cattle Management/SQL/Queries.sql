--Creating Tables
CREATE TABLE Admin(Name VARCHAR(25),UName VARCHAR(20) PRIMARY KEY,Password VARCHAR(20));
CREATE TABLE Farmer(Name VARCHAR(25),UName VARCHAR(20) PRIMARY KEY,Password VARCHAR(20), Address VARCHAR(70),Location VARCHAR(15),PhoneNo VARCHAR(10),AccNo VARCHAR(17));
CREATE TABLE Buyer(Name VARCHAR(25),UName VARCHAR(20) PRIMARY KEY,Password VARCHAR(20), Address VARCHAR(70),Location VARCHAR(15),PhoneNo VARCHAR(10),AccNo VARCHAR(17));
CREATE TABLE Seller(Name VARCHAR(25),UName VARCHAR(20) PRIMARY KEY,Password VARCHAR(20),PhoneNo VARCHAR(10),AccNo VARCHAR(17),Commission INT);
CREATE TABLE Cattle(AnimalName VARCHAR(25),breed VARCHAR(20),A_count INT,Description VARCHAR(50),Cost FLOAT,Owner VARCHAR(20),Picture VARCHAR(100));

--Populating the tables
INSERT INTO Admin VALUES ('Shakthi','Shakthi10','123');
INSERT INTO Buyer VALUES ('Sha','Shakthi08','12345','100, Nehru Street','Aruppukottai','1234567890','120265320457896');
INSERT INTO Farmer VALUES ('Raji','Raji20','Raji123','500, Thendral Nagar','Rajapalayam','7894561230','784226641123645');

SELECT * FROM Cattle
SELECT * FROM Buyer
SELECT * FROM Farmer where Name='Raji'
SELECT Name FROM Farmer where Name='Shakthi'
UPDATE Cattle SET A_count=5 WHERE AnimalName='Horse' AND Owner='Raji'

delete from Cattle ;
drop table Cattle