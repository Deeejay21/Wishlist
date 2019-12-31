<template>
    <span>
        <button class="btn btn-outline-dark" @click="userWishlist" v-text="buttonText"></button>
    </span>
</template>

<script>
    export default {
        props: ['productId', 'wishlist'],

        mounted() {
            console.log('Wishlist Button Component is ready.')
        },

        methods: {
            userWishlist() {
                axios
                    .post('/products/' + this.productId)
                    .then(response => {
                        this.wishlist = ! this.wishlist
                        console.log(response.data)
                    })
            }
        },

        computed: {
            buttonText() {
                return (this.wishlist) ? 'Remove to Wishlist' : 'Add to Wishlist';
            }
        },
    }
</script>

<style scoped>

</style>