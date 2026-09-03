<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskTimeoutPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskTimeoutPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sameIpTimeoutTestCaseCount  小网拨测：同一个ip超时的用例大于多少个告警
    * sameTestCaseTimeoutIpCount  小网拨测:同一用例在N个IP中超时，并且超时的用例个数达到M个告警
    * testCaseTimeoutCount  任务中多少个用例超时告警
    * testCaseTimeoutRatio  任务中多少百分比的用例超时告警
    * timeoutTimes  任务连续超时告警
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sameIpTimeoutTestCaseCount' => 'int',
            'sameTestCaseTimeoutIpCount' => 'string',
            'testCaseTimeoutCount' => 'int',
            'testCaseTimeoutRatio' => 'int',
            'timeoutTimes' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sameIpTimeoutTestCaseCount  小网拨测：同一个ip超时的用例大于多少个告警
    * sameTestCaseTimeoutIpCount  小网拨测:同一用例在N个IP中超时，并且超时的用例个数达到M个告警
    * testCaseTimeoutCount  任务中多少个用例超时告警
    * testCaseTimeoutRatio  任务中多少百分比的用例超时告警
    * timeoutTimes  任务连续超时告警
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sameIpTimeoutTestCaseCount' => 'int32',
        'sameTestCaseTimeoutIpCount' => null,
        'testCaseTimeoutCount' => 'int32',
        'testCaseTimeoutRatio' => 'int32',
        'timeoutTimes' => 'int32'
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
    * sameIpTimeoutTestCaseCount  小网拨测：同一个ip超时的用例大于多少个告警
    * sameTestCaseTimeoutIpCount  小网拨测:同一用例在N个IP中超时，并且超时的用例个数达到M个告警
    * testCaseTimeoutCount  任务中多少个用例超时告警
    * testCaseTimeoutRatio  任务中多少百分比的用例超时告警
    * timeoutTimes  任务连续超时告警
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sameIpTimeoutTestCaseCount' => 'sameIpTimeoutTestCaseCount',
            'sameTestCaseTimeoutIpCount' => 'sameTestCaseTimeoutIpCount',
            'testCaseTimeoutCount' => 'testCaseTimeoutCount',
            'testCaseTimeoutRatio' => 'testCaseTimeoutRatio',
            'timeoutTimes' => 'timeoutTimes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sameIpTimeoutTestCaseCount  小网拨测：同一个ip超时的用例大于多少个告警
    * sameTestCaseTimeoutIpCount  小网拨测:同一用例在N个IP中超时，并且超时的用例个数达到M个告警
    * testCaseTimeoutCount  任务中多少个用例超时告警
    * testCaseTimeoutRatio  任务中多少百分比的用例超时告警
    * timeoutTimes  任务连续超时告警
    *
    * @var string[]
    */
    protected static $setters = [
            'sameIpTimeoutTestCaseCount' => 'setSameIpTimeoutTestCaseCount',
            'sameTestCaseTimeoutIpCount' => 'setSameTestCaseTimeoutIpCount',
            'testCaseTimeoutCount' => 'setTestCaseTimeoutCount',
            'testCaseTimeoutRatio' => 'setTestCaseTimeoutRatio',
            'timeoutTimes' => 'setTimeoutTimes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sameIpTimeoutTestCaseCount  小网拨测：同一个ip超时的用例大于多少个告警
    * sameTestCaseTimeoutIpCount  小网拨测:同一用例在N个IP中超时，并且超时的用例个数达到M个告警
    * testCaseTimeoutCount  任务中多少个用例超时告警
    * testCaseTimeoutRatio  任务中多少百分比的用例超时告警
    * timeoutTimes  任务连续超时告警
    *
    * @var string[]
    */
    protected static $getters = [
            'sameIpTimeoutTestCaseCount' => 'getSameIpTimeoutTestCaseCount',
            'sameTestCaseTimeoutIpCount' => 'getSameTestCaseTimeoutIpCount',
            'testCaseTimeoutCount' => 'getTestCaseTimeoutCount',
            'testCaseTimeoutRatio' => 'getTestCaseTimeoutRatio',
            'timeoutTimes' => 'getTimeoutTimes'
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
        $this->container['sameIpTimeoutTestCaseCount'] = isset($data['sameIpTimeoutTestCaseCount']) ? $data['sameIpTimeoutTestCaseCount'] : null;
        $this->container['sameTestCaseTimeoutIpCount'] = isset($data['sameTestCaseTimeoutIpCount']) ? $data['sameTestCaseTimeoutIpCount'] : null;
        $this->container['testCaseTimeoutCount'] = isset($data['testCaseTimeoutCount']) ? $data['testCaseTimeoutCount'] : null;
        $this->container['testCaseTimeoutRatio'] = isset($data['testCaseTimeoutRatio']) ? $data['testCaseTimeoutRatio'] : null;
        $this->container['timeoutTimes'] = isset($data['timeoutTimes']) ? $data['timeoutTimes'] : null;
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
    * Gets sameIpTimeoutTestCaseCount
    *  小网拨测：同一个ip超时的用例大于多少个告警
    *
    * @return int|null
    */
    public function getSameIpTimeoutTestCaseCount()
    {
        return $this->container['sameIpTimeoutTestCaseCount'];
    }

    /**
    * Sets sameIpTimeoutTestCaseCount
    *
    * @param int|null $sameIpTimeoutTestCaseCount 小网拨测：同一个ip超时的用例大于多少个告警
    *
    * @return $this
    */
    public function setSameIpTimeoutTestCaseCount($sameIpTimeoutTestCaseCount)
    {
        $this->container['sameIpTimeoutTestCaseCount'] = $sameIpTimeoutTestCaseCount;
        return $this;
    }

    /**
    * Gets sameTestCaseTimeoutIpCount
    *  小网拨测:同一用例在N个IP中超时，并且超时的用例个数达到M个告警
    *
    * @return string|null
    */
    public function getSameTestCaseTimeoutIpCount()
    {
        return $this->container['sameTestCaseTimeoutIpCount'];
    }

    /**
    * Sets sameTestCaseTimeoutIpCount
    *
    * @param string|null $sameTestCaseTimeoutIpCount 小网拨测:同一用例在N个IP中超时，并且超时的用例个数达到M个告警
    *
    * @return $this
    */
    public function setSameTestCaseTimeoutIpCount($sameTestCaseTimeoutIpCount)
    {
        $this->container['sameTestCaseTimeoutIpCount'] = $sameTestCaseTimeoutIpCount;
        return $this;
    }

    /**
    * Gets testCaseTimeoutCount
    *  任务中多少个用例超时告警
    *
    * @return int|null
    */
    public function getTestCaseTimeoutCount()
    {
        return $this->container['testCaseTimeoutCount'];
    }

    /**
    * Sets testCaseTimeoutCount
    *
    * @param int|null $testCaseTimeoutCount 任务中多少个用例超时告警
    *
    * @return $this
    */
    public function setTestCaseTimeoutCount($testCaseTimeoutCount)
    {
        $this->container['testCaseTimeoutCount'] = $testCaseTimeoutCount;
        return $this;
    }

    /**
    * Gets testCaseTimeoutRatio
    *  任务中多少百分比的用例超时告警
    *
    * @return int|null
    */
    public function getTestCaseTimeoutRatio()
    {
        return $this->container['testCaseTimeoutRatio'];
    }

    /**
    * Sets testCaseTimeoutRatio
    *
    * @param int|null $testCaseTimeoutRatio 任务中多少百分比的用例超时告警
    *
    * @return $this
    */
    public function setTestCaseTimeoutRatio($testCaseTimeoutRatio)
    {
        $this->container['testCaseTimeoutRatio'] = $testCaseTimeoutRatio;
        return $this;
    }

    /**
    * Gets timeoutTimes
    *  任务连续超时告警
    *
    * @return int|null
    */
    public function getTimeoutTimes()
    {
        return $this->container['timeoutTimes'];
    }

    /**
    * Sets timeoutTimes
    *
    * @param int|null $timeoutTimes 任务连续超时告警
    *
    * @return $this
    */
    public function setTimeoutTimes($timeoutTimes)
    {
        $this->container['timeoutTimes'] = $timeoutTimes;
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

