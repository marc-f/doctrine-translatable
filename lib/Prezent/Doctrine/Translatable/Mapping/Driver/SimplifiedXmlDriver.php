<?php

/*
 * (c) Prezent Internet B.V. <info@prezent.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prezent\Doctrine\Translatable\Mapping\Driver;

use Doctrine\Common\Persistence\Mapping\Driver\FileDriver as DoctrineFileDriver;
use Doctrine\ORM\Mapping\Driver\XmlDriver as ORMXmlDriver;
use Prezent\Doctrine\Translatable\Mapping\PropertyMetadata;
use Prezent\Doctrine\Translatable\Mapping\TranslatableMetadata;
use Prezent\Doctrine\Translatable\Mapping\TranslationMetadata;
use SimpleXMLElement;

/**
 * @author Gonzalo Vilaseca <gvilaseca@reiss.co.uk>
 */
class SimplifiedXmlDriver extends XmlDriver
{

}
