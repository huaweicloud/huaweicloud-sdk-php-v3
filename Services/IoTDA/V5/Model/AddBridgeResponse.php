<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddBridgeResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddBridgeResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bridgeId  网桥ID，用于唯一标识一个网桥。在注册网桥时直接指定，或者由物联网平台分配获得。
    * bridgeName  网桥名称。
    * authInfo  authInfo
    * createTime  在物联网平台注册网桥的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bridgeId' => 'string',
            'bridgeName' => 'string',
            'authInfo' => '\HuaweiCloud\SDK\IoTDA\V5\Model\BridgeAuthInfo',
            'createTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bridgeId  网桥ID，用于唯一标识一个网桥。在注册网桥时直接指定，或者由物联网平台分配获得。
    * bridgeName  网桥名称。
    * authInfo  authInfo
    * createTime  在物联网平台注册网桥的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bridgeId' => null,
        'bridgeName' => null,
        'authInfo' => null,
        'createTime' => null
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
    * bridgeId  网桥ID，用于唯一标识一个网桥。在注册网桥时直接指定，或者由物联网平台分配获得。
    * bridgeName  网桥名称。
    * authInfo  authInfo
    * createTime  在物联网平台注册网桥的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bridgeId' => 'bridge_id',
            'bridgeName' => 'bridge_name',
            'authInfo' => 'auth_info',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bridgeId  网桥ID，用于唯一标识一个网桥。在注册网桥时直接指定，或者由物联网平台分配获得。
    * bridgeName  网桥名称。
    * authInfo  authInfo
    * createTime  在物联网平台注册网桥的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @var string[]
    */
    protected static $setters = [
            'bridgeId' => 'setBridgeId',
            'bridgeName' => 'setBridgeName',
            'authInfo' => 'setAuthInfo',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bridgeId  网桥ID，用于唯一标识一个网桥。在注册网桥时直接指定，或者由物联网平台分配获得。
    * bridgeName  网桥名称。
    * authInfo  authInfo
    * createTime  在物联网平台注册网桥的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @var string[]
    */
    protected static $getters = [
            'bridgeId' => 'getBridgeId',
            'bridgeName' => 'getBridgeName',
            'authInfo' => 'getAuthInfo',
            'createTime' => 'getCreateTime'
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
        $this->container['bridgeId'] = isset($data['bridgeId']) ? $data['bridgeId'] : null;
        $this->container['bridgeName'] = isset($data['bridgeName']) ? $data['bridgeName'] : null;
        $this->container['authInfo'] = isset($data['authInfo']) ? $data['authInfo'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
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
    * Gets bridgeId
    *  网桥ID，用于唯一标识一个网桥。在注册网桥时直接指定，或者由物联网平台分配获得。
    *
    * @return string|null
    */
    public function getBridgeId()
    {
        return $this->container['bridgeId'];
    }

    /**
    * Sets bridgeId
    *
    * @param string|null $bridgeId 网桥ID，用于唯一标识一个网桥。在注册网桥时直接指定，或者由物联网平台分配获得。
    *
    * @return $this
    */
    public function setBridgeId($bridgeId)
    {
        $this->container['bridgeId'] = $bridgeId;
        return $this;
    }

    /**
    * Gets bridgeName
    *  网桥名称。
    *
    * @return string|null
    */
    public function getBridgeName()
    {
        return $this->container['bridgeName'];
    }

    /**
    * Sets bridgeName
    *
    * @param string|null $bridgeName 网桥名称。
    *
    * @return $this
    */
    public function setBridgeName($bridgeName)
    {
        $this->container['bridgeName'] = $bridgeName;
        return $this;
    }

    /**
    * Gets authInfo
    *  authInfo
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\BridgeAuthInfo|null
    */
    public function getAuthInfo()
    {
        return $this->container['authInfo'];
    }

    /**
    * Sets authInfo
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\BridgeAuthInfo|null $authInfo authInfo
    *
    * @return $this
    */
    public function setAuthInfo($authInfo)
    {
        $this->container['authInfo'] = $authInfo;
        return $this;
    }

    /**
    * Gets createTime
    *  在物联网平台注册网桥的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 在物联网平台注册网桥的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

