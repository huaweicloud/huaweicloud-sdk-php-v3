<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventForensicInfoGeoForensic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventForensicInfo_geo_forensic';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * srcCountry  **参数解释**： 源国家 **取值范围**： 不涉及
    * srcCity  **参数解释**： 源城市 **取值范围**： 不涉及
    * srcLatitude  **参数解释**： 源纬度 **取值范围**： 不涉及
    * srcLongitude  **参数解释**： 源经度 **取值范围**： 不涉及
    * destCountry  **参数解释**： 目的国家 **取值范围**： 不涉及
    * destCity  **参数解释**： 目的城市 **取值范围**： 不涉及
    * destLatitude  **参数解释**： 目的纬度 **取值范围**： 不涉及
    * destLongitude  **参数解释**： 目的经度 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'srcCountry' => 'string',
            'srcCity' => 'string',
            'srcLatitude' => 'int',
            'srcLongitude' => 'int',
            'destCountry' => 'string',
            'destCity' => 'string',
            'destLatitude' => 'int',
            'destLongitude' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * srcCountry  **参数解释**： 源国家 **取值范围**： 不涉及
    * srcCity  **参数解释**： 源城市 **取值范围**： 不涉及
    * srcLatitude  **参数解释**： 源纬度 **取值范围**： 不涉及
    * srcLongitude  **参数解释**： 源经度 **取值范围**： 不涉及
    * destCountry  **参数解释**： 目的国家 **取值范围**： 不涉及
    * destCity  **参数解释**： 目的城市 **取值范围**： 不涉及
    * destLatitude  **参数解释**： 目的纬度 **取值范围**： 不涉及
    * destLongitude  **参数解释**： 目的经度 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'srcCountry' => null,
        'srcCity' => null,
        'srcLatitude' => null,
        'srcLongitude' => null,
        'destCountry' => null,
        'destCity' => null,
        'destLatitude' => null,
        'destLongitude' => null
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
    * srcCountry  **参数解释**： 源国家 **取值范围**： 不涉及
    * srcCity  **参数解释**： 源城市 **取值范围**： 不涉及
    * srcLatitude  **参数解释**： 源纬度 **取值范围**： 不涉及
    * srcLongitude  **参数解释**： 源经度 **取值范围**： 不涉及
    * destCountry  **参数解释**： 目的国家 **取值范围**： 不涉及
    * destCity  **参数解释**： 目的城市 **取值范围**： 不涉及
    * destLatitude  **参数解释**： 目的纬度 **取值范围**： 不涉及
    * destLongitude  **参数解释**： 目的经度 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'srcCountry' => 'src_country',
            'srcCity' => 'src_city',
            'srcLatitude' => 'src_latitude',
            'srcLongitude' => 'src_longitude',
            'destCountry' => 'dest_country',
            'destCity' => 'dest_city',
            'destLatitude' => 'dest_latitude',
            'destLongitude' => 'dest_longitude'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * srcCountry  **参数解释**： 源国家 **取值范围**： 不涉及
    * srcCity  **参数解释**： 源城市 **取值范围**： 不涉及
    * srcLatitude  **参数解释**： 源纬度 **取值范围**： 不涉及
    * srcLongitude  **参数解释**： 源经度 **取值范围**： 不涉及
    * destCountry  **参数解释**： 目的国家 **取值范围**： 不涉及
    * destCity  **参数解释**： 目的城市 **取值范围**： 不涉及
    * destLatitude  **参数解释**： 目的纬度 **取值范围**： 不涉及
    * destLongitude  **参数解释**： 目的经度 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'srcCountry' => 'setSrcCountry',
            'srcCity' => 'setSrcCity',
            'srcLatitude' => 'setSrcLatitude',
            'srcLongitude' => 'setSrcLongitude',
            'destCountry' => 'setDestCountry',
            'destCity' => 'setDestCity',
            'destLatitude' => 'setDestLatitude',
            'destLongitude' => 'setDestLongitude'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * srcCountry  **参数解释**： 源国家 **取值范围**： 不涉及
    * srcCity  **参数解释**： 源城市 **取值范围**： 不涉及
    * srcLatitude  **参数解释**： 源纬度 **取值范围**： 不涉及
    * srcLongitude  **参数解释**： 源经度 **取值范围**： 不涉及
    * destCountry  **参数解释**： 目的国家 **取值范围**： 不涉及
    * destCity  **参数解释**： 目的城市 **取值范围**： 不涉及
    * destLatitude  **参数解释**： 目的纬度 **取值范围**： 不涉及
    * destLongitude  **参数解释**： 目的经度 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'srcCountry' => 'getSrcCountry',
            'srcCity' => 'getSrcCity',
            'srcLatitude' => 'getSrcLatitude',
            'srcLongitude' => 'getSrcLongitude',
            'destCountry' => 'getDestCountry',
            'destCity' => 'getDestCity',
            'destLatitude' => 'getDestLatitude',
            'destLongitude' => 'getDestLongitude'
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
        $this->container['srcCountry'] = isset($data['srcCountry']) ? $data['srcCountry'] : null;
        $this->container['srcCity'] = isset($data['srcCity']) ? $data['srcCity'] : null;
        $this->container['srcLatitude'] = isset($data['srcLatitude']) ? $data['srcLatitude'] : null;
        $this->container['srcLongitude'] = isset($data['srcLongitude']) ? $data['srcLongitude'] : null;
        $this->container['destCountry'] = isset($data['destCountry']) ? $data['destCountry'] : null;
        $this->container['destCity'] = isset($data['destCity']) ? $data['destCity'] : null;
        $this->container['destLatitude'] = isset($data['destLatitude']) ? $data['destLatitude'] : null;
        $this->container['destLongitude'] = isset($data['destLongitude']) ? $data['destLongitude'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['srcCountry']) && !preg_match("/^.*$/", $this->container['srcCountry'])) {
                $invalidProperties[] = "invalid value for 'srcCountry', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['srcCity']) && !preg_match("/^.*$/", $this->container['srcCity'])) {
                $invalidProperties[] = "invalid value for 'srcCity', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['destCountry']) && !preg_match("/^.*$/", $this->container['destCountry'])) {
                $invalidProperties[] = "invalid value for 'destCountry', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['destCity']) && !preg_match("/^.*$/", $this->container['destCity'])) {
                $invalidProperties[] = "invalid value for 'destCity', must be conform to the pattern /^.*$/.";
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
    * Gets srcCountry
    *  **参数解释**： 源国家 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getSrcCountry()
    {
        return $this->container['srcCountry'];
    }

    /**
    * Sets srcCountry
    *
    * @param string|null $srcCountry **参数解释**： 源国家 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSrcCountry($srcCountry)
    {
        $this->container['srcCountry'] = $srcCountry;
        return $this;
    }

    /**
    * Gets srcCity
    *  **参数解释**： 源城市 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getSrcCity()
    {
        return $this->container['srcCity'];
    }

    /**
    * Sets srcCity
    *
    * @param string|null $srcCity **参数解释**： 源城市 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSrcCity($srcCity)
    {
        $this->container['srcCity'] = $srcCity;
        return $this;
    }

    /**
    * Gets srcLatitude
    *  **参数解释**： 源纬度 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getSrcLatitude()
    {
        return $this->container['srcLatitude'];
    }

    /**
    * Sets srcLatitude
    *
    * @param int|null $srcLatitude **参数解释**： 源纬度 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSrcLatitude($srcLatitude)
    {
        $this->container['srcLatitude'] = $srcLatitude;
        return $this;
    }

    /**
    * Gets srcLongitude
    *  **参数解释**： 源经度 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getSrcLongitude()
    {
        return $this->container['srcLongitude'];
    }

    /**
    * Sets srcLongitude
    *
    * @param int|null $srcLongitude **参数解释**： 源经度 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSrcLongitude($srcLongitude)
    {
        $this->container['srcLongitude'] = $srcLongitude;
        return $this;
    }

    /**
    * Gets destCountry
    *  **参数解释**： 目的国家 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getDestCountry()
    {
        return $this->container['destCountry'];
    }

    /**
    * Sets destCountry
    *
    * @param string|null $destCountry **参数解释**： 目的国家 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDestCountry($destCountry)
    {
        $this->container['destCountry'] = $destCountry;
        return $this;
    }

    /**
    * Gets destCity
    *  **参数解释**： 目的城市 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getDestCity()
    {
        return $this->container['destCity'];
    }

    /**
    * Sets destCity
    *
    * @param string|null $destCity **参数解释**： 目的城市 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDestCity($destCity)
    {
        $this->container['destCity'] = $destCity;
        return $this;
    }

    /**
    * Gets destLatitude
    *  **参数解释**： 目的纬度 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getDestLatitude()
    {
        return $this->container['destLatitude'];
    }

    /**
    * Sets destLatitude
    *
    * @param int|null $destLatitude **参数解释**： 目的纬度 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDestLatitude($destLatitude)
    {
        $this->container['destLatitude'] = $destLatitude;
        return $this;
    }

    /**
    * Gets destLongitude
    *  **参数解释**： 目的经度 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getDestLongitude()
    {
        return $this->container['destLongitude'];
    }

    /**
    * Sets destLongitude
    *
    * @param int|null $destLongitude **参数解释**： 目的经度 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDestLongitude($destLongitude)
    {
        $this->container['destLongitude'] = $destLongitude;
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

