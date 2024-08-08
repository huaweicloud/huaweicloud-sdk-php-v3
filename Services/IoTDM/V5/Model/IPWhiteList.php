<?php

namespace HuaweiCloud\SDK\IoTDM\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IPWhiteList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IPWhiteList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enable  **参数说明**：启用Ip白名单访问控制
    * allowList  允许访问企业版实例的IP地址列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enable' => 'bool',
            'allowList' => '\HuaweiCloud\SDK\IoTDM\V5\Model\IpAllowList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enable  **参数说明**：启用Ip白名单访问控制
    * allowList  允许访问企业版实例的IP地址列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enable' => null,
        'allowList' => null
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
    * enable  **参数说明**：启用Ip白名单访问控制
    * allowList  允许访问企业版实例的IP地址列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enable' => 'enable',
            'allowList' => 'allow_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enable  **参数说明**：启用Ip白名单访问控制
    * allowList  允许访问企业版实例的IP地址列表
    *
    * @var string[]
    */
    protected static $setters = [
            'enable' => 'setEnable',
            'allowList' => 'setAllowList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enable  **参数说明**：启用Ip白名单访问控制
    * allowList  允许访问企业版实例的IP地址列表
    *
    * @var string[]
    */
    protected static $getters = [
            'enable' => 'getEnable',
            'allowList' => 'getAllowList'
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
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['allowList'] = isset($data['allowList']) ? $data['allowList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['enable'] === null) {
            $invalidProperties[] = "'enable' can't be null";
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
    * Gets enable
    *  **参数说明**：启用Ip白名单访问控制
    *
    * @return bool
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param bool $enable **参数说明**：启用Ip白名单访问控制
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets allowList
    *  允许访问企业版实例的IP地址列表
    *
    * @return \HuaweiCloud\SDK\IoTDM\V5\Model\IpAllowList[]|null
    */
    public function getAllowList()
    {
        return $this->container['allowList'];
    }

    /**
    * Sets allowList
    *
    * @param \HuaweiCloud\SDK\IoTDM\V5\Model\IpAllowList[]|null $allowList 允许访问企业版实例的IP地址列表
    *
    * @return $this
    */
    public function setAllowList($allowList)
    {
        $this->container['allowList'] = $allowList;
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

