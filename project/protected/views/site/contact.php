<article class="section">
	<div class="container">
		<header>
			<h1 class="principal-title btn-green-light efect-bottom">
				<span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/phone.svg" class="js-img-to-svg" alt="Contacto"></span>
				<?php echo MyMethods::myStrtoupper($page->name); ?>
			</h1>
		</header>
		<div class="article">
			<div class="contact-page">
				<div class="form">
					<div class="bracket">
						<?php
							if(Yii::app()->request->cookies['language'] == "2")
								echo "It is important for us to be in touch with you";
							else
								echo "Es importante para nosotros estar en contacto contigo";
						?>
					</div>

					<p class="icon"><span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/phone-circle.svg" alt="" class="js-img-to-svg"></span> <?php echo $phone->value; ?></p>
					<p class="icon"><span><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/message.svg" alt="" class="js-img-to-svg"></span> <?php echo $email->value; ?></p>

					<span class="border"></span>

					<p>Escríbenos:</p>

					<form id="form-contact" action="<?php echo $this->createUrl('contacto/') ?>">
						<div class="form-group">
							<input type="text" placeholder="Nombre" name="name" required>
						</div>
						<div class="form-group">
							<input type="email" placeholder="Correo electrónico" name="email" required>
						</div>
						<div class="form-group">
							<textarea name="subject" placeholder="Asunto" required></textarea>
						</div>
						<div class="form-group">
							<span class="error"></span>
						</div>
						<div class="form-group">
							<button type="submit">ENVIAR</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</article>