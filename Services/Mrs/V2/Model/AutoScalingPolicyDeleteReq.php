<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AutoScalingPolicyDeleteReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AutoScalingPolicyDeleteReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeGroupName  节点组名称。如果resource_pool_name为default，则删除节点组维度的弹性伸缩策略。如果resource_pool_name不为default，则在该节点组下删除对应资源池维度的策略。
    * resourcePoolName  资源池名称。当集群版本不支持按指定资源池进行弹性伸缩时，需要填写为default资源池。不为default时删除指定资源池维度的弹性伸缩策略。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeGroupName' => 'string',
            'resourcePoolName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeGroupName  节点组名称。如果resource_pool_name为default，则删除节点组维度的弹性伸缩策略。如果resource_pool_name不为default，则在该节点组下删除对应资源池维度的策略。
    * resourcePoolName  资源池名称。当集群版本不支持按指定资源池进行弹性伸缩时，需要填写为default资源池。不为default时删除指定资源池维度的弹性伸缩策略。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeGroupName' => null,
        'resourcePoolName' => null
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
    * nodeGroupName  节点组名称。如果resource_pool_name为default，则删除节点组维度的弹性伸缩策略。如果resource_pool_name不为default，则在该节点组下删除对应资源池维度的策略。
    * resourcePoolName  资源池名称。当集群版本不支持按指定资源池进行弹性伸缩时，需要填写为default资源池。不为default时删除指定资源池维度的弹性伸缩策略。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeGroupName' => 'node_group_name',
            'resourcePoolName' => 'resource_pool_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeGroupName  节点组名称。如果resource_pool_name为default，则删除节点组维度的弹性伸缩策略。如果resource_pool_name不为default，则在该节点组下删除对应资源池维度的策略。
    * resourcePoolName  资源池名称。当集群版本不支持按指定资源池进行弹性伸缩时，需要填写为default资源池。不为default时删除指定资源池维度的弹性伸缩策略。
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeGroupName' => 'setNodeGroupName',
            'resourcePoolName' => 'setResourcePoolName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeGroupName  节点组名称。如果resource_pool_name为default，则删除节点组维度的弹性伸缩策略。如果resource_pool_name不为default，则在该节点组下删除对应资源池维度的策略。
    * resourcePoolName  资源池名称。当集群版本不支持按指定资源池进行弹性伸缩时，需要填写为default资源池。不为default时删除指定资源池维度的弹性伸缩策略。
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeGroupName' => 'getNodeGroupName',
            'resourcePoolName' => 'getResourcePoolName'
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
        $this->container['nodeGroupName'] = isset($data['nodeGroupName']) ? $data['nodeGroupName'] : null;
        $this->container['resourcePoolName'] = isset($data['resourcePoolName']) ? $data['resourcePoolName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nodeGroupName'] === null) {
            $invalidProperties[] = "'nodeGroupName' can't be null";
        }
            if (!preg_match("/^[a-z0-9A-Z_-]*$/", $this->container['nodeGroupName'])) {
                $invalidProperties[] = "invalid value for 'nodeGroupName', must be conform to the pattern /^[a-z0-9A-Z_-]*$/.";
            }
        if ($this->container['resourcePoolName'] === null) {
            $invalidProperties[] = "'resourcePoolName' can't be null";
        }
            if (!preg_match("/^[a-z0-9A-Z_-]*$/", $this->container['resourcePoolName'])) {
                $invalidProperties[] = "invalid value for 'resourcePoolName', must be conform to the pattern /^[a-z0-9A-Z_-]*$/.";
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
    * Gets nodeGroupName
    *  节点组名称。如果resource_pool_name为default，则删除节点组维度的弹性伸缩策略。如果resource_pool_name不为default，则在该节点组下删除对应资源池维度的策略。
    *
    * @return string
    */
    public function getNodeGroupName()
    {
        return $this->container['nodeGroupName'];
    }

    /**
    * Sets nodeGroupName
    *
    * @param string $nodeGroupName 节点组名称。如果resource_pool_name为default，则删除节点组维度的弹性伸缩策略。如果resource_pool_name不为default，则在该节点组下删除对应资源池维度的策略。
    *
    * @return $this
    */
    public function setNodeGroupName($nodeGroupName)
    {
        $this->container['nodeGroupName'] = $nodeGroupName;
        return $this;
    }

    /**
    * Gets resourcePoolName
    *  资源池名称。当集群版本不支持按指定资源池进行弹性伸缩时，需要填写为default资源池。不为default时删除指定资源池维度的弹性伸缩策略。
    *
    * @return string
    */
    public function getResourcePoolName()
    {
        return $this->container['resourcePoolName'];
    }

    /**
    * Sets resourcePoolName
    *
    * @param string $resourcePoolName 资源池名称。当集群版本不支持按指定资源池进行弹性伸缩时，需要填写为default资源池。不为default时删除指定资源池维度的弹性伸缩策略。
    *
    * @return $this
    */
    public function setResourcePoolName($resourcePoolName)
    {
        $this->container['resourcePoolName'] = $resourcePoolName;
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

