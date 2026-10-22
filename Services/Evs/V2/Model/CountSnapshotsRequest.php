<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CountSnapshotsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CountSnapshotsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * volumeId  **参数解释** 快照对应的云硬盘ID。 可通过[查询所有云硬盘详情](evs_04_2006.xml)获取云硬盘ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * availabilityZone  **参数解释** 快照对应的云硬盘所在的可用区。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * name  **参数解释** 快照名称。 **约束限制** 不涉及。 **取值范围** 最大支持64个字符。 **默认取值** 不涉及。
    * status  **参数解释** 快照状态。 **约束限制** 最大支持255个字符。 **取值范围** [具体请参见[云硬盘快照状态](evs_04_0041.xml)。] **默认取值** 不涉及。
    * id  **参数解释** 快照ID。 可通过[查询云硬盘快照详情列表](evs_04_2021.xml)接口获取云硬盘快照ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * snapshotType  **参数解释** 快照来源。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * enterpriseProjectId  **参数解释** 快照的企业项目ID。  关于企业项目ID的获取及企业项目特性的详细信息，请参考：\"[[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)](tag:hws)[[企业管理用户指南](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/zh-cn_topic_0123692049.html)](tag:hws_hk)\"。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * tagKey  **参数解释** 快照标签的key。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * tags  **参数解释** 快照标签的key/value对，例如[{\"key\":\"bbb\",\"value\":\"bbb\"}]。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * snapshotChainId  **参数解释** 快照链ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'volumeId' => 'string',
            'availabilityZone' => 'string',
            'name' => 'string',
            'status' => 'string',
            'id' => 'string',
            'snapshotType' => 'string',
            'enterpriseProjectId' => 'string',
            'tagKey' => 'string',
            'tags' => 'string',
            'snapshotChainId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * volumeId  **参数解释** 快照对应的云硬盘ID。 可通过[查询所有云硬盘详情](evs_04_2006.xml)获取云硬盘ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * availabilityZone  **参数解释** 快照对应的云硬盘所在的可用区。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * name  **参数解释** 快照名称。 **约束限制** 不涉及。 **取值范围** 最大支持64个字符。 **默认取值** 不涉及。
    * status  **参数解释** 快照状态。 **约束限制** 最大支持255个字符。 **取值范围** [具体请参见[云硬盘快照状态](evs_04_0041.xml)。] **默认取值** 不涉及。
    * id  **参数解释** 快照ID。 可通过[查询云硬盘快照详情列表](evs_04_2021.xml)接口获取云硬盘快照ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * snapshotType  **参数解释** 快照来源。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * enterpriseProjectId  **参数解释** 快照的企业项目ID。  关于企业项目ID的获取及企业项目特性的详细信息，请参考：\"[[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)](tag:hws)[[企业管理用户指南](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/zh-cn_topic_0123692049.html)](tag:hws_hk)\"。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * tagKey  **参数解释** 快照标签的key。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * tags  **参数解释** 快照标签的key/value对，例如[{\"key\":\"bbb\",\"value\":\"bbb\"}]。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * snapshotChainId  **参数解释** 快照链ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'volumeId' => null,
        'availabilityZone' => null,
        'name' => null,
        'status' => null,
        'id' => null,
        'snapshotType' => null,
        'enterpriseProjectId' => null,
        'tagKey' => null,
        'tags' => null,
        'snapshotChainId' => null
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
    * volumeId  **参数解释** 快照对应的云硬盘ID。 可通过[查询所有云硬盘详情](evs_04_2006.xml)获取云硬盘ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * availabilityZone  **参数解释** 快照对应的云硬盘所在的可用区。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * name  **参数解释** 快照名称。 **约束限制** 不涉及。 **取值范围** 最大支持64个字符。 **默认取值** 不涉及。
    * status  **参数解释** 快照状态。 **约束限制** 最大支持255个字符。 **取值范围** [具体请参见[云硬盘快照状态](evs_04_0041.xml)。] **默认取值** 不涉及。
    * id  **参数解释** 快照ID。 可通过[查询云硬盘快照详情列表](evs_04_2021.xml)接口获取云硬盘快照ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * snapshotType  **参数解释** 快照来源。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * enterpriseProjectId  **参数解释** 快照的企业项目ID。  关于企业项目ID的获取及企业项目特性的详细信息，请参考：\"[[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)](tag:hws)[[企业管理用户指南](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/zh-cn_topic_0123692049.html)](tag:hws_hk)\"。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * tagKey  **参数解释** 快照标签的key。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * tags  **参数解释** 快照标签的key/value对，例如[{\"key\":\"bbb\",\"value\":\"bbb\"}]。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * snapshotChainId  **参数解释** 快照链ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'volumeId' => 'volume_id',
            'availabilityZone' => 'availability_zone',
            'name' => 'name',
            'status' => 'status',
            'id' => 'id',
            'snapshotType' => 'snapshot_type',
            'enterpriseProjectId' => 'enterprise_project_id',
            'tagKey' => 'tag_key',
            'tags' => 'tags',
            'snapshotChainId' => 'snapshot_chain_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * volumeId  **参数解释** 快照对应的云硬盘ID。 可通过[查询所有云硬盘详情](evs_04_2006.xml)获取云硬盘ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * availabilityZone  **参数解释** 快照对应的云硬盘所在的可用区。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * name  **参数解释** 快照名称。 **约束限制** 不涉及。 **取值范围** 最大支持64个字符。 **默认取值** 不涉及。
    * status  **参数解释** 快照状态。 **约束限制** 最大支持255个字符。 **取值范围** [具体请参见[云硬盘快照状态](evs_04_0041.xml)。] **默认取值** 不涉及。
    * id  **参数解释** 快照ID。 可通过[查询云硬盘快照详情列表](evs_04_2021.xml)接口获取云硬盘快照ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * snapshotType  **参数解释** 快照来源。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * enterpriseProjectId  **参数解释** 快照的企业项目ID。  关于企业项目ID的获取及企业项目特性的详细信息，请参考：\"[[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)](tag:hws)[[企业管理用户指南](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/zh-cn_topic_0123692049.html)](tag:hws_hk)\"。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * tagKey  **参数解释** 快照标签的key。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * tags  **参数解释** 快照标签的key/value对，例如[{\"key\":\"bbb\",\"value\":\"bbb\"}]。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * snapshotChainId  **参数解释** 快照链ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'volumeId' => 'setVolumeId',
            'availabilityZone' => 'setAvailabilityZone',
            'name' => 'setName',
            'status' => 'setStatus',
            'id' => 'setId',
            'snapshotType' => 'setSnapshotType',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'tagKey' => 'setTagKey',
            'tags' => 'setTags',
            'snapshotChainId' => 'setSnapshotChainId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * volumeId  **参数解释** 快照对应的云硬盘ID。 可通过[查询所有云硬盘详情](evs_04_2006.xml)获取云硬盘ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * availabilityZone  **参数解释** 快照对应的云硬盘所在的可用区。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * name  **参数解释** 快照名称。 **约束限制** 不涉及。 **取值范围** 最大支持64个字符。 **默认取值** 不涉及。
    * status  **参数解释** 快照状态。 **约束限制** 最大支持255个字符。 **取值范围** [具体请参见[云硬盘快照状态](evs_04_0041.xml)。] **默认取值** 不涉及。
    * id  **参数解释** 快照ID。 可通过[查询云硬盘快照详情列表](evs_04_2021.xml)接口获取云硬盘快照ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * snapshotType  **参数解释** 快照来源。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * enterpriseProjectId  **参数解释** 快照的企业项目ID。  关于企业项目ID的获取及企业项目特性的详细信息，请参考：\"[[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)](tag:hws)[[企业管理用户指南](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/zh-cn_topic_0123692049.html)](tag:hws_hk)\"。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * tagKey  **参数解释** 快照标签的key。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * tags  **参数解释** 快照标签的key/value对，例如[{\"key\":\"bbb\",\"value\":\"bbb\"}]。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * snapshotChainId  **参数解释** 快照链ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'volumeId' => 'getVolumeId',
            'availabilityZone' => 'getAvailabilityZone',
            'name' => 'getName',
            'status' => 'getStatus',
            'id' => 'getId',
            'snapshotType' => 'getSnapshotType',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'tagKey' => 'getTagKey',
            'tags' => 'getTags',
            'snapshotChainId' => 'getSnapshotChainId'
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
        $this->container['volumeId'] = isset($data['volumeId']) ? $data['volumeId'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['snapshotType'] = isset($data['snapshotType']) ? $data['snapshotType'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['tagKey'] = isset($data['tagKey']) ? $data['tagKey'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['snapshotChainId'] = isset($data['snapshotChainId']) ? $data['snapshotChainId'] : null;
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
    * Gets volumeId
    *  **参数解释** 快照对应的云硬盘ID。 可通过[查询所有云硬盘详情](evs_04_2006.xml)获取云硬盘ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return string|null
    */
    public function getVolumeId()
    {
        return $this->container['volumeId'];
    }

    /**
    * Sets volumeId
    *
    * @param string|null $volumeId **参数解释** 快照对应的云硬盘ID。 可通过[查询所有云硬盘详情](evs_04_2006.xml)获取云硬盘ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setVolumeId($volumeId)
    {
        $this->container['volumeId'] = $volumeId;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  **参数解释** 快照对应的云硬盘所在的可用区。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return string|null
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string|null $availabilityZone **参数解释** 快照对应的云硬盘所在的可用区。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释** 快照名称。 **约束限制** 不涉及。 **取值范围** 最大支持64个字符。 **默认取值** 不涉及。
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
    * @param string|null $name **参数解释** 快照名称。 **约束限制** 不涉及。 **取值范围** 最大支持64个字符。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释** 快照状态。 **约束限制** 最大支持255个字符。 **取值范围** [具体请参见[云硬盘快照状态](evs_04_0041.xml)。] **默认取值** 不涉及。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释** 快照状态。 **约束限制** 最大支持255个字符。 **取值范围** [具体请参见[云硬盘快照状态](evs_04_0041.xml)。] **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释** 快照ID。 可通过[查询云硬盘快照详情列表](evs_04_2021.xml)接口获取云硬盘快照ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释** 快照ID。 可通过[查询云硬盘快照详情列表](evs_04_2021.xml)接口获取云硬盘快照ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets snapshotType
    *  **参数解释** 快照来源。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return string|null
    */
    public function getSnapshotType()
    {
        return $this->container['snapshotType'];
    }

    /**
    * Sets snapshotType
    *
    * @param string|null $snapshotType **参数解释** 快照来源。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setSnapshotType($snapshotType)
    {
        $this->container['snapshotType'] = $snapshotType;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释** 快照的企业项目ID。  关于企业项目ID的获取及企业项目特性的详细信息，请参考：\"[[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)](tag:hws)[[企业管理用户指南](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/zh-cn_topic_0123692049.html)](tag:hws_hk)\"。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
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
    * @param string|null $enterpriseProjectId **参数解释** 快照的企业项目ID。  关于企业项目ID的获取及企业项目特性的详细信息，请参考：\"[[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)](tag:hws)[[企业管理用户指南](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/zh-cn_topic_0123692049.html)](tag:hws_hk)\"。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets tagKey
    *  **参数解释** 快照标签的key。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return string|null
    */
    public function getTagKey()
    {
        return $this->container['tagKey'];
    }

    /**
    * Sets tagKey
    *
    * @param string|null $tagKey **参数解释** 快照标签的key。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setTagKey($tagKey)
    {
        $this->container['tagKey'] = $tagKey;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释** 快照标签的key/value对，例如[{\"key\":\"bbb\",\"value\":\"bbb\"}]。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return string|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string|null $tags **参数解释** 快照标签的key/value对，例如[{\"key\":\"bbb\",\"value\":\"bbb\"}]。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets snapshotChainId
    *  **参数解释** 快照链ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return string|null
    */
    public function getSnapshotChainId()
    {
        return $this->container['snapshotChainId'];
    }

    /**
    * Sets snapshotChainId
    *
    * @param string|null $snapshotChainId **参数解释** 快照链ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setSnapshotChainId($snapshotChainId)
    {
        $this->container['snapshotChainId'] = $snapshotChainId;
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

