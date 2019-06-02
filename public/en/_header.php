<header>
    <div class="logo-wrapper">

        <button class="hamburger hamburger--collapse" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>

        <a href="<?= $SCRIPT_ROOT;?>en/" class="logo">
            <img src="<?= $SCRIPT_ROOT;?>media/img/Eray Logo Wordmark Dark PNG 72PPI.png">
        </a>
    </div>

    <ul class="languages hidden-xs hidden-sm">
        <li>
            <a href="<?= $SCRIPT_ROOT;?>lt/">lietuvių</a>
        </li>
        <li>
            <a class="active" href="<?= $SCRIPT_ROOT;?>en/">english</a>
        </li>
    </ul>

    <div class="menu">

        <div class="menu__left">
            <ul class="languages languages-mobile">
                <li>
                    <a href="<?= $SCRIPT_ROOT;?>lt/"><span class="visible-md visible-lg">lietuvių</span><span class="visible-xs visible-sm">LT</span></a>
                </li>
                <li>
                    <a class="active" href="<?= $SCRIPT_ROOT;?>en/"><span class="visible-md visible-lg">english</span><span class="visible-xs visible-sm">EN</span></a>
                </li>
            </ul>

            <div class="content">
                <p class="content__header"><span class="orange">ēray</span> is innovation labaratory, where innovators & engineers brings their visions to fruition </p>

                <div class="content__footer">

                    <div class="content__contacts">
                        <h3>Contacts</h3>

                        <ul class="content__contacts--address">
                            <li><span>A:</span><span>Telšių street 2, LT-90162 Plungė, Lithuania</span></li>
                            <li><span>E:</span><span><a href="mailto:ernestas@eray.lt">ernestas@eray.lt</a></span></li>
                            <li><span>M:</span><span>(00) +370 62514 572</span></li>
                        </ul>

                        <div class="legal">Copyrights &copy; <?=date('Y');?> ErayLab. All rights reserved</div>
                        <a class="link--legal" href="<?= $SCRIPT_ROOT;?>en/cookie_policy">Cookie Policy</a>
                    </div><!-- /contacts -->

                    <div class="content__social">
                        <img src="<?= $SCRIPT_ROOT;?>media/img/menu Open Right Hand Corner Dots.svg" alt="">

                        <div class="content__social--wrapper">
                            <a href="https://www.linkedin.com/company/eraylab" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                            <a href="https://www.facebook.com/eraylab" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                            <a href="https://www.instagram.com/eraylab/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div><!-- /social -->
                </div>
            </div>
        </div>

        <div class="menu__right">
             <h2>Services we offer</h2>

            <div class="content">

                <ul class="service-list">
                    <li><a href="<?= $SCRIPT_ROOT;?>en/repair_of_lighting_equipment_and_restoration">Repair of lighting equipment and restoration</a></li>
                    <li><a href="<?= $SCRIPT_ROOT;?>en/lighting_equipment_design_and_production">Lighting equipment design and production</a></li>
                    <li><a href="<?= $SCRIPT_ROOT;?>en/electrical_engineering">Electrical Engineering</a></li>
                    <li><a href="<?= $SCRIPT_ROOT;?>en/electrical_automation">Electrical Automation</a></li>
                    <li><a href="<?= $SCRIPT_ROOT;?>en/individual_special_equipment_design_and_production">Individual, special equipment design and production</a></li>
                    <li><a href="<?= $SCRIPT_ROOT;?>en/laser_cutting">Laser Cutting</a></li>
                    <li><a href="<?= $SCRIPT_ROOT;?>en/3d_printing_and_design">3D Printing and Design</a></li>
                </ul>
        
            </div>
        </div>

    </div>
</header>