<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>

<form action="" method="post">
    <p>
        <label for="judul">Judul</label><br>
        <input type="text" name="judul" value="<?= old('judul'); ?>">
    </p>
    <p>
        <label for="isi">Isi</label><br>
        <textarea name="isi" cols="50" rows="10"><?= old('isi'); ?></textarea>
    </p>
    <p>
        <input type="submit" value="Simpan">
    </p>
</form>

<?= $this->include('template/admin_footer'); ?>
