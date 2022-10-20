<script setup>

import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Header from '../Layouts/Header.vue';
import Footer from '../Layouts/Footer.vue';
import SecondaryBtn from '../Components/SecondaryBtn.vue';
import DateButton from '../Components/DateButton.vue';
import Pagination from '../Components/Pagination.vue';
import Dropdown from '../Components/Dropdown.vue';

import { ref } from 'vue'
import moment from 'moment';
let sortMenu = ref(false);
const sortText = ref("By Date");

const sorting = (value) => {
    sortText.value = (value == 1) ? "By Date" : "By Date Desc";
    console.log(sortText);
}



const props = defineProps({
    videos :{
        type : Object
    },
    count : {
        type : Number
    },
    newvideo :{
        type : Object
    }
   
});


</script>
    
<template>

    <Head title="Recording Video" />
    <Header />
   
    <section>
        <div class="relative  w-full h-full bg-primaryBackground z-20 mx-auto">
            <div class="flex items-center p-6 mx-3 space-x-1 text-whiteTextColor ">
                <h1 class="text-xl font-bold ">{{ newvideo.c_name.slice(8) }}</h1>
                <ion-icon name="chevron-forward-outline" class="text-base font-bold"></ion-icon>
                <p class="text-xl font-bold">{{ newvideo.c_name.slice(0,8) }} </p>
                <span class="flex  text-xs m-2 p-1">( <span>{{ newvideo.c_start_time }}</span> - <span>{{ newvideo.c_end_time }}</span>)</span>
            </div>


            <h3 class="absolute z-0 myschool ">My School</h3>

            <div class=" flex md:flex-row flex-col   justify-around  md:space-x-10 p-5 pb-10 z-20">
                <div class="video-container container  mx-auto z-20   ">
                    <a :href=newvideo.v_storage_link> <img src="img/video.png" alt="" class="mx-auto"></a>
                </div>

                <div class="container sm:mt-3  mx-auto space-y-3 recs z-20">
                    <div class="flex  space-x-5">
                        <div class="text-white">
                            {{ moment(newvideo.v_date).format("YYYY/MM/DD") }}
                        </div>
                        <SecondaryBtn>
                            New
                        </SecondaryBtn>

                    </div>
                    <p class="md:text-5xl sm:text-base text-white font-bold">{{ newvideo.v_name }}</p>
                    <p class="md:text-sm opacity-60 text-white  mt-2">{{ newvideo.v_description }}</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="relative container h-auto mx-auto space-y-5">
            <div class="flex  justify-center p-10 ">
                <h3 class="text-standard font-bold title">Recording Video Lists</h3>
            </div>

            <div
                class="relative  md:flex  md:flex-row sm:flex  sm:flex-col space-y-5  justify-around items-center mx-auto smallsize ">
                <div class="hidden md:block mt-4">
                    <span class="font-bold">{{ count }}<span class="font-bold"> Videos</span> </span>
                </div>


                <div class="flex">
                    <input type="text" id="search-navbar"
                        class="block   md:w-96 md:h-8  text-gray-900  rounded-l-lg border border-gray-300 sm:text-sm  video"
                        placeholder="Video Title">
                    <button class="btn md:w-20 md:h-8  text-white rounded-r-lg searches">Search</button>
                </div>

                <div class="relative inline-block text-left">
                    <div>
                        <button type="button"
                            class="inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-100"
                            id="menu-button" aria-expanded="true" aria-haspopup="true" @click="sortMenu = !sortMenu">
                            {{ sortText }}
                            <!-- Heroicon name: mini/chevron-down -->
                            <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>

                    <div v-if="sortMenu"
                        class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                        role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1" role="none">
                            <button class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                                id="menu-item-0" @click="sorting(1)">By Date </button>
                            <button href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                                id="menu-item-1" @click="sorting(2)">By Date Desc </button>
                        </div>
                    </div>
                </div>

                <div class="md:hidden sm:block mt-4">
                    <span>{{ count }}<span>Videos</span> </span>
                </div>


            </div>

            <div v-for="video in videos.data" class="relative container md:w-11/12 mx-auto py-4">
                <div class=" px-7 py-5  border-slate-400 drop-shadow-md flex justify-between  mx-3  custombox">
                    <div class="flex ">
                        <div class="img-block md:mx-10 sm:mx-4">
                            <img src="img/video.png" class="thumbnail" alt="thumbnail">
                        </div>
                        <div class="md:mx-10 sm:mx-5">
                            <p class="text-base font-bold font-family">{{ video.v_name }}</p>
                            <span class="text-xs font-light">{{ moment(video.v_date).format("YYYY/MM/DD") }}</span>
                        </div>
                    </div>


                    <div class="flex items-center">
                      <a :href=video.v_storage_link> <button    class="watch w-24 p-1 rounded-lg text-white font-medium shadow-lg">Watch</button></a>
                    </div>
                </div>


            </div>

            <div class="flex justify-center items-center py-3">
                <Pagination :links="videos.links">
                </Pagination>
            </div>

        </div>
    </section>
    <Footer />

</template> 
    
   
<style>
@import "../../css/recording.css";
</style>
    