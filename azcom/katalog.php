<html>

<head>
    <title>AZCom</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <?php include("header.php"); ?>
        </div>
        <div class="menu">
            <a href="index.php">beranda</a> | <a href="katalog.php">katalog</a>

        </div>
        <div class="content">
            <form action='' method='POST'>
                Pilih Katalog :
                <select name="katalog">
                    <option value="hardware" name='hardware'>hardware</option>
                    <option value="software" name='software'>software</option>
                </select>
                <input type="submit" value="TAMPILKAN" name="submit">
                <hr>
                <table border="1" cellpadding="3" cellspacing="0" width="300">
                    <tr>
                        <th>No</th>
                        <th>Nama Product</th>
                        <th>jenis</th>
                    </tr>
                    <?php
                    $hardware = array("monitor", "cpu", "keyboard", "mouse");
                    $software = array("windows os", "linux os", "mac os");
                    if (isset($_POST['submit'])) {
                        $katalog = ($_POST['katalog']);

                        if ($katalog == 'hardware') {
                            $no = 1;
                            foreach ($hardware as $m) {
                                echo
                                "<tr>
                                    <td>$no</td>
                                    <td>$m</td>
                                    <td>$katalog</td>
                                    </tr>";
                                $no++;
                            }
                        }

                        if ($katalog == 'software') {
                            $no = 1;
                            foreach ($software as $m) {
                                echo
                                "<tr>
                                    <td>$no</td>
                                    <td>$m</td>
                                    <td>$katalog</td>
                                    </tr>";
                                $no++;
                            }
                        }
                    }

                    ?>
                </table>
            </form>
        </div>
        <div class="footer">
            <?php include("footer.php"); ?>
        </div>


</body>

</html>