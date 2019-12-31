<template>
    <span>
        <button class="btn btn-outline-dark" @click="userWishlist">Add to Wishlist</button>
    </span>
</template>

<script>
    export default {
        props: ['productId'],

        mounted() {
            console.log('Wishlist Button Component is ready.')
        },

        methods: {
            userWishlist() {
                axios
                    .post('/products/' + this.productId)
                    .then(response => {
                        console.log(response.data)
                    })
            }
        },
    }
</script>

<style scoped>

</style>