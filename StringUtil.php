<?php


namespace App\Util;


class StringUtil
{
    public static function getPreTripChecklist() {

            return [
                'general' => [
                    'title' => 'General',
                    'data' => [
                        "Vehicle Rego" => -1,
                        "Fleet number" => -1,
                    ]
                ],
                'externalvehiclechecks' => [
                    'title' => "External vehicle checks",
                    'data' => self::getExternalChecks()
                ],
                'incabinchecks' => [
                    'title' => 'In-cabin checks',
                    'data' => self::getInCabinChecks()
                ],
                'freezerinfo' => [
                    'title' => 'Freezer Info',
                    'data' => self::getFreezingInfoQuestions()
                ],
                'drivinginfo' => [
                    'title' => 'Driver Checklist',
                    'data' => self::getDrivingInfoQuestions()
                ],
                'min_km' => config('mrt.min_km')
            ];

    }

    public static function getBreakTimeList($runsheet, $withDecoration=true) {
        $breakInfos = $runsheet->breakinfos;
        if(is_null($breakInfos)) {
            return 'No Break';
        }
        $str = '<ol style=\'list-style: none\'>';
        $total_breaks = 0;
        foreach ($breakInfos as $breakInfo) {
            $breakInMinutes = $breakInfo->start_datetime->diffInMinutes($breakInfo->end_datetime);
            $total_breaks += $breakInMinutes;
            $str .="<li>Start: ".$breakInfo->start_datetime->format("H:i").", End: ".$breakInfo->end_datetime->format("H:i")." = ".$breakInMinutes." mins</li>";
        }
        if($total_breaks == 0) {
            return $withDecoration ? 'No Break' : 0;
        }
        $runsheet->total_breaks = $total_breaks;
        return self::minutes2hr($runsheet->total_breaks, $withDecoration).'&nbsp;<a href="#" data-html="true" data-trigger="focus" data-container="body" data-placement="top"  data-toggle="popover" title="Breaks Taken" data-content="'.$str.'</ol>"><i class="fa fa-info-circle"></i></a>';
    }

    public static function minutes2hr($minutes, $withDecoration = true) {
        if(!$withDecoration) {
            return bcdiv($minutes,60,2);
        }
        if($minutes < 60) {
            return $minutes."min";
        }
        return bcdiv($minutes,60,2)."hr";
    }

    public static function getInCabinChecks() {
        return [
            "q1" => "Registration Label- Current and Attached" ,
            "q2" =>"Accreditation Labels- Current and Legible" ,
            "q3" =>"All Gauges Working" ,
            "q4" => "Horn is Working" ,
            "q5" => "Air Pressure at Correct Level/ Brake Failure Indicator Light" ,
            "q6" =>"Clean Cabin/ No Loose Items" ,
            "q7" =>"Fuel Levels OK" ,
            "q8" =>"Seat Belt- In Good Condition" ,
            "q9" =>"E- Tag present" ,
            "q10" =>"Fuel Card in Truck" ,
            "q11" =>"Fire Extinguisher" ,
            "q12" =>"Intercept Book" ,
            "q13" =>"First Aid Kit" ,
            "q14" =>"Required Gazettes" ,
            "q15" =>"DRR Book in Vehicle"
        ];
    }

    public static function getDrivingInfoQuestions() {
        return [
            "q1" => "I have a correct, current and valid licence to operate this equipment?",
            "q2" => "My work diary is current and correct?",
            "q3" => "I am able to complete my current work expectations within the legal fatigue and maximum hour guidelines?",
            "q4" => "I am fit to undertake any allocated tasks?",
            "q5" => "My load is restrained in accordance with the load restraint guide?",
            "q6" => "The load I am carrying is within the legal maximum weight, axle weight and dimension limits?",
            "q7" => "This vehicle and any trailing equipment, is roadworthy to the limits and capabilities of the inspection?",
            "q8" => "I am not fatigued or suffering from any medical condition (that I am aware of) that may affect my ability to complete my allocated tasks?",
            "q9" => "I have been allowed adequate work time to complete my tasks in compliance with Driver Fatigue Management Regulations?",
            "q10" => "I have NOT consumed alcohol and/or drugs (prescription or otherwise) that may impair my ability to work and drive?",
            "q11" => "If I am unfit before or during my trip I will immediately notify my MRT Group contact and nor drive"
        ];
    }

    public static function getFreezingInfoQuestions() {
        return [
            "q1" => "Freezer is in Good working order."
        ];
    }

    public static function getExternalChecks() {
        return [
            "q1" => "Fluid levels",
            "q2" =>"Fluid Leaks",
            "q3" =>"Tyres-Tread, Wear, Pressure",
            "q4" =>"Hubs/Wheel Nut Indicators/ Wheel security",
            "q5" =>"Lights/ Indicators",
            "q6" =>"Reflectors/ Lenses",
            "q7" =>"Mirrors",
            "q8" =>"Windscreen/ Windows",
            "q9" =>"Wipers/Washers",
            "q10" =>"Compliance Plate- DG",
            "q11" =>"Load Restraint Equipment" ,
            "q12" =>"Suspension" ,
            "q13" =>"Gates Secured" ,
            "q14" => "Triangles in Vehicle" ,
            "q15" => "Air lines/ Electrical – Lights/ EBS" ,
            "q16" =>"Batteries/ Isolation" ,
            "q17" =>"Fifth Wheel/ Turntable" ,
            "q18" =>"Air tanks – Drain as Required" ,
            "q19" =>"Bodywork – Damage" ,
            "q20" => "Signage- DG" ,
            "q21" => "Under vehicle check – any fluid leaks"
        ];
    }

}