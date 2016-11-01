<div id="contact-link" {if isset($is_logged) && $is_logged} class="is_logged"{/if}></div>
{if $telnumber}
    <div class="col-md-12 shop_phone">{$telnumber}</div>
{/if}