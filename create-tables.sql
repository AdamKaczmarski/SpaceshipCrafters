CREATE TABLE adbt214_Users (
	IDUser INTEGER NOT NULL UNIQUE AUTO_INCREMENT,
	username VARCHAR(50) UNIQUE NOT NULL,
	first_name VARCHAR(60) NOT NULL,
	last_name VARCHAR(100) NOT NULL,
	phone_number VARCHAR(14) NOT NULL,
	email VARCHAR(150) NOT NULL UNIQUE,
	password VARCHAR(32) NOT NULL,
	CONSTRAINT PK_IDUS PRIMARY KEY (IDUser)
) ENGINE=INNODB;

CREATE TABLE adbt214_Bookings (
	IDbooking INTEGER NOT NULL UNIQUE AUTO_INCREMENT,
	booking_title VARCHAR(250) NOT NULL,
	booking_date DATE NOT NULL,
	booking_time TIME NOT NULL,
	CONSTRAINT PK_IDBK PRIMARY KEY (IDbooking)
) ENGINE=INNODB;

CREATE TABLE adbt214_Users_Bookings (
	userID INTEGER NOT NULL,
	bookingID INTEGER NOT NULL,
	CONSTRAINT FK_US_BK FOREIGN KEY (userID) REFERENCES adbt214_Users(IDUser),
	CONSTRAINT FK_BK_US FOREIGN KEY (bookingID) REFERENCES adbt214_Bookings(IDbooking)
) ENGINE=INNODB;