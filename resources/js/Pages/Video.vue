<script setup>

import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Header from '../Layouts/Header.vue';


</script>


<template>
       <Head title="Video" />

       <Header />

       <!-- Video Show -->
       <section>
        <div class="video-bg">
            <img src="img/video.png" alt="">
        </div>

        
       </section>

       <section>
            <div class="w-full h-full bg-primaryBackground">
                <div class="container    w-full flex justify-around p-3  mx-auto">
                   <div class="w-full">
                    <p class="md:text-5xl sm:text-base text-white font-bold">Hiragana Day 1</p>
                    <p class="md:text-sm opacity-60 text-white mt-2">Lorem ipsum dolor, sit amet consectetur
                        adipisicing elit. Eos minima voluptates voluptatum omnis ipsum veritatis ea, iure consectetur
                        veniam! Cum quae animi assumenda illo ad unde, nostrum facere at porro! Lorem ipsum dolor sit
                        amet consectetur adipisicing elit. Error animi ducimus voluptates! Vitae blanditiis ullam
                        necessitatibus provident dolor non esse odit minus quod quidem. Suscipit dolorum ex assumenda
                        qui esse.</p>
                   </div>

                   <div></div>
                   <div>
                    <p>Source Download</p>
                    <div class=""></div>
                   </div>
                </div>
            </div>
       </section>
</template>



 
<style>
    @import "../../css/video.css";
</style>