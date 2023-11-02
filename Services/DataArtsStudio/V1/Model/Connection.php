<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Connection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Connection';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * guid  关联guid
    * displayText  显示内容
    * typeName  类型名称
    * connectionType  连接类型
    * qualifiedName  限定名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'guid' => 'string',
            'displayText' => 'string',
            'typeName' => 'string',
            'connectionType' => 'string',
            'qualifiedName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * guid  关联guid
    * displayText  显示内容
    * typeName  类型名称
    * connectionType  连接类型
    * qualifiedName  限定名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'guid' => null,
        'displayText' => null,
        'typeName' => null,
        'connectionType' => null,
        'qualifiedName' => null
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
    * guid  关联guid
    * displayText  显示内容
    * typeName  类型名称
    * connectionType  连接类型
    * qualifiedName  限定名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'guid' => 'guid',
            'displayText' => 'display_text',
            'typeName' => 'type_name',
            'connectionType' => 'connection_type',
            'qualifiedName' => 'qualified_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * guid  关联guid
    * displayText  显示内容
    * typeName  类型名称
    * connectionType  连接类型
    * qualifiedName  限定名称
    *
    * @var string[]
    */
    protected static $setters = [
            'guid' => 'setGuid',
            'displayText' => 'setDisplayText',
            'typeName' => 'setTypeName',
            'connectionType' => 'setConnectionType',
            'qualifiedName' => 'setQualifiedName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * guid  关联guid
    * displayText  显示内容
    * typeName  类型名称
    * connectionType  连接类型
    * qualifiedName  限定名称
    *
    * @var string[]
    */
    protected static $getters = [
            'guid' => 'getGuid',
            'displayText' => 'getDisplayText',
            'typeName' => 'getTypeName',
            'connectionType' => 'getConnectionType',
            'qualifiedName' => 'getQualifiedName'
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
        $this->container['guid'] = isset($data['guid']) ? $data['guid'] : null;
        $this->container['displayText'] = isset($data['displayText']) ? $data['displayText'] : null;
        $this->container['typeName'] = isset($data['typeName']) ? $data['typeName'] : null;
        $this->container['connectionType'] = isset($data['connectionType']) ? $data['connectionType'] : null;
        $this->container['qualifiedName'] = isset($data['qualifiedName']) ? $data['qualifiedName'] : null;
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
    * Gets guid
    *  关联guid
    *
    * @return string|null
    */
    public function getGuid()
    {
        return $this->container['guid'];
    }

    /**
    * Sets guid
    *
    * @param string|null $guid 关联guid
    *
    * @return $this
    */
    public function setGuid($guid)
    {
        $this->container['guid'] = $guid;
        return $this;
    }

    /**
    * Gets displayText
    *  显示内容
    *
    * @return string|null
    */
    public function getDisplayText()
    {
        return $this->container['displayText'];
    }

    /**
    * Sets displayText
    *
    * @param string|null $displayText 显示内容
    *
    * @return $this
    */
    public function setDisplayText($displayText)
    {
        $this->container['displayText'] = $displayText;
        return $this;
    }

    /**
    * Gets typeName
    *  类型名称
    *
    * @return string|null
    */
    public function getTypeName()
    {
        return $this->container['typeName'];
    }

    /**
    * Sets typeName
    *
    * @param string|null $typeName 类型名称
    *
    * @return $this
    */
    public function setTypeName($typeName)
    {
        $this->container['typeName'] = $typeName;
        return $this;
    }

    /**
    * Gets connectionType
    *  连接类型
    *
    * @return string|null
    */
    public function getConnectionType()
    {
        return $this->container['connectionType'];
    }

    /**
    * Sets connectionType
    *
    * @param string|null $connectionType 连接类型
    *
    * @return $this
    */
    public function setConnectionType($connectionType)
    {
        $this->container['connectionType'] = $connectionType;
        return $this;
    }

    /**
    * Gets qualifiedName
    *  限定名称
    *
    * @return string|null
    */
    public function getQualifiedName()
    {
        return $this->container['qualifiedName'];
    }

    /**
    * Sets qualifiedName
    *
    * @param string|null $qualifiedName 限定名称
    *
    * @return $this
    */
    public function setQualifiedName($qualifiedName)
    {
        $this->container['qualifiedName'] = $qualifiedName;
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

