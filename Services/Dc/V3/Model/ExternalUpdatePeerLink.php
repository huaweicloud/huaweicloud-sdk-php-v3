<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExternalUpdatePeerLink implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExternalUpdatePeerLink';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * tenantId  tenantId
    * name  name
    * description  description
    * globalDcGatewayId  globalDcGatewayId
    * bandwidthInfo  bandwidthInfo
    * peerSite  peerSite
    * status  status
    * reason  reason
    * createdTime  createdTime
    * updatedTime  updatedTime
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'tenantId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'globalDcGatewayId' => 'string',
            'bandwidthInfo' => '\HuaweiCloud\SDK\Dc\V3\Model\BandwidthInfoExternal',
            'peerSite' => '\HuaweiCloud\SDK\Dc\V3\Model\PeerSiteExternal',
            'status' => 'string',
            'reason' => 'string',
            'createdTime' => '\DateTime',
            'updatedTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * tenantId  tenantId
    * name  name
    * description  description
    * globalDcGatewayId  globalDcGatewayId
    * bandwidthInfo  bandwidthInfo
    * peerSite  peerSite
    * status  status
    * reason  reason
    * createdTime  createdTime
    * updatedTime  updatedTime
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
        'reason' => null,
        'createdTime' => 'date-time',
        'updatedTime' => 'date-time'
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
    * id  id
    * tenantId  tenantId
    * name  name
    * description  description
    * globalDcGatewayId  globalDcGatewayId
    * bandwidthInfo  bandwidthInfo
    * peerSite  peerSite
    * status  status
    * reason  reason
    * createdTime  createdTime
    * updatedTime  updatedTime
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
            'reason' => 'reason',
            'createdTime' => 'created_time',
            'updatedTime' => 'updated_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * tenantId  tenantId
    * name  name
    * description  description
    * globalDcGatewayId  globalDcGatewayId
    * bandwidthInfo  bandwidthInfo
    * peerSite  peerSite
    * status  status
    * reason  reason
    * createdTime  createdTime
    * updatedTime  updatedTime
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
            'reason' => 'setReason',
            'createdTime' => 'setCreatedTime',
            'updatedTime' => 'setUpdatedTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * tenantId  tenantId
    * name  name
    * description  description
    * globalDcGatewayId  globalDcGatewayId
    * bandwidthInfo  bandwidthInfo
    * peerSite  peerSite
    * status  status
    * reason  reason
    * createdTime  createdTime
    * updatedTime  updatedTime
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
            'reason' => 'getReason',
            'createdTime' => 'getCreatedTime',
            'updatedTime' => 'getUpdatedTime'
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
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['updatedTime'] = isset($data['updatedTime']) ? $data['updatedTime'] : null;
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
    * Gets id
    *  id
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
    * @param string|null $id id
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
    *  tenantId
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
    * @param string|null $tenantId tenantId
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
    *  name
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
    * @param string|null $name name
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
    *  description
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
    * @param string|null $description description
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
    *  globalDcGatewayId
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
    * @param string|null $globalDcGatewayId globalDcGatewayId
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
    * @return \HuaweiCloud\SDK\Dc\V3\Model\BandwidthInfoExternal|null
    */
    public function getBandwidthInfo()
    {
        return $this->container['bandwidthInfo'];
    }

    /**
    * Sets bandwidthInfo
    *
    * @param \HuaweiCloud\SDK\Dc\V3\Model\BandwidthInfoExternal|null $bandwidthInfo bandwidthInfo
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
    * @return \HuaweiCloud\SDK\Dc\V3\Model\PeerSiteExternal|null
    */
    public function getPeerSite()
    {
        return $this->container['peerSite'];
    }

    /**
    * Sets peerSite
    *
    * @param \HuaweiCloud\SDK\Dc\V3\Model\PeerSiteExternal|null $peerSite peerSite
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
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets reason
    *  reason
    *
    * @return string|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string|null $reason reason
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets createdTime
    *  createdTime
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
    * @param \DateTime|null $createdTime createdTime
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
    *  updatedTime
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
    * @param \DateTime|null $updatedTime updatedTime
    *
    * @return $this
    */
    public function setUpdatedTime($updatedTime)
    {
        $this->container['updatedTime'] = $updatedTime;
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

