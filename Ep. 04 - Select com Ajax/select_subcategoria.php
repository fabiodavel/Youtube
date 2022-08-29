<?php
include("includes/conn.php");

$categoria = $_GET['categoria'];
$selected = isset($_GET['selected']) ? $_GET['selected'] : null;

$query = $conn->prepare("SELECT id, nome
    FROM sub_categorias
    WHERE categoria_id=:categoria_id
    ORDER BY nome ASC");

$data = ['categoria_id' => $categoria];
$query->execute($data);

$registros = $query->fetchAll(PDO::FETCH_ASSOC);

echo '<option value="">Selecione uma subcategoria</option>';

foreach($registros as $option) {
    $check = '';
    if($selected == $option['id']) {
        $check = 'selected';
    }
?>
    <option value="<?php echo $option['id']?>" <?php echo $check; ?>><?php echo $option['nome']?></option>
<?php
}