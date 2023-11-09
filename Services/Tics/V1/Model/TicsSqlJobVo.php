<?php

namespace HuaweiCloud\SDK\Tics\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TicsSqlJobVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TicsSqlJobVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * approvalStatus  作业审批状态，APPROVED.审批通过，APPROVING.审批中，NEW.新建，REJECTED.驳回，REVOKED.撤销
    * createTime  创建时间
    * creatorId  创建人id
    * creatorName  创建人名称
    * deleted  删除标记
    * description  作业描述
    * domainId  作业发起方domainId
    * id  作业id
    * jobType  作业类型，SQL.联合SQL分析,HFL.横向联邦学习,VFL.纵向联邦学习,PREDICT.预测，DATA_EXCHANGE.数据交换
    * leagueId  联盟id
    * name  作业名称
    * updateTime  变更时间
    * updateUserId  变更人id
    * updateUserName  变更人名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'approvalStatus' => 'string',
            'createTime' => '\DateTime',
            'creatorId' => 'string',
            'creatorName' => 'string',
            'deleted' => 'bool',
            'description' => 'string',
            'domainId' => 'string',
            'id' => 'string',
            'jobType' => 'string',
            'leagueId' => 'string',
            'name' => 'string',
            'updateTime' => '\DateTime',
            'updateUserId' => 'string',
            'updateUserName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * approvalStatus  作业审批状态，APPROVED.审批通过，APPROVING.审批中，NEW.新建，REJECTED.驳回，REVOKED.撤销
    * createTime  创建时间
    * creatorId  创建人id
    * creatorName  创建人名称
    * deleted  删除标记
    * description  作业描述
    * domainId  作业发起方domainId
    * id  作业id
    * jobType  作业类型，SQL.联合SQL分析,HFL.横向联邦学习,VFL.纵向联邦学习,PREDICT.预测，DATA_EXCHANGE.数据交换
    * leagueId  联盟id
    * name  作业名称
    * updateTime  变更时间
    * updateUserId  变更人id
    * updateUserName  变更人名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'approvalStatus' => null,
        'createTime' => 'date-time',
        'creatorId' => null,
        'creatorName' => null,
        'deleted' => null,
        'description' => null,
        'domainId' => null,
        'id' => null,
        'jobType' => null,
        'leagueId' => null,
        'name' => null,
        'updateTime' => 'date-time',
        'updateUserId' => null,
        'updateUserName' => null
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
    * approvalStatus  作业审批状态，APPROVED.审批通过，APPROVING.审批中，NEW.新建，REJECTED.驳回，REVOKED.撤销
    * createTime  创建时间
    * creatorId  创建人id
    * creatorName  创建人名称
    * deleted  删除标记
    * description  作业描述
    * domainId  作业发起方domainId
    * id  作业id
    * jobType  作业类型，SQL.联合SQL分析,HFL.横向联邦学习,VFL.纵向联邦学习,PREDICT.预测，DATA_EXCHANGE.数据交换
    * leagueId  联盟id
    * name  作业名称
    * updateTime  变更时间
    * updateUserId  变更人id
    * updateUserName  变更人名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'approvalStatus' => 'approval_status',
            'createTime' => 'create_time',
            'creatorId' => 'creator_id',
            'creatorName' => 'creator_name',
            'deleted' => 'deleted',
            'description' => 'description',
            'domainId' => 'domain_id',
            'id' => 'id',
            'jobType' => 'job_type',
            'leagueId' => 'league_id',
            'name' => 'name',
            'updateTime' => 'update_time',
            'updateUserId' => 'update_user_id',
            'updateUserName' => 'update_user_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * approvalStatus  作业审批状态，APPROVED.审批通过，APPROVING.审批中，NEW.新建，REJECTED.驳回，REVOKED.撤销
    * createTime  创建时间
    * creatorId  创建人id
    * creatorName  创建人名称
    * deleted  删除标记
    * description  作业描述
    * domainId  作业发起方domainId
    * id  作业id
    * jobType  作业类型，SQL.联合SQL分析,HFL.横向联邦学习,VFL.纵向联邦学习,PREDICT.预测，DATA_EXCHANGE.数据交换
    * leagueId  联盟id
    * name  作业名称
    * updateTime  变更时间
    * updateUserId  变更人id
    * updateUserName  变更人名称
    *
    * @var string[]
    */
    protected static $setters = [
            'approvalStatus' => 'setApprovalStatus',
            'createTime' => 'setCreateTime',
            'creatorId' => 'setCreatorId',
            'creatorName' => 'setCreatorName',
            'deleted' => 'setDeleted',
            'description' => 'setDescription',
            'domainId' => 'setDomainId',
            'id' => 'setId',
            'jobType' => 'setJobType',
            'leagueId' => 'setLeagueId',
            'name' => 'setName',
            'updateTime' => 'setUpdateTime',
            'updateUserId' => 'setUpdateUserId',
            'updateUserName' => 'setUpdateUserName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * approvalStatus  作业审批状态，APPROVED.审批通过，APPROVING.审批中，NEW.新建，REJECTED.驳回，REVOKED.撤销
    * createTime  创建时间
    * creatorId  创建人id
    * creatorName  创建人名称
    * deleted  删除标记
    * description  作业描述
    * domainId  作业发起方domainId
    * id  作业id
    * jobType  作业类型，SQL.联合SQL分析,HFL.横向联邦学习,VFL.纵向联邦学习,PREDICT.预测，DATA_EXCHANGE.数据交换
    * leagueId  联盟id
    * name  作业名称
    * updateTime  变更时间
    * updateUserId  变更人id
    * updateUserName  变更人名称
    *
    * @var string[]
    */
    protected static $getters = [
            'approvalStatus' => 'getApprovalStatus',
            'createTime' => 'getCreateTime',
            'creatorId' => 'getCreatorId',
            'creatorName' => 'getCreatorName',
            'deleted' => 'getDeleted',
            'description' => 'getDescription',
            'domainId' => 'getDomainId',
            'id' => 'getId',
            'jobType' => 'getJobType',
            'leagueId' => 'getLeagueId',
            'name' => 'getName',
            'updateTime' => 'getUpdateTime',
            'updateUserId' => 'getUpdateUserId',
            'updateUserName' => 'getUpdateUserName'
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
    const APPROVAL_STATUS_APPROVED = 'APPROVED';
    const APPROVAL_STATUS_APPROVING = 'APPROVING';
    const APPROVAL_STATUS__NEW = 'NEW';
    const APPROVAL_STATUS_REJECTED = 'REJECTED';
    const APPROVAL_STATUS_REVOKED = 'REVOKED';
    const JOB_TYPE_HFL = 'HFL';
    const JOB_TYPE_PREDICT = 'PREDICT';
    const JOB_TYPE_SQL = 'SQL';
    const JOB_TYPE_VFL = 'VFL';
    const JOB_TYPE_DATA_EXCHANGE = 'DATA_EXCHANGE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getApprovalStatusAllowableValues()
    {
        return [
            self::APPROVAL_STATUS_APPROVED,
            self::APPROVAL_STATUS_APPROVING,
            self::APPROVAL_STATUS__NEW,
            self::APPROVAL_STATUS_REJECTED,
            self::APPROVAL_STATUS_REVOKED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobTypeAllowableValues()
    {
        return [
            self::JOB_TYPE_HFL,
            self::JOB_TYPE_PREDICT,
            self::JOB_TYPE_SQL,
            self::JOB_TYPE_VFL,
            self::JOB_TYPE_DATA_EXCHANGE,
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
        $this->container['approvalStatus'] = isset($data['approvalStatus']) ? $data['approvalStatus'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['leagueId'] = isset($data['leagueId']) ? $data['leagueId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['updateUserId'] = isset($data['updateUserId']) ? $data['updateUserId'] : null;
        $this->container['updateUserName'] = isset($data['updateUserName']) ? $data['updateUserName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getApprovalStatusAllowableValues();
                if (!is_null($this->container['approvalStatus']) && !in_array($this->container['approvalStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'approvalStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
        if ($this->container['creatorId'] === null) {
            $invalidProperties[] = "'creatorId' can't be null";
        }
            if ((mb_strlen($this->container['creatorId']) > 32)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['creatorId']) < 0)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['creatorName'] === null) {
            $invalidProperties[] = "'creatorName' can't be null";
        }
            if ((mb_strlen($this->container['creatorName']) > 128)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['creatorName']) < 0)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['deleted'] === null) {
            $invalidProperties[] = "'deleted' can't be null";
        }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 512)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
            if ((mb_strlen($this->container['domainId']) > 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['domainId']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['jobType'] === null) {
            $invalidProperties[] = "'jobType' can't be null";
        }
            $allowedValues = $this->getJobTypeAllowableValues();
                if (!is_null($this->container['jobType']) && !in_array($this->container['jobType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['leagueId'] === null) {
            $invalidProperties[] = "'leagueId' can't be null";
        }
            if ((mb_strlen($this->container['leagueId']) > 32)) {
                $invalidProperties[] = "invalid value for 'leagueId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['leagueId']) < 0)) {
                $invalidProperties[] = "invalid value for 'leagueId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateUserId']) && (mb_strlen($this->container['updateUserId']) > 32)) {
                $invalidProperties[] = "invalid value for 'updateUserId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['updateUserId']) && (mb_strlen($this->container['updateUserId']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateUserId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateUserName']) && (mb_strlen($this->container['updateUserName']) > 128)) {
                $invalidProperties[] = "invalid value for 'updateUserName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['updateUserName']) && (mb_strlen($this->container['updateUserName']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateUserName', the character length must be bigger than or equal to 0.";
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
    * Gets approvalStatus
    *  作业审批状态，APPROVED.审批通过，APPROVING.审批中，NEW.新建，REJECTED.驳回，REVOKED.撤销
    *
    * @return string|null
    */
    public function getApprovalStatus()
    {
        return $this->container['approvalStatus'];
    }

    /**
    * Sets approvalStatus
    *
    * @param string|null $approvalStatus 作业审批状态，APPROVED.审批通过，APPROVING.审批中，NEW.新建，REJECTED.驳回，REVOKED.撤销
    *
    * @return $this
    */
    public function setApprovalStatus($approvalStatus)
    {
        $this->container['approvalStatus'] = $approvalStatus;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return \DateTime
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets creatorId
    *  创建人id
    *
    * @return string
    */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
    * Sets creatorId
    *
    * @param string $creatorId 创建人id
    *
    * @return $this
    */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;
        return $this;
    }

    /**
    * Gets creatorName
    *  创建人名称
    *
    * @return string
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string $creatorName 创建人名称
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets deleted
    *  删除标记
    *
    * @return bool
    */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
    * Sets deleted
    *
    * @param bool $deleted 删除标记
    *
    * @return $this
    */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;
        return $this;
    }

    /**
    * Gets description
    *  作业描述
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
    * @param string|null $description 作业描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets domainId
    *  作业发起方domainId
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
    * @param string $domainId 作业发起方domainId
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets id
    *  作业id
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 作业id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets jobType
    *  作业类型，SQL.联合SQL分析,HFL.横向联邦学习,VFL.纵向联邦学习,PREDICT.预测，DATA_EXCHANGE.数据交换
    *
    * @return string
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param string $jobType 作业类型，SQL.联合SQL分析,HFL.横向联邦学习,VFL.纵向联邦学习,PREDICT.预测，DATA_EXCHANGE.数据交换
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets leagueId
    *  联盟id
    *
    * @return string
    */
    public function getLeagueId()
    {
        return $this->container['leagueId'];
    }

    /**
    * Sets leagueId
    *
    * @param string $leagueId 联盟id
    *
    * @return $this
    */
    public function setLeagueId($leagueId)
    {
        $this->container['leagueId'] = $leagueId;
        return $this;
    }

    /**
    * Gets name
    *  作业名称
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
    * @param string $name 作业名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets updateTime
    *  变更时间
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime 变更时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets updateUserId
    *  变更人id
    *
    * @return string|null
    */
    public function getUpdateUserId()
    {
        return $this->container['updateUserId'];
    }

    /**
    * Sets updateUserId
    *
    * @param string|null $updateUserId 变更人id
    *
    * @return $this
    */
    public function setUpdateUserId($updateUserId)
    {
        $this->container['updateUserId'] = $updateUserId;
        return $this;
    }

    /**
    * Gets updateUserName
    *  变更人名称
    *
    * @return string|null
    */
    public function getUpdateUserName()
    {
        return $this->container['updateUserName'];
    }

    /**
    * Sets updateUserName
    *
    * @param string|null $updateUserName 变更人名称
    *
    * @return $this
    */
    public function setUpdateUserName($updateUserName)
    {
        $this->container['updateUserName'] = $updateUserName;
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

