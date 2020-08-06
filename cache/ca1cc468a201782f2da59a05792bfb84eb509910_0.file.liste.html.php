<?php
/* Smarty version 3.1.30, created on 2020-08-06 17:17:59
  from "C:\xampp\htdocs\SamaneMVC\src\view\clientparticulier\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f2c1f27d18739_71111917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca1cc468a201782f2da59a05792bfb84eb509910' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SamaneMVC\\src\\view\\clientparticulier\\liste.html',
      1 => 1596727063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2c1f27d18739_71111917 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<!-- ctrl+shift+F pour les indentations  -->
<head>
	<meta charset="UTF-8">
	<title>Liste Client Particulier</title>
	<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/liste.css">

</head>

<body>
	<nav>
		<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/bplogo.png" class="resize" />
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

	<?php if (isset($_smarty_tpl->tpl_vars['clientparticuliers']->value)) {?>
	<?php if ($_smarty_tpl->tpl_vars['clientparticuliers']->value != null) {?>
	<table class="table table-bordered table-stripped">
		<tr>
			<th>Id</th>
			<th>Nom</th>
			<th>Prenom</th>
			<th>Genre</th>
			<th>Email</th>
			<th>Adresse</th>
			<th>Telephone</th>
			<th>Salarie</th>
			<th>Salaire_actuel</th>
			<th>Nom_employeur</th>
			<th>Cni</th>
			<th>Action</th>
		</tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clientparticuliers']->value, 'clientparticulier');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['clientparticulier']->value) {
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['clientparticulier']->value->getId();?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['clientparticulier']->value->getNom();?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['clientparticulier']->value->getPrenom();?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['clientparticulier']->value->getGenre();?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['clientparticulier']->value->getEmail();?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['clientparticulier']->value->getAdresse();?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['clientparticulier']->value->getTelephone();?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['clientparticulier']->value->getSalarie();?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['clientparticulier']->value->getSalaireActuel();?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['clientparticulier']->value->getNomEmployeur();?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['clientparticulier']->value->getCni();?>
</td>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
clientparticulier/edit/<?php echo $_smarty_tpl->tpl_vars['clientparticulier']->value->getId();?>
">Editer</a></td>
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
	<a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
clientparticulier/add">Ajout d'un clientparticulier</a>
	</div>
	</div>

</body>

</html><?php }
}
