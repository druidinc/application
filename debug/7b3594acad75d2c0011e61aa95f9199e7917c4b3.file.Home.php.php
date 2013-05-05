<?php /* Smarty version Smarty-3.1.13, created on 2013-05-04 17:08:51
         compiled from "application\view\Home.php" */ ?>
<?php /*%%SmartyHeaderCode:8497518524834f6b14-53600870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b3594acad75d2c0011e61aa95f9199e7917c4b3' => 
    array (
      0 => 'application\\view\\Home.php',
      1 => 1367660598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8497518524834f6b14-53600870',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'css' => 0,
    'javascript' => 0,
    'base_url' => 0,
    'image' => 0,
    'mission' => 0,
    'vision' => 0,
    'contact_company_name' => 0,
    'contact_address' => 0,
    'contact_email' => 0,
    'contact_contacts' => 0,
    'contact' => 0,
    'services' => 0,
    'online_reps' => 0,
    'reps' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5185248374acb1_85142761',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5185248374acb1_85142761')) {function content_5185248374acb1_85142761($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JCABookkeeping Services</title>
    <link href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/default.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/style.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/contactUs.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/contact_widget.css" type="text/css" rel="stylesheet" />

    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['javascript']->value;?>
/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['javascript']->value;?>
/home.js"></script>
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
            <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
/jca_logo2.jpg" />
        </div><!--End of logo-->
        <div class="searchBar">
            <p>Searching....</p>
        </div><!--End of searhBar-->
    </div><!--End of topColumn-->
</div><!--End of topWrap-->
<!-- ------------------------------------------------------------------------------- -->
<div class="menuWrap">
    <div class="homeMenu">        
        <div class="menuSide">
            <ul class="ul">
                <li class="menu_selected"><a href="#">Home</a></li> <!-- just home-->
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Home/services">Services</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Home/about_us">About Us</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Home/clients">Clients</a></li>
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
	<div class="bodyColumn1">
    	<h5>Mission</h5>
        <p class="misDescription">
        	<?php echo $_smarty_tpl->tpl_vars['mission']->value;?>
 
        </p>
    	<h5>Vision</h5>
        <p class="visDescription">
        	<?php echo $_smarty_tpl->tpl_vars['vision']->value;?>
         
        </p> 
   
    </div><!--End of bodyColumn-->
	<div class="bodyColumn2">
        <div class="galleryBody">
            <div class="contactUsWrapper">
                <div class="contactTitle">
                    Contact Us
                </div><!--End of contactTitle-->
                <div class="contactData">
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
                        <strong>Contacts:</strong>  <br/> 
                        <?php $_smarty_tpl->tpl_vars['contact'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['contact']->step = 1;$_smarty_tpl->tpl_vars['contact']->total = (int)ceil(($_smarty_tpl->tpl_vars['contact']->step > 0 ? count($_smarty_tpl->tpl_vars['contact_contacts']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['contact_contacts']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['contact']->step));
if ($_smarty_tpl->tpl_vars['contact']->total > 0){
for ($_smarty_tpl->tpl_vars['contact']->value = 0, $_smarty_tpl->tpl_vars['contact']->iteration = 1;$_smarty_tpl->tpl_vars['contact']->iteration <= $_smarty_tpl->tpl_vars['contact']->total;$_smarty_tpl->tpl_vars['contact']->value += $_smarty_tpl->tpl_vars['contact']->step, $_smarty_tpl->tpl_vars['contact']->iteration++){
$_smarty_tpl->tpl_vars['contact']->first = $_smarty_tpl->tpl_vars['contact']->iteration == 1;$_smarty_tpl->tpl_vars['contact']->last = $_smarty_tpl->tpl_vars['contact']->iteration == $_smarty_tpl->tpl_vars['contact']->total;?>
                            <span class="contact_row"><?php echo $_smarty_tpl->tpl_vars['contact_contacts']->value[$_smarty_tpl->tpl_vars['contact']->value];?>
</span> <br/>                            
                        <?php }} ?>
                    </p>
                </div><!--End of contactData-->
            </div><!--End of contactUsWrapper-->
        </div><!--End of galleryBody-->
    </div><!--End of bodyColumn-->
    <div class="clear" style="clear:both;"></div>
    <div class="services">
    	<div class="title">
            <h3>
            	Services Offered
            </h3>
        </div><!--End of servicesTitle-->

        <div class="frontEndImage" onmouseover="display('nextPrevious')" onmouseout="hide('nextPrevious')">

            <div class="frontEndTable" style="width:<?php echo count($_smarty_tpl->tpl_vars['services']->value)*240;?>
px;">
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
                    <div class="img">                  
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Home/service?cat_id=<?php echo $_smarty_tpl->tpl_vars['services']->value[$_smarty_tpl->getVariable('smarty')->value['section']['serviceIndex']['index']]['category_id'];?>
&subcat_id=<?php echo $_smarty_tpl->tpl_vars['services']->value[$_smarty_tpl->getVariable('smarty')->value['section']['serviceIndex']['index']]['id'];?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['services']->value[$_smarty_tpl->getVariable('smarty')->value['section']['serviceIndex']['index']]['image'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['services']->value[$_smarty_tpl->getVariable('smarty')->value['section']['serviceIndex']['index']]['name'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['services']->value[$_smarty_tpl->getVariable('smarty')->value['section']['serviceIndex']['index']]['name'];?>
"/>
                            <div class="desc"><?php echo $_smarty_tpl->tpl_vars['services']->value[$_smarty_tpl->getVariable('smarty')->value['section']['serviceIndex']['index']]['name'];?>
</div>
                        </a>                         
                    </div>
                <?php endfor; else: ?>
                    No Services found
                <?php endif; ?>                
            </div>
            <div class="nextPrevious">
                <div class="previous" onclick="prev(<?php echo count($_smarty_tpl->tpl_vars['services']->value)*240;?>
)">&lt;</div>
                <div class="next"  onclick="next(<?php echo count($_smarty_tpl->tpl_vars['services']->value)*240;?>
)">&gt;</div>
            </div>        
     </div><!--End of frontEndImage-->
    </div><!--End of services-->
    <div class="ourPartners">
    	<div class="title"><h3>Our Partners</h3></div>
        <div class="partnersBox1">
            <p><a href="#">Employment Visa Philippines</a></p>
            <p><a href="#">Work Visa Philippines</a></p>
            <p><a href="#">AVEG Visa Philippines</a></p>
            <p><a href="#">Visa Consulting Philippines</a></p>
        </div>
        <div class="partnersBox1">
            <p><a href="#">Employment Visa Philippines</a></p>
            <p><a href="#">Work Visa Philippines</a></p>
            <p><a href="#">AVEG Visa Philippines</a></p>
            <p><a href="#">Visa Consulting Philippines</a></p>      
        </div>
        <div class="partnersBox1">
            <p><a href="#">Employment Visa Philippines</a></p>
            <p><a href="#">Work Visa Philippines</a></p>
            <p><a href="#">AVEG Visa Philippines</a></p>
            <p><a href="#">Visa Consulting Philippines</a></p>        
        </div>
        <div class="partnersBox1">
            <p><a href="#">Employment Visa Philippines</a></p>
            <p><a href="#">Work Visa Philippines</a></p>
            <p><a href="#">AVEG Visa Philippines</a></p>
            <p><a href="#">Visa Consulting Philippines</a></p>       
        </div><!--End of partnersBox1-4 --> 
        <div class="clearfix" style="clear:both"></div>                       
    </div><!--End of ourPartners-->
</div><!--End of bodyWrap-->
<div class="footer">

</div><!--End of footer-->
<div class="copyrights">
    <p>All Rights Reserved JCA Bookkeeping Services 2013</p>
</div><!--End of copyrights-->

<div class="chat_panel">
    <div class="chat_inner_panel">
        <div class="chat_online_panel">
            <div class="chat_header">Support Representatives</div>
            <div class="chat_online_list">
                <ul id="chat_online_list_ul">
                <?php  $_smarty_tpl->tpl_vars['reps'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reps']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['online_reps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reps']->key => $_smarty_tpl->tpl_vars['reps']->value){
$_smarty_tpl->tpl_vars['reps']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['reps']->value['status']=='Online'){?>
                        <li><?php echo $_smarty_tpl->tpl_vars['reps']->value['name'];?>
</li>
                    <?php }?>
                <?php } ?>
                </ul> 
            </div>
        </div>
        <div class="chat_button_panel" onclick="displayChat()">
            <span class="chat_button_drawer">Chat</span>
        </div>
        <div class="clearfix" style="clear:both"></div>  
    </div>
</div>
</body>
</html>
<?php }} ?>