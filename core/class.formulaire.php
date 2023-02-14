<?php
class Formulaire
{
    //Je crée des variable pour chacun des champs que j'ai a créer
    public $name;
    public $id;
    public $class;
    public $placeholder;
    public $action;
    public $method;
    public $type;
    public $value;

    //Je vais faire mon constructeur ici car comme ça il pourra tout prendre en compte pour ce qui est des setter et getter
    public function __construct($args=array())
    {
        $default = array(
            'name' => 'name',
            'id' => 'id',
            'action' => 'index.php',
            'method' => 'POST'
        );
        $args = array_merge($default,$args);
        $this->name = $args['name'];
        $this->id = $args['id'];
        $this->action = $args['action'];
        $this->method = $args['method'];
        echo '<form name="'.$this->name.'" id="'.$this->id.'" action="'.$this->action.'" method="'.$this->method.'">';
    }
    //Je crée des setter ici
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setClass($class)
    {
        $this->class = $class;
    }
    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
    }
    public function setAction($action)
    {
        $this->action = $action;
    }
    public function setMethode($method)
    {
        $this->method = $method;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
    //Tous les setter permettrons de changer les id et tout ce qui va bien dans nos champs
    //Je crée mes getters ici
    public function getName()
    {
        return $this->name;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getClass()
    {
        return $this->class;
    }
    public function getPlaceholder()
    {
        return $this->placeholder;
    }
    public function getAction()
    {
        return $this->action;
    }
    public function getMethod()
    {
        return $this->method;
    }
    public function getType()
    {
        return $this->type;
    }
    public function getValue()
    {
        return $this->value;
    }
    //Voilà les getter sont fait le html générera donc nos id via des méthode et les mettra au bons endroit via nos getters
    //la méthode pour les input
    public function inputTexte()
    {
        //générer mon input texte
        echo '<input type="'.$this->type.'" name="'.$this->name.'" placeholder="'.$this->placeholder.'" id="'.$this->id.'">';
    }
    //On va crée la methode pour le bouton
    public function buttonSubmint()
    {
        echo'<button type="'.$this->type.'" name="'.$this->name.'">Envoyer';
    }
    //On crée la méthode pour les select
    public function selectMultiple()
    {
        echo '<select name="'.$this->name.'" id="'.$this->id.'">';
        for($i=18;$i<=55;$i++)
        {
            echo '<option value="'.$i.'">'.$i.'</option>';
        }
        echo '</select>';
    }
    //On va crée la methode pour traiter le formulaire et l'enregistrer au format csv
    public function evalCSV()
    {
        $fp = fopen(date('y-m-d-h-i-s').'.csv','w');
        fputcsv($fp,$_POST);
        fclose($fp);
    }
}
?>