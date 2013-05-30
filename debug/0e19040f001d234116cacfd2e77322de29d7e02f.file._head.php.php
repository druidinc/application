<?php /* Smarty version Smarty-3.1.13, created on 2013-05-30 13:55:48
         compiled from "application\view\_shared\_head.php" */ ?>
<?php /*%%SmartyHeaderCode:258751a1e282e04db9-17198815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e19040f001d234116cacfd2e77322de29d7e02f' => 
    array (
      0 => 'application\\view\\_shared\\_head.php',
      1 => 1369914945,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258751a1e282e04db9-17198815',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a1e282e47187_36563508',
  'variables' => 
  array (
    'title' => 0,
    'icon' => 0,
    'css' => 0,
    'base_url' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a1e282e47187_36563508')) {function content_51a1e282e47187_36563508($_smarty_tpl) {?>

	<meta charset="utf-8">
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="google-site-verification" content="TMok5xaEJ-yABeAeIvuD3gTT5thF31gxYiIlD2oORX4" />

	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<meta name="description" content="">
	<meta name="keywords" content="">

	<meta name="author" content="www.grahamrobertsonmiller.co.uk">

	<meta http-equiv="cleartype" content="on">

	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
" type="image/x-icon"/>
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
" type="image/x-icon">

	<!-- Responsive and mobile friendly stuff -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Stylesheets -->
	<!--<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/default/html5reset.css" media="all">-->
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
favicon.ico" type="image/x-icon"/>
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/default/default.css" media="all">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/default/col.css" media="all">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/default/2cols.css" media="all">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/default/3cols.css" media="all">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/default/4cols.css" media="all">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/default/5cols.css" media="all">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/default/6cols.css" media="all">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/default/7cols.css" media="all">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/default/8cols.css" media="all">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/default/9cols.css" media="all">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/default/10cols.css" media="all">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/default/11cols.css" media="all">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/default/12cols.css" media="all">

	<!-- Responsive Stylesheets -->
	<link rel="stylesheet" media="only screen and (max-width: 1024px) and (min-width: 769px)" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/default/1024.css">
	<link rel="stylesheet" media="only screen and (max-width: 768px) and (min-width: 481px)" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/default/768.css">
	<link rel="stylesheet" media="only screen and (max-width: 480px)" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/default/480.css">

	<!-- widgets -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/widget/_services.css" media="all">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/widget/_contacts.css" media="all">


	<?php if ($_smarty_tpl->tpl_vars['page']->value=='home'){?>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/home.css" media="all">
	<?php }elseif($_smarty_tpl->tpl_vars['page']->value=="services"){?>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/services.css" media="all">
	<?php }?>

	<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements and feature detects -->
	

	<style type="text/css">

	/*  THIS IS JUST TO GET THE GRID TO SHOW UP.  YOU DONT NEED THIS IN YOUR CODE */

	#maincontent .col {
		background: #ccc;
		background: rgba(204, 204, 204, 0.85);

	}



	</style>

	</head><?php }} ?>