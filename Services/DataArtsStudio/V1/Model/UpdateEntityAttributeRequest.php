<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateEntityAttributeRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateEntityAttributeRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * guid  资产guid，获取方法请参见[数据资产guid](dataartsstudio_02_0351.xml)。
    * attrName  要修改的属性名称，如description、alias、comment等。
    * attrValue  要修改的属性值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspace' => 'string',
            'guid' => 'string',
            'attrName' => 'string',
            'attrValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * guid  资产guid，获取方法请参见[数据资产guid](dataartsstudio_02_0351.xml)。
    * attrName  要修改的属性名称，如description、alias、comment等。
    * attrValue  要修改的属性值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspace' => null,
        'guid' => null,
        'attrName' => null,
        'attrValue' => null
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
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * guid  资产guid，获取方法请参见[数据资产guid](dataartsstudio_02_0351.xml)。
    * attrName  要修改的属性名称，如description、alias、comment等。
    * attrValue  要修改的属性值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspace' => 'workspace',
            'guid' => 'guid',
            'attrName' => 'attr_name',
            'attrValue' => 'attr_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * guid  资产guid，获取方法请参见[数据资产guid](dataartsstudio_02_0351.xml)。
    * attrName  要修改的属性名称，如description、alias、comment等。
    * attrValue  要修改的属性值。
    *
    * @var string[]
    */
    protected static $setters = [
            'workspace' => 'setWorkspace',
            'guid' => 'setGuid',
            'attrName' => 'setAttrName',
            'attrValue' => 'setAttrValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * guid  资产guid，获取方法请参见[数据资产guid](dataartsstudio_02_0351.xml)。
    * attrName  要修改的属性名称，如description、alias、comment等。
    * attrValue  要修改的属性值。
    *
    * @var string[]
    */
    protected static $getters = [
            'workspace' => 'getWorkspace',
            'guid' => 'getGuid',
            'attrName' => 'getAttrName',
            'attrValue' => 'getAttrValue'
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
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['guid'] = isset($data['guid']) ? $data['guid'] : null;
        $this->container['attrName'] = isset($data['attrName']) ? $data['attrName'] : null;
        $this->container['attrValue'] = isset($data['attrValue']) ? $data['attrValue'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
        }
        if ($this->container['guid'] === null) {
            $invalidProperties[] = "'guid' can't be null";
        }
        if ($this->container['attrName'] === null) {
            $invalidProperties[] = "'attrName' can't be null";
        }
        if ($this->container['attrValue'] === null) {
            $invalidProperties[] = "'attrValue' can't be null";
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
    * Gets workspace
    *  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return string
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string $workspace 工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets guid
    *  资产guid，获取方法请参见[数据资产guid](dataartsstudio_02_0351.xml)。
    *
    * @return string
    */
    public function getGuid()
    {
        return $this->container['guid'];
    }

    /**
    * Sets guid
    *
    * @param string $guid 资产guid，获取方法请参见[数据资产guid](dataartsstudio_02_0351.xml)。
    *
    * @return $this
    */
    public function setGuid($guid)
    {
        $this->container['guid'] = $guid;
        return $this;
    }

    /**
    * Gets attrName
    *  要修改的属性名称，如description、alias、comment等。
    *
    * @return string
    */
    public function getAttrName()
    {
        return $this->container['attrName'];
    }

    /**
    * Sets attrName
    *
    * @param string $attrName 要修改的属性名称，如description、alias、comment等。
    *
    * @return $this
    */
    public function setAttrName($attrName)
    {
        $this->container['attrName'] = $attrName;
        return $this;
    }

    /**
    * Gets attrValue
    *  要修改的属性值。
    *
    * @return string
    */
    public function getAttrValue()
    {
        return $this->container['attrValue'];
    }

    /**
    * Sets attrValue
    *
    * @param string $attrValue 要修改的属性值。
    *
    * @return $this
    */
    public function setAttrValue($attrValue)
    {
        $this->container['attrValue'] = $attrValue;
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

