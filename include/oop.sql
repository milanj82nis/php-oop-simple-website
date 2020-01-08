-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2020 at 03:29 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(211) NOT NULL,
  `slug` varchar(211) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(211) NOT NULL,
  `excerpt` text NOT NULL,
  `featured_image` varchar(211) NOT NULL,
  `body` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `excerpt`, `featured_image`, `body`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Quid ad utilitatem tantae pecuniae?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam ob rem tandem, inquit, non satisfacit? Duo Reges: constructio interrete. Si longus, levis; Obsecro, inquit, Torquate, haec dicit Epicurus? Si longus, levis; Qualem igitur hominem natura inchoavit?', 'http://ideviate.org/wp-content/uploads/2012/03/Holy-Cow-150x150.jpg', '<h1>Quid ad utilitatem tantae pecuniae?</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam ob rem tandem, inquit, non satisfacit? Duo Reges: constructio interrete. Si longus, levis; Obsecro, inquit, Torquate, haec dicit Epicurus? Si longus, levis; Qualem igitur hominem natura inchoavit? </p>\r\n\r\n<ol>\r\n	<li>De malis autem et bonis ab iis animalibus, quae nondum depravata sint, ait optime iudicari.</li>\r\n	<li>Quo invento omnis ab eo quasi capite de summo bono et malo disputatio ducitur.</li>\r\n	<li>Nihil opus est exemplis hoc facere longius.</li>\r\n	<li>Callipho ad virtutem nihil adiunxit nisi voluptatem, Diodorus vacuitatem doloris.</li>\r\n</ol>\r\n\r\n\r\n<dl>\r\n	<dt><dfn>Sed fortuna fortis;</dfn></dt>\r\n	<dd>Terram, mihi crede, ea lanx et maria deprimet.</dd>\r\n	<dt><dfn>Num quid tale Democritus?</dfn></dt>\r\n	<dd>Nulla erit controversia.</dd>\r\n	<dt><dfn>Stoicos roga.</dfn></dt>\r\n	<dd>Hoc est non modo cor non habere, sed ne palatum quidem.</dd>\r\n</dl>\r\n\r\n\r\n<p>Sed haec in pueris; Sumenda potius quam expetenda. <i>Cum praesertim illa perdiscere ludus esset.</i> Ad eos igitur converte te, quaeso. Proclivi currit oratio. </p>\r\n\r\n<pre>Vide, ne etiam menses! nisi forte eum dicis, qui, simul\r\natque arripuit, interficit.\r\n\r\nSerpere anguiculos, nare anaticulas, evolare merulas,\r\ncornibus uti videmus boves, nepas aculeis.\r\n</pre>\r\n\r\n\r\n<p><a href=\"http://loripsum.net/\" target=\"_blank\">Dicimus aliquem hilare vivere;</a> Quid de Pythagora? </p>\r\n\r\n<p><a href=\"http://loripsum.net/\" target=\"_blank\">Compensabatur, inquit, cum summis doloribus laetitia.</a> <b>Urgent tamen et nihil remittunt.</b> Si longus, levis. <i>Quae diligentissime contra Aristonem dicuntur a Chryippo.</i> Idem iste, inquam, de voluptate quid sentit? </p>\r\n\r\n<blockquote cite=\"http://loripsum.net\">\r\n	Quid interest, nisi quod ego res notas notis verbis appello, illi nomina nova quaerunt, quibus idem dicant?\r\n</blockquote>\r\n\r\n\r\n<ul>\r\n	<li>Equidem soleo etiam quod uno Graeci, si aliter non possum, idem pluribus verbis exponere.</li>\r\n	<li>Cuius quidem, quoniam Stoicus fuit, sententia condemnata mihi videtur esse inanitas ista verborum.</li>\r\n	<li>Maximeque eos videre possumus res gestas audire et legere velle, qui a spe gerendi absunt confecti senectute.</li>\r\n</ul>\r\n\r\n\r\n', 1, 1, '2020-01-01 00:06:00', '2020-01-01 02:00:00'),
(2, 'Quid ad utilitatem tantae pecuniae?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam ob rem tandem, inquit, non satisfacit? Duo Reges: constructio interrete. Si longus, levis; Obsecro, inquit, Torquate, haec dicit Epicurus? Si longus, levis; Qualem igitur hominem natura inchoavit?', 'http://ideviate.org/wp-content/uploads/2012/03/Holy-Cow-150x150.jpg', '<h1>Quid ad utilitatem tantae pecuniae?</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam ob rem tandem, inquit, non satisfacit? Duo Reges: constructio interrete. Si longus, levis; Obsecro, inquit, Torquate, haec dicit Epicurus? Si longus, levis; Qualem igitur hominem natura inchoavit? </p>\r\n\r\n<ol>\r\n	<li>De malis autem et bonis ab iis animalibus, quae nondum depravata sint, ait optime iudicari.</li>\r\n	<li>Quo invento omnis ab eo quasi capite de summo bono et malo disputatio ducitur.</li>\r\n	<li>Nihil opus est exemplis hoc facere longius.</li>\r\n	<li>Callipho ad virtutem nihil adiunxit nisi voluptatem, Diodorus vacuitatem doloris.</li>\r\n</ol>\r\n\r\n\r\n<dl>\r\n	<dt><dfn>Sed fortuna fortis;</dfn></dt>\r\n	<dd>Terram, mihi crede, ea lanx et maria deprimet.</dd>\r\n	<dt><dfn>Num quid tale Democritus?</dfn></dt>\r\n	<dd>Nulla erit controversia.</dd>\r\n	<dt><dfn>Stoicos roga.</dfn></dt>\r\n	<dd>Hoc est non modo cor non habere, sed ne palatum quidem.</dd>\r\n</dl>\r\n\r\n\r\n<p>Sed haec in pueris; Sumenda potius quam expetenda. <i>Cum praesertim illa perdiscere ludus esset.</i> Ad eos igitur converte te, quaeso. Proclivi currit oratio. </p>\r\n\r\n<pre>Vide, ne etiam menses! nisi forte eum dicis, qui, simul\r\natque arripuit, interficit.\r\n\r\nSerpere anguiculos, nare anaticulas, evolare merulas,\r\ncornibus uti videmus boves, nepas aculeis.\r\n</pre>\r\n\r\n\r\n<p><a href=\"http://loripsum.net/\" target=\"_blank\">Dicimus aliquem hilare vivere;</a> Quid de Pythagora? </p>\r\n\r\n<p><a href=\"http://loripsum.net/\" target=\"_blank\">Compensabatur, inquit, cum summis doloribus laetitia.</a> <b>Urgent tamen et nihil remittunt.</b> Si longus, levis. <i>Quae diligentissime contra Aristonem dicuntur a Chryippo.</i> Idem iste, inquam, de voluptate quid sentit? </p>\r\n\r\n<blockquote cite=\"http://loripsum.net\">\r\n	Quid interest, nisi quod ego res notas notis verbis appello, illi nomina nova quaerunt, quibus idem dicant?\r\n</blockquote>\r\n\r\n\r\n<ul>\r\n	<li>Equidem soleo etiam quod uno Graeci, si aliter non possum, idem pluribus verbis exponere.</li>\r\n	<li>Cuius quidem, quoniam Stoicus fuit, sententia condemnata mihi videtur esse inanitas ista verborum.</li>\r\n	<li>Maximeque eos videre possumus res gestas audire et legere velle, qui a spe gerendi absunt confecti senectute.</li>\r\n</ul>\r\n\r\n\r\n', 1, 1, '2020-01-01 00:06:00', '2020-01-01 02:00:00'),
(3, 'Quid ad utilitatem tantae pecuniae?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam ob rem tandem, inquit, non satisfacit? Duo Reges: constructio interrete. Si longus, levis; Obsecro, inquit, Torquate, haec dicit Epicurus? Si longus, levis; Qualem igitur hominem natura inchoavit?', 'http://ideviate.org/wp-content/uploads/2012/03/Holy-Cow-150x150.jpg', '<h1>Quid ad utilitatem tantae pecuniae?</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam ob rem tandem, inquit, non satisfacit? Duo Reges: constructio interrete. Si longus, levis; Obsecro, inquit, Torquate, haec dicit Epicurus? Si longus, levis; Qualem igitur hominem natura inchoavit? </p>\r\n\r\n<ol>\r\n	<li>De malis autem et bonis ab iis animalibus, quae nondum depravata sint, ait optime iudicari.</li>\r\n	<li>Quo invento omnis ab eo quasi capite de summo bono et malo disputatio ducitur.</li>\r\n	<li>Nihil opus est exemplis hoc facere longius.</li>\r\n	<li>Callipho ad virtutem nihil adiunxit nisi voluptatem, Diodorus vacuitatem doloris.</li>\r\n</ol>\r\n\r\n\r\n<dl>\r\n	<dt><dfn>Sed fortuna fortis;</dfn></dt>\r\n	<dd>Terram, mihi crede, ea lanx et maria deprimet.</dd>\r\n	<dt><dfn>Num quid tale Democritus?</dfn></dt>\r\n	<dd>Nulla erit controversia.</dd>\r\n	<dt><dfn>Stoicos roga.</dfn></dt>\r\n	<dd>Hoc est non modo cor non habere, sed ne palatum quidem.</dd>\r\n</dl>\r\n\r\n\r\n<p>Sed haec in pueris; Sumenda potius quam expetenda. <i>Cum praesertim illa perdiscere ludus esset.</i> Ad eos igitur converte te, quaeso. Proclivi currit oratio. </p>\r\n\r\n<pre>Vide, ne etiam menses! nisi forte eum dicis, qui, simul\r\natque arripuit, interficit.\r\n\r\nSerpere anguiculos, nare anaticulas, evolare merulas,\r\ncornibus uti videmus boves, nepas aculeis.\r\n</pre>\r\n\r\n\r\n<p><a href=\"http://loripsum.net/\" target=\"_blank\">Dicimus aliquem hilare vivere;</a> Quid de Pythagora? </p>\r\n\r\n<p><a href=\"http://loripsum.net/\" target=\"_blank\">Compensabatur, inquit, cum summis doloribus laetitia.</a> <b>Urgent tamen et nihil remittunt.</b> Si longus, levis. <i>Quae diligentissime contra Aristonem dicuntur a Chryippo.</i> Idem iste, inquam, de voluptate quid sentit? </p>\r\n\r\n<blockquote cite=\"http://loripsum.net\">\r\n	Quid interest, nisi quod ego res notas notis verbis appello, illi nomina nova quaerunt, quibus idem dicant?\r\n</blockquote>\r\n\r\n\r\n<ul>\r\n	<li>Equidem soleo etiam quod uno Graeci, si aliter non possum, idem pluribus verbis exponere.</li>\r\n	<li>Cuius quidem, quoniam Stoicus fuit, sententia condemnata mihi videtur esse inanitas ista verborum.</li>\r\n	<li>Maximeque eos videre possumus res gestas audire et legere velle, qui a spe gerendi absunt confecti senectute.</li>\r\n</ul>\r\n\r\n\r\n', 1, 1, '2020-01-01 00:06:00', '2020-01-01 02:00:00'),
(4, 'Quid ad utilitatem tantae pecuniae?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam ob rem tandem, inquit, non satisfacit? Duo Reges: constructio interrete. Si longus, levis; Obsecro, inquit, Torquate, haec dicit Epicurus? Si longus, levis; Qualem igitur hominem natura inchoavit?', 'http://ideviate.org/wp-content/uploads/2012/03/Holy-Cow-150x150.jpg', '<h1>Quid ad utilitatem tantae pecuniae?</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam ob rem tandem, inquit, non satisfacit? Duo Reges: constructio interrete. Si longus, levis; Obsecro, inquit, Torquate, haec dicit Epicurus? Si longus, levis; Qualem igitur hominem natura inchoavit? </p>\r\n\r\n<ol>\r\n	<li>De malis autem et bonis ab iis animalibus, quae nondum depravata sint, ait optime iudicari.</li>\r\n	<li>Quo invento omnis ab eo quasi capite de summo bono et malo disputatio ducitur.</li>\r\n	<li>Nihil opus est exemplis hoc facere longius.</li>\r\n	<li>Callipho ad virtutem nihil adiunxit nisi voluptatem, Diodorus vacuitatem doloris.</li>\r\n</ol>\r\n\r\n\r\n<dl>\r\n	<dt><dfn>Sed fortuna fortis;</dfn></dt>\r\n	<dd>Terram, mihi crede, ea lanx et maria deprimet.</dd>\r\n	<dt><dfn>Num quid tale Democritus?</dfn></dt>\r\n	<dd>Nulla erit controversia.</dd>\r\n	<dt><dfn>Stoicos roga.</dfn></dt>\r\n	<dd>Hoc est non modo cor non habere, sed ne palatum quidem.</dd>\r\n</dl>\r\n\r\n\r\n<p>Sed haec in pueris; Sumenda potius quam expetenda. <i>Cum praesertim illa perdiscere ludus esset.</i> Ad eos igitur converte te, quaeso. Proclivi currit oratio. </p>\r\n\r\n<pre>Vide, ne etiam menses! nisi forte eum dicis, qui, simul\r\natque arripuit, interficit.\r\n\r\nSerpere anguiculos, nare anaticulas, evolare merulas,\r\ncornibus uti videmus boves, nepas aculeis.\r\n</pre>\r\n\r\n\r\n<p><a href=\"http://loripsum.net/\" target=\"_blank\">Dicimus aliquem hilare vivere;</a> Quid de Pythagora? </p>\r\n\r\n<p><a href=\"http://loripsum.net/\" target=\"_blank\">Compensabatur, inquit, cum summis doloribus laetitia.</a> <b>Urgent tamen et nihil remittunt.</b> Si longus, levis. <i>Quae diligentissime contra Aristonem dicuntur a Chryippo.</i> Idem iste, inquam, de voluptate quid sentit? </p>\r\n\r\n<blockquote cite=\"http://loripsum.net\">\r\n	Quid interest, nisi quod ego res notas notis verbis appello, illi nomina nova quaerunt, quibus idem dicant?\r\n</blockquote>\r\n\r\n\r\n<ul>\r\n	<li>Equidem soleo etiam quod uno Graeci, si aliter non possum, idem pluribus verbis exponere.</li>\r\n	<li>Cuius quidem, quoniam Stoicus fuit, sententia condemnata mihi videtur esse inanitas ista verborum.</li>\r\n	<li>Maximeque eos videre possumus res gestas audire et legere velle, qui a spe gerendi absunt confecti senectute.</li>\r\n</ul>\r\n\r\n\r\n', 1, 1, '2020-01-01 00:06:00', '2020-01-01 02:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(211) NOT NULL,
  `id` int(11) NOT NULL,
  `email` varchar(211) NOT NULL,
  `password` varchar(211) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
