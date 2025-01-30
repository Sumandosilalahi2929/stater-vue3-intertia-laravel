<script setup>

import { Link } from "@inertiajs/vue3";

defineProps({
    question: {
        type:Object,
        required: true
    }
})

</script>


<template>
  <li class="list-group-item">
                      <div class="post-item question-summary">
                        <div class="question-summary-stats">
                          <div class="stats-item vote"><strong>{{ question.votes_count }}</strong> vote</div>
                          <div class="stats-item status has-answers"><strong>{{ question.answers_count }}</strong> answer</div>
                          <div class="stats-item view">
                            {{ question.views_count }} 
                          </div>
                        </div>
                        <div class="question-summary-content actionable">
                          <div class="d-flex align-items-center">
                            <h3 class="mt-0 question-summary-title">
                                <Link :href="route('question.show', question.slug)">{{ question.title }}</Link>
                            </h3>
                            <div class="ml-auto"></div>
                          </div>
                          <div class="excerpt">{{ question.summary }}</div>
                          <div class="d-flex justify-content-between align-items-center mt-2">
                            <ul class="tags-inline">
                              <li><a href="#" class="tag">PHP</a></li>
                              <li><a href="#" class="tag">Laravel</a></li>
                              <li><a href="#" class="tag">OOP</a></li>
                            </ul>
                            <div class="question-summary-author">
                              <a href="#" class="avatar-sm">
                                <img :src="question.user.avatarUrl" size="16" alt="" srcset="">
                                {{ question.user.name }}
                              </a> <span class="text-muted">asked <time :datetime="question.created_at.machine">{{ question.created_at.human }}</time></span>
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
                    </li>
</template>