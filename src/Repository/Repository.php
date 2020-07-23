<?php
/*
 *
 * Created by Waldemar Graban 2020
 *
 */

namespace Waldekgraban\Carabiners\Repository;

class Repository
{
    protected $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function type()
    {
        return $this->type;
    }

    public function getProperty($type)
    {
        switch ($type) {
            case "B":
                $parameters = [
                    'name'                    => 'Basic',
                    'clearance'               => 15,
                    'lateral_strength'        => 7,
                    'long_axis_strength'      => 20,
                    'open_long_axis_strength' => 7,
                ];

                return $parameters;
                break;
            case "D":
                $parameters = [
                    'name'                    => 'Directionel',
                    'clearance'               => 15,
                    'lateral_strength'        => null,
                    'long_axis_strength'      => 20,
                    'open_long_axis_strength' => 7,
                ];

                return $parameters;
                break;
            case "H":
                $parameters = [
                    'name'                    => 'HMS',
                    'clearance'               => 15,
                    'lateral_strength'        => 7,
                    'long_axis_strength'      => 20,
                    'open_long_axis_strength' => 6,
                ];

                return $parameters;
                break;
            case "X":
                $parameters = [
                    'name'                    => 'Oval',
                    'clearance'               => 15,
                    'lateral_strength'        => 7,
                    'long_axis_strength'      => 18,
                    'open_long_axis_strength' => 5,
                ];

                return $parameters;
                break;
            case "K":
                $parameters = [
                    'name'                    => 'Klettersteig',
                    'clearance'               => 21,
                    'lateral_strength'        => 7,
                    'long_axis_strength'      => 25,
                    'open_long_axis_strength' => 8,
                ];

                return $parameters;
                break;
            case "Q":
                $parameters = [
                    'name'                    => 'Maillon rapid',
                    'clearance'               => 15,
                    'lateral_strength'        => 10,
                    'long_axis_strength'      => 25,
                    'open_long_axis_strength' => null,
                ];

                return $parameters;
                break;
            default:
                echo "Unsupported carabiner type...";
        }
    }
}
