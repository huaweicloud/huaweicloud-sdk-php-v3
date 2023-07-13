<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EachEncryptRsp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EachEncryptRsp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  任务Id
    * status  任务执行状态。  取值如下： - NO_TASK：无任务 - WAITING：等待启动 - PROCESSING：加密中 - SUCCEEDED：加密成功 - FAILED：加密失败 - CANCELED：已删除
    * createTime  加密任务启动时间。
    * endTime  加密任务结束时间。
    * input  input
    * output  output
    * outputFileName  加密生成的文件名，数组类型，可能包含多个，包含加密文件名。
    * userData  用户数据。
    * description  加密任务描述，当加密出现异常时，此字段为异常的原因。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'status' => 'string',
            'createTime' => 'string',
            'endTime' => 'string',
            'input' => '\HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo',
            'output' => '\HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo',
            'outputFileName' => 'string[]',
            'userData' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  任务Id
    * status  任务执行状态。  取值如下： - NO_TASK：无任务 - WAITING：等待启动 - PROCESSING：加密中 - SUCCEEDED：加密成功 - FAILED：加密失败 - CANCELED：已删除
    * createTime  加密任务启动时间。
    * endTime  加密任务结束时间。
    * input  input
    * output  output
    * outputFileName  加密生成的文件名，数组类型，可能包含多个，包含加密文件名。
    * userData  用户数据。
    * description  加密任务描述，当加密出现异常时，此字段为异常的原因。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'status' => null,
        'createTime' => null,
        'endTime' => null,
        'input' => null,
        'output' => null,
        'outputFileName' => null,
        'userData' => null,
        'description' => null
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
    * taskId  任务Id
    * status  任务执行状态。  取值如下： - NO_TASK：无任务 - WAITING：等待启动 - PROCESSING：加密中 - SUCCEEDED：加密成功 - FAILED：加密失败 - CANCELED：已删除
    * createTime  加密任务启动时间。
    * endTime  加密任务结束时间。
    * input  input
    * output  output
    * outputFileName  加密生成的文件名，数组类型，可能包含多个，包含加密文件名。
    * userData  用户数据。
    * description  加密任务描述，当加密出现异常时，此字段为异常的原因。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'status' => 'status',
            'createTime' => 'create_time',
            'endTime' => 'end_time',
            'input' => 'input',
            'output' => 'output',
            'outputFileName' => 'output_file_name',
            'userData' => 'user_data',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  任务Id
    * status  任务执行状态。  取值如下： - NO_TASK：无任务 - WAITING：等待启动 - PROCESSING：加密中 - SUCCEEDED：加密成功 - FAILED：加密失败 - CANCELED：已删除
    * createTime  加密任务启动时间。
    * endTime  加密任务结束时间。
    * input  input
    * output  output
    * outputFileName  加密生成的文件名，数组类型，可能包含多个，包含加密文件名。
    * userData  用户数据。
    * description  加密任务描述，当加密出现异常时，此字段为异常的原因。
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'status' => 'setStatus',
            'createTime' => 'setCreateTime',
            'endTime' => 'setEndTime',
            'input' => 'setInput',
            'output' => 'setOutput',
            'outputFileName' => 'setOutputFileName',
            'userData' => 'setUserData',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  任务Id
    * status  任务执行状态。  取值如下： - NO_TASK：无任务 - WAITING：等待启动 - PROCESSING：加密中 - SUCCEEDED：加密成功 - FAILED：加密失败 - CANCELED：已删除
    * createTime  加密任务启动时间。
    * endTime  加密任务结束时间。
    * input  input
    * output  output
    * outputFileName  加密生成的文件名，数组类型，可能包含多个，包含加密文件名。
    * userData  用户数据。
    * description  加密任务描述，当加密出现异常时，此字段为异常的原因。
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'status' => 'getStatus',
            'createTime' => 'getCreateTime',
            'endTime' => 'getEndTime',
            'input' => 'getInput',
            'output' => 'getOutput',
            'outputFileName' => 'getOutputFileName',
            'userData' => 'getUserData',
            'description' => 'getDescription'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['input'] = isset($data['input']) ? $data['input'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
        $this->container['outputFileName'] = isset($data['outputFileName']) ? $data['outputFileName'] : null;
        $this->container['userData'] = isset($data['userData']) ? $data['userData'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) > 16)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userData']) && (mb_strlen($this->container['userData']) > 65535)) {
                $invalidProperties[] = "invalid value for 'userData', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['userData']) && (mb_strlen($this->container['userData']) < 0)) {
                $invalidProperties[] = "invalid value for 'userData', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    *  任务Id
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
    * @param string|null $taskId 任务Id
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets status
    *  任务执行状态。  取值如下： - NO_TASK：无任务 - WAITING：等待启动 - PROCESSING：加密中 - SUCCEEDED：加密成功 - FAILED：加密失败 - CANCELED：已删除
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
    * @param string|null $status 任务执行状态。  取值如下： - NO_TASK：无任务 - WAITING：等待启动 - PROCESSING：加密中 - SUCCEEDED：加密成功 - FAILED：加密失败 - CANCELED：已删除
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createTime
    *  加密任务启动时间。
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
    * @param string|null $createTime 加密任务启动时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets endTime
    *  加密任务结束时间。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 加密任务结束时间。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets input
    *  input
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo|null
    */
    public function getInput()
    {
        return $this->container['input'];
    }

    /**
    * Sets input
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo|null $input input
    *
    * @return $this
    */
    public function setInput($input)
    {
        $this->container['input'] = $input;
        return $this;
    }

    /**
    * Gets output
    *  output
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo|null
    */
    public function getOutput()
    {
        return $this->container['output'];
    }

    /**
    * Sets output
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo|null $output output
    *
    * @return $this
    */
    public function setOutput($output)
    {
        $this->container['output'] = $output;
        return $this;
    }

    /**
    * Gets outputFileName
    *  加密生成的文件名，数组类型，可能包含多个，包含加密文件名。
    *
    * @return string[]|null
    */
    public function getOutputFileName()
    {
        return $this->container['outputFileName'];
    }

    /**
    * Sets outputFileName
    *
    * @param string[]|null $outputFileName 加密生成的文件名，数组类型，可能包含多个，包含加密文件名。
    *
    * @return $this
    */
    public function setOutputFileName($outputFileName)
    {
        $this->container['outputFileName'] = $outputFileName;
        return $this;
    }

    /**
    * Gets userData
    *  用户数据。
    *
    * @return string|null
    */
    public function getUserData()
    {
        return $this->container['userData'];
    }

    /**
    * Sets userData
    *
    * @param string|null $userData 用户数据。
    *
    * @return $this
    */
    public function setUserData($userData)
    {
        $this->container['userData'] = $userData;
        return $this;
    }

    /**
    * Gets description
    *  加密任务描述，当加密出现异常时，此字段为异常的原因。
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
    * @param string|null $description 加密任务描述，当加密出现异常时，此字段为异常的原因。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

