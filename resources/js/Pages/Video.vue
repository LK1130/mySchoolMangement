<script setup>

import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Header from '../Layouts/Header.vue';
import Footer from '../Layouts/Footer.vue';
import moment from 'moment';
import { ref } from 'vue';



const props = defineProps({
    video: {
        type: Object
    },
    lecture: {
        type: Object
    },
    next: {
        type: Object
    }

});

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

    <Head title="Video" />
    <Header />
    <!-- Video Show -->
    <section class="overflow-x-hidden">
        <section class="overflow-x-hidden">
            <div class="w-full bg-black">
                <div v-if="video.v_storage_location == 'gdrive'">
                    <iframe class="w-full aspect-video " :src="video.v_storage_link" allowfullscreen></iframe>
                </div>
                <div v-else-if="video.v_storage_location == 'youtube'"></div>
                <div v-else-if="video.v_storage_location == 'vimeo'"></div>
            </div>
        </section>

        <section class="bg-primaryBackground dark:bg-darkPrimaryBackground">
            <div class="container py-4 mx-auto">
                <p class="md:text-4xl  text-lg text-white font-bold md:mt-10 px-3 md:px-0">{{}}</p>

                <div class="md:flex md:flex-row justify-around md:mt-4 mt-2 px-3 md:px-0 ">
                    <div class="container flex justify-center mx-auto space-y-3">
                        <p class="md:text-base  text-xs text-justify md:pr-10 
                            md:pb-10 font-semibold  md:border-r-2  opacity-70 text-white mx-auto ">
                            {{}}</p>
                    </div>

                    <div class="w-2/3 md:w-6/12 md:mx-auto  md:mt-0 mt-10 md:mb-10 mx-auto">
                        <div class="md:flex md:justify-center ">
                            <p class="md:text-xl text-lg text-center text-white font-bold ">Resource</p>
                        </div>
                        <ul v-for="item in lecture"
                            class=" md:w-30 w-full flex justify-between md:items-center md:mx-10 md:mt-5 mt-3">
                            <li class="md:w-16 text-white md:text-standard text-base">
                                <ion-icon name="newspaper-outline"></ion-icon>
                            </li>


                            <li class="md:w-24  text-white md:text-base md:font-bold text-sm ">{{ item.l_name }}</li>
                            <li class="md:w-20 text-white md:text-standard text-base cursor-pointer">
                                <a :href="route('download', item.id)"> <ion-icon
                                        name="cloud-download-outline"></ion-icon></a>
                            </li>
                        </ul>







                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="font-medium md:text-3xl text-lg text-center mt-10" v-if="next.length == 0">This is Last Video
            </div>
            <div v-else class="font-semibold md:text-3xl text-xl text-center mt-10 dark:text-whiteTextColor">Next Video
            </div>
            <div class="p-8 mb-20 flex flex-nowrap overflow-x-auto   gap-10 scrollableVideoList">
                <div v-for="item in next"
                    class="w-80 flex-col  border-2 dark:border-0 dark:bg-darkPrimaryBackground rounded-2xl shadow-xl">

                    <a :href="route('video.index', item.id)"> <img src="../../../public/img/video.png" alt=""
                            class="rounded-t-xl"></a>
                    <div class="flex-col">
                        <div class="flex-1 mx-5 font-medium mt-2 text-base dark:text-whiteTextColor">{{ item.v_name }}
                        </div>
                        <div class="flex">
                            <div class="flex-1 mx-5 my-3 opacity-50 text-sm font font-medium dark:text-whiteTextColor">
                                {{ moment(item.v_date).format("YYYY/MM/DD") }}
                            </div>
                            <div class=" mx-5 my-3 opacity-50 text-sm font font-medium dark:text-whiteTextColor">
                                02:00:00
                            </div>

                        </div>
                    </div>
                </div>











            </div>
        </section>
    </section>

    <Footer />
</template>
<style>
@import '../../css/video.css';
</style>