<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDaemonsetRequestBodyScheduleInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDaemonsetRequestBody_schedule_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeSelector  节点选择器
    * podTolerances  pod容忍度
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeSelector' => 'string[]',
            'podTolerances' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeSelector  节点选择器
    * podTolerances  pod容忍度
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeSelector' => null,
        'podTolerances' => null
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
    * nodeSelector  节点选择器
    * podTolerances  pod容忍度
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeSelector' => 'node_selector',
            'podTolerances' => 'pod_tolerances'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeSelector  节点选择器
    * podTolerances  pod容忍度
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeSelector' => 'setNodeSelector',
            'podTolerances' => 'setPodTolerances'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeSelector  节点选择器
    * podTolerances  pod容忍度
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeSelector' => 'getNodeSelector',
            'podTolerances' => 'getPodTolerances'
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
        $this->container['nodeSelector'] = isset($data['nodeSelector']) ? $data['nodeSelector'] : null;
        $this->container['podTolerances'] = isset($data['podTolerances']) ? $data['podTolerances'] : null;
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
    * Gets nodeSelector
    *  节点选择器
    *
    * @return string[]|null
    */
    public function getNodeSelector()
    {
        return $this->container['nodeSelector'];
    }

    /**
    * Sets nodeSelector
    *
    * @param string[]|null $nodeSelector 节点选择器
    *
    * @return $this
    */
    public function setNodeSelector($nodeSelector)
    {
        $this->container['nodeSelector'] = $nodeSelector;
        return $this;
    }

    /**
    * Gets podTolerances
    *  pod容忍度
    *
    * @return string[]|null
    */
    public function getPodTolerances()
    {
        return $this->container['podTolerances'];
    }

    /**
    * Sets podTolerances
    *
    * @param string[]|null $podTolerances pod容忍度
    *
    * @return $this
    */
    public function setPodTolerances($podTolerances)
    {
        $this->container['podTolerances'] = $podTolerances;
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

