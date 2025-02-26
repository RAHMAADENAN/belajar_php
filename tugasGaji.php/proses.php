<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    form {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 30px;
    }


    td {
        padding: 1em;
    }
</style>


<body>
    <form>
    <?php if (isset($_POST['submit'])) 
        {
        //declare
            $gajiBulanan = floatval($_POST['totalgaji']);
            $npwp = $_POST['npwp'];
            $gajiTahunan = $gajiBulanan * 12;

            if ($gajiTahunan > 54000000) 
            {
                if ($npwp == "Y") 
                {
                    $potonganPajak = $gajiTahunan * 0.15;
                    $pajak = 0;
                }
                else 
                {
                    $potonganPajak = $gajiTahunan * 0.20;
                    $pajak = 0;
                }
            }
            else{
              $potonganPajak = 0;  
            }
            $gajiBersihBulanan = ($gajiTahunan - $potonganPajak) /12;
            $potonganPajakBulanan = $potonganPajak /12;
            $gajiKotorBulanan = $gajiTahunan /12;
        }
    ?>

        <table border=1 style="border-colaapse : collapse : width : 50%">

            <tr>
                <td>Nama Karyawan</td>
                <td>:</td>
                <td>
                <?= $_POST['nama']; ?>
                    
                </td>
            </tr>

            <tr>
                <td>Divisi</td>
                <td>:</td>
                <td>

                    <?= $_POST['divisi']; ?>

                </td>
            </tr>

            <tr>
                <td>Total Gaji Tiap Bulan</td>
                <td>:</td>
                <td>
                <?= $_POST['totalgaji']; ?>
                    
                </td>
            </tr>

            <tr>
                <td>NPWP</td>
                <td>:</td>
                <td>
                <?= $_POST['npwp']; ?>
                
                </td>
            </tr>

            <tr>
                <td>Gaji Kotor Pertahunnya</td>
                <td>:</td>
                <td>
                <?= number_format($gajiTahunan,0,',','.' ) ?>
                
                </td>
            </tr>

            <tr>
                <td>Potongan Pajak Perbulannya</td>
                <td>:</td>
                <td>
                <?= number_format($potonganPajakBulanan,0,',','.' ) ?>

                </td>
            </tr>


            <tr>
                <td>Gaji Bersih Perbulannya</td>
                <td>:</td>
                <td>
                <?= number_format($gajiBersihBulanan,0,',','.' ) ?>
                
                </td>
            </tr>
        
        </table>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.