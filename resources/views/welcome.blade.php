<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/scss/app.scss', 'resources/js/app.js'])
        @else
           
        @endif
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-laravelflow">
          <div class="container">
            <a class="navbar-brand" href="/"><strong>Stackoverflow</strong>Clone</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.html">Questions</a>
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
                  <a href="login.html" class="btn btn-outline-secondary">Log in</a>
                  <a href="register.html" class="btn btn-primary">Sign up</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      
        <main class="py-4">
          <div class="container">
            <div class="row">
              <div class="col-md-9">
                <div class="d-flex align-items-center justify-content-between">
                  <h1 class="page-header">All Questions</h1>
                </div>
                <div class="card mt-3">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <div class="post-item question-summary">
                        <div class="question-summary-stats">
                          <div class="stats-item vote"><strong>1</strong> vote</div>
                          <div class="stats-item status has-answers"><strong>1</strong> answer</div>
                          <div class="stats-item view">
                            5 views
                          </div>
                        </div>
                        <div class="question-summary-content actionable">
                          <div class="d-flex align-items-center">
                            <h3 class="mt-0 question-summary-title">
                              <a href="single.html">Commodi officia cum quia sunt voluptates possimus quia nostrum</a>
                            </h3>
                            <div class="ml-auto"></div>
                          </div>
                          <div class="excerpt">Ut et amet recusandae ullam tenetur. Molestiae dolorem est nesciunt corporis
                            sit corrupti neque. Et pariatur et ea.
                            Vero quis debitis et deleniti aliquid. Impedit deleniti ipsa qui libero unde quibusdam autem.
                            Doloremque iste sit voluptate deserunt....</div>
                          <div class="d-flex justify-content-between align-items-center mt-2">
                            <ul class="tags-inline">
                              <li><a href="#" class="tag">PHP</a></li>
                              <li><a href="#" class="tag">Laravel</a></li>
                              <li><a href="#" class="tag">OOP</a></li>
                            </ul>
                            <div class="question-summary-author">
                              <a href="#" class="avatar-sm">
                                <img src="https://i.pravatar.cc/150?img=30" size="16" alt="" srcset="">
                                Dr. Sedrick Lynch
                              </a>
                              <span class="text-muted">asked <time datetime="2024-05-05">13 minutes ago</time></span>
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
                    <li class="list-group-item">
                      <div class="post-item question-summary">
                        <div class="question-summary-stats">
                          <div class="stats-item vote"><strong>1</strong> vote</div>
                          <div class="stats-item status has-answers has-accepted-answer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                              class="bi bi-check-lg" viewBox="0 0 16 16">
                              <path
                                d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                            </svg>
                            <strong>1</strong> answer
                          </div>
                          <div class="stats-item view">
                            5 views
                          </div>
                        </div>
                        <div class="question-summary-content actionable">
                          <div class="d-flex align-items-center">
                            <h3 class="mt-0 question-summary-title">
                              <a href="single.html">Commodi officia cum quia sunt voluptates possimus quia nostrum</a>
                            </h3>
                            <div class="ml-auto"></div>
                          </div>
                          <div class="excerpt">Ut et amet recusandae ullam tenetur. Molestiae dolorem est nesciunt corporis
                            sit corrupti neque. Et pariatur et ea.
                            Vero quis debitis et deleniti aliquid. Impedit deleniti ipsa qui libero unde quibusdam autem.
                            Doloremque iste sit voluptate deserunt....</div>
                          <div class="d-flex justify-content-between align-items-center mt-2">
                            <ul class="tags-inline">
                              <li><a href="#" class="tag">PHP</a></li>
                              <li><a href="#" class="tag">Laravel</a></li>
                              <li><a href="#" class="tag">OOP</a></li>
                            </ul>
                            <div class="question-summary-author">
                              <a href="#" class="avatar-sm">
                                <img src="https://i.pravatar.cc/150?img=50" size="16" alt="" srcset="">
                                Dr. Sedrick Lynch
                              </a>
                              <span class="text-muted ms-2">asked <time datetime="2024-05-05">13 minutes ago</time></span>
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
                  </ul>
                </div>
      
                <nav class="mt-4" aria-label="Pagination">
                  <ul class="pagination pagination-sm justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                  </ul>
                </nav>
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
        </main>
      </body>
</html>
