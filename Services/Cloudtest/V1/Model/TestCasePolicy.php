<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TestCasePolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TestCasePolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * failedTimes  单用例失败多少次告警
    * retryTimes  单用例重试多少次后告警
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'failedTimes' => 'int',
            'retryTimes' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * failedTimes  单用例失败多少次告警
    * retryTimes  单用例重试多少次后告警
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'failedTimes' => 'int32',
        'retryTimes' => 'int32'
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
    * failedTimes  单用例失败多少次告警
    * retryTimes  单用例重试多少次后告警
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'failedTimes' => 'failed_times',
            'retryTimes' => 'retryTimes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * failedTimes  单用例失败多少次告警
    * retryTimes  单用例重试多少次后告警
    *
    * @var string[]
    */
    protected static $setters = [
            'failedTimes' => 'setFailedTimes',
            'retryTimes' => 'setRetryTimes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * failedTimes  单用例失败多少次告警
    * retryTimes  单用例重试多少次后告警
    *
    * @var string[]
    */
    protected static $getters = [
            'failedTimes' => 'getFailedTimes',
            'retryTimes' => 'getRetryTimes'
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
        $this->container['retryTimes'] = isset($data['retryTimes']) ? $data['retryTimes'] : null;
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
    *  单用例失败多少次告警
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
    * @param int|null $failedTimes 单用例失败多少次告警
    *
    * @return $this
    */
    public function setFailedTimes($failedTimes)
    {
        $this->container['failedTimes'] = $failedTimes;
        return $this;
    }

    /**
    * Gets retryTimes
    *  单用例重试多少次后告警
    *
    * @return int|null
    */
    public function getRetryTimes()
    {
        return $this->container['retryTimes'];
    }

    /**
    * Sets retryTimes
    *
    * @param int|null $retryTimes 单用例重试多少次后告警
    *
    * @return $this
    */
    public function setRetryTimes($retryTimes)
    {
        $this->container['retryTimes'] = $retryTimes;
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

