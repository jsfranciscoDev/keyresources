<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Navbar from '@/Layouts/Navbar.vue';
import Footer from '@/Layouts/Footer.vue';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
   <Head title="Key Resources International Services" />
   
 
   <div class="relative w-full">
    <Navbar class="fixed"/>
    <div class="w-full h-full">
        <div class="w-full h-[500px] bg-gray-100 flex items-center justify-center">
            <h2 class="font-bold text-xl lg:text-[48px]">Tracking</h2>
        </div>
    </div>

    <div class="mt-10 maintenance-banner">
        <h1 class="text-2xl font-bold text-center text-dark sm:text-3xl">
            🚧 We're currently under maintenance. Some features may not be available. 🚧
        </h1>
    </div>    

    <div class="tracking-container">
        <div class="flex flex-row w-full gap-5">
            <div class="w-1/2">
               <div class="mt-6 grow sm:mt-8 lg:mt-0">
                  <div class="p-6 space-y-6 bg-white border border-gray-200 rounded-lg shadow-s">
                     <h3 class="text-xl font-semibold text-gray-900">Application History</h3>
      
                     <ol class="relative border-gray-200 ms-3 border-s dark:border-gray-700">
                        <li class="mb-10 ms-6">
                           <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -start-3 ring-8 ring-white dark:bg-gray-700 dark:ring-gray-800">
                              <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5"/>
                              </svg>
                           </span>
                           <h4 class="mb-0.5 text-base font-semibold text-gray-900">24 Nov 2023</h4>
                           <p class="text-sm font-normal text-gray-500">Visa application approved</p>
                        </li>

                        <li class="mb-10 ms-6">
                           <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -start-3 ring-8 ring-white dark:bg-gray-700 dark:ring-gray-800">
                              <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h6l2 4m-8-4v8m0-8V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v9h2m8 0H9m4 0h2m4 0h2v-4m0 0h-5m3.5 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/>
                              </svg>
                           </span>
                           <h4 class="mb-0.5 text-base font-semibold text-gray-900">Today</h4>
                           <p class="text-sm font-normal text-gray-500">Biometrics appointment completed</p>
                        </li>

                        <li class="mb-10 ms-6">
                           <span class="absolute flex items-center justify-center w-6 h-6 rounded-full -start-3 bg-primary-100 ring-8 ring-white dark:bg-primary-900 dark:ring-gray-800">
                              <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                              </svg>
                           </span>
                           <h4 class="mb-0.5 font-semibold">23 Nov 2023, 15:15</h4>
                           <p class="text-sm">Documents verified at the embassy</p>
                        </li>

                        <li class="mb-10 ms-6">
                           <span class="absolute flex items-center justify-center w-6 h-6 rounded-full -start-3 bg-primary-100 ring-8 ring-white dark:bg-primary-900 dark:ring-gray-800">
                              <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                              </svg>
                           </span>
                           <h4 class="mb-0.5 text-base font-semibold">22 Nov 2023, 12:27</h4>
                           <p class="text-sm">Application submitted to the embassy</p>
                        </li>

                        <li class="mb-10 ms-6">
                           <span class="absolute flex items-center justify-center w-6 h-6 rounded-full -start-3 bg-primary-100 ring-8 ring-white dark:bg-primary-900 dark:ring-gray-800">
                              <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                              </svg>
                           </span>
                           <h4 class="mb-0.5 font-semibold">19 Nov 2023, 10:47</h4>
                           <p class="text-sm">Payment received - VISA Credit Card</p>
                        </li>

                        <li class="ms-6">
                           <span class="absolute flex items-center justify-center w-6 h-6 rounded-full -start-3 bg-primary-100 ring-8 ring-white dark:bg-primary-900 dark:ring-gray-800">
                              <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                              </svg>
                           </span>
                           <div>
                              <h4 class="mb-0.5 font-semibold">19 Nov 2023, 10:45</h4>
                              <a href="#" class="text-sm font-medium hover:underline">Application submitted online - Ref #647563</a>
                           </div>
                        </li>
                     </ol>
                  </div>
               </div>
            </div>
            <div class="flex flex-col w-1/2 gap-5">
                <input type="text" class="rounded-xl" placeholder="Track your application">
                <button type="button" disabled class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Search</button>
            </div>
        </div>
    </div>
    <Footer/>
   </div>

</template>

<style>
.tracking-container{
    max-width: 1200px;
    margin: 0 auto;
    padding: 100px 50px;
}

.tracking-container h3{
   font-size: 28px;
   margin: 15px 0px 0px 0px;
}

.tracking-container p{
   font-size: 18px;
   margin-bottom: 10px;
}
</style>
