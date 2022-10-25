<div class="container">
    <header class="blog-header lh-1 py-3 my-4 border-bottom col-12">
        <div class="row justify-content-between align-items-center">
            <div class="col-2">
                <a class="link-secondary" href="{{ route('posts.allPosts') }}">Все посты</a>
            </div>
            <div class="col-2">
                <a class="link-secondary" href="{{ route('posts.create') }}">Создать пост</a>
            </div>
            <div class="col-2">
                <a class="link-secondary" href="{{ route('posts.myPosts') }}">Мои посты</a>
            </div>            
            <div class="col-2">
                <a class="link-secondary" href="{{ route('users.myUser') }}">Мой аккаунт</a>
            </div>           
            <div class="col-2">
                <a class="link-secondary" href="{{ route('subscribe') }}">Подписки</a>
            </div>           
            <div class="col-2 justify-content-end align-items-center">
                {{-- <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a> --}}
                <form method="POST" action="{{ route('logout') }}">
                    @csrf    
                    <button type="submit" class="btn btn-outline-dark">
                        {{ __('Выход') }}
                    </button>
                </form>
            </div>
        </div>
    </header>
</div>