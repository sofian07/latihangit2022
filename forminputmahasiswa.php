<!DOCTYPE html>
<html lang="en">
<head>
        <title>Form Input Mahasiswa</title>
</head>
<body>
    <body bgcolor="green">
        <form action="formtampilanmahasiswa.php" method="POST">
        <b>Pengolahan data Mahasiswa</b>
        <br>
        <pre>
            Nama:<input type="text" name="nama" size="25" maxlength="50">
            Alamat:<input type="text" name="alamat" size="25" maxlength="50">            
        </pre>
            Jenis Kelamin:
            <input type="radio" name="jeniskelamin" value="Laki-Laki"> Laki Laki
            <input type="radio" name="jeniskelamin" value="Perumpuan"> Perumpuan
            <P>
             Pekerjaan:
             <select name="pekerjaan">
                <option value="-Pilih-">-Pilih-
                <option value="Pelajar">Pelajar
                <option value="Karyawan">Karyawan
                <option value="Wirausaha">Wirausaha
                <option value="Lain-lainya">Lain-lain                   
                </option>
             </select>
            <p>
            Hobi:
            <input type="checkbox" name="hobi1" value="Olahraga"> Olahraga
            <input type="checkbox" name="hobi2" value="Musik"> Musik
            <input type="checkbox" name="hobi3" value="Badminton">Badminton
            <p>
            <input type="submit" value="Kirim"><input type="submit" value="Batal">
            </p>
        </form> 
</body>
</html>