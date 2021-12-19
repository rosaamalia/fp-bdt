# Final Project Basis Data Terdistribusi
## Deskripsi Aplikasi
Aplikasi untuk membuat undangan digital yang diambil dari referensi Invita.id. Proyek ini menggunakan aplikasi final project mata kuliah MPPL Kelompok B01.

Fitur yang disediakan:
- Melakukan login/signup akun pelanggan, mengedit informasi akun pelanggan
- Membuat transaksi undangan (Membuat undangan, melihat undangan, mengedit undangan)
- Menambahkan tamu di buku tamu
- Membuat review

Basis data yang digunakan:
- Replikasi MySQL untuk menyimpan data akun dan data pembayaran.
- MongoDB untuk menyimpan data order, data tamu dan review pelanggan.

## Arsitektur Aplikasi
![Arsitektur-Final Project](https://user-images.githubusercontent.com/68428942/146682641-b92c15ae-5163-4d0f-a968-fcafb070eb85.jpg)

## Daftar Server
| Nama Server | IP Public | IP Private |
| ------------| ----------| ---------- |
| mysql-1 | 34.238.235.30 | 10.0.0.96|
|mysql-2 | 3.82.224.11 | 10.0.0.224 |

## File Konfigurasi
- [mysqld.cnf (Mater)](https://github.com/rosaamalia/fp-bdt/blob/main/config/master.mysqld.cnf)
- [mysqld.cnf (Slave)](https://github.com/rosaamalia/fp-bdt/blob/main/config/slave.mysqld.conf)
- [Kode aplikasi website](https://github.com/rosaamalia/fp-bdt/tree/master)

## Dokumentasi
Link Youtube: https://youtu.be/TnZXuouQHxU

Link laporan : https://ossified-horse-15e.notion.site/Laporan-Final-Project-Basis-Data-Terdistribusi-d68bf1b5facf4b8987384a34ccbfd655
