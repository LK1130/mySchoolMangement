<script setup>

import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Header from '../Layouts/Header.vue';
import SecondaryBtn from '../Components/SecondaryBtn.vue';
import Footer from '../Layouts/Footer.vue';
import { stringify } from 'qs';

let count = 1;
const props = defineProps({
    guides: {
        type: Object
    }
});
console.log(props.guides);
</script>

<template>
    <Head title='Guide' />
    <Header />

    <section>
        <div class="p-4 md:p-12 mx-auto">
            <div class="flex mb-5">
                <p class="text-primaryBackground dark:text-whiteTextColor text-xl font-bold">Guide</p>
                <div class="flex w-full  ">
                    <ul v-for="guide in guides" :key="guide.id" class="flex  w-full  md:pl-24 pl-1   ">
                        <li class="flex w-full hlink  my-1 ">
                            <a :href="'#'+guide.id" class="hlink-text underline md:block hidden dark:text-white" aria-current="page">{{
                                    guide.g_title
                            }}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div v-for="guide in guides" :key="guide.id">
                <p :id="guide.id" class="text-black dark:text-whiteTextColor text-3xl text-center font-semibold">
                    {{ count++ }}.{{guide.g_title}}
                </p>

       
                 <div v-for="guideStep in guide.guide_step" :key="guideStep.id">
                    <div 
                     class="flex justify-center flex-col md:items-center items-start w-full my-8 lg:px-14" 
                     :class="(guideStep.step / 2 == 1) ? 'md:flex-row-reverse' : 'md:flex-row'">
                     
                     <div class="text-center flex justify-center mx-auto ">
                            <img :src="guideStep.step_photo" class="text-center md:w-72 object-fill"  alt="">
                        </div>
                        <div class="w-full md:w-1/2 lg:w-4/6 mx-auto my-10 md:my-0 md:p-0 px-10">
                            <div class=" w-16 rounded-lg text-whiteTextColor text-sm text-center"
                            :class="(count%2 == 0) ? 'bg-primaryBackground' :'bg-secondaryBackground'"
                            >
                                Step {{ guideStep.step }}</div>
                            <div class="text-xl font-semibold mb-2 mt-1 dark:text-white">{{ guideStep.step_title }}</div>
                            <div class="opacity-50 text-sm font-semibold dark:text-white">{{ guideStep.step_description }}</div>
                        </div>
                    </div>
                </div>
                    <div class="w-1/2 mx-auto bg-slate-500  opacity-50 my-14 h-0.5"></div>


            </div>
        </div>
    </section>

    <Footer />
</template>