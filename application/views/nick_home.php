<head>
	<title>NICKABLE</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/uikit.min.css') ?>">
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/uikit.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/uikit-icons.min.js"></script>
	<style type="text/css">
		.uk-card-body{
			opacity: 0.8;
		}
		.uk-navbar{
		background-color: #1495B5!important;
		}
	</style>
</head>
<!DOCTYPE html>
<html>
<nav class="uk-navbar-container uk-box-shadow-large" data-uk-navbar data-uk-sticky="cls-active: uk-navbar-sticky" uk-width-viewport uk-sticky="show-on-up: true;animation: uk-animation-slide-bottom-small;">
	<div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
            <li class="uk-parent"><a class="uk-navbar-item uk-logo" href="#"><img src="assets/images/nick.png" alt="" width="300" height="300"></a></li>
        </ul>
    </div>
    <div class="uk-navbar-right">
        <ul class="uk-navbar-nav">
            <li class="uk-parent"><a href="#nick-beranda" uk-scroll style="color: #ECE3AA;"><b>BERANDA</b></a></li>
            <li class="uk-parent"><a href="#nick-alur" uk-scroll style="color: #ECE3AA;"><b>ALUR TRANSAKSI</b></a></li>
            <li class="uk-parent"><a href="#nick-jasa" style="color: #ECE3AA;" uk-scroll><b>JASA</b></a></li>
            <li class="uk-parent"><a href="#nick-produk" uk-scroll style="color: #ECE3AA;"><b>PRODUK</b></a></li>
            <li class="uk-parent"><a href="#nick-kontak" uk-scroll style="color: #ECE3AA;"><b>TENTANG KAMI</b></a></li>
        </ul>
    </div>
</nav>
<div class="uk-section-xlarge uk-section-secondary uk-section-overlap" id="nick-beranda">
    <div class="uk-container" uk-height-viewport>

        <h2 class="uk-heading-line"><span>Assalamualaikum, Selamat Datang Di NICKABLE</span></h2>

        <div class="uk-grid-match uk-child-width-1-2@m" uk-grid>
            <div>
                <p>Situs Jual Beli Aplikasi, Sistem, Software. Bergabung Menjadi Partner Untuk Menawarkan Jasa Pemrogramanmu. Temukan Jasa Yang Kamu Inginkan. Cek Sekarang.</p>
            </div>
        </div>

    </div>
</div>
<div class="uk-section-muted" id="nick-jasa" uk-height-viewport>
    <div class="uk-section-large uk-light uk-background-cover uk-responsive-height uk-responsive-width uk-preserve-width" uk-height-viewport style="background-image: url(assets/images/partners-2.gif);">
        <div class="uk-container">
            <h1 class="uk-heading-line uk-text-center" style="color: #6C6877;" uk-parallax="opacity: 0,1,1; y: -100,0,0; x: 100,100,0; scale: 0.5,1,1; viewport: 0.5;"><span>Daftar Partner dan Cek Jasa</span></h1>
            <div class="uk-child-width-expand@s" uk-grid>
            	<div>
            	<div class="uk-card uk-card-small uk-card-secondary uk-box-shadow-large uk-card-hover uk-card-body" uk-parallax="y: 20,0,0; x: -100,0,0; scale: 0.5,1,1; viewport: 0.3;" style="padding-right: 50px;">
                <div>
                    <h5 style="color: #D8F3C9;"><b>Punya Keahlian Dalam Membuat Software, Sistem Informasi, Aplikasi?? Atau Kamu Punya Keahlian Dalam Membuat Dokumen atau Laporan?? Ayo Daftar Untuk Menjadi Partner Kami.</b></h5>
                    <button class="uk-button uk-button-danger uk-button-large" href="#partner" uk-toggle>DAFTAR PARTNER</button>
                </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-small uk-card-secondary uk-box-shadow-large uk-card-hover uk-card-body" uk-parallax="y: 20,0,0; x: -100,0,0; scale: 0.5,1,1; viewport: 0.3;" style="padding-left: 50px;">
                <div>
                    <h5 style="color: #D8F3C9;"><b>Butuh Aplikasi, Software, Sistem Informasi Untuk Kerja Praktek Kuliah, Tugas, Referensi??, Butuh Tutor Pemrograman Terbaik??, Atau Lagi Deadline Dengan Laporan Atau Dokumen Yang Menumpuk?? Ingin Ngerjain Tapi Gak Punya Waktu Dan Gak Ngerti?? Gunakan Jasa Dari Partner Kami .</b></h5>
                    <button class="uk-button uk-button-danger uk-button-large" href="#jasa" uk-toggle>CEK JASA</button>
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>
<div class="uk-section-muted uk-section-xlarge" id="nick-alur" uk-height-viewport>
     <div class="uk-container">
            <h1 class="uk-heading-line uk-text-center"><span>Alur Transaksi</span></h1>
            </div>
</div>

<div class="uk-section uk-section-secondary uk-section-xlarge uk-dark" id="nick-kontak" uk-height-viewport>
    <div class="uk-container">

        <h3>Tentang Kami</h3>

        <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
            <div>
                <p>Hubungi Kami</p>
            </div>
        </div>

    </div>
</div>

</html>
<div id="partner" class="uk-modal-full" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
        <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
            <div class="uk-padding">
                <h1>Form Pendaftaran Partner</h1>
                <form class="uk-form-horizontal uk-margin">
    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">NIK</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="text" placeholder="Nomor Induk Kependudukan">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Nama Lengkap</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="text" placeholder="Masukkan Nama Lengkap Anda">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-select">Jenis Kelamin</label>
        <div class="uk-form-controls">
            <select class="uk-select" id="form-stacked-select">
                <option value="01">Laki-laki</option>
                <option value="02">Perempuan</option>
            </select>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">No HP</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="text" placeholder="Masukkan Nomor Handphone Anda">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">E-mail</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="text" placeholder="Masukkan Alamat E-mail">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Alamat</label>
        <div class="uk-form-controls">
            <textarea class="uk-textarea" rows="3" placeholder="Maukkan Alamat Lengkap Anda"></textarea>
        </div>
    </div>
    <button class="uk-button uk-button-danger uk-button-small">SIMPAN</button>
</form>
            </div>
            <div class="uk-background-cover" style="background-image: url('assets/images/form-back.png');" uk-height-viewport></div>
        </div>
    </div>
</div>

<div id="jasa" class="uk-modal-full" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
        <div class="uk-grid-collapse uk-child-width-1-1@s uk-flex-middle" uk-grid uk-height-viewport>
            <div class="uk-padding-large">
                <h1 class="uk-text-center">DAFTAR JASA YANG KAMI TAWARKAN</h1>
                <div class="uk-child-width-1-4@m" uk-grid>
    			<div>
                <div class="uk-card uk-card-default uk-card-hover">
                	<div class="uk-card-header">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
                <img class="uk-border-circle" width="80" height="80" src="assets/images/partner-profile.jpeg">
            </div>
            <div class="uk-width-expand">
                <h3 class="uk-card-title uk-margin-remove-bottom">Abdul Aziz</h3>
                <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2016</time></p>
            </div>
        </div>
    </div>
            <div class="uk-card-media-top">
                <img src="assets/images/form-back.png" alt="">
            </div>
            <div class="uk-card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
        </div>
    </div>
    <div>
                <div class="uk-card uk-card-default uk-card-hover">
                	<div class="uk-card-header">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
                <img class="uk-border-circle" width="80" height="80" src="assets/images/partner-profile.jpeg">
            </div>
            <div class="uk-width-expand">
                <h3 class="uk-card-title uk-margin-remove-bottom">Abdul Aziz</h3>
                <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2016</time></p>
            </div>
        </div>
    </div>
            <div class="uk-card-media-top">
                <img src="assets/images/form-back.png" alt="">
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">Media Top</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
        </div>
    </div>
    <div>
                <div class="uk-card uk-card-default uk-card-hover">
                	<div class="uk-card-header">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
                <img class="uk-border-circle" width="80" height="80" src="assets/images/partner-profile.jpeg">
            </div>
            <div class="uk-width-expand">
                <h3 class="uk-card-title uk-margin-remove-bottom">Abdul Aziz</h3>
                <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2016</time></p>
            </div>
        </div>
    </div>
            <div class="uk-card-media-top">
                <img src="assets/images/form-back.png" alt="">
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">Media Top</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
        </div>
    </div>
    <div>
                <div class="uk-card uk-card-default uk-card-hover">
                	<div class="uk-card-header">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
                <img class="uk-border-circle" width="80" height="80" src="assets/images/partner-profile.jpeg">
            </div>
            <div class="uk-width-expand">
                <h3 class="uk-card-title uk-margin-remove-bottom">Abdul Aziz</h3>
                <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2016</time></p>
            </div>
        </div>
    </div>
            <div class="uk-card-media-top">
                <img src="assets/images/form-back.png" alt="">
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">Media Top</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
        </div>
    </div>
    <div>
                <div class="uk-card uk-card-default uk-card-hover">
            <div class="uk-card-media-top">
                <img src="assets/images/form-back.png" alt="">
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">Media Top</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
        </div>
    </div>
    <div>
                <div class="uk-card uk-card-default uk-card-hover">
            <div class="uk-card-media-top">
                <img src="assets/images/form-back.png" alt="">
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">Media Top</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
        </div>
    </div>
    <div>
                <div class="uk-card uk-card-default uk-card-hover">
            <div class="uk-card-media-top">
                <img src="assets/images/form-back.png" alt="">
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">Media Top</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
        </div>
    </div>
    <div>
                <div class="uk-card uk-card-default uk-card-hover">
            <div class="uk-card-media-top">
                <img src="assets/images/form-back.png" alt="">
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">Media Top</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
        </div>
    </div>
        </div>
    </div>
</div>
        </div>
    </div>
</div>