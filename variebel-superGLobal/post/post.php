<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (!isset($_POST['submit'])) { ?>
        <h1>Selamat datang <?php echo $_POST['nama']; ?></h1>
    <?php } ?>
    <form action="./dataPost.php" method="post">
        <h3>Massukan nama</h3>
        <input type="text" name="nama" id="">
        <h3>Massukan password</h3>
        <input type="password" name="pw" id=""><br><br>
        <button type="submit" name="sumbit">Enter</button>
    </form>
</body>
</html>


<!-- NB -->
<!-- 2 value yang wajib ada di form yaitu  -->
<!-- action dan method -->

<!-- jika kita menggunakan method get maka data di url akan terlihat -->
<!-- dan jika menggunakan post maka data nya akan di sembunyikan -->
<!-- oleh method post -->

<!-- jika action nya kosong action akan mengirim datanya ke datanya sendiri -->