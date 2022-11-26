<?php require ('./header.php'); ?>
  <main class="container">
    <h1>The Hardware Store</h1>
    <?php
      if (isset($_GET['msg1']) == "insert") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Your Registration added successfully
            </div>";
      }
      if (isset($_GET['msg2']) == "delete") {
       echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Record deleted successfully
            </div>";}

      if (isset($_GET['msg3']) == "update") {
        echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Your Registration updated successfully
            </div>";
      }
    ?>
    <section>
      <h2>View Records
      <a href="add.php" style="float:right;"><button class="btn btn-success"><i class="fas fa-plus"></i></button></a>
      </h2>
    <br>  <table class="table table-hover table-dark table-striped">
        <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Postal Code</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $customerObj =0;
        $customers = $customerObj->displayData();
        foreach ($customers as $customer) {
          ?>
          <tr>
            <td><?php echo $customer['id'] ?></td>
            <td><?php echo $customer['name'] ?></td>
            <td><?php echo $customer['email'] ?></td>
            <td><?php echo $customer['postal code'] ?></td>
            <td>
              <button class="btn btn-primary mr-2"><a href="edit.php?editId=<?php echo $customer['id'] ?>">
                  <i class="fa fa-pencil text-white" aria-hidden="true"></i></a></button>
              <button class="btn btn-danger"><a href="index.php?deleteId=<?php echo $customer['id'] ?>" onclick="confirm('Are you sure want to delete this record')">
                  <i class="fa fa-trash text-white" aria-hidden="true"></i>
                </a></button>
            </td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </section>
</main>
<?php
  include ('./database.php');
  $customerObj = new database();
  // Delete record from table
  if(isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
    $deleteId = $_GET['deleteId'];
    $customerObj->deleteRecord($deleteId);
  }
?>
<?php include ('./footer.php'); ?>
<section class="order">

     <p>Name: <?php echo "$fname $lname"; ?> </p>
     <p>Email: <?php echo "$email"; ?> </p>
     <p>POSTAL CODE: <?php echo "$postal_code"; ?> </p>

 </section>
