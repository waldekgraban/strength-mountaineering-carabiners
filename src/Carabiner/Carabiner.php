<?php
/*
 *
 * Created by Waldemar Graban 2020
 *
 */

namespace Waldekgraban\Carabiners\Carabiner;

use Waldekgraban\Carabiners\Repository\Repository;

class Carabiner
{
    protected $type;
    protected $load;

    public function __construct($type, $load)
    {
        $this->type = $type;
        $this->load = $load;
    }

    public function type()
    {
        return $this->type;
    }

    public function property()
    {
        $repository = new Repository($this->type);

        return (object) $repository->getProperty($this->type);
    }
}
