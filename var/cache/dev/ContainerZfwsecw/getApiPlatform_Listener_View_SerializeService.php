<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'api_platform.listener.view.serialize' shared service.

include_once $this->targetDirs[3].'/vendor/api-platform/core/src/EventListener/SerializeListener.php';

return $this->services['api_platform.listener.view.serialize'] = new \ApiPlatform\Core\EventListener\SerializeListener(${($_ = isset($this->services['serializer']) ? $this->services['serializer'] : $this->getSerializerService()) && false ?: '_'}, ${($_ = isset($this->services['ApiPlatform\Core\Serializer\SerializerContextBuilderInterface']) ? $this->services['ApiPlatform\Core\Serializer\SerializerContextBuilderInterface'] : $this->getSerializerContextBuilderInterfaceService()) && false ?: '_'});
