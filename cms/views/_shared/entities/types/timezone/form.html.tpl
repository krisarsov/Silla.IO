{$timezone = $attr.default|default:'Europe/London'}
<select name="{$attr.name}" class="form-control" id="{$attr.id}" data-placeholder="{$_labels.general.select|escape}...">
    <option></option>
    {foreach from=Core\Helpers\DateTime::getTimezonesList() key=zone item=locations}
        <optgroup label="{$zone|escape}">
            {foreach from=$locations item=location}
                <option value="{$zone|escape}/{$location.title|escape}"{if $timezone eq "{$zone}/{$location.title}"} selected="selected"{/if}>[GMT {$location.offset}] {$location.title|replace:['_', '/']:[' ', ' / ']}</option>
            {/foreach}
        </optgroup>
    {/foreach}
</select>
