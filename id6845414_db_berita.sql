-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 17 Sep 2018 pada 05.05
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id6845414_db_berita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` varchar(2000) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `add_by` varchar(50) NOT NULL,
  `umur` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `foto`, `alamat`, `email`, `no_hp`, `add_by`, `umur`, `status`) VALUES
(6, 'Administrator', '94af6095a7fded54769a8b83296f053c', 'e7339ff5f1f70f3317f5e5c0949b4c51.JPG', 'jl.kadudampit', 'galehdotid@gmail.com', '085817836592', 'galehgans', '17 tahun', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `slug_berita` varchar(200) NOT NULL,
  `berita` varchar(20000) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `penulis` varchar(20) NOT NULL,
  `foto` varchar(20000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `slug_berita`, `berita`, `id_kategori`, `tanggal`, `penulis`, `foto`) VALUES
(45, 'Sepak Bola AG 2018: Mental Timnas U-23 Diuji, Ketinggalan 0-1', 'sepak-bola-ag-2018-mental-timnas-u-23-diuji-ketinggalan-0-1', '<p>&nbsp;<strong>Jakarta</strong>&nbsp;- Uni Emirat Arab memimpin 1-0 melawan Timnas U-23 pada babak pertama 16 besar sepak bola AG 2018 di Stadion Wibawa Mukti, Cikarang, sore ini, Jumat 24 Agustus 2018.</p>\r\n\r\n<p>Dalam pertandingan ini, Andy Setyo Nugroho masuk sebagai bek tengah mendampingi Hansamu Yama. Pada awal pertandingan, Uni Emirat Arab mendapat ruang untuk melakukan tembakan. Tapi, tendangannya tidak terlalu membahayakan kiper Andritany Ardhiyasa. Tendangan melambung spekulasi berhasil ditangkap dengan baik oleh Andritany.</p>\r\n\r\n<p>Indonesia mendapat peluang emas berasal dari tendangan jarak jauh yang dilakukan Febri Hariyadi. Tapi, bola terobosan itu gagal disontek Beto Goncalves.</p>\r\n\r\n<p><iframe frameborder=\"0\" height=\"1\" id=\"google_ads_iframe_/14056285/tempo.co/desktop_edsus_inarticle_0\" name=\"google_ads_iframe_/14056285/tempo.co/desktop_edsus_inarticle_0\" scrolling=\"no\" title=\"3rd party ad content\" width=\"1\"></iframe></p>\r\n\r\n<p>Pemain UEA lebih banyak menguasai bola dalam 10 menit pertama dan Timnas U-23 mengandalkan pada serangan balik yang cepat.</p>\r\n\r\n<p>Petaka bagi Indonesia terjadi pada menit ke-19, ketika UEA mendapat hadiah penalti setelah Andy menggaet pemain lawan di dalam kotak penalti dari belakang. Syair Alameri mengeksekusinya dengan baik untuk membawa UEA memimpin 1-0. &nbsp;</p>\r\n\r\n<p>Pada menit ke-33 Stefano Lilipaly mendapat ruang bebas untuk melakukan tembakan tapi tendangannya melambung di atas mistar gawang UEA.</p>\r\n', 10, '24 August, 2018', 'ADMIN', '098ba26eb70da6e192418b943d8e3451.jpg'),
(46, 'Asian Games 2018, Indonesia Tambah 1 Emas dari Panjat Tebing', 'asian-games-2018-indonesia-tambah-1-emas-dari-panjat-tebing', '<p><strong>TEMPO.CO</strong>,&nbsp;<strong>Jakarta</strong>&nbsp;- Kontingen Indonesia dipastikan mendapatkan satu tambahan medali emas cabang&nbsp;<a href=\"https://www.tempo.co/tag/asian-games-2018\" rel=\"noopener\" target=\"_blank\">Asian Games 2018</a>&nbsp;dari cabang panjat tebing nomor kecepatan. Pemanjat tebing putri Aries&nbsp;Susanti&nbsp;Rahayu&nbsp;menjadi yang terbaik setelah pada partai final mengalahkan atlet Indonesia lainnya.</p>\r\n\r\n<p>Partai final sesama atlet Indonesia terjadi setelah Puji Lestari dan Susanti Rahayu Aries mengalahkan dua wakil Cina, Song Yiling dan He Cuilian. Medali Perunggu diraih oleh He Cuilian yang berhasil mengalahkan rekan senegaranya itu pada perebutan posisi ketiga.</p>\r\n\r\n<p>Pada babak 16 besar Aries Susanti Rahayu mengalahkan Narada Disyabut dari Thailand dengan catatan&nbsp;waktu 8,19 detik. Langkah Aries disusul Puji Lestari yang memenangkan duel dengan atlet Malaysia,&nbsp;Amalina Syairah, dengan catata waktu 8,88 detik.&nbsp;</p>\r\n\r\n<p>Catatan waktu kedua pemanjat tebing putri Indonesia itu semakin cepat pada babak 8 besar.&nbsp;Aries mencatatkan waktu 8,09&nbsp; detik untuk melaju ke babak semifinal sementara&nbsp;Puji Lestari menang TKO karena atlet Taipei,&nbsp;Lee Hungying, didiskualifikasi&nbsp;karena mencuri start.</p>\r\n\r\n<p><iframe frameborder=\"0\" height=\"1\" id=\"google_ads_iframe_/14056285/tempo.co/desktop_edsus_inarticle_0\" name=\"google_ads_iframe_/14056285/tempo.co/desktop_edsus_inarticle_0\" scrolling=\"no\" title=\"3rd party ad content\" width=\"1\"></iframe></p>\r\n\r\n<p>Pada partai final, Aries Susanti&nbsp;Rahayu menjadi yang terbaik dengan catatan waktu 7,61 detik sementara Puji Lestari mencatatkan waktu 7,98 detik.</p>\r\n\r\n<p>Indonesia sebenarnya berpeluang meraih medali emas di nomor yang sama dari putra. Namun dua atlet Indonesia, Aspar dan Sabri, disingkirkan oleh atlet Iran Reza Alipour dan atlet Cina Zhong Qixin.</p>\r\n\r\n<p>Pada perebutan juara ketiga, Aspar akhirnya berhasil meraih medali perunggu setelah Sabri didiskualifikasi karena dianggap mencuri start. Sementara medali emas diperoleh oleh Reza Alipour dan perak direbut oleh Zhong Qixin.</p>\r\n\r\n<p>Tambahan satu medali emas, satu perak dan satu perunggu dari cabang&nbsp;panjat&nbsp;tebing&nbsp;itu untuk sementara membuat kontingen Indonesia aman dari kejaran Thailand dalam perolehan medali. Hingga pukul 19.00 WIB, Indonesia telah mengumpulkan 8 medali emas, 6 perak dan 10 perunggu dan berada di posisi kelima perolehan medali Asian Games 2018. Sementara Thailand mampu meraih 6 medali emas 4 perak dan 16 perunggu.</p>\r\n', 10, '24 August, 2018', 'ADMIN', 'c13373776dfdb53e6ed83c1e5814c5e1.jpg'),
(48, 'Gomez: Nikmati Kemenangan dari PSKC', 'gomez-nikmati-kemenangan-dari-pskc', '<p>SUKABUMIUPDATE.com - Pelatih PERSIB, Mario Gomez mengajak anak asuhnya untuk sejenak menikmati kemenangan 2-1 atas PSKC Kota Cimahi di Stadion Wiradadaha Kota Tasikmalaya, Rabu 15 Agustus 2018.&nbsp;<br />\r\nSetelah kemenangan itu, pelatih asal Argentina itu mengaku akan menikmati libur jeda Asian Games sampai 29 Agustus 2018 sebelum berkonsentrasi ke laga selanjutnya di Liga 1.&nbsp;<br />\r\n&ldquo;Hari ini kita enjoy. Karena kita menang. Para pemain akan menikmati liburan sampai tanggal 29 Agustus. Setelah itu, kita akan kembali dan berlatih untuk menatap laga selanjutnya kontra Arema,&rdquo; ujarnya, Rabu 15 Agustus 2018.</p>\r\n\r\n<p>Mengenai permainan timnya, Gomez mengaku bangga. Meski harus bertanding tanpa sejumlah pemain kunci, PERSIB tetap mampu memenangkan laga.<br />\r\n&ldquo;Ya, saya puas dan bangga dengan permainan para pemain. Karena mereka bermain dan berjuang keras untuk memenangkan pertandingan ini,&rdquo; katanya.<br />\r\nSumber: Persib.co.id</p>\r\n', 10, '24 August, 2018', 'ADMIN', 'da1027b052cfead2e1e24a5686e97213.jpg'),
(49, 'Real Madrid Vs Atletico Madrid 2-4, Gareth Bale Tuai Kecaman', 'real-madrid-vs-atletico-madrid-2-4-gareth-bale-tuai-kecaman', '<p>SUKABUMIUPDATE.com - Penyerang Gareth Bale gagal membuktikan bahwa dirinya layak menggantikan Cristiano Ronaldo sebagai mesin gol baru Real Madrid setelah timnya dibungkam Atletico Madrid 4-2 pada laga Piala Super Eropa. Bale dinilai bermain tak konsisten pada laga itu.<br />\r\nMedia AS menyatakan bahwa dalam konferensi pers, Bale menjadi sorotan. Dia dinilai tak bermain baik pada babak kedua meskipun mencetak satu assist untuk gol Karim Benzema pada babak pertama.<br />\r\nMeskipun demikian, Pelatih Real Madrid Julen Lopetegui tetap puas dengan performa pemain asal Wales itu. Menurut dia, wajar jika Bale bermain tak konsisten karena kondisi fisiknya masih belum mencapai 100 persen setelah menjalani liburan musim panas.</p>\r\n\r\n<p>&quot;Dia bermain baik, tetapi itu sesuatu yang normal pada moemen di awal musim seperti ini karena pemain tak berada dalam kondisi fisik terbaiknya, Kami senang dengan performanya dan tentu dia akan bermain lebih baik beberapa pekan ke depan,&quot; kata Lopetegui.<br />\r\nPada laga itu, Real Madrid tertinggal terlebih dahulu lewat gol Diego Costa pada menit pertama. Namun Real Madrid berhasil membalikan keadaan lewat gol Karim Benzema pada menit ke-27 dan tendangan penalti Sergio Ramos menit ke-63.<br />\r\nDiego Costa kembali menjadi momok bagi Real Madrid setelah menyamakan kedudukan pada menit ke-79. Skor 2-2 bertahan hingga 90 menit dan pertandingan pun dilanjutkan ke babak tambahan.<br />\r\nAtletico Madrid berhasil menambah gol pada babak tambahan melalui Saul Niguez dan Koke. Meskipun telah mencoba kembali menyeimbangkan keadaan, Real Madrid akhirnya harus menyerah.</p>\r\n', 10, '24 August, 2018', 'ADMIN', '78f7ad24659cfcfec5eeebef457cc580.jpg'),
(50, 'Kisah Warga Gotong-Royong Padamkan Api Kebakaran di Simpenan Sukabumi', 'kisah-warga-gotong-royong-padamkan-api-kebakaran-di-simpenan-sukabumi', '<p>SUKABUMIUPDATE.com - Peristiwa kebakaran rumah bedeng yang dihuni pegawai perkebunan PT Bojong Asih di Kampung Bojongasih, Desa Cihaur, Kecamatan Simpenan, Kabupaten Sukabumi, merenggut nyawa Sulaeman (68 tahun), salah satu penghuni rumah yang terbakar. Warga sekitar bergotong-royong memadamkan api, tanpa bantuan petugas pemadam kebakaran.</p>\r\n\r\n<p>Relawan BPBD Kabupaten Sukabumi di Kecamatan Simpenan, Yayan Bastiar, mengungkap kisah gotong-royong warga saat melakukan pemadaman. Warga melakukan pemadaman dengan peralatan seadanya.</p>\r\n\r\n<p>&quot;Pakai ember. Ada yang ambil air dari sumur, dari sungai kecil (susukan). Semua warga disini gotong-royong memadamkan api,&quot; ujar Yanyan ditemui sukabumiupdate.com, Jumat (23/8/2018).</p>\r\n\r\n<p>Api yang berasal dari rumah Sulaeman seketika membesar. Tiga rumah lainnya ludes.</p>\r\n\r\n<p>Yayan mengatakan, warga sekitar tidak sempat melaporkan peristiwa kebakaran tersebut kepada petugas. Warga fokus memadamkan api.</p>\r\n\r\n<p>&quot;Kalau pun ada yang melapor saya kira tidak akan sempat petugas damkar melakukan pemadaman,&quot;kata Yanyan.</p>\r\n\r\n<p>&quot;Jarak dari pos pemadam kebakaran ke lokasi terlalu jauh, sementara api dengan cepat membesar karena material bangunan terdiri dari bahan-bahan yang mudah terbakar,&quot; tutur Yanyan.</p>\r\n\r\n<p>Yanyan mengatakan, pos pemadam kebakaran terdekat berada di Palabuhanratu. Jarak tempuhnya sekitar satu jam ke lokasi kebakaran.</p>\r\n\r\n<p>&quot;Kami pun baru mengetahui informasi kebakaran ini sekitar pukul 05.00 WIB. Dan saat itu terima laporan kalau api sudah padam. Warga hanya melapor ke petugas PLN, minta tolong pemadaman aliran listrik,&quot; tuturnya.</p>\r\n\r\n<p>Petugas BPBD Kabupaten Sukabumi, kata Yayan, telah mendata kerugian yang diakibatkan kebakaran tersebut. Kerugian materil ditaksir mencapai Rp 250 juta.</p>\r\n', 13, '24 August, 2018', 'ADMIN', '1be213a814865b3d3c35ea9bed43c729.jpg'),
(51, 'Bangga, Pemuda Asal Surade Sukabumi Sumbang Emas untuk Indonesia di Asian Games 2018', 'bangga-pemuda-asal-surade-sukabumi-sumbang-emas-untuk-indonesia-di-asian-games-2018', '<p><strong>SUKABUMIUPDATE.com</strong>&nbsp;&ndash; Indonesia menambah perbendaharaan medali emas Asian Games 2018, setelah tim dayung putra lightweight 8 pedayung merebut emas. Dilansir dari tempo.co, lomba dayung Asian Games 2018 digelar di Jakabaring Rowing Center, Palembang Jumat (24/8/2018).</p>\r\n\r\n<p>Salah seorang dari tim dayung Indonesia adalah putra asli Surade Kabupaten Sukabumi, Jawa Barat, Ujang Hasbulloh (23 tahun). Ujang bersama Tanzil Hadid, Muh. Yakin, Rio Rizki Darmawan, Ferdiansyah, Ihram, Jefri Ardianto, Ali Buton, dan Adi Isardi, sukses menambah medali tim Indonesia di Asian Games 2018, dengan 9 emas, 7 perak, 11 perunggu.</p>\r\n\r\n<p>Seperti diberitakan&nbsp;<em><strong>sukabumiupdate.com</strong></em>&nbsp;sebelumnya Ujang Hasbulloh, kelahiran 11 Mei 1995, ikut membela tim dayung Indonesia di perhelatan Asian Games 2018. Ujang tercatat sebagai mahasiswa Universitas Pendidikan Indonesia (UPI)&nbsp; Bandung, semester terakhir.</p>\r\n\r\n<p>Anak bungsu dari lima bersaudara dari pasangan suami istri Sopudin (65 tahun) dan Saliah (60 tahun) itu adalah warga Kampung Sukasirna RT 05 RW 10, Desa Pasiripis, Kecamatan Surade, Kabupaten Sukabumi.</p>\r\n\r\n<p>Menurut sang ayah Sopudin, sebenarnya Hasbulloh juga mempunyai bakat bermain sepakbola. Hasbulloh sekolah di MI Sukasirna Surade&nbsp; lulus tahun 2008, SMP terpadu Darul Amal Jampangkulon (2011), dilanjutkan ke MAN 3 Sukabumi(2014).</p>\r\n\r\n<p>&quot;Sekarang kuliah di UPI jurusan PGSD Penjas, dapat bea siswa (4 tahun). Dia ikut kegiatan olahraga polo air dan dayung. Sekarang ikut tim dayung Indonesia di Asian Games,&quot; ujar kata Sopudin kepada&nbsp;<em><strong>sukabumiupdate.com</strong></em>, Rabu (22/8/2018).</p>\r\n\r\n<p>Kakak kandung Hasbulloh, Rohayati (42 tahun), mengatakan adiknya juga aktif menggeluti olahraga polo air. Pada tahun 2016, ditunjuk oleh panitia PON Jawa Barat menjadi pemandu&nbsp; tim dayung Kalimantan. Semenjak itulah dia menggeluti dayung.</p>\r\n\r\n<p>Hasbulloh menggeluti olahraga dayung bersama rekannya di Unit Kegiatan Mahasiswa (UKM) UPI. Berbagai kejuaraan diikutinya, baik dalam atau luar negeri. Hasbulloh juga pernah ikut membela tim Jabar pada kejurnas dayung&nbsp; di Palembang pada&nbsp; 2017.</p>\r\n', 10, '24 August, 2018', 'ADMIN', 'ec2efc5f5b9fd12a6726c18ebaf905de.jpg'),
(52, 'Liga Champions: Gol Messi Selamatkan Barcelona Lawan Chelsea', 'liga-champions-gol-messi-selamatkan-barcelona-lawan-chelsea', '<p><strong>SUKABUMIUPDATE.com</strong>&nbsp;- Lionel Messi&Acirc;&nbsp;menggagalkan kemenangan Chelsea yang ibarat sudah di depan mata juara bertahan Liga Primer Inggris ini dalam pertandingan pertama babak 16 besar Liga Champions di Stadion Stamford Bridge, London, Rabu dinihari tadi, 21 Februari 2018.</p>\r\n\r\n<p>Pemain lini tengah Chelsea asal Brasil, Willian, berhasil menjebol gawang tamunya, Barcelona, pada menit ke-62 babak kedua. Tendangannya dari luar kotak penalti berhasil meraih gol yang ditunggu-tunggu tim tuan rumah.</p>\r\n\r\n<p>Tapi, menit ke-75, atau sekitar 15 menit sebelum pertandingan terakhir, Messi berhasil memperdayai kiper Thibaut Courtois, untuk menyamakan kedudukan Barcelona menjadi imbang 1-1.</p>\r\n\r\n<p>Chelsea sebenarnya juga nyaris memimpin sejak babak pertama melalui aksi tendangan Willian. Tapi, dua kali tembakannya masih membetur tiang gawang Barcelona.</p>\r\n\r\n<p>Kedudukan 1-0 untuk keunggulan Chelsea itu pun hanya bertahan selama 13 menit sebelum bek tengah mereka Andreas Christensen gagal mengontrol bola. Gelandang kawakan Barcelona, Andres Iniesta, kemudian memberi umpan kepada Messi untuk membobol gawang Courtois.</p>\r\n\r\n<p>Pertandingan pertemuan kedua babak 16 besar Liga Champions ini akan berlangsung di Stadion Camp Nou, Rabu, 14 Maret 2018. Pemimpin La Liga Spanyol, Barcelona, menjadi favorit untuk melaju dalam babak knockout berkat gol mereka pada partai tandang.</p>\r\n\r\n<p>Lionel Messi dan kawan-kawan minimal hanya membutuhkan hasil 0-0 melawan Chelsea pada 14 Maret mendatang untuk maju ke babak 8 besar atau perempat final Liga Champions.</p>\r\n\r\n<p>Tapi, di sisi lain, hasil di Stamford Bridge ini menunjukkan sejauh ini belum ada klub dari Liga Inggris yang mengalami kekalahan dalam babak 16 besar Liga Champions 2018.</p>\r\n\r\n<p>Liverpool mengalahkan Porto 5-0, Manchester City menekuk Basel 4-0, Tottenham bermain imbang 2-2 di kandang Juventus. Adapun Manchester United akan bermain tandang di markas Sevilla pada Kamis dinihari nanti, 22 Februari.</p>\r\n\r\n<p>Pada laga&Acirc;&nbsp;Liga&Acirc;&nbsp;Champions&Acirc;&nbsp;lainnya dinihari tadi, juara bertahan Bundesliga Jerman, Bayern Munich, menggilas Besiktas 5-0 setelah pemain dari klub Liga Turki itu, Domagoj Vida, mendapat kartu merah pada menit ke-16.</p>\r\n', 11, '24 August, 2018', 'ADMIN', '510ad9612f9d2c056360b611f49eede1.JPG'),
(53, 'Dua Atlet Berlaga di Asian Games 2018, Pemkab Sukabumi Siapkan Hadiah Uang Tunai', 'dua-atlet-berlaga-di-asian-games-2018-pemkab-sukabumi-siapkan-hadiah-uang-tunai', '<p><strong>SUKABUMIUPDATE.com</strong>&nbsp;- Sebanyak dua atlet asal Kabupaten Sukabumi, Jawa barat ikut berlaga di ajang perhelatan pesta olahraga se-Asia, yakni Asian Games 2018.</p>\r\n\r\n<p>Kepala Seksi Olahraga Dinas Kebudayaan Kepemudaan dan Olahraga, Anita Mulyanti, mengatakan, dua atlet tersebut yakni Sri Ranti di cabang olahraga panahan, dan Ujang Hasbulloh, atlet dayung.</p>\r\n\r\n<p>&quot;Yang tercatat dan sudah jadi binaaan Koni Kabupaten Sukabumi dan Disbudpora hanya&nbsp; Sri Ranti. Atlet panahan asal Sukalarang,&quot;&nbsp; kata Anita kepada&nbsp;<strong><em>sukabumiupdate.com</em></strong>, Kamis (23/8/2018).</p>\r\n\r\n<p>Sementara Ujang Hasbulloh, kata Anita, pihaknya baru mengetahui dari pemberitaan. Dia adalah pemuda asal Surade yang aktif dalam cabang olahraga dayung, dan tercatat sebagai mahasiswa Universitas Pendidikan Indonesia (UPI) Bandung.</p>\r\n\r\n<p>Anita menambahkan, Pemkab Sukabumi siap memberikan apresiasi kepada dua atlet tersebut jika mampu meraih medali.&nbsp; Apresiasi diberikan dalam bentuk uang tunai.</p>\r\n\r\n<p>&quot;Ada apresiasi dari bupati,&nbsp; besar uangnya belum diputuskan. Yang pasti lebih dari jumlah saat Sri Ranti meraih medali emas di Sea Games Malaysia. Waktu itu Rp 50 juta,&quot; pungkasnya.</p>\r\n', 10, '24 August, 2018', 'ADMIN', 'ec8f2249f8adc1fbd97b0f01cc8889d4.jpg'),
(54, 'Hasil Lengkap Babak 16 Besar Sepak Bola Asian Games 2018', 'hasil-lengkap-babak-16-besar-sepak-bola-asian-games-2018', '<p><strong>KOMPAS.com</strong>&nbsp;- Pertandingan babak 16 besar cabang sepak bola putra Asian Games 2018 telah selesai digelar pada Kamis (23/8/2018) hingga Jumat (24/8/2018).</p>\r\n\r\n<p>Pada pertandingan Kamis, Suriah memastikan lolos ke babak 8 besar atau perempat final setelah berhasil mengalahkan Palestina dengan skor 1-0 di Stadion Patriot Candrabhaga.</p>\r\n\r\n<p>Pada babak 8 besar nanti, Suriah akan menghadapi Vietnam yang juga menyingkirkan Bahrain dengan skor tipis 1-0.Menyisihkan Hong Kong, Uzbekistan akan menghadapi Korea Selatan yang berhasil menyingkirkan Iran dengan skor 2-0.</p>\r\n\r\n<p>Pada laga Jumat, Arab Saudi menang atas China dengan skor tipis 4-3. Sedangkan Indonesia harus mengakui keunggulan Uni Emirat Arab pada babak adu penalti yang berakhir dengan skor 3-4.</p>\r\n\r\n<p>Sementara itu, Malaysia takluk 0-1 dari Jepang dan Korea Utara berhasil ungguli Bangladesh dengan skor akhir 1-3.</p>\r\n\r\n<p>Selanjutnya, babak 8 besar atau perempat final cabang sepak bola Asian Games 2018 akan digelar pada Senin (27/8/2018).</p>\r\n\r\n<p><strong>Kamis, 23 Agustus 2018</strong></p>\r\n\r\n<ul>\r\n	<li>Palestina 0-1 Suriah (Ahmad Ashkar 73&#39;)</li>\r\n	<li>Uzbekistan 3-0 Hong Kong (Ikromjon Alibaev 27&#39;, Javokhir Sidikov 60&#39;, Zabikhillo Urinboev 65&#39;)</li>\r\n	<li>Vietnam 1-0 Bahrain (Nguyen Cong Phuong 88&#39;)</li>\r\n	<li>Iran 0-2 Korea Selatan (Hwang Ui-jo 40&#39;, Lee Seung-woo 55&#39;)</li>\r\n</ul>\r\n\r\n<p><strong>Jumat, 24 Agustus 2018</strong></p>\r\n\r\n<ul>\r\n	<li>China 3-4 Arab Saudi (Yao Junsheng 80&#39;, Huang Zichang 88&#39;, Wei Shihao 90+5&#39; ; Haroune Moussa Camara 16&#39;, 33&#39;, 60&#39;, Saad Ali Alselouli 29&#39;)</li>\r\n	<li>Indonesia 2-2 Uni Emirat Arab (Alberto Goncalves 52&#39;, Stefano Lilipaly 90+5&#39;; Zayed Almeri 20&#39;(pen), 65&#39;(pen)) - Adu penalti 3-4</li>\r\n	<li>Malaysia 0-1 Jepang (Ayase Ueda 90&#39;)</li>\r\n	<li>Bangladesh1-3 Korea Utara (Md Saad Uddin 90+1&#39; ; Kim Yu Song 14&#39;, Han Yong Thae 38&#39;, Kang Kuk Chol 68&#39;)</li>\r\n</ul>\r\n', 11, '25 August, 2018', 'galeh', 'a8192ac7577ac976a20dd7b7825b18f1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `iklan`
--

CREATE TABLE `iklan` (
  `id` int(11) NOT NULL,
  `foto` varchar(2000) NOT NULL,
  `brand` varchar(40) NOT NULL,
  `link` varchar(50) NOT NULL,
  `ukuran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `iklan`
--

INSERT INTO `iklan` (`id`, `foto`, `brand`, `link`, `ukuran`) VALUES
(10, '6feb4170d890bae900c532f90dc195d5.jpg', 'tokopedia', 'https://sukabumi-blackhat.org', '300x250px'),
(11, 'b06fa378cbc2b0f0bba7cc1840a13b85.jpg', 'tokopedia', 'https://sukabumi-blackhat.org', '728x90px');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `slug_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `slug_kategori`) VALUES
(10, 'Asean game', 'asean-game'),
(11, 'Olahraga', 'olahraga'),
(13, 'masyarakat', 'masyarakat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `foto` varchar(2000) NOT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang`
--

CREATE TABLE `tentang` (
  `id` int(11) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `tentang` varchar(20000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tentang`
--

INSERT INTO `tentang` (`id`, `judul`, `tentang`) VALUES
(1, 'Tentang Kami?', '<p><strong>Domain.com&nbsp;&nbsp;</strong>Merupakan portal berita terdepan dan Terpercaya, menyajikan berita teraktual secara lugas dan gagas ,</p>\r\n\r\n<p>di bangun pada 20 agusutus 2018 dan mulai menyiarkan berita pada agustus 2018 ,</p>\r\n\r\n<p>Kami mempunyai misi menjado portal berita terpercaya yang dapat memberikan manfaat</p>\r\n\r\n<p>dan berkontribusi luas terhadap masyarakat</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `iklan`
--
ALTER TABLE `iklan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `iklan`
--
ALTER TABLE `iklan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
