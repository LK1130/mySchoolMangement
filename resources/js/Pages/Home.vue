<script setup>

import { ref } from 'vue'
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Header from '../Layouts/Header.vue';
import Footer from '../Layouts/Footer.vue';
import Chart from '../Components/LineChart.vue';
import { Navigation, Pagination } from 'swiper';
import { Swiper, SwiperSlide } from 'swiper/vue';
import moment from 'moment';

// Import Swiper styles
import 'swiper/css';
import 'swiper/css/bundle';


let examName = []; // exam name list for only user progress chart
let examMark = []; // exam name list for only user progress chart

let count = ref(0); // count for classes join
let examCount = ref(0); // count for exams
let percentage = 0;

let allRank ={}; // all ranking object
let allRankPercentage = []; // rall ranking with percentage
const props = defineProps({
    classes: {
        type: Object
    },
    examRanks: {
        type: Object
    },
    rank_mark: {
        type: Object
    },
    all_ranks:{
        type : Object
    },
    attendance : {
        type : Object
    }
})

//get class join count
count = props.classes.length
examCount =Object.values(props.examRanks).length;

//get exam mark percentage
percentage = Math.floor(Object.values(props.rank_mark)[0].sumMark / examCount * 10);
// get all user exam mark percentage
 for (let index = 0; index < props.all_ranks.length; index++) {
      allRank = {
        name : props.all_ranks[index].name,
        percent : Math.floor(Object.values(props.all_ranks)[index].sumMark / examCount * 10)
      }    
     
    allRankPercentage.push(allRank);
 }

 
// loop for chart data
for (const key in props.examRanks) {
    //get eName only user progress chart
    examName.push(props.examRanks[key].e_name);
    //get mark only user progress chart
    examMark.push(props.examRanks[key].mark);
}

console.log(app.querySelector('.swiper-button-next'));

const chartOptions = ref({
    chart: {
        toolbar: {
            show: false,
        },
        id: 'basic-bar'
    },
    grid: {
        borderColor: '#e7e7e7',
        row: {
            colors: ['#f3f3f3', 'transparent'],
            opacity: 0.5
        },
    },
    title: {
        text: 'Over All',
        align: 'left'
    },
    stroke: {
        curve: 'smooth'
    },
    dataLabels: {
        enabled: true,
    },
    xaxis: {
        categories: examName,
        title: {
            text: 'Exam'
        },
    },
    yaxis: {
        title: {
            text: 'Mark'
        },
        min: 0,
        max: 10
    },
});
const series = ref([
    {
        name: 'series-1',
        data: examMark
    }
]);

const chartOptionsV2 = ref({
    chart: {
        toolbar: {
            show: false,
        },
        id: 'basic-bar'
    },
    xaxis: {
        categories: examName
    }
})

const seriesV2 = ref([
 
 {
        name: 'Choo Pwint Chal',
        data: examMark
    },
    {
        name: 'Thazin Aung',
        data: [20, 60, 65, 70, 80, 90, 100, 120]
    },
    {
        name: 'Hein Thant Aung',
        data: [15, 40, 20, 10, 90, 65, 75, 100]
    },
    {
        name: 'Zan Myint Moe',
        data: [5, 10, 15, 20, 25, 30, 35, 40]
    },
    {
        name: 'Phwe Phwe',
        data: [0, 100, 80, 60, 40, 20, 10, 0]
    },
    {
        name: 'Nyein Nyein',
        data: [0, 20, 100, 30, 10, 120, 25, 90]
    },
    {
        name: 'Su Nwe Win',
        data: [35, 45, 80, 80, 100, 120, 80, 91]
    },
    {
        name: 'Nyan Win Myo',
        data: [100, 120, 50, 20, 30, 50, 90, 120]
    }
]);

console.log(Swiper.props.effect);


</script>


<template>

    <Head title="Home" />
    <Header />

    <section class=" p-4 md:p-12 overflow-x-hidden">
        <!-- Title Bar -->
        <div class="flex flex-row items-center justify-between">
            <h1 class="text-lg md:text-xl font-bold text-primaryBackground">{{ count }} Classes Joined</h1>
            <h1 class="text-sm md:text-lg text-primaryBackground underline"><a href="#">Rules & Regulations</a></h1>
        </div>

        <Swiper />

        <!-- Hero Section -->
        <div class="flex flex-col md:flex-row lg:flex-row justify-between items-center py-4 w-full ">
            <!-- Student's Card -->
            <swiper :slides-per-view="1" :space-between="50" :modules="[Navigation, Pagination]" navigation
                :pagination="{ clickable: true, dynamicBullets: ture }" grab-cursor class="w-1/2">
                <swiper-slide :id="attendance.class_id" v-for="n in count" :key="n" :virtual-index="n">
                  
                    <div class="p-10 md:p-8 lg:w-10/12 xl:w-8/12 md:w-5/6  mx-auto">
                        
                        <div
                            class="flex  flex-col rounded-xl bg-primaryBackground md:space-y-14 space-y-5 text-white md:p-8 p-5 w-full mb-4 md:mb-0 overflow-hidden card">
                            <div class="flex flex-row justify-between items-center z-10">
                                <div class="flex flex-col space-y-3">
                                    <h1 class="font-light text-xl">{{ $page.props.user.name }}</h1>
                                    <p class="font-bold text-lg">{{ props.attendance[n-1].c_name }}</p>
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

                            <div class="flex flex-row justify-between ">
                                <div class="flex flex-col space-y-4 ">
                                    <p class="text-sm md:text-base">Attendance > <span
                                            class="ml-3 text-sm md:text-base font-bold text-secondaryBackground">{{ props.attendance[n-1].attend * 100 }}%</span>
                                    </p>
                                    <p class="text-sm md:text-base">Exam Mark > <span
                                            class="ml-3 text-sm md:text-base font-bold text-secondaryBackground">60%</span>
                                    </p>
                                </div>
                                <p class="text-sm md:text-base">Status > <span
                                        class="ml-3 text-sm font-bold">Active</span></p>
                            </div>
                        </div>
                    </div>
                </swiper-slide>
            </swiper>
            <!-- Class Info -->
            <div class="flex flex-col md:pl-10 lg:w-9/12 xl:w-8/12 md:w-1/3 w-auto ">
                <h1 class="text-lg md:text-xl font-bold text-primaryBackground">Class info</h1>

                <div class="relative">
                    <table class="w-full text-sm text-left text-primaryBackground">
                        <tbody>
                            <tr>
                                <td scope="row" class="py-2 whitespace-nowrap">
                                    Start Date
                                </td>
                                <td class="py-2 px-6 font-bold">
                                    2022/09/10 (Sun)
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="py-2 whitespace-nowrap">
                                    Join Date
                                </td>
                                <td class="py-2 px-6 font-bold">
                                    2022/09/10 (Sun)
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="py-2  whitespace-nowrap">
                                    Period
                                </td>
                                <td class="py-2 px-6 font-bold">
                                    3 Months
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="py-2  whitespace-nowrap">
                                    End Date
                                </td>
                                <td class="py-2 px-6 font-bold text-red-600">
                                    2022/11/10 (Sun)
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="py-2  whitespace-nowrap">
                                    Class in Person
                                </td>
                                <td class="py-2 px-6 font-bold">
                                    25
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="py-2  whitespace-nowrap">
                                    Time
                                </td>
                                <td class="py-2 px-6 font-bold">
                                    18:00 - 20:00
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class=" flex  mt-4">
                    <Link href="/recording">
                    <button
                        class="w-32 text-white bg-red-600 hover:bg-red-800 focus:outline-none font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2">Rec
                        Video</button>
                    </Link>
                </div>
            </div>
        </div>
    </section>

    <!-- Rank Section -->
    <div class="flex flex-col w-full bg-primaryBackground py-10 my-5 h-full">
        <div class="flex flex-row justify-around w-full items-center">
            <div class="flex flex-col items-center w-48">
                <h1 class="text-2xl md:text-4xl text-secondaryBackground font-bold">80%</h1>
                <p class="text-md md:text-xl text-white mt-5">Attendance</p>
            </div>
            <div class="flex flex-col items-center mb-32 w-48">
                <div class="relative">
                    <svg width="100" height="120" viewBox="0 0 114 130" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M33.21 4.55C42.0257 2.15313 51.3938 0 57 0C62.6063 0 71.9744 2.15313 80.79 4.55C89.8088 6.9875 98.9007 9.87187 104.247 11.6187C106.482 12.3569 108.464 13.7107 109.964 15.5244C111.465 17.3382 112.423 19.5385 112.729 21.8725C117.572 58.2481 106.335 85.2069 92.7013 103.041C86.9199 110.67 80.0262 117.389 72.2507 122.972C69.562 124.904 66.7133 126.603 63.7357 128.05C61.4607 129.122 59.015 130 57 130C54.985 130 52.5475 129.122 50.2644 128.05C47.2867 126.603 44.438 124.904 41.7494 122.972C33.974 117.389 27.0804 110.67 21.2988 103.041C7.66504 85.2069 -3.57183 58.2481 1.27067 21.8725C1.57688 19.5385 2.53527 17.3382 4.03574 15.5244C5.53622 13.7107 7.51791 12.3569 9.75317 11.6187C17.5141 9.07407 25.3353 6.71714 33.21 4.55Z"
                            fill="#FFC652" />
                    </svg>
                    <p class="text-5xl text-white font-bold rank">{{ Object.values(props.examRanks)[0].rank }}</p>
                </div>
                <p class="text-lg md:text-2xl text-white mt-5">Current Rank</p>
            </div>
            <div class="flex flex-col items-center w-48">
                <h1 class="text-2xl md:text-4xl font-bold" :class="{
                    'text-green-500': (percentage == 100),
                    'text-red-500': (percentage <= 50),
                    'text-yellow-500': (percentage > 50 && percentage < 100),
                }">
                    {{ percentage }}%</h1>
                <p class="text-md md:text-xl text-white mt-5">Daily Exam Mark</p>
            </div>
        </div>

        <div class="flex flex-col xl:flex-row justify-around items-center xl:space-y-0 space-y-5 p-5">
            <!-- Rank Table -->
            <div class="flex flex-col bg-white py-5 px-10 rounded-xl xl:w-2/5 h-96">
                <table class="text-sm text-left text-primaryBackground mb-4 ">
                    <thead>
                        <tr class="text-black">
                            <th class="w-24 text-left">Date</th>
                            <th class="w-48 text-left">Exam</th>
                            <th class="w-24 text-left">Mark</th>
                            <th class="w-24 text-left">Rank</th>
                        </tr>
                    </thead>
                </table>
                <div class="overflow-y-auto rankTable">
                    <table class="text-sm text-left text-primaryBackground w-full">
                        <tbody>
                            <tr v-for="examRank in examRanks">
                                <td class="py-3 w-24 text-left font-light text-xs text-black">{{
                                        moment(examRank.date_submitted).format('MMM D')
                                }}</td>
                                <td class="py-3 w-48 text-left font-bold">{{ examRank.e_name }}</td>
                                <td class="py-3 w-24" :class="{
                                    'text-green-500': (examRank.mark == 10),
                                    'text-red-500': (examRank.mark <= 5),
                                    'text-yellow-500': (examRank.mark > 5 && examRank.mark < 10),
                                }">{{ examRank.mark }}</td>
                                <td class="py-3 w-24 text-left text-black">{{ examRank.rank }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Rank Chart -->
            <div class="flex flex-col bg-white p-5 rounded-xl xl:w-2/5 h-96">


                <Chart :options="chartOptions" :series="series" class="chart h-full" />

            </div>
        </div>
    </div>

    <div class="flex flex-col items-center w-full">
        <h1 class="text-3xl md:text-5xl font-bold drop-shadow-xl my-3">Class Exam Ranking & Mark</h1>

        <div
            class="flex flex-col-reverse lg:flex-row flex-reverse justify-center rounded-xl overflow-hidden shadow-2xl my-10">
            <div class="pt-10">
                <Chart :type="line" :options="chartOptionsV2" :series="seriesV2" :stroke="stroke" class="chartV2" />
            </div>

            <div class="flex flex-col items-center bg-secondaryBackground py-10 px-3 w-full lg:w-72 space-y-4">
               
                <div v-for="(item,index) in allRankPercentage" class="flex justify-between p-2 items-center bg-white w-full space-x-2 rounded-lg">
                    <span
                        class="flex items-center justify-center bg-primaryBackground text-white w-8 h-8 rounded-full">{{ ++index}}</span>
                    <h1 class="w-32 flex font-bold whitespace-nowrap">{{ item.name }}</h1>
                    <p class="font-semibold text-secondaryBackground">{{ item.percent }}%</p>
                </div>

               
            </div>
        </div>
    </div>
    <Footer />

</template> 

<style>
@import "../../css/home.css";
</style>


