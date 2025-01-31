<template>

<section class="bg-light p-3 p-md-4 p-xl-5" style="height: 100vh;">
        <div class="container centered">
            <div class="row justify-content-center">

                <slot />
            </div>
        </div>
    </section>
</template>

<style scoped>
.centered {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
</style>