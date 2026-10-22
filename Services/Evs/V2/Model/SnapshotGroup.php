<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SnapshotGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SnapshotGroup';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serverId  **参数解释** 云服务器id。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * volumeIds  **参数解释** 云硬盘id列表。 **约束限制** 格式为ids=[\"id1\",\"id2\",...,\"idx\"]。 如果设置了server_id，则该参数只能设置指定实例内已挂载的云硬盘，不再支持设置多个跨实例的云硬盘ID。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * instantAccess  **参数解释** 是否开启快照极速可用。 **约束限制** 不涉及。 **取值范围** - true：开启。 - false：关闭。 **默认取值** false
    * name  **参数解释** 快照一致性组名称。 **约束限制** 最大支持255个字节。 **取值范围** 最小长度：0 最大长度：255 **默认取值** 不涉及。
    * description  **参数解释** 快照一致性组描述。 **约束限制** 最大支持255个字节。 **取值范围** 最小长度：0 最大长度：255 **默认取值** 不涉及。
    * tags  **参数解释** 快照一致性组的标签。 标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。  标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * enterpriseProjectId  **参数解释** 快照一致性组所属的企业项目ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * incremental  **参数解释** 是否创建增量快照。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serverId' => 'string',
            'volumeIds' => 'string[]',
            'instantAccess' => 'bool',
            'name' => 'string',
            'description' => 'string',
            'tags' => 'map[string,string]',
            'enterpriseProjectId' => 'string',
            'incremental' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serverId  **参数解释** 云服务器id。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * volumeIds  **参数解释** 云硬盘id列表。 **约束限制** 格式为ids=[\"id1\",\"id2\",...,\"idx\"]。 如果设置了server_id，则该参数只能设置指定实例内已挂载的云硬盘，不再支持设置多个跨实例的云硬盘ID。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * instantAccess  **参数解释** 是否开启快照极速可用。 **约束限制** 不涉及。 **取值范围** - true：开启。 - false：关闭。 **默认取值** false
    * name  **参数解释** 快照一致性组名称。 **约束限制** 最大支持255个字节。 **取值范围** 最小长度：0 最大长度：255 **默认取值** 不涉及。
    * description  **参数解释** 快照一致性组描述。 **约束限制** 最大支持255个字节。 **取值范围** 最小长度：0 最大长度：255 **默认取值** 不涉及。
    * tags  **参数解释** 快照一致性组的标签。 标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。  标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * enterpriseProjectId  **参数解释** 快照一致性组所属的企业项目ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * incremental  **参数解释** 是否创建增量快照。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serverId' => null,
        'volumeIds' => null,
        'instantAccess' => null,
        'name' => null,
        'description' => null,
        'tags' => null,
        'enterpriseProjectId' => null,
        'incremental' => null
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
    * serverId  **参数解释** 云服务器id。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * volumeIds  **参数解释** 云硬盘id列表。 **约束限制** 格式为ids=[\"id1\",\"id2\",...,\"idx\"]。 如果设置了server_id，则该参数只能设置指定实例内已挂载的云硬盘，不再支持设置多个跨实例的云硬盘ID。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * instantAccess  **参数解释** 是否开启快照极速可用。 **约束限制** 不涉及。 **取值范围** - true：开启。 - false：关闭。 **默认取值** false
    * name  **参数解释** 快照一致性组名称。 **约束限制** 最大支持255个字节。 **取值范围** 最小长度：0 最大长度：255 **默认取值** 不涉及。
    * description  **参数解释** 快照一致性组描述。 **约束限制** 最大支持255个字节。 **取值范围** 最小长度：0 最大长度：255 **默认取值** 不涉及。
    * tags  **参数解释** 快照一致性组的标签。 标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。  标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * enterpriseProjectId  **参数解释** 快照一致性组所属的企业项目ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * incremental  **参数解释** 是否创建增量快照。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serverId' => 'server_id',
            'volumeIds' => 'volume_ids',
            'instantAccess' => 'instant_access',
            'name' => 'name',
            'description' => 'description',
            'tags' => 'tags',
            'enterpriseProjectId' => 'enterprise_project_id',
            'incremental' => 'incremental'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serverId  **参数解释** 云服务器id。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * volumeIds  **参数解释** 云硬盘id列表。 **约束限制** 格式为ids=[\"id1\",\"id2\",...,\"idx\"]。 如果设置了server_id，则该参数只能设置指定实例内已挂载的云硬盘，不再支持设置多个跨实例的云硬盘ID。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * instantAccess  **参数解释** 是否开启快照极速可用。 **约束限制** 不涉及。 **取值范围** - true：开启。 - false：关闭。 **默认取值** false
    * name  **参数解释** 快照一致性组名称。 **约束限制** 最大支持255个字节。 **取值范围** 最小长度：0 最大长度：255 **默认取值** 不涉及。
    * description  **参数解释** 快照一致性组描述。 **约束限制** 最大支持255个字节。 **取值范围** 最小长度：0 最大长度：255 **默认取值** 不涉及。
    * tags  **参数解释** 快照一致性组的标签。 标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。  标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * enterpriseProjectId  **参数解释** 快照一致性组所属的企业项目ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * incremental  **参数解释** 是否创建增量快照。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'serverId' => 'setServerId',
            'volumeIds' => 'setVolumeIds',
            'instantAccess' => 'setInstantAccess',
            'name' => 'setName',
            'description' => 'setDescription',
            'tags' => 'setTags',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'incremental' => 'setIncremental'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serverId  **参数解释** 云服务器id。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * volumeIds  **参数解释** 云硬盘id列表。 **约束限制** 格式为ids=[\"id1\",\"id2\",...,\"idx\"]。 如果设置了server_id，则该参数只能设置指定实例内已挂载的云硬盘，不再支持设置多个跨实例的云硬盘ID。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * instantAccess  **参数解释** 是否开启快照极速可用。 **约束限制** 不涉及。 **取值范围** - true：开启。 - false：关闭。 **默认取值** false
    * name  **参数解释** 快照一致性组名称。 **约束限制** 最大支持255个字节。 **取值范围** 最小长度：0 最大长度：255 **默认取值** 不涉及。
    * description  **参数解释** 快照一致性组描述。 **约束限制** 最大支持255个字节。 **取值范围** 最小长度：0 最大长度：255 **默认取值** 不涉及。
    * tags  **参数解释** 快照一致性组的标签。 标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。  标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * enterpriseProjectId  **参数解释** 快照一致性组所属的企业项目ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * incremental  **参数解释** 是否创建增量快照。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'serverId' => 'getServerId',
            'volumeIds' => 'getVolumeIds',
            'instantAccess' => 'getInstantAccess',
            'name' => 'getName',
            'description' => 'getDescription',
            'tags' => 'getTags',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'incremental' => 'getIncremental'
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
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
        $this->container['volumeIds'] = isset($data['volumeIds']) ? $data['volumeIds'] : null;
        $this->container['instantAccess'] = isset($data['instantAccess']) ? $data['instantAccess'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['incremental'] = isset($data['incremental']) ? $data['incremental'] : null;
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
    * Gets serverId
    *  **参数解释** 云服务器id。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return string|null
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string|null $serverId **参数解释** 云服务器id。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
        return $this;
    }

    /**
    * Gets volumeIds
    *  **参数解释** 云硬盘id列表。 **约束限制** 格式为ids=[\"id1\",\"id2\",...,\"idx\"]。 如果设置了server_id，则该参数只能设置指定实例内已挂载的云硬盘，不再支持设置多个跨实例的云硬盘ID。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return string[]|null
    */
    public function getVolumeIds()
    {
        return $this->container['volumeIds'];
    }

    /**
    * Sets volumeIds
    *
    * @param string[]|null $volumeIds **参数解释** 云硬盘id列表。 **约束限制** 格式为ids=[\"id1\",\"id2\",...,\"idx\"]。 如果设置了server_id，则该参数只能设置指定实例内已挂载的云硬盘，不再支持设置多个跨实例的云硬盘ID。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setVolumeIds($volumeIds)
    {
        $this->container['volumeIds'] = $volumeIds;
        return $this;
    }

    /**
    * Gets instantAccess
    *  **参数解释** 是否开启快照极速可用。 **约束限制** 不涉及。 **取值范围** - true：开启。 - false：关闭。 **默认取值** false
    *
    * @return bool|null
    */
    public function getInstantAccess()
    {
        return $this->container['instantAccess'];
    }

    /**
    * Sets instantAccess
    *
    * @param bool|null $instantAccess **参数解释** 是否开启快照极速可用。 **约束限制** 不涉及。 **取值范围** - true：开启。 - false：关闭。 **默认取值** false
    *
    * @return $this
    */
    public function setInstantAccess($instantAccess)
    {
        $this->container['instantAccess'] = $instantAccess;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释** 快照一致性组名称。 **约束限制** 最大支持255个字节。 **取值范围** 最小长度：0 最大长度：255 **默认取值** 不涉及。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释** 快照一致性组名称。 **约束限制** 最大支持255个字节。 **取值范围** 最小长度：0 最大长度：255 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释** 快照一致性组描述。 **约束限制** 最大支持255个字节。 **取值范围** 最小长度：0 最大长度：255 **默认取值** 不涉及。
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
    * @param string|null $description **参数解释** 快照一致性组描述。 **约束限制** 最大支持255个字节。 **取值范围** 最小长度：0 最大长度：255 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释** 快照一致性组的标签。 标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。  标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return map[string,string]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param map[string,string]|null $tags **参数解释** 快照一致性组的标签。 标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。  标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释** 快照一致性组所属的企业项目ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId **参数解释** 快照一致性组所属的企业项目ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets incremental
    *  **参数解释** 是否创建增量快照。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return bool|null
    */
    public function getIncremental()
    {
        return $this->container['incremental'];
    }

    /**
    * Sets incremental
    *
    * @param bool|null $incremental **参数解释** 是否创建增量快照。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setIncremental($incremental)
    {
        $this->container['incremental'] = $incremental;
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

