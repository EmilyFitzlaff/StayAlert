<?php

    include_once('class_pessoa.php');
    include_once('class_cidade.php');

    Class Desaparecido {
        private $Cpf;
        private $dataDesaparecimento;
        private $observacao;
        private $DataNascimento;
        private $NomeCompleto;

        public function setDataNascimento(Pessoa $DataNascimento) {
            $this->DataNascimento = $DataNascimento;
        }

        public function getDataNascimento() {
            return $this->DataNascimento;
        }

        public function setNomeCompleto(Pessoa $NomeCompleto) {
            $this->NomeCompleto = $NomeCompleto;
        }

        public function getNomeCompleto() {
            return $this->NomeCompleto;
        }

        public function setObservacao($observacao) {
            $this->observacao = $observacao;
        }

        public function getObservacao() {
            return $this->observacao;
        }

        public function setDataDesaparecimento($dataDesaparecimento) {
            $this->dataDesaparecimento = $dataDesaparecimento;
        }

        public function getDataDesaparecimento() {
            return $this->dataDesaparecimento;
        }

        public function setCpf(Pessoa $Cpf) {
            $this->Cpf = $Cpf;
        }

        public function getCpf() {
            return $this->Cpf;
        }

        private function SelectAll() {
            $consulta = Conexao::Conectar()->prepare("SELECT * FROM desaparecido JOIN pessoa USING(pes_cpf)");
            $consulta->execute();
            $aResultado = array();

            while($aLinha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $oCidade = new Cidade;
                $oPessoa = new Pessoa;
                $oDesaparecido = new Desaparecido;

                $oCidade->setCodigo($aLinha['CID_CODIGO']);
    

                $oPessoa->setNomeCompleto($aLinha['PES_DESCRICAO']);
                $oPessoa->setCpf($aLinha['PES_CPF']);
                $oPessoa->setDataNascimento($aLinha['PES_DATANASCIMENTO']);
                $oPessoa->setCidade($oCidade);

                $oDesaparecido->setCpf($oPessoa);
                $oDesaparecido->setDataDesaparecimento($aLinha['des_dataDesaparecimento']);
                $oDesaparecido->setObservacao($aLinha['DES_OBSERVACAO']);

                $aResultado[] = $oDesaparecido;
            }
            return $aResultado;  
        }

        public function returnSelectAll() {
            $aDados = $this->SelectAll();
            return $aDados;
        }

        public function CreateTable() {
            $aDados = $this->SelectAll();

            if (empty($aDados)) {
                ?>
                <div class="alert alert-secondary" role="alert">
                    <p>Não há dados para exibição!</p>
                </div>
                <?php
            } else { ?>
            <div class="album py-5 bg-light">
                <div class="container">            
                    <?php
                        foreach ($aDados as $oObjeto) {
                            //echo "<pre>"; var_dump($oObjeto); echo "</pre>";
                    ?>            
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="img/pessoa1.jpg">
                                <div class="card-body">
                                <p class="card-text">
                                    <strong>Nome:</strong> <?php echo $oObjeto->getNomeCompleto(); ?><br>
                                    <strong>Data Desaparecimento:</strong> <?php echo $oObjeto->getDataDesaparecimento(); ?><br>
                                    <strong>Observação:</strong><br>
                                        <?php echo $oObjeto->getObservacao(); ?><br>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                
                                </div>
                            </div>
                        </div>
                    </div>
                
            <?php } }?>
        <?php 
        } 
    }
?>