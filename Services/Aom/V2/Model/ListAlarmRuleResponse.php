<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAlarmRuleResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAlarmRuleResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * metaData  metaData
    * thresholds  thresholds
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'metaData' => '\HuaweiCloud\SDK\Aom\V2\Model\MetaData',
            'thresholds' => '\HuaweiCloud\SDK\Aom\V2\Model\QueryAlarmResult[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * metaData  metaData
    * thresholds  thresholds
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'metaData' => null,
        'thresholds' => null
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
    * metaData  metaData
    * thresholds  thresholds
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'metaData' => 'meta_data',
            'thresholds' => 'thresholds'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * metaData  metaData
    * thresholds  thresholds
    *
    * @var string[]
    */
    protected static $setters = [
            'metaData' => 'setMetaData',
            'thresholds' => 'setThresholds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * metaData  metaData
    * thresholds  thresholds
    *
    * @var string[]
    */
    protected static $getters = [
            'metaData' => 'getMetaData',
            'thresholds' => 'getThresholds'
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
        $this->container['metaData'] = isset($data['metaData']) ? $data['metaData'] : null;
        $this->container['thresholds'] = isset($data['thresholds']) ? $data['thresholds'] : null;
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
    * Gets metaData
    *  metaData
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\MetaData|null
    */
    public function getMetaData()
    {
        return $this->container['metaData'];
    }

    /**
    * Sets metaData
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\MetaData|null $metaData metaData
    *
    * @return $this
    */
    public function setMetaData($metaData)
    {
        $this->container['metaData'] = $metaData;
        return $this;
    }

    /**
    * Gets thresholds
    *  thresholds
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\QueryAlarmResult[]|null
    */
    public function getThresholds()
    {
        return $this->container['thresholds'];
    }

    /**
    * Sets thresholds
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\QueryAlarmResult[]|null $thresholds thresholds
    *
    * @return $this
    */
    public function setThresholds($thresholds)
    {
        $this->container['thresholds'] = $thresholds;
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

