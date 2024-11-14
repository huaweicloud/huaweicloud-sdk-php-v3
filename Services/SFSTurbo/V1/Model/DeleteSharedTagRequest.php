<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteSharedTagRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteSharedTagRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * shareId  共享ID
    * key  标签的键,最大长度128个字符。  key不能为空，不能包含非打印字符ASCII(0-31)，“=”,“*”,“<”,“>”,“\\”,“,”,“|”,“/”。只能包含大写字母、小写字母、数字，特殊字符\"-\"和\"_\"。  说明：调用删除共享标签接口删除标签时，如果标签的键中存在不被URL直接解析的特殊字符，需要对标签的键进行URL转义处理。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'shareId' => 'string',
            'key' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * shareId  共享ID
    * key  标签的键,最大长度128个字符。  key不能为空，不能包含非打印字符ASCII(0-31)，“=”,“*”,“<”,“>”,“\\”,“,”,“|”,“/”。只能包含大写字母、小写字母、数字，特殊字符\"-\"和\"_\"。  说明：调用删除共享标签接口删除标签时，如果标签的键中存在不被URL直接解析的特殊字符，需要对标签的键进行URL转义处理。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'shareId' => null,
        'key' => null
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
    * shareId  共享ID
    * key  标签的键,最大长度128个字符。  key不能为空，不能包含非打印字符ASCII(0-31)，“=”,“*”,“<”,“>”,“\\”,“,”,“|”,“/”。只能包含大写字母、小写字母、数字，特殊字符\"-\"和\"_\"。  说明：调用删除共享标签接口删除标签时，如果标签的键中存在不被URL直接解析的特殊字符，需要对标签的键进行URL转义处理。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'shareId' => 'share_id',
            'key' => 'key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * shareId  共享ID
    * key  标签的键,最大长度128个字符。  key不能为空，不能包含非打印字符ASCII(0-31)，“=”,“*”,“<”,“>”,“\\”,“,”,“|”,“/”。只能包含大写字母、小写字母、数字，特殊字符\"-\"和\"_\"。  说明：调用删除共享标签接口删除标签时，如果标签的键中存在不被URL直接解析的特殊字符，需要对标签的键进行URL转义处理。
    *
    * @var string[]
    */
    protected static $setters = [
            'shareId' => 'setShareId',
            'key' => 'setKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * shareId  共享ID
    * key  标签的键,最大长度128个字符。  key不能为空，不能包含非打印字符ASCII(0-31)，“=”,“*”,“<”,“>”,“\\”,“,”,“|”,“/”。只能包含大写字母、小写字母、数字，特殊字符\"-\"和\"_\"。  说明：调用删除共享标签接口删除标签时，如果标签的键中存在不被URL直接解析的特殊字符，需要对标签的键进行URL转义处理。
    *
    * @var string[]
    */
    protected static $getters = [
            'shareId' => 'getShareId',
            'key' => 'getKey'
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
        $this->container['shareId'] = isset($data['shareId']) ? $data['shareId'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['shareId'] === null) {
            $invalidProperties[] = "'shareId' can't be null";
        }
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
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
    * Gets shareId
    *  共享ID
    *
    * @return string
    */
    public function getShareId()
    {
        return $this->container['shareId'];
    }

    /**
    * Sets shareId
    *
    * @param string $shareId 共享ID
    *
    * @return $this
    */
    public function setShareId($shareId)
    {
        $this->container['shareId'] = $shareId;
        return $this;
    }

    /**
    * Gets key
    *  标签的键,最大长度128个字符。  key不能为空，不能包含非打印字符ASCII(0-31)，“=”,“*”,“<”,“>”,“\\”,“,”,“|”,“/”。只能包含大写字母、小写字母、数字，特殊字符\"-\"和\"_\"。  说明：调用删除共享标签接口删除标签时，如果标签的键中存在不被URL直接解析的特殊字符，需要对标签的键进行URL转义处理。
    *
    * @return string
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string $key 标签的键,最大长度128个字符。  key不能为空，不能包含非打印字符ASCII(0-31)，“=”,“*”,“<”,“>”,“\\”,“,”,“|”,“/”。只能包含大写字母、小写字母、数字，特殊字符\"-\"和\"_\"。  说明：调用删除共享标签接口删除标签时，如果标签的键中存在不被URL直接解析的特殊字符，需要对标签的键进行URL转义处理。
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
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

