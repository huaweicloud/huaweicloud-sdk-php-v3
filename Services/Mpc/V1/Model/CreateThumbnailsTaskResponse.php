<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateThumbnailsTaskResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateThumbnailsTaskResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  任务ID。
    * status  任务状态
    * createTime  任务创建时间
    * output  output
    * outputFileName  截图文件名称
    * thumbnailTime  指定的截图时间点
    * description  截图任务描述，当截图出现异常时，此字段为异常的原因
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'status' => 'string',
            'createTime' => 'string',
            'output' => '\HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo',
            'outputFileName' => 'string',
            'thumbnailTime' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  任务ID。
    * status  任务状态
    * createTime  任务创建时间
    * output  output
    * outputFileName  截图文件名称
    * thumbnailTime  指定的截图时间点
    * description  截图任务描述，当截图出现异常时，此字段为异常的原因
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'status' => null,
        'createTime' => null,
        'output' => null,
        'outputFileName' => null,
        'thumbnailTime' => null,
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
    * taskId  任务ID。
    * status  任务状态
    * createTime  任务创建时间
    * output  output
    * outputFileName  截图文件名称
    * thumbnailTime  指定的截图时间点
    * description  截图任务描述，当截图出现异常时，此字段为异常的原因
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'status' => 'status',
            'createTime' => 'create_time',
            'output' => 'output',
            'outputFileName' => 'output_file_name',
            'thumbnailTime' => 'thumbnail_time',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  任务ID。
    * status  任务状态
    * createTime  任务创建时间
    * output  output
    * outputFileName  截图文件名称
    * thumbnailTime  指定的截图时间点
    * description  截图任务描述，当截图出现异常时，此字段为异常的原因
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'status' => 'setStatus',
            'createTime' => 'setCreateTime',
            'output' => 'setOutput',
            'outputFileName' => 'setOutputFileName',
            'thumbnailTime' => 'setThumbnailTime',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  任务ID。
    * status  任务状态
    * createTime  任务创建时间
    * output  output
    * outputFileName  截图文件名称
    * thumbnailTime  指定的截图时间点
    * description  截图任务描述，当截图出现异常时，此字段为异常的原因
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'status' => 'getStatus',
            'createTime' => 'getCreateTime',
            'output' => 'getOutput',
            'outputFileName' => 'getOutputFileName',
            'thumbnailTime' => 'getThumbnailTime',
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
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
        $this->container['outputFileName'] = isset($data['outputFileName']) ? $data['outputFileName'] : null;
        $this->container['thumbnailTime'] = isset($data['thumbnailTime']) ? $data['thumbnailTime'] : null;
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
            if (!is_null($this->container['outputFileName']) && (mb_strlen($this->container['outputFileName']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'outputFileName', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['outputFileName']) && (mb_strlen($this->container['outputFileName']) < 0)) {
                $invalidProperties[] = "invalid value for 'outputFileName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['thumbnailTime']) && (mb_strlen($this->container['thumbnailTime']) > 256)) {
                $invalidProperties[] = "invalid value for 'thumbnailTime', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['thumbnailTime']) && (mb_strlen($this->container['thumbnailTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'thumbnailTime', the character length must be bigger than or equal to 0.";
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
    *  任务ID。
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
    * @param string|null $taskId 任务ID。
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
    *  任务创建时间
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
    * @param string|null $createTime 任务创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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
    *  截图文件名称
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
    * @param string|null $outputFileName 截图文件名称
    *
    * @return $this
    */
    public function setOutputFileName($outputFileName)
    {
        $this->container['outputFileName'] = $outputFileName;
        return $this;
    }

    /**
    * Gets thumbnailTime
    *  指定的截图时间点
    *
    * @return string|null
    */
    public function getThumbnailTime()
    {
        return $this->container['thumbnailTime'];
    }

    /**
    * Sets thumbnailTime
    *
    * @param string|null $thumbnailTime 指定的截图时间点
    *
    * @return $this
    */
    public function setThumbnailTime($thumbnailTime)
    {
        $this->container['thumbnailTime'] = $thumbnailTime;
        return $this;
    }

    /**
    * Gets description
    *  截图任务描述，当截图出现异常时，此字段为异常的原因
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
    * @param string|null $description 截图任务描述，当截图出现异常时，此字段为异常的原因
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

