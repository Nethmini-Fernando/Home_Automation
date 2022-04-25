CREATE TABLE users_reg (
  user_id INTEGER NOT NULL,
  fname VARCHAR(255) NOT NULL,
  lname VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  code mediumint(50) NOT NULL,
  status text NOT NULL,
  timestamp TIMESTAMP NOT NULL,
  PRIMARY KEY (user_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE Temperature (
  id INTEGER PRIMARY KEY,
  Date_Time TIMESTAMP NOT NULL,
  Temp_in_F INTEGER NOT NULL,
  Temp_in_C INTEGER NOT NULL,
  Humidity INTEGER NOT NULL,
  Heater_Temp INTEGER NOT NULL,
  Temp_Status TEXT NOT NULL
);

CREATE TABLE users_Temperature(
	user_id INTEGER NOT NULL,
	id INTEGER ,
	CONSTRAINT FK_users_Temperature1 FOREIGN KEY (user_id) 
	REFERENCES users_reg(user_id),
	CONSTRAINT FK_users_Temperature2 FOREIGN KEY (id) 
	REFERENCES Temperature(id),
	CONSTRAINT PK_users_Temperature PRIMARY KEY (user_id,id)
);
