<style type="text/css">
<!--
.style1 {color: #000000}
.style2 {color: #FFCC66}
.style3 {color: #0066FF}
-->
</style>

<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;margin-bottom:20px;"><strong>Grafik Stok Buku Tahun 2018  Berdasarkan Penerbit Dan Pengarang </strong></div>

<div class="th">
<table class="table table-bordered" style="margin-top:20px;">
<th>
   <?php 
    include "conn.php";
     
			$sql = mysqli_query($koneksi, "SELECT SUM(stok) AS total FROM buku WHERE penerbit='Informatika'");
			
            $row = mysqli_fetch_array($sql); 
            
            $sql1 = mysqli_query($koneksi, "SELECT SUM(stok) AS total FROM buku WHERE penerbit='Sipil'");
			
            $row1 = mysqli_fetch_array($sql1);
            
            $sql2 = mysqli_query($koneksi, "SELECT SUM(stok) AS total FROM buku WHERE penerbit='Elektro'");
			
            $row2 = mysqli_fetch_array($sql2);
            
            $sql3 = mysqli_query($koneksi, "SELECT SUM(stok) AS total FROM buku WHERE penerbit='Mesin'");
			
            $row3 = mysqli_fetch_array($sql3);
            
            $sql4 = mysqli_query($koneksi, "SELECT SUM(stok) AS total FROM buku WHERE penerbit='Arsitek'");
			
            $row4 = mysqli_fetch_array($sql4);
            
            $sql5 = mysqli_query($koneksi, "SELECT SUM(stok) AS total FROM buku WHERE penerbit='Kedokteran'");
			
            $row5 = mysqli_fetch_array($sql5);
            
            $sql6 = mysqli_query($koneksi, "SELECT SUM(stok) AS total FROM buku WHERE penerbit='Kcv'");
			
            $row6 = mysqli_fetch_array($sql6);
            
            $sql7 = mysqli_query($koneksi, "SELECT SUM(stok) AS total FROM buku WHERE penerbit='Rpl'");
			
            $row7 = mysqli_fetch_array($sql7);
            
           
            
            ?>
<table id="TablePenerbit" class="table table-bordered" border="0" align="center" cellpadding="10">
                <tr>
                <th><div align="center" class="style1">penerbit</div></th>
                <th> <div align="center">Informatika</div></th>
                <th><div align="center">Sipil</div></th>
                <th><div align="center">Elektro</div></th>
                <th><div align="center">Mesin</div></th>
                <th><div align="center">Arsitek</div></th>
                <th><div align="center">Kedokteran</div></th>
                <th><div align="center">Kcv</div></th>
                <th><div align="center">Rpl</div></th>
                </tr>
            
                <tr>
                <td><div align="center" class="style3">Stok Buku </div></td>
                <td><div align="center"><?php echo $row['total'];?></div></td>
                <td><div align="center"><?php echo $row1['total'];?></div></td>
                <td><div align="center"><?php echo $row2['total'];?></div></td>
                <td><div align="center"><?php echo $row3['total'];?></div></td>
                <td><div align="center"><?php echo $row4['total'];?></div></td>
                <td><div align="center"><?php echo $row5['total'];?></div></td>
                <td><div align="center"><?php echo $row6['total'];?></div></td>
                <td><div align="center"><?php echo $row7['total'];?></div></td>
                </tr> 
                <?php
                $sqlku = mysqli_query($koneksi, "SELECT COUNT(*) AS total1 FROM buku WHERE penerbit ='Informatika'");
			
                $rowku = mysqli_fetch_array($sqlku); 
                
                $sqlku1 = mysqli_query($koneksi, "SELECT COUNT(*) AS total1 FROM buku WHERE penerbit ='Sipil'");
			
                $rowku1 = mysqli_fetch_array($sqlku1); 
                
                $sqlku2 = mysqli_query($koneksi, "SELECT COUNT(*) AS total1 FROM buku WHERE penerbit ='Elektro'");
			
                $rowku2 = mysqli_fetch_array($sqlku2); 
                
                $sqlku3 = mysqli_query($koneksi, "SELECT COUNT(*) AS total1 FROM buku WHERE penerbit ='Mesin'");
			
                $rowku3 = mysqli_fetch_array($sqlku3); 
                
                $sqlku4 = mysqli_query($koneksi, "SELECT COUNT(*) AS total1 FROM buku WHERE penerbit ='Arsitek'");
			
                $rowku4 = mysqli_fetch_array($sqlku4); 
                
                $sqlku5 = mysqli_query($koneksi, "SELECT COUNT(*) AS total1 FROM buku WHERE penerbit ='Kedokteran'");
			
                $rowku5 = mysqli_fetch_array($sqlku5); 
                
                $sqlku6 = mysqli_query($koneksi, "SELECT COUNT(*) AS total1 FROM buku WHERE penerbit ='Kcv'");
			
                $rowku6 = mysqli_fetch_array($sqlku6); 
                
                $sqlku7 = mysqli_query($koneksi, "SELECT COUNT(*) AS total1 FROM buku WHERE penerbit ='Rpl'");
			
                $rowku7 = mysqli_fetch_array($sqlku7); 
                
                
                ?>
                
                <tr>
                <td><div align="center" class="style2">Jumlah Pengarang </div></td>
                <td><div align="center"><?php echo $rowku['total1'];?></div></td>
                <td><div align="center"><?php echo $rowku1['total1'];?></div></td>
                <td><div align="center"><?php echo $rowku2['total1'];?></div></td>
                <td><div align="center"><?php echo $rowku3['total1'];?></div></td>
                <td><div align="center"><?php echo $rowku4['total1'];?></div></td>
                <td><div align="center"><?php echo $rowku5['total1'];?></div></td>
                <td><div align="center"><?php echo $rowku6['total1'];?></div></td>
                <td><div align="center"><?php echo $rowku7['total1'];?></div></td>
                </tr>
        </table>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="dist/js/jquery-1.4.js"></script>
    <!-- <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>-->
    <script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="dist/js/jquery.fusioncharts.js"></script>
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script type="text/javascript" src="assets/js/ie10-viewport-bug-workaround.js"></script>
    
    <!--LOAD HTML KE JQUERY FUSION CHART BERDASARKAN ID TABLE-->
<script>
    $('#TablePenerbit').convertToFusionCharts({
        swfPath: "Charts/",
        type: "MSColumn3D",
        data: "#TableSiswa",
        width: "1050",
        height: "350",
        dataFormat: "HTMLTable",
        renderAt: "chart-container",
        dataOption:{
            chartAttributes:{
                caption: "Annual Stock Graph",
                xAxisName: "Month",
                yAxisName: "Qty Stock",
                decimalPrecision: "0"
            }
        }
    });

        </script>
		</th>
		</table>
</div>
		