<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RuntimeTypeView implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RuntimeTypeView';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * typeName  类型名称。
    * displayName  显示名称。
    * containerDefaultPort  容器默认端口。
    * typeDesc  类型描述。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'typeName' => 'string',
            'displayName' => 'string',
            'containerDefaultPort' => 'int',
            'typeDesc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * typeName  类型名称。
    * displayName  显示名称。
    * containerDefaultPort  容器默认端口。
    * typeDesc  类型描述。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'typeName' => null,
        'displayName' => null,
        'containerDefaultPort' => null,
        'typeDesc' => null
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
    * typeName  类型名称。
    * displayName  显示名称。
    * containerDefaultPort  容器默认端口。
    * typeDesc  类型描述。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'typeName' => 'type_name',
            'displayName' => 'display_name',
            'containerDefaultPort' => 'container_default_port',
            'typeDesc' => 'type_desc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * typeName  类型名称。
    * displayName  显示名称。
    * containerDefaultPort  容器默认端口。
    * typeDesc  类型描述。
    *
    * @var string[]
    */
    protected static $setters = [
            'typeName' => 'setTypeName',
            'displayName' => 'setDisplayName',
            'containerDefaultPort' => 'setContainerDefaultPort',
            'typeDesc' => 'setTypeDesc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * typeName  类型名称。
    * displayName  显示名称。
    * containerDefaultPort  容器默认端口。
    * typeDesc  类型描述。
    *
    * @var string[]
    */
    protected static $getters = [
            'typeName' => 'getTypeName',
            'displayName' => 'getDisplayName',
            'containerDefaultPort' => 'getContainerDefaultPort',
            'typeDesc' => 'getTypeDesc'
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
        $this->container['typeName'] = isset($data['typeName']) ? $data['typeName'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['containerDefaultPort'] = isset($data['containerDefaultPort']) ? $data['containerDefaultPort'] : null;
        $this->container['typeDesc'] = isset($data['typeDesc']) ? $data['typeDesc'] : null;
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
    * Gets typeName
    *  类型名称。
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
    * @param string|null $typeName 类型名称。
    *
    * @return $this
    */
    public function setTypeName($typeName)
    {
        $this->container['typeName'] = $typeName;
        return $this;
    }

    /**
    * Gets displayName
    *  显示名称。
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName 显示名称。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets containerDefaultPort
    *  容器默认端口。
    *
    * @return int|null
    */
    public function getContainerDefaultPort()
    {
        return $this->container['containerDefaultPort'];
    }

    /**
    * Sets containerDefaultPort
    *
    * @param int|null $containerDefaultPort 容器默认端口。
    *
    * @return $this
    */
    public function setContainerDefaultPort($containerDefaultPort)
    {
        $this->container['containerDefaultPort'] = $containerDefaultPort;
        return $this;
    }

    /**
    * Gets typeDesc
    *  类型描述。
    *
    * @return string|null
    */
    public function getTypeDesc()
    {
        return $this->container['typeDesc'];
    }

    /**
    * Sets typeDesc
    *
    * @param string|null $typeDesc 类型描述。
    *
    * @return $this
    */
    public function setTypeDesc($typeDesc)
    {
        $this->container['typeDesc'] = $typeDesc;
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
