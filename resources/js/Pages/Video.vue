<script setup>
import { Head, Link } from "@inertiajs/vue3";
import NavLayout from "@/Layouts/NavLayout.vue";
import CheckCircle from "vue-material-design-icons/CheckCircle.vue";
import ThumbUpOutline from "vue-material-design-icons/ThumbUpOutline.vue";
import ThumbDownOutline from "vue-material-design-icons/ThumbDownOutline.vue";
import RecommendedVideos from "@/Components/RecommendedVideos.vue";

defineProps({
    video: Object,
    comments: Array,
    recommendedVideos: Array,
});
</script>

<template>
    <Head title="Youtube" />
    <NavLayout>
        <div class="xl:flex">
            <div class="p-3">
                <video :src="video.video || ''" controls autoplay />
                <div class="text-white text-2xl font-extrabold mt-4">
                    {{ video.title }}
                </div>
                <div class="flex items-center mb-4">
                    <img
                        class="rounded-full m-1.5 mt-2 flex items-baseline w-8 h-8"
                        :src="
                            'https://avatars.githubusercontent.com/u/52988042?v=4' ||
                            ''
                        "
                    />
                    <div class="pl-2 mt-1">
                        <div
                            class="text-white tex-lg font-extrabold flex items-center"
                        >
                            {{ video.user_name }}
                            <CheckCircle fillColor="#888888" :size="17" />
                        </div>
                        <div class="text-sm text-gray-400 font-extrabold">
                            {{ video.views }}
                        </div>
                    </div>
                </div>

                <div class="w-[500px] p-3 block sm:hidden">
                    <div v-for="vid in recommendedVideos" :key="vid">
                        <Link
                            class="flex mb-3"
                            :href="route('videos.show', { id: vid.id })"
                        >
                            <RecommendedVideos :vid="vid" />
                        </Link>
                    </div>
                </div>

                <div class="bg-[#3f3f3f] rounded-lg w-full p-3 text-white">
                    <div class="text-white text-lg font-extrabold">
                        {{ video.views }}
                    </div>
                    <div class="text-sm font-extrabold mb-6">
                        Lorem ipsum dolor shit asdawdasd dawdas daw dasd.
                    </div>
                    <div class="text-s, font-extrabold mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Pellentesque ac sem massa. Praesent ac justo at nisi
                        tempus ultrices. Quisque nisi dui, posuere sed pulvinar
                        at, sollicitudin et nibh. Vestibulum tempus imperdiet
                        felis, nec varius ipsum ullamcorper a. Sed vel magna
                        ultrices, ultrices mauris non, sodales elit. Suspendisse
                        ac ipsum sollicitudin, ornare lectus non, pharetra eros.
                    </div>
                </div>

                <div class="mt-6">
                    <div class="text-white text-lg font-extrabold">
                        {{ comments.length }} Comments
                    </div>

                    <div v-for="comment in comments" :key="comment">
                        <div class="flex items-flex mb-4 mt-2">
                            <img
                                class="rounded-full mt-2 w-12 h-12"
                                :src="
                                    'https://picsum.photos/1920/1080?random' ||
                                    ''
                                "
                            />
                            <div class="pl-6 mt-1">
                                <div
                                    class="text-white font-extrabold flex items-baseline"
                                >
                                    <div>{{ comment.user }}</div>
                                    <div class="text-gray-400 pl-3">
                                        {{ comment.time }}
                                    </div>
                                </div>
                                <div
                                    class="text-gray-200 text-sm font-semibold"
                                >
                                    {{ comment.text }}
                                </div>

                                <div class="mt-4 flex items-center">
                                    <ThumbUpOutline
                                        fillColor="#ffffff"
                                        :size="20"
                                        class="pr-2"
                                    />
                                    <div
                                        class="text-gray-400 text-sm font-extrabold pr-10"
                                    >
                                        {{ (Math.random() * 100).toFixed(0) }}
                                    </div>
                                    <ThumbDownOutline
                                        fillColor="#ffffff"
                                        :size="20"
                                        class="pr-2"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-[500px] p-3 sm:block hidden">
                <div v-for="vid in recommendedVideos" :key="vid">
                    <Link
                        class="flex mb-3"
                        :href="route('videos.show', { id: vid.id })"
                    >
                        <RecommendedVideos :vid="vid" />
                    </Link>
                </div>
            </div>
        </div>
    </NavLayout>
</template>
