<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Behat\Context\Transform;

use Behat\Behat\Context\Context;
use Sylius\Behat\Service\SharedStorageInterface;

class UserContext implements Context
{
    public function __construct(private SharedStorageInterface $sharedStorage)
    {
    }

    /**
     * @Transform /^(I|my|he|his|she|her|"this user")$/
     */
    public function getLoggedUser()
    {
        return $this->sharedStorage->get('user');
    }
}
