<? 
require_once("Conexion.php"); 

class Crud_Colores extends conexionBD
{
    public function InsertarColor($color)
    {
      
        $sql = "INSERT INTO colores
        (`color`)
        VALUES
        ('$color')";
         
        $res =$this->conexion->query($sql);
        if($res){
          return true;
        }else{
        return false;
       }
    }


    public function UpdateColor($id_Color,$color)
    {
      
        $sql = "UPDATE colores
        SET
        `color` = '$color'
        WHERE `id_color` = '$id_Color'";
         
        $res =$this->conexion->query($sql);
        if($res){
          return true;
        }else{
        return false;
       }
    }

    public function EliminarColor($id_Color)
    {
      
        $sql = "DELETE FROM colores
        WHERE `id_color` = '$id_Color'";
         
        $res =$this->conexion->query($sql);
        if($res){
          return true;
        }else{
        return false;
       }
    }





}











    


?>