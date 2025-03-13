<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSecurityPermissionManagementDiagnoseResultResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSecurityPermissionManagementDiagnoseResultResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  诊断任务id。
    * checkTime  最新检测时间。
    * scanning  是否正在诊断。
    * highPermission  highPermission
    * unreasonablePermission  unreasonablePermission
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'checkTime' => 'int',
            'scanning' => 'bool',
            'highPermission' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\HighPermission',
            'unreasonablePermission' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\UnreasonablePermission'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  诊断任务id。
    * checkTime  最新检测时间。
    * scanning  是否正在诊断。
    * highPermission  highPermission
    * unreasonablePermission  unreasonablePermission
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'checkTime' => 'int64',
        'scanning' => null,
        'highPermission' => null,
        'unreasonablePermission' => null
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
    * taskId  诊断任务id。
    * checkTime  最新检测时间。
    * scanning  是否正在诊断。
    * highPermission  highPermission
    * unreasonablePermission  unreasonablePermission
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'checkTime' => 'check_time',
            'scanning' => 'scanning',
            'highPermission' => 'high_permission',
            'unreasonablePermission' => 'unreasonable_permission'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  诊断任务id。
    * checkTime  最新检测时间。
    * scanning  是否正在诊断。
    * highPermission  highPermission
    * unreasonablePermission  unreasonablePermission
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'checkTime' => 'setCheckTime',
            'scanning' => 'setScanning',
            'highPermission' => 'setHighPermission',
            'unreasonablePermission' => 'setUnreasonablePermission'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  诊断任务id。
    * checkTime  最新检测时间。
    * scanning  是否正在诊断。
    * highPermission  highPermission
    * unreasonablePermission  unreasonablePermission
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'checkTime' => 'getCheckTime',
            'scanning' => 'getScanning',
            'highPermission' => 'getHighPermission',
            'unreasonablePermission' => 'getUnreasonablePermission'
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
        $this->container['checkTime'] = isset($data['checkTime']) ? $data['checkTime'] : null;
        $this->container['scanning'] = isset($data['scanning']) ? $data['scanning'] : null;
        $this->container['highPermission'] = isset($data['highPermission']) ? $data['highPermission'] : null;
        $this->container['unreasonablePermission'] = isset($data['unreasonablePermission']) ? $data['unreasonablePermission'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) > 128)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['checkTime']) && ($this->container['checkTime'] > 4070880010000)) {
                $invalidProperties[] = "invalid value for 'checkTime', must be smaller than or equal to 4070880010000.";
            }
            if (!is_null($this->container['checkTime']) && ($this->container['checkTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'checkTime', must be bigger than or equal to 0.";
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
    *  诊断任务id。
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
    * @param string|null $taskId 诊断任务id。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets checkTime
    *  最新检测时间。
    *
    * @return int|null
    */
    public function getCheckTime()
    {
        return $this->container['checkTime'];
    }

    /**
    * Sets checkTime
    *
    * @param int|null $checkTime 最新检测时间。
    *
    * @return $this
    */
    public function setCheckTime($checkTime)
    {
        $this->container['checkTime'] = $checkTime;
        return $this;
    }

    /**
    * Gets scanning
    *  是否正在诊断。
    *
    * @return bool|null
    */
    public function getScanning()
    {
        return $this->container['scanning'];
    }

    /**
    * Sets scanning
    *
    * @param bool|null $scanning 是否正在诊断。
    *
    * @return $this
    */
    public function setScanning($scanning)
    {
        $this->container['scanning'] = $scanning;
        return $this;
    }

    /**
    * Gets highPermission
    *  highPermission
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\HighPermission|null
    */
    public function getHighPermission()
    {
        return $this->container['highPermission'];
    }

    /**
    * Sets highPermission
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\HighPermission|null $highPermission highPermission
    *
    * @return $this
    */
    public function setHighPermission($highPermission)
    {
        $this->container['highPermission'] = $highPermission;
        return $this;
    }

    /**
    * Gets unreasonablePermission
    *  unreasonablePermission
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\UnreasonablePermission|null
    */
    public function getUnreasonablePermission()
    {
        return $this->container['unreasonablePermission'];
    }

    /**
    * Sets unreasonablePermission
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\UnreasonablePermission|null $unreasonablePermission unreasonablePermission
    *
    * @return $this
    */
    public function setUnreasonablePermission($unreasonablePermission)
    {
        $this->container['unreasonablePermission'] = $unreasonablePermission;
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

