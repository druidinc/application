<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>{$title}</title>

		<link rel="stylesheet" type="text/css" href="{$css}/default.css">
		<link rel="stylesheet" type="text/css" href="{$css}/admin.css">
		<link rel="stylesheet" type="text/css" href="{$css}/services.css">


		<script type="text/javascript" src="{$javascript}/jquery.min.js"></script>
		<script type="text/javascript" src="{$javascript}/tiny_mce/tiny_mce.js"></script>
		<script type="text/javascript" src="{$javascript}/sage.js"></script>
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
				                <li ><a href="{$base_url}Auth/Admin">Home</a></li>                
				                <li><a href="{$base_url}Auth/Services">Services</a></li>
				                <li class="sage">
				                	<a href="#" class="sage">Peachtree</a>
				                	<div class="sub-menu sage">
					                	<ul class="sage">
					                		<li class="sage"><a href="{$base_url}Auth/Sage/products" class="sage">Products</a></li>
					                		<li class="sage"><a href="{$base_url}Auth/Sage/implementations" class="sage">Implementations/Clients</a></li>
					                	</ul>
					                </div>
				                </li>
				                <li class="menu_selected"><a href="{$base_url}Auth/Visa_Working_Permit">Visa &amp; Working Permit</a></li>
				                <!--<li><a href="{$base_url}Auth/Admin/representatives">Representatives</a></li>-->
				                <li><a href="{$base_url}Auth/Pages">Pages</a></li>
				                <li><a href="{$base_url}Auth/Clients">Clients</a></li>
				            </ul>
				        </div><!--closing for menuSide-->
				    </div>
				    <div class="greetings">
				    	Welcome Name | <a href="{$base_url}Auth/Logout?token={$token}">Logout</a>
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
									{foreach from=$visa_working_permit item=visa}
										<li class="category">
											<div class="services category {if isset($id) && $id == $visa.id}category_selected{/if}" id="" onclick="window.location='{$base_url}Auth/Visa_Working_Permit/editVisaWorkingPermit?id={$visa.id}'">{$visa.display_text}</div>
										</li>
									{/foreach}							
								</ul>
							</div>
						</div>						
					</div>

					<div class="users-panel general-data">
						<form method="POST" action="{$base_url}Auth/Visa_Working_Permit/{if isset($id)}editVisaWorkingPermit?id={$id}{/if}" enctype='multipart/form-data'>
							<div class="inner-panel">
								<div class="add buttons">
									<input type="submit" value="Save" name="save"> | 									
									<input type="reset" value="Reset" name="reset">
								</div>
								<div class="panel-title">
									<span><h5>General Data - {if $action == 'add'}Add Product{else}Edit Product{/if}</h5></span>
								</div>
								<div class="panel-data">
									{$load_errors}
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
														<input type="text" name="name" value="{$name}" readonly/>														
														<input type="hidden" name="token" value="{$token}" />
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
														<input type="text" name="display_text" value="{$display_text}"/>
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
														<textarea type="text" name="content" >{$content}</textarea>
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
</html>