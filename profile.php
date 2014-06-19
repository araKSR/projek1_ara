<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <style>
        body{
            font-family: calibri;
            font-size: 14px;
        }
        .header{
            background:blue;
            color: white;
            width: 500px;
            height:30px;
        }
        .container {
            width: 500px;
            height:150px;
            background: #ebebeb;
            border-radius: 5px;
        }
        .gambar img{
            width: 100px;
            height:120px;
            background: #565656;
            float: left;
            margin-top:10px;
        }
        .nama{
            text-align: left;
        }
        .status{
            text-align: left;
            margin-top: 10px;
        }
        .biodata{
            margin-top: 10px;
            width: 500px;
            height:30px;
            background: blue;
            color:white;
            padding:5px 0px 3px 0px;
        }
        .container2{
            margin-top: -5px;
            width: 500px;
            height:auto;
            background: #ebebeb;
            text-align: left;
            border-radius: 0px 0px 5px 5px ;
        }
        td{
            padding:5px;
        }
        input{
            background: blue;
            width: 100px;
            height: 30px;
            color:white;
            border:none;
            border-radius: 3px;
        }
        
    </style>
    <?php
        $koneksi    = mysqli_connect("localhost", "root", "", "projek1");
        
        $select     = "SELECT * FROM profil";
        $query      = mysqli_query($koneksi, $select);
        $data       = mysqli_fetch_array($query);
        
    ?>
    <body>
        <center>
            <div class="header">approck chat</div>
            <div class="container">                
                <div class="gambar">
                    <img src="">
                </div>
                <div class="nama">
                    <?php echo $data;?>
                </div>
                <div class="status">
                    <?php echo $data;?>
                </div>
            </div>
        </center>
        <center>
            <div class="biodata">
                Biodata Anda
            </div>
            <div class="container2">
                <div class="biodata-lengkap">
                    <table >
                        <tr>
                            <td>Tanggal lahir</td>
                            <td>:</td>
                            <td><?php echo $data; ?></td>
                        </tr>
                        <tr>
                            <td>Kota Asal</td>
                            <td>:</td>
                            <td><?php echo $data; ?></td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>:</td>
                            <td><?php echo $data; ?></td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>:</td>
                            <td><?php echo $data; ?></td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>:</td>
                            <td><?php echo $data; ?></td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>:</td>
                            <td><?php echo $data; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="container3">
                <table>
                    <tr>
                        <td>
                            <div class="edit">
                                <form>
                                    <input name="submit" type="submit" value="Ubah">
                                </form>
                            </div>
                        </td>
                        <td>
                            <div class="galery">
                                <form>
                                    <input name="submit" type="submit" value="Galeri">
                                </form>
                            </div>
                        </td>
                    </tr>
                </table>  
            </div>
        </center>
    </body>
</html>
