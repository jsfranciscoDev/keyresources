<template>
    <div class="parallax-container">
      <div class="parallax-content">
        <div class="flex flex-col items-center justify-center gap-5 py-[50px] lg:py-[100px] text-black lg:flex-row">
          <div class="flex flex-col items-center justify-center w-full p-5 mx-5 bg-white lg:w-1/2 rounded-xl">
            <h2 class="text-[24px] lg:text-[38px] font-bold">Our Core Values</h2>
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
                    <div class="max-w-[325px] md:max-w-[500px] h-full">
                        <p class="p-2 text-center">{{ value }}</p>
                    </div>
                    

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
  
          <div class="flex flex-col items-center justify-center w-full gap-2 lg:w-1/2">
            <div class="flex flex-col items-center justify-center w-full p-5 mx-5 bg-white lg:p-10 h-1/2 rounded-xl">
              <h2 class="text-[20px] lg:text-[38px] font-bold">Our Mission</h2>
                <div class="max-w-[325px] md:max-w-[500px] h-full">
                    <p>Our mission at Key Resources International Immigration Services is to provide high-
quality, reliable immigration solutions tailored to each client’s unique needs. We strive to
foster success for individuals, families, and businesses by helping them navigate
immigration laws and procedures with integrity, professionalism, and a commitment to
excellence. We are dedicated to making the global mobility experience smoother, enhancing
opportunities for growth and development.</p>
                </div>
            </div>
            <div class="flex flex-col items-center justify-center w-full p-5 mx-5 bg-white lg:p-10 h-1/2 rounded-xl">
              <h2 class="text-[20px] lg:text-[38px] font-bold">Our Vision</h2>
                <div class="max-w-[325px] md:max-w-[500px] h-full">
                    <p>Our vision is to be a global leader in immigration services, recognized for our exceptional
client service, innovative solutions, and ability to create pathways for success in a dynamic,
interconnected world. We aim to continuously expand our services, helping clients from all
over the globe achieve their immigration goals and build a future in countries that offer
new opportunities for personal and professional growth. Through our work, we aspire to
contribute to a world where borders are gateways to opportunity, not barriers.</p>
                </div>
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
 
  </style>
  