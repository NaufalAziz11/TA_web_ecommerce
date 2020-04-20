 <!-- Footer -->
 <footer class="sticky-footer bg-white">
     <div class="container my-auto">
         <div class="copyright text-center my-auto">
             <span>Copyright &copy; Your Website 2019</span>
         </div>
     </div>
 </footer>
 <!-- End of Footer -->

 </div>
 <!-- End of Content Wrapper -->

 </div>
 <!-- End of Page Wrapper -->

 <!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded" href="#page-top">
     <i class="fas fa-angle-up"></i>
 </a>

 <!-- Tambah Modal-->
 <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Form Tambah Barang</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form action="<?= base_url() ?>Admin/tambah_barang" method="post" enctype="multipart/form-data">
                     <div class="form-group">
                         <label>Nama Barang</label>
                         <input type="text" name="nama_barang" class="form-control">
                     </div>
                     <div class="form-group">
                         <label>Kategori</label>
                         <input type="text" name="id_kategori" class="form-control">
                     </div>
                     <div class="form-group">
                         <label>Deskripsi</label>
                         <input type="text-area" name="deskripsi" class="form-control">
                     </div>
                     <div class="form-group">
                         <div class="fileupload fileupload-new" data-provides="fileupload">
                             <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                 <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                             </div>
                             <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                             <div>
                                 <span class="btn btn-theme02 btn-file">
                                     <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                                     <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                     <input type="file" class="default" name="gambar" required />
                                 </span>
                                 <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                             </div>
                         </div>
                     </div>
                     <div class="form-group">
                         <label>Harga</label>
                         <input type="text" name="harga" class="form-control">
                     </div>
                     <div class="form-group">
                         <label>Stok</label>
                         <input type="text" name="stok" class="form-control">
                     </div>

             </div>
             <div class="modal-footer">
                 <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                 <button type="submit" class="btn btn-primary">Simpan</button>
             </div>
             </form>
         </div>
     </div>
 </div>
 <div class="modal fade" id="tambahuserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Form Tambah Barang</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form action="<?= base_url() ?>Admin/tambah_barang" method="post" enctype="multipart/form-data">
                     <div class="form-group">
                         <label>Nama User</label>
                         <input type="text" name="nama_user" class="form-control">
                     </div>
                     <div class="form-group">
                         <label>Email</label>
                         <input type="text" name="email" class="form-control">
                     </div>
                     <div class="form-group">
                         <label>Password</label>
                         <input type="password" name="password" class="form-control">
                     </div>

             </div>
             <div class="modal-footer">
                 <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                 <button type="submit" class="btn btn-primary">Simpan</button>
             </div>
             </form>
         </div>
     </div>
 </div>

 <!-- update Modal-->
 <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Status Barang</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form action="<?= base_url() ?>Admin/tambah_barang" method="post" enctype="multipart/form-data">
                     <div class="form-group">
                         <label>Status Barang</label>
                         <select class="form-control">
                             <option selected="select">Belum dikonfirmasi</option>
                             <option>Sedang diproses</option>
                             <option>Sedang dikirim</option>
                             <option>Sudah diterima</option>
                         </select>
                     </div>
             </div>
             <div class="modal-footer">
                 <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                 <button type="submit" class="btn btn-primary">Simpan</button>
             </div>
             </form>
         </div>
     </div>
 </div>
 <!-- update Modal-->
 <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Status Barang</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form action="<?= base_url() ?>Admin/tambah_barang" method="post" enctype="multipart/form-data">
                     <div class="form-group">
                         <label>Status Barang</label>
                         <select class="form-control">
                             <option selected="select">Belum dikonfirmasi</option>
                             <option>Sedang diproses</option>
                             <option>Sedang dikirim</option>
                             <option>Sudah diterima</option>
                         </select>
                     </div>
             </div>
             <div class="modal-footer">
                 <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                 <button type="submit" class="btn btn-primary">Simpan</button>
             </div>
             </form>
         </div>
     </div>
 </div>

 <!-- Bootstrap core JavaScript-->
 <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
 <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Core plugin JavaScript-->
 <script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

 <!-- Custom scripts for all pages-->
 <script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>

 <!-- Page level plugins -->
 <script src="<?= base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>

 <!-- Page level custom scripts -->
 <script src="<?= base_url(); ?>assets/js/demo/chart-area-demo.js"></script>
 <script src="<?= base_url(); ?>assets/js/demo/chart-pie-demo.js"></script>
 <!-- Page level plugins -->
 <script src="<?= base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
 <script src="<?= base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

 <!-- Page level custom scripts -->
 <script src="<?= base_url(); ?>assets/js/demo/datatables-demo.js"></script>
 <!--fileupload-->
 <script type="text/javascript" src="<?= base_url() ?>assets/lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
 </body>

 </html>