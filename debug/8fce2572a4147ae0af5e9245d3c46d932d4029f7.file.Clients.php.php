<?php /* Smarty version Smarty-3.1.13, created on 2013-05-26 11:52:02
         compiled from "application\view\Clients.php" */ ?>
<?php /*%%SmartyHeaderCode:3022851a1db425209d2-61741225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fce2572a4147ae0af5e9245d3c46d932d4029f7' => 
    array (
      0 => 'application\\view\\Clients.php',
      1 => 1369447412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3022851a1db425209d2-61741225',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
    'css' => 0,
    'javascript' => 0,
    'image' => 0,
    'services' => 0,
    'categories' => 0,
    'subcategories' => 0,
    'contact_company_name' => 0,
    'contact_address' => 0,
    'contact_email' => 0,
    'contact_contacts' => 0,
    'contact' => 0,
    'implementations' => 0,
    'implementation' => 0,
    'client' => 0,
    'clients' => 0,
    'load_errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a1db426c0354_99598565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a1db426c0354_99598565')) {function content_51a1db426c0354_99598565($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JCABookkeeping Services</title>
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
favicon.ico" type="image/x-icon"/>
<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
favicon.ico" type="image/x-icon">
<link href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/default.css" type="text/css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/style.css" type="text/css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/contact_widget.css" type="text/css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/contactUs.css" type="text/css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/clients.css" type="text/css" rel="stylesheet" />

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['javascript']->value;?>
/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['javascript']->value;?>
/slide.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            slider('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
');
        });
    </script>
</head>

<body>
<div class="topWrap">
	<div class="topColumn">
    	<div class="logo">
        	<img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
/logo.png" />
            <!--<img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
/jca_logo2.jpg" />-->
        </div><!--End of logo-->
        <!--<div class="searchBar">
            <p>Searching....</p>
        </div>--><!--End of searhBar-->
    </div><!--End of topColumn-->
</div><!--End of topWrap-->
<!-- ------------------------------------------------------------------------------- -->
<div class="menuWrap">
    <div class="homeMenu">        
        <div class="menuSide">
            <ul class="ul">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">Home</a></li>                
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Home/services">Services</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Home/sageProducts">Products</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Home/about_us">About Us</a></li>
                <li class="menu_selected"><a href="#">Clients</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Home/ContactUs">Contact Us</a></li>            
            </ul>
        </div><!--closing for menuSide-->
    </div><!--closing for homeMenu-->
</div><!--End of menuWrap-->
<!-- ------------------------------------------------------------------------------- -->
<div class="animationWrap">
	<div class="animation">
		<div class="pic_container"></div>
        <div class="banner_loader"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
/loader-green.gif"></div>
    </div><!--End of animation-->
</div><!--End of animationWrap-->
<!-- ------------------------------------------------------------------------------- -->
<div class="bodyWrap">
	
    <div class="page02Body">
      <div class="page02ColumnOne">
        <ul class="verticalMenu">
          <?php  $_smarty_tpl->tpl_vars['categories'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categories']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['services']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categories']->key => $_smarty_tpl->tpl_vars['categories']->value){
$_smarty_tpl->tpl_vars['categories']->_loop = true;
?>
                <li class="verticalMenuTitle" id="<?php echo ('cat_').($_smarty_tpl->tpl_vars['categories']->value['cat_id']);?>
"><?php echo $_smarty_tpl->tpl_vars['categories']->value['cat_name'];?>
</li>

                <?php  $_smarty_tpl->tpl_vars['subcategories'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcategories']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value['subcat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcategories']->key => $_smarty_tpl->tpl_vars['subcategories']->value){
$_smarty_tpl->tpl_vars['subcategories']->_loop = true;
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Home/service?cat_id=<?php echo $_smarty_tpl->tpl_vars['categories']->value['cat_id'];?>
&subcat_id=<?php echo $_smarty_tpl->tpl_vars['subcategories']->value['subcat_id'];?>
" id="subcat_<?php echo $_smarty_tpl->tpl_vars['subcategories']->value['subcat_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['categories']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['subcategories']->value['subcat_name'];?>
</a></li>
                <?php } ?>
            <?php } ?>                      
        </ul>
        <!--contact widget-->
        <ul class="verticalMenu contact_widget">
            <li class="verticalMenuTitle">Contact Us</li>
            <li>
                <div class="company_name"><?php echo $_smarty_tpl->tpl_vars['contact_company_name']->value;?>
</div>
                <p class="address"><?php echo $_smarty_tpl->tpl_vars['contact_address']->value;?>
</p>
                <p class="mail contacts">
                    <strong>Mail:</strong>  <br/>
                    <span class="contact_row"><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['contact_email']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['contact_email']->value;?>
</a></span>  <br/>
                    <span class="contact_row"><a href="mailto:jcabs2007@gmail.com">jcabs2007@gmail.com</a></span>
                </p>
                <p class="contacts">
                    <strong>Contacts:</strong> <br/>
                    <?php $_smarty_tpl->tpl_vars['contact'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['contact']->step = 1;$_smarty_tpl->tpl_vars['contact']->total = (int)ceil(($_smarty_tpl->tpl_vars['contact']->step > 0 ? count($_smarty_tpl->tpl_vars['contact_contacts']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['contact_contacts']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['contact']->step));
if ($_smarty_tpl->tpl_vars['contact']->total > 0){
for ($_smarty_tpl->tpl_vars['contact']->value = 0, $_smarty_tpl->tpl_vars['contact']->iteration = 1;$_smarty_tpl->tpl_vars['contact']->iteration <= $_smarty_tpl->tpl_vars['contact']->total;$_smarty_tpl->tpl_vars['contact']->value += $_smarty_tpl->tpl_vars['contact']->step, $_smarty_tpl->tpl_vars['contact']->iteration++){
$_smarty_tpl->tpl_vars['contact']->first = $_smarty_tpl->tpl_vars['contact']->iteration == 1;$_smarty_tpl->tpl_vars['contact']->last = $_smarty_tpl->tpl_vars['contact']->iteration == $_smarty_tpl->tpl_vars['contact']->total;?>
                        <span class="contact_row"><?php echo $_smarty_tpl->tpl_vars['contact_contacts']->value[$_smarty_tpl->tpl_vars['contact']->value];?>
</span> <br/>
                    <?php }} ?>
                </p>
            </li>                      
        </ul>
        <!--end contact widget-->
      </div><!--End of page02ColumnWrap-->
        <div class="page02ColumnTwo">
            <div class="aboutUs">
                <div class="aboutUsTile"><h2>List of Clients</h2></div>
                <ul class="clients_ul">
                    <li>
                        <h5 class="client_title">Peachtree Clients</h5>                        
                        <ul>
                            <?php  $_smarty_tpl->tpl_vars['implementation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['implementation']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['implementations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['implementation']->key => $_smarty_tpl->tpl_vars['implementation']->value){
$_smarty_tpl->tpl_vars['implementation']->_loop = true;
?>
                                <li>
                                    <div class="company_name"><?php echo $_smarty_tpl->tpl_vars['implementation']->value['type_name'];?>
</div>
                                    <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['implementation']->value['clients']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value){
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
                                        <div class="company_name" style="text-indent:20px;"><?php echo $_smarty_tpl->tpl_vars['client']->value['name'];?>
</div>
                                        <?php if ($_smarty_tpl->tpl_vars['client']->value['location']!=''){?>
                                            <div class="location" style="text-indent:20px;"><?php echo $_smarty_tpl->tpl_vars['client']->value['location'];?>
</div>
                                        <?php }?>
                                    <?php } ?>                               
                                </li>
                            <?php } ?> 
                            
                        </ul>
                    </li>
                    <li>
                        <h5 class="client_title">Other Clients</h5>
                        <ul>
                            <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clients']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value){
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
                                <li>
                                    <div class="company_name"><?php echo $_smarty_tpl->tpl_vars['client']->value['company_name'];?>
</div>
                                    <div class="location"><?php echo $_smarty_tpl->tpl_vars['client']->value['address'];?>
</div>

                                    <?php if (isset($_smarty_tpl->tpl_vars['client']->value['contact_person'])){?>
                                        <div class="contact">
                                            <u><strong><?php echo $_smarty_tpl->tpl_vars['client']->value['contact_person'];?>
 <?php if (isset($_smarty_tpl->tpl_vars['client']->value['position'])){?>- <?php echo $_smarty_tpl->tpl_vars['client']->value['position'];?>
<?php }?></strong></u>
                                        </div>
                                    <?php }?>
                                    
                                    <?php if (isset($_smarty_tpl->tpl_vars['client']->value['contact_number'])){?>
                                        <div class="contact_num"><?php echo $_smarty_tpl->tpl_vars['client']->value['contact_number'];?>
</div>                                
                                    <?php }?>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                </ul>
            </div><!--End of aboutUs-->



            <div class="clearfix" style="clear:both;"></div><!--End of clearfix-->  
            <div class="contactUsMapWrapper">
                <div class="contactUsMapTitle" style="border-bottom:0px; border-top: 1px dotted #ccc;margin-top: 20px;">
                    Contact JCA Bookkeeping Services
                </div><!--End of contactUsMapTitle-->
                <?php echo $_smarty_tpl->tpl_vars['load_errors']->value;?>

                <div class="contactUsDataText">
                    <form method="POST">
                        <p class="no">Firstname:</p>
                        <p class="no"><input class="inputbox" type="text" name="firstname"></p>
                        <p class="no">Lastname:</p>
                        <p class="no"><input class="inputbox" type="text" name="lastname"></p>
                        <p class="no">Address:</p>
                        <p class="no"><input class="inputbox" type="text" name="address"></p>
                        <p class="no">Email:</p>
                        <p class="no"><input class="inputbox" type="text" name="email"></p>
                        <p class="no">Phone:</p>
                        <p class="no"><input class="inputbox" type="text" name="phone"></p>
                        <p class="no">Company:</p>
                        <p class="no"><input class="inputbox" type="text" name="company"></p>
                        <p class="no">Message:</p>
                        <p class="no"><textarea class="textArea" name="message"></textarea></p>  
                        <input type="hidden" name="subject" value="JCA User Inquiry"/>                                                                 
                        <p class="no"><input class="subButton" type="submit" name="Contact" value="Contact Us"></p> 
                    </form>
                </div><!--End of contactUsDataText-->
            </div><!--End of contactUsMapWrapper-->
        </div><!--End of page02ColumnTwo-->
        <div class="clearfix" style="clear:both;"></div><!--End of clearfix-->    
    </div><!--End of page02Body-->


    <div class="ourPartners">
        <div class="title"><h3>Our Partners</h3></div>
        <div class="partnersBox1">
            <p><a href="http://www.dti.gov.ph" target="blank">Department of Trade & Industry</a></p>
            <p><a href="http://www.bir.gov.ph" target="blank"> Bureau of Internal Revenue</a></p>
        </div>
        <div class="partnersBox1">
            <p><a href="#">Register of Deeds and Maritime Industry</a></p>
            <p><a href="http://www.immigration.gov.ph" target="blank">Bureau of Immigration Commission</a></p>                   
        </div>
        <div class="partnersBox1">
            <p><a href="http://www.sec.gov.ph" target="blank">Securities and Exchange Commission</a></p>        
        </div> 
        <div class="clearfix" style="clear:both"></div>                       
    </div><!--End of ourPartners-->
</div><!--End of bodyWrap-->
<div class="footer">

</div><!--End of footer-->
<div class="copyrights">
    <p>All Rights Reserved JCA Bookkeeping Services 2013</p>
</div><!--End of copyrights-->
</body>
</html>
<?php }} ?>