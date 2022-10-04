<!-- <script setup>
import { Head } from '@inertiajs/inertia-vue3';
import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';

defineProps({
    policy: String,
});
</script>

<template>
    <Head title="Privacy Policy" />

    <div class="font-sans text-gray-900 antialiased">
        <div class="pt-4 bg-gray-100">
            <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
                <div>
                    <AuthenticationCardLogo />
                </div>

                <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose" v-html="policy" />
            </div>
        </div>
    </div>
</template> -->

<script setup>

import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Header from '../Layouts/Header.vue';
import Footer from '../Layouts/Footer.vue';
import SecondaryBtn from '../Components/SecondaryBtn.vue';
import DateButton from '../Components/DateButton.vue';
import Pagination from '../Components/Pagination.vue';
import Dropdown from '../Components/Dropdown.vue';


</script>
                
<template>

    <Head title="BlogView" />
    <Header />

    <section class=" p-12">
        <h1 class="text-lg md:text-xl font-bold text-primaryBackground">Privacy Policy</h1>

        <div class="flex flex-col p-2 md:p-5">
            <div class="flex flex-row items-center justify-between">
                <h1 class="text-xl md:text-3xl font-bold">Japanese Class Rule</h1>
                <p class="text-sm md:text-base font-bold text-primaryBackground">Updated Date :2022/10/10</p>
            </div>

            <div class="flex flex-col p-0 md:p-5 space-y-8 my-5">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet ducimus ipsa saepe autem dolorem
                    consequatur incidunt omnis accusamus, in eaque architecto cumque quod, nam porro quis quasi adipisci
                    inventore cum repellendus recusandae iste rem beatae. Cumque iste ad temporibus recusandae harum
                    repellat beatae maxime mollitia delectus, labore nihil quidem ab vel quasi. Pariatur eligendi
                    numquam suscipit repellat. Hic eius, rerum, ex maxime odit in est veniam reprehenderit quidem
                    laborum incidunt atque quasi dolores, labore dolorem architecto. Rerum suscipit dolor sit.
                    Reiciendis cum magnam temporibus eum! Officia, doloribus nemo error voluptatibus, porro ipsum
                    assumenda inventore, hic pariatur non nisi fugiat recusandae.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet ducimus ipsa saepe autem dolorem
                    consequatur incidunt omnis accusamus, in eaque architecto cumque quod, nam porro quis quasi adipisci
                    inventore cum repellendus recusandae iste rem beatae. Cumque iste ad temporibus recusandae harum
                    repellat beatae maxime mollitia delectus, labore nihil quidem ab vel quasi. Pariatur eligendi
                    numquam suscipit repellat. Hic eius, rerum, ex maxime odit in est veniam reprehenderit quidem
                    laborum incidunt atque quasi dolores, labore dolorem architecto. Rerum suscipit dolor sit.
                    Reiciendis cum magnam temporibus eum! Officia, doloribus nemo error voluptatibus, porro ipsum
                    assumenda inventore, hic pariatur non nisi fugiat recusandae.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet ducimus ipsa saepe autem dolorem
                    consequatur incidunt omnis accusamus, in eaque architecto cumque quod, nam porro quis quasi adipisci
                    inventore cum repellendus recusandae iste rem beatae. Cumque iste ad temporibus recusandae harum
                    repellat beatae maxime mollitia delectus, labore nihil quidem ab vel quasi. Pariatur eligendi
                    numquam suscipit repellat. Hic eius, rerum, ex maxime odit in est veniam reprehenderit quidem
                    laborum incidunt atque quasi dolores, labore dolorem architecto. Rerum suscipit dolor sit.
                    Reiciendis cum magnam temporibus eum! Officia, doloribus nemo error voluptatibus, porro ipsum
                    assumenda inventore, hic pariatur non nisi fugiat recusandae.
                </p>
                <div class="w-full flex justify-center">
                    <div class="bg-black w-96 h-0.5"></div>
                </div>
            </div>
        </div>

        <div class="flex flex-col p-2 md:p-5">
            <div class="flex flex-row items-center justify-between">
                <h1 class="text-xl md:text-3xl font-bold">Java SE Class Rule</h1>
                <p class="text-sm md:text-base font-bold text-primaryBackground">Updated Date :2022/10/10</p>
            </div>

            <div class="flex flex-col p-0 md:p-5 space-y-8 my-5">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet ducimus ipsa saepe autem dolorem
                    consequatur incidunt omnis accusamus, in eaque architecto cumque quod, nam porro quis quasi adipisci
                    inventore cum repellendus recusandae iste rem beatae. Cumque iste ad temporibus recusandae harum
                    repellat beatae maxime mollitia delectus, labore nihil quidem ab vel quasi. Pariatur eligendi
                    numquam suscipit repellat. Hic eius, rerum, ex maxime odit in est veniam reprehenderit quidem
                    laborum incidunt atque quasi dolores, labore dolorem architecto. Rerum suscipit dolor sit.
                    Reiciendis cum magnam temporibus eum! Officia, doloribus nemo error voluptatibus, porro ipsum
                    assumenda inventore, hic pariatur non nisi fugiat recusandae.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet ducimus ipsa saepe autem dolorem
                    consequatur incidunt omnis accusamus, in eaque architecto cumque quod, nam porro quis quasi adipisci
                    inventore cum repellendus recusandae iste rem beatae. Cumque iste ad temporibus recusandae harum
                    repellat beatae maxime mollitia delectus, labore nihil quidem ab vel quasi. Pariatur eligendi
                    numquam suscipit repellat. Hic eius, rerum, ex maxime odit in est veniam reprehenderit quidem
                    laborum incidunt atque quasi dolores, labore dolorem architecto. Rerum suscipit dolor sit.
                    Reiciendis cum magnam temporibus eum! Officia, doloribus nemo error voluptatibus, porro ipsum
                    assumenda inventore, hic pariatur non nisi fugiat recusandae.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet ducimus ipsa saepe autem dolorem
                    consequatur incidunt omnis accusamus, in eaque architecto cumque quod, nam porro quis quasi adipisci
                    inventore cum repellendus recusandae iste rem beatae. Cumque iste ad temporibus recusandae harum
                    repellat beatae maxime mollitia delectus, labore nihil quidem ab vel quasi. Pariatur eligendi
                    numquam suscipit repellat. Hic eius, rerum, ex maxime odit in est veniam reprehenderit quidem
                    laborum incidunt atque quasi dolores, labore dolorem architecto. Rerum suscipit dolor sit.
                    Reiciendis cum magnam temporibus eum! Officia, doloribus nemo error voluptatibus, porro ipsum
                    assumenda inventore, hic pariatur non nisi fugiat recusandae.
                </p>
                <div class="w-full flex justify-center">
                    <div class="bg-black w-96 h-0.5"></div>
                </div>
            </div>
        </div>
    </section>

    <div class="flex justify-center items-center mb-10">
        <Pagination>
        </Pagination>
    </div>

    <Footer />
</template> 
                
               
<style>
@import "../../css/privacyPolicy.css";
</style>
                