<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?= base_url(); ?>assets/js/popper.min.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.easing.1.3.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.waypoints.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.stellar.min.js"></script>
<script src="<?= base_url(); ?>assets/js/owl.carousel.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url(); ?>assets/js/aos.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.animateNumber.min.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
<script src="<?= base_url(); ?>assets/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="<?= base_url(); ?>assets/js/google-map.js"></script>
<script src="<?= base_url(); ?>assets/js/main.js"></script>

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--fileupload-->
<script type="text/javascript" src="<?= base_url() ?>assets/lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>

</body>

</html>

<script>
    var status = document.getElementById('status_pengiriman').value;

    $(document).ready(function() {
        if (status == "Belum dikonfirmasi") {
            $("#sdp").prop('checked', false);
            $("#sedang_diproses").prop('checked', false);
            $("#sedang_dikirim").prop('checked', false);
            $("#sdk").prop('checked', false);
            $("#diterima").prop('checked', false);
            $("#dtrm").prop('checked', false);

        } else if (status == "Sedang diproses") {
            $("#sedang_diproses").prop('checked', true);
            $("#sdp").prop('checked', true);
            $("#sedang_dikirim").prop('checked', false);
            $("#sdk").prop('checked', false);
            $("#diterima").prop('checked', false);
            $("#dtrm").prop('checked', false);

        } else if (status == "Sedang dikirim") {
            $("#sedang_diproses").prop('checked', true);
            $("#sdp").prop('checked', true);
            $("#sedang_dikirim").prop('checked', true);
            $("#sdk").prop('checked', true);
            $("#diterima").prop('checked', false);
            $("#dtrm").prop('checked', false);

        } else if (status == "Sudah diterima") {
            $("#sedang_diproses").prop('checked', true);
            $("#sdp").prop('checked', true);
            $("#sedang_dikirim").prop('checked', true);
            $("#sdk").prop('checked', true);
            $("#diterima").prop('checked', true);
            $("#dtrm").prop('checked', true);
        }

    });
</script>