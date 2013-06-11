<div class="chat_panel">
    <div class="chat_inner_panel">
        <div class="chat_online_panel">
            <div class="chat_header">Support Representatives</div>
            <div class="chat_online_list">
                <ul id="chat_online_list_ul">
                {if isset($online_reps)}
                    {foreach from=$online_reps item=reps}
                        {if $reps['status'] == 'Online'}
                            <li>{$reps['name']}</li>
                        {/if}
                    {/foreach}
                {/if}
                </ul> 
            </div>
        </div>
        <div class="chat_button_panel" onclick="displayChat('{$base_url}')">
            <span class="chat_button_drawer">Chat</span>
        </div>
        <div class="clearfix" style="clear:both"></div>  
    </div>
</div>