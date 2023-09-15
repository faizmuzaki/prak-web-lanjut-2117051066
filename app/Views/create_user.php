<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
  html,
body {
  height: 100%;
}

.form-signin {
  max-width: 330px;
  padding: 1rem;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
</head>
<body>
  <main class="form-signin w-100 m-auto">
    <form method="POST" action="<?=base_url('/user/store')?>">
      <h1 class="h3 mt-5 mb-3 fw-normal">Let's sign up</h1>
  
      <div class="form-floating">
        <input type="text" class="form-control mt-2" id="floatingName" placeholder="Nama" name="nama">
        <label for="floatingName">Nama</label>
      </div>
      <div class="form-floating">
        <input type="number" class="form-control mt-2" id="floatingNpm" placeholder="NPM" name="npm">
        <label for="floatingNpm">NPM</label>
      </div>
      <div class="form-floating">
        <input type="text" class="form-control mt-2" id="floatingKelas" placeholder="Kelas" name="kelas">
        <label for="floatingKelas">Kelas</label>
      </div>
      <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Insert it</button>
    </form>
  </main>
</body>
</html>