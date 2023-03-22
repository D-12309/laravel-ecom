<?php

namespace App\Traits;


trait Helpers
{
    public static function purchaseOptions() {
        return [
            1 => "Inverter",
            "80*40 GI Pipe",
            "60*40 GI Pipe",
            "40*40 GI Pipe",
            "2.5 Sq.mm. DC Cable",
            "4 Sq.mm. DC Cable",
            "2.5 Sq.mm. AC Cable",
            "4 Sq.mm. AC Cable",
            "MC4 Connector",
            "ACDB/ DCDB",
            "16/25 Sq.mm. LA Cable",
            "PVC Pipe",
            "Elbow",
            "T",
            "Saddle",
            "Cable Tie",
            "GI Spray/ Color",
            "Lugs",
            "Base Plate/ Chapla",
            "Earthing Kit"
        ];
    }

    public static function materialUnit($material) {
        if(!$material) return null;

        $unit = [];
        $unit["Inverter"] = "Nos.";
        $unit["80*40 GI Pipe"] = "Nos.";
        $unit["60*40 GI Pipe"] = "Nos.";
        $unit["40*40 GI Pipe"] = "Nos.";
        $unit["2.5 Sq.mm. DC Cable"] = "Mtr";
        $unit["4 Sq.mm. DC Cable"] = "Mtr";
        $unit["2.5 Sq.mm. AC Cable"] = "Mtr";
        $unit["4 Sq.mm. AC Cable"] = "Mtr";
        $unit["MC4 Connector"] = "Mtr";
        $unit["ACDB/ DCDB"] = "Mtr";
        $unit["16/25 Sq.mm. LA Cable"] = "Mtr";
        $unit["PVC Pipe"] = "Nos.";
        $unit["Elbow"] = "Nos.";
        $unit["T"] = "Nos.";
        $unit["Saddle"] = "Nos.";
        $unit["Cable Tie"] = "PKt.";
        $unit["GI Spray/ Color"] = "Nos.";
        $unit["Lugs"] = "Nos.";
        $unit["Base Plate/ Chapla"] = "Nos.";
        $unit["Earthing Kit"] = "Nos.";

        return $unit[$material];
    }
}
