<?php  

echo "###################################################\n";
echo "#                Coded By Micin                   #\n";
echo "#              Manusia Biasa Team                 #\n";
echo "###################################################\n";
echo "1.  base64 > gzdeflate \n";
echo "2.  base64 > str_rot13 > gzdeflate\n";
echo "3.  str_rot13 > base64_encode > gzdeflate\n";
echo "4.  str_rot13 > base64_encode > base64_encode > gzdeflate\n";
echo "5.  base64_encode > gzcompress\n";
echo "6.  base64_encode > str_rot13 > gzcompress\n";
echo "7.  str_rot13 > base64_encode > gzcompress\n";
echo "8.  base64_encode\n";
echo "9.  base64_encode > gzdeflate > str_rot13\n";
echo "10. str_rot13 > strrev > base64_encode > gzdeflate\n";
echo "11. strrev > base64_encode > gzdeflate\n";
echo "12. str_rot13 > base64_encode > gzdeflate\n";
echo "13. strrev > str_rot13 > base64_encode > gzdeflate\n";
echo "14. base64_encode > gzcompress > base64_encode\n";
echo "15. rawurlencode > base64_encode > gzdeflate\n";
echo "16. base64_encode > str_rot13 > gzdeflate > str_rot13\n";
echo "Pilih : ";
$pil = trim(fgets(STDIN));
	if ($pil == '1') {
		echo "File : ";
		$dir = trim(fgets(STDIN));
		$namafile = file_get_contents($dir);
		$data = base64_encode(gzdeflate($namafile));
		echo "Save dengan nama default?? [y/n] : ";
		$cho = trim(fgets(STDIN));
		if ($cho == "y") {
			$file = fopen("1.txt", "w");
			fwrite($file, $data);
			fclose($file);
			echo "File Saved!!!\n";
		} else {
			echo "Nama : ";
			$name = trim(fgets(STDIN));
			$file = fopen($name, "w");
			fwrite($file, $data);
			fclose($file);
			echo "File Saved!!!\n";
		}
	} if ($pil == '2') {
		echo "File : ";
		$dir = trim(fgets(STDIN));
		$namafile = file_get_contents($dir);
		$data = base64_encode(str_rot13(gzdeflate($namafile)));
		echo "Save dengan nama default?? [y/n] : ";
		$cho = trim(fgets(STDIN));
		if ($cho == 'y') {
			$file = fopen("2.txt", "w");
			fwrite($file, $data);
			fclose($file);
			echo "File Saved!!!\n";
		} else {
			echo "Nama : ";
			$name = trim(fgets(STDIN));
			$file = fopen($name, "w");
			fwrite($file, $data);
			fclose($file);
			echo "File Saved!!!\n";
		}
	} if ($pil == '3') {
		echo "File : ";
		$dir = trim(fgets(STDIN));
		$namafile = file_get_contents($dir);
		$data = str_rot13(base64_encode(gzdeflate($namafile)));
		echo "Save dengan nama default?? [y/n] : ";
		$cho = trim(fgets(STDIN));
		if ($cho == 'y') {
			$file = fopen("3.txt", "w");
			fwrite($file, $data);
			fclose($file);
			echo "File Saved!!!\n";
		} else {
			echo "Nama : ";
			$name = trim(fgets(STDIN));
			$file = fopen($name, "w");
			fwrite($file, $data);
			fclose($file);
			echo "File Saved!!!\n";
		}
	} if ($pil == '4') {
		echo "File : ";
		$dir = trim(fgets(STDIN));
		$namafile = file_get_contents($dir);
		$data = str_rot13(base64_encode(base64_encode(gzdeflate($namafile))));
		echo "Save dengan nama default?? [y/n] : ";
		$cho = trim(fgets(STDIN));
		if ($cho == 'y') {
			$file = fopen("4.txt", "w");
			fwrite($file, $data);
			fclose($file);
			echo "File Saved!!!\n";
		} else {
			echo "Nama : ";
			$name = trim(fgets(STDIN));
			$file = fopen($name, "w");
			fwrite($file, $data);
			fclose($file);
			echo "File Saved!!!\n";
		}
	} if ($pil == '5') {
		echo "File : ";
		$dir = trim(fgets(STDIN));
		$namafile = file_get_contents($dir);
		$data = base64_encode(gzcompress($namafile));
		echo "Save dengan nama default?? [y/n] : ";
		$cho = trim(fgets(STDIN));
		if ($cho == 'y') {
			$file = fopen("5.txt", "w");
			fwrite($file, $data);
			fclose($file);
			echo "File Saved!!!\n";
		} else {
			echo "Nama : ";
			$name = trim(fgets(STDIN));
			$file = fopen($name, "w");
			fwrite($file, $data);
			fclose($file);
			echo "File Saved!!!\n";
		}
	} if ($pil == '6') {
		echo "File : ";
		$dir = trim(fgets(STDIN));
		$namafile = file_get_contents($dir);
		$data = base64_encode(str_rot13(gzcompress($namafile)));
		echo "Save dengan nama default?? [y/n] : ";
		$cho = trim(fgets(STDIN));
		if ($cho == 'y') {
			$file = fopen("6.txt", "w");
			fwrite($file, $data);
			fclose($file);
			echo "File Saved!!!\n";
		} else {
			echo "Nama : ";
			$name = trim(fgets(STDIN));
			$file = fopen($name, "w");
			fwrite($file, $data);
			fclose($file);
			echo "File Saved!!!\n";
		}
	} if ($pil == '7') {
		echo "File : ";
		$dir = trim(fgets(STDIN));
		$namafile = file_get_contents($dir);
		$data = str_rot13(base64_encode(gzcompress($namafile)));
		echo "Save dengan nama default?? [y/n] : ";
		$cho = trim(fgets(STDIN));
		if ($cho == 'y') {
			$file = fopen("7.txt", "w");
			fwrite($file, $data);
			fclose($file);
			echo "File Saved!!!\n";
		} else {
			echo "Nama : ";
			$name = trim(fgets(STDIN));
			$file = fopen($name, "w");
			fwrite($file, $data);
			fclose($file);
			echo "File Saved!!!\n";
		}
	} if ($pil == '8') {
		echo "File : ";
		$dir = trim(fgets(STDIN));
		$namafile = file_get_contents($dir);
		$data = base64_encode($namafile);
		echo "Save dengan nama default?? [y/n] : ";
		$cho = trim(fgets(STDIN));
		if ($cho == 'y') {
			$file = fopen("8.txt", "w");
			fwrite($file, $data);
			fclose($file);
			echo "File Saved!!!\n";
		} else {
			echo "Nama : ";
			$name = trim(fgets(STDIN));
			$file = fopen($name, "w");
			fwrite($file, $data);
			fclose($file);
			echo "File Saved!!!\n";
		}
	} if ($pil == '9') {
		echo "File : ";
		$dir = trim(fgets(STDIN));
		$namafile = file_get_contents($dir);
		$data = base64_encode(gzdeflate(str_rot13($namafile)));
		echo "Save dengan nama default?? [y/n] : ";
		$cho = trim(fgets(STDIN));
		if ($cho == 'y') {
			$file = fopen("9.txt", "w");
			fwrite($file, $data);
			fclose($file);
			echo "File Saved!!!\n";
		} else {
			echo "Nama : ";
			$name = trim(fgets(STDIN));
			$file = fopen($name, "w");
			fwrite($file, $data);
			fclose($file);
			echo "File Saved!!!\n";
		}
	} if ($pil == '10') {
		echo "File : ";
		$dir = trim(fgets(STDIN));
		$namafile = file_get_contents($dir);
		$data = str_rot13(strrev(base64_encode(gzdeflate($namafile))));
		echo "Save dengan nama default?? [y/n] : ";
		$cho = trim(fgets(STDIN));
		if ($cho == 'y') {
			$file = fopen("10.txt", "w");
			fwrite($file, $data);
			fclose($file);
			echo "File Saved!!!\n";
		} else {
			echo "Nama : ";
			$name = trim(fgets(STDIN));
			$file = fopen($name, "w");
			fwrite($file, $data);
			fclose($file);
			echo "File Saved!!!\n";
		}
	} if ($pil == '11') {
		echo "File : ";
		$dir = trim(fgets(STDIN));
		$namafile = file_get_contents($dir);
		$data = strrev(base64_encode(gzdeflate($namafile)));
		echo "Save dengan nama default?? [y/n] : ";
		$cho = trim(fgets(STDIN));
		if ($cho == 'y') {
			$file = fopen("11.txt", "w");
			fwrite($file, $data);
			fclose($file);
			echo "File Saved!!!\n";
		} else {
			echo "Nama : ";
			$name = trim(fgets(STDIN));
			$file = fopen($name, "w");
			fwrite($file, $data);
			fclose($file);
			echo "File Saved!!!\n";
		}
	} if ($pil == '12') {
		echo "File : ";
		$dir = trim(fgets(STDIN));
		$namafile = file_get_contents($dir);
		$data = str_rot13(base64_encode(gzdeflate($namafile)));
		echo "Save dengan nama default?? [y/n] : ";
		$cho = trim(fgets(STDIN));
		if ($cho == 'y') {
			$file = fopen("12.txt", "w");
			fwrite($file, $data);
			fclose($file);
			echo "File Saved!!!\n";
		} else {
			echo "Nama : ";
			$name = trim(fgets(STDIN));
			$file = fopen($name, "w");
			fwrite($file, $data);
			fclose($file);
			echo "File Saved!!!\n";
		}
	} if ($pil == '13') {
		echo "File : ";
		$dir = trim(fgets(STDIN));
		$namafile = file_get_contents($dir);
		$data = strrev(str_rot13(base64_encode(gzdeflate($namafile))));
		echo "Save dengan nama default?? [y/n] : ";
		$cho = trim(fgets(STDIN));
		if ($cho == 'y') {
			$file = fopen("13.txt", "w");
			fwrite($file, $data);
			fclose($file);
			echo "File Saved!!!\n";
		} else {
			echo "Nama : ";
			$name = trim(fgets(STDIN));
			$file = fopen($name, "w");
			fwrite($file, $data);
			fclose($file);
			echo "File Saved!!!\n";
		}
	} if ($pil == '14') {
		echo "File : ";
		$dir = trim(fgets(STDIN));
		$namafile = file_get_contents($dir);
		$data = base64_encode(gzcompress(base64_encode($namafile)));
		echo "Save dengan nama default?? [y/n] : ";
		$cho = trim(fgets(STDIN));
		if ($cho == 'y') {
			$file = fopen("14.txt", "w");
			fwrite($file, $data);
			fclose($file);
			echo "File Saved!!!\n";
		} else {
			echo "Nama : ";
			$name = trim(fgets(STDIN));
			$file = fopen($name, "w");
			fwrite($file, $data);
			fclose($file);
			echo "File Saved!!!\n";
		}
	} if ($pil == '15') {
		echo "File : ";
		$dir = trim(fgets(STDIN));
		$namafile = file_get_contents($dir);
		$data = rawurlencode(base64_encode(gzdeflate($namafile)));
		echo "Save dengan nama default?? [y/n] : ";
		$cho = trim(fgets(STDIN));
		if ($cho == 'y') {
			$file = fopen("15.txt", "w");
			fwrite($file, $data);
			fclose($file);
			echo "File Saved!!!\n";
		} else {
			echo "Nama : ";
			$name = trim(fgets(STDIN));
			$file = fopen($name, "w");
			fwrite($file, $data);
			fclose($file);
			echo "File Saved!!!\n";
		}
	} if ($pil == '16') {
		echo "File : ";
		$dir = trim(fgets(STDIN));
		$namafile = file_get_contents($dir);
		$data = base64_encode(str_rot13(gzdeflate(str_rot13($namafile))));
		echo "Save dengan nama default?? [y/n] : ";
		$cho = trim(fgets(STDIN));
		if ($cho == 'y') {
			$file = fopen("16.txt", "w");
			fwrite($file, $data);
			fclose($file);
			echo "File Saved!!!\n";
		} else {
			echo "Nama : ";
			$name = trim(fgets(STDIN));
			$file = fopen($name, "w");
			fwrite($file, $data);
			fclose($file);
			echo "File Saved!!!\n";
		}
	} else {
		echo "Yee kntl ketik yang bener anjg\n";
	}

?>