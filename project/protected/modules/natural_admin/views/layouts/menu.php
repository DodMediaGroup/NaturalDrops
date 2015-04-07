<?php $path = explode("/",Yii::app()->request->pathInfo); ?>
<li>
	<a href='<?php echo $this->createUrl('index/') ?>' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'index')?'active':''):'active'; ?>">
		<i class='icon-home-3'></i>
		<span>Dashboard</span>
	</a>
</li>

<li>
	<a href='<?php echo $this->createUrl('slide/admin') ?>' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'slide')?'active':''):''; ?>">
		<i class='icon-picture-2'></i>
		<span>Slide principal</span>
	</a>
</li>

<li>
	<a href='<?php echo $this->createUrl('blog/admin') ?>' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'blog')?'active':''):''; ?>">
		<i class='icon-newspaper-1'></i>
		<span>Entradas Blog</span>
	</a>
</li>

<li>
	<a href='<?php echo $this->createUrl('testimonials/admin') ?>' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'testimonials')?'active':''):''; ?>">
		<i class='icon-comment-3'></i>
		<span>Testimonios</span>
	</a>
</li>

<li>
	<a href='<?php echo $this->createUrl('treatments/admin') ?>' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'treatments')?'active':''):''; ?>">
		<i class='icon-droplet'></i>
		<span>Tratamientos</span>
	</a>
</li>

<li>
	<a href='<?php echo $this->createUrl('questions/admin') ?>' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'questions')?'active':''):''; ?>">
		<i class='icon-help-circled-2'></i>
		<span>Preguntas frecuentes</span>
	</a>
</li>

<li class='has_sub'>
	<a href='#' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'stores')?'active':''):''; ?>">
		<i class='icon-basket-1'></i>
		<span>Tiendas</span>
		<span class="pull-right">
			<i class="fa fa-angle-down"></i>
		</span>
	</a>
	<ul>
		<li>
			<a href='<?php echo $this->createUrl('stores/admin') ?>' class="">
				<span>Tiendas</span>
			</a>
		</li>
		<li>
			<a href='<?php echo $this->createUrl('stores/cities') ?>' class="">
				<span>Ciudades</span>
			</a>
		</li>
		<li>
			<a href='<?php echo $this->createUrl('stores/countries') ?>' class="">
				<span>Paises</span>
			</a>
		</li>
	</ul>
</li>

<li>
	<a href='<?php echo $this->createUrl('team/admin') ?>' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'team')?'active':''):''; ?>">
		<i class='icon-users-1'></i>
		<span>Equipo</span>
	</a>
</li>