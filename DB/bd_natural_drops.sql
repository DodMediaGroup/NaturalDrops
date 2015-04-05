-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-04-2015 a las 06:33:59
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bd_natural_drops`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_entries`
--

CREATE TABLE IF NOT EXISTS `blog_entries` (
`id_entry` smallint(6) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `date` date NOT NULL,
  `source` varchar(255) DEFAULT NULL,
  `navigation` varchar(255) NOT NULL,
  `user` smallint(6) NOT NULL,
  `status` smallint(1) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `blog_entries`
--

INSERT INTO `blog_entries` (`id_entry`, `title`, `article`, `image`, `date`, `source`, `navigation`, `user`, `status`) VALUES
(1, 'ECOJARDÍN, un lugar que expora los beneficios de la marihuana medicinal', '<p class="efect-bottom">						Diana, una joven caleña, inicó a comienzos de este año un negocio similar, que ha ido creciendo con el paso de los meses, “ La mayoría de mis clientes son adultos mayores que sufren de enfermedades como artritis, osteoporosis o cáncer, pues los productos ayudan, por ejemplo, a soportar los efectos de la quimioterapia. Pero también la compran deportistas con afecciones músculares y personas que están en postoperatorios”. Cuenta.					</p>					<p class="efect-bottom">						Diana, una joven caleña, inicó a comienzos de este año un negocio similar, que ha ido creciendo con el paso de los meses, “ La mayoría de mis clientes son adultos mayores que sufren de enfermedades como artritis, osteoporosis o cáncer, pues los productos ayudan, por ejemplo, a soportar los efectos de la quimioterapia. Pero también la compran deportistas con afecciones músculares y personas que están en postoperatorios”. Cuenta. Diana, una joven caleña, inicó a comienzos de este año un negocio similar, que ha ido creciendo con el paso de los meses, “ La mayoría de mis clientes son adultos mayores que sufren de enfermedades como artritis, osteoporosis o cáncer, pues los productos ayudan, por ejemplo, a soportar los efectos de la quimioterapia. Pero también la compran deportistas con afecciones músculares y personas que están en postoperatorios”. Cuenta.					</p>					<p class="efect-bottom">						<img src="http://www.abc.es/Media/201305/29/MARIHUANA-EFE--644x362.JPG" alt="">					</p>					<p class="efect-bottom">						Diana, una joven caleña, inicó a comienzos de este año un negocio similar, que ha ido creciendo con el paso de los meses, “ La mayoría de mis clientes son adultos mayores que sufren de enfermedades como artritis, osteoporosis o cáncer, pues los productos ayudan, por ejemplo, a soportar los efectos de la quimioterapia. Pero también la compran deportistas con afecciones músculares y personas que están en postoperatorios”. Cuenta. Diana, una joven caleña, inicó a comienzos de este año un negocio similar, que ha ido creciendo con el paso de los meses, “ La mayoría de mis clientes son adultos mayores que sufren de enfermedades como artritis, osteoporosis o cáncer, pues los productos ayudan, por ejemplo, a soportar los efectos de la quimioterapia. Pero también la compran deportistas con afecciones músculares y personas que están en postoperatorios”. Cuenta.					</p>', 'blog.jpg', '2015-03-18', NULL, 'ecojardin_un_lugar_que_expora_los_beneficios_de_la_marihuana_medicinal', 1, 1),
(2, 'YA PUEDE COMENZAR EL ESTUDIO CLÍNICO CON CANNABIS EN LA ENFERMEDAD DE CÉLULAS FALCIFORMES', '<p><img width="667" height="505" src="http://wwv.marihuana-medicinal.com/wp-content/uploads/2014/09/células-falciformes-667x505.jpg" class="attachment-post-image wp-post-image" alt="células falciformes"></p>\r\n<p style="text-align: justify;">Un ensayo clínico con cannabis medicinal podría proporcionar nuevas esperanzas para las personas que sufren de anemia de células falciformes. Su investigador principal, el Dr. Donald Abrams del Hospital General de San Francisco, había demostrado que los ratones con enfermedad de células falciformes tratados con cannabis con alto contenido en CBD mostraban menos dolor y menos inflamación. Ahora tiene luz verde para comenzar un estudio humano con fondos federales y cannabis federal.</p>\r\n<p style="text-align: justify;">Cortesía de<a href="http://www.cannabis-med.org/" onclick="javascript:_gaq.push([''_trackEvent'',''outbound-article'',''http://www.cannabis-med.org'']);" target="_blank"> IACM</a></p>\r\n<p style="text-align: justify;">Asociación Internacional por el Cannabis como Medicamento</p>', '1.png', '2015-03-18', 'http://www.marihuana-medicinal.com/ya-puede-comenzar-el-estudio-clinico-con-cannabis-en-la-enfermedad-de-celulas-falciformes/', 'ya_puede_comenzar_el_estudio_clinico_con_cannabis_en_la_enfermedad_de_celulas_falciformes', 1, 1),
(3, 'Marihuana medicinal, ¿para qué sirve?', '<p><img alt="" src="http://www.elespectador.com/files/imagecache/560_width_display/img_ipad/e0f8e1567af4f5e754205ebf46c7cc45.jpg" style="height:373px; width:560px" /></p>\r\n\r\n<p>Luego de que el presidente Santos y el ministro de Salud, Alejandro Gaviria, respaldaran el proyecto de ley presentado por el Partido Liberal, la posibilidad de que se permita en Colombia el uso medicinal de la marihuana parece mucho m&aacute;s cercana. &ldquo;Debemos avanzar en esto gradualmente. No vamos a dar un salto al vac&iacute;o. Ese no es el esp&iacute;ritu de la iniciativa. S&oacute;lo el 0,8% de carga de enfermedad global est&aacute; relacionado con el uso de drogas il&iacute;citas, mientras que el 4% depende del alcohol y el tabaquismo&rdquo;, asegur&oacute; Gaviria.</p>\r\n\r\n<p>Pero m&aacute;s all&aacute; del espaldarazo que le dio el Gobierno a la iniciativa, que busca reglamentar el acto legislativo 02 de 2009, &iquest;cu&aacute;l es el uso m&eacute;dico de esta sustancia? &iquest;Sirve realmente para tratar algunas enfermedades?</p>\r\n\r\n<p>Aunque los estudios sobre el tema no son abundantes, en las &uacute;ltimas d&eacute;cadas se han hecho varias investigaciones que han tratado de develar los beneficios que tiene la marihuana en ciertas patolog&iacute;as (ver gr&aacute;fico).</p>\r\n\r\n<p>Por ejemplo, de acuerdo al Instituto Nacional del Ojo de Estados Unidos, &ldquo;estudios de 1970 mostraron que al fumarla puede disminuir la presi&oacute;n intraocular en personas que tienen glaucoma&rdquo;. O, seg&uacute;n una investigaci&oacute;n en la que se analiz&oacute; durante 20 a&ntilde;os el efecto que produjo el cannabis en 5.115 adultos, la marihuana aumenta la capacidad pulmonar, a diferencia del efecto que produce el tabaquismo. El art&iacute;culo fue publicado en enero de 2012 en la revista especializada Journal of the American Medical Association.</p>\r\n\r\n<p>Adem&aacute;s se puede encontrar literatura m&eacute;dica que hace alusi&oacute;n a los beneficios que puede tener a la hora de controlar los ataques epil&eacute;pticos. Tal es el caso del experimento realizado en 2003 por el Departamento de Neurolog&iacute;a de la Universidad de Virginia Commonwealth, en el cual, luego de dar extracto de marihuana sint&eacute;tica a ratas epil&eacute;pticas, se registr&oacute; que las convulsiones se eliminaban por un lapso de diez horas.</p>\r\n\r\n<p>Tambi&eacute;n hay referentes que sugieren algunos beneficios de la sustancia para disminuir las n&aacute;useas y aliviar el dolor que puede generar la quimioterapia. La Escuela de Medicina de Harvard public&oacute; una investigaci&oacute;n sobre el tema en 2010. Se puede leer en su p&aacute;gina www.health.harvard.edu.</p>\r\n\r\n<p>&ldquo;En las &uacute;ltimas d&eacute;cadas se ha publicado buena literatura cient&iacute;fica en la que se recomienda el cannabis como un agente terap&eacute;utico. Hoy se sabe que estimula el apetito en pacientes con VIH, que reduce los espasmos o que alivia los s&iacute;ntomas del asma porque act&uacute;a como un broncodilatador. Lo que por lo general recomiendan los m&eacute;dicos es que se consuma de forma inhalada, mediante el empleo de un vaporizador&rdquo;, afirma el psic&oacute;logo Carlos Arturo Carvajal, exmiembro del grupo de expertos en reducci&oacute;n de la demanda de drogas de Naciones Unidas y asesor de la Secretar&iacute;a de Salud de Bogot&aacute;.</p>\r\n\r\n<p>Sin embargo, el camino para que la marihuana se use con esos fines en el pa&iacute;s no ser&aacute; nada f&aacute;cil. Lo dijo hace dos d&iacute;as el ministro de Salud: &ldquo;&iquest;C&oacute;mo va a ser incorporada a nuestros planes de beneficio? &iquest;Cu&aacute;l ser&aacute; recobrada al Fosyga?&rdquo;.</p>\r\n\r\n<p>Esa es apenas una peque&ntilde;a incertidumbre, porque, seg&uacute;n Carvajal, la ruta que hay que seguir de aqu&iacute; en adelante es dif&iacute;cil y lenta: &ldquo;Se necesita, primero, que el Consejo Nacional de Estupefacientes apruebe una investigaci&oacute;n con fines m&eacute;dicos, que se nombre un comit&eacute; de expertos, que se hagan los respectivos estudios (que pueden durar a&ntilde;os o meses) y que se tramite un registro ante el Invima. Adem&aacute;s har&iacute;a falta saber cu&aacute;les son las variedades, qui&eacute;n va a administrar la producci&oacute;n, c&oacute;mo se va a regular y c&oacute;mo se va a distribuir. Porque es muy f&aacute;cil dosificarla por parte del usuario, pero ser&aacute; muy dif&iacute;cil para el profesional de la salud&rdquo;. Para que eso se decida, dice, tendr&aacute;n que pasar, m&iacute;nimo, unos cinco a&ntilde;os.</p>\r\n', '741fd873612e97604fe09b74b24d8e97.jpg', '2015-04-04', 'http://www.elespectador.com/noticias/salud/marihuana-medicinal-sirve-articulo-510969', 'marihuana_medicinal__para_que_sirve_', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images_slide`
--

CREATE TABLE IF NOT EXISTS `images_slide` (
`id_image` smallint(6) NOT NULL,
  `path` varchar(255) NOT NULL,
  `slide` smallint(6) NOT NULL,
  `status` smallint(1) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `images_slide`
--

INSERT INTO `images_slide` (`id_image`, `path`, `slide`, `status`) VALUES
(1, '1.png', 1, 1),
(2, '2.png', 1, 1),
(3, '3.png', 2, 1),
(10, '139fc2b9a3d3ef4faf94546f4295e1a0.png', 5, 1),
(13, '5a35a72fdc36ec1129d63fe266118b26.png', 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
`id_page` smallint(6) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text,
  `date_update` date DEFAULT NULL,
  `status` smallint(1) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pages`
--

INSERT INTO `pages` (`id_page`, `title`, `content`, `date_update`, `status`) VALUES
(1, 'Nosotros', '<p>Natural Drops es una marca que busca promover el uso terapéutico del Cannabis entregando un producto de calidad,efectivo y llamativo para los usuarios.</p>\r\n			<h2><span></span>¿QUÉ ES NATURAL DROPS?</h2>\r\n			<p>Natural Drops es una crema natural cuyo principal componente activo es el aceite de cannabis, combinado además con otros elementos de comprobada efectividad como el aloe vera, castaño de indias, manzanilla y árnica. Natural Drops es una crema natural cuyo principal componente activo es el aceite de cannabis, combinado además con otros elementos de comprobada efectividad como el aloe vera, castaño de indias, manzanilla y árnica.Natural Drops es una crema natural cuyo principal componente activo es el aceite de cannabis, combinado además con otros elementos de comprobada efectividad como el aloe vera, castaño de indias, manzanilla y árnica.</p>\r\n			<h2><span></span>¿PORQUÉ FUNCIONA?</h2>\r\n			<p>Natural Drops es una crema natural cuyo principal componente activo es el aceite de cannabis, combinado además con otros elementos de comprobada efectividad como el aloe vera, castaño de indias, manzanilla y árnica. Natural Drops es una crema natural cuyo principal componente activo es el aceite de cannabis, combinado además con otros elementos de comprobada efectividad como el aloe vera, castaño de indias, manzanilla y árnica.Natural Drops es una crema natural cuyo principal componente activo es el aceite de cannabis, combinado además con otros elementos de comprobada efectividad como el aloe vera, castaño de indias, manzanilla y árnica.</p>', '2015-03-18', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
`id_question` smallint(6) NOT NULL,
  `question` varchar(255) NOT NULL,
  `precise` varchar(255) NOT NULL,
  `reply` text NOT NULL,
  `status` smallint(1) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `questions`
--

INSERT INTO `questions` (`id_question`, `question`, `precise`, `reply`, `status`) VALUES
(1, '¿LA CREMA TIENE EFECTOS SECUNDARIOS?', 'No, la crema no tiene efectos debido a que contiene una mínima porción de sustancia cannabica', 'Diana, una joven caleña, inicó a comienzos de este año un negocio similar, que ha ido creciendo con el paso de los meses, “ La mayoría de mis clientes son adultos mayores que sufren de enfermedades como artritis, osteoporosis o cáncer, pues los productos ayudan, por ejemplo, a soportar los efectos de la quimioterapia. Pero también la compran deportistas con afecciones músculares y personas que están en postoperatorios”. Cuenta. Diana, una joven caleña, inicó a comienzos de este año un negocio similar, que ha ido creciendo con el paso de los meses, “ La mayoría de mis clientes son adultos mayores que sufren de enfermedades como artritis, osteoporosis o cáncer, pues los productos ayudan, por ejemplo, a soportar los efectos de la quimioterapia. Pero también la compran deportistas con afecciones músculares y personas que están en postoperatorios”. Cuenta.', 1),
(2, '¿ES CIERTO QUE EL CANNABIS PUEDE USARSE CON FINES TERAPÉUTICOS?', 'Sí y viene aumentando su uso con estos fines de manera considerable.', 'Tal como lo señala el documento elaborado por el Comité de Expertos en Drogodependencia de la Organización Mundial para la Salud (OMS) "Cannabis y resina de cannabis", durante las últimas dos décadas, la evidencia acerca del uso médico de la marihuana ha aumentado de manera considerable.\r\n\r\nAlgunos usos que se identifican en la literatura existente son:\r\n\r\n1. Reduce dolores crónicos y agudos, no solo en enfermedades terminales, sino también el dolor neuropático (el relacionado con la afectación de trayectos nerviosos) y el vinculado a procesos inflamatorios.\r\nControla el dolor en artritis reumatoide, esclerosis múltiple y migraña, entre otros.\r\n2. Reduce náuseas y vómitos en tratamientos de cáncer y VIH.\r\n3. Estimula el apetito.\r\n4. Puede contribuir en casos de asma.\r\n5. Reduce la presión intraocular en el glaucoma de ángulo abierto.\r\n\r\nLa evidencia en la literatura científica analizando los efectos de la marihuana en la salud es amplia: existen más de 20.000 estudios publicados referenciando a la planta de cannabis y sus compuestos. Cerca de la mitad de estos estudios fueron publicados en los últimos 5 años, de acuerdo a la búsqueda de palabras claves en PubMed Central, la principal base de datos sobre estudios médicos en Estados Unidos. Más de 1,400 artículos fueron publicados en revistas arbitradas, solo en 2013.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
`id_slide` smallint(6) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` smallint(1) DEFAULT '2'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `slide`
--

INSERT INTO `slide` (`id_slide`, `link`, `status`) VALUES
(1, '', 1),
(2, '', 1),
(5, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `team`
--

CREATE TABLE IF NOT EXISTS `team` (
`id_integrant` smallint(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `office` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` smallint(1) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `team`
--

INSERT INTO `team` (`id_integrant`, `name`, `office`, `image`, `status`) VALUES
(1, 'Juana Maria Rojas', 'CEO', '3.jpg', 1),
(2, 'Carlos Andres Sierra', 'CO-CREATOR', '2.jpg', 1),
(3, 'Angela Constanza Diaz', 'ADMINISTRADOR', '5.jpg', 1),
(4, 'Sandra Milena Gomes', 'SOCIAL MEDIA', '50f8cbbc713cea42854b3be99aeece00.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
`id_testimony` smallint(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `testimony` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` smallint(1) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `testimonials`
--

INSERT INTO `testimonials` (`id_testimony`, `name`, `testimony`, `image`, `status`) VALUES
(1, 'Laura Valenzuela', '<p>"HE SUFRIDO DE PSORIASIS</p><p><strong><small>TODA MI VIDA.</small></strong></p><p><strong>NATURAL DROPS</strong></p><p>ME DA EL ALIVIO QUE</p><p>OTROS MEDICAMENTOS NUNCA HAN PODIDO LOGRAR"</p>', '3.jpg', 1),
(2, 'Luis Carlos Sarmiento', '<p>"<strong><small>TODA MI VIDA</small></strong></p><p>HE SUFRIDO DE PSORIASIS</p><p>OTROS MEDICAMENTOS NUNCA HAN PODIDO LOGRAR</p><p><strong>NATURAL DROPS</strong></p><p>ME DA EL ALIVIO"</p>', '1.jpg', 0),
(3, 'Tatiana Andrea Perez', '<p>"HE SUFRIDO DE PSORIASIS</p><p><strong><small>TODA MI VIDA.</small></strong></p><p><strong>NATURAL DROPS</strong></p><p>ME DA EL ALIVIO QUE</p><p>OTROS MEDICAMENTOS NUNCA HAN PODIDO LOGRAR"</p>', '4.jpg', 1),
(4, 'Ana Maria Sanchez', '<p>"<strong><small>TODA MI VIDA</small></strong></p><p>HE SUFRIDO DE PSORIASIS</p><p>OTROS MEDICAMENTOS NUNCA HAN PODIDO LOGRAR</p><p><strong>NATURAL DROPS</strong></p><p>ME DA EL ALIVIO"</p>', '5.jpg', 1),
(5, 'Maria Fernanda Rojas', '<p>"HE SUFRIDO DE PSORIASIS</p><p><strong><small>TODA MI VIDA.</small></strong></p><p><strong>NATURAL DROPS</strong></p><p>ME DA EL ALIVIO QUE</p><p>OTROS MEDICAMENTOS NUNCA HAN PODIDO LOGRAR"</p>', '6.jpg', 1),
(6, 'Pedro Pablo Leon Jaramillo', '<p>"<strong><small>TODA MI VIDA</small></strong></p><p>HE SUFRIDO DE PSORIASIS</p><p>OTROS MEDICAMENTOS NUNCA HAN PODIDO LOGRAR</p><p><strong>NATURAL DROPS</strong></p><p>ME DA EL ALIVIO"</p>', '2.jpg', 1),
(7, 'Nathalia Medina', '<p>&quot;ME QUEDARON EMATOMAS EN UN ACCIDENTE&quot;</p>\r\n\r\n<p><strong>NATURAL DROPS</strong></p>\r\n\r\n<p>Y SUS PRODUCTOS ACELERARON SU DESAPARICION Y AYUDARON EN MI PRONTA RECUPERACION.</p>\r\n', 'd775767b5eb85dc39772306ee806b331.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id_user` smallint(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT 'default.jpg',
  `verification_code` varchar(255) DEFAULT NULL,
  `status` smallint(1) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `name`, `email`, `password`, `image`, `verification_code`, `status`) VALUES
(1, 'Administrador', 'sergioa@dodmediagroup.co', '$2a$07$KgWJJoRGtVLlRmZUgCC2Xev5Nzl4l4i5O7oJt6z.Qx7GsZHqdYI/2', 'default.png', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `variables`
--

CREATE TABLE IF NOT EXISTS `variables` (
`id_variable` smallint(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `status` smallint(1) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `variables`
--

INSERT INTO `variables` (`id_variable`, `name`, `value`, `status`) VALUES
(1, 'Background-Slide', 'slide.jpg', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blog_entries`
--
ALTER TABLE `blog_entries`
 ADD PRIMARY KEY (`id_entry`), ADD KEY `fk_blog_entries_users1_idx` (`user`);

--
-- Indices de la tabla `images_slide`
--
ALTER TABLE `images_slide`
 ADD PRIMARY KEY (`id_image`), ADD KEY `fk_images_slide_slide_idx` (`slide`);

--
-- Indices de la tabla `pages`
--
ALTER TABLE `pages`
 ADD PRIMARY KEY (`id_page`);

--
-- Indices de la tabla `questions`
--
ALTER TABLE `questions`
 ADD PRIMARY KEY (`id_question`);

--
-- Indices de la tabla `slide`
--
ALTER TABLE `slide`
 ADD PRIMARY KEY (`id_slide`);

--
-- Indices de la tabla `team`
--
ALTER TABLE `team`
 ADD PRIMARY KEY (`id_integrant`);

--
-- Indices de la tabla `testimonials`
--
ALTER TABLE `testimonials`
 ADD PRIMARY KEY (`id_testimony`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id_user`);

--
-- Indices de la tabla `variables`
--
ALTER TABLE `variables`
 ADD PRIMARY KEY (`id_variable`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blog_entries`
--
ALTER TABLE `blog_entries`
MODIFY `id_entry` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `images_slide`
--
ALTER TABLE `images_slide`
MODIFY `id_image` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `pages`
--
ALTER TABLE `pages`
MODIFY `id_page` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `questions`
--
ALTER TABLE `questions`
MODIFY `id_question` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `slide`
--
ALTER TABLE `slide`
MODIFY `id_slide` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `team`
--
ALTER TABLE `team`
MODIFY `id_integrant` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `testimonials`
--
ALTER TABLE `testimonials`
MODIFY `id_testimony` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
MODIFY `id_user` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `variables`
--
ALTER TABLE `variables`
MODIFY `id_variable` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `blog_entries`
--
ALTER TABLE `blog_entries`
ADD CONSTRAINT `fk_blog_entries_users1` FOREIGN KEY (`user`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `images_slide`
--
ALTER TABLE `images_slide`
ADD CONSTRAINT `fk_images_slide_slide` FOREIGN KEY (`slide`) REFERENCES `slide` (`id_slide`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
