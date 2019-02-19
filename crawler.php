<?php
    include 'crawlerClass.php';

    $crawler = new Crawler;

    if(isset($_POST['busca_veiculo']) && $_POST['busca_veiculo'] == true){

        $marca = empty($_POST['marca']) ? '' :  "/marca/".$_POST['marca']  ;
        $modelo = empty($_POST['modelo']) ? '' :  "/modelo/".$_POST['modelo']  ;
        $valor1 = $_POST['valor1'] == 0 ? '' :  "/valor1/".$_POST['valor1']  ;
        $valor2 = $_POST['valor2'] == 0 ? '' :  "/valor2/".$_POST['valor2']  ;
        $ano1 = empty($_POST['ano1']) ? '' :  "/ano1/".$_POST['ano1']  ;
        $ano2 = empty($_POST['ano2']) ? '' :  "/ano2/".$_POST['ano2']  ;


        $resultadoCrawler = $crawler->BuscaDadosLink('https://www.seminovosbh.com.br/resultadobusca/index/veiculo/carro'.$marca.$modelo.$valor1.$valor2.$ano1.$ano2);

        foreach($resultadoCrawler->find('.planoNitroMaisHome') as $key =>  $link){

            $arg[$key]['titulo'] = $link->find("dd h4", 0)->plaintext;
            $arg[$key]['preco'] = $link->find("dd .preco_busca", 0)->plaintext;
            $arg[$key]['descricao'] = $link->find(" .planoNitroHomeDesc ", 0)->plaintext;
            $arg[$key]['acessorios'] = $link->find(" .list-acessorios ", 0)->plaintext;
            
            $tabela .=   "<tr>
                            <td>".$arg[$key]['titulo']."</td>
                            <td>".$arg[$key]['preco']."</td>
                            <td>".$arg[$key]['descricao']."</td>
                            <td>".$arg[$key]['acessorios']."</td>
                        </tr>";
        }

        echo  $tabela;
    }
    else{

        $resultadoCrawler = $crawler->BuscaDadosLink("https://www.seminovosbh.com.br/");

        $marca = $resultadoCrawler->find("#marca", 0);
        $valor1 = $resultadoCrawler->find("#valor1", 0);
        $valor2 = $resultadoCrawler->find("#valor2", 0);
        $ano1 = $resultadoCrawler->find("#ano1", 0);
        $ano2 = $resultadoCrawler->find("#ano2", 0);
   
    }

?>