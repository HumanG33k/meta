<div class="users index">
  <h2><?php echo __('Users'); ?></h2>
  <table cellpadding="0" cellspacing="0">
    <thead>
      <tr>
        <th><?php echo $this->Paginator->sort('name'); ?></th>
        <th><?php echo $this->Paginator->sort('firstname'); ?></th>
        <th><?php echo $this->Paginator->sort('lastname'); ?></th>
        <th><?php echo $this->Paginator->sort('birthday'); ?></th>
        <th><?php echo $this->Paginator->sort('biography'); ?></th>
        <th><?php echo $this->Paginator->sort('phone'); ?></th>
        <th><?php echo $this->Paginator->sort('email'); ?></th>
        <th><?php echo $this->Paginator->sort('website'); ?></th>
        <th><?php echo $this->Paginator->sort('avatar'); ?></th>
        <th><?php echo $this->Paginator->sort('gravavatar'); ?></th>
        <th><?php echo $this->Paginator->sort('isactive'); ?></th>
        <th><?php echo $this->Paginator->sort('sexe'); ?></th>
        <th><?php echo $this->Paginator->sort('created'); ?></th>
        <th><?php echo $this->Paginator->sort('updated'); ?></th>
        <th class="actions"><?php echo __('Actions'); ?></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($users as $user): ?>
        <?php if ($user['User']['isactive'])
        { ?>
          <tr>
            <td><?php echo h($user['User']['id']); ?>&nbsp;</td>
            <td><?php echo h($user['User']['username']); ?>&nbsp;</td>
            <td><?php echo h($user['User']['password']); ?>&nbsp;</td>
            <td><?php echo h($user['User']['name']); ?>&nbsp;</td>
            <td><?php echo h($user['User']['firstname']); ?>&nbsp;</td>
            <td><?php echo h($user['User']['lastname']); ?>&nbsp;</td>
            <td><?php echo h($user['User']['birthday']); ?>&nbsp;</td>
            <td><?php echo h($user['User']['biography']); ?>&nbsp;</td>
            <td><?php echo h($user['User']['phone']); ?>&nbsp;</td>
            <td><?php echo h($user['User']['email']); ?>&nbsp;</td>
            <td><?php echo h($user['User']['website']); ?>&nbsp;</td>
            <td><?php echo h($user['User']['avatar']); ?>&nbsp;</td>
            <td><?php echo h($user['User']['gravavatar']); ?>&nbsp;</td>
            <td><?php echo h($user['User']['isactive']); ?>&nbsp;</td>
            <td><?php echo h($user['User']['sexe']); ?>&nbsp;</td>
            <td><?php echo h($user['User']['created']); ?>&nbsp;</td>
            <td><?php echo h($user['User']['updated']); ?>&nbsp;</td>
            <td>
              <?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
            </td>
            <td class="actions">
              <?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>

            </td>
          </tr>
        <?php } ?>
<?php endforeach; ?>
    </tbody>
  </table>
  <p>
    <?php
    echo $this->Paginator->counter(array(
        'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
    ));
    ?>	</p>
  <div class="paging">
    <?php
    echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
    echo $this->Paginator->numbers(array('separator' => ''));
    echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
    ?>
  </div>
</div>

