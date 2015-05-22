<section class="section products">
	<div class="container">
		<header>
			<h1 class="principal-title btn-green-light efect-bottom">
				<span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/cannabis.svg" class="js-img-to-svg" alt="Productos"></span>
				<?php echo MyMethods::myStrtoupper($page->name); ?>
			</h1>
		</header>
		<div class="container">
			<div class="col-sm-6">
				<div class="img image-zoom" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/images/product.png)" data-zoom-image="<?php echo Yii::app()->request->baseUrl; ?>/images/product.png">
				</div>
			</div>
			<div class="col-sm-6">
				<h1 class="title">Crema Dérmica</h1>
				<p class="description">Crema a base de cannabis para aliviar dolores, infamación, afecciones cutaneas y problemas circulatorios.</h2>
				<div class="my-collapse">
					<h2 class="show">Beneficios <span></span></h2>
					<div class="collapse">
						<p>Natural Drops crema sirve para aliviar afecciones relacionadas con dolencias musculares y articulares, al igual que problemas de la piel y de circulación.</p>
						<p>Además del Cannabis como componente principal, Natural Drops, tiene en su fórmula Castaño de Indias y Árnica, que potencializan las propiedades antiinflamatorias y analgesicas del Cannabis. También se le incluyó Aloe Vera, Manzanilla y Vitamina E que favorecen su absorción y le agregan propiedades humectantes y recuperadoras de los tejidos de la piel.</p>
						<h3>DOLORES E INFLAMACIÓN</h3>
						<ul>
							<li>Artritis y artrosis</li>
							<li>Dolores musculares y articulares</li>
							<li>Lesiones deportivas</li>
							<li>Inflamación</li>
							<li>Estrés muscular</li>
						</ul>
						<h3>PROBLEMAS DE LA PIEL</h3>
						<ul>
							<li>Psoriasis</li>
							<li>Resequedad</li>
							<li>Quemaduras leves</li>
							<li>Estrés cutáneo</li>
						</ul>
						<h3>PROBLEMAS CIRCULATORIOS</h3>
						<ul>
							<li>Venas varices</li>
							<li>Hematomas</li>
						</ul>
					</div>	
				</div>
				<div class="my-collapse">
					<h2 class="show">Recomendaciones <span></span></h2>
					<div class="collapse">
						<p>Aplicar mínimo dos veces al día en el área a tratar y esparcir sobre la piel con un suave masaje hasta que sea absorbida completamente.</p>
					</div>
				</div>
				<div class="my-collapse">
					<h2 class="show">Precauciones <span></span></h2>
					<div class="collapse">
						<p>Uso externo únicamente. Manténgase fuera del alcance de los niños. Evite el contacto con los ojos. Hipersensibilidad a alguno de los componentes.</p>
					</div>
				</div>
				<h2>Cantidad:</h2>
				<p class="presentations">100 gr</p>
				<h2 class="title">Precio <span>$ 32.000</span></h2>
				<div class="buttons">
					<div class="col-md-6">
						<a href="<?php echo $this->createUrl('productos/?sale=true') ?>" id="modal_sale"><span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/markers.svg" class="js-img-to-svg"></span> COMPRAR EN LÍNEA</a>
					</div>
					<div class="col-md-6">
						<a href="<?php echo $this->createUrl('puntos_venta/') ?>"><span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/maps.svg" class="js-img-to-svg"></span> PUNTO DE VENTA CERCANO</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section parallax link-marker" data-image-src="<?php echo Yii::app()->request->baseUrl; ?>/images/backgrounds/imagen-landing-footer.jpg">
	<div class="panel efect-right">
		<div class="contain">
			<p>EL CANNABIS MEDICINAL ES UN EFECTIVO ANALGÉSICO, ANTIINFLAMATORIO, ANTIESPASMÓDICO, Y ANTICONVULSIVO.</p>

			<a href="<?php echo $this->createUrl('beneficios/') ?>" class="link">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/circle.svg" class="js-img-to-svg">
				<div class="text">
					<span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/cannabis.svg" class="js-img-to-svg"></span>
					<p><strong>OTROS</strong></p>
					<p><strong>TRATAMIENTOS</strong></p>
					<p>VER AQUÍ</p>
				</div>
			</a>
		</div>
	</div>
</section>