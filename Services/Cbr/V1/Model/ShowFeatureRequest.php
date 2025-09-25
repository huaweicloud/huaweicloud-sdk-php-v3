<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowFeatureRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowFeatureRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * featureKey  特性key, 当前支持： - replication.enable - replication.source_region - replication.destination_regions - replication.destination_dgw_regions - features.backup_double_az
    * limit  每页显示条目数，正整数
    * offset  偏移值,正整数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'featureKey' => 'string',
            'limit' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * featureKey  特性key, 当前支持： - replication.enable - replication.source_region - replication.destination_regions - replication.destination_dgw_regions - features.backup_double_az
    * limit  每页显示条目数，正整数
    * offset  偏移值,正整数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'featureKey' => null,
        'limit' => 'int32',
        'offset' => 'int32'
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
    * featureKey  特性key, 当前支持： - replication.enable - replication.source_region - replication.destination_regions - replication.destination_dgw_regions - features.backup_double_az
    * limit  每页显示条目数，正整数
    * offset  偏移值,正整数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'featureKey' => 'feature_key',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * featureKey  特性key, 当前支持： - replication.enable - replication.source_region - replication.destination_regions - replication.destination_dgw_regions - features.backup_double_az
    * limit  每页显示条目数，正整数
    * offset  偏移值,正整数
    *
    * @var string[]
    */
    protected static $setters = [
            'featureKey' => 'setFeatureKey',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * featureKey  特性key, 当前支持： - replication.enable - replication.source_region - replication.destination_regions - replication.destination_dgw_regions - features.backup_double_az
    * limit  每页显示条目数，正整数
    * offset  偏移值,正整数
    *
    * @var string[]
    */
    protected static $getters = [
            'featureKey' => 'getFeatureKey',
            'limit' => 'getLimit',
            'offset' => 'getOffset'
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
        $this->container['featureKey'] = isset($data['featureKey']) ? $data['featureKey'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['featureKey'] === null) {
            $invalidProperties[] = "'featureKey' can't be null";
        }
            if ((mb_strlen($this->container['featureKey']) > 255)) {
                $invalidProperties[] = "invalid value for 'featureKey', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['featureKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'featureKey', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 1000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
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
    * Gets featureKey
    *  特性key, 当前支持： - replication.enable - replication.source_region - replication.destination_regions - replication.destination_dgw_regions - features.backup_double_az
    *
    * @return string
    */
    public function getFeatureKey()
    {
        return $this->container['featureKey'];
    }

    /**
    * Sets featureKey
    *
    * @param string $featureKey 特性key, 当前支持： - replication.enable - replication.source_region - replication.destination_regions - replication.destination_dgw_regions - features.backup_double_az
    *
    * @return $this
    */
    public function setFeatureKey($featureKey)
    {
        $this->container['featureKey'] = $featureKey;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示条目数，正整数
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页显示条目数，正整数
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  偏移值,正整数
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移值,正整数
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

