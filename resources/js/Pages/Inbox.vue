<script setup>

import { ref } from 'vue'
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
});

let filterMessages = ref([])
let selectedItems = ref([1, 2, 3]);

const filter = () => {
     filterMessages = props.messages.data.filter(message => {
        return selectedItems.value.includes(message.m_category);
    });
    console.log(filterMessages);
}

filter();




</script>

<template>

    <Head title="Inbox" />

    <Header />

    <section>
        <div class="container mx-auto">
            <p class="text-primaryBackground font-semibold p-2 text-lg uppercase">Inbox</p>

            <div class="space-x-3 mx-2">
                <input type="checkbox" name="info" id="info" v-model="selectedItems" value="1" v-on:change="filter"
                    class="p-2 rounded-md text-primaryBackground" checked>
                <label for="info">Information</label>

                <input type="checkbox" name="message" id="message" v-model="selectedItems" value="2"
                    v-on:change="filter" class="p-2 rounded-md text-secondaryBackground" checked>
                <label for="message">Direct Message</label>

                <input type="checkbox" name="alert" id="alert" v-model="selectedItems" value="3" v-on:change="filter"
                    class="p-2 rounded-md text-tertiaryBackground" checked>
                <label for="alert">Alert</label>
            </div>

            <!-- Info -->
            <div class="relative md:w-11/12 mx-auto py-1  px-5" v-for="message in filterMessages">
                <div class="relative md:px-5 md:py-8    border-slate-400 drop-shadow-md flex justify-between items-center mx-3 mt-10 
                    shadow-lg rounded-lg overflow-hidden  " :class="{ 
                                'info': (message.m_category == 1),
                                'message': (message.m_category == 2),
                                'alert': (message.m_category == 3)
                    }">
                    <div class="flex justify-between items-center  md:mx-8 mailbox">
                        <ion-icon name="mail-open-outline" class="md:text-2xl mail"></ion-icon>

                        <p class="md:text-base font-bold font-family  mx-10">{{ message.m_title }}</p>
                    </div>

                    <div class="flex md:justify-between md:items-center sm:justify-center md:mr-10 checkmark">
                        <p class="text-base font-semibold text-tertiaryBackground">{{ moment(
                        message.created_at).format("YYYY/MM/DD (ddd) HH:mm")}}</p>
                    </div>


                </div>
                <SecondaryBtn class="absolute top-12  right-0 custombtn">
                    New
                </SecondaryBtn>
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