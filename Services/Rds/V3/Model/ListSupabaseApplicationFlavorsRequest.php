<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSupabaseApplicationFlavorsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSupabaseApplicationFlavorsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  xLanguage
    * version  version
    * specCode  specCode
    * azCode  azCode
    * isFree  isFree
    * mode  mode
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'version' => 'string',
            'specCode' => 'string',
            'azCode' => 'string',
            'isFree' => 'bool',
            'mode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  xLanguage
    * version  version
    * specCode  specCode
    * azCode  azCode
    * isFree  isFree
    * mode  mode
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'version' => null,
        'specCode' => null,
        'azCode' => null,
        'isFree' => null,
        'mode' => null
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
    * xLanguage  xLanguage
    * version  version
    * specCode  specCode
    * azCode  azCode
    * isFree  isFree
    * mode  mode
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'version' => 'version',
            'specCode' => 'spec_code',
            'azCode' => 'az_code',
            'isFree' => 'is_free',
            'mode' => 'mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  xLanguage
    * version  version
    * specCode  specCode
    * azCode  azCode
    * isFree  isFree
    * mode  mode
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'version' => 'setVersion',
            'specCode' => 'setSpecCode',
            'azCode' => 'setAzCode',
            'isFree' => 'setIsFree',
            'mode' => 'setMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  xLanguage
    * version  version
    * specCode  specCode
    * azCode  azCode
    * isFree  isFree
    * mode  mode
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'version' => 'getVersion',
            'specCode' => 'getSpecCode',
            'azCode' => 'getAzCode',
            'isFree' => 'getIsFree',
            'mode' => 'getMode'
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
    const X_LANGUAGE_ZH_CN = 'zh-cn';
    const X_LANGUAGE_EN_US = 'en-us';
    const MODE_SINGLE = 'Single';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getXLanguageAllowableValues()
    {
        return [
            self::X_LANGUAGE_ZH_CN,
            self::X_LANGUAGE_EN_US,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_SINGLE,
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['azCode'] = isset($data['azCode']) ? $data['azCode'] : null;
        $this->container['isFree'] = isset($data['isFree']) ? $data['isFree'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getXLanguageAllowableValues();
                if (!is_null($this->container['xLanguage']) && !in_array($this->container['xLanguage'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'xLanguage', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getModeAllowableValues();
                if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'mode', must be one of '%s'",
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
    * Gets xLanguage
    *  xLanguage
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
    * @param string|null $xLanguage xLanguage
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets version
    *  version
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version version
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets specCode
    *  specCode
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
    * @param string|null $specCode specCode
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
        return $this;
    }

    /**
    * Gets azCode
    *  azCode
    *
    * @return string|null
    */
    public function getAzCode()
    {
        return $this->container['azCode'];
    }

    /**
    * Sets azCode
    *
    * @param string|null $azCode azCode
    *
    * @return $this
    */
    public function setAzCode($azCode)
    {
        $this->container['azCode'] = $azCode;
        return $this;
    }

    /**
    * Gets isFree
    *  isFree
    *
    * @return bool|null
    */
    public function getIsFree()
    {
        return $this->container['isFree'];
    }

    /**
    * Sets isFree
    *
    * @param bool|null $isFree isFree
    *
    * @return $this
    */
    public function setIsFree($isFree)
    {
        $this->container['isFree'] = $isFree;
        return $this;
    }

    /**
    * Gets mode
    *  mode
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode mode
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
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

