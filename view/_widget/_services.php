<div class="section group">
	<div class="col span_2_of_2 left services">
		{foreach from=$services item=categories}
			<div class="col span_2_of_2 service">
				<div class="category">{$categories.cat_name}</div>
			</div>

			{foreach from=$categories.subcat item=subcategories}
				<div class="col span_2_of_2 service">
					<a href="#" alt="{$subcategories.subcat_name}" title="{$subcategories.subcat_name}">
						<div class="subcategory">{$subcategories.subcat_name}</div>
					</a>
				</div>
			{/foreach}
		{/foreach}		
	</div>
</div>