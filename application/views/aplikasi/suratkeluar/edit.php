<?php
$this->load->view('template/sbadmin/head');
$this->load->view('template/sbadmin/topbar');
$this->load->view('template/sbadmin/navbar');
?>
                        <form action="" method="post">
                            <div class="form group">
                                <label for="jenis">jenis surat</label>
                                <input value="<?=$surat->jenis;?>" type="text" name="jenis" id="jenis" class="form-control">
                            </div>
                            <div class="form group">
                                <label for="tanggal">Tanggal</label>
                                <input value="<?=$surat->tanggal;?>" type="date" name="tanggal" id="tanggal" class="form-control">
                            </div>
                            <br>
                            <textarea name="isi" id="editor1" rows="20" cols="80">
                                <?=$surat->isi;?>
                            </textarea>
                            <br>
                            <br>
                            <div class="text-center">
                                <button class="btn btn-primary">UPDATE</button>
                            </div>
                        </form>
  
                            <script>
                                CKEDITOR.replace( 'editor1' );
                            </script>
 
 <?php $this->load->view('template/sbadmin/footer'); ?>