<?php
require_once "data/Autor.php";
require_once "data/Libro.php";

  class AutorController extends Controller {
    public static $lista = [
      ['id'=>'1','author'=>'Abraham Silberschatz','nationality'=>'Israelis / American','birth_year'=>'1952','fields'=>'Database Systems, Operating Systems', 'libros'=>[ ['id'=>'1','title'=>'Operating System Concepts'], ['id'=>'2','title'=>'Operating System Concepts']] ],
      ['id'=>'2','author'=>'Andrew S. Tanenbaum','nationality'=>'Deutch / American','birth_year'=>'1944','fields'=>'Distributed computing, Operating Systems', 'libros'=>[ ['id'=>'3','title'=>'Computer Networks'], ['id'=>'4','title'=>'Modern Operating Systems']] ]

    ];
    public function index(){
      return view('autor',['autor_s'=> self::$lista]); 
    }
    public function show($id) {
      static $authors=[];
      foreach(self::$lista as $autor){
        if($autor['id'] == $id){
          $authors = $autor;
        }
      }
      self::$lista = $authors;
      return view('autor',['autor_s'=> $authors]); 
    }
  }
?>