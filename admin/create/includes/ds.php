<div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-body bk-primary text-light">
                <div class="stat-panel text-center">
                    <?php 
                    $sql3 ="SELECT id from tblbrands ";
                    $query3= $dbh -> prepare($sql3);
                    $query3->execute();
                    $results3=$query3->fetchAll(PDO::FETCH_OBJ);
                    $brands=$query3->rowCount();
                    ?>												
                    <div class="stat-panel-number h1 "><?php echo htmlentities($brands);?></div>
                    <div class="stat-panel-title text-uppercase"> Brands</div>
                </div>
            </div>
            <a href="manage-brands.php" class="block-anchor panel-footer text-center" id="column">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
        </div>
    </div>