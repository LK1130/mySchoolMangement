<script setup>

import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Header from '../Layouts/Header.vue';
import Footer from '../Layouts/Footer.vue';



</script>

<template>

    <Head title="Setting" />
    <Header />

    <section>
        <div class="container mx-auto h-screen p-3">
            <p class="text-primaryBackground font-semibold p-2 text-lg uppercase ">Setting</p>

            <div class="container mx-auto flex md:flex-col">

                <ul class="flex  flex-wrap md:flex-nowrap  md:pl-10 pl-1 py-2">


                    <li class="flex w-full hlink font-bold my-1">
                        Language
                    </li>
                    <li class="flex w-full  my-1">
                        <input type="radio" name="language" id="language"  class="rounded-full  mr-1 mx-1 md:mr-3  mt-1" checked>
                        <label for="language">English</label>
                    </li>
                    <li class="flex  w-full  my-1">
                        <input type="radio" name="language" id="language" class="rounded-full mr-1 mx-1 md:mr-3 mt-1">
                        <label for="language">Myanmar</label>
                    </li>
                    <li class="flex  w-full  my-1">
                        <input type="radio" name="language" id="language" class="rounded-full mr-1 mx-1 md:mr-3 mt-1 ">
                        <label for="language">Japanese</label>
                    </li>
                </ul>



                <ul class="flex  flex-wrap md:flex-nowrap  md:pl-10 pl-1 py-2">


                    <li class="flex w-full hlink font-bold my-1">
                        Mode
                    </li>
                    <li class="flex w-full  my-1">
                        <input type="radio" name="mode" id="mode" class="rounded-full mr-1 mx-1 md:mr-3  mt-1" checked>
                        <label for="mode">Dark</label>
                    </li>
                    
                    <li class="flex  w-full  my-1">
                        <input type="radio" name="mode" id="mode" class="rounded-full mr-1 mx-1 md:mr-3 mt-1">
                        <label for="mode">Light</label>
                    </li>
                    <li class="flex w-full  my-1">
                      
                    </li>
                   
                </ul>
            </div>
        </div>
    </section>

    <Footer/>
</template>

    

<style>
@import "../../css/setting.css";
</style>