<?php include 'layouts/top.php'; ?>

<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>Orders</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="example1">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Order No</th>
                                            <th>student id</th>
                                            <th>course id</th>
                                           
                                            <th class="w_100">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $i=0;
                                        $statement = $pdo->prepare("SELECT * FROM order_details where status=0 ORDER BY id DESC");
                                        $statement->execute();
                                        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($result as $row) {
                                            $i++;
                                            ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row['order_no']; ?></td>
                                                <td><?php echo $row['student_id']; ?></td>
                                                <td><?php echo $row['course_id']; ?></td>
                                               
                                                <td>
                                                    <a href="<?php echo ADMIN_URL; ?>orderdetail-edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">edit</a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include 'layouts/footer.php'; ?>