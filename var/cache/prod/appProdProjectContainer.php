<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVaa4zin\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVaa4zin/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerVaa4zin.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerVaa4zin\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerVaa4zin\appProdProjectContainer(array(
    'container.build_hash' => 'Vaa4zin',
    'container.build_id' => 'e03174a0',
    'container.build_time' => 1517239126,
));
