<div class="section group">
	<div class="col span_2_of_2 left services">
		<div class="col span_2_of_2 service">
			<div class="category contacts-header">Contact Us</div>
		</div>
		<div class="col span_2_of_2 left">
			<div class="group section panel contacts-content">
				<div class="col span_2_of_2 service contact-label">
					{$contact_company_name}
				</div>
				<div class="col span_2_of_2 contact-text">
					{$contact_address}
				</div>
			</div>
			<div class="group section panel contacts-content">
				<div class="col span_1_of_6 contact-text contact-label">
					Mail:
				</div>
				<div class="col span_6_of_6">
					<div class="col span_1_of_6 contact-text">&nbsp;</div>
					<div class="col span_5_of_6 contact-text">
						<a href="mailto:{$contact_email}" class = "email" target="_new">{$contact_email}</a>
					</div>
				</div>
				<div class="col span_1_of_6 contact-text contact-label">
					Contacts:
				</div>
				<div class="col span_6_of_6 contact-text">
					<div class="col span_1_of_6 contact-text">&nbsp;</div>
					<div class="col span_5_of_6 contact-text">
						{for $contact = 0 to count($contact_contacts) - 1}
	                        <div class ="col span_2_of_2 contact">{$contact_contacts[$contact]} </div>		                            			                          
	                    {/for}
					</div>					
				</div>
			</div>
			
			<!-- <div class="col span_2_of_2 service">
					<div class="subcategory">{$contact_company_name}</div>
			</div>
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
			</div> -->
			
		</div>		
	</div>
</div>