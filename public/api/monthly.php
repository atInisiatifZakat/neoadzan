<?php
include __DIR__ . '/../../inc/autoload.php';
include __DIR__ . '/../../api/getMonthly.php';
?>

<html>

<body>
    <form method='post' action='monthly.php'>
        tahun <input type='text' name='y' value='<?php echo date('Y'); ?>'><br>
        bulan <input type='text' name='m' value='<?php echo date('n'); ?>'><br>
        lokasi <input type='text' name='id' value='31.71'><br>
        latitude <input type='text' name='lat' value='-6.17501'><br>
        longitude <input type='text' name='lng' value='106.820497'><br>
        <input type='submit'>
    </form>
</body>

</html>