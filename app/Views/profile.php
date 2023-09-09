<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>
  <!-- <p>Nama: Faiz Muzaki</p>
  <p>Kelas: D</p>
  <p>NPM: 2117051066</p> -->
  <img src="https://adliif.github.io/Pancasila/faiz.jpg" class="rounded-circle mx-auto d-block py-3" alt="..." width="140" height="180">
  <table class="mx-auto">
    <tr>
      <td>
        <button class="p-2 bg-secondary text-white" style="width: 300px;"><?= $nama ?></button>
      </td>
    </tr>
    <tr>
      <td>
        <button class="p-2 mt-2 bg-secondary text-white" style="width: 300px;"><?= $npm ?></button>
      </td>
    </tr>
    <tr>
      <td>
        <button class="p-2 mt-2 bg-secondary text-white" style="width: 300px;"><?= $kelas ?></button>
      </td>
    </tr>
  </table>
</body>

</html>