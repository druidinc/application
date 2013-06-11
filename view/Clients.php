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
						<div class="section group">
							<div class="col span_2_of_2">
								<h4 class="title">List of Clients</h4>
							</div>
							<div class="section group left" id="content_description">
								<div class="col span_2_of_2"><h5>Peachtree Clients</h5></div>
								{foreach from=$implementations item=implementation}
									<div class="panel col span_1_of_2">
										<div class="col span_2_of_2" style="text-indent:20px;font-weight:bold">{$implementation.type_name}</div>

										{foreach from=$implementation.clients item=client}
											<div class="col span_2_of_2" style="text-indent:40px;text-decoration:underlined">{$client.name}</div>
											{if $client.location != ''}
												<div class="col span_2_of_2" style="text-indent:40px;">{$client.location}</div>
	                                        {/if}
										{/foreach}
									</div>
								{/foreach}	


								<div class="col span_2_of_2"><h5>Other Clients</h5></div>
								{foreach from=$clients item=client}
									<div class="panel col span_1_of_2">
										<div class="col span_2_of_2" style="text-indent:20px;font-weight:bold">{$client.company_name}</div>
										<div class="col span_2_of_2" style="text-indent:40px;">{$client.address}</div>
										{if isset($client.contact_person) || $client.contact_person == ''}
											<div class="col span_2_of_2" style="text-indent:40px;text-decoration:underline">
												{$client.contact_person} 
												{if isset($client.position) || $client.position == ''}
													- {$client.position}
												{/if}												
											</div>
										{/if}

										{if isset($client.contact_number) || $client.contact_number == ''}
											<div class="col span_2_of_2" style="text-indent:40px;">{$client.contact_number}</div>
										{/if}
										
									</div>
								{/foreach}
								<!-- {foreach from=$implementations item=implementation}
									<div class="panel col span_1_of_2">
										<div class="col span_2_of_2" style="text-indent:20px;font-weight:bold">{$implementation.type_name}</div>

										{foreach from=$implementation.clients item=client}
											<div class="col span_2_of_2" style="text-indent:40px;text-decoration:underlined">{$client.name}</div>
											{if $client.location != ''}
												<div class="col span_2_of_2" style="text-indent:40px;">{$client.location}</div>
	                                        {/if}
										{/foreach}
									</div>
								{/foreach}	 -->						
							</div>
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