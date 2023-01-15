<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form class="form-inline" action="{{ route('submit') }}" method="POST">
        @csrf
        <div class="form-group mx-sm-3 mb-2">
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="email">
          </div>
        <div class="form-group mx-sm-3 mb-2">
          <label for="inputPassword2" class="sr-only">Password</label>
          <input type="password" name="password" class="form-control" id="inputPassword2" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
      </form>
</body>
</html>
