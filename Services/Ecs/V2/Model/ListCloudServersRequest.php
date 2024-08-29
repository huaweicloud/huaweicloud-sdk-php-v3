<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCloudServersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCloudServersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  云服务器ID，格式为UUID，匹配规则为精确匹配。
    * name  云服务器名称，匹配规则为模糊匹配。
    * status  云服务器状态。  取值范围：  ACTIVE， BUILD，DELETED，ERROR，HARD_REBOOT，MIGRATING，REBOOT，RESIZE，REVERT_RESIZE，SHELVED，SHELVED_OFFLOADED，SHUTOFF，UNKNOWN，VERIFY_RESIZE  弹性云服务器状态说明请参考[云服务器状态](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)
    * inRecycleBin  云服务器是否处于回收站中
    * spodId  共池裸机按整机柜发放的同一批次的批创id。
    * flavorName  云服务器规格名称。
    * imageId  镜像ID。
    * metadata  元数据过滤，支持key=value过滤。
    * metadataKey  元数据key过滤。
    * tags  查询tag字段中包含该值的云服务器。
    * notTags  查询tag字段中不包含该值的云服务器
    * availabilityZone  云服务器所在的AZ，匹配规则为模糊匹配。
    * availabilityZoneEq  云服务器所在的AZ，匹配规则为精确匹配。
    * chargingMode  云服务器的计费类型。
    * keyName  云服务器使用的密钥对名称。
    * launchedSince  过滤在launched_since时间之后启动的云服务器。格式为ISO8601时间格式，例如：2013-06-09T06:42:18Z。
    * enterpriseProjectId  过滤绑定某个企业项目的云服务器。 若需要查询当前用户所有企业项目绑定的云服务，请传参all_granted_eps。
    * expectFields  控制查询输出的字段。在默认字段的基础上选择是否查询，有管理员字段。
    * limit  查询返回VM数量限制。 limit 默认为10，最大为100。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'status' => 'string',
            'inRecycleBin' => 'bool',
            'spodId' => 'string',
            'flavorName' => 'string',
            'imageId' => 'string',
            'metadata' => 'string',
            'metadataKey' => 'string',
            'tags' => 'string',
            'notTags' => 'string',
            'availabilityZone' => 'string',
            'availabilityZoneEq' => 'string',
            'chargingMode' => 'string',
            'keyName' => 'string',
            'launchedSince' => 'string',
            'enterpriseProjectId' => 'string',
            'expectFields' => 'string[]',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  云服务器ID，格式为UUID，匹配规则为精确匹配。
    * name  云服务器名称，匹配规则为模糊匹配。
    * status  云服务器状态。  取值范围：  ACTIVE， BUILD，DELETED，ERROR，HARD_REBOOT，MIGRATING，REBOOT，RESIZE，REVERT_RESIZE，SHELVED，SHELVED_OFFLOADED，SHUTOFF，UNKNOWN，VERIFY_RESIZE  弹性云服务器状态说明请参考[云服务器状态](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)
    * inRecycleBin  云服务器是否处于回收站中
    * spodId  共池裸机按整机柜发放的同一批次的批创id。
    * flavorName  云服务器规格名称。
    * imageId  镜像ID。
    * metadata  元数据过滤，支持key=value过滤。
    * metadataKey  元数据key过滤。
    * tags  查询tag字段中包含该值的云服务器。
    * notTags  查询tag字段中不包含该值的云服务器
    * availabilityZone  云服务器所在的AZ，匹配规则为模糊匹配。
    * availabilityZoneEq  云服务器所在的AZ，匹配规则为精确匹配。
    * chargingMode  云服务器的计费类型。
    * keyName  云服务器使用的密钥对名称。
    * launchedSince  过滤在launched_since时间之后启动的云服务器。格式为ISO8601时间格式，例如：2013-06-09T06:42:18Z。
    * enterpriseProjectId  过滤绑定某个企业项目的云服务器。 若需要查询当前用户所有企业项目绑定的云服务，请传参all_granted_eps。
    * expectFields  控制查询输出的字段。在默认字段的基础上选择是否查询，有管理员字段。
    * limit  查询返回VM数量限制。 limit 默认为10，最大为100。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
        'inRecycleBin' => null,
        'spodId' => null,
        'flavorName' => null,
        'imageId' => null,
        'metadata' => null,
        'metadataKey' => null,
        'tags' => null,
        'notTags' => null,
        'availabilityZone' => null,
        'availabilityZoneEq' => null,
        'chargingMode' => null,
        'keyName' => null,
        'launchedSince' => null,
        'enterpriseProjectId' => null,
        'expectFields' => null,
        'limit' => null
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
    * id  云服务器ID，格式为UUID，匹配规则为精确匹配。
    * name  云服务器名称，匹配规则为模糊匹配。
    * status  云服务器状态。  取值范围：  ACTIVE， BUILD，DELETED，ERROR，HARD_REBOOT，MIGRATING，REBOOT，RESIZE，REVERT_RESIZE，SHELVED，SHELVED_OFFLOADED，SHUTOFF，UNKNOWN，VERIFY_RESIZE  弹性云服务器状态说明请参考[云服务器状态](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)
    * inRecycleBin  云服务器是否处于回收站中
    * spodId  共池裸机按整机柜发放的同一批次的批创id。
    * flavorName  云服务器规格名称。
    * imageId  镜像ID。
    * metadata  元数据过滤，支持key=value过滤。
    * metadataKey  元数据key过滤。
    * tags  查询tag字段中包含该值的云服务器。
    * notTags  查询tag字段中不包含该值的云服务器
    * availabilityZone  云服务器所在的AZ，匹配规则为模糊匹配。
    * availabilityZoneEq  云服务器所在的AZ，匹配规则为精确匹配。
    * chargingMode  云服务器的计费类型。
    * keyName  云服务器使用的密钥对名称。
    * launchedSince  过滤在launched_since时间之后启动的云服务器。格式为ISO8601时间格式，例如：2013-06-09T06:42:18Z。
    * enterpriseProjectId  过滤绑定某个企业项目的云服务器。 若需要查询当前用户所有企业项目绑定的云服务，请传参all_granted_eps。
    * expectFields  控制查询输出的字段。在默认字段的基础上选择是否查询，有管理员字段。
    * limit  查询返回VM数量限制。 limit 默认为10，最大为100。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'inRecycleBin' => 'in_recycle_bin',
            'spodId' => 'spod_id',
            'flavorName' => 'flavor_name',
            'imageId' => 'image_id',
            'metadata' => 'metadata',
            'metadataKey' => 'metadata-key',
            'tags' => 'tags',
            'notTags' => 'not-tags',
            'availabilityZone' => 'availability_zone',
            'availabilityZoneEq' => 'availability_zone_eq',
            'chargingMode' => 'charging_mode',
            'keyName' => 'key_name',
            'launchedSince' => 'launched_since',
            'enterpriseProjectId' => 'enterprise_project_id',
            'expectFields' => 'expect-fields',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  云服务器ID，格式为UUID，匹配规则为精确匹配。
    * name  云服务器名称，匹配规则为模糊匹配。
    * status  云服务器状态。  取值范围：  ACTIVE， BUILD，DELETED，ERROR，HARD_REBOOT，MIGRATING，REBOOT，RESIZE，REVERT_RESIZE，SHELVED，SHELVED_OFFLOADED，SHUTOFF，UNKNOWN，VERIFY_RESIZE  弹性云服务器状态说明请参考[云服务器状态](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)
    * inRecycleBin  云服务器是否处于回收站中
    * spodId  共池裸机按整机柜发放的同一批次的批创id。
    * flavorName  云服务器规格名称。
    * imageId  镜像ID。
    * metadata  元数据过滤，支持key=value过滤。
    * metadataKey  元数据key过滤。
    * tags  查询tag字段中包含该值的云服务器。
    * notTags  查询tag字段中不包含该值的云服务器
    * availabilityZone  云服务器所在的AZ，匹配规则为模糊匹配。
    * availabilityZoneEq  云服务器所在的AZ，匹配规则为精确匹配。
    * chargingMode  云服务器的计费类型。
    * keyName  云服务器使用的密钥对名称。
    * launchedSince  过滤在launched_since时间之后启动的云服务器。格式为ISO8601时间格式，例如：2013-06-09T06:42:18Z。
    * enterpriseProjectId  过滤绑定某个企业项目的云服务器。 若需要查询当前用户所有企业项目绑定的云服务，请传参all_granted_eps。
    * expectFields  控制查询输出的字段。在默认字段的基础上选择是否查询，有管理员字段。
    * limit  查询返回VM数量限制。 limit 默认为10，最大为100。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'inRecycleBin' => 'setInRecycleBin',
            'spodId' => 'setSpodId',
            'flavorName' => 'setFlavorName',
            'imageId' => 'setImageId',
            'metadata' => 'setMetadata',
            'metadataKey' => 'setMetadataKey',
            'tags' => 'setTags',
            'notTags' => 'setNotTags',
            'availabilityZone' => 'setAvailabilityZone',
            'availabilityZoneEq' => 'setAvailabilityZoneEq',
            'chargingMode' => 'setChargingMode',
            'keyName' => 'setKeyName',
            'launchedSince' => 'setLaunchedSince',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'expectFields' => 'setExpectFields',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  云服务器ID，格式为UUID，匹配规则为精确匹配。
    * name  云服务器名称，匹配规则为模糊匹配。
    * status  云服务器状态。  取值范围：  ACTIVE， BUILD，DELETED，ERROR，HARD_REBOOT，MIGRATING，REBOOT，RESIZE，REVERT_RESIZE，SHELVED，SHELVED_OFFLOADED，SHUTOFF，UNKNOWN，VERIFY_RESIZE  弹性云服务器状态说明请参考[云服务器状态](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)
    * inRecycleBin  云服务器是否处于回收站中
    * spodId  共池裸机按整机柜发放的同一批次的批创id。
    * flavorName  云服务器规格名称。
    * imageId  镜像ID。
    * metadata  元数据过滤，支持key=value过滤。
    * metadataKey  元数据key过滤。
    * tags  查询tag字段中包含该值的云服务器。
    * notTags  查询tag字段中不包含该值的云服务器
    * availabilityZone  云服务器所在的AZ，匹配规则为模糊匹配。
    * availabilityZoneEq  云服务器所在的AZ，匹配规则为精确匹配。
    * chargingMode  云服务器的计费类型。
    * keyName  云服务器使用的密钥对名称。
    * launchedSince  过滤在launched_since时间之后启动的云服务器。格式为ISO8601时间格式，例如：2013-06-09T06:42:18Z。
    * enterpriseProjectId  过滤绑定某个企业项目的云服务器。 若需要查询当前用户所有企业项目绑定的云服务，请传参all_granted_eps。
    * expectFields  控制查询输出的字段。在默认字段的基础上选择是否查询，有管理员字段。
    * limit  查询返回VM数量限制。 limit 默认为10，最大为100。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'inRecycleBin' => 'getInRecycleBin',
            'spodId' => 'getSpodId',
            'flavorName' => 'getFlavorName',
            'imageId' => 'getImageId',
            'metadata' => 'getMetadata',
            'metadataKey' => 'getMetadataKey',
            'tags' => 'getTags',
            'notTags' => 'getNotTags',
            'availabilityZone' => 'getAvailabilityZone',
            'availabilityZoneEq' => 'getAvailabilityZoneEq',
            'chargingMode' => 'getChargingMode',
            'keyName' => 'getKeyName',
            'launchedSince' => 'getLaunchedSince',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'expectFields' => 'getExpectFields',
            'limit' => 'getLimit'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['inRecycleBin'] = isset($data['inRecycleBin']) ? $data['inRecycleBin'] : null;
        $this->container['spodId'] = isset($data['spodId']) ? $data['spodId'] : null;
        $this->container['flavorName'] = isset($data['flavorName']) ? $data['flavorName'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['metadataKey'] = isset($data['metadataKey']) ? $data['metadataKey'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['notTags'] = isset($data['notTags']) ? $data['notTags'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['availabilityZoneEq'] = isset($data['availabilityZoneEq']) ? $data['availabilityZoneEq'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['keyName'] = isset($data['keyName']) ? $data['keyName'] : null;
        $this->container['launchedSince'] = isset($data['launchedSince']) ? $data['launchedSince'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['expectFields'] = isset($data['expectFields']) ? $data['expectFields'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
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
    *  云服务器ID，格式为UUID，匹配规则为精确匹配。
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
    * @param string|null $id 云服务器ID，格式为UUID，匹配规则为精确匹配。
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
    *  云服务器名称，匹配规则为模糊匹配。
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
    * @param string|null $name 云服务器名称，匹配规则为模糊匹配。
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
    *  云服务器状态。  取值范围：  ACTIVE， BUILD，DELETED，ERROR，HARD_REBOOT，MIGRATING，REBOOT，RESIZE，REVERT_RESIZE，SHELVED，SHELVED_OFFLOADED，SHUTOFF，UNKNOWN，VERIFY_RESIZE  弹性云服务器状态说明请参考[云服务器状态](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)
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
    * @param string|null $status 云服务器状态。  取值范围：  ACTIVE， BUILD，DELETED，ERROR，HARD_REBOOT，MIGRATING，REBOOT，RESIZE，REVERT_RESIZE，SHELVED，SHELVED_OFFLOADED，SHUTOFF，UNKNOWN，VERIFY_RESIZE  弹性云服务器状态说明请参考[云服务器状态](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets inRecycleBin
    *  云服务器是否处于回收站中
    *
    * @return bool|null
    */
    public function getInRecycleBin()
    {
        return $this->container['inRecycleBin'];
    }

    /**
    * Sets inRecycleBin
    *
    * @param bool|null $inRecycleBin 云服务器是否处于回收站中
    *
    * @return $this
    */
    public function setInRecycleBin($inRecycleBin)
    {
        $this->container['inRecycleBin'] = $inRecycleBin;
        return $this;
    }

    /**
    * Gets spodId
    *  共池裸机按整机柜发放的同一批次的批创id。
    *
    * @return string|null
    */
    public function getSpodId()
    {
        return $this->container['spodId'];
    }

    /**
    * Sets spodId
    *
    * @param string|null $spodId 共池裸机按整机柜发放的同一批次的批创id。
    *
    * @return $this
    */
    public function setSpodId($spodId)
    {
        $this->container['spodId'] = $spodId;
        return $this;
    }

    /**
    * Gets flavorName
    *  云服务器规格名称。
    *
    * @return string|null
    */
    public function getFlavorName()
    {
        return $this->container['flavorName'];
    }

    /**
    * Sets flavorName
    *
    * @param string|null $flavorName 云服务器规格名称。
    *
    * @return $this
    */
    public function setFlavorName($flavorName)
    {
        $this->container['flavorName'] = $flavorName;
        return $this;
    }

    /**
    * Gets imageId
    *  镜像ID。
    *
    * @return string|null
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string|null $imageId 镜像ID。
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets metadata
    *  元数据过滤，支持key=value过滤。
    *
    * @return string|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param string|null $metadata 元数据过滤，支持key=value过滤。
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets metadataKey
    *  元数据key过滤。
    *
    * @return string|null
    */
    public function getMetadataKey()
    {
        return $this->container['metadataKey'];
    }

    /**
    * Sets metadataKey
    *
    * @param string|null $metadataKey 元数据key过滤。
    *
    * @return $this
    */
    public function setMetadataKey($metadataKey)
    {
        $this->container['metadataKey'] = $metadataKey;
        return $this;
    }

    /**
    * Gets tags
    *  查询tag字段中包含该值的云服务器。
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
    * @param string|null $tags 查询tag字段中包含该值的云服务器。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets notTags
    *  查询tag字段中不包含该值的云服务器
    *
    * @return string|null
    */
    public function getNotTags()
    {
        return $this->container['notTags'];
    }

    /**
    * Sets notTags
    *
    * @param string|null $notTags 查询tag字段中不包含该值的云服务器
    *
    * @return $this
    */
    public function setNotTags($notTags)
    {
        $this->container['notTags'] = $notTags;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  云服务器所在的AZ，匹配规则为模糊匹配。
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
    * @param string|null $availabilityZone 云服务器所在的AZ，匹配规则为模糊匹配。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets availabilityZoneEq
    *  云服务器所在的AZ，匹配规则为精确匹配。
    *
    * @return string|null
    */
    public function getAvailabilityZoneEq()
    {
        return $this->container['availabilityZoneEq'];
    }

    /**
    * Sets availabilityZoneEq
    *
    * @param string|null $availabilityZoneEq 云服务器所在的AZ，匹配规则为精确匹配。
    *
    * @return $this
    */
    public function setAvailabilityZoneEq($availabilityZoneEq)
    {
        $this->container['availabilityZoneEq'] = $availabilityZoneEq;
        return $this;
    }

    /**
    * Gets chargingMode
    *  云服务器的计费类型。
    *
    * @return string|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string|null $chargingMode 云服务器的计费类型。
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets keyName
    *  云服务器使用的密钥对名称。
    *
    * @return string|null
    */
    public function getKeyName()
    {
        return $this->container['keyName'];
    }

    /**
    * Sets keyName
    *
    * @param string|null $keyName 云服务器使用的密钥对名称。
    *
    * @return $this
    */
    public function setKeyName($keyName)
    {
        $this->container['keyName'] = $keyName;
        return $this;
    }

    /**
    * Gets launchedSince
    *  过滤在launched_since时间之后启动的云服务器。格式为ISO8601时间格式，例如：2013-06-09T06:42:18Z。
    *
    * @return string|null
    */
    public function getLaunchedSince()
    {
        return $this->container['launchedSince'];
    }

    /**
    * Sets launchedSince
    *
    * @param string|null $launchedSince 过滤在launched_since时间之后启动的云服务器。格式为ISO8601时间格式，例如：2013-06-09T06:42:18Z。
    *
    * @return $this
    */
    public function setLaunchedSince($launchedSince)
    {
        $this->container['launchedSince'] = $launchedSince;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  过滤绑定某个企业项目的云服务器。 若需要查询当前用户所有企业项目绑定的云服务，请传参all_granted_eps。
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
    * @param string|null $enterpriseProjectId 过滤绑定某个企业项目的云服务器。 若需要查询当前用户所有企业项目绑定的云服务，请传参all_granted_eps。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets expectFields
    *  控制查询输出的字段。在默认字段的基础上选择是否查询，有管理员字段。
    *
    * @return string[]|null
    */
    public function getExpectFields()
    {
        return $this->container['expectFields'];
    }

    /**
    * Sets expectFields
    *
    * @param string[]|null $expectFields 控制查询输出的字段。在默认字段的基础上选择是否查询，有管理员字段。
    *
    * @return $this
    */
    public function setExpectFields($expectFields)
    {
        $this->container['expectFields'] = $expectFields;
        return $this;
    }

    /**
    * Gets limit
    *  查询返回VM数量限制。 limit 默认为10，最大为100。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 查询返回VM数量限制。 limit 默认为10，最大为100。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

