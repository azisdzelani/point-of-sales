<!-- <ul>
	<li><?php echo anchor('kategori','Kategori Barang'); ?></li>
	<li><?php echo anchor('barang','Data Barang'); ?></li>
	<li><?php echo anchor('operator','Operator Sistem'); ?></li>
	<li><?php echo anchor('transaksi','Form Transaksi'); ?></li>
	<li><?php echo anchor('','Laporan Transaksi'); ?></li>
	<li><?php echo anchor('','Logout'); ?></li>
</ul>
 -->
 <html>
 <head>
 	<style type="text/css">
 	#ghahead
 	{
 		width: 100%;
 		height: 300px;
 		background: #aaa;
 	}
  .gambar-size{
    width: 500%;
  }
  .carousel-inner{
    overflow: hidden;
    height: 500px;
  }
 	</style>
 </head>
 <body>
 	<div id="ghahead">
 			<!-- Content START -->
  			<div id="slideshow-mudah" class="carousel slide" data-ride="carousel">
  			<!-- Indicators, Ini adalah Tombol BULET BULET dibawah. item ini dapat dihapus jika tidak diperlukan -->
  			<ol class="carousel-indicators">
    			<li data-target="#slideshow-mudah" data-slide-to="0" class="active"></li>
    			<li data-target="#slideshow-mudah" data-slide-to="1"></li>
    			<li data-target="#slideshow-mudah" data-slide-to="2"></li>
  			</ol>
 
  			<!-- Wrapper for slides, Ini adalah Tempat Gambar-->
  			<div class="carousel-inner">
    			<div class="item active">
      				<img class="gambar-size" src="<?php echo base_url()?>assets/images/tes4.jpg" alt="slideshow-mudah"> <!—Gambar -->
	      			<div class="carousel-caption"> <!—Penjelasan -->
	        			<h3>Slide 1 (Judul)</h3>
	        			<p>Ini adalah Slide 1 (Penjelasan)</p>
	      			</div>
	    		</div>
    		<div class="item">
      			<img class="gambar-size" src="<?php echo base_url()?>assets/images/tes5.jpg" alt="slideshow-mudah"> <!—Gambar -->
      				<div class="carousel-caption">  <!—Penjelasan -->
        				<h3>Slide 2 (Judul)</h3>
        				<p>Ini adalah Slide 2 (Penjelasan)</p>
      				</div>
    		</div>
			    <div class="item">
			      <img class="gambar-size" src="<?php echo base_url()?>assets/images/tes6.jpg" alt="slideshow-mudah"> <!—Gambar -->
			      <div class="carousel-caption"> <!—Penjelasan -->
			        <h3>Slide 3 (Judul)</h3>
			        <p>Ini adalah Slide 3 (Penjelasan)</p>
			      </div>
			    </div>  
  			</div>
 
  <!-- Controls, Ini adalah Panah Kanan dan Kiri. item ini dapat dihapus jika tidak diperlukan-->
  <a class="left carousel-control" href="#slideshow-mudah" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#slideshow-mudah" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
  <!-- Content END -->  
   
 </div>
 </body>
 </html>

