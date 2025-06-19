<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceChangeExternalVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceChangeExternalVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fieldName  变更字段
    * customFieldType  测试用例自定义字段类型
    * oldChangeInfo  oldChangeInfo
    * newChangeInfo  newChangeInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fieldName' => 'string',
            'customFieldType' => 'string',
            'oldChangeInfo' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ElementResourceChangeExternalVo',
            'newChangeInfo' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ElementResourceChangeExternalVo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fieldName  变更字段
    * customFieldType  测试用例自定义字段类型
    * oldChangeInfo  oldChangeInfo
    * newChangeInfo  newChangeInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fieldName' => null,
        'customFieldType' => null,
        'oldChangeInfo' => null,
        'newChangeInfo' => null
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
    * fieldName  变更字段
    * customFieldType  测试用例自定义字段类型
    * oldChangeInfo  oldChangeInfo
    * newChangeInfo  newChangeInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fieldName' => 'field_name',
            'customFieldType' => 'custom_field_type',
            'oldChangeInfo' => 'old_change_info',
            'newChangeInfo' => 'new_change_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fieldName  变更字段
    * customFieldType  测试用例自定义字段类型
    * oldChangeInfo  oldChangeInfo
    * newChangeInfo  newChangeInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'fieldName' => 'setFieldName',
            'customFieldType' => 'setCustomFieldType',
            'oldChangeInfo' => 'setOldChangeInfo',
            'newChangeInfo' => 'setNewChangeInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fieldName  变更字段
    * customFieldType  测试用例自定义字段类型
    * oldChangeInfo  oldChangeInfo
    * newChangeInfo  newChangeInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'fieldName' => 'getFieldName',
            'customFieldType' => 'getCustomFieldType',
            'oldChangeInfo' => 'getOldChangeInfo',
            'newChangeInfo' => 'getNewChangeInfo'
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
        $this->container['fieldName'] = isset($data['fieldName']) ? $data['fieldName'] : null;
        $this->container['customFieldType'] = isset($data['customFieldType']) ? $data['customFieldType'] : null;
        $this->container['oldChangeInfo'] = isset($data['oldChangeInfo']) ? $data['oldChangeInfo'] : null;
        $this->container['newChangeInfo'] = isset($data['newChangeInfo']) ? $data['newChangeInfo'] : null;
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
    * Gets fieldName
    *  变更字段
    *
    * @return string|null
    */
    public function getFieldName()
    {
        return $this->container['fieldName'];
    }

    /**
    * Sets fieldName
    *
    * @param string|null $fieldName 变更字段
    *
    * @return $this
    */
    public function setFieldName($fieldName)
    {
        $this->container['fieldName'] = $fieldName;
        return $this;
    }

    /**
    * Gets customFieldType
    *  测试用例自定义字段类型
    *
    * @return string|null
    */
    public function getCustomFieldType()
    {
        return $this->container['customFieldType'];
    }

    /**
    * Sets customFieldType
    *
    * @param string|null $customFieldType 测试用例自定义字段类型
    *
    * @return $this
    */
    public function setCustomFieldType($customFieldType)
    {
        $this->container['customFieldType'] = $customFieldType;
        return $this;
    }

    /**
    * Gets oldChangeInfo
    *  oldChangeInfo
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ElementResourceChangeExternalVo|null
    */
    public function getOldChangeInfo()
    {
        return $this->container['oldChangeInfo'];
    }

    /**
    * Sets oldChangeInfo
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ElementResourceChangeExternalVo|null $oldChangeInfo oldChangeInfo
    *
    * @return $this
    */
    public function setOldChangeInfo($oldChangeInfo)
    {
        $this->container['oldChangeInfo'] = $oldChangeInfo;
        return $this;
    }

    /**
    * Gets newChangeInfo
    *  newChangeInfo
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ElementResourceChangeExternalVo|null
    */
    public function getNewChangeInfo()
    {
        return $this->container['newChangeInfo'];
    }

    /**
    * Sets newChangeInfo
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ElementResourceChangeExternalVo|null $newChangeInfo newChangeInfo
    *
    * @return $this
    */
    public function setNewChangeInfo($newChangeInfo)
    {
        $this->container['newChangeInfo'] = $newChangeInfo;
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

