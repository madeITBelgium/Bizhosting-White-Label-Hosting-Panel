# Bizhosting - White label hosting reseller panel

## Installation

1. Download and install composer packages
```
git clone https://github.com/madeITBelgium/Bizhosting-White-Label-Hosting-Panel.git
cd Bizhosting-White-Label-Hosting-Panel
composer install
cp .env.example .env
```

2. Change .env file (App name, Database, API Tokens)

3. Change config/hosting.php, add your own packages.

4. Update logo
- resources/views/vendor/jetstream/application-logo.blade.php
- resources/views/vendor/jetstream/application-mark.blade.php

5. Add Terms and Privacy policy
- resources/markdown/policy.md
- resources/markdown/terms.md

6. Change public pages
- resources/views/faq.blade.php
- resources/views/features.blade.php
- resources/views/webhosting.blade.php
- resources/views/welcome.blade.php

## Upgrade
TODO


## Roadmap

### V1.1
### Domainname
- Register

### Webhosting
- Show server IP (Mail and detail)

### V2

#### Webhosting
 - Change package