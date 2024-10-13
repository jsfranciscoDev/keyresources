<template>
    <div class="grid grid-cols-4 gap-4">
      <div v-for="row in rows" :key="row" class="flex flex-col justify-center space-x-4">
        <div
          :class="['w-4 h-4 rounded-full', color]"
          class="opacity-[50%]"
        ></div>
      </div>
    </div>
  </template>
  
  <script setup>
  import { defineProps } from 'vue';
  
  // Define props
  const props = defineProps({
    color: {
      type: String,
      default: 'bg-gray-800', // Default color if no prop is passed
    },
    rows: {
      type: Number,
      default: 24, // Default color if no prop is passed
    },
  });
  </script>
  
  <style scoped>
  </style>
  