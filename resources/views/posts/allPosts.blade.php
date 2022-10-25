@extends('includes.default')
@section('content')
    @include('includes.header')
    <div class="container">
        <div class="col-md-12">
            @foreach ($blogRecords as $blogRecord)
                <div class="card flex-md-row mb-4 box-shadow h-md-250" data-id="{{ $blogRecord->postId }}">
                    <div class="card-body d-flex flex-column align-items-start">
                        <h3 class="mb-0">
                            <a class="text-dark" href='{{ "posts/$blogRecord->postId" }}'>{{ $blogRecord->title }}</a>
                        </h3>
                        <div class="mb-1 text-muted">{{ $blogRecord->created_at }}</div>
                        {{-- <p class="card-text mb-auto">{{ $blogRecord->body }}</p> --}}
                        {{-- <a href='{{ ("posts/$blogRecord->id") }}'>Читать полностью</a> --}}
                        {{-- <a href='#'>{{ ("posts.$blogRecord->id") }}</a> --}}
                    </div>
                    {{-- <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb"
                    alt="Card image cap"> --}}
                </div>
            @endforeach
            {{-- <h5>Pagination:</h5> --}}            
            <div class="align-bottom">{{ $blogRecords->links() }}</div>
        </div>
    </div>
    @include('includes.footer')
@endsection
