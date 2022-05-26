{block name='price'} {assign var=priceValue value=","|explode:$product.price}
<div class="price_product">
    {$priceValue[0]},<span class="small">{$priceValue[1]}</span>
</div>
{/block}