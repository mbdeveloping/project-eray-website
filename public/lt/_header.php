<header>
    <div class="logo-wrapper">

        <button class="hamburger hamburger--collapse" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>

        <a href="<?= $SCRIPT_ROOT;?>lt/" class="logo">
            <img src="<?= $SCRIPT_ROOT;?>media/img/Eray Logo Wordmark Dark PNG 72PPI.png">
        </a>
    </div>

    <ul class="languages hidden-xs hidden-sm">
        <li>
            <a class="active"  href="<?= $SCRIPT_ROOT;?>lt/">lietuvių</a>
        </li>
        <li>
            <a href="<?= $SCRIPT_ROOT;?>en/">english</a>
        </li>
    </ul>


    <div class="menu">

        <div class="menu__left">
            <ul class="languages languages-mobile">
                <li>
                    <a class="active"  href="<?= $SCRIPT_ROOT;?>lt/"><span class="visible-md visible-lg">lietuvių</span><span class="visible-xs visible-sm">LT</span></a>
                </li>
                <li>
                    <a href="<?= $SCRIPT_ROOT;?>en/"><span class="visible-md visible-lg">english</span><span class="visible-xs visible-sm">EN</span></a>
                </li>
            </ul>

            <div class="content">
                <p class="content__header"><span class="orange">ēray</span> yra inovacijų laboratorija, kurioje novatoriai ir inžinieriai perteikia viziją į realybe </p>

                <div class="content__footer">

                    <div class="content__contacts">
                        <h3>Kontaktai</h3>

                        <ul class="content__contacts--address">
                            <li><span>A:</span><span>Telšių g 2, Aukštas, 29 ofisas, PO: 90112, Plungė</span></li>
                            <li><span>E:</span><span><a href="mailto:ernestas@eray.lt">ernestas@eray.lt</a></span></li>
                            <li><span>M:</span><span>(00) +370 62514 572</span></li>
                        </ul>

                        <div class="legal">Copyrights &copy; <?=date('Y');?> ErayLab. All rights reserved</div>
                        <a class="link--legal" href="<?= $SCRIPT_ROOT;?>lt/slapuku_politika">Slapukų Politika</a>
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
             <h2>Teikiamos paslaugos</h2>

            <div class="content custom-scrollbar" data-simplebar>

                <ul class="service-list">
                    <li><a href="<?= $SCRIPT_ROOT;?>lt/apsvietimo_irangos_projektavimas_remontas_ir_gamyba">Apšvietimo įrangos projektavimas, remontas ir gamyba</a></li>
                    <li><a href="<?= $SCRIPT_ROOT;?>lt/apsvietimo_irangos_taisymas_restoravimas_derinimas">Apšvietimo įrangos taisymas, restauravimas, derinimas</a></li>
                    <li><a href="<?= $SCRIPT_ROOT;?>lt/elektros_inzinerija">Elektros Inžinerija</a></li>
                    <li><a href="<?= $SCRIPT_ROOT;?>lt/elektros_automatika">Elektros Automatika</a></li>
                    <li><a href="<?= $SCRIPT_ROOT;?>lt/individualus_specialios_irangos_projektavimas_ir_gamyba">Individualus, specialios įrangos projektavimas ir gamyba</a></li>
                    <li><a href="<?= $SCRIPT_ROOT;?>lt/lazerinis_pjovimas">Lazerinis pjovimas</a></li>
                    <li><a href="<?= $SCRIPT_ROOT;?>lt/3d_spausdinimas_ir_projektavimas">3D Spausdinimas ir Projektavimas</a></li>
                </ul>
        
            </div>
        </div>

    </div>
</header>
