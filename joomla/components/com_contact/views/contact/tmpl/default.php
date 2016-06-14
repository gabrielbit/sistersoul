<?php
/**
 * $Id: default.php 11917 2009-05-29 19:37:05Z ian $
 */
defined( '_JEXEC' ) or die( 'Restricted access' );

$cparams = JComponentHelper::getParams ('com_media');
?>
<?php if ( $this->params->get( 'show_page_title', 1 ) && !$this->contact->params->get( 'popup' ) && $this->params->get('page_title') != $this->contact->name ) : ?>
	<div class="componentheading<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>">
		<?php echo $this->params->get( 'page_title' ); ?>
	</div>
<?php endif; ?>
<div id="component-contact">
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="contentpaneopen<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>">
<?php if ( $this->params->get( 'show_contact_list' ) && count( $this->contacts ) > 1) : ?>
<tr>
	<td colspan="2" align="center">
		<br />
        
		<form action="<?php echo JRoute::_('index.php') ?>" method="post" name="selectForm" id="selectForm">
		<?php echo JText::_( 'Select Contact' ); ?>:
			<br />
			<?php echo JHTML::_('select.genericlist',  $this->contacts, 'contact_id', 'class="inputbox" onchange="this.form.submit()"', 'id', 'name', $this->contact->id);?>
			<input type="hidden" name="option" value="com_contact" />
		</form>
        
	</td>
</tr>
<?php endif; ?>
<?php if ( $this->contact->name && $this->contact->params->get( 'show_name' ) ) : ?>
<tr>
	<td width="100%" class="contentheading<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>">
		<img src="templates/sister/images/datosContacto.png"  border="0" style="margin-bottom:10px;"/>
        <div class="contacto">
        	<div class="fl" style="width:363px;">
            <ul class="fl">
            	<li>
                	<strong>Nombre:</strong> Pablo Martínez Zuviría
                </li>
                <li>
                	<strong>Teléfono:</strong> (011) 156 043 8258
                </li>
            </ul>
            <ul class="fl">
            	<li>
                	<strong>Nombre:</strong> Teresita Martínez Zuviría
                </li>
                <li>
                	<strong>Teléfono:</strong> (011) 156 623 4605
                </li>
                <li>
                	<strong>E-mail:</strong> sistersouleventos@gmail.com
                </li>
            </ul>
            </div>
            <div class="fl">
            <ul class="fl">
            	<li>
                	<strong>Seguinos en:</strong>
                    <a href="https://www.facebook.com/pages/Sister-Soul/262040223849205" target="_blank"><img src="templates/sister/images/fb.png" height="37" width="38" alt="fb" class="fl" border="0" /></a>
                </li>
            </ul>
            </div>
        </div>
	</td>
</tr>
<?php endif; ?>
<?php if ( $this->contact->con_position && $this->contact->params->get( 'show_position' ) ) : ?>
<tr>
	<td colspan="2">
	<?php echo $this->escape($this->contact->con_position); ?>
		
	</td>
</tr>
<?php endif; ?>


<?php if ( $this->contact->params->get( 'allow_vcard' ) ) : ?>
<tr>
	<td colspan="2">
	<?php echo JText::_( 'Download information as a' );?>
		<a href="<?php echo JURI::base(); ?>index.php?option=com_contact&amp;task=vcard&amp;contact_id=<?php echo $this->contact->id; ?>&amp;format=raw&amp;tmpl=component">
			<?php echo JText::_( 'VCard' );?></a>
	</td>
</tr>
<?php endif;
if ( $this->contact->params->get('show_email_form') && ($this->contact->email_to || $this->contact->user_id))
	echo $this->loadTemplate('form');
?>

</table>
</div>
