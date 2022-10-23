<script setup>

import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Header from '../Layouts/Header.vue';
import Footer from '../Layouts/Footer.vue';
import SecondaryBtn from '../Components/SecondaryBtn.vue';
import DateButton from '../Components/DateButton.vue';
import Pagination from '../Components/Pagination.vue';
import Dropdown from '../Components/Dropdown.vue';
import moment from 'moment';

const props = defineProps({
    privacy_policys: {
        type: Object
    }
})

</script>
                
<template>

    <Head title="Privacy Policy" />
    <Header />

    <section class=" p-12">
        <h1 class="text-lg md:text-xl font-bold text-primaryBackground">Privacy Policy</h1>

        <div class="flex flex-col p-2 md:p-5" v-for="privacy_policy in privacy_policys" :key="privacy_policy.id">
            <div class="flex flex-row items-center justify-between">
                <h1 class="text-xl md:text-3xl font-bold">{{ privacy_policy.p_title }}</h1>
                <p class="text-sm md:text-base font-bold text-primaryBackground">Updated Date :{{
                moment(privacy_policy.updated_at).format("YYYY/MM/DD") }}</p>
            </div>

            <div class="flex flex-col p-0 md:p-5 space-y-8 my-5">
                <p>
                    {{ privacy_policy.p_description }}
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
                