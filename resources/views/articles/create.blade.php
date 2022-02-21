@extends('layout.default')
@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>New Article</h1>
            <Form action="/articles" method="post" id="">
                @csrf
                <input type="text" name="title" id="title" class="form-control mb-2" placeholder="Title">

                <textarea name="exerpt" id="exerpt" placeholder="Exerpt" class="form-control mb-2" cols="30"
                    rows="5"></textarea>

                <textarea name="body" id="body" placeholder="Body" class="form-control mb-2" cols="30" rows="8"></textarea>

                <button class="btn btn-primary mb-2" name="submit" type="submit">Insert article</button>

            </Form>
        </div>
    </div>
@endsection
