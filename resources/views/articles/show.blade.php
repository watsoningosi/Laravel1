@extends('layout.default')
@section('content')
    <main>
        <div class="page-section pt-4">
            <div class="container">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-4">
                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                        <li class="breadcrumb-item"><a href="blog">Blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page">How to growth your Business with scalable
                            Employee</li>
                    </ol>
                </nav>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-single-wrap">
                            <div class="post-thumbnail">
                                <img src="/assets/img/bg_image_1.jpg" alt="">
                            </div>
                            <h1 class="post-title">How to growth your Business with scalable Employee</h1>
                            <div class="post-meta">
                                <div class="post-author">
                                    <span class="text-grey">By</span> <a href="#">Admin</a>
                                </div>
                                <span class="gap">|</span>
                                <div class="post-date">
                                    <a href="#">22 Jan, 2018</a>
                                </div>
                                <span class="gap">|</span>
                                <div>
                                    <a href="#">StreetStyle</a>, <a href="#">Fashion</a>, <a href="#">Couple</a>
                                </div>
                                <span class="gap">|</span>
                                <div class="post-comment-count">
                                    <a href="#">8 Comments</a>
                                </div>
                            </div>
                            <div class="post-content">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, magnam aliquam sit
                                    tempora atque numquam, porro autem eius in odio quos nisi sequi doloribus, quo ipsam
                                    labore corrupti mollitia! Quos.</p>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit voluptatum dolor, nemo
                                    optio voluptatibus, distinctio obcaecati repudiandae recusandae sint sunt neque
                                    dignissimos reiciendis voluptates voluptate quibusdam temporibus, amet molestiae hic?
                                </p>
                                <p>Praesent vel mi bibendum, finibus leo ac, condimentum arcu. Pellentesque sem ex,
                                    tristique sit amet suscipit in, mattis imperdiet enim. Integer tempus justo nec velit
                                    fringilla, eget eleifend neque blandit. Sed tempor magna sed congue auctor. Mauris eu
                                    turpis eget tortor ultricies elementum. Phasellus vel placerat orci, a venenatis justo.
                                    Phasellus faucibus venenatis nisl vitae vestibulum. Praesent id nibh arcu. Vivamus
                                    sagittis accumsan felis, quis vulputate</p>
                                <div class="post-tags">
                                    <p class="mb-2">Tags:</p>
                                    <a href="#" class="tag-link">LifeStyle</a>
                                    <a href="#" class="tag-link">Food</a>
                                    <a href="#" class="tag-link">Coronavirus</a>
                                </div>
                            </div>
                        </div> <!-- .blog-single-wrap -->

                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5">Leave a comment</h3>
                            <form action="#" class="">
                                <div class="form-row form-group">
                                    <div class="col-md-6">
                                        <label for="name">Name *</label>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email">Email *</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="url" class="form-control" id="website">
                                </div>

                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="msg" id="message" cols="30" rows="8" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Post Comment" class="btn btn-primary">
                                </div>

                            </form>
                        </div> <!-- .comment-form-wrap -->
                    </div>


                </div>
            </div> <!-- .container -->
        </div> <!-- .page-section -->
    </main>
@endsection
