<script setup>

import { ref } from 'vue'
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Header from '../Layouts/Header.vue';
import Footer from '../Layouts/Footer.vue';
import Chart from '../Components/LineChart.vue';

const chartOptions = ref({
    chart: {
        id: 'basic-bar'
    },
    xaxis: {
        categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998]
    }
});
const series = ref([{
    name: 'series-1',
    data: [30, 40, 45, 50, 49, 60, 70, 91]
}]);


</script>


<template>

    <Head title="Home" />
    <Header />

    <section class="container p-4 md:p-12 overflow-x-hidden">
        <!-- Title Bar -->
        <div class="flex flex-row items-center justify-between">
            <h1 class="text-lg md:text-xl font-bold text-primaryBackground">3 Courses Joined</h1>
            <h1 class="text-sm md:text-lg text-primaryBackground underline"><a href="#">Rules &
                    Regulations</a></h1>
        </div>

        <!-- Hero Section -->
        <div class="flex flex-col md:flex-row justify-between items-center py-4 w-full ">
            <div class="p-10 w-full">
                <!-- Student's Card -->
                <div
                    class="flex flex-col rounded-xl bg-primaryBackground w-full space-y-14 text-white p-8 w-full mb-4 md:mb-0 overflow-hidden card">
                    <div class="flex flex-row justify-between items-center z-10">
                        <div class="flex flex-col space-y-3">
                            <h1>Linn Ko Ko</h1>
                            <p>N5 > Batch 18</p>
                            <div class="flex flex-row">
                                <div class="w-12 h-2 bg-secondaryBackground rounded-tl-md rounded-bl-md"></div>
                                <div class="w-12 h-2 bg-secondaryBackground mx-2"></div>
                                <div class="w-12 h-2 bg-white rounded-tr-md rounded-br-md"></div>
                            </div>
                        </div>
                        <div class="relative flex flex-row items-center justify-center">
                            <svg width="50" height="60" viewBox="0 0 114 130" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M33.21 4.55C42.0257 2.15313 51.3938 0 57 0C62.6063 0 71.9744 2.15313 80.79 4.55C89.8088 6.9875 98.9007 9.87187 104.247 11.6187C106.482 12.3569 108.464 13.7107 109.964 15.5244C111.465 17.3382 112.423 19.5385 112.729 21.8725C117.572 58.2481 106.335 85.2069 92.7013 103.041C86.9199 110.67 80.0262 117.389 72.2507 122.972C69.562 124.904 66.7133 126.603 63.7357 128.05C61.4607 129.122 59.015 130 57 130C54.985 130 52.5475 129.122 50.2644 128.05C47.2867 126.603 44.438 124.904 41.7494 122.972C33.974 117.389 27.0804 110.67 21.2988 103.041C7.66504 85.2069 -3.57183 58.2481 1.27067 21.8725C1.57688 19.5385 2.53527 17.3382 4.03574 15.5244C5.53622 13.7107 7.51791 12.3569 9.75317 11.6187C17.5141 9.07407 25.3353 6.71714 33.21 4.55Z"
                                    fill="#FFC652" />
                            </svg>
                            <p class="text-3xl font-bold rank">10</p>
                        </div>
                    </div>

                    <div class="flex flex-row justify-between z-10">
                        <div class="flex flex-col space-y-4">
                            <p>Attendance > <span class="ml-3 text-lg font-bold text-secondaryBackground">80%</span></p>
                            <p>Exam Mark > <span class="ml-3 text-lg font-bold text-secondaryBackground">60%</span></p>
                        </div>
                        <p>Status > <span class="ml-3 text-lg font-bold">Active</span></p>
                    </div>

                    <p class="uppercase text-7xl md:text-9xl z-0 backTitle">Japanese</p>
                </div>
            </div>

            <!-- Class Info -->
            <div class="flex flex-col w-full px-10 md:pl-36">
                <h1 class="text-lg md:text-xl font-bold text-primaryBackground">Class info</h1>

                <div class="relative">
                    <table class="w-full text-sm text-left text-primaryBackground">
                        <tbody>
                            <tr>
                                <td scope="row" class="py-2 pr-12 whitespace-nowrap">
                                    Start Date
                                </td>
                                <td class="py-2 px-6 font-bold">
                                    2022/09/10 (Sun)
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="py-2 pr-12 whitespace-nowrap">
                                    Join Date
                                </td>
                                <td class="py-2 px-6 font-bold">
                                    2022/09/10 (Sun)
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="py-2 pr-12 whitespace-nowrap">
                                    Period
                                </td>
                                <td class="py-2 px-6 font-bold">
                                    3 Months
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="py-2 pr-12 whitespace-nowrap">
                                    End Date
                                </td>
                                <td class="py-2 px-6 font-bold text-red-600">
                                    2022/11/10 (Sun)
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="py-2 pr-12 whitespace-nowrap">
                                    Class in Person
                                </td>
                                <td class="py-2 px-6 font-bold">
                                    25
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="py-2 pr-12 whitespace-nowrap">
                                    Time
                                </td>
                                <td class="py-2 px-6 font-bold">
                                    18:00 - 20:00
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="w-full flex justify-end">
                    <button
                        class="w-32 text-white bg-red-600 hover:bg-red-800 focus:outline-none font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2">Rec
                        Video</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Rank Section -->
    <div class="flex flex-col w-full bg-primaryBackground py-10 my-10">
        <div class="flex flex-row justify-around w-full items-center">
            <div class="flex flex-col items-center">
                <h1 class="text-2xl md:text-4xl text-secondaryBackground font-bold">80%</h1>
                <p class="text-md md:text-xl text-white mt-5">Attendance</p>
            </div>
            <div class="flex flex-col items-center mb-32">
                <div class="relative">
                    <svg width="100" height="120" viewBox="0 0 114 130" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M33.21 4.55C42.0257 2.15313 51.3938 0 57 0C62.6063 0 71.9744 2.15313 80.79 4.55C89.8088 6.9875 98.9007 9.87187 104.247 11.6187C106.482 12.3569 108.464 13.7107 109.964 15.5244C111.465 17.3382 112.423 19.5385 112.729 21.8725C117.572 58.2481 106.335 85.2069 92.7013 103.041C86.9199 110.67 80.0262 117.389 72.2507 122.972C69.562 124.904 66.7133 126.603 63.7357 128.05C61.4607 129.122 59.015 130 57 130C54.985 130 52.5475 129.122 50.2644 128.05C47.2867 126.603 44.438 124.904 41.7494 122.972C33.974 117.389 27.0804 110.67 21.2988 103.041C7.66504 85.2069 -3.57183 58.2481 1.27067 21.8725C1.57688 19.5385 2.53527 17.3382 4.03574 15.5244C5.53622 13.7107 7.51791 12.3569 9.75317 11.6187C17.5141 9.07407 25.3353 6.71714 33.21 4.55Z"
                            fill="#FFC652" />
                    </svg>
                    <p class="text-4xl text-white font-bold rank">10</p>
                </div>
                <p class="text-lg md:text-2xl text-white mt-5">Current Rank</p>
            </div>
            <div class="flex flex-col items-center">
                <h1 class="text-2xl md:text-4xl font-bold text-red-600">60%</h1>
                <p class="text-md md:text-xl text-white mt-5">Daily Exam Mark</p>
            </div>
        </div>

        <div class="flex flex-col md:flex-row justify-around  px-10">
            <!-- Rank Table -->
            <div class="flex flex-col bg-white py-5 px-10 rounded-xl">
                <table class="text-sm text-left text-primaryBackground ">
                    <thead>
                        <tr class="text-black">
                            <th class="py-4 pr-14">Date</th>
                            <th class="py-4 px-10">Exam</th>
                            <th class="py-4 px-6">Mark</th>
                            <th class="py-4 px-6">Rank</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-3 pr-14 font-light text-xs text-black">Aug 11</td>
                            <td class="py-3 px-10 font-bold">hiragana 1</td>
                            <td class="py-3 px-6 text-red-500">5</td>
                            <td class="py-3 px-6 text-black">9</td>
                        </tr>
                        <tr>
                            <td class="py-3 pr-14 font-light text-xs text-black">Aug 15</td>
                            <td class="py-3 px-10 font-bold">hiragana 2</td>
                            <td class="py-3 px-6 text-green-500">10</td>
                            <td class="py-3 px-6 text-black">1</td>
                        </tr>
                        <tr>
                            <td class="py-3 pr-14 font-light text-xs text-black">Aug 20</td>
                            <td class="py-3 px-10 font-bold">katakana 1</td>
                            <td class="py-3 px-6 text-red-500">5</td>
                            <td class="py-3 px-6 text-black">9</td>
                        </tr>
                        <tr>
                            <td class="py-3 pr-14 font-light text-xs text-black">Aug 25</td>
                            <td class="py-3 px-10 font-bold">katakana 2</td>
                            <td class="py-3 px-6 text-secondaryBackground">6</td>
                            <td class="py-3 px-6 text-black">4</td>
                        </tr>
                        <tr>
                            <td class="py-3 pr-14 font-light text-xs text-black">Sept 01</td>
                            <td class="py-3 px-10 font-bold">Lesson 1</td>
                            <td class="py-3 px-6 text-red-500">5</td>
                            <td class="py-3 px-6 text-black">8</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Rank Chart -->
            <div class="flex flex-col bg-white py-5 px-10 rounded-xl">
                <h1>Overall</h1>
                <div>
                    <Chart :options="chartOptions" :series="series" />
                </div>
            </div>
        </div>
    </div>
    <Footer />

</template> 

<style>
@import "../../css/home.css";
</style>