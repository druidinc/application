<?php /* Smarty version Smarty-3.1.13, created on 2013-05-30 14:48:27
         compiled from "application\view\Services2.php" */ ?>
<?php /*%%SmartyHeaderCode:3216151a620a8eec189-88431280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0055a6c63543e1ee12afb43de142fc62d1b68f3c' => 
    array (
      0 => 'application\\view\\Services2.php',
      1 => 1369918079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3216151a620a8eec189-88431280',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a620a9042335_92403417',
  'variables' => 
  array (
    'all_services' => 0,
    'image' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a620a9042335_92403417')) {function content_51a620a9042335_92403417($_smarty_tpl) {?><!DOCTYPE html>
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
			
			<!-- Main Contianer -->
			<div id="maincontentcontainer">
				<div class="section group panel">
					<div class="col span_1_of_4 float_left">
						<div class="col span_2_of_2"><?php echo $_smarty_tpl->getSubTemplate ("_widget/_services.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
						<div class="col span_2_of_2 panel"><?php echo $_smarty_tpl->getSubTemplate ("_widget/_contacts.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
					</div>
					<div class="col span_3_of_4 float_right">

						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['name'] = 'serviceIndex';
$_smarty_tpl->tpl_vars['smarty']->value['section']['serviceIndex']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['all_services']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
							<div class="section group service-panel">
								<div class="col span_10_of_12 content">
									<div class="col span_1_of_5 left" style="height:100%">
										<img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['all_services']->value[$_smarty_tpl->getVariable('smarty')->value['section']['serviceIndex']['index']]['image'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['all_services']->value[$_smarty_tpl->getVariable('smarty')->value['section']['serviceIndex']['index']]['name'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['all_services']->value[$_smarty_tpl->getVariable('smarty')->value['section']['serviceIndex']['index']]['name'];?>
" height="100%"  width="100%">
									</div>
									<div class="col span_4_of_5 left float_right service-content">
										<div class="col span_2_of_2">
											<h4><?php echo $_smarty_tpl->tpl_vars['all_services']->value[$_smarty_tpl->getVariable('smarty')->value['section']['serviceIndex']['index']]['name'];?>
</h4>
										</div>
										<div class="col span_2_of_2">
											<?php echo $_smarty_tpl->tpl_vars['all_services']->value[$_smarty_tpl->getVariable('smarty')->value['section']['serviceIndex']['index']]['description'];?>

										</div>									
									</div>
								</div>
								<div class="col span_2_of_12 float_right right read-more">Read More</div>
							</div>
			                <!-- <div class="page02ColumnTwo_01" style="text-overflow:ellipsis;" id="<?php echo $_smarty_tpl->tpl_vars['all_services']->value[$_smarty_tpl->getVariable('smarty')->value['section']['serviceIndex']['index']]['category_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['all_services']->value[$_smarty_tpl->getVariable('smarty')->value['section']['serviceIndex']['index']]['id'];?>
">
			                    <div class="page02ColumnTwo_01Title" ><h4><?php echo $_smarty_tpl->tpl_vars['all_services']->value[$_smarty_tpl->getVariable('smarty')->value['section']['serviceIndex']['index']]['name'];?>
</h4></div>
			                    <p><?php echo $_smarty_tpl->tpl_vars['all_services']->value[$_smarty_tpl->getVariable('smarty')->value['section']['serviceIndex']['index']]['description'];?>
</p>			                    
			                    <span style="position:absolute" class="readmore" id="readmore_<?php echo $_smarty_tpl->tpl_vars['all_services']->value[$_smarty_tpl->getVariable('smarty')->value['section']['serviceIndex']['index']]['category_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['all_services']->value[$_smarty_tpl->getVariable('smarty')->value['section']['serviceIndex']['index']]['id'];?>
" onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Home/service?cat_id=<?php echo $_smarty_tpl->tpl_vars['all_services']->value[$_smarty_tpl->getVariable('smarty')->value['section']['serviceIndex']['index']]['category_id'];?>
&subcat_id=<?php echo $_smarty_tpl->tpl_vars['all_services']->value[$_smarty_tpl->getVariable('smarty')->value['section']['serviceIndex']['index']]['id'];?>
'" >Read more...</span>
			                </div>
			                <div class="page02ColumnTwo_02" id="img_<?php echo $_smarty_tpl->tpl_vars['all_services']->value[$_smarty_tpl->getVariable('smarty')->value['section']['serviceIndex']['index']]['category_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['all_services']->value[$_smarty_tpl->getVariable('smarty')->value['section']['serviceIndex']['index']]['id'];?>
">
			                    <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['all_services']->value[$_smarty_tpl->getVariable('smarty')->value['section']['serviceIndex']['index']]['image'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['all_services']->value[$_smarty_tpl->getVariable('smarty')->value['section']['serviceIndex']['index']]['name'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['all_services']->value[$_smarty_tpl->getVariable('smarty')->value['section']['serviceIndex']['index']]['name'];?>
"/>
			                </div> -->
			            <?php endfor; else: ?>
			                No Services found
			            <?php endif; ?>   

						<!-- To repeat -->
						<!-- <div class="section group"  style="height:100px; border-bottom:1px solid #CCC; padding-bottom:10px;">
							<div class="col span_1_of_5 left" style="height:100%">
								<img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
/jca_final_logo.png" height="100%"  width="100%">
							</div>
							<div class="col span_4_of_5 left float_right" style="height:100%">data</div>
						</div>
						<div class="section group"  style="height:100px; border-bottom:1px solid #CCC; padding-top:10px; padding-bottom:10px;">
							<div class="col span_1_of_5 left" style="height:100%">
								<img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
/jca_final_logo.png" height="100%"  width="100%">
							</div>
							<div class="col span_4_of_5 left float_right" style="height:100%">data</div>
						</div>
						<div class="section group"  style="height:100px; padding-top:10px;">
							<div class="col span_1_of_5 left" style="height:100%">
								<img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
/jca_final_logo.png" height="100%"  width="100%">
							</div>
							<div class="col span_4_of_5 left float_right" style="height:100%">data</div>
						</div> -->
						<!-- To repeat -->
					</div>
				</div>				
			</div>
			<!-- End main container -->
			<div id="footercontainer">
				<?php echo $_smarty_tpl->getSubTemplate ("_shared/_footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div>
	</body>
	<?php echo $_smarty_tpl->getSubTemplate ("_shared/_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</html><?php }} ?>