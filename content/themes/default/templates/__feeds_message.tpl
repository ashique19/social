<li>
    <div class="conversation clearfix {if $message['user_id'] == $user->_data['user_id']}right{/if}" id="{$message['message_id']}">
        {if $message['user_id'] != $user->_data['user_id']}
            <div class="conversation-user">
                <a href="{$system['system_url']}/{$message['user_name']}">
                    <img src="{$message['user_picture']}" title="{$message['user_firstname']} {$message['user_lastname']}" alt="{$message['user_firstname']} {$message['user_lastname']}">
                </a>
            </div>
        {/if}
        <div class="conversation-body">
            <div class="text {if $message['user_id'] == $user->_data['user_id']}js_chat-color-me{/if}">
                {$message['message']}
                {if $message['image'] != ""}
                    <span class="text-link js_lightbox-nodata {if $message['message'] != ''}mt5{/if}" data-image="{$system['system_uploads']}/{$message['image']}">
                        <img alt="" class="img-fluid" src="{$system['system_uploads']}/{$message['image']}">
                    </span>
                {/if}
            </div>
            <div class="time js_moment" data-time="{$message['time']}">
                {$message['time']}
            </div>
        </div>
    </div>
</li>