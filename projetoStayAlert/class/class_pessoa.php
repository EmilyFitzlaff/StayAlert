<?php

    require_once('class_cidade.php');

    class Pessoa {
        private $nomeCompleto;
        private $cpf;
        private $dataNascimento;
        private $Cidade;
        private $email;
        private $telefone;

        public function setNomeCompleto($nomeCompleto) {
            $this->nomeCompleto = $nomeCompleto;
        }

        public function getNomeCompleto() {
            return $this->nomeCompleto;
        }

        public function setCpf($Cpf) {
            $this->cpf = $Cpf;
        }

        public function getCpf() {
            return $this->cpf;
        }

        public function setDataNascimento($dataNascimento) {
            $this->dataNascimento = $dataNascimento;
        }

        public function getDataNascimento() {
            return $this->dataNascimento;
        }

        public function setCidade(Cidade $Cidade) {
            $this->Cidade = $Cidade;
        }

        public function getCidade() {
            return $this->Cidade;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setTelefone($telefone) {
            $this->telefone = $telefone;
        }

        public function getTelefone() {
            return $this->telefone;
        }

        private function SelectAll() {
            $consulta = Conexao::Conectar()->prepare("SELECT * FROM pessoa JOIN cidade USING(cid_codigo)");
            $consulta->execute();
            $aResultado = array();

            while($aLinha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $oCidade = new Cidade;
                $oPessoa = new Pessoa;

                $oCidade->setCodigo($aLinha['CID_CODIGO']);
                $oCidade->setDescricao($aLinha['CID_DESCRICAO']);

                $oPessoa->setNomeCompleto($aLinha['PES_DESCRICAO']);
                $oPessoa->setCpf($aLinha['PES_CPF']);
                $oPessoa->setTelefone($aLinha['TELEFONE']);
                $oPessoa->setDataNascimento($aLinha['PES_DATANASCIMENTO']);
                $oPessoa->setCidade($oCidade);
                $oPessoa->setEmail($aLinha['EMAIL']);
                $aResultado[] = $oPessoa;
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
                        <div class="accordion" id="accordionExample">
                        <?php          
                            foreach ($aDados as $oObjeto) {
                        ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <?php echo $oObjeto->getNomeCompleto(); ?>
                                </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <th scope="col">Nome Completo</th>
                                                    <td><?php echo $oObjeto->getNomeCompleto(); ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="col">CPF</th>
                                                    <td><?php echo $oObjeto->getCPF(); ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Data de Nascimento</th>
                                                    <td><?php echo $oObjeto->getDataNascimento(); ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Cidade</th>
                                                    <td><?php echo $oObjeto->getCidade()->getDescricao(); ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Email</th>
                                                    <td><?php echo $oObjeto->getEmail(); ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Telefone</th>
                                                    <td><?php echo $oObjeto->getTelefone(); ?></td>
                                                </tr>
                                            </tbody>
                                        </table>                                        
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        </div>                    
                <?php              
                }
            }
        } 
   
?>