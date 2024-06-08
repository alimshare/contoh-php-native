<h2>Cek Grade Nilai</h2>

<form action="" method="post">
    Nilai Anda <br>
    <input type="text" name="nilai">

    <button type="submit">Cek Grade</button>
</form>

<?php  if(isset($_POST['nilai'])) : ?>

    <?php
        $nilai = $_POST['nilai'];
        $grade = "E";
        
        if ($nilai >= 86) {
            $grade = "A";
        } else if ($nilai >= 76) {
            $grade = "B";
        } else if ($nilai >= 66) {
            $grade = "C";
        }
    ?>

    Grade Nilai Kamu : <?= $grade; ?>

<?php endif; ?>
