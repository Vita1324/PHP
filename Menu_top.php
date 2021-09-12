<div id="mainarea">
	<div class="heading">
			
		<div class="toplinks" style="padding-left:30px;">
					<a href="?option=main">Главная</a></div>
				<div class="sap2">::</div>
		<?php $i = 1;?>
		<?php foreach($menu_top as $item) <img src="https://webformyself.com/wp-includes/images/smilies/icon_confused.gif" alt=":?" class="wp-smiley"> >
			<div class='toplinks'><a href='?option=menu&id_menu=<?php echo $item['id_menu']?>'><?php echo $item['name_menu']?></a></div>
				
				<?php if($i != count($menu_top)) <img src="https://webformyself.com/wp-includes/images/smilies/icon_confused.gif" alt=":?" class="wp-smiley"> >
					<div class='sap2'>::</div>
				<?php endif;?>
				<?php $i++;?>
		<?php endforeach; ?>
	</div>
