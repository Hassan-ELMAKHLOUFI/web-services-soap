<?php
    $client = new SoapClient("http://localhost:9191/BanqueWS?wsdl");

    $rep = $client->__soapcall("listComptes",array());
    $res= $rep->return ;


    ?>

<?php {?>

    <table border="1" width="80%">
        <tr>
            <th> Code</th><th>Solde</th>
        </tr>
        <?php foreach ($res as $cp){?>
        <tr>
            <td><?php echo ($cp->code) ?></td>
            <td><?php echo ($cp->solde) ?></td>
        </tr>
        <?php }?>
    </table>
<?php }?>


