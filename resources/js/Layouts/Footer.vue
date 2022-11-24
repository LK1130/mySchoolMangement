<script setup>
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <div class="relative bottom-0  w-full md:h-72 h-64  footer  align-middle dark:bg-darkPrimaryBackground">
                <div class="opacity-5 z-10 top-0 w-full absolute hidden lg:block text-center text-9xl p-16 font-semibold">My School</div>

        <div class="p-6 relative z-20">
            <Link href="./homepage" class="flex items-center">
            <img src="/img/white-exbrain.png" class="h-9 sm:h-9" alt="Exbrain Logo">
            <span class="ml-5 text-3xl font-extrabold">Ex;braiN</span>
            </Link>
        </div>

        <div class="relative z-20 flex flex-wrap px-8 md:px-20 ">
            <div class="flex-1 ">
                <div class="flex flex-col">
                    <div class="mb-4 flink-fgp dark:text-secondaryBackground">
                        <Link href="/homepage">Home</Link>
                    </div>
                    <div class="mb-4 flink-fgp dark:text-secondaryBackground">
                        <Link href="/homepage">About Us</Link>
                    </div>
                    <div class="mb-4 flink-fgp dark:text-secondaryBackground">
                        <Link href="/homepage">Contact Us</Link>
                    </div>
                </div>
            </div>
            <div class="flex-1  text-start">
                <div class="flex flex-col">
                    <div class="mt-1 flink-sgp">
                        <Link href="/privacypolicy">> Privacy Policy</Link>
                    </div>
                    <div class="mt-1 flink-sgp">
                        <Link href="/blog">> Blog</Link>
                    </div>
                    <div class="mt-1 flink-sgp">
                        <Link href="/guide">> Guide</Link>
                    </div>
                </div>
            </div>
            <div class="flex-initial w-1/5 text-center  md:border-l-2 ">
                <div class="flex flex-col  md:ml-10">
                    <div class="m-1 font-semibold md:text-3xl">Social</div>
                    <div class="flex md:flex-row flex-col mt-2 md:mt-5 mx-5  items-center justify-between ">
                        <div class="flex cursor-pointer"><img src="/img/social/facebook.png" alt="" class="my-1 md:w-10 w-5"></div>
                        <div class="flex cursor-pointer"><img src="/img/social/youtube.png" alt="" class="my-1 md:w-10 w-5" /></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center md:mt-4  font-semibold opacity-70">Copyright @ exbrain</div>
    </div>

</template>

<style>
@import "../../css/footer.css";
</style>