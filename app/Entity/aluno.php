<?php
    namespace App\Entity;

    use App\Db\Database;
    use \PDO;

    class Aluno {

        public $idAluno;
        public $nome;
        public $cpf;
        public $endereco;
        public $pacote;
        public $modo;
        public $contrato;

        public function cadastrar(){
            $obDatabase = new Database('aluno');
            $this->idAluno = $obDatabase->insert([
                    'nome' => $this->nome,
                    'cpf' => $this->cpf,
                    'endereco' => $this->endereco,
                    'pacote' => $this->pacote,
                    'modo' => $this->modo,
                    'contrato' => $this->contrato
            ]);
        
            return true;
        }

        public function atualizar(){
            return (new Database('aluno'))->update('idAluno = '.$this->idAluno, [
                    'nome' => $this->nome,
                    'cpf' => $this->cpf,
                    'endereco' => $this->endereco,
                    'pacote' => $this->pacote,
                    'modo' => $this->modo,
                    'contrato' => $this->contrato
            ]);

        }


        public function excluir(){
            return (new Database('aluno'))->delete('idAluno = '.$this->idAluno);
        }

        public static function getAluno($where = null, $order = null, $limit = null){
            return (new Database('aluno'))->select($where,$order,$limit)
                                          ->FetchAll(PDO::FETCH_CLASS, self::class);
        }


        public static function getQuantidadeAlunos($where = null){
            return (new Database('aluno'))->select($where,null,null,'COUNT(*) as qtd')
                                          ->FetchObject()
                                          ->qtd;
        }

        public static function editAluno($idAluno){
            return (new Database('aluno'))->select('idAluno = '.$idAluno)
                                          ->fetchObject(self::class);
        }


    }

?>