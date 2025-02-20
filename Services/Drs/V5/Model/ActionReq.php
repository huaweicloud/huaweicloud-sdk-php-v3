<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ActionReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ActionReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务ID (对比任务相关操作，多任务场景传父任务详情返回的master_job_id)，批量操作时必填
    * actionName  操作任务动作名称。取值： - network：测试连接源库/目标库。 - precheck：执行预检查。 - start：启动任务。 - stop：暂停任务。 - restart：重试任务。 - reset：重置任务，需要先调用预检查接口并且预检查通过率为100%。 - terminate：结束任务。 - skip_precheck：跳过预检查。 - create_compare：创建对比任务。 - cancel_compare：取消对比任务。 - column_limit：字段过滤。 - reload_parameters：重新加载任务参数。 - bind_eip：绑定公网IP。 - unbind_eip：解绑公网IP。 - set_writable：目标库解除只读。 - cloud_connection：录制回放他云连通性测试。 - set_readonly: 灾备任务目标库设置只读。 - diagnosis：一键诊断。 - start_repair：开始数据修复。 - stop_repair：停止数据修复。
    * actionParams  actionParams
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'actionName' => 'string',
            'actionParams' => '\HuaweiCloud\SDK\Drs\V5\Model\ActionParams'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务ID (对比任务相关操作，多任务场景传父任务详情返回的master_job_id)，批量操作时必填
    * actionName  操作任务动作名称。取值： - network：测试连接源库/目标库。 - precheck：执行预检查。 - start：启动任务。 - stop：暂停任务。 - restart：重试任务。 - reset：重置任务，需要先调用预检查接口并且预检查通过率为100%。 - terminate：结束任务。 - skip_precheck：跳过预检查。 - create_compare：创建对比任务。 - cancel_compare：取消对比任务。 - column_limit：字段过滤。 - reload_parameters：重新加载任务参数。 - bind_eip：绑定公网IP。 - unbind_eip：解绑公网IP。 - set_writable：目标库解除只读。 - cloud_connection：录制回放他云连通性测试。 - set_readonly: 灾备任务目标库设置只读。 - diagnosis：一键诊断。 - start_repair：开始数据修复。 - stop_repair：停止数据修复。
    * actionParams  actionParams
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'actionName' => null,
        'actionParams' => null
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
    * jobId  任务ID (对比任务相关操作，多任务场景传父任务详情返回的master_job_id)，批量操作时必填
    * actionName  操作任务动作名称。取值： - network：测试连接源库/目标库。 - precheck：执行预检查。 - start：启动任务。 - stop：暂停任务。 - restart：重试任务。 - reset：重置任务，需要先调用预检查接口并且预检查通过率为100%。 - terminate：结束任务。 - skip_precheck：跳过预检查。 - create_compare：创建对比任务。 - cancel_compare：取消对比任务。 - column_limit：字段过滤。 - reload_parameters：重新加载任务参数。 - bind_eip：绑定公网IP。 - unbind_eip：解绑公网IP。 - set_writable：目标库解除只读。 - cloud_connection：录制回放他云连通性测试。 - set_readonly: 灾备任务目标库设置只读。 - diagnosis：一键诊断。 - start_repair：开始数据修复。 - stop_repair：停止数据修复。
    * actionParams  actionParams
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'actionName' => 'action_name',
            'actionParams' => 'action_params'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务ID (对比任务相关操作，多任务场景传父任务详情返回的master_job_id)，批量操作时必填
    * actionName  操作任务动作名称。取值： - network：测试连接源库/目标库。 - precheck：执行预检查。 - start：启动任务。 - stop：暂停任务。 - restart：重试任务。 - reset：重置任务，需要先调用预检查接口并且预检查通过率为100%。 - terminate：结束任务。 - skip_precheck：跳过预检查。 - create_compare：创建对比任务。 - cancel_compare：取消对比任务。 - column_limit：字段过滤。 - reload_parameters：重新加载任务参数。 - bind_eip：绑定公网IP。 - unbind_eip：解绑公网IP。 - set_writable：目标库解除只读。 - cloud_connection：录制回放他云连通性测试。 - set_readonly: 灾备任务目标库设置只读。 - diagnosis：一键诊断。 - start_repair：开始数据修复。 - stop_repair：停止数据修复。
    * actionParams  actionParams
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'actionName' => 'setActionName',
            'actionParams' => 'setActionParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务ID (对比任务相关操作，多任务场景传父任务详情返回的master_job_id)，批量操作时必填
    * actionName  操作任务动作名称。取值： - network：测试连接源库/目标库。 - precheck：执行预检查。 - start：启动任务。 - stop：暂停任务。 - restart：重试任务。 - reset：重置任务，需要先调用预检查接口并且预检查通过率为100%。 - terminate：结束任务。 - skip_precheck：跳过预检查。 - create_compare：创建对比任务。 - cancel_compare：取消对比任务。 - column_limit：字段过滤。 - reload_parameters：重新加载任务参数。 - bind_eip：绑定公网IP。 - unbind_eip：解绑公网IP。 - set_writable：目标库解除只读。 - cloud_connection：录制回放他云连通性测试。 - set_readonly: 灾备任务目标库设置只读。 - diagnosis：一键诊断。 - start_repair：开始数据修复。 - stop_repair：停止数据修复。
    * actionParams  actionParams
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'actionName' => 'getActionName',
            'actionParams' => 'getActionParams'
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
    const ACTION_NAME_NETWORK = 'network';
    const ACTION_NAME_PRECHECK = 'precheck';
    const ACTION_NAME_START = 'start';
    const ACTION_NAME_STOP = 'stop';
    const ACTION_NAME_RESTART = 'restart';
    const ACTION_NAME_RESET = 'reset';
    const ACTION_NAME_TERMINATE = 'terminate';
    const ACTION_NAME_SKIP_PRECHECK = 'skip_precheck';
    const ACTION_NAME_CREATE_COMPARE = 'create_compare';
    const ACTION_NAME_CANCEL_COMPARE = 'cancel_compare';
    const ACTION_NAME_COLUMN_LIMIT = 'column_limit';
    const ACTION_NAME_RELOAD_PARAMETERS = 'reload_parameters';
    const ACTION_NAME_BIND_EIP = 'bind_eip';
    const ACTION_NAME_UNBIND_EIP = 'unbind_eip';
    const ACTION_NAME_SET_WRITABLE = 'set_writable';
    const ACTION_NAME_CLOUD_CONNECTION = 'cloud_connection';
    const ACTION_NAME_SET_READONLY = 'set_readonly';
    const ACTION_NAME_DIAGNOSIS = 'diagnosis：一键诊断。';
    const ACTION_NAME_START_REPAIR = 'start_repair：开始数据修复。';
    const ACTION_NAME_STOP_REPAIR = 'stop_repair：停止数据修复。';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionNameAllowableValues()
    {
        return [
            self::ACTION_NAME_NETWORK,
            self::ACTION_NAME_PRECHECK,
            self::ACTION_NAME_START,
            self::ACTION_NAME_STOP,
            self::ACTION_NAME_RESTART,
            self::ACTION_NAME_RESET,
            self::ACTION_NAME_TERMINATE,
            self::ACTION_NAME_SKIP_PRECHECK,
            self::ACTION_NAME_CREATE_COMPARE,
            self::ACTION_NAME_CANCEL_COMPARE,
            self::ACTION_NAME_COLUMN_LIMIT,
            self::ACTION_NAME_RELOAD_PARAMETERS,
            self::ACTION_NAME_BIND_EIP,
            self::ACTION_NAME_UNBIND_EIP,
            self::ACTION_NAME_SET_WRITABLE,
            self::ACTION_NAME_CLOUD_CONNECTION,
            self::ACTION_NAME_SET_READONLY,
            self::ACTION_NAME_DIAGNOSIS,
            self::ACTION_NAME_START_REPAIR,
            self::ACTION_NAME_STOP_REPAIR,
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['actionName'] = isset($data['actionName']) ? $data['actionName'] : null;
        $this->container['actionParams'] = isset($data['actionParams']) ? $data['actionParams'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['actionName'] === null) {
            $invalidProperties[] = "'actionName' can't be null";
        }
            $allowedValues = $this->getActionNameAllowableValues();
                if (!is_null($this->container['actionName']) && !in_array($this->container['actionName'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'actionName', must be one of '%s'",
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
    * Gets jobId
    *  任务ID (对比任务相关操作，多任务场景传父任务详情返回的master_job_id)，批量操作时必填
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 任务ID (对比任务相关操作，多任务场景传父任务详情返回的master_job_id)，批量操作时必填
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets actionName
    *  操作任务动作名称。取值： - network：测试连接源库/目标库。 - precheck：执行预检查。 - start：启动任务。 - stop：暂停任务。 - restart：重试任务。 - reset：重置任务，需要先调用预检查接口并且预检查通过率为100%。 - terminate：结束任务。 - skip_precheck：跳过预检查。 - create_compare：创建对比任务。 - cancel_compare：取消对比任务。 - column_limit：字段过滤。 - reload_parameters：重新加载任务参数。 - bind_eip：绑定公网IP。 - unbind_eip：解绑公网IP。 - set_writable：目标库解除只读。 - cloud_connection：录制回放他云连通性测试。 - set_readonly: 灾备任务目标库设置只读。 - diagnosis：一键诊断。 - start_repair：开始数据修复。 - stop_repair：停止数据修复。
    *
    * @return string
    */
    public function getActionName()
    {
        return $this->container['actionName'];
    }

    /**
    * Sets actionName
    *
    * @param string $actionName 操作任务动作名称。取值： - network：测试连接源库/目标库。 - precheck：执行预检查。 - start：启动任务。 - stop：暂停任务。 - restart：重试任务。 - reset：重置任务，需要先调用预检查接口并且预检查通过率为100%。 - terminate：结束任务。 - skip_precheck：跳过预检查。 - create_compare：创建对比任务。 - cancel_compare：取消对比任务。 - column_limit：字段过滤。 - reload_parameters：重新加载任务参数。 - bind_eip：绑定公网IP。 - unbind_eip：解绑公网IP。 - set_writable：目标库解除只读。 - cloud_connection：录制回放他云连通性测试。 - set_readonly: 灾备任务目标库设置只读。 - diagnosis：一键诊断。 - start_repair：开始数据修复。 - stop_repair：停止数据修复。
    *
    * @return $this
    */
    public function setActionName($actionName)
    {
        $this->container['actionName'] = $actionName;
        return $this;
    }

    /**
    * Gets actionParams
    *  actionParams
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\ActionParams|null
    */
    public function getActionParams()
    {
        return $this->container['actionParams'];
    }

    /**
    * Sets actionParams
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\ActionParams|null $actionParams actionParams
    *
    * @return $this
    */
    public function setActionParams($actionParams)
    {
        $this->container['actionParams'] = $actionParams;
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

