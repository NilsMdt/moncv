<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.basic_entry_point.main' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/EntryPoint/AuthenticationEntryPointInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/EntryPoint/BasicAuthenticationEntryPoint.php';

return $this->services['security.authentication.basic_entry_point.main'] = new \Symfony\Component\Security\Http\EntryPoint\BasicAuthenticationEntryPoint('Secured Area');
