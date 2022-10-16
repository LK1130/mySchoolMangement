<script setup>

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

</script>

<template>

    <Head title="Inbox" />

    <Header />

    <section>
        <div class="container mx-auto">
            <p class="text-primaryBackground font-semibold p-2 text-lg uppercase">Inbox</p>

            <div class="space-x-3 mx-2">
                <input type="checkbox" name="info" id="info" class=" bg-blue-600" checked>
                <label for="info">Information</label>

                <input type="checkbox" name="alert" id="alert" class="bg-red-600 text-red-600 " checked>
                <label for="alert">Alert</label>

                <input type="checkbox" name="message" id="message" class="bg-yellow-300 text-yellow-300 " checked>
                <label for="message">Message</label>
            </div>

            <!-- Info -->
            <div class="relative md:w-11/12 mx-auto py-1  px-5" v-for="message in messages.data">
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
                        message.created_at).format("YYYY/MM/DD (ddd)")}}</p>
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