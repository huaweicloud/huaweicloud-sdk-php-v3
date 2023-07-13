<?php

namespace HuaweiCloud\SDK\CloudRTC\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MixJobReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MixJobReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * mixParam  mixParam
    * publishParam  publishParam
    * recordParam  recordParam
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'mixParam' => '\HuaweiCloud\SDK\CloudRTC\V2\Model\MixParam',
            'publishParam' => '\HuaweiCloud\SDK\CloudRTC\V2\Model\PublishParam',
            'recordParam' => '\HuaweiCloud\SDK\CloudRTC\V2\Model\RecordParam'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * mixParam  mixParam
    * publishParam  publishParam
    * recordParam  recordParam
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'mixParam' => null,
        'publishParam' => null,
        'recordParam' => null
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
    * mixParam  mixParam
    * publishParam  publishParam
    * recordParam  recordParam
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'mixParam' => 'mix_param',
            'publishParam' => 'publish_param',
            'recordParam' => 'record_param'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * mixParam  mixParam
    * publishParam  publishParam
    * recordParam  recordParam
    *
    * @var string[]
    */
    protected static $setters = [
            'mixParam' => 'setMixParam',
            'publishParam' => 'setPublishParam',
            'recordParam' => 'setRecordParam'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * mixParam  mixParam
    * publishParam  publishParam
    * recordParam  recordParam
    *
    * @var string[]
    */
    protected static $getters = [
            'mixParam' => 'getMixParam',
            'publishParam' => 'getPublishParam',
            'recordParam' => 'getRecordParam'
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
        $this->container['mixParam'] = isset($data['mixParam']) ? $data['mixParam'] : null;
        $this->container['publishParam'] = isset($data['publishParam']) ? $data['publishParam'] : null;
        $this->container['recordParam'] = isset($data['recordParam']) ? $data['recordParam'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['mixParam'] === null) {
            $invalidProperties[] = "'mixParam' can't be null";
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
    * Gets mixParam
    *  mixParam
    *
    * @return \HuaweiCloud\SDK\CloudRTC\V2\Model\MixParam
    */
    public function getMixParam()
    {
        return $this->container['mixParam'];
    }

    /**
    * Sets mixParam
    *
    * @param \HuaweiCloud\SDK\CloudRTC\V2\Model\MixParam $mixParam mixParam
    *
    * @return $this
    */
    public function setMixParam($mixParam)
    {
        $this->container['mixParam'] = $mixParam;
        return $this;
    }

    /**
    * Gets publishParam
    *  publishParam
    *
    * @return \HuaweiCloud\SDK\CloudRTC\V2\Model\PublishParam|null
    */
    public function getPublishParam()
    {
        return $this->container['publishParam'];
    }

    /**
    * Sets publishParam
    *
    * @param \HuaweiCloud\SDK\CloudRTC\V2\Model\PublishParam|null $publishParam publishParam
    *
    * @return $this
    */
    public function setPublishParam($publishParam)
    {
        $this->container['publishParam'] = $publishParam;
        return $this;
    }

    /**
    * Gets recordParam
    *  recordParam
    *
    * @return \HuaweiCloud\SDK\CloudRTC\V2\Model\RecordParam|null
    */
    public function getRecordParam()
    {
        return $this->container['recordParam'];
    }

    /**
    * Sets recordParam
    *
    * @param \HuaweiCloud\SDK\CloudRTC\V2\Model\RecordParam|null $recordParam recordParam
    *
    * @return $this
    */
    public function setRecordParam($recordParam)
    {
        $this->container['recordParam'] = $recordParam;
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
