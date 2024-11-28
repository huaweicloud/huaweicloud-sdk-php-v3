<?php

namespace HuaweiCloud\SDK\MaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Message implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Message';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * role  角色
    * content  问答对文本内容，最小长度：1，最大长度：模型支持的max_tokens数量乘以系数，默认系数为1.5，并且所有content的总长度不能超过该最大长度
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'role' => 'string',
            'content' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * role  角色
    * content  问答对文本内容，最小长度：1，最大长度：模型支持的max_tokens数量乘以系数，默认系数为1.5，并且所有content的总长度不能超过该最大长度
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'role' => null,
        'content' => null
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
    * role  角色
    * content  问答对文本内容，最小长度：1，最大长度：模型支持的max_tokens数量乘以系数，默认系数为1.5，并且所有content的总长度不能超过该最大长度
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'role' => 'role',
            'content' => 'content'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * role  角色
    * content  问答对文本内容，最小长度：1，最大长度：模型支持的max_tokens数量乘以系数，默认系数为1.5，并且所有content的总长度不能超过该最大长度
    *
    * @var string[]
    */
    protected static $setters = [
            'role' => 'setRole',
            'content' => 'setContent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * role  角色
    * content  问答对文本内容，最小长度：1，最大长度：模型支持的max_tokens数量乘以系数，默认系数为1.5，并且所有content的总长度不能超过该最大长度
    *
    * @var string[]
    */
    protected static $getters = [
            'role' => 'getRole',
            'content' => 'getContent'
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
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['role']) && (mb_strlen($this->container['role']) > 64)) {
                $invalidProperties[] = "invalid value for 'role', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['role']) && (mb_strlen($this->container['role']) < 1)) {
                $invalidProperties[] = "invalid value for 'role', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
        }
            if ((mb_strlen($this->container['content']) < 1)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be bigger than or equal to 1.";
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
    * Gets role
    *  角色
    *
    * @return string|null
    */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
    * Sets role
    *
    * @param string|null $role 角色
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
        return $this;
    }

    /**
    * Gets content
    *  问答对文本内容，最小长度：1，最大长度：模型支持的max_tokens数量乘以系数，默认系数为1.5，并且所有content的总长度不能超过该最大长度
    *
    * @return string
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string $content 问答对文本内容，最小长度：1，最大长度：模型支持的max_tokens数量乘以系数，默认系数为1.5，并且所有content的总长度不能超过该最大长度
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
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

