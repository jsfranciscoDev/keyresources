<script setup>
import { Head, Link } from '@inertiajs/vue3';
import HeroSection from './Components/HeroSections.vue';
import ServicesSection from './Components/ServicesSection.vue';
import AboutSection from './Components/AboutSection.vue';
import CoreValuesSection from './Components/CoreValuesSections.vue';
import SetusApart from './Components/SetusApart.vue';
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
   
 
   <div class="relative">
    <Navbar class="fixed"/>
    <HeroSection id="home"/>
    <AboutSection id="about"/>
    <CoreValuesSection/>
    <ServicesSection id="services"/>
    <SetusApart id="setusapart"/>
    <Footer/>
   </div>

</template>

<style>

</style>
