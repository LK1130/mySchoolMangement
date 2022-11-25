<script setup>

import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Header from '../Layouts/Header.vue';
import Footer from '../Layouts/Footer.vue';
import Pagination from '../Components/Pagination.vue';
import moment from 'moment';


const props = defineProps({
    blogs: {
        type: Object
    },
});


</script>
        
<template>

    <Head title="Blog" />
    <Header />

    <section class="p-12">
        <h1 class="text-xl font-bold text-primaryBackground dark:text-white mb-6">BLOG</h1>

        <div class="p-0">
            <div class="flex flex-col md:flex-row px-6 py-10 rounded-xl shadow-xl mb-12 dark:bg-darkSecondaryBackground" v-for="blog in blogs.data"
                :key="blog.id">
                <div class="w-full md:w-1/3 mb-5 md:mb-0 mr-5">
                    <img :src="blog.b_photo" alt="">
                </div>
                <div class="relative w-full ">
                    <div class="flex flex-row justify-between w-full mb-2">
                        <h1 class="font-semibold text-xl dark:text-whiteTextColor">{{ blog.b_title }}</h1>
                        <p class="font-semibold text-sm dark:text-whiteTextColor">{{ moment(blog.created_at, "YYYYMMDD").calendar() }} </p>
                    </div>
                    <div class="w-full font-medium opacity-70 dark:text-whiteTextColor">
                        {{ blog.b_description }}
                    </div>
                    <div class="absolute w-full bottom-0 ">
                        <h2 class="absolute right-0  text-primaryBackground font-bold dark:text-secondaryBackground">
                            <Link :href="route('blog.show', blog.id)">Read More...</Link>
                        </h2>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <div class="flex justify-center items-center mb-10">
        <Pagination :links="blogs.links">
        </Pagination>
    </div>
    <Footer />
</template>  
        
       
<style>
@import "../../css/blog.css";
</style>
        