<script setup>
import AppLayout from '../../Layouts/AppLayout.vue';
import Author from '../../Components/Author.vue';

defineProps({
    question: {
        type: Object,
        required: true
    }
})
</script>

<template>

<AppLayout>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="border-bottom pb-3 mb-4">
            <div class="d-flex align-items-center justify-content-between">
              <h1 class="question-title">{{ question.title }}</h1>
              <a href="index.html" class="btn btn-outline-secondary">All Questions</a>
            </div>
            <div class="d-flex question-meta">
              <div class="me-3">
                <span class="text-muted">Asked </span>
                <time :datetime="question.created_at.machine">{{ question.created_at.human }}</time>
              </div>
              <div class="me-3">
                <span class="text-muted">Modified </span>{{ question.updated_at.human }}
              </div>
              <div>
                <span class="text-muted">Viewed </span> {{ question.views_count }} times
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-9">
          <div class="question-content post-item">
              <div class="vote-col">
                <div class="d-flex flex-column align-items-center">
                  <button title="This post is useful" class="btn btn-outline-secondary btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-caret-up-fill" viewBox="0 0 16 16">
                      <path
                        d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
                    </svg>
                  </button>
                  <div class="votes-count">1</div>
                  <button title="This post is not useful" class="btn btn-outline-secondary btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                      <path
                        d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                    </svg>
                  </button>
                  <button title="Bookmark the post" class="btn text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                      <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2"/>
                    </svg>
                  </button>
                </div>
              </div>
              <div class="post-col actionable">
                <h3>{{ question.title }}</h3>
                <div class="question-body" v-html="question.body">
                </div>
                <div class="d-flex justify-content-between align-items start py-3">
                  <ul class="tags-inline">
                    <li><a href="#" class="tag">PHP</a></li>
                    <li><a href="#" class="tag">Laravel</a></li>
                    <li><a href="#" class="tag">OOP</a></li>
                  </ul>
               <Author :post-at="question.created_at" :user="question.user" />
                </div>
                <div class="post-action">
                  <div class="d-flex gap-1 justify-content-center align-items-center">
                    <button class="btn btn-sm btn-circle shadow text-white btn-secondary me-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-pencil-fill" viewBox="0 0 16 16">
                        <path
                          d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z">
                        </path>
                      </svg>
                    </button>
                    <button class="btn btn-sm btn-circle shadow btn-danger">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-trash-fill" viewBox="0 0 16 16">
                        <path
                          d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z">
                        </path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
          </div>

          <h2 class="mt-4 answer-header">{{ question.answers_count }} Answers</h2>
          <div class="answer-content mt-4">
            <div class="post-item my-4 border-bottom">
              <div class="vote-col">
                <div class="d-flex flex-column align-items-center">
                  <button title="This post is useful" class="btn btn-outline-secondary btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-caret-up-fill" viewBox="0 0 16 16">
                      <path
                        d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
                    </svg>
                  </button>
                  <div class="votes-count">1</div>
                  <button title="This post is not useful" class="btn btn-outline-secondary btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                      <path
                        d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                    </svg>
                  </button>
                  <button title="Bookmark the post" class="btn text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                      <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2"/>
                    </svg>
                  </button>
                  <button title="Mark the answer ans accepted"
                    class="btn p-0 answer-accepted">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-check-lg icon-lg" viewBox="0 0 16 16">
                      <path
                        d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                    </svg>
                  </button>
                </div>
              </div>
              <div class="post-col actionable">
                <div class="question-body">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate, tenetur! Deleniti, dicta qui.
                    Debitis quidem ad laborum incidunt itaque nostrum, officiis eaque perspiciatis ratione magni
                    assumenda rerum fuga ut omniss.</p>
                </div>
                <div class="d-flex justify-content-end mb-2">
                  <div class="author">
                    <div class="author-info">
                      <div class="text-muted">Answered Oct 2, 2023 17:22</div>
                      <a href="#" class="avatar-md">
                        <img src="https://i.pravatar.cc/150?img=32" class="me-2">
                        <span>Dr. Sedrick Lynch</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="post-action">
                  <div class="d-flex gap-1 justify-content-center align-items-center">
                    <button class="btn btn-sm btn-circle shadow text-white btn-secondary me-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-pencil-fill" viewBox="0 0 16 16">
                        <path
                          d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z">
                        </path>
                      </svg>
                    </button>
                    <button class="btn btn-sm btn-circle shadow btn-danger">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-trash-fill" viewBox="0 0 16 16">
                        <path
                          d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z">
                        </path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="post-item my-4 border-bottom">
              <div class="vote-col">
                <div class="d-flex flex-column align-items-center">
                  <button title="This post is useful" class="btn btn-outline-secondary btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-caret-up-fill" viewBox="0 0 16 16">
                      <path
                        d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
                    </svg>
                  </button>
                  <div class="votes-count">1</div>
                  <button title="This post is not useful" class="btn btn-outline-secondary btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                      <path
                        d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                    </svg>
                  </button>
                  <button title="Bookmark the post" class="btn text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                      <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2"/>
                    </svg>
                  </button>
                  <button title="Mark the answer ans accepted" class="btn p-0 text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-check-lg icon-lg" viewBox="0 0 16 16">
                      <path
                        d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                    </svg>
                  </button>
                </div>
              </div>
              <div class="post-col actionable">
                <div class="question-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga soluta error amet sed, earum
                    sapiente, iure, facilis tempore aspernatur quidem odit. Minima nulla numquam ad voluptate!
                    Laboriosam quisquam necessitatibus error.</p>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis ea, numquam excepturi repellat quas
                    commodi, corporis magnam eveniet hic quaerat alias dolor sint dolores neque ratione porro maiores
                    unde odio.</p>
                </div>
                <div class="d-flex justify-content-end mb-2">
                  <div class="author">
                    <div class="author-info">
                      <div class="text-muted">Answered Oct 2, 2023 17:22</div>
                      <a href="#" class="avatar-md">
                        <img src="https://i.pravatar.cc/150?img=33" class="me-2">
                        <span>Dr. Sedrick Lynch</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="post-action">
                  <div class="d-flex gap-1 justify-content-center align-items-center">
                    <button class="btn btn-sm btn-circle shadow text-white btn-secondary me-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-pencil-fill" viewBox="0 0 16 16">
                        <path
                          d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z">
                        </path>
                      </svg>
                    </button>
                    <button class="btn btn-sm btn-circle shadow btn-danger">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-trash-fill" viewBox="0 0 16 16">
                        <path
                          d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z">
                        </path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <h2 class="mt-4 answer-header">Your answer</h2>
          <div>
            <div class="card mt-4">
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
                    <textarea rows="7" class="form-control">hit there</textarea>
                  </div>
                  <div class="tab-pane fade show" id="preview" role="tabpanel" aria-labelledby="preivew-tab"
                    tabindex="0">
                    <div class="preview-body">hi there</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-3">
              <button class="btn btn-outline-primary">Post your answer</button>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <h3 class="fs-5 mb-3">Related</h3>
          <div class="related">
            <div class="related-item">
              <a href="#">
                <div class="answer-votes">5</div>
              </a>
              <a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, dignissimos!</a>
            </div>
            <div class="related-item">
              <a href="#">
                <div class="answer-votes">3</div>
              </a>
              <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing.</a>
            </div>
            <div class="related-item">
              <a href="#">
                <div class="answer-votes answer-accepted">9</div>
              </a>
              <a href="#">Lorem ipsum dolor sit amet.</a>
            </div>
            <div class="related-item">
              <a href="#">
                <div class="answer-votes">7</div>
              </a>
              <a href="#">Lorem ipsum dolor sit amet.</a>
            </div>
          </div>

          <h3 class="fs-5 mt-5">Tags</h3>
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
</AppLayout>

</template>