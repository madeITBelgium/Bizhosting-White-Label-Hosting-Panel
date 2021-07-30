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
                    Veel gestelde vragen
                </h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-12">
                <h2>Account aanmaken</h2>
                <div class="mb-3">
                    <h3>Is een account aanmaken gratis?</h3>
                    <p>Ja een account kan je gratis aanmaken.</p>
                </div>
                <div class="mb-3">
                    <h3>Kan ik meerdere personen toegang geven tot de webhosting/domeinnaam instellingen?</h3>
                    <p>Ja, tijdens het aanmaken van een account wordt er automatisch een team aangemaakt. Je kan meerdere personen toevoegen aan een team, zo kan je eenvoudig technische personen toegang geven zodat ze je technische instellingen goed kunnen zetten. Ook kan je meerdere teams aanmaken, dit kan handig zijn als je webhosting of domeinnamen voor meerdere bedrijven moet registreren. Elk team kan je bekijken als een apart bedrijf.</p>
                </div>
            </div>
        </div>

        <div class="row mt-5 mb-5">
            <div class="col-12">
                <h2>Webhosting</h2>
                <div class="mb-3">
                    <h3>Hoe kan ik een webhosting registeren?</h3>
                    <p>Na het aanmaken van een account kan je via het menu bij webhosting een webhosting registeren.</p>
                </div>
                <div class="mb-3">
                    <h3>Kan ik een domeinnaam die elders geregistreerd is gebruiken bij mijn webhosting?</h3>
                    <p>Ja, tijdens het aanmaken van je webhosting heb je verschillende keuzes wat je met de domeinnaam kan doen. Zo kan je deze eenvoudig verhuizen. Wanneer je de domeinnaam niet verhuist naar ons dan dien je zelf de nameserver instellingen van je domeinnaam te wijzigen naar ns1.ech.be en ns2.ech.be.</p>
                </div>
                <div class="mb-3">
                    <h3>Moet ik webhosting jaarlijks betalen?</h3>
                    <p>Ja, bij webhosting huur je een beperkte ruimte op één van onze servers. De huur betaal je jaarlijks. Jaarlijks één maand voor het aflopen van de webhosting ontvang je een factuur. Wanneer je dit factuur telaat betaald kan het zijn dat je webhosting gedactiveerd wordt, na een daactivate worden alle gegevens verwijderd. Zorg er dus voor dat facturen steeds optijd betaald worden.</p>
                </div>
                <div class="mb-3">
                    <h3>Wat is SSL?</h3>
                    <p>SSL zorgt er voor dat de verbinding van en naar je website veilig verloopt. Zo kunnen bezoekers veilig gegevens invoeren zonder dat andere dit kunnen afluisteren. SSL kan je gratis activeren, dit raden we dus zeker aan!</p>
                </div>
                <div class="mb-3">
                    <h3>Wat is een document root?</h3>
                    <p>De document root is de folder waar het begin van je website wordt geplaatst. Meestal is dit public_html, wanneer je de website in een subfolder plaatst dien je deze optie aan te passen. Voor sommige frameworks zoals Laravel hebben we hier reeds rekening mee gehouden en dien je de public folder niet toe te voegen in de document root.</p>
                </div>
                <div class="mb-3">
                    <h3>Wat is de template?</h3>
                    <p>Elke website werkt anders, vaak worden CMS of frameworks gebruikt zoals WordPress, Drupal of Laravel. Elk van deze frameworks werkt anders en heeft aangepast configuratie nodig, via templates kan je deze aangepast configuratie activeren.</p>
                </div>
                <div class="mb-3">
                    <h3>Waarom werkt mijn .htaccess niet?</h3>
                    <p>Onze servers draaien op de meest recente versie van Cent OS 8/Alma Linux 8, sinds enkele jaren is mod_php de module die .htaccess mogelijk maakt niet meer in ontwikkeling, er zijn andere, betere alternatieven. Daarom zijn al onze servers uitgerust met Nginx samen met PHP-FPM. Alle belangrijkste configuraties zijn al opgenomen in onze templates, heb je toch iets custom nodig wat je normaal via je htaccess bestand deed dan ken je best contact opnemen met onze support zodat we deze configuratie specifiek voor je website toevoegen. Soms kan het ook zijn dat je gebruik kan maken van een .user.ini bestand.</p>
                </div>
                <div class="mb-3">
                    <h3>Welke PHP versie wordt ondersteunt?</h3>
                    <p>Om er voor te zorgen dat technisch alles in orde is van je website en er geen enkel veiligheidsrisico wordt genomen. Proberen we steeds zo snel mogelijk de recentste software versies met stabiele ondersteuning in gebruik te nemen. Op dit moment ondersteunen we daarom alleen maar PHP8.</p>
                </div>
            </div>
        </div>

        <div class="row mt-5 mb-5">
            <div class="col-12">
                <h2>Domeinnamen</h2>
                <div class="mb-3">
                    <h3>Hoe kan ik een domeinnaam registeren?</h3>
                    <p>Na het aanmaken van een account kan je via het menu bij domeinnamen een domeinnaam registeren.</p>
                </div>
                <div class="mb-3">
                    <h3>Moet ik bij een domeinnaam ook webhosting afnemen?</h3>
                    <p>Nee, tijdens het registeren van je domeinnaam krijg je de keuze of je ook webhosting wil afnemen of niet.</p>
                </div>
                <div class="mb-3">
                    <h3>Moet ik een domeinnaam jaarlijks betalen?</h3>
                    <p>Ja, domeinnamen worden beheerd door internationale instanties, het veilig en online houden van het internet heeft een kost, daarom wordt er voor een domeinnaam jaarlijks opnieuw aangerekend. Jaarlijks één maand voor het aflopen van de domeinnaam ontvang je een factuur. Wanneer je dit factuur telaat betaald kan het zijn dat de domeinnaam wordt afgelosten. Het weer activeren van de domeinnaam kan, maar heeft een extra kost afhankelijk van de extentie.</p>
                </div>
                <div class="mb-3">
                    <h3>Wat is domeinnaam extentie of topleveldomain?</h3>
                    <p>Een domeinnaam extensie is het .com, .be, .nl, .enz deel van de domeinnaam.</p>
                </div>
                <div class="mb-3">
                    <h3>Wat is een nameserver?</h3>
                    <p>Een nameserver is een speciale server die aangeeft waar je de hosting van je domeinnaam staat. De nameserver zorgt voor een technische vertaling van de domeinnaam naar een IP adres.</p>
                </div>
                <div class="mb-3">
                    <h3>Zijn mijn gegevens publiek zichtbaar?</h3>
                    <p>Afhankelijk van de domeinnaam extensie kunnen je ingevoerde gegevens publiek getoond worden in de WHOIS. Bij .be domeinnamen wordt sinds de GDPR wetgeving geen persoonsgegevens meer publiek getoond, enkel wanneer je het organisatie veld invult zullen de gegevens publiek zichtbaar zijn.</p>
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
<?php /**PATH /var/www/html/resources/views/faq.blade.php ENDPATH**/ ?>