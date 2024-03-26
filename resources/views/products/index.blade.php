<html>
    <head>
    <script src="https://cdn.tailwindcss.com"></script>
        <style>
            .center {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div>
            @include("products.list")
            <a href="/products/add">
                <button>+ New Task</button>
            </a>
        </div>
        <div class="h-[177px] w-[136px] rounded-md shadow-md overflow-hidden mt-10 gap-3" >
        <!-- <slot></slot> -->
        @for($i=0; $i<sizeof($products); $i++)
                @if($products[$i]["name"] != null)
                <image width="100px" src="/{{ str_replace('public', 'storage', $products[$i]["image_url"])}}" />
                {{ $products[$i]["name"] }}
                @endif
        @endfor
            <h3 class="text-center font-semibold">hhii</h3>
            <p class="text-center text-xs text-[#B6B6B6]">ghig</p>
        </div>
    </body>
</html>