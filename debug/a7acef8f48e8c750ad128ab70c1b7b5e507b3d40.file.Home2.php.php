<?php /* Smarty version Smarty-3.1.13, created on 2013-05-29 14:10:24
         compiled from "application\view\Home2.php" */ ?>
<?php /*%%SmartyHeaderCode:377351a1dcf9f41645-18277463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7acef8f48e8c750ad128ab70c1b7b5e507b3d40' => 
    array (
      0 => 'application\\view\\Home2.php',
      1 => 1369829421,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '377351a1dcf9f41645-18277463',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a1dcfa052013_24693376',
  'variables' => 
  array (
    'mission' => 0,
    'vision' => 0,
    'contact_company_name' => 0,
    'contact_address' => 0,
    'contact_email' => 0,
    'contact_contacts' => 0,
    'contact' => 0,
    'services' => 0,
    'base_url' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a1dcfa052013_24693376')) {function content_51a1dcfa052013_24693376($_smarty_tpl) {?><!DOCTYPE html>
<!-- HTML5 Mobile Boilerplate -->
<!--[if IEMobile 7]><html class="no-js iem7"><![endif]-->
<!--[if (gt IEMobile 7)|!(IEMobile)]><!-->
<html class="no-js" lang="en"><!--<![endif]-->
	<head>
		<?php echo $_smarty_tpl->getSubTemplate ("_shared/_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<body>
		<div id="wrapper">
			<div id="headcontainer">
				<?php echo $_smarty_tpl->getSubTemplate ("_shared/_header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
				
			</div>
			
			<div id="maincontentcontainer">

				<!-- First Row: Mission - Vision and Contacts -->
				<div class="section group panel">
					<div class="col span_3_of_5">
						<div class="section group">
							<div class="col span_2_of_2 left">
								<h4 >Mission</h4>
								<?php echo $_smarty_tpl->tpl_vars['mission']->value;?>

							</div>
						</div>

						<div class="section group">
							<div class="col span_2_of_2 left">
								<h4 >Vision</h4>
								<?php echo $_smarty_tpl->tpl_vars['vision']->value;?>

							</div>
						</div>
					</div>

					<div class="col span_2_of_5 float_right">
						<div class="section group">
							<div class="col span_2_of_2 left">
								<h4 class="title"><?php echo $_smarty_tpl->tpl_vars['contact_company_name']->value;?>
</h4>
								<?php echo $_smarty_tpl->tpl_vars['contact_address']->value;?>

								<div class="section group panel">
									<div class ="col span_1_of_4">Mail:</div>
									<div class ="col span_3_of_4"><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['contact_email']->value;?>
" class = "email"><?php echo $_smarty_tpl->tpl_vars['contact_email']->value;?>
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
								</div>
								
							</div>
						</div>
					</div>
				</div>
				<!--End First Row: Mission - Vision and Contacts -->
				
				<!-- Second Row: Services -->
				<div class = "section group panel">
					<div class = "col span_2_of_2">
						<h3 class = "title">Services</h3>
					</div>

					<div class="section group panel services_frame" onmouseover="display('.services_frame .navigation')" onmouseout="hide('.services_frame .navigation')">
						<div class="services_container" >

							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['name'] = 'serviceIndex';
$_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['services']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['total']);
?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Home/service?cat_id=<?php echo $_smarty_tpl->tpl_vars['services']->value[$_smarty_tpl->getVariable('smarty')->value['section']['serviceIndex']['index']]['category_id'];?>
&subcat_id=<?php echo $_smarty_tpl->tpl_vars['services']->value[$_smarty_tpl->getVariable('smarty')->value['section']['serviceIndex']['index']]['id'];?>
">
									<div class="col image_container">
										<img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['services']->value[$_smarty_tpl->getVariable('smarty')->value['section']['serviceIndex']['index']]['image'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['services']->value[$_smarty_tpl->getVariable('smarty')->value['section']['serviceIndex']['index']]['name'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['services']->value[$_smarty_tpl->getVariable('smarty')->value['section']['serviceIndex']['index']]['name'];?>
" style = "width:100%; height: 148px;">
										<div class="col span_1_of_2 service_caption" ><?php echo $_smarty_tpl->tpl_vars['services']->value[$_smarty_tpl->getVariable('smarty')->value['section']['serviceIndex']['index']]['name'];?>
</div>
									</div>
								</a>
			                <?php endfor; else: ?>
			                    No Services found
			                <?php endif; ?> 
						</div>
						<div class="navigation col span_2_of_2">
							<div class = "section group">
								<div class="col span_1_of_2 left float_left nav_button previous" onclick="prev($('.services_container').width())">&lt;</div>
								<div class="col span_1_of_2 right float_right nav_button next" onclick="next($('.services_container').width())">&gt;</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div id="footercontainer">
				<?php echo $_smarty_tpl->getSubTemplate ("_shared/_footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div>
	</body>
	<?php echo $_smarty_tpl->getSubTemplate ("_shared/_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</html><?php }} ?>