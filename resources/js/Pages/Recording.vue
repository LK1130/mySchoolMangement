<script setup>

import { Head } from '@inertiajs/inertia-vue3';
import { Inertia } from '@inertiajs/inertia';
import Header from '../Layouts/Header.vue';
import Footer from '../Layouts/Footer.vue';
import Pagination from '../Components/Pagination.vue';
import { ref } from 'vue'
import moment from 'moment';
import axios from 'axios';
import { prop } from 'dom7';

const props = defineProps({
    classes: {
        type: Object
    },
    videos: {
        type: Object
    },
    count: {
        type: Number
    },
    newvideo: {
        type: Object
    }
});

console.log(props.newvideo);

console.log(props.videos);
/**
 * sorting menu
 */
let sortMenu = ref(false);
let search = ref("");
let sort = ref("");
const sortText = ref("Date Asc ");
const sorting = (value) => {
    sortText.value = (value == 1) ? "Date Asc " : "Date Desc";

    sortMenu.value = !sortMenu;

    sortConditin(sortText);

    axios.post(route('record.search'), {
        videoName: search.value,
        videoSort: sort.value
    }).then(function (response) {
        let resData = response.data;
        console.log(resData);
        props.videos.data = resData.data;
        props.videos.links = resData.links;
    }).catch(function (error) {
        console.log(error);
    });
}

console.log(sortText);

const sortConditin = (sortText) => {

    if (sortText.value == "Date Desc") {
        sort.value = "DESC";

    } else {
        sort.value = "ASC";

    }
    return sort.value;
}
/**
 * Slice Text for description
 */
const filter = (text, length, clamp) => {
    clamp = clamp || '...';
    var node = document.createElement('div');
    node.innerHTML = text;
    var content = node.textContent;
    return content.length > length ? content.slice(0, length) + clamp : content;
};

const searchVideo = () => {

    sortConditin(sortText);

    axios.post(route('record.search'), {

        videoName: search.value,
        videoSort: sort.value
    })
        .then(function (response) {
            let resData = response.data;

            props.videos.data = resData.data;
            props.videos.links = resData.links;
            props.videos.current_page = resData.current_page;
            props.videos.first_page_url = resData.first_page_url;
            props.videos.from = resData.from;
            props.videos.last_page = resData.last_page;
            props.videos.last_page_url = resData.last_page_url;
            props.videos.next_page_url = resData.next_page_url;
            props.videos.path = resData.path;
            props.videos.per_page = resData.per_page;
            props.videos.prev_page_url = resData.prev_page_url;
            props.videos.to = resData.to;
            props.videos.total = resData.total;

        })
        .catch(function (error) {
            console.log(error);
        });
}

const display = ref(false);

const displayButton = () => {
  window.addEventListener('scroll', () => {
    if (window.scrollY > 100) {
        display.value = true;
    } else {
        display.value = false;
    }
  });
};

const toTop = () => {
    window.scroll({
      top: 0,
      left: 0,
      behavior: 'smooth'
    });
};

displayButton();

</script>

<template>
    <button class="py-3 px-3 bg-secondaryBackground dark:bg-whiteTextColor transition-all duration-1000 text-whiteTextColor dark:text-primaryBackground text-5xl rounded-full rotate-90 upKey" v-show="display" @click="toTop">&#171;</button>


    <Head title="Rec Video" />
    <Header />
    <!-- Hero Section-->
    <section>
        <div v-if="props.classes.length > 1">
            <div
                class="flex w-full h-auto overflow-hidden bg-primaryBackground dark:bg-darkSecondaryBackground md:flex-row flex-col pt-5 md:px-10 px-7">
                <div class="flex-1 ">
                    <span class="text-xl font-semibold text-white">{{ newvideo.c_name }} > </span>
                    <span class="text-sm font-medium text-white"> ({{ newvideo.c_start_time }} - {{
                        newvideo.c_end_time
                    }})
                    </span>
                    <div class="md:my-10 my-5 md:ml-10 md:mr-10  ">
                        <a :href="route('video.index', newvideo.id)">
                            <img src="img/video.png" alt=""
                                class="mx-auto md:w-12/12 lg:w-8/12 w-full rounded-3xl "></a>
                    </div>
                </div>
                <div class="flex-1 md:my-16 my-5 ">
                    <span class="px-3 py-0.5 mr-2 text-white text-sm font-semibold rounded-lg bg-tertiaryBackground">{{
                        moment(newvideo.v_date).format("YYYY/MM/DD")
                    }}</span>
                    <span
                        class="px-5 py-0.5 ml-2 text-white text-sm font-semibold rounded-lg bg-secondaryBackground">New</span>
                    <div class="py-4 text-white font-semibold text-3xl">{{ newvideo.v_name }}</div>
                    <div class="text-white text-sm font-semibold opacity-70"> {{
                        filter(newvideo.v_description, 500,
                        "...")
                    }}</div>
                </div>
            </div>
        </div>

        <div v-else class="m-5 p-5 text-lg font-bold">
            Currenly You cant acces videos and you still not join in classes!!
        </div>
    </section>

    <!-- Recroding Video Lists-->
    <section>
        <div class="relative  h-auto mx-auto">
            <div class="text-center font-medium text-3xl md:text-4xl py-10 dark:text-white">Recording Video Lists</div>
            <div class="relative  flex  flex-row  justify-around items-center px-1 md:px-5 mb-8">
                <div class="font-bold hidden md:block dark:text-white">Total: <span
                        class="font-bold text-xl text-tertiaryBackground">{{ count }} </span> Videos</div>
                <div class="flex w-2/3 md:w-2/4 ">
                    <input type="text"
                        class="block  md:w-full md:h-10 w-80  text-gray-900  rounded-l-lg  border-blue-800 sm:text-sm"
                        placeholder="Video Title" v-model="search">
                    <button class="btn  md:h-10 w-28 text-sm md:text-base  text-white rounded-r-lg
                    bg-primaryBackground dark:bg-darkSecondaryBackground" @click="searchVideo()">Search</button>
                </div>
                <div>
                    <button type="button"
                        class="inline-flex md:w-full w-28 h-10 justify-center rounded-md border border-gray-300 bg-white
                    px-1 md:px-4 py-2 text-xs  md:text-sm font-medium text-gray-700 shadow-sm
                    hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-100"
                        id="menu-button" aria-expanded="true" aria-haspopup="true" @click="sortMenu = !sortMenu">
                        {{ sortText }}
                        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div v-if="sortMenu"
                        class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white dark:bg-darkPrimaryBackground shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                        role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1 dark:bg-darkPrimaryBackground rounded-xl" role="none">
                            <button class="text-gray-700 dark:text-whiteTextColor block px-4 py-2 text-sm"
                                role="menuitem" tabindex="-1" id="menu-item-0" @click="sorting(1)">Date Asc </button>
                            <button href="#" class="text-gray-700 dark:text-whiteTextColor block px-4 py-2 text-sm"
                                role="menuitem" tabindex="-1" id="menu-item-1" @click="sorting(2)">Date Desc </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Video Lists -->
            <div class="relative  w-full flex  flex-wrap justify-center ">
                <div class="border-slate-400 drop-shadow-md w-44 m-2 md:w-56 md:m-5 dark:bg-darkSecondaryBackground  dark:text-whiteTextColor shadow-md md:shadow-lg rounded-xl "
                    v-for="video in videos.data">
                    <div class="flex flex-col  text-center">
                        <a :href="route('video.index', video.id)">
                            <div class=" flex  items-center">
                                <img src="img/video.png" class=" w-full rounded-t-lg" alt="thumbnail">
                            </div>
                            <div class="py-3">
                                <p class="text-base font-medium font-family">{{ video.v_name }}</p>
                                <span class="text-xs font-medium opacity-50">{{
                                    moment(video.v_date).format("YYYY/MM/DD")
                                }}</span>
                            </div>
                        </a>
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
@import '../../css/recording.css';
</style>
  
