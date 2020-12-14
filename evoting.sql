-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Des 2020 pada 18.24
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evoting`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth`
--

CREATE TABLE `auth` (
  `id_user` varchar(10) NOT NULL,
  `id_auth` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` text NOT NULL,
  `email` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth`
--

INSERT INTO `auth` (`id_user`, `id_auth`, `username`, `password`, `email`) VALUES
('us5fd382e5', '5fd39c8784', 'Hera', '$2y$10$XXYJUYUVXjVwL9q2cDJpwOhpTKIzQQDdaTiPbs7sDI1y1XIGDkXSC', 'Hera@gmail.com'),
('us5fd3a6d4', '5fd46c4b9a', 'indah', '$2y$10$cF2tuHgsJq.4dsOCZrdwxuvQzzlfRyLrkSlgCnVcKdFYaEhU5m58.', 'indah@gmail.com'),
('us5fd383b4', '5fd46ef499', 'Jihan', '$2y$10$ncAdYVpz6pn4ROOsg/L/v.6emldN6AtGgcgp3WFAF7d8zKQyrQUPW', 'Jihan@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id_event` varchar(10) NOT NULL,
  `nama_event` varchar(200) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_berahir` date NOT NULL,
  `priode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id_event`, `nama_event`, `tgl_mulai`, `tgl_berahir`, `priode`) VALUES
('ev5faed1c2', 'Pemilihan ketua RT kadujaya', '2020-11-01', '2020-11-28', '2020 sampai 2025'),
('ev5faed1d4', 'Pemilihan ketua RW kadujaya', '2020-11-01', '2020-11-28', '2020 sampai 2025'),
('ev5faed1f7', 'Pemilihan ketua Karang Taruna', '2020-11-01', '2020-11-28', '2020 sampai 2025'),
('ev5faed233', 'Pemilihan Ketua Dewa Kemakmuran Masjid(DKM)', '2020-11-01', '2020-11-30', '2020 sampai 2025'),
('ev5fd79e65', 'ascasca', '2020-12-08', '2020-12-31', '2020 sampai 2025');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kandidat`
--

CREATE TABLE `kandidat` (
  `id_kandidat` varchar(10) NOT NULL,
  `id_event` varchar(10) NOT NULL,
  `nomer_urut` varchar(5) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `pendidikan_terahir` varchar(30) NOT NULL,
  `pengalaman` varchar(50) NOT NULL,
  `visi` varchar(200) NOT NULL,
  `misi` varchar(200) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `role` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kandidat`
--

INSERT INTO `kandidat` (`id_kandidat`, `id_event`, `nomer_urut`, `nama_lengkap`, `foto`, `tempat_lahir`, `tgl_lahir`, `agama`, `alamat`, `pekerjaan`, `pendidikan_terahir`, `pengalaman`, `visi`, `misi`, `keterangan`, `role`) VALUES
('kan5fafab5', 'ev5faed1c2', '001', 'Tania Sudrajt', 'foto_kandidat1.PNG', 'Tangerang', '2020-11-12', 'islam', 'jl.Rajeg mulya no 45', 'wirausaha', 'SMA Sederajat', 'Pernah Menjadi Ketua Organisasi Pancasila', 'Maju tak gentar', 'Membela yang benar', 'Calon Ketua RT', ''),
('kan5faface', 'ev5faed1c2', '002', 'Jajang Sudrajat', 'foto_kandidat2.jpg', 'Tangerang', '2020-11-11', 'islam', 'jl.suka-suka', 'wirausaha', 'SMA Sederajat', 'Pernah Menjadi sekertaris Desa', 'Meningatkan kualitas internet di desa', 'Maju dengan dunia digital', 'Calon Ketua RT', ''),
('kan5fafad4', 'ev5faed1c2', '003', 'Hera Ananda', 'foto_kandidat3.jpg', 'Tangerang', '2020-11-13', 'islam', 'jl.suka-suka', 'Pegawai negri sipil(ASN)', 'Sarjana', 'Pernah Menjadi sekertaris Desa', 'Yang muda berkreasi', 'yang muda maju', 'Calon Ketua RT', ''),
('kan5fafae0', 'ev5faed1c2', '004', 'Lori indrawari', 'foto_kandidat2.PNG', 'Tangerang', '2020-11-20', 'islam', 'jl.suka-suka', 'Pengajar', 'Sarjana', 'Pernah Menjadi sekertaris Desa', 'Amanah dan bijaksana', 'Menuju warga Sejahtra', 'Calon Ketua RT', ''),
('kan5fb2d19', 'ev5faed1d4', '001', ' suzy', 'foto_kandidat4.jpg', 'Tangerang', '2020-11-04', 'islam', 'jl\'seksama no 234', 'wirausaha', 'Sarjana', 'Pernah Menjadi Ketua Organisasi Pancasila', 'yang muda', 'yang berkarya', 'Calon Ketua RW', ''),
('kan5fb3b0a', 'ev5faed1d4', '002', 'Ningsih sudrajat', 'foto_kandidat5.jpg', 'Tangerang', '2020-11-11', 'islam', 'jl.seksama no23', 'Pengajar', 'Sarjana', 'Pernah Menjadi sekertaris Desa', 'Maju tak gentar', 'membela yg benar', 'Calon Ketua RW', ''),
('kan5fb3b11', 'ev5faed1d4', '003', 'Doni sudrajat', 'foto_kandidat6.jpg', 'Tangerang', '2020-11-19', 'islam', 'jl.suka-suka no23', 'wirausaha', 'Sarjana', 'Pernah Menjadi Ketua Organisasi Pancasila', 'Meningkat kan kualitas sdm', 'jaya dan maju', 'Calon Ketua RW', ''),
('kan5fb3b18', 'ev5faed1d4', '004', 'Cinta sudrajat', 'foto_kandidat.jpeg', 'Tangerang', '2020-11-11', 'islam', 'jl.suka-suka no23', 'wirausaha', 'Sarjana', 'Pernah Menjadi sekertaris Desa', 'sarana desa', 'Rakyat Makmur', 'Calon Ketua RW', ''),
('kan5fc92ff', 'ev5faed1f7', '001', 'Siska Nurjanah', 'foto_kandidat7.jpg', 'Tangerang', '2020-12-11', 'islam', 'jl suka jadi no 123', 'Karyawan Swasta', 'SMA sederajat', 'Pernah Bekerja di Koperasi desa', 'Yang biasa', 'Pasti bisa', 'Calon Ketua Karang Taruna', ''),
('kan5fd4e7d', 'ev5faed1f7', '002', 'Dudung', 'foto_kandidat8.jpg', 'Tangerang', '2020-12-09', 'islam', 'jl.swedia no 123', 'Pengajar', 'SMA Sederajat', 'Pernah menjadi Kepala sekolah', 'Memberi Biasiswa anak yang Berprestasi', 'Maju dengan Cerdas', 'Calon Ketua Karang Taruna', ''),
('kan5fd4eaa', 'ev5faed1f7', '003', 'Bonet', 'foto_kandidat10.jpg', 'Tangerang', '2020-12-11', 'islam', 'jl.swedia no 211', 'Wirausaha', 'Sarjana', 'tidak ada', 'Mengaktifkan Kembali Kegiatan Kpemudaan', 'Yang Muda Yang Cerda', 'Calon Ketua Karang Taruna', ''),
('kan5fd4ecf', 'ev5faed1f7', '004', 'Sigit', 'foto_kandidat11.jpg', 'Jogja', '2020-12-10', 'islam', 'jl-swedia no 123', 'Karyawan swasta', 'Sma Sederajat', 'Tidak ada', 'Maju Tak gentar', 'Membela Yang Benar', 'Calon Ketua Karang Taruna', ''),
('kan5fd4f1c', 'ev5faed233', '001', 'Burhan', 'foto_kandidat12.jpg', 'Tangeranga', '2020-12-03', 'islam', 'jl.swedia no123', 'Penceramah', 'Sma Sedererjata', 'Tidak ada', 'Bismilahh', 'Alhamdulillah', 'Calon Ketua DKM', ''),
('kan5fd4f4a', 'ev5faed233', '002', 'Alghozali', 'foto_kandidat13.jpg', 'Tangerang', '2020-12-23', 'islam', 'jl.swedia', 'Penceramah', 'Sma Sederajat', 'Tidak ada', 'Bismillah', 'Alhamdulillah', 'Calon Ketua DKM', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` varchar(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama_lengkap` varchar(30) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `no_tlp` varchar(12) NOT NULL,
  `rt` varchar(3) DEFAULT NULL,
  `rw` varchar(3) DEFAULT NULL,
  `kecamatan` varchar(20) DEFAULT NULL,
  `kelurahan` varchar(20) DEFAULT NULL,
  `kabupaten` varchar(20) DEFAULT NULL,
  `agama` varchar(10) DEFAULT NULL,
  `role` varchar(1) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nik`, `nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `no_tlp`, `rt`, `rw`, `kecamatan`, `kelurahan`, `kabupaten`, `agama`, `role`, `image`) VALUES
('us5fd382e5', '2019201920192019', 'Hera amanda', 'Tang', '2020-12-18', 'P', 'jl-suka', '123456755', '001', '002', 'Curug', 'Kadu', 'Tangerang', 'islam', '3', 'foto_users3.jpg'),
('us5fd383b4', '2020202020202020', 'Jihan Fahira', 'Tangerang', '2020-12-16', 'P', 'jl.sukadiri', '0897979797', '001', '002', 'Curug', 'Kadu', 'Tangerang', 'islam', '1', 'foto_users5.jpg'),
('us5fd383d0', '2016201620162016', NULL, NULL, '0000-00-00', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg'),
('us5fd383e2', '2015201520152015', NULL, NULL, '0000-00-00', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg'),
('us5fd383f2', '2014201420142014', NULL, NULL, '0000-00-00', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg'),
('us5fd38406', '2012201220122012', NULL, NULL, '0000-00-00', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg'),
('us5fd38419', '2011201120112011', NULL, NULL, '0000-00-00', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg'),
('us5fd38427', '2009200920092009', NULL, NULL, '0000-00-00', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default.jpg'),
('us5fd3a6d4', '2018201820182018', 'indah dewi pertiwi', 'Tangerang', '2020-12-10', 'P', 'jl suka-suka', '0811232323', '001', '002', 'Curug', 'Kadu jaya', 'Tangerang', 'islam', '2', 'foto_users4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vote`
--

CREATE TABLE `vote` (
  `id_vote` varchar(10) NOT NULL,
  `id_event` varchar(10) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `id_kandidat` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `waktu_vote` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `vote`
--

INSERT INTO `vote` (`id_vote`, `id_event`, `id_user`, `id_kandidat`, `status`, `waktu_vote`) VALUES
('5fd787a99c', 'ev5faed1c2', 'us5fd382e5', 'kan5faface', 'terpilih', '14 December 2020, 04:41:29 PM'),
('5fd7944a5b', 'ev5faed1d4', 'us5fd382e5', 'kan5fb3b11', 'terpilih', '14 December 2020, 05:35:22 PM'),
('5fd797c41d', 'ev5faed1f7', 'us5fd382e5', 'kan5fc92ff', 'terpilih', '14 December 2020, 05:50:12 PM'),
('5fd797e981', 'ev5faed1f7', 'us5fd383b4', 'kan5fd4e7d', 'terpilih', '14 December 2020, 05:50:49 PM'),
('5fd797ff10', 'ev5faed1f7', 'us5fd3a6d4', 'kan5fd4e7d', 'terpilih', '14 December 2020, 05:51:11 PM'),
('5fd7983775', 'ev5faed233', 'us5fd383b4', 'kan5fd4f4a', 'terpilih', '14 December 2020, 05:52:07 PM'),
('5fd79dzxc7', 'ev5faed1f7', 'us5fd3a6d4', 'kan5fd4eaa', 'terpilih', '14 December 2020, 05:51:11 PM'),
('5fd7zxczf1', 'ev5faed1f7', 'us5fd3a6d4', 'kan5fd4ecf', 'terpilih', '14 December 2020, 05:51:11 PM'),
('5fdascsazx', 'ev5faed1f7', 'us5fd3a6d4', 'kan5fd4ecf', 'terpilih', '14 December 2020, 05:51:11 PM'),
('5fdascszvz', 'ev5faed1f7', 'us5fd3a6d4', 'kan5fd4ecf', 'terpilih', '14 December 2020, 05:51:11 PM'),
('5fddsadff1', 'ev5faed1f7', 'us5fd3a6d4', 'kan5fd4eaa', 'terpilih', '14 December 2020, 05:51:11 PM'),
('5fddsasadf', 'ev5faed1f7', 'us5fd3a6d4', 'kan5fd4ecf', 'terpilih', '14 December 2020, 05:51:11 PM'),
('saa97ff10', 'ev5faed1f7', 'us5fd3a6d4', 'kan5fd4eaa', 'terpilih', '14 December 2020, 05:51:11 PM');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id_auth`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indeks untuk tabel `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`id_kandidat`),
  ADD KEY `id_event` (`id_event`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`id_vote`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kandidat`
--
ALTER TABLE `kandidat`
  ADD CONSTRAINT `kandidat_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
