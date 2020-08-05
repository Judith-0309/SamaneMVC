<?php
/* Smarty version 3.1.30, created on 2020-08-05 15:39:49
  from "C:\xampp\htdocs\SamaneMVC\src\view\clientEntreprise\addClientEntreprise.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f2ab6a5afba32_64857709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98db070fa90ed08ce2264e3f9bdab689180fd113' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SamaneMVC\\src\\view\\clientEntreprise\\addClientEntreprise.html',
      1 => 1596634568,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2ab6a5afba32_64857709 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/entreprise.css">
 
 
   
        <title>CLIENT Entreprise</title>

    </head>

        <body>
            <nav>
                <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/bplogo.png" alt="logo BP" class="img">  
        
                    <h1>BANQUE DU PEUPLE</h1>

                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href="">Liste client</a></li>
                            <li><a href="">Gestion Compte</a></li>
                            <li><a href="">Ajout Client</a></li>
                            <li><a href="">Virement</a></li>
                        </ul>
            </nav>
                <?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
                    <?php if ($_smarty_tpl->tpl_vars['ok']->value != 0) {?>
                        <div class="alert alert-success">Données ajoutées!</div>
                    <?php } else { ?>
                        <div class="alert alert-danger">Erreur!</div>
                    <?php }?>
                <?php }?>

                <form action='<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
ClientEntreprise/add' method="POST"  id="myform">
                    <fieldset class="container"><br><br />
                        <legend id="open">Gestion Client Entreprise</legend>

                            <label for="nomEntreprise">nomEntreprise*</label>
                            <input id="nomEntreprise" name="nomEntreprise" type="text"/>

                            <label for="adresse">adresse*</label>
                            <input id="adresse" name="adresse" type="text"/><br><br/>

                            <label for="Email">Email*</label>
                            <input id="Email" name="email" type="Email"/>

                            <label for="telephone">telephone*</label>
                            <input id="telephone" name="telephone" type="tel" /><br><br/>

                            <label for="Ninea">Ninea*</label>
                            <input id="Ninea" name="ninea" type="double"/>

                            <label for="Registre_Commerce">Registre_Commerce*</label>
                            <input id="Registre_Commerce" name="registreCom" type="double"/><br><br/>

                            <label for="Raison_Sociale">Raison Sociale*</label>
                            <input id="Raison_Sociale" name="raisonSociale" type="text"/><br><br/>

                    </fieldset>

                            <div class="button"><br><br/>

                                <input type="submit" name="envoyer" value="ENVOYER" onclick="return validate()"/>
                                <input type="reset" value="ANNULER"/>
                            </div><br><br/>
                </form>
                    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/mainE.js"><?php echo '</script'; ?>
>


   
        </body>

</html><?php }
}
