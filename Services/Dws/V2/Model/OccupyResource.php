<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OccupyResource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OccupyResource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceName  资源项名称
    * resourceValue  资源属性数值
    * valueUnit  资源属性单位
    * resourceDescription  资源附加描述
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceName' => 'string',
            'resourceValue' => 'int',
            'valueUnit' => 'string',
            'resourceDescription' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceName  资源项名称
    * resourceValue  资源属性数值
    * valueUnit  资源属性单位
    * resourceDescription  资源附加描述
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceName' => null,
        'resourceValue' => null,
        'valueUnit' => null,
        'resourceDescription' => null
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
    * resourceName  资源项名称
    * resourceValue  资源属性数值
    * valueUnit  资源属性单位
    * resourceDescription  资源附加描述
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceName' => 'resource_name',
            'resourceValue' => 'resource_value',
            'valueUnit' => 'value_unit',
            'resourceDescription' => 'resource_description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceName  资源项名称
    * resourceValue  资源属性数值
    * valueUnit  资源属性单位
    * resourceDescription  资源附加描述
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceName' => 'setResourceName',
            'resourceValue' => 'setResourceValue',
            'valueUnit' => 'setValueUnit',
            'resourceDescription' => 'setResourceDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceName  资源项名称
    * resourceValue  资源属性数值
    * valueUnit  资源属性单位
    * resourceDescription  资源附加描述
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceName' => 'getResourceName',
            'resourceValue' => 'getResourceValue',
            'valueUnit' => 'getValueUnit',
            'resourceDescription' => 'getResourceDescription'
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
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['resourceValue'] = isset($data['resourceValue']) ? $data['resourceValue'] : null;
        $this->container['valueUnit'] = isset($data['valueUnit']) ? $data['valueUnit'] : null;
        $this->container['resourceDescription'] = isset($data['resourceDescription']) ? $data['resourceDescription'] : null;
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
    * Gets resourceName
    *  资源项名称
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName 资源项名称
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets resourceValue
    *  资源属性数值
    *
    * @return int|null
    */
    public function getResourceValue()
    {
        return $this->container['resourceValue'];
    }

    /**
    * Sets resourceValue
    *
    * @param int|null $resourceValue 资源属性数值
    *
    * @return $this
    */
    public function setResourceValue($resourceValue)
    {
        $this->container['resourceValue'] = $resourceValue;
        return $this;
    }

    /**
    * Gets valueUnit
    *  资源属性单位
    *
    * @return string|null
    */
    public function getValueUnit()
    {
        return $this->container['valueUnit'];
    }

    /**
    * Sets valueUnit
    *
    * @param string|null $valueUnit 资源属性单位
    *
    * @return $this
    */
    public function setValueUnit($valueUnit)
    {
        $this->container['valueUnit'] = $valueUnit;
        return $this;
    }

    /**
    * Gets resourceDescription
    *  资源附加描述
    *
    * @return string|null
    */
    public function getResourceDescription()
    {
        return $this->container['resourceDescription'];
    }

    /**
    * Sets resourceDescription
    *
    * @param string|null $resourceDescription 资源附加描述
    *
    * @return $this
    */
    public function setResourceDescription($resourceDescription)
    {
        $this->container['resourceDescription'] = $resourceDescription;
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

