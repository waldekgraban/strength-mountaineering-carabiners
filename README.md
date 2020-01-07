# Strength of mountaineering carabiners

Check the strength of different types of climbing carabiners

![enter image description here](https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Carabiner.jpg/320px-Carabiner.jpg)
Various types of snap hooks are used in speleology and climbing on a daily basis.
Climbing carabiners are supported allowing safe movement in rocks.

Keep in mind that there are many types of carabiners and each one is used in a slightly different way. Currently, the European standard EN12275: 1998 distinguishes types of carabiners that we can use for belaying.

Each carabiner has several basic parameters. E.g. Type Basic (B) to be used anywhere in the safety chain (20 kN long axis strength, 7 kN transverse strength, 7 kN open carabiner long axis strength, 15 mm ground clearance). to be used anywhere in the safety chain (20 kN long axis strength, 7 kN transverse strength, 7 kN open carabiner long axis strength, 15 mm ground clearance).

![enter image description here](https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/CarabinerTerminology.jpeg/320px-CarabinerTerminology.jpeg)
If you want to check what load your snap hook can withstand, just give:

    $carabiner_type = "B";   // (string) supported types: B, D, H, X, K, Q
    $load           = 80;    // (int) only in kg.

And just run file.

The script return dumps the data table carabiner:

    [Carabiner] => stdClass Object(
            [name] => Directionel
            [clearance] => 15
            [lateral_strength] => 
            [long_axis_strength] => 20
            [open_long_axis_strength] => 7
    )
    
Where:

 - clearance = mm
 - lateral_strength = kN
 - long_axis_strength = kN
 - open_long_axis_strength = kN

And strength:
```
  [Strength] => Array
        (
            [total strength of the carabiner in the long axis] => 2039.43 kg
            [total strength of the carabiner in the long axis after loading] => 1959.43 kg
            [transversal use] => This carabiner cannot be used transversely
        )
