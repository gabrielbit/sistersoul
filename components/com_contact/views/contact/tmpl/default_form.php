<?php
/** $Id: default_form.php 11917 2009-05-29 19:37:05Z ian $ */
defined( '_JEXEC' ) or die( 'Restricted access' );

	$script = '<!--
		function validateForm( frm ) {
			var valid = document.formvalidator.isValid(frm);
			if (valid == false) {
				// do field validation
				if (frm.email.invalid) {
					alert( "' . JText::_( 'Please enter a valid e-mail address.', true ) . '" );
				} else if (frm.text.invalid) {
					alert( "' . JText::_( 'CONTACT_FORM_NC', true ) . '" );
				}
				return false;
			} else {
				frm.submit();
			}
		}
		// -->';
	$document =& JFactory::getDocument();
	$document->addScriptDeclaration($script);
	
	if(isset($this->error)) : ?>
<tr>
	<td><?php echo $this->error; ?></td>
</tr>
<?php endif; ?>
<tr>
	<td colspan="2"><br />

    <img src="templates/sister/images/envianosTuComent.png" height="22" width="310" alt="envianos tu comentario" /><br />
<br />

    <div class="formulario">
        <form action="<?php echo JRoute::_( 'index.php' );?>" method="post" name="emailForm" id="emailForm" class="form-validate">
            <div class="contact_email<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>">
                <label for="contact_name">
                    &nbsp;<?php echo JText::_( 'Nombre' );?>:
                </label>
                <br />
                <input type="text" name="name" id="contact_name" size="30" class="input" value="" />
                <br />
                <label id="contact_emailmsg" for="contact_email">
                    &nbsp;<?php echo JText::_( 'E.mail' );?>:
                </label>
                <br />
                <input type="text" id="contact_email" name="email" size="30" value="" class="input required validate-email" maxlength="100" />
                <br />
                <label for="contact_subject">
                    &nbsp;<?php echo JText::_( 'Asunto' );?>:
                </label>
                <br />
                <input type="text" name="subject" id="contact_subject" size="30" class="input" value="" />
                <br /><br />
                <label id="contact_textmsg" for="contact_text">
                    &nbsp;<?php echo JText::_( 'Comentarios' );?>:
                </label>
                <br />
                <textarea name="text" id="contact_text" class="input2 required"></textarea>
                <?php if ($this->contact->params->get( 'show_email_copy' )) : ?>
                <br /><br />

                    <input type="checkbox" name="email_copy" id="contact_email_copy" value="1" />
                    <label for="contact_email_copy" class="copy">
                        <?php echo JText::_( 'EMAIL_A_COPY' ); ?>
                    </label>
                <?php endif; ?>
                <br />
                <br />
                <button class="button validate enviar" type="submit"><?php echo JText::_(''); ?></button>
            </div>
    
        <input type="hidden" name="option" value="com_contact" />
        <input type="hidden" name="view" value="contact" />
        <input type="hidden" name="id" value="<?php echo $this->contact->id; ?>" />
        <input type="hidden" name="task" value="submit" />
        <?php echo JHTML::_( 'form.token' ); ?>
        </form>
    </div>
	<br />
	</td>
</tr>
