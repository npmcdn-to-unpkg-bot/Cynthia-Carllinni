		</div>
	 </div>
  </div>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

  <script src="<?= layout('js/jquery.flexslider.js') ?>"></script>
  <script src="<?= layout('js/main.js') ?>"></script>

  <script type="text/javascript">

  	App.Init({ 'url': '<?= base_url() ?>', 'layout': '<?= layout() ?>', 'section': '<?= $section; ?>' });

  </script>

	<? /*
  <!-- Syntax Highlighter -->
  <script type="text/javascript" src="<?= layout('js/shCore.js') ?>"></script>
  <script type="text/javascript" src="<?= layout('js/shBrushXml.js') ?>"></script>
  <script type="text/javascript" src="<?= layout('js/shBrushJScript.js') ?>"></script>
  <!-- Optional FlexSlider Additions -->
  <script src="<?= layout('js/jquery.easing.js') ?>"></script>
  <script src="<?= layout('js/jquery.mousewheel.js') ?>"></script>
*/ ?>
    </body>
</html>
