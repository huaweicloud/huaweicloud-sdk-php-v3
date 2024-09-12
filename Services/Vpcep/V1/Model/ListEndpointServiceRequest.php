<?php

namespace HuaweiCloud\SDK\Vpcep\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListEndpointServiceRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListEndpointServiceRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID
    * endpointServiceName  终端节点服务的名称，支持大小写，前后模糊匹配。
    * id  终端节点服务的ID，唯一标识。
    * status  终端节点服务的状态。  - creating：创建中  - available：可连接  - failed：失败  - deleting：删除中
    * sortKey  查询结果中终端节点服务列表的排序字段，取值为：  - create_at：终端节点服务的创建时间  - update_at：终端节点服务的更新时间 默认值为create_at。
    * sortDir  查询结果中终端节点服务列表的排序方式，取值为：  - desc：降序排序  - asc：升序排序 默认值为desc。
    * limit  查询返回的终端节点服务数量限制，即每页返回的终端节点服务的个数。 取值范围：0~1000，取值一般为10，20或者50，默认为10。
    * offset  偏移量。 偏移量为一个大于0小于终端节点服务总个数的整数， 表示从偏移量后面的终端节点服务开始查询。
    * publicBorderGroup  筛选结果中匹配边缘属性的EPS
    * netType  后端类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'endpointServiceName' => 'string',
            'id' => 'string',
            'status' => 'string',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'publicBorderGroup' => 'string',
            'netType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID
    * endpointServiceName  终端节点服务的名称，支持大小写，前后模糊匹配。
    * id  终端节点服务的ID，唯一标识。
    * status  终端节点服务的状态。  - creating：创建中  - available：可连接  - failed：失败  - deleting：删除中
    * sortKey  查询结果中终端节点服务列表的排序字段，取值为：  - create_at：终端节点服务的创建时间  - update_at：终端节点服务的更新时间 默认值为create_at。
    * sortDir  查询结果中终端节点服务列表的排序方式，取值为：  - desc：降序排序  - asc：升序排序 默认值为desc。
    * limit  查询返回的终端节点服务数量限制，即每页返回的终端节点服务的个数。 取值范围：0~1000，取值一般为10，20或者50，默认为10。
    * offset  偏移量。 偏移量为一个大于0小于终端节点服务总个数的整数， 表示从偏移量后面的终端节点服务开始查询。
    * publicBorderGroup  筛选结果中匹配边缘属性的EPS
    * netType  后端类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'endpointServiceName' => null,
        'id' => null,
        'status' => null,
        'sortKey' => null,
        'sortDir' => null,
        'limit' => null,
        'offset' => null,
        'publicBorderGroup' => null,
        'netType' => null
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
    * projectId  项目ID
    * endpointServiceName  终端节点服务的名称，支持大小写，前后模糊匹配。
    * id  终端节点服务的ID，唯一标识。
    * status  终端节点服务的状态。  - creating：创建中  - available：可连接  - failed：失败  - deleting：删除中
    * sortKey  查询结果中终端节点服务列表的排序字段，取值为：  - create_at：终端节点服务的创建时间  - update_at：终端节点服务的更新时间 默认值为create_at。
    * sortDir  查询结果中终端节点服务列表的排序方式，取值为：  - desc：降序排序  - asc：升序排序 默认值为desc。
    * limit  查询返回的终端节点服务数量限制，即每页返回的终端节点服务的个数。 取值范围：0~1000，取值一般为10，20或者50，默认为10。
    * offset  偏移量。 偏移量为一个大于0小于终端节点服务总个数的整数， 表示从偏移量后面的终端节点服务开始查询。
    * publicBorderGroup  筛选结果中匹配边缘属性的EPS
    * netType  后端类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'endpointServiceName' => 'endpoint_service_name',
            'id' => 'id',
            'status' => 'status',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'limit' => 'limit',
            'offset' => 'offset',
            'publicBorderGroup' => 'public_border_group',
            'netType' => 'net_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID
    * endpointServiceName  终端节点服务的名称，支持大小写，前后模糊匹配。
    * id  终端节点服务的ID，唯一标识。
    * status  终端节点服务的状态。  - creating：创建中  - available：可连接  - failed：失败  - deleting：删除中
    * sortKey  查询结果中终端节点服务列表的排序字段，取值为：  - create_at：终端节点服务的创建时间  - update_at：终端节点服务的更新时间 默认值为create_at。
    * sortDir  查询结果中终端节点服务列表的排序方式，取值为：  - desc：降序排序  - asc：升序排序 默认值为desc。
    * limit  查询返回的终端节点服务数量限制，即每页返回的终端节点服务的个数。 取值范围：0~1000，取值一般为10，20或者50，默认为10。
    * offset  偏移量。 偏移量为一个大于0小于终端节点服务总个数的整数， 表示从偏移量后面的终端节点服务开始查询。
    * publicBorderGroup  筛选结果中匹配边缘属性的EPS
    * netType  后端类型
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'endpointServiceName' => 'setEndpointServiceName',
            'id' => 'setId',
            'status' => 'setStatus',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'publicBorderGroup' => 'setPublicBorderGroup',
            'netType' => 'setNetType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID
    * endpointServiceName  终端节点服务的名称，支持大小写，前后模糊匹配。
    * id  终端节点服务的ID，唯一标识。
    * status  终端节点服务的状态。  - creating：创建中  - available：可连接  - failed：失败  - deleting：删除中
    * sortKey  查询结果中终端节点服务列表的排序字段，取值为：  - create_at：终端节点服务的创建时间  - update_at：终端节点服务的更新时间 默认值为create_at。
    * sortDir  查询结果中终端节点服务列表的排序方式，取值为：  - desc：降序排序  - asc：升序排序 默认值为desc。
    * limit  查询返回的终端节点服务数量限制，即每页返回的终端节点服务的个数。 取值范围：0~1000，取值一般为10，20或者50，默认为10。
    * offset  偏移量。 偏移量为一个大于0小于终端节点服务总个数的整数， 表示从偏移量后面的终端节点服务开始查询。
    * publicBorderGroup  筛选结果中匹配边缘属性的EPS
    * netType  后端类型
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'endpointServiceName' => 'getEndpointServiceName',
            'id' => 'getId',
            'status' => 'getStatus',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'publicBorderGroup' => 'getPublicBorderGroup',
            'netType' => 'getNetType'
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
    const STATUS_CREATING = 'creating';
    const STATUS_AVAILABLE = 'available';
    const STATUS_FAILED = 'failed';
    const STATUS_DELETING = 'deleting';
    const SORT_KEY_CREATE_AT = 'create_at';
    const SORT_KEY_UPDATE_AT = 'update_at';
    const SORT_DIR_ASC = 'asc';
    const SORT_DIR_DESC = 'desc';
    const NET_TYPE_VLAN = 'vlan';
    const NET_TYPE_VXLAN = 'vxlan';
    const NET_TYPE_ALL = 'all';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATING,
            self::STATUS_AVAILABLE,
            self::STATUS_FAILED,
            self::STATUS_DELETING,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortKeyAllowableValues()
    {
        return [
            self::SORT_KEY_CREATE_AT,
            self::SORT_KEY_UPDATE_AT,
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
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNetTypeAllowableValues()
    {
        return [
            self::NET_TYPE_VLAN,
            self::NET_TYPE_VXLAN,
            self::NET_TYPE_ALL,
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['endpointServiceName'] = isset($data['endpointServiceName']) ? $data['endpointServiceName'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['publicBorderGroup'] = isset($data['publicBorderGroup']) ? $data['publicBorderGroup'] : null;
        $this->container['netType'] = isset($data['netType']) ? $data['netType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['endpointServiceName']) && (mb_strlen($this->container['endpointServiceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'endpointServiceName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['endpointServiceName']) && (mb_strlen($this->container['endpointServiceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'endpointServiceName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSortKeyAllowableValues();
                if (!is_null($this->container['sortKey']) && !in_array($this->container['sortKey'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortKey', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSortDirAllowableValues();
                if (!is_null($this->container['sortDir']) && !in_array($this->container['sortDir'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortDir', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getNetTypeAllowableValues();
                if (!is_null($this->container['netType']) && !in_array($this->container['netType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'netType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['netType']) && (mb_strlen($this->container['netType']) > 5)) {
                $invalidProperties[] = "invalid value for 'netType', the character length must be smaller than or equal to 5.";
            }
            if (!is_null($this->container['netType']) && (mb_strlen($this->container['netType']) < 1)) {
                $invalidProperties[] = "invalid value for 'netType', the character length must be bigger than or equal to 1.";
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
    * Gets projectId
    *  项目ID
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets endpointServiceName
    *  终端节点服务的名称，支持大小写，前后模糊匹配。
    *
    * @return string|null
    */
    public function getEndpointServiceName()
    {
        return $this->container['endpointServiceName'];
    }

    /**
    * Sets endpointServiceName
    *
    * @param string|null $endpointServiceName 终端节点服务的名称，支持大小写，前后模糊匹配。
    *
    * @return $this
    */
    public function setEndpointServiceName($endpointServiceName)
    {
        $this->container['endpointServiceName'] = $endpointServiceName;
        return $this;
    }

    /**
    * Gets id
    *  终端节点服务的ID，唯一标识。
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
    * @param string|null $id 终端节点服务的ID，唯一标识。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  终端节点服务的状态。  - creating：创建中  - available：可连接  - failed：失败  - deleting：删除中
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
    * @param string|null $status 终端节点服务的状态。  - creating：创建中  - available：可连接  - failed：失败  - deleting：删除中
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets sortKey
    *  查询结果中终端节点服务列表的排序字段，取值为：  - create_at：终端节点服务的创建时间  - update_at：终端节点服务的更新时间 默认值为create_at。
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey 查询结果中终端节点服务列表的排序字段，取值为：  - create_at：终端节点服务的创建时间  - update_at：终端节点服务的更新时间 默认值为create_at。
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
    *  查询结果中终端节点服务列表的排序方式，取值为：  - desc：降序排序  - asc：升序排序 默认值为desc。
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir 查询结果中终端节点服务列表的排序方式，取值为：  - desc：降序排序  - asc：升序排序 默认值为desc。
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets limit
    *  查询返回的终端节点服务数量限制，即每页返回的终端节点服务的个数。 取值范围：0~1000，取值一般为10，20或者50，默认为10。
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
    * @param int|null $limit 查询返回的终端节点服务数量限制，即每页返回的终端节点服务的个数。 取值范围：0~1000，取值一般为10，20或者50，默认为10。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量。 偏移量为一个大于0小于终端节点服务总个数的整数， 表示从偏移量后面的终端节点服务开始查询。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量。 偏移量为一个大于0小于终端节点服务总个数的整数， 表示从偏移量后面的终端节点服务开始查询。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets publicBorderGroup
    *  筛选结果中匹配边缘属性的EPS
    *
    * @return string|null
    */
    public function getPublicBorderGroup()
    {
        return $this->container['publicBorderGroup'];
    }

    /**
    * Sets publicBorderGroup
    *
    * @param string|null $publicBorderGroup 筛选结果中匹配边缘属性的EPS
    *
    * @return $this
    */
    public function setPublicBorderGroup($publicBorderGroup)
    {
        $this->container['publicBorderGroup'] = $publicBorderGroup;
        return $this;
    }

    /**
    * Gets netType
    *  后端类型
    *
    * @return string|null
    */
    public function getNetType()
    {
        return $this->container['netType'];
    }

    /**
    * Sets netType
    *
    * @param string|null $netType 后端类型
    *
    * @return $this
    */
    public function setNetType($netType)
    {
        $this->container['netType'] = $netType;
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

