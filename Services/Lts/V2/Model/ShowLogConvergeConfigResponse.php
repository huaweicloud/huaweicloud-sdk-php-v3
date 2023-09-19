<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowLogConvergeConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowLogConvergeConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  ID
    * memberAccountId  组织成员账号id
    * memberProjectId  管理员或者委托管理员项目id
    * createTime  创建时间
    * updateTime  更新时间
    * status  creating: 配置创建中   done：配置创建完成
    * organizationId  组织id
    * managementAccountId  管理员或者委托管理员账号id
    * managementProjectId  管理员项目id
    * version  版本
    * logMappingConfig  日志汇聚配置
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'memberAccountId' => 'string',
            'memberProjectId' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'status' => 'string',
            'organizationId' => 'string',
            'managementAccountId' => 'string',
            'managementProjectId' => 'string',
            'version' => 'string',
            'logMappingConfig' => '\HuaweiCloud\SDK\Lts\V2\Model\LogMappingConfig[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  ID
    * memberAccountId  组织成员账号id
    * memberProjectId  管理员或者委托管理员项目id
    * createTime  创建时间
    * updateTime  更新时间
    * status  creating: 配置创建中   done：配置创建完成
    * organizationId  组织id
    * managementAccountId  管理员或者委托管理员账号id
    * managementProjectId  管理员项目id
    * version  版本
    * logMappingConfig  日志汇聚配置
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'memberAccountId' => null,
        'memberProjectId' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'status' => null,
        'organizationId' => null,
        'managementAccountId' => null,
        'managementProjectId' => null,
        'version' => null,
        'logMappingConfig' => null
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
    * id  ID
    * memberAccountId  组织成员账号id
    * memberProjectId  管理员或者委托管理员项目id
    * createTime  创建时间
    * updateTime  更新时间
    * status  creating: 配置创建中   done：配置创建完成
    * organizationId  组织id
    * managementAccountId  管理员或者委托管理员账号id
    * managementProjectId  管理员项目id
    * version  版本
    * logMappingConfig  日志汇聚配置
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'memberAccountId' => 'member_account_id',
            'memberProjectId' => 'member_project_id',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'status' => 'status',
            'organizationId' => 'organization_id',
            'managementAccountId' => 'management_account_id',
            'managementProjectId' => 'management_project_id',
            'version' => 'version',
            'logMappingConfig' => 'log_mapping_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  ID
    * memberAccountId  组织成员账号id
    * memberProjectId  管理员或者委托管理员项目id
    * createTime  创建时间
    * updateTime  更新时间
    * status  creating: 配置创建中   done：配置创建完成
    * organizationId  组织id
    * managementAccountId  管理员或者委托管理员账号id
    * managementProjectId  管理员项目id
    * version  版本
    * logMappingConfig  日志汇聚配置
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'memberAccountId' => 'setMemberAccountId',
            'memberProjectId' => 'setMemberProjectId',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'status' => 'setStatus',
            'organizationId' => 'setOrganizationId',
            'managementAccountId' => 'setManagementAccountId',
            'managementProjectId' => 'setManagementProjectId',
            'version' => 'setVersion',
            'logMappingConfig' => 'setLogMappingConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  ID
    * memberAccountId  组织成员账号id
    * memberProjectId  管理员或者委托管理员项目id
    * createTime  创建时间
    * updateTime  更新时间
    * status  creating: 配置创建中   done：配置创建完成
    * organizationId  组织id
    * managementAccountId  管理员或者委托管理员账号id
    * managementProjectId  管理员项目id
    * version  版本
    * logMappingConfig  日志汇聚配置
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'memberAccountId' => 'getMemberAccountId',
            'memberProjectId' => 'getMemberProjectId',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'status' => 'getStatus',
            'organizationId' => 'getOrganizationId',
            'managementAccountId' => 'getManagementAccountId',
            'managementProjectId' => 'getManagementProjectId',
            'version' => 'getVersion',
            'logMappingConfig' => 'getLogMappingConfig'
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
    const STATUS_DONE = 'done';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATING,
            self::STATUS_DONE,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['memberAccountId'] = isset($data['memberAccountId']) ? $data['memberAccountId'] : null;
        $this->container['memberProjectId'] = isset($data['memberProjectId']) ? $data['memberProjectId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['organizationId'] = isset($data['organizationId']) ? $data['organizationId'] : null;
        $this->container['managementAccountId'] = isset($data['managementAccountId']) ? $data['managementAccountId'] : null;
        $this->container['managementProjectId'] = isset($data['managementProjectId']) ? $data['managementProjectId'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['logMappingConfig'] = isset($data['logMappingConfig']) ? $data['logMappingConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets id
    *  ID
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
    * @param string|null $id ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets memberAccountId
    *  组织成员账号id
    *
    * @return string|null
    */
    public function getMemberAccountId()
    {
        return $this->container['memberAccountId'];
    }

    /**
    * Sets memberAccountId
    *
    * @param string|null $memberAccountId 组织成员账号id
    *
    * @return $this
    */
    public function setMemberAccountId($memberAccountId)
    {
        $this->container['memberAccountId'] = $memberAccountId;
        return $this;
    }

    /**
    * Gets memberProjectId
    *  管理员或者委托管理员项目id
    *
    * @return string|null
    */
    public function getMemberProjectId()
    {
        return $this->container['memberProjectId'];
    }

    /**
    * Sets memberProjectId
    *
    * @param string|null $memberProjectId 管理员或者委托管理员项目id
    *
    * @return $this
    */
    public function setMemberProjectId($memberProjectId)
    {
        $this->container['memberProjectId'] = $memberProjectId;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets status
    *  creating: 配置创建中   done：配置创建完成
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
    * @param string|null $status creating: 配置创建中   done：配置创建完成
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets organizationId
    *  组织id
    *
    * @return string|null
    */
    public function getOrganizationId()
    {
        return $this->container['organizationId'];
    }

    /**
    * Sets organizationId
    *
    * @param string|null $organizationId 组织id
    *
    * @return $this
    */
    public function setOrganizationId($organizationId)
    {
        $this->container['organizationId'] = $organizationId;
        return $this;
    }

    /**
    * Gets managementAccountId
    *  管理员或者委托管理员账号id
    *
    * @return string|null
    */
    public function getManagementAccountId()
    {
        return $this->container['managementAccountId'];
    }

    /**
    * Sets managementAccountId
    *
    * @param string|null $managementAccountId 管理员或者委托管理员账号id
    *
    * @return $this
    */
    public function setManagementAccountId($managementAccountId)
    {
        $this->container['managementAccountId'] = $managementAccountId;
        return $this;
    }

    /**
    * Gets managementProjectId
    *  管理员项目id
    *
    * @return string|null
    */
    public function getManagementProjectId()
    {
        return $this->container['managementProjectId'];
    }

    /**
    * Sets managementProjectId
    *
    * @param string|null $managementProjectId 管理员项目id
    *
    * @return $this
    */
    public function setManagementProjectId($managementProjectId)
    {
        $this->container['managementProjectId'] = $managementProjectId;
        return $this;
    }

    /**
    * Gets version
    *  版本
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets logMappingConfig
    *  日志汇聚配置
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\LogMappingConfig[]|null
    */
    public function getLogMappingConfig()
    {
        return $this->container['logMappingConfig'];
    }

    /**
    * Sets logMappingConfig
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\LogMappingConfig[]|null $logMappingConfig 日志汇聚配置
    *
    * @return $this
    */
    public function setLogMappingConfig($logMappingConfig)
    {
        $this->container['logMappingConfig'] = $logMappingConfig;
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

