<script setup>
import { Head, Link } from '@inertiajs/vue3';

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
    <Head title="keyresourcesintlservices" />

    <div
        class="relative flex flex-col-reverse items-center justify-center w-screen h-screen overflow-hidden md:p-20 lg:flex-row"
    >

    <div class="z-10 flex items-center justify-center w-full h-full p-8 lg:w-1/2">
        <img src="images/undermaintenance.svg" class="w-auto h-auto"/>
    </div>
    

    <div class="z-10 flex flex-col items-start justify-center w-full h-full p-2 text-center rounded-lg lg:w-1/2 md:text-left">
        <h2 class="mb-4 text-[28px] font-bold text-gray-800 lg:text-[48px]">
            Our website is under construction
        </h2>
        <p class="mb-4 text-lg text-gray-600">
            and will be available soon. We're working hard to bring you a better experience.
        </p>
        <p class="text-lg text-gray-600">
            In the meantime, if you have any questions or need assistance, please contact us at: 
            <a href="mailto:info@keyresourcesintlservices.com" class="font-semibold text-blue-600 underline">
                info@keyresourcesintlservices.com
            </a>
        </p>
    </div>

    <svg id="wave" class="absolute bottom-0" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 260" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(55, 60, 72, 1)" offset="0%"></stop><stop stop-color="rgba(55, 60, 72, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,0L40,13C80,26,160,52,240,78C320,104,400,130,480,121.3C560,113,640,69,720,73.7C800,78,880,130,960,160.3C1040,191,1120,199,1200,195C1280,191,1360,173,1440,156C1520,139,1600,121,1680,112.7C1760,104,1840,104,1920,117C2000,130,2080,156,2160,156C2240,156,2320,130,2400,104C2480,78,2560,52,2640,43.3C2720,35,2800,43,2880,73.7C2960,104,3040,156,3120,173.3C3200,191,3280,173,3360,151.7C3440,130,3520,104,3600,82.3C3680,61,3760,43,3840,39C3920,35,4000,43,4080,47.7C4160,52,4240,52,4320,52C4400,52,4480,52,4560,47.7C4640,43,4720,35,4800,52C4880,69,4960,113,5040,134.3C5120,156,5200,156,5280,160.3C5360,165,5440,173,5520,147.3C5600,121,5680,61,5720,30.3L5760,0L5760,260L5720,260C5680,260,5600,260,5520,260C5440,260,5360,260,5280,260C5200,260,5120,260,5040,260C4960,260,4880,260,4800,260C4720,260,4640,260,4560,260C4480,260,4400,260,4320,260C4240,260,4160,260,4080,260C4000,260,3920,260,3840,260C3760,260,3680,260,3600,260C3520,260,3440,260,3360,260C3280,260,3200,260,3120,260C3040,260,2960,260,2880,260C2800,260,2720,260,2640,260C2560,260,2480,260,2400,260C2320,260,2240,260,2160,260C2080,260,2000,260,1920,260C1840,260,1760,260,1680,260C1600,260,1520,260,1440,260C1360,260,1280,260,1200,260C1120,260,1040,260,960,260C880,260,800,260,720,260C640,260,560,260,480,260C400,260,320,260,240,260C160,260,80,260,40,260L0,260Z"></path></svg>
    
        <!-- <div v-if="canLogin" class="p-6 sm:fixed sm:top-0 sm:right-0 text-end">
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                >Dashboard</Link
            >

            <template v-else>
                <Link
                    :href="route('login')"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                    >Log in</Link
                >

                <Link
                    v-if="canRegister"
                    :href="route('register')"
                    class="font-semibold text-gray-600 ms-4 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                    >Register</Link
                >
            </template>
        </div> -->

       
    </div>
</template>

<style>

</style>
