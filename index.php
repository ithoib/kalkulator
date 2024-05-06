<?php 
include 'header.php';
echo
'<div class="b">'.
	'<h2>Bilangan Biner</h2>'.
	'<p>Konversi bilangan Biner ke Oktal, Desimal & Heksadesimal</p>'.
	'<ul>'.
		'<li><a href="hitung.php?a=2&b=10">Biner ke Desimal</a></li>'.
		'<li><a href="hitung.php?a=2&b=8">Biner ke Oktal</a></li>'.
		'<li><a href="hitung.php?a=2&b=16">Biner ke Heksadesimal</a></li>'.
	'</ul>'.
	'<h2>Bilangan Oktal</h2>'.
	'<p>Konversi bilangan Oktal ke Biner, Desimal & Heksadesimal</p>'.
	'<ul>'.
		'<li><a href="hitung.php?a=8&b=2">Oktal ke Biner</a></li>'.
		'<li><a href="hitung.php?a=8&b=10">Oktal ke Desimal</a></li>'.
		'<li><a href="hitung.php?a=8&b=16">Oktal ke Heksadesimal</a></li>'.
	'</ul>'.
	'<h2>Bilangan Desimal</h2>'.
	'<p>Konversi bilangan Desimal ke Biner, Oktal & Heksadesimal</p>'.
	'<ul>'.
		'<li><a href="hitung.php?a=10&b=2">Desimal ke Biner</a></li>'.
		'<li><a href="hitung.php?a=10&b=8">Desimal ke Oktal</a></li>'.
		'<li><a href="hitung.php?a=10&b=16">Desimal ke Heksadesimal</a></li>'.
	'</ul>'.
	'<h2>Bilangan Heksadesimal</h2>'.
	'<p>Konversi bilangan Heksadesimal ke Biner, Oktal & Desimal</p>'.
	'<ul>'.
		'<li><a href="hitung.php?a=16&b=2">Heksadesimal ke Biner</a></li>'.
		'<li><a href="hitung.php?a=16&b=8">Heksadesimal ke Oktal</a></li>'.
		'<li><a href="hitung.php?a=16&b=10">Heksadesimal ke Desimal</a></li>'.
	'</ul>'.
'</div>';
include 'footer.php';
?>