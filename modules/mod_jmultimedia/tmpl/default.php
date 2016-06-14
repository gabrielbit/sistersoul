<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>

<table width="100%" class="relateditems<?php echo $params->get('moduleclass_sfx'); ?>">
<?php 
	$k=0;
	foreach ($list as $item){
		$date = JFactory::getDate($item->added);
		$item->added = $date->toFormat( '%d %B %Y %H:%M' );
		if($item->author==''){ $item->author = JText::_('Guest'); }  		
		
		$link['media'] = JRoute::_('index.php?option=com_jmultimedia&layout=default&view=media&id='.$item->id);
		$link['category'] = JRoute::_('index.php?option=com_jmultimedia&view=jmultimedia&catid=' . $item->catid);
		
		$k = 1 - $k;
?>
	<tr class="sectiontableentry<?php echo $k+1; ?>">
		<td valign="top" width="5%">
			<div class="mediathumb">
				<a href="<?php echo $link['media']; ?>">
					<img src="<?php echo $item->thumbnail; ?>" />
				</a>
			</div>
		</td>
		<td valign="top" align="left" >
			<h4><a href="<?php echo $link['media']; ?>"><?php echo $item->title; ?></a></h4>
			<div class="contentdescription">
				<strong  class="createdby"><?php echo $item->author; ?>: </strong>										
				<?php echo $item->description; ?>
			</div>
			
			<div class="mediadetails">
				<span  class="createdate"><?php echo $item->added; ?></span> |
				<span>
					<strong><?php echo JText::_('Category'); ?>: </strong> 
					<a href="<?php echo $link['category']; ?>"><?php echo $item->category; ?></a>
				</span> |
				<span><strong><?php echo JText::_('Views'); ?>: </strong> <?php echo $item->views; ?></span>
			</div>
		</td>
	</tr>	
<?php 
	} //[end] list
?>
</table>