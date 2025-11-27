<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BanUrlList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BanUrlList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  封禁类型。
    * url  url信息。
    * createTime  创建时间戳（毫秒）。
    * modifyTime  更新时间戳（毫秒）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'url' => 'string',
            'createTime' => 'int',
            'modifyTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  封禁类型。
    * url  url信息。
    * createTime  创建时间戳（毫秒）。
    * modifyTime  更新时间戳（毫秒）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'url' => null,
        'createTime' => 'int64',
        'modifyTime' => 'int64'
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
    * type  封禁类型。
    * url  url信息。
    * createTime  创建时间戳（毫秒）。
    * modifyTime  更新时间戳（毫秒）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'url' => 'url',
            'createTime' => 'create_time',
            'modifyTime' => 'modify_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  封禁类型。
    * url  url信息。
    * createTime  创建时间戳（毫秒）。
    * modifyTime  更新时间戳（毫秒）。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'url' => 'setUrl',
            'createTime' => 'setCreateTime',
            'modifyTime' => 'setModifyTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  封禁类型。
    * url  url信息。
    * createTime  创建时间戳（毫秒）。
    * modifyTime  更新时间戳（毫秒）。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'url' => 'getUrl',
            'createTime' => 'getCreateTime',
            'modifyTime' => 'getModifyTime'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['modifyTime'] = isset($data['modifyTime']) ? $data['modifyTime'] : null;
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
    * Gets type
    *  封禁类型。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 封禁类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets url
    *  url信息。
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url url信息。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间戳（毫秒）。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间戳（毫秒）。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets modifyTime
    *  更新时间戳（毫秒）。
    *
    * @return int|null
    */
    public function getModifyTime()
    {
        return $this->container['modifyTime'];
    }

    /**
    * Sets modifyTime
    *
    * @param int|null $modifyTime 更新时间戳（毫秒）。
    *
    * @return $this
    */
    public function setModifyTime($modifyTime)
    {
        $this->container['modifyTime'] = $modifyTime;
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

