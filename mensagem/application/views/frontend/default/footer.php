        <footer class="footer-area">
            <div class="container-xl">
                <div class="row">
                    <div class="col-md-6">
                        <p class="copyright-text">
                            <a href="../../index.php"><img src="<?php echo base_url().'uploads/system/logo-dark.png'; ?>" alt="" class="d-inline-block" width="65"></a>
                            <a href="<?php echo get_settings('footer_link'); ?>" target="_blank"><?php echo get_settings('footer_text'); ?></a>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <ul class="nav justify-content-md-end footer-menu">
                        <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('../index.php'); ?>"><?php echo get_phrase('Inicio'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('../actividades.php'); ?>"><?php echo get_phrase('area do paciente'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('../about.php'); ?>"><?php echo get_phrase('Sobre nos'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('../recrutamento.php'); ?>">
                                    <?php echo get_phrase('Contacto'); ?>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('home/home'); ?>">
                                    <?php echo get_phrase('Login'); ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
