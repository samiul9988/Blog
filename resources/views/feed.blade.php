<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    @foreach ($posts as $post)


    <div class="card text-center">
        <div class="card-header">
          Featured
        </div>

        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <form action="{{ route('like') }}" method="post">
            @csrf
            <input type="hidden" value="{{ $post->id }}" name="post_id">
            <input type="hidden" value="{{ $post->user->id }}" name="user_id">
            <button class="btn btn-primary">Like</button>({{ $post->likes->count() }})
          </form>
          @foreach ($post->likes as $like)
                {{ $like->user->name }}
          @endforeach
          <a href="#" class="btn btn-info">Comments</a>
        </div>
        <div class="card-footer text-muted">
          2 days ago
        </div>
      </div>
      @endforeach
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
