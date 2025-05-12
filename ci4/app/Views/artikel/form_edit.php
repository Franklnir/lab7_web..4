<?= $this->include('template/admin_header'); ?>

<h2><?= esc($title); ?></h2>

<form action="" method="post">
    <?= csrf_field(); ?> <!-- Include CSRF token for security -->

    <!-- Judul Input -->
    <p>
        <label for="judul">Judul</label><br>
        <input type="text" name="judul" id="judul" value="<?= esc($data['judul']); ?>" required>
    </p>

    <!-- Isi Textarea -->
    <p>
        <label for="isi">Isi</label><br>
        <textarea name="isi" id="isi" cols="50" rows="10" required><?= esc($data['isi']); ?></textarea>
    </p>

    <!-- Error Messages (Optional) -->
    <?php if (isset($validation) && $validation->getErrors()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach ($validation->getErrors() as $error): ?>
                    <li><?= esc($error); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <!-- Submit Button -->
    <p>
        <input type="submit" value="Simpan" class="btn btn-large">
    </p>
</form>

<?= $this->include('template/admin_footer'); ?>
