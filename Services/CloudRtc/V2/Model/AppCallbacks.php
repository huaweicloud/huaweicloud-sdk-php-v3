<?php

namespace HuaweiCloud\SDK\CloudRTC\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppCallbacks implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppCallbacks';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pushCallback  pushCallback
    * recordCallback  recordCallback
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pushCallback' => '\HuaweiCloud\SDK\CloudRTC\V2\Model\AppCallbackUrl',
            'recordCallback' => '\HuaweiCloud\SDK\CloudRTC\V2\Model\AppCallbackUrl'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pushCallback  pushCallback
    * recordCallback  recordCallback
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pushCallback' => null,
        'recordCallback' => null
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
    * pushCallback  pushCallback
    * recordCallback  recordCallback
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pushCallback' => 'push_callback',
            'recordCallback' => 'record_callback'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pushCallback  pushCallback
    * recordCallback  recordCallback
    *
    * @var string[]
    */
    protected static $setters = [
            'pushCallback' => 'setPushCallback',
            'recordCallback' => 'setRecordCallback'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pushCallback  pushCallback
    * recordCallback  recordCallback
    *
    * @var string[]
    */
    protected static $getters = [
            'pushCallback' => 'getPushCallback',
            'recordCallback' => 'getRecordCallback'
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
        $this->container['pushCallback'] = isset($data['pushCallback']) ? $data['pushCallback'] : null;
        $this->container['recordCallback'] = isset($data['recordCallback']) ? $data['recordCallback'] : null;
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
    * Gets pushCallback
    *  pushCallback
    *
    * @return \HuaweiCloud\SDK\CloudRTC\V2\Model\AppCallbackUrl|null
    */
    public function getPushCallback()
    {
        return $this->container['pushCallback'];
    }

    /**
    * Sets pushCallback
    *
    * @param \HuaweiCloud\SDK\CloudRTC\V2\Model\AppCallbackUrl|null $pushCallback pushCallback
    *
    * @return $this
    */
    public function setPushCallback($pushCallback)
    {
        $this->container['pushCallback'] = $pushCallback;
        return $this;
    }

    /**
    * Gets recordCallback
    *  recordCallback
    *
    * @return \HuaweiCloud\SDK\CloudRTC\V2\Model\AppCallbackUrl|null
    */
    public function getRecordCallback()
    {
        return $this->container['recordCallback'];
    }

    /**
    * Sets recordCallback
    *
    * @param \HuaweiCloud\SDK\CloudRTC\V2\Model\AppCallbackUrl|null $recordCallback recordCallback
    *
    * @return $this
    */
    public function setRecordCallback($recordCallback)
    {
        $this->container['recordCallback'] = $recordCallback;
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

