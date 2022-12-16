-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Des 2022 pada 01.43
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simdbd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `carousel`
--

CREATE TABLE `carousel` (
  `id_carousel` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `carousel`
--

INSERT INTO `carousel` (`id_carousel`, `gambar`, `status`) VALUES
(1, 'http://localhost/simdbd/uploads/carousel/9ea70c1be4ed622acec091f95c5d8661.jpg', 1),
(2, 'http://localhost/simdbd/uploads/carousel/fe1a684c38e5fa6263e27386e5ff5b96.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `epidemiologi`
--

CREATE TABLE `epidemiologi` (
  `id_pe` int(11) NOT NULL,
  `tgl_pe` date NOT NULL,
  `id_px` int(11) NOT NULL,
  `riw_perjalanan` varchar(50) NOT NULL,
  `tgl_perjalanan` date NOT NULL,
  `riw_tamu` varchar(10) NOT NULL,
  `nama_suspek` text NOT NULL,
  `gender_suspek` text NOT NULL,
  `umur_suspek` text NOT NULL,
  `nama_kk` text NOT NULL,
  `latitude` text NOT NULL,
  `longitude` text NOT NULL,
  `tandon_dlm_periksa` text NOT NULL,
  `tandon_dlm_pos` text NOT NULL,
  `tandon_luar_periksa` text NOT NULL,
  `tandon_luar_pos` text NOT NULL,
  `total_periksa` text NOT NULL,
  `total_pos` text NOT NULL,
  `bepergian` varchar(10) NOT NULL,
  `tetangga` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `epidemiologi`
--

INSERT INTO `epidemiologi` (`id_pe`, `tgl_pe`, `id_px`, `riw_perjalanan`, `tgl_perjalanan`, `riw_tamu`, `nama_suspek`, `gender_suspek`, `umur_suspek`, `nama_kk`, `latitude`, `longitude`, `tandon_dlm_periksa`, `tandon_dlm_pos`, `tandon_luar_periksa`, `tandon_luar_pos`, `total_periksa`, `total_pos`, `bepergian`, `tetangga`) VALUES
(6, '2022-12-16', 3, 'Ndatau', '2022-12-08', 'Ya', 'Jesslyn;Ella', 'Perempuan;Perempuan', '23;24', 'Jokopi;Darmo', '10.238178;10.3847216', '13.2348298;12.1381381', '12;1', '2;0', '13;1', '2;0', '25;2', '4;0', 'Tidak', 'Ya'),
(7, '2022-12-01', 4, 'Sulawesi', '2022-11-20', 'Ya', 'Ryan;Cyntia', 'Laki-laki;Perempuan', '23;25', 'Dias;Fruspa', '12.4029193;12.5649839', '-2.2323481;-25483857', '10;5', '2;2', '10;5', '2;2', '20;10', '4;4', 'Ya', 'Tidak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(11) NOT NULL,
  `nama_feedback` varchar(50) NOT NULL,
  `tgl_feedback` timestamp NOT NULL DEFAULT current_timestamp(),
  `email_feedback` varchar(50) NOT NULL,
  `judul_feedback` varchar(100) NOT NULL,
  `pesan_feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `nama_feedback`, `tgl_feedback`, `email_feedback`, `judul_feedback`, `pesan_feedback`) VALUES
(1, 'Giri', '2022-12-15 10:40:34', 'dangiriel@gmail.com', 'Tanya dong', 'Oke oke tenkyuu'),
(2, 'dani', '2022-12-15 10:44:39', 'danikojelc@gmail.com', 'masukan aja', 'baik terima kasih'),
(3, 'Hiens', '2022-12-15 10:48:33', 'hiensozawa@gmail.com', 'tes fitur', 'gud');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id_info` int(11) NOT NULL,
  `judul_info` varchar(100) NOT NULL,
  `desc_info` text NOT NULL,
  `tgl_info` timestamp NOT NULL DEFAULT current_timestamp(),
  `gambar` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id_info`, `judul_info`, `desc_info`, `tgl_info`, `gambar`, `status`) VALUES
(2, 'Tanda dan Gejala Demam Berdarah Dengue', '<p>Deman Berdarah Dengue (DBD) adalah penyakit yang disebabkan oleh infeksi virus dengue melalui gigitan nyamuk Aedes terutama Aedes aegypti. Demam dengue merupakan penyakit akibat nyamuk yang berkembang paling pesat di dunia. Gejala atau tanda untuk identifikasi cepat Infeksi dengue dapat menyebabkan infeksi tanpa gejala atau gejala, dengan sekitar 20% menyebabkan gejala. Secara umum DF adalah penyakit demam sendiri, yang muncul 3-10 hari setelah nyamuk yang terinfeksi menggigit seseorang.</p>\r\n<p>&nbsp;</p>\r\n<p>Fase awal demam:</p>\r\n<p>- Tahap awal infeksi dengue dapat digambarkan sebagai penyakit &ldquo;mirip flu&rdquo; ringan dengan gejala yang mirip dengan malaria, influenza, chikungunya dan Zika. Penyakit ini ditandai dengan: nyeri retro-orbital, demam, sakit kepala hebat, nyeri sendi dan otot yang intens. nyeri, dan mual.</p>\r\n<p>- Ditandai dengan timbulnya demam berat yang cepat yang berlangsung dari 2 sampai 7 hari. Pada saat ini, dengue dapat dibedakan dari penyakit serupa lainnya dengan menggunakan tes tourniquet.69,70 Sebagian besar pasien DENV dapat untuk pulih sepenuhnya setelah periode demam tanpa memasuki fase kritis penyakit.</p>\r\n<p>&nbsp;</p>\r\n<p>Fase kritis:</p>\r\n<p>- Menunjukkan tanda-tanda peringatan, termasuk sakit perut yang parah, muntah terus-menerus, perubahan suhu yang nyata, manifestasi hemoragik, atau perubahan status mental. Umumnya, pasien menjadi lebih buruk karena suhu mereka mencapai 37,5-38&ordm;C setelah penurunan drastis jumlah trombosit menyebabkan kebocoran plasma dan syok dan/atau akumulasi cairan dengan gangguan pernapasan; perdarahan kritis, dan kerusakan organ. Tanda-tanda peringatan hampir selalu terlihat pada pasien sebelum onset syok termasuk kegelisahan, kulit dingin lembab, nadi cepat lemah, dan penyempitan tekanan nadi. Pasien yang mengalami syok kemungkinan besar kehilangan volume plasma yang besar. melalui kebocoran pembuluh darah. Pasien DSS harus dipantau secara ketat, karena syok hipotensi dapat dengan cepat berubah menjadi gagal jantung dan henti jantung.</p>\r\n<p>-&nbsp; Demam berdarah dapat menyebabkan manifestasi penyakit yang lebih parah seperti perdarahan dan kebocoran pembuluh darah. Selama presentasi penyakit yang parah, pasien dapat datang dengan efusi pleura, perdarahan, trombositopenia dengan &lt;100.000 trombosit/mL, peningkatan kadar hematokrit, kegelisahan, sakit perut, muntah, dan penurunan suhu secara tiba-tiba.</p>\r\n<p>&nbsp;</p>\r\n<p>Dalam pedoman WHO tentang 1997, manifestasi penyakit dengue yang lebih serius diklasifikasikan sebagai Dengue Hemorrhagic Fever (DHF) dan Dengue Shock Syndrome (DSS). Namun, pada tahun 2009 WHO membuat beberapa modifikasi pedoman klasifikasi dan manajemen klinis dengue menjadi Dengue dan DBD parah. Modifikasi ini bertujuan untuk membentuk kriteria yang sederhana dan seragam untuk menghasilkan pendekatan standar terhadap penyakit secara global.</p>\r\n<p>&nbsp;</p>\r\n<p>Untuk mengurangi kematian dengue dan mengendalikan keparahan penyakit, diagnosis dini penting untuk manajemen penyakit yang efektif. Saat ini, tidak ada obat antivirus atau obat untuk menghilangkan virus dengue, para dokter dapat dengan mudah menghilangkan gejalanya. Beberapa rekomendasi untuk mengelola demam berdarah termasuk, tirah baring, antipiretik atau spons untuk mengendalikan demam, analgesik atau obat penenang ringan untuk membantu mengatasi rasa sakit, dan terapi cairan atau elektrolit untuk membantu hidrasi.</p>\r\n<p>&nbsp;</p>\r\n<p>Gejala utama yang membedakan DBD dari DF adalah kebocoran plasma, hemostasis tidak teratur dan peningkatan permeabilitas pembuluh darah. Pasien yang mengembangkan sindrom parah harus diberikan dengan larutan kristaloid isotonik, seperti salin normal 0,9%, Ringer laktat, atau larutan Hartmann sesuai dengan pedoman WHO. Setelah pasien melewati masa yang mengancam jiwa, pemulihan penyakit dapat berlangsung cepat. Kesejahteraan pasien terlihat saat selera mereka kembali dan mereka mulai menyerap kembali cairan ekstravaskular</p>\r\n<p>&nbsp;</p>\r\n<p>Jutaan kasus infeksi demam berdarah terjadi setiap tahunnya di seluruh dunia. Kondisi ini bisa terjadi pada siapa pun tanpa mengenal status, jenis kelamin, dan usia. Maka dari itu waspada, bila ada tanda dan gejala yang disebutkan diatas segera konsultasikan ke pelayanan kesehatan terdekat atau ke dokter anda.</p>', '2022-12-13 09:53:51', 'http://localhost/simdbd/uploads/info/b9474fd9fa55414d0dd2d5abcbc2bd6c.jpg', 1),
(3, 'Pengobatan Demam Berdarah', '<p>Sayangnya tidak ada pengobatan khusus untuk penyakit ini. Saat pulih, kamu harus minum banyak cairan. Hubungi dokter juga segera jika kamu memiliki tanda dan gejala dehidrasi berikut ini:</p>\r\n<p>- Berkurangnya buang air kecil.</p>\r\n<p>- Sedikit atau tidak ada air mata.</p>\r\n<p>- Mulut atau bibir kering.</p>\r\n<p>- Kelesuan atau kebingungan.</p>\r\n<p>- Ekstremitas dingin atau lembap.</p>\r\n<p>&nbsp;</p>\r\n<p>Obat yang dijual bebas seperti acetaminophen dapat membantu mengurangi nyeri otot dan demam. Namun, jika kamu mengidap penyakit ini, kamu harus menghindari jenis obat pereda nyeri lainnya, termasuk aspirin, ibuprofen dan naproxen sodium. Pasalnya, obat pereda nyeri ini dapat meningkatkan risiko komplikasi perdarahan .</p>\r\n<p>Jika kamu mengalami demam berdarah yang parah, kamu memerlukan:</p>\r\n<p>- Perawatan suportif di rumah sakit.</p>\r\n<p>- Penggantian cairan dan elektrolit intravena (IV).</p>\r\n<p>- Pemantauan tekanan darah.</p>\r\n<p>- Transfusi darah untuk menggantikan kehilangan darah.</p>', '2022-12-12 10:05:53', 'http://localhost/simdbd/uploads/info/6cc77d4a88e960d99705cf17d233962b.png', 1),
(5, '6 Bahan Alami yang Ampuh Mengusir Nyamuk di Rumah', '<p>&ldquo;Nyamuk menyebabkan penyakit serius seperti demam berdarah, west nile, zika dan malaria. Guna menekan populasi nyamuk, kamu bisa menggunakan bahan alami, seperti lavender, minyak kayu putih lemon dan minyak kayu manis.&rdquo;</p>\r\n<h2 id=\"h-bahan-alami-pengusir-nyamuk\" style=\"box-sizing: border-box; margin: 0px 0px 15px; font-family: Nunito, sans-serif; line-height: 1.1; font-size: 2rem; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: #333333; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Bahan Alami Pengusir Nyamuk</span></h2>\r\n<div class=\"wp-block-lazyblock-info-graphics lazyblock-info-graphics-2pb2RX\" style=\"box-sizing: border-box; color: #333333; font-family: Nunito, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<div class=\"image-swiper-container\" style=\"box-sizing: border-box; overflow-y: scroll; display: flex; transition: all 0s ease-in-out 0s; margin-right: -15px !important;\"><picture style=\"box-sizing: border-box;\"><source style=\"box-sizing: border-box;\" srcset=\"https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2022/10/03045801/Bahan-Alami-untuk-Mengusir-Nyamuk-01.jpg.webp\" type=\"image/webp\" /><source style=\"box-sizing: border-box;\" srcset=\"https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2022/10/03045801/Bahan-Alami-untuk-Mengusir-Nyamuk-01.jpg\" type=\"image/jpg\" /><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; max-width: 100%; padding: 8px 6px !important; width: auto; height: auto; min-width: min(300px, 75vw) !important; float: none;\" src=\"https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2022/10/03045801/Bahan-Alami-untuk-Mengusir-Nyamuk-01.jpg\" alt=\"\" loading=\"lazy\" /></picture><picture style=\"box-sizing: border-box;\"><source style=\"box-sizing: border-box;\" srcset=\"https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2022/10/03045753/Bahan-Alami-untuk-Mengusir-Nyamuk-02.jpg.webp\" type=\"image/webp\" /><source style=\"box-sizing: border-box;\" srcset=\"https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2022/10/03045753/Bahan-Alami-untuk-Mengusir-Nyamuk-02.jpg\" type=\"image/jpg\" /><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; max-width: 100%; padding: 8px 6px !important; width: auto; height: auto; min-width: min(300px, 75vw) !important; float: none;\" src=\"https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2022/10/03045753/Bahan-Alami-untuk-Mengusir-Nyamuk-02.jpg\" alt=\"\" loading=\"lazy\" /></picture><picture style=\"box-sizing: border-box;\"><source style=\"box-sizing: border-box;\" srcset=\"https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2022/10/03045746/Bahan-Alami-untuk-Mengusir-Nyamuk-03.jpg.webp\" type=\"image/webp\" /><source style=\"box-sizing: border-box;\" srcset=\"https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2022/10/03045746/Bahan-Alami-untuk-Mengusir-Nyamuk-03.jpg\" type=\"image/jpg\" /><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; max-width: 100%; padding: 8px 6px !important; width: auto; height: auto; min-width: min(300px, 75vw) !important; float: none;\" src=\"https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2022/10/03045746/Bahan-Alami-untuk-Mengusir-Nyamuk-03.jpg\" alt=\"\" loading=\"lazy\" /></picture>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Nunito, sans-serif; vertical-align: baseline; color: #333333; background-color: #ffffff;\">Selain menggunakan obat nyamuk dari bahan alami di atas, kamu bisa meningkatkan kesehatan tubuh dengan mengonsumsi multivitamin agar tidak gampang sakit.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Nunito, sans-serif; vertical-align: baseline; color: #333333; background-color: #ffffff;\">Kamu bisa mendapatkannya dengan mudah. Caranya degan men<a style=\"box-sizing: border-box; background-color: transparent; color: #e0004d !important; text-decoration-line: none !important;\" href=\"https://www.halodoc.com/aplikasi-halodoc\" target=\"_blank\" rel=\"noreferrer noopener\"><em style=\"box-sizing: border-box;\">download&nbsp;</em><span style=\"box-sizing: border-box; font-weight: bolder;\">Halodoc</span></a><span style=\"box-sizing: border-box; font-weight: bolder;\">&nbsp;</span>dan&nbsp;<a style=\"box-sizing: border-box; background-color: transparent; color: #e0004d !important; text-decoration-line: none !important;\" href=\"https://www.halodoc.com/obat-dan-vitamin\" target=\"_blank\" rel=\"noreferrer noopener\">cek kebutuhan multivitamin</a>&nbsp;di Toko Kesehatan pada aplikasi tersebut.</p>', '2022-12-15 11:22:45', 'http://localhost/simdbd/uploads/info/f972269bc59bdb3cd5612824d4c0b9ab.png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penderita`
--

CREATE TABLE `penderita` (
  `id_px` int(11) NOT NULL,
  `nik_px` text NOT NULL,
  `nama_px` varchar(100) NOT NULL,
  `gender_px` varchar(10) NOT NULL,
  `dob_px` date NOT NULL,
  `umur_px` int(11) NOT NULL,
  `namaortu_px` varchar(100) NOT NULL,
  `namapuskesmas_px` varchar(100) NOT NULL,
  `namarumkit_px` varchar(100) NOT NULL,
  `alamat_px` text NOT NULL,
  `nama_kelurahan` varchar(100) NOT NULL,
  `latitude` text NOT NULL,
  `longitude` text NOT NULL,
  `tgl_sakit` date NOT NULL,
  `tgl_masuk_rumkit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penderita`
--

INSERT INTO `penderita` (`id_px`, `nik_px`, `nama_px`, `gender_px`, `dob_px`, `umur_px`, `namaortu_px`, `namapuskesmas_px`, `namarumkit_px`, `alamat_px`, `nama_kelurahan`, `latitude`, `longitude`, `tgl_sakit`, `tgl_masuk_rumkit`) VALUES
(3, '3582739101990003', 'Dedy Hermina', 'Laki-laki', '1997-12-04', 24, 'Hiens', 'Puskesmas Swasta', 'Rumkit Swasta', 'Jalan Kanan Kiri 12', 'Lowokwaru', '10.1828371841', '1.285287282', '2022-12-01', '2022-12-05'),
(4, '3574022947110002', 'Johanna Kellyn', 'Perempuan', '1997-12-10', 26, 'Hiens', 'Pus Swasta', 'Rum Swasta', 'Jalan Kanan Kiri 12', 'Lowokwaru', '12.5238254', '-2.2349829', '2022-12-01', '2022-12-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `kata_sandi` varchar(16) NOT NULL,
  `telp_user` varchar(16) NOT NULL,
  `akses_user` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username`, `kata_sandi`, `telp_user`, `akses_user`) VALUES
(1, 'admin', 'admin', '087859935894', 'ADMIN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pjb`
--

CREATE TABLE `pjb` (
  `id_pjb` int(11) NOT NULL,
  `tgl_pjb` date NOT NULL,
  `nama_kelurahan` varchar(100) NOT NULL,
  `jml_tandon_dlm_periksa` int(11) NOT NULL,
  `total_periksa` int(11) NOT NULL,
  `total_pos` int(11) NOT NULL,
  `jml_tandon_dlm_jentik` int(11) NOT NULL,
  `latitude` text NOT NULL,
  `longitude` text NOT NULL,
  `nama_kk` varchar(100) NOT NULL,
  `jml_tandon_luar_periksa` int(11) NOT NULL,
  `jml_tandon_luar_jentik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pjb`
--

INSERT INTO `pjb` (`id_pjb`, `tgl_pjb`, `nama_kelurahan`, `jml_tandon_dlm_periksa`, `total_periksa`, `total_pos`, `jml_tandon_dlm_jentik`, `latitude`, `longitude`, `nama_kk`, `jml_tandon_luar_periksa`, `jml_tandon_luar_jentik`) VALUES
(2, '2022-12-01', 'Lowokwaru', 10, 15, 2, 0, '11111111', '2222222', 'Geeree', 5, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id_carousel`);

--
-- Indeks untuk tabel `epidemiologi`
--
ALTER TABLE `epidemiologi`
  ADD PRIMARY KEY (`id_pe`);

--
-- Indeks untuk tabel `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_info`);

--
-- Indeks untuk tabel `penderita`
--
ALTER TABLE `penderita`
  ADD PRIMARY KEY (`id_px`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `pjb`
--
ALTER TABLE `pjb`
  ADD PRIMARY KEY (`id_pjb`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id_carousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `epidemiologi`
--
ALTER TABLE `epidemiologi`
  MODIFY `id_pe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `penderita`
--
ALTER TABLE `penderita`
  MODIFY `id_px` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pjb`
--
ALTER TABLE `pjb`
  MODIFY `id_pjb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
