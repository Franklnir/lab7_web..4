# PRAKTIKUM 1
﻿# lab7_web..4
# php spark
# php spark routes
# php spark verse
![image](https://github.com/user-attachments/assets/9616c5d7-ee3d-48de-89a3-bb125e4bb132)

# konfigurasi ada di atas di dalam repositori 
![image](https://github.com/user-attachments/assets/505cde43-3aa4-4732-af75-8d7673d885d4)

![image](https://github.com/user-attachments/assets/985acfc3-1add-475a-9768-57a5b2317d58)


# PRAKTIKUM 2
# buatkan database dan konfigurasi
![image](https://github.com/user-attachments/assets/14984b51-ed46-4943-9923-b52962216043)

# buat file index.php di dalam direktori views/ artikel
              <?= $this->include('template/header'); ?>
              
              <?php if ($artikel): foreach ($artikel as $row): ?>
                  <article class="entry">
                      <h2>
                          <a href="<?= base_url('/artikel/' . $row['slug']); ?>">
                              <?= $row['judul']; ?>
                          </a>
                      </h2>
                      <img src="<?= base_url('/gambar/' . $row['gambar']); ?>" alt="<?= $row['judul']; ?>">
                      <p><?= substr($row['isi'], 0, 200); ?>...</p>
                  </article>
                  <hr class="divider" />
              <?php endforeach; else: ?>
                  <article class="entry">
                      <h2>Belum ada data.</h2>
                  </article>
              <?php endif; ?>
              
              <?= $this->include('template/footer'); ?>

![image](https://github.com/user-attachments/assets/70393c1c-13f8-4c00-b7a3-9c5e56663f80)


# buat detail.php di dalam direktori yang sama
              <?= $this->include('template/header'); ?>
              <article class="entry">
                  <h2><?= $artikel['judul']; ?></h2>
                  <img src="<?= base_url('/gambar/' . $artikel['gambar']); ?>" alt="<?= $artikel['judul']; ?>">
                  <p><?= $artikel['isi']; ?></p>
              </article>
              <?= $this->include('template/footer'); ?>
# isi table 
![image](https://github.com/user-attachments/assets/9c8ce09b-be8a-45d4-8a19-93e8da887e9e)
![image](https://github.com/user-attachments/assets/2edf6214-e54f-42ea-8558-f0abe3392e73)









