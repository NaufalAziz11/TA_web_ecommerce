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

 <!-- Tambah barang admin-->
 <div class="modal fade" id="tambahBarangAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                         <div class="dropdown">
                             <select class="form-control" id="id_kategori" name="id_kategori" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <option value="1">Perlengkapan</option>
                                 <option value="2">Nutrisi</option>
                                 <option value="3">Bibit</option>
                                 <option value="4">Pestisida</option>
                             </select>
                         </div>
                     </div>
                     <div class="form-group">
                         <label>Deskripsi</label>
                         <input type="text-area" name="deskripsi" id="deskripsi" class="form-control">
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
                         <input type="text" name="harga" id="harga" class="form-control">
                     </div>
                     <div class="form-group">
                         <label>Stok</label>
                         <input type="text" name="stok" id="stok" class="form-control">
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


 <!-- Edit barang admin-->
 <div class="modal fade" id="editBarangAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Form Edit Barang</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body" id="edit">
                 <form action="<?= base_url() ?>Admin/edit_produk" method="post" enctype="multipart/form-data">
                     <div class="form-group">
                         <label>Nama Barang</label>
                         <input type="hidden" name="id_barang" id="id_barang" class="form-control" required>
                         <input type="text" name="nama_barang" id="nama_barang" class="form-control" required>
                     </div>
                     <div class="form-group">
                         <label>Kategori</label>
                         <div class="dropdown">
                             <select class="form-control" id="id_kategori" name="id_kategori" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <option value="1">Perlengkapan</option>
                                 <option value="2">Nutrisi</option>
                                 <option value="3">Bibit</option>
                                 <option value="4">Pestisida</option>
                             </select>
                         </div>
                     </div>
                     <div class="form-group">
                         <label>Deskripsi</label>
                         <input type="text-area" name="deskripsi" id="deskripsi" class="form-control">
                     </div>
                     <div class="form-group">
                         <div class="fileupload fileupload-new" data-provides="fileupload">
                             <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                 <img src="" id="pict" name="pict">
                             </div>
                             <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                             <div>
                                 <span class="btn btn-theme02 btn-file">
                                     <span class="fileupload-new "><i class="fa fa-paperclip"></i> Select image</span>
                                     <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                     <input type="file" class="default" name="gambar" id="gambar">
                                 </span>
                                 <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                             </div>
                         </div>
                     </div>
                     <div class="form-group">
                         <label>Harga</label>
                         <input type="text" name="harga" id="harga" class="form-control">
                     </div>
                     <div class="form-group">
                         <label>Stok</label>
                         <input type="text" name="stok" id="stok" class="form-control">
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

 <!-- Tambah barang pengelola-->
 <div class="modal fade" id="tambahBarangPengelola" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Form Tambah Barang</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form action="<?= base_url() ?>pengelola/tambah_barang" method="post" enctype="multipart/form-data">
                     <div class="form-group">
                         <label>Nama Barang</label>
                         <input type="text" name="nama_barang" class="form-control">
                     </div>
                     <div class="form-group">
                         <label>Kategori</label>
                         <div class="dropdown">
                             <select class="form-control" id="id_kategori" name="id_kategori" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <option value="1">Perlengkapan</option>
                                 <option value="2">Nutrisi</option>
                                 <option value="3">Bibit</option>
                                 <option value="4">Pestisida</option>
                             </select>
                         </div>
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

 <!-- Edit barang Pengelola-->
 <div class="modal fade" id="editBarangPengelola" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Form Edit Barang</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body" id="edit">
                 <form action="<?= base_url() ?>Pengelola/edit_produk" method="post" enctype="multipart/form-data">
                     <div class="form-group">
                         <label>Nama Barang</label>
                         <input type="hidden" name="id_barang" id="id_barang" class="form-control" required>
                         <input type="text" name="nama_barang" id="nama_barang" class="form-control" required>
                     </div>
                     <div class="form-group">
                         <label>Kategori</label>
                         <div class="dropdown">
                             <select class="form-control" id="id_kategori" name="id_kategori" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <option value="1">Perlengkapan</option>
                                 <option value="2">Nutrisi</option>
                                 <option value="3">Bibit</option>
                                 <option value="4">Pestisida</option>
                             </select>
                         </div>
                     </div>
                     <div class="form-group">
                         <label>Deskripsi</label>
                         <input type="text-area" name="deskripsi" id="deskripsi" class="form-control">
                     </div>
                     <div class="form-group">
                         <div class="fileupload fileupload-new" data-provides="fileupload">
                             <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                 <img src="" id="pict" name="pict">
                             </div>
                             <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                             <div>
                                 <span class="btn btn-theme02 btn-file">
                                     <span class="fileupload-new "><i class="fa fa-paperclip"></i> Select image</span>
                                     <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                     <input type="file" class="default" name="gambar" id="gambar">
                                 </span>
                                 <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                             </div>
                         </div>
                     </div>
                     <div class="form-group">
                         <label>Harga</label>
                         <input type="text" name="harga" id="harga" class="form-control">
                     </div>
                     <div class="form-group">
                         <label>Stok</label>
                         <input type="text" name="stok" id="stok" class="form-control">
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

 <!--tambah user pengelola-->
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
                 <form action="<?= base_url() ?>pengelola/tambah_user" method="post" enctype="multipart/form-data">
                     <div class="form-group">
                         <label>Nama User</label>
                         <input type="text" name="nama" class="form-control">
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

 <!-- update Invoice-->
 <div class="modal fade" id="updateinvoiceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Invoice</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body" id="update_inv">
                 <form action="<?= base_url() ?>Admin/update_invoice" method="post" enctype="multipart/form-data">
                     <div class="form-group">
                         <input type="text" name="id_invoice" id="id_invoice" class="form-control" required>
                         <label>Status Pengiriman</label>
                         <select class="form-control" id="status_pengiriman" name="status_pengiriman">
                             <option value="">--pilih--</option>
                             <option value="Sedang diproses">Sedang diproses</option>
                             <option value="Sedang dikirim">Sedang dikirim</option>
                             <option value="Sudah diterima">Sudah diterima</option>
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

 <script src="<?= base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
 <script src="https://code.jquery.com/jquery-1.10.2.js" integrity="sha256-it5nQKHTz+34HijZJQkpNBIHsjpV8b6QzMJs9tmOBSo=" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.js" integrity="sha256-it5nQKHTz+34HijZJQkpNBIHsjpV8b6QzMJs9tmOBSo=" crossorigin="anonymous"></script>
 <script type="text/javascript">
     $('.custom-file-input').on('change', function() {
         let fileName = $(this).val().split('\\').pop();
         $(this).next('.custom-file-label').addClass("selected").html(fileName);
     });

     $(document).on("click", "#edit_brg", function() {
         var id_barang = $(this).data('id_barang');
         var nama_barang = $(this).data('nama');
         var id_kategori = $(this).data('kategori');
         var deskripsi = $(this).data('deskripsi');
         var gambar = $(this).data('gambar');
         var harga = $(this).data('harga');
         var stok = $(this).data('stok');

         $("#edit #id_barang").val(id_barang);
         $("#edit #nama_barang").val(nama_barang);
         $("#edit #id_kategori").val(id_kategori);
         $("#edit #deskripsi").val(deskripsi);
         $("#edit #pict").attr("src", "<?= base_url() ?>assets/images/produk/" + gambar);
         $("#edit #harga").val(harga);
         $("#edit #stok").val(stok);
     });
     $(document).on("click", "#update_invoice", function() {
         var id_invoice = $(this).data('id_invoice');
         var status_pengiriman = $(this).data('status_pengiriman');
         $("#update_inv #id_invoice").val(id_invoice);
         $("#update_inv #status_pengiriman").val(status_pengiriman);
     });
 </script>

 </body>

 </html>