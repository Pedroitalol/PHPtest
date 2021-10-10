# Buscar endereços pelo CEP

Implementação de um sistema solicitado por um teste para vaga de desenvolvedor PHP.

## Base do sistema

Como dito na especificação do teste, foi implementado sistema para pesquisar um endereço por meio do CEP.

O projeto contém uma única página, que é derivada em outras 3 subpáginas: Pesquisar CEP, Área do administrador e sobre.
- Pesquisar CEP é a base do sistema, onde é implementada o principal objetivo do sistema.
- Área do administrador é feita para fazer alterações no banco de dados, podendo ser três: adicionar um CEP novo, pesquisar se há um CEP específico no Banco de dados e excluir um CEP do Banco de dados.
- Sobre é apenas uma área para falar do sistema e do criador.

## Como executar o sistema

Foi feito usando o xampp como ferramenta de desenvolvimento. Porém, usando qualquer outra ferramenta, é possível executar o código base, para isso, é preciso apenas implementar um banco de dados usando os dados que se encontram no bds/ceps.sql, criando essa tabela em um banco de dados com o nome "teste".

## Observação

No momento que esse readme foi escrito, foi implementado apenas a base do sistema e a subpágina Pesquisar CEP, por garantia. Quando forem adicionadas as outras implementações, será atualizado.
