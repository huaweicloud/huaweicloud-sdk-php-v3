<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GlobalConnectionBandwidthLineLevel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GlobalConnectionBandwidthLineLevel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID。
    * description  实例描述。不支持 <>。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * localArea  功能说明：线路分级本端接入点。
    * remoteArea  功能描述：线路分级远端接入点。
    * levels  支持的铂金、金、银分级。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'description' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'localArea' => 'string',
            'remoteArea' => 'string',
            'levels' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID。
    * description  实例描述。不支持 <>。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * localArea  功能说明：线路分级本端接入点。
    * remoteArea  功能描述：线路分级远端接入点。
    * levels  支持的铂金、金、银分级。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'description' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'localArea' => null,
        'remoteArea' => null,
        'levels' => null
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
    * id  实例ID。
    * description  实例描述。不支持 <>。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * localArea  功能说明：线路分级本端接入点。
    * remoteArea  功能描述：线路分级远端接入点。
    * levels  支持的铂金、金、银分级。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'description' => 'description',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'localArea' => 'local_area',
            'remoteArea' => 'remote_area',
            'levels' => 'levels'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID。
    * description  实例描述。不支持 <>。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * localArea  功能说明：线路分级本端接入点。
    * remoteArea  功能描述：线路分级远端接入点。
    * levels  支持的铂金、金、银分级。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'description' => 'setDescription',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'localArea' => 'setLocalArea',
            'remoteArea' => 'setRemoteArea',
            'levels' => 'setLevels'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID。
    * description  实例描述。不支持 <>。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * localArea  功能说明：线路分级本端接入点。
    * remoteArea  功能描述：线路分级远端接入点。
    * levels  支持的铂金、金、银分级。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'description' => 'getDescription',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'localArea' => 'getLocalArea',
            'remoteArea' => 'getRemoteArea',
            'levels' => 'getLevels'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['localArea'] = isset($data['localArea']) ? $data['localArea'] : null;
        $this->container['remoteArea'] = isset($data['remoteArea']) ? $data['remoteArea'] : null;
        $this->container['levels'] = isset($data['levels']) ? $data['levels'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['id']) < 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[^<>]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[^<>]*$/.";
            }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
            if (!is_null($this->container['localArea']) && (mb_strlen($this->container['localArea']) > 64)) {
                $invalidProperties[] = "invalid value for 'localArea', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['localArea']) && (mb_strlen($this->container['localArea']) < 1)) {
                $invalidProperties[] = "invalid value for 'localArea', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['remoteArea']) && (mb_strlen($this->container['remoteArea']) > 64)) {
                $invalidProperties[] = "invalid value for 'remoteArea', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['remoteArea']) && (mb_strlen($this->container['remoteArea']) < 1)) {
                $invalidProperties[] = "invalid value for 'remoteArea', the character length must be bigger than or equal to 1.";
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
    * Gets id
    *  实例ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 实例ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets description
    *  实例描述。不支持 <>。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 实例描述。不支持 <>。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createdAt
    *  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return \DateTime
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime $createdAt 实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return \DateTime
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime $updatedAt 实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets localArea
    *  功能说明：线路分级本端接入点。
    *
    * @return string|null
    */
    public function getLocalArea()
    {
        return $this->container['localArea'];
    }

    /**
    * Sets localArea
    *
    * @param string|null $localArea 功能说明：线路分级本端接入点。
    *
    * @return $this
    */
    public function setLocalArea($localArea)
    {
        $this->container['localArea'] = $localArea;
        return $this;
    }

    /**
    * Gets remoteArea
    *  功能描述：线路分级远端接入点。
    *
    * @return string|null
    */
    public function getRemoteArea()
    {
        return $this->container['remoteArea'];
    }

    /**
    * Sets remoteArea
    *
    * @param string|null $remoteArea 功能描述：线路分级远端接入点。
    *
    * @return $this
    */
    public function setRemoteArea($remoteArea)
    {
        $this->container['remoteArea'] = $remoteArea;
        return $this;
    }

    /**
    * Gets levels
    *  支持的铂金、金、银分级。
    *
    * @return string[]|null
    */
    public function getLevels()
    {
        return $this->container['levels'];
    }

    /**
    * Sets levels
    *
    * @param string[]|null $levels 支持的铂金、金、银分级。
    *
    * @return $this
    */
    public function setLevels($levels)
    {
        $this->container['levels'] = $levels;
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

