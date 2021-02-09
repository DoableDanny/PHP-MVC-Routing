<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <ul>
    <li><a href="about">About</a></li>
    <li><a href="contact">Contact</a></li>
  </ul>
  <h1>Welcome</h1>
  <h4>Our users</h4>
  <?php foreach($users_arr['data'] as $user) : ?>
  <ul>
    <li><?php echo $user['name'] ?>, <?php echo $user['email'] ?></li>
  </ul>
  <?php endforeach; ?>
</body>

</html>