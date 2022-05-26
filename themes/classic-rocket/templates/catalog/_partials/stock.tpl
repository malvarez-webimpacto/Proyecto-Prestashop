{block name='stock'} {if ($product.quantity > 0)}
<div class="div_stock">
    Disponibilidad:
    <p class="p_stock">¡En stock!</p>
</div>
{/if} {if ($product.quantity
< 0)} <div class="div_stock">
    Disponibilidad:
    <p class="p_stockout">NO HAY STOCK DISPONIBLE</p>
    </div>
    {/if} {/block}