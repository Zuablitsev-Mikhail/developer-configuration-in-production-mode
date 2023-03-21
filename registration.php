<?php
/**
 * @author Mikhail Ziablitsev <mzuablitsev@gmail.com>
 * @copyright © 2023 Intexsoft.
 */

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Mizir_DeveloperConfigurationInProductionMode',
    __DIR__
);
