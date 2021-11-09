<?php​

header("Access-Control-Allow-Origin: *");​

header("Content-type: application/json");​


$con = Conexao::Open();​

$produtos = new Produtos($con);​

// https://www.php.net/manual/pt_BR/wrappers.php.php​
// https://www.php.net/manual/pt_BR/function.file-get-contents.php​
$data = json_decode(file_get_contents("php://input"));​

if (!empty($data->descricao) && !empty($data->preco) && !empty($data->categoria))
{​
   
$produtos->descricao = $data->descricao;​
$produtos->preco = $data->preco;​
$produtos->categoria = $data->categoria;​

if ($produtos->Inserir())
 {​
echo json_encode(array("Mensagem" => "Produto criado. Descricao:$data-​
>descricao - Preco: $data->preco - Categoria: $data->categoria"));​
}
 else {​
echo json_encode(array("Mensagem" => "Erro ao criar o produto."));​
}
 else {​
    echo json_encode(array("Mensagem" => "Não foi possível criar produto. Dados incompletos. "));​
    }​