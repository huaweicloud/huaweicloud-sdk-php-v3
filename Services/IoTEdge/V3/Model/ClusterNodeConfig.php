<?php

namespace HuaweiCloud\SDK\IoTEdge\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterNodeConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterNodeConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * masterNodeVip  master虚拟ip
    * masterNodes  master节点数
    * workNodes  work节点数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'masterNodeVip' => 'string',
            'masterNodes' => '\HuaweiCloud\SDK\IoTEdge\V3\Model\NodeConfig[]',
            'workNodes' => '\HuaweiCloud\SDK\IoTEdge\V3\Model\NodeConfig[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * masterNodeVip  master虚拟ip
    * masterNodes  master节点数
    * workNodes  work节点数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'masterNodeVip' => null,
        'masterNodes' => null,
        'workNodes' => null
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
    * masterNodeVip  master虚拟ip
    * masterNodes  master节点数
    * workNodes  work节点数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'masterNodeVip' => 'master_node_vip',
            'masterNodes' => 'master_nodes',
            'workNodes' => 'work_nodes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * masterNodeVip  master虚拟ip
    * masterNodes  master节点数
    * workNodes  work节点数
    *
    * @var string[]
    */
    protected static $setters = [
            'masterNodeVip' => 'setMasterNodeVip',
            'masterNodes' => 'setMasterNodes',
            'workNodes' => 'setWorkNodes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * masterNodeVip  master虚拟ip
    * masterNodes  master节点数
    * workNodes  work节点数
    *
    * @var string[]
    */
    protected static $getters = [
            'masterNodeVip' => 'getMasterNodeVip',
            'masterNodes' => 'getMasterNodes',
            'workNodes' => 'getWorkNodes'
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
        $this->container['masterNodeVip'] = isset($data['masterNodeVip']) ? $data['masterNodeVip'] : null;
        $this->container['masterNodes'] = isset($data['masterNodes']) ? $data['masterNodes'] : null;
        $this->container['workNodes'] = isset($data['workNodes']) ? $data['workNodes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['masterNodeVip']) && (mb_strlen($this->container['masterNodeVip']) > 64)) {
                $invalidProperties[] = "invalid value for 'masterNodeVip', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['masterNodeVip']) && (mb_strlen($this->container['masterNodeVip']) < 1)) {
                $invalidProperties[] = "invalid value for 'masterNodeVip', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['masterNodeVip']) && !preg_match("/^((25[0-5])|(2[0-4]\\d)|(1\\d\\d)|([1-9]\\d)|\\d)(\\.((25[0-5])|(2[0-4]\\d)|(1\\d\\d)|([1-9]\\d)|\\d)){3}$/", $this->container['masterNodeVip'])) {
                $invalidProperties[] = "invalid value for 'masterNodeVip', must be conform to the pattern /^((25[0-5])|(2[0-4]\\d)|(1\\d\\d)|([1-9]\\d)|\\d)(\\.((25[0-5])|(2[0-4]\\d)|(1\\d\\d)|([1-9]\\d)|\\d)){3}$/.";
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
    * Gets masterNodeVip
    *  master虚拟ip
    *
    * @return string|null
    */
    public function getMasterNodeVip()
    {
        return $this->container['masterNodeVip'];
    }

    /**
    * Sets masterNodeVip
    *
    * @param string|null $masterNodeVip master虚拟ip
    *
    * @return $this
    */
    public function setMasterNodeVip($masterNodeVip)
    {
        $this->container['masterNodeVip'] = $masterNodeVip;
        return $this;
    }

    /**
    * Gets masterNodes
    *  master节点数
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V3\Model\NodeConfig[]|null
    */
    public function getMasterNodes()
    {
        return $this->container['masterNodes'];
    }

    /**
    * Sets masterNodes
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V3\Model\NodeConfig[]|null $masterNodes master节点数
    *
    * @return $this
    */
    public function setMasterNodes($masterNodes)
    {
        $this->container['masterNodes'] = $masterNodes;
        return $this;
    }

    /**
    * Gets workNodes
    *  work节点数
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V3\Model\NodeConfig[]|null
    */
    public function getWorkNodes()
    {
        return $this->container['workNodes'];
    }

    /**
    * Sets workNodes
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V3\Model\NodeConfig[]|null $workNodes work节点数
    *
    * @return $this
    */
    public function setWorkNodes($workNodes)
    {
        $this->container['workNodes'] = $workNodes;
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

