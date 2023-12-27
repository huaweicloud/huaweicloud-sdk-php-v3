<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  任务ID
    * name  任务名称。
    * status  任务执行状态。 取值： Running：表示任务正在执行。 Completed：表示任务执行成功。 Failed：表示任务执行失败。  枚举值： Running Completed Failed
    * startTime  创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量[，例如北京时间偏移显示为+0800。](tag:hc)
    * endTime  结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量[，例如北京时间偏移显示为+0800。](tag:hc)
    * progress  任务执行进度。 > 执行中状态才返回执行进度，例如“60%”，表示任务执行进度为60%，否则返回“”。
    * instance  instance
    * failReason  任务执行失败时的错误信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'status' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'progress' => 'string',
            'instance' => '\HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\JobInstanceInfo',
            'failReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  任务ID
    * name  任务名称。
    * status  任务执行状态。 取值： Running：表示任务正在执行。 Completed：表示任务执行成功。 Failed：表示任务执行失败。  枚举值： Running Completed Failed
    * startTime  创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量[，例如北京时间偏移显示为+0800。](tag:hc)
    * endTime  结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量[，例如北京时间偏移显示为+0800。](tag:hc)
    * progress  任务执行进度。 > 执行中状态才返回执行进度，例如“60%”，表示任务执行进度为60%，否则返回“”。
    * instance  instance
    * failReason  任务执行失败时的错误信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
        'startTime' => null,
        'endTime' => null,
        'progress' => null,
        'instance' => null,
        'failReason' => null
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
    * id  任务ID
    * name  任务名称。
    * status  任务执行状态。 取值： Running：表示任务正在执行。 Completed：表示任务执行成功。 Failed：表示任务执行失败。  枚举值： Running Completed Failed
    * startTime  创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量[，例如北京时间偏移显示为+0800。](tag:hc)
    * endTime  结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量[，例如北京时间偏移显示为+0800。](tag:hc)
    * progress  任务执行进度。 > 执行中状态才返回执行进度，例如“60%”，表示任务执行进度为60%，否则返回“”。
    * instance  instance
    * failReason  任务执行失败时的错误信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'progress' => 'progress',
            'instance' => 'instance',
            'failReason' => 'fail_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  任务ID
    * name  任务名称。
    * status  任务执行状态。 取值： Running：表示任务正在执行。 Completed：表示任务执行成功。 Failed：表示任务执行失败。  枚举值： Running Completed Failed
    * startTime  创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量[，例如北京时间偏移显示为+0800。](tag:hc)
    * endTime  结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量[，例如北京时间偏移显示为+0800。](tag:hc)
    * progress  任务执行进度。 > 执行中状态才返回执行进度，例如“60%”，表示任务执行进度为60%，否则返回“”。
    * instance  instance
    * failReason  任务执行失败时的错误信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'progress' => 'setProgress',
            'instance' => 'setInstance',
            'failReason' => 'setFailReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  任务ID
    * name  任务名称。
    * status  任务执行状态。 取值： Running：表示任务正在执行。 Completed：表示任务执行成功。 Failed：表示任务执行失败。  枚举值： Running Completed Failed
    * startTime  创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量[，例如北京时间偏移显示为+0800。](tag:hc)
    * endTime  结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量[，例如北京时间偏移显示为+0800。](tag:hc)
    * progress  任务执行进度。 > 执行中状态才返回执行进度，例如“60%”，表示任务执行进度为60%，否则返回“”。
    * instance  instance
    * failReason  任务执行失败时的错误信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'progress' => 'getProgress',
            'instance' => 'getInstance',
            'failReason' => 'getFailReason'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['instance'] = isset($data['instance']) ? $data['instance'] : null;
        $this->container['failReason'] = isset($data['failReason']) ? $data['failReason'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['progress'] === null) {
            $invalidProperties[] = "'progress' can't be null";
        }
        if ($this->container['instance'] === null) {
            $invalidProperties[] = "'instance' can't be null";
        }
        if ($this->container['failReason'] === null) {
            $invalidProperties[] = "'failReason' can't be null";
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
    *  任务ID
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 任务ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  任务名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 任务名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  任务执行状态。 取值： Running：表示任务正在执行。 Completed：表示任务执行成功。 Failed：表示任务执行失败。  枚举值： Running Completed Failed
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 任务执行状态。 取值： Running：表示任务正在执行。 Completed：表示任务执行成功。 Failed：表示任务执行失败。  枚举值： Running Completed Failed
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
    *  创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量[，例如北京时间偏移显示为+0800。](tag:hc)
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量[，例如北京时间偏移显示为+0800。](tag:hc)
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
    *  结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量[，例如北京时间偏移显示为+0800。](tag:hc)
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime 结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量[，例如北京时间偏移显示为+0800。](tag:hc)
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets progress
    *  任务执行进度。 > 执行中状态才返回执行进度，例如“60%”，表示任务执行进度为60%，否则返回“”。
    *
    * @return string
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param string $progress 任务执行进度。 > 执行中状态才返回执行进度，例如“60%”，表示任务执行进度为60%，否则返回“”。
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets instance
    *  instance
    *
    * @return \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\JobInstanceInfo
    */
    public function getInstance()
    {
        return $this->container['instance'];
    }

    /**
    * Sets instance
    *
    * @param \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\JobInstanceInfo $instance instance
    *
    * @return $this
    */
    public function setInstance($instance)
    {
        $this->container['instance'] = $instance;
        return $this;
    }

    /**
    * Gets failReason
    *  任务执行失败时的错误信息。
    *
    * @return string
    */
    public function getFailReason()
    {
        return $this->container['failReason'];
    }

    /**
    * Sets failReason
    *
    * @param string $failReason 任务执行失败时的错误信息。
    *
    * @return $this
    */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;
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

