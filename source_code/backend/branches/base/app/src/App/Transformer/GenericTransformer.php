<?php 
namespace app\transformer;

/**
*   Transformador que se usa para las respuestas
*   que no son propias de un modelo en la aplicación,
*   es decir, para las personalizadas.
*
*   @author: Sebastián Lara <sebastian@mobigeek.co>
*
*   @date: 30/11/2014
*/

use League\Fractal\TransformerAbstract;

class GenericTransformer extends TransformerAbstract {
    
    protected $availableEmbeds = [];

    /*
     * Turn this item object into a generic array
     *
     * @return array
     */
    public function transform($data) {
        return $data;
    }

}
