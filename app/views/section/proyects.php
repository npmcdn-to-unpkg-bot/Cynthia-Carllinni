<?php if(!$this->input->is_ajax_request()) $this->load->view('common/header') ?>

<div id="content">
	<div class="flexrow">
		<div class="col first-col">
			<div class="nav">
				<ul>
					<li class="active"><a href="#">Other selves in me, <br />Me in others, Myself in me </a></li>
					<li><a href="#">YshgcHshlrpSchZz</a></li>
					<li><a href="#">Rocketoscope</a></li>
					<li><a href="#">General Rehearsal for Today´s Charades</a></li>
					<li><a href="#">Body as Locus</a></li>
				</ul>
				<div class="clear"></div>
			</div>
			<div class="text">
				<div class="text-top">
					<h1>General Rehearsal<br>
					for Today’s Charades</h1>
					<p>
						Mix media Interactive Installation.
						Ruth Prowse School of Art, ZA.
					</p>
					<p class="light-top">
						Tittle inspired by the song “Vencedores Vencidos” of the Argentinian rock band, 
						Patricio Rey y sus Redonditos de Ricota. <br />
						Patricio Rey, 1988, Bs. As.
					</p>

				</div>
				<div class="text-bottom">
					<h1>
						Ensayo General<br>
						para la Farsa Actual
					</h1>
					<p>
						Instalación interactiva  mix media. <br />
						Ruth Prowse School of Art, ZA.
					</p>
					<p class="light-bottom">
						Título inspirado en la canción “Vencedores Vencidos” de la banda de rock Argentina, 
						Patricio Rey y sus Redonditos de Ricota. <br />Patricio Rey, 1988, Bs.As.
					</p>
				</div>
			</div>
		</div>

		<div class="col second-col">
			<div class="flexslider">
		          <ul class="slides">
		            <li>
		  	    	    <img src="<?= layout('img/slider-home/01.jpg') ?>" />
		              	<p class="flex-caption-top">Adventurer Cheesecake Brownie</p>
		              	<p class="flex-caption">Adventurer Cheesecake Brownie</p>
		  	    	</li>
		  	    	<li>
		  	    	    <img src="<?= layout('img/slider-home/02.jpg') ?>" />
		              	<p class="flex-caption-top">Adventurer Lemon</p>
		              	<p class="flex-caption">Adventurer Lemon</p>
		  	    	</li>
		  	    	<li>
		  	    	    <img src="<?= layout('img/slider-home/03.jpg') ?>" />
		             	 <p class="flex-caption-top">Adventurer Donut</p>
		             	 <p class="flex-caption">Adventurer Donut</p>
		  	    	</li>
		  	    	<li>
		  	    	    <img src="<?= layout('img/slider-home/04.jpg') ?>" />
		             	<p class="flex-caption-top">Adventurer Caramel</p>
		             	<p class="flex-caption">Adventurer Caramel</p>
		  	    	</li>
		          </ul>
   		 	</div>
   		</div>
	 
	 	</div>

</div>

<?php if(!$this->input->is_ajax_request()) $this->load->view('common/footer') ?>