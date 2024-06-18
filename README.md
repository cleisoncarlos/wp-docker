# Meu Tema WordPress com Docker

Este projeto configura um ambiente de desenvolvimento para um tema WordPress personalizado usando Docker. Ele permite que você desenvolva e teste seu tema localmente, com todas as alterações refletidas em tempo real.

## Estrutura do Projeto


    ├── docker-compose.yml
    ├── Dockerfile
    └── meu-tema
        ├── style.css
        ├── index.php
        └── functions.php
       

Pré-requisitos

- Docker instalado: Instalar Docker
- Docker Compose instalado: Instalar Docker Compose



## Configuração
### Clonar o Repositório

Clone este repositório em sua máquina local:

    git clone https://github.com/seu-usuario/seu-repositorio.git

    cd seu-repositorio

### Inicializar o Docker Compose

Inicie os serviços do Docker:

    docker-compose up -d

### Acessar o WordPress

Abra seu navegador e acesse http://localhost:8000 para configurar sua instalação do WordPress.

### Ativar o Tema

Após configurar o WordPress, faça login no painel de administração e ative o tema Meu Tema em Aparência > Temas.

### Desenvolvimento

Com a configuração de volumes no Docker Compose, qualquer alteração feita nos arquivos do tema local (meu-tema) será refletida imediatamente no ambiente WordPress rodando no Docker. Isso facilita o desenvolvimento e a depuração do tema.


