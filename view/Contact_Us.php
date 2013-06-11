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
							<div class="col span_2_of_2 left">
								<h4 class="title">JCA Bookkeeping Services, Inc.</h4>
							</div>
							<div class="section group justify" id="content_description">
								<div class="col span_2_of_2">{$load_errors}</div>
								<form method="post">
									<div class="col span_2_of_3">
										<div class="section group panel">
											<div class="col span_1_of_3"><font color="red">*</font>First Name: </div>
											<div class="col span_2_of_3"><input class="span_2_of_2" type="text" name="firstname" focus="true"></div>
										</div>
										<div class="section group panel">
											<div class="col span_1_of_3"><font color="red">*</font>Last Name: </div>
											<div class="col span_2_of_3"><input class="span_2_of_2" type="text" name="lastname"></div>
										</div>
										<div class="section group panel">
											<div class="col span_1_of_3"><font color="red">*</font>Address: </div>
											<div class="col span_2_of_3"><input class="span_2_of_2" type="text" name="address"></div>
										</div>
										<div class="section group panel">
											<div class="col span_1_of_3"><font color="red">*</font>Email: </div>
											<div class="col span_2_of_3"><input class="span_2_of_2" type="text" name="email"></div>
										</div>
										<div class="section group panel">
											<div class="col span_1_of_3"><font color="red">*</font>Phone: </div>
											<div class="col span_2_of_3"><input class="span_2_of_2" type="text" name="phone"></div>
										</div>
										<div class="section group panel">
											<div class="col span_1_of_3">Company: </div>
											<div class="col span_2_of_3"><input class="span_2_of_2" type="text" name="company"></div>
										</div>
										<div class="section group panel">
											<div class="col span_1_of_3"><font color="red">*</font>Message: </div>
											<div class="col span_2_of_3"><textarea class="span_2_of_2" rows="10" name="message"></textarea></div>
											<input type="hidden" name="subject" value="JCA User Inquiry"/>  
										</div>
										<div class="section group panel">
											<div class="col span_1_of_3">&nbsp;</div>
											<div class="col span_2_of_3 right"><input class="span_1_of_3" type="submit" name="submit" value="Submit"></div>
										</div>
									</div>
								</form>

								<div class="section group panel">
									<div class="col span_2_of_2">
										<img src="{$image}/lapulapumap.PNG">
									</div>
								</div>
							</div>
						</div> 
					</div>
				</div>				
			</div>
			<!-- End main container -->
			<div id="footercontainer">
				{include file="_shared/_footer.php"}
				{include file="_widget/_chat.php"}
			</div>
		</div>
	</body>
	{include file="_shared/_foot.php"}
</html>