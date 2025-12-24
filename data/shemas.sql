create table users (
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    name VARCHAR (100) NOT NULL,
    email VARCHAR (150) UNIQUE NOT NULL,
    password VARCHAR(100) NOT NULL,
    create_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

create table contacts (
    id int AUTO_INCREMENT PRIMARY KEY NOT NULL,
    name VARCHAR (100) NOT NULL,
    email VARCHAR (150) UNIQUE NOT NULL,
    message text,
    create_at DATETIME DEFAULT CURRENT_TIMESTAMP
);