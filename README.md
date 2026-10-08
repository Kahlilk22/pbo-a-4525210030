PHP

DOSEN PENGAMPU : Adi Wahyu Pribadi, S.Si., M.Kom

 NAMA - NPM : KAHLIL AR'RUMI KAICIL PUTERA - 4525210030

TUGAS 1 PBO
- INI MERUPAKAN HASIL PRINTSCREEN OUTPUT, CONVERT JAVA KE PHP.

PRINTSCREEN SETIAP HASIL RUN :

 1. PHP 01
<img width="444" height="143" alt="Screenshot 2026-10-08 174526" src="https://github.com/user-attachments/assets/24c64801-e86f-4531-b150-3860c2e099cb" />

 Penjelasan:
- Class iPhone saya buat dengan dua atribut (property), yaitu $color untuk warna dan $storage untuk kapasitas penyimpanan.
- Pada PHP, constructor wajib bernama __construct, sedangkan di Java namanya harus identik dengan nama class. Constructor ini langsung berjalan ketika objek dibuat dengan new iPhone(...) dan bertugas menyimpan data awal ke property.
- Kata $this menunjuk ke objek yang sedang aktif, fungsinya sama persis dengan this pada Java.
- Method getColor() dan getStorage() berperan sebagai getter, yaitu mengambil dan mengembalikan isi property menggunakan return.
- Di file Main.php, saya membuat dua objek, $iphone13 dan $iphone14, yang berasal dari satu class yang sama. Proses membuat objek dari class ini dinamakan instantiation, dan masing-masing objek menyimpan datanya sendiri.
- Perbedaan penulisan dengan Java yang paling terlihat: nama variabel selalu diawali tanda $, pemanggilan method memakai panah -> bukan titik, dan penggabungan teks memakai titik . bukan tanda +.

 2. PHP 02
<img width="484" height="182" alt="image" src="https://github.com/user-attachments/assets/8dfa9a2b-fd4d-48cc-bb8f-be7e2deac1fe" />

 Penjelasan:
- Pada class Mahasiswa, atribut $nama, $nim, dan $umur dibuat private, sehingga dari luar class datanya hanya dapat dibaca atau diubah melalui getter dan setter. Konsep ini disebut encapsulation.
- Versi Java memiliki tiga constructor berbeda (overloading): tanpa parameter, dua parameter, dan tiga parameter. Karena PHP tidak menyediakan overloading, saya menggantinya dengan satu constructor saja yang parameternya diberi nilai bawaan (misalnya $nama = 'Belum Diisi'). Dengan cara ini constructor tetap bisa dipanggil dengan 0, 2, maupun 3 argumen.
- Ketika objek dibuat lewat new Mahasiswa() tanpa isian apa pun, nilai bawaan yang terpakai, yaitu "Belum Diisi" untuk teks dan 0 untuk umur.
- Sebaliknya, pemanggilan new Mahasiswa('Nenden Nuraini', '4523210144', 17) langsung mengisi seluruh data sejak objek dibentuk.
- Method tampilkanInfo() bertugas menampilkan keseluruhan data mahasiswa ke layar.
  
 3. PHP 03 APP
<img width="465" height="169" alt="image" src="https://github.com/user-attachments/assets/8eada5ca-cd27-4080-b1d8-6265dd832271" />

 3. PHP 03 MAIN
<img width="470" height="251" alt="image" src="https://github.com/user-attachments/assets/150ef42c-3827-4277-b454-dfb4f8820b3e" />

 Penjelasan:
- Inheritance adalah mekanisme ketika sebuah class (anak) mengambil atribut dan method milik class lain (induk). Di PHP hal ini dilakukan dengan kata kunci extends.
- Bagian bangun datar: class Lingkaran, Persegi, dan Segitiga semuanya turunan dari BangunDatar. Lingkaran dan Persegi menulis ulang (override) method luas() serta keliling() sesuai rumus bangunnya masing-masing.
- Berbeda dengan keduanya, Segitiga hanya menimpa luas(). Karena keliling() tidak ditimpa, pemanggilan keliling() pada objek segitiga akan menjalankan versi dari BangunDatar dan menampilkan teks "Menghitung keliling bangun datar".
- Bagian mahasiswa: MahasiswaInternational adalah turunan dari Mahasiswa dengan tambahan satu atribut baru, yakni $negaraAsal.
- Untuk menjalankan constructor milik induk, dipakai parent::__construct(...), padanan dari super(...) di Java. Begitu juga parent::tampilkanInfo() yang memanggil tampilan data dari induk terlebih dahulu, lalu dilengkapi dengan informasi negara asal.
- Sebab PHP tidak mengenal constructor overloading, constructor MahasiswaInternational memakai parameter bernilai bawaan dan memeriksa tipe parameter ketiga dengan is_int / is_string. Bila isinya angka, nilai itu dianggap umur (kasus 4 argumen); bila berupa teks, dianggap negara asal (kasus 3 argumen); dan bila tidak ada argumen sama sekali, semua memakai nilai bawaan (kasus 0 argumen).

 4. PHP 04
<img width="468" height="206" alt="image" src="https://github.com/user-attachments/assets/311f13af-e410-4e25-a309-b73bbc103d29" />

 Penjelasan:
- Polymorphism berarti nama method yang dipanggil sama, namun hasil yang keluar bisa berbeda mengikuti jenis objek yang memanggilnya.
- Smartphone dan FeaturePhone sama-sama berasal dari Handphone, lalu masing-masing menulis ulang method nyalakan(), matikan(), dan telepon() agar sesuai karakternya. Contohnya, smartphone menampilkan proses "booting" dan mendukung video call, sedangkan feature phone hanya melakukan panggilan suara.
- Pada Main.php, semua objek dikumpulkan dalam satu array bernama $daftarHandphone. Ketika array itu diulang dengan loop, perintah $hp->nyalakan() otomatis menjalankan versi yang sesuai, baik milik Smartphone maupun FeaturePhone.
- Operator instanceof berguna untuk mengetahui jenis objek sebelum memanggil method yang sifatnya khusus: aksesInternet() hanya dimiliki Smartphone, sementara mainGameSnake() hanya dimiliki FeaturePhone. PHP tidak memerlukan casting seperti yang harus dilakukan di Java.
- Atribut dengan akses protected dipilih supaya masih bisa dipakai oleh class turunan namun tetap tertutup dari luar.

 5. PHP 05
<img width="493" height="165" alt="image" src="https://github.com/user-attachments/assets/660bf4c0-cdaa-4e00-94ec-2fa86fd11c46" />

 Penjelasan:
- Asosiasi (Dokter dan Pasien) adalah bentuk hubungan yang paling renggang. Dokter sekadar menggunakan objek Pasien yang dikirim lewat parameter method merawat($pasien). Kedua objek tetap berdiri sendiri-sendiri.
- Agregasi (Tim dan Pemain) menggambarkan hubungan "memiliki". Objek Pemain dibuat terlebih dahulu di luar class, kemudian baru dimasukkan ke dalam Tim. Jika Tim dihapus, objek Pemain tidak ikut hilang.
- Komposisi (Buku dan Bab) merupakan hubungan "memiliki" yang paling erat. Objek Bab dibentuk di dalam constructor Buku, sehingga keberadaannya bergantung penuh pada Buku. Ketika unset($buku) dijalankan, seluruh bab ikut lenyap.
- Struktur List<Pemain> milik Java diganti dengan array biasa pada PHP.

 6. PHP 06
<img width="500" height="242" alt="image" src="https://github.com/user-attachments/assets/73a6e5d0-7f6e-4db5-aa9c-d2849f5bc58c" />

 Penjelasan:
- Abstract class Vehicle berfungsi sebagai rancangan dasar untuk semua kendaraan, dengan atribut $name dan method showInfo(). Class jenis ini tidak dapat dibuat objeknya secara langsung dengan new; ia hanya boleh dijadikan induk oleh class lain.
- Interface bisa dipahami sebagai perjanjian yang harus dipenuhi. Movable mewajibkan adanya method move(), dan Fuelable mewajibkan method refuel(). Setiap class yang memakai implements harus menuliskan isi dari method-method tersebut.
- Car dan Boat sama-sama mewarisi Vehicle sekaligus mengimplementasikan dua interface di atas. Khusus Boat, method refuel() ditulis dengan cara yang sesuai untuk kapal.
- Hal yang berbeda dari Java: interface pada PHP tidak dapat memuat default method. Sebagai penggantinya digunakan trait bernama FuelableDefault (berada dalam file Fuelable.php) yang menyediakan refuel() standar berisi "Mengisi bahan bakar umum.". Motor cukup menuliskan use FuelableDefault; untuk mendapatkan method tersebut tanpa menulisnya lagi.
- Building hanya mewarisi Vehicle tanpa mengimplementasikan interface apa pun, akibatnya ia hanya memiliki showInfo() dan tidak punya move() maupun refuel().
