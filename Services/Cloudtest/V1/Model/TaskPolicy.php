<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * failedTimes  任务连续失败N次告警
    * sameIpFailedTestCaseCount  小网拨测：同一个ip失败的用例大于多少个告警
    * sameTestCaseFailedIpCount  小网拨测:同一用例在N个IP中失败，并且失败的用例个数达到M个
    * testCaseFailedCount  任务中多少个用例失败告警
    * testCaseFailedRatio  任务中多少百分比的用例失败告警
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'failedTimes' => 'int',
            'sameIpFailedTestCaseCount' => 'int',
            'sameTestCaseFailedIpCount' => 'string',
            'testCaseFailedCount' => 'int',
            'testCaseFailedRatio' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * failedTimes  任务连续失败N次告警
    * sameIpFailedTestCaseCount  小网拨测：同一个ip失败的用例大于多少个告警
    * sameTestCaseFailedIpCount  小网拨测:同一用例在N个IP中失败，并且失败的用例个数达到M个
    * testCaseFailedCount  任务中多少个用例失败告警
    * testCaseFailedRatio  任务中多少百分比的用例失败告警
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'failedTimes' => 'int32',
        'sameIpFailedTestCaseCount' => 'int32',
        'sameTestCaseFailedIpCount' => null,
        'testCaseFailedCount' => 'int32',
        'testCaseFailedRatio' => 'int32'
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
    * failedTimes  任务连续失败N次告警
    * sameIpFailedTestCaseCount  小网拨测：同一个ip失败的用例大于多少个告警
    * sameTestCaseFailedIpCount  小网拨测:同一用例在N个IP中失败，并且失败的用例个数达到M个
    * testCaseFailedCount  任务中多少个用例失败告警
    * testCaseFailedRatio  任务中多少百分比的用例失败告警
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'failedTimes' => 'failed_times',
            'sameIpFailedTestCaseCount' => 'sameIpFailedTestCaseCount',
            'sameTestCaseFailedIpCount' => 'sameTestCaseFailedIpCount',
            'testCaseFailedCount' => 'testCaseFailedCount',
            'testCaseFailedRatio' => 'testCaseFailedRatio'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * failedTimes  任务连续失败N次告警
    * sameIpFailedTestCaseCount  小网拨测：同一个ip失败的用例大于多少个告警
    * sameTestCaseFailedIpCount  小网拨测:同一用例在N个IP中失败，并且失败的用例个数达到M个
    * testCaseFailedCount  任务中多少个用例失败告警
    * testCaseFailedRatio  任务中多少百分比的用例失败告警
    *
    * @var string[]
    */
    protected static $setters = [
            'failedTimes' => 'setFailedTimes',
            'sameIpFailedTestCaseCount' => 'setSameIpFailedTestCaseCount',
            'sameTestCaseFailedIpCount' => 'setSameTestCaseFailedIpCount',
            'testCaseFailedCount' => 'setTestCaseFailedCount',
            'testCaseFailedRatio' => 'setTestCaseFailedRatio'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * failedTimes  任务连续失败N次告警
    * sameIpFailedTestCaseCount  小网拨测：同一个ip失败的用例大于多少个告警
    * sameTestCaseFailedIpCount  小网拨测:同一用例在N个IP中失败，并且失败的用例个数达到M个
    * testCaseFailedCount  任务中多少个用例失败告警
    * testCaseFailedRatio  任务中多少百分比的用例失败告警
    *
    * @var string[]
    */
    protected static $getters = [
            'failedTimes' => 'getFailedTimes',
            'sameIpFailedTestCaseCount' => 'getSameIpFailedTestCaseCount',
            'sameTestCaseFailedIpCount' => 'getSameTestCaseFailedIpCount',
            'testCaseFailedCount' => 'getTestCaseFailedCount',
            'testCaseFailedRatio' => 'getTestCaseFailedRatio'
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
        $this->container['failedTimes'] = isset($data['failedTimes']) ? $data['failedTimes'] : null;
        $this->container['sameIpFailedTestCaseCount'] = isset($data['sameIpFailedTestCaseCount']) ? $data['sameIpFailedTestCaseCount'] : null;
        $this->container['sameTestCaseFailedIpCount'] = isset($data['sameTestCaseFailedIpCount']) ? $data['sameTestCaseFailedIpCount'] : null;
        $this->container['testCaseFailedCount'] = isset($data['testCaseFailedCount']) ? $data['testCaseFailedCount'] : null;
        $this->container['testCaseFailedRatio'] = isset($data['testCaseFailedRatio']) ? $data['testCaseFailedRatio'] : null;
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
    * Gets failedTimes
    *  任务连续失败N次告警
    *
    * @return int|null
    */
    public function getFailedTimes()
    {
        return $this->container['failedTimes'];
    }

    /**
    * Sets failedTimes
    *
    * @param int|null $failedTimes 任务连续失败N次告警
    *
    * @return $this
    */
    public function setFailedTimes($failedTimes)
    {
        $this->container['failedTimes'] = $failedTimes;
        return $this;
    }

    /**
    * Gets sameIpFailedTestCaseCount
    *  小网拨测：同一个ip失败的用例大于多少个告警
    *
    * @return int|null
    */
    public function getSameIpFailedTestCaseCount()
    {
        return $this->container['sameIpFailedTestCaseCount'];
    }

    /**
    * Sets sameIpFailedTestCaseCount
    *
    * @param int|null $sameIpFailedTestCaseCount 小网拨测：同一个ip失败的用例大于多少个告警
    *
    * @return $this
    */
    public function setSameIpFailedTestCaseCount($sameIpFailedTestCaseCount)
    {
        $this->container['sameIpFailedTestCaseCount'] = $sameIpFailedTestCaseCount;
        return $this;
    }

    /**
    * Gets sameTestCaseFailedIpCount
    *  小网拨测:同一用例在N个IP中失败，并且失败的用例个数达到M个
    *
    * @return string|null
    */
    public function getSameTestCaseFailedIpCount()
    {
        return $this->container['sameTestCaseFailedIpCount'];
    }

    /**
    * Sets sameTestCaseFailedIpCount
    *
    * @param string|null $sameTestCaseFailedIpCount 小网拨测:同一用例在N个IP中失败，并且失败的用例个数达到M个
    *
    * @return $this
    */
    public function setSameTestCaseFailedIpCount($sameTestCaseFailedIpCount)
    {
        $this->container['sameTestCaseFailedIpCount'] = $sameTestCaseFailedIpCount;
        return $this;
    }

    /**
    * Gets testCaseFailedCount
    *  任务中多少个用例失败告警
    *
    * @return int|null
    */
    public function getTestCaseFailedCount()
    {
        return $this->container['testCaseFailedCount'];
    }

    /**
    * Sets testCaseFailedCount
    *
    * @param int|null $testCaseFailedCount 任务中多少个用例失败告警
    *
    * @return $this
    */
    public function setTestCaseFailedCount($testCaseFailedCount)
    {
        $this->container['testCaseFailedCount'] = $testCaseFailedCount;
        return $this;
    }

    /**
    * Gets testCaseFailedRatio
    *  任务中多少百分比的用例失败告警
    *
    * @return int|null
    */
    public function getTestCaseFailedRatio()
    {
        return $this->container['testCaseFailedRatio'];
    }

    /**
    * Sets testCaseFailedRatio
    *
    * @param int|null $testCaseFailedRatio 任务中多少百分比的用例失败告警
    *
    * @return $this
    */
    public function setTestCaseFailedRatio($testCaseFailedRatio)
    {
        $this->container['testCaseFailedRatio'] = $testCaseFailedRatio;
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

