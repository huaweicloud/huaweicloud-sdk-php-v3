<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExpandDdmInstanceNodesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExpandDdmInstanceNodesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  组id，指定当前进行节点扩容的组。当实例的组>1时，必填。
    * subnetId  子网ID，当组内节点的subnetId>1时，必填。
    * isAutoPay  变更包年包月实例规格时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。true，表示自动从账户中支付。false，表示手动从账户中支付，默认为该方式。
    * nodes  节点信息列表。最小1，最大32
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'subnetId' => 'string',
            'isAutoPay' => 'bool',
            'nodes' => '\HuaweiCloud\SDK\Ddm\V1\Model\EnlargeNodeInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  组id，指定当前进行节点扩容的组。当实例的组>1时，必填。
    * subnetId  子网ID，当组内节点的subnetId>1时，必填。
    * isAutoPay  变更包年包月实例规格时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。true，表示自动从账户中支付。false，表示手动从账户中支付，默认为该方式。
    * nodes  节点信息列表。最小1，最大32
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'subnetId' => null,
        'isAutoPay' => null,
        'nodes' => null
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
    * groupId  组id，指定当前进行节点扩容的组。当实例的组>1时，必填。
    * subnetId  子网ID，当组内节点的subnetId>1时，必填。
    * isAutoPay  变更包年包月实例规格时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。true，表示自动从账户中支付。false，表示手动从账户中支付，默认为该方式。
    * nodes  节点信息列表。最小1，最大32
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'subnetId' => 'subnet_id',
            'isAutoPay' => 'is_auto_pay',
            'nodes' => 'nodes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  组id，指定当前进行节点扩容的组。当实例的组>1时，必填。
    * subnetId  子网ID，当组内节点的subnetId>1时，必填。
    * isAutoPay  变更包年包月实例规格时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。true，表示自动从账户中支付。false，表示手动从账户中支付，默认为该方式。
    * nodes  节点信息列表。最小1，最大32
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'subnetId' => 'setSubnetId',
            'isAutoPay' => 'setIsAutoPay',
            'nodes' => 'setNodes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  组id，指定当前进行节点扩容的组。当实例的组>1时，必填。
    * subnetId  子网ID，当组内节点的subnetId>1时，必填。
    * isAutoPay  变更包年包月实例规格时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。true，表示自动从账户中支付。false，表示手动从账户中支付，默认为该方式。
    * nodes  节点信息列表。最小1，最大32
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'subnetId' => 'getSubnetId',
            'isAutoPay' => 'getIsAutoPay',
            'nodes' => 'getNodes'
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : null;
        $this->container['nodes'] = isset($data['nodes']) ? $data['nodes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nodes'] === null) {
            $invalidProperties[] = "'nodes' can't be null";
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
    * Gets groupId
    *  组id，指定当前进行节点扩容的组。当实例的组>1时，必填。
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 组id，指定当前进行节点扩容的组。当实例的组>1时，必填。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets subnetId
    *  子网ID，当组内节点的subnetId>1时，必填。
    *
    * @return string|null
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string|null $subnetId 子网ID，当组内节点的subnetId>1时，必填。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets isAutoPay
    *  变更包年包月实例规格时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。true，表示自动从账户中支付。false，表示手动从账户中支付，默认为该方式。
    *
    * @return bool|null
    */
    public function getIsAutoPay()
    {
        return $this->container['isAutoPay'];
    }

    /**
    * Sets isAutoPay
    *
    * @param bool|null $isAutoPay 变更包年包月实例规格时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。true，表示自动从账户中支付。false，表示手动从账户中支付，默认为该方式。
    *
    * @return $this
    */
    public function setIsAutoPay($isAutoPay)
    {
        $this->container['isAutoPay'] = $isAutoPay;
        return $this;
    }

    /**
    * Gets nodes
    *  节点信息列表。最小1，最大32
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\EnlargeNodeInfo[]
    */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
    * Sets nodes
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\EnlargeNodeInfo[] $nodes 节点信息列表。最小1，最大32
    *
    * @return $this
    */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;
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

