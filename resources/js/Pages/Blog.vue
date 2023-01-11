<script setup>

import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Header from '../Layouts/Header.vue';
import Footer from '../Layouts/Footer.vue';
import Pagination from '../Components/Pagination.vue';
import moment from 'moment';
import { ref } from 'vue';




const props = defineProps({
    blogs: {
        type: Object
    },
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

<template class="relative">
    <button
        class="py-3 px-3 bg-secondaryBackground dark:bg-whiteTextColor transition-all duration-1000 text-whiteTextColor dark:text-primaryBackground text-5xl rounded-full rotate-90 upKey"
        v-show="display" @click="toTop">&#171;</button>

    <Head title="Blog" />
    <Header />

    <section v-if="props.blogs.data.length >= 1" class="p-12 h-auto">
        <h1 class="text-xl font-bold text-primaryBackground dark:text-white mb-6">Blog</h1>

        <div class="p-0">
            <div class="flex flex-col md:flex-row px-6 py-10 rounded-xl shadow-xl mb-12 dark:bg-darkSecondaryBackground"
                v-for="blog in blogs.data" :key="blog.id">
                <div class="w-full md:w-1/3 mb-5 md:mb-0 mr-5">
                    <img :src="blog.b_photo" alt="">
                </div>
                <div class="relative w-full ">
                    <div class="flex flex-row justify-between w-full mb-2">
                        <h1 class="font-semibold text-xl dark:text-whiteTextColor">{{ blog.b_title }}</h1>
                        <p class="font-semibold text-sm dark:text-whiteTextColor">{{
                            moment(blog.created_at).calendar()
                        }} </p>
                    </div>
                    <div class="w-full font-medium opacity-70 dark:text-whiteTextColor">
                        {{ blog.b_description.substring(0, 350).concat('..... ') }}
                    </div>
                    <div class="absolute w-full bottom-0 ">
                        <h2 class="absolute right-0  text-primaryBackground font-bold dark:text-secondaryBackground">
                            <Link :href="route('blog.show', blog.id)">Read More...</Link>
                        </h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center items-center mb-10">
            <Pagination :links="blogs.links">
            </Pagination>
        </div>
    </section>

    <section v-else class="p-12 m-5 text-lg font-bold h-screen">
        There are no blogs.
    </section>


    <Footer />
</template>  

       
<style>
@import "../../css/blog.css";
</style>
