<?php

class Preferences
{
    private $data;
    private static Preferences $instance;

    private function __construct()
    {
        $this->data = parse_ini_file('./config/config.ini');
    }

    public static function getInstance()
    {
        if(empty(self::$instance))
        {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function getData($key)
    {
        return $this->data[$key];
    }

    public function setData($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function saveData()
    {
        $string = '';
        if($this->data)
        {
            foreach($this->data as $key=>$value)
            {
               $string .= $key.'='.$value;
            }
        }
        file_put_contents('./config/config.ini', $string);
    }

}