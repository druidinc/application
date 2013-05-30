<?php /* Smarty version Smarty-3.1.13, created on 2013-05-30 14:18:06
         compiled from "application\view\_shared\_foot.php" */ ?>
<?php /*%%SmartyHeaderCode:1620251a21a7dcdfe32-56069022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09ff6f798d68248eefdba7d53521b0fb4dcd2ae8' => 
    array (
      0 => 'application\\view\\_shared\\_foot.php',
      1 => 1369916277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1620251a21a7dcdfe32-56069022',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a21a7dcf4231_29740012',
  'variables' => 
  array (
    'javascript' => 0,
    'page' => 0,
    'base_url' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a21a7dcf4231_29740012')) {function content_51a21a7dcf4231_29740012($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['javascript']->value;?>
/jquery.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['javascript']->value;?>
/default/modernizr-2.5.3-min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['javascript']->value;?>
/default/respond.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['javascript']->value;?>
/slide.js"></script>

<?php if ($_smarty_tpl->tpl_vars['page']->value=='home'){?>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['javascript']->value;?>
/home.js"></script>
<?php }elseif($_smarty_tpl->tpl_vars['page']->value=='services'){?>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['javascript']->value;?>
/services2.js"></script>
<?php }?>

<script type="text/javascript">
    $(document).ready(function(){
        slider('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
');
    });
</script><?php }} ?>