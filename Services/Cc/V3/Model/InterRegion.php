<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InterRegion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InterRegion';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  资源ID标识符。
    * projectId  实例所属项目ID。
    * localRegionId  域间实例本端的RegionID。
    * remoteRegionId  域间实例对端的RegionID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'projectId' => 'string',
            'localRegionId' => 'string',
            'remoteRegionId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  资源ID标识符。
    * projectId  实例所属项目ID。
    * localRegionId  域间实例本端的RegionID。
    * remoteRegionId  域间实例对端的RegionID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'projectId' => null,
        'localRegionId' => null,
        'remoteRegionId' => null
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
    * id  资源ID标识符。
    * projectId  实例所属项目ID。
    * localRegionId  域间实例本端的RegionID。
    * remoteRegionId  域间实例对端的RegionID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'projectId' => 'project_id',
            'localRegionId' => 'local_region_id',
            'remoteRegionId' => 'remote_region_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  资源ID标识符。
    * projectId  实例所属项目ID。
    * localRegionId  域间实例本端的RegionID。
    * remoteRegionId  域间实例对端的RegionID。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'localRegionId' => 'setLocalRegionId',
            'remoteRegionId' => 'setRemoteRegionId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  资源ID标识符。
    * projectId  实例所属项目ID。
    * localRegionId  域间实例本端的RegionID。
    * remoteRegionId  域间实例对端的RegionID。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'localRegionId' => 'getLocalRegionId',
            'remoteRegionId' => 'getRemoteRegionId'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['localRegionId'] = isset($data['localRegionId']) ? $data['localRegionId'] : null;
        $this->container['remoteRegionId'] = isset($data['remoteRegionId']) ? $data['remoteRegionId'] : null;
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
            if ((mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-fA-F0-9]{32}/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /[a-fA-F0-9]{32}/.";
            }
            if (!is_null($this->container['localRegionId']) && (mb_strlen($this->container['localRegionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'localRegionId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['localRegionId']) && (mb_strlen($this->container['localRegionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'localRegionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['remoteRegionId']) && (mb_strlen($this->container['remoteRegionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'remoteRegionId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['remoteRegionId']) && (mb_strlen($this->container['remoteRegionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'remoteRegionId', the character length must be bigger than or equal to 0.";
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
    *  资源ID标识符。
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
    * @param string $id 资源ID标识符。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets projectId
    *  实例所属项目ID。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 实例所属项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets localRegionId
    *  域间实例本端的RegionID。
    *
    * @return string|null
    */
    public function getLocalRegionId()
    {
        return $this->container['localRegionId'];
    }

    /**
    * Sets localRegionId
    *
    * @param string|null $localRegionId 域间实例本端的RegionID。
    *
    * @return $this
    */
    public function setLocalRegionId($localRegionId)
    {
        $this->container['localRegionId'] = $localRegionId;
        return $this;
    }

    /**
    * Gets remoteRegionId
    *  域间实例对端的RegionID。
    *
    * @return string|null
    */
    public function getRemoteRegionId()
    {
        return $this->container['remoteRegionId'];
    }

    /**
    * Sets remoteRegionId
    *
    * @param string|null $remoteRegionId 域间实例对端的RegionID。
    *
    * @return $this
    */
    public function setRemoteRegionId($remoteRegionId)
    {
        $this->container['remoteRegionId'] = $remoteRegionId;
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

