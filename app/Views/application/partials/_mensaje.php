<?php
if (session('mensaje'))
{
    echo "<div>";
    echo session('mensaje');
    echo "</div>";
}