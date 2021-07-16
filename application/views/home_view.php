<?php $this->load->view('header'); ?>

  <!-- Page heading -->
  <!-- Give background color class on below line (bred, bgreen, borange, bviolet, blightblue, bblue) -->
  <div class="page-heading blightblue">
    <div class="container">
      <div class="row">
        <div class="span12">
          <h2 class="pull-left"><i class="icon-arrow-right title-icon"></i> <?php echo "$judul"; ?></h2>
          <div class="pull-right heading-meta"><span class="lightblue"><?php echo $subjudul; ?></span></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page heading ends -->

  <!-- Content starts -->
  <div class="content">
    <div class="container">

      <div class="service-home">
          <div class="row">

            <!-- Social -->
            <div class="span3">
            <?php $warna = array('','blightblue','bred', 'bgreen', 'borange', 'bviolet', 'bblue'); ?>
              <div class="service-social bblack">
                <!-- Big number -->
                <div class="service-big">keahlian</div>
                
                <hr />
                <!-- Social media -->
                <?php foreach($keahlian->result() as $kt) : ?>
                <a href="<?php echo site_url('home/keahlian/'.$kt->id.'/'.url_title(strtolower($kt->nama))); ?>">
                <div class="service-box <?php echo $warna[$kt->id]; ?>">
                    <?php echo $kt->nama; ?>
                </div>
                </a>
                <?php endforeach; ?>                  

                <div class="clearfix"></div>

              </div>
              
            </div>
            
            <div class="span6 service-list">
                <?php $icon = array('','desktop','fire','globe','credit-card','briefcase'); ?>
                <?php foreach($loker->result() as $lk) : ?>
                <div class="service-icon">
                  <i class="icon-<?php echo $icon[$lk->id]; ?> <?php echo $warna[$lk->id]; ?>"></i>
                </div>
                <div class="service-content">
                  <!-- Title -->                  
                  <h4 id="konten"><?php echo word_limiter(strip_tags($lk->deskripsi_pekerjaan),25); ?></h4>
                  <p class="konten"><?php echo word_limiter(strip_tags($lk->deskripsi_pekerjaan),25); ?></p>
				  <p class="konten">info lebih lanjut hubungi :<?php echo word_limiter(strip_tags($lk->email),25); ?></p>
                </div>
                <hr/>
                <?php endforeach; ?>
                <p align="center"><?php echo $this->pagination->create_links(); ?></p>
                <div class="clearfix"></div>
            </div>
            </div>
          </div>          
      </div>
    </div>
  </div>
  <!-- Content ends -->

<?php $this->load->view('footer'); ?>