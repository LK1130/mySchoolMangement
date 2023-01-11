<script setup>

import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Header from '../Layouts/Header.vue';
import Footer from '../Layouts/Footer.vue';
import SecondaryBtn from '../Components/SecondaryBtn.vue';
import DateButton from '../Components/DateButton.vue';
import Pagination from '../Components/Pagination.vue';
import Dropdown from '../Components/Dropdown.vue';
import moment from 'moment';
import { ref } from 'vue';

const props = defineProps({
    privacy_policys: {
        type: Object
    }
})

// console.log(props.privacy_policys);

const display = ref(false);

const displayButton = () => {
    window.addEventListener('scroll', () => {
        if (window.scrollY > 100) {
            display.value = true;
        } else {
            display.value = false;
        }
    });
};

const toTop = () => {
    window.scroll({
        top: 0,
        left: 0,
        behavior: 'smooth'
    });
};

displayButton();

</script>

<template>
    <button
        class="py-3 px-3 bg-secondaryBackground dark:bg-whiteTextColor transition-all duration-1000 text-whiteTextColor dark:text-primaryBackground text-5xl rounded-full rotate-90 upKey"
        v-show="display" @click="toTop">&#171;</button>


    <Head title="Privacy Policy" />
    <Header />

    <section class="p-5 md:p-12">
        <h1 class="text-xl font-bold text-primaryBackground dark:text-whiteTextColor">Privacy Policy</h1>

        <div class="flex flex-col p-2 md:p-5" v-for="privacy_policy in privacy_policys.data">
            <div class="flex flex-col md:flex-row md:items-center justify-between">
                <h1 class="text-xl md:text-3xl font-semibold dark:text-whiteTextColor">{{ privacy_policy.p_title }}</h1>
                <p class="text-sm md:text-base font-semibold text-primaryBackground dark:text-secondaryBackground">
                    Updated:{{
                        moment(privacy_policy.updated_at).format("YYYY/MM/DD")
                    }}</p>
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


        <div class="flex justify-center items-center mb-10">
            <Pagination :links="privacy_policys.links">
            </Pagination>
        </div>
    </section>



    <Footer />
</template> 
 
<style>
@import "../../css/privacyPolicy.css";
</style>
