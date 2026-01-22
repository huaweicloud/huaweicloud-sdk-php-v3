<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AntiVirusRuleDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AntiVirusRuleDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * objectId  防护对象ID，为必传参数
    * scanProtocolConfigs  扫描协议配置列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'objectId' => 'string',
            'scanProtocolConfigs' => '\HuaweiCloud\SDK\Cfw\V1\Model\ScanProtocolConfig[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * objectId  防护对象ID，为必传参数
    * scanProtocolConfigs  扫描协议配置列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'objectId' => null,
        'scanProtocolConfigs' => null
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
    * objectId  防护对象ID，为必传参数
    * scanProtocolConfigs  扫描协议配置列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'objectId' => 'object_id',
            'scanProtocolConfigs' => 'scan_protocol_configs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * objectId  防护对象ID，为必传参数
    * scanProtocolConfigs  扫描协议配置列表
    *
    * @var string[]
    */
    protected static $setters = [
            'objectId' => 'setObjectId',
            'scanProtocolConfigs' => 'setScanProtocolConfigs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * objectId  防护对象ID，为必传参数
    * scanProtocolConfigs  扫描协议配置列表
    *
    * @var string[]
    */
    protected static $getters = [
            'objectId' => 'getObjectId',
            'scanProtocolConfigs' => 'getScanProtocolConfigs'
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
        $this->container['objectId'] = isset($data['objectId']) ? $data['objectId'] : null;
        $this->container['scanProtocolConfigs'] = isset($data['scanProtocolConfigs']) ? $data['scanProtocolConfigs'] : null;
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
    * Gets objectId
    *  防护对象ID，为必传参数
    *
    * @return string|null
    */
    public function getObjectId()
    {
        return $this->container['objectId'];
    }

    /**
    * Sets objectId
    *
    * @param string|null $objectId 防护对象ID，为必传参数
    *
    * @return $this
    */
    public function setObjectId($objectId)
    {
        $this->container['objectId'] = $objectId;
        return $this;
    }

    /**
    * Gets scanProtocolConfigs
    *  扫描协议配置列表
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\ScanProtocolConfig[]|null
    */
    public function getScanProtocolConfigs()
    {
        return $this->container['scanProtocolConfigs'];
    }

    /**
    * Sets scanProtocolConfigs
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\ScanProtocolConfig[]|null $scanProtocolConfigs 扫描协议配置列表
    *
    * @return $this
    */
    public function setScanProtocolConfigs($scanProtocolConfigs)
    {
        $this->container['scanProtocolConfigs'] = $scanProtocolConfigs;
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

