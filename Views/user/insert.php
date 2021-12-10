<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<div class="col">
    <?php 
        if (!empty(session()->getFlashdata('info'))) {
            echo '<div class="alert alert-danger" role="alert">';
            $error = session()->getFlashdata('info') ;
            foreach ($error as $key => $value) {
                echo $key."=>".$value;
                echo "<br>";
            }
            echo '</div>';
        }
    ?>
</div>

<div class="col">
    <h3>INSERT DATA</h3>
</div>

<div class="col-4">
    <form action="<?= base_url('/admin/user/insert')?>" method="post"> 
        <div class="form-group">
            <label for="kategori" class="form-label">User</label>
            <input type="text" name="user" required class="form-control">
        </div>
        <div class="form-group">
            <label for="keterangan" class="form-label">Email</label>
            <input type="email" name="email" required class="form-control">
        </div>
        <div class="form-group">
            <label for="keterangan" class="form-label">Password</label>
            <input type="password" name="password" required class="form-control">
        </div>
        <div class="form-group">
    <label for="harga" >Level</label>
    <select class="form-control" name="level" id="idkategori">
        <?php foreach($level as $key): ?>
        <option value="<?= $key  ?>"><?= $key  ?></option>
        <?php endforeach; ?>
    </select>
</div>
        <div class="form-group mt-2">
            <input type="submit" name="simpan" value="SIMPAN">
        </div>
    </form>
</div>

<?= $this->endSection() ?>