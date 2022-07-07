<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <h1>Daftar Matakuliah</h1>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Matakuliah</th>
            <th>Jumlah SKS</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $nomor = 1;
    foreach($list_matkul as $obj){
        ?>
        <tr>
            <td><?=$nomor?></td>
            <td><?=$obj->kode?></td>
            <td><?=$obj->nama?></td>
            <td><?=$obj->sks?></td>
    <?php
    $nomor++;
    }?>
    </tbody>
</table>
<br/>
<a href="<?php echo base_url('index.php/matakuliah/create')?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Create Mata Kuliah</a>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>


