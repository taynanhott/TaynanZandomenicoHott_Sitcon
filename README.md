# TaynanZandomenicoHott_Sitcon

# Prova de programação - CORREÇÕES APLICADAS

# Sistema de cotação finalizado com todos os recursos operantes, onde se abrange as funcionalidades de:

Cadastro de Procedimentos:
- Nome,
- Preparo

Cadastro de Cotas:
- Nome do Prestador,
- Valor da Cotação,
- Procedimento

Seleção de Busca:
- Procedimento,
- Maior valor de Cotação, 
- Menor valor de Cotação

Ao se selecionar um procedimento cadastrado, que possui ao menos 3 cotações nos registro do banco de dados, o mesmo é listado de acordo com os filtros selecionados.
é realizada em seguida a apresentação nos card's do prestador vencedor, sendo definido o prestador com o valor de cotação mais proximo do valor medio, o valor médio tambem é apresentado a direita do prestador vencedor.

# Arquitetura do Projeto

A arquitetura do projeto foi divido em cada linguaguem ocupando seu devido arquivo e respectiva pasta de armazenamento.
- JS: pasta js contem os arquivos da lógica do módulo, os arquivos são responsáveis pela execucção das funcionalidades aplicadas no sistema de cotação.
- LOAD: arquivos .php que tem como intuito realizar o carregamentos dos dados armazenados no banco de dados.
- SUBMIT: arquivos .php que tem como intuito realizar o envio dos registros capturados nos formulários e enviar para o banco de dados que foi realizada a conexão.

# Ferramentas necessárias:
- Banco de dados (utilizado NaviCat Premium);
- XAMPP
- Visual Studio
