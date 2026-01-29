<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ComponentActionVersionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ComponentActionVersionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  插件执行函数版本id
    * createTime  创建时间
    * creatorName  创建者名称
    * updateTime  更新时间
    * actionVersionName  用户自定义执行函数版本别名
    * actionVersionNumber  内部生成的执行函数版本号，只会递增
    * actionVersionDesc  版本描述
    * actionInput  执行函数版本输入参数列表
    * actionOutput  执行函数版本输出参数列表
    * actionCode  执行函数代码
    * actionStatus  版本审核状态
    * actionEnable  启用/禁用状态
    * debugResult  调试结果
    * debugOutput  调试输出
    * debugLog  调试日志
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'createTime' => 'string',
            'creatorName' => 'string',
            'updateTime' => 'string',
            'actionVersionName' => 'string',
            'actionVersionNumber' => 'string',
            'actionVersionDesc' => 'string',
            'actionInput' => 'string',
            'actionOutput' => 'string',
            'actionCode' => 'string',
            'actionStatus' => 'string',
            'actionEnable' => 'string',
            'debugResult' => 'string',
            'debugOutput' => 'string',
            'debugLog' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  插件执行函数版本id
    * createTime  创建时间
    * creatorName  创建者名称
    * updateTime  更新时间
    * actionVersionName  用户自定义执行函数版本别名
    * actionVersionNumber  内部生成的执行函数版本号，只会递增
    * actionVersionDesc  版本描述
    * actionInput  执行函数版本输入参数列表
    * actionOutput  执行函数版本输出参数列表
    * actionCode  执行函数代码
    * actionStatus  版本审核状态
    * actionEnable  启用/禁用状态
    * debugResult  调试结果
    * debugOutput  调试输出
    * debugLog  调试日志
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'createTime' => null,
        'creatorName' => null,
        'updateTime' => null,
        'actionVersionName' => null,
        'actionVersionNumber' => null,
        'actionVersionDesc' => null,
        'actionInput' => null,
        'actionOutput' => null,
        'actionCode' => null,
        'actionStatus' => null,
        'actionEnable' => null,
        'debugResult' => null,
        'debugOutput' => null,
        'debugLog' => null
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
    * id  插件执行函数版本id
    * createTime  创建时间
    * creatorName  创建者名称
    * updateTime  更新时间
    * actionVersionName  用户自定义执行函数版本别名
    * actionVersionNumber  内部生成的执行函数版本号，只会递增
    * actionVersionDesc  版本描述
    * actionInput  执行函数版本输入参数列表
    * actionOutput  执行函数版本输出参数列表
    * actionCode  执行函数代码
    * actionStatus  版本审核状态
    * actionEnable  启用/禁用状态
    * debugResult  调试结果
    * debugOutput  调试输出
    * debugLog  调试日志
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'createTime' => 'create_time',
            'creatorName' => 'creator_name',
            'updateTime' => 'update_time',
            'actionVersionName' => 'action_version_name',
            'actionVersionNumber' => 'action_version_number',
            'actionVersionDesc' => 'action_version_desc',
            'actionInput' => 'action_input',
            'actionOutput' => 'action_output',
            'actionCode' => 'action_code',
            'actionStatus' => 'action_status',
            'actionEnable' => 'action_enable',
            'debugResult' => 'debug_result',
            'debugOutput' => 'debug_output',
            'debugLog' => 'debug_log'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  插件执行函数版本id
    * createTime  创建时间
    * creatorName  创建者名称
    * updateTime  更新时间
    * actionVersionName  用户自定义执行函数版本别名
    * actionVersionNumber  内部生成的执行函数版本号，只会递增
    * actionVersionDesc  版本描述
    * actionInput  执行函数版本输入参数列表
    * actionOutput  执行函数版本输出参数列表
    * actionCode  执行函数代码
    * actionStatus  版本审核状态
    * actionEnable  启用/禁用状态
    * debugResult  调试结果
    * debugOutput  调试输出
    * debugLog  调试日志
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'createTime' => 'setCreateTime',
            'creatorName' => 'setCreatorName',
            'updateTime' => 'setUpdateTime',
            'actionVersionName' => 'setActionVersionName',
            'actionVersionNumber' => 'setActionVersionNumber',
            'actionVersionDesc' => 'setActionVersionDesc',
            'actionInput' => 'setActionInput',
            'actionOutput' => 'setActionOutput',
            'actionCode' => 'setActionCode',
            'actionStatus' => 'setActionStatus',
            'actionEnable' => 'setActionEnable',
            'debugResult' => 'setDebugResult',
            'debugOutput' => 'setDebugOutput',
            'debugLog' => 'setDebugLog'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  插件执行函数版本id
    * createTime  创建时间
    * creatorName  创建者名称
    * updateTime  更新时间
    * actionVersionName  用户自定义执行函数版本别名
    * actionVersionNumber  内部生成的执行函数版本号，只会递增
    * actionVersionDesc  版本描述
    * actionInput  执行函数版本输入参数列表
    * actionOutput  执行函数版本输出参数列表
    * actionCode  执行函数代码
    * actionStatus  版本审核状态
    * actionEnable  启用/禁用状态
    * debugResult  调试结果
    * debugOutput  调试输出
    * debugLog  调试日志
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'createTime' => 'getCreateTime',
            'creatorName' => 'getCreatorName',
            'updateTime' => 'getUpdateTime',
            'actionVersionName' => 'getActionVersionName',
            'actionVersionNumber' => 'getActionVersionNumber',
            'actionVersionDesc' => 'getActionVersionDesc',
            'actionInput' => 'getActionInput',
            'actionOutput' => 'getActionOutput',
            'actionCode' => 'getActionCode',
            'actionStatus' => 'getActionStatus',
            'actionEnable' => 'getActionEnable',
            'debugResult' => 'getDebugResult',
            'debugOutput' => 'getDebugOutput',
            'debugLog' => 'getDebugLog'
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
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['actionVersionName'] = isset($data['actionVersionName']) ? $data['actionVersionName'] : null;
        $this->container['actionVersionNumber'] = isset($data['actionVersionNumber']) ? $data['actionVersionNumber'] : null;
        $this->container['actionVersionDesc'] = isset($data['actionVersionDesc']) ? $data['actionVersionDesc'] : null;
        $this->container['actionInput'] = isset($data['actionInput']) ? $data['actionInput'] : null;
        $this->container['actionOutput'] = isset($data['actionOutput']) ? $data['actionOutput'] : null;
        $this->container['actionCode'] = isset($data['actionCode']) ? $data['actionCode'] : null;
        $this->container['actionStatus'] = isset($data['actionStatus']) ? $data['actionStatus'] : null;
        $this->container['actionEnable'] = isset($data['actionEnable']) ? $data['actionEnable'] : null;
        $this->container['debugResult'] = isset($data['debugResult']) ? $data['debugResult'] : null;
        $this->container['debugOutput'] = isset($data['debugOutput']) ? $data['debugOutput'] : null;
        $this->container['debugLog'] = isset($data['debugLog']) ? $data['debugLog'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 128)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 128)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) > 64)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) < 1)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 128)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['actionVersionName']) && (mb_strlen($this->container['actionVersionName']) > 8)) {
                $invalidProperties[] = "invalid value for 'actionVersionName', the character length must be smaller than or equal to 8.";
            }
            if (!is_null($this->container['actionVersionName']) && (mb_strlen($this->container['actionVersionName']) < 0)) {
                $invalidProperties[] = "invalid value for 'actionVersionName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['actionVersionNumber']) && (mb_strlen($this->container['actionVersionNumber']) > 8)) {
                $invalidProperties[] = "invalid value for 'actionVersionNumber', the character length must be smaller than or equal to 8.";
            }
            if (!is_null($this->container['actionVersionNumber']) && (mb_strlen($this->container['actionVersionNumber']) < 0)) {
                $invalidProperties[] = "invalid value for 'actionVersionNumber', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['actionVersionDesc']) && (mb_strlen($this->container['actionVersionDesc']) > 256)) {
                $invalidProperties[] = "invalid value for 'actionVersionDesc', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['actionVersionDesc']) && (mb_strlen($this->container['actionVersionDesc']) < 0)) {
                $invalidProperties[] = "invalid value for 'actionVersionDesc', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['actionInput']) && (mb_strlen($this->container['actionInput']) > 65535)) {
                $invalidProperties[] = "invalid value for 'actionInput', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['actionInput']) && (mb_strlen($this->container['actionInput']) < 0)) {
                $invalidProperties[] = "invalid value for 'actionInput', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['actionOutput']) && (mb_strlen($this->container['actionOutput']) > 65535)) {
                $invalidProperties[] = "invalid value for 'actionOutput', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['actionOutput']) && (mb_strlen($this->container['actionOutput']) < 0)) {
                $invalidProperties[] = "invalid value for 'actionOutput', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['actionCode']) && (mb_strlen($this->container['actionCode']) > 1048576)) {
                $invalidProperties[] = "invalid value for 'actionCode', the character length must be smaller than or equal to 1048576.";
            }
            if (!is_null($this->container['actionCode']) && (mb_strlen($this->container['actionCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'actionCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['actionStatus']) && (mb_strlen($this->container['actionStatus']) > 16)) {
                $invalidProperties[] = "invalid value for 'actionStatus', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['actionStatus']) && (mb_strlen($this->container['actionStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'actionStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['actionEnable']) && (mb_strlen($this->container['actionEnable']) > 16)) {
                $invalidProperties[] = "invalid value for 'actionEnable', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['actionEnable']) && (mb_strlen($this->container['actionEnable']) < 0)) {
                $invalidProperties[] = "invalid value for 'actionEnable', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['debugResult']) && (mb_strlen($this->container['debugResult']) > 16)) {
                $invalidProperties[] = "invalid value for 'debugResult', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['debugResult']) && (mb_strlen($this->container['debugResult']) < 0)) {
                $invalidProperties[] = "invalid value for 'debugResult', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['debugOutput']) && (mb_strlen($this->container['debugOutput']) > 10240)) {
                $invalidProperties[] = "invalid value for 'debugOutput', the character length must be smaller than or equal to 10240.";
            }
            if (!is_null($this->container['debugOutput']) && (mb_strlen($this->container['debugOutput']) < 0)) {
                $invalidProperties[] = "invalid value for 'debugOutput', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['debugLog']) && (mb_strlen($this->container['debugLog']) > 10240)) {
                $invalidProperties[] = "invalid value for 'debugLog', the character length must be smaller than or equal to 10240.";
            }
            if (!is_null($this->container['debugLog']) && (mb_strlen($this->container['debugLog']) < 0)) {
                $invalidProperties[] = "invalid value for 'debugLog', the character length must be bigger than or equal to 0.";
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
    *  插件执行函数版本id
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
    * @param string|null $id 插件执行函数版本id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets creatorName
    *  创建者名称
    *
    * @return string|null
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string|null $creatorName 创建者名称
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets actionVersionName
    *  用户自定义执行函数版本别名
    *
    * @return string|null
    */
    public function getActionVersionName()
    {
        return $this->container['actionVersionName'];
    }

    /**
    * Sets actionVersionName
    *
    * @param string|null $actionVersionName 用户自定义执行函数版本别名
    *
    * @return $this
    */
    public function setActionVersionName($actionVersionName)
    {
        $this->container['actionVersionName'] = $actionVersionName;
        return $this;
    }

    /**
    * Gets actionVersionNumber
    *  内部生成的执行函数版本号，只会递增
    *
    * @return string|null
    */
    public function getActionVersionNumber()
    {
        return $this->container['actionVersionNumber'];
    }

    /**
    * Sets actionVersionNumber
    *
    * @param string|null $actionVersionNumber 内部生成的执行函数版本号，只会递增
    *
    * @return $this
    */
    public function setActionVersionNumber($actionVersionNumber)
    {
        $this->container['actionVersionNumber'] = $actionVersionNumber;
        return $this;
    }

    /**
    * Gets actionVersionDesc
    *  版本描述
    *
    * @return string|null
    */
    public function getActionVersionDesc()
    {
        return $this->container['actionVersionDesc'];
    }

    /**
    * Sets actionVersionDesc
    *
    * @param string|null $actionVersionDesc 版本描述
    *
    * @return $this
    */
    public function setActionVersionDesc($actionVersionDesc)
    {
        $this->container['actionVersionDesc'] = $actionVersionDesc;
        return $this;
    }

    /**
    * Gets actionInput
    *  执行函数版本输入参数列表
    *
    * @return string|null
    */
    public function getActionInput()
    {
        return $this->container['actionInput'];
    }

    /**
    * Sets actionInput
    *
    * @param string|null $actionInput 执行函数版本输入参数列表
    *
    * @return $this
    */
    public function setActionInput($actionInput)
    {
        $this->container['actionInput'] = $actionInput;
        return $this;
    }

    /**
    * Gets actionOutput
    *  执行函数版本输出参数列表
    *
    * @return string|null
    */
    public function getActionOutput()
    {
        return $this->container['actionOutput'];
    }

    /**
    * Sets actionOutput
    *
    * @param string|null $actionOutput 执行函数版本输出参数列表
    *
    * @return $this
    */
    public function setActionOutput($actionOutput)
    {
        $this->container['actionOutput'] = $actionOutput;
        return $this;
    }

    /**
    * Gets actionCode
    *  执行函数代码
    *
    * @return string|null
    */
    public function getActionCode()
    {
        return $this->container['actionCode'];
    }

    /**
    * Sets actionCode
    *
    * @param string|null $actionCode 执行函数代码
    *
    * @return $this
    */
    public function setActionCode($actionCode)
    {
        $this->container['actionCode'] = $actionCode;
        return $this;
    }

    /**
    * Gets actionStatus
    *  版本审核状态
    *
    * @return string|null
    */
    public function getActionStatus()
    {
        return $this->container['actionStatus'];
    }

    /**
    * Sets actionStatus
    *
    * @param string|null $actionStatus 版本审核状态
    *
    * @return $this
    */
    public function setActionStatus($actionStatus)
    {
        $this->container['actionStatus'] = $actionStatus;
        return $this;
    }

    /**
    * Gets actionEnable
    *  启用/禁用状态
    *
    * @return string|null
    */
    public function getActionEnable()
    {
        return $this->container['actionEnable'];
    }

    /**
    * Sets actionEnable
    *
    * @param string|null $actionEnable 启用/禁用状态
    *
    * @return $this
    */
    public function setActionEnable($actionEnable)
    {
        $this->container['actionEnable'] = $actionEnable;
        return $this;
    }

    /**
    * Gets debugResult
    *  调试结果
    *
    * @return string|null
    */
    public function getDebugResult()
    {
        return $this->container['debugResult'];
    }

    /**
    * Sets debugResult
    *
    * @param string|null $debugResult 调试结果
    *
    * @return $this
    */
    public function setDebugResult($debugResult)
    {
        $this->container['debugResult'] = $debugResult;
        return $this;
    }

    /**
    * Gets debugOutput
    *  调试输出
    *
    * @return string|null
    */
    public function getDebugOutput()
    {
        return $this->container['debugOutput'];
    }

    /**
    * Sets debugOutput
    *
    * @param string|null $debugOutput 调试输出
    *
    * @return $this
    */
    public function setDebugOutput($debugOutput)
    {
        $this->container['debugOutput'] = $debugOutput;
        return $this;
    }

    /**
    * Gets debugLog
    *  调试日志
    *
    * @return string|null
    */
    public function getDebugLog()
    {
        return $this->container['debugLog'];
    }

    /**
    * Sets debugLog
    *
    * @param string|null $debugLog 调试日志
    *
    * @return $this
    */
    public function setDebugLog($debugLog)
    {
        $this->container['debugLog'] = $debugLog;
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

