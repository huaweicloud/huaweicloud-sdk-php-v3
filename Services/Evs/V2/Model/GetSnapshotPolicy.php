<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetSnapshotPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetSnapshotPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  自动快照策略ID。
    * name  自动快照策略名称。最大支持255个字节。  最小长度：0  最大长度：255
    * repeatWeekdays  自动快照的重复日期，单位为天，周期为星期。取值范围为 1~7，如 1 表示周一。  当一星期内需要创建多次自动快照时，可以传入多个时间点：  最多传入 7 个时间点。 多个时间点用一个格式类似\"1\", \"2\", … \"7\"的 JSON 数组表示，时间点之间用半角逗号（,）隔开。
    * repeatIntervalDays  自动快照的间隔日期，单位为天，取值范围为 1~30,如1表示每天。
    * timePoints  自动快照的创建时间点。使用 UTC +8 时间，单位为小时。取值范围为 0~23，代表 00:00 至 23:00 共 24 个时间点，如 1 表示 01:00。  当一天内需要创建多次自动快照时，可以传入多个时间点：  最多传入 24 个时间点。 多个时间点用一个格式类似\"0\", \"1\", … \"23\"的 JSON 数组表示，时间点之间用半角逗号（,）隔开。
    * retentionDays  设置快照的保留时间，单位为天。保留时间到期后快照会被自动释放，取值范围：1~65536。 缺省值：-1，表示快照持续保留。
    * createdAt  自动快照策略的创建时间。
    * updatedAt  自动快照策略的更新时间。
    * tags  设置自动快照策略的标签。
    * enterpriseProjectId  企业项目id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'repeatWeekdays' => 'string[]',
            'repeatIntervalDays' => 'int',
            'timePoints' => 'string[]',
            'retentionDays' => 'int',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'tags' => 'map[string,string]',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  自动快照策略ID。
    * name  自动快照策略名称。最大支持255个字节。  最小长度：0  最大长度：255
    * repeatWeekdays  自动快照的重复日期，单位为天，周期为星期。取值范围为 1~7，如 1 表示周一。  当一星期内需要创建多次自动快照时，可以传入多个时间点：  最多传入 7 个时间点。 多个时间点用一个格式类似\"1\", \"2\", … \"7\"的 JSON 数组表示，时间点之间用半角逗号（,）隔开。
    * repeatIntervalDays  自动快照的间隔日期，单位为天，取值范围为 1~30,如1表示每天。
    * timePoints  自动快照的创建时间点。使用 UTC +8 时间，单位为小时。取值范围为 0~23，代表 00:00 至 23:00 共 24 个时间点，如 1 表示 01:00。  当一天内需要创建多次自动快照时，可以传入多个时间点：  最多传入 24 个时间点。 多个时间点用一个格式类似\"0\", \"1\", … \"23\"的 JSON 数组表示，时间点之间用半角逗号（,）隔开。
    * retentionDays  设置快照的保留时间，单位为天。保留时间到期后快照会被自动释放，取值范围：1~65536。 缺省值：-1，表示快照持续保留。
    * createdAt  自动快照策略的创建时间。
    * updatedAt  自动快照策略的更新时间。
    * tags  设置自动快照策略的标签。
    * enterpriseProjectId  企业项目id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'repeatWeekdays' => null,
        'repeatIntervalDays' => 'int32',
        'timePoints' => null,
        'retentionDays' => 'int32',
        'createdAt' => null,
        'updatedAt' => null,
        'tags' => null,
        'enterpriseProjectId' => null
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
    * id  自动快照策略ID。
    * name  自动快照策略名称。最大支持255个字节。  最小长度：0  最大长度：255
    * repeatWeekdays  自动快照的重复日期，单位为天，周期为星期。取值范围为 1~7，如 1 表示周一。  当一星期内需要创建多次自动快照时，可以传入多个时间点：  最多传入 7 个时间点。 多个时间点用一个格式类似\"1\", \"2\", … \"7\"的 JSON 数组表示，时间点之间用半角逗号（,）隔开。
    * repeatIntervalDays  自动快照的间隔日期，单位为天，取值范围为 1~30,如1表示每天。
    * timePoints  自动快照的创建时间点。使用 UTC +8 时间，单位为小时。取值范围为 0~23，代表 00:00 至 23:00 共 24 个时间点，如 1 表示 01:00。  当一天内需要创建多次自动快照时，可以传入多个时间点：  最多传入 24 个时间点。 多个时间点用一个格式类似\"0\", \"1\", … \"23\"的 JSON 数组表示，时间点之间用半角逗号（,）隔开。
    * retentionDays  设置快照的保留时间，单位为天。保留时间到期后快照会被自动释放，取值范围：1~65536。 缺省值：-1，表示快照持续保留。
    * createdAt  自动快照策略的创建时间。
    * updatedAt  自动快照策略的更新时间。
    * tags  设置自动快照策略的标签。
    * enterpriseProjectId  企业项目id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'repeatWeekdays' => 'repeat_weekdays',
            'repeatIntervalDays' => 'repeat_interval_days',
            'timePoints' => 'time_points',
            'retentionDays' => 'retention_days',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'tags' => 'tags',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  自动快照策略ID。
    * name  自动快照策略名称。最大支持255个字节。  最小长度：0  最大长度：255
    * repeatWeekdays  自动快照的重复日期，单位为天，周期为星期。取值范围为 1~7，如 1 表示周一。  当一星期内需要创建多次自动快照时，可以传入多个时间点：  最多传入 7 个时间点。 多个时间点用一个格式类似\"1\", \"2\", … \"7\"的 JSON 数组表示，时间点之间用半角逗号（,）隔开。
    * repeatIntervalDays  自动快照的间隔日期，单位为天，取值范围为 1~30,如1表示每天。
    * timePoints  自动快照的创建时间点。使用 UTC +8 时间，单位为小时。取值范围为 0~23，代表 00:00 至 23:00 共 24 个时间点，如 1 表示 01:00。  当一天内需要创建多次自动快照时，可以传入多个时间点：  最多传入 24 个时间点。 多个时间点用一个格式类似\"0\", \"1\", … \"23\"的 JSON 数组表示，时间点之间用半角逗号（,）隔开。
    * retentionDays  设置快照的保留时间，单位为天。保留时间到期后快照会被自动释放，取值范围：1~65536。 缺省值：-1，表示快照持续保留。
    * createdAt  自动快照策略的创建时间。
    * updatedAt  自动快照策略的更新时间。
    * tags  设置自动快照策略的标签。
    * enterpriseProjectId  企业项目id。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'repeatWeekdays' => 'setRepeatWeekdays',
            'repeatIntervalDays' => 'setRepeatIntervalDays',
            'timePoints' => 'setTimePoints',
            'retentionDays' => 'setRetentionDays',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'tags' => 'setTags',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  自动快照策略ID。
    * name  自动快照策略名称。最大支持255个字节。  最小长度：0  最大长度：255
    * repeatWeekdays  自动快照的重复日期，单位为天，周期为星期。取值范围为 1~7，如 1 表示周一。  当一星期内需要创建多次自动快照时，可以传入多个时间点：  最多传入 7 个时间点。 多个时间点用一个格式类似\"1\", \"2\", … \"7\"的 JSON 数组表示，时间点之间用半角逗号（,）隔开。
    * repeatIntervalDays  自动快照的间隔日期，单位为天，取值范围为 1~30,如1表示每天。
    * timePoints  自动快照的创建时间点。使用 UTC +8 时间，单位为小时。取值范围为 0~23，代表 00:00 至 23:00 共 24 个时间点，如 1 表示 01:00。  当一天内需要创建多次自动快照时，可以传入多个时间点：  最多传入 24 个时间点。 多个时间点用一个格式类似\"0\", \"1\", … \"23\"的 JSON 数组表示，时间点之间用半角逗号（,）隔开。
    * retentionDays  设置快照的保留时间，单位为天。保留时间到期后快照会被自动释放，取值范围：1~65536。 缺省值：-1，表示快照持续保留。
    * createdAt  自动快照策略的创建时间。
    * updatedAt  自动快照策略的更新时间。
    * tags  设置自动快照策略的标签。
    * enterpriseProjectId  企业项目id。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'repeatWeekdays' => 'getRepeatWeekdays',
            'repeatIntervalDays' => 'getRepeatIntervalDays',
            'timePoints' => 'getTimePoints',
            'retentionDays' => 'getRetentionDays',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'tags' => 'getTags',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['repeatWeekdays'] = isset($data['repeatWeekdays']) ? $data['repeatWeekdays'] : null;
        $this->container['repeatIntervalDays'] = isset($data['repeatIntervalDays']) ? $data['repeatIntervalDays'] : null;
        $this->container['timePoints'] = isset($data['timePoints']) ? $data['timePoints'] : null;
        $this->container['retentionDays'] = isset($data['retentionDays']) ? $data['retentionDays'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['repeatWeekdays'] === null) {
            $invalidProperties[] = "'repeatWeekdays' can't be null";
        }
        if ($this->container['repeatIntervalDays'] === null) {
            $invalidProperties[] = "'repeatIntervalDays' can't be null";
        }
        if ($this->container['timePoints'] === null) {
            $invalidProperties[] = "'timePoints' can't be null";
        }
        if ($this->container['retentionDays'] === null) {
            $invalidProperties[] = "'retentionDays' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
        }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
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
    * Gets id
    *  自动快照策略ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 自动快照策略ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  自动快照策略名称。最大支持255个字节。  最小长度：0  最大长度：255
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 自动快照策略名称。最大支持255个字节。  最小长度：0  最大长度：255
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets repeatWeekdays
    *  自动快照的重复日期，单位为天，周期为星期。取值范围为 1~7，如 1 表示周一。  当一星期内需要创建多次自动快照时，可以传入多个时间点：  最多传入 7 个时间点。 多个时间点用一个格式类似\"1\", \"2\", … \"7\"的 JSON 数组表示，时间点之间用半角逗号（,）隔开。
    *
    * @return string[]
    */
    public function getRepeatWeekdays()
    {
        return $this->container['repeatWeekdays'];
    }

    /**
    * Sets repeatWeekdays
    *
    * @param string[] $repeatWeekdays 自动快照的重复日期，单位为天，周期为星期。取值范围为 1~7，如 1 表示周一。  当一星期内需要创建多次自动快照时，可以传入多个时间点：  最多传入 7 个时间点。 多个时间点用一个格式类似\"1\", \"2\", … \"7\"的 JSON 数组表示，时间点之间用半角逗号（,）隔开。
    *
    * @return $this
    */
    public function setRepeatWeekdays($repeatWeekdays)
    {
        $this->container['repeatWeekdays'] = $repeatWeekdays;
        return $this;
    }

    /**
    * Gets repeatIntervalDays
    *  自动快照的间隔日期，单位为天，取值范围为 1~30,如1表示每天。
    *
    * @return int
    */
    public function getRepeatIntervalDays()
    {
        return $this->container['repeatIntervalDays'];
    }

    /**
    * Sets repeatIntervalDays
    *
    * @param int $repeatIntervalDays 自动快照的间隔日期，单位为天，取值范围为 1~30,如1表示每天。
    *
    * @return $this
    */
    public function setRepeatIntervalDays($repeatIntervalDays)
    {
        $this->container['repeatIntervalDays'] = $repeatIntervalDays;
        return $this;
    }

    /**
    * Gets timePoints
    *  自动快照的创建时间点。使用 UTC +8 时间，单位为小时。取值范围为 0~23，代表 00:00 至 23:00 共 24 个时间点，如 1 表示 01:00。  当一天内需要创建多次自动快照时，可以传入多个时间点：  最多传入 24 个时间点。 多个时间点用一个格式类似\"0\", \"1\", … \"23\"的 JSON 数组表示，时间点之间用半角逗号（,）隔开。
    *
    * @return string[]
    */
    public function getTimePoints()
    {
        return $this->container['timePoints'];
    }

    /**
    * Sets timePoints
    *
    * @param string[] $timePoints 自动快照的创建时间点。使用 UTC +8 时间，单位为小时。取值范围为 0~23，代表 00:00 至 23:00 共 24 个时间点，如 1 表示 01:00。  当一天内需要创建多次自动快照时，可以传入多个时间点：  最多传入 24 个时间点。 多个时间点用一个格式类似\"0\", \"1\", … \"23\"的 JSON 数组表示，时间点之间用半角逗号（,）隔开。
    *
    * @return $this
    */
    public function setTimePoints($timePoints)
    {
        $this->container['timePoints'] = $timePoints;
        return $this;
    }

    /**
    * Gets retentionDays
    *  设置快照的保留时间，单位为天。保留时间到期后快照会被自动释放，取值范围：1~65536。 缺省值：-1，表示快照持续保留。
    *
    * @return int
    */
    public function getRetentionDays()
    {
        return $this->container['retentionDays'];
    }

    /**
    * Sets retentionDays
    *
    * @param int $retentionDays 设置快照的保留时间，单位为天。保留时间到期后快照会被自动释放，取值范围：1~65536。 缺省值：-1，表示快照持续保留。
    *
    * @return $this
    */
    public function setRetentionDays($retentionDays)
    {
        $this->container['retentionDays'] = $retentionDays;
        return $this;
    }

    /**
    * Gets createdAt
    *  自动快照策略的创建时间。
    *
    * @return string
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string $createdAt 自动快照策略的创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  自动快照策略的更新时间。
    *
    * @return string
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string $updatedAt 自动快照策略的更新时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets tags
    *  设置自动快照策略的标签。
    *
    * @return map[string,string]
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param map[string,string] $tags 设置自动快照策略的标签。
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
    *  企业项目id。
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId 企业项目id。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

