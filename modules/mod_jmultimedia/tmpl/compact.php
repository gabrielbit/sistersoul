<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>

<div class="relateditems<?php echo $params->get('moduleclass_sfx'); ?>">
	<?php 
		foreach ($list as $item){
			$link =  JRoute::_('index.php?option=com_jmultimedia&layout=default&view=media&id='.$item->id);
	?>
	<div class="compact" style="float:left; margin:4px;">
		<div class="mediathumb">
			<a href="<?php echo $link; ?>">
				<img src="<?php echo $item->thumbnail; ?>" />	
				<div><?php echo $item->title; ?></div>
			</a>
		</div>
	</div>
	<?php 
		} //[end] list
	?>
	<div style="clear:both;"></div>
</div>