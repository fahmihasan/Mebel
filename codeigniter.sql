--
-- Database: `codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `mebel`
--

CREATE TABLE `mebel` (
  `id` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `daerah` varchar(100) NOT NULL,
  `tarif` int(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mebel`
--

INSERT INTO `mebel` (`id`, `nama`, `daerah`, `tarif`, `jenis`, `foto`) VALUES
(4, 'kursi hitam', 'kedung', 1500, 'kursi', 'hitam_thumb.jpg'),
(5, 'kursi sofa', 'jepara', 2500, 'kursi', 'sofa_thumb.jpg'),
(6, 'lemari minimalis', 'petekeyan', 3000, 'almari', 'lemari_minimalis_thumb.jpg'),
(7, 'meja bundar', 'pecangaan', 1000, 'meja', 'Meja-makan-bundar_thumb.jpg'),
(8, 'kursi piramid', 'mlonggo', 3000, 'Kursi', 'Kursi-Jati-Minimalis-Laric3_thumb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak_akses` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `hak_akses`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(9, 'syarif', '8daa2f003d41f1ea865c1503b3d99d3d', 'user'),
(10, 'wildan', 'af6b3aa8c3fcd651674359f500814679', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mebel`
--
ALTER TABLE `mebel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mebel`
--
ALTER TABLE `mebel`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
