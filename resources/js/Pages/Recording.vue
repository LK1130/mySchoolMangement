<script setup>

import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Header from '../Layouts/Header.vue';
import SecondaryButtonVue from '../Components/SecondaryButton.vue';
import Footer from '../Layouts/Footer.vue';
import SecondaryBtn from '../Components/SecondaryBtn.vue';
import DateButton from '../Components/DateButton.vue';




</script>
    
<template>

    <Head title="Exbrain" />
    <Header/>

    <section>
        <div class="relative  w-full h-full bg-primaryBackground z-20 mx-auto">
            <div class="flex items-center p-6 mx-3 space-x-1 text-whiteTextColor ">
                <h1 class="text-xl font-bold ">N5</h1>
                <ion-icon name="chevron-forward-outline" class="text-base font-bold"></ion-icon>
                <p class="text-xl font-bold">Batch <span class="text-xl font-bold">18</span></p>
                <span class="flex  text-xs m-2 p-1">(18:00 - 20:00)</span>
            </div>


            <h3 class="absolute z-0 myschool">My School</h3>

            <div class="container flex md:flex-row flex-col   justify-around  md:space-x-10  md:p-24 p-20 z-20">
                <div class="video-container container  mx-auto z-20 md:mx-24 ">
                    <img src="img/video.png" alt="">
                </div>

                <div class="container sm:mt-3  mx-auto space-y-3 recs z-20">
                    <div class="flex  space-x-5">
                        <DateButton>
                            2022/09/30
                        </DateButton>
                        <SecondaryBtn>
                            New

                        </SecondaryBtn>

                    </div>
                    <p class="md:text-5xl sm:text-base text-white font-bold">Hiragana Day 1</p>
                    <p class="md:text-sm font-thin text-white f mt-2">Lorem ipsum dolor, sit amet consectetur
                        adipisicing elit. Eos minima voluptates voluptatum omnis ipsum veritatis ea, iure consectetur
                        veniam! Cum quae animi assumenda illo ad unde, nostrum facere at porro! Lorem ipsum dolor sit
                        amet consectetur adipisicing elit. Error animi ducimus voluptates! Vitae blanditiis ullam
                        necessitatibus provident dolor non esse odit minus quod quidem. Suscipit dolorum ex assumenda
                        qui esse.</p>
                </div>
            </div>
        </div>


    </section>


    <section>

        <div class="relative container h-96 mx-auto space-y-3">
            <div class="flex  justify-center p-10 ">
               
                <h3 class="text-standard font-bold title" >Recording Video Lists</h3>
            </div>

            <div
                class="relative  md:flex  md:flex-row sm:flex  sm:flex-col space-y-5  justify-around items-center mx-auto smallsize ">
                <div class="hidden md:block mt-4">
                    <span>30 <span>Videos</span> </span>
                </div>


                <div class="flex">
                    <input type="text" id="search-navbar"
                        class="block   md:w-96 md:h-8  text-gray-900  rounded-l-lg border border-gray-300 sm:text-sm  video"
                        placeholder="Video Title">
                    <button class="btn md:w-20 md:h-8  text-white rounded-r-lg searches">Search</button>
                </div>

                <div class="relative ">
                    <div
                        class="flex absolute inset-y-0 right-2  justify-end  items-center pl-3 pointer-events-none pointers">
                        <ion-icon name="caret-down-outline" class="ion text-base"></ion-icon>
                    </div>
                    <input datepicker type="text"
                        class="bg-gray-50  text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500  md:w-24   dark:bg-gray-700  datepick"
                        placeholder="By Date">
                </div>
                <div class="md:hidden sm:block mt-4">
                    <span>30 <span>Videos</span> </span>
                </div>


            </div>

        </div>
    </section>


</template> 
    
   
<style>
@import "../../css/video.css";
</style>
    