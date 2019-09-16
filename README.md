# lojaphp7

Criando o projeto

	--------------------------------------------------------------------------------
	
	- 1° criando o repositório no Github com o nome de "lojaphp7".
	
	--------------------------------------------------------------------------------
	
	- 2° criando uma pasta "qcursos" dentro de "htdocs" do "xampp".
	
	--------------------------------------------------------------------------------
	
	- 3° contando que já esteja instalado o github, dentro da pasta "qcursos" 
	inicializar o "gitbash".
	
	--------------------------------------------------------------------------------
	
	- 4° editar as váriaveis de ambiente para gerenciamento do Github na máquina,
	onde torno global para a máquina "email e usuário", podendo assim ser usado de
	qualquer ponto na máquina.
		
		$ git config --global user.email "git.herminio@gmail.com"

		$ git config --global user.name "herminio-git"
		
	--------------------------------------------------------------------------------
    
	- 5° clonando o repositório do github
		
		$ git clone https://github.com/herminio-git/lojaphp7.git
		
		e de um "ENTER" 
		
	--------------------------------------------------------------------------------
	
	- 6° Selecionando os arquivos de dentro da pasta "lojaphp7" da máquina para 
	envio para o Github.

		$ git add --all
		
	--------------------------------------------------------------------------------

	- 7° Dando uma descrição para o arquivo ou alteração que estou fazendo no momento
	que será enviado para o Github 

		$ git commit -m "inicio do projeto"	
		
	--------------------------------------------------------------------------------

	- 8° Enviando os arquivos finalmente para o github

		$ git push origin master	
		
	--------------------------------------------------------------------------------

	https://packagist.org
	
	https://getcomposer.org/
	
	--------------------------------------------------------------------------------
    
	Bruno Orlandi
	Fonte:https://brorlandi.github.io/git-desfazendo-commits
	
	Problema ao fazer o "push" 
	
	$ git push origin master
To https://github.com/herminio-git/lojaphp7
 ! [rejected]        master -> master (fetch first)
error: failed to push some refs to 'https://github.com/herminio-git/lojaphp7'
hint: Updates were rejected because the remote contains work that you do
hint: not have locally. This is usually caused by another repository pushing
hint: to the same ref. You may want to first integrate the remote changes
hint: (e.g., 'git pull ...') before pushing again.
hint: See the 'Note about fast-forwards' in 'git push --help' for details.

	Solução:

Você está tentando subir alterações para um git remoto (provavelmente GitHub),
 porém no servidor remoto existem alterações mais novas que a suas,
 que você ainda não tem. Portanto, antes de fazer o push, faça um

$ git checkout master

$ git pull origin master

	--------------------------------------------------------------------------------
    
	Bruno Orlandi
	Fonte:https://brorlandi.github.io/git-desfazendo-commits
		
	Checkout

O checkout é o jeito mais simples para desfazer alterações. 
Supondo que você editou o arquivo.txt e quer voltá-lo 
para seu estado original desde o último commit. Use:

git checkout -- arquivo.txt

	--------------------------------------------------------------------------------
    
	Bruno Orlandi
	Fonte:https://brorlandi.github.io/git-desfazendo-commits
		
	Navegando no repositório
	
O comando de checkout não é usado apenas para desfazer alterações, ele permite navegar
 por commits e branchs no repositório.

Por exemplo, podemos ver repositório no penúltimo commit:

git checkout HEAD~1
Este comando muda o HEAD que é basicamente em qual estado o repositório está. 
Mudando para HEAD~1 estaremos no commit anterior ao HEAD atual. 
A cada execução deste comando mudará o repositório para um commit atrás.

Também podemos trocar HEAD por master e visualizar commits anteriores na 
branch master. Use git checkout master para voltar para a master no último commit.

	--------------------------------------------------------------------------------
    
	Bruno Orlandi
	Fonte:https://brorlandi.github.io/git-desfazendo-commits
		
	Reset

No primeiro post usamos git add para adicionar as alterações do repositório para o próximo commit. Mas se quisermos remover esse arquivo de lá, como fazemos? Use git reset!

Vamos preparar um exemplo. Em um repositório Git, faça alterações e use o git add . Se você quer apenas tirar o arquivo do stage (área onde as alterações vão para o próximo commit) use:

git reset arquivo.txt
Pronto, o arquivo saiu do stage.

	--------------------------------------------------------------------------------
    
	Bruno Orlandi
	Fonte:https://brorlandi.github.io/git-desfazendo-commits
		
	Resetando commits

O comando git reset, como o próprio nome diz, reseta o repositório para 
o estado do último commit, ou outro commit. Ou seja, com ele podemos desfazer commits.

Vamos desfazer o último commit de um repositório para exemplificar. 
Há dois modos de usar o get reset aqui. Use:

git reset HEAD~1

Veja que o commit foi desfeito mas as alterações nos arquivos ainda ficaram. Neste caso você pode fazer um novo commit com o conteúdo do commit desfeito.

	--------------------------------------------------------------------------------
    
	Bruno Orlandi
	Fonte:https://brorlandi.github.io/git-desfazendo-commits
		
	Revert

Pode acontecer o caso de você precisar desfazer um commit que não é o commit 
mais recente e sim um mais antigo. 
Nesse caso, fazer um reset até o commit irá apagar também todos 
os commits na frente dele. Para resolver isso temos o git revert. 
O revert cria um novo commit que faz o reverso do commit especificado. 
Ou seja, se o commit adicionou um arquivo, o revert remove, se editou uma linha, 
volta ao que era antes. Supondo que queremos reverter o commit de ID 11a5b, usamos:


	$ git revert 11a5b

Pode haver conflitos nessa operação, pois ao reverter um commit que criou uma linha,
 pode causar conflito com outro commit que editou aquela linha. 
 Neste caso o git dará um aviso e você terá que resolver os conflitos.
 
	--------------------------------------------------------------------------------

	--------------------------------------------------------------------------------

	--------------------------------------------------------------------------------

	--------------------------------------------------------------------------------

	--------------------------------------------------------------------------------

	--------------------------------------------------------------------------------

	--------------------------------------------------------------------------------

	--------------------------------------------------------------------------------	
		