<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PrecheckResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PrecheckResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * item  检查项。
    * result  检查结果
    * failedReason  失败原因。
    * data  加密的数据。
    * rawErrorMsg  行错误信息。
    * group  检查项分组
    * failedSubJobs  失败的子任务信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'item' => 'string',
            'result' => 'string',
            'failedReason' => 'string',
            'data' => 'string',
            'rawErrorMsg' => 'string',
            'group' => 'string',
            'failedSubJobs' => '\HuaweiCloud\SDK\Drs\V3\Model\PrecheckFailSubJobVO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * item  检查项。
    * result  检查结果
    * failedReason  失败原因。
    * data  加密的数据。
    * rawErrorMsg  行错误信息。
    * group  检查项分组
    * failedSubJobs  失败的子任务信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'item' => null,
        'result' => null,
        'failedReason' => null,
        'data' => null,
        'rawErrorMsg' => null,
        'group' => null,
        'failedSubJobs' => null
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
    * item  检查项。
    * result  检查结果
    * failedReason  失败原因。
    * data  加密的数据。
    * rawErrorMsg  行错误信息。
    * group  检查项分组
    * failedSubJobs  失败的子任务信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'item' => 'item',
            'result' => 'result',
            'failedReason' => 'failed_reason',
            'data' => 'data',
            'rawErrorMsg' => 'raw_error_msg',
            'group' => 'group',
            'failedSubJobs' => 'failed_sub_jobs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * item  检查项。
    * result  检查结果
    * failedReason  失败原因。
    * data  加密的数据。
    * rawErrorMsg  行错误信息。
    * group  检查项分组
    * failedSubJobs  失败的子任务信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'item' => 'setItem',
            'result' => 'setResult',
            'failedReason' => 'setFailedReason',
            'data' => 'setData',
            'rawErrorMsg' => 'setRawErrorMsg',
            'group' => 'setGroup',
            'failedSubJobs' => 'setFailedSubJobs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * item  检查项。
    * result  检查结果
    * failedReason  失败原因。
    * data  加密的数据。
    * rawErrorMsg  行错误信息。
    * group  检查项分组
    * failedSubJobs  失败的子任务信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'item' => 'getItem',
            'result' => 'getResult',
            'failedReason' => 'getFailedReason',
            'data' => 'getData',
            'rawErrorMsg' => 'getRawErrorMsg',
            'group' => 'getGroup',
            'failedSubJobs' => 'getFailedSubJobs'
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
    const RESULT_PASSED = 'PASSED';
    const RESULT_ALARM = 'ALARM';
    const RESULT_FAILED = 'FAILED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResultAllowableValues()
    {
        return [
            self::RESULT_PASSED,
            self::RESULT_ALARM,
            self::RESULT_FAILED,
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
        $this->container['item'] = isset($data['item']) ? $data['item'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['failedReason'] = isset($data['failedReason']) ? $data['failedReason'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['rawErrorMsg'] = isset($data['rawErrorMsg']) ? $data['rawErrorMsg'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['failedSubJobs'] = isset($data['failedSubJobs']) ? $data['failedSubJobs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getResultAllowableValues();
                if (!is_null($this->container['result']) && !in_array($this->container['result'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'result', must be one of '%s'",
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
    * Gets item
    *  检查项。
    *
    * @return string|null
    */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
    * Sets item
    *
    * @param string|null $item 检查项。
    *
    * @return $this
    */
    public function setItem($item)
    {
        $this->container['item'] = $item;
        return $this;
    }

    /**
    * Gets result
    *  检查结果
    *
    * @return string|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string|null $result 检查结果
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets failedReason
    *  失败原因。
    *
    * @return string|null
    */
    public function getFailedReason()
    {
        return $this->container['failedReason'];
    }

    /**
    * Sets failedReason
    *
    * @param string|null $failedReason 失败原因。
    *
    * @return $this
    */
    public function setFailedReason($failedReason)
    {
        $this->container['failedReason'] = $failedReason;
        return $this;
    }

    /**
    * Gets data
    *  加密的数据。
    *
    * @return string|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param string|null $data 加密的数据。
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
        return $this;
    }

    /**
    * Gets rawErrorMsg
    *  行错误信息。
    *
    * @return string|null
    */
    public function getRawErrorMsg()
    {
        return $this->container['rawErrorMsg'];
    }

    /**
    * Sets rawErrorMsg
    *
    * @param string|null $rawErrorMsg 行错误信息。
    *
    * @return $this
    */
    public function setRawErrorMsg($rawErrorMsg)
    {
        $this->container['rawErrorMsg'] = $rawErrorMsg;
        return $this;
    }

    /**
    * Gets group
    *  检查项分组
    *
    * @return string|null
    */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
    * Sets group
    *
    * @param string|null $group 检查项分组
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
        return $this;
    }

    /**
    * Gets failedSubJobs
    *  失败的子任务信息。
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\PrecheckFailSubJobVO[]|null
    */
    public function getFailedSubJobs()
    {
        return $this->container['failedSubJobs'];
    }

    /**
    * Sets failedSubJobs
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\PrecheckFailSubJobVO[]|null $failedSubJobs 失败的子任务信息。
    *
    * @return $this
    */
    public function setFailedSubJobs($failedSubJobs)
    {
        $this->container['failedSubJobs'] = $failedSubJobs;
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

