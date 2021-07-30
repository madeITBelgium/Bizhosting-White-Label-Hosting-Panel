<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, []); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <!-- Page Header-->
    <div class="container-fluid">
        <div class="row bg-primary text-white">
            <div class="col-12 mt-5 mb-5 pt-5 text-center">
                <h1>Hosting en domeinnamen <small>door Made I.T.</small></h1>
                <h2 class="mt-4">Domeinnamen, webhosting, e-mail hosting, VPS<br><br>Eenvoudig, snel en betrouwbaar!</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-sm-4">
                <div>
                    <i class="fas fa-server fa-4x mx-auto d-block"></i>
                    <div class="mt-2">
                        <h3 class="text-center">Super snelle SSD hosting</h3>
                        <p>Heb jij het verschil al gemerkt als er een SSD in je laptop zit in plaats van een gewone hardeschijf? Je laptop gaat weer vliegensvlug. Onze servers zijn uitgerust met de snelste SSD schijven om je website nog sneller te laden!</p>
                        <p class="text-center">
                            <a href="<?php echo e(route('home.webhosting')); ?>" class="btn btn-primary">Meer info</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div>
                    <i class="fab fa-wordpress fa-4x mx-auto d-block"></i>
                    <div class="mt-2">
                        <h3 class="text-center">Geoptimaliseerd voor jouw website</h3>
                        <p>Is jouw webiste gebouwd in WordPress, Laravel of Drupal? Onze servers zijn dan speciaal opgezet voor jouw. Met de juiste en geoptimaliseerde instellingen maken we jouw website nog beter.</p>
                        <p class="text-center">
                            <a href="<?php echo e(route('home.webhosting')); ?>" class="btn btn-primary">Meer info</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div>
                    <i class="far fa-life-ring fa-4x mx-auto d-block"></i>
                    <div class="mt-2">
                        <h3 class="text-center">Contact</h3>
                        <p>Ooit al eens problemen gehad met je webhosting? Waarschijnlijk wel, wij beloven dat we er alles aan doen om je geen kopzorgen te bezorgen. Heb je ons toch nodig dan kan je ons vinden op livechat, facebook chat, twitter, e-mail, ...</p>
                        <p class="text-center">
                            <a href="<?php echo e(route('home.contact')); ?>" class="btn btn-primary">Meer info</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="pricing-tables attached">
                <h2 class="text-center">Hosting pakketten</h2>
                <div class="row mt-3 mb-4">
                    <div class="col-sm-3 d-none d-md-block">
                        <div class="plan first">
                            <div class="head">
                                <h2>&nbsp;</h2>
                            </div>
                            <ul class="item-list">
                                <li>Opslag</li>
                                <li>Sub domeinen</li>
                                <li>E-mail accounts</li>
                                <li>Databases</li>
                                <li>Inclusief domeinnaam</li>
                                <li>Managed</li>
                                <li>SSH toegang</li>
                            </ul>
                            <div class="price">
                                <br><br><br>
                            </div>
                        </div>
                    </div>
                    <?php $__currentLoopData = collect(config('hosting.hosting_packages'))->where('public', true)->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hostingPackage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-sm-3">
                            <div class="plan">
                                <div class="head">
                                    <h2><?php echo e($hostingPackage['name']); ?></h2>
                                </div>
                                <ul class="item-list">
                                    <li><span class="d-md-none"><?php echo e($hostingPackage['diskspace']); ?> MB opslag ruimte</span><span class="d-none d-md-block"><?php echo e($hostingPackage['diskspace']); ?> MB</span></li>
                                    <li><span class="d-md-none"><?php echo e($hostingPackage['subdomains']); ?> subdomeinen</span><span class="d-none d-md-block"><?php echo e($hostingPackage['subdomains']); ?> <i data-placement="bottom" data-toggle="tooltip" title="Je kan <?php echo e($hostingPackage['subdomains']); ?> subdomeinen aanmaken in dit pakket." class="far fa-question-circle"></i></span></li>
                                    <li><span class="d-md-none"><?php echo e($hostingPackage['mailaccounts']); ?> e-mail accounts</span><span class="d-none d-md-block"><?php echo e($hostingPackage['mailaccounts']); ?> <i data-placement="bottom" data-toggle="tooltip" title="Aantal te koppelen domeinnamen in dit pakket." class="far fa-question-circle"></i></span></li>
                                    <li><span class="d-md-none"><?php echo e($hostingPackage['databases']); ?> databases</span><span class="d-none d-md-block"><?php echo e($hostingPackage['databases']); ?> <i data-placement="bottom" data-toggle="tooltip" title="Je kan <?php echo e($hostingPackage['databases']); ?> databases aanmaken." class="far fa-question-circle"></i></span></li>
                                    <?php if($hostingPackage['include_domainname']): ?>
                                        <li class="d-md-none"><i class="fas fa-check text-success"></i></li>
                                        <li class="d-none d-md-block"><i class="fas fa-check text-success"></i></li>
                                    <?php else: ?>
                                        <li class="d-md-none"><i class="fas fa-times text-danger"></i></li>
                                        <li class="d-none d-md-block"><i class="fas fa-times text-danger"></i></li>
                                    <?php endif; ?>

                                    <?php if($hostingPackage['managed']): ?>
                                        <li class="d-md-none"><i class="fas fa-check text-success"></i></li>
                                        <li class="d-none d-md-block"><i class="fas fa-check text-success"></i></li>
                                    <?php else: ?>
                                        <li class="d-md-none"><i class="fas fa-times text-danger"></i></li>
                                        <li class="d-none d-md-block"><i class="fas fa-times text-danger"></i></li>
                                    <?php endif; ?>

                                    <li class="d-md-none"><i class="fas fa-check text-success"></i></li>
                                    <li class="d-none d-md-block"><i class="fas fa-check text-success"></i><i data-placement="bottom" data-toggle="tooltip" title="Via SSH kan je commando's uitvoeren en dus gebruik maken van composer, git, npm, ..." class="far fa-question-circle"></i></li>
                                </ul>
                                <div class="price">
                                    <p class="h3">
                                        <span class="symbol">€</span>
                                        <span class="price-manage"><?php echo e(number_format($hostingPackage['price'], 2, ",", "")); ?></span>
                                    </p>
                                    <p class="h4">Per maand</p>
                                    <p data-toggle="tooltip" data-placement="bottom" class="h5" title="Natuurlijke personen en belgische bedrijven dienen 21% BTW te betalen. De prijs inclusief BTW is €18.15">Excl. BTW</p>
                                </div>
                                <a href="/register" class="btn btn-primary madeit-offerte-button">Neem hosting</a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        * Managed webhosting is een technische ondersteuning waar wij zorgen voor updates, de snelheid van je website, ...<br>
                        - Elk hosting pakket wordt dagelijks gebackupt <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/welcome.blade.php ENDPATH**/ ?>