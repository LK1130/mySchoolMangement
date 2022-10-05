<script setup>

import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Header from '../Layouts/Header.vue';
import SecondaryBtn from '../Components/SecondaryBtn.vue';
import Footer from '../Layouts/Footer.vue';

</script>

<template>

    <Head title='Guide' />
    <Header />

    <section>
        <div class="container mx-auto">
            <div class="flex ">
                <p class="text-primaryBackground font-semibold p-2 text-lg uppercase underline">Guide</p>
                <div class="flex w-full">
                    <ul class="flex  w-full  md:pl-24 pl-1 py-2">
                        
                        <li class="flex w-full hlink underline my-1">
                            <a href="#blog1" class="hlink-text guide " aria-current="page">How to Login To Our System</a>
                        </li>
                        <li class="flex  w-full hlink underline my-1">
                            <a href="#" class="hlink-text guide" aria-current="page">How to Watch Recording Video</a>
                        </li>
                        <li class="flex  w-full  hlink  underline my-1">
                            <a href="#" class="hlink-text guide" aria-current="page">How to Contact Our Organization</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Blog 1 -->
            <div class="container mx-auto p-8">
                <div id="blog1" class="md:w-full guideblog">
                    <h1 class="text-standard font-bold md:mx-10 mx-auto mb-3">1. How to Login To Our System</h1>

                    <div class="flex md:flex-row sm:flex-col  justify-between items-center md:w-full sm:w-full mx-auto  step">
                        <div class="flex justify-center items-center md:w-full md:h-full sm:w-full sm:h-full md:mx-auto image-container">
                            <img src="img/blog-image.png" class="images"  alt="">
                        </div>

                        <div class="flex flex-col md:w-full md:mx-auto space-y-3">
                            <SecondaryBtn class="bg-primaryBackground ">Step 1</SecondaryBtn>

                            <h3 class="text-lg font-bold">Go to Our Website Link</h3>

                            <p class="text-base font-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam perspiciatis animi pariatur reiciendis dolor. Quod earum illum recusandae aut tempore. Similique, quos voluptate natus tempore fuga possimus quaerat architecto culpa.</p>

                        </div>
                    </div>



                    <div class="flex  justify-between md:w-full mt-6 mx-auto step2">
                        
                        <div class="flex flex-col md:w-full md:mx-auto md:mt-0 mt-3 space-y-3">
                            <SecondaryBtn class="bg-primaryBackground">Step 2</SecondaryBtn>

                            <h3 class="text-lg font-bold">Go to Our Website Link</h3>

                            <p class="text-base font-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam perspiciatis animi pariatur reiciendis dolor. Quod earum illum recusandae aut tempore. Similique, quos voluptate natus tempore fuga possimus quaerat architecto culpa.</p>

                        </div>
                        
                        <div class="flex justify-center items-center md:w-full md:h-full md:mx-auto">
                            <img src="img/blog-image.png" alt="">
                        </div>

                       
                    </div>


                </div>
            </div>


            <div class="w-full flex justify-center m-3">
                    <div class="bg-black w-96 h-0.5"></div>
                </div>

            <!-- Blog 2 -->

            <div class="container mx-auto p-8">
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
            </div>
        </div>
    </section>

    <Footer/>
</template>


<style>
    @import "../../css/guide.css";
    </style>