create database nutrianimlals;
USE nutrianimlals;

CREATE TABLE usuarios (
  id INT(11) NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(250) NOT NULL,
  usuario VARCHAR(250) NOT NULL,
  contraseña VARCHAR(250) NOT NULL,
  correo_electronico VARCHAR(250),
  documento_identidad VARCHAR(50),
  tipo_identidad VARCHAR(100),
  apellido VARCHAR(100),
  id_cargo INT(11) NOT NULL,
  PRIMARY KEY (id),
  INDEX (id_cargo)
) ENGINE=InnoDB;


CREATE TABLE cargo (
  id INT NOT NULL AUTO_INCREMENT,
  descripcion VARCHAR(250) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB; 

CREATE TABLE animales (
     Idanimal INT(11) NOT NULL AUTO_INCREMENT,
     tipo_animal VARCHAR(45),
     peso VARCHAR(45),
     raza VARCHAR(45),
     edad INT(11),
     dosis_alimento VARCHAR(45),
     fecha_entrada DATE,
     fecha_salida DATE,
     idusuarios INT,
     PRIMARY KEY (Idanimal),
     CONSTRAINT fk_Usuarios FOREIGN KEY (idusuarios) REFERENCES usuarios(id)
 ) ENGINE = InnoDB;

CREATE TABLE medicamentos (
  id INT(11)NOT NULL AUTO_INCREMENT,
  Nombre VARCHAR(80),
  dosis CHAR(8),
  estado VARCHAR(45),
  valor CHAR(8),
  lote CHAR(8),
  fecha_vencimiento DATE,
  fecha_elaboracion DATE,
  fecha_toma DATE,
  Idanimal  INT(11),
  primary key (id),
  CONSTRAINT fk_Animales_Medicamentos FOREIGN KEY (Idanimal) REFERENCES animales (Idanimal)
);

CREATE TABLE vacunas (
  Idvacuna INT(11)NOT NULL AUTO_INCREMENT,
  edad_animal INT(11),
  nombre_vacuna VARCHAR(45),
  descripcion VARCHAR(150),
  unidades INT(11),
  fecha_aplicacion DATE,
  Idanimal INT(11),
  PRIMARY KEY (Idvacuna),
  CONSTRAINT fk_Animales_Vacunas FOREIGN KEY (Idanimal) REFERENCES animales (Idanimal)
);

CREATE TABLE alimentos (
  Idalimento INT(11)NOT NULL AUTO_INCREMENT,
  tipo_alimento VARCHAR(85),
  lote INT(11),
  marca VARCHAR(85),
  fecha_registro DATE,
  descripcion_producto VARCHAR(150),
  cantidad INT(11),
  estado VARCHAR(45),
  fecha_ingreso DATE,
  fecha_salida DATE,
  Idanimal INT(8),
  PRIMARY KEY (Idalimento),
  CONSTRAINT fk_Animales_Alimentos FOREIGN KEY (Idanimal) REFERENCES animales (Idanimal)
);

CREATE TABLE categorias (
    Idcategoria INT(11)NOT NULL AUTO_INCREMENT,
    nombre_categoria VARCHAR(85),
    idusuarios INT(11),
      PRIMARY KEY (Idcategoria),
    CONSTRAINT fk_Usuarios_Categorias FOREIGN KEY (idusuarios) REFERENCES usuarios(id)
) ENGINE = InnoDB;

CREATE TABLE subcategorias (
    Idsubcategoria  INT(11)NOT NULL AUTO_INCREMENT,
    nombre_subcateg VARCHAR(85),
    Idcategoria INT(11),
      PRIMARY KEY (Idsubcategoria),
    CONSTRAINT fk_Categoria FOREIGN KEY (Idcategoria) REFERENCES categorias(Idcategoria)
) ENGINE = InnoDB;


INSERT INTO cargo (id, descripcion) VALUES
('1', 'administrador'),
('2', 'usuario');

INSERT INTO usuarios (id, nombre, usuario, contraseña, correo_electronico, documento_identidad, tipo_identidad, apellido, id_cargo)
VALUES
(1, 'Juan Pérez', 'juanperez', 'password123', 'juan@example.com', '12345678', 'Cédula de Ciudadanía', 'Pérez', 1),
(2, 'María García', 'mariagarcia', 'securepwd', 'maria@example.com', '87654321', 'Cédula de Ciudadanía', 'García', 2),
(3, 'Pedro López', 'pedrolopez', 'qwerty', 'pedro@example.com', '98765432', 'Cédula Extranjera', 'López', 1),
(4, 'Ana Martínez', 'anamartinez', 'p@ssw0rd', 'ana@example.com', '23456789', 'Cédula de Ciudadanía', 'Martínez', 2),
(5, 'Carlos Rodríguez', 'carlosrodriguez', 'mysecret', 'carlos@example.com', '34567890', 'Cédula Extranjera', 'Rodríguez', 1),
(6, 'Laura Sánchez', 'laurasanchez', 'letmein', 'laura@example.com', '45678901', 'Cédula de Ciudadanía', 'Sánchez', 2),
(7, 'Roberto Gómez', 'robertogomez', 'abc123', 'roberto@example.com', '56789012', 'Cédula Extranjera', 'Gómez', 1),
(8, 'Isabel Fernández', 'isabelfernandez', 'p@ssw0rd', 'isabel@example.com', '67890123', 'Cédula de Ciudadanía', 'Fernández', 2),
(9, 'Javier Ruiz', 'javierruiz', 'qwerty123', 'javier@example.com', '78901234', 'Cédula Extranjera', 'Ruiz', 1),
(10, 'Elena Díaz', 'elenadiaz', 'securepwd', 'elena@example.com', '89012345', 'Cédula de Ciudadanía', 'Díaz', 2);



INSERT INTO animales (Idanimal, tipo_animal, peso, raza, edad, dosis_alimento, fecha_entrada, fecha_salida, Idusuarios) VALUES
('1', 'Vaca', '500kg', 'Holstein', 4, '200g', '2024-01-01', '2024-01-15', '1'),
('2', 'Cerdo', '150kg', 'Yorkshire', 2, '100g', '2024-01-02', '2024-01-16', '2'),
('3', 'Pollo', '2kg', 'Plymouth Rock', 1, '10g', '2024-01-03', '2024-01-17', '3'),
('4', 'Oveja', '80kg', 'Merina', 3, '50g', '2024-01-04', '2024-01-18', '4'),
('5', 'Cabra', '60kg', 'Alpina', 2, '30g', '2024-01-05', '2024-01-19', '5'),
('6', 'Pato', '4kg', 'Pekín', 1, '15g', '2024-01-06', '2024-01-20', '6'),
('7', 'Conejo', '2kg', 'California', 1, '10g', '2024-01-07', '2024-01-21', '7'),
('8', 'Burro', '200kg', 'Miniatura', 5, '150g', '2024-01-08', '2024-01-22', '8'),
('9', 'Gallina', '3kg', 'Australorp', 1, '10g', '2024-01-09', '2024-01-23', '9'),
('10', 'Caballo', '600kg', 'Pura Sangre', 6, '300g', '2024-01-10', '2024-01-24', '10');

INSERT INTO categorias (Idcategoria, nombre_categoria, Idusuarios) VALUES 
('1', 'Salud Animal', '1'),
('2', 'Alimento para Mascotas', '2'),
('3', 'Medicamentos Veterinarios', '3'),
('4', 'Herramientas de Jardinería y Agricultura', '4'),
('5', 'Equipamiento Agrícola', '5'),
('6', 'Productos Lácteos de Animales', '6'),
('7', 'Productos de Carne de Vacuno', '7'),
('8', 'Productos de Cuero de Vacuno', '8'),
('9', 'Hábitats para Animales Domésticos', '9'),
('10', 'Suministros y Cuidado Animal', '10');

INSERT INTO subcategorias (Idsubcategoria, nombre_subcateg, Idcategoria) VALUES
('1', 'Vacuna para perros', '1'),
('2', 'Vacuna para gatos', '1'),
('3', 'Alimento balanceado para perros', '2'),
('4', 'Alimento balanceado para gatos', '2'),
('5', 'Antibiótico para animales', '3'),
('6', 'Antiinflamatorio para animales', '3'),
('7', 'Herramientas para jardinería', '4'),
('8', 'Herramientas para agricultura', '4'),
('9', 'Equipamiento para granja', '5'),
('10', 'Equipamiento para establos', '5');


INSERT INTO alimentos (tipo_alimento, lote, marca, fecha_registro, descripcion_producto, cantidad, estado, fecha_ingreso, fecha_salida, Idanimal) VALUES 
('Pienso para perros', 123, 'Marca A', '2024-02-25', 'Pienso equilibrado para perros adultos', 100, 'En stock', '2024-02-01', '2024-03-01', '1'),
('Comida húmeda para gatos', 456, 'Marca B', '2024-02-20', 'Comida suculenta para gatos', 50, 'En stock', '2024-02-05', '2024-02-25', '2'),
('Alimento balanceado para caballos', 789, 'Marca C', '2024-02-15', 'Nutrición completa para caballos', 75, 'En stock', '2024-01-30', '2024-02-20', '3'),
('Alimento para peces tropicales', 101, 'Marca D', '2024-02-10', 'Granulado para peces de agua dulce', 200, 'En stock', '2024-01-25', '2024-02-15', '4'),
('Suplemento alimenticio para aves', 202, 'Marca E', '2024-02-05', 'Mezcla de vitaminas para aves exóticas', 30, 'En stock', '2024-01-20', '2024-02-10', '5'),
('Heno de alfalfa para conejos', 303, 'Marca F', '2024-01-31', 'Heno fresco y nutritivo para conejos', 40, 'En stock', '2024-01-15', '2024-02-05', '6'),
('Pellets de alimentación para vacas', 404, 'Marca G', '2024-01-26', 'Pellets concentrados para vacas lecheras', 120, 'En stock', '2024-01-10', '2024-01-31', '7'),
('Alimento para reptiles', 505, 'Marca H', '2024-01-21', 'Mezcla equilibrada para reptiles exóticos', 25, 'En stock', '2024-01-05', '2024-01-26', '8'),
('Alimento para cerdos', 606, 'Marca I', '2024-01-16', 'Fórmula nutricional para cerdos en crecimiento', 90, 'En stock', '2024-01-01', '2024-01-21', '9'),
('Comida para animales pequeños', 707, 'Marca J', '2024-01-11', 'Mezcla variada para roedores y pequeños mamíferos', 60, 'En stock', '2023-12-27', '2024-01-16', '10');

INSERT INTO vacunas (edad_animal, nombre_vacuna, descripcion, unidades, fecha_aplicacion, Idanimal) VALUES
(2, 'Vacuna A', 'Protección contra enfermedades comunes', 1, '2022-01-10', '9'),
(1, 'Vacuna B', 'Inmunización para cachorros', 2, '2022-02-15', '2'),
(3, 'Vacuna C', 'Prevención de enfermedades virales', 1, '2022-03-20', '8'),
(2, 'Vacuna D', 'Vacuna anual para adultos', 1, '2022-04-10', '4'),
(1, 'Vacuna E', 'Protección contra parásitos', 2, '2022-05-25', '5'),
(4, 'Vacuna F', 'Inmunización contra enfermedades específicas', 1, '2022-06-30', '10'),
(2, 'Vacuna G', 'Vacuna de refuerzo', 1, '2022-07-05', '7'),
(1, 'Vacuna H', 'Protección contra enfermedades bacterianas', 2, '2022-08-12', '8'),
(3, 'Vacuna I', 'Inmunización para animales mayores', 1, '2022-09-18', '9'),
(2, 'Vacuna J', 'Vacuna de rutina', 2, '2022-10-22', '10');

INSERT INTO medicamentos(Nombre, dosis, estado, valor, lote, fecha_vencimiento, fecha_elaboracion, fecha_toma, Idanimal) 
VALUES 
('Medicamento1', '5mg', 'Activo', '555', '001', '2024-02-25', '2024-02-01', '2024-02-15', 1),
('Medicamento2', '10mg', 'Inactivo', '555', '002', '2024-03-10', '2024-02-05', '2024-02-20', 2),
('Medicamento3', '7.5mg', 'Activo', '555', '003', '2024-04-15', '2024-03-01', '2024-03-15', 3),
('Medicamento4', '15mg', 'Inactivo', '555', '004', '2024-05-20', '2024-04-01', '2024-04-15', 4),
('Medicamento5', '20mg', 'Activo', '555', '005', '2024-06-25', '2024-05-01', '2024-05-15', 5),
('Medicamento6', '25mg', 'Inactivo', '555', '006', '2024-07-30', '2024-06-01', '2024-06-15', 6),
('Medicamento7', '30mg', 'Activo', '555', '007', '2024-08-15', '2024-07-01', '2024-07-15', 7),
('Medicamento8', '35mg', 'Inactivo', '555', '008', '2024-09-20', '2024-08-01', '2024-08-15', 8),
('Medicamento9', '40mg', 'Activo', '555', '009', '2024-10-25', '2024-09-01', '2024-09-15', 9),
('Medicamento10', '45mg', 'Inactivo', '555', '010', '2024-11-30', '2024-10-01', '2024-10-15', 10);

ALTER TABLE animales
DROP FOREIGN KEY fk_Usuarios;

-- Agrega la nueva restricción con eliminación en cascada
ALTER TABLE animales
ADD CONSTRAINT fk_Usuarios 
FOREIGN KEY (idusuarios) 
REFERENCES usuarios(id) 
ON DELETE CASCADE;

-- Elimina la restricción de clave foránea existente (si es necesario)
ALTER TABLE medicamentos
DROP FOREIGN KEY fk_Animales_Medicamentos;

-- Agrega la nueva restricción con eliminación en cascada
ALTER TABLE medicamentos
ADD CONSTRAINT fk_Animales_Medicamentos 
FOREIGN KEY (Idanimal) 
REFERENCES animales(Idanimal) 
ON DELETE CASCADE;

-- Elimina la restricción de clave foránea existente (si es necesario)
ALTER TABLE vacunas
DROP FOREIGN KEY fk_Animales_Vacunas;

-- Agrega la nueva restricción con eliminación en cascada
ALTER TABLE vacunas
ADD CONSTRAINT fk_Animales_Vacunas 
FOREIGN KEY (Idanimal) 
REFERENCES animales(Idanimal) 
ON DELETE CASCADE;

-- Elimina la restricción de clave foránea existente (si es necesario)
ALTER TABLE alimentos
DROP FOREIGN KEY fk_Animales_Alimentos;

-- Agrega la nueva restricción con eliminación en cascada
ALTER TABLE alimentos
ADD CONSTRAINT fk_Animales_Alimentos 
FOREIGN KEY (Idanimal) 
REFERENCES animales(Idanimal) 
ON DELETE CASCADE;
-- Elimina la restricción de clave foránea existente (si es necesario)
ALTER TABLE categorias
DROP FOREIGN KEY fk_Usuarios_Categorias;

-- Agrega la nueva restricción con eliminación en cascada
ALTER TABLE categorias
ADD CONSTRAINT fk_Usuarios_Categorias 
FOREIGN KEY (idusuarios) 
REFERENCES usuarios(id) 
ON DELETE CASCADE;