<?php
require 'conexao.php';
$sqlambiente = "SELECT * FROM ambiente";
$resultambiente = mysqli_query($con, $sqlambiente);
?>
<div class="row">
    <div class="col-sm-3">
        <div class="text-center">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Ambiente</th>
                            <th></th>    
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($dados = mysqli_fetch_assoc($resultambiente)) {
                            $nomedoambiente = $dados ['AMB_NOME'];
                            $id = $dados['AMB_ID'];
                            ?>
                            <tr>                                
                                <td><?php echo $nomedoambiente; ?></td>
                                <td class="text-right"><a href="chamarcolunas.php?id= <?php echo $id; ?>" class=" btn btn-sm btn-warning"><span class="glyphicon glyphicon-check"></span></a></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table> 
            </div>
        </div>
    </div>
</div>