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
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">CPF</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Data de Nascimento</th>
                                <th scope="col">Cidade</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach ($aDados as $oObjeto) {
                            ?>
                            <tr>
                                <td scope="row"><?php echo $oObjeto->getCpf();?></td>
                                <td><?php echo $oObjeto->getNomeCompleto(); ?></td>
                                <td><?php echo $oObjeto->getDataNascimento(); ?></td>
                                <td><?php echo $oObjeto->getCidade()->getDescricao(); ?></td>
                                <td><?php echo $oObjeto->getEmail(); ?></td>
                                <td><?php echo $oObjeto->getTelefone(); ?></td>
                                <td>
                                    <a href='' class="green">
                                        <span class="btn btn-outline-primary">Alterar 
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                            </svg>
                                        </span>
                                    </a>                        
                                    <a href='' class="red">
                                        <span class="btn btn-outline-danger">Excluir
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                            </svg>
                                        </span>
                                    </a>
                                </td>
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