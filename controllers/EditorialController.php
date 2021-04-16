<?php
require_once "data/Editorial.php";

  class EditorialController extends Controller {
    public static $lista=[
      ['id'=>'1','publisher'=>'John Wiley & Sons','country'=>'United States','founded'=>'1807','genere'=>'Academic','libros'=>[['id'=>'1','title'=>'Operating System Concepts'],['id'=>'2','title'=>'Database System Concepts']]],
      ['id'=>'2','publisher'=>'Pearson Education','country'=>'United Kingdom','founded'=>'1844','genere'=>'Education','libros'=>[['id'=>'3','title'=>'Computer Networks'],['id'=>'4','title'=>'Modern Operating Systems']]],

    ];

    public function index() {

      return view('editoriales',['edit_s'=> self::$lista]); 
    }
    public function show($id) {
      static $editorials=[];
      foreach(self::$lista as $edit){
        if($edit['id'] == $id){
          $editorials = $edit;
        }
      }
      self::$lista = $editorials;
      return view('editoriales',['edit_s'=> $editorials]); 
    }
  }
?>