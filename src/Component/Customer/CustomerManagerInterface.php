<?php

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\Component\Customer;

use Sonata\CoreBundle\Model\ManagerInterface;
use Sonata\CoreBundle\Model\PageableManagerInterface;

interface CustomerManagerInterface extends ManagerInterface, PageableManagerInterface
{
}
