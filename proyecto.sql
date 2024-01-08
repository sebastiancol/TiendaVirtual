CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10, 2) NOT NULL,
    imagen VARCHAR(255)
);


CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(255) NOT NULL UNIQUE,
    contrasena VARCHAR(255) NOT NULL
);


INSERT INTO usuarios (usuario, contrasena) VALUES ('admin','123456');
INSERT INTO productos (nombre, descripcion, precio) VALUES (Chaqueta,Color Azul tipo beisbolera, 120.000 COP);
