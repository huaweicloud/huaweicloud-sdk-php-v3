<?php

namespace HuaweiCloud\SDK\Aad\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SourceIp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SourceIp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataCenter  数据中心
    * isp  线路
    * ip  实例ip
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataCenter' => 'string',
            'isp' => 'string',
            'ip' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataCenter  数据中心
    * isp  线路
    * ip  实例ip
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataCenter' => null,
        'isp' => null,
        'ip' => null
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
    * dataCenter  数据中心
    * isp  线路
    * ip  实例ip
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataCenter' => 'data_center',
            'isp' => 'isp',
            'ip' => 'ip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataCenter  数据中心
    * isp  线路
    * ip  实例ip
    *
    * @var string[]
    */
    protected static $setters = [
            'dataCenter' => 'setDataCenter',
            'isp' => 'setIsp',
            'ip' => 'setIp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataCenter  数据中心
    * isp  线路
    * ip  实例ip
    *
    * @var string[]
    */
    protected static $getters = [
            'dataCenter' => 'getDataCenter',
            'isp' => 'getIsp',
            'ip' => 'getIp'
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
        $this->container['dataCenter'] = isset($data['dataCenter']) ? $data['dataCenter'] : null;
        $this->container['isp'] = isset($data['isp']) ? $data['isp'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['dataCenter']) && (mb_strlen($this->container['dataCenter']) > 32768)) {
                $invalidProperties[] = "invalid value for 'dataCenter', the character length must be smaller than or equal to 32768.";
            }
            if (!is_null($this->container['dataCenter']) && (mb_strlen($this->container['dataCenter']) < 0)) {
                $invalidProperties[] = "invalid value for 'dataCenter', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['isp']) && (mb_strlen($this->container['isp']) > 32768)) {
                $invalidProperties[] = "invalid value for 'isp', the character length must be smaller than or equal to 32768.";
            }
            if (!is_null($this->container['isp']) && (mb_strlen($this->container['isp']) < 0)) {
                $invalidProperties[] = "invalid value for 'isp', the character length must be bigger than or equal to 0.";
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
    * Gets dataCenter
    *  数据中心
    *
    * @return string|null
    */
    public function getDataCenter()
    {
        return $this->container['dataCenter'];
    }

    /**
    * Sets dataCenter
    *
    * @param string|null $dataCenter 数据中心
    *
    * @return $this
    */
    public function setDataCenter($dataCenter)
    {
        $this->container['dataCenter'] = $dataCenter;
        return $this;
    }

    /**
    * Gets isp
    *  线路
    *
    * @return string|null
    */
    public function getIsp()
    {
        return $this->container['isp'];
    }

    /**
    * Sets isp
    *
    * @param string|null $isp 线路
    *
    * @return $this
    */
    public function setIsp($isp)
    {
        $this->container['isp'] = $isp;
        return $this;
    }

    /**
    * Gets ip
    *  实例ip
    *
    * @return string[]|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string[]|null $ip 实例ip
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
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

