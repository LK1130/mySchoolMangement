<script setup>

import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Header from '../Layouts/Header.vue';

import Footer from '../Layouts/Footer.vue';
import { ref } from 'vue'


const imgSrc = ref("img/profile.png");

const onFile = (e) => {
    const files = e.target.files
    if (!files.length) return

    const reader = new FileReader()
    reader.readAsDataURL(files[0])
    reader.onload = () => (imgSrc.value = reader.result)
}

const props = defineProps({
    user : {
        type : Object
    }
})


const form = useForm({
    _method : "POST",
    name: props.user[0].name,
    nickname: props.user[0].nickname,
    age: props.user[0].age,
    address: props.user[0].address,
    phone : props.user[0].phone,
    bio : props.user[0].bio,
    
});


const submit = () => {
   
    form.post(route('profile.update',form));
};
</script>


<template>

    <Head title="Profile" />
    <Header />
    <!-- <div>{{ user[0].name }}</div> -->
    <section>
        <div class="container mx-auto">
            <p class="text-primaryBackground font-semibold p-2 text-lg uppercase">Profile</p>


            <div class="container mx-auto">
                <div class="container mx-auto flex flex-wrap justify-around md:space-x-10 space-x-0  mt-3  ">
                    <div class="box ">
                        <div class="js--image-preview">
                            <img class="w-full "  :src="imgSrc" alt="" srcset="">
                        </div>
                        <label for="image">
                        <div class="upload-options">
                                <input type="file" id="image" class="image-upload" accept="image/*" @change="onFile" />
                        </div>
                        </label>
                    </div>


                    <div class="md:w-6/12 sm:w-full form-container mx-auto">

                        <form @submit.prevent="submit">

                            <div class="form-group md:w-9/12 sm:w-full mt-3">
                                <input type="text" id="name" v-model="form.name"
                                    class="bg-gray-50 border border-gray-300 font-bold text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Name" required="" :class="{
                                        'font-bold': user[0].name
                                    }">
                            </div>
                            <div class="form-group mt-5 flex ">
                                <input type="text" id="nickname" v-model="form.nickname"
                                 class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block md:w-6/12 sm:w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Nickname" required="" :class="{
                                        'font-bold': user[0].nickname
                                    }" >
                                <input type="number" id="age" v-model='form.age'
                                    class="bg-gray-50 border border-gray-300 text-gray-900  md:mx-20  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-20 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Age" required="" :class="{
                                        'font-bold': user[0].age
                                    }">
                            </div>

                            <div class="form-group md:w-9/12 sm:w-full mt-5">
                                <input type="text" id="address" v-model="form.address"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Address" :class="{
                                        'font-bold': user[0].address
                                    }" required="" >
                            </div>


                            <div class="form-group  md:w-9/12 mt-5">
                                <input type="text" id="phone" v-model="form.phone"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Phone" required="" :class="{
                                        'font-bold': user[0].phone
                                    }" >
                            </div>



                            <div class="form-group md:w-9/12 mt-5">
                                <textarea name="bio" id="bio" v-model="form.bio"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    cols="30" rows="10" placeholder="Bio" :class="{
                                        'font-bold': user[0].bio
                                    }" ></textarea>
                            </div>

                            <div class="flex justify-end items-center mt-14 mb-14 p-2">
                                <button type="submit"
                                    class="text-white bg-cancelBackground hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto md:px-6 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 ">Cancel</button>


                                <button type="submit"
                                    class="text-white md:mx-auto sm:mx-auto mx-auto bg-primaryBackground hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto md:px-6 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>

                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <Footer />
</template>


<style>
@import "../../css/profile.css";
</style>