@extends('includes.default')
@section('content')
    @include('includes.header')
    <main role="main" class="container">
        <div сlass="row">

            <form style="display:none" action="{{ route('makeSubscription') }}" method="POST" id="makeSubscription-form">
                @csrf
                <input name="user_id" value="{{ $boxSubscription['myUserId'] }}">
                <input name="author_id" value="{{ $boxSubscription['viewUserId'] }}">
            </form>
            @if ($boxSubscription['thereSubscription'] == true)
                <button type="submit" id="submitMakeSubscription" formaction="{{ route('makeSubscription') }}"
                    formmethod="POST" class="btn btn-outline-secondary" form="makeSubscription-form">Отписаться</button>
                <div class="border-bottom my-4"></div>
            @elseif ($boxSubscription['myUserId'] == $boxSubscription['viewUserId'])
            @else
                <button type="submit" class="btn btn-outline-secondary" id="submitMakeSubscription"
                    formaction="{{ route('makeSubscription') }}" formmethod="POST"
                    form="makeSubscription-form">Подписаться</button>
                <div class="border-bottom my-4"></div>
            @endif


        </div>

        <div class="row">
            <div class="col-md-12 blog-main">
                <div class="blog-post">
                    <h2 class="blog-post-title">{{ $User->name }}</h2>
                    <p class="blog-post-meta">{{ $User->created_at }}</p>
                    <p>{{ $User->role }}</p>
                    <p>{{ $User->email }}</p>
                </div>
            </div>
        </div>
    </main>
    @include('includes.footer')
@endsection
