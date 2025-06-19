<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ElementResourceChangeExternalVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ElementResourceChangeExternalVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * trackerName  工作项类型
    * value  值
    * key  key
    * objectValue  对象值
    * objectKey  对象key
    * trackerNames  缺陷类型
    * boardInfo  归属看板信息，用例关联工作项信息使用
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'trackerName' => 'string',
            'value' => 'string',
            'key' => 'string',
            'objectValue' => 'object',
            'objectKey' => 'object',
            'trackerNames' => 'object',
            'boardInfo' => 'object[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * trackerName  工作项类型
    * value  值
    * key  key
    * objectValue  对象值
    * objectKey  对象key
    * trackerNames  缺陷类型
    * boardInfo  归属看板信息，用例关联工作项信息使用
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'trackerName' => null,
        'value' => null,
        'key' => null,
        'objectValue' => null,
        'objectKey' => null,
        'trackerNames' => null,
        'boardInfo' => null
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
    * trackerName  工作项类型
    * value  值
    * key  key
    * objectValue  对象值
    * objectKey  对象key
    * trackerNames  缺陷类型
    * boardInfo  归属看板信息，用例关联工作项信息使用
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'trackerName' => 'tracker_name',
            'value' => 'value',
            'key' => 'key',
            'objectValue' => 'object_value',
            'objectKey' => 'object_key',
            'trackerNames' => 'tracker_names',
            'boardInfo' => 'board_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * trackerName  工作项类型
    * value  值
    * key  key
    * objectValue  对象值
    * objectKey  对象key
    * trackerNames  缺陷类型
    * boardInfo  归属看板信息，用例关联工作项信息使用
    *
    * @var string[]
    */
    protected static $setters = [
            'trackerName' => 'setTrackerName',
            'value' => 'setValue',
            'key' => 'setKey',
            'objectValue' => 'setObjectValue',
            'objectKey' => 'setObjectKey',
            'trackerNames' => 'setTrackerNames',
            'boardInfo' => 'setBoardInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * trackerName  工作项类型
    * value  值
    * key  key
    * objectValue  对象值
    * objectKey  对象key
    * trackerNames  缺陷类型
    * boardInfo  归属看板信息，用例关联工作项信息使用
    *
    * @var string[]
    */
    protected static $getters = [
            'trackerName' => 'getTrackerName',
            'value' => 'getValue',
            'key' => 'getKey',
            'objectValue' => 'getObjectValue',
            'objectKey' => 'getObjectKey',
            'trackerNames' => 'getTrackerNames',
            'boardInfo' => 'getBoardInfo'
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
        $this->container['trackerName'] = isset($data['trackerName']) ? $data['trackerName'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['objectValue'] = isset($data['objectValue']) ? $data['objectValue'] : null;
        $this->container['objectKey'] = isset($data['objectKey']) ? $data['objectKey'] : null;
        $this->container['trackerNames'] = isset($data['trackerNames']) ? $data['trackerNames'] : null;
        $this->container['boardInfo'] = isset($data['boardInfo']) ? $data['boardInfo'] : null;
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
    * Gets trackerName
    *  工作项类型
    *
    * @return string|null
    */
    public function getTrackerName()
    {
        return $this->container['trackerName'];
    }

    /**
    * Sets trackerName
    *
    * @param string|null $trackerName 工作项类型
    *
    * @return $this
    */
    public function setTrackerName($trackerName)
    {
        $this->container['trackerName'] = $trackerName;
        return $this;
    }

    /**
    * Gets value
    *  值
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value 值
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets key
    *  key
    *
    * @return string|null
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string|null $key key
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets objectValue
    *  对象值
    *
    * @return object|null
    */
    public function getObjectValue()
    {
        return $this->container['objectValue'];
    }

    /**
    * Sets objectValue
    *
    * @param object|null $objectValue 对象值
    *
    * @return $this
    */
    public function setObjectValue($objectValue)
    {
        $this->container['objectValue'] = $objectValue;
        return $this;
    }

    /**
    * Gets objectKey
    *  对象key
    *
    * @return object|null
    */
    public function getObjectKey()
    {
        return $this->container['objectKey'];
    }

    /**
    * Sets objectKey
    *
    * @param object|null $objectKey 对象key
    *
    * @return $this
    */
    public function setObjectKey($objectKey)
    {
        $this->container['objectKey'] = $objectKey;
        return $this;
    }

    /**
    * Gets trackerNames
    *  缺陷类型
    *
    * @return object|null
    */
    public function getTrackerNames()
    {
        return $this->container['trackerNames'];
    }

    /**
    * Sets trackerNames
    *
    * @param object|null $trackerNames 缺陷类型
    *
    * @return $this
    */
    public function setTrackerNames($trackerNames)
    {
        $this->container['trackerNames'] = $trackerNames;
        return $this;
    }

    /**
    * Gets boardInfo
    *  归属看板信息，用例关联工作项信息使用
    *
    * @return object[]|null
    */
    public function getBoardInfo()
    {
        return $this->container['boardInfo'];
    }

    /**
    * Sets boardInfo
    *
    * @param object[]|null $boardInfo 归属看板信息，用例关联工作项信息使用
    *
    * @return $this
    */
    public function setBoardInfo($boardInfo)
    {
        $this->container['boardInfo'] = $boardInfo;
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

