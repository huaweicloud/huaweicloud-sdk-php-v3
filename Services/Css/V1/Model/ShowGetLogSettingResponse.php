<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowGetLogSettingResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowGetLogSettingResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logConfiguration  logConfiguration
    * realTimeLogCollectRecord  realTimeLogCollectRecord
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logConfiguration' => '\HuaweiCloud\SDK\Css\V1\Model\LogConfiguration',
            'realTimeLogCollectRecord' => '\HuaweiCloud\SDK\Css\V1\Model\RealTimeLogCollect'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logConfiguration  logConfiguration
    * realTimeLogCollectRecord  realTimeLogCollectRecord
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logConfiguration' => null,
        'realTimeLogCollectRecord' => null
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
    * logConfiguration  logConfiguration
    * realTimeLogCollectRecord  realTimeLogCollectRecord
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logConfiguration' => 'logConfiguration',
            'realTimeLogCollectRecord' => 'realTimeLogCollectRecord'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logConfiguration  logConfiguration
    * realTimeLogCollectRecord  realTimeLogCollectRecord
    *
    * @var string[]
    */
    protected static $setters = [
            'logConfiguration' => 'setLogConfiguration',
            'realTimeLogCollectRecord' => 'setRealTimeLogCollectRecord'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logConfiguration  logConfiguration
    * realTimeLogCollectRecord  realTimeLogCollectRecord
    *
    * @var string[]
    */
    protected static $getters = [
            'logConfiguration' => 'getLogConfiguration',
            'realTimeLogCollectRecord' => 'getRealTimeLogCollectRecord'
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
        $this->container['logConfiguration'] = isset($data['logConfiguration']) ? $data['logConfiguration'] : null;
        $this->container['realTimeLogCollectRecord'] = isset($data['realTimeLogCollectRecord']) ? $data['realTimeLogCollectRecord'] : null;
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
    * Gets logConfiguration
    *  logConfiguration
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\LogConfiguration|null
    */
    public function getLogConfiguration()
    {
        return $this->container['logConfiguration'];
    }

    /**
    * Sets logConfiguration
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\LogConfiguration|null $logConfiguration logConfiguration
    *
    * @return $this
    */
    public function setLogConfiguration($logConfiguration)
    {
        $this->container['logConfiguration'] = $logConfiguration;
        return $this;
    }

    /**
    * Gets realTimeLogCollectRecord
    *  realTimeLogCollectRecord
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\RealTimeLogCollect|null
    */
    public function getRealTimeLogCollectRecord()
    {
        return $this->container['realTimeLogCollectRecord'];
    }

    /**
    * Sets realTimeLogCollectRecord
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\RealTimeLogCollect|null $realTimeLogCollectRecord realTimeLogCollectRecord
    *
    * @return $this
    */
    public function setRealTimeLogCollectRecord($realTimeLogCollectRecord)
    {
        $this->container['realTimeLogCollectRecord'] = $realTimeLogCollectRecord;
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

