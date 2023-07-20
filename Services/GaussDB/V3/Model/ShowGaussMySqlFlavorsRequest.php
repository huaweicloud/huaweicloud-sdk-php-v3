<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowGaussMySqlFlavorsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowGaussMySqlFlavorsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  语言。
    * databaseName  数据库引擎名称。
    * versionName  数据库版本号，目前仅支持兼容MySQL 8.0。
    * availabilityZoneMode  规格的可用区模式，现在仅支持\"single\"、\"multi\"，不区分大小写。
    * specCode  规格编码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'databaseName' => 'string',
            'versionName' => 'string',
            'availabilityZoneMode' => 'string',
            'specCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  语言。
    * databaseName  数据库引擎名称。
    * versionName  数据库版本号，目前仅支持兼容MySQL 8.0。
    * availabilityZoneMode  规格的可用区模式，现在仅支持\"single\"、\"multi\"，不区分大小写。
    * specCode  规格编码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'databaseName' => null,
        'versionName' => null,
        'availabilityZoneMode' => null,
        'specCode' => null
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
    * xLanguage  语言。
    * databaseName  数据库引擎名称。
    * versionName  数据库版本号，目前仅支持兼容MySQL 8.0。
    * availabilityZoneMode  规格的可用区模式，现在仅支持\"single\"、\"multi\"，不区分大小写。
    * specCode  规格编码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'databaseName' => 'database_name',
            'versionName' => 'version_name',
            'availabilityZoneMode' => 'availability_zone_mode',
            'specCode' => 'spec_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  语言。
    * databaseName  数据库引擎名称。
    * versionName  数据库版本号，目前仅支持兼容MySQL 8.0。
    * availabilityZoneMode  规格的可用区模式，现在仅支持\"single\"、\"multi\"，不区分大小写。
    * specCode  规格编码。
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'databaseName' => 'setDatabaseName',
            'versionName' => 'setVersionName',
            'availabilityZoneMode' => 'setAvailabilityZoneMode',
            'specCode' => 'setSpecCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  语言。
    * databaseName  数据库引擎名称。
    * versionName  数据库版本号，目前仅支持兼容MySQL 8.0。
    * availabilityZoneMode  规格的可用区模式，现在仅支持\"single\"、\"multi\"，不区分大小写。
    * specCode  规格编码。
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'databaseName' => 'getDatabaseName',
            'versionName' => 'getVersionName',
            'availabilityZoneMode' => 'getAvailabilityZoneMode',
            'specCode' => 'getSpecCode'
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['versionName'] = isset($data['versionName']) ? $data['versionName'] : null;
        $this->container['availabilityZoneMode'] = isset($data['availabilityZoneMode']) ? $data['availabilityZoneMode'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['databaseName'] === null) {
            $invalidProperties[] = "'databaseName' can't be null";
        }
        if ($this->container['availabilityZoneMode'] === null) {
            $invalidProperties[] = "'availabilityZoneMode' can't be null";
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
    * Gets xLanguage
    *  语言。
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage 语言。
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets databaseName
    *  数据库引擎名称。
    *
    * @return string
    */
    public function getDatabaseName()
    {
        return $this->container['databaseName'];
    }

    /**
    * Sets databaseName
    *
    * @param string $databaseName 数据库引擎名称。
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets versionName
    *  数据库版本号，目前仅支持兼容MySQL 8.0。
    *
    * @return string|null
    */
    public function getVersionName()
    {
        return $this->container['versionName'];
    }

    /**
    * Sets versionName
    *
    * @param string|null $versionName 数据库版本号，目前仅支持兼容MySQL 8.0。
    *
    * @return $this
    */
    public function setVersionName($versionName)
    {
        $this->container['versionName'] = $versionName;
        return $this;
    }

    /**
    * Gets availabilityZoneMode
    *  规格的可用区模式，现在仅支持\"single\"、\"multi\"，不区分大小写。
    *
    * @return string
    */
    public function getAvailabilityZoneMode()
    {
        return $this->container['availabilityZoneMode'];
    }

    /**
    * Sets availabilityZoneMode
    *
    * @param string $availabilityZoneMode 规格的可用区模式，现在仅支持\"single\"、\"multi\"，不区分大小写。
    *
    * @return $this
    */
    public function setAvailabilityZoneMode($availabilityZoneMode)
    {
        $this->container['availabilityZoneMode'] = $availabilityZoneMode;
        return $this;
    }

    /**
    * Gets specCode
    *  规格编码。
    *
    * @return string|null
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string|null $specCode 规格编码。
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
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

