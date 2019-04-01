<?php
/* Smarty version 3.1.33, created on 2019-04-01 13:33:19
  from 'C:\wamp\www\smarty_andrusiak\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca2131f4bfdc7_92909661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b9b835e91c32a7bb97df26387627384fdfe7c8d' => 
    array (
      0 => 'C:\\wamp\\www\\smarty_andrusiak\\templates\\login.tpl',
      1 => 1554041694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca2131f4bfdc7_92909661 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php if (isset($_smarty_tpl->tpl_vars['session']->value)) {?>
                            <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['session']->value[0];?>
">
                                <span class="text-muted"><?php echo $_smarty_tpl->tpl_vars['session']->value[1];?>
</span>
                            </div>
                        <?php }?>
                        <form method="post" action="process/login.php">
                            <div class="form-group">
                                <label for="email">Adresse e-mail</label>
                                <input type="email" name="email" id="email" class="form-control">
                                <span class="comments text-muted" id="emailError"></span>
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de passe</label>
                                <input type="password" name="password" id="password" class="form-control">
                                <span class="comments text-muted" id="passwordError"></span>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success btn-block" type="submit">Se connecter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section><?php }
}
