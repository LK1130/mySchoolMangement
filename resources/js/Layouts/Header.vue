<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";
import DropdownLink from "@/Components/DropdownLink.vue";
import { ref } from "vue";

let menuShow = ref(false);

const logout = () => {
    Inertia.post(route("logout"));
};

const darkMode = stringToBoolean(localStorage.getItem("darkMode"));

let dark = false;

if (darkMode){
    dark = true;
}else{
    dark = false;
}

// var imgSrc = ref("/storage/" + $page.props.user.profile_photo_path);
// if ($page.props.user.profile_photo_path === null) {
//     imgSrc = ref("/img/error/avatars-000437232558-yuo0mv-t500x500.jpg");
// }
//console.log($page.props.user.profile_photo_path);
</script>
<template>
    <nav class="w-full px-10 border-b-2 dark:border-b-0 md:px-24 py-5 dark:bg-darkPrimaryBackground">
        <div class="flex flex-wrap justify-between items-center">
            <div class="flex w-1/9">
                <Link href="/homepage" class="flex items-center">
                <img :src="
                    dark
                        ? '/home/logo.png'
                        : '/img/exbrain.png'" alt="Exbrain Logo" class="h-10" />
                </Link>
            </div>

            <div class="flex w-3/9 hidden md:block w-52 md:w-64">
                <ul class="flex">
                    <li class="flex md:w-16 lg:w-24 hlink">
                        <Link href="/homepage" class="hlink-text dark:text-white" aria-current="page">Home</Link>
                    </li>
                    <li class="flex md:w-16 lg:w-24 hlink">
                        <Link href="/blog" class="hlink-text dark:text-white" aria-current="page">Blog</Link>
                    </li>
                    <li class="flex md:w-16 lg:w-24 hlink">
                        <Link href="/recording" class="hlink-text dark:text-white" aria-current="page">Video</Link>
                    </li>
                </ul>
            </div>

            <!-- <div class="flex w-4/9 hidden lg:block">
        <input type="text" class=" md:w-72 lg:w-80 h-10 border-color rounded-l-xl focus:ring-0"
          placeholder="Video Title" v-model="search">
        <button class="bg-primaryBackground w-24 h-10 mt-1 text-white rounded-r-xl hover:opacity-90 "
          @click="searchVideo()">Search</button>
      </div> -->

            <div class="flex w-1/9">
                <div class="font-semibold p-1 mx-3 text-lg dark:text-white">{{ $page.props.user.name }}</div>
                <Link href="/inbox" aria-current="page">
                <ion-icon name="mail-open"
                    class="text-primaryBackground dark:text-white mx-3  hidden noti-profile-menu md:block text-4xl">
                </ion-icon>
                </Link>

                <img :src="
                    $page.props.user.profile_photo_path
                        ? $page.props.user.profile_photo_path
                        : '/img/error/avatars-000437232558-yuo0mv-t500x500.jpg'
                " alt="" class="ml-4 noti-profile-menu rounded-full" @click="menuShow = !menuShow" />

            </div>
        </div>

        <div class="absolute bg-white dark:bg-darkPrimaryBackground drop-shadow-lg right-3 top-24 w-44  rounded-lg  z-40"
            v-if="menuShow">
            <ul class="flex flex-col items-start pl-8 py-3">
                <li class="flex md:w-16 lg:w-24 hlink my-1">
                    <Link href="/homepage" class="hlink-text dark:text-whiteTextColor" aria-current="page">Home</Link>
                </li>
                <li class="flex  md:w-16 lg:w-24  hlink my-1">
                    <Link href="/blog" class="hlink-text dark:text-whiteTextColor" aria-current="page">Blog</Link>
                </li>
                <li class="flex  md:w-16 lg:w-24  hlink my-1">
                    <Link href="/recording" class="hlink-text dark:text-whiteTextColor" aria-current="page">Video</Link>
                </li>
            </ul>
            
            <div class="w-32 mx-auto ion ">
                <hr class="dark:border-darkSecondaryBackground">
            </div>
            <ul class="flex flex-col items-start pl-8 py-3">
                <li class="flex md:w-16 lg:w-24 hlink my-1">
                    <Link href="/profile" class="hlink-text-normal dark:text-whiteTextColor" aria-current="page">
                    Profile
                    </Link>
                </li>
                <li class="flex  md:w-16 lg:w-24 hlink my-1">
                    <Link href="/setting" class="hlink-text-normal dark:text-whiteTextColor" aria-current="page">
                    Setting
                    </Link>
                </li>
                <li class="flex  md:w-16 lg:w-24  hlink my-1">
                    <form @submit.prevent="logout">
                        <DropdownLink as="normal" class="hlink-text-normal   dark:text-whiteTextColor">
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
