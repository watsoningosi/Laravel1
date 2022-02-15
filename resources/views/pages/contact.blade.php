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
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                    <h1 class="fg-white text-center">Contact</h1>
                </div>
            </div>
        </div>
    </div> <!-- .page-banner -->
    </header>

    <main>
        <div class="page-section">
            <div class="container">
                <div class="text-center">
                    <h2 class="title-section mb-3">Stay in touch</h2>
                    <p>Just say hello or drop us a line. You can manualy send us email on <a
                            href="mailto:example@mail.com">example@mail.com</a></p>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-lg-8">
                        <form action="#" class="form-contact">
                            <div class="row">
                                <div class="col-sm-6 py-2">
                                    <label for="name" class="fg-grey">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter name..">
                                </div>
                                <div class="col-sm-6 py-2">
                                    <label for="email" class="fg-grey">Email</label>
                                    <input type="text" class="form-control" id="email" placeholder="Email address..">
                                </div>
                                <div class="col-12 py-2">
                                    <label for="subject" class="fg-grey">Subject</label>
                                    <input type="text" class="form-control" id="subject" placeholder="Subject..">
                                </div>
                                <div class="col-12 py-2">
                                    <label for="message" class="fg-grey">Message</label>
                                    <textarea id="message" rows="8" class="form-control"
                                        placeholder="Enter message.."></textarea>
                                </div>
                                <div class="col-12 mt-3">
                                    <button type="submit" class="btn btn-primary px-5">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- .container -->
        </div> <!-- .page-section -->

        <div class="maps-container">
            <div id="google-maps"></div>
        </div>
    </main>
@endsection
