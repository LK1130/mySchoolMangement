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

console.log(props.privacy_policys);

</script>
                
<template>

    <Head title="Privacy Policy" />
    <Header />

    <section class="p-5 md:p-12">
        <h1 class="text-xl font-bold text-primaryBackground dark:text-whiteTextColor">Privacy Policy</h1>

        <div class="flex flex-col p-2 md:p-5" v-for="privacy_policy in privacy_policys.data" >
            <div class="flex flex-col md:flex-row md:items-center justify-between">
                <h1 class="text-xl md:text-3xl font-semibold dark:text-whiteTextColor">{{ privacy_policy.p_title }}</h1>
                <p class="text-sm md:text-base font-semibold text-primaryBackground dark:text-secondaryBackground">Updated:{{
                moment(privacy_policy.updated_at).format("YYYY/MM/DD") }}</p>
            </div>

            <div class="flex flex-col p-0 md:p-5 space-y-8 my-5">
                <p class="dark:text-cancelBackground">
                    {{ privacy_policy.p_description }}
                </p>
                <div class="w-full flex justify-center">
                    <div class="dark:bg-white bg-black opacity-40 w-96 h-0.5"></div>
                </div>
            </div>
        </div>



    </section>

    <div class="flex justify-center items-center mb-10">
        <Pagination :links="privacy_policys.links">
        </Pagination>
    </div>

    <Footer />
</template> 
 
<style>
@import "../../css/privacyPolicy.css";
</style>
                