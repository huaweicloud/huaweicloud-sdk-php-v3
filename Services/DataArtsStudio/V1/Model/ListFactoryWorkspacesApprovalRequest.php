<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFactoryWorkspacesApprovalRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFactoryWorkspacesApprovalRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * contentType  默认值：application/json;charset=UTF-8 可选，有Body体的情况下必选，没有Body体则无需填写和校验。
    * beginTime  申请开始时间，13位时间戳。
    * endTime  申请结束时间，13位时间戳。当开始时间和结束时间都不传时，默认查询前7天到当天的数据。
    * status  审批状态：  - DEVELOPING: 待审批  - APPROVED: 已通过  - REJECT: 已驳回  默认查询全部的状态
    * type  审批类型:  - DEVELOPING: 查询待审批信息  - FINISHED: 查询已审批信息  - APPLY: 查询我的申请页面  默认值：APPLY
    * applyId  申请单号。
    * approverName  审批人。
    * createUser  申请人，该参数只支持在待审批和已审批页面使用。
    * objectName  对象名。
    * objectType  审批对象： - JOB: 作业 - SCRIPT: 脚本  默认审批全部对象。
    * offset  分页的起始页，取值范围大于等于0。样例: offset=0 默认值: 0。
    * limit  分页返回结果，指定每页最大记录数，范围[1,100]。样例: limit=10 默认值: 10。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspace' => 'string',
            'xProjectId' => 'string',
            'contentType' => 'string',
            'beginTime' => 'int',
            'endTime' => 'int',
            'status' => 'string',
            'type' => 'string',
            'applyId' => 'string',
            'approverName' => 'string',
            'createUser' => 'string',
            'objectName' => 'string',
            'objectType' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * contentType  默认值：application/json;charset=UTF-8 可选，有Body体的情况下必选，没有Body体则无需填写和校验。
    * beginTime  申请开始时间，13位时间戳。
    * endTime  申请结束时间，13位时间戳。当开始时间和结束时间都不传时，默认查询前7天到当天的数据。
    * status  审批状态：  - DEVELOPING: 待审批  - APPROVED: 已通过  - REJECT: 已驳回  默认查询全部的状态
    * type  审批类型:  - DEVELOPING: 查询待审批信息  - FINISHED: 查询已审批信息  - APPLY: 查询我的申请页面  默认值：APPLY
    * applyId  申请单号。
    * approverName  审批人。
    * createUser  申请人，该参数只支持在待审批和已审批页面使用。
    * objectName  对象名。
    * objectType  审批对象： - JOB: 作业 - SCRIPT: 脚本  默认审批全部对象。
    * offset  分页的起始页，取值范围大于等于0。样例: offset=0 默认值: 0。
    * limit  分页返回结果，指定每页最大记录数，范围[1,100]。样例: limit=10 默认值: 10。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspace' => null,
        'xProjectId' => null,
        'contentType' => null,
        'beginTime' => 'int64',
        'endTime' => 'int64',
        'status' => null,
        'type' => null,
        'applyId' => null,
        'approverName' => null,
        'createUser' => null,
        'objectName' => null,
        'objectType' => null,
        'offset' => 'int32',
        'limit' => 'int32'
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
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * contentType  默认值：application/json;charset=UTF-8 可选，有Body体的情况下必选，没有Body体则无需填写和校验。
    * beginTime  申请开始时间，13位时间戳。
    * endTime  申请结束时间，13位时间戳。当开始时间和结束时间都不传时，默认查询前7天到当天的数据。
    * status  审批状态：  - DEVELOPING: 待审批  - APPROVED: 已通过  - REJECT: 已驳回  默认查询全部的状态
    * type  审批类型:  - DEVELOPING: 查询待审批信息  - FINISHED: 查询已审批信息  - APPLY: 查询我的申请页面  默认值：APPLY
    * applyId  申请单号。
    * approverName  审批人。
    * createUser  申请人，该参数只支持在待审批和已审批页面使用。
    * objectName  对象名。
    * objectType  审批对象： - JOB: 作业 - SCRIPT: 脚本  默认审批全部对象。
    * offset  分页的起始页，取值范围大于等于0。样例: offset=0 默认值: 0。
    * limit  分页返回结果，指定每页最大记录数，范围[1,100]。样例: limit=10 默认值: 10。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspace' => 'workspace',
            'xProjectId' => 'X-Project-Id',
            'contentType' => 'Content-Type',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'status' => 'status',
            'type' => 'type',
            'applyId' => 'apply_id',
            'approverName' => 'approver_name',
            'createUser' => 'create_user',
            'objectName' => 'object_name',
            'objectType' => 'object_type',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * contentType  默认值：application/json;charset=UTF-8 可选，有Body体的情况下必选，没有Body体则无需填写和校验。
    * beginTime  申请开始时间，13位时间戳。
    * endTime  申请结束时间，13位时间戳。当开始时间和结束时间都不传时，默认查询前7天到当天的数据。
    * status  审批状态：  - DEVELOPING: 待审批  - APPROVED: 已通过  - REJECT: 已驳回  默认查询全部的状态
    * type  审批类型:  - DEVELOPING: 查询待审批信息  - FINISHED: 查询已审批信息  - APPLY: 查询我的申请页面  默认值：APPLY
    * applyId  申请单号。
    * approverName  审批人。
    * createUser  申请人，该参数只支持在待审批和已审批页面使用。
    * objectName  对象名。
    * objectType  审批对象： - JOB: 作业 - SCRIPT: 脚本  默认审批全部对象。
    * offset  分页的起始页，取值范围大于等于0。样例: offset=0 默认值: 0。
    * limit  分页返回结果，指定每页最大记录数，范围[1,100]。样例: limit=10 默认值: 10。
    *
    * @var string[]
    */
    protected static $setters = [
            'workspace' => 'setWorkspace',
            'xProjectId' => 'setXProjectId',
            'contentType' => 'setContentType',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'status' => 'setStatus',
            'type' => 'setType',
            'applyId' => 'setApplyId',
            'approverName' => 'setApproverName',
            'createUser' => 'setCreateUser',
            'objectName' => 'setObjectName',
            'objectType' => 'setObjectType',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * contentType  默认值：application/json;charset=UTF-8 可选，有Body体的情况下必选，没有Body体则无需填写和校验。
    * beginTime  申请开始时间，13位时间戳。
    * endTime  申请结束时间，13位时间戳。当开始时间和结束时间都不传时，默认查询前7天到当天的数据。
    * status  审批状态：  - DEVELOPING: 待审批  - APPROVED: 已通过  - REJECT: 已驳回  默认查询全部的状态
    * type  审批类型:  - DEVELOPING: 查询待审批信息  - FINISHED: 查询已审批信息  - APPLY: 查询我的申请页面  默认值：APPLY
    * applyId  申请单号。
    * approverName  审批人。
    * createUser  申请人，该参数只支持在待审批和已审批页面使用。
    * objectName  对象名。
    * objectType  审批对象： - JOB: 作业 - SCRIPT: 脚本  默认审批全部对象。
    * offset  分页的起始页，取值范围大于等于0。样例: offset=0 默认值: 0。
    * limit  分页返回结果，指定每页最大记录数，范围[1,100]。样例: limit=10 默认值: 10。
    *
    * @var string[]
    */
    protected static $getters = [
            'workspace' => 'getWorkspace',
            'xProjectId' => 'getXProjectId',
            'contentType' => 'getContentType',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'status' => 'getStatus',
            'type' => 'getType',
            'applyId' => 'getApplyId',
            'approverName' => 'getApproverName',
            'createUser' => 'getCreateUser',
            'objectName' => 'getObjectName',
            'objectType' => 'getObjectType',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['xProjectId'] = isset($data['xProjectId']) ? $data['xProjectId'] : null;
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['applyId'] = isset($data['applyId']) ? $data['applyId'] : null;
        $this->container['approverName'] = isset($data['approverName']) ? $data['approverName'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['objectName'] = isset($data['objectName']) ? $data['objectName'] : null;
        $this->container['objectType'] = isset($data['objectType']) ? $data['objectType'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
        }
            if ((mb_strlen($this->container['workspace']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['workspace']) < 3)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['xProjectId']) && (mb_strlen($this->container['xProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'xProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['xProjectId']) && (mb_strlen($this->container['xProjectId']) < 3)) {
                $invalidProperties[] = "invalid value for 'xProjectId', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['contentType']) && (mb_strlen($this->container['contentType']) > 64)) {
                $invalidProperties[] = "invalid value for 'contentType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['contentType']) && (mb_strlen($this->container['contentType']) < 3)) {
                $invalidProperties[] = "invalid value for 'contentType', the character length must be bigger than or equal to 3.";
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
    * Gets workspace
    *  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return string
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string $workspace 工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets xProjectId
    *  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    *
    * @return string|null
    */
    public function getXProjectId()
    {
        return $this->container['xProjectId'];
    }

    /**
    * Sets xProjectId
    *
    * @param string|null $xProjectId 项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    *
    * @return $this
    */
    public function setXProjectId($xProjectId)
    {
        $this->container['xProjectId'] = $xProjectId;
        return $this;
    }

    /**
    * Gets contentType
    *  默认值：application/json;charset=UTF-8 可选，有Body体的情况下必选，没有Body体则无需填写和校验。
    *
    * @return string|null
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string|null $contentType 默认值：application/json;charset=UTF-8 可选，有Body体的情况下必选，没有Body体则无需填写和校验。
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets beginTime
    *  申请开始时间，13位时间戳。
    *
    * @return int|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param int|null $beginTime 申请开始时间，13位时间戳。
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  申请结束时间，13位时间戳。当开始时间和结束时间都不传时，默认查询前7天到当天的数据。
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 申请结束时间，13位时间戳。当开始时间和结束时间都不传时，默认查询前7天到当天的数据。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets status
    *  审批状态：  - DEVELOPING: 待审批  - APPROVED: 已通过  - REJECT: 已驳回  默认查询全部的状态
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
    * @param string|null $status 审批状态：  - DEVELOPING: 待审批  - APPROVED: 已通过  - REJECT: 已驳回  默认查询全部的状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets type
    *  审批类型:  - DEVELOPING: 查询待审批信息  - FINISHED: 查询已审批信息  - APPLY: 查询我的申请页面  默认值：APPLY
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 审批类型:  - DEVELOPING: 查询待审批信息  - FINISHED: 查询已审批信息  - APPLY: 查询我的申请页面  默认值：APPLY
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets applyId
    *  申请单号。
    *
    * @return string|null
    */
    public function getApplyId()
    {
        return $this->container['applyId'];
    }

    /**
    * Sets applyId
    *
    * @param string|null $applyId 申请单号。
    *
    * @return $this
    */
    public function setApplyId($applyId)
    {
        $this->container['applyId'] = $applyId;
        return $this;
    }

    /**
    * Gets approverName
    *  审批人。
    *
    * @return string|null
    */
    public function getApproverName()
    {
        return $this->container['approverName'];
    }

    /**
    * Sets approverName
    *
    * @param string|null $approverName 审批人。
    *
    * @return $this
    */
    public function setApproverName($approverName)
    {
        $this->container['approverName'] = $approverName;
        return $this;
    }

    /**
    * Gets createUser
    *  申请人，该参数只支持在待审批和已审批页面使用。
    *
    * @return string|null
    */
    public function getCreateUser()
    {
        return $this->container['createUser'];
    }

    /**
    * Sets createUser
    *
    * @param string|null $createUser 申请人，该参数只支持在待审批和已审批页面使用。
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets objectName
    *  对象名。
    *
    * @return string|null
    */
    public function getObjectName()
    {
        return $this->container['objectName'];
    }

    /**
    * Sets objectName
    *
    * @param string|null $objectName 对象名。
    *
    * @return $this
    */
    public function setObjectName($objectName)
    {
        $this->container['objectName'] = $objectName;
        return $this;
    }

    /**
    * Gets objectType
    *  审批对象： - JOB: 作业 - SCRIPT: 脚本  默认审批全部对象。
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
    * @param string|null $objectType 审批对象： - JOB: 作业 - SCRIPT: 脚本  默认审批全部对象。
    *
    * @return $this
    */
    public function setObjectType($objectType)
    {
        $this->container['objectType'] = $objectType;
        return $this;
    }

    /**
    * Gets offset
    *  分页的起始页，取值范围大于等于0。样例: offset=0 默认值: 0。
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
    * @param int|null $offset 分页的起始页，取值范围大于等于0。样例: offset=0 默认值: 0。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  分页返回结果，指定每页最大记录数，范围[1,100]。样例: limit=10 默认值: 10。
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
    * @param int|null $limit 分页返回结果，指定每页最大记录数，范围[1,100]。样例: limit=10 默认值: 10。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

