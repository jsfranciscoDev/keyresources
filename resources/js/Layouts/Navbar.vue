<template>
  <nav :class="{'bg-neutral-800 text-white': isScrolled, 'md:bg-transparent': !isScrolled}" class="z-50 w-full transition-all duration-300">
    <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <button
            type="button"
            class="relative inline-flex items-center justify-center p-2 rounded-md text-black-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
            @click="toggleMenu"
          >
            <span class="sr-only">Open main menu</span>

            <!-- Hamburger icon (menu closed) -->
            <svg
              v-if="!isMenuOpen"
              class="block w-6 h-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              aria-hidden="true"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
              />
            </svg>

            <!-- Close icon (menu open) -->
            <svg
              v-if="isMenuOpen"
              class="block w-6 h-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              aria-hidden="true"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M6 18L18 6M6 6l12 12"
              />
            </svg>
          </button>
        </div>
        <div class="flex items-center justify-center flex-1 sm:items-stretch sm:justify-start">
          <div class="flex items-center flex-shrink-0 text-black">Logo Here</div>
          <div class="hidden sm:ml-6 sm:block">
            <div class="flex space-x-4">
              <a
                href="#home"
                class="px-3 py-2 text-sm font-medium rounded-md text-black-300 hover:bg-gray-700 hover:text-white"
                >Home</a
              >
              <a
                href="#about"
                class="px-3 py-2 text-sm font-medium rounded-md text-black-300 hover:bg-gray-700 hover:text-white"
                >About</a
              >
              <a
                href="#services"
                class="px-3 py-2 text-sm font-medium rounded-md text-black-300 hover:bg-gray-700 hover:text-white"
                >Services</a
              >
              <a
                href="#"
                class="px-3 py-2 text-sm font-medium rounded-md text-black-300 hover:bg-gray-700 hover:text-white"
                >Tracking</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div v-if="isMenuOpen" class="h-screen sm:hidden" id="mobile-menu">
      <div class="px-2 pt-2 pb-3 space-y-1">
        <a
          href="#"
          class="block px-3 py-2 text-base font-medium text-black bg-black rounded-md"
          aria-current="page"
          >Home</a
        >
        <a
          href="#"
          class="block px-3 py-2 text-base font-medium rounded-md text-black-300 hover:bg-gray-700 hover:text-white"
          >About</a
        >
        <a
          href="#"
          class="block px-3 py-2 text-base font-medium rounded-md text-black-300 hover:bg-gray-700 hover:text-white"
          >Services</a
        >
        <a
          href="#"
          class="block px-3 py-2 text-base font-medium rounded-md text-black-300 hover:bg-gray-700 hover:text-white"
          >Tracking</a
        >
      </div>
    </div>
  </nav>
</template>

<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue'

const isMenuOpen = ref(false)
const isScrolled = ref(false)

// Function to toggle the mobile menu
const toggleMenu = () => {
  isMenuOpen.value = !isMenuOpen.value
}

// Function to handle scroll event
const handleScroll = () => {
  isScrolled.value = window.scrollY > 50 // Change 50 to your desired scroll threshold
}

// Add event listener for scroll
onMounted(() => {
  window.addEventListener('scroll', handleScroll)
})

// Remove event listener on component unmount
onBeforeUnmount(() => {
  window.removeEventListener('scroll', handleScroll)
})
</script>

<style scoped>
</style>
