import bigpic1 from '../assets/Cms-04 1.png'
import bigpic2 from '../assets/Cat-01 1.png'
import bigpic3 from '../assets/Cms-03 1.png'
  
import img1 from '../assets/cat-13 1.png'
import img2 from '../assets/cat-11 1.png'
import img3 from '../assets/cat-12 1.png'
import img4 from '../assets/cat-9 1.png'
import img5 from '../assets/cat-3 1.png'
import img6 from '../assets/cat-4 1.png'
import img7 from '../assets/cat-1 4.png'
import img8 from '../assets/cat-15 1.png'
import img9 from '../assets/cat-14 1.png'
import img10 from '../assets/cat-7 1.png'

import Pimg1 from '../assets/18 1.png'

import { defineStore  } from 'pinia'

export const useEStore = defineStore('todoList', {
    state: () => ({
      prom: [
        {
          name: "1",
          image: bigpic1,
          title: "Everyday Fresh & Clean with our Product",
          bg: "bg-green-300",
          color:"bg-[#F0E8D5]",
    
        },
        {
          name: "2",
          image: bigpic2,
          title: "Make your Brackfast Easy and Healthy",
          bg: "bg-green-300",
          color: "bg-[#F3E8E8]",
    
        },
        {
          name: "3",
          image: bigpic3,
          title: "The best Organic Product Online",
          bg: "bg-yellow-300",
          color: "bg-[#E7EAF3]",
    
        },
      ],
      categories: [
        {
          id: "1",
          name: 'Cake & Milk',
          imageUrl: img1,
          description: '14 items',
          bg: "bg-[#F2FCE4] border-2 hover:border-[#81B13D]",
        },
        {
          id: "2",
          name: 'Peach',
          imageUrl: img2,
          description: '17 items',
          bg: "bg-[#FFFCEB]",
        },
        {
          id: "3",
          name: 'Oganic Kiwi',
          imageUrl: img3,
          description: '21 items',
          bg: "bg-[#ECFFEC]",
        },
        {
          id: "4",
          name: 'Red apples',
          imageUrl: img4,
          description: '68 items',
          bg: "bg-[#FEEFEA]",
        },
        {
          id: '5',
          name: 'Snack',
          imageUrl: img5,
          description: '34 items',
          bg: "bg-[#FFF3EB]",
        },
        {
          id: '6',
          name: 'Black plum',
          imageUrl: img6,
          description: '25 items',
          bg: "bg-[#FFF3FF]",
        },
        {
          id: '7',
          name: 'Vegetable',
          imageUrl: img7,
          description: '65 items',
          bg: "bg-[#F2FCE4]",
        }, 
        {
          id: '8',
          name: 'Headphone',
          imageUrl: img8,
          description: '33 items',
          bg: "bg-[#FFFCEB]",
        },
        {
          id: '9',
          name: 'Cake & Milk',
          imageUrl: img9,
          description: '54 items',
          bg: "bg-[#F2FCE4]"
        },
        {
          id: '10',
          name: 'Orange',
          imageUrl: img10,
          description: '10 items',
          bg: "bg-[#FFF3FF]"
        },
      ],
      products: [
        {        
          id: 1,        
          tag: "-17%",       
          image: Pimg1,        
          category: 3,        
          name: "Seeds of Change Organic Quinoa, Brown, & Red Rice",        
          rate: 4,        
          description: "500 gram",       
          sellPrice: "3",        
          discountPercentage: 17,       
          discountPrice: "2.57",
          buy: "1",
        }
      ]
     
    }),
})