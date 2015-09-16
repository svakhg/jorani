<?php
/*
 * This file is part of Jorani.
 *
 * Jorani is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Jorani is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Jorani.  If not, see <http://www.gnu.org/licenses/>.
 */

    //You can change the content of this template
?>
<html lang="pl">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <meta charset="UTF-8">
        <style>
            table {width:50%;margin:5px;border-collapse:collapse;}
            table, th, td {border: 1px solid black;}
            th, td {padding: 20px;}
            h5 {color:red;}
        </style>
    </head>
    <body>
        <h3>{Title}</h3>
        Witamy w Jorani {Firstname} {Lastname}. Proszę używać tych poświadczeń, aby <a href="{BaseURL}">zalogować się do systemu</a>:
        <table border="0">
            <tr>
                <td>Login</td><td>{Login}</td>
            </tr>
            <tr>
                <?php if ($this->config->item('ldap_enabled') == FALSE) { ?>
                <td>Hasło</td><td>{Password}</td>
                <?php } else { ?>
                <td>Hasło</td><td><i>Hasło używane w celu otwarcia sesji systemu operacyjnego (Windows, Linux, etc.).</i></td>
                <?php } ?>
            </tr>            
        </table>
        <?php if ($this->config->item('ldap_enabled') == FALSE) { ?>
        Po połączeniu możesz zmienić hasło, wyjaśnienie <a href="http:/jorani.org/how-to-change-my-password.html" title="Link to documentation" target="_blank">tutaj</a>.
        <?php } ?>
        <hr>
        <h5>*** Ta wiadomość została wygenerowana automatycznie, prosimy nie odpowiadać na tę wiadomość ***</h5>
    </body>
</html>




