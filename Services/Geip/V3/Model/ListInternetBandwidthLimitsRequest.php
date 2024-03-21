<?php

namespace HuaweiCloud\SDK\Geip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInternetBandwidthLimitsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInternetBandwidthLimitsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fields  fields
    * sortKey  按照sort_key指定的字段排序
    * sortDir  排序的方向，倒序或者正序
    * chargeMode  chargeMode
    * type  type
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fields' => 'string[]',
            'sortKey' => 'string[]',
            'sortDir' => 'string[]',
            'chargeMode' => 'string[]',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fields  fields
    * sortKey  按照sort_key指定的字段排序
    * sortDir  排序的方向，倒序或者正序
    * chargeMode  chargeMode
    * type  type
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fields' => null,
        'sortKey' => null,
        'sortDir' => null,
        'chargeMode' => null,
        'type' => null
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
    * fields  fields
    * sortKey  按照sort_key指定的字段排序
    * sortDir  排序的方向，倒序或者正序
    * chargeMode  chargeMode
    * type  type
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fields' => 'fields',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'chargeMode' => 'charge_mode',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fields  fields
    * sortKey  按照sort_key指定的字段排序
    * sortDir  排序的方向，倒序或者正序
    * chargeMode  chargeMode
    * type  type
    *
    * @var string[]
    */
    protected static $setters = [
            'fields' => 'setFields',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'chargeMode' => 'setChargeMode',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fields  fields
    * sortKey  按照sort_key指定的字段排序
    * sortDir  排序的方向，倒序或者正序
    * chargeMode  chargeMode
    * type  type
    *
    * @var string[]
    */
    protected static $getters = [
            'fields' => 'getFields',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'chargeMode' => 'getChargeMode',
            'type' => 'getType'
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
    const FIELDS_ID = 'id';
    const FIELDS_CHARGE_MODE = 'charge_mode';
    const FIELDS_MIN_SIZE = 'min_size';
    const FIELDS_EXT_LIMIT = 'ext_limit';
    const FIELDS_MAX_SIZE = 'max_size';
    const SORT_KEY_ID = 'id';
    const SORT_DIR_ASC = 'asc';
    const SORT_DIR_DESC = 'desc';
    const CHARGE_MODE_BANDWIDTH = 'bandwidth';
    const CHARGE_MODE__95PEAK_BIDIRECTION = '95peak_bidirection';
    const CHARGE_MODE__95PEAK_PLUS_1000 = '95peak_plus_1000';
    const CHARGE_MODE__95PEAK_GUAR = '95peak_guar';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFieldsAllowableValues()
    {
        return [
            self::FIELDS_ID,
            self::FIELDS_CHARGE_MODE,
            self::FIELDS_MIN_SIZE,
            self::FIELDS_EXT_LIMIT,
            self::FIELDS_MAX_SIZE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortKeyAllowableValues()
    {
        return [
            self::SORT_KEY_ID,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortDirAllowableValues()
    {
        return [
            self::SORT_DIR_ASC,
            self::SORT_DIR_DESC,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargeModeAllowableValues()
    {
        return [
            self::CHARGE_MODE_BANDWIDTH,
            self::CHARGE_MODE__95PEAK_BIDIRECTION,
            self::CHARGE_MODE__95PEAK_PLUS_1000,
            self::CHARGE_MODE__95PEAK_GUAR,
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
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
    * Gets fields
    *  fields
    *
    * @return string[]|null
    */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
    * Sets fields
    *
    * @param string[]|null $fields fields
    *
    * @return $this
    */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;
        return $this;
    }

    /**
    * Gets sortKey
    *  按照sort_key指定的字段排序
    *
    * @return string[]|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string[]|null $sortKey 按照sort_key指定的字段排序
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  排序的方向，倒序或者正序
    *
    * @return string[]|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string[]|null $sortDir 排序的方向，倒序或者正序
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets chargeMode
    *  chargeMode
    *
    * @return string[]|null
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param string[]|null $chargeMode chargeMode
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets type
    *  type
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type type
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

