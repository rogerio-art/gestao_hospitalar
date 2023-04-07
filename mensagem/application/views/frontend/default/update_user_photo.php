
<section class="user-dashboard-area">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="user-dashboard-box">
                    <div class="user-dashboard-sidebar">
                        <div class="user-box">
                            <img src="<?php echo base_url().'uploads/user_image/'.$this->session->userdata('user_id').'.jpg';?>" alt="" class="img-fluid">
                            <div class="name"><?php echo $user_details['first_name'].' '.$user_details['last_name']; ?></div>
                        </div>
                        <div class="user-dashboard-menu">
                            <ul>
                            <li class="active"><a href="<?php echo site_url('home/profile/user_credentials'); ?>"><?php echo get_phrase('Conta'); ?></a></li>
                                <li><a href="<?php echo site_url('home/profile/user_photo'); ?>"><?php echo get_phrase('Foto'); ?></a></li>
                                <li><a href="<?php echo site_url('home/profile/user_profile'); ?>"><?php echo get_phrase('Perfil'); ?></a></li>
                          </ul>
                        </div>
                    </div>
                    <div class="user-dashboard-content">
                        <div class="content-title-box">
                            <div class="title"><?php echo get_phrase('Foto'); ?></div>
                            <div class="subtitle"><?php echo get_phrase('Atualizar sua foto'); ?>.</div>
                        </div>
                        <form action="<?php echo site_url('home/update_profile/update_photo'); ?>" enctype="multipart/form-data" method="post">
                            <div class="content-box">
                                <div class="email-group">
                                    <div class="form-group">
                                        <label for="user_image"><?php echo get_phrase('carregar imagem'); ?>:</label>
                                        <input type="file" class="form-control" name = "user_image" id="user_image">
                                    </div>
                                </div>
                            </div>
                            <div class="content-update-box">
                                <button type="submit" class="btn"><?php echo get_phrase('Salvar'); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
