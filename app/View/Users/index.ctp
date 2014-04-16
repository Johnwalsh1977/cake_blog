<h1>Users Index</h1>
<ul>
<li><?php echo $this->Html->link( 'CREATE USER',array('controller' => 'users', 'action' => 'add')); ?>
<li><?php echo $this->Html->link( 'CREATE POST',array('controller' => 'posts', 'action' => 'add')); ?>
<li><?php echo $this->Html->link( 'VIEW USERS',array('controller' => 'users', 'action' => 'index')); ?>
</ul>
<table>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Created</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($user['User']['username'],
				array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?>
        </td>       
        <td><?php echo $user['User']['created']; ?></td>
        <td>
            <?php echo $this->Html->link('Edit',
                 array('action' => 'edit', $user['User']['id']));?>
        </td>
        <td>
               <?php echo $this->Form->postLink('Delete',
                   array('action' => 'delete', $user['User']['id']),
                   array('confirm' => 'Are you sure?'));?>
         </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($user); ?>
</table>
<?php 
echo $this->Html->link( "Logout",   array('action'=>'logout') ); 
?>
<tr>
<?php 
echo $this->Html->link( "Add a New User",   array('action'=>'add') ); 
?>
</tr>