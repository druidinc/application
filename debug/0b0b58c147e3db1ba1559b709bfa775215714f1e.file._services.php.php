<?php /* Smarty version Smarty-3.1.13, created on 2013-05-30 13:17:41
         compiled from "application\view\_widget\_services.php" */ ?>
<?php /*%%SmartyHeaderCode:517651a62513818217-62668364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b0b58c147e3db1ba1559b709bfa775215714f1e' => 
    array (
      0 => 'application\\view\\_widget\\_services.php',
      1 => 1369912659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '517651a62513818217-62668364',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a6251381b859_41870303',
  'variables' => 
  array (
    'services' => 0,
    'categories' => 0,
    'subcategories' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a6251381b859_41870303')) {function content_51a6251381b859_41870303($_smarty_tpl) {?><div class="section group">
	<div class="col span_2_of_2 left services">
		<?php  $_smarty_tpl->tpl_vars['categories'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categories']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['services']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categories']->key => $_smarty_tpl->tpl_vars['categories']->value){
$_smarty_tpl->tpl_vars['categories']->_loop = true;
?>
			<div class="col span_2_of_2 service">
				<div class="category"><?php echo $_smarty_tpl->tpl_vars['categories']->value['cat_name'];?>
</div>
			</div>

			<?php  $_smarty_tpl->tpl_vars['subcategories'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcategories']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value['subcat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcategories']->key => $_smarty_tpl->tpl_vars['subcategories']->value){
$_smarty_tpl->tpl_vars['subcategories']->_loop = true;
?>
				<div class="col span_2_of_2 service">
					<a href="#" alt="<?php echo $_smarty_tpl->tpl_vars['subcategories']->value['subcat_name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['subcategories']->value['subcat_name'];?>
">
						<div class="subcategory"><?php echo $_smarty_tpl->tpl_vars['subcategories']->value['subcat_name'];?>
</div>
					</a>
				</div>
			<?php } ?>
		<?php } ?>		
	</div>
</div><?php }} ?>