<?php
class AppConfig {
    private static $instance = FALSE;
    private $config = [];

    // Construtor privado: Este método deve carregar as configurações iniciais da aplicação.
    private function __construct() {
        // Implementar o carregamento das configurações iniciais no array $this->config
        $this->config['APLICATION_NAME'] = 'Nome da Aplicação';
        $this->config['VERSION'] = '1.0.0.0';
        $this->config['DATABASE'] = 'dados.sql';
        $this->config['LOG'] = 'c:/system/log.txt';
        

       
        
    }

    // Método estático getInstance: Este método deve garantir que apenas uma instância da classe seja criada.
    public static function getInstance() {
        // Implementar o padrão Singleton aqui.
        if(self::$instance !== FALSE)
            return self::$instance;


        $class = __CLASS__;

        self::$instance = new $class();
        return self:: $instance;
    }

    // Método get: Este método deve retornar o valor de uma chave específica de configuração.
    public function get($key) {
        // Implementar a lógica para retornar uma configuração específica.
        if(array_key_exists($key, $this->config))
            return $this->config [$key];

            return '';


    }

    // Método set: Este método deve permitir que os valores de configuração sejam atualizados.
    public function set($key, $value) {
         // Implementar a lógica para atualizar uma configuração específica.
		if (array_key_exists ($key, $this->config))
			$this->config [$key] = $value;
	
       
    }
}