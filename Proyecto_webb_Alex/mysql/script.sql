CREATE DATABASE IF NOT EXISTS carconnect;
CREATE USER IF NOT EXISTS 'alex'@'%' IDENTIFIED BY 'P@ssw0rd';
GRANT ALL PRIVILEGES ON carconnect.* TO 'alex'@'%';
FLUSH PRIVILEGES;

USE carconnect;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
);

INSERT INTO users (name, email) VALUES ('Juan Pérez', 'juan@example.com'), ('Ana Gómez', 'ana@example.com');
