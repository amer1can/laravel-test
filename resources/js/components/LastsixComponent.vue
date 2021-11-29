<template>
    <div class="d-flex row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="feature col mt-5 d-flex flex-column" v-for="item in data" :key="item.id">
            <div class="text-center">
                <img :src="item.min_image" alt="" width="100%">
            </div>
            <a :href="/articles/ + item.id"><h3 class="mt-3">{{ item.title }}</h3></a>
            <p class="flex-grow-1 flex-shrink-1">{{ item.text.substring(0,100) }}...</p>
                <div class="d-flex justify-content-between">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                        </svg>
                        <span>{{ item.views }}</span>
                    </div>

                    <likes-component :count="item.likes" :art_id="item.id"></likes-component>

<!--                    <button class="btn-like" @click="setLike(item.id)">-->
<!--                        <span>{{ item.likes }}</span>-->
<!--                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">-->
<!--                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>-->
<!--                        </svg>-->
<!--                    </button>-->
                </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "LastsixComponent",
    props: ['data'],
}
</script>

<style scoped>

</style>
