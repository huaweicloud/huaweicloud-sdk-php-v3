<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShrinkParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShrinkParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeGroupName  节点组名称
    * count  缩容节点数量，如果是指定节点缩容，则该参数可以不填。
    * resourceIds  缩容节点时指定待删除节点的资源ID列表。 resource_ids为空时，按照系统规则自动选择删除节点。 仅支持删除状态异常的ecs节点。 会针对指定节点进行强制删除。 可通过查询主机接口获取resource_id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeGroupName' => 'string',
            'count' => 'int',
            'resourceIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeGroupName  节点组名称
    * count  缩容节点数量，如果是指定节点缩容，则该参数可以不填。
    * resourceIds  缩容节点时指定待删除节点的资源ID列表。 resource_ids为空时，按照系统规则自动选择删除节点。 仅支持删除状态异常的ecs节点。 会针对指定节点进行强制删除。 可通过查询主机接口获取resource_id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeGroupName' => null,
        'count' => null,
        'resourceIds' => null
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
    * nodeGroupName  节点组名称
    * count  缩容节点数量，如果是指定节点缩容，则该参数可以不填。
    * resourceIds  缩容节点时指定待删除节点的资源ID列表。 resource_ids为空时，按照系统规则自动选择删除节点。 仅支持删除状态异常的ecs节点。 会针对指定节点进行强制删除。 可通过查询主机接口获取resource_id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeGroupName' => 'node_group_name',
            'count' => 'count',
            'resourceIds' => 'resource_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeGroupName  节点组名称
    * count  缩容节点数量，如果是指定节点缩容，则该参数可以不填。
    * resourceIds  缩容节点时指定待删除节点的资源ID列表。 resource_ids为空时，按照系统规则自动选择删除节点。 仅支持删除状态异常的ecs节点。 会针对指定节点进行强制删除。 可通过查询主机接口获取resource_id。
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeGroupName' => 'setNodeGroupName',
            'count' => 'setCount',
            'resourceIds' => 'setResourceIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeGroupName  节点组名称
    * count  缩容节点数量，如果是指定节点缩容，则该参数可以不填。
    * resourceIds  缩容节点时指定待删除节点的资源ID列表。 resource_ids为空时，按照系统规则自动选择删除节点。 仅支持删除状态异常的ecs节点。 会针对指定节点进行强制删除。 可通过查询主机接口获取resource_id。
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeGroupName' => 'getNodeGroupName',
            'count' => 'getCount',
            'resourceIds' => 'getResourceIds'
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
        $this->container['nodeGroupName'] = isset($data['nodeGroupName']) ? $data['nodeGroupName'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['resourceIds'] = isset($data['resourceIds']) ? $data['resourceIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nodeGroupName'] === null) {
            $invalidProperties[] = "'nodeGroupName' can't be null";
        }
            if ((mb_strlen($this->container['nodeGroupName']) > 64)) {
                $invalidProperties[] = "invalid value for 'nodeGroupName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['nodeGroupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'nodeGroupName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-z0-9A-Z_-]*$/", $this->container['nodeGroupName'])) {
                $invalidProperties[] = "invalid value for 'nodeGroupName', must be conform to the pattern /^[a-z0-9A-Z_-]*$/.";
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
    * Gets nodeGroupName
    *  节点组名称
    *
    * @return string
    */
    public function getNodeGroupName()
    {
        return $this->container['nodeGroupName'];
    }

    /**
    * Sets nodeGroupName
    *
    * @param string $nodeGroupName 节点组名称
    *
    * @return $this
    */
    public function setNodeGroupName($nodeGroupName)
    {
        $this->container['nodeGroupName'] = $nodeGroupName;
        return $this;
    }

    /**
    * Gets count
    *  缩容节点数量，如果是指定节点缩容，则该参数可以不填。
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 缩容节点数量，如果是指定节点缩容，则该参数可以不填。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets resourceIds
    *  缩容节点时指定待删除节点的资源ID列表。 resource_ids为空时，按照系统规则自动选择删除节点。 仅支持删除状态异常的ecs节点。 会针对指定节点进行强制删除。 可通过查询主机接口获取resource_id。
    *
    * @return string[]|null
    */
    public function getResourceIds()
    {
        return $this->container['resourceIds'];
    }

    /**
    * Sets resourceIds
    *
    * @param string[]|null $resourceIds 缩容节点时指定待删除节点的资源ID列表。 resource_ids为空时，按照系统规则自动选择删除节点。 仅支持删除状态异常的ecs节点。 会针对指定节点进行强制删除。 可通过查询主机接口获取resource_id。
    *
    * @return $this
    */
    public function setResourceIds($resourceIds)
    {
        $this->container['resourceIds'] = $resourceIds;
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

