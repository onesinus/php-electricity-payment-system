-- Tambahkan data ke tabel tarif jika belum ada
INSERT IGNORE INTO `tarif` (`id_tarif`, `daya`, `tarifperkwh`) VALUES
(1, 900, 1352.00),
(2, 1300, 1447.00),
(3, 2200, 1699.00);

-- Tambahkan data ke tabel pelanggan jika belum ada
INSERT IGNORE INTO `pelanggan` (`id_pelanggan`, `username`, `password`, `nomor_kwh`, `nama_pelanggan`, `alamat`, `id_tarif`) VALUES
(1, 'john', 'johnpass', '123456', 'John Doe', 'Jl. Kebon Jeruk', 1),
(2, 'jane', 'janepass', '654321', 'Jane Smith', 'Jl. Mangga Dua', 2);

-- Tambahkan data ke tabel penggunaan jika belum ada
INSERT IGNORE INTO `penggunaan` (`id_penggunaan`, `id_pelanggan`, `bulan`, `tahun`, `meter_awal`, `meter_akhir`) VALUES
(1, 1, 'Januari', 2024, 0, 100),
(2, 2, 'Februari', 2024, 50, 150);

-- Tambahkan data ke tabel tagihan jika belum ada
INSERT IGNORE INTO `tagihan` (`id_tagihan`, `id_penggunaan`, `bulan`, `tahun`, `jumlah_meter`, `status`) VALUES
(1, 1, 'Januari', 2024, 100, 'Belum Lunas'),
(2, 2, 'Februari', 2024, 100, 'Belum Lunas');

-- Tambahkan data ke tabel user jika belum ada
INSERT IGNORE INTO `user` (`id_user`, `username`, `password`, `nama_admin`, `id_level`) VALUES
(1, 'admin', 'adminpass', 'Administrator', 1),
(2, 'user1', 'user1pass', 'User One', 2);

-- Tambahkan data ke tabel pembayaran jika belum ada
INSERT IGNORE INTO `pembayaran` (`id_pembayaran`, `id_tagihan`, `tanggal_pembayaran`, `biaya_admin`, `total_bayar`, `id_user`) VALUES
(1, 1, '2024-07-01', 10.00, 200.00, 1),
(2, 1, '2024-08-01', 15.00, 250.00, 1),
(3, 2, '2024-07-15', 12.00, 180.00, 2),
(4, 2, '2024-08-10', 20.00, 230.00, 2);