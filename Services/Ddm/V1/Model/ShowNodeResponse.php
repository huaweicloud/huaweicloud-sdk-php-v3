<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowNodeResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowNodeResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  节点状态。
    * name  节点名称。
    * nodeId  节点id。
    * privateIp  节点私有ip。
    * floatingIp  节点浮动ip。
    * serverId  虚机id。
    * subnetName  子网名称。
    * datavolumeId  数据盘id。
    * resSubnetIp  资源子网ip。
    * systemvolumeId  系统盘id。
    * groupId  节点所在组ID。
    * subnetId  子网ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'name' => 'string',
            'nodeId' => 'string',
            'privateIp' => 'string',
            'floatingIp' => 'string',
            'serverId' => 'string',
            'subnetName' => 'string',
            'datavolumeId' => 'string',
            'resSubnetIp' => 'string',
            'systemvolumeId' => 'string',
            'groupId' => 'string',
            'subnetId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  节点状态。
    * name  节点名称。
    * nodeId  节点id。
    * privateIp  节点私有ip。
    * floatingIp  节点浮动ip。
    * serverId  虚机id。
    * subnetName  子网名称。
    * datavolumeId  数据盘id。
    * resSubnetIp  资源子网ip。
    * systemvolumeId  系统盘id。
    * groupId  节点所在组ID。
    * subnetId  子网ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'name' => null,
        'nodeId' => null,
        'privateIp' => null,
        'floatingIp' => null,
        'serverId' => null,
        'subnetName' => null,
        'datavolumeId' => null,
        'resSubnetIp' => null,
        'systemvolumeId' => null,
        'groupId' => null,
        'subnetId' => null
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
    * status  节点状态。
    * name  节点名称。
    * nodeId  节点id。
    * privateIp  节点私有ip。
    * floatingIp  节点浮动ip。
    * serverId  虚机id。
    * subnetName  子网名称。
    * datavolumeId  数据盘id。
    * resSubnetIp  资源子网ip。
    * systemvolumeId  系统盘id。
    * groupId  节点所在组ID。
    * subnetId  子网ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'name' => 'name',
            'nodeId' => 'node_id',
            'privateIp' => 'private_ip',
            'floatingIp' => 'floating_ip',
            'serverId' => 'server_id',
            'subnetName' => 'subnet_name',
            'datavolumeId' => 'datavolume_id',
            'resSubnetIp' => 'res_subnet_ip',
            'systemvolumeId' => 'systemvolume_id',
            'groupId' => 'group_id',
            'subnetId' => 'subnet_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  节点状态。
    * name  节点名称。
    * nodeId  节点id。
    * privateIp  节点私有ip。
    * floatingIp  节点浮动ip。
    * serverId  虚机id。
    * subnetName  子网名称。
    * datavolumeId  数据盘id。
    * resSubnetIp  资源子网ip。
    * systemvolumeId  系统盘id。
    * groupId  节点所在组ID。
    * subnetId  子网ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'name' => 'setName',
            'nodeId' => 'setNodeId',
            'privateIp' => 'setPrivateIp',
            'floatingIp' => 'setFloatingIp',
            'serverId' => 'setServerId',
            'subnetName' => 'setSubnetName',
            'datavolumeId' => 'setDatavolumeId',
            'resSubnetIp' => 'setResSubnetIp',
            'systemvolumeId' => 'setSystemvolumeId',
            'groupId' => 'setGroupId',
            'subnetId' => 'setSubnetId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  节点状态。
    * name  节点名称。
    * nodeId  节点id。
    * privateIp  节点私有ip。
    * floatingIp  节点浮动ip。
    * serverId  虚机id。
    * subnetName  子网名称。
    * datavolumeId  数据盘id。
    * resSubnetIp  资源子网ip。
    * systemvolumeId  系统盘id。
    * groupId  节点所在组ID。
    * subnetId  子网ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'name' => 'getName',
            'nodeId' => 'getNodeId',
            'privateIp' => 'getPrivateIp',
            'floatingIp' => 'getFloatingIp',
            'serverId' => 'getServerId',
            'subnetName' => 'getSubnetName',
            'datavolumeId' => 'getDatavolumeId',
            'resSubnetIp' => 'getResSubnetIp',
            'systemvolumeId' => 'getSystemvolumeId',
            'groupId' => 'getGroupId',
            'subnetId' => 'getSubnetId'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['floatingIp'] = isset($data['floatingIp']) ? $data['floatingIp'] : null;
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
        $this->container['subnetName'] = isset($data['subnetName']) ? $data['subnetName'] : null;
        $this->container['datavolumeId'] = isset($data['datavolumeId']) ? $data['datavolumeId'] : null;
        $this->container['resSubnetIp'] = isset($data['resSubnetIp']) ? $data['resSubnetIp'] : null;
        $this->container['systemvolumeId'] = isset($data['systemvolumeId']) ? $data['systemvolumeId'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
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
    * Gets status
    *  节点状态。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 节点状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets name
    *  节点名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 节点名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点id。
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId 节点id。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets privateIp
    *  节点私有ip。
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp 节点私有ip。
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets floatingIp
    *  节点浮动ip。
    *
    * @return string|null
    */
    public function getFloatingIp()
    {
        return $this->container['floatingIp'];
    }

    /**
    * Sets floatingIp
    *
    * @param string|null $floatingIp 节点浮动ip。
    *
    * @return $this
    */
    public function setFloatingIp($floatingIp)
    {
        $this->container['floatingIp'] = $floatingIp;
        return $this;
    }

    /**
    * Gets serverId
    *  虚机id。
    *
    * @return string|null
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string|null $serverId 虚机id。
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
        return $this;
    }

    /**
    * Gets subnetName
    *  子网名称。
    *
    * @return string|null
    */
    public function getSubnetName()
    {
        return $this->container['subnetName'];
    }

    /**
    * Sets subnetName
    *
    * @param string|null $subnetName 子网名称。
    *
    * @return $this
    */
    public function setSubnetName($subnetName)
    {
        $this->container['subnetName'] = $subnetName;
        return $this;
    }

    /**
    * Gets datavolumeId
    *  数据盘id。
    *
    * @return string|null
    */
    public function getDatavolumeId()
    {
        return $this->container['datavolumeId'];
    }

    /**
    * Sets datavolumeId
    *
    * @param string|null $datavolumeId 数据盘id。
    *
    * @return $this
    */
    public function setDatavolumeId($datavolumeId)
    {
        $this->container['datavolumeId'] = $datavolumeId;
        return $this;
    }

    /**
    * Gets resSubnetIp
    *  资源子网ip。
    *
    * @return string|null
    */
    public function getResSubnetIp()
    {
        return $this->container['resSubnetIp'];
    }

    /**
    * Sets resSubnetIp
    *
    * @param string|null $resSubnetIp 资源子网ip。
    *
    * @return $this
    */
    public function setResSubnetIp($resSubnetIp)
    {
        $this->container['resSubnetIp'] = $resSubnetIp;
        return $this;
    }

    /**
    * Gets systemvolumeId
    *  系统盘id。
    *
    * @return string|null
    */
    public function getSystemvolumeId()
    {
        return $this->container['systemvolumeId'];
    }

    /**
    * Sets systemvolumeId
    *
    * @param string|null $systemvolumeId 系统盘id。
    *
    * @return $this
    */
    public function setSystemvolumeId($systemvolumeId)
    {
        $this->container['systemvolumeId'] = $systemvolumeId;
        return $this;
    }

    /**
    * Gets groupId
    *  节点所在组ID。
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
    * @param string|null $groupId 节点所在组ID。
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
    *  子网ID。
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
    * @param string|null $subnetId 子网ID。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
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

