<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Online</title>
    <link rel="stylesheet" href="peminjaman.css">
</head>
<body>
<div class="container">
        <form action="peminjaman.php" method="post">
        <h4>DAFTAR UNTUK DAPAT MELAKUKAN PEMINJAMAN</h4>
            <label for="nama">Username :</label>
            <input type="text" name="nama" required><br>

            <label for="namaLengkap">Nama Peminjam:</label>
            <input type="text" name="namaLengkap" required><br>

            <label for="kategori">Pilih:</label>
            <select name="kategori" id="kategori">
                <option value="Peminjaman">Peminjaman</option>
                <option value="Pengembalian">Pengembalian</option>
                <option value="Pembelian">Pembelian</option>
            </select>
            <br>
            <label for="buku">Pilih Buku:</label>
            <select name="buku" id="buku">
                <option value="Harry Potter">Harry Potter</option>
                <option value="Lord of the Rings">Lord of the Rings</option>
            </select>
            <br>
        <button type="submit">Proses</button>
        <button type="button" onclick="window.location.href='home.html'">Kembali</button>
    </form>
    </div>
    <div class="hasil">
        <?php
        class Buku {
            public $judul;
            public $pengarang;
            public $tersedia = true;

            public function __construct($judul, $pengarang) {
                $this->judul = $judul;
                $this->pengarang = $pengarang;
            }

            public function getInfo() {
                return "Judul: {$this->judul} <br> Pengarang: {$this->pengarang} <br> Tersedia: " . ($this->tersedia ? 'Ya' : 'Tidak');
            }

            public function dipinjam() {
                $this->tersedia = false;
            }

            public function dikembalikan() {
                $this->tersedia = true;
            }
        }

        class Peminjam {
            public $nama;

            public function __construct($nama) {
                $this->nama = $nama;
            }

            public function pinjamBuku(Buku $buku) {
                if ($buku->tersedia) {
                    $buku->dipinjam();
                    return "{$this->nama} telah meminjam buku '{$buku->judul}'.";
                } else {
                    return "Maaf, buku '{$buku->judul}' sedang tidak tersedia.";
                }
            }

            public function kembalikanBuku(Buku $buku) {
                $buku->dikembalikan();
                return "{$this->nama} telah mengembalikan buku '{$buku->judul}'.";
            }
        }

        // Membuat objek buku
        $buku1 = new Buku("Harry Potter", "J.K. Rowling");
        $buku2 = new Buku("Lord of the Rings", "J.R.R. Tolkien");
        ?>
        <table>
            <tr>
                <td>
                <?php
                   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $namaPeminjam = $_POST['nama'];
                    $judulBuku = $_POST['buku'];
                    $kategori = $_POST['kategori']; // Menambahkan kategori untuk menentukan peminjaman atau pengembalian
                
                    // Membuat objek peminjam
                    $peminjam = new Peminjam($namaPeminjam);
                
                    // Mencari objek buku berdasarkan judul
                    $bukuYangDipinjam = null;
                    if ($buku1->judul === $judulBuku) {
                        $bukuYangDipinjam = $buku1;
                    } elseif ($buku2->judul === $judulBuku) {
                        $bukuYangDipinjam = $buku2;
                    }
                
                    // Melakukan peminjaman atau pengembalian buku
                    if ($bukuYangDipinjam !== null) {
                        if ($kategori === 'Peminjaman') {
                            echo "<p>" . $peminjam->pinjamBuku($bukuYangDipinjam) . "</p>";
                        } elseif ($kategori === 'Pengembalian') {
                            echo "<p>" . $peminjam->kembalikanBuku($bukuYangDipinjam) . "</p>";
                        }
                    } else {
                        echo "<p>Buku tidak ditemukan.</p>";
                    }
                }
                ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php 
                        // Menampilkan informasi buku setelah peminjaman/pengembalian
                        echo "<center><h3>Informasi Buku :</h3></center>";
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php 
                     echo "<p>" . $buku1->getInfo() . "</p>";
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                     echo "<p>" . $buku2->getInfo() . "</p>";
                    ?>
                </td>
            </tr>
        </table>
    </div>
    <script>
        function pinjamBuku() {
        var nama = document.getElementById("nama-peminjam").value;
        var kategori = document.getElementById("kategori-buku").value;

        // Validasi data
        if (nama == "" || kategori == "") {
          alert("Mohon lengkapi data peminjaman!");
          return;
        } 
    }
</script>
</body>
</html>