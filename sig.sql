-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Des 2020 pada 13.11
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `password`) VALUES
(1, 'imam@gmail.com', 'beeccdb438355c029a66dbec333fa1c8'),
(2, '123@on.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `nama_lokasi` varchar(100) NOT NULL,
  `koordinat` varchar(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `nama_lokasi`, `koordinat`, `alamat`) VALUES
(1, 'Panti Sosial Tresna Werdha Bud', '-6.2666025,106.7923056', 'Jl. Margaguna Raya No.1, RT.11/RW.1, Gandaria Sel., Kec. Cilandak, Kota Jakarta Selatan, Daerah Khus'),
(2, 'Sasana Tresna Werdha Ciracas', '-6.2688185,106.7797742', 'Jl. Masjid At-Taufiq No.40-70, RT.4/RW.11, Klp. Dua Wetan, Kec. Ciracas, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13730');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `deskripsi` longtext NOT NULL,
  `telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `nama`, `alamat`, `gambar`, `deskripsi`, `telepon`) VALUES
(42, 'Tadika Mesra', 'pemalang', '28153063_192585764670145_8268504582506676224_n.png', '<p>&nbsp;&nbsp; &nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi molestie tellus sit amet nisi aliquet, sed faucibus nibh viverra. Duis erat libero, vulputate vel diam vitae, aliquam rutrum leo. Donec laoreet pharetra vulputate. Cras et varius odio, ut eleifend arcu. Pellentesque quis magna nec ligula pellentesque blandit. Vestibulum eu tortor ac diam pretium lobortis. Phasellus ut sapien a massa scelerisque pretium ac in lacus. Etiam dolor sapien, interdum ac dolor eu, laoreet fermentum erat. Phasellus egestas urna ante, ut ornare tellus egestas sed.</p><p>&nbsp;&nbsp; &nbsp;Nullam consequat id justo non porttitor. Donec at ligula sem. Suspendisse ut lacinia nisi, sit amet commodo justo. Nulla dictum ultricies massa, vel pharetra turpis blandit vitae. Maecenas arcu nulla, imperdiet eget sapien maximus, aliquam ultricies dolor. Etiam tristique aliquet ultrices. Maecenas faucibus iaculis elit, vitae cursus nisi elementum id. Phasellus sit amet turpis fringilla, semper nunc vitae, suscipit nisl. Pellentesque augue metus, venenatis ac turpis eu, elementum convallis ligula. Suspendisse dictum, nibh in rutrum dignissim, urna tortor dapibus nisl, eget finibus mi nisi quis purus.</p><p>&nbsp;&nbsp; &nbsp;Nunc sed diam eget lectus euismod ornare non eget leo. Suspendisse commodo fringilla luctus. Donec vehicula purus urna, quis rhoncus augue mattis non. Integer enim lorem, aliquet sit amet dolor non, tristique vestibulum sapien. Integer ut nulla libero. Fusce eu mi eget velit maximus pellentesque quis eget est. Pellentesque ac scelerisque diam, vel congue metus. Quisque congue eleifend magna, eget suscipit arcu porttitor at. Vestibulum lacinia, enim eu egestas molestie, ligula sapien hendrerit nibh, a venenatis nisi nulla eget arcu. Duis justo sem, ornare ac consectetur in, tincidunt id elit. Nulla tempor metus vitae dolor lacinia eleifend.</p><p>&nbsp;&nbsp; &nbsp;Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam ac est vitae nisl tincidunt vestibulum. Pellentesque imperdiet dui risus, sit amet sagittis lorem blandit sed. Duis rhoncus libero est, ut suscipit felis lacinia sit amet. Cras quis elit sit amet odio euismod condimentum. Nullam faucibus lacus sapien. Nunc convallis est et malesuada luctus. Quisque iaculis tincidunt felis vitae pretium. Donec ut convallis arcu. Proin a lorem semper, rhoncus dolor id, lobortis risus. Mauris ac arcu id justo condimentum aliquam a quis purus. Donec pellentesque dapibus purus in posuere.</p><p>&nbsp;&nbsp; &nbsp;Cras sollicitudin pellentesque risus, eu varius nibh sollicitudin quis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris eget sapien vestibulum, varius enim interdum, commodo ipsum. Cras malesuada maximus sem vel sagittis. Suspendisse iaculis sem sed elit maximus blandit. Suspendisse eu augue augue. Aenean vestibulum eget dolor ut fringilla.</p>', '08123459211'),
(43, 'Test1', 'alamat 1', 'jen.png', '<ul><li>dsfsd</li><li>sdfsdf</li><li>dsafasdf</li><li>sdfsdf</li></ul>', '08623984234'),
(44, 'test 2', 'slajdfkj', 'pp.png', '<p>sdfsadfasdf</p>', '3435435'),
(45, 'Test', 'sdfsdf', 's.jpg', '<p>sdfasdd</p><p>&nbsp;</p><p>sdfsad</p>', '23423545'),
(46, 'panti 1', 'sini', 'EUBWKOVU8AIHo8-.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mollis ex et suscipit porta. Mauris purus diam, tempor vitae dictum quis, accumsan a justo. Phasellus ac diam eros. Maecenas mattis odio tincidunt convallis laoreet. Sed finibus nunc eu semper laoreet. Praesent ut cursus ex. Phasellus sed elit at felis vestibulum auctor. Nulla ut ornare ex.</p><p>Cras imperdiet vulputate volutpat. Maecenas cursus vel nibh ut tristique. Suspendisse sapien augue, ultricies sed massa ut, iaculis lobortis purus. Nunc venenatis vehicula est, sed aliquet lorem accumsan vel. Ut eu eleifend felis. Vestibulum vel ipsum lobortis, sagittis arcu id, accumsan mi. Vestibulum id aliquet nulla, eu molestie sem.</p><p>Praesent vehicula sapien a pretium bibendum. Fusce vel nibh ullamcorper, cursus leo eget, facilisis est. Aenean faucibus at sem sed placerat. Morbi posuere ultrices sapien nec vulputate. Maecenas dignissim augue eu consequat varius. Vestibulum nec placerat velit. Phasellus ornare finibus magna, eu viverra elit malesuada ut. Duis consequat dolor turpis, ac ultrices eros gravida ac. Vestibulum hendrerit laoreet mauris, vel aliquam nulla consequat a. Maecenas dapibus dignissim eleifend. Proin purus leo, iaculis vitae lorem eget, sollicitudin imperdiet sapien. Duis dignissim molestie vestibulum.</p><p>Nullam ac iaculis sem, non convallis odio. Sed ac pharetra urna. Phasellus viverra euismod velit eu ullamcorper. Nulla vel urna tincidunt, varius nulla porttitor, vestibulum turpis. Aliquam eu hendrerit leo. Nunc ultrices nisl sit amet est vehicula scelerisque. Praesent ac arcu sapien. Donec vulputate, nunc eget aliquam ornare, tellus nisi sollicitudin risus, ac luctus lorem mi nec ante. Etiam porttitor pretium libero a pretium. Phasellus iaculis facilisis tincidunt. Donec a tempor dolor, sed tincidunt arcu. In ornare consequat posuere. Curabitur sagittis tristique luctus. Ut condimentum iaculis lobortis. Duis ut metus molestie, mattis sapien eu, posuere ante.</p><p>Cras semper maximus dui nec dignissim. Nullam dictum nulla in arcu dapibus, in lobortis augue auctor. Suspendisse ut dignissim nisi. Praesent eget accumsan erat. Nulla varius rutrum eros, vel laoreet quam imperdiet ac. Aenean sit amet tempus dui. Cras vitae sapien ligula. Mauris ipsum sapien, mattis sit amet varius eget, eleifend non tellus. Donec in felis neque. Curabitur tempor ullamcorper condimentum. Phasellus quis tristique nisi, id egestas lacus. In gravida, orci sed hendrerit tempus, nunc est elementum erat, vitae congue ex purus id leo. Cras laoreet orci sit amet nulla aliquam, et tempus ex porttitor.</p>', '654645646');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE `saran` (
  `id_komen` int(8) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `saran`
--

INSERT INTO `saran` (`id_komen`, `nama`, `isi`, `email`) VALUES
(1, 'Farhan', 'Lokasi jauh', 'fa@msn.com'),
(2, 'Via Vallen', 'Membosankan', 'va@msn.com'),
(3, 'Dzikri Alif', 'Lo gue end xixix', 'dz@msn.com'),
(4, 'Dablo', 'hai sayang', 'db@msn.com'),
(5, 'Udin', 'lmao', 'ud@msn.com'),
(6, 'Kevin', 'sdfkjasdlkfjsalkdf', 'marchelino'),
(7, 'Kevin', 'skdjflaksdjflkas', 'kevinmarch'),
(8, 'Kevin', 'dfasdf', 'ssdf@dsfsd'),
(9, 'Kevin', 'sadfsadfasdfasdf', 'kevinmsdfd'),
(10, 'Kevin', 'sdfsadfsdf', 'marchelinokevin12@outlook.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_komen`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `saran`
--
ALTER TABLE `saran`
  MODIFY `id_komen` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
