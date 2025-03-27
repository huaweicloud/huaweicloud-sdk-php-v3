<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NetworkCheckInfoRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NetworkCheckInfoRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainConnectivity  域名连通性
    * destinationConnectivity  目的端连通性
    * networkDelay  网络时延
    * networkJitter  网络抖动
    * migrationSpeed  带宽
    * lossPercentage  丢包
    * cpuUsage  CPU占用
    * memUsage  内存占用
    * evaluationResult  评估结果
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainConnectivity' => 'bool',
            'destinationConnectivity' => 'bool',
            'networkDelay' => 'double',
            'networkJitter' => 'double',
            'migrationSpeed' => 'double',
            'lossPercentage' => 'double',
            'cpuUsage' => 'double',
            'memUsage' => 'double',
            'evaluationResult' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainConnectivity  域名连通性
    * destinationConnectivity  目的端连通性
    * networkDelay  网络时延
    * networkJitter  网络抖动
    * migrationSpeed  带宽
    * lossPercentage  丢包
    * cpuUsage  CPU占用
    * memUsage  内存占用
    * evaluationResult  评估结果
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainConnectivity' => null,
        'destinationConnectivity' => null,
        'networkDelay' => 'double',
        'networkJitter' => 'double',
        'migrationSpeed' => 'double',
        'lossPercentage' => 'double',
        'cpuUsage' => 'double',
        'memUsage' => 'double',
        'evaluationResult' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * domainConnectivity  域名连通性
    * destinationConnectivity  目的端连通性
    * networkDelay  网络时延
    * networkJitter  网络抖动
    * migrationSpeed  带宽
    * lossPercentage  丢包
    * cpuUsage  CPU占用
    * memUsage  内存占用
    * evaluationResult  评估结果
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainConnectivity' => 'domain_connectivity',
            'destinationConnectivity' => 'destination_connectivity',
            'networkDelay' => 'network_delay',
            'networkJitter' => 'network_jitter',
            'migrationSpeed' => 'migration_speed',
            'lossPercentage' => 'loss_percentage',
            'cpuUsage' => 'cpu_usage',
            'memUsage' => 'mem_usage',
            'evaluationResult' => 'evaluation_result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainConnectivity  域名连通性
    * destinationConnectivity  目的端连通性
    * networkDelay  网络时延
    * networkJitter  网络抖动
    * migrationSpeed  带宽
    * lossPercentage  丢包
    * cpuUsage  CPU占用
    * memUsage  内存占用
    * evaluationResult  评估结果
    *
    * @var string[]
    */
    protected static $setters = [
            'domainConnectivity' => 'setDomainConnectivity',
            'destinationConnectivity' => 'setDestinationConnectivity',
            'networkDelay' => 'setNetworkDelay',
            'networkJitter' => 'setNetworkJitter',
            'migrationSpeed' => 'setMigrationSpeed',
            'lossPercentage' => 'setLossPercentage',
            'cpuUsage' => 'setCpuUsage',
            'memUsage' => 'setMemUsage',
            'evaluationResult' => 'setEvaluationResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainConnectivity  域名连通性
    * destinationConnectivity  目的端连通性
    * networkDelay  网络时延
    * networkJitter  网络抖动
    * migrationSpeed  带宽
    * lossPercentage  丢包
    * cpuUsage  CPU占用
    * memUsage  内存占用
    * evaluationResult  评估结果
    *
    * @var string[]
    */
    protected static $getters = [
            'domainConnectivity' => 'getDomainConnectivity',
            'destinationConnectivity' => 'getDestinationConnectivity',
            'networkDelay' => 'getNetworkDelay',
            'networkJitter' => 'getNetworkJitter',
            'migrationSpeed' => 'getMigrationSpeed',
            'lossPercentage' => 'getLossPercentage',
            'cpuUsage' => 'getCpuUsage',
            'memUsage' => 'getMemUsage',
            'evaluationResult' => 'getEvaluationResult'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['domainConnectivity'] = isset($data['domainConnectivity']) ? $data['domainConnectivity'] : null;
        $this->container['destinationConnectivity'] = isset($data['destinationConnectivity']) ? $data['destinationConnectivity'] : null;
        $this->container['networkDelay'] = isset($data['networkDelay']) ? $data['networkDelay'] : null;
        $this->container['networkJitter'] = isset($data['networkJitter']) ? $data['networkJitter'] : null;
        $this->container['migrationSpeed'] = isset($data['migrationSpeed']) ? $data['migrationSpeed'] : null;
        $this->container['lossPercentage'] = isset($data['lossPercentage']) ? $data['lossPercentage'] : null;
        $this->container['cpuUsage'] = isset($data['cpuUsage']) ? $data['cpuUsage'] : null;
        $this->container['memUsage'] = isset($data['memUsage']) ? $data['memUsage'] : null;
        $this->container['evaluationResult'] = isset($data['evaluationResult']) ? $data['evaluationResult'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['networkDelay'] === null) {
            $invalidProperties[] = "'networkDelay' can't be null";
        }
            if (($this->container['networkDelay'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'networkDelay', must be smaller than or equal to 1E+4.";
            }
            if (($this->container['networkDelay'] < 0)) {
                $invalidProperties[] = "invalid value for 'networkDelay', must be bigger than or equal to 0.";
            }
        if ($this->container['networkJitter'] === null) {
            $invalidProperties[] = "'networkJitter' can't be null";
        }
            if (($this->container['networkJitter'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'networkJitter', must be smaller than or equal to 1E+4.";
            }
            if (($this->container['networkJitter'] < 0)) {
                $invalidProperties[] = "invalid value for 'networkJitter', must be bigger than or equal to 0.";
            }
        if ($this->container['migrationSpeed'] === null) {
            $invalidProperties[] = "'migrationSpeed' can't be null";
        }
            if (($this->container['migrationSpeed'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'migrationSpeed', must be smaller than or equal to 1E+4.";
            }
            if (($this->container['migrationSpeed'] < 0)) {
                $invalidProperties[] = "invalid value for 'migrationSpeed', must be bigger than or equal to 0.";
            }
        if ($this->container['lossPercentage'] === null) {
            $invalidProperties[] = "'lossPercentage' can't be null";
        }
            if (($this->container['lossPercentage'] > 1E+2)) {
                $invalidProperties[] = "invalid value for 'lossPercentage', must be smaller than or equal to 1E+2.";
            }
            if (($this->container['lossPercentage'] < 0)) {
                $invalidProperties[] = "invalid value for 'lossPercentage', must be bigger than or equal to 0.";
            }
        if ($this->container['cpuUsage'] === null) {
            $invalidProperties[] = "'cpuUsage' can't be null";
        }
            if (($this->container['cpuUsage'] > 1E+2)) {
                $invalidProperties[] = "invalid value for 'cpuUsage', must be smaller than or equal to 1E+2.";
            }
            if (($this->container['cpuUsage'] < 0)) {
                $invalidProperties[] = "invalid value for 'cpuUsage', must be bigger than or equal to 0.";
            }
        if ($this->container['memUsage'] === null) {
            $invalidProperties[] = "'memUsage' can't be null";
        }
            if (($this->container['memUsage'] > 1E+2)) {
                $invalidProperties[] = "invalid value for 'memUsage', must be smaller than or equal to 1E+2.";
            }
            if (($this->container['memUsage'] < 0)) {
                $invalidProperties[] = "invalid value for 'memUsage', must be bigger than or equal to 0.";
            }
        if ($this->container['evaluationResult'] === null) {
            $invalidProperties[] = "'evaluationResult' can't be null";
        }
            if ((mb_strlen($this->container['evaluationResult']) > 8)) {
                $invalidProperties[] = "invalid value for 'evaluationResult', the character length must be smaller than or equal to 8.";
            }
            if ((mb_strlen($this->container['evaluationResult']) < 6)) {
                $invalidProperties[] = "invalid value for 'evaluationResult', the character length must be bigger than or equal to 6.";
            }
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets domainConnectivity
    *  域名连通性
    *
    * @return bool|null
    */
    public function getDomainConnectivity()
    {
        return $this->container['domainConnectivity'];
    }

    /**
    * Sets domainConnectivity
    *
    * @param bool|null $domainConnectivity 域名连通性
    *
    * @return $this
    */
    public function setDomainConnectivity($domainConnectivity)
    {
        $this->container['domainConnectivity'] = $domainConnectivity;
        return $this;
    }

    /**
    * Gets destinationConnectivity
    *  目的端连通性
    *
    * @return bool|null
    */
    public function getDestinationConnectivity()
    {
        return $this->container['destinationConnectivity'];
    }

    /**
    * Sets destinationConnectivity
    *
    * @param bool|null $destinationConnectivity 目的端连通性
    *
    * @return $this
    */
    public function setDestinationConnectivity($destinationConnectivity)
    {
        $this->container['destinationConnectivity'] = $destinationConnectivity;
        return $this;
    }

    /**
    * Gets networkDelay
    *  网络时延
    *
    * @return double
    */
    public function getNetworkDelay()
    {
        return $this->container['networkDelay'];
    }

    /**
    * Sets networkDelay
    *
    * @param double $networkDelay 网络时延
    *
    * @return $this
    */
    public function setNetworkDelay($networkDelay)
    {
        $this->container['networkDelay'] = $networkDelay;
        return $this;
    }

    /**
    * Gets networkJitter
    *  网络抖动
    *
    * @return double
    */
    public function getNetworkJitter()
    {
        return $this->container['networkJitter'];
    }

    /**
    * Sets networkJitter
    *
    * @param double $networkJitter 网络抖动
    *
    * @return $this
    */
    public function setNetworkJitter($networkJitter)
    {
        $this->container['networkJitter'] = $networkJitter;
        return $this;
    }

    /**
    * Gets migrationSpeed
    *  带宽
    *
    * @return double
    */
    public function getMigrationSpeed()
    {
        return $this->container['migrationSpeed'];
    }

    /**
    * Sets migrationSpeed
    *
    * @param double $migrationSpeed 带宽
    *
    * @return $this
    */
    public function setMigrationSpeed($migrationSpeed)
    {
        $this->container['migrationSpeed'] = $migrationSpeed;
        return $this;
    }

    /**
    * Gets lossPercentage
    *  丢包
    *
    * @return double
    */
    public function getLossPercentage()
    {
        return $this->container['lossPercentage'];
    }

    /**
    * Sets lossPercentage
    *
    * @param double $lossPercentage 丢包
    *
    * @return $this
    */
    public function setLossPercentage($lossPercentage)
    {
        $this->container['lossPercentage'] = $lossPercentage;
        return $this;
    }

    /**
    * Gets cpuUsage
    *  CPU占用
    *
    * @return double
    */
    public function getCpuUsage()
    {
        return $this->container['cpuUsage'];
    }

    /**
    * Sets cpuUsage
    *
    * @param double $cpuUsage CPU占用
    *
    * @return $this
    */
    public function setCpuUsage($cpuUsage)
    {
        $this->container['cpuUsage'] = $cpuUsage;
        return $this;
    }

    /**
    * Gets memUsage
    *  内存占用
    *
    * @return double
    */
    public function getMemUsage()
    {
        return $this->container['memUsage'];
    }

    /**
    * Sets memUsage
    *
    * @param double $memUsage 内存占用
    *
    * @return $this
    */
    public function setMemUsage($memUsage)
    {
        $this->container['memUsage'] = $memUsage;
        return $this;
    }

    /**
    * Gets evaluationResult
    *  评估结果
    *
    * @return string
    */
    public function getEvaluationResult()
    {
        return $this->container['evaluationResult'];
    }

    /**
    * Sets evaluationResult
    *
    * @param string $evaluationResult 评估结果
    *
    * @return $this
    */
    public function setEvaluationResult($evaluationResult)
    {
        $this->container['evaluationResult'] = $evaluationResult;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

