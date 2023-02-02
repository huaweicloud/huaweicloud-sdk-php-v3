<?php

namespace HuaweiCloud\SDK\Kps\v3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FailedTasks implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FailedTasks';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  虚拟机ID
    * operateType  任务的操作类型。 - FAILED_RESET 重置 - FAILED_REPLACE 替换 - FAILED_UNBIND 解绑
    * taskTime  任务时间
    * taskErrorCode  任务失败错误码
    * taskErrorMsg  任务失败错误码
    * serverName  虚拟机名称
    * serverId  虚拟机ID
    * keypairName  密钥对名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'operateType' => 'string',
            'taskTime' => 'string',
            'taskErrorCode' => 'string',
            'taskErrorMsg' => 'string',
            'serverName' => 'string',
            'serverId' => 'string',
            'keypairName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  虚拟机ID
    * operateType  任务的操作类型。 - FAILED_RESET 重置 - FAILED_REPLACE 替换 - FAILED_UNBIND 解绑
    * taskTime  任务时间
    * taskErrorCode  任务失败错误码
    * taskErrorMsg  任务失败错误码
    * serverName  虚拟机名称
    * serverId  虚拟机ID
    * keypairName  密钥对名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'operateType' => null,
        'taskTime' => null,
        'taskErrorCode' => null,
        'taskErrorMsg' => null,
        'serverName' => null,
        'serverId' => null,
        'keypairName' => null
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
    * taskId  虚拟机ID
    * operateType  任务的操作类型。 - FAILED_RESET 重置 - FAILED_REPLACE 替换 - FAILED_UNBIND 解绑
    * taskTime  任务时间
    * taskErrorCode  任务失败错误码
    * taskErrorMsg  任务失败错误码
    * serverName  虚拟机名称
    * serverId  虚拟机ID
    * keypairName  密钥对名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'operateType' => 'operate_type',
            'taskTime' => 'task_time',
            'taskErrorCode' => 'task_error_code',
            'taskErrorMsg' => 'task_error_msg',
            'serverName' => 'server_name',
            'serverId' => 'server_id',
            'keypairName' => 'keypair_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  虚拟机ID
    * operateType  任务的操作类型。 - FAILED_RESET 重置 - FAILED_REPLACE 替换 - FAILED_UNBIND 解绑
    * taskTime  任务时间
    * taskErrorCode  任务失败错误码
    * taskErrorMsg  任务失败错误码
    * serverName  虚拟机名称
    * serverId  虚拟机ID
    * keypairName  密钥对名称
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'operateType' => 'setOperateType',
            'taskTime' => 'setTaskTime',
            'taskErrorCode' => 'setTaskErrorCode',
            'taskErrorMsg' => 'setTaskErrorMsg',
            'serverName' => 'setServerName',
            'serverId' => 'setServerId',
            'keypairName' => 'setKeypairName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  虚拟机ID
    * operateType  任务的操作类型。 - FAILED_RESET 重置 - FAILED_REPLACE 替换 - FAILED_UNBIND 解绑
    * taskTime  任务时间
    * taskErrorCode  任务失败错误码
    * taskErrorMsg  任务失败错误码
    * serverName  虚拟机名称
    * serverId  虚拟机ID
    * keypairName  密钥对名称
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'operateType' => 'getOperateType',
            'taskTime' => 'getTaskTime',
            'taskErrorCode' => 'getTaskErrorCode',
            'taskErrorMsg' => 'getTaskErrorMsg',
            'serverName' => 'getServerName',
            'serverId' => 'getServerId',
            'keypairName' => 'getKeypairName'
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
    const OPERATE_TYPE_FAILED_RESET = 'FAILED_RESET';
    const OPERATE_TYPE_FAILED_REPLACE = 'FAILED_REPLACE';
    const OPERATE_TYPE_FAILED_UNBIND = 'FAILED_UNBIND';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOperateTypeAllowableValues()
    {
        return [
            self::OPERATE_TYPE_FAILED_RESET,
            self::OPERATE_TYPE_FAILED_REPLACE,
            self::OPERATE_TYPE_FAILED_UNBIND,
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['operateType'] = isset($data['operateType']) ? $data['operateType'] : null;
        $this->container['taskTime'] = isset($data['taskTime']) ? $data['taskTime'] : null;
        $this->container['taskErrorCode'] = isset($data['taskErrorCode']) ? $data['taskErrorCode'] : null;
        $this->container['taskErrorMsg'] = isset($data['taskErrorMsg']) ? $data['taskErrorMsg'] : null;
        $this->container['serverName'] = isset($data['serverName']) ? $data['serverName'] : null;
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
        $this->container['keypairName'] = isset($data['keypairName']) ? $data['keypairName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) > 36)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) < 36)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 36.";
            }
            $allowedValues = $this->getOperateTypeAllowableValues();
                if (!is_null($this->container['operateType']) && !in_array($this->container['operateType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'operateType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['taskErrorCode']) && (mb_strlen($this->container['taskErrorCode']) > 255)) {
                $invalidProperties[] = "invalid value for 'taskErrorCode', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['taskErrorCode']) && (mb_strlen($this->container['taskErrorCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskErrorCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['taskErrorMsg']) && (mb_strlen($this->container['taskErrorMsg']) > 255)) {
                $invalidProperties[] = "invalid value for 'taskErrorMsg', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['taskErrorMsg']) && (mb_strlen($this->container['taskErrorMsg']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskErrorMsg', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['serverName']) && (mb_strlen($this->container['serverName']) > 255)) {
                $invalidProperties[] = "invalid value for 'serverName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['serverName']) && (mb_strlen($this->container['serverName']) < 1)) {
                $invalidProperties[] = "invalid value for 'serverName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['serverId']) && (mb_strlen($this->container['serverId']) > 36)) {
                $invalidProperties[] = "invalid value for 'serverId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['serverId']) && (mb_strlen($this->container['serverId']) < 36)) {
                $invalidProperties[] = "invalid value for 'serverId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['keypairName']) && (mb_strlen($this->container['keypairName']) > 255)) {
                $invalidProperties[] = "invalid value for 'keypairName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['keypairName']) && (mb_strlen($this->container['keypairName']) < 1)) {
                $invalidProperties[] = "invalid value for 'keypairName', the character length must be bigger than or equal to 1.";
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
    * Gets taskId
    *  虚拟机ID
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 虚拟机ID
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets operateType
    *  任务的操作类型。 - FAILED_RESET 重置 - FAILED_REPLACE 替换 - FAILED_UNBIND 解绑
    *
    * @return string|null
    */
    public function getOperateType()
    {
        return $this->container['operateType'];
    }

    /**
    * Sets operateType
    *
    * @param string|null $operateType 任务的操作类型。 - FAILED_RESET 重置 - FAILED_REPLACE 替换 - FAILED_UNBIND 解绑
    *
    * @return $this
    */
    public function setOperateType($operateType)
    {
        $this->container['operateType'] = $operateType;
        return $this;
    }

    /**
    * Gets taskTime
    *  任务时间
    *
    * @return string|null
    */
    public function getTaskTime()
    {
        return $this->container['taskTime'];
    }

    /**
    * Sets taskTime
    *
    * @param string|null $taskTime 任务时间
    *
    * @return $this
    */
    public function setTaskTime($taskTime)
    {
        $this->container['taskTime'] = $taskTime;
        return $this;
    }

    /**
    * Gets taskErrorCode
    *  任务失败错误码
    *
    * @return string|null
    */
    public function getTaskErrorCode()
    {
        return $this->container['taskErrorCode'];
    }

    /**
    * Sets taskErrorCode
    *
    * @param string|null $taskErrorCode 任务失败错误码
    *
    * @return $this
    */
    public function setTaskErrorCode($taskErrorCode)
    {
        $this->container['taskErrorCode'] = $taskErrorCode;
        return $this;
    }

    /**
    * Gets taskErrorMsg
    *  任务失败错误码
    *
    * @return string|null
    */
    public function getTaskErrorMsg()
    {
        return $this->container['taskErrorMsg'];
    }

    /**
    * Sets taskErrorMsg
    *
    * @param string|null $taskErrorMsg 任务失败错误码
    *
    * @return $this
    */
    public function setTaskErrorMsg($taskErrorMsg)
    {
        $this->container['taskErrorMsg'] = $taskErrorMsg;
        return $this;
    }

    /**
    * Gets serverName
    *  虚拟机名称
    *
    * @return string|null
    */
    public function getServerName()
    {
        return $this->container['serverName'];
    }

    /**
    * Sets serverName
    *
    * @param string|null $serverName 虚拟机名称
    *
    * @return $this
    */
    public function setServerName($serverName)
    {
        $this->container['serverName'] = $serverName;
        return $this;
    }

    /**
    * Gets serverId
    *  虚拟机ID
    *
    * @return string|null
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string|null $serverId 虚拟机ID
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
        return $this;
    }

    /**
    * Gets keypairName
    *  密钥对名称
    *
    * @return string|null
    */
    public function getKeypairName()
    {
        return $this->container['keypairName'];
    }

    /**
    * Sets keypairName
    *
    * @param string|null $keypairName 密钥对名称
    *
    * @return $this
    */
    public function setKeypairName($keypairName)
    {
        $this->container['keypairName'] = $keypairName;
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

