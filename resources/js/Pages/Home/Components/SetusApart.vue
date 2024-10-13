<template>
    <div class="p-10 pb-10 overflow-x-hidden bg-gray-50 xl:px-28 xl:pb-28">
      <div class="flex flex-col items-center justify-center w-full p-5 text-center xl:p-16">
        <h2 class="text-[28px] font-bold lg:text-[48px]">What Sets Us Apart</h2>
      <span>At Key Resources International Immigration Services, we pride ourselves on delivering a
        unique, client-centered approach. Here’s what makes us stand out:</span>
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
      title: "Personalized Service", 
      content: `Every client’s immigration journey is unique. We
provide tailored solutions that fit individual needs, ensuring a customized approach to your
specific situation.` 
    },
    { 
      title: "Expert Knowledge", 
      content: `Our experienced team stays up-to-date with the latest
immigration policies and laws, providing you with accurate and reliable guidance.` 
    },
    { 
      title: "Comprehensive Support", 
      content: `From consultation to approval, we guide you
through every step of the process, assisting with documentation, interviews, and liaising
with immigration authorities.` 
    },
    { 
      title: "Global Reach", 
      content: `We offer services across multiple countries, including
Canada, Schengen nations, and many more, providing global expertise to clients
worldwide.` 
    },
    { 
      title: "Commitment to Success", 
      content: `Our dedication to achieving successful outcomes is
unwavering. We ensure clear communication, timely updates, and constant follow-up.` 
    },
    { 
      title: "Ethical Practices", 
      content: `Integrity is at the core of our operations. We handle every
case with transparency, professionalism, and a commitment to ethical practices.` 
    },
    { 
      title: "Client Satisfaction", 
      content: `We build long-term relationships with our clients,
ensuring that their success is our priority. Your satisfaction is the measure of our success.` 
    },
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
  