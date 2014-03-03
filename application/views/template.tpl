
<select id="country">
    {foreach $result as $items}
        {foreach $items as $item}
            <option value="{$item}">{$item}</option>\n"
        {/foreach}
    {/foreach}
</select>
<br/>
<select id="city" style="display: none"></select>
<br/>
<ul id="street" style="display: none"></ul>
