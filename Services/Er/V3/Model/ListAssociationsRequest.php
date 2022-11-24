<?php

namespace HuaweiCloud\SDK\Er\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAssociationsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAssociationsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * erId  企业路由器实例ID
    * routeTableId  路由表ID
    * limit  每页返回的个数。 取值范围：0~2000。
    * marker  上一页最后一条记录的企业路由器实例的id，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * attachmentId  连接ID
    * resourceType  连接资源类型:vpc|vpn|vgw|peering
    * state  状态
    * sortKey  按关键字排序，默认按照id排序，可选值:id|name|state
    * sortDir  返回结果按照升序或降序排列，默认为asc,降序为desc
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'erId' => 'string',
            'routeTableId' => 'string',
            'limit' => 'int',
            'marker' => 'string',
            'attachmentId' => 'string[]',
            'resourceType' => 'string[]',
            'state' => 'string[]',
            'sortKey' => 'string[]',
            'sortDir' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * erId  企业路由器实例ID
    * routeTableId  路由表ID
    * limit  每页返回的个数。 取值范围：0~2000。
    * marker  上一页最后一条记录的企业路由器实例的id，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * attachmentId  连接ID
    * resourceType  连接资源类型:vpc|vpn|vgw|peering
    * state  状态
    * sortKey  按关键字排序，默认按照id排序，可选值:id|name|state
    * sortDir  返回结果按照升序或降序排列，默认为asc,降序为desc
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'erId' => null,
        'routeTableId' => null,
        'limit' => 'int32',
        'marker' => null,
        'attachmentId' => null,
        'resourceType' => null,
        'state' => null,
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
    * routeTableId  路由表ID
    * limit  每页返回的个数。 取值范围：0~2000。
    * marker  上一页最后一条记录的企业路由器实例的id，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * attachmentId  连接ID
    * resourceType  连接资源类型:vpc|vpn|vgw|peering
    * state  状态
    * sortKey  按关键字排序，默认按照id排序，可选值:id|name|state
    * sortDir  返回结果按照升序或降序排列，默认为asc,降序为desc
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'erId' => 'er_id',
            'routeTableId' => 'route_table_id',
            'limit' => 'limit',
            'marker' => 'marker',
            'attachmentId' => 'attachment_id',
            'resourceType' => 'resource_type',
            'state' => 'state',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * erId  企业路由器实例ID
    * routeTableId  路由表ID
    * limit  每页返回的个数。 取值范围：0~2000。
    * marker  上一页最后一条记录的企业路由器实例的id，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * attachmentId  连接ID
    * resourceType  连接资源类型:vpc|vpn|vgw|peering
    * state  状态
    * sortKey  按关键字排序，默认按照id排序，可选值:id|name|state
    * sortDir  返回结果按照升序或降序排列，默认为asc,降序为desc
    *
    * @var string[]
    */
    protected static $setters = [
            'erId' => 'setErId',
            'routeTableId' => 'setRouteTableId',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'attachmentId' => 'setAttachmentId',
            'resourceType' => 'setResourceType',
            'state' => 'setState',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * erId  企业路由器实例ID
    * routeTableId  路由表ID
    * limit  每页返回的个数。 取值范围：0~2000。
    * marker  上一页最后一条记录的企业路由器实例的id，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * attachmentId  连接ID
    * resourceType  连接资源类型:vpc|vpn|vgw|peering
    * state  状态
    * sortKey  按关键字排序，默认按照id排序，可选值:id|name|state
    * sortDir  返回结果按照升序或降序排列，默认为asc,降序为desc
    *
    * @var string[]
    */
    protected static $getters = [
            'erId' => 'getErId',
            'routeTableId' => 'getRouteTableId',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'attachmentId' => 'getAttachmentId',
            'resourceType' => 'getResourceType',
            'state' => 'getState',
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
    const RESOURCE_TYPE_VPC = 'vpc';
    const RESOURCE_TYPE_VPN = 'vpn';
    const RESOURCE_TYPE_DGW = 'dgw';
    const RESOURCE_TYPE_VGW = 'vgw';
    const RESOURCE_TYPE_PEERING = 'peering';
    const RESOURCE_TYPE_CAN = 'can';
    const RESOURCE_TYPE_GDGW = 'gdgw';
    const STATE_PENDING = 'pending';
    const STATE_AVAILABLE = 'available';
    const STATE_DELETING = 'deleting';
    const STATE_DELETED = 'deleted';
    const STATE_FAILED = 'failed';
    const STATE_MODIFYING = 'modifying';
    const SORT_DIR_ASC = 'asc';
    const SORT_DIR_DESC = 'desc';
    

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
            self::RESOURCE_TYPE_GDGW,
        ];
    }

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
            self::STATE_DELETING,
            self::STATE_DELETED,
            self::STATE_FAILED,
            self::STATE_MODIFYING,
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
        $this->container['routeTableId'] = isset($data['routeTableId']) ? $data['routeTableId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['attachmentId'] = isset($data['attachmentId']) ? $data['attachmentId'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
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
        if ($this->container['routeTableId'] === null) {
            $invalidProperties[] = "'routeTableId' can't be null";
        }
            if (!preg_match("/[0-9a-fA-F]{8}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{12}/", $this->container['routeTableId'])) {
                $invalidProperties[] = "invalid value for 'routeTableId', must be conform to the pattern /[0-9a-fA-F]{8}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{12}/.";
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
    * Gets routeTableId
    *  路由表ID
    *
    * @return string
    */
    public function getRouteTableId()
    {
        return $this->container['routeTableId'];
    }

    /**
    * Sets routeTableId
    *
    * @param string $routeTableId 路由表ID
    *
    * @return $this
    */
    public function setRouteTableId($routeTableId)
    {
        $this->container['routeTableId'] = $routeTableId;
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
    * Gets attachmentId
    *  连接ID
    *
    * @return string[]|null
    */
    public function getAttachmentId()
    {
        return $this->container['attachmentId'];
    }

    /**
    * Sets attachmentId
    *
    * @param string[]|null $attachmentId 连接ID
    *
    * @return $this
    */
    public function setAttachmentId($attachmentId)
    {
        $this->container['attachmentId'] = $attachmentId;
        return $this;
    }

    /**
    * Gets resourceType
    *  连接资源类型:vpc|vpn|vgw|peering
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
    * @param string[]|null $resourceType 连接资源类型:vpc|vpn|vgw|peering
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets state
    *  状态
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
    * @param string[]|null $state 状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
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

