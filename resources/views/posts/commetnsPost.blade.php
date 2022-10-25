<div id="commentsPost" class="border-top">
    <div class="row my-4">
        <div class="col-12">
            {{-- {{$comments[0]->body}} --}}
            <div class="blog-post">
                @foreach ($comments as $comment)
                    <div class="card flex-md-row mb-4 box-shadow h-md-250" style = "display:flex;
                    flex-direction: row; justify-content:space-between;
                    ">
                        <div>
                            <p style = "margin-left:8px; display:inline"> {{ $comment->body }} </p>
                        </div>
                        <div style="display:flex; align-items:center">
                            <p style = "display:inline; margin-right:8px;" class="blog-post-meta"><a href="{{ route('users.user', $comment->from_user) }}">
                                    {{ $comment->name }}</a></p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="{{ route('addCommentsForPosst') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <p>
                    <input id="on_post" name="on_post" style="display:none" value="{{ $Post->postId }}">
                    <input id="from_user" name="from_user" style="display:none" value="{{ $myUserId }}">
                    <textarea class="form-control" id="body" name="body" rows="3" placeholder="Комментарий"></textarea>
                    @error('body')
                    <div class="text-danger">Ошибка в заполнении содержания</div>
                @enderror
                </p>
                <p>
                    <button type="submit" name="submitComment" id="submitComment"
                        class="btn btn-outline-secondary">Добавить
                        комментарий</button>
                </p>
            </form>
        </div>
    </div>
</div>
