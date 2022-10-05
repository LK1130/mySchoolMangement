<script setup>

import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Header from '../Layouts/Header.vue';

import "../profile";
import InputLabel from '../../../vendor/laravel/jetstream/stubs/inertia/resources/js/Components/InputLabel.vue';
import Footer from '../Layouts/Footer.vue';

</script>


<template>

    <Head title="Exbrain" />
    <Header />

    <section>
        <div class="container mx-auto">
        <p class="text-primaryBackground font-semibold p-2 text-lg uppercase">Profile</p>


            <div class="container mx-auto">
                <div class="container mx-auto flex flex-wrap justify-around md:space-x-10 space-x-0  mt-3  ">
                    <div class="box ">
                        <div class="js--image-preview"></div>
                        <div class="upload-options">

                            <label>
                                <input type="file" class="image-upload" accept="image/*" />
                            </label>
                        </div>
                    </div>


                    <div class="md:w-6/12 sm:w-full form-container mx-auto">

                        <form>

                            <div class="form-group md:w-9/12 sm:w-full mt-3">
                                <input type="text" id="name"
                                    class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Name" required="">
                            </div>
                            <div class="form-group mt-5 flex ">
                                <input type="text" id="nickname"
                                    class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block md:w-6/12 sm:w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Nickname" required="">
                                <input type="number" id="age"
                                    class="bg-gray-50 border border-gray-300 text-gray-900  md:mx-20  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-20 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Age" required="">
                            </div>

                            <div class="form-group md:w-9/12 sm:w-full mt-5">
                                <input type="text" id="address"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Address" required="">
                            </div>


                            <div class="form-group  md:w-9/12 mt-5">
                                <input type="text" id="phone"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Phone" required="">
                            </div>

                           

                            <div class="form-group md:w-9/12 mt-5">
                               <textarea name="bio" id="bio" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  cols="30" rows="10"  placeholder="Bio"></textarea>
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

    <Footer/>
</template>


<style>
@import "../../css/profile.css";
</style>