<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResponseSchemaConfigDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResponseSchemaConfigDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * properties  额外添加的属性映射Schema配置
    * subject  subject
    * supportedNameIdFormats  应用程序支持的Subject NameID格式
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'properties' => 'map[string,\HuaweiCloud\SDK\IdentityCenter\V1\Model\ResponseSchemaPropertiesDetailsDto]',
            'subject' => '\HuaweiCloud\SDK\IdentityCenter\V1\Model\ResponseSchemaSubjectDetailsDto',
            'supportedNameIdFormats' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * properties  额外添加的属性映射Schema配置
    * subject  subject
    * supportedNameIdFormats  应用程序支持的Subject NameID格式
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'properties' => null,
        'subject' => null,
        'supportedNameIdFormats' => null
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
    * properties  额外添加的属性映射Schema配置
    * subject  subject
    * supportedNameIdFormats  应用程序支持的Subject NameID格式
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'properties' => 'properties',
            'subject' => 'subject',
            'supportedNameIdFormats' => 'supported_name_id_formats'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * properties  额外添加的属性映射Schema配置
    * subject  subject
    * supportedNameIdFormats  应用程序支持的Subject NameID格式
    *
    * @var string[]
    */
    protected static $setters = [
            'properties' => 'setProperties',
            'subject' => 'setSubject',
            'supportedNameIdFormats' => 'setSupportedNameIdFormats'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * properties  额外添加的属性映射Schema配置
    * subject  subject
    * supportedNameIdFormats  应用程序支持的Subject NameID格式
    *
    * @var string[]
    */
    protected static $getters = [
            'properties' => 'getProperties',
            'subject' => 'getSubject',
            'supportedNameIdFormats' => 'getSupportedNameIdFormats'
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
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['supportedNameIdFormats'] = isset($data['supportedNameIdFormats']) ? $data['supportedNameIdFormats'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['subject'] === null) {
            $invalidProperties[] = "'subject' can't be null";
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
    * Gets properties
    *  额外添加的属性映射Schema配置
    *
    * @return map[string,\HuaweiCloud\SDK\IdentityCenter\V1\Model\ResponseSchemaPropertiesDetailsDto]|null
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param map[string,\HuaweiCloud\SDK\IdentityCenter\V1\Model\ResponseSchemaPropertiesDetailsDto]|null $properties 额外添加的属性映射Schema配置
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
        return $this;
    }

    /**
    * Gets subject
    *  subject
    *
    * @return \HuaweiCloud\SDK\IdentityCenter\V1\Model\ResponseSchemaSubjectDetailsDto
    */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
    * Sets subject
    *
    * @param \HuaweiCloud\SDK\IdentityCenter\V1\Model\ResponseSchemaSubjectDetailsDto $subject subject
    *
    * @return $this
    */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;
        return $this;
    }

    /**
    * Gets supportedNameIdFormats
    *  应用程序支持的Subject NameID格式
    *
    * @return string[]|null
    */
    public function getSupportedNameIdFormats()
    {
        return $this->container['supportedNameIdFormats'];
    }

    /**
    * Sets supportedNameIdFormats
    *
    * @param string[]|null $supportedNameIdFormats 应用程序支持的Subject NameID格式
    *
    * @return $this
    */
    public function setSupportedNameIdFormats($supportedNameIdFormats)
    {
        $this->container['supportedNameIdFormats'] = $supportedNameIdFormats;
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

