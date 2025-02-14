CREATE DATABASE registro_laborales;

use registros_laborales;

CREATE TABLE labores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    labor VARCHAR(100) not null,
    fecha DATE not null,
    cantidad INT not null,
    tarifa DECIMAL(10,2) not null,
    empleado VARCHAR(50) not null,
    lote VARCHAR(100) not null
);

INSERT INTO labores (labor, fecha, cantidad, tarifa, empleado, lote) VALUE
('siembra', '2025-02-11', 50, 100.00, 'Juan Perez', 'Lote1'),
('Riego', '2025-02-12', 30, 80.50, 'María López', 'Lote2'),
('Cosecha', '2025-02-13', 40, 120.75, 'Carlos Gómez', 'Lote3'),
('Fertilización', '2025-02-14', 25, 90.00, 'Ana Ramírez', 'Lote1'),
('Poda', '2025-02-15', 35, 110.25, 'Luis Torres', 'Lote4'),
('Siembra', '2025-02-16', 45, 95.00, 'Sofía Martínez', 'Lote2');