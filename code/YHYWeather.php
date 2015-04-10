<?php

// namespace YHY\models;
//use ForeCastIO\ForecastIO;

// use Cmfcmf\OpenWeatherMap;
// use Cmfcmf\OpenWeatherMap\Exception as OWMException;
// use JeroenDesloovere\Geolocation\Geolocation;

class YHYWeather extends DataObject { 

	// static $db = array(
	// 	'data' => 'String'
	// );

	public function getCMSFields() {
		$fields = parent::getCMSFields();
		return $fields;
	}

}

class YHYWeather_Controller extends Controller {
	static $allowed_actions = array( 'show', 'update', 'forecast' );

	public function init() {
		date_default_timezone_set('Asia/Manila');

	    parent::init();
	}

	public function forecast() {
		$file = "../assets/weather_forecast.json";
		$obj = json_decode( file_get_contents($file), true );
		// var_dump( $obj );
		$this->response->addHeader("Content-Type", "application/json"); 
		header('Content-Type: application/json');
		$data = json_encode( $obj, JSON_FORCE_OBJECT );

		return $data;
	}

	public function update() {}

	private function getForecast() {
        $url = 'http://api.openweathermap.org/data/2.5/forecast/daily?q=Cebu%20City&mode=json&units=metric&cnt=7'; // 1717512 = Cebu City
        $weather_service = new RestfulService($url);
        $weather = $weather_service->request();
        
        $weather_data = json_decode($weather->getBody(), true);
        
        return json_encode( $weather_data );
	}
}