<?php /* Smarty version Smarty-3.1.13, created on 2013-05-26 11:50:33
         compiled from "application\view\Auth\Login.php" */ ?>
<?php /*%%SmartyHeaderCode:3191651a1dae9304a07-65404337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03e9fb383810100cacaa19b723c6dcfedcdff0ad' => 
    array (
      0 => 'application\\view\\Auth\\Login.php',
      1 => 1367580564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3191651a1dae9304a07-65404337',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'css' => 0,
    'javascript' => 0,
    'login_title' => 0,
    'load_errors' => 0,
    'username' => 0,
    'token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a1dae93a98f2_34373587',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a1dae93a98f2_34373587')) {function content_51a1dae93a98f2_34373587($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/login.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/default.css">

		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['javascript']->value;?>
/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['javascript']->value;?>
/login.js"></script>
	</head>

	<body>
		<div class="login-box">
			<div class="login-box-head">
				<?php echo $_smarty_tpl->tpl_vars['login_title']->value;?>

			</div>
			<div class="login-box-body">

				<?php echo $_smarty_tpl->tpl_vars['load_errors']->value;?>

				<form method="POST">
					<label>
						<div class="form-label">
							<span >Username</span>
						</div>
					</label>
					<input class="input" type="text"  name="username" value = "<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
">

					<br>

					<label>
						<div class="form-label">
							<span >Password</span>
						</div>
					</label>
					<input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
">
					<input class="input" type="password" name="password">

					<br>

					<div class="button-container">						
						<input type="submit" value="Submit" name="submit" class="button"/>
						<input type="reset" value="Reset" name="reset" class="button"/>
					</div>
				</form>
			</div>
			<div class="login-box-foot">
			</div>
		</div>
	</body>
</html><?php }} ?>