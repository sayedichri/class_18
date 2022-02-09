<?php


namespace App\classes;


class Example
{
    public $name;
    public $data = [];



    public function index()
    {
//        $this->name = 'BItm';
//        $this->name = 'Basis';
//        echo $this->name;
//        $this->data = [ 10, 20, 30, 'BiTM', "basis", 100.200, true, false];
////        echo $this->data[7];
//        foreach ($this->data as $key=> $item)
//        {
//            echo $key.' '.$item.'<br/> ';
//        }

        $this->data = [
            0 => [
                'name' => 'Sayed',
                'email' => 'sayed@gmailcom',
                'mobile' => [
                    'personal' => '01832343822',
                    'parent'   => "01823154164"
                ],
            ],
            1 => [
                'name' => 'Abu-Sayed',
                'email' => 'abusayed@gmailcom',
                'mobile' => [
                    'personal' => '01772343822',
                    'parent'   => '12314526443',
                ],
            ],
            2 => 'Bitm',
            3 => [
                'name' => 'sojib',
                'email' => 'sojob@hajda.com',
                'mobile' => '13405476385'
            ],
        ];
//            echo $this->data[0]['name'];
//            echo $this->data[1]['email'] ;
//            echo $this->data[1]['mobile'] ;

//
//        foreach ($this->data as $item)
//        {
////            echo $item['name']. ' '.$item['email'].' '.$item['mobile']. '<br/>';
//            if (is_array($item))
//            {
//                foreach ($item as $value)
//                {
//                    if (is_array($value))
//                    {
//                        foreach ($value as $v_value)
//                        {
//                            echo $v_value.' ';
//                        }
//                    }
//                    else{
//                        echo $value.' ';
//                    }
//
//                }
//            }
//            else{
//                echo $item;
//            }
//
//            echo '<br/>';
//        }
        echo '<pre>';
//        print_r($this->data);
        var_dump($this->data);
        $
    }
}