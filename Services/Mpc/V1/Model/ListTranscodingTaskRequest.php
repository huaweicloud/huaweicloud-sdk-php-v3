<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTranscodingTaskRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTranscodingTaskRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  客户端语言
    * taskId  转码服务接受任务后产生的任务ID。一次最多10个
    * status  任务执行状态。  取值如下： - WAITING：等待启动 - TRANSCODING：转码中 - SUCCEEDED：转码成功 - FAILED：转码失败 - CANCELED：已删除 - NEED_TO_BE_AUDIT：片源待审核
    * startTime  起始时间  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间，指定task_id时该参数无效
    * endTime  结束时间  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间，指定task_id时该参数无效
    * page  分页编号。查询指定“task_id”时，该参数无效。  默认值：0。
    * size  每页记录数。查询指定“task_id”时，该参数无效。  取值范围：[1,100]。  默认值：10。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'taskId' => 'int[]',
            'status' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'page' => 'int',
            'size' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  客户端语言
    * taskId  转码服务接受任务后产生的任务ID。一次最多10个
    * status  任务执行状态。  取值如下： - WAITING：等待启动 - TRANSCODING：转码中 - SUCCEEDED：转码成功 - FAILED：转码失败 - CANCELED：已删除 - NEED_TO_BE_AUDIT：片源待审核
    * startTime  起始时间  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间，指定task_id时该参数无效
    * endTime  结束时间  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间，指定task_id时该参数无效
    * page  分页编号。查询指定“task_id”时，该参数无效。  默认值：0。
    * size  每页记录数。查询指定“task_id”时，该参数无效。  取值范围：[1,100]。  默认值：10。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'taskId' => 'int64',
        'status' => null,
        'startTime' => null,
        'endTime' => null,
        'page' => 'int32',
        'size' => 'int32'
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
    * xLanguage  客户端语言
    * taskId  转码服务接受任务后产生的任务ID。一次最多10个
    * status  任务执行状态。  取值如下： - WAITING：等待启动 - TRANSCODING：转码中 - SUCCEEDED：转码成功 - FAILED：转码失败 - CANCELED：已删除 - NEED_TO_BE_AUDIT：片源待审核
    * startTime  起始时间  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间，指定task_id时该参数无效
    * endTime  结束时间  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间，指定task_id时该参数无效
    * page  分页编号。查询指定“task_id”时，该参数无效。  默认值：0。
    * size  每页记录数。查询指定“task_id”时，该参数无效。  取值范围：[1,100]。  默认值：10。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'x-language',
            'taskId' => 'task_id',
            'status' => 'status',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'page' => 'page',
            'size' => 'size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  客户端语言
    * taskId  转码服务接受任务后产生的任务ID。一次最多10个
    * status  任务执行状态。  取值如下： - WAITING：等待启动 - TRANSCODING：转码中 - SUCCEEDED：转码成功 - FAILED：转码失败 - CANCELED：已删除 - NEED_TO_BE_AUDIT：片源待审核
    * startTime  起始时间  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间，指定task_id时该参数无效
    * endTime  结束时间  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间，指定task_id时该参数无效
    * page  分页编号。查询指定“task_id”时，该参数无效。  默认值：0。
    * size  每页记录数。查询指定“task_id”时，该参数无效。  取值范围：[1,100]。  默认值：10。
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'taskId' => 'setTaskId',
            'status' => 'setStatus',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'page' => 'setPage',
            'size' => 'setSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  客户端语言
    * taskId  转码服务接受任务后产生的任务ID。一次最多10个
    * status  任务执行状态。  取值如下： - WAITING：等待启动 - TRANSCODING：转码中 - SUCCEEDED：转码成功 - FAILED：转码失败 - CANCELED：已删除 - NEED_TO_BE_AUDIT：片源待审核
    * startTime  起始时间  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间，指定task_id时该参数无效
    * endTime  结束时间  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间，指定task_id时该参数无效
    * page  分页编号。查询指定“task_id”时，该参数无效。  默认值：0。
    * size  每页记录数。查询指定“task_id”时，该参数无效。  取值范围：[1,100]。  默认值：10。
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'taskId' => 'getTaskId',
            'status' => 'getStatus',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'page' => 'getPage',
            'size' => 'getSize'
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : 0;
        $this->container['size'] = isset($data['size']) ? $data['size'] : 10;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['page']) && ($this->container['page'] > 50000)) {
                $invalidProperties[] = "invalid value for 'page', must be smaller than or equal to 50000.";
            }
            if (!is_null($this->container['page']) && ($this->container['page'] < 0)) {
                $invalidProperties[] = "invalid value for 'page', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] > 100)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] < 1)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 1.";
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
    * Gets xLanguage
    *  客户端语言
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage 客户端语言
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets taskId
    *  转码服务接受任务后产生的任务ID。一次最多10个
    *
    * @return int[]|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param int[]|null $taskId 转码服务接受任务后产生的任务ID。一次最多10个
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
    *  任务执行状态。  取值如下： - WAITING：等待启动 - TRANSCODING：转码中 - SUCCEEDED：转码成功 - FAILED：转码失败 - CANCELED：已删除 - NEED_TO_BE_AUDIT：片源待审核
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
    * @param string|null $status 任务执行状态。  取值如下： - WAITING：等待启动 - TRANSCODING：转码中 - SUCCEEDED：转码成功 - FAILED：转码失败 - CANCELED：已删除 - NEED_TO_BE_AUDIT：片源待审核
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets startTime
    *  起始时间  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间，指定task_id时该参数无效
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 起始时间  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间，指定task_id时该参数无效
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间，指定task_id时该参数无效
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
    * @param string|null $endTime 结束时间  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间，指定task_id时该参数无效
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets page
    *  分页编号。查询指定“task_id”时，该参数无效。  默认值：0。
    *
    * @return int|null
    */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
    * Sets page
    *
    * @param int|null $page 分页编号。查询指定“task_id”时，该参数无效。  默认值：0。
    *
    * @return $this
    */
    public function setPage($page)
    {
        $this->container['page'] = $page;
        return $this;
    }

    /**
    * Gets size
    *  每页记录数。查询指定“task_id”时，该参数无效。  取值范围：[1,100]。  默认值：10。
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 每页记录数。查询指定“task_id”时，该参数无效。  取值范围：[1,100]。  默认值：10。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
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

