@extends('layout.default')
@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>New Article</h1>
            <Form action="/articles" method="post" id="">
                @csrf
                <div class="field">
                    <input type="text" name="title" id="title" value="{{ old('title') }}"
                        class="form-control mb-2 @error('title') is-danger @enderror" placeholder="Title">
                    @error('title')
                        <p class="help is-danger" style="color:red">{{ $errors->first('title') }}</p>
                    @enderror
                </div>
                <div class="field">
                    <textarea name="exerpt" id="exerpt" placeholder="Exerpt" value="{{ old('exerpt') }}"
                        class="form-control mb-2 @error('exerpt') is-danger @enderror" cols="30" rows="5"></textarea>
                    @error('exerpt')
                        <p class="help is-danger" style="color:red">{{ $errors->first('exerpt') }}</p>
                    @enderror
                </div>
                <div class="field">
                    <textarea name="body" id="body" placeholder="Body" value="{{ old('body') }}"
                        class="form-control mb-2 @error('body') is-danger @enderror" cols="30" rows="8"></textarea>
                    @error('body')
                        <p class="help is-danger" style="color:red">{{ $errors->first('body') }}</p>
                    @enderror
                </div>
                <button class="btn btn-primary mb-2" name="submit" type="submit">Insert article</button>

            </Form>
        </div>
    </div>
@endsection
