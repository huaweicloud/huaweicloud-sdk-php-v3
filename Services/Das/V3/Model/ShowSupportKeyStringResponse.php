<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSupportKeyStringResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSupportKeyStringResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * supportKeyStr  实例是否使用关键字自治限流功能。true：可用，false：不可用
    * instanceType  实例类型
    * instanceDetailVersion  实例详细版本号
    * errorMsg  当support_key_str为False时展示errorMsg
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'supportKeyStr' => 'bool',
            'instanceType' => 'string',
            'instanceDetailVersion' => 'string',
            'errorMsg' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * supportKeyStr  实例是否使用关键字自治限流功能。true：可用，false：不可用
    * instanceType  实例类型
    * instanceDetailVersion  实例详细版本号
    * errorMsg  当support_key_str为False时展示errorMsg
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'supportKeyStr' => null,
        'instanceType' => null,
        'instanceDetailVersion' => null,
        'errorMsg' => null
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
    * supportKeyStr  实例是否使用关键字自治限流功能。true：可用，false：不可用
    * instanceType  实例类型
    * instanceDetailVersion  实例详细版本号
    * errorMsg  当support_key_str为False时展示errorMsg
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'supportKeyStr' => 'support_key_str',
            'instanceType' => 'instance_type',
            'instanceDetailVersion' => 'instance_detail_version',
            'errorMsg' => 'error_msg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * supportKeyStr  实例是否使用关键字自治限流功能。true：可用，false：不可用
    * instanceType  实例类型
    * instanceDetailVersion  实例详细版本号
    * errorMsg  当support_key_str为False时展示errorMsg
    *
    * @var string[]
    */
    protected static $setters = [
            'supportKeyStr' => 'setSupportKeyStr',
            'instanceType' => 'setInstanceType',
            'instanceDetailVersion' => 'setInstanceDetailVersion',
            'errorMsg' => 'setErrorMsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * supportKeyStr  实例是否使用关键字自治限流功能。true：可用，false：不可用
    * instanceType  实例类型
    * instanceDetailVersion  实例详细版本号
    * errorMsg  当support_key_str为False时展示errorMsg
    *
    * @var string[]
    */
    protected static $getters = [
            'supportKeyStr' => 'getSupportKeyStr',
            'instanceType' => 'getInstanceType',
            'instanceDetailVersion' => 'getInstanceDetailVersion',
            'errorMsg' => 'getErrorMsg'
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
        $this->container['supportKeyStr'] = isset($data['supportKeyStr']) ? $data['supportKeyStr'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['instanceDetailVersion'] = isset($data['instanceDetailVersion']) ? $data['instanceDetailVersion'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
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
    * Gets supportKeyStr
    *  实例是否使用关键字自治限流功能。true：可用，false：不可用
    *
    * @return bool|null
    */
    public function getSupportKeyStr()
    {
        return $this->container['supportKeyStr'];
    }

    /**
    * Sets supportKeyStr
    *
    * @param bool|null $supportKeyStr 实例是否使用关键字自治限流功能。true：可用，false：不可用
    *
    * @return $this
    */
    public function setSupportKeyStr($supportKeyStr)
    {
        $this->container['supportKeyStr'] = $supportKeyStr;
        return $this;
    }

    /**
    * Gets instanceType
    *  实例类型
    *
    * @return string|null
    */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
    * Sets instanceType
    *
    * @param string|null $instanceType 实例类型
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
        return $this;
    }

    /**
    * Gets instanceDetailVersion
    *  实例详细版本号
    *
    * @return string|null
    */
    public function getInstanceDetailVersion()
    {
        return $this->container['instanceDetailVersion'];
    }

    /**
    * Sets instanceDetailVersion
    *
    * @param string|null $instanceDetailVersion 实例详细版本号
    *
    * @return $this
    */
    public function setInstanceDetailVersion($instanceDetailVersion)
    {
        $this->container['instanceDetailVersion'] = $instanceDetailVersion;
        return $this;
    }

    /**
    * Gets errorMsg
    *  当support_key_str为False时展示errorMsg
    *
    * @return string|null
    */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
    * Sets errorMsg
    *
    * @param string|null $errorMsg 当support_key_str为False时展示errorMsg
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
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

