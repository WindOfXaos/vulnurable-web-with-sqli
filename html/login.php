<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/login.css">

  <title></title>
</head>

<body>
  <div class="container d-flex justify-content-center">
    <form action="../php/login.php" method="post">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">profile ID</label>
        <input type="text" class="ins form-control" name="uname" id="exampleInputEmail1" placeholder="write your id"
          aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="ins form-control" name="password" id="exampleInputPassword1">
      </div>
      <button type="submit" class="btn btn-primary">log in</button>
  </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>