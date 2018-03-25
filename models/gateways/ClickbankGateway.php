<?php
/**
 * 
 */
namespace app\gateways;

use Yii;
use yii\base\Model;

/**
 * The Clickbank Gateway
 * 
 * @author Henry Ohanga <ohanga.henry@gmail.com>
 * @since 1.0
 */
class ClickbankGateway extends Model
{
    private $gateway;

    private $developerApiKey;
    private $clerksApiKey;
    private $_headers = [];

    public function __construct($config = [])
    {
        if (isset($config['clerks_api_key'], $config['developer_api_key'])) {
            $this->developerApiKey = Yii::$app->params['developerApiKey'];
            $this->clerksApiKey = Yii::$app->params['clerksApiKey'];
            // $this->baseUrl = $
        }
    }

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->_headers = [
            'Authorization' => $this->developerApiKey . ':' . $this->clerksApiKey,
            'Accept' => 'application/json',
        ];
    }
}