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
import axios from 'axios';
import { prop } from 'dom7';



/// student join class id
let allId = [];
// active exam id
let activeExamClassId = [];
// active attedance id 
let attendClassId = [];
let processBar = [];
let examName = []; // exam name list for only user progress chart
let examMark = []; // exam name list for only user progress chart

let attendancePercentage = []; //attendance percentage for one class
let examPercentage = [];  //exam percentage for one class
let currentOverall = []; //current overall score
let oneClasExamRank = []; // one classExam Rank
let activeIndex = ref(0);
let count = ref(0); // count for classes join
let examCount = ref(0); // count for exams


let allRank = {}; // all ranking object
let allRankPercentage = []; // rall ranking with percentage



const forceRerender = (activeIndex) => {

    console.log(activeIndex);
    examMark = [];
    examName = [];
    
    if (oneClasExamRank[activeIndex][1].length > 1 ) {
        // result in oneClasExamRank[activeIndex][1]
        
        for (let index = 0; index < oneClasExamRank[activeIndex][1].length; index++) {
            examMark.push(oneClasExamRank[activeIndex][1][index].mark);
            examName.push(oneClasExamRank[activeIndex][1][index].e_name);
           
           
        }
 
        // chartOptions.value[0].xaxis.categories = [examName];
        chartOptions.value =  {...chartOptions.value, ...{
            xaxis: {
                categories: examName.length == 0 ? 'No Exam' : examName 
            }
        }};
        series.value[0].data = examMark.length == 0 ? 0 : examMark;

    } else {
        examMark.push(oneClasExamRank[activeIndex][1][0].mark);
        examName.push(oneClasExamRank[activeIndex][1][0].e_name);
     
        series.value[0].data = examMark.length == 0 ?  0 : examMark;
        chartOptions.value =  {...chartOptions.value, ...{
            xaxis: {
                categories: examName.length == 0 ? 'No Exam' : examName
            }
        }};
      
    }
   

};



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
    all_ranks: {
        type: Object
    },
    attendance: {
        type: Object
    },
    one_class: {
        type: Object
    },
    exam_percent: {
        type: Object
    },
    overall_rank: {
        type: Object
    },
    class_rank: {
        type: Array
    },
    processBar: {
        type: Array
    }

});


for (let index = 0; index < props.classes.length; index++) {
    allId.push(props.classes[index].id);

}

for (let index = 0; index < props.exam_percent.length; index++) {
    activeExamClassId.push(props.exam_percent[index].id);

    examPercentage.push(props.exam_percent[index]);

    currentOverall.push(Object.values(props.overall_rank)[index]);
    oneClasExamRank.push(props.class_rank[index]);

}

for (let index = 0; index < props.attendance.length; index++) {
    attendClassId.push(props.attendance[index].id);


    attendancePercentage.push(props.attendance[index]);
}





// push extra array room in exam perctange
//main function

for (let index = 0; index < allId.length; index++) {


    if (allId.length != attendClassId.length) {
        if (allId[index] != attendClassId[index] && !attendClassId.includes(allId[index])) {
            attendClassId.push(allId[index]);
            attendClassId.sort();
            let active_attendance = {
                attend: 0,
                id: allId[index]
            };

            let handler1 = {};

            const proxy1 = new Proxy(active_attendance, handler1);
            attendancePercentage.push(proxy1);
        }
    }
    if (allId.length != activeExamClassId.length) {
        if (allId[index] != activeExamClassId[index] && !activeExamClassId.includes(allId[index])) {
            activeExamClassId.push(allId[index]);
            activeExamClassId.sort();
            let exam_percent = {
                exam: 0,
                id: allId[index]

            }

            let overall_ranks = {
                id: allId[index],
                ranks: 0

            }

            let one_class_exams = {
                0: {
                    cid: allId[index]
                }
            }

            let handler1 = {};
            let handler2 = {};
            let handler3 = {};
            const proxy1 = new Proxy(exam_percent, handler1);
            const proxy2 = new Proxy(overall_ranks, handler2);
            const proxy3 = new Proxy(one_class_exams, handler3);
            examPercentage.push(proxy1);
            currentOverall.push(proxy2);
            oneClasExamRank.push(proxy3);

        }
    }

}


// array sorting for each class
examPercentage = Object.entries(examPercentage).sort((a, b) => a[1].id - b[1].id);
currentOverall = Object.entries(currentOverall).sort((a, b) => a[1].id - b[1].id);
oneClasExamRank = Object.entries(oneClasExamRank).sort((a, b) => a[1][0].cid - b[1][0].cid);
attendancePercentage = Object.entries(attendancePercentage).sort((a, b) => a[1].id - b[1].id);

// console.log(oneClasExamRank);


//get class join count
count = props.classes.length;
examCount = Object.values(props.examRanks).length;

//get exam mark percentage
// percentage = Math.floor(Object.values(props.rank_mark)[0].sumMark / examCount * 10);
// get all user exam mark percentage
for (let index = 0; index < props.all_ranks.length; index++) {
    allRank = {
        name: props.all_ranks[index].name,
        percent: Math.floor(Object.values(props.all_ranks)[index].sumMark / examCount * 10)
    }

    allRankPercentage.push(allRank);
}

console.log(allRankPercentage);
console.log(props.all_ranks);

if (oneClasExamRank[activeIndex.value][1].length > 1) {
    // result in oneClasExamRank[activeIndex][1]

    for (let index = 0; index < oneClasExamRank[activeIndex.value][1].length; index++) {
        examMark.push(oneClasExamRank[activeIndex.value][1][index].mark);
        examName.push(oneClasExamRank[activeIndex.value][1][index].e_name)

    }
  

} else {
         examMark.push(oneClasExamRank[activeIndex.value][1][0].mark);
         examName.push(oneClasExamRank[activeIndex.value][1][0].e_name);
}

console.log(examMark);

console.log(examName);



let chartOptions = ref({
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
        categories: examName.length == 0 ? 'No Exam' : examName,
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


console.log(examMark);

let series = ref([
    {
        name: 'series-1',
        data: examMark.length == 0 ? 0 : examMark
    }
]);

console.log(chartOptions.value);
        console.log(series.value[0].data);

// const chartOptionsV2 = ref({
//     chart: {
//         toolbar: {
//             show: false,
//         },
//         id: 'basic-bar'
//     },
//     xaxis: {
//         categories: examName
//     }
// })

// const seriesV2 = ref([

//     {
//         name: 'Choo Pwint Chal',
//         data: examMark
//     },
//     {
//         name: 'Thazin Aung',
//         data: [20, 60, 65, 70, 80, 90, 100, 120]
//     },
//     {
//         name: 'Hein Thant Aung',
//         data: [15, 40, 20, 10, 90, 65, 75, 100]
//     },
//     {
//         name: 'Zan Myint Moe',
//         data: [5, 10, 15, 20, 25, 30, 35, 40]
//     },
//     {
//         name: 'Phwe Phwe',
//         data: [0, 100, 80, 60, 40, 20, 10, 0]
//     },
//     {
//         name: 'Nyein Nyein',
//         data: [0, 20, 100, 30, 10, 120, 25, 90]
//     },
//     {
//         name: 'Su Nwe Win',
//         data: [35, 45, 80, 80, 100, 120, 80, 91]
//     },
//     {
//         name: 'Nyan Win Myo',
//         data: [100, 120, 50, 20, 30, 50, 90, 120]
//     }
// ]);



</script>


<template>

    <Head title="Home" />
    <Header />
    <div v-if="props.classes.length > 1">
        <section class=" p-4 md:p-12 overflow-x-hidden">
            <!-- Title Bar -->
            <div class="flex flex-row items-center justify-between">
                <h1 class="text-lg md:text-xl font-bold text-primaryBackground dark:text-whiteTextColor">{{ count }}
                    Classes Joined</h1>
            </div>


            <Swiper />



            <!-- Hero Section -->
            <div class="flex flex-col md:flex-row lg:flex-row justify-between items-center py-4 w-full ">
                <!-- Student's Card -->
                <swiper :slides-per-view="1" :space-between="50" :modules="[Navigation, Pagination]" navigation
                    :pagination="{ clickable: true, dynamicBullets: ture }" grab-cursor class="w-1/2" @slideChange="(event) => {
                        activeIndex = event.activeIndex;
                        forceRerender(activeIndex);
                    }">
                    <swiper-slide v-for="n in count" :key="n" :virtual-index="n">


                        <div class="p-4 md:p-8 lg:w-10/12 xl:w-8/12 md:w-5/6  mx-auto">

                            <div
                                class="flex  flex-col rounded-xl bg-primaryBackground dark:bg-darkPrimaryBackground md:space-y-10 space-y-5 text-white md:p-8 p-5 w-full mb-4 md:mb-0 overflow-hidden card">
                                <div class="flex flex-row justify-between items-center z-10">

                                    <div class="flex flex-col space-y-3">
                                        <h1 class="font-light text-xl">{{ $page.props.user.name }}</h1>
                                        <p class="font-bold text-lg">{{ props.classes[n - 1].c_name }}</p>

                                        <div class="grid grid-cols-6">
                                            <div v-for="result in (Number(props.processBar[n - 1].period))" :key="result"
                                                class="w-5 h-2 bg-white mx-1" :class="{
                                                    'rounded-tl-md rounded-bl-md': (result == 1),
                                                    'bg-secondaryBackground ': (Number(props.processBar[n - 1].current) >= result),
                                                    'rounded-tr-md rounded-br-md': (Number(props.processBar[n - 1].period) == result),
                                                    'my-1': (result > 6)
                                                }">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="relative flex flex-row items-center justify-center">
                                        <svg width="50" height="60" viewBox="0 0 114 130" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M33.21 4.55C42.0257 2.15313 51.3938 0 57 0C62.6063 0 71.9744 2.15313 80.79 4.55C89.8088 6.9875 98.9007 9.87187 104.247 11.6187C106.482 12.3569 108.464 13.7107 109.964 15.5244C111.465 17.3382 112.423 19.5385 112.729 21.8725C117.572 58.2481 106.335 85.2069 92.7013 103.041C86.9199 110.67 80.0262 117.389 72.2507 122.972C69.562 124.904 66.7133 126.603 63.7357 128.05C61.4607 129.122 59.015 130 57 130C54.985 130 52.5475 129.122 50.2644 128.05C47.2867 126.603 44.438 124.904 41.7494 122.972C33.974 117.389 27.0804 110.67 21.2988 103.041C7.66504 85.2069 -3.57183 58.2481 1.27067 21.8725C1.57688 19.5385 2.53527 17.3382 4.03574 15.5244C5.53622 13.7107 7.51791 12.3569 9.75317 11.6187C17.5141 9.07407 25.3353 6.71714 33.21 4.55Z"
                                                fill="#FFC652" />
                                        </svg>


                                        <p class="text-3xl font-bold rank">
                                            {{ currentOverall.length
                                                    == 0 ? 0 : currentOverall[activeIndex][1].ranks
                                            }}
                                        </p>
                                    </div>
                                </div>

                                <div class="flex flex-row justify-between ">
                                    <div class="flex flex-col  ">
                                        <p class="text-sm md:text-base">Attendance > <span
                                                class="ml-3 text-sm md:text-base font-bold text-secondaryBackground">{{
                                                        attendancePercentage.length == 0 ? 0 :
                                                            Math.floor(attendancePercentage[activeIndex][1].attend *
                                                                100)
                                                }}%</span>
                                        </p>


                                        <p class="text-sm md:text-base">Exam Mark > <span
                                                class="ml-3 text-sm md:text-base font-bold text-secondaryBackground">
                                                {{
                                                        examPercentage.length == 0 ? 0 :
                                                            Math.floor(examPercentage[activeIndex][1].exam)
                                                }}
                                                %
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>
                </swiper>
                <!-- Class Info -->
                <div class="flex flex-col md:pl-10 lg:w-9/12 xl:w-8/12 md:w-1/3 w-auto ">
                    <h1 class="text-lg md:text-xl font-bold text-primaryBackground dark:text-white py-3">Class info</h1>

                    <div class="relative">
                        <table class="w-full text-sm text-left text-primaryBackground dark:text-white">
                            <tbody>
                                <tr>

                                    <td scope="row" class="py-2 whitespace-nowrap font-semibold text-base">
                                        Start Date : 
                                    </td>

                                    <td class="py-2 px-6 font-bold  text-base">

                                        {{ moment(props.classes[activeIndex].c_start_date).format('YYYY/MM/DD') }}
                                        ({{
                                                moment(props.classes[activeIndex].c_start_date).format('dddd')
                                        }})
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row" class="py-2 whitespace-nowrap font-semibold text-base">
                                        Join Date :
                                    </td>
                                    <td class="py-2 px-6 font-bold  text-base">
                                        {{ moment(props.classes[activeIndex].start_join).format('YYYY/MM/DD') }} ({{
                                                moment(props.classes[activeIndex].start_join).format('dddd')
                                        }})
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row" class="py-2  whitespace-nowrap font-semibold text-base">
                                        Period :
                                    </td>
                                    <td class="py-2 px-6 font-bold  text-base">
                                        {{ (moment(props.classes[activeIndex].end_date).format('MM') -
                                                moment(props.classes[activeIndex].c_start_date).format('MM')) + 1
                                        }} month(s)
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row" class="py-2  whitespace-nowrap font-semibold text-base">
                                        End Date :
                                    </td>
                                    <td class="py-2 px-6 font-bold  text-base text-red-600">
                                        {{ moment(props.classes[activeIndex].end_date).format('YYYY/MM/DD') }} ({{
                                                moment(props.classes[activeIndex].end_date).format('dddd')
                                        }})
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row" class="py-2  whitespace-nowrap font-semibold text-base">
                                        Class Day :
                                    </td>
                                    <td class="py-2 px-6 font-bold  text-base">
                                        {{ props.classes[activeIndex].c_start_time }} - {{
                                        props.classes[activeIndex].c_end_time
                                        }}
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row" class="py-2  whitespace-nowrap font-semibold text-base">
                                        Class Time :
                                    </td>
                                    <td class="py-2 px-6 font-bold  text-base">
                                        {{ props.classes[activeIndex].c_start_time }} - {{
                                                props.classes[activeIndex].c_end_time
                                        }}
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row" class="py-2  whitespace-nowrap font-semibold text-base">
                                        Class in Person :
                                    </td>
                                    <td class="py-2 px-6 font-bold  text-base">
                                
                                        {{ props.one_class[activeIndex].counts }}
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
        <div class="flex flex-col w-full bg-primaryBackground dark:bg-darkPrimaryBackground py-20 my-5 h-full">
            <div class="flex flex-row justify-around w-full items-center">
                <div class="flex flex-col items-center w-48">
                    <h1 class="text-2xl md:text-4xl text-secondaryBackground font-bold">{{ attendancePercentage.length
                            == 0
                    
                            ? 0 : Math.floor(attendancePercentage[activeIndex][1].attend * 100)
                    }}%</h1>
                    <p class="text-md md:text-xl text-white mt-5">Attendance</p>
                </div>
                <div class="flex flex-col items-center mb-32 w-48">
                    <div class="relative">
                        <svg width="100" height="120" viewBox="0 0 114 130" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M33.21 4.55C42.0257 2.15313 51.3938 0 57 0C62.6063 0 71.9744 2.15313 80.79 4.55C89.8088 6.9875 98.9007 9.87187 104.247 11.6187C106.482 12.3569 108.464 13.7107 109.964 15.5244C111.465 17.3382 112.423 19.5385 112.729 21.8725C117.572 58.2481 106.335 85.2069 92.7013 103.041C86.9199 110.67 80.0262 117.389 72.2507 122.972C69.562 124.904 66.7133 126.603 63.7357 128.05C61.4607 129.122 59.015 130 57 130C54.985 130 52.5475 129.122 50.2644 128.05C47.2867 126.603 44.438 124.904 41.7494 122.972C33.974 117.389 27.0804 110.67 21.2988 103.041C7.66504 85.2069 -3.57183 58.2481 1.27067 21.8725C1.57688 19.5385 2.53527 17.3382 4.03574 15.5244C5.53622 13.7107 7.51791 12.3569 9.75317 11.6187C17.5141 9.07407 25.3353 6.71714 33.21 4.55Z"
                                fill="#FFC652" />
                        </svg>


                        <p class="text-5xl text-white font-bold rank">
                            {{ currentOverall.length
                                    == 0 ? 0 : currentOverall[activeIndex][1].ranks
                            }}
                        </p>
                    </div>
                    <p class="text-lg md:text-2xl text-white mt-5">Current Rank</p>
                </div>
                <div class="flex flex-col items-center w-48">
                    <h1 class="text-2xl md:text-4xl font-bold" :class="{
                        'text-green-500': (examPercentage.length == 0 ? 0 : examPercentage[activeIndex][1].exam == 100),
                        'text-red-500': (examPercentage.length == 0 ? 0 : examPercentage[activeIndex][1].exam <= 50),
                        'text-yellow-500': (examPercentage.length == 0 ? 0 : examPercentage[activeIndex][1].exam > 50 && props.exam_percent[activeIndex].exam < 100),
                    }">
                        {{ examPercentage.length == 0 ? 0 :
                                Math.floor(examPercentage[activeIndex][1].exam)
                        }}%
                    </h1>
                    <p class="text-md md:text-xl text-white mt-5">Daily Exam Mark</p>
                </div>
            </div>

            <div class="flex flex-col xl:flex-row justify-around items-center xl:space-y-0 space-y-5 p-5">
                <!-- Rank Table -->
                <div class="flex flex-col bg-white dark:bg-darkBgBackground py-5 px-10 rounded-xl xl:w-2/5 h-96">
                    <table class="text-sm text-left text-primaryBackground mb-4 ">
                        <thead>
                            <tr class="text-black dark:text-whiteTextColor">
                                <th class="w-24 text-left">Date</th>
                                <th class="w-48 text-left">Exam</th>
                                <th class="w-24 text-left">Mark</th>
                                <th class="w-24 text-left">Rank</th>
                            </tr>
                        </thead>
                    </table>
                    <div class="overflow-y-auto rankTable">
                        <table class="text-sm text-left text-primaryBackground w-full">
                            <tbody v-if="oneClasExamRank[activeIndex][1].length > 1">

                                <tr v-for="result in oneClasExamRank[activeIndex][1]">

                                    <td
                                        class="py-3 w-24 text-left font-light dark:text-whiteTextColor text-xs text-black">
                                        {{ moment(result.date_submitted).format('MMM D') }}
                                    </td>
                                    <td class="py-3 w-48 text-left font-bold">{{ result.e_name }}</td>
                                    <td class="py-3 w-24" :class="{
                                        'text-green-500': (result.mark == 10),
                                        'text-red-500': (result.mark <= 5),
                                        'text-yellow-500': (result.mark > 5 && result.mark < 10),
                                    }">{{ result.mark }}</td>

                                    <td class="py-3 w-24 text-left text-black dark:text-whiteTextColor">{{ result.rank
                                    }}</td>

                                </tr>
                            </tbody>


                            <tbody v-else-if="oneClasExamRank[activeIndex][1].length == 1">

                                <tr v-for="result in oneClasExamRank[activeIndex][1]">

                                    <td
                                        class="py-3 w-24 text-left font-light dark:text-whiteTextColor text-xs text-black">
                                        {{ moment(result.date_submitted).format('MMM D') }}
                                    </td>
                                    <td class="py-3 w-48 text-left font-bold dark:text-whiteTextColor">{{ result.e_name
                                    }}</td>
                                    <td class="py-3 w-24" :class="{
                                        'text-green-500': (result.mark == 10),
                                        'text-red-500': (result.mark <= 5),
                                        'text-yellow-500': (result.mark > 5 && result.mark < 10),
                                    }">{{ result.mark }}</td>

                                    <td class="py-3 w-24 text-left text-black dark:text-whiteTextColor">{{ result.rank
                                    }}</td>
                                </tr>

                            </tbody>


                            <tbody v-else>

                                <tr>

                                    No Exam Result Yet!!
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Rank Chart -->
                <div class="flex flex-col bg-white  dark:bg-darkBgBackground p-5 rounded-xl xl:w-2/5 h-96">


                    <Chart id="#chart1" :options="chartOptions" :series="series" class="chart h-full" />

                </div>
            </div>
        </div>

        <div class="flex flex-col items-center w-full">
            <h1 class="text-3xl md:text-4xl font-bold drop-shadow-xl my-3 dark:text-whiteTextColor text-primaryBackground">Class Ranking</h1>

            <div
                class="flex flex-col-reverse lg:flex-row flex-reverse justify-center rounded-xl overflow-hidden shadow-2xl my-10">
                <!-- <div class="pt-10">
                    <Chart :type="line" :options="chartOptionsV2" :series="seriesV2" :stroke="stroke" class="chartV2" />
                </div> -->

                <div class="flex flex-col items-center bg-secondaryBackground py-10 px-3 w-full lg:w-72 space-y-4">

                    <div v-if="props.all_ranks[activeIndex].length > 1" v-for="(result,index) in props.all_ranks[activeIndex]"
                        class="flex justify-between p-2 items-center bg-white w-full space-x-2 rounded-lg">
                        <span
                            class="flex items-center justify-center bg-primaryBackground text-white w-8 h-8 rounded-full">{{
                                    ++index
                            }}</span>
                        <h1 class="w-32 flex font-bold whitespace-nowrap">{{ result.name }}</h1>
                        <p class="font-semibold text-secondaryBackground">{{ Math.floor(result.exam) }}%</p>
                    </div>
                    <div v-else
                       class="text-3xl text-white">
                     No Ranking!!!
                    </div>

                    <!-- <div v-for="(item, index) in props.all_ranks"
                        class="flex justify-between p-2 items-center bg-white w-full space-x-2 rounded-lg">
                        <span
                            class="flex items-center justify-center bg-primaryBackground text-white w-8 h-8 rounded-full">{{
                                    ++index
                            }}</span>
                        <h1 class="w-32 flex font-bold whitespace-nowrap">{{ item.name }}</h1>
                        <p class="font-semibold text-secondaryBackground">{{ item.percent }}%</p>
                    </div> -->


                </div>
            </div>
        </div>
    </div>

    <div v-else class="m-5 p-5">
        Student still doesn't join all classes!!
    </div>
    <Footer />

</template> 

<style>
@import "../../css/home.css";
</style>


