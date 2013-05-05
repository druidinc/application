<?php /* Smarty version Smarty-3.1.13, created on 2013-05-04 17:04:35
         compiled from "application\view\Auth\Admin.php" */ ?>
<?php /*%%SmartyHeaderCode:2285851852383bcaba2-87943864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd55b8a9f3eb288e3303ca656d42d6281cc41d509' => 
    array (
      0 => 'application\\view\\Auth\\Admin.php',
      1 => 1367679629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2285851852383bcaba2-87943864',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'css' => 0,
    'javascript' => 0,
    'base_url' => 0,
    'token' => 0,
    'online_reps' => 0,
    'image' => 0,
    'reps' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5185238413dd69_56755567',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5185238413dd69_56755567')) {function content_5185238413dd69_56755567($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/default.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/admin.css">


		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['javascript']->value;?>
/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['javascript']->value;?>
/sage.js"></script>
	</head>

	<body>
		<div class="wrapper">
			<div class="header">
				<div class="header-wrapper">
					<div class="title">
						<h3><span>JCA Admin</span></h3>
					</div>
					<div class="homeMenu">        
				        <div class="menuSide">
				            <ul class="ul">
				                <li class="menu_selected"><a href="#">Home</a></li>                
				                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Auth/Services">Services</a></li>
				                <li class="sage">
				                	<a href="#" class="sage">Peachtree</a>
				                	<div class="sub-menu sage">
					                	<ul class="sage">
					                		<li class="sage"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Auth/Sage/products" class="sage">Products</a></li>
					                		<li class="sage"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Auth/Sage/implementations" class="sage">Implementations/Clients</a></li>
					                	</ul>
					                </div>
				                </li>
				                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Auth/Visa_Working_Permit">Visa &amp; Working Permit</a></li>
				                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Auth/Admin/representatives">Representatives</a></li>
				                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Auth/Pages">Pages</a></li>
				                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Auth/Clients">Clients</a></li>
				            </ul>
				        </div><!--closing for menuSide-->
				    </div>
				    <div class="greetings">
				    	Welcome Name | <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Auth/Logout?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
">Logout</a>
				    </div>
				</div>
			</div>
			<div class="body">
				<div class="inner-body">
					<div class="users-panel services">
						<div class="inner-panel">
							<div class="panel-title">
								<span><h5>Representatives</h5></span>
							</div>
							<div class="panel-data">
								<ul>
									<?php  $_smarty_tpl->tpl_vars['reps'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reps']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['online_reps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reps']->key => $_smarty_tpl->tpl_vars['reps']->value){
$_smarty_tpl->tpl_vars['reps']->_loop = true;
?>
										<li>
											<div class="user-img">
												<img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['reps']->value['image'];?>
" class="users">
											</div>
											<div class="users-data">
												<div class="name"><?php echo $_smarty_tpl->tpl_vars['reps']->value['name'];?>
</div>
												<?php if ($_smarty_tpl->tpl_vars['reps']->value['status']=='Online'){?>
													<div class="status online"><?php echo $_smarty_tpl->tpl_vars['reps']->value['status'];?>
</div>
												<?php }elseif($_smarty_tpl->tpl_vars['reps']->value['status']=='Offline'){?>
													<div class="status offline"><?php echo $_smarty_tpl->tpl_vars['reps']->value['status'];?>
</div>
												<?php }?>
												
												<div class="clear" style="clear:both;"></div>
											</div>									
										</li>
									<?php } ?>									
								</ul>
							</div>
						</div>						
					</div>
				</div>
			</div>
			<div class="footer"></div>
		</div>
	</body>
</html><?php }} ?>