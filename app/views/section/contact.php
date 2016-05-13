<?php if(!$this->input->is_ajax_request()) $this->load->view('common/header'); ?>

<div id="content" class="section-contact">

	<img class="fullpic bg-fullpic" src="<?= layout('img/home.jpg') ?>" alt="">
	<div class="contactbox">
		<p>e-mail<br>
		<a href="mailto:cynthiacarllinni@gmail.com">cynthiacarllinni@gmail.com</a></p>
		<p>
		facebook<br>
			<a href="https://www.facebook.com/Cynthia-Carllinni-423199941088712/">Cynthia Carllinni</a>
		</p>
	</div>
</div>

<?php if(!$this->input->is_ajax_request()) $this->load->view('common/footer') ?>