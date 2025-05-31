# SisGuias

SisGuias é um sistema web desenvolvido para auxiliar unidades de saúde e prefeituras no cadastro, controle e gerenciamento de guias médicas de encaminhamento, bem como na organização de filas de espera para consultas e procedimentos especializados.

A plataforma visa otimizar a regulação de acesso ao serviço de saúde, proporcionando mais agilidade, transparência e organização no fluxo de atendimento dos pacientes.

## Funcionalidades
- Cadastro de usuarios.(Aguardando implementacao)
- Cadastro e gerenciamento de guias de encaminhamento médico.(Em andamento)
- Controle de filas para consultas médicas.(Em andamento)
- Interface simples e intuitiva para uso por equipes de saúde.(Em andamento)
- Relatórios e filtros para facilitar o acompanhamento.(Aguardando implementacao)

## Tecnologias utilizadas

- Linguagem: PHP JavaScritp
- Framework: CodeIgniter 4
- Banco de dados: MySQL
- Frontend: Bootstrap, AdminLTE
- Docker: Servidor MySQL, Servidor PHP (Aguardando implementacao)

## Instalação

1. Clone o repositório:
   ```bash
   git clone https://github.com/alefcssantos/SisGuias.git

2. Entre na pasta do projeto:
   ```bash 
   cd SisGuias

3. Instale as dependencias:
   ```bash
   composer install

4. Rode o docker compose:
   ```bash
   docker compose up -d

5. Execute as migrations para criar as tabelas no banco de dados:
   ```bash
   php spark migrate

6. Execute o servidor do spark:
   ```bash
   php spark serve

7. Acesse o localhost no seu navegador para exibir o sistema.
   
