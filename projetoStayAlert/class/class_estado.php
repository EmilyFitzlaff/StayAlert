<?php

    class Estado {
        private $codigo;
        private $descricao;
        private $sigla;

        public function setCodigo($codigo) {
            $this->codigo = $codigo;
        }

        public function getCodigo() {
            return $this->codigo;
        }

        public function setDescricao($Descricao) {
            $this->descricao = $Descricao;
        }

        public function getDescricao() {
            return $this->descricao;
        }

        public function setSigla($Sigla) {
            $this->sigla = $Sigla;
        }

        public function getSigla() {
            return $this->sigla;
        }

        private function SelectAll() {
            $consulta = Conexao::Conectar()->prepare("SELECT * FROM estado");
            $consulta->execute();
            $aResultado = array();

            while($aLinha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $oEstado = new Estado;
                $oEstado->setCodigo($aLinha['EST_CODIGO']);
                $oEstado->setDescricao($aLinha['EST_DESCRICAO']);
                $oEstado->setSigla($aLinha['EST_SIGLA']);
                $aResultado[] = $oEstado;
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
                } else {
                    ?>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Código</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Sigla</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach ($aDados as $oObjeto) {
                            ?>
                            <tr>
                                <td scope="row"><?php echo $oObjeto->getCodigo();?></td>
                                <td><?php echo $oObjeto->getDescricao(); ?></td>
                                <td><?php echo $oObjeto->getSigla(); ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                <?php 
                }
            }
        }
    
?>