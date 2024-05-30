<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApprovalVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApprovalVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  审批单ID，填写String类型替代Long类型。
    * tenantId  项目ID，获取方式参考接口路径参数“project_id”。
    * nameCh  业务中文名。
    * nameEn  业务英文名。
    * bizId  业务ID，填写String类型替代Long类型。
    * bizType  bizType
    * bizInfo  序列化之后的业务详情，类型是string。
    * bizInfoObj  业务详情，类型是object。
    * bizVersion  业务版本。
    * bizStatus  bizStatus
    * approvalStatus  approvalStatus
    * approvalType  approvalType
    * submitTime  提交时间。
    * createBy  创建者。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * approvalTime  审核时间。
    * approver  审核人。
    * email  审核人邮箱。
    * msg  审核信息。
    * directoryPath  目录树。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'tenantId' => 'string',
            'nameCh' => 'string',
            'nameEn' => 'string',
            'bizId' => 'string',
            'bizType' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum',
            'bizInfo' => 'string',
            'bizInfoObj' => 'object',
            'bizVersion' => 'int',
            'bizStatus' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizStatusEnum',
            'approvalStatus' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApprovalStatusEnum',
            'approvalType' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApprovalTypeEnum',
            'submitTime' => '\DateTime',
            'createBy' => 'string',
            'l1' => 'string',
            'l2' => 'string',
            'l3' => 'string',
            'approvalTime' => '\DateTime',
            'approver' => 'string',
            'email' => 'string',
            'msg' => 'string',
            'directoryPath' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  审批单ID，填写String类型替代Long类型。
    * tenantId  项目ID，获取方式参考接口路径参数“project_id”。
    * nameCh  业务中文名。
    * nameEn  业务英文名。
    * bizId  业务ID，填写String类型替代Long类型。
    * bizType  bizType
    * bizInfo  序列化之后的业务详情，类型是string。
    * bizInfoObj  业务详情，类型是object。
    * bizVersion  业务版本。
    * bizStatus  bizStatus
    * approvalStatus  approvalStatus
    * approvalType  approvalType
    * submitTime  提交时间。
    * createBy  创建者。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * approvalTime  审核时间。
    * approver  审核人。
    * email  审核人邮箱。
    * msg  审核信息。
    * directoryPath  目录树。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'tenantId' => null,
        'nameCh' => null,
        'nameEn' => null,
        'bizId' => null,
        'bizType' => null,
        'bizInfo' => null,
        'bizInfoObj' => null,
        'bizVersion' => null,
        'bizStatus' => null,
        'approvalStatus' => null,
        'approvalType' => null,
        'submitTime' => 'date-time',
        'createBy' => null,
        'l1' => null,
        'l2' => null,
        'l3' => null,
        'approvalTime' => 'date-time',
        'approver' => null,
        'email' => null,
        'msg' => null,
        'directoryPath' => null
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
    * id  审批单ID，填写String类型替代Long类型。
    * tenantId  项目ID，获取方式参考接口路径参数“project_id”。
    * nameCh  业务中文名。
    * nameEn  业务英文名。
    * bizId  业务ID，填写String类型替代Long类型。
    * bizType  bizType
    * bizInfo  序列化之后的业务详情，类型是string。
    * bizInfoObj  业务详情，类型是object。
    * bizVersion  业务版本。
    * bizStatus  bizStatus
    * approvalStatus  approvalStatus
    * approvalType  approvalType
    * submitTime  提交时间。
    * createBy  创建者。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * approvalTime  审核时间。
    * approver  审核人。
    * email  审核人邮箱。
    * msg  审核信息。
    * directoryPath  目录树。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'tenantId' => 'tenant_id',
            'nameCh' => 'name_ch',
            'nameEn' => 'name_en',
            'bizId' => 'biz_id',
            'bizType' => 'biz_type',
            'bizInfo' => 'biz_info',
            'bizInfoObj' => 'biz_info_obj',
            'bizVersion' => 'biz_version',
            'bizStatus' => 'biz_status',
            'approvalStatus' => 'approval_status',
            'approvalType' => 'approval_type',
            'submitTime' => 'submit_time',
            'createBy' => 'create_by',
            'l1' => 'l1',
            'l2' => 'l2',
            'l3' => 'l3',
            'approvalTime' => 'approval_time',
            'approver' => 'approver',
            'email' => 'email',
            'msg' => 'msg',
            'directoryPath' => 'directory_path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  审批单ID，填写String类型替代Long类型。
    * tenantId  项目ID，获取方式参考接口路径参数“project_id”。
    * nameCh  业务中文名。
    * nameEn  业务英文名。
    * bizId  业务ID，填写String类型替代Long类型。
    * bizType  bizType
    * bizInfo  序列化之后的业务详情，类型是string。
    * bizInfoObj  业务详情，类型是object。
    * bizVersion  业务版本。
    * bizStatus  bizStatus
    * approvalStatus  approvalStatus
    * approvalType  approvalType
    * submitTime  提交时间。
    * createBy  创建者。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * approvalTime  审核时间。
    * approver  审核人。
    * email  审核人邮箱。
    * msg  审核信息。
    * directoryPath  目录树。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'tenantId' => 'setTenantId',
            'nameCh' => 'setNameCh',
            'nameEn' => 'setNameEn',
            'bizId' => 'setBizId',
            'bizType' => 'setBizType',
            'bizInfo' => 'setBizInfo',
            'bizInfoObj' => 'setBizInfoObj',
            'bizVersion' => 'setBizVersion',
            'bizStatus' => 'setBizStatus',
            'approvalStatus' => 'setApprovalStatus',
            'approvalType' => 'setApprovalType',
            'submitTime' => 'setSubmitTime',
            'createBy' => 'setCreateBy',
            'l1' => 'setL1',
            'l2' => 'setL2',
            'l3' => 'setL3',
            'approvalTime' => 'setApprovalTime',
            'approver' => 'setApprover',
            'email' => 'setEmail',
            'msg' => 'setMsg',
            'directoryPath' => 'setDirectoryPath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  审批单ID，填写String类型替代Long类型。
    * tenantId  项目ID，获取方式参考接口路径参数“project_id”。
    * nameCh  业务中文名。
    * nameEn  业务英文名。
    * bizId  业务ID，填写String类型替代Long类型。
    * bizType  bizType
    * bizInfo  序列化之后的业务详情，类型是string。
    * bizInfoObj  业务详情，类型是object。
    * bizVersion  业务版本。
    * bizStatus  bizStatus
    * approvalStatus  approvalStatus
    * approvalType  approvalType
    * submitTime  提交时间。
    * createBy  创建者。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * approvalTime  审核时间。
    * approver  审核人。
    * email  审核人邮箱。
    * msg  审核信息。
    * directoryPath  目录树。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'tenantId' => 'getTenantId',
            'nameCh' => 'getNameCh',
            'nameEn' => 'getNameEn',
            'bizId' => 'getBizId',
            'bizType' => 'getBizType',
            'bizInfo' => 'getBizInfo',
            'bizInfoObj' => 'getBizInfoObj',
            'bizVersion' => 'getBizVersion',
            'bizStatus' => 'getBizStatus',
            'approvalStatus' => 'getApprovalStatus',
            'approvalType' => 'getApprovalType',
            'submitTime' => 'getSubmitTime',
            'createBy' => 'getCreateBy',
            'l1' => 'getL1',
            'l2' => 'getL2',
            'l3' => 'getL3',
            'approvalTime' => 'getApprovalTime',
            'approver' => 'getApprover',
            'email' => 'getEmail',
            'msg' => 'getMsg',
            'directoryPath' => 'getDirectoryPath'
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
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['nameCh'] = isset($data['nameCh']) ? $data['nameCh'] : null;
        $this->container['nameEn'] = isset($data['nameEn']) ? $data['nameEn'] : null;
        $this->container['bizId'] = isset($data['bizId']) ? $data['bizId'] : null;
        $this->container['bizType'] = isset($data['bizType']) ? $data['bizType'] : null;
        $this->container['bizInfo'] = isset($data['bizInfo']) ? $data['bizInfo'] : null;
        $this->container['bizInfoObj'] = isset($data['bizInfoObj']) ? $data['bizInfoObj'] : null;
        $this->container['bizVersion'] = isset($data['bizVersion']) ? $data['bizVersion'] : null;
        $this->container['bizStatus'] = isset($data['bizStatus']) ? $data['bizStatus'] : null;
        $this->container['approvalStatus'] = isset($data['approvalStatus']) ? $data['approvalStatus'] : null;
        $this->container['approvalType'] = isset($data['approvalType']) ? $data['approvalType'] : null;
        $this->container['submitTime'] = isset($data['submitTime']) ? $data['submitTime'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['l1'] = isset($data['l1']) ? $data['l1'] : null;
        $this->container['l2'] = isset($data['l2']) ? $data['l2'] : null;
        $this->container['l3'] = isset($data['l3']) ? $data['l3'] : null;
        $this->container['approvalTime'] = isset($data['approvalTime']) ? $data['approvalTime'] : null;
        $this->container['approver'] = isset($data['approver']) ? $data['approver'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['msg'] = isset($data['msg']) ? $data['msg'] : null;
        $this->container['directoryPath'] = isset($data['directoryPath']) ? $data['directoryPath'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  审批单ID，填写String类型替代Long类型。
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
    * @param string|null $id 审批单ID，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets tenantId
    *  项目ID，获取方式参考接口路径参数“project_id”。
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 项目ID，获取方式参考接口路径参数“project_id”。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets nameCh
    *  业务中文名。
    *
    * @return string|null
    */
    public function getNameCh()
    {
        return $this->container['nameCh'];
    }

    /**
    * Sets nameCh
    *
    * @param string|null $nameCh 业务中文名。
    *
    * @return $this
    */
    public function setNameCh($nameCh)
    {
        $this->container['nameCh'] = $nameCh;
        return $this;
    }

    /**
    * Gets nameEn
    *  业务英文名。
    *
    * @return string|null
    */
    public function getNameEn()
    {
        return $this->container['nameEn'];
    }

    /**
    * Sets nameEn
    *
    * @param string|null $nameEn 业务英文名。
    *
    * @return $this
    */
    public function setNameEn($nameEn)
    {
        $this->container['nameEn'] = $nameEn;
        return $this;
    }

    /**
    * Gets bizId
    *  业务ID，填写String类型替代Long类型。
    *
    * @return string|null
    */
    public function getBizId()
    {
        return $this->container['bizId'];
    }

    /**
    * Sets bizId
    *
    * @param string|null $bizId 业务ID，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setBizId($bizId)
    {
        $this->container['bizId'] = $bizId;
        return $this;
    }

    /**
    * Gets bizType
    *  bizType
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum|null
    */
    public function getBizType()
    {
        return $this->container['bizType'];
    }

    /**
    * Sets bizType
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum|null $bizType bizType
    *
    * @return $this
    */
    public function setBizType($bizType)
    {
        $this->container['bizType'] = $bizType;
        return $this;
    }

    /**
    * Gets bizInfo
    *  序列化之后的业务详情，类型是string。
    *
    * @return string|null
    */
    public function getBizInfo()
    {
        return $this->container['bizInfo'];
    }

    /**
    * Sets bizInfo
    *
    * @param string|null $bizInfo 序列化之后的业务详情，类型是string。
    *
    * @return $this
    */
    public function setBizInfo($bizInfo)
    {
        $this->container['bizInfo'] = $bizInfo;
        return $this;
    }

    /**
    * Gets bizInfoObj
    *  业务详情，类型是object。
    *
    * @return object|null
    */
    public function getBizInfoObj()
    {
        return $this->container['bizInfoObj'];
    }

    /**
    * Sets bizInfoObj
    *
    * @param object|null $bizInfoObj 业务详情，类型是object。
    *
    * @return $this
    */
    public function setBizInfoObj($bizInfoObj)
    {
        $this->container['bizInfoObj'] = $bizInfoObj;
        return $this;
    }

    /**
    * Gets bizVersion
    *  业务版本。
    *
    * @return int|null
    */
    public function getBizVersion()
    {
        return $this->container['bizVersion'];
    }

    /**
    * Sets bizVersion
    *
    * @param int|null $bizVersion 业务版本。
    *
    * @return $this
    */
    public function setBizVersion($bizVersion)
    {
        $this->container['bizVersion'] = $bizVersion;
        return $this;
    }

    /**
    * Gets bizStatus
    *  bizStatus
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizStatusEnum|null
    */
    public function getBizStatus()
    {
        return $this->container['bizStatus'];
    }

    /**
    * Sets bizStatus
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizStatusEnum|null $bizStatus bizStatus
    *
    * @return $this
    */
    public function setBizStatus($bizStatus)
    {
        $this->container['bizStatus'] = $bizStatus;
        return $this;
    }

    /**
    * Gets approvalStatus
    *  approvalStatus
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApprovalStatusEnum|null
    */
    public function getApprovalStatus()
    {
        return $this->container['approvalStatus'];
    }

    /**
    * Sets approvalStatus
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApprovalStatusEnum|null $approvalStatus approvalStatus
    *
    * @return $this
    */
    public function setApprovalStatus($approvalStatus)
    {
        $this->container['approvalStatus'] = $approvalStatus;
        return $this;
    }

    /**
    * Gets approvalType
    *  approvalType
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApprovalTypeEnum|null
    */
    public function getApprovalType()
    {
        return $this->container['approvalType'];
    }

    /**
    * Sets approvalType
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApprovalTypeEnum|null $approvalType approvalType
    *
    * @return $this
    */
    public function setApprovalType($approvalType)
    {
        $this->container['approvalType'] = $approvalType;
        return $this;
    }

    /**
    * Gets submitTime
    *  提交时间。
    *
    * @return \DateTime|null
    */
    public function getSubmitTime()
    {
        return $this->container['submitTime'];
    }

    /**
    * Sets submitTime
    *
    * @param \DateTime|null $submitTime 提交时间。
    *
    * @return $this
    */
    public function setSubmitTime($submitTime)
    {
        $this->container['submitTime'] = $submitTime;
        return $this;
    }

    /**
    * Gets createBy
    *  创建者。
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
    * @param string|null $createBy 创建者。
    *
    * @return $this
    */
    public function setCreateBy($createBy)
    {
        $this->container['createBy'] = $createBy;
        return $this;
    }

    /**
    * Gets l1
    *  主题域分组中文名，只读，创建和更新时无需填写。
    *
    * @return string|null
    */
    public function getL1()
    {
        return $this->container['l1'];
    }

    /**
    * Sets l1
    *
    * @param string|null $l1 主题域分组中文名，只读，创建和更新时无需填写。
    *
    * @return $this
    */
    public function setL1($l1)
    {
        $this->container['l1'] = $l1;
        return $this;
    }

    /**
    * Gets l2
    *  主题域中文名，只读，创建和更新时无需填写。
    *
    * @return string|null
    */
    public function getL2()
    {
        return $this->container['l2'];
    }

    /**
    * Sets l2
    *
    * @param string|null $l2 主题域中文名，只读，创建和更新时无需填写。
    *
    * @return $this
    */
    public function setL2($l2)
    {
        $this->container['l2'] = $l2;
        return $this;
    }

    /**
    * Gets l3
    *  业务对象中文名，只读，创建和更新时无需填写。
    *
    * @return string|null
    */
    public function getL3()
    {
        return $this->container['l3'];
    }

    /**
    * Sets l3
    *
    * @param string|null $l3 业务对象中文名，只读，创建和更新时无需填写。
    *
    * @return $this
    */
    public function setL3($l3)
    {
        $this->container['l3'] = $l3;
        return $this;
    }

    /**
    * Gets approvalTime
    *  审核时间。
    *
    * @return \DateTime|null
    */
    public function getApprovalTime()
    {
        return $this->container['approvalTime'];
    }

    /**
    * Sets approvalTime
    *
    * @param \DateTime|null $approvalTime 审核时间。
    *
    * @return $this
    */
    public function setApprovalTime($approvalTime)
    {
        $this->container['approvalTime'] = $approvalTime;
        return $this;
    }

    /**
    * Gets approver
    *  审核人。
    *
    * @return string|null
    */
    public function getApprover()
    {
        return $this->container['approver'];
    }

    /**
    * Sets approver
    *
    * @param string|null $approver 审核人。
    *
    * @return $this
    */
    public function setApprover($approver)
    {
        $this->container['approver'] = $approver;
        return $this;
    }

    /**
    * Gets email
    *  审核人邮箱。
    *
    * @return string|null
    */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
    * Sets email
    *
    * @param string|null $email 审核人邮箱。
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets msg
    *  审核信息。
    *
    * @return string|null
    */
    public function getMsg()
    {
        return $this->container['msg'];
    }

    /**
    * Sets msg
    *
    * @param string|null $msg 审核信息。
    *
    * @return $this
    */
    public function setMsg($msg)
    {
        $this->container['msg'] = $msg;
        return $this;
    }

    /**
    * Gets directoryPath
    *  目录树。
    *
    * @return string|null
    */
    public function getDirectoryPath()
    {
        return $this->container['directoryPath'];
    }

    /**
    * Sets directoryPath
    *
    * @param string|null $directoryPath 目录树。
    *
    * @return $this
    */
    public function setDirectoryPath($directoryPath)
    {
        $this->container['directoryPath'] = $directoryPath;
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

