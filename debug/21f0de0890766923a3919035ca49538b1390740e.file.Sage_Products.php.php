<?php /* Smarty version Smarty-3.1.13, created on 2013-05-04 17:08:45
         compiled from "application\view\Auth\Sage_Products.php" */ ?>
<?php /*%%SmartyHeaderCode:148085185247d01e229-96126807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21f0de0890766923a3919035ca49538b1390740e' => 
    array (
      0 => 'application\\view\\Auth\\Sage_Products.php',
      1 => 1367679670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148085185247d01e229-96126807',
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
    'products' => 0,
    'id' => 0,
    'product' => 0,
    'action' => 0,
    'load_errors' => 0,
    'name' => 0,
    'image' => 0,
    'img' => 0,
    'price' => 0,
    'brief_desc' => 0,
    'desc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5185247d44e9f0_32839844',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5185247d44e9f0_32839844')) {function content_5185247d44e9f0_32839844($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
				                <li class="menu_selected sage">
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
							<div class="add">
								<a onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Auth/Sage'">Add Product</a>
							</div>
							<div class="panel-title">
								<span><h5>Products</h5></span>
							</div>
							<div class="panel-data">
								<ul>
									<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
										<li class="category">
											<div class="services category <?php if (isset($_smarty_tpl->tpl_vars['id']->value)){?><?php if (('prod_').($_smarty_tpl->tpl_vars['id']->value)==('prod_').($_smarty_tpl->tpl_vars['product']->value['id'])){?>category_selected<?php }?><?php }?>" id="<?php echo ('prod_').($_smarty_tpl->tpl_vars['product']->value['id']);?>
" onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Auth/Sage/editProduct?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
'"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</div>
										</li>
									<?php } ?>							
								</ul>
							</div>
						</div>						
					</div>

					<div class="users-panel general-data">
						<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Auth/Sage/<?php if ($_smarty_tpl->tpl_vars['action']->value=='add'){?>addProduct<?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['id']->value)){?>editProduct?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?><?php }?>" enctype='multipart/form-data'>
							<div class="inner-panel">
								<div class="add buttons">
									<input type="submit" value="<?php if ($_smarty_tpl->tpl_vars['action']->value=='add'){?>Add<?php }else{ ?>Save<?php }?>" name="save"> | 
									<?php if ($_smarty_tpl->tpl_vars['action']->value=='edit'){?>
										<input type="button" value="Remove" name="remove" onclick="removeProduct('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
');"> |
									<?php }?>
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
														<span>Name:<font color="red">*</font> </span>
													</div>
												</td>
												<td class="input">
													<div >
														<input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"/>														
														<input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
													</div>
												</td>											
											</tr>		
											<tr class="row"  >
												<td>
													<div class="label">
														<span>Image:<font color="red">*</font> </span>
													</div>
												</td>
												<td class="input">
													<div class="image" id="image">
														<input type="file" name="img" id="file_image" size="100%"  value="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" onchange="handleFileSelect(event)"/>
														<input type="text" name="overlap" id="overlap" value="Browse image (.png,.jpg,.jpeg,.gif,) less than 2MB"/>															
														<div id="progress_bar"><div class="percent">0%</div></div>
														<img src="<?php if ($_smarty_tpl->tpl_vars['img']->value==''){?><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['image']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
<?php }?>" id="img_src" class="subcat_thumb" style="<?php if ($_smarty_tpl->tpl_vars['img']->value==''){?><?php }else{ ?>display:block<?php }?>">
													</div>
												</td>											
											</tr>
											<tr class="row"  >
												<td>
													<div class="label price">
														<span>Price (Php):<font color="red">*</font> </span>
													</div>
												</td>
												<td class="input">
													<div class="price">
														<input type="text" name="price" value="<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
"/>
														<label>Must be in the format xxx,xxx.xx</label>
													</div>
												</td>											
											</tr>	
											<tr class="row"  >
												<td>
													<div class="label">
														<span>Brief Description:<font color="red">*</font> </span>
													</div>
												</td>
												<td class="input">
													<div >
														<input type="text" name="brief_desc" value="<?php echo $_smarty_tpl->tpl_vars['brief_desc']->value;?>
"/>
													</div>
												</td>											
											</tr>				
											<tr class="row">
												<td>
													<div class="label">
														<span>Description:<font color="red">*</font> </span>
													</div>
												</td>
												<td class="input">
													<div >
														<textarea type="text" name="desc" ><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</textarea>
													</div>
												</td>											
											</tr>
											
										</table>										
									</div>
									<div class="add buttons">
											<input type="submit" value="<?php if ($_smarty_tpl->tpl_vars['action']->value=='add'){?>Add<?php }else{ ?>Save<?php }?>" name="save"> | 
											<?php if ($_smarty_tpl->tpl_vars['action']->value=='edit'){?>
												<input type="button" value="Remove" name="remove" onclick="removeProduct('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
');"> |
											<?php }?>
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