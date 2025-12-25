<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DatasetItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DatasetItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alert  是否触发告警
    * allowAlert  是否允许告警
    * allowLts  是否允许长期存储
    * createTime  创建时间，单位为毫秒的时间戳
    * domainId  租户ID，唯一标识
    * enable  启用状态，例如 \"active\" 表示启用
    * projectId  项目ID，唯一标识
    * region  是否是区域级数据
    * regionId  区域ID，表示当前区域
    * success  操作是否成功
    * total  总记录数
    * updateTime  更新时间，单位为毫秒的时间戳
    * workspaceId  工作空间ID，唯一标识
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alert' => 'bool',
            'allowAlert' => 'bool',
            'allowLts' => 'bool',
            'createTime' => 'int',
            'domainId' => 'string',
            'enable' => 'string',
            'projectId' => 'string',
            'region' => 'bool',
            'regionId' => 'string',
            'success' => 'bool',
            'total' => 'int',
            'updateTime' => 'int',
            'workspaceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alert  是否触发告警
    * allowAlert  是否允许告警
    * allowLts  是否允许长期存储
    * createTime  创建时间，单位为毫秒的时间戳
    * domainId  租户ID，唯一标识
    * enable  启用状态，例如 \"active\" 表示启用
    * projectId  项目ID，唯一标识
    * region  是否是区域级数据
    * regionId  区域ID，表示当前区域
    * success  操作是否成功
    * total  总记录数
    * updateTime  更新时间，单位为毫秒的时间戳
    * workspaceId  工作空间ID，唯一标识
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alert' => null,
        'allowAlert' => null,
        'allowLts' => null,
        'createTime' => 'int64',
        'domainId' => null,
        'enable' => null,
        'projectId' => null,
        'region' => null,
        'regionId' => null,
        'success' => null,
        'total' => null,
        'updateTime' => 'int64',
        'workspaceId' => null
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
    * alert  是否触发告警
    * allowAlert  是否允许告警
    * allowLts  是否允许长期存储
    * createTime  创建时间，单位为毫秒的时间戳
    * domainId  租户ID，唯一标识
    * enable  启用状态，例如 \"active\" 表示启用
    * projectId  项目ID，唯一标识
    * region  是否是区域级数据
    * regionId  区域ID，表示当前区域
    * success  操作是否成功
    * total  总记录数
    * updateTime  更新时间，单位为毫秒的时间戳
    * workspaceId  工作空间ID，唯一标识
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alert' => 'alert',
            'allowAlert' => 'allow_alert',
            'allowLts' => 'allow_lts',
            'createTime' => 'create_time',
            'domainId' => 'domain_id',
            'enable' => 'enable',
            'projectId' => 'project_id',
            'region' => 'region',
            'regionId' => 'region_id',
            'success' => 'success',
            'total' => 'total',
            'updateTime' => 'update_time',
            'workspaceId' => 'workspace_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alert  是否触发告警
    * allowAlert  是否允许告警
    * allowLts  是否允许长期存储
    * createTime  创建时间，单位为毫秒的时间戳
    * domainId  租户ID，唯一标识
    * enable  启用状态，例如 \"active\" 表示启用
    * projectId  项目ID，唯一标识
    * region  是否是区域级数据
    * regionId  区域ID，表示当前区域
    * success  操作是否成功
    * total  总记录数
    * updateTime  更新时间，单位为毫秒的时间戳
    * workspaceId  工作空间ID，唯一标识
    *
    * @var string[]
    */
    protected static $setters = [
            'alert' => 'setAlert',
            'allowAlert' => 'setAllowAlert',
            'allowLts' => 'setAllowLts',
            'createTime' => 'setCreateTime',
            'domainId' => 'setDomainId',
            'enable' => 'setEnable',
            'projectId' => 'setProjectId',
            'region' => 'setRegion',
            'regionId' => 'setRegionId',
            'success' => 'setSuccess',
            'total' => 'setTotal',
            'updateTime' => 'setUpdateTime',
            'workspaceId' => 'setWorkspaceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alert  是否触发告警
    * allowAlert  是否允许告警
    * allowLts  是否允许长期存储
    * createTime  创建时间，单位为毫秒的时间戳
    * domainId  租户ID，唯一标识
    * enable  启用状态，例如 \"active\" 表示启用
    * projectId  项目ID，唯一标识
    * region  是否是区域级数据
    * regionId  区域ID，表示当前区域
    * success  操作是否成功
    * total  总记录数
    * updateTime  更新时间，单位为毫秒的时间戳
    * workspaceId  工作空间ID，唯一标识
    *
    * @var string[]
    */
    protected static $getters = [
            'alert' => 'getAlert',
            'allowAlert' => 'getAllowAlert',
            'allowLts' => 'getAllowLts',
            'createTime' => 'getCreateTime',
            'domainId' => 'getDomainId',
            'enable' => 'getEnable',
            'projectId' => 'getProjectId',
            'region' => 'getRegion',
            'regionId' => 'getRegionId',
            'success' => 'getSuccess',
            'total' => 'getTotal',
            'updateTime' => 'getUpdateTime',
            'workspaceId' => 'getWorkspaceId'
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
        $this->container['alert'] = isset($data['alert']) ? $data['alert'] : null;
        $this->container['allowAlert'] = isset($data['allowAlert']) ? $data['allowAlert'] : null;
        $this->container['allowLts'] = isset($data['allowLts']) ? $data['allowLts'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['alert'] === null) {
            $invalidProperties[] = "'alert' can't be null";
        }
        if ($this->container['allowAlert'] === null) {
            $invalidProperties[] = "'allowAlert' can't be null";
        }
        if ($this->container['allowLts'] === null) {
            $invalidProperties[] = "'allowLts' can't be null";
        }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
            if ((mb_strlen($this->container['domainId']) > 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['domainId']) < 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['enable'] === null) {
            $invalidProperties[] = "'enable' can't be null";
        }
            if ((mb_strlen($this->container['enable']) > 128)) {
                $invalidProperties[] = "invalid value for 'enable', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['enable']) < 1)) {
                $invalidProperties[] = "invalid value for 'enable', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
        }
            if ((mb_strlen($this->container['regionId']) > 128)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['regionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['success'] === null) {
            $invalidProperties[] = "'success' can't be null";
        }
        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
        }
        if ($this->container['updateTime'] === null) {
            $invalidProperties[] = "'updateTime' can't be null";
        }
        if ($this->container['workspaceId'] === null) {
            $invalidProperties[] = "'workspaceId' can't be null";
        }
            if ((mb_strlen($this->container['workspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['workspaceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 36.";
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
    * Gets alert
    *  是否触发告警
    *
    * @return bool
    */
    public function getAlert()
    {
        return $this->container['alert'];
    }

    /**
    * Sets alert
    *
    * @param bool $alert 是否触发告警
    *
    * @return $this
    */
    public function setAlert($alert)
    {
        $this->container['alert'] = $alert;
        return $this;
    }

    /**
    * Gets allowAlert
    *  是否允许告警
    *
    * @return bool
    */
    public function getAllowAlert()
    {
        return $this->container['allowAlert'];
    }

    /**
    * Sets allowAlert
    *
    * @param bool $allowAlert 是否允许告警
    *
    * @return $this
    */
    public function setAllowAlert($allowAlert)
    {
        $this->container['allowAlert'] = $allowAlert;
        return $this;
    }

    /**
    * Gets allowLts
    *  是否允许长期存储
    *
    * @return bool
    */
    public function getAllowLts()
    {
        return $this->container['allowLts'];
    }

    /**
    * Sets allowLts
    *
    * @param bool $allowLts 是否允许长期存储
    *
    * @return $this
    */
    public function setAllowLts($allowLts)
    {
        $this->container['allowLts'] = $allowLts;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间，单位为毫秒的时间戳
    *
    * @return int
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int $createTime 创建时间，单位为毫秒的时间戳
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets domainId
    *  租户ID，唯一标识
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId 租户ID，唯一标识
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets enable
    *  启用状态，例如 \"active\" 表示启用
    *
    * @return string
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param string $enable 启用状态，例如 \"active\" 表示启用
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID，唯一标识
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
    * @param string $projectId 项目ID，唯一标识
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets region
    *  是否是区域级数据
    *
    * @return bool
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param bool $region 是否是区域级数据
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets regionId
    *  区域ID，表示当前区域
    *
    * @return string
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string $regionId 区域ID，表示当前区域
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets success
    *  操作是否成功
    *
    * @return bool
    */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
    * Sets success
    *
    * @param bool $success 操作是否成功
    *
    * @return $this
    */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;
        return $this;
    }

    /**
    * Gets total
    *  总记录数
    *
    * @return int
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int $total 总记录数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间，单位为毫秒的时间戳
    *
    * @return int
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int $updateTime 更新时间，单位为毫秒的时间戳
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间ID，唯一标识
    *
    * @return string
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string $workspaceId 工作空间ID，唯一标识
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
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

