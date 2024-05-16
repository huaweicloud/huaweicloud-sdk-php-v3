<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListHtapFlavorRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListHtapFlavorRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * engineName  HTAP引擎名。 取值范围： - star-rocks - click-house
    * availabilityZoneMode  可用区模式，当前仅支持single。
    * specCode  规格码，提供后仅查询指定规格码规格信息。
    * xLanguage  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    * versionName  数据库版本号，不填默认3.1.6.0。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engineName' => 'string',
            'availabilityZoneMode' => 'string',
            'specCode' => 'string',
            'xLanguage' => 'string',
            'versionName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engineName  HTAP引擎名。 取值范围： - star-rocks - click-house
    * availabilityZoneMode  可用区模式，当前仅支持single。
    * specCode  规格码，提供后仅查询指定规格码规格信息。
    * xLanguage  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    * versionName  数据库版本号，不填默认3.1.6.0。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engineName' => null,
        'availabilityZoneMode' => null,
        'specCode' => null,
        'xLanguage' => null,
        'versionName' => null
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
    * engineName  HTAP引擎名。 取值范围： - star-rocks - click-house
    * availabilityZoneMode  可用区模式，当前仅支持single。
    * specCode  规格码，提供后仅查询指定规格码规格信息。
    * xLanguage  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    * versionName  数据库版本号，不填默认3.1.6.0。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engineName' => 'engine_name',
            'availabilityZoneMode' => 'availability_zone_mode',
            'specCode' => 'spec_code',
            'xLanguage' => 'X-Language',
            'versionName' => 'version_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engineName  HTAP引擎名。 取值范围： - star-rocks - click-house
    * availabilityZoneMode  可用区模式，当前仅支持single。
    * specCode  规格码，提供后仅查询指定规格码规格信息。
    * xLanguage  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    * versionName  数据库版本号，不填默认3.1.6.0。
    *
    * @var string[]
    */
    protected static $setters = [
            'engineName' => 'setEngineName',
            'availabilityZoneMode' => 'setAvailabilityZoneMode',
            'specCode' => 'setSpecCode',
            'xLanguage' => 'setXLanguage',
            'versionName' => 'setVersionName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engineName  HTAP引擎名。 取值范围： - star-rocks - click-house
    * availabilityZoneMode  可用区模式，当前仅支持single。
    * specCode  规格码，提供后仅查询指定规格码规格信息。
    * xLanguage  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    * versionName  数据库版本号，不填默认3.1.6.0。
    *
    * @var string[]
    */
    protected static $getters = [
            'engineName' => 'getEngineName',
            'availabilityZoneMode' => 'getAvailabilityZoneMode',
            'specCode' => 'getSpecCode',
            'xLanguage' => 'getXLanguage',
            'versionName' => 'getVersionName'
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
        $this->container['engineName'] = isset($data['engineName']) ? $data['engineName'] : null;
        $this->container['availabilityZoneMode'] = isset($data['availabilityZoneMode']) ? $data['availabilityZoneMode'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['versionName'] = isset($data['versionName']) ? $data['versionName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['engineName'] === null) {
            $invalidProperties[] = "'engineName' can't be null";
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
    * Gets engineName
    *  HTAP引擎名。 取值范围： - star-rocks - click-house
    *
    * @return string
    */
    public function getEngineName()
    {
        return $this->container['engineName'];
    }

    /**
    * Sets engineName
    *
    * @param string $engineName HTAP引擎名。 取值范围： - star-rocks - click-house
    *
    * @return $this
    */
    public function setEngineName($engineName)
    {
        $this->container['engineName'] = $engineName;
        return $this;
    }

    /**
    * Gets availabilityZoneMode
    *  可用区模式，当前仅支持single。
    *
    * @return string|null
    */
    public function getAvailabilityZoneMode()
    {
        return $this->container['availabilityZoneMode'];
    }

    /**
    * Sets availabilityZoneMode
    *
    * @param string|null $availabilityZoneMode 可用区模式，当前仅支持single。
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
    *  规格码，提供后仅查询指定规格码规格信息。
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
    * @param string|null $specCode 规格码，提供后仅查询指定规格码规格信息。
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
        return $this;
    }

    /**
    * Gets xLanguage
    *  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
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
    * @param string|null $xLanguage 请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets versionName
    *  数据库版本号，不填默认3.1.6.0。
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
    * @param string|null $versionName 数据库版本号，不填默认3.1.6.0。
    *
    * @return $this
    */
    public function setVersionName($versionName)
    {
        $this->container['versionName'] = $versionName;
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

