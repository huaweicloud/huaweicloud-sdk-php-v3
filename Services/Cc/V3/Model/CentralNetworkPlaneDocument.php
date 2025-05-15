<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CentralNetworkPlaneDocument implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CentralNetworkPlaneDocument';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  实例名称。
    * associateErTables  关联的中心网络ER实例列表。
    * excludeErConnections  当自动连接所有ER实例时，排除中心网络的ER实例的连接。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'associateErTables' => '\HuaweiCloud\SDK\Cc\V3\Model\AssociateErTableDocument[]',
            'excludeErConnections' => '\HuaweiCloud\SDK\Cc\V3\Model\AssociateErInstanceDocument[][]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  实例名称。
    * associateErTables  关联的中心网络ER实例列表。
    * excludeErConnections  当自动连接所有ER实例时，排除中心网络的ER实例的连接。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'associateErTables' => null,
        'excludeErConnections' => null
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
    * name  实例名称。
    * associateErTables  关联的中心网络ER实例列表。
    * excludeErConnections  当自动连接所有ER实例时，排除中心网络的ER实例的连接。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'associateErTables' => 'associate_er_tables',
            'excludeErConnections' => 'exclude_er_connections'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  实例名称。
    * associateErTables  关联的中心网络ER实例列表。
    * excludeErConnections  当自动连接所有ER实例时，排除中心网络的ER实例的连接。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'associateErTables' => 'setAssociateErTables',
            'excludeErConnections' => 'setExcludeErConnections'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  实例名称。
    * associateErTables  关联的中心网络ER实例列表。
    * excludeErConnections  当自动连接所有ER实例时，排除中心网络的ER实例的连接。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'associateErTables' => 'getAssociateErTables',
            'excludeErConnections' => 'getExcludeErConnections'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['associateErTables'] = isset($data['associateErTables']) ? $data['associateErTables'] : null;
        $this->container['excludeErConnections'] = isset($data['excludeErConnections']) ? $data['excludeErConnections'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/.";
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
    * Gets name
    *  实例名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 实例名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets associateErTables
    *  关联的中心网络ER实例列表。
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\AssociateErTableDocument[]|null
    */
    public function getAssociateErTables()
    {
        return $this->container['associateErTables'];
    }

    /**
    * Sets associateErTables
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\AssociateErTableDocument[]|null $associateErTables 关联的中心网络ER实例列表。
    *
    * @return $this
    */
    public function setAssociateErTables($associateErTables)
    {
        $this->container['associateErTables'] = $associateErTables;
        return $this;
    }

    /**
    * Gets excludeErConnections
    *  当自动连接所有ER实例时，排除中心网络的ER实例的连接。
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\AssociateErInstanceDocument[][]|null
    */
    public function getExcludeErConnections()
    {
        return $this->container['excludeErConnections'];
    }

    /**
    * Sets excludeErConnections
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\AssociateErInstanceDocument[][]|null $excludeErConnections 当自动连接所有ER实例时，排除中心网络的ER实例的连接。
    *
    * @return $this
    */
    public function setExcludeErConnections($excludeErConnections)
    {
        $this->container['excludeErConnections'] = $excludeErConnections;
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

