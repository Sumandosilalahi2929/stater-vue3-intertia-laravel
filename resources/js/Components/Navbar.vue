<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <nav class="navbar navbar-expand-lg navbar-laravelflow">
          <div class="container">
            <a class="navbar-brand" href="/">Laravel<strong>flow</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <Link class="nav-link active" aria-current="page" :href="route('question.index')">Questions</Link>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="tags.html">Tags</a>
                </li>
              </ul>
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    John doe
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="bookmarks.html">Bookmarks</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <Link :href="route('login')" class="btn btn-outline-secondary me-2">Log in</Link>
                  <Link :href="route('register')" class="btn btn-primary">Sign up</Link>
                </li>
              </ul>
            </div>
          </div>
    </nav>
</template>