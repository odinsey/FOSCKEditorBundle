<?php

/*
 * This file is part of the FOSCKEditor Bundle.
 *
 * (c) 2018 - present  Friends of Symfony
 * (c) 2009 - 2017     Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Odinsey\CKEditorBundle;

use Odinsey\CKEditorBundle\DependencyInjection\FOSCKEditorExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @author GeLo <geloen.eric@gmail.com>
 */
final class OdinseyCKEditorBundle extends Bundle
{
    public function getContainerExtension(): FOSCKEditorExtension
    {
        return new FOSCKEditorExtension();
    }
}
