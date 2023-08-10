<script setup>
import { Head, Link } from "@inertiajs/vue3";
import NavLayout from "@/Layouts/NavLayout.vue";

// defineProps({
//     canLogin: {
//         type: Boolean,
//     },
// });
</script>

<template>
    <Head title="Youtube" />
    <NavLayout>
        <div class="max-w-xl mx-auto px-4">
            <div class="text-white font-extrabold text-3xl py-10">
                Add Video
            </div>
            <form>
                <div>
                    <div class="text-gray-200">Title</div>
                    <input
                        type="text"
                        placeholder="Cool Video"
                        class="form-control block w-full px-5 py-1.5 text-xl font-normal text-gray-200 bg-black placeholder-gray-400 bg-clip-padding border border-solid border-gray-600 rounded transition ease-in-out m-0 border-transparent focus:ring-0"
                    />
                    <span class="text-red-500">This is an error</span>
                </div>

                <div class="my-5"></div>
                <div>
                    <div class="text-gray-200">Thumbnail</div>
                    <input
                        type="file"
                        class="form-control block w-full px-3 py-1.5 border text-white border-solid border-gray-600 rounded transition ease-in-out m-0 focus:text-gray-700 focus:border-blue-600 focus:outline-none"
                    />
                    <span class="text-red-500">This is an error</span>
                </div>
                <div class="my-5"></div>
                <div>
                    <div class="text-gray-200">Video/MP4</div>
                    <input
                        type="file"
                        class="form-control block w-full px-3 py-1.5 border text-white border-solid border-gray-600 rounded transition ease-in-out m-0 focus:text-gray-700 focus:border-blue-600 focus:outline-none"
                    />
                    <span class="text-red-500">This is an error</span>
                </div>
                <div class="my-5"></div>
                <div class="float-right">
                    <button
                        type="submit"
                        class="text-white bg-green-600 hover:bg-green-700 font-bold py-2 px-4 rounded cursor-pointer"
                    >
                        Upload Video
                    </button>
                </div>
            </form>
        </div>
    </NavLayout>
</template>
