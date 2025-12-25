<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDataSourceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDataSourceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataSources  **参数解释**： 数据源列表。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 不涉及。
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 36位UUID。
    * type  **参数解释**： 数据源类型。 **取值范围**： - OBS: obs数据源。 - LAKE_FORMATION: lake_formation数据源。 - MRS: mrs数据源。
    * count  **参数解释**： 总数。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataSources' => '\HuaweiCloud\SDK\Dws\V2\Model\ExtDataSource[]',
            'projectId' => 'string',
            'clusterId' => 'string',
            'type' => 'string',
            'count' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataSources  **参数解释**： 数据源列表。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 不涉及。
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 36位UUID。
    * type  **参数解释**： 数据源类型。 **取值范围**： - OBS: obs数据源。 - LAKE_FORMATION: lake_formation数据源。 - MRS: mrs数据源。
    * count  **参数解释**： 总数。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataSources' => null,
        'projectId' => null,
        'clusterId' => null,
        'type' => null,
        'count' => null
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
    * dataSources  **参数解释**： 数据源列表。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 不涉及。
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 36位UUID。
    * type  **参数解释**： 数据源类型。 **取值范围**： - OBS: obs数据源。 - LAKE_FORMATION: lake_formation数据源。 - MRS: mrs数据源。
    * count  **参数解释**： 总数。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataSources' => 'data_sources',
            'projectId' => 'project_id',
            'clusterId' => 'cluster_id',
            'type' => 'type',
            'count' => 'count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataSources  **参数解释**： 数据源列表。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 不涉及。
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 36位UUID。
    * type  **参数解释**： 数据源类型。 **取值范围**： - OBS: obs数据源。 - LAKE_FORMATION: lake_formation数据源。 - MRS: mrs数据源。
    * count  **参数解释**： 总数。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'dataSources' => 'setDataSources',
            'projectId' => 'setProjectId',
            'clusterId' => 'setClusterId',
            'type' => 'setType',
            'count' => 'setCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataSources  **参数解释**： 数据源列表。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 不涉及。
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 36位UUID。
    * type  **参数解释**： 数据源类型。 **取值范围**： - OBS: obs数据源。 - LAKE_FORMATION: lake_formation数据源。 - MRS: mrs数据源。
    * count  **参数解释**： 总数。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'dataSources' => 'getDataSources',
            'projectId' => 'getProjectId',
            'clusterId' => 'getClusterId',
            'type' => 'getType',
            'count' => 'getCount'
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
        $this->container['dataSources'] = isset($data['dataSources']) ? $data['dataSources'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets dataSources
    *  **参数解释**： 数据源列表。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\ExtDataSource[]|null
    */
    public function getDataSources()
    {
        return $this->container['dataSources'];
    }

    /**
    * Sets dataSources
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\ExtDataSource[]|null $dataSources **参数解释**： 数据源列表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDataSources($dataSources)
    {
        $this->container['dataSources'] = $dataSources;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**： 项目ID。 **取值范围**： 不涉及。
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
    * @param string|null $projectId **参数解释**： 项目ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets clusterId
    *  **参数解释**： 集群ID。 **取值范围**： 36位UUID。
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId **参数解释**： 集群ID。 **取值范围**： 36位UUID。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 数据源类型。 **取值范围**： - OBS: obs数据源。 - LAKE_FORMATION: lake_formation数据源。 - MRS: mrs数据源。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**： 数据源类型。 **取值范围**： - OBS: obs数据源。 - LAKE_FORMATION: lake_formation数据源。 - MRS: mrs数据源。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets count
    *  **参数解释**： 总数。 **取值范围**： 不涉及。
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
    * @param int|null $count **参数解释**： 总数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
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

