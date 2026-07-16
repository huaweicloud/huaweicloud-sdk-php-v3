<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PoolLabelsCreation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PoolLabelsCreation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * osModelartsName  **参数解释**：用户指定的资源池名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsWorkspaceId  **参数解释**：工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc) **约束限制**：不涉及。 **取值范围**：未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **默认取值**：不涉及。
    * osModelartsNodePrefix  **参数解释**：自定义节点名称前缀。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'osModelartsName' => 'string',
            'osModelartsWorkspaceId' => 'string',
            'osModelartsNodePrefix' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * osModelartsName  **参数解释**：用户指定的资源池名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsWorkspaceId  **参数解释**：工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc) **约束限制**：不涉及。 **取值范围**：未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **默认取值**：不涉及。
    * osModelartsNodePrefix  **参数解释**：自定义节点名称前缀。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'osModelartsName' => null,
        'osModelartsWorkspaceId' => null,
        'osModelartsNodePrefix' => null
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
    * osModelartsName  **参数解释**：用户指定的资源池名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsWorkspaceId  **参数解释**：工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc) **约束限制**：不涉及。 **取值范围**：未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **默认取值**：不涉及。
    * osModelartsNodePrefix  **参数解释**：自定义节点名称前缀。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'osModelartsName' => 'os.modelarts/name',
            'osModelartsWorkspaceId' => 'os.modelarts/workspace.id',
            'osModelartsNodePrefix' => 'os.modelarts/node.prefix'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * osModelartsName  **参数解释**：用户指定的资源池名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsWorkspaceId  **参数解释**：工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc) **约束限制**：不涉及。 **取值范围**：未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **默认取值**：不涉及。
    * osModelartsNodePrefix  **参数解释**：自定义节点名称前缀。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'osModelartsName' => 'setOsModelartsName',
            'osModelartsWorkspaceId' => 'setOsModelartsWorkspaceId',
            'osModelartsNodePrefix' => 'setOsModelartsNodePrefix'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * osModelartsName  **参数解释**：用户指定的资源池名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsWorkspaceId  **参数解释**：工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc) **约束限制**：不涉及。 **取值范围**：未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **默认取值**：不涉及。
    * osModelartsNodePrefix  **参数解释**：自定义节点名称前缀。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'osModelartsName' => 'getOsModelartsName',
            'osModelartsWorkspaceId' => 'getOsModelartsWorkspaceId',
            'osModelartsNodePrefix' => 'getOsModelartsNodePrefix'
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
        $this->container['osModelartsName'] = isset($data['osModelartsName']) ? $data['osModelartsName'] : null;
        $this->container['osModelartsWorkspaceId'] = isset($data['osModelartsWorkspaceId']) ? $data['osModelartsWorkspaceId'] : null;
        $this->container['osModelartsNodePrefix'] = isset($data['osModelartsNodePrefix']) ? $data['osModelartsNodePrefix'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['osModelartsName'] === null) {
            $invalidProperties[] = "'osModelartsName' can't be null";
        }
            if ((mb_strlen($this->container['osModelartsName']) > 64)) {
                $invalidProperties[] = "invalid value for 'osModelartsName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['osModelartsName']) < 4)) {
                $invalidProperties[] = "invalid value for 'osModelartsName', the character length must be bigger than or equal to 4.";
            }
            if (!preg_match("/^[a-z][-a-z0-9]{2,62}[a-z0-9]$/", $this->container['osModelartsName'])) {
                $invalidProperties[] = "invalid value for 'osModelartsName', must be conform to the pattern /^[a-z][-a-z0-9]{2,62}[a-z0-9]$/.";
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
    * Gets osModelartsName
    *  **参数解释**：用户指定的资源池名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string
    */
    public function getOsModelartsName()
    {
        return $this->container['osModelartsName'];
    }

    /**
    * Sets osModelartsName
    *
    * @param string $osModelartsName **参数解释**：用户指定的资源池名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsName($osModelartsName)
    {
        $this->container['osModelartsName'] = $osModelartsName;
        return $this;
    }

    /**
    * Gets osModelartsWorkspaceId
    *  **参数解释**：工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc) **约束限制**：不涉及。 **取值范围**：未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsWorkspaceId()
    {
        return $this->container['osModelartsWorkspaceId'];
    }

    /**
    * Sets osModelartsWorkspaceId
    *
    * @param string|null $osModelartsWorkspaceId **参数解释**：工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc) **约束限制**：不涉及。 **取值范围**：未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsWorkspaceId($osModelartsWorkspaceId)
    {
        $this->container['osModelartsWorkspaceId'] = $osModelartsWorkspaceId;
        return $this;
    }

    /**
    * Gets osModelartsNodePrefix
    *  **参数解释**：自定义节点名称前缀。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsNodePrefix()
    {
        return $this->container['osModelartsNodePrefix'];
    }

    /**
    * Sets osModelartsNodePrefix
    *
    * @param string|null $osModelartsNodePrefix **参数解释**：自定义节点名称前缀。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsNodePrefix($osModelartsNodePrefix)
    {
        $this->container['osModelartsNodePrefix'] = $osModelartsNodePrefix;
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

