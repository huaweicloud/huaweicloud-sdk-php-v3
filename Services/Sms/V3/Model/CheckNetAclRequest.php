<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckNetAclRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckNetAclRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tProjectId  目的虚拟机所属project_id
    * tNetworkId  目的端子网ID
    * regionId  区域ID
    * osType  操作系统类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tProjectId' => 'string',
            'tNetworkId' => 'string',
            'regionId' => 'string',
            'osType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tProjectId  目的虚拟机所属project_id
    * tNetworkId  目的端子网ID
    * regionId  区域ID
    * osType  操作系统类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tProjectId' => null,
        'tNetworkId' => null,
        'regionId' => null,
        'osType' => null
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
    * tProjectId  目的虚拟机所属project_id
    * tNetworkId  目的端子网ID
    * regionId  区域ID
    * osType  操作系统类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tProjectId' => 't_project_id',
            'tNetworkId' => 't_network_id',
            'regionId' => 'region_id',
            'osType' => 'os_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tProjectId  目的虚拟机所属project_id
    * tNetworkId  目的端子网ID
    * regionId  区域ID
    * osType  操作系统类型
    *
    * @var string[]
    */
    protected static $setters = [
            'tProjectId' => 'setTProjectId',
            'tNetworkId' => 'setTNetworkId',
            'regionId' => 'setRegionId',
            'osType' => 'setOsType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tProjectId  目的虚拟机所属project_id
    * tNetworkId  目的端子网ID
    * regionId  区域ID
    * osType  操作系统类型
    *
    * @var string[]
    */
    protected static $getters = [
            'tProjectId' => 'getTProjectId',
            'tNetworkId' => 'getTNetworkId',
            'regionId' => 'getRegionId',
            'osType' => 'getOsType'
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
        $this->container['tProjectId'] = isset($data['tProjectId']) ? $data['tProjectId'] : null;
        $this->container['tNetworkId'] = isset($data['tNetworkId']) ? $data['tNetworkId'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['tProjectId'] === null) {
            $invalidProperties[] = "'tProjectId' can't be null";
        }
            if ((mb_strlen($this->container['tProjectId']) > 255)) {
                $invalidProperties[] = "invalid value for 'tProjectId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['tProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'tProjectId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['tNetworkId'] === null) {
            $invalidProperties[] = "'tNetworkId' can't be null";
        }
            if ((mb_strlen($this->container['tNetworkId']) > 255)) {
                $invalidProperties[] = "invalid value for 'tNetworkId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['tNetworkId']) < 0)) {
                $invalidProperties[] = "invalid value for 'tNetworkId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
        }
            if ((mb_strlen($this->container['regionId']) > 255)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['regionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['osType'] === null) {
            $invalidProperties[] = "'osType' can't be null";
        }
            if ((mb_strlen($this->container['osType']) > 255)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
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
    * Gets tProjectId
    *  目的虚拟机所属project_id
    *
    * @return string
    */
    public function getTProjectId()
    {
        return $this->container['tProjectId'];
    }

    /**
    * Sets tProjectId
    *
    * @param string $tProjectId 目的虚拟机所属project_id
    *
    * @return $this
    */
    public function setTProjectId($tProjectId)
    {
        $this->container['tProjectId'] = $tProjectId;
        return $this;
    }

    /**
    * Gets tNetworkId
    *  目的端子网ID
    *
    * @return string
    */
    public function getTNetworkId()
    {
        return $this->container['tNetworkId'];
    }

    /**
    * Sets tNetworkId
    *
    * @param string $tNetworkId 目的端子网ID
    *
    * @return $this
    */
    public function setTNetworkId($tNetworkId)
    {
        $this->container['tNetworkId'] = $tNetworkId;
        return $this;
    }

    /**
    * Gets regionId
    *  区域ID
    *
    * @return string
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string $regionId 区域ID
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets osType
    *  操作系统类型
    *
    * @return string
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string $osType 操作系统类型
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
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

