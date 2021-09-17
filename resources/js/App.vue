// App.vue

<template>
    <div class="">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container">
                <ul class="navbar-nav">
                      <li class="nav-item">
                        <router-link to="/customer" class="nav-link">Customer</router-link>
                    </li>
                </ul>
            </div>
        </nav>
        <br/>

        <router-view></router-view>
    </div>
</template>

<script>
    export default {}
</script>