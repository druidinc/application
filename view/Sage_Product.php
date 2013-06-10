<!DOCTYPE html>
<!-- HTML5 Mobile Boilerplate -->
<!--[if IEMobile 7]><html class="no-js iem7"><![endif]-->
<!--[if (gt IEMobile 7)|!(IEMobile)]><!-->
<html class="no-js" lang="en"><!--<![endif]-->
	<head>
		{include file="_shared/_head.php" }
	<body>
		<div id="wrapper">
			<div id="headcontainer">
				{include file="_shared/_header.php" }				
			</div>
			
			<!-- Main Contianer -->
			<div id="maincontentcontainer">
				<div class="section group panel">
					<div class="col span_1_of_4 float_left">
						<div class="col span_2_of_2">{include file="_widget/_services.php" }</div>
						<div class="col span_2_of_2 panel">{include file="_widget/_contacts.php" }</div>
					</div>
					<div class="col span_3_of_4 float_right">
						<div class="section group justify" id = "product">
							{foreach from=$products item=product}
								<div class="col span_2_of_2"><h4 class="title">{$product['name']}</h4></div>
								<div class="col span_2_of_2 label">{$product['brief_description']}</div>
								<div class="col span_1_of_6"><img src="{$image}/{$product['image']}"></div>
								<div class="section group justify" id="content_description">
									<div class="col span_2_of_2">{$product['description']}</div>
								</div>
								<div class="col span_2_of_2"><h4>Price: USD {$product['price']}</h4></div>
								<div class=" section panel col span_1_of_6">
						 			<a href="{$base_url}Services/sageInquiry?id={$product['id']}">Inquire</a>
						 		</div>
							{/foreach}
						</div> 
					</div>
				</div>				
			</div>
			<!-- End main container -->
			<div id="footercontainer">
				{include file="_shared/_footer.php"}
			</div>
		</div>
	</body>
	{include file="_shared/_foot.php"}
</html>