<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateStandardSnapshot implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateStandardSnapshot';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * volumeId  **参数解释** 云硬盘id。 可通过[查询所有云硬盘详情](evs_04_2006.xml)获取云硬盘ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * name  **参数解释** 云硬盘快照名称。 可通过[查询云硬盘快照详情列表](evs_04_2021.xml)接口获取云硬盘快照名称。 **约束限制** 不涉及。 **取值范围** 最大支持64个字符。 **默认取值** 不涉及。
    * description  **参数解释** 云硬盘快照描述。 **约束限制** 不涉及。 **取值范围** 最大支持85个字符。 **默认取值** 不涉及。
    * tags  **参数解释** 云硬盘快照的标签。 标签的key：String类型，最大长度36个字符。 由英文字母、数字、下划线、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。  标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * enterpriseProjectId  **参数解释** 云硬盘快照的企业项目id。  关于企业项目ID的获取及企业项目特性的详细信息，请参考：\"[[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)\"](tag:hws)[[企业管理用户指南](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/zh-cn_topic_0123692049.html)](tag:hws_hk)。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 0，表示default企业项目。
    * instantAccess  **参数解释** 是否开启极速可用功能。 **约束限制** 不涉及。 **取值范围** - true：表示开启。 - false：表示不开启。 **默认取值** 默认为false，表示不开启。
    * incremental  **参数解释** 是否创建增量快照。 **约束限制** 不涉及。 **取值范围** - true：创建增量快照。 - false：创建全量快照。 **默认取值** true
    * retentionDays  **参数解释** 设置快照的保留时间，单位为天。保留时间到期后快照会被自动释放。 **约束限制** 不涉及。 **取值范围** 1~65536。 **默认取值** 空，表示快照不会被自动释放。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'volumeId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'tags' => 'map[string,string]',
            'enterpriseProjectId' => 'string',
            'instantAccess' => 'bool',
            'incremental' => 'bool',
            'retentionDays' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * volumeId  **参数解释** 云硬盘id。 可通过[查询所有云硬盘详情](evs_04_2006.xml)获取云硬盘ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * name  **参数解释** 云硬盘快照名称。 可通过[查询云硬盘快照详情列表](evs_04_2021.xml)接口获取云硬盘快照名称。 **约束限制** 不涉及。 **取值范围** 最大支持64个字符。 **默认取值** 不涉及。
    * description  **参数解释** 云硬盘快照描述。 **约束限制** 不涉及。 **取值范围** 最大支持85个字符。 **默认取值** 不涉及。
    * tags  **参数解释** 云硬盘快照的标签。 标签的key：String类型，最大长度36个字符。 由英文字母、数字、下划线、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。  标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * enterpriseProjectId  **参数解释** 云硬盘快照的企业项目id。  关于企业项目ID的获取及企业项目特性的详细信息，请参考：\"[[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)\"](tag:hws)[[企业管理用户指南](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/zh-cn_topic_0123692049.html)](tag:hws_hk)。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 0，表示default企业项目。
    * instantAccess  **参数解释** 是否开启极速可用功能。 **约束限制** 不涉及。 **取值范围** - true：表示开启。 - false：表示不开启。 **默认取值** 默认为false，表示不开启。
    * incremental  **参数解释** 是否创建增量快照。 **约束限制** 不涉及。 **取值范围** - true：创建增量快照。 - false：创建全量快照。 **默认取值** true
    * retentionDays  **参数解释** 设置快照的保留时间，单位为天。保留时间到期后快照会被自动释放。 **约束限制** 不涉及。 **取值范围** 1~65536。 **默认取值** 空，表示快照不会被自动释放。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'volumeId' => null,
        'name' => null,
        'description' => null,
        'tags' => null,
        'enterpriseProjectId' => null,
        'instantAccess' => null,
        'incremental' => null,
        'retentionDays' => 'int32'
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
    * volumeId  **参数解释** 云硬盘id。 可通过[查询所有云硬盘详情](evs_04_2006.xml)获取云硬盘ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * name  **参数解释** 云硬盘快照名称。 可通过[查询云硬盘快照详情列表](evs_04_2021.xml)接口获取云硬盘快照名称。 **约束限制** 不涉及。 **取值范围** 最大支持64个字符。 **默认取值** 不涉及。
    * description  **参数解释** 云硬盘快照描述。 **约束限制** 不涉及。 **取值范围** 最大支持85个字符。 **默认取值** 不涉及。
    * tags  **参数解释** 云硬盘快照的标签。 标签的key：String类型，最大长度36个字符。 由英文字母、数字、下划线、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。  标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * enterpriseProjectId  **参数解释** 云硬盘快照的企业项目id。  关于企业项目ID的获取及企业项目特性的详细信息，请参考：\"[[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)\"](tag:hws)[[企业管理用户指南](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/zh-cn_topic_0123692049.html)](tag:hws_hk)。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 0，表示default企业项目。
    * instantAccess  **参数解释** 是否开启极速可用功能。 **约束限制** 不涉及。 **取值范围** - true：表示开启。 - false：表示不开启。 **默认取值** 默认为false，表示不开启。
    * incremental  **参数解释** 是否创建增量快照。 **约束限制** 不涉及。 **取值范围** - true：创建增量快照。 - false：创建全量快照。 **默认取值** true
    * retentionDays  **参数解释** 设置快照的保留时间，单位为天。保留时间到期后快照会被自动释放。 **约束限制** 不涉及。 **取值范围** 1~65536。 **默认取值** 空，表示快照不会被自动释放。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'volumeId' => 'volume_id',
            'name' => 'name',
            'description' => 'description',
            'tags' => 'tags',
            'enterpriseProjectId' => 'enterprise_project_id',
            'instantAccess' => 'instant_access',
            'incremental' => 'incremental',
            'retentionDays' => 'retention_days'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * volumeId  **参数解释** 云硬盘id。 可通过[查询所有云硬盘详情](evs_04_2006.xml)获取云硬盘ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * name  **参数解释** 云硬盘快照名称。 可通过[查询云硬盘快照详情列表](evs_04_2021.xml)接口获取云硬盘快照名称。 **约束限制** 不涉及。 **取值范围** 最大支持64个字符。 **默认取值** 不涉及。
    * description  **参数解释** 云硬盘快照描述。 **约束限制** 不涉及。 **取值范围** 最大支持85个字符。 **默认取值** 不涉及。
    * tags  **参数解释** 云硬盘快照的标签。 标签的key：String类型，最大长度36个字符。 由英文字母、数字、下划线、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。  标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * enterpriseProjectId  **参数解释** 云硬盘快照的企业项目id。  关于企业项目ID的获取及企业项目特性的详细信息，请参考：\"[[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)\"](tag:hws)[[企业管理用户指南](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/zh-cn_topic_0123692049.html)](tag:hws_hk)。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 0，表示default企业项目。
    * instantAccess  **参数解释** 是否开启极速可用功能。 **约束限制** 不涉及。 **取值范围** - true：表示开启。 - false：表示不开启。 **默认取值** 默认为false，表示不开启。
    * incremental  **参数解释** 是否创建增量快照。 **约束限制** 不涉及。 **取值范围** - true：创建增量快照。 - false：创建全量快照。 **默认取值** true
    * retentionDays  **参数解释** 设置快照的保留时间，单位为天。保留时间到期后快照会被自动释放。 **约束限制** 不涉及。 **取值范围** 1~65536。 **默认取值** 空，表示快照不会被自动释放。
    *
    * @var string[]
    */
    protected static $setters = [
            'volumeId' => 'setVolumeId',
            'name' => 'setName',
            'description' => 'setDescription',
            'tags' => 'setTags',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'instantAccess' => 'setInstantAccess',
            'incremental' => 'setIncremental',
            'retentionDays' => 'setRetentionDays'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * volumeId  **参数解释** 云硬盘id。 可通过[查询所有云硬盘详情](evs_04_2006.xml)获取云硬盘ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * name  **参数解释** 云硬盘快照名称。 可通过[查询云硬盘快照详情列表](evs_04_2021.xml)接口获取云硬盘快照名称。 **约束限制** 不涉及。 **取值范围** 最大支持64个字符。 **默认取值** 不涉及。
    * description  **参数解释** 云硬盘快照描述。 **约束限制** 不涉及。 **取值范围** 最大支持85个字符。 **默认取值** 不涉及。
    * tags  **参数解释** 云硬盘快照的标签。 标签的key：String类型，最大长度36个字符。 由英文字母、数字、下划线、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。  标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * enterpriseProjectId  **参数解释** 云硬盘快照的企业项目id。  关于企业项目ID的获取及企业项目特性的详细信息，请参考：\"[[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)\"](tag:hws)[[企业管理用户指南](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/zh-cn_topic_0123692049.html)](tag:hws_hk)。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 0，表示default企业项目。
    * instantAccess  **参数解释** 是否开启极速可用功能。 **约束限制** 不涉及。 **取值范围** - true：表示开启。 - false：表示不开启。 **默认取值** 默认为false，表示不开启。
    * incremental  **参数解释** 是否创建增量快照。 **约束限制** 不涉及。 **取值范围** - true：创建增量快照。 - false：创建全量快照。 **默认取值** true
    * retentionDays  **参数解释** 设置快照的保留时间，单位为天。保留时间到期后快照会被自动释放。 **约束限制** 不涉及。 **取值范围** 1~65536。 **默认取值** 空，表示快照不会被自动释放。
    *
    * @var string[]
    */
    protected static $getters = [
            'volumeId' => 'getVolumeId',
            'name' => 'getName',
            'description' => 'getDescription',
            'tags' => 'getTags',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'instantAccess' => 'getInstantAccess',
            'incremental' => 'getIncremental',
            'retentionDays' => 'getRetentionDays'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['instantAccess'] = isset($data['instantAccess']) ? $data['instantAccess'] : null;
        $this->container['incremental'] = isset($data['incremental']) ? $data['incremental'] : null;
        $this->container['retentionDays'] = isset($data['retentionDays']) ? $data['retentionDays'] : null;
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
    *  **参数解释** 云硬盘id。 可通过[查询所有云硬盘详情](evs_04_2006.xml)获取云硬盘ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
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
    * @param string|null $volumeId **参数解释** 云硬盘id。 可通过[查询所有云硬盘详情](evs_04_2006.xml)获取云硬盘ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setVolumeId($volumeId)
    {
        $this->container['volumeId'] = $volumeId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释** 云硬盘快照名称。 可通过[查询云硬盘快照详情列表](evs_04_2021.xml)接口获取云硬盘快照名称。 **约束限制** 不涉及。 **取值范围** 最大支持64个字符。 **默认取值** 不涉及。
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
    * @param string|null $name **参数解释** 云硬盘快照名称。 可通过[查询云硬盘快照详情列表](evs_04_2021.xml)接口获取云硬盘快照名称。 **约束限制** 不涉及。 **取值范围** 最大支持64个字符。 **默认取值** 不涉及。
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
    *  **参数解释** 云硬盘快照描述。 **约束限制** 不涉及。 **取值范围** 最大支持85个字符。 **默认取值** 不涉及。
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
    * @param string|null $description **参数解释** 云硬盘快照描述。 **约束限制** 不涉及。 **取值范围** 最大支持85个字符。 **默认取值** 不涉及。
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
    *  **参数解释** 云硬盘快照的标签。 标签的key：String类型，最大长度36个字符。 由英文字母、数字、下划线、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。  标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
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
    * @param map[string,string]|null $tags **参数解释** 云硬盘快照的标签。 标签的key：String类型，最大长度36个字符。 由英文字母、数字、下划线、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。  标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
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
    *  **参数解释** 云硬盘快照的企业项目id。  关于企业项目ID的获取及企业项目特性的详细信息，请参考：\"[[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)\"](tag:hws)[[企业管理用户指南](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/zh-cn_topic_0123692049.html)](tag:hws_hk)。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 0，表示default企业项目。
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
    * @param string|null $enterpriseProjectId **参数解释** 云硬盘快照的企业项目id。  关于企业项目ID的获取及企业项目特性的详细信息，请参考：\"[[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)\"](tag:hws)[[企业管理用户指南](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/zh-cn_topic_0123692049.html)](tag:hws_hk)。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 0，表示default企业项目。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets instantAccess
    *  **参数解释** 是否开启极速可用功能。 **约束限制** 不涉及。 **取值范围** - true：表示开启。 - false：表示不开启。 **默认取值** 默认为false，表示不开启。
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
    * @param bool|null $instantAccess **参数解释** 是否开启极速可用功能。 **约束限制** 不涉及。 **取值范围** - true：表示开启。 - false：表示不开启。 **默认取值** 默认为false，表示不开启。
    *
    * @return $this
    */
    public function setInstantAccess($instantAccess)
    {
        $this->container['instantAccess'] = $instantAccess;
        return $this;
    }

    /**
    * Gets incremental
    *  **参数解释** 是否创建增量快照。 **约束限制** 不涉及。 **取值范围** - true：创建增量快照。 - false：创建全量快照。 **默认取值** true
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
    * @param bool|null $incremental **参数解释** 是否创建增量快照。 **约束限制** 不涉及。 **取值范围** - true：创建增量快照。 - false：创建全量快照。 **默认取值** true
    *
    * @return $this
    */
    public function setIncremental($incremental)
    {
        $this->container['incremental'] = $incremental;
        return $this;
    }

    /**
    * Gets retentionDays
    *  **参数解释** 设置快照的保留时间，单位为天。保留时间到期后快照会被自动释放。 **约束限制** 不涉及。 **取值范围** 1~65536。 **默认取值** 空，表示快照不会被自动释放。
    *
    * @return int|null
    */
    public function getRetentionDays()
    {
        return $this->container['retentionDays'];
    }

    /**
    * Sets retentionDays
    *
    * @param int|null $retentionDays **参数解释** 设置快照的保留时间，单位为天。保留时间到期后快照会被自动释放。 **约束限制** 不涉及。 **取值范围** 1~65536。 **默认取值** 空，表示快照不会被自动释放。
    *
    * @return $this
    */
    public function setRetentionDays($retentionDays)
    {
        $this->container['retentionDays'] = $retentionDays;
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

