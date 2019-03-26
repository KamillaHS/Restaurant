DROP DATABASE IF EXISTS RestaurantDB;
CREATE DATABASE RestaurantDB;
USE RestaurantDB;

/* Tables */

CREATE TABLE Restaurant (
  RestaurantID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Adress VARCHAR(255) NOT NULL,
  Logo VARCHAR(255) NOT NULL,
  Stars INT,
  Info VARCHAR(765) NOT NULL
);

CREATE TABLE Customers (
  CustomerID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  FirstName VARCHAR(255) NOT NULL,
  LastName VARCHAR(255) NOT NULL,
  PhoneNum VARCHAR(255) NOT NULL,
  Email VARCHAR(255) NOT NULL
);

CREATE TABLE Tables (
  TableID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  TableSize INT NOT NULL
);


/* Many to Many tables */

CREATE TABLE Booking (
  TableID INT NOT NULL,
  CustomerID INT NOT NULL,
  CreatedAt TIMESTAMP,
  BookedTime DATETIME,
  PartyNum INT NOT NULL,
  CONSTRAINT PK_Booking PRIMARY KEY (TableID, CustomerID),
  FOREIGN KEY (TableID) REFERENCES Tables (TableID),
  FOREIGN KEY (CustomerID) REFERENCES Customers (CustomerID)
);

/* Add Foreign Keys to tables */

-- None

/* Insert test data */

/* Restaurant */
insert into Restaurant (RestaurantID, Adress, Logo, Stars, Info) values (1, 'Havnevejen 60, 6700 Esbjerg', 'https://robohash.org/optiodoloremquenemo.jpg?size=50x50&set=set1', 4, 'Restaurant Description here...');

/* Customers */
insert into Customers (CustomerID, FirstName, LastName, PhoneNum, Email) values (1, 'Signe', 'A. Jensen', '53292713', 'SigneAJensen@gmail.com');
insert into Customers (CustomerID, FirstName, LastName, PhoneNum, Email) values (2, 'Stine', 'J. Søndergaard', '25313482', 'StineJSndergaard@hotmail.dk');
insert into Customers (CustomerID, FirstName, LastName, PhoneNum, Email) values (3, 'Caroline', 'Steffensen', '71139931', 'CarolineSteffensen@gmail.com');
insert into Customers (CustomerID, FirstName, LastName, PhoneNum, Email) values (4, 'Jens', 'Klausen', '40984572', 'JensKlausen@gmail.com');
insert into Customers (CustomerID, FirstName, LastName, PhoneNum, Email) values (5, 'Anders', 'C. Svendsen', '61528847', 'AndersCSvendsen@hotmail.dk');
insert into Customers (CustomerID, FirstName, LastName, PhoneNum, Email) values (6, 'Lærke', 'Berg', '53522757', 'LaerkeBerg@gmail.com');
insert into Customers (CustomerID, FirstName, LastName, PhoneNum, Email) values (7, 'Ida-Marie', 'Nygaard', '24941042', 'IdaMarie92@gmail.com');
insert into Customers (CustomerID, FirstName, LastName, PhoneNum, Email) values (8, 'Peter', 'Thygesen', '61551539', 'PeterThygesen@hotmail.com');
insert into Customers (CustomerID, FirstName, LastName, PhoneNum, Email) values (9, 'Nicklas', 'Nilsson', '81995972', 'NicklasNilsson@hotmail.dk');
insert into Customers (CustomerID, FirstName, LastName, PhoneNum, Email) values (10, 'Gustav', 'Jespersen', '24576965', 'GustavLJespersen@gmail.com');

/* Tables */
insert into Tables (TableID, TableSize) values (1, 2);
insert into Tables (TableID, TableSize) values (2, 4);
insert into Tables (TableID, TableSize) values (3, 4);
insert into Tables (TableID, TableSize) values (4, 4);
insert into Tables (TableID, TableSize) values (5, 6);
insert into Tables (TableID, TableSize) values (6, 8);
insert into Tables (TableID, TableSize) values (7, 4);
insert into Tables (TableID, TableSize) values (8, 4);
insert into Tables (TableID, TableSize) values (9, 2);
insert into Tables (TableID, TableSize) values (10, 4);
insert into Tables (TableID, TableSize) values (11, 4);
insert into Tables (TableID, TableSize) values (12, 4);
insert into Tables (TableID, TableSize) values (13, 4);
insert into Tables (TableID, TableSize) values (14, 6);
insert into Tables (TableID, TableSize) values (15, 6);
insert into Tables (TableID, TableSize) values (16, 2);
insert into Tables (TableID, TableSize) values (17, 6);
insert into Tables (TableID, TableSize) values (18, 8);
insert into Tables (TableID, TableSize) values (19, 4);
insert into Tables (TableID, TableSize) values (20, 2);

/* Booking */
insert into Booking (TableID, CustomerID, CreatedAt, BookedTime, PartyNum) values (17, 4, NULL, '2019-06-18 20:30:00', 6);
insert into Booking (TableID, CustomerID, CreatedAt, BookedTime, PartyNum) values (4, 3, null, '2019-05-18 20:00:00', 4);
insert into Booking (TableID, CustomerID, CreatedAt, BookedTime, PartyNum) values (3, 5, null, '2019-05-19 20:00:00', 4);
insert into Booking (TableID, CustomerID, CreatedAt, BookedTime, PartyNum) values (1, 2, null, '2019-04-18 19:30:00', 2);
insert into Booking (TableID, CustomerID, CreatedAt, BookedTime, PartyNum) values (1, 6, null, '2019-06-05 19:00:00', 2);
insert into Booking (TableID, CustomerID, CreatedAt, BookedTime, PartyNum) values (17, 8, null, '2019-05-29 18:00:00', 6);
insert into Booking (TableID, CustomerID, CreatedAt, BookedTime, PartyNum) values (7, 7, null, '2020-01-18 10:00:00', 4);
insert into Booking (TableID, CustomerID, CreatedAt, BookedTime, PartyNum) values (20, 9, null, '2020-01-18 17:30:00', 2);
insert into Booking (TableID, CustomerID, CreatedAt, BookedTime, PartyNum) values (7, 1, null, '2020-01-18 18:00:00', 4);
insert into Booking (TableID, CustomerID, CreatedAt, BookedTime, PartyNum) values (12, 10, null, '2019-09-05 20:00:00', 4);
