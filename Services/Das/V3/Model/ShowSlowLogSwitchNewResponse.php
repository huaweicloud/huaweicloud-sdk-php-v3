<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSlowLogSwitchNewResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSlowLogSwitchNewResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * success  是否成功
    * switchOn  开关状态
    * retentionHours  保存时长
    * retry  是否需要重试
    * errorMsg  错误信息
    * canOpen  是否可以开启
    * cantOpenMsg  无法开启原因
    * maxTimeRange  最大可查看时间区间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'success' => 'bool',
            'switchOn' => 'bool',
            'retentionHours' => 'int',
            'retry' => 'bool',
            'errorMsg' => 'string',
            'canOpen' => 'bool',
            'cantOpenMsg' => 'string',
            'maxTimeRange' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * success  是否成功
    * switchOn  开关状态
    * retentionHours  保存时长
    * retry  是否需要重试
    * errorMsg  错误信息
    * canOpen  是否可以开启
    * cantOpenMsg  无法开启原因
    * maxTimeRange  最大可查看时间区间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'success' => null,
        'switchOn' => null,
        'retentionHours' => 'int64',
        'retry' => null,
        'errorMsg' => null,
        'canOpen' => null,
        'cantOpenMsg' => null,
        'maxTimeRange' => 'int64'
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
    * success  是否成功
    * switchOn  开关状态
    * retentionHours  保存时长
    * retry  是否需要重试
    * errorMsg  错误信息
    * canOpen  是否可以开启
    * cantOpenMsg  无法开启原因
    * maxTimeRange  最大可查看时间区间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'success' => 'success',
            'switchOn' => 'switch_on',
            'retentionHours' => 'retention_hours',
            'retry' => 'retry',
            'errorMsg' => 'error_msg',
            'canOpen' => 'can_open',
            'cantOpenMsg' => 'cant_open_msg',
            'maxTimeRange' => 'max_time_range'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * success  是否成功
    * switchOn  开关状态
    * retentionHours  保存时长
    * retry  是否需要重试
    * errorMsg  错误信息
    * canOpen  是否可以开启
    * cantOpenMsg  无法开启原因
    * maxTimeRange  最大可查看时间区间
    *
    * @var string[]
    */
    protected static $setters = [
            'success' => 'setSuccess',
            'switchOn' => 'setSwitchOn',
            'retentionHours' => 'setRetentionHours',
            'retry' => 'setRetry',
            'errorMsg' => 'setErrorMsg',
            'canOpen' => 'setCanOpen',
            'cantOpenMsg' => 'setCantOpenMsg',
            'maxTimeRange' => 'setMaxTimeRange'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * success  是否成功
    * switchOn  开关状态
    * retentionHours  保存时长
    * retry  是否需要重试
    * errorMsg  错误信息
    * canOpen  是否可以开启
    * cantOpenMsg  无法开启原因
    * maxTimeRange  最大可查看时间区间
    *
    * @var string[]
    */
    protected static $getters = [
            'success' => 'getSuccess',
            'switchOn' => 'getSwitchOn',
            'retentionHours' => 'getRetentionHours',
            'retry' => 'getRetry',
            'errorMsg' => 'getErrorMsg',
            'canOpen' => 'getCanOpen',
            'cantOpenMsg' => 'getCantOpenMsg',
            'maxTimeRange' => 'getMaxTimeRange'
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
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['switchOn'] = isset($data['switchOn']) ? $data['switchOn'] : null;
        $this->container['retentionHours'] = isset($data['retentionHours']) ? $data['retentionHours'] : null;
        $this->container['retry'] = isset($data['retry']) ? $data['retry'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['canOpen'] = isset($data['canOpen']) ? $data['canOpen'] : null;
        $this->container['cantOpenMsg'] = isset($data['cantOpenMsg']) ? $data['cantOpenMsg'] : null;
        $this->container['maxTimeRange'] = isset($data['maxTimeRange']) ? $data['maxTimeRange'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['retentionHours']) && ($this->container['retentionHours'] > 168)) {
                $invalidProperties[] = "invalid value for 'retentionHours', must be smaller than or equal to 168.";
            }
            if (!is_null($this->container['retentionHours']) && ($this->container['retentionHours'] < 24)) {
                $invalidProperties[] = "invalid value for 'retentionHours', must be bigger than or equal to 24.";
            }
            if (!is_null($this->container['cantOpenMsg']) && (mb_strlen($this->container['cantOpenMsg']) > 2048)) {
                $invalidProperties[] = "invalid value for 'cantOpenMsg', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['cantOpenMsg']) && (mb_strlen($this->container['cantOpenMsg']) < 1)) {
                $invalidProperties[] = "invalid value for 'cantOpenMsg', the character length must be bigger than or equal to 1.";
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
    * Gets success
    *  是否成功
    *
    * @return bool|null
    */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
    * Sets success
    *
    * @param bool|null $success 是否成功
    *
    * @return $this
    */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;
        return $this;
    }

    /**
    * Gets switchOn
    *  开关状态
    *
    * @return bool|null
    */
    public function getSwitchOn()
    {
        return $this->container['switchOn'];
    }

    /**
    * Sets switchOn
    *
    * @param bool|null $switchOn 开关状态
    *
    * @return $this
    */
    public function setSwitchOn($switchOn)
    {
        $this->container['switchOn'] = $switchOn;
        return $this;
    }

    /**
    * Gets retentionHours
    *  保存时长
    *
    * @return int|null
    */
    public function getRetentionHours()
    {
        return $this->container['retentionHours'];
    }

    /**
    * Sets retentionHours
    *
    * @param int|null $retentionHours 保存时长
    *
    * @return $this
    */
    public function setRetentionHours($retentionHours)
    {
        $this->container['retentionHours'] = $retentionHours;
        return $this;
    }

    /**
    * Gets retry
    *  是否需要重试
    *
    * @return bool|null
    */
    public function getRetry()
    {
        return $this->container['retry'];
    }

    /**
    * Sets retry
    *
    * @param bool|null $retry 是否需要重试
    *
    * @return $this
    */
    public function setRetry($retry)
    {
        $this->container['retry'] = $retry;
        return $this;
    }

    /**
    * Gets errorMsg
    *  错误信息
    *
    * @return string|null
    */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
    * Sets errorMsg
    *
    * @param string|null $errorMsg 错误信息
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
        return $this;
    }

    /**
    * Gets canOpen
    *  是否可以开启
    *
    * @return bool|null
    */
    public function getCanOpen()
    {
        return $this->container['canOpen'];
    }

    /**
    * Sets canOpen
    *
    * @param bool|null $canOpen 是否可以开启
    *
    * @return $this
    */
    public function setCanOpen($canOpen)
    {
        $this->container['canOpen'] = $canOpen;
        return $this;
    }

    /**
    * Gets cantOpenMsg
    *  无法开启原因
    *
    * @return string|null
    */
    public function getCantOpenMsg()
    {
        return $this->container['cantOpenMsg'];
    }

    /**
    * Sets cantOpenMsg
    *
    * @param string|null $cantOpenMsg 无法开启原因
    *
    * @return $this
    */
    public function setCantOpenMsg($cantOpenMsg)
    {
        $this->container['cantOpenMsg'] = $cantOpenMsg;
        return $this;
    }

    /**
    * Gets maxTimeRange
    *  最大可查看时间区间
    *
    * @return int|null
    */
    public function getMaxTimeRange()
    {
        return $this->container['maxTimeRange'];
    }

    /**
    * Sets maxTimeRange
    *
    * @param int|null $maxTimeRange 最大可查看时间区间
    *
    * @return $this
    */
    public function setMaxTimeRange($maxTimeRange)
    {
        $this->container['maxTimeRange'] = $maxTimeRange;
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

