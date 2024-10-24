<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OperationLogItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OperationLogItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * time  操作时间
    * action  操作名称,当前已有的action为CREATE_JOB(创建任务),COMMIT_JOB(提交任务),SYSTEM_AUDIT_PASS(系统审核通过),ADMIN_AUDIT_PASS(管理员审核通过),AUDIT_NOT_PASS(审核未通过),TRAINING_FINISH(训练完成),UPLOADING_MODEL(上传语音模型),COMPLETE_JOB(任务完成)
    * operator  操作者,USER(用户),ADMIN(管理员),SYSTEM(用户)
    * externalInfo  externalInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'time' => 'int',
            'action' => 'string',
            'operator' => 'string',
            'externalInfo' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\OpExternalInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * time  操作时间
    * action  操作名称,当前已有的action为CREATE_JOB(创建任务),COMMIT_JOB(提交任务),SYSTEM_AUDIT_PASS(系统审核通过),ADMIN_AUDIT_PASS(管理员审核通过),AUDIT_NOT_PASS(审核未通过),TRAINING_FINISH(训练完成),UPLOADING_MODEL(上传语音模型),COMPLETE_JOB(任务完成)
    * operator  操作者,USER(用户),ADMIN(管理员),SYSTEM(用户)
    * externalInfo  externalInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'time' => 'int64',
        'action' => null,
        'operator' => null,
        'externalInfo' => null
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
    * time  操作时间
    * action  操作名称,当前已有的action为CREATE_JOB(创建任务),COMMIT_JOB(提交任务),SYSTEM_AUDIT_PASS(系统审核通过),ADMIN_AUDIT_PASS(管理员审核通过),AUDIT_NOT_PASS(审核未通过),TRAINING_FINISH(训练完成),UPLOADING_MODEL(上传语音模型),COMPLETE_JOB(任务完成)
    * operator  操作者,USER(用户),ADMIN(管理员),SYSTEM(用户)
    * externalInfo  externalInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'time' => 'time',
            'action' => 'action',
            'operator' => 'operator',
            'externalInfo' => 'external_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * time  操作时间
    * action  操作名称,当前已有的action为CREATE_JOB(创建任务),COMMIT_JOB(提交任务),SYSTEM_AUDIT_PASS(系统审核通过),ADMIN_AUDIT_PASS(管理员审核通过),AUDIT_NOT_PASS(审核未通过),TRAINING_FINISH(训练完成),UPLOADING_MODEL(上传语音模型),COMPLETE_JOB(任务完成)
    * operator  操作者,USER(用户),ADMIN(管理员),SYSTEM(用户)
    * externalInfo  externalInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'time' => 'setTime',
            'action' => 'setAction',
            'operator' => 'setOperator',
            'externalInfo' => 'setExternalInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * time  操作时间
    * action  操作名称,当前已有的action为CREATE_JOB(创建任务),COMMIT_JOB(提交任务),SYSTEM_AUDIT_PASS(系统审核通过),ADMIN_AUDIT_PASS(管理员审核通过),AUDIT_NOT_PASS(审核未通过),TRAINING_FINISH(训练完成),UPLOADING_MODEL(上传语音模型),COMPLETE_JOB(任务完成)
    * operator  操作者,USER(用户),ADMIN(管理员),SYSTEM(用户)
    * externalInfo  externalInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'time' => 'getTime',
            'action' => 'getAction',
            'operator' => 'getOperator',
            'externalInfo' => 'getExternalInfo'
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
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['externalInfo'] = isset($data['externalInfo']) ? $data['externalInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['time']) && ($this->container['time'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'time', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['time']) && ($this->container['time'] < 0)) {
                $invalidProperties[] = "invalid value for 'time', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['action']) && (mb_strlen($this->container['action']) > 256)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['action']) && (mb_strlen($this->container['action']) < 1)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['operator']) && (mb_strlen($this->container['operator']) > 256)) {
                $invalidProperties[] = "invalid value for 'operator', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['operator']) && (mb_strlen($this->container['operator']) < 1)) {
                $invalidProperties[] = "invalid value for 'operator', the character length must be bigger than or equal to 1.";
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
    * Gets time
    *  操作时间
    *
    * @return int|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param int|null $time 操作时间
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets action
    *  操作名称,当前已有的action为CREATE_JOB(创建任务),COMMIT_JOB(提交任务),SYSTEM_AUDIT_PASS(系统审核通过),ADMIN_AUDIT_PASS(管理员审核通过),AUDIT_NOT_PASS(审核未通过),TRAINING_FINISH(训练完成),UPLOADING_MODEL(上传语音模型),COMPLETE_JOB(任务完成)
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
    * @param string|null $action 操作名称,当前已有的action为CREATE_JOB(创建任务),COMMIT_JOB(提交任务),SYSTEM_AUDIT_PASS(系统审核通过),ADMIN_AUDIT_PASS(管理员审核通过),AUDIT_NOT_PASS(审核未通过),TRAINING_FINISH(训练完成),UPLOADING_MODEL(上传语音模型),COMPLETE_JOB(任务完成)
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets operator
    *  操作者,USER(用户),ADMIN(管理员),SYSTEM(用户)
    *
    * @return string|null
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param string|null $operator 操作者,USER(用户),ADMIN(管理员),SYSTEM(用户)
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets externalInfo
    *  externalInfo
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\OpExternalInfo|null
    */
    public function getExternalInfo()
    {
        return $this->container['externalInfo'];
    }

    /**
    * Sets externalInfo
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\OpExternalInfo|null $externalInfo externalInfo
    *
    * @return $this
    */
    public function setExternalInfo($externalInfo)
    {
        $this->container['externalInfo'] = $externalInfo;
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

