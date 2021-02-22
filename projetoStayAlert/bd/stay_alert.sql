create database stayalert;
use stayalert;

CREATE TABLE TIPO_USUARIO (
                tu_codigo INT AUTO_INCREMENT NOT NULL,
                TU_DESCRICAO VARCHAR(20) NOT NULL,
                PRIMARY KEY (tu_codigo)
);


CREATE TABLE PAIS (
                PAIS_CODIGO INT AUTO_INCREMENT NOT NULL,
                PAIS_DESCRICAO VARCHAR (100) NOT NULL,
                PAIS_SIGLA CHAR(5) NOT NULL,
                PRIMARY KEY (PAIS_CODIGO)
);


CREATE TABLE ESTADO (
                EST_CODIGO INT AUTO_INCREMENT NOT NULL,
                EST_DESCRICAO VARCHAR (100) NOT NULL,
                EST_SIGLA CHAR(3) NOT NULL,
                PAIS_CODIGO INT NOT NULL,
                PRIMARY KEY (EST_CODIGO)
);


CREATE TABLE CIDADE (
                CID_CODIGO INT AUTO_INCREMENT NOT NULL,
                CID_DESCRICAO VARCHAR (150) NOT NULL,
                EST_CODIGO INT NOT NULL,
                PRIMARY KEY (CID_CODIGO)
);


CREATE TABLE PESSOA (
                PES_CPF CHAR(11) NOT NULL,
                TELEFONE VARCHAR (20)NOT NULL,
                PES_DESCRICAO VARCHAR (200) NOT NULL,
                CID_CODIGO INT NOT NULL,
                EMAIL VARCHAR (200) NOT NULL,
                PES_DATANASCIMENTO DATETIME NOT NULL,
                PRIMARY KEY (PES_CPF)
);


CREATE TABLE DESAPARECIDO (
                PES_CPF CHAR(11) NOT NULL,
                des_dataDesaparecimento DATETIME NOT NULL,
                DES_OBSERVACAO VARCHAR (1000) NOT NULL,
                PRIMARY KEY (PES_CPF, des_dataDesaparecimento)
);


CREATE TABLE DESAPARECIDO_ANEXO (
                ANEXO_CODIGO INT AUTO_INCREMENT NOT NULL,
                ANEXO_DESCRICAO VARCHAR (250) NOT NULL,
                ANEXO LONGBLOB NOT NULL,
                PES_CPF CHAR(11) NOT NULL,
                des_dataDesaparecimento DATETIME NOT NULL,
                PRIMARY KEY (ANEXO_CODIGO)
);


CREATE TABLE USUARIO (
                PES_CPF CHAR(11) NOT NULL,
                tu_codigo INT NOT NULL,
                SENHA VARCHAR (100) NOT NULL,
                PRIMARY KEY (PES_CPF, tu_codigo)
);


CREATE TABLE PUBLICACAO (
                PUB_CODIGO INT AUTO_INCREMENT NOT NULL,
                PUB_DESCRICAO VARCHAR (100) NOT NULL,
                pub_palavras_chave VARCHAR (100) NOT NULL,
                PUB_OBSERVACAO VARCHAR(1000),
                PES_CPF CHAR(11) NOT NULL,
                des_dataDesaparecimento DATETIME NOT NULL,
                tu_codigo INT NOT NULL,
                PRIMARY KEY (PUB_CODIGO)
);


CREATE TABLE PUB_COMENTARIO (
                COM_CODIGO INT AUTO_INCREMENT NOT NULL,
                com_descricao VARCHAR (1000) NOT NULL,
                PUB_CODIGO INT NOT NULL,
                PES_CPF CHAR(11) NOT NULL,
                tu_codigo INT NOT NULL,
                PRIMARY KEY (COM_CODIGO)
);


CREATE TABLE PUBLICACAO_ANEXO (
                PA_CODIGO INT AUTO_INCREMENT NOT NULL,
                PA_DESCRICAO VARCHAR (250) NOT NULL,
                PUB_CODIGO INT NOT NULL,
                PRIMARY KEY (PA_CODIGO)
);


ALTER TABLE USUARIO ADD CONSTRAINT tipo_usuario_usuario_fk
FOREIGN KEY (tu_codigo)
REFERENCES TIPO_USUARIO (tu_codigo)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE ESTADO ADD CONSTRAINT pais_estado_fk
FOREIGN KEY (PAIS_CODIGO)
REFERENCES PAIS (PAIS_CODIGO)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE CIDADE ADD CONSTRAINT estado_cidade_fk
FOREIGN KEY (EST_CODIGO)
REFERENCES ESTADO (EST_CODIGO)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE PESSOA ADD CONSTRAINT cidade_pessoa_fk
FOREIGN KEY (CID_CODIGO)
REFERENCES CIDADE (CID_CODIGO)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE USUARIO ADD CONSTRAINT pessoa_usuario_fk
FOREIGN KEY (PES_CPF)
REFERENCES PESSOA (PES_CPF)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE DESAPARECIDO ADD CONSTRAINT pessoa_desaparecido_fk
FOREIGN KEY (PES_CPF)
REFERENCES PESSOA (PES_CPF)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE DESAPARECIDO_ANEXO ADD CONSTRAINT desaparecido_desaparecido_anexo_fk
FOREIGN KEY (PES_CPF, des_dataDesaparecimento)
REFERENCES DESAPARECIDO (PES_CPF, des_dataDesaparecimento)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE PUBLICACAO ADD CONSTRAINT desaparecido_publicacao_fk
FOREIGN KEY (PES_CPF, des_dataDesaparecimento)
REFERENCES DESAPARECIDO (PES_CPF, des_dataDesaparecimento)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE PUBLICACAO ADD CONSTRAINT usuario_publicacao_fk
FOREIGN KEY (PES_CPF, tu_codigo)
REFERENCES USUARIO (PES_CPF, tu_codigo)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE PUB_COMENTARIO ADD CONSTRAINT usuario_pub_comentario_fk
FOREIGN KEY (PES_CPF, tu_codigo)
REFERENCES USUARIO (PES_CPF, tu_codigo)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE PUBLICACAO_ANEXO ADD CONSTRAINT publicacao_publicacao_anexo_fk
FOREIGN KEY (PUB_CODIGO)
REFERENCES PUBLICACAO (PUB_CODIGO)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE PUB_COMENTARIO ADD CONSTRAINT publicacao_pub_comentario_fk
FOREIGN KEY (PUB_CODIGO)
REFERENCES PUBLICACAO (PUB_CODIGO)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

Insert Into estado (pais_codigo,est_sigla,est_descricao) Values(1,'AC','Acre');  
 Insert Into estado (pais_codigo,est_sigla,est_descricao) Values(1,'AL','Alagoas');  
 Insert Into estado (pais_codigo,est_sigla,est_descricao) Values(1,'AM','Amazonas');
 Insert Into estado (pais_codigo,est_sigla,est_descricao) Values(1,'AP','Amapá');
 Insert Into estado (pais_codigo,est_sigla,est_descricao) Values(1,'BA','Bahia');
 Insert Into estado (pais_codigo,est_sigla,est_descricao) Values(1,'CE','Ceará');
 Insert Into estado (pais_codigo,est_sigla,est_descricao) Values(1,'DF','Distrito Federal');
 Insert Into estado (pais_codigo,est_sigla,est_descricao) Values(1,'ES','Espírito Santo');
 Insert Into estado (pais_codigo,est_sigla,est_descricao) Values(1,'GO','Goiás');
 Insert Into estado (pais_codigo,est_sigla,est_descricao) Values(1,'MA','Maranhão');
 Insert Into estado (pais_codigo,est_sigla,est_descricao) Values(1,'MG','Minas Gerais');
 Insert Into estado (pais_codigo,est_sigla,est_descricao) Values(1,'MS','Mato Grosso do Sul');
 Insert Into estado (pais_codigo,est_sigla,est_descricao) Values(1,'MT','Mato Grosso');
 Insert Into estado (pais_codigo,est_sigla,est_descricao) Values(1,'PA','Pará');
 Insert Into estado (pais_codigo,est_sigla,est_descricao) Values(1,'PB','Paraíba');
 Insert Into estado (pais_codigo,est_sigla,est_descricao) Values(1,'PE','Pernambuco');
 Insert Into estado (pais_codigo,est_sigla,est_descricao) Values(1,'PI','Piauí');
 Insert Into estado (pais_codigo,est_sigla,est_descricao) Values(1,'PR','Paraná');
 Insert Into estado (pais_codigo,est_sigla,est_descricao) Values(1,'RJ','Rio de Janeiro');
 Insert Into estado (pais_codigo,est_sigla,est_descricao) Values(1,'RN','Rio Grande do Norte');
 Insert Into estado (pais_codigo,est_sigla,est_descricao) Values(1,'RO','Rondônia');
 Insert Into estado (pais_codigo,est_sigla,est_descricao) Values(1,'RR','Roraima');
 Insert Into estado (pais_codigo,est_sigla,est_descricao) Values(1,'RS','Rio Grande do Sul');
 Insert Into estado (pais_codigo,est_sigla,est_descricao) Values(1,'SC','Santa Catarina');
 Insert Into estado (pais_codigo,est_sigla,est_descricao) Values(1,'SE','Sergipe');
 Insert Into estado (pais_codigo,est_sigla,est_descricao) Values(1,'SP','São Paulo');
 Insert Into estado (pais_codigo,est_sigla,est_descricao) Values(1,'TO','Tocantins');

 insert into cidade (cid_descricao, est_codigo) 
values('Florianópolis', 1),('Rio do Oeste', 1),('Laurentino',1),('Pouso Redondo',1);
