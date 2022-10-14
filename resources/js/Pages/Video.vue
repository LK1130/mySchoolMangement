<script setup>

import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Header from '../Layouts/Header.vue';

</script>

<template>
    <Head title="Video" />
    <Header />
    <!-- Video Show -->
    <section>
        <div class="w-full bg-black">
            <img src="img/video.png" class="w-2/3 m-auto" alt="">
        </div>
    </section>

    <section class="bg-primaryBackground ">
            <div class="container py-4 mx-auto">
                <p class="md:text-4xl  text-lg text-white font-bold md:mt-10 px-3  md:px-0">Hiragana Day 1</p>

                <div class="md:flex md:flex-row justify-around md:mt-4 mt-2 px-3 md:px-0 ">
                    <div class="container flex justify-center mx-auto space-y-3">
                        <p
                            class="md:text-sm  text-xs text-justify md:pr-10 
                             md:pb-10 font-semibold  md:border-r-2  opacity-70 text-white mx-auto ">
                            Lorem ipsum dolor, sit amet consectetur
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

                    <div class="w-2/3 md:w-6/12 md:mx-auto  md:mt-0 mt-10">
                        <div class="md:flex md:justify-center ">
                            <p class="md:text-xl text-base text-white font-bold ">Source Download</p>
                        </div>
                        <ul class=" md:w-30 w-full flex justify-between md:items-center md:mx-10 md:mt-5 mt-3">
                            <li class="md:w-16 text-white md:text-standard text-base">
                            <ion-icon name="newspaper-outline"></ion-icon>
                            </li>
                            <li class="md:w-24  text-white md:text-base text-sm ">Lecture 1</li>
                            <li class="md:w-20 text-white md:text-standard text-base">
                                <ion-icon name="cloud-download-outline"></ion-icon>
                            </li>


                        </ul>

                        <ul class=" md:w-30 w-full flex justify-between md:items-center md:mx-10 md:mt-5 mt-3">
                            <li class="md:w-16 text-white md:text-standard text-base">
                            <ion-icon name="newspaper-outline"></ion-icon>
                            </li>
                            <li class="md:w-24  text-white md:text-base text-sm">Lecture 2</li>
                            <li class="md:w-20 text-white md:text-standard text-base">
                                <ion-icon name="cloud-download-outline"></ion-icon>
                            </li>


                        </ul>


                        <ul class=" md:w-30 w-full flex justify-between md:items-center md:mx-10 md:mt-5 mt-3">
                            <li class="md:w-16 text-white md:text-standard text-base">
                            <ion-icon name="newspaper-outline"></ion-icon>
                            </li>
                            <li class="md:w-24  text-white md:text-base text-sm">Lecture 3</li>
                            <li class="md:w-20 text-white md:text-standard text-base">
                                <ion-icon name="cloud-download-outline"></ion-icon>
                            </li>


                        </ul>


                        <ul class=" md:w-30 w-full flex justify-between md:items-center md:mx-10 md:mt-5 mt-3 mb-5">
                            <li class="md:w-16 text-white md:text-standard text-base">
                            <ion-icon name="newspaper-outline"></ion-icon>
                            </li>
                            <li class="md:w-24  text-white md:text-base text-sm">Lecture 4</li>
                            <li class="md:w-20 text-white md:text-standard text-base">
                                <ion-icon name="cloud-download-outline"></ion-icon>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    </section>
</template>
<style>
@import "../../css/video.css";
</style>