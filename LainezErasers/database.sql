CREATE DATABASE bank_system;
USE bank_system;

CREATE TABLE banks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    country VARCHAR(50) NOT NULL,
    swift_code VARCHAR(11) NOT NULL,
    assets_usd DECIMAL(15,2) NOT NULL,
    rating DECIMAL(3,1) NOT NULL,
    risk_level VARCHAR(20)
);