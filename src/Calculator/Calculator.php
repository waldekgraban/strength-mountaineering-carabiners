<?php
/*
 *
 * Created by Waldemar Graban 2020
 *
 */

namespace Waldekgraban\Carabiners\Calculator;

class Calculator
{
    public function getCarabinerWeakness($properties)
    {
        $kilonewton = 0.00980665;   //1 kg

        $full_long_axis_strength          = round($properties->long_axis_strength / $kilonewton, 2);
        $after_loading_long_axis_strength = round($full_long_axis_strength - $this->load, 2);

        if ($properties->lateral_strength) {
            $lateral = [
                'the transverse axis'               => $full_lateral_strength = round($properties->lateral_strength / $kilonewton, 2) . ' kg',
                'the transverse axis after loading' => ($full_lateral_strength - $this->load) . ' kg',
            ];
        } else {
            $lateral = ['transversal use' => 'This carabiner cannot be used transversely'];
        }

        $resultArray = [
            'the long axis'               => $full_long_axis_strength . ' kg',
            'the long axis after loading' => $after_loading_long_axis_strength . ' kg',
        ];

        $results = array_merge($resultArray, $lateral);

        return $this->showWeakness($results);
    }

    public function showWeakness($results)
    {
        echo "<b>Total strength of the carabiner in: </b><br/><br/>";
        foreach ($results as $key => $value) {
            echo $key . ' = <b>' . $value . " </b><br/>";
        }
    }
}
