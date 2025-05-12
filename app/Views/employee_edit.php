<?= $this->extend('welcome_message.php') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <h2>Edit Employee</h2>

    <?php if(session()->getFlashdata('status')): ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('status') ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('employee-update/' . $employee['id']) ?>" method="POST">
        <div class="mb-3">
            <label for="first_name" class="form-label">First Name:</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="<?= esc($employee['first_name']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name:</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="<?= esc($employee['last_name']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone:</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?= esc($employee['phone']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="designation" class="form-label">Designation:</label>
            <input type="text" class="form-control" id="designation" name="designation" value="<?= esc($employee['designation']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="created_at" class="form-label">Created At:</label>
            <input type="date" class="form-control" id="created_at" name="created_at" value="<?= esc($employee['created_at']) ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Employee</button>
        <a href="<?= base_url('employee') ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<?= $this->endSection() ?>
