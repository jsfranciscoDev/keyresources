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
            <h2 class="font-bold text-xl lg:text-[48px]">Anti Fraud Policy</h2>
        </div>
    </div>

    <div class="mt-10 container-privacy">
        <h2>NOTICE TO CLIENTS</h2>		
<p><strong>Payments to Key Resources International Services, operating under the name Key Resources International Services:</strong></p>
<p>When you make a payment to Key Resources International Services, you have the right to request a receipt. Key Resources International Services issues receipts for all payments made to the company. An acknowledgment of payments made to Key Resources International Services is sent from our central software. If you have any questions regarding payments to Key Resources International Services, please send an email to <a href="mailto:info@keyresourcesintlservices.com" target="_new" rel="noopener">info@keyresourcesintlservices.com</a>.</p>

<p><strong>Payments to Key Resources International Services staff:</strong></p>
<p>You are advised against making any additional payments to any Key Resources International Services employee. If any Key Resources International Services staff members offer to fabricate your profile or obtain any kind of document for an additional fee, we strongly recommend that you inform the management so that suitable action can be taken against the employee. Please note: the company is not liable if you enter into any verbal or written agreement with a Key Resources International Services employee or their reference. If you have paid for any additional services to any Key Resources International Services employee, we are not responsible for the consequences.</p>

<p><strong>Vendors referred by Key Resources International Services staff:</strong></p>
<p>We strongly discourage you from availing any services from vendors that may be suggested by any Key Resources International Services employee, as this is not endorsed or permitted by the company, and you risk potential fraud by engaging with them. If endorsed by the employee and if this will help increase your chances of a positive result with your application, you may seek confirmation from our company by emailing <a href="mailto:info@keyresourcesintlservices.com" target="_new" rel="noopener">info@keyresourcesintlservices.com</a>. We are not responsible for any vendors who may have been referred by a Key Resources International Services employee, and we are not liable for any charges that you have paid to them.</p>

<p><strong>Fraudulent Documentation:</strong></p>
<p>Key Resources International Services does not deal with cases involving fraudulent documentation or information. Your case will be accepted by Key Resources International Services based on the information you have provided, which we assume to be true. Key Resources International Services is not liable if you have provided incorrect, misleading, or fraudulent documentation or information.</p>
<p>Key Resources International Services does not provide clients with any kind of documentation on its own and only works on documentation that has been provided by you. We assume that all that has been submitted to us is 100% true and correct.</p>
<p>Key Resources International Services employees are strictly warned against illegal practices like this and are required to adhere to Key Resources International Services company policy. In the event of any employee going against company policy, Key Resources International Services is not responsible or liable for the same, as our policy is to accept cases where the provided information is 100% true.</p>

<p>To avoid being deceived and refused entry into foreign countries, please keep the following in mind:</p>
<ol>
    <li>
        <p>Do not be misled by dishonest Key Resources International Services staff into believing that it is an acceptable practice to submit forged documents with your visa application. The application will be refused, and you may face further investigation by the concerned authorities.</p>
    </li>
    <li>
        <p>Do not believe Key Resources International Services staff who claim they can influence the processing speed of applications or the final decision in exchange for money or other favors. Visa decisions are made solely by visa officers authorized by the respective country.</p>
    </li>
    <li>
        <p>Do not be fooled by imposters pretending to be visa officers from embassies. Legitimate visa officers do not meet applicants outside their official place of work, nor do they contact you to request money.</p>
    </li>
    <li>
        <p>Do not fall for fake websites designed to resemble official government websites or service delivery partner websites. Always obtain your visa information from official government websites.</p>
    </li>
    <li>
        <p>Do not be taken in by visa scams, such as overseas job offers that do not exist. Please carefully consider your decision before handing over your money, passport, and personal details. Note: If a job offer sounds too good to be true, it could be a scam.</p>
    </li>
</ol>

<p>Crooked staff often advise applicants to provide fake documentation or enter into any convenient arrangements. Please do not be deceived. Your investment will be lost, and you may be caught and denied entry to the country you have applied to.</p>

<p>The UK, Australia, Canada, Poland, the Czech Republic, and other countries welcome genuine visitors, students, and work immigrants. Immigration agencies in these countries will not tolerate abuse of the immigration system and have a zero-tolerance policy towards fraud. We strongly advise anyone seeking a visa for these countries not to heed staff who offer to sell forged documents and claim they can guarantee a visa. Immigration authorities have effective methods for detecting fraud and collaborate with international partners; UAE authorities also follow similar practices. When they uncover fraud, including false education and language certificates, the visa will be refused, and the applicant may face a ten-year visa ban, as well as possible action by UAE authorities.</p>

<p>Fraud is a criminal offense in the UK, Australia, Canada, Poland, the Czech Republic, and other countries and can lead to severe penalties for those involved. Ultimately, the responsibility for a visa application lies with the applicant. Providing fraudulent documents or misleading information can result in severe consequences, not only for the staff but also for the applicant. Applicants must protect themselves from immigration fraud by being aware of the ways people may try to take advantage of them and their situation.</p>

<p>Key Resources International Services Management strongly advises you against engaging in any kind of fraud or misrepresentation of your profile.</p>
<p>Please be warned that the submission of fraudulent documentation to a visa issuing authority will result in a ban from the country for no less than 10 years.</p>

<p><strong>Guarantees:</strong></p>
<p><strong>Key Resources International Services does not guarantee any candidate a visa</strong>. No employee of Key Resources International Services is permitted to do so. <strong>Visas are at the discretion of the visa officer and the immigration department/embassy or consulate.</strong> Jobs are at the discretion of the employer only. No one can influence this decision, and if an employee of Key Resources International Services promises you otherwise, please contact us immediately.</p>

<p>If you have any grievances or complaints, please contact our customer relationship department at <a href="mailto:info@keyresourcesintlservices.com" target="_new" rel="noopener">info@keyresourcesintlservices.com</a>.</p>
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
