<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTlNDZg7\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTlNDZg7/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTlNDZg7.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTlNDZg7\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTlNDZg7\App_KernelDevDebugContainer([
    'container.build_hash' => 'TlNDZg7',
    'container.build_id' => 'bbae2d91',
    'container.build_time' => 1714379208,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTlNDZg7');
