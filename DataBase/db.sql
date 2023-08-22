CREATE TABLE productos(
    id_producto INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    descripcion VARCHAR(50) NOT NULL,
    img VARCHAR(250) NOT NULL,
    precio double NOT NULL
);

CREATE TABLE roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    NombreCompleto VARCHAR(100) NOT NULL,
    Email VARCHAR(50) NOT NULL,
    Password VARCHAR(100) NOT NULL,
    role_id int(10) NOT NULL,
    FOREIGN KEY (role_id) REFERENCES roles(id)
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
    userId INT NOT NULL,
    id_producto INT NOT NULL,
    cantidad INT NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    subtotal DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (userId) REFERENCES users(id),
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
);

/* Insert a la tabla producto*/
INSERT INTO `productos` (`id_producto`, `descripcion`, `precio`, `nombre`, `img`) VALUES
(15, 'Shampoo hidratante de aceite de coco', 10, 'Shampoo Coco', 'img/shampoo_coco.jpg'),
(16, 'Maquillaje con aroma a manzana', 20, 'Maquillaje Manzana', 'img/maquillaje_manzana.jpg'),
(17, 'Crema facial de menta y árbol de té', 15, 'Crema Facial Menta', 'img/crema_menta.jpg'),
(18, 'Esmalte de uñas hecho de plástico reciclado', 8, 'Esmalte de Uñas', 'img/esmalte_reciclado.jpg'),
(19, 'Tintes de fantasia para todo tipo de pelo', 4.5, 'Tintes', 'img/Tintes.jpg'),
(20, 'Productos para el cabello', 2.5, 'Cremas', 'img/Productos.jpg'),
(21, 'Productos de barberia', 2.5, 'Cremas para afectar', 'img/Barberia.jpg'),
(22, 'Esmaltes de uñas de diferentes coloes', 2.5, 'Esmaltes', 'img/esmalte.jpg'),
(23, 'Productos para la piel', 6, 'Maquillaje', 'img/Piel.jpg'),
(24, 'Cremas para el cuerpo', 6, 'Cremas', 'img/crema.jpg');
