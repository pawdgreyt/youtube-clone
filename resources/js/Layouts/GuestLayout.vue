<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div
        class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-black"
    >
        <div>
            <Link
                href=""
                class="flex items-center justify-center mr-10 cursor-pointer"
            >
                <img class="" width="70" src="/images/YT-logo.png" alt="" />
                <img width="140" src="/images/YT-logo-text.png" alt="" />
            </Link>
        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-gray-600 shadow-md overflow-hidden sm:rounded-lg"
        >
            <slot />
        </div>
    </div>
</template>
