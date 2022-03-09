<?php

function modules_crud_views($name)
{
    return 'Modules\Crud\Views' . DIRECTORY_SEPARATOR . $name;
}
function modules_auth_views($name)
{
    return 'Modules\IonAuth\Views' . DIRECTORY_SEPARATOR . $name;
}

function modules_crud_controllers($name)
{
    return 'Modules\Crud\Controllers' . DIRECTORY_SEPARATOR . $name;
}
