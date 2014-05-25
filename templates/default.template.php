<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<meta name="author" content="Dogenes" />
	<link rel="stylesheet" href="./css/default.css" type="text/css" />
	<title>{{TITLE}}</title>
</head>
<body>
	<div id="wrapper">
		<h1>{{TITLE}}</h1>
		<div class="container">
			<?php 
			switch ($this->status())
				{
				case SF_STATUS_FAUCET_INCOMPLETE:
					?>
					<p>Faucet kurang lengkap, ada setelan yg kurang atau RPC client tidak tersedia.</p>
					<?php
					break;

				case SF_STATUS_DRY_FAUCET:
					?>
					<p>Faucet kering! Harap suntikkan dana.</p>
					<?php
					break;

				case SF_STATUS_RPC_CONNECTION_FAILED:
				case SF_STATUS_MYSQL_CONNECTION_FAILED:
					?>
					<p>Sambungan bermasalah, coba lagi nanti!</p>
					<?php
					break;
				
				case SF_STATUS_PAYOUT_ACCEPTED:
					?>
					<p>Berhasil! Kami telah mengirimkan {{PAYOUT_AMOUNT}} IDC ke alamat anda!<br>
					Mengarahkan ke halaman depan.					
					</p>
					<META http-equiv="refresh" content="1;URL=http://adf.ly/nn5Ih">
					<?php
					break;

				case SF_STATUS_PAYOUT_ERROR:
					?>
					<p>Ada yang salah, IDC tidak dapat terkirim... Coba lagi nanti.</p>
					<?php
					break;

				case SF_STATUS_PAYOUT_DENIED:
					?>
					<p>Tunggu 50 menit untuk dapat menggunakan Faucet ini lagi.</p>
					<?php
					break;

				case SF_STATUS_CAPTCHA_INCORRECT:
				case SF_STATUS_INVALID_DOGE_ADDRESS:
				case SF_STATUS_OPERATIONAL:
					?>
					<form method="post" action="">
						<input name="dogecoin_address" type="text" value="" placeholder="Masukkan alamat IDC" />
						{{CAPTCHA}}
						<input name="captcha_code" type="text" value="" placeholder="Masukkan kode diatas" />
						<input name="dogecoin_submit" type="submit" value="Kirim IDC" />
					</form>
					<?php
					if ($this->status() == SF_STATUS_INVALID_DOGE_ADDRESS)
						{
						?>
						<p class="error">Alamat indocoin yg dimasukkan salah!</p>
						<?php
						}
					elseif ($this->status() == SF_STATUS_CAPTCHA_INCORRECT)
						{
						?>
						<p class="error">Captcha yang dimasukkan salah!</p>
						<?php
						}
					break;

				
				}
			?>
		</div>
		<div class="container"><center>
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- faucet -->
<ins class="adsbygoogle"
     style="display:inline-block;width:200px;height:200px"
     data-ad-client="ca-pub-5447329038934327"
     data-ad-slot="1717212968"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

<div id="clustrmaps-widget"></div><script type="text/javascript">var _clustrmaps = {'url' : 'http://indocoin.info/faucet/', 'user' : 1143940, 'server' : '3', 'id' : 'clustrmaps-widget', 'version' : 1, 'date' : '2014-05-22', 'lang' : 'en', 'corners' : 'square' };(function (){ var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = 'http://www3.clustrmaps.com/counter/map.js'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);})();</script><noscript><a href="http://www3.clustrmaps.com/user/bbe117484"><img src="http://www3.clustrmaps.com/stats/maps-no_clusters/indocoin.info-faucet--thumb.jpg" alt="Locations of visitors to this page" /></a></noscript></center>
		</div>
		<div class="container">
			<p>Suntikan dana bisa dilayangkan ke:</p>
			<p class="big">{{DONATION_ADDRESS}}</p>
		</div>
		<div class="container">
			<p>Belum memiliki alamat IDC? Unduh wallet melalui link berikut:</p>
			<a href="http://indocoin.net/" target="_blank">Indocoin Wallet</a> | <a href="http://indocoin.org/threads/indocoin-panduan-memulai.164/" target="_blank">Panduan Memulai</a>
		</div>
		<div id="stats">
			<p>Saldo Faucet: {{BALANCE}} IDC</p>
			<p>Payout rata-rata: {{AVERAGE_PAYOUT}} IDC</p>
			<p>{{NUMBER_OF_PAYOUTS}} payouts</p>
		</div>
		<img src="./images/indocoin.png" class="dogecoin" alt=""/>
		<img src="./images/indocoin.png" class="dogecoin" alt=""/>
		<img src="./images/indocoin.png" class="dogecoin" alt=""/>
	</div>
</body>
</html>
