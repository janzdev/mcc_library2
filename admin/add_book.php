<!-- Add  books Modal Start -->
<div class="modal fade" id="addBookModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
          <div class="modal-content">
               <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">ADD BOOKS</h1>
                    <button type="button" class="btn bi bi-x-lg" data-bs-dismiss="modal" aria-label="Close">
               </div>
               <form id="addBook">
                    <div class="modal-body">

                         <div class="row">
                              <div class="col-md-6 col-sm-12 mb-3">
                                   <label for="book_barcode">Barcode</label>
                                   <input type="texbarcode=" name="book_barcode" class="form-control"
                                        autocomplete="off">
                              </div>
                              <div class="col-md-6 col-sm-12 mb-3">
                                   <label for="book_title">Title</label>
                                   <input type="text" name="book_title" class="form-control" autocomplete="off">
                              </div>

                         </div>


                         <div class="row">
                              <div class="col-md-6 col-sm-12 mb-3">
                                   <label for="author">Author 1</label>
                                   <input type="text" name="author" class="form-control" autocomplete="off">
                              </div>
                              <div class="col-md-6 col-sm-12 mb-3">
                                   <label for="author_2">Author 2</label>
                                   <input type="text" name="author_2" class="form-control" autocomplete="off">
                              </div>
                         </div>

                         <div class="row">
                              <div class="col-md-4 col-sm-12 mb-3">
                                   <label for="author_3">Author 3</label>
                                   <input type="text" name="author_3" class="form-control" autocomplete="off">
                              </div>
                              <div class="col-md-4 col-sm-12 mb-3">
                                   <label for="author_4">Author 4</label>
                                   <input type="text" name="author_4" class="form-control" autocomplete="off">
                              </div>
                              <div class="col-md-4 col-sm-12 mb-3">
                                   <label for="author_5">Author 5</label>
                                   <input type="text" name="author_5" class="form-control" autocomplete="off">
                              </div>
                         </div>

                         <div class="row">
                              <div class="col-md-4 col-sm-12 mb-3">
                                   <label for="book_publication">Publication</label>
                                   <input type="text" name="book_publication" class="form-control" autocomplete="off">
                              </div>
                              <div class="col-md-4 col-sm-12 mb-3">
                                   <label for="publisher_name">Publisher</label>
                                   <input type="text" name="publisher_name" class="form-control" autocomplete="off">
                              </div>
                              <div class="col-md-4 col-sm-12 mb-3">
                                   <label for="isbn">ISBN</label>
                                   <input type="text" name="isbn" class="form-control" autocomplete="off">
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-md-4 col-sm-12 mb-3">
                                   <label for="copyright_year">Copyright</label>
                                   <input type="text" name="copyright_year" class="form-control" autocomplete="off">
                              </div>
                              <div class="col-md-4 col-sm-12 mb-3">
                                   <label for="book_copies">Copies</label>
                                   <input type="number" name="book_copies" class="form-control" min="1"
                                        autocomplete="off">
                              </div>
                              <div class="col-md-4 col-sm-12 mb-3">
                                   <label for="status">Status</label>
                                   <select name="status" class="form-control">
                                        <option value="">--Select Status--</option>
                                        <option value="New">New</option>
                                        <option value="Old">Old</option>
                                        <option value="Lost">Lost</option>
                                        <option value="Damaged">Damaged</option>
                                        <option value="Replacement">Replacement</option>
                                        <option value="Hardbound">Hardbound</option>

                                   </select>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-md-6 col-sm-12">
                                   <label for="category_id">Category</label>
                                   <select name="category_id" class="form-control">
                                        <option value="">--Select Category--</option>
                                        <?php 
                                          $query = "SELECT * FROM category";
                                          $query_run = mysqli_query($con, $query);

                                          foreach($query_run as $category) {
                                        ?>
                                        <option value="<?= $category['category_id']; ?>">
                                             <?= $category['classname'];?>
                                        </option>
                                        <?php } ?>
                                   </select>
                              </div>
                              <!-- <div class="col-md-6 col-sm-12">
                                   <label for="book_image">Book Image</label>
                                   <input type="file" name="book_image" class="form-control" style="height: 44px;"
                                        autocomplete="off">
                              </div> -->
                         </div>


                    </div>
                    <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-primary">Add Books</button>
                    </div>
               </form>
          </div>
     </div>
</div>


<button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addBookModal">
     <i class="bi bi-plus-square"></i>
     Add Book
</button>