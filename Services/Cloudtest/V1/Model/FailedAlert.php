<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FailedAlert implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FailedAlert';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cloudAlarm  cloudAlarm
    * taskPolicy  taskPolicy
    * testCasePolicy  testCasePolicy
    * wiseEye  wiseEye
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cloudAlarm' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\CloudAlarmDto',
            'taskPolicy' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\TaskPolicy',
            'testCasePolicy' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\TestCasePolicy',
            'wiseEye' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\WiseEye'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cloudAlarm  cloudAlarm
    * taskPolicy  taskPolicy
    * testCasePolicy  testCasePolicy
    * wiseEye  wiseEye
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cloudAlarm' => null,
        'taskPolicy' => null,
        'testCasePolicy' => null,
        'wiseEye' => null
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
    * cloudAlarm  cloudAlarm
    * taskPolicy  taskPolicy
    * testCasePolicy  testCasePolicy
    * wiseEye  wiseEye
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cloudAlarm' => 'cloudAlarm',
            'taskPolicy' => 'taskPolicy',
            'testCasePolicy' => 'testCasePolicy',
            'wiseEye' => 'wiseEye'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cloudAlarm  cloudAlarm
    * taskPolicy  taskPolicy
    * testCasePolicy  testCasePolicy
    * wiseEye  wiseEye
    *
    * @var string[]
    */
    protected static $setters = [
            'cloudAlarm' => 'setCloudAlarm',
            'taskPolicy' => 'setTaskPolicy',
            'testCasePolicy' => 'setTestCasePolicy',
            'wiseEye' => 'setWiseEye'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cloudAlarm  cloudAlarm
    * taskPolicy  taskPolicy
    * testCasePolicy  testCasePolicy
    * wiseEye  wiseEye
    *
    * @var string[]
    */
    protected static $getters = [
            'cloudAlarm' => 'getCloudAlarm',
            'taskPolicy' => 'getTaskPolicy',
            'testCasePolicy' => 'getTestCasePolicy',
            'wiseEye' => 'getWiseEye'
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
        $this->container['cloudAlarm'] = isset($data['cloudAlarm']) ? $data['cloudAlarm'] : null;
        $this->container['taskPolicy'] = isset($data['taskPolicy']) ? $data['taskPolicy'] : null;
        $this->container['testCasePolicy'] = isset($data['testCasePolicy']) ? $data['testCasePolicy'] : null;
        $this->container['wiseEye'] = isset($data['wiseEye']) ? $data['wiseEye'] : null;
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
    * Gets cloudAlarm
    *  cloudAlarm
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\CloudAlarmDto|null
    */
    public function getCloudAlarm()
    {
        return $this->container['cloudAlarm'];
    }

    /**
    * Sets cloudAlarm
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\CloudAlarmDto|null $cloudAlarm cloudAlarm
    *
    * @return $this
    */
    public function setCloudAlarm($cloudAlarm)
    {
        $this->container['cloudAlarm'] = $cloudAlarm;
        return $this;
    }

    /**
    * Gets taskPolicy
    *  taskPolicy
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\TaskPolicy|null
    */
    public function getTaskPolicy()
    {
        return $this->container['taskPolicy'];
    }

    /**
    * Sets taskPolicy
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\TaskPolicy|null $taskPolicy taskPolicy
    *
    * @return $this
    */
    public function setTaskPolicy($taskPolicy)
    {
        $this->container['taskPolicy'] = $taskPolicy;
        return $this;
    }

    /**
    * Gets testCasePolicy
    *  testCasePolicy
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\TestCasePolicy|null
    */
    public function getTestCasePolicy()
    {
        return $this->container['testCasePolicy'];
    }

    /**
    * Sets testCasePolicy
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\TestCasePolicy|null $testCasePolicy testCasePolicy
    *
    * @return $this
    */
    public function setTestCasePolicy($testCasePolicy)
    {
        $this->container['testCasePolicy'] = $testCasePolicy;
        return $this;
    }

    /**
    * Gets wiseEye
    *  wiseEye
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\WiseEye|null
    */
    public function getWiseEye()
    {
        return $this->container['wiseEye'];
    }

    /**
    * Sets wiseEye
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\WiseEye|null $wiseEye wiseEye
    *
    * @return $this
    */
    public function setWiseEye($wiseEye)
    {
        $this->container['wiseEye'] = $wiseEye;
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

