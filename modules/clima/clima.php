<?php 

class clima extends Module{


    
    public function __construct()
    {
        $this->name          = 'clima';
        $this->tab           = 'Blocks';
        $this->author        = 'Mario';
        $this->version       = '1.0.0';
        $this->bootstrap     = true;
       
        parent::__construct();
        $this->displayName = $this->l('Weather in the navbar');
        $this->description = $this->l('This module gives the data of location, weather, city through the ip');

    }

    public function install()
    {
        if(!parent::install() || !$this->registerHook('displayNavFullWidth')) //Este es el hook de la tienda
        {
            return false;
        }else{
            return true;
        }
    }

    public function unistall()
    {
        if(!parent::unistall() || !$this->unregisterHook('displayNavFullWidth')) //Este es el hook de la tienda
        {
            return false;
        }else{
            return true;
        }
    }


    //Una funcion para cuando guardases la Key
    public function postProcess()
    {

      if (Tools::isSubmit('Save'))
	    {
        $clima_key = Tools::getValue('clima_key');
        
        //Cogemos el texto de la tabla ps_configuration con su campo correspondiente para poner en el value
        Configuration::updateValue('CLIMA_MODULO_API_KEY', $clima_key);

        // Devuelvo un mensaje de confirmación si se actualiza adecuadamente, debe traducirse en el back si quieres modificarlo
        return $this->displayConfirmation($this->l('Updated Successfully'));
	    } 
    }

    /**
	 * Hacemos el metodo de configuración
	 * Para cuando lo instalemos, podamos configurar el módulo
	 * Mostrará un formulario de api key ya que el usuario tendría que tener
	 * su propia key configurada 
	 */
    public function getContent()
	{
        /*
        Evaluamos si el nombre del dominio es localhost o su ip
        */
        if (in_array($_SERVER['SERVER_NAME'], array('localhost', '127.0.0.1'))) {
            $this->context->controller->errors[] = $this->l('You are on localhost, geolocation only works from an online website');
            $this->context->controller->errors[] = $this->l('Remember that we must activate the geolocation in the International / Location / Geolocation section');

        }
        //Una vez hecho devolveremos el formulario por si cambiamos la key
       return $this->postProcess() . $this->displayForm();
	}

    public function displayForm()
    {
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Settings'),
                    'icon' => 'icon-wrench'
                ),
                'input' => array(
                    array(
                        'type' => 'text',
                        'label' => $this->l('OpenWeather Key'),
                        'name' => 'clima_key',
                        'identifier' => 'value',
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                     )
                 ),
        );
        $helper = new HelperForm();
        $helper->module = $this;
        $helper->name_controller = $this->name;
        $helper->identifier = $this->identifier;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->languages = $this->context->controller->getLanguages();
        $helper->currentIndex = AdminController::$currentIndex . '&configure=' . $this->name;
        $helper->default_form_language = $this->context->controller->default_form_language;
        $helper->allow_employee_form_lang = $this->context->controller->allow_employee_form_lang;
        $helper->title = $this->displayName;

        /*Puedo configurar cual va a ser mi campo de submit */
        $helper->submit_action = 'Save';
        $helper->fields_value['clima_key'] = Configuration::get('CLIMA_MODULO_API_KEY');
        

        return $helper->generateForm(array($fields_form));
    }

    /**
     * Método para mostrar en el displaynavfullwidth
     * Conseguios la KEY introducida en el formulario y luego hacer la llamada a geolocalizar 
     * con lo que obtenga separaremos el array, consiguiendo en primera posición la ip
     * y en segunda, una tanda de campos de la API
	 *
	 * @param $api_key, $latitude and $long
	 * @return object $response
	 */

    public function hookdisplayNavFullWidth()
    {
        $api_key = Configuration::get('CLIMA_MODULO_API_KEY');

        $data=$this->geolocation($api_key);
        $this->context->smarty->assign( array(
            'city' =>  $data[1]->name,
            'wind' =>  ($data[1]->wind->speed),
            'weather' =>  ucfirst($data[1]->weather[0]->description),
            'temp' => $data[1]->main->temp,
            'IP' => $data[0]
        ));
        
        return $this->context->smarty->fetch($this->local_path.'views/templates/hook/nav.tpl');
    }
    
/**
     * Este método solo es un enlace para devolver luego un array
     *con todo lo necesario, primero consigue el pais y luego 
     * con los datos de latitud,logintud y la apikey llama a la api
     * y con eso retornará los datos para pasarlos al tpl
	 *
	 * @param  $zip(no es necesario ya)$api_key, $latitude and $long
	 * @return object $response
	 */
public function geolocation($api_key)
{
    $datos=$this->getCountry();
    $country=$datos[0];
    $ip=$datos[1];
    $latitude=$datos[2];
    $long=$datos[3];
    $datosdeapi=$this->callapi($country,$api_key,$latitude,$long);
    return array($ip, $datosdeapi);
}

/**
     * Este método usa el módulo de geoip
     * Consigue una ip en el try para Savela en una variable
     * y luego devuelve en un array el codigo del pais que ya no es necesario
     * la latitud y la longitud 
     * hace un recurso de curl con ella que retorna la transferencia
     * como un string el cual acepta json y lo guarda todo en response y luego cierra el curl
	 *
	 * @param  
	 * @return object $array
	 */

public function getCountry()
{
    $codigodepais="";
    $ip="";
    $latitude="";
    $long="";
    $record = false;
    if (in_array($_SERVER['SERVER_NAME'], array('localhost', '127.0.0.1'))) {
        /* comprobamos que la base de datos de Maxmind existe */
        if (@filemtime(_PS_GEOIP_DIR_ . _PS_GEOIP_CITY_FILE_)) {
            $reader = new GeoIp2\Database\Reader(_PS_GEOIP_DIR_ . _PS_GEOIP_CITY_FILE_);
            try {
                //$record = $reader->city(Tools::getRemoteAddr());
                $record = $reader->city("185.119.237.121");
                $ip=Tools::getRemoteAddr();
            } catch (\GeoIp2\Exception\AddressNotFoundException $e) {
                $record = null;
            }

            if (isset($record->country->isoCode)) {
                $codigodepais=$record->country->isoCode;
                $latitude=$record->location->latitude;
                $long=$record->location->longitude;
             
                return array($codigodepais,$ip,$latitude,$long);
            } else {
                return false;
            }
        } else {
            return false;
        }
    } else {
        return false;
    }
}

	/**
     * Este método hace una llamada a la api del clima
     * Primero guarda la url en una variable y luego 
     * hace un recurso de curl con ella que retorna la transferencia
     * como un string el cual acepta json y lo guarda todo en response y luego cierra el curl
	 *
	 * @param  $zip(no es necesario ya)$api_key, $latitude and $long
	 * @return object $response
	 */
    public function callApi($zip = null, $api_key = null,$latitude,$long)
    {
    
        $url = 'http://api.openweathermap.org/data/2.5/weather?lat=' . $latitude . '&lon=' . $long . '&appid=' . $api_key . '&units=metric&lang=es';
        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); //Mete los resultados dentro del modulo 

		$response = curl_exec($curl);

		curl_close($curl);

		return json_decode($response);
    }
}
?>