
  <!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Bootstrap demo</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>

        <div class="col-md-12">
            <div class="card">

                @foreach ($posts as $post)
                <div class="card-body">
                <div class="card" style="width: 18rem;">
                    <div class="card-body center">
                      <h5 class="card-title">{{ $post->user->name }}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">{{ $post->title }}</h6>
                      <img src="https://digimyvision.com/wp-content/uploads/2022/05/kkk.jpg" class="img-thumbnail" alt="...">
                      <div class="d-flex">
                        <form action="{{ route('storlike') }}" method="POST">
                            @csrf
                                <input type="hidden" value="{{ $post->id }}" name="post_id">
                                <input type="hidden" value="{{ $post->user->id }}" name="user_id">
                                <button class="btn btn-primary btn-sm">Like</button>({{ $post->likes->count() }})
                          </form>
                          <form action="{{ route('comment') }}" method="POST">
                            @csrf
                                <input type="hidden" value="{{ $post->id }}" name="post_id">
                                <input type="text" class="form-control box" name="message">
                                <button class="btn btn-info btn-sm">Comment</button>({{ $post->comments->count() }})
                          </form>
                      </div>
                    </div>

                  </div>
                  <div class="card-footer">
    <button type="button" class="btn btn-danger" value=""><a href="{{ route('edit_post',$post->id) }}" >Edit</a></button>
                    <button type="button" class="btn btn-warning">Delete</button>
                  </div>
                  @endforeach
                </div>
            </div>
        </div>











      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
  </html>
