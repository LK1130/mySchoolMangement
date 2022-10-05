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

    <Head title="Blog" />
    <Header />

    <section class="p-12">
        <h1 class="text-xl font-bold text-primaryBackground mb-6">BLOG</h1>

        <div class="p-0">
            <div class="flex flex-col md:flex-row px-6 py-8 rounded-xl shadow-xl mb-12">
                <div class="w-full md:w-1/3 mb-5 md:mb-0 mr-5">
                    <img src="img/blog-image.png" alt="">
                </div>
                <div class="relative w-full">
                    <div class="flex flex-row justify-between w-full mb-2">
                        <h1>How to use VS code?</h1>
                        <p>2/2/2022</p>
                    </div>
                    <div class="w-full font-light">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ad voluptate commodi aliquid nihil
                        animi placeat, illum dolores quidem impedit! Sequi autem magnam odit maxime labore consequatur
                        velit facere. Animi quasi error cupiditate beatae labore itaque dolore pariatur neque minus
                        architecto! Culpa ducimus deserunt eum dignissimos pariatur itaque cum eos. Lorem ipsum dolor
                        sit, amet consectetur adipisicing elit. Pariatur, odio!....
                    </div>
                    <div class="absolute w-full bottom-0 mb-3">
                        <h2 class="absolute right-0 text-primaryBackground font-bold">
                            <Link href="./blogview">Read More...</Link>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row px-6 py-8 rounded-xl shadow-xl mb-12">
                <div class="w-full md:w-1/3 mb-5 md:mb-0 mr-5">
                    <img src="img/blog-image.png" alt="">
                </div>
                <div class="relative w-full">
                    <div class="flex flex-row justify-between w-full mb-2">
                        <h1>How to use VS code?</h1>
                        <p>2/2/2022</p>
                    </div>
                    <div class="w-full font-light">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ad voluptate commodi aliquid nihil
                        animi placeat, illum dolores quidem impedit! Sequi autem magnam odit maxime labore consequatur
                        velit facere. Animi quasi error cupiditate beatae labore itaque dolore pariatur neque minus
                        architecto! Culpa ducimus deserunt eum dignissimos pariatur itaque cum eos. Lorem ipsum dolor
                        sit, amet consectetur adipisicing elit. Pariatur, odio!....
                    </div>
                    <div class="absolute w-full bottom-0 mb-3">
                        <h2 class="absolute right-0 text-primaryBackground font-bold">
                            <Link href="./blogview">Read More...</Link>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row px-6 py-8 rounded-xl shadow-xl mb-12">
                <div class="w-full md:w-1/3 mb-5 md:mb-0 mr-5">
                    <img src="img/blog-image.png" alt="">
                </div>
                <div class="relative w-full">
                    <div class="flex flex-row justify-between w-full mb-2">
                        <h1>How to use VS code?</h1>
                        <p>2/2/2022</p>
                    </div>
                    <div class="w-full font-light">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ad voluptate commodi aliquid nihil
                        animi placeat, illum dolores quidem impedit! Sequi autem magnam odit maxime labore consequatur
                        velit facere. Animi quasi error cupiditate beatae labore itaque dolore pariatur neque minus
                        architecto! Culpa ducimus deserunt eum dignissimos pariatur itaque cum eos. Lorem ipsum dolor
                        sit, amet consectetur adipisicing elit. Pariatur, odio!....
                    </div>
                    <div class="absolute w-full bottom-0 mb-3">
                        <h2 class="absolute right-0 text-primaryBackground font-bold">
                            <Link href="./blogview">Read More...</Link>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row px-6 py-8 rounded-xl shadow-xl mb-12">
                <div class="w-full md:w-1/3 mb-5 md:mb-0 mr-5">
                    <img src="img/blog-image.png" alt="">
                </div>
                <div class="relative w-full">
                    <div class="flex flex-row justify-between w-full mb-2">
                        <h1>How to use VS code?</h1>
                        <p>2/2/2022</p>
                    </div>
                    <div class="w-full font-light">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ad voluptate commodi aliquid nihil
                        animi placeat, illum dolores quidem impedit! Sequi autem magnam odit maxime labore consequatur
                        velit facere. Animi quasi error cupiditate beatae labore itaque dolore pariatur neque minus
                        architecto! Culpa ducimus deserunt eum dignissimos pariatur itaque cum eos. Lorem ipsum dolor
                        sit, amet consectetur adipisicing elit. Pariatur, odio!....
                    </div>
                    <div class="absolute w-full bottom-0 mb-3">
                        <h2 class="absolute right-0 text-primaryBackground font-bold">
                            <Link href="./blogview">Read More...</Link>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row px-6 py-8 rounded-xl shadow-xl mb-12">
                <div class="w-full md:w-1/3 mb-5 md:mb-0 mr-5">
                    <img src="img/blog-image.png" alt="">
                </div>
                <div class="relative w-full">
                    <div class="flex flex-row justify-between w-full mb-2">
                        <h1>How to use VS code?</h1>
                        <p>2/2/2022</p>
                    </div>
                    <div class="w-full font-light">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ad voluptate commodi aliquid nihil
                        animi placeat, illum dolores quidem impedit! Sequi autem magnam odit maxime labore consequatur
                        velit facere. Animi quasi error cupiditate beatae labore itaque dolore pariatur neque minus
                        architecto! Culpa ducimus deserunt eum dignissimos pariatur itaque cum eos. Lorem ipsum dolor
                        sit, amet consectetur adipisicing elit. Pariatur, odio!....
                    </div>
                    <div class="absolute w-full bottom-0 mb-3">
                        <h2 class="absolute right-0 text-primaryBackground font-bold">
                            <Link href="./blogview">Read More...</Link>
                        </h2>
                    </div>
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
@import "../../css/blog.css";
</style>
        