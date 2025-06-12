<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IsDisableResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IsDisable_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * forbiddener  禁用者
    * reson  禁用描述
    * disabled  禁用标识
    * jobId  任务ID
    * jobName  明文名称
    * forbiddenTime  禁用时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'forbiddener' => 'string',
            'reson' => 'string',
            'disabled' => 'int',
            'jobId' => 'string',
            'jobName' => 'string',
            'forbiddenTime' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * forbiddener  禁用者
    * reson  禁用描述
    * disabled  禁用标识
    * jobId  任务ID
    * jobName  明文名称
    * forbiddenTime  禁用时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'forbiddener' => null,
        'reson' => null,
        'disabled' => null,
        'jobId' => null,
        'jobName' => null,
        'forbiddenTime' => null
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
    * forbiddener  禁用者
    * reson  禁用描述
    * disabled  禁用标识
    * jobId  任务ID
    * jobName  明文名称
    * forbiddenTime  禁用时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'forbiddener' => 'forbiddener',
            'reson' => 'reson',
            'disabled' => 'disabled',
            'jobId' => 'job_id',
            'jobName' => 'job_name',
            'forbiddenTime' => 'forbidden_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * forbiddener  禁用者
    * reson  禁用描述
    * disabled  禁用标识
    * jobId  任务ID
    * jobName  明文名称
    * forbiddenTime  禁用时间
    *
    * @var string[]
    */
    protected static $setters = [
            'forbiddener' => 'setForbiddener',
            'reson' => 'setReson',
            'disabled' => 'setDisabled',
            'jobId' => 'setJobId',
            'jobName' => 'setJobName',
            'forbiddenTime' => 'setForbiddenTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * forbiddener  禁用者
    * reson  禁用描述
    * disabled  禁用标识
    * jobId  任务ID
    * jobName  明文名称
    * forbiddenTime  禁用时间
    *
    * @var string[]
    */
    protected static $getters = [
            'forbiddener' => 'getForbiddener',
            'reson' => 'getReson',
            'disabled' => 'getDisabled',
            'jobId' => 'getJobId',
            'jobName' => 'getJobName',
            'forbiddenTime' => 'getForbiddenTime'
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
        $this->container['forbiddener'] = isset($data['forbiddener']) ? $data['forbiddener'] : null;
        $this->container['reson'] = isset($data['reson']) ? $data['reson'] : null;
        $this->container['disabled'] = isset($data['disabled']) ? $data['disabled'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['forbiddenTime'] = isset($data['forbiddenTime']) ? $data['forbiddenTime'] : null;
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
    * Gets forbiddener
    *  禁用者
    *
    * @return string|null
    */
    public function getForbiddener()
    {
        return $this->container['forbiddener'];
    }

    /**
    * Sets forbiddener
    *
    * @param string|null $forbiddener 禁用者
    *
    * @return $this
    */
    public function setForbiddener($forbiddener)
    {
        $this->container['forbiddener'] = $forbiddener;
        return $this;
    }

    /**
    * Gets reson
    *  禁用描述
    *
    * @return string|null
    */
    public function getReson()
    {
        return $this->container['reson'];
    }

    /**
    * Sets reson
    *
    * @param string|null $reson 禁用描述
    *
    * @return $this
    */
    public function setReson($reson)
    {
        $this->container['reson'] = $reson;
        return $this;
    }

    /**
    * Gets disabled
    *  禁用标识
    *
    * @return int|null
    */
    public function getDisabled()
    {
        return $this->container['disabled'];
    }

    /**
    * Sets disabled
    *
    * @param int|null $disabled 禁用标识
    *
    * @return $this
    */
    public function setDisabled($disabled)
    {
        $this->container['disabled'] = $disabled;
        return $this;
    }

    /**
    * Gets jobId
    *  任务ID
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 任务ID
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets jobName
    *  明文名称
    *
    * @return string|null
    */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
    * Sets jobName
    *
    * @param string|null $jobName 明文名称
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets forbiddenTime
    *  禁用时间
    *
    * @return float|null
    */
    public function getForbiddenTime()
    {
        return $this->container['forbiddenTime'];
    }

    /**
    * Sets forbiddenTime
    *
    * @param float|null $forbiddenTime 禁用时间
    *
    * @return $this
    */
    public function setForbiddenTime($forbiddenTime)
    {
        $this->container['forbiddenTime'] = $forbiddenTime;
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

