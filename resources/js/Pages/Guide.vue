<script setup>

import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Header from '../Layouts/Header.vue';
import SecondaryBtn from '../Components/SecondaryBtn.vue';
import Footer from '../Layouts/Footer.vue';
import { stringify } from 'qs';


const props = defineProps({
    guides :{
        type : Object
    },
    allGuides :{
        type : Object
    }
});
console.log(props.guides);
</script>

<template>

    <Head title='Guide' />
    <Header />

   
    
    <section>
        <div  class="p-4 md:p-12 mx-auto">
            <div class="flex ">
                <p class="text-primaryBackground dark:text-whiteTextColor text-xl font-bold">Guide</p>
                <div     class="flex w-full">
                    <ul v-for="item in allGuides" :key="item.id" class="flex  w-full  md:pl-24 pl-1 py-2 ">
                        
                        <li   class="flex w-full hlink underline my-1 ">
                            <a   href="#blog1" class="hlink-text guide dark:text-cancelBackground" aria-current="page">{{ item.g_title }}</a>
                        </li>
                        <!-- <li class="flex w-full hlink underline my-1">
                            <a href="#blog1" class="hlink-text guide " aria-current="page">How to Login To Our System</a>
                        </li>
                        <li class="flex  w-full hlink underline my-1">
                            <a href="#" class="hlink-text guide" aria-current="page">How to Watch Recording Video</a>
                        </li>
                        <li class="flex  w-full  hlink  underline my-1">
                            <a href="#" class="hlink-text guide" aria-current="page">How to Contact Our Organization</a>
                        </li> -->
                    </ul>
                </div>
            </div>
            <!-- Complex loop -->
            <!-- Blog 1 -->
            <div   v-for="items in allGuides"  class="container mx-auto p-8">
                <div v-for="item in guides" id="blog1" class="md:w-full guideblog">
                   <div v-if="item.step == 1  && items.g_title == item.g_title">
                    <h1  class="text-standard font-bold md:mx-10 mx-auto mb-3 dark:text-whiteTextColor">{{ item.id }} .{{ item.g_title }}</h1>
                   </div>

                   <div v-else>
                    <!-- <h1  class="text-standard font-bold md:mx-10 mx-auto mb-3">{{ item.id }} .{{ item.g_title }}</h1> -->
                   </div>

                    <div v-if="item.step == 1  && items.g_title == item.g_title" class="flex md:flex-row sm:flex-col  justify-between items-center md:w-full sm:w-full mx-auto  step">
                        <div class="flex justify-center items-center md:w-full md:h-full sm:w-full sm:h-full md:mx-auto image-container">
                            <img src="img/blog-image.png" class="images"  alt="">
                        </div>

                        <div v-if="item.step == 1 && items.g_title == item.g_title "  class="flex flex-col md:w-full md:mx-auto space-y-3">
                            <SecondaryBtn class="bg-primaryBackground ">Step {{ item.step }}</SecondaryBtn>

                            <h3 class="text-lg font-bold dark:text-cancelBackground">{{ item.step_title }}</h3>

                            <p class="text-base font-normal dark:text-cancelBackground">{{ item.step_description }}</p>

                        </div>
                    </div>



                    <div v-if="item.step == 2 && items.g_title == item.g_title" class="flex  justify-between md:w-full mt-6 mx-auto step2">
                        
                        <div class="flex flex-col md:w-full md:mx-auto md:mt-0 mt-3 space-y-3">
                            <SecondaryBtn class="bg-primaryBackground">Step {{ item.step }}</SecondaryBtn>

                            <h3 class="text-lg font-bold dark:text-cancelBackground">{{ item.step_title }}</h3>

                            <p class="text-base font-normal dark:text-cancelBackground">{{ item.step_description }}</p>

                        </div>
                        
                        <div  v-if="item.step == 2 && items.g_title == item.g_title" class="flex justify-center items-center md:w-full md:h-full md:mx-auto">
                            <img src="img/blog-image.png" alt="">
                        </div>

                       
                    </div>


                    <div v-if="item.step == 3  && items.g_title == item.g_title" class="flex md:flex-row sm:flex-col  justify-between items-center md:w-full sm:w-full mx-auto  step">
                        <div class="flex justify-center items-center md:w-full md:h-full sm:w-full sm:h-full md:mx-auto image-container">
                            <img src="img/blog-image.png" class="images"  alt="">
                        </div>

                        <div v-if="item.step == 3 && items.g_title == item.g_title "  class="flex flex-col md:w-full md:mx-auto space-y-3">
                            <SecondaryBtn class="bg-primaryBackground ">Step {{ item.step }}</SecondaryBtn>

                            <h3 class="text-lg font-bold">{{ item.step_title }}</h3>

                            <p class="text-base font-normal">{{ item.step_description }}</p>

                        </div>
                    </div>


                    <div v-if="item.step == 4 && items.g_title == item.g_title" class="flex  justify-between md:w-full mt-6 mx-auto step2">
                        
                        <div class="flex flex-col md:w-full md:mx-auto md:mt-0 mt-3 space-y-3">
                            <SecondaryBtn class="bg-primaryBackground">Step {{ item.step }}</SecondaryBtn>

                            <h3 class="text-lg font-bold">{{ item.step_title }}</h3>

                            <p class="text-base font-normal">{{ item.step_description }}</p>

                        </div>
                        
                        <div  v-if="item.step == 4 && items.g_title == item.g_title" class="flex justify-center items-center md:w-full md:h-full md:mx-auto">
                            <img src="img/blog-image.png" alt="">
                        </div>

                       
                    </div>

                    


                </div>

                <div class="w-full flex justify-center m-3 mt-10">
                    <div class="bg-black w-96 h-0.5"></div>
                </div>
            </div>


           

            <!-- Blog 2 -->

            <!-- <div class="container mx-auto p-8">
                <div id="blog1" class="md:w-full guideblog">
                    <h1 class="text-standard font-bold md:mx-10 mx-auto mb-3">1. How to Watch Recording Video</h1>

                    <div class="flex md:flex-row sm:flex-col  justify-between items-center md:w-full sm:w-full mx-auto  step">
                        <div class="flex justify-center items-center md:w-full md:h-full sm:w-full sm:h-full md:mx-auto image-container">
                            <img src="img/blog-image.png" class="images"  alt="">
                        </div>

                        <div class="flex flex-col md:w-full md:mx-auto space-y-3">
                            <SecondaryBtn class="bg-secondaryBackground ">Step 1</SecondaryBtn>

                            <h3 class="text-lg font-bold">Go to Our Website Link</h3>

                            <p class="text-base font-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam perspiciatis animi pariatur reiciendis dolor. Quod earum illum recusandae aut tempore. Similique, quos voluptate natus tempore fuga possimus quaerat architecto culpa.</p>

                        </div>
                    </div>



                    <div class="flex  justify-between md:w-full mt-6 mx-auto step2">
                        
                        <div class="flex flex-col md:w-full md:mx-auto md:mt-0 mt-3 space-y-3">
                            <SecondaryBtn class="bg-secondaryBackground">Step 2</SecondaryBtn>

                            <h3 class="text-lg font-bold">Go to Our Website Link</h3>

                            <p class="text-base font-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam perspiciatis animi pariatur reiciendis dolor. Quod earum illum recusandae aut tempore. Similique, quos voluptate natus tempore fuga possimus quaerat architecto culpa.</p>

                        </div>
                        
                        <div class="flex justify-center items-center md:w-full md:h-full md:mx-auto">
                            <img src="img/blog-image.png" alt="">
                        </div>

                       
                    </div>


                </div>
            </div> -->
        </div>
    </section>

    <Footer/>
</template>


<style>
    @import "../../css/guide.css";
    </style>