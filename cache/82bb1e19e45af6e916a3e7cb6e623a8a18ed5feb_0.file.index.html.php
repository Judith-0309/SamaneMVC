<?php
/* Smarty version 3.1.30, created on 2020-08-06 13:17:05
  from "C:\xampp\htdocs\SamaneMVC\src\view\welcome\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f2be6b16b0fa9_70708229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82bb1e19e45af6e916a3e7cb6e623a8a18ed5feb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SamaneMVC\\src\\view\\welcome\\index.html',
      1 => 1596712333,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2be6b16b0fa9_70708229 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Banque du Peuple</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/style.css"/>
		
		<style>
			h1{ 
                color: #00C3C7;
    
                
			}
		</style>
	</head>
	<body>
		<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/bplogo.png" class="resize" />
		<div class="nav navbar navbar-default navbar-fixed-top"></div>
			<ul class="nav navbar-nav">
                <!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
                <nav>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">Accueil</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Clientparticulier/index">Liste Client </a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/getId/1">Gestion Compte </a></li>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">Ajout Client </a>
                        <ul>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">Particulier</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">Moral</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">Virement</a></li>
                        
            <!-- </ul> -->
                </nav>
		</div>
		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
			<div class="panel panel-info">
				<div class="panel-heading">BIENVENUE A VOTRE MODELE MVC</div>
				<div class="panel-body">
					<div class="alert alert-success" style="font-size:18px; text-align:justify;">
						Merci, l'équipe samanemvc vous remercie :) : 
						je vous ai préparé un CRUD qui marche. Lisez la documentation.
						<br/>Et surtout noubliez pas de configurer votre base de données : ou? Dans le dossier config
						puis éditez le fichier database.php. Mettez à on l'etat de la base! Bon code!!!!  :)
					</div>
					MODELE DEVELOPPE PAR Ngor SECK !
					<br/>
					   <h1>IT WORKS !!!!</h1>
				</div>
			</div>
		</div>
		
	</body>
</html>
		
<?php }
}
