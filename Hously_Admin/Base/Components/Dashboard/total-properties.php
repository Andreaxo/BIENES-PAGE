<?php
$properties = [
    [
        'icon' => 'mdi mdi-currency-usd text-[28px]', 
        'title' => 'Total Revenue', 
        'price' => "42205", 
        'target' => "45890", 
        'symbol' => "$", 
    ],
    [
        'icon' => 'mdi mdi-account-group-outline text-[28px]', 
        'title' => 'Total Visitor', 
        'price' => "1857", 
        'target' => "2456", 
        'symbol' => "", 
    ],
    [
        'icon' => 'mdi mdi-home-city-outline text-[28px]', 
        'title' => 'Total Properties', 
        'price' => "54", 
        'target' => "358", 
        'symbol' => "", 
    ],
    [
        'icon' => 'mdi mdi-home-lightning-bolt-outline text-[28px]', 
        'title' => 'Properties for Sell', 
        'price' => "60", 
        'target' => "243", 
        'symbol' => "", 
    ],
    [
        'icon' => 'mdi mdi-home-clock-outline text-[28px]', 
        'title' => 'Properties for Rent', 
        'price' => "45", 
        'target' => "115", 
        'symbol' => "", 
    ]
];
?>

<?php foreach ($properties as $item): ?>
<div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
    <div class="p-5 flex items-center justify-between">
        <span class="me-3">
            <span class="text-slate-400 block"><?php echo $item['title']; ?></span>
            <span class="flex items-center justify-between mt-1">
                <span class="text-2xl font-medium"><?php echo $item['symbol']; ?> <span class="counter-value" data-target="<?php echo $item['target']; ?>"><?php echo $item['price']; ?></span></span>
            </span>
        </span>
        
        <span class="flex justify-center items-center rounded-md size-12 min-w-[48px] bg-slate-50 dark:bg-slate-800 shadow shadow-gray-100 dark:shadow-gray-700 text-green-600">
            <i class="<?php echo $item['icon']; ?>"></i>
        </span>
    </div>
</div><!--end-->
<?php endforeach; ?>
