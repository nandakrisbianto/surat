<?php
$this->load->view('template/sbadmin/head');
$this->load->view('template/sbadmin/topbar');
$this->load->view('template/sbadmin/navbar');
?>
                        <?= $this->session->flashdata('masuk');?>
                        <form action="" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="jenis">jenis surat</label>
                                <input type="text" name="jenis" id="jenis" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" name="tanggal" id="tanggal" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">File</label>
                                <div class="custom-file form-group">
                                    <input type="file" name="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <br>
                            <div class="text-center">
                                <button class="btn btn-primary">SIMPAN</button>
                            </div>
                        </form>
  
                        <script>
                        // Add the following code if you want the name of the file appear on select
                        $(".custom-file-input").on("change", function() {
                        var fileName = $(this).val().split("\\").pop();
                        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                        });
                        </script>
 

 <?php $this->load->view('template/sbadmin/footer'); ?>