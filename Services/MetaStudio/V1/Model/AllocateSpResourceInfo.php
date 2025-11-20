<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AllocateSpResourceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AllocateSpResourceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * assignmentRecordId  资源分配id。
    * resourceSpecCode  资源规格编码
    * chargingMode  资源计费类型。
    * resourceNum  资源数量。
    * resourceUsedNum  资源已使用数量。
    * resourceAllocateTime  资源分配时间（UTC时间）,unix时间,精确到秒。
    * resourceExpireTime  资源到期时间(UTC时间),unix时间,精确到秒。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assignmentRecordId' => 'string',
            'resourceSpecCode' => 'string',
            'chargingMode' => 'string',
            'resourceNum' => 'double',
            'resourceUsedNum' => 'double',
            'resourceAllocateTime' => 'int',
            'resourceExpireTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assignmentRecordId  资源分配id。
    * resourceSpecCode  资源规格编码
    * chargingMode  资源计费类型。
    * resourceNum  资源数量。
    * resourceUsedNum  资源已使用数量。
    * resourceAllocateTime  资源分配时间（UTC时间）,unix时间,精确到秒。
    * resourceExpireTime  资源到期时间(UTC时间),unix时间,精确到秒。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assignmentRecordId' => null,
        'resourceSpecCode' => null,
        'chargingMode' => null,
        'resourceNum' => 'double',
        'resourceUsedNum' => 'double',
        'resourceAllocateTime' => 'int64',
        'resourceExpireTime' => 'int64'
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
    * assignmentRecordId  资源分配id。
    * resourceSpecCode  资源规格编码
    * chargingMode  资源计费类型。
    * resourceNum  资源数量。
    * resourceUsedNum  资源已使用数量。
    * resourceAllocateTime  资源分配时间（UTC时间）,unix时间,精确到秒。
    * resourceExpireTime  资源到期时间(UTC时间),unix时间,精确到秒。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assignmentRecordId' => 'assignment_record_id',
            'resourceSpecCode' => 'resource_spec_code',
            'chargingMode' => 'charging_mode',
            'resourceNum' => 'resource_num',
            'resourceUsedNum' => 'resource_used_num',
            'resourceAllocateTime' => 'resource_allocate_time',
            'resourceExpireTime' => 'resource_expire_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assignmentRecordId  资源分配id。
    * resourceSpecCode  资源规格编码
    * chargingMode  资源计费类型。
    * resourceNum  资源数量。
    * resourceUsedNum  资源已使用数量。
    * resourceAllocateTime  资源分配时间（UTC时间）,unix时间,精确到秒。
    * resourceExpireTime  资源到期时间(UTC时间),unix时间,精确到秒。
    *
    * @var string[]
    */
    protected static $setters = [
            'assignmentRecordId' => 'setAssignmentRecordId',
            'resourceSpecCode' => 'setResourceSpecCode',
            'chargingMode' => 'setChargingMode',
            'resourceNum' => 'setResourceNum',
            'resourceUsedNum' => 'setResourceUsedNum',
            'resourceAllocateTime' => 'setResourceAllocateTime',
            'resourceExpireTime' => 'setResourceExpireTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assignmentRecordId  资源分配id。
    * resourceSpecCode  资源规格编码
    * chargingMode  资源计费类型。
    * resourceNum  资源数量。
    * resourceUsedNum  资源已使用数量。
    * resourceAllocateTime  资源分配时间（UTC时间）,unix时间,精确到秒。
    * resourceExpireTime  资源到期时间(UTC时间),unix时间,精确到秒。
    *
    * @var string[]
    */
    protected static $getters = [
            'assignmentRecordId' => 'getAssignmentRecordId',
            'resourceSpecCode' => 'getResourceSpecCode',
            'chargingMode' => 'getChargingMode',
            'resourceNum' => 'getResourceNum',
            'resourceUsedNum' => 'getResourceUsedNum',
            'resourceAllocateTime' => 'getResourceAllocateTime',
            'resourceExpireTime' => 'getResourceExpireTime'
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
        $this->container['assignmentRecordId'] = isset($data['assignmentRecordId']) ? $data['assignmentRecordId'] : null;
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['resourceNum'] = isset($data['resourceNum']) ? $data['resourceNum'] : null;
        $this->container['resourceUsedNum'] = isset($data['resourceUsedNum']) ? $data['resourceUsedNum'] : null;
        $this->container['resourceAllocateTime'] = isset($data['resourceAllocateTime']) ? $data['resourceAllocateTime'] : null;
        $this->container['resourceExpireTime'] = isset($data['resourceExpireTime']) ? $data['resourceExpireTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['assignmentRecordId']) && (mb_strlen($this->container['assignmentRecordId']) > 64)) {
                $invalidProperties[] = "invalid value for 'assignmentRecordId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['assignmentRecordId']) && (mb_strlen($this->container['assignmentRecordId']) < 1)) {
                $invalidProperties[] = "invalid value for 'assignmentRecordId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceSpecCode']) && (mb_strlen($this->container['resourceSpecCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceSpecCode']) && (mb_strlen($this->container['resourceSpecCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) > 64)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceNum']) && ($this->container['resourceNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'resourceNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['resourceNum']) && ($this->container['resourceNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'resourceNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceUsedNum']) && ($this->container['resourceUsedNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'resourceUsedNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['resourceUsedNum']) && ($this->container['resourceUsedNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'resourceUsedNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceAllocateTime']) && ($this->container['resourceAllocateTime'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'resourceAllocateTime', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['resourceAllocateTime']) && ($this->container['resourceAllocateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'resourceAllocateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceExpireTime']) && ($this->container['resourceExpireTime'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'resourceExpireTime', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['resourceExpireTime']) && ($this->container['resourceExpireTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'resourceExpireTime', must be bigger than or equal to 0.";
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
    * Gets assignmentRecordId
    *  资源分配id。
    *
    * @return string|null
    */
    public function getAssignmentRecordId()
    {
        return $this->container['assignmentRecordId'];
    }

    /**
    * Sets assignmentRecordId
    *
    * @param string|null $assignmentRecordId 资源分配id。
    *
    * @return $this
    */
    public function setAssignmentRecordId($assignmentRecordId)
    {
        $this->container['assignmentRecordId'] = $assignmentRecordId;
        return $this;
    }

    /**
    * Gets resourceSpecCode
    *  资源规格编码
    *
    * @return string|null
    */
    public function getResourceSpecCode()
    {
        return $this->container['resourceSpecCode'];
    }

    /**
    * Sets resourceSpecCode
    *
    * @param string|null $resourceSpecCode 资源规格编码
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
        return $this;
    }

    /**
    * Gets chargingMode
    *  资源计费类型。
    *
    * @return string|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string|null $chargingMode 资源计费类型。
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets resourceNum
    *  资源数量。
    *
    * @return double|null
    */
    public function getResourceNum()
    {
        return $this->container['resourceNum'];
    }

    /**
    * Sets resourceNum
    *
    * @param double|null $resourceNum 资源数量。
    *
    * @return $this
    */
    public function setResourceNum($resourceNum)
    {
        $this->container['resourceNum'] = $resourceNum;
        return $this;
    }

    /**
    * Gets resourceUsedNum
    *  资源已使用数量。
    *
    * @return double|null
    */
    public function getResourceUsedNum()
    {
        return $this->container['resourceUsedNum'];
    }

    /**
    * Sets resourceUsedNum
    *
    * @param double|null $resourceUsedNum 资源已使用数量。
    *
    * @return $this
    */
    public function setResourceUsedNum($resourceUsedNum)
    {
        $this->container['resourceUsedNum'] = $resourceUsedNum;
        return $this;
    }

    /**
    * Gets resourceAllocateTime
    *  资源分配时间（UTC时间）,unix时间,精确到秒。
    *
    * @return int|null
    */
    public function getResourceAllocateTime()
    {
        return $this->container['resourceAllocateTime'];
    }

    /**
    * Sets resourceAllocateTime
    *
    * @param int|null $resourceAllocateTime 资源分配时间（UTC时间）,unix时间,精确到秒。
    *
    * @return $this
    */
    public function setResourceAllocateTime($resourceAllocateTime)
    {
        $this->container['resourceAllocateTime'] = $resourceAllocateTime;
        return $this;
    }

    /**
    * Gets resourceExpireTime
    *  资源到期时间(UTC时间),unix时间,精确到秒。
    *
    * @return int|null
    */
    public function getResourceExpireTime()
    {
        return $this->container['resourceExpireTime'];
    }

    /**
    * Sets resourceExpireTime
    *
    * @param int|null $resourceExpireTime 资源到期时间(UTC时间),unix时间,精确到秒。
    *
    * @return $this
    */
    public function setResourceExpireTime($resourceExpireTime)
    {
        $this->container['resourceExpireTime'] = $resourceExpireTime;
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

