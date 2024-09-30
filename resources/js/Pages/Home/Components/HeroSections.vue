<template>
    <div class="relative flex flex-col items-center justify-center w-screen h-screen xl:flex-row md:p-20">
        <div class="z-10 w-full p-8 text-white xl:p-14 xl:mt-0 xl:w-1/2">
            <div class="lg:mt-[100px]">
                <h1 class="text-[28px] xl:text-[48px] leading-[1.2]">LET US HELP YOU <br><span class="text-[48px] xl:text-[88px] font-bold">MIGRATE</span></h1>
                <span class="text-[18px] xl:text-[28px]">IMMIGRATION COUNSELORS IN DUBAI</span>
            </div>
          
            <button class="px-4 py-3 mt-4 font-bold text-black capitalize bg-white rounded-lg">Book a free Consultation</button>
        </div>
           
        <div class="z-10 w-full p-4 text-white xl:p-4 xl:w-1/2">
            <img src="images/dubai.jpg" class="w-auto h-auto mt-4  lg:w-[600px] xl:w-auto [border-radius:10px_10px_10px_50px] object-fill xl:mt-0"/>
        </div>
        
        <Dots color="bg-[#383c45]" :rows="28" class="absolute bottom-5 right-5 xl:top-20 xl:right-20 xl:h-48"></Dots>
        
        <div class="absolute top-[-250px] xl:top-[-30px] left-0 z-0 w-full xl:w-4/6 h-full mb-5 bg-[#373b44] rounded-e-3xl">
        </div>
    </div>  
</template>

<script setup>
import Dots from '@/Components/Design/Dots.vue';

</script>