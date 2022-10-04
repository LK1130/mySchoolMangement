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

    <Head title="BlogView" />
    <Header />

    <section class=" p-12">
        <div class="flex flex-row items-center justify-between">
            <div class="flex flex-row items-center">
                <h1 class="text-lg md:text-xl font-bold text-primaryBackground">BLOG</h1>
                <h1 class="mx-5 text-xl md:text-4xl font-bold">How to use Vs Code?</h1>
            </div>
            <h1 class="text-lg md:text-xl font-bold text-primaryBackground">Next</h1>
        </div>

        <div class="p-0 md:p-8 mt-5">
            <div class="flex justify-center w-full">
                <img src="img/blog-view.png" alt="" class="" />
            </div>
            <div class="flex flex-col space-y-2  my-8">
                <p class="text-sm">2022/10/20 (Sun) 12:22</p>
                <h1 class="text-xl md:text-4xl font-bold">Introduction to Web Development</h1>
            </div>
            <div class="font-extralight space-y-6">
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae labore, distinctio hic nam, neque
                    praesentium dicta optio nihil rerum adipisci exercitationem at quaerat eum corporis minima
                    laudantium, fugiat eligendi animi libero excepturi. Explicabo omnis aliquam praesentium optio?
                    Velit, fugit. Blanditiis dolor placeat temporibus ex recusandae adipisci, aspernatur debitis hic
                    voluptatibus et magnam corporis libero voluptatem nobis dolorum autem vel. Similique possimus
                    aperiam eum dolores minima vel. Commodi, soluta placeat, explicabo vitae consequatur earum cum
                    necessitatibus neque voluptatum, officiis unde accusantium sequi mollitia dignissimos rerum nisi
                    officia voluptas? Temporibus impedit, velit maiores ipsum sed ipsa libero nam placeat suscipit sunt?
                    Numquam.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae labore, distinctio hic nam, neque
                    praesentium dicta optio nihil rerum adipisci exercitationem at quaerat eum corporis minima
                    laudantium, fugiat eligendi animi libero excepturi. Explicabo omnis aliquam praesentium optio?
                    Velit, fugit. Blanditiis dolor placeat temporibus ex recusandae adipisci, aspernatur debitis hic
                    voluptatibus et magnam corporis libero voluptatem nobis dolorum autem vel. Similique possimus
                    aperiam eum dolores minima vel. Commodi, soluta placeat, explicabo vitae consequatur earum cum
                    necessitatibus neque voluptatum, officiis unde accusantium sequi mollitia dignissimos rerum nisi
                    officia voluptas? Temporibus impedit, velit maiores ipsum sed ipsa libero nam placeat suscipit sunt?
                    Numquam.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae labore, distinctio hic nam, neque
                    praesentium dicta optio nihil rerum adipisci exercitationem at quaerat eum corporis minima
                    laudantium, fugiat eligendi animi libero excepturi. Explicabo omnis aliquam praesentium optio?
                    Velit, fugit. Blanditiis dolor placeat temporibus ex recusandae adipisci, aspernatur debitis hic
                    voluptatibus et magnam corporis libero voluptatem nobis dolorum autem vel. Similique possimus
                    aperiam eum dolores minima vel. Commodi, soluta placeat, explicabo vitae consequatur earum cum
                    necessitatibus neque voluptatum, officiis unde accusantium sequi mollitia dignissimos rerum nisi
                    officia voluptas? Temporibus impedit, velit maiores ipsum sed ipsa libero nam placeat suscipit sunt?
                    Numquam.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae labore, distinctio hic nam, neque
                    praesentium dicta optio nihil rerum adipisci exercitationem at quaerat eum corporis minima
                    laudantium, fugiat eligendi animi libero excepturi. Explicabo omnis aliquam praesentium optio?
                    Velit, fugit. Blanditiis dolor placeat temporibus ex recusandae adipisci, aspernatur debitis hic
                    voluptatibus et magnam corporis libero voluptatem nobis dolorum autem vel. Similique possimus
                    aperiam eum dolores minima vel. Commodi, soluta placeat, explicabo vitae consequatur earum cum
                    necessitatibus neque voluptatum, officiis unde accusantium sequi mollitia dignissimos rerum nisi
                    officia voluptas? Temporibus impedit, velit maiores ipsum sed ipsa libero nam placeat suscipit sunt?
                    Numquam.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae labore, distinctio hic nam, neque
                    praesentium dicta optio nihil rerum adipisci exercitationem at quaerat eum corporis minima
                    laudantium, fugiat eligendi animi libero excepturi. Explicabo omnis aliquam praesentium optio?
                    Velit, fugit. Blanditiis dolor placeat temporibus ex recusandae adipisci, aspernatur debitis hic
                    voluptatibus et magnam corporis libero voluptatem nobis dolorum autem vel. Similique possimus
                    aperiam eum dolores minima vel. Commodi, soluta placeat, explicabo vitae consequatur earum cum
                    necessitatibus neque voluptatum, officiis unde accusantium sequi mollitia dignissimos rerum nisi
                    officia voluptas? Temporibus impedit, velit maiores ipsum sed ipsa libero nam placeat suscipit sunt?
                    Numquam.
                </p>
            </div>
        </div>
    </section>


    <Footer />
</template> 
            
           
<style>
@import "../../css/blogview.css";
</style>
            