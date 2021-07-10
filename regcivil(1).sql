-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-07-2021 a las 18:26:12
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `regcivil`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrativeunit`
--

CREATE TABLE `administrativeunit` (
  `idadministrativeunit` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `note` varchar(30) DEFAULT NULL,
  `fkheadline` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administrativeunit`
--

INSERT INTO `administrativeunit` (`idadministrativeunit`, `image`, `name`, `description`, `note`, `fkheadline`) VALUES
(1, '//placeimg.com/290/180/any', 'Coordinador de Salud', 'Planear, coordinar y dirigir las actividades de atención multidisciplinaria de acuerdo a las necesidades de salud de la población, a fin de optimizar el estado de salud de la misma.', 'Cerrado por COVID-19', 2),
(2, '//placeimg.com/290/180/any', 'secretaria particular', 'La Secretaría Particular es el área encargada de organizar la agenda y\r\npromover las relaciones públicas internas y externas del Presidente Municipal, a fin de\r\nfortalecer las relaciones de trabajo, compromiso, coordinación y colaboración', 'Cerrado por COVID-19', 2),
(3, '//placeimg.com/290/180/any', 'Secretario Del Ayuntamiento', 'La Secretaría del Ayuntamiento es el órgano de la administración municipal encargado de: \r\n- Atender y resolver los asuntos administrativos que le encomiende el ayuntamiento.\r\n- El manejo y cuidado del archivo general. - El registro y control de personal.', '', 2),
(4, '//placeimg.com/290/180/any', 'Secretario Técnico', 'Enlazar de forma coordinada las actividades programadas por el titular de la Secretaría, tanto al interior como al exterior de la Dependencia para brindar atención personal a productores agropecuarios y público en general.', NULL, 2),
(5, '//placeimg.com/290/180/any', 'Directora De Atención a las Mujeres', 'Asesorar legalmente y brindar acompañamiento jurídico personalizado a las mujeres, desde el inicio hasta la culminación de los procesos, en los casos que así lo ameriten. Coordinar, fomentar y dirigir programas de psicología, de acompañamiento y fortalecimiento emocional para las mujeres.', NULL, 2),
(6, '//placeimg.com/290/180/any', 'Directora De Finanzas', 'Responsable de la planificación, ejecución e información financieras.', NULL, 2),
(7, '//placeimg.com/290/180/any', 'Contraloría Municipal', 'Fiscalización, vigilancia y evaluación del Gasto Público.', NULL, 2),
(8, '//placeimg.com/290/180/any', 'Coordinador Del Instituto Municipal De Energía, Ag', 'Realizar investigación, desarrollar, adaptar y transferir tecnología, prestar servicios tecnológicos y preparar recursos humanos calificados para el manejo, conservación y rehabilitación del agua y su entorno, a fin de contribuir al desarrollo sustentable.', NULL, 2),
(9, '//placeimg.com/290/180/any', 'Coordinador De Asesores', 'Proporcionar la orientación, asesoría técnica y, en su caso, de apoyo logístico en actividades definidas o determinadas por el titular de la Dirección General.', NULL, 2),
(10, '//placeimg.com/290/180/any', 'Coordinador De Comunicación Social y Relaciones Pú', '- Administrar todas las actividades y estrategias pertinentes a las relaciones públicas.\r\n- Coordinar y establecer los sistemas de comunicación y difusión de las actividades del Ayuntamiento y de todas las áreas.', NULL, 2),
(11, '//placeimg.com/290/180/any', 'Coordinadora Del Instituto Municipal Del Deporte', '- Promover y ejecutar políticas públicas del deporte y la cultura física en el Municipio.\r\n- Establecer y coordinar la participación en el deporte y la cultura física de los trabajadores de las dependencias y entidades de la Administración Pública Municipal.', NULL, 2),
(12, '//placeimg.com/290/180/any', 'Coordinador De Modernización E Innovación', 'Realizar la planeación de proyectos, estudios y diagnósticos de modernización y calidad, para contribuir en la modernización de la Administración Pública Municipal, agilizar tiempos de atención, automatizar procesos, mejorar la infraestructura en las áreas de atención al público y elevar la calidad del servicio.', NULL, 2),
(13, '//placeimg.com/290/180/any', 'Director De Administración', 'Especialistas en la estrategia gerencial de la organización.\r\n- Controlar y supervisar.\r\n- Liderar equipos de trabajo.', NULL, 2),
(14, '//placeimg.com/290/180/any', 'Coordinador Del Sistema De Agua y Saneamiento (SAS', 'Coordinar acciones para la operación y mantenimiento de la infraestructura hidráulica y sanitaria, así como del control de la calidad del agua para proporcionar un eficiente servicio de distribución de agua potable y alcantarillado sanitario y pluvial a la población del Municipio de Centro.', NULL, 2),
(15, '//placeimg.com/290/180/any', 'Coordinador de Transparencia de Acceso a la Inform', 'Coordinación de la Administración Pública Municipal.\r\n- Cumplir con los mecanismos de transparencia.\r\n- Acceso a la información.\r\n- Protección de datos personales, rendición de cuentas y participación ciudadana. \r\nCon el fin de crear credibilidad en la sociedad poblana en la aplicación de los recursos públicos.', NULL, 2),
(16, '//placeimg.com/290/180/any', 'Coordinador De Promoción y Desarrollo Turístico', 'Organizar y promover la producción artesanal y la industria familiar y proponer los estímulos necesarios para su desarrollo.\r\n- Proponer, desarrollar y promover programas de desarrollo turístico.', NULL, 2),
(17, '//placeimg.com/290/180/any', 'Coordinadora De Movilidad Sustentable', '- Realizar acciones de negociación con los diversos agentes públicos y privados. - Generar y transmitir adecuadamente la información sobre la movilidad en el centro de trabajo y hacer la difusión oportuna.\r\n- Promover la edición de materiales informativos y divulgativos sobre la oferta de movilidad sostenible.', NULL, 2),
(18, '//placeimg.com/290/180/any', 'Coordinador De Limpia y Recolección De Residuos Só', 'Supervisar y verificar los servicios de almacenamiento, limpieza pública, recolección y transporte de los residuos sólidos, de acuerdo a los planes de operación (rutas, frecuencias, horarios, etc.) y normas vigentes, para evitar riesgos a la salud y el ambiente.', NULL, 2),
(19, '//placeimg.com/290/180/any', 'Coordinadora De Desarrollo Político', 'Coordina las actividades que permitan el análisis de los acontecimientos político‐sociales para generar recomendaciones que ayuden a la toma de decisiones a través del estudio e identificación de los problemas específicos en el municipio.', NULL, 2),
(20, '//placeimg.com/290/180/any', 'Coordinador De Protección Civil', 'Garantizar una adecuada gestión integral de riesgos que reduzca la vulnerabilidad ante los efectos de fenómenos naturales y antropogénicos.', NULL, 2),
(21, '//placeimg.com/290/180/any', 'Dirección De Fomento Económico y Turismo', 'Dirigir, coordinar y controlar la ejecución de los Programas de Fomento Industrial, Comercial y Turístico.', NULL, 2),
(22, '//placeimg.com/290/180/any', 'Dirección De Fomento Económico y Turismo', 'Dirigir, coordinar y controlar la ejecución de los Programas de Fomento Industrial, Comercial y Turístico.', NULL, 2),
(23, '//placeimg.com/290/180/any', 'Secretario Particular', '', NULL, 2),
(24, '//placeimg.com/290/180/any', 'Directora Del Sistema Municipal Para El Desarrollo', '', NULL, 2),
(25, '//placeimg.com/290/180/any', 'Directora De Educación, Cultura y Recreación', '', NULL, 2),
(26, '//placeimg.com/290/180/any', 'Director del Instituto De Planeación y Desarrollo ', '', NULL, 2),
(27, '//placeimg.com/290/180/any', 'Director De Obras, Ordenamiento Territorial y Serv', '', NULL, 2),
(28, '//placeimg.com/290/180/any', 'Directora De Protección Ambiental y Desarrollo Sus', '', NULL, 2),
(29, '//placeimg.com/290/180/any', 'Director De Fomento Económico y Turismo', '', NULL, 2),
(30, '//placeimg.com/290/180/any', 'Director De Asuntos Indígenas', '', NULL, 2),
(31, '//placeimg.com/290/180/any', 'Director del Instituto De Planeación y Desarrollo ', '', NULL, 2),
(32, '//placeimg.com/290/180/any', 'Director De Asuntos Indígenas', '', NULL, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `group_code` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES
('/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('//*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('//controller', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('//crud', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('//extension', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('//form', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('//index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('//model', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('//module', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/asset/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/asset/compress', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/asset/template', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/cache/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/cache/flush', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/cache/flush-all', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/cache/flush-schema', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/cache/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/dashboard/*', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/dashboard/create', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/dashboard/delete', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/dashboard/index', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/dashboard/update', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/dashboard/view', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/debug/*', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/debug/default/*', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/debug/default/db-explain', 3, NULL, NULL, NULL, 1510367287, 1510367287, NULL),
('/debug/default/download-mail', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/debug/default/index', 3, NULL, NULL, NULL, 1510367287, 1510367287, NULL),
('/debug/default/toolbar', 3, NULL, NULL, NULL, 1510367287, 1510367287, NULL),
('/debug/default/view', 3, NULL, NULL, NULL, 1510367287, 1510367287, NULL),
('/debug/user/*', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/debug/user/reset-identity', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/debug/user/set-identity', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/fixture/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/fixture/load', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/fixture/unload', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gii/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gii/default/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gii/default/action', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gii/default/diff', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gii/default/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gii/default/preview', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gii/default/view', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gridview/*', 3, NULL, NULL, NULL, 1510367287, 1510367287, NULL),
('/gridview/export/*', 3, NULL, NULL, NULL, 1510367287, 1510367287, NULL),
('/gridview/export/download', 3, NULL, NULL, NULL, 1510367287, 1510367287, NULL),
('/hello/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/hello/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/help/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/help/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/message/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/message/config', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/message/extract', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/create', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/down', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/history', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/mark', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/new', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/redo', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/to', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/up', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/site/*', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/site/about', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/site/captcha', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/site/contact', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/site/dash', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/site/error', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/site/index', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/site/login', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/site/logout', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/user-management/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/bulk-activate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/bulk-deactivate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/bulk-delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/create', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/grid-page-size', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/grid-sort', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/toggle-attribute', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/update', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/view', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/captcha', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/change-own-password', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/confirm-email', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/confirm-email-receive', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/confirm-registration-email', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/login', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/logout', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/password-recovery', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/password-recovery-receive', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/registration', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/bulk-activate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/bulk-deactivate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/bulk-delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/create', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/grid-page-size', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/grid-sort', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/refresh-routes', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/set-child-permissions', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/set-child-routes', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/toggle-attribute', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/update', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/view', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/bulk-activate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/bulk-deactivate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/bulk-delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/create', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/grid-page-size', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/grid-sort', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/set-child-permissions', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/set-child-roles', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/toggle-attribute', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/update', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/view', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-permission/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-permission/set', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-permission/set-roles', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/bulk-activate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/bulk-deactivate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/bulk-delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/create', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/grid-page-size', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/grid-sort', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/toggle-attribute', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/update', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/view', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/bulk-activate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/bulk-deactivate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/bulk-delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/change-password', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/create', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/grid-page-size', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/grid-sort', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/toggle-attribute', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/update', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/view', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('Admin', 1, 'Admin', NULL, NULL, 1426062189, 1426062189, NULL),
('assignRolesToUsers', 2, 'Assign roles to users', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('bindUserToIp', 2, 'Bind user to IP', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('changeOwnPassword', 2, 'Change own password', NULL, NULL, 1426062189, 1426062189, 'userCommonPermissions'),
('changeUserPassword', 2, 'Change user password', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('commonPermission', 2, 'Common permission', NULL, NULL, 1426062188, 1426062188, NULL),
('createUsers', 2, 'Create users', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('deleteUsers', 2, 'Delete users', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('editUserEmail', 2, 'Edit user email', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('editUsers', 2, 'Edit users', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('viewRegistrationIp', 2, 'View registration IP', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('viewUserEmail', 2, 'View user email', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('viewUserRoles', 2, 'View user roles', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('viewUsers', 2, 'View users', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('viewVisitLog', 2, 'View visit log', NULL, NULL, 1426062189, 1426062189, 'userManagement');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('Admin', 'assignRolesToUsers'),
('Admin', 'changeOwnPassword'),
('Admin', 'changeUserPassword'),
('Admin', 'createUsers'),
('Admin', 'deleteUsers'),
('Admin', 'editUsers'),
('Admin', 'viewUsers'),
('assignRolesToUsers', '/user-management/user-permission/set'),
('assignRolesToUsers', '/user-management/user-permission/set-roles'),
('assignRolesToUsers', 'viewUserRoles'),
('assignRolesToUsers', 'viewUsers'),
('changeOwnPassword', '/user-management/auth/change-own-password'),
('changeUserPassword', '/user-management/user/change-password'),
('changeUserPassword', 'viewUsers'),
('createUsers', '/user-management/user/create'),
('createUsers', 'viewUsers'),
('deleteUsers', '/user-management/user/bulk-delete'),
('deleteUsers', '/user-management/user/delete'),
('deleteUsers', 'viewUsers'),
('editUserEmail', 'viewUserEmail'),
('editUsers', '/user-management/user/bulk-activate'),
('editUsers', '/user-management/user/bulk-deactivate'),
('editUsers', '/user-management/user/update'),
('editUsers', 'viewUsers'),
('viewUsers', '/user-management/user/grid-page-size'),
('viewUsers', '/user-management/user/index'),
('viewUsers', '/user-management/user/view'),
('viewVisitLog', '/user-management/user-visit-log/grid-page-size'),
('viewVisitLog', '/user-management/user-visit-log/index'),
('viewVisitLog', '/user-management/user-visit-log/view');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_item_group`
--

CREATE TABLE `auth_item_group` (
  `code` varchar(64) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `auth_item_group`
--

INSERT INTO `auth_item_group` (`code`, `name`, `created_at`, `updated_at`) VALUES
('userCommonPermissions', 'User common permission', 1426062189, 1426062189),
('userManagement', 'User management', 1426062189, 1426062189);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `file`
--

CREATE TABLE `file` (
  `idfile` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `file` varchar(255) NOT NULL,
  `format` varchar(5) NOT NULL,
  `size` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `file`
--

INSERT INTO `file` (`idfile`, `name`, `file`, `format`, `size`) VALUES
(1, 'INGLES-3A-2021B', 'INGLES-3A-2021B.pdf', '.pdf', '30 KB'),
(2, 'INGLES-3A-2021B', 'INGLES-3A-2021B.docx', '.docx', '4 MB'),
(3, 'shampoo negro', 'shampoonegro.psd', '.psd', '3 MB'),
(4, 'Yii2_03_Plantilla para cambiar Diseño', 'Yii2_03_PlantillaparacambiarDiseño.pdf', '.pdf', '56 KB');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobtitle`
--

CREATE TABLE `jobtitle` (
  `idjobtitle` int(11) NOT NULL,
  `jobtitle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `jobtitle`
--

INSERT INTO `jobtitle` (`idjobtitle`, `jobtitle`) VALUES
(1, 'Titular'),
(2, 'Secretaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notifications`
--

CREATE TABLE `notifications` (
  `idnotifications` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `message` varchar(50) DEFAULT NULL,
  `datatime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `read` tinyint(4) NOT NULL,
  `fkprofile` int(11) NOT NULL,
  `fkoffice` int(11) NOT NULL,
  `fkadministrativeunit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `office`
--

CREATE TABLE `office` (
  `idoffice` int(11) NOT NULL,
  `expedient` varchar(45) NOT NULL,
  `nooffice` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `creationdate` datetime NOT NULL,
  `category` varchar(10) NOT NULL,
  `fkstateoffice` int(11) NOT NULL,
  `fkadministrativeunit` int(11) NOT NULL,
  `shifteddate` datetime DEFAULT NULL,
  `fkto` int(11) DEFAULT NULL,
  `reviseddate` datetime DEFAULT NULL,
  `observations` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `office`
--

INSERT INTO `office` (`idoffice`, `expedient`, `nooffice`, `subject`, `creationdate`, `category`, `fkstateoffice`, `fkadministrativeunit`, `shifteddate`, `fkto`, `reviseddate`, `observations`) VALUES
(1, 'NO/78/5454', 1432, 'Nacimiento de un bebe', '2021-07-06 20:05:48', 'Interno', 1, 3, NULL, NULL, '2021-07-08 16:37:58', 'Hey'),
(2, 'NO/78/5454', 1432, 'dsdsdsaddsdsadasdsadsdsaddas', '2021-07-06 13:23:56', 'Interno', 4, 1, NULL, NULL, NULL, NULL),
(3, 'NO/78/5454', 1432, 'dsdsdsaddsdsadasdsadsdsaddasdsdsds', '2021-07-06 13:26:35', 'Interno', 4, 1, NULL, NULL, NULL, NULL),
(4, 'NO/78/5454', 1432, 'Nacimiento de un bebe', '2021-07-06 13:32:00', 'Interno', 3, 1, NULL, NULL, NULL, NULL),
(5, 'NO/78/5454', 1432, 'Nacimiento de un bebe', '2021-07-06 13:32:40', 'Interno', 3, 1, NULL, NULL, NULL, NULL),
(6, 'NO/78/5454', 1432, 'dsdsdsaddsdsadasdsadsdsaddasdsdsds', '2021-07-06 21:22:45', 'Interno', 4, 1, NULL, NULL, NULL, NULL),
(7, 'NO/78/5454', 1432, 'dsdsdsaddsdsadasdsadsdsaddasdsdsds', '2021-07-06 21:22:45', 'Interno', 4, 1, NULL, NULL, NULL, NULL),
(8, 'NO/78/5454', 1432, 'dsdsdsaddsdsadasdsadsdsaddasdsdsds', '2021-07-06 21:22:45', 'Interno', 4, 1, NULL, NULL, NULL, NULL),
(9, 'NO/78/5454', 123, 'dsdsdsaddsdsadasdsadsdsaddasdsdsds', '2021-07-06 21:25:57', 'Interno', 4, 1, NULL, NULL, NULL, NULL),
(10, 'NO/78/5454', 123, 'Nacimiento de un bebe', '2021-07-06 21:26:32', 'Interno', 4, 1, NULL, NULL, NULL, NULL),
(11, 'NO/78/5454', 1432, 'dsdsdsaddsdsadasdsadsdsaddasdsdsds', '2021-07-06 21:27:30', 'Interno', 4, 1, NULL, NULL, NULL, NULL),
(12, 'NO/78/5454', 1432, 'dsdsdsaddsdsadasdsadsdsaddas', '2021-07-06 21:28:39', 'Interno', 4, 1, NULL, NULL, NULL, NULL),
(13, 'NO/78/5454', 1432, 'dsdsdsaddsdsadasdsadsdsaddas', '2021-07-06 21:28:39', 'Interno', 4, 1, NULL, NULL, NULL, NULL),
(14, 'NO/78/5454', 1432, 'dsdsdsaddsdsadasdsadsdsaddasdsdsds', '2021-07-06 21:42:19', 'Interno', 4, 1, NULL, NULL, NULL, NULL),
(15, 'NO/78/5454', 1432, 'Nacimiento de un bebe', '2021-07-06 21:47:20', 'Interno', 4, 1, NULL, NULL, NULL, NULL),
(16, 'NO/78/5454', 1432, 'dsdsdsaddsdsadasdsadsdsaddas', '2021-07-06 21:47:47', 'Interno', 4, 1, NULL, NULL, NULL, NULL),
(17, 'NO/78/5454', 1432, 'dsdsdsaddsdsadasdsadsdsaddas', '2021-07-06 21:47:47', 'Interno', 4, 1, NULL, NULL, NULL, NULL),
(18, 'NO/78/5454', 1432, 'dsdsdsaddsdsadasdsadsdsaddasdsdsds', '2021-07-06 21:54:25', 'Interno', 4, 1, NULL, NULL, NULL, NULL),
(19, 'NO/78/5454', 1432, 'dsdsdsaddsdsadasdsadsdsaddasdsdsds', '2021-07-06 21:54:25', 'Interno', 4, 1, NULL, NULL, NULL, NULL),
(20, 'NO/78/5454', 123, 'Nacimiento de un bebe', '2021-07-06 21:57:06', 'Interno', 4, 1, NULL, NULL, NULL, NULL),
(21, 'NO/78/5454', 123, 'Nacimiento de un bebe', '2021-07-06 21:57:06', 'Interno', 4, 1, NULL, NULL, NULL, NULL),
(22, 'NO/78/5454', 1432, 'Nacimiento de un bebe', '2021-07-06 21:58:42', 'Interno', 4, 1, NULL, NULL, NULL, NULL),
(23, 'NO/78/5454', 1432, 'Nacimiento de un bebe', '2021-07-06 21:58:42', 'Interno', 4, 1, NULL, NULL, NULL, NULL),
(24, 'NO/78/5454', 1432, 'Nacimiento de un bebe', '2021-07-06 22:05:28', 'Interno', 4, 1, NULL, NULL, NULL, NULL),
(25, 'NO/78/5454', 1432, 'dsdsdsaddsdsadasdsadsdsaddasdsdsds', '2021-07-06 22:17:01', 'Interno', 4, 1, NULL, NULL, NULL, NULL),
(26, 'NO/78/5455', 1432, 'Nacimiento de un bebe', '2021-07-06 22:25:13', 'Interno', 4, 1, NULL, NULL, NULL, NULL),
(27, 'NO/78/5456', 1432, 'Nacimiento de un bebe', '2021-07-06 22:25:39', 'Interno', 4, 1, NULL, NULL, NULL, NULL),
(28, 'NO/78/5460', 1432, 'Nacimiento de un bebe', '2021-07-06 23:09:48', 'Interno', 3, 1, '2021-07-08 17:36:14', 2, NULL, ''),
(29, 'NO/78/5460', 2131, 'Cambio de no se que', '2021-07-08 17:22:21', 'Interno', 2, 1, '2021-07-08 21:21:21', 2, NULL, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `officefile`
--

CREATE TABLE `officefile` (
  `idoffice` int(11) NOT NULL,
  `idfile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `officefile`
--

INSERT INTO `officefile` (`idoffice`, `idfile`) VALUES
(2, 1),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profile`
--

CREATE TABLE `profile` (
  `idprofile` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthdate` date NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `review` text DEFAULT NULL,
  `fkjobtitle` int(11) NOT NULL,
  `fkworksin` int(11) NOT NULL,
  `fkuser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profile`
--

INSERT INTO `profile` (`idprofile`, `name`, `lastname`, `gender`, `birthdate`, `phone`, `address`, `photo`, `review`, `fkjobtitle`, `fkworksin`, `fkuser`) VALUES
(2, 'Carlos Daniel', 'Angel Padilla', 'Masculino', '1998-04-24', '3', 'aqui', 'resourcesFiles/avatar/default/avatar1.png', NULL, 1, 1, 3),
(3, 'Yesenia', 'Diaz Hernandez', 'Femenino', '2021-07-22', '9341102787', NULL, 'foto.jpg', NULL, 2, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stateoffice`
--

CREATE TABLE `stateoffice` (
  `idstateoffice` int(11) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `stateoffice`
--

INSERT INTO `stateoffice` (`idstateoffice`, `state`) VALUES
(1, 'Revisado'),
(2, 'Pendiente'),
(3, 'Turnado'),
(4, 'Rechazado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `confirmation_token` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `superadmin` smallint(1) DEFAULT 0,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `registration_ip` varchar(15) DEFAULT NULL,
  `bind_to_ip` varchar(255) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `email_confirmed` smallint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `confirmation_token`, `status`, `superadmin`, `created_at`, `updated_at`, `registration_ip`, `bind_to_ip`, `email`, `email_confirmed`) VALUES
(1, 'superadmin', 'kz2px152FAWlkHbkZoCiXgBAd-S8SSjF', '$2y$13$MhlYe12xkGFnSeK0sO2up.Y9kAD9Ct6JS1i9VLP7YAqd1dFsSylz2', NULL, 1, 1, 1426062188, 1426062188, NULL, NULL, NULL, 0),
(3, 'admin', '1oIGEPoZEEVLfKSSFO2FWd0lhnV2Le65', '$2y$13$TUkhVrVprn4jRFqvFmiQ9e9eHdZrp4axsWa00WQTDP8UE7SML6Bte', NULL, 1, 1, 1625366418, 1625366418, '127.0.0.1', '', 'admin@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_visit_log`
--

CREATE TABLE `user_visit_log` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `language` char(2) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `visit_time` int(11) NOT NULL,
  `browser` varchar(30) DEFAULT NULL,
  `os` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user_visit_log`
--

INSERT INTO `user_visit_log` (`id`, `token`, `ip`, `language`, `user_agent`, `user_id`, `visit_time`, `browser`, `os`) VALUES
(1, '60e11f55b4e8d', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:89.0) Gecko/20100101 Firefox/89.0', 1, 1625366357, 'Firefox', 'Windows'),
(2, '60e12d7c4e85b', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:89.0) Gecko/20100101 Firefox/89.0', 3, 1625369980, 'Firefox', 'Windows'),
(3, '60e134d98d6e2', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:89.0) Gecko/20100101 Firefox/89.0', 3, 1625371865, 'Firefox', 'Windows'),
(4, '60e1378a4d7c9', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:89.0) Gecko/20100101 Firefox/89.0', 3, 1625372554, 'Firefox', 'Windows'),
(5, '60e1d60d06ed8', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:90.0) Gecko/20100101 Firefox/90.0', 3, 1625413133, 'Firefox', 'Windows'),
(6, '60e1ff8755c64', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:90.0) Gecko/20100101 Firefox/90.0', 3, 1625423751, 'Firefox', 'Windows'),
(7, '60e211a3acd82', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:90.0) Gecko/20100101 Firefox/90.0', 3, 1625428387, 'Firefox', 'Windows'),
(8, '60e227c0e512b', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:90.0) Gecko/20100101 Firefox/90.0', 3, 1625434048, 'Firefox', 'Windows'),
(9, '60e31c54ed3d3', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 3, 1625496660, 'Chrome', 'Windows'),
(10, '60e36ee8dc203', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:90.0) Gecko/20100101 Firefox/90.0', 3, 1625517800, 'Firefox', 'Windows'),
(11, '60e46b771d359', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:90.0) Gecko/20100101 Firefox/90.0', 3, 1625582455, 'Firefox', 'Windows'),
(12, '60e46fc765d65', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:90.0) Gecko/20100101 Firefox/90.0', 3, 1625583559, 'Firefox', 'Windows'),
(13, '60e64d682afe8', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:90.0) Gecko/20100101 Firefox/90.0', 3, 1625705832, 'Firefox', 'Windows'),
(14, '60e717e0ce1b2', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:90.0) Gecko/20100101 Firefox/90.0', 3, 1625757664, 'Firefox', 'Windows'),
(15, '60e764a98eae1', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:90.0) Gecko/20100101 Firefox/90.0', 3, 1625777321, 'Firefox', 'Windows'),
(16, '60e8b21a55404', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:90.0) Gecko/20100101 Firefox/90.0', 3, 1625862682, 'Firefox', 'Windows'),
(17, '60e9c9c10b606', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:90.0) Gecko/20100101 Firefox/90.0', 3, 1625934273, 'Firefox', 'Windows');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrativeunit`
--
ALTER TABLE `administrativeunit`
  ADD PRIMARY KEY (`idadministrativeunit`),
  ADD KEY `fk_administrativeunit_profile1_idx` (`fkheadline`);

--
-- Indices de la tabla `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`),
  ADD KEY `fk_auth_item_group_code` (`group_code`);

--
-- Indices de la tabla `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indices de la tabla `auth_item_group`
--
ALTER TABLE `auth_item_group`
  ADD PRIMARY KEY (`code`);

--
-- Indices de la tabla `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indices de la tabla `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`idfile`);

--
-- Indices de la tabla `jobtitle`
--
ALTER TABLE `jobtitle`
  ADD PRIMARY KEY (`idjobtitle`);

--
-- Indices de la tabla `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`idnotifications`),
  ADD KEY `fk_notifications_profile1_idx` (`fkprofile`),
  ADD KEY `fk_notifications_office1_idx` (`fkoffice`),
  ADD KEY `fk_notifications_administrativeunit1_idx` (`fkadministrativeunit`);

--
-- Indices de la tabla `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`idoffice`),
  ADD KEY `fk_office_stateoffice1_idx` (`fkstateoffice`),
  ADD KEY `fk_office_administrativeunit1_idx` (`fkadministrativeunit`),
  ADD KEY `fk_office_profile1_idx` (`fkto`);

--
-- Indices de la tabla `officefile`
--
ALTER TABLE `officefile`
  ADD PRIMARY KEY (`idoffice`,`idfile`),
  ADD KEY `fk_office_has_file_file1_idx` (`idfile`),
  ADD KEY `fk_office_has_file_office_idx` (`idoffice`);

--
-- Indices de la tabla `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`idprofile`),
  ADD KEY `fk_profile_position1_idx` (`fkjobtitle`),
  ADD KEY `fk_profile_administrativeunit1_idx` (`fkworksin`),
  ADD KEY `fkuser` (`fkuser`);

--
-- Indices de la tabla `stateoffice`
--
ALTER TABLE `stateoffice`
  ADD PRIMARY KEY (`idstateoffice`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user_visit_log`
--
ALTER TABLE `user_visit_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrativeunit`
--
ALTER TABLE `administrativeunit`
  MODIFY `idadministrativeunit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `file`
--
ALTER TABLE `file`
  MODIFY `idfile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `jobtitle`
--
ALTER TABLE `jobtitle`
  MODIFY `idjobtitle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `notifications`
--
ALTER TABLE `notifications`
  MODIFY `idnotifications` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `office`
--
ALTER TABLE `office`
  MODIFY `idoffice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `profile`
--
ALTER TABLE `profile`
  MODIFY `idprofile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `stateoffice`
--
ALTER TABLE `stateoffice`
  MODIFY `idstateoffice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `user_visit_log`
--
ALTER TABLE `user_visit_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrativeunit`
--
ALTER TABLE `administrativeunit`
  ADD CONSTRAINT `fk_administrativeunit_profile1` FOREIGN KEY (`fkheadline`) REFERENCES `profile` (`idprofile`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_assignment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_ibfk_2` FOREIGN KEY (`group_code`) REFERENCES `auth_item_group` (`code`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `fk_notifications_administrativeunit1` FOREIGN KEY (`fkadministrativeunit`) REFERENCES `administrativeunit` (`idadministrativeunit`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_notifications_office1` FOREIGN KEY (`fkoffice`) REFERENCES `office` (`idoffice`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_notifications_profile1` FOREIGN KEY (`fkprofile`) REFERENCES `profile` (`idprofile`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `office`
--
ALTER TABLE `office`
  ADD CONSTRAINT `fk_office_administrativeunit1` FOREIGN KEY (`fkadministrativeunit`) REFERENCES `administrativeunit` (`idadministrativeunit`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_office_profile1` FOREIGN KEY (`fkto`) REFERENCES `profile` (`idprofile`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_office_stateoffice1` FOREIGN KEY (`fkstateoffice`) REFERENCES `stateoffice` (`idstateoffice`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `officefile`
--
ALTER TABLE `officefile`
  ADD CONSTRAINT `fk_office_has_file_file1` FOREIGN KEY (`idfile`) REFERENCES `file` (`idfile`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_office_has_file_office` FOREIGN KEY (`idoffice`) REFERENCES `office` (`idoffice`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `fk_profile_administrativeunit1` FOREIGN KEY (`fkworksin`) REFERENCES `administrativeunit` (`idadministrativeunit`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_position1` FOREIGN KEY (`fkjobtitle`) REFERENCES `jobtitle` (`idjobtitle`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`fkuser`) REFERENCES `user` (`id`);

--
-- Filtros para la tabla `user_visit_log`
--
ALTER TABLE `user_visit_log`
  ADD CONSTRAINT `user_visit_log_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
