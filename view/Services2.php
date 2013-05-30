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

						{section name=serviceIndex loop=$all_services}
							<div class="section group service-panel">
								<div class="col span_10_of_12 content">
									<div class="col span_1_of_5 left" style="height:100%">
										<img src="{$image}/{$all_services[serviceIndex].image}" title="{$all_services[serviceIndex].name}" alt="{$all_services[serviceIndex].name}" height="100%"  width="100%">
									</div>
									<div class="col span_4_of_5 left float_right service-content">
										<div class="col span_2_of_2">
											<h4>{$all_services[serviceIndex].name}</h4>
										</div>
										<div class="col span_2_of_2">
											{$all_services[serviceIndex].description}
										</div>									
									</div>
								</div>
								<div class="col span_2_of_12 float_right right read-more">Read More</div>
							</div>
			                <!-- <div class="page02ColumnTwo_01" style="text-overflow:ellipsis;" id="{$all_services[serviceIndex].category_id}_{$all_services[serviceIndex].id}">
			                    <div class="page02ColumnTwo_01Title" ><h4>{$all_services[serviceIndex].name}</h4></div>
			                    <p>{$all_services[serviceIndex].description}</p>			                    
			                    <span style="position:absolute" class="readmore" id="readmore_{$all_services[serviceIndex].category_id}_{$all_services[serviceIndex].id}" onclick="window.location='{$base_url}Home/service?cat_id={$all_services[serviceIndex].category_id}&subcat_id={$all_services[serviceIndex].id}'" >Read more...</span>
			                </div>
			                <div class="page02ColumnTwo_02" id="img_{$all_services[serviceIndex].category_id}_{$all_services[serviceIndex].id}">
			                    <img src="{$image}/{$all_services[serviceIndex].image}" title="{$all_services[serviceIndex].name}" alt="{$all_services[serviceIndex].name}"/>
			                </div> -->
			            {sectionelse}
			                No Services found
			            {/section}   

						<!-- To repeat -->
						<!-- <div class="section group"  style="height:100px; border-bottom:1px solid #CCC; padding-bottom:10px;">
							<div class="col span_1_of_5 left" style="height:100%">
								<img src="{$image}/jca_final_logo.png" height="100%"  width="100%">
							</div>
							<div class="col span_4_of_5 left float_right" style="height:100%">data</div>
						</div>
						<div class="section group"  style="height:100px; border-bottom:1px solid #CCC; padding-top:10px; padding-bottom:10px;">
							<div class="col span_1_of_5 left" style="height:100%">
								<img src="{$image}/jca_final_logo.png" height="100%"  width="100%">
							</div>
							<div class="col span_4_of_5 left float_right" style="height:100%">data</div>
						</div>
						<div class="section group"  style="height:100px; padding-top:10px;">
							<div class="col span_1_of_5 left" style="height:100%">
								<img src="{$image}/jca_final_logo.png" height="100%"  width="100%">
							</div>
							<div class="col span_4_of_5 left float_right" style="height:100%">data</div>
						</div> -->
						<!-- To repeat -->
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