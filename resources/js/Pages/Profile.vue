<script setup>
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import Header from "../Layouts/Header.vue";
import { Inertia } from "@inertiajs/inertia";

import InputLabel from "../../../vendor/laravel/jetstream/stubs/inertia/resources/js/Components/InputLabel.vue";
import Footer from "../Layouts/Footer.vue";
import { ref } from "vue";

const props = defineProps({
    users: {
        type: Object,
    },
});

const form = useForm({
    _method: "POST",
    name: props.users[0].name,
    nickname: props.users[0].nickname,
    age: props.users[0].age,
    address: props.users[0].address,
    phone: props.users[0].phone,
    bio: props.users[0].bio,
    image: props.users[0].profile_photo_path,
    imgName: props.users[0].profile_photo_path, // image: imgSrc.value,
});

var imgSrc = ref("/storage/" + form.imgName);
if (form.imgName === null) {
    imgSrc = ref("/img/error/avatars-000437232558-yuo0mv-t500x500.jpg");
}

var hasError = ref(true);

const onFile = (e) => {
    var files = e.target.files;

    if (!files.length) return;

    const reader = new FileReader();
    reader.readAsDataURL(files[0]);
    var img = new Image();

    reader.onload = () => {
        img.src = reader.result;
        img.onload = function () {
            if (
                this.width > 420 &&
                this.width < 1280 &&
                this.height > 420 &&
                this.height < 820
            ) {
                imgSrc.value = reader.result;
                hasError.value = true;
            } else {
                hasError.value = false;
                setTimeout(function () {
                    hasError.value = true;
                }, 4000);
            }
        };
    };
    form.image = files[0];
    form.imgName = files[0].name;
};

const submit = (e) => {
    form.post(route("profile.update", form));
};
</script>

<template>
    <Head title="Profile" />
    <Header />

    <section>
        <div class="p-4 md:p-12 mx-auto">
            <p
                class="text-primaryBackground font-semibold text-lg uppercase dark:text-white"
            >
                Profile
            </p>

            <div class="container mx-auto">
                <form @submit.prevent="submit">
                    <div
                        class="container mx-auto flex flex-wrap justify-around md:space-x-10 space-x-0 mt-3"
                    >
                        <div class="box rounded-2xl">
                            <div class="js--image-preview">
                                <img
                                    id="profileImage"
                                    class="object-scale-down max-w-sm inline-block rounded-tr-2xl rounded-tl-2xl border-2 border-solid imagePhoto"
                                    :src="imgSrc"
                                    alt=""
                                    srcset=""
                                />
                            </div>
                            <label for="image">
                                <div class="upload-options h-80">
                                    <input
                                        type="file"
                                        id="image"
                                        class="image-upload"
                                        accept="image/*"
                                        @change="onFile($event)"
                                    />
                                </div>
                            </label>
                            <p
                                class="text-center font-bold text-ellipsis bg-red-500 rounded-md mt-4 p-3 errorMessage"
                                v-bind:class="{
                                    invisible: hasError,
                                }"
                            >
                                Please, Select an Image with SMALLER WIDTH and
                                HEIGHT
                            </p>
                        </div>

                        <div class="md:w-6/12 sm:w-full form-container mx-auto">
                            <div class="form-group md:w-9/12 sm:w-full mt-3">
                                <input
                                    type="text"
                                    id="name"
                                    v-model="form.name"
                                    class="bg-gray-50 border border-gray-300 font-bold text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Name"
                                    required=""
                                    :class="{
                                        'font-bold': users[0].name,
                                    }"
                                />
                            </div>
                            <div class="form-group mt-5 flex">
                                <input
                                    type="text"
                                    id="nickname"
                                    v-model="form.nickname"
                                    class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block md:w-6/12 sm:w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Nickname"
                                    required=""
                                    :class="{
                                        'font-bold': users[0].nickname,
                                    }"
                                />
                                <input
                                    type="number"
                                    id="age"
                                    v-model="form.age"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 md:mx-20 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-20 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Age"
                                    required=""
                                    :class="{
                                        'font-bold': users[0].age,
                                    }"
                                />
                            </div>

                            <div class="form-group md:w-9/12 sm:w-full mt-5">
                                <input
                                    type="text"
                                    id="address"
                                    v-model="form.address"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Address"
                                    :class="{
                                        'font-bold': users[0].address,
                                    }"
                                    required=""
                                />
                            </div>

                            <div class="form-group md:w-9/12 mt-5">
                                <input
                                    type="text"
                                    id="phone"
                                    v-model="form.phone"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Phone"
                                    required=""
                                    :class="{
                                        'font-bold': users[0].phone,
                                    }"
                                />
                            </div>

                            <div class="form-group md:w-9/12 mt-5">
                                <textarea
                                    name="bio"
                                    id="bio"
                                    v-model="form.bio"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    cols="30"
                                    rows="10"
                                    placeholder="Bio"
                                    :class="{
                                        'font-bold': users[0].bio,
                                    }"
                                ></textarea>
                            </div>

                            <div
                                class="flex justify-end items-center mt-14 mb-14 p-2"
                            >
                                <button
                                    type="submit"
                                    class="text-white bg-cancelBackground hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto md:px-6 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700"
                                >
                                    Cancel
                                </button>

                                <button
                                    type="submit"
                                    class="text-white md:mx-auto sm:mx-auto mx-auto bg-primaryBackground hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto md:px-6 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                >
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <Footer />
</template>

<style>
@import "../../css/profile.css";
</style>
