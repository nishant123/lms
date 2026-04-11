<?php include 'layouts/top.php'; ?>

<?php
$statement = $pdo->prepare("SELECT * FROM order_details WHERE id=?");
$statement->execute([$_REQUEST['id']]);
$total = $statement->rowCount();
// if(!$total) {
//     header("location: ".ADMIN_URL."student-active.php");
//     exit;
// }
?>

<?php
if(isset($_POST['form_submit'])) {
    try {
      

        // $statement = $pdo->prepare("SELECT * FROM order_details WHERE id=?");
        // $statement->execute([$_REQUEST['id']]);
        // $current_student = $statement->fetchAll(PDO::FETCH_ASSOC);

        

        $statement = $pdo->prepare("UPDATE order_details SET 
                            
                            status=?
                            
                            WHERE id=?");
        $statement->execute([
            $_POST['status'],
            $_REQUEST['id']
        ]);

        $success_message = "Data is updated successfully";
        $_SESSION['success_message'] = $success_message;
        header("location: ".ADMIN_URL."orderdetail.php");
        exit;

    } catch(Exception $e) {
        $error_message = $e->getMessage();
        $_SESSION['error_message'] = $error_message;
    //    header("location: ".ADMIN_URL."student-edit.php?id=".$_REQUEST['id']);
        exit;
    }
}
?>

<?php
$statement = $pdo->prepare("SELECT * FROM order_details WHERE id=?");
$statement->execute([$_REQUEST['id']]);
$student_data = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>Edit order</h1>
            
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                               
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Status</label>
                                            <select name="status" class="form-select">
                                                <option value="0" <?php if($student_data[0]['status'] == 0) {echo 'selected';} ?>>Pending</option>
                                                <option value="1" <?php if($student_data[0]['status'] == 1) {echo 'selected';} ?>>Active</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" name="form_submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include 'layouts/footer.php'; ?>