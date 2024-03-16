<html>
<head>
    <title>AAS Project 3 by PHP </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <div class="main-box">
            <button class="one-box" onclick="showForm('form-segitiga')">Luas Segitiga</button>
            <button class="two-box" onclick="showForm('form-persegi')">Luas Persegi Panjang</button>
        </div>
        <form id="form-persegi" action="" method="POST" class="main-form">
            <p class="text-one">Hitung Luas Persegi Panjang</p>
            <div class="child-form">
                <div class="one-form">
                    <p>Panjang :</p>
                    <input type="text" name="panjang" required class="input-one">
                </div>
                <div class="two-form">
                    <p>Lebar :</p>
                    <input type="text" name="lebar" required class="input-two">
                </div>
            </div>
            <input type="submit" name="submit_persegi" value="Hitung" class="button-one">
        </form>
        <form id="form-segitiga" action="" method="POST" class="main-form" style="display: none;">
            <p class="text-one">Hitung Luas Segitiga</p>
            <div class="child-form">
                <div class="one-form">
                    <p>Alas :</p>
                    <input type="text" name="alas" required class="input-one">
                </div>
                <div class="two-form">
                    <p>Tinggi :</p>
                    <input type="text" name="tinggi" required class="input-two">
                </div>
            </div>
            <input type="submit" name="submit_segitiga" value="Hitung" class="button-one">
        </form>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['submit_persegi'])) {
                    $panjang = $_POST['panjang'];
                    $lebar = $_POST['lebar'];
                    $luas_persegi = $panjang * $lebar;
                    echo "<p>Luas Persegi Panjang: $luas_persegi</p>";
                } elseif (isset($_POST['submit_segitiga'])) {
                    $alas = $_POST['alas'];
                    $tinggi = $_POST['tinggi'];
                    $luas_segitiga = 0.5 * $alas * $tinggi;
                    echo "<p>Luas Segitiga: $luas_segitiga</p>";
                }
            }
        ?>

    </div>
    <script>
        function showForm(formId) {
            var forms = document.querySelectorAll('.main-form');
            forms.forEach(form => {
                if (form.id === formId) {
                    form.style.display = 'block';
                } else {
                    form.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>