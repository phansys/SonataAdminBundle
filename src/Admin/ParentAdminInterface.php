<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\AdminBundle\Admin;

/**
 * This interface can be used to implement an admin that can have children
 * admins, meaning admin that correspond to objects with a relationship with
 * the object managed by this admin.
 *
 * @author Thomas Rabaix <thomas.rabaix@sonata-project.org>
 */
interface ParentAdminInterface
{
    /**
     * add an Admin child to the current one.
     */
    public function addChild(AdminInterface $child);

    /**
     * Returns true or false if an Admin child exists for the given $code.
     *
     * @param string $code Admin code
     *
     * @return bool True if child exist, false otherwise
     */
    public function hasChild(string $code): bool;

    /**
     * Returns an collection of admin children.
     *
     * @return array list of Admin children
     */
    public function getChildren(): array;

    /**
     * Returns an admin child with the given $code.
     *
     * @return AdminInterface|null
     */
    public function getChild(string $code): ?\Sonata\AdminBundle\Admin\AdminInterface;
}
