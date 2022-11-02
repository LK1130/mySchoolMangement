<script setup>

import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Header from '../Layouts/Header.vue';
import Footer from '../Layouts/Footer.vue';
import moment from 'moment';



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

</script>

<template>

    <Head title="Video" />
    <Header />
    <!-- Video Show -->
    <section class="overflow-x-hidden">
        <section class="overflow-x-hidden">
            <div class="w-full bg-black">
                <img src="../../../public/img/video.png" class="w-2/3 m-auto" alt="">
            </div>
        </section>

        <section class="bg-primaryBackground ">
            <div class="container py-4 mx-auto">
                <p class="md:text-4xl  text-lg text-white font-bold md:mt-10 px-3  md:px-0">{{ video.v_name }}</p>

                <div class="md:flex md:flex-row justify-around md:mt-4 mt-2 px-3 md:px-0 ">
                    <div class="container flex justify-center mx-auto space-y-3">
                        <p class="md:text-base  text-xs text-justify md:pr-10 
                            md:pb-10 font-semibold  md:border-r-2  opacity-70 text-white mx-auto ">
                            {{ video.v_description }}</p>
                    </div>

                    <div class="w-2/3 md:w-6/12 md:mx-auto  md:mt-0 mt-10 md:mb-10 mx-auto">

                        <div class="md:flex md:justify-center ">
                            <p class="md:text-xl text-base text-white font-bold ">Source Download</p>
                        </div>
                        <ul v-for="item in lecture"
                            class=" md:w-30 w-full flex justify-between md:items-center md:mx-10 md:mt-5 mt-3">
                            <li class="md:w-16 text-white md:text-standard text-base">
                                <ion-icon name="newspaper-outline"></ion-icon>
                            </li>
                            <li class="md:w-24  text-white md:text-base md:font-bold text-sm ">{{ item.l_name }}</li>
                            <li class="md:w-20 text-white md:text-standard text-base">
                                <ion-icon name="cloud-download-outline"></ion-icon>
                            </li>
                        </ul>







                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="font-semibold md:text-3xl text-xl text-center mt-10">Next Video</div>
            <div class="p-8 mb-20 flex flex-nowrap overflow-x-auto  gap-10 scrollableVideoList">
                <div v-for="item in next" class="w-80 flex-col  border-2  rounded-2xl shadow-xl">

                    <a :href="route('video.index', item.id)"> <img src="../../../public/img/video.png" alt=""
                            class="rounded-t-xl"></a>
                    <div class="flex-col">
                        <div class="flex-1 mx-5 font-medium mt-2 text-base">{{ item.v_name }}</div>
                        <div class="flex">
                            <div class="flex-1 mx-5 my-3 opacity-50 text-sm font font-medium ">
                                {{ moment(item.v_date).format("YYYY/MM/DD") }}
                            </div>
                            <div class=" mx-5 my-3 opacity-50 text-sm font font-medium ">
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
.scrollableVideoList::-webkit-scrollbar {
    height: 10px;
}

.scrollableVideoList::-webkit-scrollbar-thumb {
    background: #999;
    border-radius: 5px;
}
</style>