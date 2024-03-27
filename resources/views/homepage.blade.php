<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="product">
        <x-category :products="$products"/>
        
    </div>
    <x-panel :products="$products"/>

    <div class=product1>
    <x-product :products="$products"/>
    </div>
    
    
</body>
</html>
