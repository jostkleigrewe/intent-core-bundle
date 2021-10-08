<?php
declare(strict_types = 1);

namespace Jostkleigrewe\IntentCoreBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class JostkleigreweIntentCoreBundle
 *
 * @package Jostkleigrewe\IntentCoreBundle
 */
class JostkleigreweIntentCoreBundle extends Bundle
{

    /**
     * This directory structure requires to configure the bundle path to its root directory
     *
     * @return string
     */
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}