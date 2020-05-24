<?php $this->layout('template') ?>

<p><?=$this->e($post)?></p>
    <?php //var_dump($post) ?>
<main>
    <div class="py-11 mx-auto" style="max-width: 720px;">
        <div class="container">
            <h1 class="mb-8 fs-lg"><?= $post['title'];?></h1>
            <svg class="mb-8 rounded" viewBox="0 0 100 50" xmlns="http://www.w3.org/2000/svg">
                <rect width="100%" height="100%" fill="var(--neutral)"></rect>
                <span><img class="w-150 rounded" src="app/Views/Templates/brights/dist/img/photo-1.jpg" style="float:left; margin-right:15px; margin-top:3px;" class="round" width=100" height="100" alt=""></span>
            </svg>
            <h2 class="mb-5 fs-sm">Chapter</h2>
            <p class="mb-3 lead"><?= $post['content'];?></p>
            <p class="mb-3 lead">A favorite copy set by writing teachers for their pupils is the following, because it contains every letter of the alphabet: „The quick brown fox jumps over the lazy dog.“</p>
            <p class="mb-8 lead">A favorite copy set by writing teachers for their pupils is the following, because it contains every letter of the alphabet: „The quick brown fox jumps over the lazy dog.“</p>
            <h2 class="mb-5 fs-sm">Another chapter</h2>
            <p class="mb-3 lead">A favorite copy set by writing teachers for their pupils is the following, because it contains every letter of the alphabet: „The quick brown fox jumps over the lazy dog.“</p>
            <p class="mb-3 lead">A favorite copy set by writing teachers for their pupils is the following, because it contains every letter of the alphabet: „The quick brown fox jumps over the lazy dog.“</p>
            <p class="mb-8 lead">A favorite copy set by writing teachers for their pupils is the following, because it contains every letter of the alphabet: „The quick brown fox jumps over the lazy dog.“</p>
            <h2 class="mb-5 fs-sm">Something else here</h2>
            <p class="mb-3 lead">A favorite copy set by writing teachers for their pupils is the following, because it contains every letter of the alphabet: „The quick brown fox jumps over the lazy dog.“</p>
            <p class="mb-3 lead">A favorite copy set by writing teachers for their pupils is the following, because it contains every letter of the alphabet: „The quick brown fox jumps over the lazy dog.“</p>
            <p class="mb-8 lead">A favorite copy set by writing teachers for their pupils is the following, because it contains every letter of the alphabet: „The quick brown fox jumps over the lazy dog.“</p>
            <h2 class="mb-5 fs-sm">Comments</h2>
            <div class="input-group comment mb-5">
                <div class="input-group-prepend">
                    <svg class="gi gi-message-circle-fill fs-sm" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.07 4.93a10 10 0 0 0-16.28 11 1.06 1.06 0 0 1 .09.64L2 20.8a1 1 0 0 0 .27.91A1 1 0 0 0 3 22h.2l4.28-.86a1.26 1.26 0 0 1 .64.09 10 10 0 0 0 11-16.28zM8 13a1 1 0 1 1 1-1 1 1 0 0 1-1 1zm4 0a1 1 0 1 1 1-1 1 1 0 0 1-1 1zm4 0a1 1 0 1 1 1-1 1 1 0 0 1-1 1z"/>
                    </svg>
                </div>
                <input class="form-control" placeholder="Type message...">
            </div>
            <button class="btn toggle" data-toggle="collapse" data-target="#posts" type="button" aria-controls="posts" aria-expanded="true"></button>
            <div class="collapse show" id="posts">
                <div class="card my-5">
                    <div class="card-body">
                        <div class="d-flex mb-5">
                            <span class="avatar avatar-md mr-3 lead bg-primary rounded-circle">jd</span>
                            <div class="mr-auto">
                                <h3 class="fs-xxs lh-lg">
                                    <a href="#">John Doe</a>
                                </h3>
                                <p>Manhattan</p>
                            </div>
                            <div class="dropdown">
                                <button class="btn" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="false">
                                    <svg class="gi gi-more-vertical fs-sm" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12" cy="12" r="2"/>
                                        <circle cx="12" cy="5" r="2"/>
                                        <circle cx="12" cy="19" r="2"/>
                                    </svg>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <button class="dropdown-item" type="button">Action</button>
                                    <button class="dropdown-item" type="button">Another action</button>
                                </div>
                            </div>
                        </div>
                        <p class="mb-5">The quick brown fox jumps over the lazy dog.</p>
                        <div class="d-flex">
                            <button class="btn btn-sm btn-circle btn-neutral mr-auto" type="button">
                                <svg class="gi gi-heart-fill fs-sm" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 21a1 1 0 0 1-.71-.29l-7.77-7.78a5.26 5.26 0 0 1 0-7.4 5.24 5.24 0 0 1 7.4 0L12 6.61l1.08-1.08a5.24 5.24 0 0 1 7.4 0 5.26 5.26 0 0 1 0 7.4l-7.77 7.78A1 1 0 0 1 12 21z"/>
                                </svg>
                            </button>
                            <button class="btn" type="button">
                                <svg class="gi gi-bookmark-fill fs-sm" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 21a1 1 0 0 1-.49-.13A1 1 0 0 1 5 20V5.33A2.28 2.28 0 0 1 7.2 3h9.6A2.28 2.28 0 0 1 19 5.33V20a1 1 0 0 1-.5.86 1 1 0 0 1-1 0l-5.67-3.21-5.33 3.2A1 1 0 0 1 6 21z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="d-flex mb-5">
                            <span class="avatar avatar-md mr-3 lead bg-success rounded-circle">jd</span>
                            <div class="mr-auto">
                                <h3 class="fs-xxs lh-lg">
                                    <a href="#">John Doe</a>
                                </h3>
                                <p>Manhattan</p>
                            </div>
                            <div class="dropdown">
                                <button class="btn" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="false">
                                    <svg class="gi gi-more-vertical fs-sm" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12" cy="12" r="2"/>
                                        <circle cx="12" cy="5" r="2"/>
                                        <circle cx="12" cy="19" r="2"/>
                                    </svg>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <button class="dropdown-item" type="button">Action</button>
                                    <button class="dropdown-item" type="button">Another action</button>
                                </div>
                            </div>
                        </div>
                        <p class="mb-5">The quick brown fox jumps over the lazy dog.</p>
                        <div class="d-flex">
                            <button class="btn btn-sm btn-circle btn-neutral mr-auto" type="button">
                                <svg class="gi gi-heart-fill fs-sm" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 21a1 1 0 0 1-.71-.29l-7.77-7.78a5.26 5.26 0 0 1 0-7.4 5.24 5.24 0 0 1 7.4 0L12 6.61l1.08-1.08a5.24 5.24 0 0 1 7.4 0 5.26 5.26 0 0 1 0 7.4l-7.77 7.78A1 1 0 0 1 12 21z"/>
                                </svg>
                            </button>
                            <button class="btn" type="button">
                                <svg class="gi gi-bookmark-fill fs-sm" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 21a1 1 0 0 1-.49-.13A1 1 0 0 1 5 20V5.33A2.28 2.28 0 0 1 7.2 3h9.6A2.28 2.28 0 0 1 19 5.33V20a1 1 0 0 1-.5.86 1 1 0 0 1-1 0l-5.67-3.21-5.33 3.2A1 1 0 0 1 6 21z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex mb-5">
                            <span class="avatar avatar-md mr-3 lead bg-info rounded-circle">jd</span>
                            <div class="mr-auto">
                                <h3 class="fs-xxs lh-lg">
                                    <a href="#">John Doe</a>
                                </h3>
                                <p>Manhattan</p>
                            </div>
                            <div class="dropdown">
                                <button class="btn" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="false">
                                    <svg class="gi gi-more-vertical fs-sm" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12" cy="12" r="2"/>
                                        <circle cx="12" cy="5" r="2"/>
                                        <circle cx="12" cy="19" r="2"/>
                                    </svg>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <button class="dropdown-item" type="button">Action</button>
                                    <button class="dropdown-item" type="button">Another action</button>
                                </div>
                            </div>
                        </div>
                        <p class="mb-5">The quick brown fox jumps over the lazy dog.</p>
                        <div class="d-flex">
                            <button class="btn btn-sm btn-circle btn-neutral mr-auto" type="button">
                                <svg class="gi gi-heart-fill fs-sm" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 21a1 1 0 0 1-.71-.29l-7.77-7.78a5.26 5.26 0 0 1 0-7.4 5.24 5.24 0 0 1 7.4 0L12 6.61l1.08-1.08a5.24 5.24 0 0 1 7.4 0 5.26 5.26 0 0 1 0 7.4l-7.77 7.78A1 1 0 0 1 12 21z"/>
                                </svg>
                            </button>
                            <button class="btn" type="button">
                                <svg class="gi gi-bookmark-fill fs-sm" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 21a1 1 0 0 1-.49-.13A1 1 0 0 1 5 20V5.33A2.28 2.28 0 0 1 7.2 3h9.6A2.28 2.28 0 0 1 19 5.33V20a1 1 0 0 1-.5.86 1 1 0 0 1-1 0l-5.67-3.21-5.33 3.2A1 1 0 0 1 6 21z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
