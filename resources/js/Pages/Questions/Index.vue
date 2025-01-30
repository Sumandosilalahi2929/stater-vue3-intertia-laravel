<template>
    <AppLayout>
        <div class="container">
            <div class="row">
              <div class="col-md-9">
                <div class="d-flex align-items-center justify-content-between">
                  <h1 class="page-header">All Questions</h1>
                </div>
                <div class="card mt-3">
                  <ul class="list-group list-group-flush">
                  <QuestionSummary v-for="question in questions.data" :key="question.id" :question="question" />
                  </ul>
                </div>
      
             <Pagination :meta="questions.meta"/>

              </div>
              <div class="col-md-3">
                <div class="d-grid">
                  <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#new-question-modal">Ask Question</button>
                </div>
      
                <ul class="nav nav-underline flex-column mt-4">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Latest</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Unanswered</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Scored</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Mine</a>
                  </li>
                </ul>
                <h2 class="fs-5 mt-5">Related Tags</h2>
                <ul class="tags-list mt-3">
                  <li><a href="#" class="tag mb-2">Javascript</a></li>
                  <li><a href="#" class="tag mb-2">JQuery</a></li>
                  <li><a href="#" class="tag mb-2">Vue.js</a></li>
                  <li><a href="#" class="tag mb-2">React.js</a></li>
                  <li><a href="#" class="tag mb-2">Inertia.js</a></li>
                  <li><a href="#" class="tag mb-2">PHP</a></li>
                  <li><a href="#" class="tag mb-2">Laravel</a></li>
                  <li><a href="#" class="tag mb-2">Bootstrap</a></li>
                  <li><a href="#" class="tag mb-2">Tailwind</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="modal fade" id="new-question-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="new-question-modal-label" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="new-question-modal-label">Ask Question</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="row mb-3">
                      <div class="col-7">
                        <label for="question-title" class="form-label">Question title</label>
                        <input type="text" class="form-control" name="title" id="question-title">
                      </div>
                      <div class="col-5">
                        <label for="question-tags" class="form-label">Tags</label>
                        <input type="text" class="form-control" name="tags" id="question-tags">
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="question-body" class="form-label">Explain your question</label>
                      <div class="card">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#write" type="button" role="tab"
                                href="#">Write</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#" data-bs-toggle="tab" data-bs-target="#preview" type="button"
                                role="tab">Preview</a>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="write" role="tabpanel" aria-labelledby="write-tab"
                              tabindex="0">
                              <textarea rows="7" class="form-control" name="body">hit there</textarea>
                            </div>
                            <div class="tab-pane fade show" id="preview" role="tabpanel" aria-labelledby="preivew-tab"
                              tabindex="0">
                              <div class="preview-body">
                                hi there
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Post</button>
                </div>
              </div>
            </div>
          </div> 
    </AppLayout>

<!-- <h1>Welcome!</h1>

<div v-for="question in questions" :key="question.id">
    <Link :href="route('question.show', question.id)">
   {{ question.title }}
    </Link>
</div> -->

<Head title="All Questions" />

</template>



<script setup>

import { Link, Head } from "@inertiajs/vue3";
import AppLayout from "../../Layouts/AppLayout.vue";
import QuestionSummary from "../../Components/Question/QuestionSummary.vue";
import Pagination from "../../Components/Pagination.vue";
defineProps({
    questions: {
        type: Object,
        required:true,
    }
})
</script>