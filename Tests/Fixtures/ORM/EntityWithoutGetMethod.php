<?php

/*
 * This file is part of the XiideaEasyAuditBundle package.
 *
 * (c) Xiidea <http://www.xiidea.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Xiidea\EasyAuditBundle\Tests\Fixtures\ORM;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class EntityWithoutGetMethod
{
    /**
     * @ORM\Column(type="string")
     */
    #[ORM\Column(type: 'string')]
    private $title;

    public function __construct($title = 'title')
    {
        $this->title = $title;
    }
}
