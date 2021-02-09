<?php require 'views/partials/header.php'; ?>

<ul>
  <li><a href="about">About</a></li>
  <li><a href="contact">Contact</a></li>
</ul>
<br>
<hr>
<h1>Welcome</h1>
<h4>Our users</h4>
<?php foreach($users_arr['data'] as $user) : ?>
<ul>
  <li><?php echo $user['name'] ?>, <?php echo $user['email'] ?></li>
</ul>
<?php endforeach; ?>

<br>
<hr>
<br>

<form action="/names" method="POST">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name">
  <button type="submit">Submit</button>
</form>

<?php require 'views/partials/footer.php'; ?>