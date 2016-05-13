<?php if(!$this->input->is_ajax_request()) $this->load->view('common/header');


switch ($subsection) {
	default:
		$subsection= 'otherselves';
		$sliders = array(
			array('img'=>'proyects/otherselves/1.png', 'caption3'=>'59x42 cm'),
			array('img'=>'proyects/otherselves/2.png', 'caption3'=>'30x31 cm'),
			array('img'=>'proyects/otherselves/3.png', 'caption3'=>'30x31 cm'),
			array('img'=>'proyects/otherselves/4.png', 'caption3'=>'25x50 cm'),
			array('img'=>'proyects/otherselves/5.png', 'caption3'=>'41x49 cm'),
			array('img'=>'proyects/otherselves/6.png', 'caption3'=>'40x90 cm'),
			array('img'=>'proyects/otherselves/7.png', 'caption3'=>'31x129 cm'),
			array('img'=>'proyects/otherselves/8.png', 'caption3'=>'56x67 cm'),
			array('img'=>'proyects/otherselves/9.png', 'caption3'=>'70x102 cm'),
			array('img'=>'proyects/otherselves/10.png', 'caption3'=>'60x83 cm'),
			array('img'=>'proyects/otherselves/11.png'),
			array('img'=>'proyects/otherselves/11b.png'),
			array('img'=>'proyects/otherselves/12.png', 'caption3'=>'22x183 cm'),
			array('img'=>'proyects/otherselves/13.png', 'caption3'=>'41x50 cm'),
			array('img'=>'proyects/otherselves/14.png', 'caption3'=>'123x21 cm'),
			array('img'=>'proyects/otherselves/15.png'),
			array('img'=>'proyects/otherselves/16.png', 'caption3'=>'102x170 cm'),
			array('img'=>'proyects/otherselves/17.png', 'caption3'=>'28x100 cm'),
			array('img'=>'proyects/otherselves/18.png', 'caption3'=>'26x36 cm'),
			array('img'=>'proyects/otherselves/19.png', 'caption3'=>'50x23 cm'),
			array('img'=>'proyects/otherselves/20.png', 'caption3'=>'168x112 cm'),
		);

		$text = "<div class=\"text-top\">
						<h1>Other selves in me, me in others, myself in me</h1>
						<p>
							Oil on wood and mix media. 
							2015 - (in process)
						</p>
					</div>
					<div class=\"text-bottom\">
						<h1>Otros en mi, Yo en otros, Yo en mi</h1>
						<p>
							Oleo sobre madera y mix media. 
							2015 - (en proceso)
						</p>
					</div>";

		break;
	case 'YshgcHshlrpSchZz':
		$sliders = array(
			array('video'=>'hCDrwIckO9o', 'caption3'=>'Lloviznas'),
			array('video'=>'nhUlpP94vUg', 'caption3'=>'Máquina de lluvia'),
			array('video'=>'E6UYSMXW3Rk', 'caption3'=>'Molino de Olas'),
			array('img'=>'proyects/YshgcHshlrpSchZz/3.jpg'),
			array('img'=>'proyects/YshgcHshlrpSchZz/4.jpg'),
		);

		$text = "<div class=\"text-top\">
				<h1>Yshgchshlrpschzz</h1>
				<p>
					Mix media installation. 
					Opening Myworkshop/Myhouse. 
					Bs.As. Arg. 2015
				</p>
				<p class=\"light-top\">
					There´s a storm that makes me deaf, I can hear the swaying of never resting waves and magical drops of water like short rains passing by. I am listening to an erratic orchestra of chants that overlap and silent without a rhythm.
				</p>

			</div>
			<div class=\"text-bottom\">
				<h1>Otros en mi, Yo en otros, Yo en mi</h1>
				<p>
					Instalación Mix media. 
					Inauguración Mitaller/Micasa. 
					Bs.As. Arg. 2015
				</p>
				<p class=\"light-bottom\">
					Hay una tormenta que me aturde, oigo el vaivén de las olas sin descanso alguno y mágicas gotitas de agua como cortas lluvias pasajeras. Estoy escuchando una orquesta errática de cantos que se enciman  y se silencian sin ritmo alguno. 
				</p>
			</div>";
		break;
	case 'rocketoscope':
		$sliders = array(
			array('video'=>'jFUUB4CnCI8', 'caption3'=>'Rocketoscope'),
			array('img'=>'proyects/rocketoscope/1.jpg'),
			array('img'=>'proyects/rocketoscope/2.jpg'),
			array('img'=>'proyects/rocketoscope/3.jpg'),
			array('img'=>'proyects/rocketoscope/4.jpg'),
			array('img'=>'proyects/rocketoscope/5.jpg'),
		);

		$text = "<div class=\"text-top\">
				<h1>Rocketoscope</h1>
				<p>
					Mix media intervention.<br>
					Donation to the South African<br>
					Astronomical Observatory.<br>
					Cape Town, ZA
				</p>

			</div>
			<div class=\"text-bottom\">
				<h1>Rocketoscope</h1>
				<p>
					Intervención Mix media.<br>
					Donación al Observatorio de<br>
					Astronomía de Sudáfrica.<br>
					Cape Town, ZA.
				</p>
			</div>";
		break;
	case 'generalrehearsal':
		$sliders = array(
			array('img'=>'proyects/generalrehearsal/1.jpg', 'caption1'=>'The scene takes place in this fantasy landscape made out of newspaper and cardboard boxes. Here, we rehearse to play the part of the participant; creating, through our actions, an acoustic and visual atmosphere; altering everyone’s perception around us; breaking free from the vigilance over ones thoughts and growing the capacity of amusement and wonder. Breaking free from the ´hope in the
other world´; and turning this into our responsibility and duty. Recreating our own reality, creating our own history...', 'caption2'=>'La escena toma lugar en este paisaje fantástico creado por diarios y cajas de cartón. Aquí ensayamos para jugar el rol del participante; creando, a través de nuestras acciones, una atmósfera acústica y visual; alterando la percepción de todos a nuestro alrededor, liberándonos de la vigilancia sobre nuestros pensamientos y dejando crecer la capacidad de asombro. Liberándonos de ´la esperanza en el otro mundo´ y convirtiendo esto en nuestra responsabilidad y quehacer. Recreando nuestra propia realidad, creando nuestra propia historia...'),
			array('img'=>'proyects/generalrehearsal/2.jpg'),
			array('img'=>'proyects/generalrehearsal/3.jpg'),
			array('img'=>'proyects/generalrehearsal/4.jpg'),
			array('img'=>'proyects/generalrehearsal/5.jpg'),
			array('img'=>'proyects/generalrehearsal/6.jpg'),
		);

		$text = "<div class=\"text-top\">
				<h1>General Rehearsal<br>
				for Today’s Charades
				</h1>
				<p>
					Mix media Interactive Installation.<br>
					Ruth Prowse School of Art, ZA.
				</p>
				<p class=\"light-top\">
					Tittle inspired by the song “Vencedores<br>
					Vencidos” of the Argentinian rock band,<br>
					Patricio Rey y sus Redonditos de Ricota.<br>
					Patricio Rey, 1988, Bs. As.
				</p>

			</div>
			<div class=\"text-bottom\">
				<h1>Ensayo General<br>
				para la Farsa Actual</h1>
				<p>
					Instalación interactiva  mix media.<br>
					Ruth Prowse School of Art, ZA.
				</p>
				<p class=\"light-bottom\">
					Título inspirado en la canción “Vencedores<br>
					Vencidos” de la banda de rock Argentina,<br>
					Patricio Rey y sus Redonditos de Ricota.<br>
					Patricio Rey, 1988, Bs.As.
				</p>
			</div>";
		break;
	case 'bodyaslocus':
		$sliders = array(
			array('img'=>'proyects/bodyaslocus/1.jpg'),
			array('img'=>'proyects/bodyaslocus/2.jpg'),
		);

		$text = "<div class=\"text-top\">
				<h1>Body as Locus, 80% water</h1>
				<p>
					Mix-media interactive sculpture.<br>
					 Part of “Coalition”,<br>
					 Ruth Prowse Shool of Art, ZA.
				</p>
				<p class=\"light-top\">
 					Whoever looks through, becomes part<br>
 					of the piece. For who observes, the<br>
 					observer and the piece, are now one...
 				</p>

			</div>
			<div class=\"text-bottom\">
				<h1>El cuerpo como<br>
				emplazamiento, 80% agua</h1>
				<p>
					Escultura interactiva, Mix-media.<br>
					Parte de “Coalition”,<br>
					Ruth Prowse Shool of Art, ZA.
				</p>
				<p class=\"light-bottom\">
					Quien mira a través, se transforma en<br>
					parte de la pieza. Para quien observa, el<br>
					observador y la pieza, ahora son uno...
				</p>
			</div>";
		break;
}


?>

<div id="content" class="section-proyects section-proyects-<?= $subsection ?>">
	<div class="flexrow">
		<div class="col first-col">
			<div class="nav">
				<ul>
					<li<? if($subsection=='otherselves') echo ' class="active"'?>><a href="<?= base_url('proyects/otherselves') ?>">Other selves in me, <br />Me in others, Myself in me </a></li>
					<li<? if($subsection=='YshgcHshlrpSchZz') echo ' class="active"'?>><a href="<?= base_url('proyects/YshgcHshlrpSchZz') ?>">YshgcHshlrpSchZz</a></li>
					<li<? if($subsection=='rocketoscope') echo ' class="active"'?>><a href="<?= base_url('proyects/rocketoscope') ?>">Rocketoscope</a></li>
					<li<? if($subsection=='generalrehearsal') echo ' class="active"'?>><a href="<?= base_url('proyects/generalrehearsal') ?>">General Rehearsal for Today´s Charades</a></li>
					<li<? if($subsection=='bodyaslocus') echo ' class="active"'?>><a href="<?= base_url('proyects/bodyaslocus') ?>">Body as Locus</a></li>
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