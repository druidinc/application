<?php /* Smarty version Smarty-3.1.13, created on 2013-05-26 11:50:45
         compiled from "application\view\Auth\Services.php" */ ?>
<?php /*%%SmartyHeaderCode:1523351a1daf5b717b4-46078599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2010fd45f6c91b6c18cf9fdc13f5faf0c130c6a' => 
    array (
      0 => 'application\\view\\Auth\\Services.php',
      1 => 1369409977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1523351a1daf5b717b4-46078599',
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
    'services' => 0,
    'type' => 0,
    'cat_id' => 0,
    'categories' => 0,
    'subcat_id' => 0,
    'subcategories' => 0,
    'action' => 0,
    'remove_id' => 0,
    'load_errors' => 0,
    'cat_name' => 0,
    'subcat_name' => 0,
    'subcat_image' => 0,
    'image' => 0,
    'cat_desc' => 0,
    'subcat_desc' => 0,
    'cats' => 0,
    'subcat_cat' => 0,
    'category' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a1daf5e9c0b6_59687119',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a1daf5e9c0b6_59687119')) {function content_51a1daf5e9c0b6_59687119($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		
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
/services.js"></script>
		
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
				                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Auth/Admin">Home</a></li>                
				                <li class="menu_selected"><a href="#">Services</a></li>
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
				                <!--<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Auth/Admin/representatives">Representatives</a></li>-->
				                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Auth/Pages">Pages</a></li>
				                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Auth/Clients">Clients</a></li>
				            </ul>
				        </div><!--closing for menuSide-->
				    </div>
				    <div class="greetings">
				    	Welcome Janette | <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
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
Auth/Services?type=cat'">Add Category</a> | 
								<a onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Auth/Services?type=subcat'">Add Subcategory</a>
							</div>
							<div class="panel-title">
								<span><h5>Services</h5></span>
							</div>
							<div class="panel-data">
								<ul>
									<?php  $_smarty_tpl->tpl_vars['categories'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categories']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['services']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categories']->key => $_smarty_tpl->tpl_vars['categories']->value){
$_smarty_tpl->tpl_vars['categories']->_loop = true;
?>
										<li class="category">
											<div class="services category <?php if (((($_smarty_tpl->tpl_vars['type']->value).('_')).($_smarty_tpl->tpl_vars['cat_id']->value))==(('cat_').($_smarty_tpl->tpl_vars['categories']->value['cat_id']))){?>category_selected<?php }?>" id="<?php echo ('cat_').($_smarty_tpl->tpl_vars['categories']->value['cat_id']);?>
" onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Auth/Services/edit?type=cat&cat_id=<?php echo $_smarty_tpl->tpl_vars['categories']->value['cat_id'];?>
'"><?php echo $_smarty_tpl->tpl_vars['categories']->value['cat_name'];?>
</div>											
											<ul class="ul_subcategory">
												<?php  $_smarty_tpl->tpl_vars['subcategories'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcategories']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value['subcat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcategories']->key => $_smarty_tpl->tpl_vars['subcategories']->value){
$_smarty_tpl->tpl_vars['subcategories']->_loop = true;
?>
													<li class="subcategory">														
														<div class="services subcategory <?php if (((((($_smarty_tpl->tpl_vars['type']->value).('_')).($_smarty_tpl->tpl_vars['cat_id']->value)).('_')).($_smarty_tpl->tpl_vars['subcat_id']->value))==(((('subcat_').($_smarty_tpl->tpl_vars['categories']->value['cat_id'])).('_')).($_smarty_tpl->tpl_vars['subcategories']->value['subcat_id']))){?>category_selected<?php }?>" id="<?php echo ((('subcat_').($_smarty_tpl->tpl_vars['categories']->value['cat_id'])).('_')).($_smarty_tpl->tpl_vars['subcategories']->value['subcat_id']);?>
" onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Auth/Services/edit?type=subcat&cat_id=<?php echo $_smarty_tpl->tpl_vars['categories']->value['cat_id'];?>
&subcat_id=<?php echo $_smarty_tpl->tpl_vars['subcategories']->value['subcat_id'];?>
'"><?php echo $_smarty_tpl->tpl_vars['subcategories']->value['subcat_name'];?>
</div>														
													</li>
												<?php } ?>
											</ul>									
										</li>
									<?php } ?>
								</ul>
							</div>
						</div>						
					</div>

					<div class="users-panel general-data">
						<form method="POST" action="<?php if ($_smarty_tpl->tpl_vars['action']->value=='add'){?><?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Auth/Services/add<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Auth/Services/edit?type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
&cat_id=<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
<?php if (isset($_smarty_tpl->tpl_vars['subcat_id']->value)){?>&subcat_id=<?php echo $_smarty_tpl->tpl_vars['subcat_id']->value;?>
<?php }?><?php }?>" enctype='multipart/form-data'>
							<div class="inner-panel">
								<div class="add buttons">
									<input type="submit" value="<?php if ($_smarty_tpl->tpl_vars['action']->value=='add'){?>Add<?php }else{ ?>Save<?php }?>" name="save"> | 
									<?php if ($_smarty_tpl->tpl_vars['action']->value=='edit'){?>
										<input type="button" value="Remove" name="remove" onclick="removeSelected('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['remove_id']->value;?>
');"> |
									<?php }?>
									<input type="reset" value="Reset" name="reset">
								</div>
								<div class="panel-title">
									<span><h5>General Data - <?php if ($_smarty_tpl->tpl_vars['action']->value=='add'){?>Add <?php if ($_smarty_tpl->tpl_vars['type']->value=='cat'){?>Category<?php }else{ ?>Subcategory<?php }?><?php }else{ ?>Edit <?php if ($_smarty_tpl->tpl_vars['type']->value=='cat'){?>Category<?php }else{ ?>Subcategory<?php }?><?php }?></h5></span>
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
														<?php if ($_smarty_tpl->tpl_vars['type']->value=='cat'){?>
															<input type="text" name="cat_name" value="<?php echo $_smarty_tpl->tpl_vars['cat_name']->value;?>
"/>
														<?php }else{ ?>
															<input type="text" name="subcat_name" value="<?php echo $_smarty_tpl->tpl_vars['subcat_name']->value;?>
"/>
														<?php }?>
														
														<input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
														<input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" />
													</div>
												</td>											
											</tr>		
											<?php if ($_smarty_tpl->tpl_vars['type']->value=='subcat'){?>
												<tr class="row"  >
													<td>
														<div class="label">
															<span>Image:<font color="red">*</font> </span>
														</div>
													</td>
													<td class="input">
														<div class="image" id="image">
															<input type="file" name="subcat_image" id="file_image" size="100%"  value="<?php echo $_smarty_tpl->tpl_vars['subcat_image']->value;?>
" onchange="handleFileSelect(event)"/>
															<input type="text" name="overlap" id="overlap" value="Browse image (.png,.jpg,.jpeg,.gif,) less than 2MB"/>															
															<div id="progress_bar"><div class="percent">0%</div></div>
															<img src="<?php if ($_smarty_tpl->tpl_vars['subcat_image']->value==''){?><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['image']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['subcat_image']->value;?>
<?php }?>" id="img_src" class="subcat_thumb" style="<?php if ($_smarty_tpl->tpl_vars['subcat_image']->value==''){?><?php }else{ ?>display:block<?php }?>">

															<!--<?php if ($_smarty_tpl->tpl_vars['subcat_image']->value!=''){?>
																<script type="text/javascript">
																	resizeImage();
																</script>
															<?php }?>-->
														</div>
													</td>											
												</tr>	
											<?php }?>						
											<tr class="row">
												<td>
													<div class="label description">
														<span>Description:<font color="red">*</font> </span>
													</div>
												</td>
												<td class="input">
													<div class="description">
														<?php if ($_smarty_tpl->tpl_vars['type']->value=='cat'){?>
															<textarea type="text" name="cat_desc" ><?php echo $_smarty_tpl->tpl_vars['cat_desc']->value;?>
</textarea>
														<?php }else{ ?>
															<textarea type="text" name="subcat_desc" ><?php echo $_smarty_tpl->tpl_vars['subcat_desc']->value;?>
</textarea>
														<?php }?>
													</div>
												</td>											
											</tr>

											<?php if ($_smarty_tpl->tpl_vars['type']->value=='subcat'){?>
												<tr class="row"  >
													<td>
														<div class="label">
															<span>Category:<font color="red">*</font> </span>
														</div>
													</td>
													<td class="input">

														<div>
															<select name="cat_id" value="<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
">
																<option value="" label="Select one">--Select one--</option>																
																<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
																	<?php if ($_smarty_tpl->tpl_vars['subcat_cat']->value==$_smarty_tpl->tpl_vars['category']->value['id']){?>
																		<option selected="selected" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" label="<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>											
																	<?php }else{ ?>
																		<option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" label="<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>											
																	<?php }?>																	
																<?php } ?>
															</select>
														</div>
													</td>											
												</tr>
											<?php }?>
										</table>										
									</div>
									<div class="add buttons">
											<input type="submit" value="<?php if ($_smarty_tpl->tpl_vars['action']->value=='add'){?>Add<?php }else{ ?>Save<?php }?>" name="save"> | 
											<?php if ($_smarty_tpl->tpl_vars['action']->value=='edit'){?>
												<input type="button" value="Remove" name="remove" onclick="removeSelected('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['remove_id']->value;?>
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
		<div class="fade-box">
			<div class="loading">Loading data <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
/loader-green.gif"></div>
		</div>

		<?php if (isset($_smarty_tpl->tpl_vars['success']->value)){?>
			<script type="text/javascript">				
				$('.fade-box').fadeIn(2000,function(){
					$('.fade-box').fadeOut(2000,function(){
						$('.fade-box .loading').html('Loading data <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
/loader-green.gif">');
					});
				});
				$('.fade-box .loading').html('Successfully added <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
/check.jpg"/>');
			</script>
		<?php }else{ ?>
			<script type="text/javascript">				
				$('.fade-box').fadeOut(2000);
			</script>
		<?php }?>

		<script type="text/javascript">
			initTinyMce();
		</script>
	</body>
</html><?php }} ?>