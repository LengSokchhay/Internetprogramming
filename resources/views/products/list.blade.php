<h4 class="center">Product App</h4>
<div>
    <h5>12 March 2024</h5>
    <hr style="margin-top: 0px; margin-bottom: 0px"/>
    <ul style="list-style: none">
        @for($i=0; $i<sizeof(products); $i++)
            <li>
                <input type="checkbox" />
                @if($products[$i]["name"] != null)
                <image width="100px" src="/{{ str_replace('public', 'storage', $products[$i]["image_url"])}}" />
                {{ $products[$i]["name"] }}
                @endif
            </li>
        @endfor
    </ul>
    
</div>