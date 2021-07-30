<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, []); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <!-- Page Header-->
    <div class="container-fluid">
        <div class="row bg-primary text-white">
            <div class="col-12 pt-5 mt-5 mb-5 text-center">
                <h1>
                    <?php echo e(config('app.name')); ?>

                </h1>
                <h2 class="mt-3">
                    Features
                </h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-sm-4">
                <div>
                    <i class="fas fa-users fa-4x d-block mx-auto"></i>
                    <div class="mt-2">
                        <h3 class="text-center">Werk in teams of alleen</h3>
                        <p>Werk in teams, elk domeinnaam of webhosting is gekoppeld aan een team. Een team kan uit enkel je zelf bestaan, of ook uit je collega's. Natuurlijk bepaal je wel zelf wie en wat kan. Dit systeem kan je ook gebruiken als je voor meerdere bedrijven hosting of domeinen wil kopen, of voor persoonlijk en zakelijk gebruiker eenvoudig te scheiden.</p> 
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div>
                    <i class="fas fa-mobile-alt fa-4x d-block mx-auto"></i>
                    <div class="mt-2">
                        <h3 class="text-center ">Onze smartphone app</h3>
                        <p>Via onze smartphone app controleer je meteen de status van je domeinnamen en webhostings. Lig je in op het strand in Spanje lekker te dromen over je nieuw idee? Leg meteen de domeinnaam vast via de app.</p> 
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div>
                    <i class="far fa-life-ring fa-4x d-block mx-auto"></i>
                    <div class="mt-2">
                        <h3 class="text-center">Contact</h3>
                        <p>Ooit al eens problemen gehad met je webhosting? Waarschijnlijk wel, wij beloven dat we er alles aan doen om je geen kopzorgen te bezorgen. Heb je ons toch nodig dan kan je ons vinden op livechat, facebook chat, twitter, e-mail, ...</p> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-primary text-white">
        <div class="row">
            <div class="container">
                <div class="row mt-5 mb-5">
                    <div class="col-sm-4">
                        <div>
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="disc-drive" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-disc-drive fa-w-20 fa-4x d-block mx-auto"><path fill="currentColor" d="M496 416h-16V96a64 64 0 0 0-64-64H96a64 64 0 0 0-64 64v320H16a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h480a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm-240 0a160 160 0 1 1 160-160 160 160 0 0 1-160 160zm0-192a32 32 0 1 0 32 32 32 32 0 0 0-32-32z" class=""></path></svg>
                            <div class="mt-2">
                                <h3 class="text-center">Super snelle SSD hosting</h3>
                                <p>Heb jij het verschil al gemerkt als er een SSD in je laptop zit in plaats van een gewone hardeschijf? Je laptop gaat weer vliegensvlug. Onze servers zijn uitgerust met de snelste SSD schijven om je website nog sneller te laden!</p> 
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div>
                            <i class="fab fa-wordpress fa-4x d-block mx-auto"></i>
                            <div class="mt-2">
                                <h3 class="text-center">Geoptimaliseerd voor jouw website</h3>
                                <p>Is jouw webiste gebouwd in WordPress, Laravel of Drupal? Onze servers zijn dan speciaal opgezet voor jouw. Met de juiste en geoptimaliseerde instellingen maken we jouw website nog beter.</p> 
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div>
                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="browser" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-browser fa-w-20 fa-4x d-block mx-auto"><path fill="currentColor" d="M464 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM48 92c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v24c0 6.6-5.4 12-12 12H60c-6.6 0-12-5.4-12-12V92zm416 334c0 3.3-2.7 6-6 6H54c-3.3 0-6-2.7-6-6V168h416v258zm0-310c0 6.6-5.4 12-12 12H172c-6.6 0-12-5.4-12-12V92c0-6.6 5.4-12 12-12h280c6.6 0 12 5.4 12 12v24z" class=""></path></svg>
                            <div class="mt-2">
                                <h3 class="text-center">Eenvoudig beheer paneel</h3>
                                <p>Door ons eenvoudig beheer paneel kan je alles voor je domeinnaam en webhosting vanop 2 locaties wijzigen, via onze website of onze app. Alles op 1 plaats, simpel en snel.</p> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-sm-4">
                <div>
                    <i class="fas fa-euro-sign fa-4x d-block mx-auto"></i>
                    <div class="mt-2">
                        <h3 class="text-center">Zeer voordelig, vanaf €<?php echo e(number_format(\MadeITBelgium\Hosting\Models\Topleveldomain::min('sell_price'), 2, ",", "")); ?></h3>
                        <p>Domeinnamen zijn maar 1 jaar geldig, je moet het dus elk jaar opnieuw verlengen. Door onze voordelige prijzen doe je dat met plezier, een kleine investering die zeer veel kan opbrengen. Dat vanaf €<?php echo e(number_format(\MadeITBelgium\Hosting\Models\Topleveldomain::min('sell_price'), 2, ",", "")); ?> incl. BTW per jaar.</p> 
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div>
                    <i class="fas fa-list-ol fa-4x d-block mx-auto"></i>
                    <div class="mt-2">
                        <h3 class="text-center"><?php echo e(\MadeITBelgium\Hosting\Models\Topleveldomain::count()); ?> aantal mogelijkheden</h3>
                        <p>Door de komst van nieuwe TLDs bieden we u bijna het grootste aantal verschillende extensies aan. Bij ons kan je de zelfde naam registeren met 543 extenties!</p> 
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div>
                    <i class="fas fa-server fa-4x d-block mx-auto"></i>
                    <div class="mt-2">
                        <h3 class="text-center">Gratis DNS service</h3>
                        <p>Met een domeinnaam alleen ben je niets, een domeinnaam kan je gebruiken voor je website of doorsturen naar een bestaande website. Bij Made I.T. hosting geniet je van een gratis DNS service voor het opzetten van je domeinnaam.</p> 
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
<?php /**PATH /var/www/html/resources/views/features.blade.php ENDPATH**/ ?>