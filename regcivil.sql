-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-07-2021 a las 02:17:16
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
  `description` varchar(237) NOT NULL,
  `note` varchar(30) DEFAULT NULL,
  `fkheadline` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administrativeunit`
--

INSERT INTO `administrativeunit` (`idadministrativeunit`, `image`, `name`, `description`, `note`, `fkheadline`) VALUES
(1, '-kFfKvb1_NIjf0Q4dYmgW38E6lz9dBc8.jpg', 'Coordinación de Salud', 'Planear, coordinar y dirigir las actividades de atención multidisciplinaria de acuerdo a las necesidades de salud de la población, a fin de optimizar el estado de salud de la misma.', 'Cerrado por COVID-19', 2),
(2, '-kFfKvb1_NIjf0Q4dYmgW38E6lz9dBc8.jpg', 'Secretaría Particular', 'La Secretaría Particular es el área encargada de organizar la agenda y\r\npromover las relaciones públicas internas y externas del Presidente Municipal, a fin de\r\nfortalecer las relaciones de trabajo, compromiso, coordinación y colaboració', 'Cerrado por COVID-19', 2),
(3, '-kFfKvb1_NIjf0Q4dYmgW38E6lz9dBc8.jpg', 'Secretaría De Ayuntamiento', 'La Secretaría del Ayuntamiento es el órgano de la administración municipal encargado de: \r\n- Atender y resolver los asuntos administrativos que le encomiende el ayuntamiento.\r\n- El manejo y cuidado del archivo general. - El registro y co', '', 2),
(4, '-kFfKvb1_NIjf0Q4dYmgW38E6lz9dBc8.jpg', 'Autoridad Municipal De Mejora Regulatoria', 'Impulsar el desarrollo económico del municipio de Centro, la competitividad y \r\npromover el perfeccionamiento de mejores prácticas regulatorias al interior de la \r\nAdministración Municipal que en suma generen mejor calidad de vida a los ', 'Cerrado por COVID-19', 2),
(5, '-kFfKvb1_NIjf0Q4dYmgW38E6lz9dBc8.jpg', 'Coordinación De Asesores', 'Proporcionar la orientación, asesoría técnica y, en su caso, de apoyo logístico en actividades definidas o determinadas por el titular de la Dirección General.', NULL, 2),
(6, '-kFfKvb1_NIjf0Q4dYmgW38E6lz9dBc8.jpg', 'Coordinación De Comunicación Social y Relaciones P', '- Administrar todas las actividades y estrategias pertinentes a las relaciones públicas.\r\n- Coordinar y establecer los sistemas de comunicación y difusión de las actividades del Ayuntamiento y de todas las áreas.', NULL, 2),
(7, '-kFfKvb1_NIjf0Q4dYmgW38E6lz9dBc8.jpg', 'Contraloría Municipal', 'Fiscalización, vigilancia y evaluación del Gasto Público.', NULL, 2),
(8, '-kFfKvb1_NIjf0Q4dYmgW38E6lz9dBc8.jpg', 'Coordinación De Modernización E Innovación', 'Realizar la planeación de proyectos, estudios y diagnósticos de modernización y calidad, para contribuir en la modernización de la Administración Pública Municipal, agilizar tiempos de atención, automatizar procesos, mejorar la infraestr', NULL, 2),
(9, '-kFfKvb1_NIjf0Q4dYmgW38E6lz9dBc8.jpg', 'Coordinación Del Sistema De Agua y Saneamiento (SA', 'Coordinar acciones para la operación y mantenimiento de la infraestructura hidráulica y sanitaria, así como del control de la calidad del agua para proporcionar un eficiente servicio de distribución de agua potable y alcantarillado sanit', 'Cerrado por COVID-19', 2),
(10, '-kFfKvb1_NIjf0Q4dYmgW38E6lz9dBc8.jpg', 'Coordinación De Transparencia Y Acceso A La Inform', 'Coordinación de la Administración Pública Municipal.\r\n- Cumplir con los mecanismos de transparencia.\r\n- Acceso a la información.\r\n- Protección de datos personales, rendición de cuentas y participación ciudadana. \r\nCon el fin de crear cre', NULL, 2),
(11, '-kFfKvb1_NIjf0Q4dYmgW38E6lz9dBc8.jpg', 'Coordinación De Promoción y Desarrollo Turístico M', 'Organizar y promover la producción artesanal y la industria familiar y proponer los estímulos necesarios para su desarrollo.\r\n- Proponer, desarrollar y promover programas de desarrollo turístico.', 'Cerrado por COVID-19', 2),
(12, '-kFfKvb1_NIjf0Q4dYmgW38E6lz9dBc8.jpg', 'Coordinación De Movilidad Sustentable Y Espacio Pú', '- Realizar acciones de negociación con los diversos agentes públicos y privados. - Generar y transmitir adecuadamente la información sobre la movilidad en el centro de trabajo y hacer la difusión oportuna.\r\n- Promover la edición de mater', 'Cerrado por COVID-19', 2),
(13, '-kFfKvb1_NIjf0Q4dYmgW38E6lz9dBc8.jpg', 'Coordinación De Limpia y Recolección De Residuos S', 'Supervisar y verificar los servicios de almacenamiento, limpieza pública, recolección y transporte de los residuos sólidos, de acuerdo a los planes de operación (rutas, frecuencias, horarios, etc.) y normas vigentes, para evitar riesgos ', 'Cerrado por COVID-19', 2),
(14, '-kFfKvb1_NIjf0Q4dYmgW38E6lz9dBc8.jpg', 'Coordinación De Protección Civil', 'Garantizar una adecuada gestión integral de riesgos que reduzca la vulnerabilidad ante los efectos de fenómenos naturales y antropogénicos.', 'Cerrado por COVID-19', 2),
(15, '-kFfKvb1_NIjf0Q4dYmgW38E6lz9dBc8.jpg', 'Dirección De Atención a las Mujeres', 'Asesorar legalmente y brindar acompañamiento jurídico personalizado a las mujeres, desde el inicio hasta la culminación de los procesos, en los casos que así lo ameriten. Coordinar, fomentar y dirigir programas de psicología, de acompaña', 'Cerrado por COVID-19', 2),
(16, '-kFfKvb1_NIjf0Q4dYmgW38E6lz9dBc8.jpg', 'Dirección De Finanzas', 'Responsable de la planificación, ejecución e información financieras.', 'Cerrado por COVID-19', 2),
(17, '-kFfKvb1_NIjf0Q4dYmgW38E6lz9dBc8.jpg', 'Dirección De Administración', 'Especialistas en la estrategia gerencial de la organización.\r\n- Controlar y supervisar.\r\n- Liderar equipos de trabajo.', 'Cerrado por COVID-19', 2),
(18, '-kFfKvb1_NIjf0Q4dYmgW38E6lz9dBc8.jpg', 'Dirección De Fomento Económico y Turismo', 'Dirigir, coordinar y controlar la ejecución de los Programas de Fomento Industrial, Comercial y Turístico.', NULL, 2),
(19, '-kFfKvb1_NIjf0Q4dYmgW38E6lz9dBc8.jpg', 'Coordinación De Desarrollo Político', 'Coordina las actividades que permitan el análisis de los acontecimientos político‐sociales para generar recomendaciones que ayuden a la toma de decisiones a través del estudio e identificación de los problemas específicos en el municipio', NULL, 2),
(20, '-kFfKvb1_NIjf0Q4dYmgW38E6lz9dBc8.jpg', 'Dirección De Educación, Cultura y Recreación', '-Planear, coordinar, dirigir, controlar y evaluar los programas de las áreas de educación, cultura, deporte y recreación.', 'Cerrado por COVID-19', 2),
(21, '-kFfKvb1_NIjf0Q4dYmgW38E6lz9dBc8.jpg', 'Dirección De Obras, Ordenamiento Territorial y Ser', 'Realizar acciones de obra pública que contribuyan al desarrollo del Municipio de \r\nCentro, bajo esquemas que propicien la optimización de recursos públicos que \r\npermitan dar respuesta a la ciudadanía, cumpliendo con los principios de ho', 'Cerrado por COVID-19', 2),
(22, '-kFfKvb1_NIjf0Q4dYmgW38E6lz9dBc8.jpg', 'Dirección De Protección Ambiental y Desarrollo Sus', 'Creada como enlace para realizar estudios y propuestas de gestión al medio ambiente, para ello se realizan Convenios y Acuerdos con las Instituciones Educativas Superiores.', 'Cerrado por COVID-19', 2),
(23, '-kFfKvb1_NIjf0Q4dYmgW38E6lz9dBc8.jpg', 'Dirección De Asuntos Indígenas', 'Encargada de promover y proteger el desarrollo de su lengua, cultura, costumbres, tradiciones, recursos y formas específicas de organización de conformidad con lo establecido en las leyes que nos rigen.', 'Cerrado por COVID-19', 2),
(24, '-kFfKvb1_NIjf0Q4dYmgW38E6lz9dBc8.jpg', 'Dirección De Programación', 'Tiene como propósito dar a conocer la estructura de la misma, sus funciones, así como sus vínculos con otras dependencias internas y externas.', 'Cerrado por COVID-19', 2),
(25, '-kFfKvb1_NIjf0Q4dYmgW38E6lz9dBc8.jpg', 'Dirección De Desarrollo', 'Responsable de promover la participación ciudadana y el mejoramiento de la vida comunitaria.', 'Cerrado por COVID-19', 2),
(26, '-kFfKvb1_NIjf0Q4dYmgW38E6lz9dBc8.jpg', 'Dirección De Asuntos Jurídicos', 'Otorgar asesoría oportuna y apegada a la legalidad en donde el H. \r\nAyuntamiento de Centro, sus integrantes y diversos funcionarios municipales sean parte y \r\nemitir opiniones en los instrumentos que suscriban éstos, en asuntos legales; ', 'Cerrado por COVID-19', 2),
(27, '-kFfKvb1_NIjf0Q4dYmgW38E6lz9dBc8.jpg', 'Direccion De Atención Ciudadana', 'Órgano de Gobierno Municipal GESTOR que contribuye como una forma de identificar y atender de manera oportuna las necesidades básicas de la población del Centro.\r\n', 'Cerrado por COVID-19', 2),
(28, '-kFfKvb1_NIjf0Q4dYmgW38E6lz9dBc8.jpg', 'Dirección Del Sistema Municipal Para El Desarrollo', 'Contribuir a que los grupos en desventaja social, en riesgo y situación de \r\nvulnerabilidad, reciban los beneficios de los programas sociales, los cuales les \r\npermitan mejorar sus condiciones de vida.', 'Cerrado por COVID-19', 2),
(29, '-kFfKvb1_NIjf0Q4dYmgW38E6lz9dBc8.jpg', 'Instituto De Planeación Y Desarrollo Urbano', 'Promover el desarrollo ordenado de la ciudad a través de procesos que permitan \r\nun uso adecuado y ordenado de los espacios respetando los recursos naturales y \r\nasí lograr un desarrollo integral y equilibrado.', 'Cerrado por COVID-19', 2),
(30, '-kFfKvb1_NIjf0Q4dYmgW38E6lz9dBc8.jpg', 'Instituto Municipal Del Deporte De Centro', '- Promover y ejecutar políticas públicas del deporte y la cultura física en el Municipio.\r\n- Establecer y coordinar la participación en el deporte y la cultura física de los trabajadores de las dependencias y entidades de la Administraci', 'Cerrado por COVID-19', 2),
(31, '-kFfKvb1_NIjf0Q4dYmgW38E6lz9dBc8.jpg', 'Instituto Municipal De Integración De Tecnologías,', 'La finalidad primordial de este Instituto es llevar a cabo Programas planteados y Propuestas a construir \r\nun Municipio Moderno, Seguro, Autosustentable y Socialmente incluyente con una Ciudad Inteligente,\r\ncuidando el entorno y el medio', 'Cerrado por COVID-19', 2),
(32, '-kFfKvb1_NIjf0Q4dYmgW38E6lz9dBc8.jpg', 'Secretaría Técnica', 'Enlazar de forma coordinada las actividades programadas por el titular de la Secretaría, tanto al interior como al exterior de la Dependencia para brindar atención personal a productores agropecuarios y público en general.', 'Cerrado por COVID-19', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('UsuarioEstandar', 9, 1626981650);

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
('/administrativeunit/*', 3, NULL, NULL, NULL, 1626980819, 1626980819, NULL),
('/administrativeunit/create', 3, NULL, NULL, NULL, 1626980820, 1626980820, NULL),
('/administrativeunit/createunit', 3, NULL, NULL, NULL, 1626980820, 1626980820, NULL),
('/administrativeunit/delete', 3, NULL, NULL, NULL, 1626980819, 1626980819, NULL),
('/administrativeunit/index', 3, NULL, NULL, NULL, 1626980821, 1626980821, NULL),
('/administrativeunit/update', 3, NULL, NULL, NULL, 1626980820, 1626980820, NULL),
('/administrativeunit/updateunit', 3, NULL, NULL, NULL, 1626980820, 1626980820, NULL),
('/administrativeunit/view', 3, NULL, NULL, NULL, 1626980820, 1626980820, NULL),
('/email/*', 3, NULL, NULL, NULL, 1626980819, 1626980819, NULL),
('/email/validateemail', 3, NULL, NULL, NULL, 1626980819, 1626980819, NULL),
('/file/*', 3, NULL, NULL, NULL, 1626980818, 1626980818, NULL),
('/file/create', 3, NULL, NULL, NULL, 1626980819, 1626980819, NULL),
('/file/delete', 3, NULL, NULL, NULL, 1626980819, 1626980819, NULL),
('/file/documentviewer', 3, NULL, NULL, NULL, 1626980819, 1626980819, NULL),
('/file/files', 3, NULL, NULL, NULL, 1626980819, 1626980819, NULL),
('/file/index', 3, NULL, NULL, NULL, 1626980819, 1626980819, NULL),
('/file/update', 3, NULL, NULL, NULL, 1626980819, 1626980819, NULL),
('/file/view', 3, NULL, NULL, NULL, 1626980819, 1626980819, NULL),
('/gii/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gii/default/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gii/default/action', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gii/default/diff', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gii/default/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gii/default/preview', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gii/default/view', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/jobtitle/*', 3, NULL, NULL, NULL, 1626980818, 1626980818, NULL),
('/jobtitle/create', 3, NULL, NULL, NULL, 1626980818, 1626980818, NULL),
('/jobtitle/delete', 3, NULL, NULL, NULL, 1626980818, 1626980818, NULL),
('/jobtitle/index', 3, NULL, NULL, NULL, 1626980818, 1626980818, NULL),
('/jobtitle/update', 3, NULL, NULL, NULL, 1626980818, 1626980818, NULL),
('/jobtitle/view', 3, NULL, NULL, NULL, 1626980818, 1626980818, NULL),
('/notifications/*', 3, NULL, NULL, NULL, 1626980817, 1626980817, NULL),
('/notifications/allnotifications', 3, NULL, NULL, NULL, 1626980818, 1626980818, NULL),
('/notifications/countnotification', 3, NULL, NULL, NULL, 1626980818, 1626980818, NULL),
('/notifications/create', 3, NULL, NULL, NULL, 1626980817, 1626980817, NULL),
('/notifications/delete', 3, NULL, NULL, NULL, 1626980817, 1626980817, NULL),
('/notifications/desktop', 3, NULL, NULL, NULL, 1626980818, 1626980818, NULL),
('/notifications/index', 3, NULL, NULL, NULL, 1626980818, 1626980818, NULL),
('/notifications/notifications', 3, NULL, NULL, NULL, 1626980818, 1626980818, NULL),
('/notifications/read', 3, NULL, NULL, NULL, 1626980818, 1626980818, NULL),
('/notifications/update', 3, NULL, NULL, NULL, 1626980817, 1626980817, NULL),
('/notifications/view', 3, NULL, NULL, NULL, 1626980818, 1626980818, NULL),
('/office/*', 3, NULL, NULL, NULL, 1626980816, 1626980816, NULL),
('/office/create', 3, NULL, NULL, NULL, 1626980816, 1626980816, NULL),
('/office/delete', 3, NULL, NULL, NULL, 1626980816, 1626980816, NULL),
('/office/evaluate', 3, NULL, NULL, NULL, 1626980817, 1626980817, NULL),
('/office/evaluating', 3, NULL, NULL, NULL, 1626980817, 1626980817, NULL),
('/office/evaluatingnotify', 3, NULL, NULL, NULL, 1626980817, 1626980817, NULL),
('/office/existexpedient', 3, NULL, NULL, NULL, 1626980817, 1626980817, NULL),
('/office/existnooficce', 3, NULL, NULL, NULL, 1626980817, 1626980817, NULL),
('/office/filter', 3, NULL, NULL, NULL, 1626980817, 1626980817, NULL),
('/office/index', 3, NULL, NULL, NULL, 1626980817, 1626980817, NULL),
('/office/officesend', 3, NULL, NULL, NULL, 1626980817, 1626980817, NULL),
('/office/update', 3, NULL, NULL, NULL, 1626980816, 1626980816, NULL),
('/office/upload', 3, NULL, NULL, NULL, 1626980817, 1626980817, NULL),
('/office/uploadconfirm', 3, NULL, NULL, NULL, 1626980817, 1626980817, NULL),
('/office/view', 3, NULL, NULL, NULL, 1626980817, 1626980817, NULL),
('/office/worksin', 3, NULL, NULL, NULL, 1626980817, 1626980817, NULL),
('/officefile/*', 3, NULL, NULL, NULL, 1626980815, 1626980815, NULL),
('/officefile/create', 3, NULL, NULL, NULL, 1626980816, 1626980816, NULL),
('/officefile/delete', 3, NULL, NULL, NULL, 1626980815, 1626980815, NULL),
('/officefile/index', 3, NULL, NULL, NULL, 1626980816, 1626980816, NULL),
('/officefile/update', 3, NULL, NULL, NULL, 1626980816, 1626980816, NULL),
('/officefile/view', 3, NULL, NULL, NULL, 1626980816, 1626980816, NULL),
('/profile/*', 3, NULL, NULL, NULL, 1626980813, 1626980813, NULL),
('/profile/create', 3, NULL, NULL, NULL, 1626980814, 1626980814, NULL),
('/profile/delete', 3, NULL, NULL, NULL, 1626980813, 1626980813, NULL),
('/profile/index', 3, NULL, NULL, NULL, 1626980814, 1626980814, NULL),
('/profile/newprofile', 3, NULL, NULL, NULL, 1626980814, 1626980814, NULL),
('/profile/profile', 3, NULL, NULL, NULL, 1626980814, 1626980814, NULL),
('/profile/profiles', 3, NULL, NULL, NULL, 1626980814, 1626980814, NULL),
('/profile/update', 3, NULL, NULL, NULL, 1626980814, 1626980814, NULL),
('/profile/updateprofile', 3, NULL, NULL, NULL, 1626980814, 1626980814, NULL),
('/profile/view', 3, NULL, NULL, NULL, 1626980814, 1626980814, NULL),
('/profile/viewprofile', 3, NULL, NULL, NULL, 1626980814, 1626980814, NULL),
('/site/*', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/site/about', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/site/captcha', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/site/contact', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/site/createoffice', 3, NULL, NULL, NULL, 1626980813, 1626980813, NULL),
('/site/error', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/site/index', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/site/login', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/site/logout', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/stateoffice/*', 3, NULL, NULL, NULL, 1626980812, 1626980812, NULL),
('/stateoffice/create', 3, NULL, NULL, NULL, 1626980813, 1626980813, NULL),
('/stateoffice/delete', 3, NULL, NULL, NULL, 1626980813, 1626980813, NULL),
('/stateoffice/index', 3, NULL, NULL, NULL, 1626980813, 1626980813, NULL),
('/stateoffice/update', 3, NULL, NULL, NULL, 1626980813, 1626980813, NULL),
('/stateoffice/view', 3, NULL, NULL, NULL, 1626980813, 1626980813, NULL),
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
('PermisosGenerales', 2, 'Permisos Generales', NULL, NULL, 1626980794, 1626980794, NULL),
('UsuarioEstandar', 1, 'UsuarioEstandar', NULL, NULL, 1626980631, 1626980631, NULL),
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
('PermisosGenerales', '/administrativeunit/*'),
('PermisosGenerales', '/email/*'),
('PermisosGenerales', '/file/documentviewer'),
('PermisosGenerales', '/file/files'),
('PermisosGenerales', '/jobtitle/*'),
('PermisosGenerales', '/notifications/allnotifications'),
('PermisosGenerales', '/notifications/countnotification'),
('PermisosGenerales', '/notifications/desktop'),
('PermisosGenerales', '/notifications/notifications'),
('PermisosGenerales', '/notifications/read'),
('PermisosGenerales', '/office/evaluate'),
('PermisosGenerales', '/office/evaluating'),
('PermisosGenerales', '/office/evaluatingnotify'),
('PermisosGenerales', '/office/existexpedient'),
('PermisosGenerales', '/office/existnooficce'),
('PermisosGenerales', '/office/filter'),
('PermisosGenerales', '/office/officesend'),
('PermisosGenerales', '/office/update'),
('PermisosGenerales', '/office/upload'),
('PermisosGenerales', '/office/uploadconfirm'),
('PermisosGenerales', '/office/worksin'),
('PermisosGenerales', '/officefile/*'),
('PermisosGenerales', '/profile/profile'),
('PermisosGenerales', '/profile/updateprofile'),
('PermisosGenerales', '/profile/viewprofile'),
('PermisosGenerales', '/site/*'),
('PermisosGenerales', '/stateoffice/*'),
('PermisosGenerales', '/user-management/auth/*'),
('UsuarioEstandar', 'changeOwnPassword'),
('UsuarioEstandar', 'PermisosGenerales'),
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
  `name` varchar(200) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `format` varchar(10) DEFAULT NULL,
  `size` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guest`
--

CREATE TABLE `guest` (
  `idguest` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nameandlastname` varchar(200) NOT NULL,
  `code` varchar(6) NOT NULL,
  `fkoffice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'Director'),
(2, 'Secretaria'),
(3, 'Administrador'),
(4, 'Coordinador'),
(5, 'Regidor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notifications`
--

CREATE TABLE `notifications` (
  `idnotifications` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `message` varchar(50) DEFAULT NULL,
  `datatime` datetime NOT NULL,
  `read` tinyint(4) NOT NULL,
  `fkprofile` int(11) DEFAULT NULL,
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
  `observations` text DEFAULT NULL,
  `tracing` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `officefile`
--

CREATE TABLE `officefile` (
  `idoffice` int(11) NOT NULL,
  `idfile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(2, 'Erick', 'Montero', 'Masculino', '1996-02-10', '9931828184', 'Fraccionamiento las americas', 'default.png', '', 3, 8, 3),
(3, 'Karina', 'Apellidos', 'Femenino', '1996-01-19', '9931828185', 'Fraccionamiento las americas', 'default.png', '', 1, 1, 1),
(5, 'Leonardo', 'no se', 'Masculino', '2021-01-29', '9931828184', 'Fraccionamiento las americas', 'default.png', '', 4, 2, 9),
(6, 'Maria', 'Apellidos', 'Femenino', '1982-06-07', '9935649876', 'Villahermosa', 'default.png', '', 4, 2, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sendoffice`
--

CREATE TABLE `sendoffice` (
  `fkprofile` int(11) NOT NULL,
  `fkoffice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'admin1', 'kz2px152FAWlkHbkZoCiXgBAd-S8SSjF', '$2y$13$Bcv0ULUFOknf9WSqZmSj0ezJ.Ork1wvYU1OTctTbSROnvbgcvRzt.', NULL, 1, 1, 1426062188, 1626811863, NULL, '', '', 0),
(3, 'admin', '1oIGEPoZEEVLfKSSFO2FWd0lhnV2Le65', '$2y$13$TUkhVrVprn4jRFqvFmiQ9e9eHdZrp4axsWa00WQTDP8UE7SML6Bte', NULL, 1, 1, 1625366418, 1625366418, '127.0.0.1', '', 'admin@gmail.com', 1),
(9, 'admin2', 'WaqHbDGIblF2dLqqI87CbV6BrcQVw1xr', '$2y$13$wLPuubTMwZKjBpnjfN.58.Pt0.O9UHd8t9/fL/8.pMVaDFH0Xn/vm', NULL, 1, 0, 1626069812, 1626980086, '127.0.0.1', '', '', 0),
(10, 'admin3', '9rawzzLzwRWSuoo59F6uXX0Bu8e2D_7-', '$2y$13$HE.jlHCylAkgC1SFL9wklOdUoCdts9nuSPdw5e19nLY3r/xdQDcru', NULL, 1, 0, 1626826887, 1626826887, '127.0.0.1', '', '', 0);

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
-- Indices de la tabla `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`idguest`),
  ADD KEY `fkoffice` (`fkoffice`);

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
-- Indices de la tabla `sendoffice`
--
ALTER TABLE `sendoffice`
  ADD KEY `fkprofile` (`fkprofile`),
  ADD KEY `fkoffice` (`fkoffice`);

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
  MODIFY `idadministrativeunit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `file`
--
ALTER TABLE `file`
  MODIFY `idfile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT de la tabla `guest`
--
ALTER TABLE `guest`
  MODIFY `idguest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `jobtitle`
--
ALTER TABLE `jobtitle`
  MODIFY `idjobtitle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `notifications`
--
ALTER TABLE `notifications`
  MODIFY `idnotifications` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT de la tabla `office`
--
ALTER TABLE `office`
  MODIFY `idoffice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT de la tabla `profile`
--
ALTER TABLE `profile`
  MODIFY `idprofile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `stateoffice`
--
ALTER TABLE `stateoffice`
  MODIFY `idstateoffice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `user_visit_log`
--
ALTER TABLE `user_visit_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
-- Filtros para la tabla `guest`
--
ALTER TABLE `guest`
  ADD CONSTRAINT `guest_ibfk_1` FOREIGN KEY (`fkoffice`) REFERENCES `office` (`idoffice`);

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
-- Filtros para la tabla `sendoffice`
--
ALTER TABLE `sendoffice`
  ADD CONSTRAINT `sendoffice_ibfk_1` FOREIGN KEY (`fkprofile`) REFERENCES `profile` (`idprofile`),
  ADD CONSTRAINT `sendoffice_ibfk_2` FOREIGN KEY (`fkoffice`) REFERENCES `office` (`idoffice`);

--
-- Filtros para la tabla `user_visit_log`
--
ALTER TABLE `user_visit_log`
  ADD CONSTRAINT `user_visit_log_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
