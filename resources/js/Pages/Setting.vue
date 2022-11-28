<script setup>

import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Header from '../Layouts/Header.vue';
import Footer from '../Layouts/Footer.vue';
import { ref } from 'vue';

const reload = ref(0);

const forceRerender = () => {
    reload.value += 1;
};

const darkMode = stringToBoolean(localStorage.getItem("darkMode"));

let dark = false;
let light = false;

if (darkMode) {
    dark = true;
    light = false;
} else {
    light = true;
    dark = false;
}

function darkOn() {
    html.classList.add("dark");
    localStorage.setItem("darkMode", true);
    forceRerender();
}

function lightOn() {
    html.classList.remove("dark");
    localStorage.setItem("darkMode", false);
    forceRerender();
}



</script>

<template>

    <Head title="Setting" />
    <Header :key="reload" />

    <section class=" p-4 md:p-12">
        <div class="container mx-auto h-screen">
            <p class="text-primaryBackground font-semibold text-lg uppercase dark:text-white">Setting</p>

            <div class="container mx-auto flex md:flex-col">

                <ul class="flex  flex-wrap md:flex-nowrap  md:pl-10 pl-1 py-2 dark:text-white">


                    <li class="flex w-full font-bold my-1">
                        Language
                    </li>
                    <li class="flex w-full  my-1">
                        <input type="radio" name="language" id="language" class="rounded-full  mr-1 mx-1 md:mr-3  mt-1"
                            checked>
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



                <ul class="flex  flex-wrap md:flex-nowrap  md:pl-10 pl-1 py-2 dark:text-white">


                    <li class="flex w-full font-bold my-1">
                        Mode
                    </li>
                    <li class="flex w-full  my-1">
                        <input type="radio" name="mode" id="dark" class="rounded-full mr-1 mx-1 md:mr-3  mt-1 dark"
                            @click="darkOn" :checked="dark">
                        <label for="mode">Dark</label>
                    </li>

                    <li class="flex  w-full  my-1">
                        <input type="radio" name="mode" id="light" class="rounded-full mr-1 mx-1 md:mr-3 mt-1 light"
                            @click="lightOn" :checked="light">
                        <label for="mode">Light</label>
                    </li>
                    <li class="flex w-full  my-1">

                    </li>

                </ul>
            </div>
        </div>
    </section>

    <Footer />
</template>

    

<style>
@import "../../css/setting.css";
</style>