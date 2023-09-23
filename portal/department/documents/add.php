         <?php
            $title = "Add Document";
            include '../templates/header.php' ?>


         <?php

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST['add_document'])) {
                    $reference = rand(10000000, 99999999);
                    $add = $Document->Add($reference, $code, $_POST['document'], $_POST['type'], $_POST['details']);
                    if ($add) {
                        alert('Document Added.', 'details.php?reference=' . $reference . '');
                    } else {
                        alert('Something went wrong.', 'add.php');
                    }
                }
            }


            ?>



         <div class="container-fluid">
             <div class="card">
                 <div class="card-body">
                     <h5 class="card-title fw-semibold mb-4">Add Document</h5>
                     <form method="post" action="add.php">
                         <div class="mb-3">
                             <label for="exampleInputEmail1" class="form-label require">Type <span class="text-danger">*</span></label>
                             <select name="type" class="form-control" id="type" required>
                                 <option value="">--select--</option>
                                 <?php
                                    foreach ($Category->All() as $row) {
                                        echo "<option value='" . $row['category'] . "'>" . $row['category'] . "</option>";
                                    }  ?>
                             </select>
                         </div>
                         <div class="mb-3">
                             <label for="exampleInputEmail1" class="form-label">Document Title<span class="text-danger">*</span></label>
                             <input type="text" class="form-control" name="document" required>
                         </div>
                         <div class="mb-3">
                             <label for="exampleInputEmail1" class="form-label">Details <span class="text-danger">*</span></label>
                             <input type="text" class="form-control" name="details" required>
                         </div>

                         <button type="submit" name="add_document" class="btn btn-primary">Submit</button>
                         <button type="button" onclick="history.back()" class="btn btn-danger">Close</button>
                     </form>
                 </div>
             </div>
         </div>
         <?php include '../templates/footer.php' ?>