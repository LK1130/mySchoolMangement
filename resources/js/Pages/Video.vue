<script setup>

import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Header from '../Layouts/Header.vue';


</script>


<template>

    <Head title="Video" />

    <Header />

    <!-- Video Show -->
    <section>
        <div class="w-full h-full video-bg">
            <img src="img/video.png" alt="">
        </div>


    </section>

    <section class="bg-primaryBackground ">

        <div class="blog2">
            <div class="container p-4">
                <p class="md:text-4xl  text-lg text-white font-bold md:mt-10 md:mx-10 ">Hiragana Day 1</p>

                <div class="md:flex md:fle-row justify-around items-center">
                    <div class="container flex justify-center mx-auto space-y-3">
                        <p class="md:text-sm  text-xs text-justify md:pl-5 md:pr-10 md:px-10 md:pb-10   md:border-r-2  opacity-60 text-white md:mt-5 mx-auto ">Lorem ipsum dolor, sit amet consectetur
                            adipisicing elit. Eos minima voluptates voluptatum omnis ipsum veritatis ea, iure
                            consectetur
                            veniam! Cum quae animi assumenda illo ad unde, nostrum facere at porro! Lorem ipsum dolor
                            sit
                            amet consectetur adipisicing elit. Error animi ducimus voluptates! Vitae blanditiis ullam
                            necessitatibus provident dolor non esse odit minus quod quidem. Suscipit dolorum ex
                            assumenda
                            qui esse Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem libero provident,
                            sint, temporibus consectetur ea distinctio itaque fugiat illo labore eveniet qui. Asperiores
                            rerum provident, nostrum hic omnis ab laboriosam.</p>
                    </div>

                    <div class="w-6/12 mx-auto md:mt-0 mt-5">
                       <div class="md:flex md:justify-center mr-5 ">
                        <p class="md:text-xl text-base text-white font-bold ">Source Download</p>
                       </div>
                       <ul class=" md:w-30 w-full flex justify-between md:items-center md:mx-10 md:mt-5 mt-3">
                        <li class="md:w-16 text-white md:text-standard text-base"><ion-icon name="document-outline"></ion-icon></li>
                        <li class="md:w-24  text-white md:text-base text-sm">Lecture 1</li>
                        <li class="md:w-20 text-white md:text-standard text-base"><ion-icon name="cloud-download-outline"></ion-icon></li>

                        
                       </ul>

                       <ul class=" md:w-30 w-full flex justify-between md:items-center md:mx-10 md:mt-5 mt-3">
                        <li class="md:w-16 text-white md:text-standard text-base"><ion-icon name="document-outline"></ion-icon></li>
                        <li class="md:w-24  text-white md:text-base text-sm">Lecture 2</li>
                        <li class="md:w-20 text-white md:text-standard text-base"><ion-icon name="cloud-download-outline"></ion-icon></li>

                        
                       </ul>


                       <ul class=" md:w-30 w-full flex justify-between md:items-center md:mx-10 md:mt-5 mt-3">
                        <li class="md:w-16 text-white md:text-standard text-base"><ion-icon name="document-outline"></ion-icon></li>
                        <li class="md:w-24  text-white md:text-base text-sm">Lecture 3</li>
                        <li class="md:w-20 text-white md:text-standard text-base"><ion-icon name="cloud-download-outline"></ion-icon></li>

                        
                       </ul>


                       <ul class=" md:w-30 w-full flex justify-between md:items-center md:mx-10 md:mt-5 mt-3 mb-5">
                        <li class="md:w-16 text-white md:text-standard text-base"><ion-icon name="document-outline"></ion-icon></li>
                        <li class="md:w-24  text-white md:text-base text-sm">Lecture 4</li>
                        <li class="md:w-20 text-white md:text-standard text-base"><ion-icon name="cloud-download-outline"></ion-icon></li>

                        
                       </ul>


                      

                      

                     


                       
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="container w-full h-full">


            <p class="md:text-4xl  sm:text-base text-white font-bold ">Hiragana Day 1</p>

            <div class="w-full flex  justify-between ">

                <div class="">
                    <p class="md:text-sm    opacity-60 text-white ">Lorem ipsum dolor, sit amet consectetur
                        adipisicing elit. Eos minima voluptates voluptatum omnis ipsum veritatis ea, iure consectetur
                        veniam! Cum quae animi assumenda illo ad unde, nostrum facere at porro! Lorem ipsum dolor sit
                        amet consectetur adipisicing elit. Error animi ducimus voluptates! Vitae blanditiis ullam
                        necessitatibus provident dolor non esse odit minus quod quidem. Suscipit dolorum ex assumenda
                        qui esse Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem libero provident,
                        sint, temporibus consectetur ea distinctio itaque fugiat illo labore eveniet qui. Asperiores
                        rerum provident, nostrum hic omnis ab laboriosam.</p>
                </div>

                <div class="">
                    <p class="md:text-xl text-white font-bold">Source Download</p>
                    <div class=""></div>
                </div>
            </div>





        </div> -->
    </section>
</template>



 
<style>
@import "../../css/video.css";
</style>