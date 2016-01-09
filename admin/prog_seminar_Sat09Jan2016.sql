DROP TABLE IF EXISTS admin;

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `blokir` enum('Y','N') NOT NULL,
  `id_session` varchar(30) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `telp` (`telp`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO admin VALUES("Fuadalfarih","d0b0caa56fee5e734ca286516b5885dc","fuad alfarih","jalan sekeloa IV","fuad@gmail.com","082222221111","N","d0b0caa56fee5e734ca286516b5885");
INSERT INTO admin VALUES("Iqbal_gunawan","827ccb0eea8a706c4c34a16891f84e7b","Iqbal Gunawan","Jl.Cigadung Raya Timur Rt/rw 02/14 bandung","iqbalgunawan56@gmail.com","089676530568","N","827ccb0eea8a706c4c34a16891f84e");
INSERT INTO admin VALUES("zamzam","d0db05aabb991942a64e1b599ce379f9","Zamzam Nurzaman","Sekeloa","znurzamanz@gmail.com","085720760068","N","d0db05aabb991942a64e1b599ce379");



DROP TABLE IF EXISTS lokasi;

CREATE TABLE `lokasi` (
  `kode_lokasi` char(10) NOT NULL,
  `nama_lokasi` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `harga_sewa` int(11) NOT NULL,
  PRIMARY KEY (`kode_lokasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO lokasi VALUES("L01","Miracle Unikom","Jl. Dipati Ukur No. 112-114-116","0");
INSERT INTO lokasi VALUES("L02","sportorium universitas muhammadiyah yogyakarta","Jalan Lingkar Selatan, Kasihan, Bantul, Daerah Istimewa Yogyakarta 55183","0");
INSERT INTO lokasi VALUES("L03","Swiss-Belhotel Borneo","Jl. Munawarman no.6 Pelabuhan Samarinda, Kalimantan TImur","500000");
INSERT INTO lokasi VALUES("L04","Rumah Menteng","Jl. Subang 14, Jakarta","650000");
INSERT INTO lokasi VALUES("L05","Gedung Diagnotic Center RSUD","Jl. Prof Dr. Moestopo no.6-7, Jawa timur","0");
INSERT INTO lokasi VALUES("L06","Grha IAI Wilayah Jawa Timur","Jl. Ngapel 143 D Surabaya","550000");



DROP TABLE IF EXISTS mahasiswa;

CREATE TABLE `mahasiswa` (
  `nim` char(8) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jurusan` varchar(30) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nim`),
  UNIQUE KEY `telepon` (`telepon`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO mahasiswa VALUES("1001001","Udin","Teknik Industri","085240003000","wakaudin@gmail.com");
INSERT INTO mahasiswa VALUES("10103533","nurzaman","DKV","087720003000","nur@gmail.com");
INSERT INTO mahasiswa VALUES("10113501","komaludin","Teknik Informatika","082240000123","udin1@gmail.com");
INSERT INTO mahasiswa VALUES("10113502","sapirudin","Teknik Informatika","082240000444","udin2@gmail.com");
INSERT INTO mahasiswa VALUES("10113503","salahudin","Teknik Informatika","082240000555","udin3@gmail.com");
INSERT INTO mahasiswa VALUES("10113504","soparudin","Teknik Informatika","082240000111","udin4@gmail.com");
INSERT INTO mahasiswa VALUES("10113505","udin","Teknik Informatika","082240000423","udin5@gmail.com");
INSERT INTO mahasiswa VALUES("10113506","didin","Teknik Informatika","082240000871","udin6@gmail.com");
INSERT INTO mahasiswa VALUES("10113507","kamiludin","Teknik Informatika","082240000222","udin7@gmail.com");
INSERT INTO mahasiswa VALUES("10113508","soparudin","Teknik Informatika","082240000666","udin8@gmail.com");
INSERT INTO mahasiswa VALUES("10113509","jamaludin","Teknik Informatika","082240000777","udin9@gmail.com");
INSERT INTO mahasiswa VALUES("10113510","ontarudin","Teknik Informatika","082240000888","udin10@gmail.com");
INSERT INTO mahasiswa VALUES("10113528","Zamzam Nurzaman","Teknik Informatika","085720760068","znurzamanz@gmail.com");
INSERT INTO mahasiswa VALUES("10113536","azis mamang","taknik informatika","089677541001","azismamang@gmail.com");



DROP TABLE IF EXISTS narasumber;

CREATE TABLE `narasumber` (
  `kode_narasumber` char(8) NOT NULL,
  `nama_narasumber` varchar(50) DEFAULT NULL,
  `gelar` varchar(50) DEFAULT NULL,
  `alamat_narasumber` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `umur` int(11) DEFAULT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode_narasumber`),
  UNIQUE KEY `telepon` (`telepon`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO narasumber VALUES("N0001","nuraeni","Magister Teknik","Lemburtengah I","Dosen","30","Perempuan","081810000111","nur1@gmail.com");
INSERT INTO narasumber VALUES("N0002","nurahmah","Magister Desain","Lemburtengah II","Dosen","28","Perempuan","081810000222","nur2@gmail.com");
INSERT INTO narasumber VALUES("N0003","nurahman","Magister Komputer","Lemburtengah III","Dosen","31","Laki-laki","081810000333","nur3@gmail.com");
INSERT INTO narasumber VALUES("N0004","nurfata","Magister Teknik","Lemburtengah IV","Dosen","33","Perempuan","081810000444","nur4@gmail.com");
INSERT INTO narasumber VALUES("N0005","nurzaman","Magister Teknik","Lemburtengah V","Dosen","32","Laki-laki","081810000555","nur5@gmail.com");
INSERT INTO narasumber VALUES("N0006","nurdini","Magister Komputer","Lemburtengah VI","Dosen","33","Perempuan","081810000666","nur6@gmail.com");
INSERT INTO narasumber VALUES("N0007","nurfata","Magister Komputer","Lemburtengah VII","Dosen","35","Laki-laki","081810000777","nur7@gmail.com");
INSERT INTO narasumber VALUES("N0008","nurfitri","Magister Akuntansi","Lemburtengah VIII","Dosen","35","Perempuan","081810000888","nur8@gmail.com");
INSERT INTO narasumber VALUES("N0009","nur ramlan","Magister Hukum","Lemburtengah IX","Dosen","38","Laki-laki","081810000999","nur9@gmail.com");
INSERT INTO narasumber VALUES("N0010","nur wildan","Magister Psikologi","Lemburtengah X","Dosen","39","Laki-laki","081810000100","nur10@gmail.com");



DROP TABLE IF EXISTS narasumber_seminar;

CREATE TABLE `narasumber_seminar` (
  `kode_narasumber` char(8) NOT NULL,
  `kode_seminar` char(8) NOT NULL,
  KEY `kode_narasumber` (`kode_narasumber`),
  KEY `kode_seminar` (`kode_seminar`),
  CONSTRAINT `narasumber_seminar_ibfk_1` FOREIGN KEY (`kode_narasumber`) REFERENCES `narasumber` (`kode_narasumber`),
  CONSTRAINT `narasumber_seminar_ibfk_2` FOREIGN KEY (`kode_seminar`) REFERENCES `seminar` (`kode_seminar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO narasumber_seminar VALUES("N0003","S03");
INSERT INTO narasumber_seminar VALUES("N0001","S01");
INSERT INTO narasumber_seminar VALUES("N0003","S02");



DROP TABLE IF EXISTS pendaftaran;

CREATE TABLE `pendaftaran` (
  `no_daftar` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_daftar` datetime NOT NULL,
  `kode_seminar` char(8) NOT NULL,
  `nim` char(8) NOT NULL,
  PRIMARY KEY (`no_daftar`),
  KEY `kode_seminar` (`kode_seminar`),
  KEY `nim` (`nim`) USING BTREE,
  CONSTRAINT `pendaftaran_ibfk_1` FOREIGN KEY (`kode_seminar`) REFERENCES `seminar` (`kode_seminar`),
  CONSTRAINT `pendaftaran_ibfk_2` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

INSERT INTO pendaftaran VALUES("1","2016-01-01 02:07:32","S03","10113505");
INSERT INTO pendaftaran VALUES("3","2015-12-31 02:54:36","S03","10113501");
INSERT INTO pendaftaran VALUES("5","2015-12-31 02:55:01","S01","10113504");
INSERT INTO pendaftaran VALUES("6","2015-12-31 03:11:46","S04","10113507");
INSERT INTO pendaftaran VALUES("7","2016-01-01 02:08:45","S01","10113504");
INSERT INTO pendaftaran VALUES("8","2016-01-01 02:08:53","S01","10113505");
INSERT INTO pendaftaran VALUES("9","2016-01-01 02:09:01","S01","10113507");
INSERT INTO pendaftaran VALUES("10","2016-01-01 02:09:18","S01","10113504");
INSERT INTO pendaftaran VALUES("11","2016-01-01 02:09:35","S01","10113509");
INSERT INTO pendaftaran VALUES("13","2016-01-01 03:21:56","S03","10113528");
INSERT INTO pendaftaran VALUES("19","2016-01-01 09:58:07","S03","10103533");
INSERT INTO pendaftaran VALUES("20","2016-01-04 01:18:02","S02","10113528");
INSERT INTO pendaftaran VALUES("21","2016-01-04 01:25:31","S03","10113528");



DROP TABLE IF EXISTS seminar;

CREATE TABLE `seminar` (
  `kode_seminar` char(8) NOT NULL,
  `tema` char(50) DEFAULT NULL,
  `nama_seminar` varchar(100) DEFAULT NULL,
  `penyelenggara` varchar(50) DEFAULT NULL,
  `waktu` varchar(30) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `kode_lokasi` varchar(10) NOT NULL,
  `kapasitas` int(11) DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `fasilitas` varchar(100) NOT NULL,
  `banner` varchar(100) DEFAULT 'belum ada banner',
  PRIMARY KEY (`kode_seminar`),
  KEY `kode_lokasi` (`kode_lokasi`),
  CONSTRAINT `seminar_ibfk_1` FOREIGN KEY (`kode_lokasi`) REFERENCES `lokasi` (`kode_lokasi`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO seminar VALUES("S01","Kesehatan","Material Health in Primary Core","Universitas Muhammadiyah Yogyakarta","10:00 - 12:00","2016-01-16","L02","199","500000","Sertifikat, Konsumsi","mate.jpg");
INSERT INTO seminar VALUES("S02","Pendidikan","Basic Financial Accounting","Ikatan Akuntan Indonesia","14:00 - 16:00","2016-01-12","L06","0","0","Sertifikat","azzzz.jpg");
INSERT INTO seminar VALUES("S03","Kesehatan","Kesehatan Nasional","Indonesia Material Neonatal Care Training","12:00 - 14:00","2016-03-20","L05","293","120000","Seminar kit, Snack kit, Sertifikat","IMG-20151103-WA0001.jpg");
INSERT INTO seminar VALUES("S04","Pendidikan","ISPOR Indonesia Chapter","ISPOR","08:00 - 11:00","2016-01-12","L04","350","150000","Seminar Kit, Sertifikat","image362.jpg");
INSERT INTO seminar VALUES("S05","Pendidikan","Seminar Website","HMIF - UNIKOM","12:00 - 14:00","2016-01-21","L01","100","0","Sertifikat, Konsumsi","edit-banner-fb-china-samarinda-jan-2016.jpg");



DROP TABLE IF EXISTS sponsor;

CREATE TABLE `sponsor` (
  `kode_sponsor` char(8) NOT NULL,
  `nama_sponsor` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode_sponsor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO sponsor VALUES("SP001","Teh Botol Sosro");
INSERT INTO sponsor VALUES("SP002","Indosat");
INSERT INTO sponsor VALUES("SP003","Telkomsel");
INSERT INTO sponsor VALUES("SP004","Teh Gelas");
INSERT INTO sponsor VALUES("SP005","Coca-cola");
INSERT INTO sponsor VALUES("SP006","Ubuntu");
INSERT INTO sponsor VALUES("SP007","Dell");
INSERT INTO sponsor VALUES("SP008","Asus");
INSERT INTO sponsor VALUES("SP009","Samsung");
INSERT INTO sponsor VALUES("SP010","HP");



DROP TABLE IF EXISTS sponsor_seminar;

CREATE TABLE `sponsor_seminar` (
  `kode_sponsor` char(8) NOT NULL,
  `kode_seminar` char(8) NOT NULL,
  KEY `kode_sponsor` (`kode_sponsor`),
  KEY `kode_seminar` (`kode_seminar`),
  CONSTRAINT `sponsor_seminar_ibfk_1` FOREIGN KEY (`kode_sponsor`) REFERENCES `sponsor` (`kode_sponsor`),
  CONSTRAINT `sponsor_seminar_ibfk_2` FOREIGN KEY (`kode_seminar`) REFERENCES `seminar` (`kode_seminar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO sponsor_seminar VALUES("SP005","S02");
INSERT INTO sponsor_seminar VALUES("SP001","S01");
INSERT INTO sponsor_seminar VALUES("SP002","S01");
INSERT INTO sponsor_seminar VALUES("SP003","S01");



DROP TABLE IF EXISTS tamu;

CREATE TABLE `tamu` (
  `kode_tamu` char(8) NOT NULL,
  `nama_tamu` varchar(50) DEFAULT NULL,
  `gelar` varchar(50) DEFAULT NULL,
  `alamat_tamu` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `umur` int(11) DEFAULT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode_tamu`),
  UNIQUE KEY `telepon` (`telepon`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tamu VALUES("T0001","Asep Darmaji","Sarjana Desain","Sekeloa I","Dosen","30","Laki-laki","08572000111","Asep1@gmail.com");
INSERT INTO tamu VALUES("T0002","Asep Nurzaman","Magister Desain","Sekeloa II","Dosen","28","Laki-laki","08572000222","Asep2@gmail.com");
INSERT INTO tamu VALUES("T0003","Antonio Asep Sudrajat","Sarjana Komputer","Sekeloa III","Programmer","26","Laki-laki","08572000333","Asep3@gmail.com");
INSERT INTO tamu VALUES("T0004","Asep Agung Laksono","Sarjana Komputer","Sekeloa VI","Programmer","30","Laki-laki","08572000444","Asep4@gmail.com");
INSERT INTO tamu VALUES("T0005","Bahtiar Asep","Sarjana Komputer","Sekeloa VII","Analist","31","Laki-laki","08572000555","Asep5@gmail.com");
INSERT INTO tamu VALUES("T0006","Mira Asep","Sarjana Komputer","Sekeloa VIII","Programmer","35","Perempuan","08572000666","Asep6@gmail.com");
INSERT INTO tamu VALUES("T0007","Asep Amrullah","Magister Komputer","Sekeloa IX","Analist","40","Laki-laki","08572000777","Asep7@gmail.com");
INSERT INTO tamu VALUES("T0008","Puspita Asep","Magister Komputer","Sekeloa X","Developer","46","Perempuan","08572000888","Asep8@gmail.com");
INSERT INTO tamu VALUES("T0009","Asep Muntaza","Magister Komputer","Sekeloa XI","Developer","35","Laki-laki","08572000999","Asep9@gmail.com");
INSERT INTO tamu VALUES("T0010","Asep Alhaq","Doktor","Sekeloa XII","Developer","45","Laki-laki","08572000100","Asep10@gmail.com");
INSERT INTO tamu VALUES("T0011","Dadan sudandan","Doktor","Jl.Cigadung Raya Timur Rt/rw 02/14 bandung","Dosen","30","Laki-Laki","08080820","dadang_wakawak@gmail.com");



DROP TABLE IF EXISTS tamu_seminar;

CREATE TABLE `tamu_seminar` (
  `kode_tamu` char(8) NOT NULL,
  `kode_seminar` char(8) NOT NULL,
  KEY `kode_tamu` (`kode_tamu`),
  KEY `kode_seminar` (`kode_seminar`),
  CONSTRAINT `tamu_seminar_ibfk_1` FOREIGN KEY (`kode_tamu`) REFERENCES `tamu` (`kode_tamu`),
  CONSTRAINT `tamu_seminar_ibfk_2` FOREIGN KEY (`kode_seminar`) REFERENCES `seminar` (`kode_seminar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tamu_seminar VALUES("T0001","S02");
INSERT INTO tamu_seminar VALUES("T0004","S02");
INSERT INTO tamu_seminar VALUES("T0007","S02");
INSERT INTO tamu_seminar VALUES("T0008","S03");
INSERT INTO tamu_seminar VALUES("T0006","S04");



