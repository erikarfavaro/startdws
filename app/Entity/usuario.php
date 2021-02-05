<?php

namespace App\Entity;
use App\Db\Database;
use \PDO;

class Usuario{

    public $idUsuario;
    public $nome;
    public $email;
    public $senha;

    public function registrar(){
        $obDatabase = new Database('usuario');
        $this->idUsuario = $obDatabase->insert([
            'nome' => $this->nome,
            'email' => $this->email,
            'senha' => $this->senha,
        ]);
        return true;
    }

    public static function getUsuarioEmail($email){
        return (new Database('usuario'))->select('email = "'.$email.'"')->fetchObject(self::class);
    }

}