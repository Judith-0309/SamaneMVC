<?php
/* Smarty version 3.1.30, created on 2020-08-05 13:22:54
  from "C:\xampp\htdocs\SamaneMVC\src\view\compte\addCompte.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f2a968e89baf8_46257725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e241c4c05c160f657f0375b3ef0ae01383de0f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SamaneMVC\\src\\view\\compte\\addCompte.html',
      1 => 1596626566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2a968e89baf8_46257725 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/compte.css">
    
    <title>Gestion des Comptes</title>

    </head>

    <body>
    
        <nav>

            <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/bplogo.png" alt="logo BP" class="img">

                <h1>BANQUE DU PEUPLE</h1>

                <ul>
                    <li><a href="">Accueil</a></li>
                    <li><a href="">Liste client</a></li>
                    <li><a href="../../view/compte/compte.php">Gestion Compte</a></li>
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
   
            <form action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte/add" method="POST" id="myformCompte">
                <fieldset class="container"><br/>
                    <legend id="open">Gestion Compte</legend>


                    <label for="Type_Compte">Type_Compte*</label>
                        <select name="typeCompte" id="compte">
                            <option value="Selectionnez" id="">Selectionnez*</option>
                            <option value="Epargne Simple et Xewel" id="Epargne Simple et Xewel">Epargne Simple et Xewel</option>
                            <option value="Courant" id="Courant">Courant</option>
                            <option value="bloque" id="bloque">bloqué</option>
                        </select><br/>

                    <label for="Numero_Compte">Numero_Compte*</label>
                    <input id="Numero_Compte" name="NumeroCompte" type="number"/><br/>

                    <label for="Cle_Rib">Cle_Rib*</label>
                    <input id="Cle_Rib" name="CleRib" type="number"/><br><br/>

                    <label for="Etat_Compte">Etat_Compte*</label>
                        <select name="EtatCompte" id="Etat_Compte">
                            <option value="Selectionnez">Selectionnez*</option>
                            <option value="Actif" id="Actif">Actif</option>
                            <option value="Ferme" id="Ferme">Ferme</option>
                            <option value="bloque" id="bloque">bloqué</option>
                        </select><br/>

                    <label for="Depot initial">Depot initial*</label>
                    <input id="Depot_initial" name="DepotInitial" type="text"/><br/>

                   

                    <label for="Date_ouverture">Date_ouverture*</label>
                    <input id="Date_ouverture" name="DateOuverture" type="date"/><br/>

                </fieldset>
       
                    <div class="button"><br />
                        <input type="submit" value="ENVOYER" name="envoyer" onclick="return validate()"/><br/>
                        <input type="reset" value="ANNULER"/>

                    </div><br/>
           </form>


               <?php echo '<script'; ?>
 src="public/js/mainC.js"><?php echo '</script'; ?>
>

        </body>

</html><?php }
}
