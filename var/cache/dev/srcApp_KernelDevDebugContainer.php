<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPvxuTti\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPvxuTti/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPvxuTti.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPvxuTti\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerPvxuTti\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'PvxuTti',
    'container.build_id' => '78452bf4',
    'container.build_time' => 1585327779,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPvxuTti');
