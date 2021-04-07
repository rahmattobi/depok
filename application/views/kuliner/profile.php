<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6">
                <h3>Profile</h3>
                <p class="text-subtitle text-muted">Form Profile Account</p>
            </div>
            <div class="col-12 col-md-6">
                <nav aria-label="breadcrumb" class='breadcrumb-header text-right'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>c_kuliner/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
    <!-- Basic card section start -->
    <section id="content-types">
        <div class="row">
                <?php echo $this->session->flashdata('info'); ?>
            <div class="col-sm-12">
                <div  style="text-align:center" class="card">
                <?php foreach ($get_user as $key => $value): ?>
                    <div class="card-content">
                        <img src="<?= base_url('assets/')?>images/samples/inspirational-aerial-landscape-autumn-forest-and-FU2LKHA.jpg" class="card-img-top "
                            alt="singleminded">
                                
                        <div class="card-body">
                            <div class="avatar avatar-xl mr-3">
                                <img src="<?= base_url('assets/')?>images/samples/inspirational-aerial-landscape-autumn-forest-and-FU2LKHA.jpg">
                            </div>    
                        </div>
                            <h5 class="card-title"><?php echo $value->nama; ?></h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Username : <?php echo $value->username; ?></li>
                        <li class="list-group-item">
                            <a href="<?php echo base_url(); ?>c_kuliner/update_profile/<?php echo $value->id_user; ?>">
                                <span class="btn btn-primary"> Edit Profile</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <?php endforeach ?>
            </div>
        </div>    
    </section>    
</div>
