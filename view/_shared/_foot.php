<script type="text/javascript" src="{$javascript}/jquery.min.js"></script>
<script src="{$javascript}/default/modernizr-2.5.3-min.js"></script>
<script src="{$javascript}/default/respond.min.js"></script>
<script type="text/javascript" src="{$javascript}/slide.js"></script>

{if $page == 'home'}
	<script type="text/javascript" src="{$javascript}/home.js"></script>
{elseif $page == 'services'}
	<script type="text/javascript" src="{$javascript}/services2.js"></script>
{elseif $page == 'products'}
	<script type="text/javascript" src="{$javascript}/sage_inquiry.js"></script>
{/if}

<script type="text/javascript">
    $(document).ready(function(){
        slider('{$base_url}','{$image}');
    });
</script>