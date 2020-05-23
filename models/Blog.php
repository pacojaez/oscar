<?php

    // Clase Usuario del modelo
    class Blog{

        // PROPIEDADES
        public $id=0, $entrada='', $tags='', $imagen='', $created_at='', $updated_at='', $id_usuario=0,
                $title='',$subtitle='', $meta_description='', $is_draft=0, $published_at='', $id_category='';

       // METODOS DEL CRUD

       // registrar una nueva entrada.

       public function guardar(){

           $consulta="INSERT INTO entradas (id_usuario, title, tags, subtitle, entrada, is_draft, meta_description, imagen, id_category)
                      VALUES
                        ($this->id_usuario,'$this->title','$this->tags','$this->subtitle','$this->entrada',$this->is_draft,
                        '$this->meta_description','$this->imagen', $this->id_category)";

           return DB::insert($consulta); //conectar y ejecutar
       }

        // recuperar todas las entradas
        public static function get():array{
            $consulta="SELECT * FROM entradas"; //preparar la consulta
            return DB::selectAll($consulta, self::class);
        }
        //recuperar entradas de una categoria
        public static function getEntradasCategory(int $id):?array{
            $consulta="SELECT * FROM entradas WHERE id_category=$id";
            return DB::selectAll($consulta, self::class);
        }

        // recuperar todas las entradas orden desc
        public static function getDesc():array{
            $consulta="SELECT * FROM entradas
                      Order by created_at Desc"; //preparar la consulta
            return DB::selectAll($consulta, self::class);
        }

        // recuperar una entrada concreta por id
        public static function getById(int $id):?Blog{
            $consulta="SELECT * FROM entradas WHERE id=$id";
            return DB::select($consulta, self::class);
        }

        //recuperar usuarios con un filtro
        public static function getFiltered(
            string $c='entrada', string $v='', string $o='id', string $s='ASC'):array{

            $consulta="SELECT * FROM entradas WHERE $c LIKE '%$v%' ORDER BY $o $s";
            return DB::selectAll($consulta, self::class);
        }
        //cuenta las entradas
        public static function count(){
          $consulta = "select count(id) from entradas";
          return DB::select($consulta);

        }
        //actualizar una entrada
        public function actualizar(){

            $consulta="UPDATE entradas SET
                          entrada='$this->entrada',
                          title ='$this->title',
                          subtitle = '$this->subtitle',
                          tags='$this->tags',
                          meta_description = '$this->meta_description',
                          id_usuario = $this->id_usuario,
                          is_draft = $this->is_draft,
                          imagen = '$this->imagen',
                          updated_at= '$this->updated_at',
                          id_category= $this->id_category
                        WHERE id=$this->id;";

            return DB::update($consulta);
        }

        //borrar una entrada existente
        public static function borrar(int $id){
            $consulta="DELETE FROM entradas WHERE id=$id";
            return DB::delete($consulta);
        }

        //__toString
        public function __toString():string{
            return "$this->id: ($this->title) $this->tags $this->subtitle";
        }
    }
