<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VolumeForInstanceResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VolumeForInstanceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  磁盘类型。 取值范围如下，区分大小写： - COMMON，表示SATA。 - HIGH，表示SAS。 - ULTRAHIGH，表示SSD。 - ULTRAHIGHPRO，表示SSD尊享版，仅支持超高性能型尊享版。 - CLOUDSSD，表示SSD云盘，仅支持通用型和独享型规格实例。 - LOCALSSD，表示本地SSD。 - ESSD，表示极速型SSD，仅支持独享型规格实例。
    * size  磁盘大小，单位为GB。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'size' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  磁盘类型。 取值范围如下，区分大小写： - COMMON，表示SATA。 - HIGH，表示SAS。 - ULTRAHIGH，表示SSD。 - ULTRAHIGHPRO，表示SSD尊享版，仅支持超高性能型尊享版。 - CLOUDSSD，表示SSD云盘，仅支持通用型和独享型规格实例。 - LOCALSSD，表示本地SSD。 - ESSD，表示极速型SSD，仅支持独享型规格实例。
    * size  磁盘大小，单位为GB。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'size' => null
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
    * type  磁盘类型。 取值范围如下，区分大小写： - COMMON，表示SATA。 - HIGH，表示SAS。 - ULTRAHIGH，表示SSD。 - ULTRAHIGHPRO，表示SSD尊享版，仅支持超高性能型尊享版。 - CLOUDSSD，表示SSD云盘，仅支持通用型和独享型规格实例。 - LOCALSSD，表示本地SSD。 - ESSD，表示极速型SSD，仅支持独享型规格实例。
    * size  磁盘大小，单位为GB。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'size' => 'size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  磁盘类型。 取值范围如下，区分大小写： - COMMON，表示SATA。 - HIGH，表示SAS。 - ULTRAHIGH，表示SSD。 - ULTRAHIGHPRO，表示SSD尊享版，仅支持超高性能型尊享版。 - CLOUDSSD，表示SSD云盘，仅支持通用型和独享型规格实例。 - LOCALSSD，表示本地SSD。 - ESSD，表示极速型SSD，仅支持独享型规格实例。
    * size  磁盘大小，单位为GB。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'size' => 'setSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  磁盘类型。 取值范围如下，区分大小写： - COMMON，表示SATA。 - HIGH，表示SAS。 - ULTRAHIGH，表示SSD。 - ULTRAHIGHPRO，表示SSD尊享版，仅支持超高性能型尊享版。 - CLOUDSSD，表示SSD云盘，仅支持通用型和独享型规格实例。 - LOCALSSD，表示本地SSD。 - ESSD，表示极速型SSD，仅支持独享型规格实例。
    * size  磁盘大小，单位为GB。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'size' => 'getSize'
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
    const TYPE_ULTRAHIGH = 'ULTRAHIGH';
    const TYPE_HIGH = 'HIGH';
    const TYPE_COMMON = 'COMMON';
    const TYPE_NVMESSD = 'NVMESSD';
    const TYPE_ULTRAHIGHPRO = 'ULTRAHIGHPRO';
    const TYPE_CLOUDSSD = 'CLOUDSSD';
    const TYPE_LOCALSSD = 'LOCALSSD';
    const TYPE_ESSD = 'ESSD';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ULTRAHIGH,
            self::TYPE_HIGH,
            self::TYPE_COMMON,
            self::TYPE_NVMESSD,
            self::TYPE_ULTRAHIGHPRO,
            self::TYPE_CLOUDSSD,
            self::TYPE_LOCALSSD,
            self::TYPE_ESSD,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
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
    * Gets type
    *  磁盘类型。 取值范围如下，区分大小写： - COMMON，表示SATA。 - HIGH，表示SAS。 - ULTRAHIGH，表示SSD。 - ULTRAHIGHPRO，表示SSD尊享版，仅支持超高性能型尊享版。 - CLOUDSSD，表示SSD云盘，仅支持通用型和独享型规格实例。 - LOCALSSD，表示本地SSD。 - ESSD，表示极速型SSD，仅支持独享型规格实例。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 磁盘类型。 取值范围如下，区分大小写： - COMMON，表示SATA。 - HIGH，表示SAS。 - ULTRAHIGH，表示SSD。 - ULTRAHIGHPRO，表示SSD尊享版，仅支持超高性能型尊享版。 - CLOUDSSD，表示SSD云盘，仅支持通用型和独享型规格实例。 - LOCALSSD，表示本地SSD。 - ESSD，表示极速型SSD，仅支持独享型规格实例。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets size
    *  磁盘大小，单位为GB。
    *
    * @return int
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int $size 磁盘大小，单位为GB。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
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

