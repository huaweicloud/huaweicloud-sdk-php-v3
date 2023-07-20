<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetHostGroupListTag implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetHostGroupListTag';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tagType  标签类型。AND：标签过滤的逻辑为与，OR：标签过滤的逻辑为或
    * tagList  主机组标签
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tagType' => 'string',
            'tagList' => '\HuaweiCloud\SDK\Lts\V2\Model\HostGroupTag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tagType  标签类型。AND：标签过滤的逻辑为与，OR：标签过滤的逻辑为或
    * tagList  主机组标签
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tagType' => null,
        'tagList' => null
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
    * tagType  标签类型。AND：标签过滤的逻辑为与，OR：标签过滤的逻辑为或
    * tagList  主机组标签
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tagType' => 'tag_type',
            'tagList' => 'tag_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tagType  标签类型。AND：标签过滤的逻辑为与，OR：标签过滤的逻辑为或
    * tagList  主机组标签
    *
    * @var string[]
    */
    protected static $setters = [
            'tagType' => 'setTagType',
            'tagList' => 'setTagList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tagType  标签类型。AND：标签过滤的逻辑为与，OR：标签过滤的逻辑为或
    * tagList  主机组标签
    *
    * @var string[]
    */
    protected static $getters = [
            'tagType' => 'getTagType',
            'tagList' => 'getTagList'
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
    const TAG_TYPE__AND = 'AND';
    const TAG_TYPE__OR = 'OR';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTagTypeAllowableValues()
    {
        return [
            self::TAG_TYPE__AND,
            self::TAG_TYPE__OR,
        ];
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
        $this->container['tagType'] = isset($data['tagType']) ? $data['tagType'] : null;
        $this->container['tagList'] = isset($data['tagList']) ? $data['tagList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTagTypeAllowableValues();
                if (!is_null($this->container['tagType']) && !in_array($this->container['tagType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'tagType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets tagType
    *  标签类型。AND：标签过滤的逻辑为与，OR：标签过滤的逻辑为或
    *
    * @return string|null
    */
    public function getTagType()
    {
        return $this->container['tagType'];
    }

    /**
    * Sets tagType
    *
    * @param string|null $tagType 标签类型。AND：标签过滤的逻辑为与，OR：标签过滤的逻辑为或
    *
    * @return $this
    */
    public function setTagType($tagType)
    {
        $this->container['tagType'] = $tagType;
        return $this;
    }

    /**
    * Gets tagList
    *  主机组标签
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\HostGroupTag[]|null
    */
    public function getTagList()
    {
        return $this->container['tagList'];
    }

    /**
    * Sets tagList
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\HostGroupTag[]|null $tagList 主机组标签
    *
    * @return $this
    */
    public function setTagList($tagList)
    {
        $this->container['tagList'] = $tagList;
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

