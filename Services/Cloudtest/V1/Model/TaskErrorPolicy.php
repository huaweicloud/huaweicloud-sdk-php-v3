<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskErrorPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskErrorPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sameIpErrorTestCaseCount  小网拨测：同一个ip异常的用例大于多少个告警
    * sameTestCaseErrorIpCount  小网拨测:同一用例在N个IP中异常，并且异常的用例个数达到M个告警
    * testCaseErrorCount  任务中多少个用例异常告警
    * testCaseErrorRatio  任务中多少百分比的用例异常告警
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sameIpErrorTestCaseCount' => 'int',
            'sameTestCaseErrorIpCount' => 'string',
            'testCaseErrorCount' => 'int',
            'testCaseErrorRatio' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sameIpErrorTestCaseCount  小网拨测：同一个ip异常的用例大于多少个告警
    * sameTestCaseErrorIpCount  小网拨测:同一用例在N个IP中异常，并且异常的用例个数达到M个告警
    * testCaseErrorCount  任务中多少个用例异常告警
    * testCaseErrorRatio  任务中多少百分比的用例异常告警
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sameIpErrorTestCaseCount' => 'int32',
        'sameTestCaseErrorIpCount' => null,
        'testCaseErrorCount' => 'int32',
        'testCaseErrorRatio' => 'int32'
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
    * sameIpErrorTestCaseCount  小网拨测：同一个ip异常的用例大于多少个告警
    * sameTestCaseErrorIpCount  小网拨测:同一用例在N个IP中异常，并且异常的用例个数达到M个告警
    * testCaseErrorCount  任务中多少个用例异常告警
    * testCaseErrorRatio  任务中多少百分比的用例异常告警
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sameIpErrorTestCaseCount' => 'sameIpErrorTestCaseCount',
            'sameTestCaseErrorIpCount' => 'sameTestCaseErrorIpCount',
            'testCaseErrorCount' => 'testCaseErrorCount',
            'testCaseErrorRatio' => 'testCaseErrorRatio'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sameIpErrorTestCaseCount  小网拨测：同一个ip异常的用例大于多少个告警
    * sameTestCaseErrorIpCount  小网拨测:同一用例在N个IP中异常，并且异常的用例个数达到M个告警
    * testCaseErrorCount  任务中多少个用例异常告警
    * testCaseErrorRatio  任务中多少百分比的用例异常告警
    *
    * @var string[]
    */
    protected static $setters = [
            'sameIpErrorTestCaseCount' => 'setSameIpErrorTestCaseCount',
            'sameTestCaseErrorIpCount' => 'setSameTestCaseErrorIpCount',
            'testCaseErrorCount' => 'setTestCaseErrorCount',
            'testCaseErrorRatio' => 'setTestCaseErrorRatio'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sameIpErrorTestCaseCount  小网拨测：同一个ip异常的用例大于多少个告警
    * sameTestCaseErrorIpCount  小网拨测:同一用例在N个IP中异常，并且异常的用例个数达到M个告警
    * testCaseErrorCount  任务中多少个用例异常告警
    * testCaseErrorRatio  任务中多少百分比的用例异常告警
    *
    * @var string[]
    */
    protected static $getters = [
            'sameIpErrorTestCaseCount' => 'getSameIpErrorTestCaseCount',
            'sameTestCaseErrorIpCount' => 'getSameTestCaseErrorIpCount',
            'testCaseErrorCount' => 'getTestCaseErrorCount',
            'testCaseErrorRatio' => 'getTestCaseErrorRatio'
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
        $this->container['sameIpErrorTestCaseCount'] = isset($data['sameIpErrorTestCaseCount']) ? $data['sameIpErrorTestCaseCount'] : null;
        $this->container['sameTestCaseErrorIpCount'] = isset($data['sameTestCaseErrorIpCount']) ? $data['sameTestCaseErrorIpCount'] : null;
        $this->container['testCaseErrorCount'] = isset($data['testCaseErrorCount']) ? $data['testCaseErrorCount'] : null;
        $this->container['testCaseErrorRatio'] = isset($data['testCaseErrorRatio']) ? $data['testCaseErrorRatio'] : null;
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
    * Gets sameIpErrorTestCaseCount
    *  小网拨测：同一个ip异常的用例大于多少个告警
    *
    * @return int|null
    */
    public function getSameIpErrorTestCaseCount()
    {
        return $this->container['sameIpErrorTestCaseCount'];
    }

    /**
    * Sets sameIpErrorTestCaseCount
    *
    * @param int|null $sameIpErrorTestCaseCount 小网拨测：同一个ip异常的用例大于多少个告警
    *
    * @return $this
    */
    public function setSameIpErrorTestCaseCount($sameIpErrorTestCaseCount)
    {
        $this->container['sameIpErrorTestCaseCount'] = $sameIpErrorTestCaseCount;
        return $this;
    }

    /**
    * Gets sameTestCaseErrorIpCount
    *  小网拨测:同一用例在N个IP中异常，并且异常的用例个数达到M个告警
    *
    * @return string|null
    */
    public function getSameTestCaseErrorIpCount()
    {
        return $this->container['sameTestCaseErrorIpCount'];
    }

    /**
    * Sets sameTestCaseErrorIpCount
    *
    * @param string|null $sameTestCaseErrorIpCount 小网拨测:同一用例在N个IP中异常，并且异常的用例个数达到M个告警
    *
    * @return $this
    */
    public function setSameTestCaseErrorIpCount($sameTestCaseErrorIpCount)
    {
        $this->container['sameTestCaseErrorIpCount'] = $sameTestCaseErrorIpCount;
        return $this;
    }

    /**
    * Gets testCaseErrorCount
    *  任务中多少个用例异常告警
    *
    * @return int|null
    */
    public function getTestCaseErrorCount()
    {
        return $this->container['testCaseErrorCount'];
    }

    /**
    * Sets testCaseErrorCount
    *
    * @param int|null $testCaseErrorCount 任务中多少个用例异常告警
    *
    * @return $this
    */
    public function setTestCaseErrorCount($testCaseErrorCount)
    {
        $this->container['testCaseErrorCount'] = $testCaseErrorCount;
        return $this;
    }

    /**
    * Gets testCaseErrorRatio
    *  任务中多少百分比的用例异常告警
    *
    * @return int|null
    */
    public function getTestCaseErrorRatio()
    {
        return $this->container['testCaseErrorRatio'];
    }

    /**
    * Sets testCaseErrorRatio
    *
    * @param int|null $testCaseErrorRatio 任务中多少百分比的用例异常告警
    *
    * @return $this
    */
    public function setTestCaseErrorRatio($testCaseErrorRatio)
    {
        $this->container['testCaseErrorRatio'] = $testCaseErrorRatio;
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

