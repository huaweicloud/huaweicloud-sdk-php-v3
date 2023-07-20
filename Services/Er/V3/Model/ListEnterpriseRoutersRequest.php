<?php

namespace HuaweiCloud\SDK\Er\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListEnterpriseRoutersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListEnterpriseRoutersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  每页返回的个数。 取值范围：0~2000。
    * marker  上一页最后一条记录的企业路由器实例的id，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * enterpriseProjectId  企业项目ID
    * state  企业路由器实例状态
    * id  根据资源ID查询，可同时查询多个。
    * resourceId  连接对应的资源ID列表
    * ownedBySelf  过滤资源是否属于当前租户；取值为true时，只查属于当前租户的资源，不包括共享资源；为false时，查询当前租户及共享给该租户的资源；
    * sortKey  按关键字排序，默认按照id排序，可选值:id|name|state
    * sortDir  返回结果按照升序或降序排列，默认为asc,降序为desc
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'string',
            'enterpriseProjectId' => 'string[]',
            'state' => 'string[]',
            'id' => 'string[]',
            'resourceId' => 'string[]',
            'ownedBySelf' => 'bool',
            'sortKey' => 'string[]',
            'sortDir' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  每页返回的个数。 取值范围：0~2000。
    * marker  上一页最后一条记录的企业路由器实例的id，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * enterpriseProjectId  企业项目ID
    * state  企业路由器实例状态
    * id  根据资源ID查询，可同时查询多个。
    * resourceId  连接对应的资源ID列表
    * ownedBySelf  过滤资源是否属于当前租户；取值为true时，只查属于当前租户的资源，不包括共享资源；为false时，查询当前租户及共享给该租户的资源；
    * sortKey  按关键字排序，默认按照id排序，可选值:id|name|state
    * sortDir  返回结果按照升序或降序排列，默认为asc,降序为desc
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'marker' => null,
        'enterpriseProjectId' => null,
        'state' => null,
        'id' => null,
        'resourceId' => null,
        'ownedBySelf' => null,
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
    * limit  每页返回的个数。 取值范围：0~2000。
    * marker  上一页最后一条记录的企业路由器实例的id，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * enterpriseProjectId  企业项目ID
    * state  企业路由器实例状态
    * id  根据资源ID查询，可同时查询多个。
    * resourceId  连接对应的资源ID列表
    * ownedBySelf  过滤资源是否属于当前租户；取值为true时，只查属于当前租户的资源，不包括共享资源；为false时，查询当前租户及共享给该租户的资源；
    * sortKey  按关键字排序，默认按照id排序，可选值:id|name|state
    * sortDir  返回结果按照升序或降序排列，默认为asc,降序为desc
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'enterpriseProjectId' => 'enterprise_project_id',
            'state' => 'state',
            'id' => 'id',
            'resourceId' => 'resource_id',
            'ownedBySelf' => 'owned_by_self',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  每页返回的个数。 取值范围：0~2000。
    * marker  上一页最后一条记录的企业路由器实例的id，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * enterpriseProjectId  企业项目ID
    * state  企业路由器实例状态
    * id  根据资源ID查询，可同时查询多个。
    * resourceId  连接对应的资源ID列表
    * ownedBySelf  过滤资源是否属于当前租户；取值为true时，只查属于当前租户的资源，不包括共享资源；为false时，查询当前租户及共享给该租户的资源；
    * sortKey  按关键字排序，默认按照id排序，可选值:id|name|state
    * sortDir  返回结果按照升序或降序排列，默认为asc,降序为desc
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'state' => 'setState',
            'id' => 'setId',
            'resourceId' => 'setResourceId',
            'ownedBySelf' => 'setOwnedBySelf',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  每页返回的个数。 取值范围：0~2000。
    * marker  上一页最后一条记录的企业路由器实例的id，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * enterpriseProjectId  企业项目ID
    * state  企业路由器实例状态
    * id  根据资源ID查询，可同时查询多个。
    * resourceId  连接对应的资源ID列表
    * ownedBySelf  过滤资源是否属于当前租户；取值为true时，只查属于当前租户的资源，不包括共享资源；为false时，查询当前租户及共享给该租户的资源；
    * sortKey  按关键字排序，默认按照id排序，可选值:id|name|state
    * sortDir  返回结果按照升序或降序排列，默认为asc,降序为desc
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'state' => 'getState',
            'id' => 'getId',
            'resourceId' => 'getResourceId',
            'ownedBySelf' => 'getOwnedBySelf',
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['ownedBySelf'] = isset($data['ownedBySelf']) ? $data['ownedBySelf'] : null;
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
    * Gets enterpriseProjectId
    *  企业项目ID
    *
    * @return string[]|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string[]|null $enterpriseProjectId 企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets state
    *  企业路由器实例状态
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
    * @param string[]|null $state 企业路由器实例状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets id
    *  根据资源ID查询，可同时查询多个。
    *
    * @return string[]|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string[]|null $id 根据资源ID查询，可同时查询多个。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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
    * Gets ownedBySelf
    *  过滤资源是否属于当前租户；取值为true时，只查属于当前租户的资源，不包括共享资源；为false时，查询当前租户及共享给该租户的资源；
    *
    * @return bool|null
    */
    public function getOwnedBySelf()
    {
        return $this->container['ownedBySelf'];
    }

    /**
    * Sets ownedBySelf
    *
    * @param bool|null $ownedBySelf 过滤资源是否属于当前租户；取值为true时，只查属于当前租户的资源，不包括共享资源；为false时，查询当前租户及共享给该租户的资源；
    *
    * @return $this
    */
    public function setOwnedBySelf($ownedBySelf)
    {
        $this->container['ownedBySelf'] = $ownedBySelf;
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

