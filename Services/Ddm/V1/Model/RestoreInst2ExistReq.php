<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RestoreInst2ExistReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RestoreInst2ExistReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * source  数据恢复源。
    * target  数据恢复目标。
    * dataNodeRelations  关联dn。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'source' => 'object',
            'target' => 'object',
            'dataNodeRelations' => '\HuaweiCloud\SDK\Ddm\V1\Model\DataNodeRelation[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * source  数据恢复源。
    * target  数据恢复目标。
    * dataNodeRelations  关联dn。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'source' => null,
        'target' => null,
        'dataNodeRelations' => null
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
    * source  数据恢复源。
    * target  数据恢复目标。
    * dataNodeRelations  关联dn。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'source' => 'source',
            'target' => 'target',
            'dataNodeRelations' => 'data_node_relations'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * source  数据恢复源。
    * target  数据恢复目标。
    * dataNodeRelations  关联dn。
    *
    * @var string[]
    */
    protected static $setters = [
            'source' => 'setSource',
            'target' => 'setTarget',
            'dataNodeRelations' => 'setDataNodeRelations'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * source  数据恢复源。
    * target  数据恢复目标。
    * dataNodeRelations  关联dn。
    *
    * @var string[]
    */
    protected static $getters = [
            'source' => 'getSource',
            'target' => 'getTarget',
            'dataNodeRelations' => 'getDataNodeRelations'
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
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
        $this->container['dataNodeRelations'] = isset($data['dataNodeRelations']) ? $data['dataNodeRelations'] : null;
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
    * Gets source
    *  数据恢复源。
    *
    * @return object|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param object|null $source 数据恢复源。
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets target
    *  数据恢复目标。
    *
    * @return object|null
    */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
    * Sets target
    *
    * @param object|null $target 数据恢复目标。
    *
    * @return $this
    */
    public function setTarget($target)
    {
        $this->container['target'] = $target;
        return $this;
    }

    /**
    * Gets dataNodeRelations
    *  关联dn。
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\DataNodeRelation[]|null
    */
    public function getDataNodeRelations()
    {
        return $this->container['dataNodeRelations'];
    }

    /**
    * Sets dataNodeRelations
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\DataNodeRelation[]|null $dataNodeRelations 关联dn。
    *
    * @return $this
    */
    public function setDataNodeRelations($dataNodeRelations)
    {
        $this->container['dataNodeRelations'] = $dataNodeRelations;
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

