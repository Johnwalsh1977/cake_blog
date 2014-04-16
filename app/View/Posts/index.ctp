<!-- File: /app/View/Posts/index.ctp -->
<div class="action">
<h1>USER POSTS</h1>

<li><?php echo $this->Html->link( 'CREATE USER',array('controller' => 'users', 'action' => 'add')); ?>
<li><?php echo $this->Html->link( 'CREATE POST',array('controller' => 'posts', 'action' => 'add')); ?>
<li><?php echo $this->Html->link( 'VIEW USERS',array('controller' => 'users', 'action' => 'index')); ?>


	</div>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Actions</th>
        <th>Created</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    $post['Post']['title'],
                    array('action' => 'view', $post['Post']['id'])
                );
            ?>
        </td>
        <td>
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $post['Post']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'edit', $post['Post']['id'])
                );
            ?>
        </td>
        <td>
            <?php echo $post['Post']['created']; ?>
        </td>
    </tr>
    <?php endforeach; ?>
	
	


</table>



