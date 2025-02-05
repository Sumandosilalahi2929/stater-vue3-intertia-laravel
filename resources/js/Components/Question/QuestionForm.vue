<template>
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
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Post</button>
                    </div>
         </form>
</template>