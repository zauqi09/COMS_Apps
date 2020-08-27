<?php
session_start();
include '../lib/db/dbconfig.php';
if (isset($_POST['login'])) {

	if (empty($_POST['email'])  || empty($_POST['pwd'])) {
		echo "<script>alert('Kolom tidak boleh kosong!'); window.location=('../home');</script>";
	} else {
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$pwd = sha1(mysqli_escape_string($conn, $_POST['pwd']));

		$sql = "SELECT * FROM user WHERE email_user='$email' AND pwd_user='$pwd'";
		$query = $conn->query($sql);
		$hitung = $query->num_rows;
		
		if ($hitung!==0) {
			$ambil = $query->fetch_assoc();
			extract($ambil);
			$_SESSION['admin'] = "$email";
			$_SESSION['name'] = "$name_user";
			$_SESSION['id'] = "$id_user";
			header("location:../home");
		}else{
			header("location:../login&log=2");
		}
	}
} elseif (isset($_GET['logout'])) {
	session_destroy();
	header("location:../home");
}
elseif (isset($_SESSION['admin'])) {
	// Tambahh stasiun
	if (isset($_POST['register'])) {
		$id = "NULL";
		$email = mysqli_real_escape_string($conn, $_POST['email_user']);
		$pwd = sha1(mysqli_real_escape_string($conn, $_POST['pwd_user']));
		$name = mysqli_real_escape_string($conn, $_POST['name_user']);
		$type = mysqli_real_escape_string($conn, $_POST['type']);
		if (!empty($email) || !empty($name) || !empty($pwd)) {
			$sql = "INSERT INTO user (id_user,
				email_user,
				pwd_user,
				name_user, type) VALUES (?, ?, ?, ?, ?)";
			if ($statement = $conn->prepare($sql)) {
				$statement->bind_param(
					"isssi", $id, $email, $pwd, $name, $type);
				if ($statement->execute()) {
					header("location:../manage_user&st=1");
				} else {
					header("location:../manage_user&st=2");
				}
			} else {
				header("location:../manage_user&st=2");
			}
		} else {
			header("location:../manage_user&st=3");
		}
	}
	elseif (isset($_POST['add_update'])) {
		$id = "NULL";
		$dt = mysqli_real_escape_string($conn, $_POST['dt']);
		$pid = mysqli_real_escape_string($conn, $_POST['pid']);
		$pekerjaan = mysqli_real_escape_string($conn, $_POST['pekerjaan']);
		$nilaiawal = mysqli_real_escape_string($conn, $_POST['nilaiawal']);
		$nilaitambah = mysqli_real_escape_string($conn, $_POST['nilaitambah']);
		$nilaitotal = $nilaiawal+$nilaitambah;
		$alasan = mysqli_real_escape_string($conn,$_POST['alasan']);
		$kategori = mysqli_real_escape_string($conn,$_POST['kategori']);
		$pengaju = mysqli_real_escape_string($conn,$_POST['pengaju']);
		$jabatan1 = mysqli_real_escape_string($conn,$_POST['jabatan1']);
		$setuju= mysqli_real_escape_string($conn,$_POST['setuju']);
		$jabatan2 = mysqli_real_escape_string($conn,$_POST['jabatan2']);
		$lampiran = basename($_FILES["lampiran"]["name"]);
		$targetDir = "upload/";
		$status1 = "Butuh Approval";
		$status2 = "Butuh Approval";
		$status3 = "Butuh Approval";
		$print1 = "Butuh Approval";
		$print2 = "Butuh Approval";
		$print3 = "Butuh Approval";
		$allowTypes = array('xls','xlsx','pdf');
		$targetFilePath = $targetDir . $lampiran;
  		$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
  		if(in_array($fileType, $allowTypes)){
  			if(move_uploaded_file($_FILES["lampiran"]["tmp_name"], $targetFilePath)){
				if (!empty($id) || !empty($dt) || !empty($pid) || !empty($pekerjaan) || !empty($nilaiawal) || !empty($lampiran)|| !empty($nilaitambah) || !empty($nilaitotal)|| !empty($pengaju)|| !empty($jabatan1)|| !empty($setuju)|| !empty($jabatan2)) {
					$sql = "INSERT INTO update_boq (id, dt, pid, pekerjaan, nilaiawal, nilaitambah, nilaitotal, alasan, kategori, pengaju, jabatan1, setuju, jabatan2, lampiran, status1, status2, status3, print1, print2, print3) VALUES (?, ?, ?, ?, ?, ?, ?, ? ,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
					if ($statement = $conn->prepare($sql)) {
						$statement->bind_param(
							"isssiiisssssssssssss", $id, $dt, $pid, $pekerjaan, $nilaiawal, $nilaitambah, $nilaitotal, $alasan, $kategori, $pengaju, $jabatan1, $setuju, $jabatan2, $lampiran, $status1, $status2, $status3, $print1, $print2, $print3);
						if ($statement->execute()) {
							header("location:../change&st=1");
						} else {
							header("location:../change&st=2");
						}
					} else {
						header("location:../change&st=2");
					}
				} else {
					header("location:../change&st=3");
				}
			}
		}
	}
	elseif (isset($_POST['edit_return'])) {
		$id = mysqli_real_escape_string($conn, $_POST['id']);
		$dt = mysqli_real_escape_string($conn, $_POST['dt']);
		$pid = mysqli_real_escape_string($conn, $_POST['pid']);
		$pekerjaan = mysqli_real_escape_string($conn, $_POST['pekerjaan']);
		$nilaiawal = mysqli_real_escape_string($conn, $_POST['nilaiawal']);
		$nilaitambah = mysqli_real_escape_string($conn, $_POST['nilaitambah']);
		$nilaitotal = $nilaiawal+$nilaitambah;
		$alasan = mysqli_real_escape_string($conn,$_POST['alasan']);
		$kategori = mysqli_real_escape_string($conn,$_POST['kategori']);
		$pengaju = mysqli_real_escape_string($conn,$_POST['pengaju']);
		$jabatan1 = mysqli_real_escape_string($conn,$_POST['jabatan1']);
		$setuju= mysqli_real_escape_string($conn,$_POST['setuju']);
		$jabatan2 = mysqli_real_escape_string($conn,$_POST['jabatan2']);
		$lampiran = basename($_FILES["lampiran"]["name"]);
		$targetDir = "upload/";
		$allowTypes = array('xls','xlsx','pdf');
		$targetFilePath = $targetDir . $lampiran;
  		$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
  		if(in_array($fileType, $allowTypes)){
  			if(move_uploaded_file($_FILES["lampiran"]["tmp_name"], $targetFilePath)){
				if (!empty($id) || !empty($dt) || !empty($pid) || !empty($pekerjaan) || !empty($nilaiawal) || !empty($lampiran)|| !empty($nilaitambah) || !empty($nilaitotal)|| !empty($pengaju)|| !empty($jabatan1)|| !empty($setuju)|| !empty($jabatan2)) {
					$sql = "UPDATE update_boq SET dt=?, pid=?, pekerjaan=?, nilaiawal=?, nilaitambah=?, nilaitotal=?, alasan=?, kategori=?, pengaju=?, jabatan1=?, setuju=?, jabatan2=?, lampiran=? WHERE id='$id'";
					if ($statement = $conn->prepare($sql)) {
						$statement->bind_param(
							"sssiiisssssss",  $dt, $pid, $pekerjaan, $nilaiawal, $nilaitambah, $nilaitotal, $alasan, $kategori, $pengaju, $jabatan1, $setuju, $jabatan2, $lampiran);
						if ($statement->execute()) {
							header("location:../returned&st=1");
						} else {
							header("location:../returned&st=2");
						}
					} else {
						header("location:../returned&st=2");
					}
				} else {
					header("location:../returned&st=3");
				}
			}
		}
	}
	elseif (isset($_POST['reorder_return'])) {
		$id = mysqli_real_escape_string($conn, $_POST['id']);
		$status = "Butuh Approval";
		$print = "Butuh Approval";
  		$sql = "UPDATE update_boq SET status1=?,print1=?,status2=?,print2=?,status3=?,print3=? WHERE id='$id'";
			if ($statement = $conn->prepare($sql)) {
				$statement->bind_param(
					"ssssss", $status,$print,$status,$print,$status,$print);
				if ($statement->execute()) {
				header("location:../returned&st=1");
			} else {
				header("location:../returned&st=2");
			}
	}

	}elseif (isset($_POST['edit_user'])) {
		$id_user = mysqli_real_escape_string($conn, $_POST['id_user']);
		$email = mysqli_real_escape_string($conn, $_POST['email_user']);
		$name = mysqli_real_escape_string($conn, $_POST['name_user']);
		if (!empty($id_user) || !empty($email)) {
			$sql = "UPDATE user SET  email_user=?, name_user=? WHERE id_user='$id_user'";
			if ($statement = $conn->prepare($sql)) {
				$statement->bind_param(
					"ss", $email, $name);
				if ($statement->execute()) {
					header("location:../manage_user&st=1");
				} else {
					header("location:../manage_user&st=2");
				}
			} else {
				header("location:../manage_user&st=2");
			}
		} else {
			header("location:../manage_user&st=3");
		}
	}
	elseif (isset($_POST['del_user'])) {
		$id_user = mysqli_real_escape_string($conn, $_POST['id_user']);
		$sql = "DELETE FROM user WHERE id_user=?";
		$delete = $conn->prepare($sql);
		$delete->bind_param("i", $id_user);
		if ($delete->execute()) {
			header("location:../manage_user&st=1");
		} else {
			header("location:../manage_user&st=2");
		}
	}
	
	
	//ubah katasandi
	elseif (isset($_GET['change-pwd'])) {
		$old = mysqli_real_escape_string($conn, $_POST['old-pwd']);
		$new = mysqli_real_escape_string($conn, $_POST['new-pwd']);
		$cek = mysqli_real_escape_string($conn, $_POST['cek-new-pwd']);
		$sql = "SELECT*FROM user WHERE id_user='$_SESSION[id]'";
		$query = $conn->query($sql);
		$get = $query->fetch_assoc();
		if (!empty($old) && !empty($new) && !empty($cek)) {
			if ($get['pwd_user'] !== sha1($old)) {
				header("location:../katasandi&st=3");
			} else {
				if ($new !== "$cek") {
					header("location: ../katasandi&st=4");
				} else {
					$sql_in = "UPDATE user SET pwd_user = ? WHERE id_user='$_SESSION[id]'";
					if ($stmt = $conn->prepare($sql_in)) {
						$pwd_true = sha1($new);
						$stmt->bind_param("s", $pwd_true);
						if ($stmt->execute()) {
							header("location:../katasandi&st=1");
						} else {
							header("location:../katasandi&st=2");
						}
					} else {
						header("location:../katasandi&st=2");
					}
				}
			}
		} else {
			header("location:../katasandi&st=5");
		}
	}elseif (isset($_POST['reject'])) {
		$time = mysqli_real_escape_string($conn, $_POST['time']);
		$date = mysqli_real_escape_string($conn, $_POST['date']);
		$print = "Rejected (".$date." ".$time.")";
		$status = "Rejected";
		$type = mysqli_real_escape_string($conn, $_POST['type']);
		$id = mysqli_real_escape_string($conn, $_POST['id']);
		if ($type==2) {
				$sql = "UPDATE update_boq SET status1=?,print1=?,status2=?,print2=?,status3=?,print3=? WHERE id='$id' and status2='Butuh Approval' and status3='Butuh Approval'";
				if ($statement = $conn->prepare($sql)) {
					$statement->bind_param(
						"ssssss", $status,$print,$status,$print,$status,$print);
					if ($statement->execute()) {
					header("location:../list_order&st=4");
				} else {
					header("location:../list_order&st=5");
				}
			} else {
				header("location:../list_order&st=5");
			}
		} elseif ($type==3){
				$sql = "UPDATE update_boq SET status2=?, print2=?,status3=?, print3=? WHERE id='$id' and status1='OK' and status3='Butuh Approval'";
				if ($statement = $conn->prepare($sql)) {
					$statement->bind_param(
						"ssss", $status,$print,$status,$print);
					if ($statement->execute()) {
					header("location:../list_order&st=4");
					} else {
					header("location:../list_order&st=5");
				}
			} else {
				header("location:../list_order&st=5");
			}
		}elseif ($type==5) {
				$sql = "UPDATE update_boq SET status3=?, print3=? WHERE id='$id' and status2='OK' and status1='OK'";
				if ($statement = $conn->prepare($sql)) {
					$statement->bind_param(
						"ss", $status,$print);
					if ($statement->execute()) {
					header("location:../list_order&st=3");
				} else {
					header("location:../list_order&st=5");
				}
			} else {
				header("location:../list_order&st=5");
			}
		}
	}
	elseif (isset($_POST['return'])) {
		$time = mysqli_real_escape_string($conn, $_POST['time']);
		$date = mysqli_real_escape_string($conn, $_POST['date']);
		$print = "Returned (".$date." ".$time.")";
		$status = "Returned";
		$type = mysqli_real_escape_string($conn, $_POST['type']);
		$id = mysqli_real_escape_string($conn, $_POST['id']);
		if ($type==2) {
				$sql = "UPDATE update_boq SET status1=?,print1=?,status2=?,print2=?,status3=?,print3=? WHERE id='$id' and status2='Butuh Approval' and status3='Butuh Approval'";
				if ($statement = $conn->prepare($sql)) {
					$statement->bind_param(
						"ssssss", $status,$print,$status,$print,$status,$print);
					if ($statement->execute()) {
					header("location:../list_order&st=4");
				} else {
					header("location:../list_order&st=5");
				}
			} else {
				header("location:../list_order&st=5");
			}
		} elseif ($type==3){
				$sql = "UPDATE update_boq SET status2=?, print2=?,status3=?, print3=? WHERE id='$id' and status1='OK' and status3='Butuh Approval'";
				if ($statement = $conn->prepare($sql)) {
					$statement->bind_param(
						"ssss", $status,$print,$status,$print);
					if ($statement->execute()) {
					header("location:../list_order&st=4");
					} else {
					header("location:../list_order&st=5");
				}
			} else {
				header("location:../list_order&st=5");
			}
		}elseif ($type==5) {
				$sql = "UPDATE update_boq SET status3=?, print3=? WHERE id='$id' and status2='OK' and status1='OK'";
				if ($statement = $conn->prepare($sql)) {
					$statement->bind_param(
						"ss", $status,$print);
					if ($statement->execute()) {
					header("location:../list_order&st=4");
				} else {
					header("location:../list_order&st=5");
				}
			} else {
				header("location:../list_order&st=5");
			}
		}
	}elseif (isset($_POST['setujui'])) {
		$time = mysqli_real_escape_string($conn, $_POST['time']);
		$date = mysqli_real_escape_string($conn, $_POST['date']);
		$print = "Aprroved (".$date." ".$time.")";
		$status = "OK";
		$type = mysqli_real_escape_string($conn, $_POST['type']);
		$id = mysqli_real_escape_string($conn, $_POST['id']);
		if ($type==2) {
				$sql = "UPDATE update_boq SET status1=?,print1=? WHERE id='$id' and status2='Butuh Approval' and status3='Butuh Approval'";
				if ($statement = $conn->prepare($sql)) {
					$statement->bind_param(
						"ss", $status,$print);
					if ($statement->execute()) {
					header("location:../list_order&st=1");
				} else {
					header("location:../list_order&st=2");
				}
			} else {
				header("location:../list_order");
			}
		} elseif ($type==3){
				$sql = "UPDATE update_boq SET status2=?, print2=? WHERE id='$id' and status1='OK' and status3='Butuh Approval'";
				if ($statement = $conn->prepare($sql)) {
					$statement->bind_param(
						"ss", $status,$print);
					if ($statement->execute()) {
					header("location:../list_order&st=1");
					} else {
					header("location:../list_order&st=2");
				}
			} else {
				header("location:../list_order&st=2");
			}
		}elseif ($type==5) {
				$sql = "UPDATE update_boq SET status3=?, print3=? WHERE id='$id' and status2='OK' and status1='OK'";
				if ($statement = $conn->prepare($sql)) {
					$statement->bind_param(
						"ss", $status,$print);
					if ($statement->execute()) {
					header("location:../list_order&st=1");
				} else {
					header("location:../list_order&st=2");
				}
			} else {
				header("location:../list_order&st=2");
			}
		}

	}
	 
}
else {
	
	echo "<script>alert('Silahkan login terlebih dahulu!'); window.location=('../home');</script>";
}
?>