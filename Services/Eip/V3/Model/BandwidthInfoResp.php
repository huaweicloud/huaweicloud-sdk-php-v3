<?php

namespace HuaweiCloud\SDK\Eip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BandwidthInfoResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BandwidthInfoResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bandwidthName  - 功能说明：带宽名称
    * bandwidthNumber  - 功能说明：带宽大小
    * bandwidthType  - 功能说明：带宽类型
    * bandwidthId  - 功能说明：带宽id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bandwidthName' => 'string',
            'bandwidthNumber' => 'int',
            'bandwidthType' => 'string',
            'bandwidthId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bandwidthName  - 功能说明：带宽名称
    * bandwidthNumber  - 功能说明：带宽大小
    * bandwidthType  - 功能说明：带宽类型
    * bandwidthId  - 功能说明：带宽id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bandwidthName' => null,
        'bandwidthNumber' => null,
        'bandwidthType' => null,
        'bandwidthId' => null
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
    * bandwidthName  - 功能说明：带宽名称
    * bandwidthNumber  - 功能说明：带宽大小
    * bandwidthType  - 功能说明：带宽类型
    * bandwidthId  - 功能说明：带宽id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bandwidthName' => 'bandwidth_name',
            'bandwidthNumber' => 'bandwidth_number',
            'bandwidthType' => 'bandwidth_type',
            'bandwidthId' => 'bandwidth_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bandwidthName  - 功能说明：带宽名称
    * bandwidthNumber  - 功能说明：带宽大小
    * bandwidthType  - 功能说明：带宽类型
    * bandwidthId  - 功能说明：带宽id
    *
    * @var string[]
    */
    protected static $setters = [
            'bandwidthName' => 'setBandwidthName',
            'bandwidthNumber' => 'setBandwidthNumber',
            'bandwidthType' => 'setBandwidthType',
            'bandwidthId' => 'setBandwidthId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bandwidthName  - 功能说明：带宽名称
    * bandwidthNumber  - 功能说明：带宽大小
    * bandwidthType  - 功能说明：带宽类型
    * bandwidthId  - 功能说明：带宽id
    *
    * @var string[]
    */
    protected static $getters = [
            'bandwidthName' => 'getBandwidthName',
            'bandwidthNumber' => 'getBandwidthNumber',
            'bandwidthType' => 'getBandwidthType',
            'bandwidthId' => 'getBandwidthId'
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
    const BANDWIDTH_TYPE_PER = 'PER';
    const BANDWIDTH_TYPE_WHOLE = 'WHOLE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBandwidthTypeAllowableValues()
    {
        return [
            self::BANDWIDTH_TYPE_PER,
            self::BANDWIDTH_TYPE_WHOLE,
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
        $this->container['bandwidthName'] = isset($data['bandwidthName']) ? $data['bandwidthName'] : null;
        $this->container['bandwidthNumber'] = isset($data['bandwidthNumber']) ? $data['bandwidthNumber'] : null;
        $this->container['bandwidthType'] = isset($data['bandwidthType']) ? $data['bandwidthType'] : null;
        $this->container['bandwidthId'] = isset($data['bandwidthId']) ? $data['bandwidthId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['bandwidthName']) && (mb_strlen($this->container['bandwidthName']) > 255)) {
                $invalidProperties[] = "invalid value for 'bandwidthName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['bandwidthName']) && (mb_strlen($this->container['bandwidthName']) < 0)) {
                $invalidProperties[] = "invalid value for 'bandwidthName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bandwidthNumber']) && ($this->container['bandwidthNumber'] > 2000)) {
                $invalidProperties[] = "invalid value for 'bandwidthNumber', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['bandwidthNumber']) && ($this->container['bandwidthNumber'] < 0)) {
                $invalidProperties[] = "invalid value for 'bandwidthNumber', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getBandwidthTypeAllowableValues();
                if (!is_null($this->container['bandwidthType']) && !in_array($this->container['bandwidthType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'bandwidthType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['bandwidthType']) && (mb_strlen($this->container['bandwidthType']) > 36)) {
                $invalidProperties[] = "invalid value for 'bandwidthType', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['bandwidthType']) && (mb_strlen($this->container['bandwidthType']) < 0)) {
                $invalidProperties[] = "invalid value for 'bandwidthType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bandwidthId']) && (mb_strlen($this->container['bandwidthId']) > 36)) {
                $invalidProperties[] = "invalid value for 'bandwidthId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['bandwidthId']) && (mb_strlen($this->container['bandwidthId']) < 36)) {
                $invalidProperties[] = "invalid value for 'bandwidthId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['bandwidthId']) && !preg_match("/[A-Za-z0-9]{8}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{12}/", $this->container['bandwidthId'])) {
                $invalidProperties[] = "invalid value for 'bandwidthId', must be conform to the pattern /[A-Za-z0-9]{8}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{12}/.";
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
    * Gets bandwidthName
    *  - 功能说明：带宽名称
    *
    * @return string|null
    */
    public function getBandwidthName()
    {
        return $this->container['bandwidthName'];
    }

    /**
    * Sets bandwidthName
    *
    * @param string|null $bandwidthName - 功能说明：带宽名称
    *
    * @return $this
    */
    public function setBandwidthName($bandwidthName)
    {
        $this->container['bandwidthName'] = $bandwidthName;
        return $this;
    }

    /**
    * Gets bandwidthNumber
    *  - 功能说明：带宽大小
    *
    * @return int|null
    */
    public function getBandwidthNumber()
    {
        return $this->container['bandwidthNumber'];
    }

    /**
    * Sets bandwidthNumber
    *
    * @param int|null $bandwidthNumber - 功能说明：带宽大小
    *
    * @return $this
    */
    public function setBandwidthNumber($bandwidthNumber)
    {
        $this->container['bandwidthNumber'] = $bandwidthNumber;
        return $this;
    }

    /**
    * Gets bandwidthType
    *  - 功能说明：带宽类型
    *
    * @return string|null
    */
    public function getBandwidthType()
    {
        return $this->container['bandwidthType'];
    }

    /**
    * Sets bandwidthType
    *
    * @param string|null $bandwidthType - 功能说明：带宽类型
    *
    * @return $this
    */
    public function setBandwidthType($bandwidthType)
    {
        $this->container['bandwidthType'] = $bandwidthType;
        return $this;
    }

    /**
    * Gets bandwidthId
    *  - 功能说明：带宽id
    *
    * @return string|null
    */
    public function getBandwidthId()
    {
        return $this->container['bandwidthId'];
    }

    /**
    * Sets bandwidthId
    *
    * @param string|null $bandwidthId - 功能说明：带宽id
    *
    * @return $this
    */
    public function setBandwidthId($bandwidthId)
    {
        $this->container['bandwidthId'] = $bandwidthId;
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

