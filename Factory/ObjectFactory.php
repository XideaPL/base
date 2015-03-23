<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Base\Factory;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
class ObjectFactory implements ObjectFactoryInterface
{
    /*
     * @var string
     */
    protected $class;
    
    /*
     * 
     */
    public function __construct($class)
    {
        $this->class = $class;
    }
    
    /**
     * {@inheritdoc}
     */
    public function create()
    {
        return new $this->class;
    }
}