<script>
export default {
    data() {
        return { products: [] };
    },
    created() {
        this.axios
            .get("http://localhost:8000/api/products/${this.$route.params.id}")
            .then((response) => {
                this.products = response.data;
            });
    },
    mthods: {
        updateProduct() {
            this.axios
                .patch(
                    "http://localhost:8000/api/products/${this.$route.params.id}",
                    this.products
                )
                .then((response) => {
                    {
                        this.$router.push({ name: "home" });
                    }
                });
        },
    },
};
</script>
<template>
    <div>
        <h3 class="text-center">Edit Product</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateProduct">
                    <div class="form-group">
                        <label>Name</label>
                        <input
                            type="text"
                            class="form-control"
                            v-model="products.detail"
                        />
                    </div>
                    <button type="submit" class="btn btn-primary">updateProduct</button>
                </form>
            </div>
        </div>
    </div>
</template>
