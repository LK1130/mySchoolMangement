<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import { Inertia } from '@inertiajs/inertia';
import DropdownLink from '@/Components/DropdownLink.vue';
import { ref } from 'vue'

let menuShow = ref(false);

const logout = () => {
  console.log("Ok");
  Inertia.post(route('logout'));
};
</script>

<template>
  <nav class="w-full bg-white border-b-2 px-6 py-5">
    <div class="flex flex-wrap justify-between items-center">
      <div class="flex w-1/9">
        <Link href="./homepage" class="flex items-center">
        <img src="/img/logo.png" class="h-9 sm:h-9" alt="Exbrain Logo">
        </Link>
      </div>

      <div class="flex w-3/9 hidden md:block w-52 md:w-64">
        <ul class="flex">
          <li class="flex md:w-16 lg:w-24 hlink">
            <Link href="/homepage" class="hlink-text" aria-current="page">Home</Link>
          </li>
          <li class="flex  md:w-16 lg:w-24 hlink">
            <Link href="/inbox/" class="hlink-text" aria-current="page">Inbox</Link>
          </li>
          <li class="flex  md:w-16 lg:w-24  hlink">
            <Link href="/blog" class="hlink-text" aria-current="page">Blog</Link>
          </li>
        </ul>
      </div>

      <div class="flex w-4/9 hidden lg:block">
        <input type="text" class=" md:w-72 lg:w-80 h-10 border-color rounded-l-xl focus:ring-0" placeholder="Video Title">
        <button class="bg-primaryBackground w-24 h-10 mt-1 text-white rounded-r-xl hover:opacity-90 ">Search</button>
      </div>

      <div class="flex w-1/9">
        <div class="font-semibold p-1 mx-3 text-lg">{{ $page.props.user.name }}</div>
        <img src="/img/noti-pin.png" alt="" class="mr-2 hidden noti-profile-menu md:block">
        <img src="/img/user.png" alt="" class="ml-1 noti-profile-menu" @click="menuShow = !menuShow">
          
      </div>
    </div>

    <div class="absolute bg-white drop-shadow-lg right-3 top-24 w-44  rounded-lg  z-40" v-if="menuShow">
      <ul class="flex flex-col items-start pl-8 py-3">
        <li class="flex md:w-16 lg:w-24 hlink my-1">
          <Link href="./homepage" class="hlink-text" aria-current="page">Home</Link>
        </li>
        <li class="flex  md:w-16 lg:w-24 hlink my-1">
          <Link href="./inbox" class="hlink-text" aria-current="page">Inbox</Link>
        </li>
        <li class="flex  md:w-16 lg:w-24  hlink my-1">
          <Link href="./blog" class="hlink-text" aria-current="page">Blog</Link>
        </li>
      </ul>
      <div class="w-32 mx-auto ion">
        <hr>
      </div>
      <ul class="flex flex-col items-start pl-8 py-3">
        <li class="flex md:w-16 lg:w-24 hlink my-1">
          <Link href="./profile" class="hlink-text-normal" aria-current="page">
          Profile
          </Link>
        </li>
        <li class="flex  md:w-16 lg:w-24 hlink my-1">
          <Link href="./setting" class="hlink-text-normal" aria-current="page">
          Setting
          </Link>
        </li>
        <li class="flex  md:w-16 lg:w-24  hlink my-1">
          <form @submit.prevent="logout">
            <DropdownLink as="normal" class="hlink-text-normal">
              <div class="cursor-pointer">Logout</div>
            </DropdownLink>
          </form>
          <img src="/img/logout.png" alt="" class="ml-4 w-5 h-5">
        </li>
      </ul>
    </div>
  </nav>
</template>

<style>
@import "../../css/header.css";
</style>