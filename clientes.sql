-- Tabla Clientes para el Laboratorio 02: MVC en PHP
-- Usar la misma base de datos donde se creó la tabla productos (ej. poo_mvc-php)

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nomcliente` varchar(128) NOT NULL,
  `dircliente` varchar(128) NOT NULL,
  `ruccliente` varchar(11) NOT NULL,
  `telcliente` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
