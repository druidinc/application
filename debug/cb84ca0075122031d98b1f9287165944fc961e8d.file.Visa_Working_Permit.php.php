<?php /* Smarty version Smarty-3.1.13, created on 2013-05-05 15:38:06
         compiled from "application\view\Auth\Visa_Working_Permit.php" */ ?>
<?php /*%%SmartyHeaderCode:2174351852c4dd7bdb1-63728437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb84ca0075122031d98b1f9287165944fc961e8d' => 
    array (
      0 => 'application\\view\\Auth\\Visa_Working_Permit.php',
      1 => 1367761082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2174351852c4dd7bdb1-63728437',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51852c4df1d6a4_91889492',
  'variables' => 
  array (
    'title' => 0,
    'css' => 0,
    'javascript' => 0,
    'base_url' => 0,
    'token' => 0,
    'visa_working_permit' => 0,
    'id' => 0,
    'visa' => 0,
    'action' => 0,
    'load_errors' => 0,
    'name' => 0,
    'display_text' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51852c4df1d6a4_91889492')) {function content_51852c4df1d6a4_91889492($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/default.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/admin.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/services.css">


		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['javascript']->value;?>
/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['javascript']->value;?>
/tiny_mce/tiny_mce.js"></script>
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
				                <li ><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Auth/Admin">Home</a></li>                
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
				                <li class="menu_selected"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
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
								<span><h5>Products</h5></span>
							</div>
							<div class="panel-data">
								<ul>
									<?php  $_smarty_tpl->tpl_vars['visa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['visa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['visa_working_permit']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['visa']->key => $_smarty_tpl->tpl_vars['visa']->value){
$_smarty_tpl->tpl_vars['visa']->_loop = true;
?>
										<li class="category">
											<div class="services category <?php if (isset($_smarty_tpl->tpl_vars['id']->value)&&$_smarty_tpl->tpl_vars['id']->value==$_smarty_tpl->tpl_vars['visa']->value['id']){?>category_selected<?php }?>" id="" onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Auth/Visa_Working_Permit/editVisaWorkingPermit?id=<?php echo $_smarty_tpl->tpl_vars['visa']->value['id'];?>
'"><?php echo $_smarty_tpl->tpl_vars['visa']->value['display_text'];?>
</div>
										</li>
									<?php } ?>							
								</ul>
							</div>
						</div>						
					</div>

					<div class="users-panel general-data">
						<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Auth/Visa_Working_Permit/<?php if (isset($_smarty_tpl->tpl_vars['id']->value)){?>editVisaWorkingPermit?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>" enctype='multipart/form-data'>
							<div class="inner-panel">
								<div class="add buttons">
									<input type="submit" value="Save" name="save"> | 									
									<input type="reset" value="Reset" name="reset">
								</div>
								<div class="panel-title">
									<span><h5>General Data - <?php if ($_smarty_tpl->tpl_vars['action']->value=='add'){?>Add Product<?php }else{ ?>Edit Product<?php }?></h5></span>
								</div>
								<div class="panel-data">
									<?php echo $_smarty_tpl->tpl_vars['load_errors']->value;?>

									<div class="content">
										<table>
											<tr class="row"  >
												<td>
													<div class="label">
														<span>Name:</span>
													</div>
												</td>
												<td class="input">
													<div >
														<input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" readonly/>														
														<input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
													</div>
												</td>											
											</tr>
											<tr class="row"  >
												<td>
													<div class="label price">
														<span>Display text:<font color="red">*</font> </span>
													</div>
												</td>
												<td class="input">
													<div class="price">
														<input type="text" name="display_text" value="<?php echo $_smarty_tpl->tpl_vars['display_text']->value;?>
"/>
													</div>
												</td>											
											</tr>				
											<tr class="row">
												<td>
													<div class="label">
														<span>Content:<font color="red">*</font> </span>
													</div>
												</td>
												<td class="input">
													<div >
														<textarea type="text" name="content" ><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</textarea>
													</div>
												</td>											
											</tr>
											
										</table>										
									</div>
									<div class="add buttons">
											<input type="submit" value="Save" name="save"> | 
											<input type="reset" value="Reset" name="reset">
										</div>
								</div>
							</div>			
						</form>			
					</div>
				</div>
			</div>
			<div class="footer"></div>
		</div>
	</body>
</html><?php }} ?>