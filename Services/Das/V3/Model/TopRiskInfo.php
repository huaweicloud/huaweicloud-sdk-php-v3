<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TopRiskInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TopRiskInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例id。
    * instanceName  实例名称。
    * nodeId  节点ID。
    * metricNames  指标名称。
    * metricValues  指标值,单位%。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'instanceName' => 'string',
            'nodeId' => 'string',
            'metricNames' => 'string[]',
            'metricValues' => 'double[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例id。
    * instanceName  实例名称。
    * nodeId  节点ID。
    * metricNames  指标名称。
    * metricValues  指标值,单位%。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'instanceName' => null,
        'nodeId' => null,
        'metricNames' => null,
        'metricValues' => 'double'
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
    * instanceId  实例id。
    * instanceName  实例名称。
    * nodeId  节点ID。
    * metricNames  指标名称。
    * metricValues  指标值,单位%。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'nodeId' => 'node_id',
            'metricNames' => 'metric_names',
            'metricValues' => 'metric_values'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例id。
    * instanceName  实例名称。
    * nodeId  节点ID。
    * metricNames  指标名称。
    * metricValues  指标值,单位%。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'nodeId' => 'setNodeId',
            'metricNames' => 'setMetricNames',
            'metricValues' => 'setMetricValues'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例id。
    * instanceName  实例名称。
    * nodeId  节点ID。
    * metricNames  指标名称。
    * metricValues  指标值,单位%。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'nodeId' => 'getNodeId',
            'metricNames' => 'getMetricNames',
            'metricValues' => 'getMetricValues'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['metricNames'] = isset($data['metricNames']) ? $data['metricNames'] : null;
        $this->container['metricValues'] = isset($data['metricValues']) ? $data['metricValues'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if ((mb_strlen($this->container['instanceId']) > 1024)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['instanceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['instanceName'] === null) {
            $invalidProperties[] = "'instanceName' can't be null";
        }
            if ((mb_strlen($this->container['instanceName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['instanceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['nodeId'] === null) {
            $invalidProperties[] = "'nodeId' can't be null";
        }
            if ((mb_strlen($this->container['nodeId']) > 1024)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['nodeId']) < 1)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['metricNames'] === null) {
            $invalidProperties[] = "'metricNames' can't be null";
        }
        if ($this->container['metricValues'] === null) {
            $invalidProperties[] = "'metricValues' can't be null";
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
    * Gets instanceId
    *  实例id。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例id。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  实例名称。
    *
    * @return string
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string $instanceName 实例名称。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点ID。
    *
    * @return string
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string $nodeId 节点ID。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets metricNames
    *  指标名称。
    *
    * @return string[]
    */
    public function getMetricNames()
    {
        return $this->container['metricNames'];
    }

    /**
    * Sets metricNames
    *
    * @param string[] $metricNames 指标名称。
    *
    * @return $this
    */
    public function setMetricNames($metricNames)
    {
        $this->container['metricNames'] = $metricNames;
        return $this;
    }

    /**
    * Gets metricValues
    *  指标值,单位%。
    *
    * @return double[]
    */
    public function getMetricValues()
    {
        return $this->container['metricValues'];
    }

    /**
    * Sets metricValues
    *
    * @param double[] $metricValues 指标值,单位%。
    *
    * @return $this
    */
    public function setMetricValues($metricValues)
    {
        $this->container['metricValues'] = $metricValues;
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

