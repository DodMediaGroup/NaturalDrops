-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-05-2015 a las 04:12:34
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
  `language` smallint(6) NOT NULL DEFAULT '1',
  `user` smallint(6) NOT NULL,
  `status` smallint(1) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `blog_entries`
--

INSERT INTO `blog_entries` (`id_entry`, `title`, `article`, `image`, `date`, `source`, `navigation`, `language`, `user`, `status`) VALUES
(1, 'ECOJARDÍN, un lugar que expora los beneficios de la marihuana medicinal', '<p class="efect-bottom">						Diana, una joven caleña, inicó a comienzos de este año un negocio similar, que ha ido creciendo con el paso de los meses, “ La mayoría de mis clientes son adultos mayores que sufren de enfermedades como artritis, osteoporosis o cáncer, pues los productos ayudan, por ejemplo, a soportar los efectos de la quimioterapia. Pero también la compran deportistas con afecciones músculares y personas que están en postoperatorios”. Cuenta.					</p>					<p class="efect-bottom">						Diana, una joven caleña, inicó a comienzos de este año un negocio similar, que ha ido creciendo con el paso de los meses, “ La mayoría de mis clientes son adultos mayores que sufren de enfermedades como artritis, osteoporosis o cáncer, pues los productos ayudan, por ejemplo, a soportar los efectos de la quimioterapia. Pero también la compran deportistas con afecciones músculares y personas que están en postoperatorios”. Cuenta. Diana, una joven caleña, inicó a comienzos de este año un negocio similar, que ha ido creciendo con el paso de los meses, “ La mayoría de mis clientes son adultos mayores que sufren de enfermedades como artritis, osteoporosis o cáncer, pues los productos ayudan, por ejemplo, a soportar los efectos de la quimioterapia. Pero también la compran deportistas con afecciones músculares y personas que están en postoperatorios”. Cuenta.					</p>					<p class="efect-bottom">						<img src="http://www.abc.es/Media/201305/29/MARIHUANA-EFE--644x362.JPG" alt="">					</p>					<p class="efect-bottom">						Diana, una joven caleña, inicó a comienzos de este año un negocio similar, que ha ido creciendo con el paso de los meses, “ La mayoría de mis clientes son adultos mayores que sufren de enfermedades como artritis, osteoporosis o cáncer, pues los productos ayudan, por ejemplo, a soportar los efectos de la quimioterapia. Pero también la compran deportistas con afecciones músculares y personas que están en postoperatorios”. Cuenta. Diana, una joven caleña, inicó a comienzos de este año un negocio similar, que ha ido creciendo con el paso de los meses, “ La mayoría de mis clientes son adultos mayores que sufren de enfermedades como artritis, osteoporosis o cáncer, pues los productos ayudan, por ejemplo, a soportar los efectos de la quimioterapia. Pero también la compran deportistas con afecciones músculares y personas que están en postoperatorios”. Cuenta.					</p>', 'blog.jpg', '2015-03-18', NULL, 'ecojardin_un_lugar_que_expora_los_beneficios_de_la_marihuana_medicinal', 1, 1, 1),
(2, 'YA PUEDE COMENZAR EL ESTUDIO CLÍNICO CON CANNABIS EN LA ENFERMEDAD DE CÉLULAS FALCIFORMES', '<p><img width="667" height="505" src="http://wwv.marihuana-medicinal.com/wp-content/uploads/2014/09/células-falciformes-667x505.jpg" class="attachment-post-image wp-post-image" alt="células falciformes"></p>\r\n<p style="text-align: justify;">Un ensayo clínico con cannabis medicinal podría proporcionar nuevas esperanzas para las personas que sufren de anemia de células falciformes. Su investigador principal, el Dr. Donald Abrams del Hospital General de San Francisco, había demostrado que los ratones con enfermedad de células falciformes tratados con cannabis con alto contenido en CBD mostraban menos dolor y menos inflamación. Ahora tiene luz verde para comenzar un estudio humano con fondos federales y cannabis federal.</p>\r\n<p style="text-align: justify;">Cortesía de<a href="http://www.cannabis-med.org/" onclick="javascript:_gaq.push([''_trackEvent'',''outbound-article'',''http://www.cannabis-med.org'']);" target="_blank"> IACM</a></p>\r\n<p style="text-align: justify;">Asociación Internacional por el Cannabis como Medicamento</p>', '1.png', '2015-03-18', 'http://www.marihuana-medicinal.com/ya-puede-comenzar-el-estudio-clinico-con-cannabis-en-la-enfermedad-de-celulas-falciformes/', 'ya_puede_comenzar_el_estudio_clinico_con_cannabis_en_la_enfermedad_de_celulas_falciformes', 1, 1, 1),
(3, 'Marihuana medicinal, ¿para qué sirve?', '<p><img alt="" src="http://www.elespectador.com/files/imagecache/560_width_display/img_ipad/e0f8e1567af4f5e754205ebf46c7cc45.jpg" style="height:373px; width:560px" /></p>\r\n\r\n<p>Luego de que el presidente Santos y el ministro de Salud, Alejandro Gaviria, respaldaran el proyecto de ley presentado por el Partido Liberal, la posibilidad de que se permita en Colombia el uso medicinal de la marihuana parece mucho m&aacute;s cercana. &ldquo;Debemos avanzar en esto gradualmente. No vamos a dar un salto al vac&iacute;o. Ese no es el esp&iacute;ritu de la iniciativa. S&oacute;lo el 0,8% de carga de enfermedad global est&aacute; relacionado con el uso de drogas il&iacute;citas, mientras que el 4% depende del alcohol y el tabaquismo&rdquo;, asegur&oacute; Gaviria.</p>\r\n\r\n<p>Pero m&aacute;s all&aacute; del espaldarazo que le dio el Gobierno a la iniciativa, que busca reglamentar el acto legislativo 02 de 2009, &iquest;cu&aacute;l es el uso m&eacute;dico de esta sustancia? &iquest;Sirve realmente para tratar algunas enfermedades?</p>\r\n\r\n<p>Aunque los estudios sobre el tema no son abundantes, en las &uacute;ltimas d&eacute;cadas se han hecho varias investigaciones que han tratado de develar los beneficios que tiene la marihuana en ciertas patolog&iacute;as (ver gr&aacute;fico).</p>\r\n\r\n<p>Por ejemplo, de acuerdo al Instituto Nacional del Ojo de Estados Unidos, &ldquo;estudios de 1970 mostraron que al fumarla puede disminuir la presi&oacute;n intraocular en personas que tienen glaucoma&rdquo;. O, seg&uacute;n una investigaci&oacute;n en la que se analiz&oacute; durante 20 a&ntilde;os el efecto que produjo el cannabis en 5.115 adultos, la marihuana aumenta la capacidad pulmonar, a diferencia del efecto que produce el tabaquismo. El art&iacute;culo fue publicado en enero de 2012 en la revista especializada Journal of the American Medical Association.</p>\r\n\r\n<p>Adem&aacute;s se puede encontrar literatura m&eacute;dica que hace alusi&oacute;n a los beneficios que puede tener a la hora de controlar los ataques epil&eacute;pticos. Tal es el caso del experimento realizado en 2003 por el Departamento de Neurolog&iacute;a de la Universidad de Virginia Commonwealth, en el cual, luego de dar extracto de marihuana sint&eacute;tica a ratas epil&eacute;pticas, se registr&oacute; que las convulsiones se eliminaban por un lapso de diez horas.</p>\r\n\r\n<p>Tambi&eacute;n hay referentes que sugieren algunos beneficios de la sustancia para disminuir las n&aacute;useas y aliviar el dolor que puede generar la quimioterapia. La Escuela de Medicina de Harvard public&oacute; una investigaci&oacute;n sobre el tema en 2010. Se puede leer en su p&aacute;gina www.health.harvard.edu.</p>\r\n\r\n<p>&ldquo;En las &uacute;ltimas d&eacute;cadas se ha publicado buena literatura cient&iacute;fica en la que se recomienda el cannabis como un agente terap&eacute;utico. Hoy se sabe que estimula el apetito en pacientes con VIH, que reduce los espasmos o que alivia los s&iacute;ntomas del asma porque act&uacute;a como un broncodilatador. Lo que por lo general recomiendan los m&eacute;dicos es que se consuma de forma inhalada, mediante el empleo de un vaporizador&rdquo;, afirma el psic&oacute;logo Carlos Arturo Carvajal, exmiembro del grupo de expertos en reducci&oacute;n de la demanda de drogas de Naciones Unidas y asesor de la Secretar&iacute;a de Salud de Bogot&aacute;.</p>\r\n\r\n<p>Sin embargo, el camino para que la marihuana se use con esos fines en el pa&iacute;s no ser&aacute; nada f&aacute;cil. Lo dijo hace dos d&iacute;as el ministro de Salud: &ldquo;&iquest;C&oacute;mo va a ser incorporada a nuestros planes de beneficio? &iquest;Cu&aacute;l ser&aacute; recobrada al Fosyga?&rdquo;.</p>\r\n\r\n<p>Esa es apenas una peque&ntilde;a incertidumbre, porque, seg&uacute;n Carvajal, la ruta que hay que seguir de aqu&iacute; en adelante es dif&iacute;cil y lenta: &ldquo;Se necesita, primero, que el Consejo Nacional de Estupefacientes apruebe una investigaci&oacute;n con fines m&eacute;dicos, que se nombre un comit&eacute; de expertos, que se hagan los respectivos estudios (que pueden durar a&ntilde;os o meses) y que se tramite un registro ante el Invima. Adem&aacute;s har&iacute;a falta saber cu&aacute;les son las variedades, qui&eacute;n va a administrar la producci&oacute;n, c&oacute;mo se va a regular y c&oacute;mo se va a distribuir. Porque es muy f&aacute;cil dosificarla por parte del usuario, pero ser&aacute; muy dif&iacute;cil para el profesional de la salud&rdquo;. Para que eso se decida, dice, tendr&aacute;n que pasar, m&iacute;nimo, unos cinco a&ntilde;os.</p>\r\n', '741fd873612e97604fe09b74b24d8e97.jpg', '2015-04-04', 'http://www.elespectador.com/noticias/salud/marihuana-medicinal-sirve-articulo-510969', 'marihuana_medicinal__para_que_sirve_', 1, 1, 1),
(4, 'Medical marijuana, what''s the use?', '<p><img alt="" src="http://www.elespectador.com/files/imagecache/560_width_display/img_ipad/e0f8e1567af4f5e754205ebf46c7cc45.jpg" style="height:373px; width:560px" /></p>\r\n\r\n<p>After that President Santos and Minister of Health, Alejandro Gaviria, would support the bill introduced by the Liberal Party, the possibility that in Colombia allow the medicinal use of marijuana seems much closer. &quot;We must move in this gradually. We will not take a leap in the dark. That is not the spirit of the initiative. Only 0.8% of global disease burden is related to the use of illicit drugs, while 4% dependent on alcohol and smoking, &quot;said Gaviria.</p>\r\n\r\n<p>But beyond the boost he gave the government to the initiative, which seeks to regulate the legislative act 02, 2009, what is the medical use of this substance? Can we get treat some diseases?</p>\r\n\r\n<p>Although studies on the subject are not abundant, in recent decades there have been several studies that have tried to unlock the benefits that marijuana under certain conditions (see chart).</p>\r\n\r\n<p>For example, according to the National Eye Institute of the United States, &quot;1970 studies showed that when smoked can lower intraocular pressure in people with glaucoma.&quot; Or, according to a study in which the effect produced cannabis was analyzed 5,115 adults over 20 years, marijuana increases lung capacity, unlike the effect produced by smoking. The article was published in January 2012 in the Journal of the American Medical Association.</p>\r\n\r\n<p>You can also find literature that refers to the benefits it can have in controlling seizures. Such is the case of the experiment conducted in 2003 by the Department of Neurology at the University of Virginia Commonwealth, in which, after giving extract synthetic marijuana epileptic rats was reported that seizures were removed for a period of ten hours.</p>\r\n\r\n<p>There are also references that suggest some benefits of the substance to reduce nausea and pain relief that can generate chemotherapy. The Harvard Medical School published research on the subject in 2010. You can read on your page www.health.harvard.edu.</p>\r\n\r\n<p>&quot;In recent decades it has published good scientific literature in which cannabis is recommended as a therapeutic agent. Today it is known to stimulate appetite in patients with HIV, which reduces spasms or relieve asthma symptoms because it acts as a bronchodilator. What I usually recommend doctors is to be consumed in inhaled form, by using a vaporizer, &quot;says the psychologist Carlos Arturo Carvajal, former member of the expert group on reducing drug demand and UN advisor Ministry of Health of Bogota.</p>\r\n\r\n<p>However, the way for marijuana use for such purposes in the country will not be easy. He said two days ago the Minister of Health: &quot;How it will be incorporated into our plans to benefit? What will be recovered to Fosyga? &quot;.</p>\r\n\r\n<p>That&#39;s just a small uncertainty, because, Carvajal, the route to be followed from now on is difficult and slow: &quot;You need, first, that the National Narcotics Council approved an investigation for medical purposes, the appointment of a committee of experts to the respective studies (which can last years or months) are made and that a record be brought before the Invima. Moreover would it know what varieties, who will manage production, how it will regulate and how they are going to distribute. Because it is very easy to dose by the user, but it will be very difficult for the health professional. &quot; For that to be decided, he says, they will have to go, at least five years.</p>\r\n', '16aeb31d1a941b2a36fa2239ae39e550.jpg', '2015-05-13', 'http://www.elespectador.com/noticias/salud/marihuana-medicinal-sirve-articulo-510969', 'medical_marijuana_whats_the_use_', 2, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
`id_city` smallint(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `country` smallint(6) NOT NULL,
  `status` smallint(1) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cities`
--

INSERT INTO `cities` (`id_city`, `name`, `country`, `status`) VALUES
(1, 'Medellin', 1, 1),
(2, 'Envigado', 1, 1),
(3, 'Itagűi', 1, 1),
(4, 'Bogotá', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
`id_country` smallint(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` smallint(1) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `countries`
--

INSERT INTO `countries` (`id_country`, `name`, `status`) VALUES
(1, 'Colombia', 1),
(2, 'Venezuela', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images_slide`
--

CREATE TABLE IF NOT EXISTS `images_slide` (
`id_image` smallint(6) NOT NULL,
  `path` varchar(255) NOT NULL,
  `slide` smallint(6) NOT NULL,
  `status` smallint(1) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `images_slide`
--

INSERT INTO `images_slide` (`id_image`, `path`, `slide`, `status`) VALUES
(1, '1.png', 1, 1),
(14, '9b41ac3a9f50099093634170073b0a1a.png', 1, 1),
(15, '8ecadc7ea028f407b0bac946f70dff30.png', 2, 1),
(16, '04fd5136a878b67135bcb33f1a94554e.png', 5, 1),
(17, '1763985ed7ca41912c5afa07c4239359.png', 7, 1),
(18, '89e8ef968bf77eaf5f7901054a61dd03.png', 7, 1),
(19, 'aff9900597364c082de376555d0fa19a.png', 8, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
`id_language` smallint(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` smallint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `languages`
--

INSERT INTO `languages` (`id_language`, `name`, `status`) VALUES
(1, 'Español', 1),
(2, 'English', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
`id_menu` smallint(6) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `language` smallint(1) NOT NULL,
  `status` smallint(1) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`id_menu`, `menu`, `language`, `status`) VALUES
(1, 'Menú Principal', 1, 1),
(2, 'Principal Menu', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu_items`
--

CREATE TABLE IF NOT EXISTS `menu_items` (
`id_item` smallint(6) NOT NULL,
  `menu` smallint(6) NOT NULL,
  `page` smallint(6) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `menu_items`
--

INSERT INTO `menu_items` (`id_item`, `menu`, `page`) VALUES
(1, 1, 2),
(2, 1, 4),
(3, 1, 6),
(4, 1, 8),
(5, 1, 10),
(6, 1, 12),
(7, 2, 3),
(8, 2, 5),
(9, 2, 7),
(10, 2, 9),
(11, 2, 10),
(12, 2, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
`id_page` smallint(6) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text,
  `date_update` date DEFAULT NULL,
  `principal` smallint(6) DEFAULT NULL,
  `language` smallint(6) NOT NULL,
  `status` smallint(1) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pages`
--

INSERT INTO `pages` (`id_page`, `title`, `content`, `date_update`, `principal`, `language`, `status`) VALUES
(1, 'Nosotros', '<p>Natural Drops es una empresa que presenta una alternativa de salud y bienestar, mediante productos naturales a base de cannabis, elaborados conscientemente mediante una producción limpia y aliada del medio ambiente.</p><h2><span></span>¿Por qué el cannabis como principal componente de nuestros productos?</h2><p>Elegimos esta planta como nuestro principal componente debido a que desde los inicios de la medicina y de la farmacología ha demostrado sus poderes curativos. Desde hace miles de años en diferentes culturas se usaba la planta sobre cuerpos que buscaban aliviar o minimizar alguna afección. En la actualidad, observaciones y estudios han demostrado y confirmado que el uso del cannabis en la medicina es realmente efectivo, ya que la planta no solamente proporciona sus bondades sino que su uso no presenta ningún efecto secundario adverso a diferencia de medicamentos tradicionales.</p><h2><span></span>¿Cómo funciona Natural Drops en el cuerpo?</h2><p>Los componentes químicos del cannabis encajan como llaves dentro de las células de todo el cuerpo a través de receptores. Esos receptores controlan procesos que van desde el dolor y el pensamiento (estados mentales) hasta la inflamación y el sistema inmune.</p>', '2015-03-18', NULL, 1, 1),
(2, 'About', '<p>Natural Drops is a company that presents an alternative health and wellness, using natural products based on cannabis, consciously produced using a clean production environment ally.</p><h2><span></span>Why cannabis as the main component of our products?</h2><p>We chose this plant as our main component because since the beginning of medicine and pharmacology has demonstrated its healing powers. For thousands of years in different cultures plant on bodies seeking to alleviate or minimize any condition it is used. Currently, observations and studies have shown and confirmed that the use of cannabis in medicine is really effective, as the plant not only provides its benefits but its use does not pose any adverse side effects unlike traditional medicines.</p><h2><span></span>How does Natural Drops in the body?</h2><p>The chemical components of cannabis fit like keys into cells throughout the body through receptors. These receptors control processes ranging from pain and thought (mental states) to inflammation and immune system.</p>', '2015-05-12', 1, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pages_site`
--

CREATE TABLE IF NOT EXISTS `pages_site` (
`id_page` smallint(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `navigation` varchar(255) NOT NULL,
  `language` smallint(6) NOT NULL,
  `principal` smallint(6) DEFAULT NULL,
  `status` smallint(1) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pages_site`
--

INSERT INTO `pages_site` (`id_page`, `name`, `navigation`, `language`, `principal`, `status`) VALUES
(1, 'Inicio', '', 1, NULL, 1),
(2, 'Nosotros', 'nosotros', 1, NULL, 1),
(3, 'About', 'about', 2, 2, 1),
(4, 'Beneficios', 'beneficios', 1, NULL, 1),
(5, 'Benefits', 'benefits', 2, 4, 1),
(6, 'Productos', 'productos', 1, NULL, 1),
(7, 'Products', 'products', 2, 6, 1),
(8, 'Puntos de venta', 'puntos_venta', 1, NULL, 1),
(9, 'Sales points', 'sales_points', 2, 8, 1),
(10, 'Blog', 'blog', 1, NULL, 1),
(12, 'Preguntas frecuentes', 'preguntas_frecuentes', 1, NULL, 1),
(13, 'Questions', 'questions', 2, 12, 1),
(14, 'Contacto', 'contacto', 1, NULL, 1),
(15, 'Contact', 'contact', 2, 14, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
`id_question` smallint(6) NOT NULL,
  `question` varchar(255) NOT NULL,
  `precise` varchar(255) NOT NULL,
  `reply` text NOT NULL,
  `language` smallint(6) NOT NULL DEFAULT '1',
  `status` smallint(1) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `questions`
--

INSERT INTO `questions` (`id_question`, `question`, `precise`, `reply`, `language`, `status`) VALUES
(1, '¿LA CREMA TIENE EFECTOS SECUNDARIOS?', 'No, la crema no tiene efectos debido a que contiene una mínima porción de sustancia cannabica', 'Diana, una joven caleña, inicó a comienzos de este año un negocio similar, que ha ido creciendo con el paso de los meses, “ La mayoría de mis clientes son adultos mayores que sufren de enfermedades como artritis, osteoporosis o cáncer, pues los productos ayudan, por ejemplo, a soportar los efectos de la quimioterapia. Pero también la compran deportistas con afecciones músculares y personas que están en postoperatorios”. Cuenta. Diana, una joven caleña, inicó a comienzos de este año un negocio similar, que ha ido creciendo con el paso de los meses, “ La mayoría de mis clientes son adultos mayores que sufren de enfermedades como artritis, osteoporosis o cáncer, pues los productos ayudan, por ejemplo, a soportar los efectos de la quimioterapia. Pero también la compran deportistas con afecciones músculares y personas que están en postoperatorios”. Cuenta.', 1, 1),
(2, '¿ES CIERTO QUE EL CANNABIS PUEDE USARSE CON FINES TERAPÉUTICOS?', 'Sí y viene aumentando su uso con estos fines de manera considerable.', 'Tal como lo señala el documento elaborado por el Comité de Expertos en Drogodependencia de la Organización Mundial para la Salud (OMS) "Cannabis y resina de cannabis", durante las últimas dos décadas, la evidencia acerca del uso médico de la marihuana ha aumentado de manera considerable.\r\n\r\nAlgunos usos que se identifican en la literatura existente son:\r\n\r\n1. Reduce dolores crónicos y agudos, no solo en enfermedades terminales, sino también el dolor neuropático (el relacionado con la afectación de trayectos nerviosos) y el vinculado a procesos inflamatorios.\r\nControla el dolor en artritis reumatoide, esclerosis múltiple y migraña, entre otros.\r\n2. Reduce náuseas y vómitos en tratamientos de cáncer y VIH.\r\n3. Estimula el apetito.\r\n4. Puede contribuir en casos de asma.\r\n5. Reduce la presión intraocular en el glaucoma de ángulo abierto.\r\n\r\nLa evidencia en la literatura científica analizando los efectos de la marihuana en la salud es amplia: existen más de 20.000 estudios publicados referenciando a la planta de cannabis y sus compuestos. Cerca de la mitad de estos estudios fueron publicados en los últimos 5 años, de acuerdo a la búsqueda de palabras claves en PubMed Central, la principal base de datos sobre estudios médicos en Estados Unidos. Más de 1,400 artículos fueron publicados en revistas arbitradas, solo en 2013.', 1, 1),
(3, 'Is it true that cannabis can be used for therapeutic purposes?', 'Yes and it has been increasing its use for these purposes considerably.', 'As noted the document prepared by the Committee of Experts on Drug Dependence of the World Health Organization (WHO) "Cannabis and cannabis resin" during the past two decades, the evidence on the medical use of marijuana has increased considerably.\r\n\r\nSome applications that are identified in the literature are:\r\n\r\n1. Reduce chronic and acute pain, not just terminal illness, but also neuropathic pain (related to the impairment of nerve pathways) and linked to inflammatory processes.\r\nControl pain in rheumatoid arthritis, multiple sclerosis and migraine, among others.\r\n2. It reduces nausea and vomiting in cancer and HIV treatments.\r\n3. It stimulates the appetite.\r\n4. You can contribute to asthma.\r\n5. Reduce intraocular pressure in open-angle glaucoma.\r\n\r\nThe evidence in the scientific literature analyzing the effects of marijuana on health is wide: there are more than 20,000 published studies referencing the cannabis plant and its compounds. About half of these studies were published in the last five years, according to the keyword search in PubMed Central, the main database of medical studies in the United States. More than 1,400 articles were published in peer-reviewed journals, only in 2013.', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
`id_slide` smallint(6) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `background` varchar(255) NOT NULL,
  `language` smallint(6) NOT NULL DEFAULT '1',
  `status` smallint(1) DEFAULT '2'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `slide`
--

INSERT INTO `slide` (`id_slide`, `link`, `background`, `language`, `status`) VALUES
(1, 'http://localhost:8080/dodmediagroup/projects/natural_drops/project/productos', '1-crema.jpg', 1, 1),
(2, 'http://localhost:8080/dodmediagroup/projects/natural_drops/project/beneficios', '2-beneficios.jpg', 1, 1),
(5, 'http://localhost:8080/dodmediagroup/projects/natural_drops/project/#testimonios', '3-testimonio.jpg', 1, 1),
(7, 'http://localhost:8080/dodmediagroup/projects/natural_drops/project/products', 'default.jpg', 2, 1),
(8, '', '639f20be0b42f427b3b5f109392fed5a.jpg', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stores`
--

CREATE TABLE IF NOT EXISTS `stores` (
`id_store` smallint(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `locality` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `attention` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `city` smallint(6) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `status` smallint(1) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `stores`
--

INSERT INTO `stores` (`id_store`, `name`, `address`, `locality`, `phone`, `attention`, `email`, `website`, `city`, `lat`, `lng`, `status`) VALUES
(1, 'Vitaintegral', 'Transv. 39B # 77-40', 'Av. Nutibara', '2508263', 'L - S 9:00 am a 7:30 pm', '', NULL, 1, 6.246960866633159, -75.59834003448486, 1),
(2, 'Saludpan', 'Circular 4 # 70 - 84', 'Laureles', '4116935', 'L - S 9:00 am a 7:00  pm', '', '', 1, 6.246442, -75.589438, 1),
(3, 'Clorofila', 'Calle 41 # 24 -20', 'La Soledad', '2696088/93', 'L - V 9am a 7pm S 9am a 6pm D 9am a 4pm', '', 'http://www.test.com', 4, 4.631444, -74.075368, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscriptions`
--

CREATE TABLE IF NOT EXISTS `suscriptions` (
`id_suscription` smallint(6) NOT NULL,
  `email` varchar(250) NOT NULL,
  `authorized` smallint(1) NOT NULL DEFAULT '0',
  `verification_code` varchar(150) DEFAULT NULL,
  `date` datetime NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `suscriptions`
--

INSERT INTO `suscriptions` (`id_suscription`, `email`, `authorized`, `verification_code`, `date`, `status`) VALUES
(1, 'arag_ong@yahoo.es', 0, 'S4sA2XsXLCan6bexiDOB14MzaKXndyPvr9viWd6hgVKcxpQVseXjXjZytwbN', '2015-05-13 02:12:13', 1);

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
  `language` smallint(6) NOT NULL DEFAULT '1',
  `status` smallint(1) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `testimonials`
--

INSERT INTO `testimonials` (`id_testimony`, `name`, `testimony`, `image`, `language`, `status`) VALUES
(1, 'Laura Valenzuela', '<p>"HE SUFRIDO DE PSORIASIS</p><p><strong><small>TODA MI VIDA.</small></strong></p><p><strong>NATURAL DROPS</strong></p><p>ME DA EL ALIVIO QUE</p><p>OTROS MEDICAMENTOS NUNCA HAN PODIDO LOGRAR"</p>', '3.jpg', 1, 1),
(2, 'Luis Carlos Sarmiento', '<p>"<strong><small>TODA MI VIDA</small></strong></p><p>HE SUFRIDO DE PSORIASIS</p><p>OTROS MEDICAMENTOS NUNCA HAN PODIDO LOGRAR</p><p><strong>NATURAL DROPS</strong></p><p>ME DA EL ALIVIO"</p>', '1.jpg', 1, 0),
(3, 'Tatiana Andrea Perez', '<p>"HE SUFRIDO DE PSORIASIS</p><p><strong><small>TODA MI VIDA.</small></strong></p><p><strong>NATURAL DROPS</strong></p><p>ME DA EL ALIVIO QUE</p><p>OTROS MEDICAMENTOS NUNCA HAN PODIDO LOGRAR"</p>', '4.jpg', 1, 1),
(4, 'Ana Maria Sanchez', '<p>"<strong><small>TODA MI VIDA</small></strong></p><p>HE SUFRIDO DE PSORIASIS</p><p>OTROS MEDICAMENTOS NUNCA HAN PODIDO LOGRAR</p><p><strong>NATURAL DROPS</strong></p><p>ME DA EL ALIVIO"</p>', '5.jpg', 1, 1),
(5, 'Maria Fernanda Rojas', '<p>"HE SUFRIDO DE PSORIASIS</p><p><strong><small>TODA MI VIDA.</small></strong></p><p><strong>NATURAL DROPS</strong></p><p>ME DA EL ALIVIO QUE</p><p>OTROS MEDICAMENTOS NUNCA HAN PODIDO LOGRAR"</p>', '6.jpg', 1, 1),
(6, 'Pedro Pablo Leon Jaramillo', '<p>"<strong><small>TODA MI VIDA</small></strong></p><p>HE SUFRIDO DE PSORIASIS</p><p>OTROS MEDICAMENTOS NUNCA HAN PODIDO LOGRAR</p><p><strong>NATURAL DROPS</strong></p><p>ME DA EL ALIVIO"</p>', '2.jpg', 1, 1),
(7, 'Nathalia Medina', '<p>&quot;ME QUEDARON EMATOMAS EN UN ACCIDENTE&quot;</p>\r\n\r\n<p><strong>NATURAL DROPS</strong></p>\r\n\r\n<p>Y SUS PRODUCTOS ACELERARON SU DESAPARICION Y AYUDARON EN MI PRONTA RECUPERACION.</p>\r\n', 'd775767b5eb85dc39772306ee806b331.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `treatments`
--

CREATE TABLE IF NOT EXISTS `treatments` (
`id_treatment` smallint(6) NOT NULL,
  `treatment` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `benefits` longtext NOT NULL,
  `use` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `language` smallint(6) DEFAULT '1',
  `status` smallint(1) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `treatments`
--

INSERT INTO `treatments` (`id_treatment`, `treatment`, `description`, `benefits`, `use`, `image`, `language`, `status`) VALUES
(1, 'Artritis & artrosis', '<p>La artritis involucra la degradaci&oacute;n del cart&iacute;lago. El cart&iacute;lago normal protege una articulaci&oacute;n y permite que &eacute;sta se mueva de forma suave. El cart&iacute;lago tambi&eacute;n absorbe el golpe cuando se ejerce presi&oacute;n sobre la articulaci&oacute;n, como sucede cuando usted camina. Sin la cantidad usual de cart&iacute;lago, los huesos se rozan. Esto causa dolor, hinchaz&oacute;n (inflamaci&oacute;n) y rigidez. La inflamaci&oacute;n de la articulaci&oacute;n puede ser consecuencia de una enfermedad autoinmunitaria (el sistema inmunitario del cuerpo ataca por error al tejido sano).</p>\r\n', '<ul>	<li>Disminuye el dolor en un 35%</li>	<li>Crema t&oacute;pica</li>	<li>Desinflamante</li>	<li>Encajan como llaves dentro dentro del sistema endocanabinoide</li></ul>', 'Aplicar en la zona afectada masajeando con cuidado', '4ea9796aa3768d6b32ebc22aa0fea8ef.jpg', 1, 1),
(2, 'Venas várices', '<p>Las venas varicosas (v&aacute;rices) son venas hinchadas, retorcidas y dilatadas que se pueden ver bajo la piel. Con frecuencia son de color rojo o azul. Generalmente aparecen en las piernas, pero pueden ocurrir en otras partes del cuerpo.&nbsp;</p>\r\n\r\n<p>Normalmente, las v&aacute;lvulas unidireccionales en las venas de la pierna impiden que la sangre suba hacia el coraz&oacute;n. Cuando las v&aacute;lvulas no funcionan correctamente, la sangre se represa en la vena. La vena se hincha por la sangre que se acumula all&iacute;, lo cual provoca las varices. Las peque&ntilde;as varices que se pueden ver en la superficie de la piel se llaman ara&ntilde;as vasculares.</p>\r\n\r\n<p>Las venas varicosas son comunes y afectan m&aacute;s a las mujeres que a los hombres. Generalmente no causan problemas para la mayor&iacute;a de la gente. Sin embargo, en algunas personas, pueden llevar a afecciones serias, como hinchaz&oacute;n y dolor en las piernas, co&aacute;gulos de sangre y cambios en la piel.</p>\r\n', '<ul>\r\n	<li>Disminuye el dolor en un 35%</li>\r\n	<li>Crema t&oacute;pica</li>\r\n	<li>Desinflamante</li>\r\n	<li>Encajan como llaves dentro dentro del sistema endocanabinoide</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', 'Aplicar en la zona afectada masajeando con cuidado', 'eb5ec6442e1672c76eeb891aab5f72af.jpg', 1, 1),
(3, 'Problemas de circulación', '<p>El sistema vascular es la red de vasos sangu&iacute;neos del cuerpo. Incluye las arterias, las venas y los capilares y traslada la sangre desde y hasta el coraz&oacute;n. Los problemas del sistema vascular son comunes y pueden ser serios. Las arterias pueden engrosarse y ponerse r&iacute;gidas, un problema llamado arterioesclerosis. Los co&aacute;gulos sangu&iacute;neos pueden obstruir los vasos y bloquear el flujo al coraz&oacute;n o al cerebro. Los vasos sangu&iacute;neos debilitados pueden romperse, causando una hemorragia interna.</p>\r\n\r\n<p>A medida que se envejece aumentan las probabilidades de tener una enfermedad vascular.</p>\r\n', '<ul>\r\n	<li>Disminuye el dolor en un 35%</li>\r\n	<li>Crema t&oacute;pica</li>\r\n	<li>Desinflamante</li>\r\n	<li>Encajan como llaves dentro dentro del sistema endocanabinoide</li>\r\n</ul>\r\n', 'Aplicar en la zona afectada masajeando con cuidado', '9e70d9e03ecfa28ec90d9b600146d4e9.jpg', 1, 1),
(4, 'Ematomas', '<p>Un&nbsp;<strong>hematoma</strong>&nbsp;es una&nbsp;<strong>acumulaci&oacute;n de sangre</strong>&nbsp;en tejidos blandos (por ejemplo, tejido muscular o adiposo). Un hematoma se forma cuando la&nbsp;sangre&nbsp;sale de uno o m&aacute;svasos sangu&iacute;neos&nbsp;al tejido que los rodea. Hematomas que est&aacute;n relativamente cerca de la superficie de la piel muestran al cabo de poco tiempo la t&iacute;pica mancha colorada (<strong>morat&oacute;n</strong>). En algunos casos pueden sin embargo pasar unos d&iacute;as hasta que el hematoma se hace visible.</p>\r\n\r\n<p>Los diferentes tipos se diferencian por la zona del tejido donde se produce:</p>\r\n\r\n<ul>\r\n	<li><strong>Hematoma subcut&aacute;neo:</strong>&nbsp;directamente bajo la&nbsp;piel.</li>\r\n	<li><strong>Hematoma intramuscular:</strong>&nbsp;dentro del tejido del m&uacute;sculo.</li>\r\n	<li><strong>Hematoma peri&oacute;stico:</strong>&nbsp;en el tejido &oacute;seo.</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Disminuye el dolor en un 35%</li>\r\n	<li>Crema t&oacute;pica</li>\r\n	<li>Desinflamante</li>\r\n	<li>Encajan como llaves dentro dentro del sistema endocanabinoide</li>\r\n</ul>\r\n', 'Aplicar en la zona afectada masajeando con cuidado', '8a3889d425802a61892c3c80c7ab53e2.jpg', 1, 1),
(5, 'Bruising', '<p>A <strong>bruising</strong> is a collection of blood in soft tissues (such as muscle or fat). A bruise forms when blood leaves one or blood m&aacute;svasos the surrounding tissue. Bruises that are relatively close to the surface of the skin show shortly after the typical red spot (bruise). In some cases they may however spend a few days until the hematoma is visible.</p>\r\n\r\n<p>The various types differ in the area of tissue where it occurs:</p>\r\n\r\n<ul>\r\n	<li>Subcutaneous hematoma: directly under the skin.</li>\r\n	<li>Intramuscular hematoma within the muscle tissue.</li>\r\n	<li>Periosteal hematoma in bone tissue.</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Decreases pain by 35%</li>\r\n	<li>Topical cream</li>\r\n	<li>Desinflamante</li>\r\n	<li>They fit like keys into in the endocannabinoid system</li>\r\n</ul>\r\n', 'Apply to the affected area gently massaging', '20cbda2d35ee5a7f76cf83aaf203aba8.jpg', 2, 1);

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
(1, 'Administrador', 'sergioa@dodmediagroup.co', '$2a$07$VnbrBrYdeMR.EISbqtjUY.Uy2/3hwbc3Qbpbis3V7UoqkzH7OEYty', 'a31e750ea75d93a779fe396c255050e3.jpg', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `variables`
--

CREATE TABLE IF NOT EXISTS `variables` (
`id_variable` smallint(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `editable` smallint(1) NOT NULL DEFAULT '1',
  `status` smallint(1) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `variables`
--

INSERT INTO `variables` (`id_variable`, `name`, `value`, `editable`, `status`) VALUES
(1, 'Background-Slide', 'slide.jpg', 0, 1),
(2, 'Facebook', '', 1, 1),
(3, 'Instagram', '', 1, 1),
(4, 'Email Contacto', 'info@naturaldrops.co', 1, 1),
(5, 'Telefono Contacto', '(+57) 456 4312', 1, 1),
(6, 'Dirección Contacto', 'Av. Primavera 45 Of. 302', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blog_entries`
--
ALTER TABLE `blog_entries`
 ADD PRIMARY KEY (`id_entry`), ADD KEY `fk_blog_entries_users1_idx` (`user`), ADD KEY `fk_blog_entries_languages` (`language`);

--
-- Indices de la tabla `cities`
--
ALTER TABLE `cities`
 ADD PRIMARY KEY (`id_city`), ADD KEY `fk_cities_countries1_idx` (`country`);

--
-- Indices de la tabla `countries`
--
ALTER TABLE `countries`
 ADD PRIMARY KEY (`id_country`);

--
-- Indices de la tabla `images_slide`
--
ALTER TABLE `images_slide`
 ADD PRIMARY KEY (`id_image`), ADD KEY `fk_images_slide_slide_idx` (`slide`);

--
-- Indices de la tabla `languages`
--
ALTER TABLE `languages`
 ADD PRIMARY KEY (`id_language`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
 ADD PRIMARY KEY (`id_menu`), ADD KEY `fk_menus_languages1_idx` (`language`);

--
-- Indices de la tabla `menu_items`
--
ALTER TABLE `menu_items`
 ADD PRIMARY KEY (`id_item`), ADD KEY `fk_menus_has_pages_pages1_idx` (`page`), ADD KEY `fk_menus_has_pages_menus1_idx` (`menu`);

--
-- Indices de la tabla `pages`
--
ALTER TABLE `pages`
 ADD PRIMARY KEY (`id_page`), ADD KEY `fk_pages_language` (`language`), ADD KEY `fk_pages_principal` (`principal`);

--
-- Indices de la tabla `pages_site`
--
ALTER TABLE `pages_site`
 ADD PRIMARY KEY (`id_page`), ADD KEY `fk_pages_site_languages` (`language`), ADD KEY `fk_pages_site_principal` (`principal`);

--
-- Indices de la tabla `questions`
--
ALTER TABLE `questions`
 ADD PRIMARY KEY (`id_question`), ADD KEY `fk_questions_languages` (`language`);

--
-- Indices de la tabla `slide`
--
ALTER TABLE `slide`
 ADD PRIMARY KEY (`id_slide`), ADD KEY `fk_slide_languages` (`language`);

--
-- Indices de la tabla `stores`
--
ALTER TABLE `stores`
 ADD PRIMARY KEY (`id_store`), ADD KEY `fk_stores_cities1_idx` (`city`);

--
-- Indices de la tabla `suscriptions`
--
ALTER TABLE `suscriptions`
 ADD PRIMARY KEY (`id_suscription`);

--
-- Indices de la tabla `team`
--
ALTER TABLE `team`
 ADD PRIMARY KEY (`id_integrant`);

--
-- Indices de la tabla `testimonials`
--
ALTER TABLE `testimonials`
 ADD PRIMARY KEY (`id_testimony`), ADD KEY `fk_testimonials_languages` (`language`);

--
-- Indices de la tabla `treatments`
--
ALTER TABLE `treatments`
 ADD PRIMARY KEY (`id_treatment`), ADD KEY `fk_treatments_languages` (`language`);

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
MODIFY `id_entry` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `cities`
--
ALTER TABLE `cities`
MODIFY `id_city` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `countries`
--
ALTER TABLE `countries`
MODIFY `id_country` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `images_slide`
--
ALTER TABLE `images_slide`
MODIFY `id_image` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `languages`
--
ALTER TABLE `languages`
MODIFY `id_language` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
MODIFY `id_menu` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `menu_items`
--
ALTER TABLE `menu_items`
MODIFY `id_item` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `pages`
--
ALTER TABLE `pages`
MODIFY `id_page` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `pages_site`
--
ALTER TABLE `pages_site`
MODIFY `id_page` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `questions`
--
ALTER TABLE `questions`
MODIFY `id_question` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `slide`
--
ALTER TABLE `slide`
MODIFY `id_slide` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `stores`
--
ALTER TABLE `stores`
MODIFY `id_store` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `suscriptions`
--
ALTER TABLE `suscriptions`
MODIFY `id_suscription` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
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
-- AUTO_INCREMENT de la tabla `treatments`
--
ALTER TABLE `treatments`
MODIFY `id_treatment` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
MODIFY `id_user` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `variables`
--
ALTER TABLE `variables`
MODIFY `id_variable` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `blog_entries`
--
ALTER TABLE `blog_entries`
ADD CONSTRAINT `fk_blog_entries_languages` FOREIGN KEY (`language`) REFERENCES `languages` (`id_language`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_blog_entries_users1` FOREIGN KEY (`user`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cities`
--
ALTER TABLE `cities`
ADD CONSTRAINT `fk_cities_countries1` FOREIGN KEY (`country`) REFERENCES `countries` (`id_country`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `images_slide`
--
ALTER TABLE `images_slide`
ADD CONSTRAINT `fk_images_slide_slide` FOREIGN KEY (`slide`) REFERENCES `slide` (`id_slide`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `menus`
--
ALTER TABLE `menus`
ADD CONSTRAINT `fk_menus_languages1` FOREIGN KEY (`language`) REFERENCES `languages` (`id_language`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `menu_items`
--
ALTER TABLE `menu_items`
ADD CONSTRAINT `fk_menus_has_pages_menus1` FOREIGN KEY (`menu`) REFERENCES `menus` (`id_menu`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_menus_has_pages_pages1` FOREIGN KEY (`page`) REFERENCES `pages_site` (`id_page`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pages`
--
ALTER TABLE `pages`
ADD CONSTRAINT `fk_pages_language` FOREIGN KEY (`language`) REFERENCES `languages` (`id_language`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_pages_principal` FOREIGN KEY (`principal`) REFERENCES `pages` (`id_page`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pages_site`
--
ALTER TABLE `pages_site`
ADD CONSTRAINT `fk_pages_site_languages` FOREIGN KEY (`language`) REFERENCES `languages` (`id_language`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_pages_site_principal` FOREIGN KEY (`principal`) REFERENCES `pages_site` (`id_page`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `questions`
--
ALTER TABLE `questions`
ADD CONSTRAINT `fk_questions_languages` FOREIGN KEY (`language`) REFERENCES `languages` (`id_language`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `slide`
--
ALTER TABLE `slide`
ADD CONSTRAINT `fk_slide_languages` FOREIGN KEY (`language`) REFERENCES `languages` (`id_language`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `stores`
--
ALTER TABLE `stores`
ADD CONSTRAINT `fk_stores_cities1` FOREIGN KEY (`city`) REFERENCES `cities` (`id_city`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `testimonials`
--
ALTER TABLE `testimonials`
ADD CONSTRAINT `fk_testimonials_languages` FOREIGN KEY (`language`) REFERENCES `languages` (`id_language`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `treatments`
--
ALTER TABLE `treatments`
ADD CONSTRAINT `fk_treatments_languages` FOREIGN KEY (`language`) REFERENCES `languages` (`id_language`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
