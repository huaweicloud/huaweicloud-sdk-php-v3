<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTagsReqbody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTagsReqbody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  添加标签方式
    * isOpen  是否对外接口调用
    * tags  标签字段信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'isOpen' => 'bool',
            'tags' => '\HuaweiCloud\SDK\Lts\V2\Model\TagsBody[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  添加标签方式
    * isOpen  是否对外接口调用
    * tags  标签字段信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'isOpen' => null,
        'tags' => null
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
    * action  添加标签方式
    * isOpen  是否对外接口调用
    * tags  标签字段信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'isOpen' => 'is_open',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  添加标签方式
    * isOpen  是否对外接口调用
    * tags  标签字段信息
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'isOpen' => 'setIsOpen',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  添加标签方式
    * isOpen  是否对外接口调用
    * tags  标签字段信息
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'isOpen' => 'getIsOpen',
            'tags' => 'getTags'
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['isOpen'] = isset($data['isOpen']) ? $data['isOpen'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if ($this->container['isOpen'] === null) {
            $invalidProperties[] = "'isOpen' can't be null";
        }
        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
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
    * Gets action
    *  添加标签方式
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action 添加标签方式
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets isOpen
    *  是否对外接口调用
    *
    * @return bool
    */
    public function getIsOpen()
    {
        return $this->container['isOpen'];
    }

    /**
    * Sets isOpen
    *
    * @param bool $isOpen 是否对外接口调用
    *
    * @return $this
    */
    public function setIsOpen($isOpen)
    {
        $this->container['isOpen'] = $isOpen;
        return $this;
    }

    /**
    * Gets tags
    *  标签字段信息
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\TagsBody[]
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\TagsBody[] $tags 标签字段信息
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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
