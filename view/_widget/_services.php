<div class="section group">
	<div class="col span_2_of_2 left services">
		{foreach from=$services item=categories}
			<div class="col span_2_of_2 service">
				<div class="category">{$categories.cat_name}</div>
			</div>

			{foreach from=$categories.subcat item=subcategories}
				<div class="col span_2_of_2 service {if $categories.cat_id == $cat_id && $subcategories.subcat_id == $subcat_id}selected_service{elseif $service[0].subcat_name == 'Peachtree (Sage 50)' && $subcategories.subcat_name == $service[0].subcat_name}selected_service{/if}">
					<a href="{$base_url}Services/service?cid={$categories.cat_id}&scid={$subcategories.subcat_id}" alt="{$subcategories.subcat_name}" title="{$subcategories.subcat_name}">
						<div class="subcategory">{$subcategories.subcat_name}</div>
					</a>
				</div>
			{/foreach}
		{/foreach}		
	</div>
</div>