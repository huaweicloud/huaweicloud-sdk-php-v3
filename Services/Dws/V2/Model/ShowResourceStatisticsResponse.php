<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowResourceStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowResourceStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterStatistics  clusterStatistics
    * nodeStatistics  nodeStatistics
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterStatistics' => '\HuaweiCloud\SDK\Dws\V2\Model\StatusStatistics',
            'nodeStatistics' => '\HuaweiCloud\SDK\Dws\V2\Model\StatusStatistics'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterStatistics  clusterStatistics
    * nodeStatistics  nodeStatistics
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterStatistics' => null,
        'nodeStatistics' => null
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
    * clusterStatistics  clusterStatistics
    * nodeStatistics  nodeStatistics
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterStatistics' => 'cluster_statistics',
            'nodeStatistics' => 'node_statistics'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterStatistics  clusterStatistics
    * nodeStatistics  nodeStatistics
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterStatistics' => 'setClusterStatistics',
            'nodeStatistics' => 'setNodeStatistics'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterStatistics  clusterStatistics
    * nodeStatistics  nodeStatistics
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterStatistics' => 'getClusterStatistics',
            'nodeStatistics' => 'getNodeStatistics'
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
        $this->container['clusterStatistics'] = isset($data['clusterStatistics']) ? $data['clusterStatistics'] : null;
        $this->container['nodeStatistics'] = isset($data['nodeStatistics']) ? $data['nodeStatistics'] : null;
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
    * Gets clusterStatistics
    *  clusterStatistics
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\StatusStatistics|null
    */
    public function getClusterStatistics()
    {
        return $this->container['clusterStatistics'];
    }

    /**
    * Sets clusterStatistics
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\StatusStatistics|null $clusterStatistics clusterStatistics
    *
    * @return $this
    */
    public function setClusterStatistics($clusterStatistics)
    {
        $this->container['clusterStatistics'] = $clusterStatistics;
        return $this;
    }

    /**
    * Gets nodeStatistics
    *  nodeStatistics
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\StatusStatistics|null
    */
    public function getNodeStatistics()
    {
        return $this->container['nodeStatistics'];
    }

    /**
    * Sets nodeStatistics
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\StatusStatistics|null $nodeStatistics nodeStatistics
    *
    * @return $this
    */
    public function setNodeStatistics($nodeStatistics)
    {
        $this->container['nodeStatistics'] = $nodeStatistics;
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

