<head>
<meta name="viewport" content="width=device-width,
initial-scale=1">
<title>Data Pelanggan</title>
<style>
table {
border-collapse: collapse;
border-spacing: 0;
width: 100%;
border: 1px solid #ddd;
}
thead {
background-color: #f2f2f2;
}
th, td {
text-align: left;
padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2}
.tambah{
padding: 8px 16px ;
text-decoration: none;
}
</style>
</head>
<body>
    <div style="overflow-x:auto;">
    <a class="tambah" href="/0090kamar/kamar_tambah"> Tambah Data </a>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>id_pasien</th>
                <th>id_dokter</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
                $link = new mysqli("localhost","root","","t_genap3");
                $q = $link->query("select * from kamar");  
                while ($r = $q->fetch_array()) { //mengambil data array hasil dari database dan menampung dalam variabel $r
                echo "<tr>";
                echo "<th><b>".$r['id']."</b></th>";
                echo "<th><b>".$r['id_pasien']."</b></th>";
                echo "<th><b>".$r['id_dokter']."</b></th>";
                ?>
	  <td>
		<a class="btn btn-warning btn-sm" href="=<?php echo $r['id_pasien'];?>">Edit</a>
		<a class="btn btn-danger btn-sm" href="=<?php echo $r['id_pasien'];?>">Hapus</a>
						</td>
					</tr>
	 <?php } ?>
        </tbody>
    </table>
    </div>
</body>
</html>