<?php

/**
 * Description of CzDateTransformer
 *
 * @author Tomas Jirku
 */

namespace App\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;

class CzDateTimeTransformer implements DataTransformerInterface {
    
    public function transform($date){
      
        if($date == null) {
               return null;
           } else {
               $final_date = $date->format('d.m.Y H:i');
               
               return $final_date;
           }
    }
    
    public function reverseTransform($date){
       if($date == null) 
            {
                return null;
            } 
            else
            {
             $final_date =  \DateTime::createFromFormat("d.m.Y H:i",$date);
             
             return $final_date;
            } 
    }
}
