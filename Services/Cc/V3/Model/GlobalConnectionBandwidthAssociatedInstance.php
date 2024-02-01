<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GlobalConnectionBandwidthAssociatedInstance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GlobalConnectionBandwidthAssociatedInstance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  绑定实例ID。
    * type  绑定实例类型。
    * regionId  绑定实例的region信息，global服务默认取值\"global\"。
    * projectId  绑定实例的project id信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'type' => 'string',
            'regionId' => 'string',
            'projectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  绑定实例ID。
    * type  绑定实例类型。
    * regionId  绑定实例的region信息，global服务默认取值\"global\"。
    * projectId  绑定实例的project id信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'type' => null,
        'regionId' => null,
        'projectId' => null
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
    * id  绑定实例ID。
    * type  绑定实例类型。
    * regionId  绑定实例的region信息，global服务默认取值\"global\"。
    * projectId  绑定实例的project id信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'type' => 'type',
            'regionId' => 'region_id',
            'projectId' => 'project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  绑定实例ID。
    * type  绑定实例类型。
    * regionId  绑定实例的region信息，global服务默认取值\"global\"。
    * projectId  绑定实例的project id信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'type' => 'setType',
            'regionId' => 'setRegionId',
            'projectId' => 'setProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  绑定实例ID。
    * type  绑定实例类型。
    * regionId  绑定实例的region信息，global服务默认取值\"global\"。
    * projectId  绑定实例的project id信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'type' => 'getType',
            'regionId' => 'getRegionId',
            'projectId' => 'getProjectId'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
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
            if ((mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if ((mb_strlen($this->container['type']) > 36)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
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
    *  绑定实例ID。
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
    * @param string $id 绑定实例ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets type
    *  绑定实例类型。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 绑定实例类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets regionId
    *  绑定实例的region信息，global服务默认取值\"global\"。
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId 绑定实例的region信息，global服务默认取值\"global\"。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets projectId
    *  绑定实例的project id信息。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 绑定实例的project id信息。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
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

