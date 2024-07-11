<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchUpdatePermissionLevelRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchUpdatePermissionLevelRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目id
    * permissionLevel  应用鉴权级别，instance：实例级；project：项目级
    * applicationIds  应用id列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'permissionLevel' => 'string',
            'applicationIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目id
    * permissionLevel  应用鉴权级别，instance：实例级；project：项目级
    * applicationIds  应用id列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'permissionLevel' => null,
        'applicationIds' => null
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
    * projectId  项目id
    * permissionLevel  应用鉴权级别，instance：实例级；project：项目级
    * applicationIds  应用id列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'permissionLevel' => 'permission_level',
            'applicationIds' => 'application_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目id
    * permissionLevel  应用鉴权级别，instance：实例级；project：项目级
    * applicationIds  应用id列表
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'permissionLevel' => 'setPermissionLevel',
            'applicationIds' => 'setApplicationIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目id
    * permissionLevel  应用鉴权级别，instance：实例级；project：项目级
    * applicationIds  应用id列表
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'permissionLevel' => 'getPermissionLevel',
            'applicationIds' => 'getApplicationIds'
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
    const PERMISSION_LEVEL_PROJECT = 'project';
    const PERMISSION_LEVEL_INSTANCE = 'instance';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPermissionLevelAllowableValues()
    {
        return [
            self::PERMISSION_LEVEL_PROJECT,
            self::PERMISSION_LEVEL_INSTANCE,
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['permissionLevel'] = isset($data['permissionLevel']) ? $data['permissionLevel'] : null;
        $this->container['applicationIds'] = isset($data['applicationIds']) ? $data['applicationIds'] : null;
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
            if (!preg_match("/^[A-Za-z0-9]{32}$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
        if ($this->container['permissionLevel'] === null) {
            $invalidProperties[] = "'permissionLevel' can't be null";
        }
            $allowedValues = $this->getPermissionLevelAllowableValues();
                if (!is_null($this->container['permissionLevel']) && !in_array($this->container['permissionLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'permissionLevel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!preg_match("/^project|instance$/", $this->container['permissionLevel'])) {
                $invalidProperties[] = "invalid value for 'permissionLevel', must be conform to the pattern /^project|instance$/.";
            }
        if ($this->container['applicationIds'] === null) {
            $invalidProperties[] = "'applicationIds' can't be null";
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
    *  项目id
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
    * @param string $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets permissionLevel
    *  应用鉴权级别，instance：实例级；project：项目级
    *
    * @return string
    */
    public function getPermissionLevel()
    {
        return $this->container['permissionLevel'];
    }

    /**
    * Sets permissionLevel
    *
    * @param string $permissionLevel 应用鉴权级别，instance：实例级；project：项目级
    *
    * @return $this
    */
    public function setPermissionLevel($permissionLevel)
    {
        $this->container['permissionLevel'] = $permissionLevel;
        return $this;
    }

    /**
    * Gets applicationIds
    *  应用id列表
    *
    * @return string[]
    */
    public function getApplicationIds()
    {
        return $this->container['applicationIds'];
    }

    /**
    * Sets applicationIds
    *
    * @param string[] $applicationIds 应用id列表
    *
    * @return $this
    */
    public function setApplicationIds($applicationIds)
    {
        $this->container['applicationIds'] = $applicationIds;
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

