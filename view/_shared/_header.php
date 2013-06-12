<header>					
	<div class = "section linebar"></div>
	<div class = "headcontent">
		<div class="section group">
			<div class="col span_1_of_2">
			<div class="logo">
	        	<img src="{$image}/jca_final_logo.png" />
	        </div>
			</div>
			<div class="col span_1_of_2 float_right">
				<div class="searchBar float_right">
		            <script>
					  	(function() {
						    var cx = '017924416408079978860:e--8vytmtqq';
						    var gcse = document.createElement('script');
						    gcse.type = 'text/javascript';
						    gcse.async = true;
						    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
						        '//www.google.com/cse/cse.js?cx=' + cx;
						    var s = document.getElementsByTagName('script')[0];
						    s.parentNode.insertBefore(gcse, s);
					  	})();
					</script>
					<gcse:search></gcse:search>
		        </div>
			</div>
		</div>
	</div>
</header>
<nav class="nav_container">
	<div class="section group headcontent">
		<div class="col span_1_of_1 {if $page == 'home'}selected_nav{/if}"><a  href="{$base_url}" >Home</a></div>
		<div class="col span_1_of_1 {if $page == 'services'}selected_nav{/if}"><a  href="{$base_url}Services" >Services</a></div>
		<div class="col span_1_of_1 {if $page == 'products'}selected_nav{/if}"><a  href="{$base_url}Products" >Products</a></div>
		<div class="col span_1_of_1 {if $page == 'about_us'}selected_nav{/if}"><a  href="{$base_url}About_Us" >About Us</a></div>
		<div class="col span_1_of_1 {if $page == 'clients'}selected_nav{/if}"><a  href="{$base_url}Clients" >Clients</a></div>
		<div class="col span_1_of_1 {if $page == 'contact_us'}selected_nav{/if}"><a  href="{$base_url}Contact_Us" >Contacts</a></div>
	</div>	
</nav>
<div class="banner_container">
	<div class="section group headcontent">
		<div class="animation">
			<div class="pic_container"></div>
        	<div class="banner_loader"><img src="{$image}/loader-green.gif"></div>
		</div>
	</div>
</div>