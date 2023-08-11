<script setup>
// import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import NavLayout from "@/Layouts/NavLayout.vue";
import DeleteUserForm from "./Partials/DeleteUserForm.vue";
import UpdatePasswordForm from "./Partials/UpdatePasswordForm.vue";
import UpdateProfileInformationForm from "./Partials/UpdateProfileInformationForm.vue";
import MyVideos from "@/Components/MyVideos.vue";
import { Head, Link } from "@inertiajs/vue3";

defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
    myVideos: Array,
});
</script>

<template>
    <Head title="Profile" />

    <NavLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Profile
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <UpdateProfileInformationForm
                        :must-verify-email="mustVerifyEmail"
                        :status="status"
                        class="max-w-xl"
                    />
                </div>
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <h2 class="text-lg font-medium text-gray-900">My Videos</h2>
                    <div
                        class="grid 2xl:grid-cols-5 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 mt-2"
                    >
                        <div v-for="(video, index) in myVideos" :key="video">
                            <Link
                                :href="route('videos.show', { id: video.id })"
                            >
                                <MyVideos
                                    :title="video.title"
                                    :user="video.user_name"
                                    :views="video.views"
                                    :image="`https://picsum.photos/id/${index}/100`"
                                    :videoUrl="video.video"
                                    :thumbnail="video.thumbnail"
                                />
                            </Link>
                        </div>
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <UpdatePasswordForm class="max-w-xl" />
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <DeleteUserForm class="max-w-xl" />
                </div>
            </div>
        </div>
    </NavLayout>
</template>
