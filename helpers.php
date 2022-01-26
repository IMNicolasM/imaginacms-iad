<?php



if (!function_exists('iad_geCategories')) {
  
  function iad_geCategories($options = array())
  {
    
    $default_options = array(
      'take' => 12, //Numero de posts a obtener,
      'order' => ['field'=>'created_at','way'=>'desc'],//orden de llamado
      "filter" => ['status' => 1]
    );
    
    $options = array_merge_recursive($default_options, $options);
    
    $categoryRepository=app('Modules\Iad\Repositories\CategoryRepository');
    $params=json_decode(json_encode($options));
    
    return $categoryRepository->getItemsBy($params);
    
  }
}

