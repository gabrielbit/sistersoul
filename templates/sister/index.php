<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );	

// build the full path to the template files
$templatePath = $this->baseurl.'/templates/'.$this->template; // template path

// get the site name
$config =& JFactory::getConfig();
$siteName = $config->getValue('config.sitename');

// determine which positions we want to show
$showRightPosition  = $this->countModules('right');
$showTopPosition    = $this->countModules('top');
$showMenuPosition  = $this->countModules('menu');
$showUser1User2User3User4Positions = $this->countModules('user1 or user2 or user3 or user4');
$showUser1Position  = $this->countModules('user1');
$showUser2Position  = $this->countModules('user2');
$showUser3Position  = $this->countModules('user3');
$showUser4Position  = $this->countModules('user4');
$showUser5Position  = $this->countModules('user5');
$showFooterPosition  = $this->countModules('footer');
$showImagesPosition  = $this->countModules('imagenes-eventos');

$showUser1HUser2HUser3HUser4HPositions = $this->countModules('user1H or user2H or user3H or user4H');
$showUser1HPosition  = $this->countModules('user1H');
$showUser2HPosition  = $this->countModules('user2H');
$showUser3HPosition  = $this->countModules('user3H');
$showUser4HPosition  = $this->countModules('user4H');
$showUser4NPosition  = $this->countModules('user4N');
$showUser4InternPosition  = $this->countModules('newsletterInterno');


// calculate column widths of positions left, component and right
$leftPositionWidth  = $this->params->get('leftPositionWidth',  3);
$rightPositionWidth = $this->params->get('rightPositionWidth', 3);
$componentWidth     = 12 - $leftPositionWidth - ($showRightPosition ? $rightPositionWidth : 0);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
 
<head>
	<jdoc:include type="head" />
	<meta http-equiv="Content-Type"  content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="<?php echo $templatePath; ?>/css/reset.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $templatePath; ?>/css/text.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $templatePath; ?>/css/960.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $templatePath; ?>/css/template_css.css" type="text/css" />

</head>

<body>
	<div class="container_12">
    
    	<!--header-->
		<div class="grid_12 header">
            <h1 class="logo"> <a href="index.php"><img src="templates/sister/images/logo.png" height="65" width="273" alt="logo" /></a> </h1>
           	<?php if ($showMenuPosition) : ?>
            <div class="fr">
                <jdoc:include type="modules" name="menu"  />
            </div>
            <div class="clear"></div>
        	<?php endif; ?>
		</div>
        <!--header-->
        
        <div class="clear"></div>
        
        <!--TOP BANNER-->
		<div class="top banner">
			<?php if ($showTopPosition) : ?>
            <div class="grid_12">
            	<div class="fl textoBanner">
                 <jdoc:include type="modules" name="textoBanner"/>		
                </div>
            	<div class="fr cajaBanners">
               	  <jdoc:include type="modules" name="top"/>
                </div>
            </div>
            <div class="clear"></div>
            <?php endif; ?>
        </div>
        <!--TOP BANNER-->        
        
        <!--usersHome-->
         <?php if ($showUser1HUser2HUser3HUser4HPositions) : ?>
       			 <div id="usersHome">
                 		<div class="fl bgInf">
                        <div class="destacadoHome casamientos noMarginLeft">
                            <?php if ($showUser1HPosition) : ?>
                            <jdoc:include type="modules" name="user1H"  />
                            <?php else : ?>
                            &nbsp;
                            <?php endif; ?>
                        </div>
                        </div>
                        <div class="fl bgInf">
                        <div class="destacadoHome recepciones">
                            <?php if ($showUser2HPosition) : ?>
                            <jdoc:include type="modules" name="user2H"  />
                            <?php else : ?>
                            &nbsp;
                            <?php endif; ?>
                        </div>
                        </div>
                        <div class="fl bgInf">
                        <div class="destacadoHome fiestas">
                            <?php if ($showUser3HPosition) : ?>
                            <jdoc:include type="modules" name="user3H" />
                            <?php else : ?>
                            &nbsp;
                            <?php endif; ?>
                        </div>
						</div>                        
                        <div class="destacadoHome newsletter">
                           <?php if ($showUser4NPosition) : ?>
                            <p class="textNews">Para mantenerse informado 
de la novedades.</p>
                            <jdoc:include type="modules" name="user4N"  />
                            <?php else : ?>
                            &nbsp;
                            <?php endif; ?>
                        </div>
                        <div class="clear"></div>
       				 </div>
        <?php endif; ?>	
     <!--usersHome-->
     
     <!--contenido-->        
        <div class="content">
        
        		<!--CONTENIDO-->
                <div class="contenido">
                    <div class="grid_<?php echo $componentWidth; ?>" style="width:689px;">
                        <jdoc:include type="message" />
                        <jdoc:include type="component" />
                    </div>
                    <?php if ($showImagesPosition) : ?>
                    <div class="columnaImagenes">
                        <jdoc:include type="modules" name="imagenes-eventos" style="box" />
                    </div>
                    <?php endif; ?>
                    <?php if ($showRightPosition) : ?>
                    <div class="grid_<?php echo $rightPositionWidth; ?> w229">
                        <jdoc:include type="modules" name="right" style="box" />
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($showUser4InternPosition) : ?>
                    <div class="destacadoHome newsletter fr">
                           
                            <p class="textNews">Para mantenerse informado 
de la novedades.</p>
                            <jdoc:include type="modules" name="newsletterInterno"  />
                            
       				 </div>
                     <?php endif; ?>
                     
                    <div class="clear"></div>
                </div>
        		<!--CONTENIDO-->
                
                <!--USERS-->                
                 <?php if ($showUser1User2User3User4Positions) : ?>
                <div class="users">
                        <div class="grid_4">
                            <?php if ($showUser1Position) : ?>
                            <jdoc:include type="modules" name="user1"  />
                            <?php else : ?>
                            &nbsp;
                            <?php endif; ?>
                        </div>
                        <div class="grid_4">
                            <?php if ($showUser2Position) : ?>
                            <jdoc:include type="modules" name="user2"  />
                            <?php else : ?>
                            &nbsp;
                            <?php endif; ?>
                        </div>
                        <div class="grid_4">
                            <?php if ($showUser3Position) : ?>
                            <jdoc:include type="modules" name="user3" />
                            <?php else : ?>
                            &nbsp;
                            <?php endif; ?>
                        </div>
                        <div class="grid_4">
                            <?php if ($showUser4Position) : ?>
                            <jdoc:include type="modules" name="user4"  />
                            <?php else : ?>
                            &nbsp;
                            <?php endif; ?>
                        </div>
                        <div class="clear"></div>
                </div>
                <?php endif; ?>	
                <!--USERS-->
                                
				<?php if ($showUser5Position) : ?>
                <div class="grid_12">
                    <jdoc:include type="modules" name="user5"  />
                </div>
                <div class="clear"></div>
                <?php endif; ?>
                
        </div>
       <!--contenido-->          
         
	</div>
    
    <!--FOOTER-->
	<div class="contentFooter">
        <div class="grid_12 footer"> <a href="https://www.facebook.com/pages/Sister-Soul/262040223849205" target="_blank"><img src="templates/sister/images/fbfooter.png" height="31" width="175" alt="Facebook" style=" float:left;margin-top:-5px;" /></a>
            	<a href="http://projeqt.com/micaelaibarra" target="_blank"><img src="templates/sister/images/dgmicu.png" alt="dgMICU" width="175" height="17" border="0" style=" float:right"/></a>
        </div>
        <div class="clear"></div>
    </div>
    <!--FOOTER-->
    
    
</body>
</html>