<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYp4ju9L\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYp4ju9L/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYp4ju9L.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYp4ju9L\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYp4ju9L\App_KernelDevDebugContainer([
    'container.build_hash' => 'Yp4ju9L',
    'container.build_id' => 'f6ae93c7',
    'container.build_time' => 1631526299,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYp4ju9L');
