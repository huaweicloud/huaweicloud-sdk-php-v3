<?php

namespace HuaweiCloud\SDK\Aom\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Job implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Job';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  作业id。
    * name  作业名称。
    * createTime  实体的创建时间戳。
    * createBy  创建人。
    * updateTime  实体的最后更新时间戳。 注意：执行创建/修改/删除操作时，update_time将更新。
    * updateBy  修改人。
    * description  作业描述，最大长度为1000。
    * enterpriseProjectId  企业项目id。
    * projectId  租户从IAM申请到的projectid，一般为32位字符串。
    * steps  作业步骤。
    * parameters  全局参数。
    * rateControl  rateControl
    * approveInfo  approveInfo
    * isLatestVersion  是否为最新版本的作业
    * versionNumber  版本号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'createTime' => 'int',
            'createBy' => 'string',
            'updateTime' => 'int',
            'updateBy' => 'string',
            'description' => 'string',
            'enterpriseProjectId' => 'string',
            'projectId' => 'string',
            'steps' => '\HuaweiCloud\SDK\Aom\V1\Model\Step[]',
            'parameters' => '\HuaweiCloud\SDK\Aom\V1\Model\Parameter[]',
            'rateControl' => '\HuaweiCloud\SDK\Aom\V1\Model\RateControl',
            'approveInfo' => '\HuaweiCloud\SDK\Aom\V1\Model\ApproveInfo',
            'isLatestVersion' => 'bool',
            'versionNumber' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  作业id。
    * name  作业名称。
    * createTime  实体的创建时间戳。
    * createBy  创建人。
    * updateTime  实体的最后更新时间戳。 注意：执行创建/修改/删除操作时，update_time将更新。
    * updateBy  修改人。
    * description  作业描述，最大长度为1000。
    * enterpriseProjectId  企业项目id。
    * projectId  租户从IAM申请到的projectid，一般为32位字符串。
    * steps  作业步骤。
    * parameters  全局参数。
    * rateControl  rateControl
    * approveInfo  approveInfo
    * isLatestVersion  是否为最新版本的作业
    * versionNumber  版本号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'createTime' => 'int64',
        'createBy' => null,
        'updateTime' => 'int64',
        'updateBy' => null,
        'description' => null,
        'enterpriseProjectId' => null,
        'projectId' => null,
        'steps' => null,
        'parameters' => null,
        'rateControl' => null,
        'approveInfo' => null,
        'isLatestVersion' => null,
        'versionNumber' => 'int32'
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
    * id  作业id。
    * name  作业名称。
    * createTime  实体的创建时间戳。
    * createBy  创建人。
    * updateTime  实体的最后更新时间戳。 注意：执行创建/修改/删除操作时，update_time将更新。
    * updateBy  修改人。
    * description  作业描述，最大长度为1000。
    * enterpriseProjectId  企业项目id。
    * projectId  租户从IAM申请到的projectid，一般为32位字符串。
    * steps  作业步骤。
    * parameters  全局参数。
    * rateControl  rateControl
    * approveInfo  approveInfo
    * isLatestVersion  是否为最新版本的作业
    * versionNumber  版本号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'createTime' => 'create_time',
            'createBy' => 'create_by',
            'updateTime' => 'update_time',
            'updateBy' => 'update_by',
            'description' => 'description',
            'enterpriseProjectId' => 'enterprise_project_id',
            'projectId' => 'project_id',
            'steps' => 'steps',
            'parameters' => 'parameters',
            'rateControl' => 'rate_control',
            'approveInfo' => 'approve_info',
            'isLatestVersion' => 'is_latest_version',
            'versionNumber' => 'version_number'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  作业id。
    * name  作业名称。
    * createTime  实体的创建时间戳。
    * createBy  创建人。
    * updateTime  实体的最后更新时间戳。 注意：执行创建/修改/删除操作时，update_time将更新。
    * updateBy  修改人。
    * description  作业描述，最大长度为1000。
    * enterpriseProjectId  企业项目id。
    * projectId  租户从IAM申请到的projectid，一般为32位字符串。
    * steps  作业步骤。
    * parameters  全局参数。
    * rateControl  rateControl
    * approveInfo  approveInfo
    * isLatestVersion  是否为最新版本的作业
    * versionNumber  版本号
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'createTime' => 'setCreateTime',
            'createBy' => 'setCreateBy',
            'updateTime' => 'setUpdateTime',
            'updateBy' => 'setUpdateBy',
            'description' => 'setDescription',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'projectId' => 'setProjectId',
            'steps' => 'setSteps',
            'parameters' => 'setParameters',
            'rateControl' => 'setRateControl',
            'approveInfo' => 'setApproveInfo',
            'isLatestVersion' => 'setIsLatestVersion',
            'versionNumber' => 'setVersionNumber'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  作业id。
    * name  作业名称。
    * createTime  实体的创建时间戳。
    * createBy  创建人。
    * updateTime  实体的最后更新时间戳。 注意：执行创建/修改/删除操作时，update_time将更新。
    * updateBy  修改人。
    * description  作业描述，最大长度为1000。
    * enterpriseProjectId  企业项目id。
    * projectId  租户从IAM申请到的projectid，一般为32位字符串。
    * steps  作业步骤。
    * parameters  全局参数。
    * rateControl  rateControl
    * approveInfo  approveInfo
    * isLatestVersion  是否为最新版本的作业
    * versionNumber  版本号
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'createTime' => 'getCreateTime',
            'createBy' => 'getCreateBy',
            'updateTime' => 'getUpdateTime',
            'updateBy' => 'getUpdateBy',
            'description' => 'getDescription',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'projectId' => 'getProjectId',
            'steps' => 'getSteps',
            'parameters' => 'getParameters',
            'rateControl' => 'getRateControl',
            'approveInfo' => 'getApproveInfo',
            'isLatestVersion' => 'getIsLatestVersion',
            'versionNumber' => 'getVersionNumber'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['updateBy'] = isset($data['updateBy']) ? $data['updateBy'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['steps'] = isset($data['steps']) ? $data['steps'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['rateControl'] = isset($data['rateControl']) ? $data['rateControl'] : null;
        $this->container['approveInfo'] = isset($data['approveInfo']) ? $data['approveInfo'] : null;
        $this->container['isLatestVersion'] = isset($data['isLatestVersion']) ? $data['isLatestVersion'] : null;
        $this->container['versionNumber'] = isset($data['versionNumber']) ? $data['versionNumber'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) > 64)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateBy']) && (mb_strlen($this->container['updateBy']) > 64)) {
                $invalidProperties[] = "invalid value for 'updateBy', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['updateBy']) && (mb_strlen($this->container['updateBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'updateBy', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
            if ((mb_strlen($this->container['enterpriseProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
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
        if ($this->container['steps'] === null) {
            $invalidProperties[] = "'steps' can't be null";
        }
        if ($this->container['parameters'] === null) {
            $invalidProperties[] = "'parameters' can't be null";
        }
        if ($this->container['rateControl'] === null) {
            $invalidProperties[] = "'rateControl' can't be null";
        }
        if ($this->container['approveInfo'] === null) {
            $invalidProperties[] = "'approveInfo' can't be null";
        }
            if (!is_null($this->container['versionNumber']) && ($this->container['versionNumber'] > 100)) {
                $invalidProperties[] = "invalid value for 'versionNumber', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['versionNumber']) && ($this->container['versionNumber'] < 1)) {
                $invalidProperties[] = "invalid value for 'versionNumber', must be bigger than or equal to 1.";
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
    *  作业id。
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
    * @param string|null $id 作业id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  作业名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 作业名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets createTime
    *  实体的创建时间戳。
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
    * @param int|null $createTime 实体的创建时间戳。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets createBy
    *  创建人。
    *
    * @return string|null
    */
    public function getCreateBy()
    {
        return $this->container['createBy'];
    }

    /**
    * Sets createBy
    *
    * @param string|null $createBy 创建人。
    *
    * @return $this
    */
    public function setCreateBy($createBy)
    {
        $this->container['createBy'] = $createBy;
        return $this;
    }

    /**
    * Gets updateTime
    *  实体的最后更新时间戳。 注意：执行创建/修改/删除操作时，update_time将更新。
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
    * @param int|null $updateTime 实体的最后更新时间戳。 注意：执行创建/修改/删除操作时，update_time将更新。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets updateBy
    *  修改人。
    *
    * @return string|null
    */
    public function getUpdateBy()
    {
        return $this->container['updateBy'];
    }

    /**
    * Sets updateBy
    *
    * @param string|null $updateBy 修改人。
    *
    * @return $this
    */
    public function setUpdateBy($updateBy)
    {
        $this->container['updateBy'] = $updateBy;
        return $this;
    }

    /**
    * Gets description
    *  作业描述，最大长度为1000。
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
    * @param string|null $description 作业描述，最大长度为1000。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id。
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId 企业项目id。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets projectId
    *  租户从IAM申请到的projectid，一般为32位字符串。
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
    * @param string $projectId 租户从IAM申请到的projectid，一般为32位字符串。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets steps
    *  作业步骤。
    *
    * @return \HuaweiCloud\SDK\Aom\V1\Model\Step[]
    */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
    * Sets steps
    *
    * @param \HuaweiCloud\SDK\Aom\V1\Model\Step[] $steps 作业步骤。
    *
    * @return $this
    */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;
        return $this;
    }

    /**
    * Gets parameters
    *  全局参数。
    *
    * @return \HuaweiCloud\SDK\Aom\V1\Model\Parameter[]
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param \HuaweiCloud\SDK\Aom\V1\Model\Parameter[] $parameters 全局参数。
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets rateControl
    *  rateControl
    *
    * @return \HuaweiCloud\SDK\Aom\V1\Model\RateControl
    */
    public function getRateControl()
    {
        return $this->container['rateControl'];
    }

    /**
    * Sets rateControl
    *
    * @param \HuaweiCloud\SDK\Aom\V1\Model\RateControl $rateControl rateControl
    *
    * @return $this
    */
    public function setRateControl($rateControl)
    {
        $this->container['rateControl'] = $rateControl;
        return $this;
    }

    /**
    * Gets approveInfo
    *  approveInfo
    *
    * @return \HuaweiCloud\SDK\Aom\V1\Model\ApproveInfo
    */
    public function getApproveInfo()
    {
        return $this->container['approveInfo'];
    }

    /**
    * Sets approveInfo
    *
    * @param \HuaweiCloud\SDK\Aom\V1\Model\ApproveInfo $approveInfo approveInfo
    *
    * @return $this
    */
    public function setApproveInfo($approveInfo)
    {
        $this->container['approveInfo'] = $approveInfo;
        return $this;
    }

    /**
    * Gets isLatestVersion
    *  是否为最新版本的作业
    *
    * @return bool|null
    */
    public function getIsLatestVersion()
    {
        return $this->container['isLatestVersion'];
    }

    /**
    * Sets isLatestVersion
    *
    * @param bool|null $isLatestVersion 是否为最新版本的作业
    *
    * @return $this
    */
    public function setIsLatestVersion($isLatestVersion)
    {
        $this->container['isLatestVersion'] = $isLatestVersion;
        return $this;
    }

    /**
    * Gets versionNumber
    *  版本号
    *
    * @return int|null
    */
    public function getVersionNumber()
    {
        return $this->container['versionNumber'];
    }

    /**
    * Sets versionNumber
    *
    * @param int|null $versionNumber 版本号
    *
    * @return $this
    */
    public function setVersionNumber($versionNumber)
    {
        $this->container['versionNumber'] = $versionNumber;
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

