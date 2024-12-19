<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PeerLinkEntry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PeerLinkEntry';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  peer link ID。
    * tenantId  租户项目ID
    * name  专线内部连接(peer link)名字
    * description  描述信息
    * globalDcGatewayId  对应的专线全域接入网关ID
    * bandwidthInfo  bandwidthInfo
    * peerSite  peerSite
    * status  status
    * createdTime  创建时间。
    * updatedTime  更新时间。
    * createOwner  创建归属服务名 - cc 云连接 - dc 云专线
    * instanceId  实例ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'tenantId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'globalDcGatewayId' => 'string',
            'bandwidthInfo' => '\HuaweiCloud\SDK\Dc\V3\Model\BandWidthInfo',
            'peerSite' => '\HuaweiCloud\SDK\Dc\V3\Model\PeerSite',
            'status' => '\HuaweiCloud\SDK\Dc\V3\Model\PeerLinkStatus',
            'createdTime' => '\DateTime',
            'updatedTime' => '\DateTime',
            'createOwner' => '\DateTime',
            'instanceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  peer link ID。
    * tenantId  租户项目ID
    * name  专线内部连接(peer link)名字
    * description  描述信息
    * globalDcGatewayId  对应的专线全域接入网关ID
    * bandwidthInfo  bandwidthInfo
    * peerSite  peerSite
    * status  status
    * createdTime  创建时间。
    * updatedTime  更新时间。
    * createOwner  创建归属服务名 - cc 云连接 - dc 云专线
    * instanceId  实例ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'tenantId' => null,
        'name' => null,
        'description' => null,
        'globalDcGatewayId' => null,
        'bandwidthInfo' => null,
        'peerSite' => null,
        'status' => null,
        'createdTime' => 'date-time',
        'updatedTime' => 'date-time',
        'createOwner' => 'date-time',
        'instanceId' => null
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
    * id  peer link ID。
    * tenantId  租户项目ID
    * name  专线内部连接(peer link)名字
    * description  描述信息
    * globalDcGatewayId  对应的专线全域接入网关ID
    * bandwidthInfo  bandwidthInfo
    * peerSite  peerSite
    * status  status
    * createdTime  创建时间。
    * updatedTime  更新时间。
    * createOwner  创建归属服务名 - cc 云连接 - dc 云专线
    * instanceId  实例ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'tenantId' => 'tenant_id',
            'name' => 'name',
            'description' => 'description',
            'globalDcGatewayId' => 'global_dc_gateway_id',
            'bandwidthInfo' => 'bandwidth_info',
            'peerSite' => 'peer_site',
            'status' => 'status',
            'createdTime' => 'created_time',
            'updatedTime' => 'updated_time',
            'createOwner' => 'create_owner',
            'instanceId' => 'instance_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  peer link ID。
    * tenantId  租户项目ID
    * name  专线内部连接(peer link)名字
    * description  描述信息
    * globalDcGatewayId  对应的专线全域接入网关ID
    * bandwidthInfo  bandwidthInfo
    * peerSite  peerSite
    * status  status
    * createdTime  创建时间。
    * updatedTime  更新时间。
    * createOwner  创建归属服务名 - cc 云连接 - dc 云专线
    * instanceId  实例ID
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'tenantId' => 'setTenantId',
            'name' => 'setName',
            'description' => 'setDescription',
            'globalDcGatewayId' => 'setGlobalDcGatewayId',
            'bandwidthInfo' => 'setBandwidthInfo',
            'peerSite' => 'setPeerSite',
            'status' => 'setStatus',
            'createdTime' => 'setCreatedTime',
            'updatedTime' => 'setUpdatedTime',
            'createOwner' => 'setCreateOwner',
            'instanceId' => 'setInstanceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  peer link ID。
    * tenantId  租户项目ID
    * name  专线内部连接(peer link)名字
    * description  描述信息
    * globalDcGatewayId  对应的专线全域接入网关ID
    * bandwidthInfo  bandwidthInfo
    * peerSite  peerSite
    * status  status
    * createdTime  创建时间。
    * updatedTime  更新时间。
    * createOwner  创建归属服务名 - cc 云连接 - dc 云专线
    * instanceId  实例ID
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'tenantId' => 'getTenantId',
            'name' => 'getName',
            'description' => 'getDescription',
            'globalDcGatewayId' => 'getGlobalDcGatewayId',
            'bandwidthInfo' => 'getBandwidthInfo',
            'peerSite' => 'getPeerSite',
            'status' => 'getStatus',
            'createdTime' => 'getCreatedTime',
            'updatedTime' => 'getUpdatedTime',
            'createOwner' => 'getCreateOwner',
            'instanceId' => 'getInstanceId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['globalDcGatewayId'] = isset($data['globalDcGatewayId']) ? $data['globalDcGatewayId'] : null;
        $this->container['bandwidthInfo'] = isset($data['bandwidthInfo']) ? $data['bandwidthInfo'] : null;
        $this->container['peerSite'] = isset($data['peerSite']) ? $data['peerSite'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['updatedTime'] = isset($data['updatedTime']) ? $data['updatedTime'] : null;
        $this->container['createOwner'] = isset($data['createOwner']) ? $data['createOwner'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) > 255)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) < 0)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tenantId']) && !preg_match("/[a-z0-9]{32}/", $this->container['tenantId'])) {
                $invalidProperties[] = "invalid value for 'tenantId', must be conform to the pattern /[a-z0-9]{32}/.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['globalDcGatewayId']) && (mb_strlen($this->container['globalDcGatewayId']) > 64)) {
                $invalidProperties[] = "invalid value for 'globalDcGatewayId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['globalDcGatewayId']) && (mb_strlen($this->container['globalDcGatewayId']) < 0)) {
                $invalidProperties[] = "invalid value for 'globalDcGatewayId', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  peer link ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id peer link ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets tenantId
    *  租户项目ID
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 租户项目ID
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets name
    *  专线内部连接(peer link)名字
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
    * @param string|null $name 专线内部连接(peer link)名字
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  描述信息
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets globalDcGatewayId
    *  对应的专线全域接入网关ID
    *
    * @return string|null
    */
    public function getGlobalDcGatewayId()
    {
        return $this->container['globalDcGatewayId'];
    }

    /**
    * Sets globalDcGatewayId
    *
    * @param string|null $globalDcGatewayId 对应的专线全域接入网关ID
    *
    * @return $this
    */
    public function setGlobalDcGatewayId($globalDcGatewayId)
    {
        $this->container['globalDcGatewayId'] = $globalDcGatewayId;
        return $this;
    }

    /**
    * Gets bandwidthInfo
    *  bandwidthInfo
    *
    * @return \HuaweiCloud\SDK\Dc\V3\Model\BandWidthInfo|null
    */
    public function getBandwidthInfo()
    {
        return $this->container['bandwidthInfo'];
    }

    /**
    * Sets bandwidthInfo
    *
    * @param \HuaweiCloud\SDK\Dc\V3\Model\BandWidthInfo|null $bandwidthInfo bandwidthInfo
    *
    * @return $this
    */
    public function setBandwidthInfo($bandwidthInfo)
    {
        $this->container['bandwidthInfo'] = $bandwidthInfo;
        return $this;
    }

    /**
    * Gets peerSite
    *  peerSite
    *
    * @return \HuaweiCloud\SDK\Dc\V3\Model\PeerSite|null
    */
    public function getPeerSite()
    {
        return $this->container['peerSite'];
    }

    /**
    * Sets peerSite
    *
    * @param \HuaweiCloud\SDK\Dc\V3\Model\PeerSite|null $peerSite peerSite
    *
    * @return $this
    */
    public function setPeerSite($peerSite)
    {
        $this->container['peerSite'] = $peerSite;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\Dc\V3\Model\PeerLinkStatus|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\Dc\V3\Model\PeerLinkStatus|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createdTime
    *  创建时间。
    *
    * @return \DateTime|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param \DateTime|null $createdTime 创建时间。
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets updatedTime
    *  更新时间。
    *
    * @return \DateTime|null
    */
    public function getUpdatedTime()
    {
        return $this->container['updatedTime'];
    }

    /**
    * Sets updatedTime
    *
    * @param \DateTime|null $updatedTime 更新时间。
    *
    * @return $this
    */
    public function setUpdatedTime($updatedTime)
    {
        $this->container['updatedTime'] = $updatedTime;
        return $this;
    }

    /**
    * Gets createOwner
    *  创建归属服务名 - cc 云连接 - dc 云专线
    *
    * @return \DateTime|null
    */
    public function getCreateOwner()
    {
        return $this->container['createOwner'];
    }

    /**
    * Sets createOwner
    *
    * @param \DateTime|null $createOwner 创建归属服务名 - cc 云连接 - dc 云专线
    *
    * @return $this
    */
    public function setCreateOwner($createOwner)
    {
        $this->container['createOwner'] = $createOwner;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
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

