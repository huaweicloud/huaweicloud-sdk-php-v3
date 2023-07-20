<?php

namespace HuaweiCloud\SDK\Er\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAttachmentsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAttachmentsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * erId  企业路由器实例ID
    * limit  每页返回的个数。 取值范围：0~2000。
    * marker  上一页最后一条记录的企业路由器实例的id，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * state  连接状态:pending|available|modifying|deleting|deleted|failed|pending_acceptance|rejected|initiating_request
    * resourceType  - vpc：虚拟私有云 - vpn：vpn网关 - vgw：云专线的虚拟网关 - peering：对等连接，通过云连接CC加载不同区域的企业路由器来创建“对等连接（Peering）”连接 -  -  -  -
    * resourceId  连接对应的资源ID列表
    * sortKey  按关键字排序，默认按照id排序，可选值:id|name|state
    * sortDir  返回结果按照升序或降序排列，默认为asc,降序为desc
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'erId' => 'string',
            'limit' => 'int',
            'marker' => 'string',
            'state' => 'string[]',
            'resourceType' => 'string[]',
            'resourceId' => 'string[]',
            'sortKey' => 'string[]',
            'sortDir' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * erId  企业路由器实例ID
    * limit  每页返回的个数。 取值范围：0~2000。
    * marker  上一页最后一条记录的企业路由器实例的id，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * state  连接状态:pending|available|modifying|deleting|deleted|failed|pending_acceptance|rejected|initiating_request
    * resourceType  - vpc：虚拟私有云 - vpn：vpn网关 - vgw：云专线的虚拟网关 - peering：对等连接，通过云连接CC加载不同区域的企业路由器来创建“对等连接（Peering）”连接 -  -  -  -
    * resourceId  连接对应的资源ID列表
    * sortKey  按关键字排序，默认按照id排序，可选值:id|name|state
    * sortDir  返回结果按照升序或降序排列，默认为asc,降序为desc
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'erId' => null,
        'limit' => 'int32',
        'marker' => null,
        'state' => null,
        'resourceType' => null,
        'resourceId' => null,
        'sortKey' => null,
        'sortDir' => null
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
    * erId  企业路由器实例ID
    * limit  每页返回的个数。 取值范围：0~2000。
    * marker  上一页最后一条记录的企业路由器实例的id，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * state  连接状态:pending|available|modifying|deleting|deleted|failed|pending_acceptance|rejected|initiating_request
    * resourceType  - vpc：虚拟私有云 - vpn：vpn网关 - vgw：云专线的虚拟网关 - peering：对等连接，通过云连接CC加载不同区域的企业路由器来创建“对等连接（Peering）”连接 -  -  -  -
    * resourceId  连接对应的资源ID列表
    * sortKey  按关键字排序，默认按照id排序，可选值:id|name|state
    * sortDir  返回结果按照升序或降序排列，默认为asc,降序为desc
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'erId' => 'er_id',
            'limit' => 'limit',
            'marker' => 'marker',
            'state' => 'state',
            'resourceType' => 'resource_type',
            'resourceId' => 'resource_id',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * erId  企业路由器实例ID
    * limit  每页返回的个数。 取值范围：0~2000。
    * marker  上一页最后一条记录的企业路由器实例的id，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * state  连接状态:pending|available|modifying|deleting|deleted|failed|pending_acceptance|rejected|initiating_request
    * resourceType  - vpc：虚拟私有云 - vpn：vpn网关 - vgw：云专线的虚拟网关 - peering：对等连接，通过云连接CC加载不同区域的企业路由器来创建“对等连接（Peering）”连接 -  -  -  -
    * resourceId  连接对应的资源ID列表
    * sortKey  按关键字排序，默认按照id排序，可选值:id|name|state
    * sortDir  返回结果按照升序或降序排列，默认为asc,降序为desc
    *
    * @var string[]
    */
    protected static $setters = [
            'erId' => 'setErId',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'state' => 'setState',
            'resourceType' => 'setResourceType',
            'resourceId' => 'setResourceId',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * erId  企业路由器实例ID
    * limit  每页返回的个数。 取值范围：0~2000。
    * marker  上一页最后一条记录的企业路由器实例的id，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * state  连接状态:pending|available|modifying|deleting|deleted|failed|pending_acceptance|rejected|initiating_request
    * resourceType  - vpc：虚拟私有云 - vpn：vpn网关 - vgw：云专线的虚拟网关 - peering：对等连接，通过云连接CC加载不同区域的企业路由器来创建“对等连接（Peering）”连接 -  -  -  -
    * resourceId  连接对应的资源ID列表
    * sortKey  按关键字排序，默认按照id排序，可选值:id|name|state
    * sortDir  返回结果按照升序或降序排列，默认为asc,降序为desc
    *
    * @var string[]
    */
    protected static $getters = [
            'erId' => 'getErId',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'state' => 'getState',
            'resourceType' => 'getResourceType',
            'resourceId' => 'getResourceId',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir'
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
    const STATE_PENDING = 'pending';
    const STATE_AVAILABLE = 'available';
    const STATE_MODIFYING = 'modifying';
    const STATE_DELETING = 'deleting';
    const STATE_DELETED = 'deleted';
    const STATE_FAILED = 'failed';
    const STATE_INITIATING_REQUEST = 'initiating_request';
    const STATE_REJECTED = 'rejected';
    const STATE_PENDING_ACCEPTANCE = 'pending_acceptance';
    const RESOURCE_TYPE_VPC = 'vpc';
    const RESOURCE_TYPE_VPN = 'vpn';
    const RESOURCE_TYPE_DGW = 'dgw';
    const RESOURCE_TYPE_VGW = 'vgw';
    const RESOURCE_TYPE_PEERING = 'peering';
    const RESOURCE_TYPE_CAN = 'can';
    const RESOURCE_TYPE_ECN = 'ecn';
    const RESOURCE_TYPE_GDGW = 'gdgw';
    const RESOURCE_TYPE_CONNECT = 'connect';
    const RESOURCE_TYPE_CFW = 'cfw';
    const SORT_DIR_ASC = 'asc';
    const SORT_DIR_DESC = 'desc';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_PENDING,
            self::STATE_AVAILABLE,
            self::STATE_MODIFYING,
            self::STATE_DELETING,
            self::STATE_DELETED,
            self::STATE_FAILED,
            self::STATE_INITIATING_REQUEST,
            self::STATE_REJECTED,
            self::STATE_PENDING_ACCEPTANCE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResourceTypeAllowableValues()
    {
        return [
            self::RESOURCE_TYPE_VPC,
            self::RESOURCE_TYPE_VPN,
            self::RESOURCE_TYPE_DGW,
            self::RESOURCE_TYPE_VGW,
            self::RESOURCE_TYPE_PEERING,
            self::RESOURCE_TYPE_CAN,
            self::RESOURCE_TYPE_ECN,
            self::RESOURCE_TYPE_GDGW,
            self::RESOURCE_TYPE_CONNECT,
            self::RESOURCE_TYPE_CFW,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortDirAllowableValues()
    {
        return [
            self::SORT_DIR_ASC,
            self::SORT_DIR_DESC,
        ];
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
        $this->container['erId'] = isset($data['erId']) ? $data['erId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['erId'] === null) {
            $invalidProperties[] = "'erId' can't be null";
        }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['erId'])) {
                $invalidProperties[] = "invalid value for 'erId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 128)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 1)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 1.";
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
    * Gets erId
    *  企业路由器实例ID
    *
    * @return string
    */
    public function getErId()
    {
        return $this->container['erId'];
    }

    /**
    * Sets erId
    *
    * @param string $erId 企业路由器实例ID
    *
    * @return $this
    */
    public function setErId($erId)
    {
        $this->container['erId'] = $erId;
        return $this;
    }

    /**
    * Gets limit
    *  每页返回的个数。 取值范围：0~2000。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页返回的个数。 取值范围：0~2000。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  上一页最后一条记录的企业路由器实例的id，为空时为查询第一页。 使用说明：必须与limit一起使用。
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 上一页最后一条记录的企业路由器实例的id，为空时为查询第一页。 使用说明：必须与limit一起使用。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets state
    *  连接状态:pending|available|modifying|deleting|deleted|failed|pending_acceptance|rejected|initiating_request
    *
    * @return string[]|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string[]|null $state 连接状态:pending|available|modifying|deleting|deleted|failed|pending_acceptance|rejected|initiating_request
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets resourceType
    *  - vpc：虚拟私有云 - vpn：vpn网关 - vgw：云专线的虚拟网关 - peering：对等连接，通过云连接CC加载不同区域的企业路由器来创建“对等连接（Peering）”连接 -  -  -  -
    *
    * @return string[]|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string[]|null $resourceType - vpc：虚拟私有云 - vpn：vpn网关 - vgw：云专线的虚拟网关 - peering：对等连接，通过云连接CC加载不同区域的企业路由器来创建“对等连接（Peering）”连接 -  -  -  -
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets resourceId
    *  连接对应的资源ID列表
    *
    * @return string[]|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string[]|null $resourceId 连接对应的资源ID列表
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets sortKey
    *  按关键字排序，默认按照id排序，可选值:id|name|state
    *
    * @return string[]|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string[]|null $sortKey 按关键字排序，默认按照id排序，可选值:id|name|state
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  返回结果按照升序或降序排列，默认为asc,降序为desc
    *
    * @return string[]|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string[]|null $sortDir 返回结果按照升序或降序排列，默认为asc,降序为desc
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
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

