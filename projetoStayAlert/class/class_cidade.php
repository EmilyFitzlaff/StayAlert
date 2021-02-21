<?php

    require_once('class_estado.php');

    class Cidade {
        private $codigo;
        private $descricao;
        private $Estado;

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

        public function setEstado(Estado $Estado) {
            $this->Estado = $Estado;
        }

        public function getEstado() {
            return $this->Estado;
        }

        private function SelectAll() {
            $consulta = Conexao::Conectar()->prepare("SELECT * FROM cidade JOIN estado USING(est_codigo)");
            $consulta->execute();
            $aResultado = array();

            while($aLinha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $oEstado = new Estado;
                
                $oCidade = new Cidade;

                $oEstado->setCodigo($aLinha['EST_CODIGO']);
                $oEstado->setDescricao($aLinha['EST_DESCRICAO']);
                $oEstado->setSigla($aLinha['EST_SIGLA']);

                $oCidade->setCodigo($aLinha['CID_CODIGO']);
                $oCidade->setDescricao($aLinha['CID_DESCRICAO']);
                $oCidade->setEstado($oEstado);
                $aResultado[] = $oCidade;
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
                                <th scope="col">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach ($aDados as $oObjeto) {
                            ?>
                            <tr>
                                <td scope="row"><?php echo $oObjeto->getCodigo();?></td>
                                <td><?php echo $oObjeto->getDescricao(); ?></td>
                                <td><?php echo $oObjeto->getEstado()->getDescricao(); ?></td>
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