<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMwAzisw\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMwAzisw/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMwAzisw.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMwAzisw\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMwAzisw\App_KernelDevDebugContainer([
    'container.build_hash' => 'MwAzisw',
    'container.build_id' => 'b5798314',
    'container.build_time' => 1721293341,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMwAzisw');