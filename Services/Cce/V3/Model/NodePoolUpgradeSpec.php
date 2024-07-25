<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodePoolUpgradeSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodePoolUpgradeSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodePoolId  节点池id。
    * nodeIDs  nodeIDs
    * force  Pod无法驱逐时，是否强制重置。
    * nodeTemplate  nodeTemplate
    * maxUnavailable  maxUnavailable
    * retryTimes  retryTimes
    * skippedNodes  skippedNodes
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodePoolId' => 'string',
            'nodeIDs' => 'string[]',
            'force' => 'bool',
            'nodeTemplate' => '\HuaweiCloud\SDK\Cce\V3\Model\NodeTemplate',
            'maxUnavailable' => 'int',
            'retryTimes' => 'int',
            'skippedNodes' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodePoolId  节点池id。
    * nodeIDs  nodeIDs
    * force  Pod无法驱逐时，是否强制重置。
    * nodeTemplate  nodeTemplate
    * maxUnavailable  maxUnavailable
    * retryTimes  retryTimes
    * skippedNodes  skippedNodes
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodePoolId' => null,
        'nodeIDs' => null,
        'force' => null,
        'nodeTemplate' => null,
        'maxUnavailable' => null,
        'retryTimes' => null,
        'skippedNodes' => null
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
    * nodePoolId  节点池id。
    * nodeIDs  nodeIDs
    * force  Pod无法驱逐时，是否强制重置。
    * nodeTemplate  nodeTemplate
    * maxUnavailable  maxUnavailable
    * retryTimes  retryTimes
    * skippedNodes  skippedNodes
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodePoolId' => 'nodePoolID',
            'nodeIDs' => 'nodeIDs',
            'force' => 'force',
            'nodeTemplate' => 'nodeTemplate',
            'maxUnavailable' => 'maxUnavailable',
            'retryTimes' => 'retryTimes',
            'skippedNodes' => 'skippedNodes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodePoolId  节点池id。
    * nodeIDs  nodeIDs
    * force  Pod无法驱逐时，是否强制重置。
    * nodeTemplate  nodeTemplate
    * maxUnavailable  maxUnavailable
    * retryTimes  retryTimes
    * skippedNodes  skippedNodes
    *
    * @var string[]
    */
    protected static $setters = [
            'nodePoolId' => 'setNodePoolId',
            'nodeIDs' => 'setNodeIDs',
            'force' => 'setForce',
            'nodeTemplate' => 'setNodeTemplate',
            'maxUnavailable' => 'setMaxUnavailable',
            'retryTimes' => 'setRetryTimes',
            'skippedNodes' => 'setSkippedNodes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodePoolId  节点池id。
    * nodeIDs  nodeIDs
    * force  Pod无法驱逐时，是否强制重置。
    * nodeTemplate  nodeTemplate
    * maxUnavailable  maxUnavailable
    * retryTimes  retryTimes
    * skippedNodes  skippedNodes
    *
    * @var string[]
    */
    protected static $getters = [
            'nodePoolId' => 'getNodePoolId',
            'nodeIDs' => 'getNodeIDs',
            'force' => 'getForce',
            'nodeTemplate' => 'getNodeTemplate',
            'maxUnavailable' => 'getMaxUnavailable',
            'retryTimes' => 'getRetryTimes',
            'skippedNodes' => 'getSkippedNodes'
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
        $this->container['nodePoolId'] = isset($data['nodePoolId']) ? $data['nodePoolId'] : null;
        $this->container['nodeIDs'] = isset($data['nodeIDs']) ? $data['nodeIDs'] : null;
        $this->container['force'] = isset($data['force']) ? $data['force'] : null;
        $this->container['nodeTemplate'] = isset($data['nodeTemplate']) ? $data['nodeTemplate'] : null;
        $this->container['maxUnavailable'] = isset($data['maxUnavailable']) ? $data['maxUnavailable'] : null;
        $this->container['retryTimes'] = isset($data['retryTimes']) ? $data['retryTimes'] : null;
        $this->container['skippedNodes'] = isset($data['skippedNodes']) ? $data['skippedNodes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nodePoolId'] === null) {
            $invalidProperties[] = "'nodePoolId' can't be null";
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
    * Gets nodePoolId
    *  节点池id。
    *
    * @return string
    */
    public function getNodePoolId()
    {
        return $this->container['nodePoolId'];
    }

    /**
    * Sets nodePoolId
    *
    * @param string $nodePoolId 节点池id。
    *
    * @return $this
    */
    public function setNodePoolId($nodePoolId)
    {
        $this->container['nodePoolId'] = $nodePoolId;
        return $this;
    }

    /**
    * Gets nodeIDs
    *  nodeIDs
    *
    * @return string[]|null
    */
    public function getNodeIDs()
    {
        return $this->container['nodeIDs'];
    }

    /**
    * Sets nodeIDs
    *
    * @param string[]|null $nodeIDs nodeIDs
    *
    * @return $this
    */
    public function setNodeIDs($nodeIDs)
    {
        $this->container['nodeIDs'] = $nodeIDs;
        return $this;
    }

    /**
    * Gets force
    *  Pod无法驱逐时，是否强制重置。
    *
    * @return bool|null
    */
    public function getForce()
    {
        return $this->container['force'];
    }

    /**
    * Sets force
    *
    * @param bool|null $force Pod无法驱逐时，是否强制重置。
    *
    * @return $this
    */
    public function setForce($force)
    {
        $this->container['force'] = $force;
        return $this;
    }

    /**
    * Gets nodeTemplate
    *  nodeTemplate
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\NodeTemplate|null
    */
    public function getNodeTemplate()
    {
        return $this->container['nodeTemplate'];
    }

    /**
    * Sets nodeTemplate
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\NodeTemplate|null $nodeTemplate nodeTemplate
    *
    * @return $this
    */
    public function setNodeTemplate($nodeTemplate)
    {
        $this->container['nodeTemplate'] = $nodeTemplate;
        return $this;
    }

    /**
    * Gets maxUnavailable
    *  maxUnavailable
    *
    * @return int|null
    */
    public function getMaxUnavailable()
    {
        return $this->container['maxUnavailable'];
    }

    /**
    * Sets maxUnavailable
    *
    * @param int|null $maxUnavailable maxUnavailable
    *
    * @return $this
    */
    public function setMaxUnavailable($maxUnavailable)
    {
        $this->container['maxUnavailable'] = $maxUnavailable;
        return $this;
    }

    /**
    * Gets retryTimes
    *  retryTimes
    *
    * @return int|null
    */
    public function getRetryTimes()
    {
        return $this->container['retryTimes'];
    }

    /**
    * Sets retryTimes
    *
    * @param int|null $retryTimes retryTimes
    *
    * @return $this
    */
    public function setRetryTimes($retryTimes)
    {
        $this->container['retryTimes'] = $retryTimes;
        return $this;
    }

    /**
    * Gets skippedNodes
    *  skippedNodes
    *
    * @return string[]|null
    */
    public function getSkippedNodes()
    {
        return $this->container['skippedNodes'];
    }

    /**
    * Sets skippedNodes
    *
    * @param string[]|null $skippedNodes skippedNodes
    *
    * @return $this
    */
    public function setSkippedNodes($skippedNodes)
    {
        $this->container['skippedNodes'] = $skippedNodes;
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

