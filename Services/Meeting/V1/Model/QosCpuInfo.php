<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QosCpuInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QosCpuInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clientCpuMax  App最大CPU使用率。
    * systemCpuMax  系统最大CPU使用率。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clientCpuMax' => '\HuaweiCloud\SDK\Meeting\V1\Model\QosDataElement[]',
            'systemCpuMax' => '\HuaweiCloud\SDK\Meeting\V1\Model\QosDataElement[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clientCpuMax  App最大CPU使用率。
    * systemCpuMax  系统最大CPU使用率。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clientCpuMax' => null,
        'systemCpuMax' => null
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
    * clientCpuMax  App最大CPU使用率。
    * systemCpuMax  系统最大CPU使用率。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clientCpuMax' => 'client_cpu_max',
            'systemCpuMax' => 'system_cpu_max'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clientCpuMax  App最大CPU使用率。
    * systemCpuMax  系统最大CPU使用率。
    *
    * @var string[]
    */
    protected static $setters = [
            'clientCpuMax' => 'setClientCpuMax',
            'systemCpuMax' => 'setSystemCpuMax'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clientCpuMax  App最大CPU使用率。
    * systemCpuMax  系统最大CPU使用率。
    *
    * @var string[]
    */
    protected static $getters = [
            'clientCpuMax' => 'getClientCpuMax',
            'systemCpuMax' => 'getSystemCpuMax'
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
        $this->container['clientCpuMax'] = isset($data['clientCpuMax']) ? $data['clientCpuMax'] : null;
        $this->container['systemCpuMax'] = isset($data['systemCpuMax']) ? $data['systemCpuMax'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets clientCpuMax
    *  App最大CPU使用率。
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\QosDataElement[]|null
    */
    public function getClientCpuMax()
    {
        return $this->container['clientCpuMax'];
    }

    /**
    * Sets clientCpuMax
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\QosDataElement[]|null $clientCpuMax App最大CPU使用率。
    *
    * @return $this
    */
    public function setClientCpuMax($clientCpuMax)
    {
        $this->container['clientCpuMax'] = $clientCpuMax;
        return $this;
    }

    /**
    * Gets systemCpuMax
    *  系统最大CPU使用率。
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\QosDataElement[]|null
    */
    public function getSystemCpuMax()
    {
        return $this->container['systemCpuMax'];
    }

    /**
    * Sets systemCpuMax
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\QosDataElement[]|null $systemCpuMax 系统最大CPU使用率。
    *
    * @return $this
    */
    public function setSystemCpuMax($systemCpuMax)
    {
        $this->container['systemCpuMax'] = $systemCpuMax;
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

