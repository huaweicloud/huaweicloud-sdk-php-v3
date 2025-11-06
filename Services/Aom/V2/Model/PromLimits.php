<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PromLimits implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PromLimits';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * compactorBlocksRetentionPeriod  指标存储时长，只支持 15天，30天，60天 ，90天
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'compactorBlocksRetentionPeriod' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * compactorBlocksRetentionPeriod  指标存储时长，只支持 15天，30天，60天 ，90天
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'compactorBlocksRetentionPeriod' => null
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
    * compactorBlocksRetentionPeriod  指标存储时长，只支持 15天，30天，60天 ，90天
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'compactorBlocksRetentionPeriod' => 'compactor_blocks_retention_period'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * compactorBlocksRetentionPeriod  指标存储时长，只支持 15天，30天，60天 ，90天
    *
    * @var string[]
    */
    protected static $setters = [
            'compactorBlocksRetentionPeriod' => 'setCompactorBlocksRetentionPeriod'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * compactorBlocksRetentionPeriod  指标存储时长，只支持 15天，30天，60天 ，90天
    *
    * @var string[]
    */
    protected static $getters = [
            'compactorBlocksRetentionPeriod' => 'getCompactorBlocksRetentionPeriod'
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
    const COMPACTOR_BLOCKS_RETENTION_PERIOD__360H = '\"360h\"';
    const COMPACTOR_BLOCKS_RETENTION_PERIOD__720H = '\"720h\"';
    const COMPACTOR_BLOCKS_RETENTION_PERIOD__1440H = '\"1440h\"';
    const COMPACTOR_BLOCKS_RETENTION_PERIOD__2160H = '\"2160h\"';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCompactorBlocksRetentionPeriodAllowableValues()
    {
        return [
            self::COMPACTOR_BLOCKS_RETENTION_PERIOD__360H,
            self::COMPACTOR_BLOCKS_RETENTION_PERIOD__720H,
            self::COMPACTOR_BLOCKS_RETENTION_PERIOD__1440H,
            self::COMPACTOR_BLOCKS_RETENTION_PERIOD__2160H,
        ];
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
        $this->container['compactorBlocksRetentionPeriod'] = isset($data['compactorBlocksRetentionPeriod']) ? $data['compactorBlocksRetentionPeriod'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['compactorBlocksRetentionPeriod'] === null) {
            $invalidProperties[] = "'compactorBlocksRetentionPeriod' can't be null";
        }
            $allowedValues = $this->getCompactorBlocksRetentionPeriodAllowableValues();
                if (!is_null($this->container['compactorBlocksRetentionPeriod']) && !in_array($this->container['compactorBlocksRetentionPeriod'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'compactorBlocksRetentionPeriod', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets compactorBlocksRetentionPeriod
    *  指标存储时长，只支持 15天，30天，60天 ，90天
    *
    * @return string
    */
    public function getCompactorBlocksRetentionPeriod()
    {
        return $this->container['compactorBlocksRetentionPeriod'];
    }

    /**
    * Sets compactorBlocksRetentionPeriod
    *
    * @param string $compactorBlocksRetentionPeriod 指标存储时长，只支持 15天，30天，60天 ，90天
    *
    * @return $this
    */
    public function setCompactorBlocksRetentionPeriod($compactorBlocksRetentionPeriod)
    {
        $this->container['compactorBlocksRetentionPeriod'] = $compactorBlocksRetentionPeriod;
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

