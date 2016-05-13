<?php if(!$this->input->is_ajax_request()) $this->load->view('common/header'); ?>

<div id="content" class="section-about">

	<img class="fullpic" src="<?= layout('img/about.jpg') ?>" alt="">
</div>

<?php if(!$this->input->is_ajax_request()) $this->load->view('common/footer') ?>