<?php require 'app/views/partials/header.php'; ?>

<h3>Our users</h3>

<?php foreach($users['data'] as $user) : ?>
<ul>
  <li><?php echo htmlspecialchars($user['name']) ?>, <?php echo htmlspecialchars($user['email']) ?></li>
</ul>
<?php endforeach; ?>

<br>
<hr>
<br>

<h3>Add new user</h3>
<form action="/users" method="POST">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name">
  <button type="submit">Submit</button>
</form>

<?php require 'app/views/partials/footer.php' ?>