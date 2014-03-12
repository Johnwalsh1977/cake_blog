

<!-- File: /app/View/Posts/view.ctp -->

//<h1><?php echo h($user['Post']['title']); ?></h1>

//<p><small>Created: <?php echo $user['Post']['created']; ?></small></p>

//<p><?php echo h($user['Post']['body']); ?></p>


<h1>Username:<?php echo ($user['User'] ['username']); ?></h1>
<p> Password:<?php echo $user['User'] ['password']; ?> </p>
<p> Role: <?php echo ($user['User'] ['role']); ?> </p>
<p> <small>Created: <?php echo $user['User'] ['created']; ?> </small></p>