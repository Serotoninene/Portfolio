<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUZ37RwV\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUZ37RwV/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUZ37RwV.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUZ37RwV\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUZ37RwV\App_KernelDevDebugContainer([
    'container.build_hash' => 'UZ37RwV',
    'container.build_id' => '4c84df11',
    'container.build_time' => 1640523460,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUZ37RwV');