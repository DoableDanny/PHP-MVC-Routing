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