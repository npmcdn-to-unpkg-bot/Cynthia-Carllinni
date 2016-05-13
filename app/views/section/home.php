<?php if(!$this->input->is_ajax_request()) $this->load->view('common/header'); ?>

<div id="content" class="section-home">

	<img class="fullpic" src="<?= layout('img/home.jpg') ?>" alt="">
</div>

<?php if(!$this->input->is_ajax_request()) $this->load->view('common/footer') ?>