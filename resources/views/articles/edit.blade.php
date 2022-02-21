@extends('layout.default')
@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>Edit Article</h1>
            <Form action="/articles/{{ $article->id }}" method="POST" id="">
                @csrf
                @method('PUT')
                <input type="text" name="title" id="title" class="form-control mb-2" value="{{ $article->title }}"
                    placeholder="Title">

                <textarea name="exerpt" id="exerpt" placeholder="Exerpt" class="form-control mb-2" cols="30"
                    rows="5">{{ $article->exerpt }}</textarea>

                <textarea name="body" id="body" placeholder="Body" class="form-control mb-2" cols="30"
                    rows="8">{{ $article->body }}</textarea>

                <button class="btn btn-primary mb-2" name="submit" type="submit">Update article</button>

            </Form>
        </div>
    </div>
@endsection
