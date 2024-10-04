<template>
    <div class="p-10 pb-10 overflow-x-hidden bg-gray-50 xl:px-28 xl:pb-28">
      <div class="flex flex-col items-center justify-center w-full p-5 text-center xl:p-16">
        <h2 class="text-[28px] font-bold lg:text-[48px]">Our Services</h2>
      <span>We're Committed to Providing Comprehensive and Professional Immigration Consultancy Services and Advice to our Clients.
Work Visa
Investor Visa
PR: Permanent Residency
TOURIST</span>
      </div>
      <div v-for="(item, index) in items" :key="index" class="border-b border-gray-300">
        <h2>
          <span
            @click="toggle(index)"
            class="flex justify-between w-full p-5 font-medium text-left bg-white cursor-pointer text-black-500 focus:outline-none focus:ring-2 focus:ring-gray-300"
          >
            <span>{{ item.title }}</span>
            <svg
              :class="{ 'rotate-180': activeIndex === index }"
              class="w-6 h-6 transition-transform duration-200 transform"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M19 9l-7 7-7-7"
              ></path>
            </svg>
          </span>
        </h2>
    
        <div v-if="activeIndex === index" class="p-5 overflow-hidden bg-white">
            <p class="text-gray-600">{{ item.content }}</p>
          </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  
  // Define the accordion items
  const items = ref([
    { 
      title: "What is a work permit?", 
      content: `A work permit is a document that authorizes a foreigner to work legally in another country. 
      This permit indicates the company entrusting an execution of work to the foreigner and the position or the type of work the foreigner is to perform. 
      If working abroad is your aspiration, our working abroad experts can assist you in applying to highly profiled companies in many countries in Europe and Canada 
      that are in search of your proficiency after having a thorough assessment of your profile in making sure you are shortlisted and selected by the right employer.` 
    },
    { 
      title: "What is an Investor Visa?", 
      content: `An investor visa is granted to an individual who is willing and able to make a substantial financial investment in another country. 
      Investor visa holders are permitted to work, study, and engage in business activities. They can even be accompanied or joined by their dependents.
      Willing to invest abroad, particularly in the UK? Here in JUST MIGRATE NOW, our investment immigration barristers and immigration lawyers work firmly with investors, 
      wealth managers, and leading banks to prepare and submit high-quality visa applications for investors and their families. Our barristers are experts within the 
      immigration options for investors and can guide you through complex headquarters Immigration Rules and policies.` 
    },
    { 
      title: "What is a Permanent Resident?", 
      content: `A permanent resident is someone given a permanent stay status by migrating to another country but is not a citizen of that country. 
      For example, a student or foreign worker is not a permanent resident. Particularly in Canada, anyone is allowed to apply for permanent residency, but only 
      qualified candidates are accepted.
      With the complexity and time-consuming nature of the permanent residency application process, it is essential that if you are considering applying for permanent 
      residence in Canada or any country of desire, you get professional immigration help throughout the PR process. With many years of experience and having helped 
      thousands of people immigrate to their dream countries, we are always open to helping you too.` 
    },
    { 
      title: "What is a Tourist Visa?", 
      content: `Generally, a citizen of a foreign country who wishes to enter another country must first obtain a visa, either a nonimmigrant visa for a temporary stay 
      or an immigrant visa for permanent residence. Visitor or tourist visas are nonimmigrant visas for persons who want to enter another country temporarily for 
      business, tourism, or a combination of both purposes. Irrespective of whichever country you wish to visit, we are here to guide you with all the necessary 
      information and shall assist you best in application procedures.` 
    }
  ]);
  
  // Track the currently active accordion index
  const activeIndex = ref(null);
  
  // Toggle the accordion by setting the active index
  const toggle = (index) => {
    activeIndex.value = activeIndex.value === index ? null : index;
  };
  
  </script>
  
  <style scoped>
 
  </style>
  