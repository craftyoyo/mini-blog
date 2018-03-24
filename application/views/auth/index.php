<?php $this->load->view('header') ?>
<h1 class="my-5">Users</h1>
<div id="infoMessage"><?php echo $message; ?></div>

<table class="table">
    <tr>
        <th>Username</th>
        <th><?php echo lang('index_fname_th'); ?></th>
        <th><?php echo lang('index_email_th'); ?></th>
        <th><?php echo lang('index_lname_th'); ?></th>
        <th><?php echo lang('index_groups_th'); ?></th>
        <th></th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo htmlspecialchars($user->username, ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php echo htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php echo htmlspecialchars($user->first_name, ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php echo htmlspecialchars($user->last_name, ENT_QUOTES, 'UTF-8'); ?></td>
            <td>
                <?php foreach ($user->groups as $group): ?>
                    <?php echo anchor("auth/edit_group/" . $group->id, htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8')); ?>
                <?php endforeach ?>
            </td>
            <td><?php echo anchor("auth/edit_user/" . $user->id, 'Edit'); ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<a href="<?php echo base_url('auth/create_user') ?>" class="btn btn-primary">Add User</a>
<a href="<?php echo base_url('auth/create_group') ?>" class="btn btn-primary">Add Group</a>
<?php $this->load->view('footer') ?>
