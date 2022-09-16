<script>
export default {};
</script>
<template>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link to="/" class="nav-item nav-link"
                        >Products List</router-link
                    >
                    <router-link to="/create" class="nav-item nav-link">
                        >Create Product</router-link
                    >
                </div>
            </div>
        </nav>
        <router-view></router-view>
    </div>
</template>
https://www.laravelcode.com/post/laravel-8-crud-operation-with-vuejs
