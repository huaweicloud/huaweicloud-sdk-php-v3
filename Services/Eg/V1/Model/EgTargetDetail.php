<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EgTargetDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EgTargetDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetProjectId  目标项目id
    * targetChannelId  目标通道id
    * targetRegion  目标region
    * crossRegion  跨region开关
    * crossAccount  跨账号开关
    * agencyName  委托名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetProjectId' => 'string',
            'targetChannelId' => 'string',
            'targetRegion' => 'string',
            'crossRegion' => 'bool',
            'crossAccount' => 'bool',
            'agencyName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetProjectId  目标项目id
    * targetChannelId  目标通道id
    * targetRegion  目标region
    * crossRegion  跨region开关
    * crossAccount  跨账号开关
    * agencyName  委托名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetProjectId' => null,
        'targetChannelId' => null,
        'targetRegion' => null,
        'crossRegion' => null,
        'crossAccount' => null,
        'agencyName' => null
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
    * targetProjectId  目标项目id
    * targetChannelId  目标通道id
    * targetRegion  目标region
    * crossRegion  跨region开关
    * crossAccount  跨账号开关
    * agencyName  委托名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'targetProjectId' => 'target_project_id',
            'targetChannelId' => 'target_channel_id',
            'targetRegion' => 'target_region',
            'crossRegion' => 'cross_region',
            'crossAccount' => 'cross_account',
            'agencyName' => 'agency_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * targetProjectId  目标项目id
    * targetChannelId  目标通道id
    * targetRegion  目标region
    * crossRegion  跨region开关
    * crossAccount  跨账号开关
    * agencyName  委托名称
    *
    * @var string[]
    */
    protected static $setters = [
            'targetProjectId' => 'setTargetProjectId',
            'targetChannelId' => 'setTargetChannelId',
            'targetRegion' => 'setTargetRegion',
            'crossRegion' => 'setCrossRegion',
            'crossAccount' => 'setCrossAccount',
            'agencyName' => 'setAgencyName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * targetProjectId  目标项目id
    * targetChannelId  目标通道id
    * targetRegion  目标region
    * crossRegion  跨region开关
    * crossAccount  跨账号开关
    * agencyName  委托名称
    *
    * @var string[]
    */
    protected static $getters = [
            'targetProjectId' => 'getTargetProjectId',
            'targetChannelId' => 'getTargetChannelId',
            'targetRegion' => 'getTargetRegion',
            'crossRegion' => 'getCrossRegion',
            'crossAccount' => 'getCrossAccount',
            'agencyName' => 'getAgencyName'
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
        $this->container['targetProjectId'] = isset($data['targetProjectId']) ? $data['targetProjectId'] : null;
        $this->container['targetChannelId'] = isset($data['targetChannelId']) ? $data['targetChannelId'] : null;
        $this->container['targetRegion'] = isset($data['targetRegion']) ? $data['targetRegion'] : null;
        $this->container['crossRegion'] = isset($data['crossRegion']) ? $data['crossRegion'] : null;
        $this->container['crossAccount'] = isset($data['crossAccount']) ? $data['crossAccount'] : null;
        $this->container['agencyName'] = isset($data['agencyName']) ? $data['agencyName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['targetProjectId'] === null) {
            $invalidProperties[] = "'targetProjectId' can't be null";
        }
        if ($this->container['targetChannelId'] === null) {
            $invalidProperties[] = "'targetChannelId' can't be null";
        }
        if ($this->container['targetRegion'] === null) {
            $invalidProperties[] = "'targetRegion' can't be null";
        }
        if ($this->container['agencyName'] === null) {
            $invalidProperties[] = "'agencyName' can't be null";
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
    * Gets targetProjectId
    *  目标项目id
    *
    * @return string
    */
    public function getTargetProjectId()
    {
        return $this->container['targetProjectId'];
    }

    /**
    * Sets targetProjectId
    *
    * @param string $targetProjectId 目标项目id
    *
    * @return $this
    */
    public function setTargetProjectId($targetProjectId)
    {
        $this->container['targetProjectId'] = $targetProjectId;
        return $this;
    }

    /**
    * Gets targetChannelId
    *  目标通道id
    *
    * @return string
    */
    public function getTargetChannelId()
    {
        return $this->container['targetChannelId'];
    }

    /**
    * Sets targetChannelId
    *
    * @param string $targetChannelId 目标通道id
    *
    * @return $this
    */
    public function setTargetChannelId($targetChannelId)
    {
        $this->container['targetChannelId'] = $targetChannelId;
        return $this;
    }

    /**
    * Gets targetRegion
    *  目标region
    *
    * @return string
    */
    public function getTargetRegion()
    {
        return $this->container['targetRegion'];
    }

    /**
    * Sets targetRegion
    *
    * @param string $targetRegion 目标region
    *
    * @return $this
    */
    public function setTargetRegion($targetRegion)
    {
        $this->container['targetRegion'] = $targetRegion;
        return $this;
    }

    /**
    * Gets crossRegion
    *  跨region开关
    *
    * @return bool|null
    */
    public function getCrossRegion()
    {
        return $this->container['crossRegion'];
    }

    /**
    * Sets crossRegion
    *
    * @param bool|null $crossRegion 跨region开关
    *
    * @return $this
    */
    public function setCrossRegion($crossRegion)
    {
        $this->container['crossRegion'] = $crossRegion;
        return $this;
    }

    /**
    * Gets crossAccount
    *  跨账号开关
    *
    * @return bool|null
    */
    public function getCrossAccount()
    {
        return $this->container['crossAccount'];
    }

    /**
    * Sets crossAccount
    *
    * @param bool|null $crossAccount 跨账号开关
    *
    * @return $this
    */
    public function setCrossAccount($crossAccount)
    {
        $this->container['crossAccount'] = $crossAccount;
        return $this;
    }

    /**
    * Gets agencyName
    *  委托名称
    *
    * @return string
    */
    public function getAgencyName()
    {
        return $this->container['agencyName'];
    }

    /**
    * Sets agencyName
    *
    * @param string $agencyName 委托名称
    *
    * @return $this
    */
    public function setAgencyName($agencyName)
    {
        $this->container['agencyName'] = $agencyName;
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

