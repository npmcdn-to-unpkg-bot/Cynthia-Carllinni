<? $this->load->view('common/html'); ?>
<div id="app" class="section-proyects">
	<div id="main">
		<header>
			<ul>
				<li><a class="app-loader<? if($section == 'about') echo ' active' ?>" href="<?= base_url('about') ?>">ABOUT</a></li>
				<li><a class="app-loader<? if($section == 'proyects') echo ' active' ?>" href="<?= base_url('proyects') ?>">PROYECTS</a></li>
				<li><a class="app-loader<? if($section == 'feticcio') echo ' active' ?>" href="<?= base_url('feticcio') ?>">FETICCIO</a></li>
				<li><a class="app-loader<? if($section == 'contact') echo ' active' ?>" href="<?= base_url('contact') ?>">CONTACT</a></li>
			</ul>
			<div class="logo">
				<a class="app-loader<?= ($section == 'proyects') ? ' active' : '' ?>" href="<?= base_url('home') ?>"><img src="<?= layout('img/logo.png') ?>" /></a>
			</div>
			<div style="clear:both"></div>
		</header>
		<div id="app-section">