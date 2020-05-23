<?php

    // Clase Usuario del modelo
    class Category{

        // PROPIEDADES
        public $id=0, $category='';

       // METODOS DEL CRUD

       // registrar una nueva entrada.

       public function guardar(){
           $consulta="INSERT INTO categories (category)
                      VALUES ('$this->category')";
           return DB::insert($consulta); //conectar y ejecutar
       }

        // recuperar todas las categorias
        public static function get():array{
            $consulta="SELECT * FROM categories"; //preparar la consulta
            return DB::selectAll($consulta, self::class);
        }

        // recuperar una entrada concreta por id_category
        public static function getById(int $id):?Category{
            $consulta="SELECT * FROM categories WHERE id=$id";
            return DB::select($consulta, self::class);
        }

        //recuperar categorias con un filtro
        public static function getFiltered(
            string $c='category', string $v='', string $o='id', string $s='ASC'):array{

            $consulta="SELECT * FROM categories WHERE $c LIKE '%$v%' ORDER BY $o $s";
            return DB::selectAll($consulta, self::class);
        }

        //actualizar una entrada
        public function actualizar(){

            $consulta="UPDATE categories SET
                          category='$this->category'
                        WHERE id=$this->id";

            return DB::update($consulta);
        }

        //borrar una entrada existente
        public static function borrar(int $id){
            $consulta="DELETE FROM categories WHERE id=$id";
            return DB::delete($consulta);
        }
        //cuenta las categorias
        public static function count(){
          $consulta = "select count(id) from categories";
          return DB::select($consulta);
        }

        //__toString
        public function __toString():string{
            return "$this->id: $this->category";
        }
    }
