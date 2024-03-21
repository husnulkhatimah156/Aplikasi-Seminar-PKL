-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Feb 2024 pada 04.56
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
-- Database: `apk_penerimaan_siswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'Teknik Kendaraan Ringan (TKR)'),
(2, 'Agribisnis Pengolahan Hasil Pertanian (APHP)'),
(3, 'Teknik & Bisnis Sepeda Motor (TBSM)'),
(4, 'Teknik Komputer & Jaringan (TKJ)'),
(5, 'Agribisnis Tanaman Perkebunan (ATP)'),
(6, 'Agribisnis Tanaman Pangan & Hortikultura (ATPH)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `id_semester` int(11) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `id_semester`, `nama_kelas`) VALUES
(1, 2, 'X (A)'),
(2, 2, 'XI (A)'),
(3, 1, 'XII (A)'),
(5, 2, 'XI (B)'),
(6, 2, 'XII (B)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_siswa_baru`
--

CREATE TABLE `pengajuan_siswa_baru` (
  `id_pengajuan_siswa_baru` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `status_pengajuan` enum('MENUNGGU KONFIRMASI','DITERIMA','DITOLAK') NOT NULL,
  `keterangan_pengajuan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengajuan_siswa_baru`
--

INSERT INTO `pengajuan_siswa_baru` (`id_pengajuan_siswa_baru`, `id_siswa`, `tanggal_pengajuan`, `status_pengajuan`, `keterangan_pengajuan`) VALUES
(4, 61386, '2024-02-03', 'DITOLAK', ''),
(5, 61387, '2024-02-03', 'DITERIMA', 'berkas lengkap'),
(7, 61390, '2024-02-03', 'DITERIMA', 'Berkas lengkap'),
(8, 61392, '2024-02-03', 'DITERIMA', 'Berkas Lengkap'),
(9, 61393, '2024-02-03', 'DITERIMA', 'Berkas  Lengkap'),
(10, 61394, '2024-02-03', 'DITERIMA', 'Berkas lengkap'),
(11, 61395, '2024-02-03', 'DITERIMA', 'Berkas Lengkap'),
(12, 61396, '2024-02-03', 'DITERIMA', 'Bekas Lengkap'),
(14, 61397, '2024-02-03', 'DITERIMA', 'Berkas Lengkap'),
(15, 61398, '2024-02-03', 'DITERIMA', 'Berkas Lengkap'),
(16, 61399, '2024-02-03', 'DITOLAK', ' Berksa tidak lengkap'),
(17, 61400, '2024-02-03', 'DITOLAK', 'Berkas Tidak lengkap'),
(18, 61401, '2024-02-03', 'DITOLAK', 'Berkas tidak Lengkap'),
(19, 61403, '2024-02-03', 'DITOLAK', 'Berkas Tidak Lengkap'),
(20, 61404, '2024-02-03', 'DITERIMA', 'okeh berkas lengkap'),
(21, 61405, '2024-02-03', 'DITOLAK', 'Berkas Tidak Lengkap'),
(22, 61406, '2024-02-03', 'DITOLAK', 'Berkas  tidak lengkap'),
(23, 61407, '2024-02-03', 'DITOLAK', 'Berkas Tidak lengkap'),
(24, 61408, '2024-02-03', 'DITOLAK', 'Berkas Tidak lengkap'),
(28, 61412, '2024-02-03', 'DITERIMA', 'Berkas lengkap'),
(38, 61419, '2024-02-03', 'MENUNGGU KONFIRMASI', ''),
(39, 61420, '2024-02-03', 'MENUNGGU KONFIRMASI', ''),
(40, 61423, '2024-02-03', 'DITERIMA', 'berkas lengkap'),
(41, 61424, '2024-02-03', 'DITOLAK', 'berkas salah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` text NOT NULL,
  `no_hp` varchar(22) NOT NULL,
  `level` varchar(20) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username`, `password`, `nama_lengkap`, `no_hp`, `level`, `date_create`, `email`) VALUES
(1, 'Admin', '$2y$10$cf7LwPCMmk1HU2DyISIehurelPrrQiFDA.QiBoF8HtxwtHBjIZN0K', 'Husnul', '08123123123123', 'Administrator', '2021-11-19 00:11:27', 'husnul@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester`
--

CREATE TABLE `semester` (
  `id_semester` int(11) NOT NULL,
  `nama_semeser` varchar(40) NOT NULL,
  `tahun_ajaran` varchar(100) NOT NULL,
  `status_semester` enum('AKTIF','TIDAK AKTIF') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `semester`
--

INSERT INTO `semester` (`id_semester`, `nama_semeser`, `tahun_ajaran`, `status_semester`) VALUES
(1, 'GANJIL GENAP', '2019/2020', 'TIDAK AKTIF'),
(2, 'GENAP GANJIL', '2023/2024', 'AKTIF');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `jalur_masuk` varchar(100) NOT NULL,
  `berkas_pendukung` text NOT NULL,
  `status_pendaftaran` varchar(20) NOT NULL,
  `sekolah_asal` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `agama` varchar(40) NOT NULL,
  `nama_ayah` varchar(60) NOT NULL,
  `nama_ibu` varchar(60) NOT NULL,
  `alamat_ortu` varchar(150) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `nomor_akta` varchar(100) NOT NULL,
  `file_akta` text NOT NULL,
  `nomor_ijazah` varchar(100) NOT NULL,
  `file_ijazah` text NOT NULL,
  `nomor_kartu_keluarga` varchar(100) NOT NULL,
  `file_kartu_keluarga` text NOT NULL,
  `username_ortu` varchar(100) NOT NULL,
  `password_ortu` text NOT NULL,
  `rata_rata_nilai` float NOT NULL,
  `tanggal_jam_mendaftar` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id_kelas`, `nisn`, `jalur_masuk`, `berkas_pendukung`, `status_pendaftaran`, `sekolah_asal`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `agama`, `nama_ayah`, `nama_ibu`, `alamat_ortu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `no_telp`, `nomor_akta`, `file_akta`, `nomor_ijazah`, `file_ijazah`, `nomor_kartu_keluarga`, `file_kartu_keluarga`, `username_ortu`, `password_ortu`, `rata_rata_nilai`, `tanggal_jam_mendaftar`, `id_jurusan`) VALUES
(61393, 0, '768134', 'Jalur Umum', '', 'SISWA MASUK', 'SMPN 5 Marabahan', 'marsa', 'Kota Baru', '2004-01-24', 'Perempuan', 'KOTA BARU', 'Hindu', 'udi', 'santi', 'KOTA BARU', 'GURU', 'IBU RUMAH TANGGA', '085845549277', '3578-LU-28112012-0015', '', '423.7/502/180.3/2003', '', '6302060405070018', '', 'udi', '$2y$10$SFeHFEeIGUG7Pk8vk97dI.oZUHOBRhfQCLit50SFRRWFcvqlkKeli', 84.23, '2024-01-09 05:34:25', 0),
(61394, 0, '768136', 'Jalur Umum', '', 'SISWA PINDAHAN', 'SMPN 1 Marabahan', 'susan', 'Banjarmasin', '2005-01-25', 'Perempuan', 'BANJRAMASIN', 'Kristen Katolik', 'Abi', 'dewi', 'BANJRMASIN', 'PETANI', 'Guru', '08538897347', '3578-LU-28112012-0016', '', '423.7/502/180.3/2008', '', '6302060405070019', '', 'abi', '$2y$10$KfsL8aU0eZinso9cqRnk4ellrP7ER8ACtLe2rr.dWMblnQNrsifNG', 77.42, '2024-01-01 05:34:25', 0),
(61395, 3, '768171', 'Jalur Umum', '', 'SISWA PINDAHAN', 'SMPN 5 Marabahan', 'Dewi', 'Marabahan', '2022-01-25', 'Perempuan', 'MARBAHAN', 'Islam', 'sultan', 'umi', 'MARBAHAN', 'PETANI', 'IBU RUMAH TANGGA', '08574059954', '3578-LU-28112012-0010', '', '423.7/502/180.3/2009', '', '6302060405070017', '', 'sultan', '$2y$10$8V8MaNWwn8X9zHTNaCxm4.qkPhzu7uVGhmGuXDo136PgGTaT/H.mq', 78.89, '2024-01-01 05:34:25', 0),
(61396, 0, '768180', 'Jalur Umum', '', 'SISWA MASUK', 'SMPN 5 Marabahan', 'Nisa', 'Banjarmasin', '2006-01-16', 'Perempuan', 'BANJRMASIN', 'Islam', 'Dewi', 'Diah', 'BANJRAMASIN', 'GURU', 'IBU RUMAH TANGGA', '085751421448', '3578-LU-28112012-0019', '', '423.7/502/180.3/2009', '', '6302060405070015', '', 'Dewi', '$2y$10$CSfPUsnKwWMnJr.fCavWJuFB7sKW7rgB.6sCGcksg2TBN/oHgpsuS', 80.29, '2024-01-01 05:34:25', 0),
(61398, 0, '768188', 'Jalur Umum', '', 'SISWA PINDAHAN', 'SMPN 7 TAMBAN', 'Husana', 'Kota Baru', '2009-01-14', 'Perempuan', 'Kota Baru', 'Islam', 'Supian', 'Elma', 'Kota Baru', 'GURU', 'Guru', '085845549278', '3578-LU-28112012-0015', '', '423.7/502/180.3/2005', '', '6302060405070016', '', 'Subahan', '$2y$10$LxCmYuuzWfqyr.8c71MvnuMMd8d/3sfr3CJZfqvIlbA.1DPiAHJo.', 79.24, '2024-02-01 05:34:25', 0),
(61399, 6, '768136', 'Jalur Umum', '', 'SISWA MASUK', 'SMPN 7 TAMBAN', 'salsa', 'Kota Baru', '2000-01-15', 'Perempuan', 'Kota Baru', 'Islam', 'Samsul', 'Diah', 'Kota Baru', 'PETANI', 'IBU RUMAH TANGGA', '085391314734', '3578-LU-28112012-0028', '', '423.7/502/180.3/2006', '', '6302060405070017', '', 'Diah', '$2y$10$/EMlylFBN0bhVPSFM8KrT.SQ7OSnRu7N3FEp8Y88LJMgRv4hSC8YO', 80.42, '2024-02-01 05:34:25', 0),
(61400, 0, '768501', 'Jalur Umum', '', 'SISWA PINDAHAN', 'SMPN 2 TAMBAN', 'Arpina', 'Banjarmasin', '2001-01-21', 'Perempuan', 'Marbahan', 'Islam', 'Ali', 'tina', 'Marbahan', 'Guru', 'Guru', '08574059945', '3578-LU-28112012-0011', '', '423.7/502/180.3/2001', '', '6302060405070019', '', 'tina', '$2y$10$CxnjmSCLHo126aXdv9YfyOea2LqWfKxY58xfVXMLS6QZSt0Qtbb/u', 79.24, '2024-02-01 05:34:25', 6),
(61401, 0, '768503', 'Jalur Umum', '', 'SISWA PINDAHAN', 'SMPN 3 MARABAHAN', 'Budi', 'Banjarmasin', '2008-01-13', 'Laki-Laki', 'Kota Baru', 'Islam', 'imur', 'Rini', 'Kota Baru', 'petani', 'IBU RUMAH TANGGA', '085845549245', '3578-LU-28112012-0018', '', '423.7/502/180.3/2009', '', '6302060405070019', '', 'Rini', '$2y$10$TN7doYMucXaMQXZqVkQijuLWG74LlFJqJndll2aaWxlyQ6y5sVny6', 74.52, '2024-02-01 05:34:25', 2),
(61403, 0, '768505', 'Jalur Umum', '', 'SISWA MASUK', 'SMPN 3 TAMBAN', 'Nabila', 'Banjarmasin', '2022-01-22', 'Perempuan', 'Banjramasin', 'Budha', 'sultan', 'sumita', 'Banjramsin', 'GURU', 'Guru', '085845549256', '3578-LU-28112012-0018', '', '423.7/502/180.3/2009', '', '6302060405070019', '', 'lia', '$2y$10$W5tx0MTANTx/BnbwZXN2xeG0HPjw4uZ5URZRizGWXbX8tunYpGh3.', 75.24, '2024-02-01 05:34:25', 2),
(61404, 0, '768508', 'Jalur Umum', '', 'SISWA MASUK', 'SMPN 5 Marabahan', 'Erma', 'Banjarmasin', '2022-01-13', 'Perempuan', 'Banjrmasin', 'Hindu', 'Ulfi', 'Anisa', 'Banjramsin', 'GURU', 'Guru', '085740599456', '3578-LU-28112012-0010', '', '423.7/502/180.3/2009', '', '6302060405070015', '', 'ulfi', '$2y$10$20gEuB5itKh1UT9IfVdMJO.rrAEHpa31eUEq5ujkpHJjNBoiBLroS', 69.35, '2024-02-01 05:34:25', 4),
(61405, 0, '768504', 'Jalur Umum', '', 'SISWA PINDAHAN', 'SMPN 5 Marabahan', 'Ira', 'Banjarmasin', '2003-01-08', 'Perempuan', 'Kota Baru', 'Kristen Katolik', 'roni', 'sinta', 'Kota baru', 'PETANI', 'IBU RUMAH TANGGA', '085845549456', '3578-LU-28112012-0010', '', '423.7/502/180.3/2019', '', '6302060405070019', '', 'Nabil', '$2y$10$UUTvlkg3hnaXRIFZ56YzkuqtsPh45eM3GvtIQ67LoeaW5sOtVvCoi', 71.42, '2024-02-01 05:34:25', 4),
(61406, 0, '768174', 'Jalur Umum', '', 'SISWA PINDAHAN', 'SMPN 5 Marabahan', 'husa', 'Banjarmasin', '2022-01-28', 'Perempuan', 'Kota Baru', 'Islam', 'roni ', 'ira', 'Kota Baru', 'GURU', 'Guru', '08538897334', '3578-LU-28112012-0012', '', '423.7/502/180.3/2009', '', '6302060405070019', '', 'Erma', '$2y$10$J.YKKTz6aGKY4QMKP/2/3OnjzOFMvpRJCF/PrwgxOFKHESx87Frhy', 75.35, '2024-02-01 05:34:25', 4),
(61407, 0, '768194', 'Jalur Umum', '', 'SISWA MASUK', 'SMPN 5 Marabahan', 'sinta', 'Banjarmasin', '2005-01-24', 'Perempuan', 'MARBAHAN', 'Konghucu', 'Aban', 'Jiah', 'Marbahan', 'PETANI', 'IBU RUMAH TANGGA', '085391314756', '3578-LU-28112012-0019', '', '423.7/502/180.3/2009', '', '6302060405070019', '', 'ira', '$2y$10$xYrqZhV7SrXhtjWHWz8d.OsiWUQQzWCD7BYu00V.S6KpNQhsfAyju', 75.55, '2024-02-01 05:34:25', 4),
(61409, 2, '768189', 'Jalur Umum', '', 'SISWA PINDAHAN', 'SMPN 5 Marabahan', 'Mastuah', 'Marabahan', '2022-01-14', 'Perempuan', 'Kota Baru', 'Islam', 'supian', 'ani', 'Kota Baru', 'Guru', 'Guru', '08574059959', '3578-LU-28112012-0016', '', '423.7/502/180.3/2009', '', '6302060405070019', '', 'jiah', '$2y$10$6Dql88WhThQ2qbrlAUh83eCMUlohj1L6waf8cJIK9qJ26GMNivsxy', 79.24, '2024-02-01 05:34:25', 4),
(61423, 3, '768130', 'Jalur Umum', 'c1b2451a2b8d2a615cbd7bf05058f618.png', 'SISWA MASUK', 'SMPN 1 Banjarmasin', 'Samsudin', 'Marabahan', '2024-02-03', 'Laki-Laki', 'jl pangeran', 'Islam', 'Saipul', 'Ramnah', 'jl pangeran', 'Guru', 'Ibu Rumah Tangga', '0813749138431', '613877617131', '29c7f0300539ace3c544ded30214b990.png', '3176483134', 'e9c95c9d3edf09cfe1e3feaf2ae15814.png', '2341343141', '11d266de9f97b3a60e8a4c6cb1587406.png', 'baihaki', '$2y$10$0pQQ6HW4ABkBQE3j73NUeuABxgAwtA9JUYZ0pK5oQfdGny.o.1YL2', 57, '2024-02-02 13:14:12', 1),
(61424, 2, '9913781338', 'Jalur Prestasi', '9c4e4a9949c61e90ca3f6b3b8bc1376e.png', 'SISWA MASUK', 'SMP N 1 Marabahan', 'Muhammad Udin', 'Marabahan', '1990-02-06', 'Laki-Laki', 'jl Pangeran no. 581', 'Islam', 'M. Syafwan', 'Siti Khusnun', 'jl Pangeran no. 581', 'Guru', 'Ibu Rumah Tangga', '0822615366413413', '5183658311', '786b9a7145edae8e297da75467de3690.png', '867431814', 'bf1bbd76cfb921ab87b6e848d3556952.png', '9631831871', '92d413f1a337c1978bd83b1acbabe813.png', 'udin', '$2y$10$bCPhPvPzI716IIQQ1AwCeeBZ2kbm3rgGEBWvN94TY43/BcW1nQATK', 77.7, '2024-02-03 02:35:31', 4);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_semester` (`id_semester`);

--
-- Indeks untuk tabel `pengajuan_siswa_baru`
--
ALTER TABLE `pengajuan_siswa_baru`
  ADD PRIMARY KEY (`id_pengajuan_siswa_baru`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pengajuan_siswa_baru`
--
ALTER TABLE `pengajuan_siswa_baru`
  MODIFY `id_pengajuan_siswa_baru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `semester`
--
ALTER TABLE `semester`
  MODIFY `id_semester` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61425;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`id_semester`) REFERENCES `semester` (`id_semester`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
