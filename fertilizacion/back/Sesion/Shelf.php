<?php
/*
---------------------------------------------
	créé par le bienveillant M. Arciniegas 
---------------------------------------------
*/

class Shelf {    

    private static $_instance = null;

    private $array = array(    
    );

	public function set($clase,$obj) {    	    
        $this->array[$clase]=$obj;     
    }

    public function get($clase) {    
        return $this->array[$clase];
    }

    public static function open() {
        session_start();        
        self::$_instance=unserialize($_SESSION["shelf"]);
        if (!self::$_instance instanceof self){
            self::$_instance=new self();
            $_SESSION["shelf"]=serialize(self::$_instance);        
        }
        return self::$_instance;
    }

    public static function close(){
        $_SESSION["shelf"]=serialize(self::$_instance);
    }

    public static function clear(){
        self::$_instance=null;
        $_SESSION["shelf"]="";            
    }
}

