<?php
/* Smarty version 3.1.30, created on 2020-08-06 18:50:00
  from "C:\xampp\htdocs\SamaneMVC\src\view\clientEntreprise\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f2c34b8e0a954_06377659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c4c39608404d28a347b383599f91f54cc94b3ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SamaneMVC\\src\\view\\clientEntreprise\\liste.html',
      1 => 1596732595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2c34b8e0a954_06377659 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<!-- ctrl+shift+F pour les indentations  -->
<head>
	<meta charset="UTF-8">
	<title>Liste Client Entreprise</title>
	<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/liste.css">

</head>

<body>
	<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/bplogo.png" class="resize"/>
		<nav>
			
			<div class="nav navbar navbar-default navbar-fixed-top">
					<ul class="nav navbar-nav"> 
			<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">Accueil</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">Liste Client</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">Gestion Compte</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">Ajout Client</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">Virement</a></li>

			</ul>
		</nav>

	<?php if (isset($_smarty_tpl->tpl_vars['clientEntreprises']->value)) {?>
		<?php if ($_smarty_tpl->tpl_vars['clientEntreprises']->value != null) {?>
	<table class="table table-bordered table-stripped">
		<tr>
			<th>Id</th>
			<th>NomEntreprise</th>
			<th>Ninea</th>
			<th>Adresse</th>
			<th>Raison_Sociale</th>
			<th>Adresse</th>
			<th>Telephone</th>
			<th>Email</th>
			<th>RegistreCom</th>
			<th>Action</th>
		</tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clientEntreprises']->value, 'clientEntreprise');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['clientEntreprise']->value) {
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['clientEntreprise']->value->getId();?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['clientEntreprise']->value->getNomEntreprise();?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['clientEntreprise']->value->getNinea();?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['clientEntreprise']->value->getAdresse();?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['clientEntreprise']->value->getRaison_Sociale();?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['clientEntreprise']->value->getAdresse();?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['clientEntreprise']->value->getTelephone();?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['clientEntreprise']->value->getEmail();?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['clientEntreprise']->value->getRegistreCom();?>
</td>
			
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
clientEntreprise}/edit/<?php echo $_smarty_tpl->tpl_vars['clientEntreprise']->value;?>
->getId()}">Editer</a></td>
		</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</table>
	<?php } else { ?>
	Liste vide
	<?php }?>
	<?php }?>
	</div>
	<!-- L'url de redirection pour ajouter un nouveau client particulier à partir de cette page  -->
	<div class="lien">
	<a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
clientEntreprise/add">Ajout d'un Entreprise</a>
    </div>

</body>

</html><?php }
}
