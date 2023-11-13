<template>
  <div class="flex flex-col">
    <Featurecategory></Featurecategory>
    <div class="flex flex-row mt-10 w-[1586px] h-[185px] m-auto justify-center items-center">  
      <Category :class="fruit.Bg" v-for="(fruit, index) in fruits" :key="index" :image="fruit.ImageUrl"  :description="fruit.Description" :name="fruit.name"></Category>
    </div>
    <div class="flex justify-center">
      <Promotion :class="promotion.Bg" v-for="(promotion, index) in promotions" :bg1="promotion.Bg1" :key="index" :image="promotion.ImageUrl" :description="promotion.Description" :name="promotion.name"></Promotion>
    </div>
    <div class="flex mt-20 justify-between items-center">
      <Popular class="ml-[160px] text-3xl" v-for="(popular, index) in Populars" :key="index" :name="popular.name" ></Popular>
      <div class="flex flex-row mr-[140px]">
        <Popular class="mr-5 text-xl" v-for="(menu, index) in Menus" :key="index" :name="menu.name" :bold="menu.bold"></Popular>
      </div> 
    </div>
    <div class="flex ml-[160px] mt-10 ">
      <Group v-for="(group, index) in Groups" :key="index" :image="group.ImageUrl" :name="group.name" :description="group.description" :kg="group.kg" :discountprice="group.discountprice" :cost="group.cost" :discount="group.discount" :color="group.color" :bg1="group.bg1"></Group>
    </div>
    <div class="flex ml-[160px] mt-10 ">
      <Group v-for="(group, index) in Groups1" :key="index" :image="group.ImageUrl" :name="group.name" :description="group.description" :kg="group.kg" :discountprice="group.discountprice" :cost="group.cost" :discount="group.discount" :color="group.color" :bg1="group.bg1"></Group>
    </div>
  </div>
  
</template>

<script setup>
  import Group from "./components/Group.vue"
  import Popular from "./components/Popular.vue";
  import Category from "./components/Category.vue";
  import Promotion from "./components/Promotion.vue";
  import Featurecategory from "./components/FeatureCategory.vue";
  import img1 from "./assets/images/1.png";
  import img2 from "./assets/images/2.png";
  import img3 from "./assets/images/3.png";
  import img4 from "./assets/images/4.png";
  import img5 from "./assets/images/5.png";
  import img6 from "./assets/images/6.png";
  import img7 from "./assets/images/7.png";
  import img8 from "./assets/images/8.png";
  import img9 from "./assets/images/9.png";
  import img10 from "./assets/images/10.png";
  import img11 from "./assets/images/11.png";
  import img12 from "./assets/images/12.png";
  import img13 from "./assets/images/13.png";
  import img14 from "./assets/images/14.png";
  const Groups = [
    {
      ImageUrl: img14,
      name: "Hodo Foods",
      description: "Seeds of Chnange Organic Quinoa, Brown, & Red Rice",
      kg: "500 gram",
      discountprice: "2.51$",
      discount: "17%",
      cost: "2.8$",
      bg1: "bg-green-400",
    },
    {
      ImageUrl: img14,
      name: "Hodo Foods",
      description: "Seeds of Chnange Organic Quinoa, Brown, & Red Rice",
      kg: "500 gram",
      discountprice: "2.51$",
      discount: "Hot",
      cost: "2.8$",
      color: "red",
    },
    {
      ImageUrl: img14,
      name: "Hodo Foods",
      description: "Seeds of Chnange Organic Quinoa, Brown, & Red Rice",
      kg: "500 gram",
      discountprice: "2.51$",
      discount: "Sale",
      cost: "2.8$",
      color: "Orange",
    },
    {
      ImageUrl: img14,
      name: "Hodo Foods",
      description: "Seeds of Chnange Organic Quinoa, Brown, & Red Rice",
      kg: "500 gram",
      discountprice: "2.51$",
      discount: "17%",
      cost: "2.8$",
    },
    {
      ImageUrl: img14,
      name: "Hodo Foods",
      description: "Seeds of Chnange Organic Quinoa, Brown, & Red Rice",
      kg: "500 gram",
      discountprice: "2.51$",
      discount: "17%",
      cost: "2.8$",
    },
    
  ]
  const Groups1 = [
    {
      ImageUrl: img12,
      name: "Hodo Foods",
      description: "Seeds of Chnange Organic Quinoa, Brown, & Red Rice",
      kg: "500 gram",
      discountprice: "2.51$",
      discount: "17%",
      cost: "2.8$",
      bg1: "bg-green-500",
    },
    {
      ImageUrl: img14,
      name: "Hodo Foods",
      description: "Seeds of Chnange Organic Quinoa, Brown, & Red Rice",
      kg: "500 gram",
      discountprice: "2.51$",
      discount: "Hot",
      cost: "2.8$",
      color: "red",
    },
    {
      ImageUrl: img14,
      name: "Hodo Foods",
      description: "Seeds of Chnange Organic Quinoa, Brown, & Red Rice",
      kg: "500 gram",
      discountprice: "2.51$",
      discount: "Sale",
      cost: "2.8$",
      color: "Orange",
    },
    {
      ImageUrl: img14,
      name: "Hodo Foods",
      description: "Seeds of Chnange Organic Quinoa, Brown, & Red Rice",
      kg: "500 gram",
      discountprice: "2.51$",
      discount: "17%",
      cost: "2.8$",
    },
    {
      ImageUrl: img14,
      name: "Hodo Foods",
      description: "Seeds of Chnange Organic Quinoa, Brown, & Red Rice",
      kg: "500 gram",
      discountprice: "2.51$",
      discount: "17%",
      cost: "2.8$",
    },
    
  ]

  const Menus = [
    {
    name: "All",
    bold: "bold"
    },
    {
    name: "Milk & Daries",
    },
    {
    name: "Coffees & Teas",
    },
    {
    name: "Pet Foods",
    },
    {
    name: "Meats",
    },
    {
    name: "Vegetable",
    },
    {
    name: "Fruits",
    }
  ]

  const Populars = [
    {
      name: "Popular Products",
    },
    
    
  ]

  const promotions = [
    {

      name:"",
      ImageUrl: img11,
      Description:"Everyday Fresh & Clean with Our Product",
      Bg: "bg-[#F0E8D5]",
      Bg1: "bg-green-300"
    },
    {

      name:"",
      ImageUrl: img12,
      Description:"Make your Breakfast Healthy and Easy",
      Bg: "bg-[#F3E8E8]",
      Bg1: "bg-green-300"
    },
    {
    name:"",
    ImageUrl: img13,
    Description:"The Best Organic Products Online",
    Bg: "bg-[#E7EAF3]",
    Bg1: "bg-yellow-300"
    },
  ]

  const fruits= [
    {
      name:"Cat & Milk",
      ImageUrl: img1,
      Description: "14 Items",
      Bg: "bg-[#F2FCE4]"
    },
    {
      name:"Peach",
      ImageUrl: img2,
      Description: "17 Items",
      Bg: "bg-[#FFFCEB]"
    },
    {
      name:"Oganic Kiwi",
      ImageUrl: img3,
      Description: "21 Items",
      Bg: "bg-[#ECFFEC]"
    },
    {
      name:"Red Apple",
      ImageUrl: img4,
      Description: "68 Items",
      Bg: "bg-[#FEEFEA]"
    },
    {
      name:"Snack",
      ImageUrl: img5,
      Description: "34 Items",
      Bg: "bg-[#FFF3EB]"
    },
    {
      name:"Black plum",
      ImageUrl: img6,
      Description: "25 Items",
      Bg: "bg-[#FFF3EB]"
    },
    {
      name:"Vegetable",
      ImageUrl: img7,
      Description: "65 Items",
      Bg: "bg-[#F2FCE4]"
    },
    {
      name:"Headphone",
      ImageUrl: img8,
      Description: "33 Items",
      Bg: "bg-[#FFFCEB]"
    },
    {
      name:"Cake & Milk",
      ImageUrl: img9,
      Description: "54 Items",
      Bg: "bg-[#F2FCE4]"
    },
    {
      name:"Orange",
      ImageUrl: img10,
      Description: "63 Items",
      Bg: "bg-[#FFF3FF]"
    },

  ]
</script>