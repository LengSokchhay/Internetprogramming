
@for($i=0; $i<sizeof($products); $i++)
<div class="category">
    
    
        <div class="outer-div">
            <div class="custom-div">
                @if($products[$i]["name"] != null)
                    <image width="200px" src="/{{ str_replace('public', 'storage', $products[$i]["image_url"])}}" />
                @endif
                <h3 class="custom-heading">{{ $products[$i]->name }}</h3>
                <p class="custom-paragraph">{{ $products[$i]->description }}</p>
            </div>
        </div>             
    
</div>
@endfor



<style>
.category {
    display: flex;
  flex-direction: row;
}
.outer-div {
    width: 200px;
    height: auto;
    background-color: #F2FCE4;
    border: 2px solid transparent;
    transition: border-color 0.3s;
}
.outer-div:hover {
    border-color: #81B13D;
}
.custom-div {
    display: flex;
    flex-direction: column;
    height: auto;
    width: auto;
    border-radius: 0.375rem;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
    overflow: hidden;
}
.custom-image {
    height: 120px;
    width: 100%;
}
.custom-heading {
    text-align: center;
    font-weight: 600;
}
.custom-paragraph {
    text-align: center;
    font-size: 0.75rem;
    color: #B6B6B6;
}
</style>