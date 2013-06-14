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
			
			<div id="maincontentcontainer">

				<!-- First Row: Mission - Vision and Contacts -->
				<div class="section group panel">
					<div class="col span_3_of_5">
						<div class="section group">
							<div class="col span_2_of_2 left">
								<h4 >Our Mission</h4>
								{$mission}
							</div>
						</div>

						<div class="section group">
							<div class="col span_2_of_2 left">
								<h4 >Our Vision</h4>
								{$vision}
							</div>
						</div>

						<div class="section group">
							<div class="col span_2_of_2 left">
								<h4 >Our Principle</h4>
								Our simple philosophy that combining commitment and passion to our services are the vital foundation to give high quality standard results.  We strive to implement solutions that will enable our clients to succeed and maintain their competitive edge in their core line of business.
							</div>
						</div>
					</div>

					<div class="col span_2_of_5 float_right">
						<div class="section group">
							<div class="col span_2_of_2 left">
								<h4 class="title">{$contact_company_name}</h4>
								{$contact_address}
								<div class="section group panel">
									<div class ="col span_1_of_4">Mail:</div>
									<div class ="col span_3_of_4"><a href="mailto:{$contact_email}" class = "email" target="_new">{$contact_email}</a></div>									
								</div>
								<div class="section group panel">
									<div class ="col span_1_of_4">Contacts:</div>
									<div class ="col span_3_of_4">
										{for $contact = 0 to count($contact_contacts) - 1}
				                            <div class ="col span_1_of_2 contact">{$contact_contacts[$contact]} </div>		                            			                          
				                        {/for}
			                        </div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				<!--End First Row: Mission - Vision and Contacts -->
				
				<!-- Second Row: Services -->
				<div class = "section group panel">
					<div class = "col span_2_of_2">
						<h3 class = "title">Services</h3>
					</div>

					<div class="section group panel services_frame" onmouseover="display('.services_frame .navigation')" onmouseout="hide('.services_frame .navigation')">
						<div class="services_container" >

							{section name=serviceIndex loop=$services}
								<a href="{$base_url}Services/service?cid={$services[serviceIndex].category_id}&scid={$services[serviceIndex].id}">
									<div class="col image_container">
										<img src="{$image}/{$services[serviceIndex].image}" title="{$services[serviceIndex].name}" alt="{$services[serviceIndex].name}" style = "width:100%; height: 148px;">
										<div class="col span_1_of_2 service_caption" >{$services[serviceIndex].name}</div>
									</div>
								</a>
			                {sectionelse}
			                    No Services found
			                {/section} 
						</div>
						<div class="navigation col span_2_of_2">
							<div class = "section group">
								<div class="col span_1_of_2 left float_left nav_button previous" onclick="prev($('.services_container').width())">&lt;</div>
								<div class="col span_1_of_2 right float_right nav_button next" onclick="next($('.services_container').width())">&gt;</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div id="footercontainer">
				{include file="_shared/_footer.php"}	
				{include file="_widget/_chat.php"}
			</div>
		</div>
	</body>
	{include file="_shared/_foot.php"}
</html>