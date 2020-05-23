<?php

    // Clase Usuario del modelo
    class Comment{

        // PROPIEDADES
        public $id=0, $comment='', $usuario='', $id_entrada=0;

       // METODOS DEL CRUD

       // registrar un nuev o comment

       public function guardar(){
           $consulta="INSERT INTO comments (comment, usuario, id_entrada)
                      VALUES ('$this->comment', '$this->usuario', $this->id_entrada)";
           return DB::insert($consulta); //conectar y ejecutar
       }

        // recuperar todas las entradas
        public static function get():array{
            $consulta="SELECT * FROM comments"; //preparar la consulta
            return DB::selectAll($consulta, self::class);
        }

        // recuperar una entrada concreta por id
        public static function getByIdEntrada(int $id):?array{
            $consulta="SELECT * FROM comments WHERE id_entrada=$id";
            return DB::selectAll($consulta, self::class);
        }
        // recuperar el id de la entrada concreta de los comentarios
        public static function getIdEntrada(int $id):?Comment{
            $consulta="SELECT id_entrada FROM comments WHERE id_entrada=$id group by id_entrada";
            return DB::select($consulta, self::class);
        }

        // recuperar un comentario concreto por id
        public static function getById(int $id):?Comment{
            $consulta="SELECT * FROM comments WHERE id=$id";
            return DB::select($consulta, self::class);
        }

        //recuperar usuarios con un filtro
        public static function getFiltered(
            string $c='category', string $v='', string $o='id', string $s='ASC'):array{

            $consulta="SELECT * FROM comments WHERE $c LIKE '%$v%' ORDER BY $o $s";
            return DB::selectAll($consulta, self::class);
        }

        //actualizar una entrada
        public function actualizar(){

            $consulta="UPDATE categories SET
                          category='$this->category'
                        WHERE id=$this->id";

            return DB::update($consulta);
        }

        //borrar un comment existente
        public static function borrar(int $id){
            $consulta="DELETE FROM comments WHERE id=$id";
            return DB::delete($consulta);
        }
        //cuenta las categorias
        public static function count(){
          $consulta = "select count(id) from categories";
          return DB::select($consulta);
        }

        //__toString
        public function __toString():string{
            return "$this->id, '$this->comment', $this->id_entrada, '$this->usuario'";
        }
    }
