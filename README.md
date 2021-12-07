## Grupo:

- [Letícia Silverio](https://github.com/devLeSilverio) ✨
- [João Victor da Silva](https://github.com/joaovds)
- [Henrique Martins](https://github.com/hmartiins)

### Tarefas:

- [x] Identificar vulnerabilidades de sql injection
- [x] Corrigir vulnerabilidades de sql injection
- [x] Colocar um tempo definido para que a sessão seja válida
- [ ] Mostrar em tela quando as credenciais inseridas estão incorretas

### Vulnerabilidades:

- **Os inputs estão vulneráveis à injeção de script sql:**

Ao inserir o seguinte script sql em um dos inputs da tela de login, podemos iniciar uma sessão dentro da aplicação burlando com uma condição verdadeira (or 1=1):

```sql
teste' OR 1=1; show databases; #
```

sendo executada a seguinte query por detrás:

```sql
SELECT * FROM tb_admin WHERE nm_admin ='teste' or 1=1; show databases; #' AND ds_senha = ''
```

> Obs: Este comando retorna como verdadeiro somente se tiver 1 usuário cadastrado, pois é verificado o retorno de apenas 1 row. Caso tenha mais usuários cadastrados (bem provável numa aplicação real), podemos utilizar o "limit 1" para retornar apenas uma linha de registro, passando assim pela verificação do PHP:

```sql
teste' OR 1=1 limit 1; show databases; #
```

- **Observações:**
  > Não existe mensagem de senha ou login inválidos

  > A senha está sendo enviada para o banco de dados sem estar criptograda, o que facilita o acesso aos dados sensíveis dos usuários

  > A senha do usuário deve ser criptografada pra que na ação de login seja feita uma comparação entre os hashs
