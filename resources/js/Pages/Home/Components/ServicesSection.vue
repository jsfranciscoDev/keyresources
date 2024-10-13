<template>
    <div class="p-10 pb-10 overflow-x-hidden bg-gray-50 xl:px-28 xl:pb-28">
      <div class="flex flex-col items-center justify-center w-full p-5 text-center xl:p-16">
        <h2 class="text-[28px] font-bold lg:text-[48px]">Our Services</h2>
      <span>At Key Resources International Immigration Services, we offer a comprehensive range of
immigration services designed to meet the needs of individuals, families, and businesses
seeking opportunities abroad. Our services include:</span>
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
      title: "Work Permits", 
      content: `We assist individuals in obtaining work permits for various countries, ensuring compliance
with local immigration laws and providing guidance through the application process.` 
    },
    { 
      title: "Work Visas", 
      content: `Our team helps clients secure work visas to countries like Canada, Schengen nations, and
beyond. We provide support in gathering documentation, preparing for interviews, and
navigating complex immigration procedures.` 
    },
    { 
      title: "Permanent Residency", 
      content: `For those looking to establish long-term residence, we specialize in permanent residency
applications, offering tailored solutions that fit your unique situation.` 
    },
    { 
      title: "Citizenship Applications", 
      content: `We assist clients in obtaining citizenship in their desired country, guiding them through the
legal requirements, applications, and interviews for a smooth transition to a new
nationality.` 
    },
    { 
      title: "Visit Visas", 
      content: `Whether for tourism, business, or family visits, we handle visit visa applications for
countries around the globe, ensuring your travel plans are realized with minimal hassle.` 
    },
    { 
      title: "Student Visas", 
      content: `Our experts help students secure visas to pursue education abroad, guiding them through
the complex process of obtaining approval from their chosen institutions and countries.` 
    },
    { 
      title: "Global Immigration Services", 
      content: `Our team offers visa and immigration solutions for countries around the world, helping
clients meet global mobility goals whether for work, study, or personal reasons.` 
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
  