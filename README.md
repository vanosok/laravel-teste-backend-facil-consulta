# Laravel Teste Backend – FacilConsulta

Este repositório contém uma **API** desenvolvida em **Laravel** (8+) com **Laravel Sail** e **MySQL**, que permite gerenciar Cidades, Médicos, Pacientes e Consultas, incluindo autenticação via **JWT**. O objetivo é demonstrar conhecimentos em desenvolvimento **Back-end**.

## Sumário

- [Tecnologias](#tecnologias)
- [Pré-requisitos](#pré-requisitos)
- [Instalação](#instalação)
  - [Clonando o repositório](#clonando-o-repositório)
  - [Configurando as variáveis de ambiente](#configurando-as-variáveis-de-ambiente)
  - [Subindo o Docker](#subindo-o-docker)
- [Migrations e Seeders](#migrations-e-seeders)
- [Autenticação JWT](#autenticação-jwt)
- [Como Usar](#como-usar)
  - [Rotas Públicas](#rotas-públicas)
  - [Rotas Privadas](#rotas-privadas)
  - [Exemplo no Postman](#exemplo-no-postman)
- [Teste Rápido](#teste-rápido)
- [Endpoints Resumidos](#endpoints-resumidos)
- [Possíveis Melhorias Futuras](#possíveis-melhorias-futuras)
- [Licença](#licença)

---

## Tecnologias

- [Laravel 9](https://laravel.com/docs/9.x)
- [Laravel Sail](https://laravel.com/docs/9.x/sail)
- [MySQL](https://www.mysql.com/)
- [Docker](https://www.docker.com/)
- [JWT Auth (tymon/jwt-auth)](https://github.com/tymondesigns/jwt-auth)

---

## Pré-requisitos

- **Docker** instalado e em execução.
- **Docker Compose** (geralmente já vem no Docker Desktop, caso você use Windows ou macOS).
- **Git** para clonar o repositório.

*(Caso não queira usar Docker, precisará ter PHP 8+, Composer e MySQL instalados manualmente.)*

---

## Instalação



### Clonando o repositório

```bash
git clone https://github.com/vanosok/laravel-teste-backend-facil-consulta.git
cd laravel-teste-backend-facil-consulta
