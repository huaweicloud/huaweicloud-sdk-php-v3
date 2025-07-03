<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CollectorConfigModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CollectorConfigModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lineViewConfig  lineViewConfig
    * detailViewConfig  detailViewConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lineViewConfig' => '\HuaweiCloud\SDK\Apm\V1\Model\LineViewConfigModel',
            'detailViewConfig' => '\HuaweiCloud\SDK\Apm\V1\Model\DetailViewConfigModel'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lineViewConfig  lineViewConfig
    * detailViewConfig  detailViewConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lineViewConfig' => null,
        'detailViewConfig' => null
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
    * lineViewConfig  lineViewConfig
    * detailViewConfig  detailViewConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lineViewConfig' => 'line_view_config',
            'detailViewConfig' => 'detail_view_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lineViewConfig  lineViewConfig
    * detailViewConfig  detailViewConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'lineViewConfig' => 'setLineViewConfig',
            'detailViewConfig' => 'setDetailViewConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lineViewConfig  lineViewConfig
    * detailViewConfig  detailViewConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'lineViewConfig' => 'getLineViewConfig',
            'detailViewConfig' => 'getDetailViewConfig'
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
        $this->container['lineViewConfig'] = isset($data['lineViewConfig']) ? $data['lineViewConfig'] : null;
        $this->container['detailViewConfig'] = isset($data['detailViewConfig']) ? $data['detailViewConfig'] : null;
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
    * Gets lineViewConfig
    *  lineViewConfig
    *
    * @return \HuaweiCloud\SDK\Apm\V1\Model\LineViewConfigModel|null
    */
    public function getLineViewConfig()
    {
        return $this->container['lineViewConfig'];
    }

    /**
    * Sets lineViewConfig
    *
    * @param \HuaweiCloud\SDK\Apm\V1\Model\LineViewConfigModel|null $lineViewConfig lineViewConfig
    *
    * @return $this
    */
    public function setLineViewConfig($lineViewConfig)
    {
        $this->container['lineViewConfig'] = $lineViewConfig;
        return $this;
    }

    /**
    * Gets detailViewConfig
    *  detailViewConfig
    *
    * @return \HuaweiCloud\SDK\Apm\V1\Model\DetailViewConfigModel|null
    */
    public function getDetailViewConfig()
    {
        return $this->container['detailViewConfig'];
    }

    /**
    * Sets detailViewConfig
    *
    * @param \HuaweiCloud\SDK\Apm\V1\Model\DetailViewConfigModel|null $detailViewConfig detailViewConfig
    *
    * @return $this
    */
    public function setDetailViewConfig($detailViewConfig)
    {
        $this->container['detailViewConfig'] = $detailViewConfig;
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

