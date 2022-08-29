<?php
include("includes/conn.php");

$categoria = $_GET['categoria'];

$query = $conn->prepare("SELECT id, nome
    FROM sub_categorias
    WHERE categoria_id=:categoria_id
    ORDER BY nome ASC");

$data = ['categoria_id' => $categoria];
$query->execute($data);

$registros = $query->fetchAll(PDO::FETCH_ASSOC);

echo '<option value="">Selecione uma subcategoria</option>';

foreach($registros as $option) {
?>
    <option value="<?php echo $option['id']?>"><?php echo $option['nome']?></option>
<?php
}