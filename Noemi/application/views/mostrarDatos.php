<!DOCTYPE html>
<html>
<head>
    <title>Lista de datos</title>
</head>
<body>
    <table border=1>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Email</th>
            <th>Genero</th>
            <th>Hobbies</th>
            <th>Usuario</th>
            <th>Contrasena</th>
        </tr>

        <?php
        foreach($consulta->result() as $fila)
        {?>
        <tr>
            <th><?=$fila->idpersona?></th>
            <th><?=$fila->nombre?></th>
            <th><?=$fila->edad?></th>
            <th><?=$fila->email?></th>
            <th><?=$fila->sexo?></th>
            <th><?=$fila->hobbies?></th>
            <th><?=$fila->usuario?></th>
            <th><?=$fila->contra?></th>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
