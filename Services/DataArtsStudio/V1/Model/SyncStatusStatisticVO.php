<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SyncStatusStatisticVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SyncStatusStatisticVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * success  成功数，填写String类型替代Long类型。
    * failed  失败数，填写String类型替代Long类型。
    * running  同步中，填写String类型替代Long类型。
    * other  未同步数，填写String类型替代Long类型。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'success' => 'string',
            'failed' => 'string',
            'running' => 'string',
            'other' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * success  成功数，填写String类型替代Long类型。
    * failed  失败数，填写String类型替代Long类型。
    * running  同步中，填写String类型替代Long类型。
    * other  未同步数，填写String类型替代Long类型。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'success' => null,
        'failed' => null,
        'running' => null,
        'other' => null
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
    * success  成功数，填写String类型替代Long类型。
    * failed  失败数，填写String类型替代Long类型。
    * running  同步中，填写String类型替代Long类型。
    * other  未同步数，填写String类型替代Long类型。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'success' => 'success',
            'failed' => 'failed',
            'running' => 'running',
            'other' => 'other'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * success  成功数，填写String类型替代Long类型。
    * failed  失败数，填写String类型替代Long类型。
    * running  同步中，填写String类型替代Long类型。
    * other  未同步数，填写String类型替代Long类型。
    *
    * @var string[]
    */
    protected static $setters = [
            'success' => 'setSuccess',
            'failed' => 'setFailed',
            'running' => 'setRunning',
            'other' => 'setOther'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * success  成功数，填写String类型替代Long类型。
    * failed  失败数，填写String类型替代Long类型。
    * running  同步中，填写String类型替代Long类型。
    * other  未同步数，填写String类型替代Long类型。
    *
    * @var string[]
    */
    protected static $getters = [
            'success' => 'getSuccess',
            'failed' => 'getFailed',
            'running' => 'getRunning',
            'other' => 'getOther'
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
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['failed'] = isset($data['failed']) ? $data['failed'] : null;
        $this->container['running'] = isset($data['running']) ? $data['running'] : null;
        $this->container['other'] = isset($data['other']) ? $data['other'] : null;
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
    * Gets success
    *  成功数，填写String类型替代Long类型。
    *
    * @return string|null
    */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
    * Sets success
    *
    * @param string|null $success 成功数，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;
        return $this;
    }

    /**
    * Gets failed
    *  失败数，填写String类型替代Long类型。
    *
    * @return string|null
    */
    public function getFailed()
    {
        return $this->container['failed'];
    }

    /**
    * Sets failed
    *
    * @param string|null $failed 失败数，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setFailed($failed)
    {
        $this->container['failed'] = $failed;
        return $this;
    }

    /**
    * Gets running
    *  同步中，填写String类型替代Long类型。
    *
    * @return string|null
    */
    public function getRunning()
    {
        return $this->container['running'];
    }

    /**
    * Sets running
    *
    * @param string|null $running 同步中，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setRunning($running)
    {
        $this->container['running'] = $running;
        return $this;
    }

    /**
    * Gets other
    *  未同步数，填写String类型替代Long类型。
    *
    * @return string|null
    */
    public function getOther()
    {
        return $this->container['other'];
    }

    /**
    * Sets other
    *
    * @param string|null $other 未同步数，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setOther($other)
    {
        $this->container['other'] = $other;
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

