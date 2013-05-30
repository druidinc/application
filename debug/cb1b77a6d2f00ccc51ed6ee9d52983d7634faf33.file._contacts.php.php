<?php /* Smarty version Smarty-3.1.13, created on 2013-05-30 13:44:47
         compiled from "application\view\_widget\_contacts.php" */ ?>
<?php /*%%SmartyHeaderCode:865051a6256b1b66e2-69515910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb1b77a6d2f00ccc51ed6ee9d52983d7634faf33' => 
    array (
      0 => 'application\\view\\_widget\\_contacts.php',
      1 => 1369914284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '865051a6256b1b66e2-69515910',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a6256b1c0189_28361408',
  'variables' => 
  array (
    'contact_company_name' => 0,
    'contact_address' => 0,
    'contact_email' => 0,
    'contact_contacts' => 0,
    'contact' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a6256b1c0189_28361408')) {function content_51a6256b1c0189_28361408($_smarty_tpl) {?><div class="section group">
	<div class="col span_2_of_2 left services">
		<div class="col span_2_of_2 service">
			<div class="category contacts-header">Contact Us</div>
		</div>
		<div class="col span_2_of_2 left">
			<div class="group section panel contacts-content">
				<div class="col span_2_of_2 service contact-label">
					<?php echo $_smarty_tpl->tpl_vars['contact_company_name']->value;?>

				</div>
				<div class="col span_2_of_2 contact-text">
					<?php echo $_smarty_tpl->tpl_vars['contact_address']->value;?>

				</div>
			</div>
			<div class="group section panel contacts-content">
				<div class="col span_1_of_6 contact-text contact-label">
					Mail:
				</div>
				<div class="col span_6_of_6">
					<div class="col span_1_of_6 contact-text">&nbsp;</div>
					<div class="col span_5_of_6 contact-text">
						<a href="mailto:<?php echo $_smarty_tpl->tpl_vars['contact_email']->value;?>
" class = "email" target="_new"><?php echo $_smarty_tpl->tpl_vars['contact_email']->value;?>
</a>
					</div>
				</div>
				<div class="col span_1_of_6 contact-text contact-label">
					Contacts:
				</div>
				<div class="col span_6_of_6 contact-text">
					<div class="col span_1_of_6 contact-text">&nbsp;</div>
					<div class="col span_5_of_6 contact-text">
						<?php $_smarty_tpl->tpl_vars['contact'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['contact']->step = 1;$_smarty_tpl->tpl_vars['contact']->total = (int)ceil(($_smarty_tpl->tpl_vars['contact']->step > 0 ? count($_smarty_tpl->tpl_vars['contact_contacts']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['contact_contacts']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['contact']->step));
if ($_smarty_tpl->tpl_vars['contact']->total > 0){
for ($_smarty_tpl->tpl_vars['contact']->value = 0, $_smarty_tpl->tpl_vars['contact']->iteration = 1;$_smarty_tpl->tpl_vars['contact']->iteration <= $_smarty_tpl->tpl_vars['contact']->total;$_smarty_tpl->tpl_vars['contact']->value += $_smarty_tpl->tpl_vars['contact']->step, $_smarty_tpl->tpl_vars['contact']->iteration++){
$_smarty_tpl->tpl_vars['contact']->first = $_smarty_tpl->tpl_vars['contact']->iteration == 1;$_smarty_tpl->tpl_vars['contact']->last = $_smarty_tpl->tpl_vars['contact']->iteration == $_smarty_tpl->tpl_vars['contact']->total;?>
	                        <div class ="col span_2_of_2 contact"><?php echo $_smarty_tpl->tpl_vars['contact_contacts']->value[$_smarty_tpl->tpl_vars['contact']->value];?>
 </div>		                            			                          
	                    <?php }} ?>
					</div>					
				</div>
			</div>
			
			<!-- <div class="col span_2_of_2 service">
					<div class="subcategory"><?php echo $_smarty_tpl->tpl_vars['contact_company_name']->value;?>
</div>
			</div>
			<?php echo $_smarty_tpl->tpl_vars['contact_address']->value;?>

			<div class="section group panel">
				<div class ="col span_1_of_4">Mail:</div>
				<div class ="col span_3_of_4"><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['contact_email']->value;?>
" class = "email" target="_new"><?php echo $_smarty_tpl->tpl_vars['contact_email']->value;?>
</a></div>									
			</div>
			<div class="section group panel">
				<div class ="col span_1_of_4">Contacts:</div>
				<div class ="col span_3_of_4">
					<?php $_smarty_tpl->tpl_vars['contact'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['contact']->step = 1;$_smarty_tpl->tpl_vars['contact']->total = (int)ceil(($_smarty_tpl->tpl_vars['contact']->step > 0 ? count($_smarty_tpl->tpl_vars['contact_contacts']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['contact_contacts']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['contact']->step));
if ($_smarty_tpl->tpl_vars['contact']->total > 0){
for ($_smarty_tpl->tpl_vars['contact']->value = 0, $_smarty_tpl->tpl_vars['contact']->iteration = 1;$_smarty_tpl->tpl_vars['contact']->iteration <= $_smarty_tpl->tpl_vars['contact']->total;$_smarty_tpl->tpl_vars['contact']->value += $_smarty_tpl->tpl_vars['contact']->step, $_smarty_tpl->tpl_vars['contact']->iteration++){
$_smarty_tpl->tpl_vars['contact']->first = $_smarty_tpl->tpl_vars['contact']->iteration == 1;$_smarty_tpl->tpl_vars['contact']->last = $_smarty_tpl->tpl_vars['contact']->iteration == $_smarty_tpl->tpl_vars['contact']->total;?>
                        <div class ="col span_1_of_2 contact"><?php echo $_smarty_tpl->tpl_vars['contact_contacts']->value[$_smarty_tpl->tpl_vars['contact']->value];?>
 </div>		                            			                          
                    <?php }} ?>
                </div>
			</div> -->
			
		</div>		
	</div>
</div><?php }} ?>