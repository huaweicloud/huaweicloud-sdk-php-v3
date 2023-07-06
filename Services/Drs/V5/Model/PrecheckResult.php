<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

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
    * result  检查结果。取值： - PASSED：检查通过。 - ALARM：检查告警项。 - FAILED：检查失败。
    * failedReason  失败原因。
    * data  失败数据。
    * rawErrorMsg  失败详情。
    * group  检查项分组。
    * isSupportSkip  是否支持跳过。
    * isSkipped  是否已跳过。
    * failedSubJobs  失败子任务详情。
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
            'isSupportSkip' => 'bool',
            'isSkipped' => 'bool',
            'failedSubJobs' => '\HuaweiCloud\SDK\Drs\V5\Model\PrecheckFailSubJobResult[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * item  检查项。
    * result  检查结果。取值： - PASSED：检查通过。 - ALARM：检查告警项。 - FAILED：检查失败。
    * failedReason  失败原因。
    * data  失败数据。
    * rawErrorMsg  失败详情。
    * group  检查项分组。
    * isSupportSkip  是否支持跳过。
    * isSkipped  是否已跳过。
    * failedSubJobs  失败子任务详情。
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
        'isSupportSkip' => null,
        'isSkipped' => null,
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
    * result  检查结果。取值： - PASSED：检查通过。 - ALARM：检查告警项。 - FAILED：检查失败。
    * failedReason  失败原因。
    * data  失败数据。
    * rawErrorMsg  失败详情。
    * group  检查项分组。
    * isSupportSkip  是否支持跳过。
    * isSkipped  是否已跳过。
    * failedSubJobs  失败子任务详情。
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
            'isSupportSkip' => 'is_support_skip',
            'isSkipped' => 'is_skipped',
            'failedSubJobs' => 'failed_sub_jobs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * item  检查项。
    * result  检查结果。取值： - PASSED：检查通过。 - ALARM：检查告警项。 - FAILED：检查失败。
    * failedReason  失败原因。
    * data  失败数据。
    * rawErrorMsg  失败详情。
    * group  检查项分组。
    * isSupportSkip  是否支持跳过。
    * isSkipped  是否已跳过。
    * failedSubJobs  失败子任务详情。
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
            'isSupportSkip' => 'setIsSupportSkip',
            'isSkipped' => 'setIsSkipped',
            'failedSubJobs' => 'setFailedSubJobs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * item  检查项。
    * result  检查结果。取值： - PASSED：检查通过。 - ALARM：检查告警项。 - FAILED：检查失败。
    * failedReason  失败原因。
    * data  失败数据。
    * rawErrorMsg  失败详情。
    * group  检查项分组。
    * isSupportSkip  是否支持跳过。
    * isSkipped  是否已跳过。
    * failedSubJobs  失败子任务详情。
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
            'isSupportSkip' => 'getIsSupportSkip',
            'isSkipped' => 'getIsSkipped',
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
        $this->container['isSupportSkip'] = isset($data['isSupportSkip']) ? $data['isSupportSkip'] : null;
        $this->container['isSkipped'] = isset($data['isSkipped']) ? $data['isSkipped'] : null;
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
    *  检查结果。取值： - PASSED：检查通过。 - ALARM：检查告警项。 - FAILED：检查失败。
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
    * @param string|null $result 检查结果。取值： - PASSED：检查通过。 - ALARM：检查告警项。 - FAILED：检查失败。
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
    *  失败数据。
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
    * @param string|null $data 失败数据。
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
    *  失败详情。
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
    * @param string|null $rawErrorMsg 失败详情。
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
    *  检查项分组。
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
    * @param string|null $group 检查项分组。
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
        return $this;
    }

    /**
    * Gets isSupportSkip
    *  是否支持跳过。
    *
    * @return bool|null
    */
    public function getIsSupportSkip()
    {
        return $this->container['isSupportSkip'];
    }

    /**
    * Sets isSupportSkip
    *
    * @param bool|null $isSupportSkip 是否支持跳过。
    *
    * @return $this
    */
    public function setIsSupportSkip($isSupportSkip)
    {
        $this->container['isSupportSkip'] = $isSupportSkip;
        return $this;
    }

    /**
    * Gets isSkipped
    *  是否已跳过。
    *
    * @return bool|null
    */
    public function getIsSkipped()
    {
        return $this->container['isSkipped'];
    }

    /**
    * Sets isSkipped
    *
    * @param bool|null $isSkipped 是否已跳过。
    *
    * @return $this
    */
    public function setIsSkipped($isSkipped)
    {
        $this->container['isSkipped'] = $isSkipped;
        return $this;
    }

    /**
    * Gets failedSubJobs
    *  失败子任务详情。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\PrecheckFailSubJobResult[]|null
    */
    public function getFailedSubJobs()
    {
        return $this->container['failedSubJobs'];
    }

    /**
    * Sets failedSubJobs
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\PrecheckFailSubJobResult[]|null $failedSubJobs 失败子任务详情。
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

