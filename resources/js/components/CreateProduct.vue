<script>
export default {
    data() {
        return { products: {} };
    },
    methods: {
        addProduct() {
            this.axios
                .post("http://localhost:8000/api/products", this.products)
                .then(response => this.$router.push({ name: 'home' }))
                .catch((err) => console.log(err))
                .finally(() => (this.loadin = false));
        },
    },
};
</script>
<template>
    <div>
        <h3 class="text-center">Create Product</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addProduct">
                    <div class="form-group">
                        <label>Name</label>
                        <input
                            type="text"
                            class="form-control"
                            v-model="products.name"
                        />
                    </div>
                    <div class="form-group">
                        <label>Detail</label>
                        <input
                            type="text"
                            class="form-control"
                            v-model="product.detail"
                        />
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Create
                    </button>
                </form>
            </div>
        </div>
    </div>
</template>
