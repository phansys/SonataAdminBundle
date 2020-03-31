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
 * Implementations should provide arrays of FieldDescriptionInterface instances.
 *
 * @author Thomas Rabaix <thomas.rabaix@sonata-project.org>
 */
interface FieldDescriptionRegistryInterface
{
    /**
     * Return FormFieldDescription.
     *
     * @param string $name
     *
     * @return FieldDescriptionInterface
     */
    public function getFormFieldDescription(string $name): \Sonata\AdminBundle\Admin\FieldDescriptionInterface;

    /**
     * Build and return the collection of form FieldDescription.
     *
     * @return FieldDescriptionInterface[] collection of form FieldDescription
     */
    public function getFormFieldDescriptions(): array;

    /**
     * Returns true if the admin has a FieldDescription with the given $name.
     *
     * @param string $name
     *
     * @return bool
     */
    public function hasShowFieldDescription(string $name): bool;

    /**
     * Adds a FieldDescription.
     *
     * @param string $name
     */
    public function addShowFieldDescription(string $name, FieldDescriptionInterface $fieldDescription);

    /**
     * Removes a ShowFieldDescription.
     *
     * @param string $name
     */
    public function removeShowFieldDescription(string $name);

    /**
     * Adds a list FieldDescription.
     *
     * @param string $name
     */
    public function addListFieldDescription(string $name, FieldDescriptionInterface $fieldDescription);

    /**
     * Removes a list FieldDescription.
     *
     * @param string $name
     */
    public function removeListFieldDescription(string $name);

    /**
     * Returns a list depend on the given $object.
     *
     * @return FieldDescriptionCollection
     */
    public function getList(): \Sonata\AdminBundle\Admin\FieldDescriptionCollection;

    /**
     * Returns true if the filter FieldDescription exists.
     *
     * @param string $name
     *
     * @return bool
     */
    public function hasFilterFieldDescription(string $name): bool;

    /**
     * Adds a filter FieldDescription.
     *
     * @param string $name
     */
    public function addFilterFieldDescription(string $name, FieldDescriptionInterface $fieldDescription);

    /**
     * Removes a filter FieldDescription.
     *
     * @param string $name
     */
    public function removeFilterFieldDescription(string $name);

    /**
     * Returns the filter FieldDescription collection.
     *
     * @return FieldDescriptionInterface[]
     */
    public function getFilterFieldDescriptions(): array;

    /**
     * Returns a filter FieldDescription.
     *
     * @param string $name
     *
     * @return FieldDescriptionInterface|null
     */
    public function getFilterFieldDescription(string $name): ?\Sonata\AdminBundle\Admin\FieldDescriptionInterface;
}
