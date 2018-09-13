<?php 
Class Human{
    
    public function haveDrink(Drink $drink){
        $typeDrink = $drink->getType();
        if($typeDrink){
            echo 'Вы выпили '.$typeDrink;
        }else{
            echo 'Для начала необходимо выбрать, что вы будете пить';
        }
    }
}

Class Drink{

    private $type;

    public function setType($type){
        $this->type = $type;
    }

    public function getType(){
        return $this->type;
    }
}

$human = new Human();
$drink = new Drink();

$drink->setType('Сок');
$human->haveDrink($drink);

?>
