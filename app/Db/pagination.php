<?php
    namespace App\Db;

    class Pagination {

        private $limit;

        private $results;

        private $pages;

        private $currentpage;


        public function __construct($results, $currentpage = 1, $limit = 10){
            $this->results = $results;
            $this->limit = $limit;
            $this->currentpage = (is_numeric($currentpage) and $currentpage > 0) ? $currentpage : 1;
            $this->calculate();
        }

        private function calculate(){
            $this->pages = $this->results > 0 ? ceil($this->results / $this->limit) : 1;

        $this->currentpage = $this->currentpage <= $this->currentpage ? $this->currentpage : $this->pages;
         }

        public function getLimit(){
            $offset = ($this->limit * ($this->currentpage - 1));
            return $offset.','.$this->limit;
         }

        public function getPages(){
            if($this->pages == 1) return[];

            $paginas = [];
            for ($i = 1; $i <= $this->pages; $i++){
                $paginas[] = [
                    'pagina' => $i,
                    'atual'  => $i == $this->currentpage
                ];
            }
            return $paginas;
        }







    }



?>