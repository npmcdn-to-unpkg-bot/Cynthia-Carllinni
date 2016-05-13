<div class="flexslider">
	<ul class="slides">
		<? foreach ($sliders as $i => $s) : ?>
	    	<li><? if(isset($s['html'])) echo $s->html ?>
	    	<? if(isset($s['video'])) : ?><iframe src="https://www.youtube.com/embed/<?= $s['video'] ?>" frameborder="0" allowfullscreen></iframe><? endif ?>
	    	<? if(isset($s['img'])) : ?><img src="<?= layout( 'img/sliders/' . $s['img'] ) ?>" /><? endif ?>
	      	<? if(isset($s['caption1'])) : ?><p class="flex-caption-top"><?= $s['caption1'] ?></p><? endif ?>
	      	<? if(isset($s['caption2'])) : ?><p class="flex-caption"><?= $s['caption2'] ?></p><? endif ?>
	      	<? if(isset($s['caption3'])) : ?><p class="flex-caption-gradient"><?= $s['caption3'] ?></p><? endif ?></li>
		<? endforeach ?>
	</ul>
 </div>