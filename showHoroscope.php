<?php
function checkHoroscope($month, $day){
    //SM=StartMonth. EM=EndMonth, SD=StartDay, ED=EndDay
        $horoscopes = array(
            "ariesSM"     => 3,       "ariesEM"     => 4,       "ariesSD"     => 21,      "ariesED"     => 20,
            "taurusSM"    => 4,       "taurusEM"    => 5,       "taurusSD"    => 21,      "taurusED"    => 21,
            "geminiSM"    => 5,       "geminiEM"    => 6,       "geminiSD"    => 22,      "geminiED"    => 21,
            "cancerSM"    => 6,       "cancerEM"    => 7,       "cancerSD"    => 22,      "cancerED"    => 22,
            "leoSM"       => 7,       "leoEM"       => 8,       "leoSD"       => 23,      "leoED"       => 23,
            "virgoSM"     => 8,       "virgoEM"     => 9,       "virgoSD"     => 24,      "virgoED"     => 22,
            "libraSM"     => 9,       "libraEM"     => 10,      "libraSD"     => 23,      "libraED"     => 23,
            "scorpioSM"   => 10,      "scorpioEM"   => 11,      "scorpioSD"   => 24,      "scorpioED"   => 22,
            "sagittariusSM" => 11,    "sagittariusEM" => 12,    "sagittariusSD" => 23,    "sagittariusED"  => 21,
            "capricornSM"  => 12,     "capricornEM"  => 1,     "capricornSD"  => 22,   "capricornED"  => 20,
            "aquariusSM"  => 1,       "aquariusEM"  => 2,       "aquariusSD"  => 21,      "aquariusED"  => 18,
            "piscesSM"    => 2,       "piscesEM"    => 3,       "piscesSD"    => 19,      "piscesED"    => 20,
        );
        if($month == $horoscopes["ariesSM"] && $day >= $horoscopes["ariesSD"] || $month == $horoscopes["ariesEM"] && $day <= $horoscopes["ariesED"]){          
            $myHoroscope = "<h3>Aries</h3> <img src='./images/Aries.png'>";
        }
        if($month == $horoscopes["taurusSM"] && $day >= $horoscopes["taurusSD"] || $month == $horoscopes["taurusEM"] && $day <= $horoscopes["taurusED"]){          
            $myHoroscope = "<h3>Taurus</h3> <img src='./images/Taurus.png'>";
        }
        if($month == $horoscopes["geminiSM"] && $day >= $horoscopes["geminiSD"] || $month == $horoscopes["geminiEM"] && $day <= $horoscopes["geminiED"]){          
            $myHoroscope = "<h3>Gemini</h3> <img src='./images/Gemini.png'>";
        }
        if($month == $horoscopes["cancerSM"] && $day >= $horoscopes["cancerSD"] || $month == $horoscopes["cancerEM"] && $day <= $horoscopes["cancerED"]){          
            $myHoroscope = "<h3>Cancer</h3> <img src='./images/Cancer.png'>";
        }
        if($month == $horoscopes["leoSM"] && $day >= $horoscopes["leoSD"] || $month == $horoscopes["leoEM"] && $day <= $horoscopes["leoED"]){          
            $myHoroscope = "<h3>Leo</h3> <img src='./images/Leo.png'>";
        }
        if($month == $horoscopes["virgoSM"] && $day >= $horoscopes["virgoSD"] || $month == $horoscopes["virgoEM"] && $day <= $horoscopes["virgoED"]){          
            $myHoroscope = "<h3>Virgo</h3> <img src='./images/Virgo.png'>";
        }
        if($month == $horoscopes["libraSM"] && $day >= $horoscopes["libraSD"] || $month == $horoscopes["libraEM"] && $day <= $horoscopes["libraED"]){          
            $myHoroscope = "<h3>Libra</h3> <img src='./images/Libra.png'>";
        }
        if($month == $horoscopes["scorpioSM"] && $day >= $horoscopes["scorpioSD"] || $month == $horoscopes["scorpioEM"] && $day <= $horoscopes["scorpioED"]){          
            $myHoroscope = "<h3>Scorpio</h3> <img src='./images/Scorpio.png'>";
        }
        if($month == $horoscopes["sagittariusSM"] && $day >= $horoscopes["sagittariusSD"] || $month == $horoscopes["sagittariusEM"] && $day <= $horoscopes["sagittariusED"]){          
            $myHoroscope = "<h3>Sagittarius</h3> <img src='./images/Sagittarius.png'>";
        }
        if($month == $horoscopes["capricornSM"] && $day >= $horoscopes["capricornSD"] || $month == $horoscopes["capricornEM"] && $day <= $horoscopes["capricornED"]){          
            $myHoroscope = "<h3>Capricorn</h3> <img src='./images/Capricorn.png'>";
        }
        if($month == $horoscopes["aquariusSM"] && $day >= $horoscopes["aquariusSD"] || $month == $horoscopes["aquariusEM"] && $day <= $horoscopes["aquariusED"]){          
            $myHoroscope = "<h3>Aquarius</h3> <img src='./images/Aquarius.png'>";
        }
        if($month == $horoscopes["piscesSM"] && $day >= $horoscopes["piscesSD"] || $month == $horoscopes["piscesEM"] && $day <= $horoscopes["piscesED"]){          
            $myHoroscope = "<h3>Pisces</h3> <img src='./images/Pisces.png'>";
        }
        
        if(isset($myHoroscope)) {
            return $myHoroscope;
        }
}
?>