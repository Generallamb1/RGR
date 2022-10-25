@extends('includes.default')
@section('content')
    @include('includes.header')
    <main role="main" class="container">
        <div class="row">
            <div class="col-md-12 blog-main">
                <div class="blog-post" >
                    <h3>Создание поста</h3>
                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <p>
                            <label for="input">Название</label>
                            <input class="form-control" type="text" id="title" name="title" placeholder="Название">
                            @error('title')
                                <div class="text-danger">Ошибка в заполнении названия</div>
                            @enderror
                        </p>
                        <p>
                            <label for="textarea">Содержание</label>
                            <textarea class="form-control" id="body" name="body" rows="3" placeholder="Содержание"></textarea>
                            @error('body')
                                <div class="text-danger">Ошибка в заполнении содержания</div>
                            @enderror
                        </p>
                        <p>
                            <button type="submit" name="submit" id="submit" class="btn btn-outline-secondary">Создать</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </main>
    @include('includes.footer')
@endsection
