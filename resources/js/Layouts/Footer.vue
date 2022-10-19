<script setup>
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <div class="relative w-full h-72  footer  align-middle">
                <div class="opacity-5 z-10 top-0 w-full absolute hidden lg:block text-center text-9xl p-16 font-semibold">My School</div>

        <div class="p-6 relative z-20">
            <Link href="./homepage" class="flex items-center">
            <img src="/img/white-logo.png" class="h-9 sm:h-9" alt="Exbrain Logo">
            <span class="ml-5 text-3xl font-extrabold">MySchool</span>
            </Link>
        </div>

        <div class="relative z-20 flex flex-wrap px-8 md:px-20 ">
            <div class="flex-1 ">
                <div class="flex flex-col">
                    <div class="mb-4 flink-fgp">
                        <Link href="./homepage">Home</Link>
                    </div>
                    <div class="mb-4 flink-fgp">
                        <Link href="./homepage">About Us</Link>
                    </div>
                    <div class="mb-4 flink-fgp">
                        <Link href="./homepage">Contact Us</Link>
                    </div>
                </div>
            </div>
            <div class="flex-1  text-start">
                <div class="flex flex-col">
                    <div class="mt-1 flink-sgp">
                        <Link href="./privacypolicy">> Privacy Policy</Link>
                    </div>
                    <div class="mt-1 flink-sgp">
                        <Link href="./blog">> Blog</Link>
                    </div>
                    <div class="mt-1 flink-sgp">
                        <Link href="./guide">> Guide</Link>
                    </div>
                </div>
            </div>
            <div class="flex-initial w-1/5 text-center  md:border-l-2">
                <div class="flex flex-col ">
                    <div class="m-1 font-semibold md:text-3xl">Social</div>
                    <div class="flex mt-3 items-center justify-around ">
                        <div class="flex"><img src="/img/social/facebook.png" alt="" class="md:w-8 w-6"></div>
                        <div class="flex"><img src="/img/social/youtube.png" alt="" class="md:w-8 w-6" /></div>
                        <div class="flex"><img src="/img/social/messanger.png" alt="" class="md:w-8 w-6" /></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4  font-semibold opacity-70">Copyright @ exbrain</div>
    </div>

</template>

<style>
@import "../../css/footer.css";
</style>