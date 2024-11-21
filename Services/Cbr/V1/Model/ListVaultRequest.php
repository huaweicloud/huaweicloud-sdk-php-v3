<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListVaultRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListVaultRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  每页显示条目数，正整数
    * name  存储库名称
    * offset  偏移值,正整数
    * cloudType  云类型
    * protectType  保护类型
    * objectType  对象类型：云服务器（server），云硬盘（disk），文件系统（turbo），云桌面（workspace），VMware（vmware），关系型数据库（rds），文件（file）。
    * enterpriseProjectId  企业项目id或all_granted_eps，all_granted_eps表示查询用户有权限的所有企业项目id
    * id  存储库ID
    * policyId  策略ID
    * status  状态
    * resourceIds  资源id，支持多资源，以英文逗号分隔
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'name' => 'string',
            'offset' => 'int',
            'cloudType' => 'string',
            'protectType' => 'string',
            'objectType' => 'string',
            'enterpriseProjectId' => 'string',
            'id' => 'string[]',
            'policyId' => 'string',
            'status' => 'string',
            'resourceIds' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  每页显示条目数，正整数
    * name  存储库名称
    * offset  偏移值,正整数
    * cloudType  云类型
    * protectType  保护类型
    * objectType  对象类型：云服务器（server），云硬盘（disk），文件系统（turbo），云桌面（workspace），VMware（vmware），关系型数据库（rds），文件（file）。
    * enterpriseProjectId  企业项目id或all_granted_eps，all_granted_eps表示查询用户有权限的所有企业项目id
    * id  存储库ID
    * policyId  策略ID
    * status  状态
    * resourceIds  资源id，支持多资源，以英文逗号分隔
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'name' => null,
        'offset' => 'int32',
        'cloudType' => null,
        'protectType' => null,
        'objectType' => null,
        'enterpriseProjectId' => null,
        'id' => null,
        'policyId' => null,
        'status' => null,
        'resourceIds' => null
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
    * limit  每页显示条目数，正整数
    * name  存储库名称
    * offset  偏移值,正整数
    * cloudType  云类型
    * protectType  保护类型
    * objectType  对象类型：云服务器（server），云硬盘（disk），文件系统（turbo），云桌面（workspace），VMware（vmware），关系型数据库（rds），文件（file）。
    * enterpriseProjectId  企业项目id或all_granted_eps，all_granted_eps表示查询用户有权限的所有企业项目id
    * id  存储库ID
    * policyId  策略ID
    * status  状态
    * resourceIds  资源id，支持多资源，以英文逗号分隔
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'name' => 'name',
            'offset' => 'offset',
            'cloudType' => 'cloud_type',
            'protectType' => 'protect_type',
            'objectType' => 'object_type',
            'enterpriseProjectId' => 'enterprise_project_id',
            'id' => 'id',
            'policyId' => 'policy_id',
            'status' => 'status',
            'resourceIds' => 'resource_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  每页显示条目数，正整数
    * name  存储库名称
    * offset  偏移值,正整数
    * cloudType  云类型
    * protectType  保护类型
    * objectType  对象类型：云服务器（server），云硬盘（disk），文件系统（turbo），云桌面（workspace），VMware（vmware），关系型数据库（rds），文件（file）。
    * enterpriseProjectId  企业项目id或all_granted_eps，all_granted_eps表示查询用户有权限的所有企业项目id
    * id  存储库ID
    * policyId  策略ID
    * status  状态
    * resourceIds  资源id，支持多资源，以英文逗号分隔
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'name' => 'setName',
            'offset' => 'setOffset',
            'cloudType' => 'setCloudType',
            'protectType' => 'setProtectType',
            'objectType' => 'setObjectType',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'id' => 'setId',
            'policyId' => 'setPolicyId',
            'status' => 'setStatus',
            'resourceIds' => 'setResourceIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  每页显示条目数，正整数
    * name  存储库名称
    * offset  偏移值,正整数
    * cloudType  云类型
    * protectType  保护类型
    * objectType  对象类型：云服务器（server），云硬盘（disk），文件系统（turbo），云桌面（workspace），VMware（vmware），关系型数据库（rds），文件（file）。
    * enterpriseProjectId  企业项目id或all_granted_eps，all_granted_eps表示查询用户有权限的所有企业项目id
    * id  存储库ID
    * policyId  策略ID
    * status  状态
    * resourceIds  资源id，支持多资源，以英文逗号分隔
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'name' => 'getName',
            'offset' => 'getOffset',
            'cloudType' => 'getCloudType',
            'protectType' => 'getProtectType',
            'objectType' => 'getObjectType',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'id' => 'getId',
            'policyId' => 'getPolicyId',
            'status' => 'getStatus',
            'resourceIds' => 'getResourceIds'
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
    const CLOUD_TYPE__PUBLIC = 'public';
    const CLOUD_TYPE_HYBRID = 'hybrid';
    const PROTECT_TYPE_BACKUP = 'backup';
    const PROTECT_TYPE_REPLICATION = 'replication';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCloudTypeAllowableValues()
    {
        return [
            self::CLOUD_TYPE__PUBLIC,
            self::CLOUD_TYPE_HYBRID,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtectTypeAllowableValues()
    {
        return [
            self::PROTECT_TYPE_BACKUP,
            self::PROTECT_TYPE_REPLICATION,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['cloudType'] = isset($data['cloudType']) ? $data['cloudType'] : null;
        $this->container['protectType'] = isset($data['protectType']) ? $data['protectType'] : null;
        $this->container['objectType'] = isset($data['objectType']) ? $data['objectType'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['resourceIds'] = isset($data['resourceIds']) ? $data['resourceIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[\\u4E00-\\u9FA5\\uf900-\\ufa2da-zA-Z0-9_\\-]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[\\u4E00-\\u9FA5\\uf900-\\ufa2da-zA-Z0-9_\\-]*$/.";
            }
            $allowedValues = $this->getCloudTypeAllowableValues();
                if (!is_null($this->container['cloudType']) && !in_array($this->container['cloudType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'cloudType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getProtectTypeAllowableValues();
                if (!is_null($this->container['protectType']) && !in_array($this->container['protectType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protectType', must be one of '%s'",
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
    * Gets limit
    *  每页显示条目数，正整数
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
    * @param int|null $limit 每页显示条目数，正整数
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets name
    *  存储库名称
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
    * @param string|null $name 存储库名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets offset
    *  偏移值,正整数
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
    * @param int|null $offset 偏移值,正整数
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets cloudType
    *  云类型
    *
    * @return string|null
    */
    public function getCloudType()
    {
        return $this->container['cloudType'];
    }

    /**
    * Sets cloudType
    *
    * @param string|null $cloudType 云类型
    *
    * @return $this
    */
    public function setCloudType($cloudType)
    {
        $this->container['cloudType'] = $cloudType;
        return $this;
    }

    /**
    * Gets protectType
    *  保护类型
    *
    * @return string|null
    */
    public function getProtectType()
    {
        return $this->container['protectType'];
    }

    /**
    * Sets protectType
    *
    * @param string|null $protectType 保护类型
    *
    * @return $this
    */
    public function setProtectType($protectType)
    {
        $this->container['protectType'] = $protectType;
        return $this;
    }

    /**
    * Gets objectType
    *  对象类型：云服务器（server），云硬盘（disk），文件系统（turbo），云桌面（workspace），VMware（vmware），关系型数据库（rds），文件（file）。
    *
    * @return string|null
    */
    public function getObjectType()
    {
        return $this->container['objectType'];
    }

    /**
    * Sets objectType
    *
    * @param string|null $objectType 对象类型：云服务器（server），云硬盘（disk），文件系统（turbo），云桌面（workspace），VMware（vmware），关系型数据库（rds），文件（file）。
    *
    * @return $this
    */
    public function setObjectType($objectType)
    {
        $this->container['objectType'] = $objectType;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id或all_granted_eps，all_granted_eps表示查询用户有权限的所有企业项目id
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目id或all_granted_eps，all_granted_eps表示查询用户有权限的所有企业项目id
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets id
    *  存储库ID
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
    * @param string[]|null $id 存储库ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets policyId
    *  策略ID
    *
    * @return string|null
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string|null $policyId 策略ID
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets status
    *  状态
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
    * @param string|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets resourceIds
    *  资源id，支持多资源，以英文逗号分隔
    *
    * @return string|null
    */
    public function getResourceIds()
    {
        return $this->container['resourceIds'];
    }

    /**
    * Sets resourceIds
    *
    * @param string|null $resourceIds 资源id，支持多资源，以英文逗号分隔
    *
    * @return $this
    */
    public function setResourceIds($resourceIds)
    {
        $this->container['resourceIds'] = $resourceIds;
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

