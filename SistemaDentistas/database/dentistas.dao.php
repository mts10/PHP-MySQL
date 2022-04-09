<?php
include_once 'conn.php';
//funçao para salvar dados
function salvar_dentista($name, $email, $cro, $cro_uf)
{
    $conn = conectar();

    $sql = "INSERT INTO dentistas_tb (name, email, cro, cro_uf)
    VALUES ('$name', '$email', '$cro', '$cro_uf')";

    $result = mysqli_query($conn, $sql);


    if(mysqli_affected_rows($conn) > 0)
    {
        return true;
    }
    return false;
    
}
function buscar_dentistas() 
{
    $conn = conectar();

    $sql = "SELECT * FROM dentistas_tb";

    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn) > 0)
{
    return $result;
}
return null;


}

function exibir_dentistas()
{
    $result = buscar_dentistas();

    if($result == null)
    {
        return '<h3>Não há dentistas cadastrados</h3>';
    }
    else
    {
		$retorno = '<div class="col-6 dentistas">';
		$retorno .= '<table class="table table-hover">';
		// montar a primeira linha da tablea
		$retorno .= '<tr>';
		$retorno .= '<th>ID #</th>'; // coluna de cabeçalho = th = table header
		$retorno .= '<th>Nome</th>';
		$retorno .= '<th>Email</th>';
		$retorno .= '<th>Cro</th>';
        $retorno .= '<th>Cro_uf</th>';
		$retorno .= '<th>Deletar</th>';
		$retorno .= '<th>Editar</th>';
		$retorno .= '</tr>';

		while ($dentista = mysqli_fetch_assoc($result))
		{
			
			$retorno .= '<tr>';
			// coluna simples da tabela = td = table data
			$retorno .= "<td><b>" . $dentista['id_dentista'] . "</b></td>";
			$retorno .= "<td><b>" . $dentista['name']   . "</b></td>";
			$retorno .= "<td><b>" . $dentista['email']    . "</b></td>";
			$retorno .= "<td><b>" . $dentista['cro']  . "</b></td>";
            $retorno .= "<td><b>" . $dentista['cro_uf']  . "</b></td>";
			$retorno .= '</tr>'; 
		}

		$retorno .= '</table>';
		$retorno .= '</div>';
	}
}


?>