# Acessa API Pública de valor do Bitcoin

###### IDE utilizada PHP STORM 2021
###### Framework utilziado Composer 2.3.7

O projeto foi criado utilizando orientação a objetos, onde dentro da pasta src foi criada uma classe chamada AccessApi, que contém um método que retorna um array com o retorno da API, foi utilizado a função json_decode() para converter o retorno da API em JSON para um array associativo, onde acesso via indice para fazer a exibição na página index, foi utilizada a função number_format($item['indice'],2,",","."), para formatar o valor em moeda brasileira.

![index](https://user-images.githubusercontent.com/13033530/186049998-70617a8b-1cdc-407e-a843-8b9560b92c80.JPG)
