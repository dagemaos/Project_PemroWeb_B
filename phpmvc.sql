-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2021 pada 16.26
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `nama`, `username`, `password`) VALUES
(1, 'andrianramilia', 'andrian', '12345'),
(2, 'Ivanri', 'ivan123', '123'),
(8, 'Andrian Ramilia Pamu', 'Andrianrp', '1234567'),
(10, 'Andrian', 'andrian', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `issues`
--

CREATE TABLE `issues` (
  `id_issues` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `paragraf1` text NOT NULL,
  `paragraf2` text NOT NULL,
  `paragraf3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `issues`
--

INSERT INTO `issues` (`id_issues`, `judul`, `gambar`, `paragraf1`, `paragraf2`, `paragraf3`) VALUES
(1, 'GIRLS\' EDUCATION', 'EducateGirls.jpg', 'School is a space in which girls exercise their agency, make their voice heard, and access their first leadership opportunities.\r\n\r\nBeing out of school doesn’t just have devastating consequences for girls’ life opportunities – it places them at risk of teen pregnancy, child marriage, female genital mutilation and other forms of gender-based violence.\r\n \r\nEducation is critical in tackling harmful gender norms, and empowering girls to drive change. It gives girls the skills to become leaders, innovators and change makers, and to tackle future crises.\r\n \r\nGirls’ education also advances climate justice – every additional year of schooling for girls leads to significant improvements in a country’s resilience to climate-related disasters.', 'The world is at critical cross-roads, with the COVID-19 pandemic laying bare gross inequalities in our society and the climate emergency set to exacerbate these long into the future. \r\n\r\nLockdowns and school closures have hit girls’ education particularly hard and threaten to roll back years of progress. \r\n\r\nAfter the unprecedented disruption to girls’ schooling caused by COVID-19, we won’t stand by and watch girls fall even further behind.', 'Unless world leaders step up and invest adequately in education, there is a risk that the climate emergency will lead to millions more girls missing out on school in the coming years.\r\n\r\nIncreased investment in education and girls’ leadership will play an essential role in ensuring girls and young women are able to demand their rights, hold decision makers to account, and challenge the status quo, including the systems and norms which reinforce gender and climate injustice around the world.\r\n\r\nWe are supporting young activists who are calling for increased funding for girls\' education.'),
(2, 'INCLUSIVE EDUCATION FOR CHILDREN WITH DISABILITIES', 'disabilities.jpg', 'Children with disabilities are 10 times less likely to attend school than those without. Even if they attend school, they are more likely to drop out early while the level of schooling they receive is frequently below that of their peers.\r\n\r\nChildren with disabilities are often unable to go to school because of unsuitable school buildings. In addition, there is a limited understanding within their communities and among teachers about their learning needs, which is often fuelled by prejudices around disability.', 'Girls with disabilities experience greater exclusion and injustices as a result of their disability and gender.\r\n\r\nThey are less likely to go to school and are often considered a burden on the family because they are seen as a non-productive member of society.\r\n\r\nProviding these girls with an education that meets their needs can play a fundamental role in addressing the root causes of the discrimination they face.\r\n\r\nTot, 18, from Cambodia was born with one arm. With support from Plan International she was able to stay in school. Now she teaches English to younger children in her community and hopes to go to university. “I love teaching English,” she says. “I’m much more confident.”', 'Plan International is committed to ensuring that every child completes a quality, inclusive education without discrimination or exclusion.\r\n\r\nIn the last 5 years, our inclusive education programme has supported children with disabilities in 40 countries. We help children with disabilities access primary and secondary schools that meet their needs. We also provide specialised physiotherapy and rehabilitation, and skills training to help children get good jobs or create their own businesses.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`id_issues`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `issues`
--
ALTER TABLE `issues`
  MODIFY `id_issues` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
