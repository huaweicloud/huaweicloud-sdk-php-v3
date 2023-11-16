<?php

namespace HuaweiCloud\SDK\Aad\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceIpInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceIpInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ipId  IP ID
    * ip  IP
    * basicBandwidth  保底带宽
    * elasticBandwidth  弹性带宽
    * ipStatus  IP状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ipId' => 'string',
            'ip' => 'string',
            'basicBandwidth' => 'int',
            'elasticBandwidth' => 'int',
            'ipStatus' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ipId  IP ID
    * ip  IP
    * basicBandwidth  保底带宽
    * elasticBandwidth  弹性带宽
    * ipStatus  IP状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ipId' => null,
        'ip' => null,
        'basicBandwidth' => 'int32',
        'elasticBandwidth' => 'int32',
        'ipStatus' => 'int32'
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
    * ipId  IP ID
    * ip  IP
    * basicBandwidth  保底带宽
    * elasticBandwidth  弹性带宽
    * ipStatus  IP状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ipId' => 'ip_id',
            'ip' => 'ip',
            'basicBandwidth' => 'basic_bandwidth',
            'elasticBandwidth' => 'elastic_bandwidth',
            'ipStatus' => 'ip_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ipId  IP ID
    * ip  IP
    * basicBandwidth  保底带宽
    * elasticBandwidth  弹性带宽
    * ipStatus  IP状态
    *
    * @var string[]
    */
    protected static $setters = [
            'ipId' => 'setIpId',
            'ip' => 'setIp',
            'basicBandwidth' => 'setBasicBandwidth',
            'elasticBandwidth' => 'setElasticBandwidth',
            'ipStatus' => 'setIpStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ipId  IP ID
    * ip  IP
    * basicBandwidth  保底带宽
    * elasticBandwidth  弹性带宽
    * ipStatus  IP状态
    *
    * @var string[]
    */
    protected static $getters = [
            'ipId' => 'getIpId',
            'ip' => 'getIp',
            'basicBandwidth' => 'getBasicBandwidth',
            'elasticBandwidth' => 'getElasticBandwidth',
            'ipStatus' => 'getIpStatus'
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
        $this->container['ipId'] = isset($data['ipId']) ? $data['ipId'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['basicBandwidth'] = isset($data['basicBandwidth']) ? $data['basicBandwidth'] : null;
        $this->container['elasticBandwidth'] = isset($data['elasticBandwidth']) ? $data['elasticBandwidth'] : null;
        $this->container['ipStatus'] = isset($data['ipStatus']) ? $data['ipStatus'] : null;
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
    * Gets ipId
    *  IP ID
    *
    * @return string|null
    */
    public function getIpId()
    {
        return $this->container['ipId'];
    }

    /**
    * Sets ipId
    *
    * @param string|null $ipId IP ID
    *
    * @return $this
    */
    public function setIpId($ipId)
    {
        $this->container['ipId'] = $ipId;
        return $this;
    }

    /**
    * Gets ip
    *  IP
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip IP
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets basicBandwidth
    *  保底带宽
    *
    * @return int|null
    */
    public function getBasicBandwidth()
    {
        return $this->container['basicBandwidth'];
    }

    /**
    * Sets basicBandwidth
    *
    * @param int|null $basicBandwidth 保底带宽
    *
    * @return $this
    */
    public function setBasicBandwidth($basicBandwidth)
    {
        $this->container['basicBandwidth'] = $basicBandwidth;
        return $this;
    }

    /**
    * Gets elasticBandwidth
    *  弹性带宽
    *
    * @return int|null
    */
    public function getElasticBandwidth()
    {
        return $this->container['elasticBandwidth'];
    }

    /**
    * Sets elasticBandwidth
    *
    * @param int|null $elasticBandwidth 弹性带宽
    *
    * @return $this
    */
    public function setElasticBandwidth($elasticBandwidth)
    {
        $this->container['elasticBandwidth'] = $elasticBandwidth;
        return $this;
    }

    /**
    * Gets ipStatus
    *  IP状态
    *
    * @return int|null
    */
    public function getIpStatus()
    {
        return $this->container['ipStatus'];
    }

    /**
    * Sets ipStatus
    *
    * @param int|null $ipStatus IP状态
    *
    * @return $this
    */
    public function setIpStatus($ipStatus)
    {
        $this->container['ipStatus'] = $ipStatus;
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

