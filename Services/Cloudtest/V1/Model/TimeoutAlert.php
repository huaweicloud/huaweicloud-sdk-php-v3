<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TimeoutAlert implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TimeoutAlert';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alertTemplate  alertTemplate
    * enable  超时告警开启 0关闭 1开启
    * taskTimeoutPolicy  taskTimeoutPolicy
    * testCaseTimeoutPolicy  testCaseTimeoutPolicy
    * timeoutRetryTimes  超时重试次数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alertTemplate' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AlertTemplate',
            'enable' => 'string',
            'taskTimeoutPolicy' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\TaskTimeoutPolicy',
            'testCaseTimeoutPolicy' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\TestCaseTimeoutPolicy',
            'timeoutRetryTimes' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alertTemplate  alertTemplate
    * enable  超时告警开启 0关闭 1开启
    * taskTimeoutPolicy  taskTimeoutPolicy
    * testCaseTimeoutPolicy  testCaseTimeoutPolicy
    * timeoutRetryTimes  超时重试次数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alertTemplate' => null,
        'enable' => null,
        'taskTimeoutPolicy' => null,
        'testCaseTimeoutPolicy' => null,
        'timeoutRetryTimes' => 'int32'
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
    * alertTemplate  alertTemplate
    * enable  超时告警开启 0关闭 1开启
    * taskTimeoutPolicy  taskTimeoutPolicy
    * testCaseTimeoutPolicy  testCaseTimeoutPolicy
    * timeoutRetryTimes  超时重试次数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alertTemplate' => 'alert_template',
            'enable' => 'enable',
            'taskTimeoutPolicy' => 'task_timeout_policy',
            'testCaseTimeoutPolicy' => 'testCaseTimeoutPolicy',
            'timeoutRetryTimes' => 'timeoutRetryTimes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alertTemplate  alertTemplate
    * enable  超时告警开启 0关闭 1开启
    * taskTimeoutPolicy  taskTimeoutPolicy
    * testCaseTimeoutPolicy  testCaseTimeoutPolicy
    * timeoutRetryTimes  超时重试次数
    *
    * @var string[]
    */
    protected static $setters = [
            'alertTemplate' => 'setAlertTemplate',
            'enable' => 'setEnable',
            'taskTimeoutPolicy' => 'setTaskTimeoutPolicy',
            'testCaseTimeoutPolicy' => 'setTestCaseTimeoutPolicy',
            'timeoutRetryTimes' => 'setTimeoutRetryTimes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alertTemplate  alertTemplate
    * enable  超时告警开启 0关闭 1开启
    * taskTimeoutPolicy  taskTimeoutPolicy
    * testCaseTimeoutPolicy  testCaseTimeoutPolicy
    * timeoutRetryTimes  超时重试次数
    *
    * @var string[]
    */
    protected static $getters = [
            'alertTemplate' => 'getAlertTemplate',
            'enable' => 'getEnable',
            'taskTimeoutPolicy' => 'getTaskTimeoutPolicy',
            'testCaseTimeoutPolicy' => 'getTestCaseTimeoutPolicy',
            'timeoutRetryTimes' => 'getTimeoutRetryTimes'
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
        $this->container['alertTemplate'] = isset($data['alertTemplate']) ? $data['alertTemplate'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['taskTimeoutPolicy'] = isset($data['taskTimeoutPolicy']) ? $data['taskTimeoutPolicy'] : null;
        $this->container['testCaseTimeoutPolicy'] = isset($data['testCaseTimeoutPolicy']) ? $data['testCaseTimeoutPolicy'] : null;
        $this->container['timeoutRetryTimes'] = isset($data['timeoutRetryTimes']) ? $data['timeoutRetryTimes'] : null;
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
    * Gets alertTemplate
    *  alertTemplate
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AlertTemplate|null
    */
    public function getAlertTemplate()
    {
        return $this->container['alertTemplate'];
    }

    /**
    * Sets alertTemplate
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AlertTemplate|null $alertTemplate alertTemplate
    *
    * @return $this
    */
    public function setAlertTemplate($alertTemplate)
    {
        $this->container['alertTemplate'] = $alertTemplate;
        return $this;
    }

    /**
    * Gets enable
    *  超时告警开启 0关闭 1开启
    *
    * @return string|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param string|null $enable 超时告警开启 0关闭 1开启
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets taskTimeoutPolicy
    *  taskTimeoutPolicy
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\TaskTimeoutPolicy|null
    */
    public function getTaskTimeoutPolicy()
    {
        return $this->container['taskTimeoutPolicy'];
    }

    /**
    * Sets taskTimeoutPolicy
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\TaskTimeoutPolicy|null $taskTimeoutPolicy taskTimeoutPolicy
    *
    * @return $this
    */
    public function setTaskTimeoutPolicy($taskTimeoutPolicy)
    {
        $this->container['taskTimeoutPolicy'] = $taskTimeoutPolicy;
        return $this;
    }

    /**
    * Gets testCaseTimeoutPolicy
    *  testCaseTimeoutPolicy
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\TestCaseTimeoutPolicy|null
    */
    public function getTestCaseTimeoutPolicy()
    {
        return $this->container['testCaseTimeoutPolicy'];
    }

    /**
    * Sets testCaseTimeoutPolicy
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\TestCaseTimeoutPolicy|null $testCaseTimeoutPolicy testCaseTimeoutPolicy
    *
    * @return $this
    */
    public function setTestCaseTimeoutPolicy($testCaseTimeoutPolicy)
    {
        $this->container['testCaseTimeoutPolicy'] = $testCaseTimeoutPolicy;
        return $this;
    }

    /**
    * Gets timeoutRetryTimes
    *  超时重试次数
    *
    * @return int|null
    */
    public function getTimeoutRetryTimes()
    {
        return $this->container['timeoutRetryTimes'];
    }

    /**
    * Sets timeoutRetryTimes
    *
    * @param int|null $timeoutRetryTimes 超时重试次数
    *
    * @return $this
    */
    public function setTimeoutRetryTimes($timeoutRetryTimes)
    {
        $this->container['timeoutRetryTimes'] = $timeoutRetryTimes;
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

