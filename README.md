# API - Dados dos Pacientes Monitorados
------------

## 📚 Descrição ##
API Rest destinada a resolução do Problema 1 da disciplina MI - Concorrência e Conectividade. Responsável por disponibilizar dados dos pacientes no formato JSON.

**🔗 Tecnologias utilizadas:**
- [Php/Laravel](https://laravel.com)

------------

## Manual do Sistema ##

1. Abra um terminal no diretório em que deseja criar o projeto, e digite os seguintes comandos:
```powershell
git clone https://github.com/JoaoErick/API-CC-PBL1.git
composer install 
cp .env.example .env
php artisan key:generate
```
2. Vá até o arquivo [app/Http/Controllers/PatientController.php] e altere o valor da variável PATH para o caminho onde foi gerado o arquivo ``data.txt`` pelo servidor socket (Espera-se que o arquivo tenha sido gerado no diretório raiz do servidor).
```php
/* Caminho do arquivo que será lido */
const PATH = "Exemplo\Exemplo\SeuArquivo.txt";
```
3. Abra o terminal, e execute o seguinte comando:
```powershell
php artisan serve
```
------------

## 📌 Autor ##
- João Erick: [Github](https://github.com/JoaoErick) - [Linkedin](https://www.linkedin.com/in/joão-erick-barbosa-9050801b0/) - [E-mail](https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&source=mailto&to=jsilva@ecomp.uefs.br)
------------

## ⚖️ Licença ##
[MIT License (MIT)](https://github.com/JoaoErick/API-CC-PBL1/blob/main/LICENSE)

