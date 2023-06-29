<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ThumbTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ThumbTask';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  任务ID。  截图服务接受任务后产生的任务ID。一次最多10个。
    * status  任务状态
    * createTime  起始时间。  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间，指定task_id时该参数无效。
    * endTime  结束时间。  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间，指定task_id时该参数无效。
    * input  input
    * output  output
    * outputFileName  输出文件名。
    * userData  用户数据。
    * description  任务描述。
    * thumbnailInfo  截图文件信息。
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
            'outputFileName' => 'string',
            'userData' => 'string',
            'description' => 'string',
            'thumbnailInfo' => '\HuaweiCloud\SDK\Mpc\V1\Model\PicInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  任务ID。  截图服务接受任务后产生的任务ID。一次最多10个。
    * status  任务状态
    * createTime  起始时间。  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间，指定task_id时该参数无效。
    * endTime  结束时间。  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间，指定task_id时该参数无效。
    * input  input
    * output  output
    * outputFileName  输出文件名。
    * userData  用户数据。
    * description  任务描述。
    * thumbnailInfo  截图文件信息。
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
        'description' => null,
        'thumbnailInfo' => null
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
    * taskId  任务ID。  截图服务接受任务后产生的任务ID。一次最多10个。
    * status  任务状态
    * createTime  起始时间。  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间，指定task_id时该参数无效。
    * endTime  结束时间。  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间，指定task_id时该参数无效。
    * input  input
    * output  output
    * outputFileName  输出文件名。
    * userData  用户数据。
    * description  任务描述。
    * thumbnailInfo  截图文件信息。
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
            'description' => 'description',
            'thumbnailInfo' => 'thumbnail_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  任务ID。  截图服务接受任务后产生的任务ID。一次最多10个。
    * status  任务状态
    * createTime  起始时间。  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间，指定task_id时该参数无效。
    * endTime  结束时间。  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间，指定task_id时该参数无效。
    * input  input
    * output  output
    * outputFileName  输出文件名。
    * userData  用户数据。
    * description  任务描述。
    * thumbnailInfo  截图文件信息。
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
            'description' => 'setDescription',
            'thumbnailInfo' => 'setThumbnailInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  任务ID。  截图服务接受任务后产生的任务ID。一次最多10个。
    * status  任务状态
    * createTime  起始时间。  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间，指定task_id时该参数无效。
    * endTime  结束时间。  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间，指定task_id时该参数无效。
    * input  input
    * output  output
    * outputFileName  输出文件名。
    * userData  用户数据。
    * description  任务描述。
    * thumbnailInfo  截图文件信息。
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
            'description' => 'getDescription',
            'thumbnailInfo' => 'getThumbnailInfo'
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
    const STATUS_NO_TASK = 'NO_TASK';
    const STATUS_WAITING = 'WAITING';
    const STATUS_PROCESSING = 'PROCESSING';
    const STATUS_SUCCEEDED = 'SUCCEEDED';
    const STATUS_FAILED = 'FAILED';
    const STATUS_CANCELED = 'CANCELED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_NO_TASK,
            self::STATUS_WAITING,
            self::STATUS_PROCESSING,
            self::STATUS_SUCCEEDED,
            self::STATUS_FAILED,
            self::STATUS_CANCELED,
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['input'] = isset($data['input']) ? $data['input'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
        $this->container['outputFileName'] = isset($data['outputFileName']) ? $data['outputFileName'] : null;
        $this->container['userData'] = isset($data['userData']) ? $data['userData'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['thumbnailInfo'] = isset($data['thumbnailInfo']) ? $data['thumbnailInfo'] : null;
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
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
            if (!is_null($this->container['outputFileName']) && (mb_strlen($this->container['outputFileName']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'outputFileName', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['outputFileName']) && (mb_strlen($this->container['outputFileName']) < 0)) {
                $invalidProperties[] = "invalid value for 'outputFileName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userData']) && (mb_strlen($this->container['userData']) > 65535)) {
                $invalidProperties[] = "invalid value for 'userData', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['userData']) && (mb_strlen($this->container['userData']) < 0)) {
                $invalidProperties[] = "invalid value for 'userData', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
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
    *  任务ID。  截图服务接受任务后产生的任务ID。一次最多10个。
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
    * @param string|null $taskId 任务ID。  截图服务接受任务后产生的任务ID。一次最多10个。
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
    *  任务状态
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
    * @param string|null $status 任务状态
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
    *  起始时间。  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间，指定task_id时该参数无效。
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
    * @param string|null $createTime 起始时间。  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间，指定task_id时该参数无效。
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
    *  结束时间。  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间，指定task_id时该参数无效。
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
    * @param string|null $endTime 结束时间。  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间，指定task_id时该参数无效。
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
    *  输出文件名。
    *
    * @return string|null
    */
    public function getOutputFileName()
    {
        return $this->container['outputFileName'];
    }

    /**
    * Sets outputFileName
    *
    * @param string|null $outputFileName 输出文件名。
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
    *  任务描述。
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
    * @param string|null $description 任务描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets thumbnailInfo
    *  截图文件信息。
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\PicInfo[]|null
    */
    public function getThumbnailInfo()
    {
        return $this->container['thumbnailInfo'];
    }

    /**
    * Sets thumbnailInfo
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\PicInfo[]|null $thumbnailInfo 截图文件信息。
    *
    * @return $this
    */
    public function setThumbnailInfo($thumbnailInfo)
    {
        $this->container['thumbnailInfo'] = $thumbnailInfo;
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

