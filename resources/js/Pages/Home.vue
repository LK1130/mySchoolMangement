<script setup>

import AppLogin from '@/Layouts/AppLogin.vue';
import Welcome from '@/Components/Welcome.vue';
import AppLayout from '../../../vendor/laravel/jetstream/stubs/inertia/resources/js/Layouts/AppLayout.vue';
</script>

<template>
    <AppLayout title="Hello Hello">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Hello
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <Welcome />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
