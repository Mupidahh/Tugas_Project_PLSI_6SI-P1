CREATE DATABASE perpustakaan ;
USE perpustakaan

CREATE TABLE akun(
id_anggota VARCHAR(10) PRIMARY KEY,
PASSWORD VARCHAR(100)
);

CREATE TABLE pendaftaran (
id_anggota VARCHAR(10) PRIMARY KEY,
waktu_pendaftaran DATE NOT NULL
);

CREATE TABLE prodi (
kd_prodi VARCHAR(10) PRIMARY KEY,
nama_prodi VARCHAR(50) NOT NULL
);

INSERT INTO prodi VALUES ("050","Sistem Informasi")
INSERT INTO prodi VALUES ("040","Sistem Komputer");
INSERT INTO prodi VALUES ("030","Teknik Informatika")

SELECT * FROM prodi

CREATE TABLE detail_akun (
id_anggota VARCHAR(10) PRIMARY KEY,
kd_prodi VARCHAR(10),
nama VARCHAR(100) NOT NULL,
tempat_lahir VARCHAR(100)NOT NULL, 
tanggal_lahir DATE NOT NULL,
status_mahasiswa VARCHAR(50) NOT NULL,
alamat VARCHAR(200) NOT NULL,
no_telp VARCHAR(15) NOT NULL,
photo VARCHAR(50) NOT NULL,
FOREIGN KEY (kd_prodi) REFERENCES prodi(kd_prodi) ON UPDATE CASCADE
)