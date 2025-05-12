<?= $this->extend('welcome_message.php') ?>
<?= $this->section('content') ?>

<div>
<h4>Employee Info</h4>
    <?php
    if(session()->getFlashdata('status'))
    {
        echo "<div class='alert alert-success' >".session()->getFlashdata('status')."</div>";
    }

    ?>

<a href="<?= base_url('employee-add') ?>" class="btn btn-primary">Add Employee</a>

    <table border="1">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">First Name</th>
                <th  scope="col">Last Name</th>
                <th  scope="col">Phone</th>
                <th  scope="col">Designation</th>
                <th  scope="col">Created At</th>
                <th  scope="col">Action </th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($employee as $row){?>

                <tr scope="row">
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['first_name'] ?></td>
                    <td><?= $row['last_name'] ?></td>
                    <td><?= $row['phone'] ?></td>
                    <td><?= $row['designation'] ?></td>
                    <td><?= $row['created_at'] ?></td>
                    <td>
                    <a href="<?= base_url('employee-edit/' . $row['id']) ?>" class="btn btn-warning btn-sm">Edit</a>

                     <a href="<?= base_url('employee-delete/' . $row['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this employee?');">
                 Delete
                </a>
</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>



<?= $this->endSection('content') ?>
