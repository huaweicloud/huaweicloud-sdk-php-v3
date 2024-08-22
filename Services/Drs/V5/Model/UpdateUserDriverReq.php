<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateUserDriverReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateUserDriverReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * driverName  JDBC驱动文件名称，name的长度5-64，结尾以.jar结尾。
    * driverType  指定待同步的驱动文件类型。取值范围： - db2：DB2 for LUW - informix：Informix
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'driverName' => 'string',
            'driverType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * driverName  JDBC驱动文件名称，name的长度5-64，结尾以.jar结尾。
    * driverType  指定待同步的驱动文件类型。取值范围： - db2：DB2 for LUW - informix：Informix
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'driverName' => null,
        'driverType' => null
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
    * driverName  JDBC驱动文件名称，name的长度5-64，结尾以.jar结尾。
    * driverType  指定待同步的驱动文件类型。取值范围： - db2：DB2 for LUW - informix：Informix
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'driverName' => 'driver_name',
            'driverType' => 'driver_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * driverName  JDBC驱动文件名称，name的长度5-64，结尾以.jar结尾。
    * driverType  指定待同步的驱动文件类型。取值范围： - db2：DB2 for LUW - informix：Informix
    *
    * @var string[]
    */
    protected static $setters = [
            'driverName' => 'setDriverName',
            'driverType' => 'setDriverType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * driverName  JDBC驱动文件名称，name的长度5-64，结尾以.jar结尾。
    * driverType  指定待同步的驱动文件类型。取值范围： - db2：DB2 for LUW - informix：Informix
    *
    * @var string[]
    */
    protected static $getters = [
            'driverName' => 'getDriverName',
            'driverType' => 'getDriverType'
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
    const DRIVER_TYPE_DB2 = 'db2';
    const DRIVER_TYPE_INFORMIX = 'informix';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDriverTypeAllowableValues()
    {
        return [
            self::DRIVER_TYPE_DB2,
            self::DRIVER_TYPE_INFORMIX,
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
        $this->container['driverName'] = isset($data['driverName']) ? $data['driverName'] : null;
        $this->container['driverType'] = isset($data['driverType']) ? $data['driverType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['driverName'] === null) {
            $invalidProperties[] = "'driverName' can't be null";
        }
        if ($this->container['driverType'] === null) {
            $invalidProperties[] = "'driverType' can't be null";
        }
            $allowedValues = $this->getDriverTypeAllowableValues();
                if (!is_null($this->container['driverType']) && !in_array($this->container['driverType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'driverType', must be one of '%s'",
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
    * Gets driverName
    *  JDBC驱动文件名称，name的长度5-64，结尾以.jar结尾。
    *
    * @return string
    */
    public function getDriverName()
    {
        return $this->container['driverName'];
    }

    /**
    * Sets driverName
    *
    * @param string $driverName JDBC驱动文件名称，name的长度5-64，结尾以.jar结尾。
    *
    * @return $this
    */
    public function setDriverName($driverName)
    {
        $this->container['driverName'] = $driverName;
        return $this;
    }

    /**
    * Gets driverType
    *  指定待同步的驱动文件类型。取值范围： - db2：DB2 for LUW - informix：Informix
    *
    * @return string
    */
    public function getDriverType()
    {
        return $this->container['driverType'];
    }

    /**
    * Sets driverType
    *
    * @param string $driverType 指定待同步的驱动文件类型。取值范围： - db2：DB2 for LUW - informix：Informix
    *
    * @return $this
    */
    public function setDriverType($driverType)
    {
        $this->container['driverType'] = $driverType;
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

