<div>
    <table id="tab" border="1">
        <tr>
            <th>Descrição</th>
            <th>Data de Criação</th>
            <th>Data de Conclusão</th>
            <th>Concluído</th>
        </tr>
        <?php for($i = 0; $i < count($tarefas); $i++) {?>
            <tr>
                <td><?= $tarefas[$i]['descricao'];?></td>
                <td><?= $tarefas[$i]['datacriacao'];?></td>
                <td></td>
                <td><?= $tarefas[$i]['concluido']?'SIM':'NÃO';?></td>
            </tr>
        <?php } ?>
    </table>  
</div>
