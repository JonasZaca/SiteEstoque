CREATE DATABASE  IF NOT EXISTS `aula` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `aula`;
DROP TABLE IF EXISTS `tb_carro`;

-- Database: `aula`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_acesso`
--

CREATE TABLE `tb_acesso` (
  `id` int(11) NOT NULL,
  `email` varchar(254) NOT NULL,
  `senha` varchar(254) NOT NULL,
  `status` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_acesso`
--

INSERT INTO `tb_acesso` (`id`, `email`,`senha`, `status`) VALUES
(1, 'admin', '1234', 'Ativado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_carro`
--

CREATE TABLE `tb_carro` (
  `id_carro` int(11) NOT NULL,
  `marca` varchar(254) NOT NULL,
  `modelo` varchar(254) NOT NULL,
  `ano` int(11) NOT NULL,
  `placa` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_carro`
--

INSERT INTO `tb_carro` (`id_carro`, `marca`, `modelo`, `ano`, `placa`) VALUES
(4, 'ford', 'fieta', 1999, 'asd23423'),
(5, 'honda', 'fit', 2010, 'asdwewrwe'),
(6, 'toyota', 'etyos', 2019, 'asd23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_acesso`
--
ALTER TABLE `tb_acesso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_carro`
--
ALTER TABLE `tb_carro`
  ADD PRIMARY KEY (`id_carro`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_acesso`
--
ALTER TABLE `tb_acesso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_carro`
--
ALTER TABLE `tb_carro`
  MODIFY `id_carro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
