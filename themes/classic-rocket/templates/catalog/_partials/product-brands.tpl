<div class="product-brands">
    <ul>
        <li>
            Marca: {if isset($product.id_manufacturer)}<span class="product_manufacturer_name">{Manufacturer::getnamebyid($product.id_manufacturer)}{/if}</span
      >
    </li>
  </ul>
</div>

<!-- {block name='brand'}
<p class="brand_name">
    Marca: {if isset($product.id_manufacturer)}
    <span class="product_manufacturer_name">{Manufacturer::getnamebyid($product.id_manufacturer)}</span
  >
  {/if}
</p>
{/block} -->