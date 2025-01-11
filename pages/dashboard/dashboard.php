<?php
require 'config/koneksi.php';

// Query untuk mengambil total pasien
$queryTotalPasien = "SELECT COUNT(*) as nama FROM pasien";
$resultTotalPasien = $mysqli->query($queryTotalPasien);
$rowTotalPasien = $resultTotalPasien->fetch_assoc();
$totalPasien = $rowTotalPasien['nama'];

// Query untuk mengambil total dokter
$queryTotalDokter = "SELECT COUNT(*) as nama FROM dokter";
$resultTotalDokter = $mysqli->query($queryTotalDokter);
$rowTotalDokter = $resultTotalDokter->fetch_assoc();
$totalDokter = $rowTotalDokter['nama'];

// Query untuk mengambil total poli
$queryTotalPoli = "SELECT COUNT(*) as nama_poli FROM poli";
$resultTotalPoli = $mysqli->query($queryTotalPoli);
$rowTotalPoli = $resultTotalPoli->fetch_assoc();
$totalPoli = $rowTotalPoli['nama_poli'];
?>

<!DOCTYPE html>
<html lang="en">

<!-- <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Poliklinik</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body style="margin: 0; padding: 0;">
    <div class="dashboard-container">

        <section class=" content" style="display: flex; flex-direction: column; padding: 60px;">
            <div class="container mt-5">
                <div class="row justify-content-lg-center">
                    <div class="col-md-3">
                        <div class="card" style="border: 2px solid  #2E4374">
                            <div class=" card-body flex justify-content-center items-center flex-col">
                                <center>
                                <i class=" fas fa-user fa-fw mb-3" style="font-size: 34px; color:  #2E4374"></i>
                                <h2 style="margin-bottom: 5px; color: #2E4374">Total Pasien: <span>
                                        <?php echo $totalPasien; ?></span>
                                </h2>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-3">
                        <div class="card" style="border: 2px solid  #2E4374">
                            <div class="card-body flex justify-content-center items-center flex-col">
                                <center>
                                <i class="fas fa-user-nurse fa-fw mb-3" style="font-size: 34px; color: #2E4374"></i>
                                <h2 style="margin-bottom: 5px; color: #2E4374">Total Dokter: <span>
                                        <?php echo $totalDokter; ?></span>
                                </h2>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-3">
                        <div class="card" style="border: 2px solid  #2E4374">
                            <div class="card-body flex justify-content-center items-center flex-col">
                                <center>
                                <i class="fas fa-hospital fa-fw mb-3" style="font-size: 34px; color: #2E4374"></i>
                                <h2 style="margin-bottom: 5px; color: #2E4374">Total Poli: <span>
                                        <?php echo $totalPoli; ?></span>
                                </h2>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body> -->

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin</title>
  <!-- Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

  <!--CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css?key=2">
  
  <style>
    .mx-auto {
      max-width: 800px
    }

    .card {
      margin-top: 10px;
      border-radius: 30px;
    }

    .card-container {
      display: flex;
    }

    
    .cardBox {
  position: relative;
  width: 100%;
  /*padding: 20px;*/
  display: grid;
}

.cardBox a {
  text-decoration: none;
}

.cardBox .card {
  position: relative;
  background: #fff;
  padding: 20px;
  border: 0;
  border-radius: 20px;
  display: flex;
  flex-direction: row;
  grid-gap: 10px;
  margin-right: 0;
  justify-content: space-between;
  cursor: pointer;
  box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
}

.cardBox .card .numbers {
  position: relative;
  font-weight: 500;
  font-size: 2.5rem;
  /* color: #2a2185; */
  color: #2E4374;
}

.cardBox .card .cardName {
  color: #5f5f5f;
  font-size: 1.1rem;
  margin-top: 5px;
}

.cardBox .card .iconBx {
  position: absolute;
  right: 20px;
  font-size: 2.3rem;
  color: #5f5f5f;
}

.cardBox .card:hover {
  /* background: #2a2185; */
  background: #2E4374;
}

.cardBox .card:hover .numbers,
.cardBox .card:hover .cardName,
.cardBox .card:hover .iconBx {
  color: #fff;
}
  </style>
</head>

<body>
  <div class="mx-auto">

    <div class="cardBox mb-5">
      <!-- <a href="pengguna"> -->
        <div class="card">
          <div>
            <div class="numbers">
              <?php echo $totalPasien; ?>
            </div>
            <div class="cardName">Total Pasien</div>
          </div>

          <div class="iconBx">
            <i class="bi bi-people"></i>
          </div>
        </div>
      </a>

      <!-- <a href="rekap_harian"> -->
        <div class="card">
          <div>
            <div class="numbers">
              <?php echo $totalDokter; ?>
            </div>
            <div class="cardName">Total Dokter</div>
          </div>

          <div class="iconBx">
            <i class="bi bi-activity"></i>
          </div>
          
        </div>
      </a>

      <!-- <a href="status"> -->
        <div class="card">
          <div>
            <div class="numbers">
              <?php echo $totalPoli; ?>
            </div>
            <div class="cardName">Total Poli</div>
          </div>

          <div class="iconBx">
            <i class="bi bi-list-check"></i>
          </div>
        </div>
      </a>
    </div>

</html>