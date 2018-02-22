<?php

class Form{

    private $data;
    public $surround='p';
    


    public function  __construct($data = array()){
        $this->data = $data;
    }

    private function surround($html) {
        return "<{$this->surround}>{$html}</{$this->surround}>";

    }

    private function getValue($index){
        return isset ($this->data[$index]) ? $this->data[$index] : null;

    }

    public function input($attrs){
        $input = '<input ';
        foreach($attrs as $key => $value){
            $val = ' ' .$key.'="';
            switch($key){
                case 'class':
                foreach ($value as $valeurClass) {
                    $val .= ' '.$valeurClass;
                }
                break;
                default :
                $val .=$value;
                break;
            }
            $val .= '"';
            $input .= ' '. $val;
        }
        $input .=' required />'; 
                
        return  $this->surround($input);

    }

    public function submit($class=false,$id){
        if($class){
            $myClass = '';
            foreach ($class as $value) {
                $myClass .= ' '.$value;
            }
            return $this->surround('<button class="' . $myClass  . '" type = "submit" id="' . $id . '">Envoyer</button>');
        } 
        return $this->surround('<button type = "submit">Envoyer</button>');
    }
}

?>
