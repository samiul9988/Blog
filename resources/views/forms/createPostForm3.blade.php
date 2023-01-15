<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('submit') }}" method="POST">
        @csrf
        <div class="form-group mx-sm-3 mb-2">
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="email">
          </div>
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
          </div>
        </div>
        <input type="submit" name="submit" value="submit">
      </form>
</body>
</html>
