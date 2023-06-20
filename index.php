<?php
session_start();


    if ( !isset($_SESSION["login"])) {
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sushi no ken</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap');
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body style="
    height: 100vh;
    background-image: url('img/bg-sushi.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    ">

<!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg animate__animated animate__fadeInDown">
        <div class="container-fluid">
            <a class="navbar-brand position-absolute top-50 start-0 translate-middle-y" style="font-size: 30px; font-family: 'Cherry Bomb One', cursive; color: rgb(230, 230, 230);">Selamat datang <?= $_SESSION["username"] ?></a>

            <div class="navbar-collapse " id="navbarSupportedContent">
                <p><a href="logout.php" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover position-relative position-absolute top-50 end-0 translate-middle" style="font-size: 20px; text-decoration: none;">Log Out</a></p>
            </div>

        </div>
    </nav>
<!-- NAVBAR END -->

<div class="" style="
            height: 85vh; 
            text-align: center; 
            margin-top: 40px;
            ">
    <img src="img/ss-no-ken.png" alt="" style=" width: 25rem; "
                                              class="  animate__animated animate__fadeIn animate__slower">
    <img src="img/lulu-jkt48.png" alt="" style=" width: 28rem; border-radius: 30px;"
                                            class="    animate__animated animate__fadeInUp">
</div>

<!-- font-family: 'Ubuntu', sans-serif; -->

<br><br><br><br><br><br>
<div class="susi" style=" width: 75%; margin: 0 auto; text-align: center;">

<h1 style="font-size: 48px; font-family: 'Cherry Bomb One', cursive;" data-aos="fade-up">Apa itu sushi?</h1>
    <p style="font-size: 20px; font-family: 'Ubuntu', sans-serif" data-aos="fade-up">Susyi (Jepang: 鮨, 鮓, 寿司, すし; Romaji: sushi) adalah makanan Jepang yang terdiri dari nasi yang dibentuk bersama lauk (neta) berupa 
    makanan laut, daging, sayuran mentah atau sudah dimasak. Nasi susyi mempunyai rasa masam yang lembut karena dibumbui campuran cuka beras, garam, dan gula.</p>

<br><br>

<h1 style="font-size: 48px; font-family: 'Cherry Bomb One', cursive;" data-aos="fade-up">Asal usul kata sushi</h1>
    <p style="font-size: 20px; font-family: 'Ubuntu', sans-serif" data-aos="fade-up">Asal usul kata sushi (susyi) adalah kata sifat untuk rasa masam yang ditulis dengan huruf kanji sushi (酸し). Pada awalnya, sushi yang ditulis dengan huruf kanji 鮓 
    merupakan istilah untuk salah satu jenis pengawetan ikan disebut gyoshō (魚醤) yang membaluri ikan dengan garam dapur, bubuk ragi (麹, koji) atau ampas sake (糟, kasu). Penulisan sushi menggunakan huruf kanji 寿司 yang dimulai 
    pada zaman Edo periode pertengahan merupakan cara penulisan ateji (menulis dengan huruf kanji lain yang berbunyi yang sama).</p>

<br><br>

<h1 style="font-size: 48px; font-family: 'Cherry Bomb One', cursive;" data-aos="fade-up">Sejarah</h1>
    <p style="font-size: 20px; font-family: 'Ubuntu', sans-serif" data-aos="fade-up">Konon kebiasaan mengawetkan ikan dengan menggunakan beras dan cuka berasal dari daerah pegunungan di Asia Tenggara.
    Istilah sushi berasal dari bentuk tata bahasa kuno yang tidak lagi dipergunakan dalam konteks lain; secara harfiah, "sushi" berarti "itu (berasa) masam" <a href="sejarah.php">Baca Selengkapnya</a></p>

<br><br>

    <p style="font-size: 20px; font-family: 'Ubuntu', sans-serif" data-aos="fade-up">

    <section class="portfolio" id="portfolio"  style="font-size: 48px; font-family: 'Cherry Bomb One', cursive;">

<div class="box-container" style="text-align: center;">

    <h1 class="heading" data-aos="fade-up"> <span>Macam-macam sushi</span> </h1><br>

   <div class="box" data-aos="zoom-in">
      <h3>norimaki-sushi</h3>
      <img src="img/norimaki-sushi.jpg" alt="" style="width: 300px;"><br>
      <p style="font-size: 20px; font-family: 'Ubuntu', sans-serif" data-aos="fade-up">Maki sushi adalah jenis sushi yang sering kita jumpai di Indonesia, biasanya disebut juga dengan norimaki. 
            Ciri khas norimaki, yaitu bentuknya bundar diisi dengan aneka lauk, seperti irisan timun, salmon, daging sapi, telur, seafood, sayuran, buah alpukat, dan lainnya. 
            Semua lauknya dibalut nasi yang telah dibumbui dengan cuka beras, kemudian pada bagian paling luarnya dibungkus nori atau rumput laut kering khas Jepang.</p>

            
   </div>
<br>
   <div class="box" data-aos="zoom-in">
      <h3>nigiri</h3>
      <img src="img/nigiri.jpg" alt="" style="width: 300px;"><br>
      <p style="font-size: 20px; font-family: 'Ubuntu', sans-serif" data-aos="fade-up">Kebanyakan sushi yang kita ketahui, biasanya dibungkus dengan rumput laut atau nori dan isian lauknya berada 
            di tengah-tengah gulungan, namun berbeda dengan nigiri. Nigiri sushi adalah olahan sushi yang dihidangkan dalam bentuk nasi kepal kecil dan lonjong, lalu diberi aneka makanan laut 
            (seafood) mentah yang masih segar sebagai toppingnya, misalnya seperti telur ikan, telur dadar, gurita, fillet ikan salmon, tuna, cumi-cumi, udang, dan sebagainya. </p>
      
   </div>   

   <br>
   <div class="box" data-aos="zoom-in">
      <h3>inarizushi sushi</h3>
      <img src="img/inarizushi sushi.jpg" alt="" style="width: 300px;"><br>
      <p style="font-size: 20px; font-family: 'Ubuntu', sans-serif" data-aos="fade-up">Selanjutnya, jenis sushi matang yang wajib dicoba dan cukup populer, yakni inarizushi. Makanan khas Jepang ini merupakan sushi 
            dibungkus dengan kantong tahu goreng, bukan rumput laut kering atau nori. Sehingga isian inarizushi teksturnya lembut dan gurih, sedangkan pada bagian luarnya terasa crunchy ketika digigit.</p>

   </div>

   <br>
   <div class="box" data-aos="zoom-in">
      <h3>chirashi sushi</h3>
      <img src="img/chirashi sushi.jpg" alt="" style="width: 300px;"><br>
      <p style="font-size: 20px; font-family: 'Ubuntu', sans-serif" data-aos="fade-up">Chirashi adalah nama sushi bowl yang lumayan populer, namun tak semua restoran Jepang di Indonesia menjual makanan tersebut. 
            Chirashi berbeda dengan sushi lainnya karena tidak dibungkus nori ataupun kantong tahu. Bahkan jika diperhatikan, bentuknya cenderung mirip rice bowl bertopping sashimi.</p>

   </div>

   <br>
   <div class="box" data-aos="zoom-in">
      <h3>gunkan sushi</h3>
      <img src="img/gunkan sushi.jpg" alt="" style="width: 300px;"><br>
      <p style="font-size: 20px; font-family: 'Ubuntu', sans-serif" data-aos="fade-up">Gunkan sushi sekilas mirip dengan norimaki, namun bentuknya lebih lonjong dan sedikit tinggi seperti kapal perang, sehingga dinamakan gunkan. 
            Tidak hanya dibungkus lembaran rumput laut kering atau nori, gunkan juga sering dibungkus menggunakan irisan mentimun yang tipis ataupun zukini segar.</p>

   </div>

   <br>
   <div class="box" data-aos="zoom-in">
    <h3>uramaki sushi</h3>
      <img src="img/uramaki sushi.jpg" alt="" style="width: 300px;"><br>
      <p style="font-size: 20px; font-family: 'Ubuntu', sans-serif" data-aos="fade-up">Biasanya, bagian paling luar sebagai pembungkus sushi adalah nori. Namun berbeda dengan uramaki sushi yang merupakan kebalikan dari norimaki,
            sebab bagian rumput laut keringnya untuk membungkus lauk, sedangkan nasinya terletak di paling luar sebagai pembungkus keseluruhan.</p>
    
   </div>

   <br>
   <div class="box" data-aos="zoom-in">
    <h3>Futomaki Sushi</h3>
      <img src="img/Futomaki Sushi.jpg" alt="" style="width: 300px;"><br>
      <p style="font-size: 20px; font-family: 'Ubuntu', sans-serif" data-aos="fade-up">Jenis sushi lainnya, yaitu futomaki yang merupakan norimaki namun dengan versi lebih besar serta tebal ukurannya, bahkan isiannya lebih banyak. 
            Tak heran jika sushi jenis ini disebut sebagai “nasi gulung lemak” di Jepang. Hal ini karena futomaki berukuran lebih besar karena memiliki tujuh macam isian lauk di dalamnya, mulai dari sayuran, daging, alpukat, telur ikan, telur dadar, dan lainnya. </p>

   </div>

   <br>
   <div class="box" data-aos="zoom-in">
    <h3>sashimi</h3>
      <img src="img/sashi.png" alt="" style="width: 300px;"><br>
      <p style="font-size: 20px; font-family: 'Ubuntu', sans-serif" data-aos="fade-up">Nama sushi lainnya adalah sashimi, yang menyajikan aneka hidangan laut mentah dalam kondisi segar. Sashimi sebelum disajikan harus diolah terlebih dahulu supaya baunya tidak amis sekaligus 
            mempertahankan kesegaran bahannya. Hidangan khas Negeri Sakura ini populer di berbagai negara termasuk Indonesia, sehingga biasanya pasti ada di restoran-restoran Jepang.</p>

   </div>

   <br>
   <div class="box" data-aos="zoom-in">
    <h3>Hosomaki</h3>
      <img src="img/Hosomaki.jpg" alt="" style="width: 300px;"><br>
      <p style="font-size: 20px; font-family: 'Ubuntu', sans-serif" data-aos="fade-up">Hosomaki adalah jenis lain dari norimaki, namun bedanya hosomaki hanya memiliki satu isian saja di dalamnya, atau bisa dikatakan tak bermacam-macam seperti pada norimaki dan futomaki. 
            Ukurannya pun lebih kecil dan sedikit lebih tinggi, biasanya isian lauknya berupa crabstick, salmon, tuna, mentimun, buah alpukat, telur dadar, dan lainnya yang digulung dengan nasi dan dibungkus nori pada bagian luarnya.</p>

   </div>

   <br>
   <div class="box" data-aos="zoom-in">
    <h3>Temaki Sushi</h3>
      <img src="img/Temaki Sushi.jpg" alt="" style="width: 300px;"><br>
      <p style="font-size: 20px; font-family: 'Ubuntu', sans-serif" data-aos="fade-up">Temaki adalah jenis sushiroll, jadi apa itu sushiroll? Artinya, sushi yang cara membuatnya tidak digulung menggunakan bantuan gulungan bambu, tetapi hanya dengan kedua tangan. 
            Temaki berbentuk cone atau corong berisi nasi cuka dan aneka macam lauk.</p>

   </div>
</section
><br>


    </p>
</div>

<br><br><br><br><br>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
</script>
<script>

   AOS.init({
      duration:800,
      delay:200
   });

</script>

</body>

<footer>
    <div style="background-color: #211D11; height: 50vh; color: white;">
    <br>
        <h1 style="font-size: 25px; font-family: 'Cherry Bomb One', cursive;" data-aos="fade-up"> Contact</h1>
        <p style="font-size: 20px; font-family: 'Ubuntu', sans-serif" data-aos="fade-up">
        <ul data-aos="fade-right">
            email
            <li>kenzibadrika@smkwikrama.sch.id</li>
        </ul>
        <ul data-aos="fade-right">
            telepon
            <li>085174337673</li>
        </ul>
        </p>
    </div>
</footer>

</html>