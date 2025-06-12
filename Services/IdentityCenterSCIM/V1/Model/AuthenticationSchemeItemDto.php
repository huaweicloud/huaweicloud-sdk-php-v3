<?php

namespace HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuthenticationSchemeItemDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuthenticationSchemeItemDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  认证类型，指定鉴权的方式
    * name  认证概要名称
    * description  认证概要的描述信息
    * specUri  规范链接
    * documentationUri  帮助文档链接
    * primary  是否为主要的认证方式
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'name' => 'string',
            'description' => 'string',
            'specUri' => 'string',
            'documentationUri' => 'string',
            'primary' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  认证类型，指定鉴权的方式
    * name  认证概要名称
    * description  认证概要的描述信息
    * specUri  规范链接
    * documentationUri  帮助文档链接
    * primary  是否为主要的认证方式
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'name' => null,
        'description' => null,
        'specUri' => null,
        'documentationUri' => null,
        'primary' => null
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
    * type  认证类型，指定鉴权的方式
    * name  认证概要名称
    * description  认证概要的描述信息
    * specUri  规范链接
    * documentationUri  帮助文档链接
    * primary  是否为主要的认证方式
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'name' => 'name',
            'description' => 'description',
            'specUri' => 'specUri',
            'documentationUri' => 'documentationUri',
            'primary' => 'primary'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  认证类型，指定鉴权的方式
    * name  认证概要名称
    * description  认证概要的描述信息
    * specUri  规范链接
    * documentationUri  帮助文档链接
    * primary  是否为主要的认证方式
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'name' => 'setName',
            'description' => 'setDescription',
            'specUri' => 'setSpecUri',
            'documentationUri' => 'setDocumentationUri',
            'primary' => 'setPrimary'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  认证类型，指定鉴权的方式
    * name  认证概要名称
    * description  认证概要的描述信息
    * specUri  规范链接
    * documentationUri  帮助文档链接
    * primary  是否为主要的认证方式
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'name' => 'getName',
            'description' => 'getDescription',
            'specUri' => 'getSpecUri',
            'documentationUri' => 'getDocumentationUri',
            'primary' => 'getPrimary'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['specUri'] = isset($data['specUri']) ? $data['specUri'] : null;
        $this->container['documentationUri'] = isset($data['documentationUri']) ? $data['documentationUri'] : null;
        $this->container['primary'] = isset($data['primary']) ? $data['primary'] : null;
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
    *  认证类型，指定鉴权的方式
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
    * @param string|null $type 认证类型，指定鉴权的方式
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets name
    *  认证概要名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 认证概要名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  认证概要的描述信息
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 认证概要的描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets specUri
    *  规范链接
    *
    * @return string|null
    */
    public function getSpecUri()
    {
        return $this->container['specUri'];
    }

    /**
    * Sets specUri
    *
    * @param string|null $specUri 规范链接
    *
    * @return $this
    */
    public function setSpecUri($specUri)
    {
        $this->container['specUri'] = $specUri;
        return $this;
    }

    /**
    * Gets documentationUri
    *  帮助文档链接
    *
    * @return string|null
    */
    public function getDocumentationUri()
    {
        return $this->container['documentationUri'];
    }

    /**
    * Sets documentationUri
    *
    * @param string|null $documentationUri 帮助文档链接
    *
    * @return $this
    */
    public function setDocumentationUri($documentationUri)
    {
        $this->container['documentationUri'] = $documentationUri;
        return $this;
    }

    /**
    * Gets primary
    *  是否为主要的认证方式
    *
    * @return bool|null
    */
    public function getPrimary()
    {
        return $this->container['primary'];
    }

    /**
    * Sets primary
    *
    * @param bool|null $primary 是否为主要的认证方式
    *
    * @return $this
    */
    public function setPrimary($primary)
    {
        $this->container['primary'] = $primary;
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

