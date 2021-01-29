<?php include '../includes/links.php'; ?>
<?php include '../includes/session.php'; ?>
<body>
    <style type="text/css">
        .box {
            -webkit-box-shadow: 0px 1px 8px 1px rgba(140,132,140,1);
            -moz-box-shadow: 0px 1px 8px 1px rgba(140,132,140,1);
            box-shadow: 0px 1px 8px 1px rgba(140,132,140,1);
            padding: 0px; border-radius: 10px;
        }
    </style>
    <div class="main-section">
    <!-- START nav -->
    <?php include '../includes/nav.php'; ?>
    <!-- END nav -->

    <section class="ftco-section ftco-section-2" id="javascriptsComponents">
        <div class="container">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-6">
                            <h3>Add Category</h3>

                            <?php
                                if(isset($_POST['submit'])) {
                                    $category= ucwords($_POST['category']);

                                    $query = mysqli_query($conn, "INSERT INTO tbl_complain_categories (complaint) VALUE ('$category') ");
                                    echo '<div class="alert alert-success">
                                            <div class="container">
                                                <div class="d-flex">
                                                    <div class="alert-icon">
                                                        <i class="ion-ios-checkmark-circle"></i>
                                                    </div>
                                                    <p class="mb-0 ml-2">
                                                        You successfully added new category!
                                                    </p>
                                                </div>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true"><i class="ion-ios-close"></i></span>
                                                </button>
                                            </div>
                                        </div>';
                                }
                            ?>

                            <form method="POST">
                                <div class="row">
                                    <div class="col-12">
                                        <label>Category</label>
                                        <input type="text" class="form-control" name="category" required style="text-transform: capitalize;">
                                    </div>
                                </div>

                                <br>

                                <center>
                                    <button type="submit" name="submit" class="btn btn-primary btn-round">
                                        Save Category
                                    </button>
                                </center>
                            </form>
                        </div>


                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table text-center table-responsive" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th style="width: 30%;">#</th>
                                                <th style="width: 80%;">Category Name</th>
                                                <th style="width: 30%;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $result = mysqli_query($conn, "SELECT * FROM tbl_complain_categories");
                                                $count= 1;
                                                foreach($result as $row) {
                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $count++ ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['complaint'] ?>
                                                    </td>
                                                    <td class="td-actions">
                                                        <a href="../includes/query/delete_category.php?delete=<?php echo $row['id'] ?>" class="btn btn-danger btn-round text-white deletecategory">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>                                
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- - - - - -end- - - - -    -->    
    </div>
    <?php include '../includes/loader.php'; ?>
</body>
<?php include '../includes/cores.php'; ?>
<script type="text/javascript">
    $(document).ready(function () {
        $('.table').DataTable({
            "pagingType": "full_numbers",
            "width": "100%",
            "lengthMenu": [[10, 25, 50, -1],[10, 25, 50, "All"]],
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search..."
            },
        });
    });
</script>