<template>
    <div>
        <div class="feature col" v-for="item in data" :key="item.id">
            <div class="feature-icon bg-primary bg-gradient">
                <img :src="item.min_image" alt="">
            </div>
            <h2>{{ item.title }}</h2>
            <p>{{ item.text }}</p>
            <a href="#" class="icon-link">
                Call to action
                <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
            </a>
        </div>
    </div>
</template>

<script>
export default {
    name: "LastsixComponent",
    props: ['data']
}
</script>

<style scoped>

</style>
