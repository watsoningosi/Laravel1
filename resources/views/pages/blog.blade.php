@extends('layout.default')
@section('content')
    <div class="page-banner bg-img bg-img-parallax overlay-dark"
        style="background-image: url(../assets/img/bg_image_3.jpg);">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-lg-8">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                            <li class="breadcrumb-item"><a href="index">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                    <h1 class="fg-white text-center">News</h1>
                </div>
            </div>
        </div>
    </div> <!-- .page-banner -->
    </header>

    <main>
        <div class="page-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="row">

                            @foreach ($articles as $article)
                                <div class="col-md-4 py-3">
                                    <div class="card-blog">
                                        <div class="avatar1">
                                            <a href="{{ route('articles.show', $article->id) }}">
                                                <img src="../assets/img/teams/team_1.jpg" class="img-responsive" alt="">
                                            </a>
                                        </div>
                                        <div class="body">
                                            <div class="post-title"><a
                                                    href="/articles/{{ $article->id }}">{{ $article->title }}</a></div>
                                            <div class="post-excerpt">{{ $article->exerpt }}</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="col-12 my-5">
                                <nav aria-label="Page Navigation">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1"
                                                aria-disabled="true">Previous</a>
                                        </li>
                                        <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="#">1 <span
                                                    class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                        </div>
                    </div>

                </div>
            </div> <!-- .container -->
        </div> <!-- .page-section -->
    </main>
@endsection
