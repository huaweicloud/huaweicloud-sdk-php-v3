<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecycleBin implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecycleBin';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  租户project_id
    * switch  回收站配置开关
    * policy  policy
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'switch' => 'string',
            'policy' => '\HuaweiCloud\SDK\Ecs\V2\Model\RecycleBinPolicys'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  租户project_id
    * switch  回收站配置开关
    * policy  policy
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'switch' => null,
        'policy' => null
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
    * projectId  租户project_id
    * switch  回收站配置开关
    * policy  policy
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'switch' => 'switch',
            'policy' => 'policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  租户project_id
    * switch  回收站配置开关
    * policy  policy
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'switch' => 'setSwitch',
            'policy' => 'setPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  租户project_id
    * switch  回收站配置开关
    * policy  policy
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'switch' => 'getSwitch',
            'policy' => 'getPolicy'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['switch'] = isset($data['switch']) ? $data['switch'] : null;
        $this->container['policy'] = isset($data['policy']) ? $data['policy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['switch'] === null) {
            $invalidProperties[] = "'switch' can't be null";
        }
        if ($this->container['policy'] === null) {
            $invalidProperties[] = "'policy' can't be null";
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
    * Gets projectId
    *  租户project_id
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
    * @param string $projectId 租户project_id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets switch
    *  回收站配置开关
    *
    * @return string
    */
    public function getSwitch()
    {
        return $this->container['switch'];
    }

    /**
    * Sets switch
    *
    * @param string $switch 回收站配置开关
    *
    * @return $this
    */
    public function setSwitch($switch)
    {
        $this->container['switch'] = $switch;
        return $this;
    }

    /**
    * Gets policy
    *  policy
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\RecycleBinPolicys
    */
    public function getPolicy()
    {
        return $this->container['policy'];
    }

    /**
    * Sets policy
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\RecycleBinPolicys $policy policy
    *
    * @return $this
    */
    public function setPolicy($policy)
    {
        $this->container['policy'] = $policy;
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

