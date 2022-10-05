<script setup>

import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Header from '../Layouts/Header.vue';


</script>

<template>

    <Head title="Setting" />
    <Header />

    <section>
        <div class="container mx-auto">
            <p class="text-primaryBackground font-semibold p-2 text-lg uppercase ">Setting</p>

            <div class="container mx-auto">

                <ul class="flex  w-full  md:pl-24 pl-1 py-2">


                    <li class="flex w-full hlink  my-1">
                        <a href="#blog1" class="hlink-text guide " aria-current="page">Language</a>
                    </li>
                    <li class="flex w-full hlink  my-1">
                        <input type="checkbox" name="" id="">
                        <label for="">English</label>
                    </li>
                    <li class="flex  w-full hlink  my-1">
                        <input type="checkbox" name="" id="">
                        <label for="">English</label>
                    </li>
                    <li class="flex  w-full  hlink  my-1">
                        <input type="checkbox" name="" id="">
                        <label for="">English</label>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</template>