<script setup>
import { ref } from 'vue'
let menuShow = ref(false);
</script>

<template>
  <nav class="w-full bg-white border-b-2 px-6 py-5">
    <div class="flex flex-wrap justify-between items-center">
      <div class="flex w-1/9">
        <a href="https://flowbite.com/" class="flex items-center">
          <img src="img/logo.png" class="h-9 sm:h-9" alt="Exbrain Logo">
        </a>
      </div>

      <div class="flex w-3/9 hidden md:block">
        <ul class="flex">
          <li class="flex md:w-16 lg:w-24 hlink">
            <a href="#" class="hlink-text" aria-current="page">Home</a>
          </li>
          <li class="flex  md:w-16 lg:w-24 hlink">
            <a href="#" class="hlink-text" aria-current="page">Inbox</a>
          </li>
          <li class="flex  md:w-16 lg:w-24  hlink">
            <a href="#" class="hlink-text" aria-current="page">Blog</a>
          </li>
        </ul>
      </div>

      <div class="flex w-4/9 hidden md:block">
        <input type="text" class="w-72 lg:w-96 h-10 border-color rounded-l-xl focus:ring-0" placeholder="Video Title">
        <button class="btn w-24 h-10 mt-1 text-white rounded-r-xl hover:opacity-90 ">Search</button>
      </div>

      <div class="flex w-1/9">
        <img src="/img/noti-pin.png" alt="" class="mr-2 hidden noti-profile-menu md:block">
        <img src="/img/user.png" alt="" class="ml-1 noti-profile-menu">
        <img src="/img/menu.png" alt="" class="ml-3 noti-profile-menu block md:hidden" @click="menuShow = !menuShow">
      </div>
    </div>

    <div class="absolute bg-white drop-shadow-lg right-3 top-24 w-44  rounded-lg md:hidden" v-if="menuShow">
      <ul class="flex flex-col items-start pl-8 py-3">
        <li class="flex md:w-16 lg:w-24 hlink my-1">
          <a href="#" class="hlink-text" aria-current="page">Home</a>
        </li>
        <li class="flex  md:w-16 lg:w-24 hlink my-1">
          <a href="#" class="hlink-text" aria-current="page">Inbox</a>
        </li>
        <li class="flex  md:w-16 lg:w-24  hlink my-1">
          <a href="#" class="hlink-text" aria-current="page">Blog</a>
        </li>
      </ul>
      <div class="w-32 mx-auto ion">
        <hr>
      </div>
      <ul class="flex flex-col items-start pl-8 py-3">
        <li class="flex md:w-16 lg:w-24 hlink my-1">
          <a href="#" class="hlink-text-normal" aria-current="page">Profile</a>
        </li>
        <li class="flex  md:w-16 lg:w-24 hlink my-1">
          <a href="#" class="hlink-text-normal" aria-current="page">Setting</a>
        </li>
        <li class="flex  md:w-16 lg:w-24  hlink my-1">
          <a href="#" class="hlink-text-normal" aria-current="page">Logout</a>
          <img src="/img/logout.png" alt="" class="ml-4 w-5 h-5">
        </li>
      </ul>
    </div>
  </nav>


</template>



<style>
@import "../../css/header.css";
</style>


