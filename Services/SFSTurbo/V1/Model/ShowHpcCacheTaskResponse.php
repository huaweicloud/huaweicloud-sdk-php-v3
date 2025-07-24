<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowHpcCacheTaskResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowHpcCacheTaskResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  任务ID
    * type  任务类型
    * status  任务状态
    * srcTarget  联动目录名称
    * srcPrefix  导入导出任务的源端路径前缀
    * destTarget  和src_target保持一致
    * destPrefix  和src_prefix保持一致
    * startTime  任务开始时间
    * endTime  任务结束时间
    * message  任务执行结果信息
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'type' => 'string',
            'status' => 'string',
            'srcTarget' => 'string',
            'srcPrefix' => 'string',
            'destTarget' => 'string',
            'destPrefix' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'message' => 'string',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  任务ID
    * type  任务类型
    * status  任务状态
    * srcTarget  联动目录名称
    * srcPrefix  导入导出任务的源端路径前缀
    * destTarget  和src_target保持一致
    * destPrefix  和src_prefix保持一致
    * startTime  任务开始时间
    * endTime  任务结束时间
    * message  任务执行结果信息
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'type' => null,
        'status' => null,
        'srcTarget' => null,
        'srcPrefix' => null,
        'destTarget' => null,
        'destPrefix' => null,
        'startTime' => null,
        'endTime' => null,
        'message' => null,
        'xRequestId' => null
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
    * taskId  任务ID
    * type  任务类型
    * status  任务状态
    * srcTarget  联动目录名称
    * srcPrefix  导入导出任务的源端路径前缀
    * destTarget  和src_target保持一致
    * destPrefix  和src_prefix保持一致
    * startTime  任务开始时间
    * endTime  任务结束时间
    * message  任务执行结果信息
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'type' => 'type',
            'status' => 'status',
            'srcTarget' => 'src_target',
            'srcPrefix' => 'src_prefix',
            'destTarget' => 'dest_target',
            'destPrefix' => 'dest_prefix',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'message' => 'message',
            'xRequestId' => 'X-request-id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  任务ID
    * type  任务类型
    * status  任务状态
    * srcTarget  联动目录名称
    * srcPrefix  导入导出任务的源端路径前缀
    * destTarget  和src_target保持一致
    * destPrefix  和src_prefix保持一致
    * startTime  任务开始时间
    * endTime  任务结束时间
    * message  任务执行结果信息
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'type' => 'setType',
            'status' => 'setStatus',
            'srcTarget' => 'setSrcTarget',
            'srcPrefix' => 'setSrcPrefix',
            'destTarget' => 'setDestTarget',
            'destPrefix' => 'setDestPrefix',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'message' => 'setMessage',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  任务ID
    * type  任务类型
    * status  任务状态
    * srcTarget  联动目录名称
    * srcPrefix  导入导出任务的源端路径前缀
    * destTarget  和src_target保持一致
    * destPrefix  和src_prefix保持一致
    * startTime  任务开始时间
    * endTime  任务结束时间
    * message  任务执行结果信息
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'type' => 'getType',
            'status' => 'getStatus',
            'srcTarget' => 'getSrcTarget',
            'srcPrefix' => 'getSrcPrefix',
            'destTarget' => 'getDestTarget',
            'destPrefix' => 'getDestPrefix',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'message' => 'getMessage',
            'xRequestId' => 'getXRequestId'
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
    const STATUS_SUCCESS = 'SUCCESS';
    const STATUS_DOING = 'DOING';
    const STATUS_FAIL = 'FAIL';
    const STATUS_DELETING = 'DELETING';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SUCCESS,
            self::STATUS_DOING,
            self::STATUS_FAIL,
            self::STATUS_DELETING,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['srcTarget'] = isset($data['srcTarget']) ? $data['srcTarget'] : null;
        $this->container['srcPrefix'] = isset($data['srcPrefix']) ? $data['srcPrefix'] : null;
        $this->container['destTarget'] = isset($data['destTarget']) ? $data['destTarget'] : null;
        $this->container['destPrefix'] = isset($data['destPrefix']) ? $data['destPrefix'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets taskId
    *  任务ID
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
    * @param string|null $taskId 任务ID
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets type
    *  任务类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 任务类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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
    * Gets srcTarget
    *  联动目录名称
    *
    * @return string|null
    */
    public function getSrcTarget()
    {
        return $this->container['srcTarget'];
    }

    /**
    * Sets srcTarget
    *
    * @param string|null $srcTarget 联动目录名称
    *
    * @return $this
    */
    public function setSrcTarget($srcTarget)
    {
        $this->container['srcTarget'] = $srcTarget;
        return $this;
    }

    /**
    * Gets srcPrefix
    *  导入导出任务的源端路径前缀
    *
    * @return string|null
    */
    public function getSrcPrefix()
    {
        return $this->container['srcPrefix'];
    }

    /**
    * Sets srcPrefix
    *
    * @param string|null $srcPrefix 导入导出任务的源端路径前缀
    *
    * @return $this
    */
    public function setSrcPrefix($srcPrefix)
    {
        $this->container['srcPrefix'] = $srcPrefix;
        return $this;
    }

    /**
    * Gets destTarget
    *  和src_target保持一致
    *
    * @return string|null
    */
    public function getDestTarget()
    {
        return $this->container['destTarget'];
    }

    /**
    * Sets destTarget
    *
    * @param string|null $destTarget 和src_target保持一致
    *
    * @return $this
    */
    public function setDestTarget($destTarget)
    {
        $this->container['destTarget'] = $destTarget;
        return $this;
    }

    /**
    * Gets destPrefix
    *  和src_prefix保持一致
    *
    * @return string|null
    */
    public function getDestPrefix()
    {
        return $this->container['destPrefix'];
    }

    /**
    * Sets destPrefix
    *
    * @param string|null $destPrefix 和src_prefix保持一致
    *
    * @return $this
    */
    public function setDestPrefix($destPrefix)
    {
        $this->container['destPrefix'] = $destPrefix;
        return $this;
    }

    /**
    * Gets startTime
    *  任务开始时间
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
    * @param string|null $startTime 任务开始时间
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
    *  任务结束时间
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
    * @param string|null $endTime 任务结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets message
    *  任务执行结果信息
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 任务执行结果信息
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

