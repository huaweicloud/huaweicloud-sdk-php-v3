<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceForApiActionDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceForApiActionDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  集群编号
    * instanceType  集群类型
    * name  集群名称
    * action  api操作
    * result  校验结果
    * cause  校验失败的原因
    * apiStatus  api状态
    * apiDebug  api调试状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'instanceType' => 'string',
            'name' => 'string',
            'action' => 'string',
            'result' => 'bool',
            'cause' => 'string',
            'apiStatus' => 'string',
            'apiDebug' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  集群编号
    * instanceType  集群类型
    * name  集群名称
    * action  api操作
    * result  校验结果
    * cause  校验失败的原因
    * apiStatus  api状态
    * apiDebug  api调试状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'instanceType' => null,
        'name' => null,
        'action' => null,
        'result' => null,
        'cause' => null,
        'apiStatus' => null,
        'apiDebug' => null
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
    * instanceId  集群编号
    * instanceType  集群类型
    * name  集群名称
    * action  api操作
    * result  校验结果
    * cause  校验失败的原因
    * apiStatus  api状态
    * apiDebug  api调试状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'instanceType' => 'instance_type',
            'name' => 'name',
            'action' => 'action',
            'result' => 'result',
            'cause' => 'cause',
            'apiStatus' => 'api_status',
            'apiDebug' => 'api_debug'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  集群编号
    * instanceType  集群类型
    * name  集群名称
    * action  api操作
    * result  校验结果
    * cause  校验失败的原因
    * apiStatus  api状态
    * apiDebug  api调试状态
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'instanceType' => 'setInstanceType',
            'name' => 'setName',
            'action' => 'setAction',
            'result' => 'setResult',
            'cause' => 'setCause',
            'apiStatus' => 'setApiStatus',
            'apiDebug' => 'setApiDebug'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  集群编号
    * instanceType  集群类型
    * name  集群名称
    * action  api操作
    * result  校验结果
    * cause  校验失败的原因
    * apiStatus  api状态
    * apiDebug  api调试状态
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'instanceType' => 'getInstanceType',
            'name' => 'getName',
            'action' => 'getAction',
            'result' => 'getResult',
            'cause' => 'getCause',
            'apiStatus' => 'getApiStatus',
            'apiDebug' => 'getApiDebug'
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
    const INSTANCE_TYPE_DLM = 'DLM';
    const INSTANCE_TYPE_APIG = 'APIG';
    const INSTANCE_TYPE_APIGW = 'APIGW';
    const INSTANCE_TYPE_ROMA_APIC = 'ROMA_APIC';
    const ACTION_PUBLISH = 'PUBLISH';
    const ACTION_UNPUBLISH = 'UNPUBLISH';
    const ACTION_STOP = 'STOP';
    const ACTION_RECOVER = 'RECOVER';
    const ACTION_WHITELIST = 'WHITELIST';
    const ACTION_AUTHORIZE = 'AUTHORIZE';
    const CAUSE_API_STATUS_ERROR = 'API_STATUS_ERROR';
    const CAUSE_API_DEBUG_ERROR = 'API_DEBUG_ERROR';
    const CAUSE_TYPE_MISMATCH = 'TYPE_MISMATCH';
    const API_STATUS_API_STATUS_CREATED = 'API_STATUS_CREATED';
    const API_STATUS_API_STATUS_PUBLISH_WAIT_REVIEW = 'API_STATUS_PUBLISH_WAIT_REVIEW';
    const API_STATUS_API_STATUS_PUBLISH_REJECT = 'API_STATUS_PUBLISH_REJECT';
    const API_STATUS_API_STATUS_PUBLISHED = 'API_STATUS_PUBLISHED';
    const API_STATUS_API_STATUS_WAITING_STOP = 'API_STATUS_WAITING_STOP';
    const API_STATUS_API_STATUS_STOPPED = 'API_STATUS_STOPPED';
    const API_STATUS_API_STATUS_RECOVER_WAIT_REVIEW = 'API_STATUS_RECOVER_WAIT_REVIEW';
    const API_STATUS_API_STATUS_WAITING_OFFLINE = 'API_STATUS_WAITING_OFFLINE';
    const API_STATUS_API_STATUS_OFFLINE = 'API_STATUS_OFFLINE';
    const API_DEBUG_API_DEBUG_WAITING = 'API_DEBUG_WAITING';
    const API_DEBUG_API_DEBUG_FAILED = 'API_DEBUG_FAILED';
    const API_DEBUG_API_DEBUG_SUCCESS = 'API_DEBUG_SUCCESS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInstanceTypeAllowableValues()
    {
        return [
            self::INSTANCE_TYPE_DLM,
            self::INSTANCE_TYPE_APIG,
            self::INSTANCE_TYPE_APIGW,
            self::INSTANCE_TYPE_ROMA_APIC,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_PUBLISH,
            self::ACTION_UNPUBLISH,
            self::ACTION_STOP,
            self::ACTION_RECOVER,
            self::ACTION_WHITELIST,
            self::ACTION_AUTHORIZE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCauseAllowableValues()
    {
        return [
            self::CAUSE_API_STATUS_ERROR,
            self::CAUSE_API_DEBUG_ERROR,
            self::CAUSE_TYPE_MISMATCH,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getApiStatusAllowableValues()
    {
        return [
            self::API_STATUS_API_STATUS_CREATED,
            self::API_STATUS_API_STATUS_PUBLISH_WAIT_REVIEW,
            self::API_STATUS_API_STATUS_PUBLISH_REJECT,
            self::API_STATUS_API_STATUS_PUBLISHED,
            self::API_STATUS_API_STATUS_WAITING_STOP,
            self::API_STATUS_API_STATUS_STOPPED,
            self::API_STATUS_API_STATUS_RECOVER_WAIT_REVIEW,
            self::API_STATUS_API_STATUS_WAITING_OFFLINE,
            self::API_STATUS_API_STATUS_OFFLINE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getApiDebugAllowableValues()
    {
        return [
            self::API_DEBUG_API_DEBUG_WAITING,
            self::API_DEBUG_API_DEBUG_FAILED,
            self::API_DEBUG_API_DEBUG_SUCCESS,
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['cause'] = isset($data['cause']) ? $data['cause'] : null;
        $this->container['apiStatus'] = isset($data['apiStatus']) ? $data['apiStatus'] : null;
        $this->container['apiDebug'] = isset($data['apiDebug']) ? $data['apiDebug'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getInstanceTypeAllowableValues();
                if (!is_null($this->container['instanceType']) && !in_array($this->container['instanceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'instanceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getCauseAllowableValues();
                if (!is_null($this->container['cause']) && !in_array($this->container['cause'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'cause', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getApiStatusAllowableValues();
                if (!is_null($this->container['apiStatus']) && !in_array($this->container['apiStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'apiStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getApiDebugAllowableValues();
                if (!is_null($this->container['apiDebug']) && !in_array($this->container['apiDebug'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'apiDebug', must be one of '%s'",
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
    * Gets instanceId
    *  集群编号
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 集群编号
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceType
    *  集群类型
    *
    * @return string|null
    */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
    * Sets instanceType
    *
    * @param string|null $instanceType 集群类型
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
        return $this;
    }

    /**
    * Gets name
    *  集群名称
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
    * @param string|null $name 集群名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets action
    *  api操作
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action api操作
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets result
    *  校验结果
    *
    * @return bool|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param bool|null $result 校验结果
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets cause
    *  校验失败的原因
    *
    * @return string|null
    */
    public function getCause()
    {
        return $this->container['cause'];
    }

    /**
    * Sets cause
    *
    * @param string|null $cause 校验失败的原因
    *
    * @return $this
    */
    public function setCause($cause)
    {
        $this->container['cause'] = $cause;
        return $this;
    }

    /**
    * Gets apiStatus
    *  api状态
    *
    * @return string|null
    */
    public function getApiStatus()
    {
        return $this->container['apiStatus'];
    }

    /**
    * Sets apiStatus
    *
    * @param string|null $apiStatus api状态
    *
    * @return $this
    */
    public function setApiStatus($apiStatus)
    {
        $this->container['apiStatus'] = $apiStatus;
        return $this;
    }

    /**
    * Gets apiDebug
    *  api调试状态
    *
    * @return string|null
    */
    public function getApiDebug()
    {
        return $this->container['apiDebug'];
    }

    /**
    * Sets apiDebug
    *
    * @param string|null $apiDebug api调试状态
    *
    * @return $this
    */
    public function setApiDebug($apiDebug)
    {
        $this->container['apiDebug'] = $apiDebug;
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

