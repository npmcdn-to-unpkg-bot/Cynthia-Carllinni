<?php if(!$this->input->is_ajax_request()) $this->load->view('common/header');


switch ($subsection) {
	default:
		$subsection = 'tronos';
		$sliders = array(
			array('img'=>$section.'/'.$subsection.'/1.png','caption1'=>'Tronos​ ​¿Quién reina? ¿Quién se esconde? ¿Quiénes son los otros?','caption2'=>'Thrones​.​ ​W​ho reigns? ​W​ho is hiding? ​W​ho are the others?'),
			array('img'=>$section.'/'.$subsection.'/2.png','caption1'=>'Tronos​ ​¿Quién reina? ¿Quién se esconde? ¿Quiénes son los otros?','caption2'=>'Thrones​.​ ​W​ho reigns? ​W​ho is hiding? ​W​ho are the others?'),
			array('img'=>$section.'/'.$subsection.'/3.png','caption1'=>'Tronos​ ​¿Quién reina? ¿Quién se esconde? ¿Quiénes son los otros?','caption2'=>'Thrones​.​ ​W​ho reigns? ​W​ho is hiding? ​W​ho are the others?'),
			array('img'=>$section.'/'.$subsection.'/4.png','caption1'=>'Tronos​ ​¿Quién reina? ¿Quién se esconde? ¿Quiénes son los otros?','caption2'=>'Thrones​.​ ​W​ho reigns? ​W​ho is hiding? ​W​ho are the others?'),
			array('img'=>$section.'/'.$subsection.'/5.png','caption1'=>'Tronos​ ​¿Quién reina? ¿Quién se esconde? ¿Quiénes son los otros?','caption2'=>'Thrones​.​ ​W​ho reigns? ​W​ho is hiding? ​W​ho are the others?'),
			array('img'=>$section.'/'.$subsection.'/6.png','caption1'=>'Tronos​ ​¿Quién reina? ¿Quién se esconde? ¿Quiénes son los otros?','caption2'=>'Thrones​.​ ​W​ho reigns? ​W​ho is hiding? ​W​ho are the others?'),
			array('img'=>$section.'/'.$subsection.'/7.png','caption1'=>'Tronos​ ​¿Quién reina? ¿Quién se esconde? ¿Quiénes son los otros?','caption2'=>'Thrones​.​ ​W​ho reigns? ​W​ho is hiding? ​W​ho are the others?'),
			array('img'=>$section.'/'.$subsection.'/8.png','caption1'=>'Tronos​ ​¿Quién reina? ¿Quién se esconde? ¿Quiénes son los otros?','caption2'=>'Thrones​.​ ​W​ho reigns? ​W​ho is hiding? ​W​ho are the others?'),
			array('img'=>$section.'/'.$subsection.'/9.png','caption1'=>'Tronos​ ​¿Quién reina? ¿Quién se esconde? ¿Quiénes son los otros?','caption2'=>'Thrones​.​ ​W​ho reigns? ​W​ho is hiding? ​W​ho are the others?'),
			array('img'=>$section.'/'.$subsection.'/10.png','caption1'=>'Tronos​ ​¿Quién reina? ¿Quién se esconde? ¿Quiénes son los otros?','caption2'=>'Thrones​.​ ​W​ho reigns? ​W​ho is hiding? ​W​ho are the others?'),
		);

		$text = "<div class=\"text-top\">
				<h1>Tronos</h1>
				<p>
					Mdf y restos de varillas de marcos.
				</p>

				<p>
					I.​ ​60x60x60​x​h.200 cm.<br>
					II.80x110xh.85 cm.
				</p>

			</div>";
		break;
	case 'fatskinny':
		$sliders = array(
			array('img'=>$section.'/'.$subsection.'/1.png'),
			array('img'=>$section.'/'.$subsection.'/2.png'),
			array('img'=>$section.'/'.$subsection.'/3.png'),
			array('img'=>$section.'/'.$subsection.'/4.png'),
			array('img'=>$section.'/'.$subsection.'/5.png'),
		);

		$text = "<div class=\"text-top\">
				<h1>Fat Skinny Gente</h1>
				<p>
					Dibujo en tinta, cartón,<br>
					molduras de varillas de<br>
					marcos para cuadros.
				</p>

			</div>";
		break;
	case 'homoz':
		$sliders = array(
			array('img'=>$section.'/'.$subsection.'/1.png', 'caption3'=>'50x50x50 cm.'),
			array('img'=>$section.'/'.$subsection.'/2.png', 'caption3'=>'50x50x50 cm.'),
			array('img'=>$section.'/'.$subsection.'/3.png', 'caption3'=>'50x50x50 cm.'),
			array('img'=>$section.'/'.$subsection.'/4.png', 'caption3'=>'50x50x50 cm.'),
		);

		$text = "<div class=\"text-top\">
				<h1>Homoz</h1>
				<p>Banco inclinado.<br>
					Serie de XX. Mdf y restos de varillas de marcos<br>
				</p>

			</div>";
		break;

	case 'ritualezdepaz':
		$sliders = array(
			array('img'=>$section.'/'.$subsection.'/1.png'),
			array('img'=>$section.'/'.$subsection.'/2.png','caption3'=>'Ofrenda'),
			array('img'=>$section.'/'.$subsection.'/3.png','caption3'=>'Ofrenda'),
			array('img'=>$section.'/'.$subsection.'/4.png','caption3'=>'Cristal'),
			array('img'=>$section.'/'.$subsection.'/5.png','caption3'=>'Cristal'),
			array('img'=>$section.'/'.$subsection.'/6.png','caption3'=>'Faisan'),
			array('img'=>$section.'/'.$subsection.'/7.png','caption3'=>'Faisan'),
			array('img'=>$section.'/'.$subsection.'/8.png','caption3'=>'Siembra'),
			array('img'=>$section.'/'.$subsection.'/9.png','caption3'=>'Siembra'),
			array('img'=>$section.'/'.$subsection.'/10.png'),
			array('img'=>$section.'/'.$subsection.'/11.png','caption3'=>'Nido'),
			array('img'=>$section.'/'.$subsection.'/12.png','caption3'=>'Nido'),
		);

		$text = "<div class=\"text-top\">
				<h1>Rituales de Paz</h1>
				<p>
				Lámparas de pie.<br>
				Hierro y materiales encontrados.<br>
				h. 200 cm
				</p>

			</div>";
		break;

	case 'mrfeticcio':
		$sliders = array(
			array('video'=>'ficuyJOS3A4'),
			array('img'=>$section.'/'.$subsection.'/1.png', 'caption3'=>'50x50x50​ ​cm.'),

		);

		$text = "<div class=\"text-top\">
				<h1>Le Virage</h1>

			</div>";
		break;

	case 'psyspeccio':
		$sliders = array(
			array('img'=>$section.'/'.$subsection.'/1.png', 'caption2'=>'110x110​ ​cm.'),
			array('img'=>$section.'/'.$subsection.'/2.png', 'caption2'=>'110x110​ ​cm.'),
		);

		$text = "<div class=\"text-top\">
				<h1>PsySpecchio</h1>
			</div>";
		break;
}

?>
<div id="content" class="section-feticcio section-feticcio-<?= $subsection ?>">
	<div class="flexrow">
		<div class="col first-col">
			<div class="nav">
				<ul>
					<li<? if($subsection=='tronos') echo ' class="active"'?>><a href="<?= base_url('feticcio/tronos') ?>">Tronos</a></li>
					<li<? if($subsection=='fatskinny') echo ' class="active"'?>><a href="<?= base_url('feticcio/fatskinny') ?>">Fat Skinny Gente</a></li>
					<li<? if($subsection=='homoz') echo ' class="active"'?>><a href="<?= base_url('feticcio/homoz') ?>">Homoz</a></li>
					<li<? if($subsection=='ritualezdepaz') echo ' class="active"'?>><a href="<?= base_url('feticcio/ritualezdepaz') ?>">Rituales de Paz</a></li>
					<li<? if($subsection=='mrfeticcio') echo ' class="active"'?>><a href="<?= base_url('feticcio/mrfeticcio') ?>">MRFeticcio</a></li>
					<li<? if($subsection=='psyspeccio') echo ' class="active"'?>><a href="<?= base_url('feticcio/psyspeccio') ?>">PsySpecchio</a></li>
				</ul>
				<div class="clear"></div>
			</div>
			<div class="text">
				<?= $text ?>
			</div>
		</div>

		<div class="col second-col">
			<? $this->load->view('common/flexslider', array( 'sliders'=>$sliders )); ?>
   		</div>
	 
	 	</div>

</div>
<?php if(!$this->input->is_ajax_request()) $this->load->view('common/footer') ?>