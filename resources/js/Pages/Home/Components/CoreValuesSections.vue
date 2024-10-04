<template>
    <div class="parallax-container">
      <div class="parallax-content">
        <div class="flex flex-col items-center justify-center gap-5 py-[50px] lg:py-[100px] text-black lg:flex-row">
          <div class="flex flex-col h-[400px] lg:h-[400px] items-center justify-center w-full lg:w-1/2 p-5 mx-5 bg-white rounded-xl">
            <h2 class="text-[24px] lg:text-[38px] font-bold mb-[-30px]">Our Core Values</h2>
            <div class="relative w-full">
              <!-- Slider Container -->
              <div class="flex items-center justify-center overflow-hidden slider-container">
                <div
                  class="flex transition-transform duration-500 slider-wrapper"
                  :style="{ transform: `translateX(-${currentIndex * 100}%)` }"
                >
                  <div
                    class="flex items-center justify-center slide"
                    v-for="(value, index) in coreValues"
                    :key="index"
                  >
                    <p class="p-2 text-center">{{ value }}</p>
                  </div>
                </div>
              </div>
              <!-- Dots Navigation -->
              <div class="flex justify-center mt-2">
                <div
                  v-for="(value, index) in coreValues"
                  :key="index"
                  @click="currentIndex = index"
                  class="w-3 h-3 mx-1 transition duration-300 bg-gray-300 rounded-full cursor-pointer"
                  :class="{ 'bg-blue-500': currentIndex === index }"
                ></div>
              </div>
            </div>
          </div>
  
          <div class="flex flex-col items-center justify-center w-full lg:w-1/2 h-[400px] gap-2">
            <div class="flex flex-col items-center justify-center w-full p-5 mx-5 bg-white lg:p-10 h-1/2 rounded-xl">
              <h2 class="text-[20px] lg:text-[38px] font-bold">Our Mission</h2>
              <p>To provide personal and customized solutions to meet customers' unique needs and requirements.</p>
            </div>
            <div class="flex flex-col items-center justify-center w-full p-5 mx-5 bg-white lg:p-10 h-1/2 rounded-xl">
              <h2 class="text-[20px] lg:text-[38px] font-bold">Our Vision</h2>
              <p>To be the preferred WorldWide service provider of immigration and relocation services.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  
  const coreValues = [
    "Confidence is the key: We will take on applications only if we are confident we will succeed.",
    "Customized Service: It is our number one policy to know our clients at a personal level and fully understand their objectives and needs so that we can assist them in making the right decisions for a better tomorrow.",
    "'Let's solve it' mindset: We are fully committed to resolving any issues and/or problems that our clients may face during the entire process. We strongly believe there is always a solution in everything.",
    "Respect: We take pride in our company, our fellow colleagues, and our clients.",
    "Uprightness: We ensure our conduct and practices reflect the highest ethical and professional standards.",
    "Trustworthy: Trust is built on openness, clarity, and honesty.",
    "Expertness: Up-to-the-minute knowledge of a multitude of complex rules ensures that our clients are not caught out when planning their migration and relocation. We always make sure that our team of expert immigration counselors is always updated on the immigration policies."
  ];
  
  const currentIndex = ref(0);
  </script>
  
  <style scoped>
  .parallax-container {
    position: relative;
    height: auto; /* Adjusted for flexibility */
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    overflow: hidden;
  }
  
  .parallax-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('/public/images/plane.jpg'); /* Image path */
    background-attachment: fixed; /* Parallax effect */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    opacity: 0.1;
    z-index: -1;
  }
  
  /* Content inside parallax */
  .parallax-content {
    z-index: 10;
    color: white;
    padding: 2rem;
    border-radius: 10px;
  }
  
  .slider-container {
    position: relative;
    width: 100%;
    height: 200px; /* Set a fixed height for the slider */
  }
  
  .slider-wrapper {
    display: flex;
    transition: transform 0.5s ease;
  }
  
  .slide {
    min-width: 100%; /* Make each slide take full width */
    height: 100%; /* Match the slider height */
    display: flex;
    align-items: center;
    justify-content: center;
    background: #fff; /* Background color for slides */
    border-radius: 10px; /* Rounded corners */
  }
  
  /* Media queries for responsiveness */
  @media (max-width: 640px) {
    .parallax-content {
      padding: 1rem; /* Less padding for mobile */
    }
  
    .slide {
      font-size: 14px; /* Smaller text size for mobile */
    }
  
    h2 {
      font-size: 18px; /* Smaller heading for mobile */
    }
  }
  
  @media (min-width: 641px) {
    .slide {
      font-size: 16px; /* Medium text size for small tablets */
    }
  }
  
  @media (min-width: 1024px) {
    .slide {
      font-size: 18px; /* Medium to larger text size for larger tablets and desktops */
    }
  }
  </style>
  