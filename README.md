### PRAKTIKUM 1
﻿# lab7_web..4
# php spark
# php spark routes
# php spark verse
![image](https://github.com/user-attachments/assets/9616c5d7-ee3d-48de-89a3-bb125e4bb132)

# konfigurasi ada di atas di dalam repositori 
![image](https://github.com/user-attachments/assets/505cde43-3aa4-4732-af75-8d7673d885d4)

![image](https://github.com/user-attachments/assets/985acfc3-1add-475a-9768-57a5b2317d58)


### PRAKTIKUM 2
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
![image](https://github.com/user-attachments/assets/a433f9b9-03fe-45bc-a5fd-0bf41541b663)



# tambahkan admin_index.php
# dan buat admin_footer.php , admin_header.php di dalam direktori template
![image](https://github.com/user-attachments/assets/2cb95051-2872-4ca5-91c1-de10e0cf7433)

# tambahkan add
![image](https://github.com/user-attachments/assets/d5d08dda-2840-4df4-9a3b-80f588958173)

# tambahkan edit
![image](https://github.com/user-attachments/assets/144082ec-4827-483f-a1f8-ee53be1a674a)

# tambahkan delete 
![image](https://github.com/user-attachments/assets/c13c7d3b-ea77-4eae-b5e0-4fd066c38dda)
![image](https://github.com/user-attachments/assets/c61a630b-3f78-44f8-9c5f-eece045783f4)



### praktikum 3

# sebelumnya tambahkan, di dalam table sebelumnya yang kita buat
![image](https://github.com/user-attachments/assets/08f58d73-2a46-4ca7-8e48-572822ee8d15)


# Buat folder layout di dalam app/Views/
                          Buat file main.php di dalam folder layout dengan kode berikut:
                          <!DOCTYPE html>
                          <html lang="en">
                          <head>
                              <meta charset="UTF-8">
                              <title><?= $title ?? 'My Website' ?></title>
                              <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
                          </head>
                          <body>
                          <div id="container">
                              <header>
                                  <h1>Layout Sederhana</h1>
                              </header>
                              <nav>
                                  <a href="<?= base_url('/'); ?>" class="active">Home</a>
                                  <a href="<?= base_url('/artikel'); ?>">Artikel</a>
                                  <a href="<?= base_url('/about'); ?>">About</a>
                                  <a href="<?= base_url('/contact'); ?>">Kontak</a>
                              </nav>
                              <section id="wrapper">
                                  <section id="main">
                                      <?= $this->renderSection('content') ?>
                                  </section>
                                  <aside id="sidebar">
                                      <?= view_cell('App\\Cells\\ArtikelTerkini::render') ?>
                                      <div class="widget-box">
                                          <h3 class="title">Widget Header</h3>
                                          <ul>
                                              <li><a href="#">Widget Link</a></li>
                                              <li><a href="#">Widget Link</a></li>
                                          </ul>
                                      </div>
                                      <div class="widget-box">
                                          <h3 class="title">Widget Text</h3>
                                          <p>Vestibulum lorem elit, iaculis in nisl volutpat, malesuada tincidunt arcu. Proin in leo fringilla,
                                          vestibulum mi porta, faucibus felis. Integer pharetra est nunc, nec pretium nunc pretium ac.</p>
                                      </div>
                                  </aside>
                              </section>
                              <footer>
                                  <p>&copy; 2021 - Universitas Pelita Bangsa</p>
                              </footer>
                          </div>
                          </body>
                          </html>


# Ubah app/Views/home.php
                      <?= $this->extend('layout/main') ?>
                      <?= $this->section('content') ?>
                      <h1><?= $title; ?></h1>
                      <hr>
                      <p><?= $content; ?></p>
                      <?= $this->endSection() ?>

# Buat folder Cells di dalam app/ Buat file ArtikelTerkini.php di dalam app/Cells/
# Buat folder components di dalam app/Views/ Buat file artikel_terkini.php di dalam app/Views/components/
![image](https://github.com/user-attachments/assets/f6f87c49-9772-4686-ba7c-77ad94cd9f97)


# View Layout memungkinkan pengembang membuat struktur HTML yang konsisten di seluruh halaman web, seperti header, footer, dan sidebar. Manfaat utamanya:

1. Reusabilitas: Bagian tampilan yang sama tidak perlu ditulis ulang di setiap halaman.

2. Pemeliharaan lebih mudah: Perubahan pada layout hanya perlu dilakukan sekali.

3. Konsistensi tampilan: Semua halaman mengikuti kerangka tata letak yang sama.

4. Efisiensi pengembangan: Mengurangi waktu membuat tampilan baru.


# Perbedaan	View Cell	View Biasa
Fungsi	Menjalankan fungsi dalam kelas dan me-render view secara modular.	Menampilkan file view secara langsung.
Pemanggilan	<?= view_cell('NamaClass::method') ?>	<?= view('nama_view') ?>
Cocok untuk	Komponen kecil yang bisa digunakan ulang (sidebar, recent post, dll.)	Tampilan halaman penuh atau bagian besar dari halaman.
Bersifat	Dinamis – bisa menjalankan logika terlebih dahulu.	Statis – hanya menampilkan data yang dikirim dari controller.

# tambahkan Cell Class: app/Cells/PostCell.php
                          <?php
                          
                          namespace App\Cells;
                          
                          use CodeIgniter\View\Cells\Cell;
                          use App\Models\PostModel;
                          
                          class PostCell extends Cell
                          {
                              public $category;
                          
                              public function render()
                              {
                                  $model = new PostModel();
                          
                                  // Ambil post dengan kategori tertentu
                                  $data['posts'] = $model->where('category', $this->category)
                                                         ->orderBy('created_at', 'DESC')
                                                         ->findAll(5);
                          
                                  return view('components/recent_posts', $data);
                              }
                          }

#  di app/Views/home.php
                                <?= view_cell(\App\Cells\PostCell::class, ['category' => 'Tutorial']) ?>

# View File: app/Views/components/recent_posts.php
                          <?php if (!empty($posts)) : ?>
                              <ul>
                                  <?php foreach ($posts as $post) : ?>
                                      <li>
                                          <strong><?= esc($post['title']) ?></strong><br>
                                          <small><?= esc($post['created_at']) ?></small>
                                      </li>
                                  <?php endforeach; ?>
                              </ul>
                          <?php else : ?>
                              <p>Tidak ada post dalam kategori ini.</p>
                          <?php endif; ?>




















