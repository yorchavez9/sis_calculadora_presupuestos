-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2023 a las 13:47:57
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sis_presupuesto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(200) NOT NULL,
  `telefono_cliente` varchar(12) NOT NULL,
  `correo_cliente` varchar(150) NOT NULL,
  `contacto_em_cliente` varchar(12) DEFAULT NULL,
  `fecha_cliente` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre_cliente`, `telefono_cliente`, `correo_cliente`, `contacto_em_cliente`, `fecha_cliente`) VALUES
(1, 'Jorge Chávez ', '123456789', 'ana.lopez@gmail.com', '987654321', '2023-11-17 21:25:06'),
(2, 'Javier Rodríguez', '987654321', 'javier.rodriguez@hotmail.com', '555123456', '2023-11-17 21:24:43'),
(3, 'María González', '555123456', 'maria.gonzalez@yahoo.com', '999888777', '2023-11-17 21:24:43'),
(4, 'Carlos Pérez', '999888777', 'carlos.perez@gmail.com', '111222333', '2023-11-17 21:24:43'),
(5, 'Laura Martínez', '111222333', 'laura.martinez@hotmail.com', '444555666', '2023-11-17 21:24:43'),
(6, 'David Sánchez', '444555666', 'david.sanchez@yahoo.com', '777888999', '2023-11-17 21:24:43'),
(7, 'Luisa Ramírez', '777888999', 'luisa.ramirez@gmail.com', '222333444', '2023-11-17 21:24:43'),
(8, 'Alejandro Torres', '222333444', 'alejandro.torres@hotmail.com', '666777888', '2023-11-17 21:24:43'),
(9, 'Sofía Díaz', '666777888', 'sofia.diaz@yahoo.com', '555444333', '2023-11-17 21:24:43'),
(11, 'Carmen García', '123456789', 'carmen.garcia@hotmail.com', '987654321', '2023-11-17 21:24:43'),
(12, 'Fernando Fernández', '987654321', 'fernando.fernandez@yahoo.com', '555123456', '2023-11-17 21:24:43'),
(13, 'Ana María Ruiz', '555123456', 'ana.ruiz@gmail.com', '999888777', '2023-11-17 21:24:43'),
(14, 'Eduardo Gómez', '999888777', 'eduardo.gomez@hotmail.com', '111222333', '2023-11-17 21:24:43'),
(15, 'Isabel Torres', '111222333', 'isabel.torres@yahoo.com', '444555666', '2023-11-17 21:24:43'),
(16, 'Roberto Jiménez', '444555666', 'roberto.jimenez@gmail.com', '777888999', '2023-11-17 21:24:43'),
(17, 'Marta Sánchez', '777888999', 'marta.sanchez@hotmail.com', '222333444', '2023-11-17 21:24:43'),
(18, 'Jorge Martínez', '222333444', 'jorge.martinez@yahoo.com', '666777888', '2023-11-17 21:24:43'),
(19, 'Natalia Díaz', '666777888', 'natalia.diaz@gmail.com', '555444333', '2023-11-17 21:24:43'),
(20, 'Andrés Rodríguez', '555444333', 'andres.rodriguez@hotmail.com', '123456789', '2023-11-17 21:24:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto_cliente`
--

CREATE TABLE `contacto_cliente` (
  `id_contacto` int(11) NOT NULL,
  `nombre_contacto` varchar(150) NOT NULL,
  `apellidos_contacto` varchar(200) NOT NULL,
  `telefono_contacto` varchar(12) NOT NULL,
  `correo_contacto` varchar(150) NOT NULL,
  `fecha_contacto` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(11) NOT NULL,
  `nombre_empresa` varchar(200) NOT NULL,
  `ruc_empresa` varchar(200) NOT NULL,
  `direccion_empresa` varchar(200) NOT NULL,
  `telefono_empresa` varchar(12) NOT NULL,
  `correo_empresa` varchar(200) NOT NULL,
  `fecha_empresa` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo_maqui`
--

CREATE TABLE `equipo_maqui` (
  `id_em` int(11) NOT NULL,
  `nombre_em` varchar(200) NOT NULL,
  `tipo_em` varchar(100) NOT NULL,
  `cantidad_em` int(11) NOT NULL,
  `modelo_em` varchar(30) NOT NULL,
  `ultimo_uso_em` datetime NOT NULL,
  `id_trabajador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `equipo_maqui`
--

INSERT INTO `equipo_maqui` (`id_em`, `nombre_em`, `tipo_em`, `cantidad_em`, `modelo_em`, `ultimo_uso_em`, `id_trabajador`) VALUES
(1, 'Excavadora 1', 'Excavadora', 1, 'Modelo A123', '2023-11-17 08:00:00', 31),
(2, 'Grúa 1', 'Grúa', 1, 'Modelo B456', '2023-11-17 09:30:00', 2),
(3, 'Camión Mezclador 1', 'Camión Mezclador', 2, 'Modelo C789', '2023-11-17 11:15:00', 3),
(4, 'Rodillo Compactador 1', 'Rodillo Compactador', 1, 'Modelo D012', '2023-11-17 13:45:00', 4),
(5, 'Martillo Neumático 1', 'Martillo Neumático', 3, 'Modelo E345', '2023-11-17 15:30:00', 5),
(6, 'Bulldozer 1', 'Bulldozer', 1, 'Modelo F678', '2023-11-17 17:00:00', 6),
(7, 'Grúa 2', 'Grúa', 1, 'Modelo G901', '2023-11-17 08:45:00', 7),
(8, 'Cargadora Frontal 1', 'Cargadora Frontal', 2, 'Modelo H234', '2023-11-17 10:30:00', 8),
(9, 'Excavadora 2', 'Excavadora', 1, 'Modelo I567', '2023-11-17 12:00:00', 9),
(10, 'Rodillo Compactador 2', 'Rodillo Compactador', 1, 'Modelo J890', '2023-11-17 14:15:00', 10),
(11, 'Camión Mezclador 2', 'Camión Mezclador', 2, 'Modelo K123', '2023-11-17 16:00:00', 11),
(12, 'Bulldozer 2', 'Bulldozer', 1, 'Modelo L456', '2023-11-17 08:30:00', 12),
(13, 'Martillo Neumático 2', 'Martillo Neumático', 3, 'Modelo M789', '2023-11-17 10:15:00', 13),
(14, 'Cargadora Frontal 2', 'Cargadora Frontal', 2, 'Modelo N012', '2023-11-17 12:45:00', 14),
(15, 'Excavadora 3', 'Excavadora', 1, 'Modelo O345', '2023-11-17 14:30:00', 15),
(16, 'Grúa 3', 'Grúa', 1, 'Modelo P678', '2023-11-17 16:15:00', 16),
(17, 'Rodillo Compactador 3', 'Rodillo Compactador', 1, 'Modelo Q901', '2023-11-17 08:30:00', 17),
(18, 'Martillo Neumático 3', 'Martillo Neumático', 3, 'Modelo R234', '2023-11-17 10:45:00', 18),
(19, 'Cargadora Frontal 3', 'Cargadora Frontal', 2, 'Modelo S567', '2023-11-17 12:30:00', 19),
(20, 'Bulldozer 3', 'Bulldozer', 1, 'Modelo T890', '2023-11-17 14:00:00', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE `material` (
  `id_material` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `nombre_material` varchar(200) NOT NULL,
  `tipo_material` varchar(150) NOT NULL,
  `marca_material` varchar(150) NOT NULL,
  `cantidad_material` int(11) NOT NULL,
  `precio_compra_material` varchar(50) NOT NULL,
  `precio_venta_material` varchar(50) NOT NULL,
  `fecha_material` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `material`
--

INSERT INTO `material` (`id_material`, `id_proveedor`, `nombre_material`, `tipo_material`, `marca_material`, `cantidad_material`, `precio_compra_material`, `precio_venta_material`, `fecha_material`) VALUES
(1, 11, 'Cemento Portland', 'Cemento', 'Pacasmayo', 1000, '10.50', '12.00', '2023-11-17 21:38:21'),
(2, 11, 'Ladrillo Cerámico', 'Ladrillo', 'San Miguel', 5000, '0.20', '0.25', '2023-11-17 21:38:21'),
(3, 11, 'Varilla de Acero', 'Acero', 'Aceros Arequipa', 300, '8.00', '9.50', '2023-11-17 21:38:21'),
(4, 12, 'Arena Fina', 'Arena', 'Grupo Dmat', 1500, '3.50', '4.20', '2023-11-17 21:38:21'),
(5, 12, 'Láminas de Triplay', 'Triplay', 'Grupo Dmat', 200, '15.00', '18.50', '2023-11-17 21:38:21'),
(6, 12, 'Pintura Latex', 'Pintura', 'Grupo Dmat', 100, '20.00', '25.00', '2023-11-17 21:38:21'),
(7, 11, 'Cemento Portland', 'Cemento', 'Pacasmayo', 1000, '10.50', '12.00', '2023-11-17 21:39:42'),
(8, 11, 'Ladrillo Cerámico', 'Ladrillo', 'San Miguel', 5000, '0.20', '0.25', '2023-11-17 21:39:42'),
(9, 11, 'Varilla de Acero', 'Acero', 'Aceros Arequipa', 300, '8.00', '9.50', '2023-11-17 21:39:42'),
(10, 12, 'Arena Fina', 'Arena', 'Grupo Dmat', 1500, '3.50', '4.20', '2023-11-17 21:39:42'),
(11, 12, 'Láminas de Triplay', 'Triplay', 'Grupo Dmat', 200, '15.00', '18.50', '2023-11-17 21:39:42'),
(12, 12, 'Pintura Latex', 'Pintura', 'Grupo Dmat', 100, '20.00', '25.00', '2023-11-17 21:39:42'),
(13, 13, 'Tubos PVC', 'Tubería', 'Proyectos Y Accesorios', 500, '2.50', '3.00', '2023-11-17 21:39:42'),
(14, 13, 'Tejas de Barro', 'Tejas', 'Proyectos Y Accesorios', 300, '5.50', '7.00', '2023-11-17 21:39:42'),
(15, 17, 'Cerámicos para Piso', 'Cerámica', 'Sodimac', 800, '15.00', '18.00', '2023-11-17 21:39:42'),
(16, 17, 'Grifería para Baño', 'Grifería', 'Sodimac', 150, '30.00', '35.00', '2023-11-17 21:39:42'),
(17, 17, 'Tina de Hidromasaje', 'Artículos de Baño', 'Sodimac', 5, '500.00', '600.00', '2023-11-17 21:39:42'),
(18, 18, 'Puerta de Madera', 'Puerta', 'Maestro Homecenter', 10, '120.00', '150.00', '2023-11-17 21:39:42'),
(19, 18, 'Tablero Contrachapado', 'Madera', 'Maestro Homecenter', 50, '25.00', '30.00', '2023-11-17 21:39:42'),
(20, 18, 'Herramientas Eléctricas', 'Herramientas', 'Maestro Homecenter', 8, '80.00', '100.00', '2023-11-17 21:39:42'),
(21, 19, 'Muebles de Cocina', 'Muebles', 'Promart', 5, '400.00', '500.00', '2023-11-17 21:39:42'),
(22, 19, 'Pintura Antihongos', 'Pintura', 'Promart', 20, '18.00', '22.00', '2023-11-17 21:39:42'),
(23, 19, 'Luminarias LED', 'Iluminación', 'Promart', 30, '12.00', '15.00', '2023-11-17 21:39:42'),
(24, 20, 'Estructuras Metálicas', 'Metal', 'Constructora A&C', 15, '200.00', '250.00', '2023-11-17 21:39:42'),
(25, 20, 'Arena Gruesa', 'Arena', 'Constructora A&C', 1000, '5.00', '6.00', '2023-11-17 21:39:42'),
(26, 20, 'Pegamento para Cerámicos', 'Adhesivo', 'Constructora A&C', 10, '8.00', '10.00', '2023-11-17 21:39:42'),
(27, 21, 'Cemento Portland', 'Cemento', 'Pacasmayo', 1000, '10.50', '12.00', '2023-11-17 21:39:42'),
(28, 21, 'Arena Fina', 'Arena', 'Pacasmayo', 1500, '3.50', '4.20', '2023-11-17 21:39:42'),
(29, 21, 'Ladrillos de Concreto', 'Ladrillo', 'Pacasmayo', 3000, '0.25', '0.30', '2023-11-17 21:39:42'),
(30, 22, 'Varilla de Acero', 'Acero', 'Aceros Arequipa', 500, '7.50', '9.00', '2023-11-17 21:39:42'),
(31, 22, 'Alambre de Amarre', 'Alambre', 'Aceros Arequipa', 200, '2.00', '2.50', '2023-11-17 21:39:42'),
(32, 22, 'Láminas de Zinc', 'Zinc', 'Aceros Arequipa', 10, '40.00', '50.00', '2023-11-17 21:39:42'),
(33, 23, 'Ladrillo Cerámico', 'Ladrillo', 'San Miguel', 5000, '0.20', '0.25', '2023-11-17 21:39:42'),
(34, 23, 'Bloques de Concreto', 'Bloque', 'San Miguel', 1000, '0.50', '0.60', '2023-11-17 21:39:42'),
(35, 23, 'Tubos de Concreto', 'Tubería', 'San Miguel', 200, '2.00', '2.50', '2023-11-17 21:39:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presupuesto`
--

CREATE TABLE `presupuesto` (
  `id_presu` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `porcentaje_ganancia` varchar(50) NOT NULL,
  `costo_parcial` varchar(50) NOT NULL,
  `costo_final` varchar(50) NOT NULL,
  `fecha_presupuesto` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `presupuesto`
--

INSERT INTO `presupuesto` (`id_presu`, `id_proyecto`, `porcentaje_ganancia`, `costo_parcial`, `costo_final`, `fecha_presupuesto`) VALUES
(8, 4, '20', 'S/ 63960', 'S/ 76752.00', '2023-11-19 00:58:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pres_materiales`
--

CREATE TABLE `pres_materiales` (
  `id_pres_mat` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `id_material` int(11) NOT NULL,
  `cantidad_utilizada` int(11) NOT NULL,
  `costo_total` varchar(50) NOT NULL,
  `fecha_pres_materiales` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pres_materiales`
--

INSERT INTO `pres_materiales` (`id_pres_mat`, `id_proyecto`, `id_material`, `cantidad_utilizada`, `costo_total`, `fecha_pres_materiales`) VALUES
(8, 4, 1, 200, '2400.00', '2023-11-19 00:55:08'),
(9, 4, 2, 4000, '1000.00', '2023-11-19 00:55:36'),
(11, 4, 4, 3000, '12600.00', '2023-11-19 00:56:47'),
(12, 4, 25, 4000, '24000.00', '2023-11-19 00:57:16'),
(13, 5, 4, 345, '1449.00', '2023-11-19 05:49:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pres_trabajadores`
--

CREATE TABLE `pres_trabajadores` (
  `id_pres_trab` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `id_trabajador` int(11) NOT NULL,
  `tiempo_trabajo` varchar(50) NOT NULL,
  `sueldo_acordado` varchar(50) NOT NULL,
  `cantidad_tiempo` int(11) NOT NULL,
  `costo_total_trab` varchar(50) NOT NULL,
  `fecha_pres_traba` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pres_trabajadores`
--

INSERT INTO `pres_trabajadores` (`id_pres_trab`, `id_proyecto`, `id_trabajador`, `tiempo_trabajo`, `sueldo_acordado`, `cantidad_tiempo`, `costo_total_trab`, `fecha_pres_traba`) VALUES
(4, 4, 1, 'semana', '600.00', 12, '360.00', '2023-11-19 00:57:44'),
(5, 4, 7, 'mes', '2500.00', 8, '20000.00', '2023-11-19 00:58:02'),
(6, 5, 5, 'proyecto', '1300.00', 2, '2600.00', '2023-11-19 05:59:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `nombre_proveedor` varchar(150) NOT NULL,
  `telefono_proveedor` varchar(12) NOT NULL,
  `correo_proveedor` varchar(100) NOT NULL,
  `direccion_proveedor` varchar(200) NOT NULL,
  `fecha_proveedor` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nombre_proveedor`, `telefono_proveedor`, `correo_proveedor`, `direccion_proveedor`, `fecha_proveedor`) VALUES
(11, 'IGM INVERSIONES Y CONSTRUCCIONES SAC', '(01) 3248895', 'igm@inversionesyconstruccionessac.com', 'Lima', '2023-11-17 21:32:43'),
(12, 'Grupo Dmat', '981 299 947', 'grupodmat@gmail.com', 'Santiago de Surco', '2023-11-17 21:32:43'),
(13, 'Proyectos Y Accesorios E.I.R.L.', '(01) 4711003', 'proyectosyaccesorios@hotmail.com', 'La Victoria', '2023-11-17 21:32:43'),
(14, 'IGM INVERSIONES Y CONSTRUCCIONES SAC', '(01) 3248895', 'igm@inversionesyconstruccionessac.com', 'Lima', '2023-11-17 21:33:26'),
(15, 'Grupo Dmat', '981 299 947', 'grupodmat@gmail.com', 'Santiago de Surco', '2023-11-17 21:33:26'),
(16, 'Proyectos Y Accesorios E.I.R.L.', '(01) 4711003', 'proyectosyaccesorios@hotmail.com', 'La Victoria', '2023-11-17 21:33:26'),
(17, 'Sodimac', '(01) 5133000', 'sodimac@sodimac.com.pe', 'Av. Javier Prado Este 5350, Ate Vitarte', '2023-11-17 21:33:26'),
(18, 'Maestro Homecenter', '(01) 2230000', 'maestro@maestro.com.pe', 'Av. Javier Prado Este 4201, Ate Vitarte', '2023-11-17 21:33:26'),
(19, 'Promart', '(01) 4190500', 'promart@promart.com.pe', 'Av. Angamos Este 1055, Miraflores', '2023-11-17 21:33:26'),
(20, 'Constructora A&C', '(01) 4381840', 'constructoraac@constructoraac.com.pe', 'Av. Javier Prado Este 5940, Ate Vitarte', '2023-11-17 21:33:26'),
(21, 'Cementos Pacasmayo', '(01) 2243800', 'cementospacasmayo@cementospacasmayo.com.pe', 'Av. Paseo de la República 3015, San Isidro', '2023-11-17 21:33:26'),
(22, 'Corporación Aceros Arequipa', '(01) 7120300', 'acerosarequipa@acerosarequipa.com.pe', 'Av. Paseo de la República 3039, San Isidro', '2023-11-17 21:33:26'),
(23, 'Ladrillera San Miguel', '(01) 2261000', 'ladrillerasanmiguel@ladrillerasanmiguel.com.pe', 'Av. Javier Prado Este 2001, Ate Vitarte', '2023-11-17 21:33:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `id_proyecto` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `nombre_proyecto` varchar(200) NOT NULL,
  `ubicacion_proyecto` varchar(200) NOT NULL,
  `fecha_proyecto` datetime NOT NULL,
  `descri_proyecto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id_proyecto`, `id_cliente`, `nombre_proyecto`, `ubicacion_proyecto`, `fecha_proyecto`, `descri_proyecto`) VALUES
(4, 12, 'Hospital de Lircay', 'Av. Centro problado de Lircay', '2023-11-18 00:00:00', '<h3 style=\"text-align: center; \"><b>El nuevo hospital de Lircay, provincia de Angaraes</b></h3><p>El nuevo hospital de Lircay, provincia de Angaraes, departamento de Huancavelica, avanza a buen ritmo. La obra, que se inició en abril de 2023, tiene un plazo de ejecución de 18 meses y un presupuesto de 81 millones de soles.</p><p><br></p><p>Los trabajos se están desarrollando en un terreno de 10 mil metros cuadrados ubicado en el centro de la ciudad. El edificio tendrá una superficie de 10 mil metros cuadrados y contará con 100 camas, 20 consultorios, un centro quirúrgico, un centro obstétrico, un laboratorio, una sala de rayos X y una sala de emergencia.</p><p><br></p><p>Actualmente, los obreros están trabajando en la cimentación del edificio. Ya se han excavado los cimientos y se está colocando la base de concreto. En las próximas semanas, se iniciará la construcción de las paredes y los techos.</p><p><br></p><p>La construcción del nuevo hospital de Lircay es una obra muy esperada por la población de la provincia. El actual hospital, que fue construido en la década de 1970, se encuentra en mal estado y no cuenta con la capacidad para atender a la demanda de servicios de salud de la región.</p><p><br></p><p>El nuevo hospital brindará una atención de calidad a los habitantes de Lircay y de las provincias vecinas. También contribuirá a mejorar la economía de la región, ya que generará empleo durante la construcción y la operación del hospital.</p><p><br></p><p>Datos inventados:</p><p><br></p><ul><li>El hospital tendrá un nombre, por ejemplo, \"Hospital Guillermo Billinghurst\".</li><li>El hospital estará equipado con tecnología de última generación, por ejemplo, un tomógrafo computarizado, un resonador magnético y un equipo de radiocirugía.</li><li>El hospital contará con un programa de capacitación para los profesionales de la salud, para que puedan brindar una atención de calidad a los pacientes.</li></ul>'),
(5, 5, 'Hospital de Lircay', 'Av. Principal 123, San Isidro, Lima', '2023-11-21 00:00:00', '<p>Proyecto de laura</p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terreno`
--

CREATE TABLE `terreno` (
  `id_terreno` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `medida` varchar(50) NOT NULL,
  `precio` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `fecha_pres_traba` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `terreno`
--

INSERT INTO `terreno` (`id_terreno`, `id_proyecto`, `medida`, `precio`, `total`, `fecha_pres_traba`) VALUES
(4, 4, '300', '12', '3600.00', '2023-11-19 00:58:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `id_trabajador` int(11) NOT NULL,
  `nombre_trabajador` varchar(200) NOT NULL,
  `especialidad_trabajador` varchar(150) NOT NULL,
  `dni_trabajador` char(8) NOT NULL,
  `telefono_trabajador` varchar(12) NOT NULL,
  `funcion_trabajador` varchar(150) NOT NULL,
  `tiempo_trab_trabajador` int(11) NOT NULL,
  `sueldo_men_trabajador` varchar(50) NOT NULL,
  `sueldo_sem_trabajador` varchar(50) NOT NULL,
  `sueldo_dia_trabajador` varchar(50) NOT NULL,
  `sueldo_proyecto` varchar(50) NOT NULL,
  `fecha_trabajador` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`id_trabajador`, `nombre_trabajador`, `especialidad_trabajador`, `dni_trabajador`, `telefono_trabajador`, `funcion_trabajador`, `tiempo_trab_trabajador`, `sueldo_men_trabajador`, `sueldo_sem_trabajador`, `sueldo_dia_trabajador`, `sueldo_proyecto`, `fecha_trabajador`) VALUES
(1, 'Gabriel Sánchez', 'Albañil', '23456789', '987654321', 'Albañilería', 40, '1200.00', '600.00', '30.00', '1500.00', '2023-11-17 21:42:01'),
(2, 'Elena González', 'Electricista', '34567890', '987123456', 'Instalaciones Eléctricas', 35, '1500.00', '750.00', '40.00', '1800.00', '2023-11-17 21:42:01'),
(3, 'Raúl Martínez', 'Carpintero', '45678901', '987654123', 'Carpintería', 38, '1300.00', '650.00', '35.00', '1600.00', '2023-11-17 21:42:01'),
(4, 'Carmen Rodríguez', 'Plomero', '56789012', '987321654', 'Fontanería', 42, '1400.00', '700.00', '38.00', '1700.00', '2023-11-17 21:42:01'),
(5, 'Fernando López', 'Pintor', '67890123', '987654321', 'Pintura', 30, '1100.00', '550.00', '25.00', '1300.00', '2023-11-17 21:42:01'),
(6, 'Isabel Ramírez', 'Arquitecto', '78901234', '987123456', 'Diseño Arquitectónico', 45, '2000.00', '1000.00', '50.00', '2200.00', '2023-11-17 21:42:01'),
(7, 'Martín Torres', 'Ingeniero Civil', '89012345', '987654123', 'Dirección de Obra', 50, '2500.00', '1250.00', '60.00', '2800.00', '2023-11-17 21:42:01'),
(8, 'Silvia García', 'Topógrafo', '90123456', '987321654', 'Topografía', 40, '1800.00', '900.00', '45.00', '2000.00', '2023-11-17 21:42:01'),
(9, 'Ricardo Fernández', 'Jefe de Proyecto', '01234567', '987654321', 'Coordinación de Proyecto', 55, '3000.00', '1500.00', '70.00', '3300.00', '2023-11-17 21:42:01'),
(10, 'Valeria Vargas', 'Asistente Administrativo', '12345678', '987123456', 'Administración', 35, '1200.00', '600.00', '30.00', '1500.00', '2023-11-17 21:42:01'),
(11, 'Pablo Torres', 'Albañil', '23456789', '987654321', 'Albañilería', 40, '1200.00', '600.00', '30.00', '1500.00', '2023-11-17 21:42:01'),
(12, 'Sofía González', 'Electricista', '34567890', '987123456', 'Instalaciones Eléctricas', 35, '1500.00', '750.00', '40.00', '1800.00', '2023-11-17 21:42:01'),
(13, 'Diego Martínez', 'Carpintero', '45678901', '987654123', 'Carpintería', 38, '1300.00', '650.00', '35.00', '1600.00', '2023-11-17 21:42:01'),
(14, 'Ana Rodríguez', 'Plomero', '56789012', '987321654', 'Fontanería', 42, '1400.00', '700.00', '38.00', '1700.00', '2023-11-17 21:42:01'),
(15, 'Carlos López', 'Pintor', '67890123', '987654321', 'Pintura', 30, '1100.00', '550.00', '25.00', '1300.00', '2023-11-17 21:42:01'),
(16, 'Laura Ramírez', 'Arquitecto', '78901234', '987123456', 'Diseño Arquitectónico', 45, '2000.00', '1000.00', '50.00', '2200.00', '2023-11-17 21:42:01'),
(17, 'Javier Torres', 'Ingeniero Civil', '89012345', '987654123', 'Dirección de Obra', 50, '2500.00', '1250.00', '60.00', '2800.00', '2023-11-17 21:42:01'),
(18, 'Marta García', 'Topógrafo', '90123456', '987321654', 'Topografía', 40, '1800.00', '900.00', '45.00', '2000.00', '2023-11-17 21:42:01'),
(19, 'Ricardo Fernández', 'Jefe de Proyecto', '01234567', '987654321', 'Coordinación de Proyecto', 55, '3000.00', '1500.00', '70.00', '3300.00', '2023-11-17 21:42:01'),
(20, 'Valeria Vargas', 'Asistente Administrativo', '12345678', '987123456', 'Administración', 35, '1200.00', '600.00', '30.00', '1500.00', '2023-11-17 21:42:01'),
(21, 'Alicia Gómez', 'Albañil', '34567890', '987654321', 'Albañilería', 40, '1200.00', '600.00', '30.00', '1500.00', '2023-11-17 21:43:15'),
(22, 'Roberto Pérez', 'Electricista', '45678901', '987123456', 'Instalaciones Eléctricas', 35, '1500.00', '750.00', '40.00', '1800.00', '2023-11-17 21:43:15'),
(23, 'Isabella Rodríguez', 'Carpintero', '56789012', '987654123', 'Carpintería', 38, '1300.00', '650.00', '35.00', '1600.00', '2023-11-17 21:43:15'),
(24, 'Fernando López', 'Plomero', '67890123', '987321654', 'Fontanería', 42, '1400.00', '700.00', '38.00', '1700.00', '2023-11-17 21:43:15'),
(25, 'Sandra García', 'Pintor', '78901234', '987654321', 'Pintura', 30, '1100.00', '550.00', '25.00', '1300.00', '2023-11-17 21:43:15'),
(26, 'Miguel Ramírez', 'Arquitecto', '89012345', '987123456', 'Diseño Arquitectónico', 45, '2000.00', '1000.00', '50.00', '2200.00', '2023-11-17 21:43:15'),
(27, 'Vanessa Torres', 'Ingeniero Civil', '90123456', '987654123', 'Dirección de Obra', 50, '2500.00', '1250.00', '60.00', '2800.00', '2023-11-17 21:43:15'),
(28, 'Eduardo Fernández', 'Topógrafo', '01234567', '987321654', 'Topografía', 40, '1800.00', '900.00', '45.00', '2000.00', '2023-11-17 21:43:15'),
(29, 'Luisa González', 'Jefe de Proyecto', '12345678', '987654321', 'Coordinación de Proyecto', 55, '3000.00', '1500.00', '70.00', '3300.00', '2023-11-17 21:43:15'),
(30, 'Carlos Martínez', 'Asistente Administrativo', '23456789', '987123456', 'Administración', 35, '1200.00', '600.00', '30.00', '1500.00', '2023-11-17 21:43:15'),
(31, 'Jorge Chávez Huincho', 'Volquetero', '72243561', '(555) 123-45', 'Chofer', 8, '1500', '400', '50', '2000', '2023-11-17 21:44:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `perfil` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `usuario`, `password`, `perfil`, `estado`, `ultimo_login`, `fecha`) VALUES
(1, 'Jorge Chávez Huincho', 'admin@admin.com', '$2a$07$asxx54ahjppf45sd87a5auUT6aJXA0AIEmZ0IwDqQ544.p3yGlkI.', 'Administrador', 1, '2023-11-19 07:20:52', '2023-11-19 12:20:52'),
(2, 'Juan Pérez', 'juan_perez', '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$', 'Administrador', 1, '2023-11-17 15:30:00', '2023-11-17 21:20:01'),
(3, 'María Gómez', 'maria_gomez', '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$', 'Especial', 1, '2023-11-16 10:45:00', '2023-11-17 21:20:01'),
(4, 'Carlos Rodríguez', 'carlos_rodriguez', '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$', 'Administrador', 0, '2023-11-15 08:20:00', '2023-11-17 21:20:13'),
(5, 'Ana López', 'ana_lopez', '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$', 'Especial', 1, '2023-11-14 12:00:00', '2023-11-17 21:20:14'),
(6, 'Pedro Ramírez', 'pedro_ramirez', '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$', 'Administrador', 1, '2023-11-13 17:30:00', '2023-11-17 21:20:15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `contacto_cliente`
--
ALTER TABLE `contacto_cliente`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `equipo_maqui`
--
ALTER TABLE `equipo_maqui`
  ADD PRIMARY KEY (`id_em`),
  ADD KEY `id_trabajador` (`id_trabajador`);

--
-- Indices de la tabla `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id_material`),
  ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `presupuesto`
--
ALTER TABLE `presupuesto`
  ADD PRIMARY KEY (`id_presu`),
  ADD KEY `id_proyecto` (`id_proyecto`);

--
-- Indices de la tabla `pres_materiales`
--
ALTER TABLE `pres_materiales`
  ADD PRIMARY KEY (`id_pres_mat`),
  ADD KEY `id_proyecto` (`id_proyecto`),
  ADD KEY `id_material` (`id_material`);

--
-- Indices de la tabla `pres_trabajadores`
--
ALTER TABLE `pres_trabajadores`
  ADD PRIMARY KEY (`id_pres_trab`),
  ADD KEY `id_proyecto` (`id_proyecto`),
  ADD KEY `id_trabajador` (`id_trabajador`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id_proyecto`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `terreno`
--
ALTER TABLE `terreno`
  ADD PRIMARY KEY (`id_terreno`),
  ADD KEY `id_proyecto` (`id_proyecto`);

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`id_trabajador`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `contacto_cliente`
--
ALTER TABLE `contacto_cliente`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `equipo_maqui`
--
ALTER TABLE `equipo_maqui`
  MODIFY `id_em` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `material`
--
ALTER TABLE `material`
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `presupuesto`
--
ALTER TABLE `presupuesto`
  MODIFY `id_presu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `pres_materiales`
--
ALTER TABLE `pres_materiales`
  MODIFY `id_pres_mat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `pres_trabajadores`
--
ALTER TABLE `pres_trabajadores`
  MODIFY `id_pres_trab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `terreno`
--
ALTER TABLE `terreno`
  MODIFY `id_terreno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  MODIFY `id_trabajador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `equipo_maqui`
--
ALTER TABLE `equipo_maqui`
  ADD CONSTRAINT `equipo_maqui_ibfk_1` FOREIGN KEY (`id_trabajador`) REFERENCES `trabajador` (`id_trabajador`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `material`
--
ALTER TABLE `material`
  ADD CONSTRAINT `material_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `presupuesto`
--
ALTER TABLE `presupuesto`
  ADD CONSTRAINT `presupuesto_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `proyecto` (`id_proyecto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pres_materiales`
--
ALTER TABLE `pres_materiales`
  ADD CONSTRAINT `pres_materiales_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `proyecto` (`id_proyecto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pres_materiales_ibfk_2` FOREIGN KEY (`id_material`) REFERENCES `material` (`id_material`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pres_trabajadores`
--
ALTER TABLE `pres_trabajadores`
  ADD CONSTRAINT `pres_trabajadores_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `proyecto` (`id_proyecto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pres_trabajadores_ibfk_2` FOREIGN KEY (`id_trabajador`) REFERENCES `trabajador` (`id_trabajador`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `proyecto_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `terreno`
--
ALTER TABLE `terreno`
  ADD CONSTRAINT `terreno_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `proyecto` (`id_proyecto`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
