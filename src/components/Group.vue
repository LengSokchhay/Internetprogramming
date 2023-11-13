<template>
    
    <div class="flex flex-col w-[298px] h-[402px] bg-#FFFFFF border-[1px] rounded-lg ml-2">
        <div class="flex relative top-[20px] w-[58px] h-[32px] bg-green-400 text-white justify-center items-center rounded-r-full" :style="'background-color: ' + color">{{ discount }}</div>
        <img class="relative top-[62px] left-[37px] w-[201px] h-[144px]" :src="image" :alt="image">
        <div class="mt-20 ml-[15px]">
            <p class="text-[12px]">{{ name }}</p>
            <p class="font font-bold text-[14px] w-[261px] h-[49px]">{{ description }}</p>
            <div class="flex flex-row mt-1 w-[11px] h-[11px]">
                <fa icon="star" style="color: #e2c718;" ></fa>
                <fa icon="star" style="color: #e2c718;" ></fa>
                <fa icon="star" style="color: #e2c718;" ></fa>
                <fa icon="star" style="color: #e2c718;" ></fa>
                <fa icon="star" style="color: #dbdbdb;" />
                <p class="relative bottom-1 opacity-50 ml-1">(4.0)</p>
            </div>
            <p class="mt-[5px] text-[12px]">{{ kg }}</p>
        </div>
        <div class="flex flex-row ml-[15px] mt-1">
            <p class="text-green-400 text-2xl">{{ discountprice}}</p>
            <p class="mt-2 ml-2 line-through">{{ cost }}</p>
            <Button1 :class="bg1"></Button1>
        </div> 
    </div>
</template>

<script >
import Button1 from "./Button1.vue";
    export default{
        name: "Group",
        props:{
            image: String,
            name: String,
            description: String,
            kg: String,
            discountprice: String,
            cost: String,
            discount: String,
            color: String,
            bg1: String,
        },
        components:{Button1,}
    }
</script>
