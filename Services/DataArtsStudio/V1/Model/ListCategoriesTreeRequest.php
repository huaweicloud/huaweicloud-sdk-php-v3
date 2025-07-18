<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCategoriesTreeRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCategoriesTreeRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instance  实例ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * workspaceId  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instance' => 'string',
            'workspaceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instance  实例ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * workspaceId  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instance' => null,
        'workspaceId' => null
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
    * instance  实例ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * workspaceId  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instance' => 'instance',
            'workspaceId' => 'workspace_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instance  实例ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * workspaceId  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @var string[]
    */
    protected static $setters = [
            'instance' => 'setInstance',
            'workspaceId' => 'setWorkspaceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instance  实例ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * workspaceId  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @var string[]
    */
    protected static $getters = [
            'instance' => 'getInstance',
            'workspaceId' => 'getWorkspaceId'
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
        $this->container['instance'] = isset($data['instance']) ? $data['instance'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instance'] === null) {
            $invalidProperties[] = "'instance' can't be null";
        }
            if ((mb_strlen($this->container['instance']) > 36)) {
                $invalidProperties[] = "invalid value for 'instance', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['instance']) < 32)) {
                $invalidProperties[] = "invalid value for 'instance', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['workspaceId'] === null) {
            $invalidProperties[] = "'workspaceId' can't be null";
        }
            if ((mb_strlen($this->container['workspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['workspaceId']) < 32)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 32.";
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
    * Gets instance
    *  实例ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return string
    */
    public function getInstance()
    {
        return $this->container['instance'];
    }

    /**
    * Sets instance
    *
    * @param string $instance 实例ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return $this
    */
    public function setInstance($instance)
    {
        $this->container['instance'] = $instance;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return string
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string $workspaceId 工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
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

