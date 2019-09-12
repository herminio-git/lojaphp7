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
		