<?php
	$ruta = explode("/",Yii::app()->request->pathInfo);

	$language = (isset(Yii::app()->request->cookies['language']))?Yii::app()->request->cookies['language']:1;
	$menu = Menus::model()->findByAttributes(array('language'=>$language, 'status'=>1));
	if($menu == null)
		$menu = Menus::model()->findByPk(1);
	$contact = PagesSite::model()->findByAttributes(array('principal'=>14, 'language'=>Yii::app()->request->cookies['language']));
	if($contact == null)
		$contact = PagesSite::model()->findByPk(14);
?>

<div class="container principal-menu">
	<h1 class="principal-logo"><a class="super-div" href="<?php echo Yii::app()->homeUrl; ?>"></a></h1>
	<nav>
		<ul>
			<?php foreach ($menu->menuItems as $key => $item) { ?>
				<li class="item-menu"><a href="<?php echo $this->createUrl($item->page0->navigation.'/') ?>" class="<?php echo (strtolower($ruta[0]) == $item->page0->navigation)?"active":""; ?>"><?php echo MyMethods::myStrtoupper($item->page0->name); ?></a></li>
			<?php } ?>
		</ul>
		<div class="social">
			<a href="<?php echo $this->createUrl($contact->navigation.'/') ?>" class="show-item-social" title="<?php echo MyMethods::myStrtoupper($contact->name); ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/contact.svg" class="js-img-to-svg"></a>
			<?php $facebook = Variables::model()->findByPk(2); ?>
			<a href="<?php echo ($facebook->value != '')?$facebook->value:'#'; ?>" target="_blank" class="show-item-social" title="FACEBOOK"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/facebook.svg" class="js-img-to-svg"></a>
			<?php $instagram = Variables::model()->findByPk(3); ?>
			<a href="<?php echo ($instagram->value != '')?$instagram->value:'#'; ?>" target="_blank" class="show-item-social" title="INSTAGRAM"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/instagram.svg" class="js-img-to-svg"></a>
			<div class="item-menu is-item-social">
				<a href="#">CONTACTO</a>
			</div>
		</div>
		<div class="button">
			<span class="bar"></span>
			<span class="bar"></span>
			<span class="bar"></span>
		</div>
	</nav>
	<div class="menu_responsive">
		<ul>
			<?php foreach ($menu->menuItems as $key => $item) { ?>
				<li class="<?php echo (strtolower($ruta[0]) == $item->page0->navigation)?"active":""; ?>"><a href="<?php echo $this->createUrl($item->page0->navigation.'/') ?>"><?php echo MyMethods::myStrtoupper($item->page0->name); ?></a></li>
			<?php } ?>
			<li>
				<div class="social">
					<a href="<?php echo $this->createUrl($contact->navigation.'/') ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/contact.svg" class="js-img-to-svg" alt="Contacto"></a>
					<a href="<?php echo ($facebook->value != '')?$social->value:'#'; ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/facebook.svg" class="js-img-to-svg" alt="Facebook"></a>
					<a href="<?php echo ($instagram->value != '')?$social->value:'#'; ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/instagram.svg" class="js-img-to-svg" alt="Instagram"></a>
				</div>
			</li>
		</ul>
		<div class="select-language responsive">
			<p>
				<?php
					$languages = Languages::model()->findAllByAttributes(array('status'=>1));
					foreach ($languages as $key => $language) {
						if($key != 0){ ?>
							<span>|</span>
						<?php }
					?>
						<a href="<?php echo $this->createUrl('change_language/?language='.$language->id_language) ?>"><?php echo substr(MyMethods::myStrtoupper($language->name), 0, 3); ?></a>
					<?php }
				?>
			</p>
		</div>
	</div>
	<div class="select-language">
		<p>
			<?php
				$languages = Languages::model()->findAllByAttributes(array('status'=>1));
				foreach ($languages as $key => $language) {
					if($key != 0){ ?>
						<span>|</span>
					<?php }
				?>
					<a href="<?php echo $this->createUrl('change_language/?language='.$language->id_language) ?>"><?php echo substr(MyMethods::myStrtoupper($language->name), 0, 3); ?></a>
				<?php }
			?>
		</p>
	</div>
</div>