CREATE TABLE productos(
 id_producto INT AUTO_INCREMENT PRIMARY KEY,
 descripcion VARCHAR(50) NOT NULL,
 precio double NOT NULL
 );

 CREATE TABLE Usuario (
    UserID INT AUTO_INCREMENT PRIMARY KEY,
    NombreCompleto VARCHAR(100) NOT NULL,
    Email VARCHAR(50) NOT NULL,
    Password VARCHAR(100) NOT NULL
);

CREATE TABLE Citas (
    id_cita INT PRIMARY KEY AUTO_INCREMENT,
    estilista VARCHAR(100) NOT NULL,
    fecha DATE NOT NULL,
    hora TIME NOT NULL,
    sede VARCHAR(50) NOT NULL,
    nombre_cliente VARCHAR(100) NOT NULL,
    servicio VARCHAR(30) NOT NULL,
    descripcion_servicio VARCHAR(200) NOT NULL
);
 
 CREATE TABLE carrito (
    id INT AUTO_INCREMENT PRIMARY KEY,
    UserID INT NOT NULL,
    id_producto INT NOT NULL,
    cantidad INT NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    subtotal DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (UserID) REFERENCES Usuario(UserID),
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
);