<?php
/**
 * @version 1.0
 * @autor Edwin Manuel Cerrón Angeles
 * @date 02/02/13
 */

namespace Clases;;

class Grid{

    private $encabezados = array();
    private $data = array();

    public function __construct($data){
        $this->data = $data;
        $this->encabezados = $this->obtenerEncabezados();
    }

    public function agregarColumna($nombre, $data_extra){
        //falta implementar
    }

    public function eliminarColumna($nombre){
        //falta implementar
    }

    public function setNombreColumna($original , $cambio){
        //falta implementar
    }

    public function obtenerEncabezados(){
        $encabezados = array();
        foreach ($this->data[0] as $key => $useless){
            $encabezados[$key] = $key;
        }
        return $encabezados;
    }

    /* Muestra los datos en una tabla */
    public function imprimir($titulo = null , $table_id = null, $table_class = null){
        print "<table id=\"$table_id\" class=\"$table_class\">\n";
        print "<caption>$titulo</caption>\n";
        print "<thead>\n";
        foreach ($this->encabezados as $key => $value){
            print "<th>$value</th>";
        }
        print "</thead>";
        print "<tbody>";
        foreach ($this->data as $row){
            print "<tr>";
            foreach ($row as $key => $val){
                print "<td>$val</td>";
            }
            print "</tr>\n";
        }
        print "</tbody>";
        print "</table>\n";
    }

}