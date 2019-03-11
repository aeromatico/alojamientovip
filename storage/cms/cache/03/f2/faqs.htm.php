<?php 
class Cms5c85b67fc630a674853066_4f379cb1c83fb335803f5e7308e12d4bClass extends Cms\Classes\PartialCode
{
public function onStart()
{
    
   try {
     // adapt your params and query
     //$this['subcategorias'] = Aero\Manager\Models\Categorias::where('categoria_padre_id',$this->param('id'))->get();
     $this['faqs'] = Aero\Manager\Models\Faqs::where('page', $this->page->id)->get();
   } 
   catch (ModelNotFoundException $ex) {
     return Redirect::to('/404');  
   }
   
}
}
