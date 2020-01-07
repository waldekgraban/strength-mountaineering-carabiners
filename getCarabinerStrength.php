<?php
/*
 *
 * Created by Waldemar Graban 2019
 *
 */
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

    public function getParameters()
    {
        return (object) $this->getCarabinerParameters($this->type);
    }

    public function getCarabinerWeakness($properties)
    {
        $kilonewton = 0.00980665;    //1 kg

        $full_long_axis_strength          = round($properties->long_axis_strength / $kilonewton, 2);
        $after_loading_long_axis_strength = round($full_long_axis_strength - $this->load, 2);

        if ($properties->lateral_strength) {
            $lateral = [
                'total strength of the carabiner in the transverse axis'               => $full_lateral_strength = round($properties->lateral_strength / $kilonewton, 2) . ' kg',
                'total strength of the carabiner in the transverse axis after loading' => ($full_lateral_strength - $this->load) . ' kg'
            ];
        } else {
            $lateral = ['transversal use' => 'This carabiner cannot be used transversely'];
        }

        $resultArray = [
            'total strength of the carabiner in the long axis'               => $full_long_axis_strength . ' kg',
            'total strength of the carabiner in the long axis after loading' => $after_loading_long_axis_strength . ' kg'
        ];

        return array_merge($resultArray, $lateral);
    }

    public function getResult()
    {
        $properties = $this->getParameters();

        $weakness = $this->getCarabinerWeakness($properties);

        $my_carabiner = [
            'Carabiner' => $properties,
            'Strength'  => $weakness,
        ];

        print("<pre>" . print_r($my_carabiner, true) . "</pre>");
    }

    public function getCarabinerParameters($type)
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

$carabiner_type = "B";       // supported types: B, D, H, X, K, Q
$load           = 80;        //kg
$carabiner      = new Carabiner($carabiner_type, $load);
print $carabiner->getResult();
