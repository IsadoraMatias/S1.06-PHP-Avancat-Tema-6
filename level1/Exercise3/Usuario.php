<?php
class Usuario
{
    private array $user = [];

    public function __set($name, $value)
    {
        $this->user[$name] = $value;
    }

    public function __isset($name)
    {
        if (isset($this->user[$name])) {
            echo "La propriedade " . $name . " existe: " . $this->user[$name];
        } else {
            echo "La propriedad " . $name . " no existe.";
        }
    }
}

$user = new Usuario();
$user->nombre = "Isa";
isset($user->nombre);
