<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <style>
		.warning{color: red;}
    .blackbar{
      background: black;
      color: white;
      padding: 2px;
      }
    .card-header{
      font-size: 25px;
      }
	</style>
</head>
<body>
  <?php

  $error_jenis_daftar = "";
  $error_tgl_masuk = "";
  $error_NIS = "";
  $error_nomor_peserta = "";
  $error_PAUD = "";
  $error_TK = "";
  $error_SKHUN = "";
  $error_ijazah = "";
  $error_hobi = "";
  $error_cita = "";
  $error_nama = "";
  $error_gender = "";
  $error_NISN = "";
  $error_NIK = "";
  $error_tempat_lahir = "";
  $error_tgl_lahir = "";
  $error_agama = "";
  $error_khusus = "";
  $error_alamat = "";
  $error_RT = "";
  $error_RW = "";
  $error_dusun = "";
  $error_kelurahan = "";
  $error_kecamatan = "";
  $error_kode_pos = "";
  $error_tempat_tinggal = "";
  $error_transportasi = "";
  $error_nomor_hp = "";
  $error_nomor_telepon = "";
  $error_email = "";
  $error_KPS = "";
  $error_nomor_KPS = "";
  $error_kwn = "";
  

  $jenis_daftar = "";
  $tgl_masuk = "";
  $NIS = "";
  $nomor_peserta = "";
  $PAUD = "";
  $TK = "";
  $SKHUN = "";
  $ijazah = "";
  $hobi = "";
  $cita = "";
  $nama = "";
  $gender = "";
  $NISN = "";
  $NIK = "";
  $tempat_lahir = "";
  $tgl_lahir = "";
  $agama = "";
  $khusus = "";
  $alamat = "";
  $RT = "";
  $RW = "";
  $dusun = "";
  $kelurahan = "";
  $kecamatan = "";
  $kode_pos = "";
  $tempat_tinggal = "";
  $transportasi = "";
  $nomor_hp = "";
  $nomor_telepon = "";
  $email = "";
  $KPS = "";
  $nomor_KPS = "";
  $kwn = "";
  

  if ($_SERVER["REQUEST_METHOD"]=="POST") {
    // JENIS DAFTAR (Radio)
    if (empty($_POST["jenis_daftar"])) {
      $error_jenis_daftar = "Jenis Daftar tidak boleh kosong";
    } else {
      $jenis_daftar = cek_input($_POST["jenis_daftar"]);
    }
    // TANGGAL MASUK (Date)
    if (empty($_POST["tgl_masuk"])) {
      $error_tgl_masuk = "Tanggal Masuk tidak boleh kosong";
    } else {
      $tgl_masuk = cek_input($_POST["tgl_masuk"]);
    }
    // NIS
    if (empty($_POST["NIS"])) {
      $error_NIS = "NIS tidak boleh kosong";
    } else {
      $NIS = cek_input($_POST["NIS"]);
      if (!is_numeric($NIS)) {
        $error_NIS = "Nomor NIS hanya boleh angka";
      }
    }
    // Nomor Peserta
    if (empty($_POST["nomor_peserta"])) {
      $error_nomor_peserta = "Nomor Peserta tidak boleh kosong";
    } else {
      $nomor_peserta = cek_input($_POST["nomor_peserta"]);
      if (!is_numeric($nomor_peserta)) {
        $error_nomor_peserta = "Nomor Peserta hanya boleh angka";
      }
    }
    // PAUD (Radio)
    if (empty($_POST["PAUD"])) {
      $error_PAUD = "PAUD tidak boleh kosong";
    } else {
      $PAUD = cek_input($_POST["PAUD"]);
    }
    // TK (Radio)
    if (empty($_POST["TK"])) {
      $error_TK = "TK tidak boleh kosong";
    } else {
      $TK = cek_input($_POST["TK"]);
    }
    // SKHUN
    if (empty($_POST["SKHUN"])) {
      $error_SKHUN = "SKHUN tidak boleh kosong";
    } else {
      $SKHUN = cek_input($_POST["SKHUN"]);
      if (!is_numeric($SKHUN)) {
        $error_SKHUN = "SKHUN hanya boleh angka";
      }
    }
    // Ijazah
    if (empty($_POST["ijazah"])) {
      $error_ijazah = "ijazah tidak boleh kosong";
    } else {
      $ijazah = cek_input($_POST["ijazah"]);
      if (!is_numeric($ijazah)) {
        $error_ijazah = "Ijazah hanya boleh angka";
      }
    }
    // Hobi
    if (empty($_POST["hobi"])) {
			$error_hobi = "Silakan Memilih ";
		} else {
			$hobi = cek_input($_POST["hobi"]);
		}
    // Cita-cita (Dropdown)
    if (empty($_POST["cita"])) {
      $error_cita;
    } else {
      $cita = cek_input($_POST["cita"]);
    }
    // Nama
    if (empty($_POST["nama"])) {
			$error_nama = "Nama tidak boleh kosong";
		} else {
			$nama = cek_input($_POST["nama"]);
			if (!preg_match("/^[a-z A-Z]*$/", $nama)) {
				$error_nama = "Inputan hanya boleh huruf dan spasi";
			}
		}
    // Jenis Kelamin (Radio)
    if (empty($_POST["gender"])) {
			$error_gender = "Gender tidak boleh kosong";
		} else {
			$gender = cek_input($_POST["gender"]);
		}
    // NISN
    if (empty($_POST["NISN"])) {
      $error_NISN = "NISN tidak boleh kosong";
    } else {
      $NISN = cek_input($_POST["NISN"]);
      if (!is_numeric($NISN)) {
        $error_NISN = "Nomor NISN hanya boleh angka";
      }
    }
    // NIK
    if (empty($_POST["NIK"])) {
      $error_NIK = "NIK tidak boleh kosong";
    } else {
      $NIK = cek_input($_POST["NIK"]);
      if (!is_numeric($NIK)) {
        $error_NIK = "Nomor NIK hanya boleh angka";
      }
    }
    // Tempat Lahir
    if (empty($_POST["tempat_lahir"])) {
			$error_tempat_lahir = "Nama tidak boleh kosong";
		} else {
			$tempat_lahir = cek_input($_POST["tempat_lahir"]);
			if (!preg_match("/^[a-z A-Z]*$/", $tempat_lahir)) {
				$error_tempat_lahir = "Inputan hanya boleh huruf dan spasi";
			}
		}
    // Tanggal Lahir (Date)
    if (empty($_POST["tgl_lahir"])) {
      $error_tgl_lahir = "Tanggal Lahir tidak boleh kosong";
    } else {
      $tgl_lahir = cek_input($_POST["tgl_lahir"]);
    }
    // Agama (Dropdown)
    if (empty($_POST["agama"])) {
      $error_agama;
    } else {
      $agama = cek_input($_POST["agama"]);
    }
    // Khusus (Dropdown)
    if (empty($_POST["khusus"])) {
      $error_khusus;
    } else {
      $khusus = cek_input($_POST["khusus"]);
    }
    // Alamat
    if (empty($_POST["alamat"])) {
			$error_alamat = "Alamat tidak boleh kosong";
		} else {
			$alamat = cek_input($_POST["alamat"]);
      if (!preg_match("/^[a-z A-Z 0-9]*$/", $alamat)) {
				$error_alamat = "Inputan berupa Huruf, Angka, dan Spasi";
			}
		}
    // RT
    if (empty($_POST["RT"])) {
      $error_RT = "RT tidak boleh kosong";
    } else {
      $RT = cek_input($_POST["RT"]);
      if (!is_numeric($RT)) {
        $error_RT = "RT hanya boleh angka";
      }
    }
    // RW
    if (empty($_POST["RW"])) {
      $error_RW = "RW tidak boleh kosong";
    } else {
      $RW = cek_input($_POST["RW"]);
      if (!is_numeric($RW)) {
        $error_RW = "RW hanya boleh angka";
      }
    }
    // Dusun
    if (empty($_POST["dusun"])) {
			$error_dusun = "dusun tidak boleh kosong";
		} else {
			$dusun = cek_input($_POST["dusun"]);
			if (!preg_match("/^[a-z A-Z]*$/", $dusun)) {
				$error_dusun = "Inputan hanya boleh huruf dan spasi";
			}
		}
    // Kelurahan
    if (empty($_POST["kelurahan"])) {
      $error_kelurahan = "Kelurahan tidak boleh kosong";
    } else {
      $kelurahan = cek_input($_POST["kelurahan"]);
      if (!preg_match("/^[a-z A-Z]*$/", $kelurahan)) {
        $error_kelurahan = "Inputan hanya boleh huruf dan spasi";
      }
    }
    // Kecamatan
    if (empty($_POST["kecamatan"])) {
      $error_kecamatan = "Kecamatan tidak boleh kosong";
    } else {
      $kecamatan = cek_input($_POST["kecamatan"]);
      if (!preg_match("/^[a-z A-Z]*$/", $kecamatan)) {
        $error_kecamatan = "Inputan hanya boleh huruf dan spasi";
      }
    }
    // Kode Pos
    if (empty($_POST["kode_pos"])) {
      $error_kode_pos = "Kode Pos tidak boleh kosong";
    } else {
      $kode_pos = cek_input($_POST["kode_pos"]);
      if (!is_numeric($kode_pos)) {
        $error_kode_pos = "Kode Pos hanya boleh angka";
      }
    }
    // Tempat Tinggal (Dropdown)
    if (empty($_POST["tempat_tinggal"])) {
      $error_tempat_tinggal;
    } else {
      $tempat_tinggal = cek_input($_POST["tempat_tinggal"]);
    }
    // Transportasi (Dropdown)
    if (empty($_POST["transportasi"])) {
      $error_transportasi;
    } else {
      $transportasi = cek_input($_POST["transportasi"]);
    }
    // Nomor HP
    if (empty($_POST["nomor_hp"])) {
      $error_nomor_hp = "Nomor HP tidak boleh kosong";
    } else {
      $nomor_hp = cek_input($_POST["nomor_hp"]);
      if (!is_numeric($nomor_hp)) {
        $error_nomor_hp = "Nomor HP hanya boleh angka";
      }
    }
    // Nomor Telepon
    if (empty($_POST["nomor_telepon"])) {
      $error_nomor_telepon = "Nomor Telepon tidak boleh kosong";
    } else {
      $nomor_telepon = cek_input($_POST["nomor_telepon"]);
      if (!is_numeric($nomor_telepon)) {
        $error_nomor_telepon = "Nomor Telepon hanya boleh angka";
      }
    }
    // Email
    if (empty($_POST["email"])) {
      $error_email = "Email Tidak Boleh Kosong";
    } else {
      $email = cek_input($_POST["email"]);  
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_email = "Format Email Salah";
      }
    }
    // KPS (Radio)
    if (empty($_POST["KPS"])) {
			$error_KPS = "SIlakan Memilih";
		} else {
			$KPS = cek_input($_POST["KPS"]);
		}
    // Nomor KPS
    if (empty($_POST["nomor_KPS"])) {
			$nomor_KPS = "";
		} else {
			$nomor_KPS = cek_input($_POST["nomor_KPS"]);
		}
    // Kewarganegaraan
    if (empty($_POST["kwn"])) {
			$error_kwn = "Kewarganegaraan tidak boleh kosong";
		} else {
			$kwn = cek_input($_POST["kwn"]);
			if (!preg_match("/^[a-z A-Z]*$/", $kwn)) {
				$error_kwn = "Inputan hanya boleh huruf dan spasi";
			}
		}

  }
  include "koneksi.php";
  
  $sql = "INSERT INTO formulir_peserta (jenis_daftar,tanggal_masuk, NIS, nomor_peserta, PAUD, TK, nomor_SKHUN, nomor_ijazah, hobi, cita_cita, nama_lengkap, jenis_kelamin, NISN, NIK, tempat_lahir, tgl_lahir, agama, khusus, alamat, RT, RW, dusun, kelurahan, kecamatan, kode_pos, tempat_tinggal, transportasi, nomor_hp, nomor_telepon, email_pribadi, penerima_KPS, nomor_KPS, kwn)
  VALUES ('$jenis_daftar','$tgl_masuk','$NIS','$nomor_peserta','$PAUD','$TK','$SKHUN','$ijazah','$hobi','$cita','$nama','$gender','$NISN','$NIK','$tempat_lahir','$tgl_lahir','$agama','$khusus','$alamat','$RT','$RW','$dusun','$kelurahan','$kecamatan','$kode_pos','$tempat_tinggal','$transportasi','$nomor_hp','$nomor_telepon','$email','$KPS','$nomor_KPS','$kwn')";  
  mysqli_query($koneksi, $sql) or die ("Koneksi gagal");
  
  function cek_input($data){
    $data = trim($data);
    $data = stripcslashes($data);
    // $data = htmlspecialchars($data);
    return $data;
  }

  ?>

  <div class = "row">
    <div class = "col-md-7">
      <div class = "card">
        <div class = "card-header" align="center">
          Formulir Peserta Didik
        </div>
        <div class="card-body">
          <form method="post">
          <!-- Header 1 -->
            <div class="blackbar">
              <h4 class="col-sm-5">REGISTRASI PESERTA DIDIK</h4>
            </div>
            <!-- Jenis Daftar (Radio) -->
            <div class="form-group row">
              <label for="jenis_daftar" class="col-sm-3 col-form-label">Jenis Daftar</label>
              <div class="radio-inline" style="margin-left: 15px; margin-top: 7px;">
                <input type="radio" name="jenis_daftar" value="Siswa_Baru"> Siswa Baru
                &nbsp;&nbsp;
                <input type="radio" name="jenis_daftar" value="Pindahan"> Pindahan
                <br>
                <span class="warning"><?php echo $error_jenis_daftar;?></span>
              </div>
            </div>
            <!-- Tanggal Masuk Sekolah (Date) -->
            <div class="form-group row">
              <label for="tgl_masuk" class="col-sm-3 col-form-label">Tanggal Masuk Sekolah</label>
              <div class="col-sm-5">
                <input type="date" name="tgl_masuk" class="form-control" <?php echo($error_tgl_masuk !="" ? "is-invalid" : ""); ?> id="tgl_masuk" placeholder="Tanggal Masuk" value="<?php echo $tgl_masuk; ?>"><span class="warning"><?php echo $error_tgl_masuk; ?></span>
              </div>
            </div>
            <!-- NIS -->
            <div class="form-group row">
              <label for="NIS" class="col-sm-3 col-form-label">NIS</label>
              <div class="col-sm-5">
                <input type="text" name="NIS" class="form-control" <?php echo ($error_NIS !="" ? "is-invalid" : ""); ?> id="NIS" placeholder="NIS" value="<?php echo $NIS;?>"><span class="warning"><?php echo $error_NIS; ?></span>
              </div>
            </div>
            <!-- Nomor Peserta -->
            <div class="form-group row">
              <label for="nomor_peserta" class="col-sm-3 col-form-label">Nomor Peserta Ujian</label>
              <div class="col-sm-5">
                <input type="text" name="nomor_peserta" class="form-control" <?php echo ($error_nomor_peserta !="" ? "is-invalid" : ""); ?> id="nomor_peserta" placeholder="Nomor Peserta Ujian" value="<?php echo $nomor_peserta;?>"><span class="warning"><?php echo $error_nomor_peserta; ?></span>
              </div>
            </div>
            <!-- PAUD -->
            <div class="form-group row">
              <label for="PAUD" class="col-sm-3 col-form-label">PAUD</label>
              <div class="radio-inline" style="margin-left: 15px; margin-top: 7px;">
                <input type="radio" name="PAUD" value="Ya"> Ya
                &nbsp;&nbsp;
                <input type="radio" name="PAUD" value="Tidak"> Tidak
                <br>
                <span class="warning"><?php echo $error_PAUD;?></span>
              </div>
            </div>
            <!-- TK -->
            <div class="form-group row">
              <label for="TK" class="col-sm-3 col-form-label">TK</label>
              <div class="radio-inline" style="margin-left: 15px; margin-top: 7px;">
                <input type="radio" name="TK" value="Ya"> Ya
                &nbsp;&nbsp;
                <input type="radio" name="TK" value="Tidak"> Tidak
                <br>
                <span class="warning"><?php echo $error_TK;?></span>
              </div>
            </div>
            <!-- SKHUN -->
            <div class="form-group row">
              <label for="SKHUN" class="col-sm-3 col-form-label">No. Seri SKHUN</label>
              <div class="col-sm-5">
                <input type="text" name="SKHUN" class="form-control" <?php echo ($error_SKHUN !="" ? "is-invalid" : ""); ?> id="SKHUN" placeholder="SKHUN" value="<?php echo $SKHUN;?>"><span class="warning"><?php echo $error_SKHUN; ?></span>
              </div>
            </div>
            <!-- Ijazah -->
            <div class="form-group row">
              <label for="ijazah" class="col-sm-3 col-form-label">No. Seri Ijazah</label>
              <div class="col-sm-5">
                <input type="text" name="ijazah" class="form-control" <?php echo ($error_ijazah !="" ? "is-invalid" : ""); ?> id="ijazah" placeholder="Ijazah" value="<?php echo $ijazah;?>"><span class="warning"><?php echo $error_ijazah; ?></span>
              </div>
            </div>
            <!-- Hobi (Radio) -->
            <div class="form-group row">
              <label for="hobi" class="col-sm-3 col-form-label">Hobi</label>
              <div class="radio-inline" style="margin-left: 15px; margin-top: 7px;">
                <input type="radio" name="hobi" value="Olahraga"> Olahraga
                &nbsp;&nbsp;
                <input type="radio" name="hobi" value="Kesenian"> Kesenian
                &nbsp;&nbsp;
                <input type="radio" name="hobi" value="Membaca"> Membaca
                &nbsp;&nbsp;
                <input type="radio" name="hobi" value="Menulis"> Menulis
                &nbsp;&nbsp;
                <input type="radio" name="hobi" value="Lainnya"> Lainnya
                <br>
                <span class="warning"><?php echo $error_hobi;?></span>
              </div>
            </div>
            <!-- Cita-Cita (Dropdown) -->
            <div class="form-group row">
              <label for="cita" class="col-sm-3 col-form-label">Cita-cita</label>
              <select name="cita" class="col-sm-3" style="margin-left: 15px; margin-top: 7px;">
                <option value="PNS">PNS</option>
                <option value="TNI/POLRI">TNI / POLRI</option>
                <option value="Guru/Dosen">Guru / Dosen</option>
                <option value="Dokter">Dokter</option>
                <option value="Wiraswasta">Wiraswasta</option>
                <option value="Politikus">Politikus</option>
                <option value="Seni/Lukis">Seni / Lukis / Artis</option>
                <option value="Lainnya">Lainnya</option>
              </select>
            </div>
            <!-- Header 2 -->
            <div class="blackbar">
              <h4 class="col-sm-5">DATA PRIBADI</h4>
            </div>
            <br>
            <!-- Nama -->
            <div class="form-group row">
							<label for="nama" class="col-sm-3 col-form-label">Nama</label>
							<div class="col-sm-5">
								<input type="text" name="nama" class="form-control <?php echo ($error_nama !="" ? "is-invalid" : ""); ?>" id="nama" placeholder="Nama" value="<?php echo $nama;?>"><span class="warning"><?php echo $error_nama; ?></span>
							</div>
						</div>
            <!-- Jenis Kelamin (Radio) -->
            <div class="form-group row">
              <label for="gender" class="col-sm-3 col-form-label">Jenis Kelamin</label>
              <div class="radio-inline" style="margin-left: 15px; margin-top: 7px;">
                <input type="radio" name="gender" value="Laki-laki"> Laki-Laki
                &nbsp;&nbsp;
                <input type="radio" name="gender" value="Perempuan"> Perempuan
                <br>
                <span class="warning"><?php echo $error_gender;?></span>
              </div>
            </div>
            <!-- NISN -->
            <div class="form-group row">
              <label for="NISN" class="col-sm-3 col-form-label">NISN</label>
              <div class="col-sm-5">
                <input type="text" name="NISN" class="form-control" <?php echo ($error_NISN !="" ? "is-invalid" : ""); ?> id="NISN" placeholder="NISN" value="<?php echo $NISN;?>"><span class="warning"><?php echo $error_NISN; ?></span>
              </div>
            </div>
            <!-- NIK -->
            <div class="form-group row">
              <label for="NIK" class="col-sm-3 col-form-label">NIK</label>
              <div class="col-sm-5">
                <input type="text" name="NIK" class="form-control" <?php echo ($error_NIK !="" ? "is-invalid" : ""); ?> id="NIK" placeholder="NIK" value="<?php echo $NIK;?>"><span class="warning"><?php echo $error_NIK; ?></span>
              </div>
            </div>
            <!-- Tempat Lahir -->
            <div class="form-group row">
              <label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
              <div class="col-sm-5">
                <input type="text" name="tempat_lahir" class="form-control" <?php echo ($error_tempat_lahir !="" ? "is-invalid" : ""); ?> id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir;?>"><span class="warning"><?php echo $error_tempat_lahir; ?></span>
              </div>
            </div>
            <!-- Tanggal Lahir (Date) -->
            <div class="form-group row">
              <label for="tgl_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
              <div class="col-sm-5">
                <input type="date" name="tgl_lahir" class="form-control" <?php echo($error_tgl_lahir !="" ? "is-invalid" : ""); ?> id="tgl_lahir" placeholder="Tanggal Lahir" value="<?php echo $tgl_lahir; ?>"><span class="warning"><?php echo $error_tgl_lahir; ?></span>
              </div>
            </div>
            <!-- Agama (Dropdown) -->
            <div class="form-group row">
              <label for="agama" class="col-sm-3 col-form-label">Agama</label>
              <select name="agama" class="col-sm-3" style="margin-left: 15px; margin-top: 7px;">
                <option value="Islam">Islam</option>
                <option value="Kristen/Protestan">Kristen / Protestan</option>
                <option value="Katholik">Katholik</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Khong Hu Chu">Khong Hu Chu</option>
                <option value="Lainnya">Lainnya</option>
              </select>
            </div>
            <!-- Khusus (Dropdown) -->
            <div class="form-group row">
              <label for="khusus" class="col-sm-3 col-form-label">Berkebutuhan Khusus</label>
              <select name="khusus" class="col-sm-3" style="margin-left: 15px; margin-top: 7px;">
                <option value="Tidak">Tidak</option>
                <option value="Netra">Netra</option>
                <option value="Rungu">Rungu</option>
                <option value="Grahita Ringan">Grahita Ringan</option>
                <option value="Grahita Sedang">Grahita Sedang</option>
                <option value="Daksa Ringan">Daksa Ringan</option>
                <option value="Daksa Sedang">Daksa Sedang</option>
                <option value="Laras">Laras</option>
                <option value="Wicara">Wicara</option>
                <option value="Tuna Ganda">Tuna Ganda</option>
                <option value="Hiper Aktif">Hiper Aktif</option>
                <option value="Cerdas Istimewa">Cerdas Istimewa</option>
                <option value="Bakat Istimewa">Bakat Istimewa</option>
                <option value="Kesulitan Belajar">Kesulitan Belajar</option>
                <option value="Narkoba">Narkoba</option>
                <option value="Indigo">Indigo</option>
                <option value="Down Syndrome">Down Syndrome</option>
                <option value="Autis">Autis</option>
              </select>
            </div>
            <!-- Alamat -->
            <div class="form-group row">
              <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
              <div class="col-sm-5">
                <input type="text" name="alamat" class="form-control" <?php echo ($error_alamat !="" ? "is-invalid" : ""); ?> id="alamat" placeholder="Alamat" value="<?php echo $alamat;?>"><span class="warning"><?php echo $error_alamat; ?></span>
              </div>
            </div>
            <!-- RT -->
            <div class="form-group row">
              <label for="RT" class="col-sm-3 col-form-label">RT</label>
              <div class="col-sm-5">
                <input type="text" name="RT" class="form-control" <?php echo ($error_RT !="" ? "is-invalid" : ""); ?> id="RT" placeholder="RT" value="<?php echo $RT;?>"><span class="warning"><?php echo $error_RT; ?></span>
              </div>
            </div>
            <!-- RW -->
            <div class="form-group row">
              <label for="RW" class="col-sm-3 col-form-label">RW</label>
              <div class="col-sm-5">
                <input type="text" name="RW" class="form-control" <?php echo ($error_RW !="" ? "is-invalid" : ""); ?> id="RW" placeholder="RW" value="<?php echo $RW;?>"><span class="warning"><?php echo $error_RW; ?></span>
              </div>
            </div>
            <!-- Dusun -->
            <div class="form-group row">
              <label for="dusun" class="col-sm-3 col-form-label">Dusun</label>
              <div class="col-sm-5">
                <input type="text" name="dusun" class="form-control" <?php echo ($error_dusun !="" ? "is-invalid" : ""); ?> id="dusun" placeholder="Nama Dusun" value="<?php echo $dusun;?>"><span class="warning"><?php echo $error_dusun; ?></span>
              </div>
            </div>
            <!-- Kelurahan -->
            <div class="form-group row">
              <label for="kelurahan" class="col-sm-3 col-form-label">Nama Kelurahan / Desa</label>
              <div class="col-sm-5">
                <input type="text" name="kelurahan" class="form-control" <?php echo ($error_kelurahan !="" ? "is-invalid" : ""); ?> id="kelurahan" placeholder="Kelurahan" value="<?php echo $kelurahan;?>"><span class="warning"><?php echo $error_kelurahan; ?></span>
              </div>
            </div>
            <!-- Kecamatan -->
            <div class="form-group row">
              <label for="kecamatan" class="col-sm-3 col-form-label">Kecamatan</label>
              <div class="col-sm-5">
                <input type="text" name="kecamatan" class="form-control" <?php echo ($error_kecamatan !="" ? "is-invalid" : ""); ?> id="kecamatan" placeholder="Kecamatan" value="<?php echo $kecamatan;?>"><span class="warning"><?php echo $error_kecamatan; ?></span>
              </div>
            </div>
            <!-- Kode Pos -->
            <div class="form-group row">
              <label for="kode_pos" class="col-sm-3 col-form-label">Kode Pos</label>
              <div class="col-sm-5">
                <input type="text" name="kode_pos" class="form-control" <?php echo ($error_kode_pos !="" ? "is-invalid" : ""); ?> id="kode_pos" placeholder="Kode Pos" value="<?php echo $kode_pos;?>"><span class="warning"><?php echo $error_kode_pos; ?></span>
              </div>
            </div>
            <!-- Tempat Tinggal (Dropdown) -->
            <div class="form-group row">
              <label for="tempat_tinggal" class="col-sm-3 col-form-label">Tempat Tinggal</label>
              <select name="tempat_tinggal" class="col-sm-3" style="margin-left: 15px; margin-top: 7px;">
                <option value="Orang Tua">Bersama Orang Tua</option>
                <option value="Wali">Wali</option>
                <option value="Kos">Kos</option>
                <option value="Asrama">Asrama</option>
                <option value="Panti Asuhan">Panti Asuhan</option>
                <option value="Lainnya">Lainnya</option>
              </select>
            </div>
            <!-- Transportasi (Dropdown) -->
            <div class="form-group row">
              <label for="transportasi" class="col-sm-3 col-form-label">Moda Transportasi</label>
              <select name="transportasi" class="col-sm-3" style="margin-left: 15px; margin-top: 7px;">
                <option value="Jalan Kaki">Jalan Kaki</option>
                <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
                <option value="Kendaraan Umum">Kendaraan Umum</option>
                <option value="Jemputan Sekolah">Jemputan Sekolah</option>
                <option value="Kereta Api">Kereta Api</option>
                <option value="Ojek">Ojek</option>
                <option value="Andong / Bendi / Becak">Andong / Bendi / Becak</option>
                <option value="Perahu Penyebrangan">Perahu Penyebrangan</option>
                <option value="Lainnya">Lainnya</option>
              </select>
            </div>
            <!-- Nomor HP -->
            <div class="form-group row">
              <label for="nomor_hp" class="col-sm-3 col-form-label">Nomor HP</label>
              <div class="col-sm-5">
                <input type="text" name="nomor_hp" class="form-control" <?php echo ($error_nomor_hp !="" ? "is-invalid" : ""); ?> id="nomor_hp" placeholder="Nomor HP" value="<?php echo $nomor_hp;?>"><span class="warning"><?php echo $error_nomor_hp; ?></span>
              </div>
            </div>
            <!-- Nomor Telp -->
            <div class="form-group row">
              <label for="nomor_telepon" class="col-sm-3 col-form-label">Nomor Telepon</label>
              <div class="col-sm-5">
                <input type="text" name="nomor_telepon" class="form-control" <?php echo ($error_nomor_telepon !="" ? "is-invalid" : ""); ?> id="nomor_telepon" placeholder="Nomor Telepon" value="<?php echo $nomor_telepon;?>"><span class="warning"><?php echo $error_nomor_telepon; ?></span>
              </div>
            </div>
            <!-- Email -->
            <div class="form-group row">
              <label for="email" class="col-sm-3 col-form-label">Email</label>
              <div class="col-sm-5">
                <input type="text" name="email" class="form-control <?php echo ($error_email !="" ? "is-invalid" : ""); ?>" id="email" placeholder="Email" value="<?php echo $email;?>"><span class="warning"><?php echo $error_email; ?></span>
              </div>
            </div>
            <!-- KPS (Radio) -->
            <div class="form-group row">
              <label for="KPS" class="col-sm-3 col-form-label">Penerima KPS</label>
              <div class="radio-inline" style="margin-left: 15px; margin-top: 7px;">
                <input type="radio" name="KPS" value="Ya"> Ya
                &nbsp;&nbsp;
                <input type="radio" name="KPS" value="Tidak"> Tidak
                <br>
                <span class="warning"><?php echo $error_KPS;?></span>
              </div>
            </div>
            <!-- Nomor KPS -->
            <div class="form-group row">
              <label for="nomor_KPS" class="col-sm-3 col-form-label">Nomor KPS</label>
              <div class="col-sm-5">
                <input type="text" name="nomor_KPS" class="form-control <?php echo ($error_nomor_KPS !="" ? "is-invalid" : ""); ?>" id="nomor_KPS" placeholder="Nomor KPS" value="<?php echo $nomor_KPS;?>"><span class="warning"><?php echo $error_nomor_KPS; ?></span>
              </div>
            </div>
            <!-- Kewarganegaraan -->
            <div class="form-group row">
              <label for="kwn" class="col-sm-3 col-form-label">Kewarganegaraan</label>
              <div class="col-sm-5">
                <input type="text" name="kwn" class="form-control" <?php echo ($error_kwn !="" ? "is-invalid" : ""); ?> id="kwn" placeholder="Kewarganegaraan" value="<?php echo $kwn;?>"><span class="warning"><?php echo $error_kwn; ?></span>
              </div>
            </div>
            <!-- Button Sign In -->
            <div class="form-group row">
              <div class="col-sm-5">
                <button type="submit" class="btn btn-primary">SUBMIT</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>
</html>