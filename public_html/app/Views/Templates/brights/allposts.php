<?php $this->layout('template') ?>

    <p><?=$this->e($allposts)?></p

<main>
    <div class="py-11">
        <div class="container">
            <div class="text-center">
                <h2 class="mb-5 font-weight-bold">Blog</h2>
                <p class="mb-11 lead">The quick brown fox jumps over the lazy dog.</p>
            </div>
            <div class="row">
                <?php foreach($allposts as $post):?>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-5 mb-xl-0">
                        <div class="card-body">
                            <span class="badge mb-3 text-uppercase bg-neutral"><?= $post['id'];?></span>
                            <h3 class="mb-3 lead lh-lg">
                                <a href="post<?= $post['id'];?>"><?= $post['title'];?></a>
                            </h3>
                            <p>The quick brown fox jumps over the lazy dog.</p>
                            <hr>
                            <div class="d-flex">
                                <p class="mr-auto"><?= $post['data'];?></p>
                                <button class="btn d-flex mr-3" type="button">
                                    <svg class="gi gi-message-circle-fill mr-2 fs-sm" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.07 4.93a10 10 0 0 0-16.28 11 1.06 1.06 0 0 1 .09.64L2 20.8a1 1 0 0 0 .27.91A1 1 0 0 0 3 22h.2l4.28-.86a1.26 1.26 0 0 1 .64.09 10 10 0 0 0 11-16.28zM8 13a1 1 0 1 1 1-1 1 1 0 0 1-1 1zm4 0a1 1 0 1 1 1-1 1 1 0 0 1-1 1zm4 0a1 1 0 1 1 1-1 1 1 0 0 1-1 1z"/>
                                    </svg>
                                    40
                                </button>
                                <button class="btn d-flex" type="button">
                                    <svg class="gi gi-heart-fill mr-2 fs-sm" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 21a1 1 0 0 1-.71-.29l-7.77-7.78a5.26 5.26 0 0 1 0-7.4 5.24 5.24 0 0 1 7.4 0L12 6.61l1.08-1.08a5.24 5.24 0 0 1 7.4 0 5.26 5.26 0 0 1 0 7.4l-7.77 7.78A1 1 0 0 1 12 21z"/>
                                    </svg>
                                    48
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
         <?php endforeach;?>

                <div class="col-md-6 col-xl-4">
                    <div class="card mb-5 mb-xl-0">
                        <div class="card-body">
                            <span class="badge mb-3 text-uppercase bg-neutral">Movies</span>
                            <h3 class="mb-3 lead lh-lg">
                                <a href="#">Blog post title</a>
                            </h3>
                            <p>The quick brown fox jumps over the lazy dog.</p>
                            <hr>
                            <div class="d-flex">
                                <p class="mr-auto">Aug 16, 2019</p>
                                <button class="btn d-flex mr-3" type="button">
                                    <svg class="gi gi-message-circle-fill mr-2 fs-sm" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.07 4.93a10 10 0 0 0-16.28 11 1.06 1.06 0 0 1 .09.64L2 20.8a1 1 0 0 0 .27.91A1 1 0 0 0 3 22h.2l4.28-.86a1.26 1.26 0 0 1 .64.09 10 10 0 0 0 11-16.28zM8 13a1 1 0 1 1 1-1 1 1 0 0 1-1 1zm4 0a1 1 0 1 1 1-1 1 1 0 0 1-1 1zm4 0a1 1 0 1 1 1-1 1 1 0 0 1-1 1z"/>
                                    </svg>
                                    24
                                </button>
                                <button class="btn d-flex" type="button">
                                    <svg class="gi gi-heart-fill mr-2 fs-sm" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 21a1 1 0 0 1-.71-.29l-7.77-7.78a5.26 5.26 0 0 1 0-7.4 5.24 5.24 0 0 1 7.4 0L12 6.61l1.08-1.08a5.24 5.24 0 0 1 7.4 0 5.26 5.26 0 0 1 0 7.4l-7.77 7.78A1 1 0 0 1 12 21z"/>
                                    </svg>
                                    32
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <span class="badge mb-3 text-uppercase bg-neutral">Music</span>
                            <h3 class="mb-3 lead lh-lg">
                                <a href="#">Blog post title</a>
                            </h3>
                            <p>The quick brown fox jumps over the lazy dog.</p>
                            <hr>
                            <div class="d-flex">
                                <p class="mr-auto">Apr 8, 2019</p>
                                <button class="btn d-flex mr-3" type="button">
                                    <svg class="gi gi-message-circle-fill mr-2 fs-sm" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.07 4.93a10 10 0 0 0-16.28 11 1.06 1.06 0 0 1 .09.64L2 20.8a1 1 0 0 0 .27.91A1 1 0 0 0 3 22h.2l4.28-.86a1.26 1.26 0 0 1 .64.09 10 10 0 0 0 11-16.28zM8 13a1 1 0 1 1 1-1 1 1 0 0 1-1 1zm4 0a1 1 0 1 1 1-1 1 1 0 0 1-1 1zm4 0a1 1 0 1 1 1-1 1 1 0 0 1-1 1z"/>
                                    </svg>
                                    8
                                </button>
                                <button class="btn d-flex" type="button">
                                    <svg class="gi gi-heart-fill mr-2 fs-sm" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 21a1 1 0 0 1-.71-.29l-7.77-7.78a5.26 5.26 0 0 1 0-7.4 5.24 5.24 0 0 1 7.4 0L12 6.61l1.08-1.08a5.24 5.24 0 0 1 7.4 0 5.26 5.26 0 0 1 0 7.4l-7.77 7.78A1 1 0 0 1 12 21z"/>
                                    </svg>
                                    16
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
