<?php
    namespace App\Entity;

    use App\Db\Database;
    use \PDO;

    class Aulas {

        public $idAulas;
        public $numero;
        public $dataaula;
        public $dia;
        public $horario;
        public $nomeAluno;
        public $tipo;

        public function cadastrar(){
            $obDatabase = new Database('aulas');
            $this->idAulas = $obDatabase->insert([
                    'numero' => $this->numero,
                    'dataaula' => $this->dataaula,
                    'dia' => $this->dia,
                    'horario' => $this->horario,
                    'nomeAluno' => $this->nomeAluno,
                    'tipo' => $this->tipo,
            ]);
        
            return true;
        }

        public function atualizar(){
            return (new Database('aulas'))->update('idAulas = '.$this->idAulas, [
                    'numero' => $this->numero,
                    'dataaula' => $this->cpf,
                    'dia' => $this->dia,
                    'horario' => $this->horario,
                    'nomeAluno' => $this->nomeAluno,
                    'tipo' => $this->tipo,
            ]);

        }

        public function excluir(){
            return (new Database('aulas'))->delete('idAulas = '.$this->idAulas);
        }

        public static function getAulas($where = null, $order = null, $limit = null){
            return (new Database('aulas'))->select($where,$order,$limit)
                                          ->FetchAll(PDO::FETCH_CLASS, self::class);
        }

        public static function getAulas2($where2 = null, $order = null, $limit = null){
            return (new Database('aulas'))->select($where2,$order,$limit)
                                          ->FetchAll(PDO::FETCH_CLASS, self::class);
        }


        public static function getQuantidadeAulas($where = null){
            return (new Database('aulas'))->select($where,null,null,'COUNT(*) as qtd')
                                          ->FetchObject()
                                          ->qtd;
        }

        public static function editAulas($idAulas){
            return (new Database('aulas'))->select('idAulas = '.$idAulas)
                                          ->fetchObject(self::class);
        }


    }

?>