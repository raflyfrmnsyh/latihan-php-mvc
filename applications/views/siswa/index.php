<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h3>Siswa XII - RPL 1</h3>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>
<div class="container">
    <div class="pt-3">
        <div class="row">
            <div class="col-md-12">
                <?php $no = 1; ?>
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">No.</th>
                            <th scope="col">NIS</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Email</th>
                            <th scope="col">Organisasi</th>
                            <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data['siswa'] as $dat ): ?>
                        <tr class="text-center">
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $dat['nis']; ?></td>
                            <td><?php echo $dat['nama']; ?></td>
                            <td>XII</td>
                            <td><?php echo $dat['jurusan']; ?></td>
                            <td><?php echo $dat['email']; ?></td>
                            <td><?php echo $dat['organisasi']; ?></td>
                            <td class="d-flex align-items-center justify-content-center">
                                <a href="<?= base_url; ?>siswa/detail/<?= $dat['id']?>" class="btn btn-sm btn-success ml-2 mr-2">Detail</a>
                                <a href="#" class="btn btn-sm btn-danger ml-2 mr-2">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

