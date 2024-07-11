<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeletePortTagRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeletePortTagRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * portId  功能说明：端口唯一标识 取值范围：合法UUID 约束：ID对应的端口必须存在
    * projectId  项目ID
    * tagKey  功能说明：标签键
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'portId' => 'string',
            'projectId' => 'string',
            'tagKey' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * portId  功能说明：端口唯一标识 取值范围：合法UUID 约束：ID对应的端口必须存在
    * projectId  项目ID
    * tagKey  功能说明：标签键
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'portId' => null,
        'projectId' => null,
        'tagKey' => null
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
    * portId  功能说明：端口唯一标识 取值范围：合法UUID 约束：ID对应的端口必须存在
    * projectId  项目ID
    * tagKey  功能说明：标签键
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'portId' => 'port_id',
            'projectId' => 'project_id',
            'tagKey' => 'tag_key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * portId  功能说明：端口唯一标识 取值范围：合法UUID 约束：ID对应的端口必须存在
    * projectId  项目ID
    * tagKey  功能说明：标签键
    *
    * @var string[]
    */
    protected static $setters = [
            'portId' => 'setPortId',
            'projectId' => 'setProjectId',
            'tagKey' => 'setTagKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * portId  功能说明：端口唯一标识 取值范围：合法UUID 约束：ID对应的端口必须存在
    * projectId  项目ID
    * tagKey  功能说明：标签键
    *
    * @var string[]
    */
    protected static $getters = [
            'portId' => 'getPortId',
            'projectId' => 'getProjectId',
            'tagKey' => 'getTagKey'
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
        $this->container['portId'] = isset($data['portId']) ? $data['portId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['tagKey'] = isset($data['tagKey']) ? $data['tagKey'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['portId'] === null) {
            $invalidProperties[] = "'portId' can't be null";
        }
            if (!preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['portId'])) {
                $invalidProperties[] = "invalid value for 'portId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if (!preg_match("/[0-9a-fA-F]{32}/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /[0-9a-fA-F]{32}/.";
            }
        if ($this->container['tagKey'] === null) {
            $invalidProperties[] = "'tagKey' can't be null";
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
    * Gets portId
    *  功能说明：端口唯一标识 取值范围：合法UUID 约束：ID对应的端口必须存在
    *
    * @return string
    */
    public function getPortId()
    {
        return $this->container['portId'];
    }

    /**
    * Sets portId
    *
    * @param string $portId 功能说明：端口唯一标识 取值范围：合法UUID 约束：ID对应的端口必须存在
    *
    * @return $this
    */
    public function setPortId($portId)
    {
        $this->container['portId'] = $portId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
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
    * @param string $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets tagKey
    *  功能说明：标签键
    *
    * @return string
    */
    public function getTagKey()
    {
        return $this->container['tagKey'];
    }

    /**
    * Sets tagKey
    *
    * @param string $tagKey 功能说明：标签键
    *
    * @return $this
    */
    public function setTagKey($tagKey)
    {
        $this->container['tagKey'] = $tagKey;
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
