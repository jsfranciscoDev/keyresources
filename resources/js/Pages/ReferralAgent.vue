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
            <h2 class="font-bold text-xl lg:text-[48px]">Referral Agent</h2>
        </div>
    </div>

    <div class="mt-10 container-privacy">
        <h2>Get paid to talk about our Immigration Representation Service.</h2>		
		<p>We reward customers and a hardworking person like you…<br /> <br />At KR, we build our business primarily through word of mouth.  If you feel we do a good job providing immigration advice and representing your case – we want you to tell others who may benefit from our services.<br /> <br />It is the greatest compliment when our valued clients and colleagues refer us new business. If you know of anyone who could benefit from our services, we would appreciate your referral.<br /> <br />You can help our business grow by talking about the benefit and value of our services to friends or family interested in coming to Canada, Australia, Poland, Czech Republic, United Kingdom, Cayman Islands and other countries too.<br /> <br />We want to reward you for promoting our services.<br />​<br />Do you know of anyone who would be interested in our migration services? Referring a friend is very easy. Just fill the below form and that’s it. Just refer a friend to us and receive a minimum of AED 150/- up to AED 5,000/- or even more*<br />​<br />Referral rewards are paid only to referrers when the client retains our full representation services.</p>		
    </div>
    <Footer/>
   </div>

</template>

<style>
.container-privacy{
    max-width: 1200px;
    margin: 0 auto;
    padding: 50px;
}

.container-privacy h3{
   font-size: 28px;
   margin: 15px 0px 0px 0px;
}

.container-privacy h2{
   font-size: 28px;
   margin: 15px 0px 0px 0px;
}

.container-privacy p{
   font-size: 18px;
   margin-bottom: 10px;
}
</style>
