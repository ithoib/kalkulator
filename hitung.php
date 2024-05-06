<?php 
include 'f.php';
$a = isset($_GET['a']) ? trim($_GET['a']) : '';
$b = isset($_GET['b']) ? trim($_GET['b']) : '';
$k = '';
if(!empty($a) && !empty($b)){
	if($a==2 && $b==10){
		//Biner to Desimal
		$k 		= 1;
		$h2 	= 'Konversi Bilangan Biner ke Desimal';
		$form 	= 
		'<form method="post" action="">'.
			'<input type="text" name="from" placeholder="Masukkan Bilangan Biner" aria-label="from" class="bt">'.
			'<button type="submit" class="bu">Konversi</button>'.
		'</form>';
		$val 	= array('0','1');
		$pesan	= 'Bilangan yang Anda masukkan bukan bilangan Biner';
	} elseif ($a==8 && $b==10){
		//Oktal to Desimal
		$k 		= 2;
		$h2 	= 'Konversi Bilangan Oktal ke Desimal';
		$form 	= 
		'<form method="post" action="">'.
			'<input type="text" name="from" placeholder="Masukkan Bilangan Oktal" aria-label="from" class="bt">'.
			'<button type="submit" class="bu">Konversi</button>'.
		'</form>';
		$val 	= array('0','1','2','3','4','5','6','7');
		$pesan	= 'Bilangan yang Anda masukkan bukan bilangan Oktal';
	} elseif ($a==16 && $b==10){
		//Heksadesimal to Desimal
		$k 		= 3;
		$h2 	= 'Konversi Bilangan Heksadesimal ke Desimal';
		$form 	= 
		'<form method="post" action="">'.
			'<input type="text" name="from" placeholder="Masukkan Bilangan Heksadesimal" aria-label="from" class="bt">'.
			'<button type="submit" class="bu">Konversi</button>'.
		'</form>';
		$val 	= array('0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F');
		$pesan	= 'Bilangan yang Anda masukkan bukan bilangan Heksadesimal';
	} elseif ($a==10 && $b==2){
		//Desimal to Biner
		$k 		= 4;
		$h2 	= 'Konversi Bilangan Desimal ke Biner';
		$form 	= 
		'<form method="post" action="">'.
			'<input type="text" name="from" placeholder="Masukkan Bilangan Desimal" aria-label="from" class="bt">'.
			'<button type="submit" class="bu">Konversi</button>'.
		'</form>';
		$val 	= array('0','1','2','3','4','5','6','7','8','9');
		$pesan	= 'Bilangan yang Anda masukkan bukan bilangan Desimal';
	} elseif ($a==10 && $b==8){
		//Desimal to Oktal
		$k 		= 5;
		$h2 	= 'Konversi Bilangan Desimal ke Oktal';
		$form 	= 
		'<form method="post" action="">'.
			'<input type="text" name="from" placeholder="Masukkan Bilangan Desimal" aria-label="from" class="bt">'.
			'<button type="submit" class="bu">Konversi</button>'.
		'</form>';
		$val 	= array('0','1','2','3','4','5','6','7','8','9');
		$pesan	= 'Bilangan yang Anda masukkan bukan bilangan Desimal';
	} elseif ($a==10 && $b==16){
		//Desimal to Heksadesimal
		$k 		= 6;
		$h2 	= 'Konversi Bilangan Desimal ke Heksadesimal';
		$form 	= 
		'<form method="post" action="">'.
			'<input type="text" name="from" placeholder="Masukkan Bilangan Desimal" aria-label="from" class="bt">'.
			'<button type="submit" class="bu">Konversi</button>'.
		'</form>';
		$val 	= array('0','1','2','3','4','5','6','7','8','9');
		$pesan	= 'Bilangan yang Anda masukkan bukan bilangan Desimal';
	} elseif ($a==2 && $b==8){
		//Biner to Oktal
		$k 		= 7;
		$h2 	= 'Konversi Bilangan Biner ke Oktal';
		$form 	= 
		'<form method="post" action="">'.
			'<input type="text" name="from" placeholder="Masukkan Bilangan Biner" aria-label="from" class="bt">'.
			'<button type="submit" class="bu">Konversi</button>'.
		'</form>';
		$val 	= array('0','1');
		$pesan	= 'Bilangan yang Anda masukkan bukan bilangan Biner';
	} elseif ($a==2 && $b==16){
		//Biner to Heksadesimal
		$k 		= 8;
		$h2 	= 'Konversi Bilangan Biner ke Heksadesimal';
		$form 	= 
		'<form method="post" action="">'.
			'<input type="text" name="from" placeholder="Masukkan Bilangan Biner" aria-label="from" class="bt">'.
			'<button type="submit" class="bu">Konversi</button>'.
		'</form>';
		$val 	= array('0','1');
		$pesan	= 'Bilangan yang Anda masukkan bukan bilangan Biner';
	} elseif ($a==8 && $b==2){
		//Oktal to Biner
		$k 		= 9;
		$h2 	= 'Konversi Bilangan Oktal ke Biner';
		$form 	= 
		'<form method="post" action="">'.
			'<input type="text" name="from" placeholder="Masukkan Bilangan Oktal" aria-label="from" class="bt">'.
			'<button type="submit" class="bu">Konversi</button>'.
		'</form>';
		$val 	= array('0','1','2','3','4','5','6','7');
		$pesan	= 'Bilangan yang Anda masukkan bukan bilangan Oktal';
	} elseif ($a==8 && $b==16){
		//Oktal to Heksadesimal
		$k 		= 10;
		$h2 	= 'Konversi Bilangan Oktal ke Heksadesimal';
		$form 	= 
		'<form method="post" action="">'.
			'<input type="text" name="from" placeholder="Masukkan Bilangan Oktal" aria-label="from" class="bt">'.
			'<button type="submit" class="bu">Konversi</button>'.
		'</form>';
		$val 	= array('0','1','2','3','4','5','6','7');
		$pesan	= 'Bilangan yang Anda masukkan bukan bilangan Oktal';
	} elseif ($a==16 && $b==2){
		//Heksadesimal to Biner
		$k 		= 11;
		$h2 	= 'Konversi Bilangan Heksadesimal ke Biner';
		$form 	= 
		'<form method="post" action="">'.
			'<input type="text" name="from" placeholder="Masukkan Bilangan Heksadesimal" aria-label="from" class="bt">'.
			'<button type="submit" class="bu">Konversi</button>'.
		'</form>';
		$val 	= array('0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F');
		$pesan	= 'Bilangan yang Anda masukkan bukan bilangan Heksadesimal';
	} elseif ($a==16 && $b==8){
		//Heksadesimal to Oktal
		$k 		= 12;
		$h2 	= 'Konversi Bilangan Heksadesimal ke Oktal';
		$form 	= 
		'<form method="post" action="">'.
			'<input type="text" name="from" placeholder="Masukkan Bilangan Heksadesimal" aria-label="from" class="bt">'.
			'<button type="submit" class="bu">Konversi</button>'.
		'</form>';
		$val 	= array('0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F');
		$pesan	= 'Bilangan yang Anda masukkan bukan bilangan Heksadesimal';
	}

} 
include 'header.php';
echo
'<div class="b">'.
	'<h2>'.$h2.'</h2>'.
	$form;
	if(isset($_POST['from'])){
		$from 	= strtoupper($_POST['from']);
		$c1 	= str_split($from);
		$c2 	= array_unique($c1);
		$van 	= array();
		foreach($c2 as $ce){
			if(in_array($ce, $val)){
				$van[] = 0;
			} else {
				$van[] = 1;
			}
		}
		$vt = array_sum($van);
		if($vt>0){
			echo '<span class="bw">'.$pesan.'</span>';
		} else {
			if($k==1){
				//Biner to Desimal
				$i = count($c1);
				$kk = array();
				$kq = array();
				foreach($c1 as $cq){
					$i--;
					$n = $i;
					$ku = pow(2,$n);
					$kk[] = $cq.' x 2<sup>'.$n.'</sup>';
					$kq[] = $cq*$ku;
				}
				$hasil = array_sum($kq);
				echo '<span class="bh">'.$hasil.'</span>';
				echo '<div class="br">';
				echo '<h3>Cara Penyelesaian :</h3></p>';
				echo '<p><strong>'.$from.'</strong><sub>(2)</sub> = ................. <sub>(10)</sub></p>';
				echo '<p><strong>'.$from.'</strong><sub>(2)</sub> = '.implode(' + ', $kk).'</p>';
				echo '<p><strong>'.$from.'</strong><sub>(2)</sub> = '.implode(' + ', $kq).'</p>';
				echo '<p><strong>'.$from.'</strong><sub>(2)</sub> = '.$hasil.'<sub>(10)</sub></p>';
				echo '</div>';
			}
			if($k==2){
				//Oktal to Desimal
				$i = count($c1);
				$kk = array();
				$kq = array();
				foreach($c1 as $cq){
					$i--;
					$n = $i;
					$ku = pow(8,$n);
					$kk[] = $cq.' x 8<sup>'.$n.'</sup>';
					$kq[] = $cq*$ku;
				}
				$hasil = array_sum($kq);
				echo '<span class="bh">'.$hasil.'</span>';
				echo '<div class="br">';
				echo '<h3>Cara Penyelesaian :</h3></p>';
				echo '<p><strong>'.$from.'</strong><sub>(8)</sub> = ................. <sub>(10)</sub></p>';
				echo '<p><strong>'.$from.'</strong><sub>(8)</sub> = '.implode(' + ', $kk).'</p>';
				echo '<p><strong>'.$from.'</strong><sub>(8)</sub> = '.implode(' + ', $kq).'</p>';
				echo '<p><strong>'.$from.'</strong><sub>(8)</sub> = '.$hasil.'<sub>(10)</sub></p>';
				echo '</div>';
			}
			if($k==3){
				//Heksadesimal to Desimal
				$c1 = str_ireplace(array('A','B','C','D','E','F'), array(10,11,12,13,14,15), $c1);
				$i = count($c1);
				$kk = array();
				$kq = array();
				foreach($c1 as $cq){
					$i--;
					$n = $i;
					$ku = pow(16,$n);
					$kk[] = $cq.' x 16<sup>'.$n.'</sup>';
					$kq[] = $cq*$ku;
				}
				$hasil = array_sum($kq);
				echo '<span class="bh">'.$hasil.'</span>';
				echo '<div class="br">';
				echo '<h3>Cara Penyelesaian :</h3></p>';
				echo '<p><strong>'.$from.'</strong><sub>(16)</sub> = ................. <sub>(10)</sub></p>';
				echo '<p><strong>'.$from.'</strong><sub>(16)</sub> = '.implode(' + ', $kk).'</p>';
				echo '<p><strong>'.$from.'</strong><sub>(16)</sub> = '.implode(' + ', $kq).'</p>';
				echo '<p><strong>'.$from.'</strong><sub>(16)</sub> = '.$hasil.'<sub>(10)</sub></p>';
				echo '</div>';
			}
			if($k==4){
				//Desimal ke Biner
				$desimal = $from;
				$hasil = '';
				$kk = array();
				while($desimal>0){
					if ($desimal%2 == 0){
						$kk[] = $desimal.' &#247 2 = '.($desimal / 2).' sisa 0';
				 		$desimal /= 2;
				  		$hasil .= 0;
				  	} else {
				  		$kk[] = $desimal.' &#247 2 = '.(($desimal/2)-0.5).' sisa 1';
				  		$desimal = ($desimal/2)-0.5;
				  		$hasil .= 1;
				  	}
				  	$hasil_akhir = strrev($hasil);
				}
				echo '<span class="bh">'.$hasil_akhir.'</span>';
				echo '<div class="br">';
				echo '<h3>Cara Penyelesaian :</h3></p>';
				echo '<p><strong>'.$from.'</strong><sub>(10)</sub> = ................. <sub>(2)</sub></p>';
				echo implode('<br>', $kk);
				echo '<br><p><strong>'.$from.'</strong><sub>(10)</sub> = '.$hasil_akhir.'<sub>(2)</sub></p>';
				echo '</div>';
			}
			if($k==5){
				//Desimal ke Oktal
				$desimal = $from;
				$hasil = '';
				$kk = array();
				$i = 0;
				while($desimal>0){
					
					$bagi = floor($desimal/8);
					$sisa = $desimal%8 == 0  ? 0 : floor($desimal%8);
					$kk[] = floor($desimal).' &#247 8 = '.$bagi.' sisa '.$sisa;
					$desimal /= 8;
					$i++;
					$hasil .= $sisa;
					if($bagi<1) break;
				}
				$hasil_akhir = strrev($hasil);
				echo '<span class="bh">'.$hasil_akhir.'</span>';
				echo '<div class="br">';
				echo '<h3>Cara Penyelesaian :</h3></p>';
				echo '<p><strong>'.$from.'</strong><sub>(10)</sub> = ................. <sub>(8)</sub></p>';
				echo implode('<br>', $kk);
				echo '<br><p><strong>'.$from.'</strong><sub>(10)</sub> = '.$hasil_akhir.'<sub>(8)</sub></p>';
				echo '</div>';
			}
			if($k==6){
				//Desimal ke Heksadesimal
				$desimal = $from;
				$hasil = '';
				$kk = array();
				$i = 0;
				while($desimal>0){
					$bagi = floor($desimal/16);
					$sisa = $desimal%16 == 0  ? 0 : floor($desimal%16);
					$kk[] = floor($desimal).' &#247 16 = '.$bagi.' sisa '.$sisa.($sisa>9 ? ' ('.str_ireplace(array(10,11,12,13,14,15), array('A','B','C','D','E','F'), $sisa).')' : '');
					$desimal /= 16;
					$i++;
					$hasil .= str_ireplace(array(10,11,12,13,14,15), array('A','B','C','D','E','F'), $sisa);
					if($bagi<1) break;
				}
				$hasil_akhir = strrev($hasil);
				echo '<span class="bh">'.$hasil_akhir.'</span>';
				echo '<div class="br">';
				echo '<h3>Cara Penyelesaian :</h3></p>';
				echo '<p><strong>'.$from.'</strong><sub>(10)</sub> = ................. <sub>(16)</sub></p>';
				echo implode('<br>', $kk);
				echo '<br><p><strong>'.$from.'</strong><sub>(10)</sub> = '.$hasil_akhir.'<sub>(16)</sub></p>';
				echo '</div>';
			}
			if($k==7){
				//Biner to Oktal
				$i = count($c1);
				$kk = array();
				$kq = array();
				foreach($c1 as $cq){
					$i--;
					$n = $i;
					$ku = pow(2,$n);
					$kk[] = $cq.' x 2<sup>'.$n.'</sup>';
					$kq[] = $cq*$ku;
				}
				$hasil = array_sum($kq);
				$desimal = $hasil;
				$hx = '';
				$kx = array();
				$i = 0;
				while($desimal>0){
					
					$bagi = floor($desimal/8);
					$sisa = $desimal%8 == 0  ? 0 : floor($desimal%8);
					$kx[] = floor($desimal).' &#247 8 = '.$bagi.' sisa '.$sisa;
					$desimal /= 8;
					$i++;
					$hx .= $sisa;
					if($bagi<1) break;
				}
				$hasil_akhir = strrev($hx);
				echo '<span class="bh">'.$hasil_akhir.'</span>';
				echo '<div class="br">';
				echo '<h3>Cara Penyelesaian :</h3></p>';
				echo '<p><strong>'.$from.'</strong><sub>(2)</sub> = ................. <sub>(10)</sub></p>';
				echo '<p><strong>'.$from.'</strong><sub>(2)</sub> = '.implode(' + ', $kk).'</p>';
				echo '<p><strong>'.$from.'</strong><sub>(2)</sub> = '.implode(' + ', $kq).'</p>';
				echo '<p><strong>'.$from.'</strong><sub>(2)</sub> = '.$hasil.'<sub>(10)</sub></p>';
				echo '<p><strong>'.$hasil.'</strong><sub>(10)</sub> = ................. <sub>(8)</sub></p>';
				echo implode('<br>', $kx);
				echo '<br><p><strong>'.$from.'</strong><sub>(2)</sub> = '.$hasil_akhir.'<sub>(8)</sub></p>';
				echo '</div>';
			}
			if($k==8){
				//Biner to Heksadesimal
				$i = count($c1);
				$kk = array();
				$kq = array();
				foreach($c1 as $cq){
					$i--;
					$n = $i;
					$ku = pow(2,$n);
					$kk[] = $cq.' x 2<sup>'.$n.'</sup>';
					$kq[] = $cq*$ku;
				}
				$hasil = array_sum($kq);
				$desimal = $hasil;
				$hx = '';
				$kx = array();
				$i = 0;
				while($desimal>0){
					$bagi = floor($desimal/16);
					$sisa = $desimal%16 == 0  ? 0 : floor($desimal%16);
					$kx[] = floor($desimal).' &#247 16 = '.$bagi.' sisa '.$sisa.($sisa>9 ? ' ('.str_ireplace(array(10,11,12,13,14,15), array('A','B','C','D','E','F'), $sisa).')' : '');
					$desimal /= 16;
					$i++;
					$hx .= str_ireplace(array(10,11,12,13,14,15), array('A','B','C','D','E','F'), $sisa);
					if($bagi<1) break;
				}
				$hasil_akhir = strrev($hx);
				echo '<span class="bh">'.$hasil_akhir.'</span>';
				echo '<div class="br">';
				echo '<h3>Cara Penyelesaian :</h3></p>';
				echo '<p><strong>'.$from.'</strong><sub>(2)</sub> = ................. <sub>(10)</sub></p>';
				echo '<p><strong>'.$from.'</strong><sub>(2)</sub> = '.implode(' + ', $kk).'</p>';
				echo '<p><strong>'.$from.'</strong><sub>(2)</sub> = '.implode(' + ', $kq).'</p>';
				echo '<p><strong>'.$from.'</strong><sub>(2)</sub> = '.$hasil.'<sub>(10)</sub></p>';
				echo '<p><strong>'.$hasil.'</strong><sub>(10)</sub> = ................. <sub>(16)</sub></p>';
				echo implode('<br>', $kx);
				echo '<br><p><strong>'.$from.'</strong><sub>(2)</sub> = '.$hasil_akhir.'<sub>(16)</sub></p>';
				echo '</div>';
			}
			if($k==9){
				//Oktal to Biner
				$i = count($c1);
				$kk = array();
				$kq = array();
				foreach($c1 as $cq){
					$i--;
					$n = $i;
					$ku = pow(8,$n);
					$kk[] = $cq.' x 8<sup>'.$n.'</sup>';
					$kq[] = $cq*$ku;
				}
				$hasil = array_sum($kq);
				$desimal = $hasil;
				$hx = '';
				$kx = array();
				while($desimal>0){
					if ($desimal%2 == 0){
						$kx[] = $desimal.' &#247 2 = '.($desimal / 2).' sisa 0';
				 		$desimal /= 2;
				  		$hx .= 0;
				  	} else {
				  		$kx[] = $desimal.' &#247 2 = '.(($desimal/2)-0.5).' sisa 1';
				  		$desimal = ($desimal/2)-0.5;
				  		$hx .= 1;
				  	}
				  	$hasil_akhir = strrev($hx);
				}
				echo '<span class="bh">'.$hasil_akhir.'</span>';
				echo '<div class="br">';
				echo '<h3>Cara Penyelesaian :</h3></p>';
				echo '<p><strong>'.$from.'</strong><sub>(8)</sub> = ................. <sub>(10)</sub></p>';
				echo '<p><strong>'.$from.'</strong><sub>(8)</sub> = '.implode(' + ', $kk).'</p>';
				echo '<p><strong>'.$from.'</strong><sub>(8)</sub> = '.implode(' + ', $kq).'</p>';
				echo '<p><strong>'.$from.'</strong><sub>(8)</sub> = '.$hasil.'<sub>(10)</sub></p>';
				echo '<p><strong>'.$hasil.'</strong><sub>(10)</sub> = ................. <sub>(2)</sub></p>';
				echo implode('<br>', $kx);
				echo '<br><p><strong>'.$from.'</strong><sub>(8)</sub> = '.$hasil_akhir.'<sub>(2)</sub></p>';
				echo '</div>';
			}
			if($k==10){
				//Oktal to Heksadesimal
				$i = count($c1);
				$kk = array();
				$kq = array();
				foreach($c1 as $cq){
					$i--;
					$n = $i;
					$ku = pow(8,$n);
					$kk[] = $cq.' x 8<sup>'.$n.'</sup>';
					$kq[] = $cq*$ku;
				}
				$hasil = array_sum($kq);
				$desimal = $hasil;
				$hx = '';
				$kx = array();
				$i = 0;
				while($desimal>0){
					$bagi = floor($desimal/16);
					$sisa = $desimal%16 == 0  ? 0 : floor($desimal%16);
					$kx[] = floor($desimal).' &#247 16 = '.$bagi.' sisa '.$sisa.($sisa>9 ? ' ('.str_ireplace(array(10,11,12,13,14,15), array('A','B','C','D','E','F'), $sisa).')' : '');
					$desimal /= 16;
					$hx .= str_ireplace(array(10,11,12,13,14,15), array('A','B','C','D','E','F'), $sisa);
					$i++;
					if($bagi<1) break;
				}
				$hasil_akhir = strrev($hx);
				echo '<span class="bh">'.$hasil_akhir.'</span>';
				echo '<div class="br">';
				echo '<h3>Cara Penyelesaian :</h3></p>';
				echo '<p><strong>'.$from.'</strong><sub>(8)</sub> = ................. <sub>(10)</sub></p>';
				echo '<p><strong>'.$from.'</strong><sub>(8)</sub> = '.implode(' + ', $kk).'</p>';
				echo '<p><strong>'.$from.'</strong><sub>(8)</sub> = '.implode(' + ', $kq).'</p>';
				echo '<p><strong>'.$from.'</strong><sub>(8)</sub> = '.$hasil.'<sub>(10)</sub></p>';
				echo '<p><strong>'.$hasil.'</strong><sub>(10)</sub> = ................. <sub>(16)</sub></p>';
				echo implode('<br>', $kx);
				echo '<br><p><strong>'.$from.'</strong><sub>(8)</sub> = '.$hasil_akhir.'<sub>(16)</sub></p>';
				echo '</div>';
			}
			if($k==11){
				//Heksadesimal to Biner
				$c1 = str_ireplace(array('A','B','C','D','E','F'), array(10,11,12,13,14,15), $c1);
				$i = count($c1);
				$kk = array();
				$kq = array();
				foreach($c1 as $cq){
					$i--;
					$n = $i;
					$ku = pow(16,$n);
					$kk[] = $cq.' x 16<sup>'.$n.'</sup>';
					$kq[] = $cq*$ku;
				}
				$hasil = array_sum($kq);
				$desimal = $hasil;
				$hx = '';
				$kx = array();
				while($desimal>0){
					if ($desimal%2 == 0){
						$kx[] = $desimal.' &#247 2 = '.($desimal / 2).' sisa 0';
				 		$desimal /= 2;
				  		$hx .= 0;
				  	} else {
				  		$kx[] = $desimal.' &#247 2 = '.(($desimal/2)-0.5).' sisa 1';
				  		$desimal = ($desimal/2)-0.5;
				  		$hx .= 1;
				  	}
				  	$hasil_akhir = strrev($hx);
				}
				echo '<span class="bh">'.$hasil_akhir.'</span>';
				echo '<div class="br">';
				echo '<h3>Cara Penyelesaian :</h3></p>';
				echo '<p><strong>'.$from.'</strong><sub>(16)</sub> = ................. <sub>(10)</sub></p>';
				echo '<p><strong>'.$from.'</strong><sub>(16)</sub> = '.implode(' + ', $kk).'</p>';
				echo '<p><strong>'.$from.'</strong><sub>(16)</sub> = '.implode(' + ', $kq).'</p>';
				echo '<p><strong>'.$from.'</strong><sub>(16)</sub> = '.$hasil.'<sub>(10)</sub></p>';
				echo '<p><strong>'.$hasil.'</strong><sub>(10)</sub> = ................. <sub>(2)</sub></p>';
				echo implode('<br>', $kx);
				echo '<br><p><strong>'.$from.'</strong><sub>(16)</sub> = '.$hasil_akhir.'<sub>(2)</sub></p>';
				echo '</div>';
			}
			if($k==12){
				//Heksadesimal to Oktal
				$c1 = str_ireplace(array('A','B','C','D','E','F'), array(10,11,12,13,14,15), $c1);
				$i = count($c1);
				$kk = array();
				$kq = array();
				foreach($c1 as $cq){
					$i--;
					$n = $i;
					$ku = pow(16,$n);
					$kk[] = $cq.' x 16<sup>'.$n.'</sup>';
					$kq[] = $cq*$ku;
				}
				$hasil = array_sum($kq);
				$desimal = $hasil;
				$hx = '';
				$kx = array();
				$i = 0;
				while($desimal>0){
					
					$bagi = floor($desimal/8);
					$sisa = $desimal%8 == 0  ? 0 : floor($desimal%8);
					$kx[] = floor($desimal).' &#247 8 = '.$bagi.' sisa '.$sisa;
					$desimal /= 8;
					$i++;
					$hx .= $sisa;
					if($bagi<1) break;
				}
				$hasil_akhir = strrev($hx);
				echo '<span class="bh">'.$hasil_akhir.'</span>';
				echo '<div class="br">';
				echo '<h3>Cara Penyelesaian :</h3></p>';
				echo '<p><strong>'.$from.'</strong><sub>(16)</sub> = ................. <sub>(10)</sub></p>';
				echo '<p><strong>'.$from.'</strong><sub>(16)</sub> = '.implode(' + ', $kk).'</p>';
				echo '<p><strong>'.$from.'</strong><sub>(16)</sub> = '.implode(' + ', $kq).'</p>';
				echo '<p><strong>'.$from.'</strong><sub>(16)</sub> = '.$hasil.'<sub>(10)</sub></p>';
				echo '<p><strong>'.$hasil.'</strong><sub>(10)</sub> = ................. <sub>(8)</sub></p>';
				echo implode('<br>', $kx);
				echo '<br><p><strong>'.$from.'</strong><sub>(16)</sub> = '.$hasil_akhir.'<sub>(8)</sub></p>';
				echo '</div>';
			}
		}
	}
echo'</div>';
include 'footer.php';
?>