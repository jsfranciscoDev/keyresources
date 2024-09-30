<script setup>
import { Head, Link } from '@inertiajs/vue3';
import HeroSection from './Components/HeroSections.vue';
import Navbar from '@/Layouts/Navbar.vue';

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
   
 
   <div class="relative overflow-y-hidden">
    <Navbar class="fixed"/>
    <HeroSection/>
   </div>

</template>

<style>

</style>
