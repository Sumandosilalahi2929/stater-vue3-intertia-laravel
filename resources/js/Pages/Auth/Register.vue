<script setup>
import { useForm } from "@inertiajs/vue3";
import GuestLayout from '../../Layouts/GuestLayout.vue';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: ''
})
</script>
<template>
    <GuestLayout>
        <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
                    <div class="card border-0 shadow-sm rounded-4">
                        <div class="card-body py-4 px-5">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-5">
                                        <h3>Register</h3>
                                    </div>
                                </div>
                            </div>
                            <form @submit.prevent="form.post('/register')">
                                <div class="row gy-2 overflow-hidden">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" :class="{'is-invalid': form.errors.name}" name="name" v-model="form.name" id="name"
                                                placeholder="Name">
                                            <label for="name" class="form-label">Name</label>
                                            <div class="invalid-feedback" v-if="form.errors.name">
                                                {{ form.errors.name }}
                                            </div>                                          
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" :class="{'is-invalid': form.errors.email}" name="email" v-model="form.email" id="email"
                                                placeholder="Email">
                                            <label for="email" class="form-label">Email</label>
                                            <div class="invalid-feedback" v-if="form.errors.email">
                                                {{ form.errors.email }}
                                            </div>     
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" :class="{'is-invalid': form.errors.password}" name="password" v-model="form.password" id="password"
                                                value="" placeholder="Password">
                                            <label for="password" class="form-label">Password</label>
                                            <div class="invalid-feedback" v-if="form.errors.password">
                                                {{ form.errors.password }}
                                            </div>     
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" :class="{'is-invalid': form.errors.password_confirmation}" name="password_confirmation" v-model="form.password_confirmation"
                                                id="password_confirmation" value="" placeholder="Password">
                                            <label for="password" class="form-label">Password Confirmation</label>
                                            <div class="invalid-feedback" v-if="form.errors.password_confirmation">
                                                {{ form.errors.password_confirmation }}
                                            </div>     
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button class="btn btn-lg btn-primary" type="submit">Register now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-12">
                                    <hr class="mt-4 mb-4 border-secondary-subtle">
                                    <div class="text-center">
                                        Already have an account? <a href="login.html"
                                            class="link-secondary text-decoration-none">Sign in</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </GuestLayout>
</template>