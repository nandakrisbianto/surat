<?php
$this->load->view('template/sbadmin/head');
$this->load->view('template/sbadmin/topbar');
$this->load->view('template/sbadmin/navbar');
?>
                        <form action="" method="post">
                            <div class="form group">
                                <label for="jenis">jenis surat</label>
                                <input type="text" name="jenis" id="jenis" class="form-control">
                            </div>
                            <div class="form group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" name="tanggal" id="tanggal" class="form-control">
                            </div>
                            <br>
                            <textarea name="isi" id="editor1" rows="10" cols="80">
                            <div style="margin-left:50px; margin-right:50px; text-indent:50px">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td style="text-align:left">
                                            <p style="margin-left:40px"><img src="http://localhost/surat/assets/img/logopkk.png" style="width:100px" /></p>
                                            </td>
                                            <td style="text-align:center">
                                            <h3><strong>PEMBERDAYAAN KESEJAHTERAAN KELUARGA (PKK)</strong></h3>

                                            <h3><strong>KELURAHAN TAMAN BARU</strong></h3>

                                            <p>Jl. Pajajaran No.92, Taman Baru, Banyuwangi. 68412</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <hr />
                                <p style="text-align:right">Banyuwangi, 20 Januari 2021</p>

                                <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 2131321</span></span></p>

                                <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Perihal&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Laporan</span></span></p>

                                <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Lampiran&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 2 Lembar</span></span></p>

                                <p>&nbsp;</p>

                                <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Asalamulaikum</span></span></p>

                                <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Mengharap kedatangan bapak dan ibu untuk hadir dalam acara jambore nasional 24 yang insya allah akan dilaksanakan pada :</span></span></p>

                                <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Hari / Tanggal&nbsp;&nbsp;&nbsp;&nbsp; : Sabtu, 10 Januari 2020</span></span></p>

                                <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Jam&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 13.00 WIB</span></span></p>

                                <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Tempat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Aula Kelurahan Taman Baru</span></span></p>

                                <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Acara&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Pertemuan rutin PKK &amp; Jambore</span></span></p>

                                <p>&nbsp;</p>

                                <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Demikian Undangan Ini Kami Sampaikan, Atas Kehadiran Ibu-Ibu Kami Ucapkan Terimakasih.</span></span></p>

                                <p style="text-align:justify"><span style="font-size:11pt"><span style="background-color:white"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wassalamu&rsquo;alaikum Wr. Wb.</span></span></span></p>

                                <p>&nbsp;</p>

                                <p>&nbsp;</p>

                                <p style="text-align:right"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp; KETUA PKK&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></p>

                                <p style="text-align:right"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">TAMAN BARU, 20 Januari 2020</span></span></p>

                                <p style="text-align:right">&nbsp;</p>

                                <p style="text-align:right">&nbsp;</p>

                                <p style="text-align:right"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp; ( Drs. Ihza Syafri Hidayat. S.Kom )</span></span></p>
                            </div>
                            </textarea>
                            <br>
                            <div class="text-center">
                                <button class="btn btn-primary">SIMPAN</button>
                            </div>
                        </form>
  
                            <script>
                                CKEDITOR.replace( 'editor1' );
                            </script>
 
 <?php $this->load->view('template/sbadmin/footer'); ?>