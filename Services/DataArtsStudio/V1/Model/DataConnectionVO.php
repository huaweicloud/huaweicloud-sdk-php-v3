<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataConnectionVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataConnectionVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dwName  数据连接名称。
    * dwId  数据连接ID。
    * displayName  数据连接名称，适配现有实现。
    * dwType  数据连接类型。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dwName' => 'string',
            'dwId' => 'string',
            'displayName' => 'string',
            'dwType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dwName  数据连接名称。
    * dwId  数据连接ID。
    * displayName  数据连接名称，适配现有实现。
    * dwType  数据连接类型。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dwName' => null,
        'dwId' => null,
        'displayName' => null,
        'dwType' => null
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
    * dwName  数据连接名称。
    * dwId  数据连接ID。
    * displayName  数据连接名称，适配现有实现。
    * dwType  数据连接类型。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dwName' => 'dw_name',
            'dwId' => 'dw_id',
            'displayName' => 'display_name',
            'dwType' => 'dw_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dwName  数据连接名称。
    * dwId  数据连接ID。
    * displayName  数据连接名称，适配现有实现。
    * dwType  数据连接类型。
    *
    * @var string[]
    */
    protected static $setters = [
            'dwName' => 'setDwName',
            'dwId' => 'setDwId',
            'displayName' => 'setDisplayName',
            'dwType' => 'setDwType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dwName  数据连接名称。
    * dwId  数据连接ID。
    * displayName  数据连接名称，适配现有实现。
    * dwType  数据连接类型。
    *
    * @var string[]
    */
    protected static $getters = [
            'dwName' => 'getDwName',
            'dwId' => 'getDwId',
            'displayName' => 'getDisplayName',
            'dwType' => 'getDwType'
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
        $this->container['dwName'] = isset($data['dwName']) ? $data['dwName'] : null;
        $this->container['dwId'] = isset($data['dwId']) ? $data['dwId'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['dwType'] = isset($data['dwType']) ? $data['dwType'] : null;
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
    * Gets dwName
    *  数据连接名称。
    *
    * @return string|null
    */
    public function getDwName()
    {
        return $this->container['dwName'];
    }

    /**
    * Sets dwName
    *
    * @param string|null $dwName 数据连接名称。
    *
    * @return $this
    */
    public function setDwName($dwName)
    {
        $this->container['dwName'] = $dwName;
        return $this;
    }

    /**
    * Gets dwId
    *  数据连接ID。
    *
    * @return string|null
    */
    public function getDwId()
    {
        return $this->container['dwId'];
    }

    /**
    * Sets dwId
    *
    * @param string|null $dwId 数据连接ID。
    *
    * @return $this
    */
    public function setDwId($dwId)
    {
        $this->container['dwId'] = $dwId;
        return $this;
    }

    /**
    * Gets displayName
    *  数据连接名称，适配现有实现。
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
    * @param string|null $displayName 数据连接名称，适配现有实现。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets dwType
    *  数据连接类型。
    *
    * @return string|null
    */
    public function getDwType()
    {
        return $this->container['dwType'];
    }

    /**
    * Sets dwType
    *
    * @param string|null $dwType 数据连接类型。
    *
    * @return $this
    */
    public function setDwType($dwType)
    {
        $this->container['dwType'] = $dwType;
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

