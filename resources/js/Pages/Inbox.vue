<script setup>

import { ref } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Header from '../Layouts/Header.vue';
import SecondaryBtn from '../Components/SecondaryBtn.vue';
import Pagination from '../Components/Pagination.vue';
import Footer from '../Layouts/Footer.vue';
import moment from 'moment';

const props = defineProps({
    messages: {
        type: Object
    },
    checked: {
        type: Array
    }
});

let selectedItems = [];
let collapseItem = ref(true);

/**
 * Check for user choice
 */
const checkboxs = () => selectedItems = (props.checked[0] == '') ? ref([1, 2, 3]) : ref(props.checked);


/**
 * filter for checkbox
 */
const filter = () => Inertia.get(route("inbox.index", selectedItems.value.join(",")));

checkboxs();

const collapse = (id) => {
    collapseItem.value = id
}

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
    <button class="py-3 px-3 bg-secondaryBackground dark:bg-whiteTextColor transition-all duration-1000 text-whiteTextColor dark:text-primaryBackground text-5xl rounded-full rotate-90 upKey" v-show="display" @click="toTop">&#171;</button>


    <Head title="Inbox" />

    <Header />

    <section class="p-4 md:p-12 overflow-x-hidden">
        <div class="container mx-auto">
            <div class="text-xl font-bold text-primaryBackground dark:text-whiteTextColor">Inbox</div>

            <div class="space-x-3 m-5 text-center md:text-start mb-10 dark:text-whiteTextColor">
                <input type="checkbox" name="info" id="info" v-on:change="filter" v-model="selectedItems" value="1"
                    class="p-2 rounded-md text-primaryBackground">
                <label for="info" class="text-sm md:text-base">Information</label>

                <input type="checkbox" name="message" id="message" v-on:change="filter" v-model="selectedItems"
                    value="2" class="p-2 rounded-md text-secondaryBackground">
                <label for="message" class="text-sm md:text-base">Direct Message</label>

                <input type="checkbox" name="alert" id="alert" v-on:change="filter" v-model="selectedItems" value="3"
                    class="p-2 rounded-md text-tertiaryBackground">
                <label for="alert" class="text-sm md:text-base">Alert</label>
            </div>

            <!-- Info,DMessage,Alert -->
            <div class="relative w-full mx-auto  dark:bg-textWhiteColor px-5" v-for="message in messages.data"
                @click="collapse(message.id)">
                <div class="relative py-4 md:px-5 md:py-5    border-slate-400 drop-shadow-md flex justify-between items-center mt-5  md:mt-10 
                    shadow-lg rounded-lg overflow-hidden  dark:bg-darkPrimaryBackground dark:text-whiteTextColor"
                    :class="{
                        'info': (message.m_category == 1),
                        'message': (message.m_category == 2),
                        'alert': (message.m_category == 3)
                    }">
                    <div class="flex w-full  items-center  md:mx-5 mailbox  ">
                        <ion-icon name="mail-open-outline" class="hidden md:block flex text-3xl mx-3"></ion-icon>
                        <div class="flex w-full text-sm md:text-lg font-semibold font-family  mx-5">{{
                            message.m_title
                        }}</div>
                        <div
                            class="flex w-auto  text-xs md:text-base font-semibold text-tertiaryBackground dark:text-secondaryBackground mx-5">
                            {{ moment(message.created_at).format("YYYY/MM/DD(HH:mm)") }}</div>
                    </div>
                </div>
                <div class="transition-all duration-500  bg-white border-slate-400 drop-shadow-lg dark:bg-darkSecondaryBackground dark:text-whiteTextColor rounded-lg"
                    :class="{
                        'slideDown p-5': (message.id == collapseItem),
                        'slideUp': (message.id != collapseItem)
                    }">{{ message.m_description }}</div>

            </div>
            <div class="flex justify-center items-center py-3 mt-3">
                <Pagination :links="messages.links">
                </Pagination>
            </div>

        </div>

    </section>
    <Footer />
</template>

<style>
@import "../../css/inbox.css";
</style>