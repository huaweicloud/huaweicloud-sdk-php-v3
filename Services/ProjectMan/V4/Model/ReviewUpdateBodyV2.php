<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReviewUpdateBodyV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReviewUpdateBodyV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * oldStatus  评审单更新前状态。 0~32个字符。
    * status  评审单目标流转状态。 0~32个字符。
    * planEndDate  计划完成时间，unix时间戳，单位：毫秒，示例：\"1759420799999\"。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'oldStatus' => 'string',
            'status' => 'string',
            'planEndDate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * oldStatus  评审单更新前状态。 0~32个字符。
    * status  评审单目标流转状态。 0~32个字符。
    * planEndDate  计划完成时间，unix时间戳，单位：毫秒，示例：\"1759420799999\"。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'oldStatus' => null,
        'status' => null,
        'planEndDate' => null
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
    * oldStatus  评审单更新前状态。 0~32个字符。
    * status  评审单目标流转状态。 0~32个字符。
    * planEndDate  计划完成时间，unix时间戳，单位：毫秒，示例：\"1759420799999\"。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'oldStatus' => 'old_status',
            'status' => 'status',
            'planEndDate' => 'plan_end_date'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * oldStatus  评审单更新前状态。 0~32个字符。
    * status  评审单目标流转状态。 0~32个字符。
    * planEndDate  计划完成时间，unix时间戳，单位：毫秒，示例：\"1759420799999\"。
    *
    * @var string[]
    */
    protected static $setters = [
            'oldStatus' => 'setOldStatus',
            'status' => 'setStatus',
            'planEndDate' => 'setPlanEndDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * oldStatus  评审单更新前状态。 0~32个字符。
    * status  评审单目标流转状态。 0~32个字符。
    * planEndDate  计划完成时间，unix时间戳，单位：毫秒，示例：\"1759420799999\"。
    *
    * @var string[]
    */
    protected static $getters = [
            'oldStatus' => 'getOldStatus',
            'status' => 'getStatus',
            'planEndDate' => 'getPlanEndDate'
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
        $this->container['oldStatus'] = isset($data['oldStatus']) ? $data['oldStatus'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['planEndDate'] = isset($data['planEndDate']) ? $data['planEndDate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets oldStatus
    *  评审单更新前状态。 0~32个字符。
    *
    * @return string|null
    */
    public function getOldStatus()
    {
        return $this->container['oldStatus'];
    }

    /**
    * Sets oldStatus
    *
    * @param string|null $oldStatus 评审单更新前状态。 0~32个字符。
    *
    * @return $this
    */
    public function setOldStatus($oldStatus)
    {
        $this->container['oldStatus'] = $oldStatus;
        return $this;
    }

    /**
    * Gets status
    *  评审单目标流转状态。 0~32个字符。
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
    * @param string|null $status 评审单目标流转状态。 0~32个字符。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets planEndDate
    *  计划完成时间，unix时间戳，单位：毫秒，示例：\"1759420799999\"。
    *
    * @return string|null
    */
    public function getPlanEndDate()
    {
        return $this->container['planEndDate'];
    }

    /**
    * Sets planEndDate
    *
    * @param string|null $planEndDate 计划完成时间，unix时间戳，单位：毫秒，示例：\"1759420799999\"。
    *
    * @return $this
    */
    public function setPlanEndDate($planEndDate)
    {
        $this->container['planEndDate'] = $planEndDate;
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

