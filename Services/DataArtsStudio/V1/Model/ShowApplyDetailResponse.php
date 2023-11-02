<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowApplyDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowApplyDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  申请编号
    * apiApplyStatus  申请状态
    * apiApplyType  申请类型
    * apiId  api编号
    * apiName  api名称
    * apiUsingTime  使用截止时间
    * appId  app编号
    * appName  app名称
    * applyTime  申请时间
    * approvalTime  授权时间
    * approverName  审核人名称
    * comment  审核评论
    * userName  申请人姓名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'apiApplyStatus' => 'string',
            'apiApplyType' => 'string',
            'apiId' => 'string',
            'apiName' => 'string',
            'apiUsingTime' => 'int',
            'appId' => 'string',
            'appName' => 'string',
            'applyTime' => 'int',
            'approvalTime' => 'int',
            'approverName' => 'string',
            'comment' => 'string',
            'userName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  申请编号
    * apiApplyStatus  申请状态
    * apiApplyType  申请类型
    * apiId  api编号
    * apiName  api名称
    * apiUsingTime  使用截止时间
    * appId  app编号
    * appName  app名称
    * applyTime  申请时间
    * approvalTime  授权时间
    * approverName  审核人名称
    * comment  审核评论
    * userName  申请人姓名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'apiApplyStatus' => null,
        'apiApplyType' => null,
        'apiId' => null,
        'apiName' => null,
        'apiUsingTime' => 'int64',
        'appId' => null,
        'appName' => null,
        'applyTime' => 'int64',
        'approvalTime' => 'int64',
        'approverName' => null,
        'comment' => null,
        'userName' => null
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
    * id  申请编号
    * apiApplyStatus  申请状态
    * apiApplyType  申请类型
    * apiId  api编号
    * apiName  api名称
    * apiUsingTime  使用截止时间
    * appId  app编号
    * appName  app名称
    * applyTime  申请时间
    * approvalTime  授权时间
    * approverName  审核人名称
    * comment  审核评论
    * userName  申请人姓名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'apiApplyStatus' => 'api_apply_status',
            'apiApplyType' => 'api_apply_type',
            'apiId' => 'api_id',
            'apiName' => 'api_name',
            'apiUsingTime' => 'api_using_time',
            'appId' => 'app_id',
            'appName' => 'app_name',
            'applyTime' => 'apply_time',
            'approvalTime' => 'approval_time',
            'approverName' => 'approver_name',
            'comment' => 'comment',
            'userName' => 'user_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  申请编号
    * apiApplyStatus  申请状态
    * apiApplyType  申请类型
    * apiId  api编号
    * apiName  api名称
    * apiUsingTime  使用截止时间
    * appId  app编号
    * appName  app名称
    * applyTime  申请时间
    * approvalTime  授权时间
    * approverName  审核人名称
    * comment  审核评论
    * userName  申请人姓名
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'apiApplyStatus' => 'setApiApplyStatus',
            'apiApplyType' => 'setApiApplyType',
            'apiId' => 'setApiId',
            'apiName' => 'setApiName',
            'apiUsingTime' => 'setApiUsingTime',
            'appId' => 'setAppId',
            'appName' => 'setAppName',
            'applyTime' => 'setApplyTime',
            'approvalTime' => 'setApprovalTime',
            'approverName' => 'setApproverName',
            'comment' => 'setComment',
            'userName' => 'setUserName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  申请编号
    * apiApplyStatus  申请状态
    * apiApplyType  申请类型
    * apiId  api编号
    * apiName  api名称
    * apiUsingTime  使用截止时间
    * appId  app编号
    * appName  app名称
    * applyTime  申请时间
    * approvalTime  授权时间
    * approverName  审核人名称
    * comment  审核评论
    * userName  申请人姓名
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'apiApplyStatus' => 'getApiApplyStatus',
            'apiApplyType' => 'getApiApplyType',
            'apiId' => 'getApiId',
            'apiName' => 'getApiName',
            'apiUsingTime' => 'getApiUsingTime',
            'appId' => 'getAppId',
            'appName' => 'getAppName',
            'applyTime' => 'getApplyTime',
            'approvalTime' => 'getApprovalTime',
            'approverName' => 'getApproverName',
            'comment' => 'getComment',
            'userName' => 'getUserName'
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
    const API_APPLY_STATUS_STATUS_TYPE_PENDING_APPROVAL = 'STATUS_TYPE_PENDING_APPROVAL';
    const API_APPLY_STATUS_STATUS_TYPE_REJECTED = 'STATUS_TYPE_REJECTED';
    const API_APPLY_STATUS_STATUS_TYPE_PENDING_CHECK = 'STATUS_TYPE_PENDING_CHECK';
    const API_APPLY_STATUS_STATUS_TYPE_PENDING_EXECUTE = 'STATUS_TYPE_PENDING_EXECUTE';
    const API_APPLY_STATUS_STATUS_TYPE_SYNCHRONOUS_EXECUTE = 'STATUS_TYPE_SYNCHRONOUS_EXECUTE';
    const API_APPLY_STATUS_STATUS_TYPE_FORCED_CANCEL = 'STATUS_TYPE_FORCED_CANCEL';
    const API_APPLY_STATUS_STATUS_TYPE_PASSED = 'STATUS_TYPE_PASSED';
    const API_APPLY_TYPE_APPLY_TYPE_PUBLISH = 'APPLY_TYPE_PUBLISH';
    const API_APPLY_TYPE_APPLY_TYPE_AUTHORIZE = 'APPLY_TYPE_AUTHORIZE';
    const API_APPLY_TYPE_APPLY_TYPE_APPLY = 'APPLY_TYPE_APPLY';
    const API_APPLY_TYPE_APPLY_TYPE_RENEW = 'APPLY_TYPE_RENEW';
    const API_APPLY_TYPE_APPLY_TYPE_STOP = 'APPLY_TYPE_STOP';
    const API_APPLY_TYPE_APPLY_TYPE_RECOVER = 'APPLY_TYPE_RECOVER';
    const API_APPLY_TYPE_APPLY_TYPE_API_CANCEL_AUTHORIZE = 'APPLY_TYPE_API_CANCEL_AUTHORIZE';
    const API_APPLY_TYPE_APPLY_TYPE_APP_CANCEL_AUTHORIZE = 'APPLY_TYPE_APP_CANCEL_AUTHORIZE';
    const API_APPLY_TYPE_APPLY_TYPE_OFFLINE = 'APPLY_TYPE_OFFLINE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getApiApplyStatusAllowableValues()
    {
        return [
            self::API_APPLY_STATUS_STATUS_TYPE_PENDING_APPROVAL,
            self::API_APPLY_STATUS_STATUS_TYPE_REJECTED,
            self::API_APPLY_STATUS_STATUS_TYPE_PENDING_CHECK,
            self::API_APPLY_STATUS_STATUS_TYPE_PENDING_EXECUTE,
            self::API_APPLY_STATUS_STATUS_TYPE_SYNCHRONOUS_EXECUTE,
            self::API_APPLY_STATUS_STATUS_TYPE_FORCED_CANCEL,
            self::API_APPLY_STATUS_STATUS_TYPE_PASSED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getApiApplyTypeAllowableValues()
    {
        return [
            self::API_APPLY_TYPE_APPLY_TYPE_PUBLISH,
            self::API_APPLY_TYPE_APPLY_TYPE_AUTHORIZE,
            self::API_APPLY_TYPE_APPLY_TYPE_APPLY,
            self::API_APPLY_TYPE_APPLY_TYPE_RENEW,
            self::API_APPLY_TYPE_APPLY_TYPE_STOP,
            self::API_APPLY_TYPE_APPLY_TYPE_RECOVER,
            self::API_APPLY_TYPE_APPLY_TYPE_API_CANCEL_AUTHORIZE,
            self::API_APPLY_TYPE_APPLY_TYPE_APP_CANCEL_AUTHORIZE,
            self::API_APPLY_TYPE_APPLY_TYPE_OFFLINE,
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
        $this->container['apiApplyStatus'] = isset($data['apiApplyStatus']) ? $data['apiApplyStatus'] : null;
        $this->container['apiApplyType'] = isset($data['apiApplyType']) ? $data['apiApplyType'] : null;
        $this->container['apiId'] = isset($data['apiId']) ? $data['apiId'] : null;
        $this->container['apiName'] = isset($data['apiName']) ? $data['apiName'] : null;
        $this->container['apiUsingTime'] = isset($data['apiUsingTime']) ? $data['apiUsingTime'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['applyTime'] = isset($data['applyTime']) ? $data['applyTime'] : null;
        $this->container['approvalTime'] = isset($data['approvalTime']) ? $data['approvalTime'] : null;
        $this->container['approverName'] = isset($data['approverName']) ? $data['approverName'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getApiApplyStatusAllowableValues();
                if (!is_null($this->container['apiApplyStatus']) && !in_array($this->container['apiApplyStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'apiApplyStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getApiApplyTypeAllowableValues();
                if (!is_null($this->container['apiApplyType']) && !in_array($this->container['apiApplyType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'apiApplyType', must be one of '%s'",
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
    *  申请编号
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
    * @param string|null $id 申请编号
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets apiApplyStatus
    *  申请状态
    *
    * @return string|null
    */
    public function getApiApplyStatus()
    {
        return $this->container['apiApplyStatus'];
    }

    /**
    * Sets apiApplyStatus
    *
    * @param string|null $apiApplyStatus 申请状态
    *
    * @return $this
    */
    public function setApiApplyStatus($apiApplyStatus)
    {
        $this->container['apiApplyStatus'] = $apiApplyStatus;
        return $this;
    }

    /**
    * Gets apiApplyType
    *  申请类型
    *
    * @return string|null
    */
    public function getApiApplyType()
    {
        return $this->container['apiApplyType'];
    }

    /**
    * Sets apiApplyType
    *
    * @param string|null $apiApplyType 申请类型
    *
    * @return $this
    */
    public function setApiApplyType($apiApplyType)
    {
        $this->container['apiApplyType'] = $apiApplyType;
        return $this;
    }

    /**
    * Gets apiId
    *  api编号
    *
    * @return string|null
    */
    public function getApiId()
    {
        return $this->container['apiId'];
    }

    /**
    * Sets apiId
    *
    * @param string|null $apiId api编号
    *
    * @return $this
    */
    public function setApiId($apiId)
    {
        $this->container['apiId'] = $apiId;
        return $this;
    }

    /**
    * Gets apiName
    *  api名称
    *
    * @return string|null
    */
    public function getApiName()
    {
        return $this->container['apiName'];
    }

    /**
    * Sets apiName
    *
    * @param string|null $apiName api名称
    *
    * @return $this
    */
    public function setApiName($apiName)
    {
        $this->container['apiName'] = $apiName;
        return $this;
    }

    /**
    * Gets apiUsingTime
    *  使用截止时间
    *
    * @return int|null
    */
    public function getApiUsingTime()
    {
        return $this->container['apiUsingTime'];
    }

    /**
    * Sets apiUsingTime
    *
    * @param int|null $apiUsingTime 使用截止时间
    *
    * @return $this
    */
    public function setApiUsingTime($apiUsingTime)
    {
        $this->container['apiUsingTime'] = $apiUsingTime;
        return $this;
    }

    /**
    * Gets appId
    *  app编号
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId app编号
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets appName
    *  app名称
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName app名称
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets applyTime
    *  申请时间
    *
    * @return int|null
    */
    public function getApplyTime()
    {
        return $this->container['applyTime'];
    }

    /**
    * Sets applyTime
    *
    * @param int|null $applyTime 申请时间
    *
    * @return $this
    */
    public function setApplyTime($applyTime)
    {
        $this->container['applyTime'] = $applyTime;
        return $this;
    }

    /**
    * Gets approvalTime
    *  授权时间
    *
    * @return int|null
    */
    public function getApprovalTime()
    {
        return $this->container['approvalTime'];
    }

    /**
    * Sets approvalTime
    *
    * @param int|null $approvalTime 授权时间
    *
    * @return $this
    */
    public function setApprovalTime($approvalTime)
    {
        $this->container['approvalTime'] = $approvalTime;
        return $this;
    }

    /**
    * Gets approverName
    *  审核人名称
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
    * @param string|null $approverName 审核人名称
    *
    * @return $this
    */
    public function setApproverName($approverName)
    {
        $this->container['approverName'] = $approverName;
        return $this;
    }

    /**
    * Gets comment
    *  审核评论
    *
    * @return string|null
    */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
    * Sets comment
    *
    * @param string|null $comment 审核评论
    *
    * @return $this
    */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;
        return $this;
    }

    /**
    * Gets userName
    *  申请人姓名
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 申请人姓名
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
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

