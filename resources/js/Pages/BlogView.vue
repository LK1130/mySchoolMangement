<script setup>

import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Header from '../Layouts/Header.vue';
import Footer from '../Layouts/Footer.vue';
import moment from 'moment';
import { ref } from 'vue';



const props = defineProps({
    blog: {
        type: Array
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
            
<template>
 <button class="py-3 px-3 bg-secondaryBackground dark:bg-whiteTextColor transition-all duration-1000 text-whiteTextColor dark:text-primaryBackground text-5xl rounded-full rotate-90 upKey" v-show="display" @click="toTop">&#171;</button>

    <Head title="BlogView" />
    <Header />

    <section class="p-4 md:p-12">
        <div class="flex flex-row items-center justify-between">
            <Link href="/blog">
            <h1 class="text-lg md:text-xl font-bold text-primaryBackground dark:text-whiteTextColor">BLOGS</h1>
            </Link>
        </div>

        <div class="md:p-3 ">
            <h1 class="my-5 md:mb-10 text-lg md:text-3xl font-bold dark:text-whiteTextColor">{{ blog.b_title }}</h1>
            <div class="flex  w-full">
                <img :src="blog.b_photo" alt="" class="" />
                
            </div>
            <div class="flex flex-col space-y-2  my-8">
                <p class="text-base font-semibold opacity-80 dark:text-secondaryBackground">
                    {{ moment(blog.updated_at).format("YYYY/MM/DD (ddd)hh:mm") }}
                </p>
            </div>
            <div class="font-extralight space-y-6">
                <p class="font-medium text-lg opacity-70 dark:text-whiteTextColor whitespace-pre-line">{{ blog.b_description }}</p>
            </div>
        </div>
    </section>


    <Footer />
</template> 
            
        
<style>
@import "../../css/blogview.css";
</style>
            