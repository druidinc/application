<?php /* Smarty version Smarty-3.1.13, created on 2013-05-29 17:40:56
         compiled from "application\view\_shared\_header.php" */ ?>
<?php /*%%SmartyHeaderCode:3112151a1e2e9acbc73-24428217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '079c27b383d9f1476327388b586dd5ff59b7e3db' => 
    array (
      0 => 'application\\view\\_shared\\_header.php',
      1 => 1369842051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3112151a1e2e9acbc73-24428217',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a1e2e9aceff3_93194588',
  'variables' => 
  array (
    'image' => 0,
    'page' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a1e2e9aceff3_93194588')) {function content_51a1e2e9aceff3_93194588($_smarty_tpl) {?><header>					
	<div class = "section linebar"></div>
	<div class = "headcontent">
		<div class="section group">
			<div class="col span_1_of_2">
			<div class="logo">
	        	<img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
/jca_final_logo.png" />
	        </div>
			</div>
			<div class="col span_1_of_2 float_right">
				<div class="searchBar float_right">
		            <script>
		              (function() {
		                var cx = '017924416408079978860:mhdcfjgmngo';
		                var gcse = document.createElement('script');
		                gcse.type = 'text/javascript';
		                gcse.async = true;
		                gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
		                    '//www.google.com/cse/cse.js?cx=' + cx;
		                var s = document.getElementsByTagName('script')[0];
		                s.parentNode.insertBefore(gcse, s);
		              })();
		            </script>
		            <gcse:search></gcse:search>
		        </div>
			</div>
		</div>
	</div>
</header>
<nav class="nav_container">
	<div class="section group headcontent">
		<div class="col span_1_of_1 <?php if ($_smarty_tpl->tpl_vars['page']->value=='home'){?>selected_nav<?php }?>"><a  href="#" >Home</a></div>
		<div class="col span_1_of_1 <?php if ($_smarty_tpl->tpl_vars['page']->value=='services'){?>selected_nav<?php }?>"><a  href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Services" >Services</a></div>
		<div class="col span_1_of_1"><a  href="#" >Products</a></div>
		<div class="col span_1_of_1"><a  href="#" >About Us</a></div>
		<div class="col span_1_of_1"><a  href="#" >Clients</a></div>
		<div class="col span_1_of_1"><a  href="#" >Contacts</a></div>
	</div>	
</nav>
<div class="banner_container">
	<div class="section group headcontent">
		<div class="animation">
			<div class="pic_container"></div>
        	<div class="banner_loader"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
/loader-green.gif"></div>
		</div>
	</div>
</div><?php }} ?>