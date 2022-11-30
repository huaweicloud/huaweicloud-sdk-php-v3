<?php

namespace HuaweiCloud\SDK\Vpcep\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListServicePermissionsDetailsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListServicePermissionsDetailsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID。
    * vpcEndpointServiceId  终端节点服务的ID。
    * permission  权限帐号ID，格式为“iam:domain::domain_id”。 其中“domain_id”为授权用户的帐号ID， 例如“iam:domain::6e9dfd51d1124e8d8498dce894923a0d”，支持模糊搜索。
    * limit  查询返回终端节点服务的白名单数量限制，即每页返回的个数。 取值范围：0~500，取值一般为10，20或者50，默认为10。
    * offset  偏移量。 偏移量为一个大于0小于终端节点服务总个数的整数， 表示从偏移量后面的终端节点服务开始查询。
    * sortKey  查询结果中白名单列表的排序字段，取值为create_at，表示白名单的添加时间。
    * sortDir  查询结果中白名单列表的排序方式，取值为： ● desc：降序排序 ● asc：升序排序 默认值为desc。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'vpcEndpointServiceId' => 'string',
            'permission' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'sortKey' => 'string',
            'sortDir' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID。
    * vpcEndpointServiceId  终端节点服务的ID。
    * permission  权限帐号ID，格式为“iam:domain::domain_id”。 其中“domain_id”为授权用户的帐号ID， 例如“iam:domain::6e9dfd51d1124e8d8498dce894923a0d”，支持模糊搜索。
    * limit  查询返回终端节点服务的白名单数量限制，即每页返回的个数。 取值范围：0~500，取值一般为10，20或者50，默认为10。
    * offset  偏移量。 偏移量为一个大于0小于终端节点服务总个数的整数， 表示从偏移量后面的终端节点服务开始查询。
    * sortKey  查询结果中白名单列表的排序字段，取值为create_at，表示白名单的添加时间。
    * sortDir  查询结果中白名单列表的排序方式，取值为： ● desc：降序排序 ● asc：升序排序 默认值为desc。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'vpcEndpointServiceId' => null,
        'permission' => null,
        'limit' => null,
        'offset' => null,
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
    * projectId  项目ID。
    * vpcEndpointServiceId  终端节点服务的ID。
    * permission  权限帐号ID，格式为“iam:domain::domain_id”。 其中“domain_id”为授权用户的帐号ID， 例如“iam:domain::6e9dfd51d1124e8d8498dce894923a0d”，支持模糊搜索。
    * limit  查询返回终端节点服务的白名单数量限制，即每页返回的个数。 取值范围：0~500，取值一般为10，20或者50，默认为10。
    * offset  偏移量。 偏移量为一个大于0小于终端节点服务总个数的整数， 表示从偏移量后面的终端节点服务开始查询。
    * sortKey  查询结果中白名单列表的排序字段，取值为create_at，表示白名单的添加时间。
    * sortDir  查询结果中白名单列表的排序方式，取值为： ● desc：降序排序 ● asc：升序排序 默认值为desc。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'vpcEndpointServiceId' => 'vpc_endpoint_service_id',
            'permission' => 'permission',
            'limit' => 'limit',
            'offset' => 'offset',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID。
    * vpcEndpointServiceId  终端节点服务的ID。
    * permission  权限帐号ID，格式为“iam:domain::domain_id”。 其中“domain_id”为授权用户的帐号ID， 例如“iam:domain::6e9dfd51d1124e8d8498dce894923a0d”，支持模糊搜索。
    * limit  查询返回终端节点服务的白名单数量限制，即每页返回的个数。 取值范围：0~500，取值一般为10，20或者50，默认为10。
    * offset  偏移量。 偏移量为一个大于0小于终端节点服务总个数的整数， 表示从偏移量后面的终端节点服务开始查询。
    * sortKey  查询结果中白名单列表的排序字段，取值为create_at，表示白名单的添加时间。
    * sortDir  查询结果中白名单列表的排序方式，取值为： ● desc：降序排序 ● asc：升序排序 默认值为desc。
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'vpcEndpointServiceId' => 'setVpcEndpointServiceId',
            'permission' => 'setPermission',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID。
    * vpcEndpointServiceId  终端节点服务的ID。
    * permission  权限帐号ID，格式为“iam:domain::domain_id”。 其中“domain_id”为授权用户的帐号ID， 例如“iam:domain::6e9dfd51d1124e8d8498dce894923a0d”，支持模糊搜索。
    * limit  查询返回终端节点服务的白名单数量限制，即每页返回的个数。 取值范围：0~500，取值一般为10，20或者50，默认为10。
    * offset  偏移量。 偏移量为一个大于0小于终端节点服务总个数的整数， 表示从偏移量后面的终端节点服务开始查询。
    * sortKey  查询结果中白名单列表的排序字段，取值为create_at，表示白名单的添加时间。
    * sortDir  查询结果中白名单列表的排序方式，取值为： ● desc：降序排序 ● asc：升序排序 默认值为desc。
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'vpcEndpointServiceId' => 'getVpcEndpointServiceId',
            'permission' => 'getPermission',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
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
    const SORT_KEY_CREATE_AT = 'create_at';
    const SORT_KEY_UPDATE_AT = 'update_at';
    const SORT_DIR_ASC = 'asc';
    const SORT_DIR_DESC = 'desc';
    

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
        $this->container['vpcEndpointServiceId'] = isset($data['vpcEndpointServiceId']) ? $data['vpcEndpointServiceId'] : null;
        $this->container['permission'] = isset($data['permission']) ? $data['permission'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 10;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : 'create_at';
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : 'desc';
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
        if ($this->container['vpcEndpointServiceId'] === null) {
            $invalidProperties[] = "'vpcEndpointServiceId' can't be null";
        }
            if ((mb_strlen($this->container['vpcEndpointServiceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'vpcEndpointServiceId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['vpcEndpointServiceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'vpcEndpointServiceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['permission']) && (mb_strlen($this->container['permission']) > 1000)) {
                $invalidProperties[] = "invalid value for 'permission', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['permission']) && (mb_strlen($this->container['permission']) < 1)) {
                $invalidProperties[] = "invalid value for 'permission', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 500)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
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
    *  项目ID。
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
    * @param string $projectId 项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets vpcEndpointServiceId
    *  终端节点服务的ID。
    *
    * @return string
    */
    public function getVpcEndpointServiceId()
    {
        return $this->container['vpcEndpointServiceId'];
    }

    /**
    * Sets vpcEndpointServiceId
    *
    * @param string $vpcEndpointServiceId 终端节点服务的ID。
    *
    * @return $this
    */
    public function setVpcEndpointServiceId($vpcEndpointServiceId)
    {
        $this->container['vpcEndpointServiceId'] = $vpcEndpointServiceId;
        return $this;
    }

    /**
    * Gets permission
    *  权限帐号ID，格式为“iam:domain::domain_id”。 其中“domain_id”为授权用户的帐号ID， 例如“iam:domain::6e9dfd51d1124e8d8498dce894923a0d”，支持模糊搜索。
    *
    * @return string|null
    */
    public function getPermission()
    {
        return $this->container['permission'];
    }

    /**
    * Sets permission
    *
    * @param string|null $permission 权限帐号ID，格式为“iam:domain::domain_id”。 其中“domain_id”为授权用户的帐号ID， 例如“iam:domain::6e9dfd51d1124e8d8498dce894923a0d”，支持模糊搜索。
    *
    * @return $this
    */
    public function setPermission($permission)
    {
        $this->container['permission'] = $permission;
        return $this;
    }

    /**
    * Gets limit
    *  查询返回终端节点服务的白名单数量限制，即每页返回的个数。 取值范围：0~500，取值一般为10，20或者50，默认为10。
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
    * @param int|null $limit 查询返回终端节点服务的白名单数量限制，即每页返回的个数。 取值范围：0~500，取值一般为10，20或者50，默认为10。
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
    * Gets sortKey
    *  查询结果中白名单列表的排序字段，取值为create_at，表示白名单的添加时间。
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
    * @param string|null $sortKey 查询结果中白名单列表的排序字段，取值为create_at，表示白名单的添加时间。
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
    *  查询结果中白名单列表的排序方式，取值为： ● desc：降序排序 ● asc：升序排序 默认值为desc。
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
    * @param string|null $sortDir 查询结果中白名单列表的排序方式，取值为： ● desc：降序排序 ● asc：升序排序 默认值为desc。
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

