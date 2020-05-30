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
<script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>

<!-- Ongkir -->
<!-- <script type="text/javascript">
    $(function() {
        $.get("<?= base_url('ongkir/get_provinsi') ?>", {}, (response) => {
            let ouput = $('#provinsi_asal');
            let provinsi = response.rajaongkir.results
            console.log(response)

            // provinsi.map((val, i) => {
            //     ouput += `<option value="${val.province_id}" >${val.province}</option>`
            // })
            // $('#provinsi_asal').html(ouput);
        })
    });

    $(function() {
        $.get("<?= base_url('ongkir/get_provinsi') ?>", {}, (response) => {
            let ouput = '';
            let provinsi = response.rajaongkir.results
            console.log(response)

            provinsi.map((val, i) => {
                ouput += `<option value="${val.province_id}" >${val.province}</option>`
            })
            $('#provinsi').html(ouput);
        })
    });

    function get_kota() {
        let id_provinsi = $('#provinsi').val();
        $.get("<?= base_url('ongkir/get_kota/') ?>" + id_provinsi, {}, (response) => {
            let ouput = '';
            let kota = response.rajaongkir.results

            console.log(response)

            kota.map((val, i) => {
                ouput += `<option value="${val.city_id}" >${val.city_name}</option>`
            })
            $('#kota').html(ouput);
        })
    }

    function get_kota_asal() {
        let id_provinsi = $('#provinsi_asal').val();
        $.get("<?= base_url('ongkir/get_kota/') ?>" + id_provinsi, {}, (response) => {
            let ouput = $('#kota_asal');
            let kota = response.rajaongkir.results
            console.log(response)

            // kota.map((val, i) => {
            //     ouput = $('#kota_asal')
            // })
            // $('#kota_asal').html(ouput);
        })
    }

    function get_ongkir() {
        let berat = $('#berat').val();
        let asal = $('#kota_asal').val();
        let tujuan = $('#kota').val();
        let kurir = $('#kurir').val();
        let ouput = '';

        $.get("<?= base_url('ongkir/get_biaya/') ?>" +
            `${asal}/${tujuan}/${berat}/${kurir}`, {}, (response) => {
                console.log(response);
                // let ouput = '';
                let biaya = response.rajaongkir.results

                console.log(biaya)

                biaya.map((val, i) => {
                    for (var i = 0; i < val.costs.length; i++) {
                        let jenis_layanan = val.costs[i].service
                        val.costs[i].cost.map((val, i) => {
                            ouput += `<option value="${val.value}" >${jenis_layanan} -Rp.${val.value} 
                                    ${val.etd} Hari </option>`
                        })
                    }
                })
                $('#service').html(ouput);
            })

    }
</script> -->


<script>
    $('custom-file-input').on('change', function() {
        let fileName = $(this).val().split(\\).pop();
        $(this).next('custom-file-label').addClass("selected").html(fileName)
    })
</script>

<!-- pls-->
<script>
    var count = 1;
    var countEl = document.getElementById("count");
    var countE2 = document.getElementById("qty");

    function plus() {
        count++;
        countEl.value = count;
        countE2.value = count;
    }

    function minus() {
        if (count > 1) {
            count--;
            countEl.value = count;
            countE2.value = count;

        }
    }
</script>


<!-- <script>
    function jumlah() {

        var satu = document.getElementById('harga').value;
        var dua = document.getElementById('count').value;
        var total1 = document.getElementById("total1");
        var total = parseInt(satu) * parseInt(dua);
        document.getElementById('total').innerHTML = "Total: Rp." + number_format(total, 0, ',', '.');

        total1.value = total;

    }
</script> -->

<script>
    $(document).ready(function() {

        var satu = document.getElementById('harga').value;
        var dua = document.getElementById('').value;
        var total1 = document.getElementById("total_semua");
        var total = parseInt(satu) * parseInt(dua);
        document.getElementById('total').innerHTML = "Total: Rp." + number_format(total, 0, ',', '.');

        total1.value = total;
    });
</script>

<!-- <script>
    function ambil() {
        var satu = document.getElementById('id').value;
        var dua = document.getElementById('id_keranjang');
        // document.getElementById("id2").innerHTML = satu;
        dua.value = satu;
    }
</script> -->

<!-- <script type="text/javascript">
    $(document).ready(function() {

        $('input[class="chb"]').click(function() {
            var result = "";
            $('.chb:checked').each(function() {
                result += $(this).val + ',';
            });
            text = text.substring(0, text.length - 1);
            $('#id_keranjang').val(text);
            var count = $("[type='checkbox]:checked").length;
            $('#no').val($("['type=checkbox']:checked").length);
            // if (result.length > 0) {
            //     var resultString = result.length;
            //     result.each(function() {
            //         resultString += $(this).val() + "apa<br/>";
            //     })

            //     $('#jal').html(result.val());
            //     console.log(result.val());

            // } else {
            //     $('#jal').html("0");

            // }
        });

    });
</script> -->

<!-- <script>
    $(document).ready(function() {
        $('.chb').click(function() {
            var text = "";
            var satu = document.getElementById('hrg').value;
            $('.chb:checked').each(function() {
                text += $(this).val() + ',';
                // satu1 += satu;

            });

            for (var i = 0; i < satu.length; i++) {
                total += satu[i];
            }

            // var total = total + parseInt(text);

            // total = parseInt(text);
            text = text.substring(0, text.length - 1);

            $('#id_keranjang').val(text);
            var count = $("[type='checkbox]:checked").length;

            $('#harga').val(satu);
            var count = $("[type='checkbox]:checked").length;

            $('#no').val($("[type='checkbox']:checked").length);
            document.getElementById('jal').innerHTML = +number_format(total, 0, ',', '.');
        });
    });
</script> -->

<!-- <script>
    $(document).ready(function() {
        $('input[name="total_hrg"]').click(function() {
            getSelectedCheckBoxes('total_hrg');
        });
        var getSelectedCheckBoxes = function(groupName) {
            var result = $('input[name="' + groupName + '"]:checked');
            if (result.length > 0) {
                var resultString = result.length + " checkboxe(s) checked<br/>";
                result.each(function() {
                    resultString += $(this).val() + "<br/>";
                });
                $('#check' + groupName).html(resultString);
            } else {
                $('#check' + groupName).html("No checkbox checked");
            }
        };
    });
</script>
 -->



<!-- <script>
    $('#check').change(function() {
        var total_semua = document.getElementById("total_semua");
        var values = []; {
            $('#check :checked').each(function() {
                //if(values.indexOf($(this).val()) === -1){
                values.push($(this).val());
                // }
            });
            console.log(values);
            total_semua.value = values;
        }
    });
</script> -->

<!-- <script>
    function semua_total() {

        var satu = document.getElementsByClassName('chb');

        var total = document.getElementsByClassName('hrg').value;
        var total_semua = document.getElementById("total_semua");


        if (satu.type === 'checkbox') {
            satu.onclick = function();
            total_semua.value = total;
        } else {
            total_semua.value = "";
        }




        // var total = parseInt(satu)
        // document.getElementById('semua_total').innerHTML = "Total: Rp." + satu;
        // // total1.value = total;

    }
</script> -->


</body>

</html>