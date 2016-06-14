<?php
/**
 * @package 	Qloginpopup for Joomla! 1.5
 * @version 	$Id:  default.php 002 2010-12-07 02:26:33Z NetQ $
 * @author		NETQ CREATIVE SOFTWARE (service@netqcreative.com)
 * @copyright 	Copyright (C) 2010 - NETQ CREATIVE SOFTWARE
 * @license 	GNU/GPL http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die('Restricted access');
?>
<!--[if lte IE 6]>
<style type="text/css">
	#helpdiv FORM INPUT.bt{
	background: url(modules/mod_qloginpopup/images/login1.jpg) no-repeat;
}
</style>
<![endif]-->

<?php if($type == 'logout') : ?>
	<form action="index.php" method="post" name="login" id="form-lg">
		<div align="center" style="text-align: center;" />
			<input type="submit" name="Submit" class="btlo" style="cursor:pointer;" value="<?php echo JText::_('BUTTON_LOGOUT'); ?>" />
		</div>
		
		<input type="hidden" name="option" value="com_user" />
		<input type="hidden" name="task" value="logout" />
		<input type="hidden" name="return" value="<?php echo $return; ?>" />
	</form>

<?php
	else :
		JHTML::_('behavior.modal');
		$doc =& JFactory::getDocument();
		$doc->addScriptDeclaration("
			window.addEvent('domready', function() {
		    SqueezeBox.initialize({});
		    $$('a.modal').each(function(el) {
		      el.addEvent('click', function(e) {
		        new Event(e).stop();
		        SqueezeBox.fromElement(el);
		      });
		    });
		  });");
?>

<div id="alg" align="center">
	<div id="loginbt">
		<div class="text-login">
			<a href="#helpdiv" class="modal" style="cursor:pointer" title="<?php echo JText::_('LOGIN_TITLE') ?>" rel="{size: {x: 206, y: 333}, ajaxOptions: {method: &quot;get&quot;}}">
				<?php echo JText::_('BUTTON_LOGIN'); ?>
			</a>
		</div>
	</div>
		
</div>		
<div style="display:none;">
	<div id="helpdiv" >
		<form action="<?php echo JRoute::_( 'index.php', true, $params->get('usesecure')); ?>" method="post" name="login" id="form-login" >
				<?php echo $params->get('pretext'); ?>
				<div class="title"><?php echo JText::_('LOGINFORM') ?></div>
				<div class="ip">
				<p class="form-login">
					<label for="nq-mod_username"><?php echo JText::_('USERNAME') ?></label><br />
					<input id="nq-mod_username" type="text" name="username" class="ipbox" alt="username" size="18" />
				</p>
				<p class="form-password">
					<label for="nq-mod_passwd"><?php echo JText::_('PASSWORD') ?></label><br />
					<input id="nq-mod_passwd" type="password" name="passwd" class="ipbox" size="18" alt="password" />
				</p>
				<?php if(JPluginHelper::isEnabled('system', 'remember')) : ?>
				<p id="form-remember">
					<input id="nq-mod_remember" type="checkbox" name="Remember"  value="yes" alt="Remember Me" />
					<label for="nq-mod_remember"><?php echo JText::_('REMEMBER_ME') ?></label>
				</p>
				<?php endif; ?>
				<p class="form-submit">
				<input type="submit" name="Submit" class="bt" style="cursor:pointer;" value="<?php echo JText::_('LOGIN_BUTTON') ?>" />
				</p>   
				</div>
				<ul class="fx">
					<li>
						<a href="<?php echo JRoute::_( 'index.php?option=com_user&view=reset' ); ?>">
							<?php echo JText::_('FORGOT_YOUR_PASSWORD'); ?>
						</a>
					</li>
					<li>
						<a href="<?php echo JRoute::_('index.php?option=com_user&view=remind'); ?>">
							<?php echo JText::_('FORGOT_YOUR_USERNAME'); ?>
						</a>
					</li>
					<?php
					$usersConfig = &JComponentHelper::getParams('com_users');
					if ($usersConfig->get('allowUserRegistration')) : ?>
					<li>
						<a href="<?php echo JRoute::_('index.php?option=com_user&view=register'); ?>">
							<?php echo JText::_('REGISTER'); ?>
						</a>
					</li>
					<?php endif; ?>
				</ul>
				<?php echo $params->get('posttext'); ?>
			
				<input type="hidden" name="option" value="com_user" />
				<input type="hidden" name="task" value="login" />
				<input type="hidden" name="return" value="<?php echo $return; ?>" />
				<?php echo JHTML::_( 'form.token' ); ?>
			</form>
	</div>
</div>	
<?php endif; ?>
