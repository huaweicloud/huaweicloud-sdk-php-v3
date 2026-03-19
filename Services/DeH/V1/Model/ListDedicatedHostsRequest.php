<?php

namespace HuaweiCloud\SDK\DeH\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDedicatedHostsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDedicatedHostsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dedicatedHostId  专属主机ID。
    * name  专属主机名称。
    * hostType  专属主机类型。
    * hostTypeName  专属主机类型的名称。
    * flavor  规格ID。
    * state  专属主机状态。  取值范围：“available”、“fault”或“released”。
    * tenant  取值范围：租户ID或“all”。  只有管理员可以指定该参数。
    * availabilityZone  专属主机所属AZ。
    * limit  每个页面上显示的条目数。
    * marker  该值是上一页最后一条记录的ID。  如果“marker”取值无效，将会返回“400”错误码。
    * tags  专属主机标签。
    * instanceUuid  专属主机上的云服务器ID。
    * releasedAt  专属主机的释放时间。
    * changesSince  当专属主机更新了状态时，按日期和时间戳过滤响应。为了便于记录更改，还可能返回最近删除的专属主机。  日期和时间戳的格式为ISO 8601：CCYY-MM-DDThh:mm:ss±hh:mm  如果包含“hh:mm”值，则将时区作为UTC的偏移量返回。例如，“2015-08-27T09:49:58-05:00”。如果您省略时区，则假定为UTC时区。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dedicatedHostId' => 'string',
            'name' => 'string',
            'hostType' => 'string',
            'hostTypeName' => 'string',
            'flavor' => 'string',
            'state' => 'string',
            'tenant' => 'string',
            'availabilityZone' => 'string',
            'limit' => 'int',
            'marker' => 'string',
            'tags' => 'string',
            'instanceUuid' => 'string',
            'releasedAt' => 'string',
            'changesSince' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dedicatedHostId  专属主机ID。
    * name  专属主机名称。
    * hostType  专属主机类型。
    * hostTypeName  专属主机类型的名称。
    * flavor  规格ID。
    * state  专属主机状态。  取值范围：“available”、“fault”或“released”。
    * tenant  取值范围：租户ID或“all”。  只有管理员可以指定该参数。
    * availabilityZone  专属主机所属AZ。
    * limit  每个页面上显示的条目数。
    * marker  该值是上一页最后一条记录的ID。  如果“marker”取值无效，将会返回“400”错误码。
    * tags  专属主机标签。
    * instanceUuid  专属主机上的云服务器ID。
    * releasedAt  专属主机的释放时间。
    * changesSince  当专属主机更新了状态时，按日期和时间戳过滤响应。为了便于记录更改，还可能返回最近删除的专属主机。  日期和时间戳的格式为ISO 8601：CCYY-MM-DDThh:mm:ss±hh:mm  如果包含“hh:mm”值，则将时区作为UTC的偏移量返回。例如，“2015-08-27T09:49:58-05:00”。如果您省略时区，则假定为UTC时区。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dedicatedHostId' => null,
        'name' => null,
        'hostType' => null,
        'hostTypeName' => null,
        'flavor' => null,
        'state' => null,
        'tenant' => null,
        'availabilityZone' => null,
        'limit' => 'int32',
        'marker' => null,
        'tags' => null,
        'instanceUuid' => null,
        'releasedAt' => null,
        'changesSince' => null
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
    * dedicatedHostId  专属主机ID。
    * name  专属主机名称。
    * hostType  专属主机类型。
    * hostTypeName  专属主机类型的名称。
    * flavor  规格ID。
    * state  专属主机状态。  取值范围：“available”、“fault”或“released”。
    * tenant  取值范围：租户ID或“all”。  只有管理员可以指定该参数。
    * availabilityZone  专属主机所属AZ。
    * limit  每个页面上显示的条目数。
    * marker  该值是上一页最后一条记录的ID。  如果“marker”取值无效，将会返回“400”错误码。
    * tags  专属主机标签。
    * instanceUuid  专属主机上的云服务器ID。
    * releasedAt  专属主机的释放时间。
    * changesSince  当专属主机更新了状态时，按日期和时间戳过滤响应。为了便于记录更改，还可能返回最近删除的专属主机。  日期和时间戳的格式为ISO 8601：CCYY-MM-DDThh:mm:ss±hh:mm  如果包含“hh:mm”值，则将时区作为UTC的偏移量返回。例如，“2015-08-27T09:49:58-05:00”。如果您省略时区，则假定为UTC时区。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dedicatedHostId' => 'dedicated_host_id',
            'name' => 'name',
            'hostType' => 'host_type',
            'hostTypeName' => 'host_type_name',
            'flavor' => 'flavor',
            'state' => 'state',
            'tenant' => 'tenant',
            'availabilityZone' => 'availability_zone',
            'limit' => 'limit',
            'marker' => 'marker',
            'tags' => 'tags',
            'instanceUuid' => 'instance_uuid',
            'releasedAt' => 'released_at',
            'changesSince' => 'changes-since'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dedicatedHostId  专属主机ID。
    * name  专属主机名称。
    * hostType  专属主机类型。
    * hostTypeName  专属主机类型的名称。
    * flavor  规格ID。
    * state  专属主机状态。  取值范围：“available”、“fault”或“released”。
    * tenant  取值范围：租户ID或“all”。  只有管理员可以指定该参数。
    * availabilityZone  专属主机所属AZ。
    * limit  每个页面上显示的条目数。
    * marker  该值是上一页最后一条记录的ID。  如果“marker”取值无效，将会返回“400”错误码。
    * tags  专属主机标签。
    * instanceUuid  专属主机上的云服务器ID。
    * releasedAt  专属主机的释放时间。
    * changesSince  当专属主机更新了状态时，按日期和时间戳过滤响应。为了便于记录更改，还可能返回最近删除的专属主机。  日期和时间戳的格式为ISO 8601：CCYY-MM-DDThh:mm:ss±hh:mm  如果包含“hh:mm”值，则将时区作为UTC的偏移量返回。例如，“2015-08-27T09:49:58-05:00”。如果您省略时区，则假定为UTC时区。
    *
    * @var string[]
    */
    protected static $setters = [
            'dedicatedHostId' => 'setDedicatedHostId',
            'name' => 'setName',
            'hostType' => 'setHostType',
            'hostTypeName' => 'setHostTypeName',
            'flavor' => 'setFlavor',
            'state' => 'setState',
            'tenant' => 'setTenant',
            'availabilityZone' => 'setAvailabilityZone',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'tags' => 'setTags',
            'instanceUuid' => 'setInstanceUuid',
            'releasedAt' => 'setReleasedAt',
            'changesSince' => 'setChangesSince'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dedicatedHostId  专属主机ID。
    * name  专属主机名称。
    * hostType  专属主机类型。
    * hostTypeName  专属主机类型的名称。
    * flavor  规格ID。
    * state  专属主机状态。  取值范围：“available”、“fault”或“released”。
    * tenant  取值范围：租户ID或“all”。  只有管理员可以指定该参数。
    * availabilityZone  专属主机所属AZ。
    * limit  每个页面上显示的条目数。
    * marker  该值是上一页最后一条记录的ID。  如果“marker”取值无效，将会返回“400”错误码。
    * tags  专属主机标签。
    * instanceUuid  专属主机上的云服务器ID。
    * releasedAt  专属主机的释放时间。
    * changesSince  当专属主机更新了状态时，按日期和时间戳过滤响应。为了便于记录更改，还可能返回最近删除的专属主机。  日期和时间戳的格式为ISO 8601：CCYY-MM-DDThh:mm:ss±hh:mm  如果包含“hh:mm”值，则将时区作为UTC的偏移量返回。例如，“2015-08-27T09:49:58-05:00”。如果您省略时区，则假定为UTC时区。
    *
    * @var string[]
    */
    protected static $getters = [
            'dedicatedHostId' => 'getDedicatedHostId',
            'name' => 'getName',
            'hostType' => 'getHostType',
            'hostTypeName' => 'getHostTypeName',
            'flavor' => 'getFlavor',
            'state' => 'getState',
            'tenant' => 'getTenant',
            'availabilityZone' => 'getAvailabilityZone',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'tags' => 'getTags',
            'instanceUuid' => 'getInstanceUuid',
            'releasedAt' => 'getReleasedAt',
            'changesSince' => 'getChangesSince'
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
    const STATE_AVAILABLE = 'available';
    const STATE_FAULT = 'fault';
    const STATE_RELEASED = 'released';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_AVAILABLE,
            self::STATE_FAULT,
            self::STATE_RELEASED,
        ];
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
        $this->container['dedicatedHostId'] = isset($data['dedicatedHostId']) ? $data['dedicatedHostId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['hostType'] = isset($data['hostType']) ? $data['hostType'] : null;
        $this->container['hostTypeName'] = isset($data['hostTypeName']) ? $data['hostTypeName'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['tenant'] = isset($data['tenant']) ? $data['tenant'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['instanceUuid'] = isset($data['instanceUuid']) ? $data['instanceUuid'] : null;
        $this->container['releasedAt'] = isset($data['releasedAt']) ? $data['releasedAt'] : null;
        $this->container['changesSince'] = isset($data['changesSince']) ? $data['changesSince'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets dedicatedHostId
    *  专属主机ID。
    *
    * @return string|null
    */
    public function getDedicatedHostId()
    {
        return $this->container['dedicatedHostId'];
    }

    /**
    * Sets dedicatedHostId
    *
    * @param string|null $dedicatedHostId 专属主机ID。
    *
    * @return $this
    */
    public function setDedicatedHostId($dedicatedHostId)
    {
        $this->container['dedicatedHostId'] = $dedicatedHostId;
        return $this;
    }

    /**
    * Gets name
    *  专属主机名称。
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
    * @param string|null $name 专属主机名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets hostType
    *  专属主机类型。
    *
    * @return string|null
    */
    public function getHostType()
    {
        return $this->container['hostType'];
    }

    /**
    * Sets hostType
    *
    * @param string|null $hostType 专属主机类型。
    *
    * @return $this
    */
    public function setHostType($hostType)
    {
        $this->container['hostType'] = $hostType;
        return $this;
    }

    /**
    * Gets hostTypeName
    *  专属主机类型的名称。
    *
    * @return string|null
    */
    public function getHostTypeName()
    {
        return $this->container['hostTypeName'];
    }

    /**
    * Sets hostTypeName
    *
    * @param string|null $hostTypeName 专属主机类型的名称。
    *
    * @return $this
    */
    public function setHostTypeName($hostTypeName)
    {
        $this->container['hostTypeName'] = $hostTypeName;
        return $this;
    }

    /**
    * Gets flavor
    *  规格ID。
    *
    * @return string|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param string|null $flavor 规格ID。
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets state
    *  专属主机状态。  取值范围：“available”、“fault”或“released”。
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 专属主机状态。  取值范围：“available”、“fault”或“released”。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets tenant
    *  取值范围：租户ID或“all”。  只有管理员可以指定该参数。
    *
    * @return string|null
    */
    public function getTenant()
    {
        return $this->container['tenant'];
    }

    /**
    * Sets tenant
    *
    * @param string|null $tenant 取值范围：租户ID或“all”。  只有管理员可以指定该参数。
    *
    * @return $this
    */
    public function setTenant($tenant)
    {
        $this->container['tenant'] = $tenant;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  专属主机所属AZ。
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
    * @param string|null $availabilityZone 专属主机所属AZ。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets limit
    *  每个页面上显示的条目数。
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
    * @param int|null $limit 每个页面上显示的条目数。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  该值是上一页最后一条记录的ID。  如果“marker”取值无效，将会返回“400”错误码。
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 该值是上一页最后一条记录的ID。  如果“marker”取值无效，将会返回“400”错误码。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets tags
    *  专属主机标签。
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
    * @param string|null $tags 专属主机标签。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets instanceUuid
    *  专属主机上的云服务器ID。
    *
    * @return string|null
    */
    public function getInstanceUuid()
    {
        return $this->container['instanceUuid'];
    }

    /**
    * Sets instanceUuid
    *
    * @param string|null $instanceUuid 专属主机上的云服务器ID。
    *
    * @return $this
    */
    public function setInstanceUuid($instanceUuid)
    {
        $this->container['instanceUuid'] = $instanceUuid;
        return $this;
    }

    /**
    * Gets releasedAt
    *  专属主机的释放时间。
    *
    * @return string|null
    */
    public function getReleasedAt()
    {
        return $this->container['releasedAt'];
    }

    /**
    * Sets releasedAt
    *
    * @param string|null $releasedAt 专属主机的释放时间。
    *
    * @return $this
    */
    public function setReleasedAt($releasedAt)
    {
        $this->container['releasedAt'] = $releasedAt;
        return $this;
    }

    /**
    * Gets changesSince
    *  当专属主机更新了状态时，按日期和时间戳过滤响应。为了便于记录更改，还可能返回最近删除的专属主机。  日期和时间戳的格式为ISO 8601：CCYY-MM-DDThh:mm:ss±hh:mm  如果包含“hh:mm”值，则将时区作为UTC的偏移量返回。例如，“2015-08-27T09:49:58-05:00”。如果您省略时区，则假定为UTC时区。
    *
    * @return string|null
    */
    public function getChangesSince()
    {
        return $this->container['changesSince'];
    }

    /**
    * Sets changesSince
    *
    * @param string|null $changesSince 当专属主机更新了状态时，按日期和时间戳过滤响应。为了便于记录更改，还可能返回最近删除的专属主机。  日期和时间戳的格式为ISO 8601：CCYY-MM-DDThh:mm:ss±hh:mm  如果包含“hh:mm”值，则将时区作为UTC的偏移量返回。例如，“2015-08-27T09:49:58-05:00”。如果您省略时区，则假定为UTC时区。
    *
    * @return $this
    */
    public function setChangesSince($changesSince)
    {
        $this->container['changesSince'] = $changesSince;
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

