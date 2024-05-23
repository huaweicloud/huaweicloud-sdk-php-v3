<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HuaweiEiCbs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HuaweiEiCbs';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appId  CBS应用ID。
    * region  CBS所在区域
    * cbsProjectId  CBS所在区域的projectId
    * sisRegion  SIS所在区域
    * sisProjectId  SIS所在区域的projectId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appId' => 'string',
            'region' => 'int',
            'cbsProjectId' => 'string',
            'sisRegion' => 'int',
            'sisProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appId  CBS应用ID。
    * region  CBS所在区域
    * cbsProjectId  CBS所在区域的projectId
    * sisRegion  SIS所在区域
    * sisProjectId  SIS所在区域的projectId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appId' => null,
        'region' => null,
        'cbsProjectId' => null,
        'sisRegion' => null,
        'sisProjectId' => null
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
    * appId  CBS应用ID。
    * region  CBS所在区域
    * cbsProjectId  CBS所在区域的projectId
    * sisRegion  SIS所在区域
    * sisProjectId  SIS所在区域的projectId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appId' => 'app_id',
            'region' => 'region',
            'cbsProjectId' => 'cbs_project_id',
            'sisRegion' => 'sis_region',
            'sisProjectId' => 'sis_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appId  CBS应用ID。
    * region  CBS所在区域
    * cbsProjectId  CBS所在区域的projectId
    * sisRegion  SIS所在区域
    * sisProjectId  SIS所在区域的projectId
    *
    * @var string[]
    */
    protected static $setters = [
            'appId' => 'setAppId',
            'region' => 'setRegion',
            'cbsProjectId' => 'setCbsProjectId',
            'sisRegion' => 'setSisRegion',
            'sisProjectId' => 'setSisProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appId  CBS应用ID。
    * region  CBS所在区域
    * cbsProjectId  CBS所在区域的projectId
    * sisRegion  SIS所在区域
    * sisProjectId  SIS所在区域的projectId
    *
    * @var string[]
    */
    protected static $getters = [
            'appId' => 'getAppId',
            'region' => 'getRegion',
            'cbsProjectId' => 'getCbsProjectId',
            'sisRegion' => 'getSisRegion',
            'sisProjectId' => 'getSisProjectId'
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
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['cbsProjectId'] = isset($data['cbsProjectId']) ? $data['cbsProjectId'] : null;
        $this->container['sisRegion'] = isset($data['sisRegion']) ? $data['sisRegion'] : null;
        $this->container['sisProjectId'] = isset($data['sisProjectId']) ? $data['sisProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) > 64)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) < 1)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['region']) && ($this->container['region'] > 32)) {
                $invalidProperties[] = "invalid value for 'region', must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['region']) && ($this->container['region'] < 0)) {
                $invalidProperties[] = "invalid value for 'region', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cbsProjectId']) && (mb_strlen($this->container['cbsProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'cbsProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cbsProjectId']) && (mb_strlen($this->container['cbsProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'cbsProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sisRegion']) && ($this->container['sisRegion'] > 32)) {
                $invalidProperties[] = "invalid value for 'sisRegion', must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['sisRegion']) && ($this->container['sisRegion'] < 0)) {
                $invalidProperties[] = "invalid value for 'sisRegion', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sisProjectId']) && (mb_strlen($this->container['sisProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'sisProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sisProjectId']) && (mb_strlen($this->container['sisProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'sisProjectId', the character length must be bigger than or equal to 1.";
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
    * Gets appId
    *  CBS应用ID。
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId CBS应用ID。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets region
    *  CBS所在区域
    *
    * @return int|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param int|null $region CBS所在区域
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets cbsProjectId
    *  CBS所在区域的projectId
    *
    * @return string|null
    */
    public function getCbsProjectId()
    {
        return $this->container['cbsProjectId'];
    }

    /**
    * Sets cbsProjectId
    *
    * @param string|null $cbsProjectId CBS所在区域的projectId
    *
    * @return $this
    */
    public function setCbsProjectId($cbsProjectId)
    {
        $this->container['cbsProjectId'] = $cbsProjectId;
        return $this;
    }

    /**
    * Gets sisRegion
    *  SIS所在区域
    *
    * @return int|null
    */
    public function getSisRegion()
    {
        return $this->container['sisRegion'];
    }

    /**
    * Sets sisRegion
    *
    * @param int|null $sisRegion SIS所在区域
    *
    * @return $this
    */
    public function setSisRegion($sisRegion)
    {
        $this->container['sisRegion'] = $sisRegion;
        return $this;
    }

    /**
    * Gets sisProjectId
    *  SIS所在区域的projectId
    *
    * @return string|null
    */
    public function getSisProjectId()
    {
        return $this->container['sisProjectId'];
    }

    /**
    * Sets sisProjectId
    *
    * @param string|null $sisProjectId SIS所在区域的projectId
    *
    * @return $this
    */
    public function setSisProjectId($sisProjectId)
    {
        $this->container['sisProjectId'] = $sisProjectId;
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

