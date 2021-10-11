<div class="container">
    <h3>Como usar o sistema:</h3>

    <p>Para pesqusiar um endereço usando esse sistema, deve-se digitar o CEP que deseja ser pesquisado, 
    no único campo dessa página, com o nome CEP tanto em cima quanto dentro do campo. Após isso,
    apertar o botão de Pesquisar. A entrada do usuário pode ser o CEP com ou sem "-". As únicas entradas 
    válidas são as que contém 8 ou 9 caracteres. </p>

    <p>Após digitar uma entrada qualquer, há três possibilidades:</p>
    <ol>
        <li>O CEP ser válido(ter 8 números ou ter 5 números + "-" + três números), e existir, nessa situação
            há outras duas possibilidades:</li>
        <ul>
            <li>Quando encontrado no banco de dados, o sistema retorna que esse CEP foi encontrado no banco de dados
            e as informações que lá constam.</li>
            <li>Quando esse CEP não está cadastrado ainda no banco de dados, uma chamada na API 
            <a href="https://viacep.com.br/" target="_blank"> ViaCEP</a>, e lá recupera os date_isodate_set
            mostrando que foram pegos da API e quais os seus valores, e, posteriormente, insere no banco de dados.</li>
        </ul>
        <li>O CEP ser válido, porém não existir. Ao acontecer isso, o sistema retorna que o CEP não existe.</li>
        <li>O CEP não ser válido, ou seja, ter menos que 8 caracteres, já que a entrada aceita no máximo 9, 
        nessa situação, retornará um erro, dizendo que o CEP é invalido.</li>
    </ol>


</div>