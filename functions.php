<?php

if (isset($_REQUEST['analyze'])){

    function word_validation($string){

        if (!emty($string)){      //provjera dali je polje prazno
            if (strlen($string) >2){   //provjera dali ima vise od dva slova
                if (preg_match('/[a-zA-Z]/', $string)){    //  izmedu dva / / odredujemo pocetak i kraj  regex nam filtriraju zapise
                   return $string;
                }else{
                    return 'Riječ za analizu ne smije sadržavati brojeve i znakove';
                }
            }else{
                return 'Riječ za analizu mora sazržavati najmanje tri slova';
            }
        }else{
            return 'Upišite riječ u polje';
        }
    }

    function to_uppercase($string){
        return startoupper($string);

    }

    function separate_into_letters($string){       //riječi treba razdvojiti na slova 
        // implode()
    }

    function vowels($string){               // samoglasnici
        
    }

    function consonats($string){            //suglasnici
        
    }

    function cro_letters($string){        //provjeriti hrvatska slova
        
    }

    function print($string){
        
    }
}

?>