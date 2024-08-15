<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpgradeInstancesVersionResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpgradeInstancesVersionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobIds  任务id。
    * succeededNum  下发成功的实例数量。
    * failedNum  下发失败的实例数量。
    * failedInstanceIds  下发失败的实例ID列表。
    * errorMessages  下发失败错误信息列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobIds' => 'string[]',
            'succeededNum' => 'int',
            'failedNum' => 'int',
            'failedInstanceIds' => 'string[]',
            'errorMessages' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobIds  任务id。
    * succeededNum  下发成功的实例数量。
    * failedNum  下发失败的实例数量。
    * failedInstanceIds  下发失败的实例ID列表。
    * errorMessages  下发失败错误信息列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobIds' => null,
        'succeededNum' => null,
        'failedNum' => null,
        'failedInstanceIds' => null,
        'errorMessages' => null
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
    * jobIds  任务id。
    * succeededNum  下发成功的实例数量。
    * failedNum  下发失败的实例数量。
    * failedInstanceIds  下发失败的实例ID列表。
    * errorMessages  下发失败错误信息列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobIds' => 'job_ids',
            'succeededNum' => 'succeeded_num',
            'failedNum' => 'failed_num',
            'failedInstanceIds' => 'failed_instance_ids',
            'errorMessages' => 'error_messages'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobIds  任务id。
    * succeededNum  下发成功的实例数量。
    * failedNum  下发失败的实例数量。
    * failedInstanceIds  下发失败的实例ID列表。
    * errorMessages  下发失败错误信息列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobIds' => 'setJobIds',
            'succeededNum' => 'setSucceededNum',
            'failedNum' => 'setFailedNum',
            'failedInstanceIds' => 'setFailedInstanceIds',
            'errorMessages' => 'setErrorMessages'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobIds  任务id。
    * succeededNum  下发成功的实例数量。
    * failedNum  下发失败的实例数量。
    * failedInstanceIds  下发失败的实例ID列表。
    * errorMessages  下发失败错误信息列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobIds' => 'getJobIds',
            'succeededNum' => 'getSucceededNum',
            'failedNum' => 'getFailedNum',
            'failedInstanceIds' => 'getFailedInstanceIds',
            'errorMessages' => 'getErrorMessages'
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
        $this->container['jobIds'] = isset($data['jobIds']) ? $data['jobIds'] : null;
        $this->container['succeededNum'] = isset($data['succeededNum']) ? $data['succeededNum'] : null;
        $this->container['failedNum'] = isset($data['failedNum']) ? $data['failedNum'] : null;
        $this->container['failedInstanceIds'] = isset($data['failedInstanceIds']) ? $data['failedInstanceIds'] : null;
        $this->container['errorMessages'] = isset($data['errorMessages']) ? $data['errorMessages'] : null;
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
    * Gets jobIds
    *  任务id。
    *
    * @return string[]|null
    */
    public function getJobIds()
    {
        return $this->container['jobIds'];
    }

    /**
    * Sets jobIds
    *
    * @param string[]|null $jobIds 任务id。
    *
    * @return $this
    */
    public function setJobIds($jobIds)
    {
        $this->container['jobIds'] = $jobIds;
        return $this;
    }

    /**
    * Gets succeededNum
    *  下发成功的实例数量。
    *
    * @return int|null
    */
    public function getSucceededNum()
    {
        return $this->container['succeededNum'];
    }

    /**
    * Sets succeededNum
    *
    * @param int|null $succeededNum 下发成功的实例数量。
    *
    * @return $this
    */
    public function setSucceededNum($succeededNum)
    {
        $this->container['succeededNum'] = $succeededNum;
        return $this;
    }

    /**
    * Gets failedNum
    *  下发失败的实例数量。
    *
    * @return int|null
    */
    public function getFailedNum()
    {
        return $this->container['failedNum'];
    }

    /**
    * Sets failedNum
    *
    * @param int|null $failedNum 下发失败的实例数量。
    *
    * @return $this
    */
    public function setFailedNum($failedNum)
    {
        $this->container['failedNum'] = $failedNum;
        return $this;
    }

    /**
    * Gets failedInstanceIds
    *  下发失败的实例ID列表。
    *
    * @return string[]|null
    */
    public function getFailedInstanceIds()
    {
        return $this->container['failedInstanceIds'];
    }

    /**
    * Sets failedInstanceIds
    *
    * @param string[]|null $failedInstanceIds 下发失败的实例ID列表。
    *
    * @return $this
    */
    public function setFailedInstanceIds($failedInstanceIds)
    {
        $this->container['failedInstanceIds'] = $failedInstanceIds;
        return $this;
    }

    /**
    * Gets errorMessages
    *  下发失败错误信息列表。
    *
    * @return string[]|null
    */
    public function getErrorMessages()
    {
        return $this->container['errorMessages'];
    }

    /**
    * Sets errorMessages
    *
    * @param string[]|null $errorMessages 下发失败错误信息列表。
    *
    * @return $this
    */
    public function setErrorMessages($errorMessages)
    {
        $this->container['errorMessages'] = $errorMessages;
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

