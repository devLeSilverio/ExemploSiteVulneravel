## Grupo:

* Letícia Silverio
* João Victor da Silva

### Vulnerabilidades:

* **Os inputs estão vulneráveis à injeção de script sql :**
    > kk' or 1=1; show databases;# <br>
    > Com o código xss a seguir: <script>alert('teste')</script>, inserido apenas no campo de usuário, <br>
      é retornado o comando sql utilizado, como por exemplo, o nome da tabela e os respectivos atributos, com isso é possível deletar a tabela da aplicação  <br>
      

### Observações:
* Não existe nenhuma mensagem de senha ou login inválidos, apenas ocorre o reload na página
* A senha esta sendo encaminhada para o banco de dados sem estar criptografada
