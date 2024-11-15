#Business Requirements Document (BRD)
#Aplikasi Data Pembayaran Sekolah

1. Pendahuluan
Aplikasi Data Pembayaran adalah sistem yang digunakan oleh orang tua murid dan administrator sekolah untuk mencatat dan mengelola pembayaran biaya sekolah. Orang tua murid dapat melakukan pembayaran untuk berbagai biaya yang ada, sedangkan administrator sekolah dapat memonitor, mengelola, dan melakukan tindakan terhadap data pembayaran tersebut.

2. Tujuan
Tujuan dari aplikasi ini adalah untuk:

Memudahkan orang tua murid dalam melakukan pembayaran biaya sekolah secara online atau langsung.
Memberikan kemudahan bagi administrator sekolah dalam mengelola data pembayaran, termasuk mengelola metode pembayaran dan rincian pembayaran.
Menyediakan laporan pembayaran yang transparan dan mudah diakses oleh pihak terkait.
3. Definisi Aktor
3.1 Orang Tua Murid
Deskripsi: Orang tua murid adalah pengguna yang bertanggung jawab untuk melakukan pembayaran biaya sekolah bagi anak mereka.
Fungsi:
Melihat daftar biaya yang perlu dibayar.
Melakukan pembayaran melalui metode yang tersedia (misalnya Transfer Bank, Tunai, E-wallet, dll).
Memantau status pembayaran dan riwayat pembayaran.
3.2 Administrator Sekolah
Deskripsi: Administrator sekolah adalah pengguna yang bertanggung jawab untuk mengelola semua data pembayaran di sistem, serta memastikan kelancaran transaksi pembayaran.
Fungsi:
Menambahkan dan mengelola jenis biaya yang perlu dibayar oleh siswa.
Menambahkan dan mengelola metode pembayaran yang tersedia.
Memantau status pembayaran yang dilakukan oleh orang tua murid.
Menyusun laporan pembayaran.
Mengelola akun pengguna (administrator dan orang tua murid).
4. Lingkup
Aktor Terlibat: Orang Tua Murid, Administrator Sekolah.
Fitur Utama:
Pendaftaran dan login untuk orang tua murid dan administrator.
Manajemen metode pembayaran (oleh administrator).
Manajemen biaya pembayaran (oleh administrator).
Pembayaran biaya oleh orang tua murid.
Monitoring status pembayaran (oleh orang tua murid dan administrator).
Riwayat pembayaran (oleh orang tua murid dan administrator).
Laporan pembayaran (oleh administrator).
Platform: Web aplikasi berbasis PHP Laravel.
Aksesibilitas: Aplikasi akan diakses melalui browser web.
5. Kebutuhan Fungsional
5.1 Modul Orang Tua Murid
Pendaftaran dan Login:
Orang tua murid dapat membuat akun dan login ke dalam sistem menggunakan email dan password.
Melihat Biaya yang Harus Dibayar:
Orang tua dapat melihat daftar biaya yang harus dibayar, termasuk rincian seperti jenis biaya dan jumlah yang harus dibayar.
Pembayaran Biaya:
Orang tua murid dapat melakukan pembayaran untuk biaya yang tercatat menggunakan metode pembayaran yang tersedia (Transfer Bank, Tunai, E-wallet, dll).
Status Pembayaran:
Orang tua murid dapat memeriksa status pembayaran untuk memastikan apakah pembayaran mereka sudah berhasil diproses.
Riwayat Pembayaran:
Orang tua murid dapat melihat riwayat pembayaran mereka, termasuk tanggal pembayaran dan jumlah yang dibayarkan.
5.2 Modul Administrator Sekolah
Manajemen Metode Pembayaran:
Administrator dapat menambah, mengedit, atau menghapus metode pembayaran yang tersedia (misalnya Transfer Bank, Tunai, dll).
Manajemen Biaya Pembayaran:
Administrator dapat menambah, mengedit, atau menghapus jenis biaya yang perlu dibayar oleh siswa (misalnya biaya pendaftaran, SPP, dll).
Monitoring Pembayaran:
Administrator dapat memonitor pembayaran yang telah dilakukan oleh orang tua murid.
Laporan Pembayaran:
Administrator dapat menghasilkan laporan terkait pembayaran, termasuk total pembayaran yang diterima dan status pembayaran setiap siswa.
Manajemen Pengguna:
Administrator dapat mengelola akun pengguna (orang tua murid dan administrator).
6. Kebutuhan Non-Fungsional
6.1 Kinerja
Aplikasi harus dapat menangani 1000 transaksi pembayaran secara bersamaan tanpa penurunan kinerja yang signifikan.
6.2 Keamanan
Semua data pembayaran dan informasi pribadi harus dilindungi dengan enkripsi.
Sistem harus menerapkan otentikasi pengguna yang kuat menggunakan email dan password.
6.3 Skalabilitas
Aplikasi harus dirancang untuk bisa menangani lebih banyak pengguna dan transaksi di masa depan.
6.4 Usability
Aplikasi harus memiliki antarmuka yang ramah pengguna dengan navigasi yang mudah dipahami.