<?= $this->extend('welcome_message.php') ?>
<?= $this->section('content') ?>

<h1>Employee form </h1>

<form action="<?= base_url('employee-store') ?>" method="POST">
 
            <label for="first">Enter First Name :</label>
            <input type="text"  id="first" name="first_name">  <br>
        
            <label for="last">Enter last Name :</label>
            <input type="text" id="last" name="last_name">  <br> 
    
            <label for="phone">Enter phone :</label>
            <input type="text" id="phone" name="phone">  <br> 
    
            <label for="designation">Enter designation :</label>
            <input type="text" id="designation" name="designation">  <br> 
           
            <label for="created_at">Enter Created_at :</label>
            <input type="date" id="created_at" name="created_at">  <br> 
          
            <button id="save" type="submit">Save</button>

</form>

<?= $this->endSection('content') ?>
