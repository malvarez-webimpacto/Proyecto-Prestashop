{block name='sin_iva'} {assign var=price value=$product.price} {assign var=tax value=$product['id_tax_rules_group']} {if ($tax==1)} {assign var=iva value=($price*21)/100} {assign var=precio_sin_iva value=$price-$iva}
<div class="price-without-tax">
    <p class="word">SIN IVA</p>
    {assign var=final value=number_format({$precio_sin_iva},2,",",".")}
    <p>{$final}€</p>
</div>
{/if} {/block}