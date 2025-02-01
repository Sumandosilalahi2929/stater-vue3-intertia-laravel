<script setup>
import { useForm, Link } from "@inertiajs/vue3";
import GuestLayout from '../../Layouts/GuestLayout.vue';


const form = useForm({
    email: '',
    password: '',
    remember: false
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
                    <h3>Log in</h3>
                  </div>
                </div>
              </div>
              <form @submit.prevent="form.post('/login')">
                <div class="row gy-3 overflow-hidden">
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" :class="{'is-invalid': form.errors.email}" name="email" v-model="form.email" id="email" placeholder="name@example.com"
                        required>
                      <label for="email" class="form-label">Email</label>
                      <div class="invalid-feedback" v-if="form.errors.email">
                             {{ form.errors.email }}
                     </div>   
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" :class="{'is-invalid': form.errors.password}" name="password" v-model="form.password" id="password" value=""
                        placeholder="Password" required>
                      <label for="password" class="form-label">Password</label>
                      <div class="invalid-feedback" v-if="form.errors.password">
                                                {{ form.errors.password }}
                     </div>   
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" name="remember" v-model="form.remember" id="remember">
                      <label class="form-check-label text-secondary" for="remember">
                        Keep me logged in
                      </label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-grid">
                      <button class="btn btn-lg btn-primary" type="submit">Log in now</button>
                    </div>
                  </div>
                </div>
              </form>
              <div class="row">
                <div class="col-12">
                  <hr class="mt-5 mb-4 border-secondary-subtle">
                  <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end">
                    <Link :href="route('register')" class="link-secondary text-decoration-none">Create new account</Link>
                    <a href="#" class="link-secondary text-decoration-none">Forgot password</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </GuestLayout>
</template>