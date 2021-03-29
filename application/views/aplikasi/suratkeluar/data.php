<?php
$this->load->view('template/sbadmin/head');
$this->load->view('template/sbadmin/topbar');
$this->load->view('template/sbadmin/navbar');
?>

    <div class="card-body">
    <?= $this->session->flashdata('success');?>
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Jenis</th>
                    <th width="130px">Menu</th>
                </tr>
            </thead>
                                      
            <tbody>
                <?php $i=1;?>
                <?php foreach ($surat as $data) : ?>
                <tr>
                    <td><?=$i++;?></td>
                    <td><?=$data->tanggal;?></td>
                    <td><?=$data->jenis;?></td>
                    <td>
                        <a href="<?=base_url('aplikasi/suratkeluar/lihat/').$data->id;?>" class="text-primary"><i class="fa fa-eye"></i> LIHAT</a> |
                        <a href="<?=base_url('aplikasi/suratkeluar/edit/').$data->id;?>" class="text-warning"><i class="fa fa-edit"></i> EDIT</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </div>

<?php $this->load->view('template/sbadmin/footer'); ?>