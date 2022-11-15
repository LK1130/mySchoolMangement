<script setup>
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>

    <Head title="Home" />
<div class="bg-animation">
    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>
    <div id="stars4"></div>
</div>
    <div class="w-full bg-black h-auto text-white transition-all duration-1000 ">
        <!--Header-->
        <header class="flex items-center px-5 py-5 md:px-16 md:py-7 ">

            <div class=" lg:w-3/6 md:w-1/6 w-1/2 relative ">
                <img src="/home/logo.png" alt="" class="w-14 md:w-16 ">
            </div>
            <div class="lg:w-3/6 md:w-5/6 w-1/2 flex md:justify-between justify-end items-center 
             text-base ">
                <Link href="" class="header">
                Home
                </Link>
                <Link href="" class="header">
                Services
                </Link>
                <Link href="" class="header">
                About Us
                </Link>
                <Link href="" class="header">
                Mini Project
                </Link>
                <Link href="" class="header">
                Contact Us
                </Link>

                <!-- <button class="w-28 bg-primaryBackground h-9 
                rounded-lg font-semibold hidden md:block">Explore</button> -->
                <ion-icon name="menu-outline" class="md:hidden text-4xl"></ion-icon>
            </div>

        </header>
        <!--Home-->
        <div class="w-full flex items-center py-10 md:px-16 md:py-8 px-5  ">
            <div class="md:w-1/2 z-10 md:marker:text-end">
                <p class="text-2xl md:text-3xl lg:text-5xl font-extrabold  py-3 ">
                    PROGRAMMING is an <span class="text-secondaryBackground">ART...</span></p>
                <p class="text-2xl md:text-3xl lg:text-5xl font-extrabold md:py-3">
                    WE are <span class="text-secondaryBackground">ARTIST...</span></p>
                <p class="py-8 text-center text-sm md:text-base opacity-80">“You might not think that programmers are
                    artists, but programming is an extremely creative profession. It’s logic-based
                    creativity.” <br>
                    – John Romero</p>
            </div>
            <div class="md:w-1/2 absolute top-10 md:top-0 md:relative overflow-hidden opacity-70 md:opacity-100">
                <img src="/home/earth.png" alt="" class="w-full earth ">
            </div>

        </div>
        <!--Service-->
        <div class="w-full py-5 md:px-4 md:py-44">
            <div class="text-center">
                <p class=" text-2xl md:text-4xl lg:text-5xl relative" font="pacifico">Services</p>
                <img src="/home/underline.png" alt="" class="w-20 md:w-44 md:my-1 mx-auto">
            </div>

            <div class="flex justify-evenly items-center my-5 md:my-14 flex-wrap relative">

                <div class="text-center mx-2">
                    <ion-icon name="language" class="mx-auto text-5xl md:text-6xl text-white py-3"></ion-icon>
                    <p class="">Japanes & Professional</p>
                    <p class="">Training Center</p>
                    <p class="">(Online & In-Class)</p>
                    <button class="w-32 bg-primaryBackground h-9 
                rounded-lg font-semibold my-5">See Courses</button>
                </div>
                <img src="/home/service_bulb.png" alt="" class="hidden md:block absolute w-32 md:w-80  z-0">
                <div class="text-center mx-2 relative" cover="select">
                    <ion-icon name="desktop-outline" class="mx-auto text-5xl md:text-6xl text-white py-3"></ion-icon>
                    <p class="z-10">Software Development</p>
                    <p class="z-10">&</p>
                    <p class="z-10">Service</p>
                    <button class="w-32 bg-tertiaryBackground h-9 
                                rounded-lg font-semibold my-5">See Courses</button>
                </div>
                <div class="text-center mx-2">
                    <ion-icon name="language" class="mx-auto text-5xl md:text-6xl text-white py-3"></ion-icon>
                    <p class="">Japanes & Professional</p>
                    <p class="">Training Center</p>
                    <p class="">(Online & In-Class)</p>
                    <button class="w-32 bg-primaryBackground h-9 
                                rounded-lg font-semibold my-5">See Courses</button>
                </div>

            </div>

        </div>

        <!--About Us-->
        <div class="w-full py-5 md:px-4 md:py-0">
            <div class="text-center">
                <p class=" text-2xl md:text-4xl lg:text-5xl" font="pacifico">About Us</p>
                <img src="/home/underline.png" alt="" class="w-20 md:w-44 md:my-1 mx-auto">
            </div>
            <div class=" w-full flex items-center justify-center md:px-4 ">
                <div class="w-full md:w-1/2">
                    <img src="/home/codeeditor.png" alt="">
                </div>
                <div class="w-full md:w-1/2 hidden md:block">
                    <img src="/home/earthconnection.png" alt="" class="mx-auto">
                </div>
            </div>
        </div>

        <!--Contact Us-->
        <div class="w-full  md:px-8 md:pb-10">
            <div class="text-center">
                <p class=" text-2xl md:text-4xl lg:text-5xl" font="pacifico">Contact Us</p>
                <img src="/home/underline.png" alt="" class="w-20 md:w-44 md:my-1 mx-auto ">
            </div>
            <div class=" w-full flex items-center justify-center px-5 relative overflow-hidden py-10 md:px-4 md:py-20">
                <div class="w-full md:w-1/2 lg:w-1/3 absolute md:relative opacity-50  p-20 md:opacity-70 earth">
                    <img src="/home/mars.png" alt="" class="mx-auto ">
                </div>
                <div class="w-full md:w-1/2   rounded-lg shadow-inner shadow-slate-700 p-6 md:p-9 bg-slate-800">
                    <form class="">
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent
                                 border-0 border-b-2 border-gray-300 appearance-none dark:text-white
                                  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none 
                                  focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="floating_password" class="peer-focus:font-medium absolute text-sm
                                 text-gray-500 dark:text-gray-400 duration-300
                                  transform -translate-y-6 scale-75 top-3 -z-10 
                                  origin-[0] peer-focus:left-0 peer-focus:text-blue-600
                                   peer-focus:dark:text--primaryBackground peer-placeholder-shown:scale-100
                                    peer-placeholder-shown:translate-y-0 peer-focus:scale-75
                                     peer-focus:-translate-y-6">Name</label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="email"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="floating_email"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
                                transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600
                                 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100
                                 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email
                                address</label>
                        </div>
                        <label for="message"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
                        <textarea id="message" rows="4"
                            class="block p-2.5 w-full text-sm text-white  focus:ring-slate-800 focus:border-b-blue-500 
                            border-b-2  bg-transparent border-0"
                            placeholder="Hello, Ex;braiN..."></textarea>

                        <button type="submit" class="text-white mt-8 rounded-lg shadow-md shadow-indigo-500/50
                         bg-primaryBackground hover:bg-blue-800 focus:ring-4 focus:outline-none
                              font-medium float-right text-base w-full px-5 py-2.5  ">Send</button>
                    </form>
                </div>

            </div>
        </div>

        <!--Footer-->
        <footer>
            <div class="relative bottom-0 bg-primaryBackground  w-full md:h-72 align-middle ">
                <div
                    class="opacity-5 z-10 top-0 w-full absolute hidden lg:block text-center text-9xl p-16 font-semibold">
                    Ex;braiN
                </div>

                <div class="p-6 relative">
                    <Link href="./homepage" class="flex items-center">
                    <img src="/img/white-exbrain.png" class="w-14 " alt="Exbrain Logo">
                    <span class="ml-5 text-xl md:text-2xl font-extrabold">Ex;braiN Education</span>
                    </Link>
                </div>

                <div class="relative flex flex-wrap md:flex-row px-6 md:px-20  ">
                    <div class="w-1/4">
                        <div class="flex flex-col">
                            <div class="mb-3 md:text-base text-sm">
                                <Link href="/homepage">Home</Link>
                            </div>
                            <div class="mb-3  md:text-base text-sm">
                                <Link href="/homepage">Services</Link>
                            </div>
                            <div class="mb-3  md:text-base text-sm">
                                <Link href="/homepage">About Us</Link>
                            </div>
                        </div>
                    </div>
                    <div class="w-2/4 text-start   md:border-l-2 ">
                        <div class="flex flex-col">
                            <div class="font-semibold text-center md:text-3xl">Address</div>
                            <div class="mt-3 text-center text-sm  md:text-base">No(1,200) 5B Yadanar Street Sourth
                                Dagon.</div>
                            <div class="text-sm text-center mt-1 font-semibold text-secondaryBackground">09-403559701
                            </div>
                        </div>
                    </div>
                    <div class="w-1/4 text-center  md:border-l-2 ">
                        <div class="flex flex-col  md:ml-10">
                            <div class="font-semibold md:text-3xl">Social</div>
                            <div class="flex md:flex-row flex-col  mx-5 my-3 items-center justify-between ">
                                <div class="flex cursor-pointer"><img src="/img/social/facebook.png" alt=""
                                        class="my-1 md:w-10 w-5"></div>
                                <div class="flex cursor-pointer"><img src="/img/social/youtube.png" alt=""
                                        class="my-1 md:w-10 w-5" /></div>
                                <div class="flex cursor-pointer"><img src="/img/social/youtube.png" alt=""
                                        class="my-1 md:w-10 w-5" /></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center py-6  text-xs md:text-base font-semibold opacity-90">Copyright &#169; 2022
                    Ex;brain
                    Education</div>
            </div>
        </footer>
    </div>
</template>


<style>
@import '../../css/welcome.css';
</style>



