<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCompareResultResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCompareResultResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务id。
    * objectLevelCompareResults  objectLevelCompareResults
    * lineCompareResults  lineCompareResults
    * contentCompareResults  contentCompareResults
    * compareTaskListResults  compareTaskListResults
    * errorCode  错误码。
    * errorMsg  错误信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'objectLevelCompareResults' => '\HuaweiCloud\SDK\Drs\V3\Model\ObjectCompareResult',
            'lineCompareResults' => '\HuaweiCloud\SDK\Drs\V3\Model\LineCompareResult',
            'contentCompareResults' => '\HuaweiCloud\SDK\Drs\V3\Model\ContentCompareResult',
            'compareTaskListResults' => '\HuaweiCloud\SDK\Drs\V3\Model\CompareTaskListResult',
            'errorCode' => 'string',
            'errorMsg' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务id。
    * objectLevelCompareResults  objectLevelCompareResults
    * lineCompareResults  lineCompareResults
    * contentCompareResults  contentCompareResults
    * compareTaskListResults  compareTaskListResults
    * errorCode  错误码。
    * errorMsg  错误信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'objectLevelCompareResults' => null,
        'lineCompareResults' => null,
        'contentCompareResults' => null,
        'compareTaskListResults' => null,
        'errorCode' => null,
        'errorMsg' => null
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
    * jobId  任务id。
    * objectLevelCompareResults  objectLevelCompareResults
    * lineCompareResults  lineCompareResults
    * contentCompareResults  contentCompareResults
    * compareTaskListResults  compareTaskListResults
    * errorCode  错误码。
    * errorMsg  错误信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'objectLevelCompareResults' => 'object_level_compare_results',
            'lineCompareResults' => 'line_compare_results',
            'contentCompareResults' => 'content_compare_results',
            'compareTaskListResults' => 'compare_task_list_results',
            'errorCode' => 'error_code',
            'errorMsg' => 'error_msg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务id。
    * objectLevelCompareResults  objectLevelCompareResults
    * lineCompareResults  lineCompareResults
    * contentCompareResults  contentCompareResults
    * compareTaskListResults  compareTaskListResults
    * errorCode  错误码。
    * errorMsg  错误信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'objectLevelCompareResults' => 'setObjectLevelCompareResults',
            'lineCompareResults' => 'setLineCompareResults',
            'contentCompareResults' => 'setContentCompareResults',
            'compareTaskListResults' => 'setCompareTaskListResults',
            'errorCode' => 'setErrorCode',
            'errorMsg' => 'setErrorMsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务id。
    * objectLevelCompareResults  objectLevelCompareResults
    * lineCompareResults  lineCompareResults
    * contentCompareResults  contentCompareResults
    * compareTaskListResults  compareTaskListResults
    * errorCode  错误码。
    * errorMsg  错误信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'objectLevelCompareResults' => 'getObjectLevelCompareResults',
            'lineCompareResults' => 'getLineCompareResults',
            'contentCompareResults' => 'getContentCompareResults',
            'compareTaskListResults' => 'getCompareTaskListResults',
            'errorCode' => 'getErrorCode',
            'errorMsg' => 'getErrorMsg'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['objectLevelCompareResults'] = isset($data['objectLevelCompareResults']) ? $data['objectLevelCompareResults'] : null;
        $this->container['lineCompareResults'] = isset($data['lineCompareResults']) ? $data['lineCompareResults'] : null;
        $this->container['contentCompareResults'] = isset($data['contentCompareResults']) ? $data['contentCompareResults'] : null;
        $this->container['compareTaskListResults'] = isset($data['compareTaskListResults']) ? $data['compareTaskListResults'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
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
    * Gets jobId
    *  任务id。
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
    * @param string|null $jobId 任务id。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets objectLevelCompareResults
    *  objectLevelCompareResults
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\ObjectCompareResult|null
    */
    public function getObjectLevelCompareResults()
    {
        return $this->container['objectLevelCompareResults'];
    }

    /**
    * Sets objectLevelCompareResults
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\ObjectCompareResult|null $objectLevelCompareResults objectLevelCompareResults
    *
    * @return $this
    */
    public function setObjectLevelCompareResults($objectLevelCompareResults)
    {
        $this->container['objectLevelCompareResults'] = $objectLevelCompareResults;
        return $this;
    }

    /**
    * Gets lineCompareResults
    *  lineCompareResults
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\LineCompareResult|null
    */
    public function getLineCompareResults()
    {
        return $this->container['lineCompareResults'];
    }

    /**
    * Sets lineCompareResults
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\LineCompareResult|null $lineCompareResults lineCompareResults
    *
    * @return $this
    */
    public function setLineCompareResults($lineCompareResults)
    {
        $this->container['lineCompareResults'] = $lineCompareResults;
        return $this;
    }

    /**
    * Gets contentCompareResults
    *  contentCompareResults
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\ContentCompareResult|null
    */
    public function getContentCompareResults()
    {
        return $this->container['contentCompareResults'];
    }

    /**
    * Sets contentCompareResults
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\ContentCompareResult|null $contentCompareResults contentCompareResults
    *
    * @return $this
    */
    public function setContentCompareResults($contentCompareResults)
    {
        $this->container['contentCompareResults'] = $contentCompareResults;
        return $this;
    }

    /**
    * Gets compareTaskListResults
    *  compareTaskListResults
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\CompareTaskListResult|null
    */
    public function getCompareTaskListResults()
    {
        return $this->container['compareTaskListResults'];
    }

    /**
    * Sets compareTaskListResults
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\CompareTaskListResult|null $compareTaskListResults compareTaskListResults
    *
    * @return $this
    */
    public function setCompareTaskListResults($compareTaskListResults)
    {
        $this->container['compareTaskListResults'] = $compareTaskListResults;
        return $this;
    }

    /**
    * Gets errorCode
    *  错误码。
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode 错误码。
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets errorMsg
    *  错误信息。
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
    * @param string|null $errorMsg 错误信息。
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
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

