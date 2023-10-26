<?php

namespace HuaweiCloud\SDK\Aom\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Script implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Script';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * approveInfo  approveInfo
    * createBy  创建人，比如为：张三
    * createTime  创建时间
    * description  脚本描述，脚本描述,对脚本进行描述，最大长度为1000
    * enterpriseProjectId  企业项目id
    * id  脚本id，根据UUID.randomUUID生成。
    * name  脚本名称，支持数字，下划线，大小写字母 ,中文
    * onlineExistStatus  脚本中是否有已上线的版本，true表示有已上线的版本，false表示没有已上线的版本
    * onlineId  已上线版本id
    * projectId  租户从IAM申请到的projectid，一般为32位字符串
    * rateControl  rateControl
    * scriptLanguage  脚本语言，目前支持四种，分别是：SHELL BAT PYTHON POWER_SHELL
    * updateBy  修改人
    * updateTime  实体的最后更新时间戳。 注意：执行创建/修改/删除操作时，update_time将更新。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'approveInfo' => '\HuaweiCloud\SDK\Aom\V1\Model\ApproveInfo',
            'createBy' => 'string',
            'createTime' => 'int',
            'description' => 'string',
            'enterpriseProjectId' => 'string',
            'id' => 'string',
            'name' => 'string',
            'onlineExistStatus' => 'bool',
            'onlineId' => 'string',
            'projectId' => 'string',
            'rateControl' => '\HuaweiCloud\SDK\Aom\V1\Model\RateControl',
            'scriptLanguage' => 'string',
            'updateBy' => 'string',
            'updateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * approveInfo  approveInfo
    * createBy  创建人，比如为：张三
    * createTime  创建时间
    * description  脚本描述，脚本描述,对脚本进行描述，最大长度为1000
    * enterpriseProjectId  企业项目id
    * id  脚本id，根据UUID.randomUUID生成。
    * name  脚本名称，支持数字，下划线，大小写字母 ,中文
    * onlineExistStatus  脚本中是否有已上线的版本，true表示有已上线的版本，false表示没有已上线的版本
    * onlineId  已上线版本id
    * projectId  租户从IAM申请到的projectid，一般为32位字符串
    * rateControl  rateControl
    * scriptLanguage  脚本语言，目前支持四种，分别是：SHELL BAT PYTHON POWER_SHELL
    * updateBy  修改人
    * updateTime  实体的最后更新时间戳。 注意：执行创建/修改/删除操作时，update_time将更新。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'approveInfo' => null,
        'createBy' => null,
        'createTime' => 'int64',
        'description' => null,
        'enterpriseProjectId' => null,
        'id' => null,
        'name' => null,
        'onlineExistStatus' => null,
        'onlineId' => null,
        'projectId' => null,
        'rateControl' => null,
        'scriptLanguage' => null,
        'updateBy' => null,
        'updateTime' => 'int64'
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
    * approveInfo  approveInfo
    * createBy  创建人，比如为：张三
    * createTime  创建时间
    * description  脚本描述，脚本描述,对脚本进行描述，最大长度为1000
    * enterpriseProjectId  企业项目id
    * id  脚本id，根据UUID.randomUUID生成。
    * name  脚本名称，支持数字，下划线，大小写字母 ,中文
    * onlineExistStatus  脚本中是否有已上线的版本，true表示有已上线的版本，false表示没有已上线的版本
    * onlineId  已上线版本id
    * projectId  租户从IAM申请到的projectid，一般为32位字符串
    * rateControl  rateControl
    * scriptLanguage  脚本语言，目前支持四种，分别是：SHELL BAT PYTHON POWER_SHELL
    * updateBy  修改人
    * updateTime  实体的最后更新时间戳。 注意：执行创建/修改/删除操作时，update_time将更新。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'approveInfo' => 'approve_info',
            'createBy' => 'create_by',
            'createTime' => 'create_time',
            'description' => 'description',
            'enterpriseProjectId' => 'enterprise_project_id',
            'id' => 'id',
            'name' => 'name',
            'onlineExistStatus' => 'online_exist_status',
            'onlineId' => 'online_id',
            'projectId' => 'project_id',
            'rateControl' => 'rate_control',
            'scriptLanguage' => 'script_language',
            'updateBy' => 'update_by',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * approveInfo  approveInfo
    * createBy  创建人，比如为：张三
    * createTime  创建时间
    * description  脚本描述，脚本描述,对脚本进行描述，最大长度为1000
    * enterpriseProjectId  企业项目id
    * id  脚本id，根据UUID.randomUUID生成。
    * name  脚本名称，支持数字，下划线，大小写字母 ,中文
    * onlineExistStatus  脚本中是否有已上线的版本，true表示有已上线的版本，false表示没有已上线的版本
    * onlineId  已上线版本id
    * projectId  租户从IAM申请到的projectid，一般为32位字符串
    * rateControl  rateControl
    * scriptLanguage  脚本语言，目前支持四种，分别是：SHELL BAT PYTHON POWER_SHELL
    * updateBy  修改人
    * updateTime  实体的最后更新时间戳。 注意：执行创建/修改/删除操作时，update_time将更新。
    *
    * @var string[]
    */
    protected static $setters = [
            'approveInfo' => 'setApproveInfo',
            'createBy' => 'setCreateBy',
            'createTime' => 'setCreateTime',
            'description' => 'setDescription',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'id' => 'setId',
            'name' => 'setName',
            'onlineExistStatus' => 'setOnlineExistStatus',
            'onlineId' => 'setOnlineId',
            'projectId' => 'setProjectId',
            'rateControl' => 'setRateControl',
            'scriptLanguage' => 'setScriptLanguage',
            'updateBy' => 'setUpdateBy',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * approveInfo  approveInfo
    * createBy  创建人，比如为：张三
    * createTime  创建时间
    * description  脚本描述，脚本描述,对脚本进行描述，最大长度为1000
    * enterpriseProjectId  企业项目id
    * id  脚本id，根据UUID.randomUUID生成。
    * name  脚本名称，支持数字，下划线，大小写字母 ,中文
    * onlineExistStatus  脚本中是否有已上线的版本，true表示有已上线的版本，false表示没有已上线的版本
    * onlineId  已上线版本id
    * projectId  租户从IAM申请到的projectid，一般为32位字符串
    * rateControl  rateControl
    * scriptLanguage  脚本语言，目前支持四种，分别是：SHELL BAT PYTHON POWER_SHELL
    * updateBy  修改人
    * updateTime  实体的最后更新时间戳。 注意：执行创建/修改/删除操作时，update_time将更新。
    *
    * @var string[]
    */
    protected static $getters = [
            'approveInfo' => 'getApproveInfo',
            'createBy' => 'getCreateBy',
            'createTime' => 'getCreateTime',
            'description' => 'getDescription',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'id' => 'getId',
            'name' => 'getName',
            'onlineExistStatus' => 'getOnlineExistStatus',
            'onlineId' => 'getOnlineId',
            'projectId' => 'getProjectId',
            'rateControl' => 'getRateControl',
            'scriptLanguage' => 'getScriptLanguage',
            'updateBy' => 'getUpdateBy',
            'updateTime' => 'getUpdateTime'
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
        $this->container['approveInfo'] = isset($data['approveInfo']) ? $data['approveInfo'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['onlineExistStatus'] = isset($data['onlineExistStatus']) ? $data['onlineExistStatus'] : null;
        $this->container['onlineId'] = isset($data['onlineId']) ? $data['onlineId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['rateControl'] = isset($data['rateControl']) ? $data['rateControl'] : null;
        $this->container['scriptLanguage'] = isset($data['scriptLanguage']) ? $data['scriptLanguage'] : null;
        $this->container['updateBy'] = isset($data['updateBy']) ? $data['updateBy'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) > 64)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
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
            if (!is_null($this->container['onlineId']) && (mb_strlen($this->container['onlineId']) > 64)) {
                $invalidProperties[] = "invalid value for 'onlineId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['onlineId']) && (mb_strlen($this->container['onlineId']) < 1)) {
                $invalidProperties[] = "invalid value for 'onlineId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['scriptLanguage'] === null) {
            $invalidProperties[] = "'scriptLanguage' can't be null";
        }
            if ((mb_strlen($this->container['scriptLanguage']) > 16)) {
                $invalidProperties[] = "invalid value for 'scriptLanguage', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['scriptLanguage']) < 1)) {
                $invalidProperties[] = "invalid value for 'scriptLanguage', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updateBy']) && (mb_strlen($this->container['updateBy']) > 64)) {
                $invalidProperties[] = "invalid value for 'updateBy', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['updateBy']) && (mb_strlen($this->container['updateBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'updateBy', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
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
    * Gets approveInfo
    *  approveInfo
    *
    * @return \HuaweiCloud\SDK\Aom\V1\Model\ApproveInfo|null
    */
    public function getApproveInfo()
    {
        return $this->container['approveInfo'];
    }

    /**
    * Sets approveInfo
    *
    * @param \HuaweiCloud\SDK\Aom\V1\Model\ApproveInfo|null $approveInfo approveInfo
    *
    * @return $this
    */
    public function setApproveInfo($approveInfo)
    {
        $this->container['approveInfo'] = $approveInfo;
        return $this;
    }

    /**
    * Gets createBy
    *  创建人，比如为：张三
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
    * @param string|null $createBy 创建人，比如为：张三
    *
    * @return $this
    */
    public function setCreateBy($createBy)
    {
        $this->container['createBy'] = $createBy;
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
    * Gets description
    *  脚本描述，脚本描述,对脚本进行描述，最大长度为1000
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
    * @param string|null $description 脚本描述，脚本描述,对脚本进行描述，最大长度为1000
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
    *  企业项目id
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
    * @param string|null $enterpriseProjectId 企业项目id
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
    *  脚本id，根据UUID.randomUUID生成。
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
    * @param string|null $id 脚本id，根据UUID.randomUUID生成。
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
    *  脚本名称，支持数字，下划线，大小写字母 ,中文
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
    * @param string $name 脚本名称，支持数字，下划线，大小写字母 ,中文
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets onlineExistStatus
    *  脚本中是否有已上线的版本，true表示有已上线的版本，false表示没有已上线的版本
    *
    * @return bool|null
    */
    public function getOnlineExistStatus()
    {
        return $this->container['onlineExistStatus'];
    }

    /**
    * Sets onlineExistStatus
    *
    * @param bool|null $onlineExistStatus 脚本中是否有已上线的版本，true表示有已上线的版本，false表示没有已上线的版本
    *
    * @return $this
    */
    public function setOnlineExistStatus($onlineExistStatus)
    {
        $this->container['onlineExistStatus'] = $onlineExistStatus;
        return $this;
    }

    /**
    * Gets onlineId
    *  已上线版本id
    *
    * @return string|null
    */
    public function getOnlineId()
    {
        return $this->container['onlineId'];
    }

    /**
    * Sets onlineId
    *
    * @param string|null $onlineId 已上线版本id
    *
    * @return $this
    */
    public function setOnlineId($onlineId)
    {
        $this->container['onlineId'] = $onlineId;
        return $this;
    }

    /**
    * Gets projectId
    *  租户从IAM申请到的projectid，一般为32位字符串
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 租户从IAM申请到的projectid，一般为32位字符串
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets rateControl
    *  rateControl
    *
    * @return \HuaweiCloud\SDK\Aom\V1\Model\RateControl|null
    */
    public function getRateControl()
    {
        return $this->container['rateControl'];
    }

    /**
    * Sets rateControl
    *
    * @param \HuaweiCloud\SDK\Aom\V1\Model\RateControl|null $rateControl rateControl
    *
    * @return $this
    */
    public function setRateControl($rateControl)
    {
        $this->container['rateControl'] = $rateControl;
        return $this;
    }

    /**
    * Gets scriptLanguage
    *  脚本语言，目前支持四种，分别是：SHELL BAT PYTHON POWER_SHELL
    *
    * @return string
    */
    public function getScriptLanguage()
    {
        return $this->container['scriptLanguage'];
    }

    /**
    * Sets scriptLanguage
    *
    * @param string $scriptLanguage 脚本语言，目前支持四种，分别是：SHELL BAT PYTHON POWER_SHELL
    *
    * @return $this
    */
    public function setScriptLanguage($scriptLanguage)
    {
        $this->container['scriptLanguage'] = $scriptLanguage;
        return $this;
    }

    /**
    * Gets updateBy
    *  修改人
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
    * @param string|null $updateBy 修改人
    *
    * @return $this
    */
    public function setUpdateBy($updateBy)
    {
        $this->container['updateBy'] = $updateBy;
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

