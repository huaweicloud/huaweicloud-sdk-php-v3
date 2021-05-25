<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSnapshotsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSnapshotsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * offset  偏移量。 说明:分页查询快照时使用，与limit配合使用。假如共有30个快照，设置offset为11，limit为10，即为从第12个快照开始查询，一次最多可读取10个快照。
    * limit  返回结果个数限制，值为大于0的整数。默认值为1000。
    * name  云硬盘快照名称。最大支持255个字节。
    * status  云硬盘快照状态，具体请参见A.3 云硬盘快照状态。
    * volumeId  快照所属云硬盘的ID。
    * availabilityZone  快照所属云硬盘的可用区。
    * id  指定快照id进行过滤。
    * dedicatedStorageName  专属存储的名称。
    * dedicatedStorageId  专属存储ID。
    * serviceType  服务类型。仅支持EVS、DSS、DESS。
    * enterpriseProjectId  指定企业项目id进行过滤。 传入“all_granted_eps”，代表查询权限范围内的所有企业项目下的云硬盘。 > 说明： >  > 关于企业项目ID的获取及企业项目特性的详细信息，请参考：\"[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)\"。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'offset' => 'int',
            'limit' => 'int',
            'name' => 'string',
            'status' => 'string',
            'volumeId' => 'string',
            'availabilityZone' => 'string',
            'id' => 'string',
            'dedicatedStorageName' => 'string',
            'dedicatedStorageId' => 'string',
            'serviceType' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * offset  偏移量。 说明:分页查询快照时使用，与limit配合使用。假如共有30个快照，设置offset为11，limit为10，即为从第12个快照开始查询，一次最多可读取10个快照。
    * limit  返回结果个数限制，值为大于0的整数。默认值为1000。
    * name  云硬盘快照名称。最大支持255个字节。
    * status  云硬盘快照状态，具体请参见A.3 云硬盘快照状态。
    * volumeId  快照所属云硬盘的ID。
    * availabilityZone  快照所属云硬盘的可用区。
    * id  指定快照id进行过滤。
    * dedicatedStorageName  专属存储的名称。
    * dedicatedStorageId  专属存储ID。
    * serviceType  服务类型。仅支持EVS、DSS、DESS。
    * enterpriseProjectId  指定企业项目id进行过滤。 传入“all_granted_eps”，代表查询权限范围内的所有企业项目下的云硬盘。 > 说明： >  > 关于企业项目ID的获取及企业项目特性的详细信息，请参考：\"[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)\"。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'offset' => 'int32',
        'limit' => 'int32',
        'name' => null,
        'status' => null,
        'volumeId' => null,
        'availabilityZone' => null,
        'id' => null,
        'dedicatedStorageName' => null,
        'dedicatedStorageId' => null,
        'serviceType' => null,
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
    * offset  偏移量。 说明:分页查询快照时使用，与limit配合使用。假如共有30个快照，设置offset为11，limit为10，即为从第12个快照开始查询，一次最多可读取10个快照。
    * limit  返回结果个数限制，值为大于0的整数。默认值为1000。
    * name  云硬盘快照名称。最大支持255个字节。
    * status  云硬盘快照状态，具体请参见A.3 云硬盘快照状态。
    * volumeId  快照所属云硬盘的ID。
    * availabilityZone  快照所属云硬盘的可用区。
    * id  指定快照id进行过滤。
    * dedicatedStorageName  专属存储的名称。
    * dedicatedStorageId  专属存储ID。
    * serviceType  服务类型。仅支持EVS、DSS、DESS。
    * enterpriseProjectId  指定企业项目id进行过滤。 传入“all_granted_eps”，代表查询权限范围内的所有企业项目下的云硬盘。 > 说明： >  > 关于企业项目ID的获取及企业项目特性的详细信息，请参考：\"[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)\"。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'offset' => 'offset',
            'limit' => 'limit',
            'name' => 'name',
            'status' => 'status',
            'volumeId' => 'volume_id',
            'availabilityZone' => 'availability_zone',
            'id' => 'id',
            'dedicatedStorageName' => 'dedicated_storage_name',
            'dedicatedStorageId' => 'dedicated_storage_id',
            'serviceType' => 'service_type',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * offset  偏移量。 说明:分页查询快照时使用，与limit配合使用。假如共有30个快照，设置offset为11，limit为10，即为从第12个快照开始查询，一次最多可读取10个快照。
    * limit  返回结果个数限制，值为大于0的整数。默认值为1000。
    * name  云硬盘快照名称。最大支持255个字节。
    * status  云硬盘快照状态，具体请参见A.3 云硬盘快照状态。
    * volumeId  快照所属云硬盘的ID。
    * availabilityZone  快照所属云硬盘的可用区。
    * id  指定快照id进行过滤。
    * dedicatedStorageName  专属存储的名称。
    * dedicatedStorageId  专属存储ID。
    * serviceType  服务类型。仅支持EVS、DSS、DESS。
    * enterpriseProjectId  指定企业项目id进行过滤。 传入“all_granted_eps”，代表查询权限范围内的所有企业项目下的云硬盘。 > 说明： >  > 关于企业项目ID的获取及企业项目特性的详细信息，请参考：\"[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)\"。
    *
    * @var string[]
    */
    protected static $setters = [
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'name' => 'setName',
            'status' => 'setStatus',
            'volumeId' => 'setVolumeId',
            'availabilityZone' => 'setAvailabilityZone',
            'id' => 'setId',
            'dedicatedStorageName' => 'setDedicatedStorageName',
            'dedicatedStorageId' => 'setDedicatedStorageId',
            'serviceType' => 'setServiceType',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * offset  偏移量。 说明:分页查询快照时使用，与limit配合使用。假如共有30个快照，设置offset为11，limit为10，即为从第12个快照开始查询，一次最多可读取10个快照。
    * limit  返回结果个数限制，值为大于0的整数。默认值为1000。
    * name  云硬盘快照名称。最大支持255个字节。
    * status  云硬盘快照状态，具体请参见A.3 云硬盘快照状态。
    * volumeId  快照所属云硬盘的ID。
    * availabilityZone  快照所属云硬盘的可用区。
    * id  指定快照id进行过滤。
    * dedicatedStorageName  专属存储的名称。
    * dedicatedStorageId  专属存储ID。
    * serviceType  服务类型。仅支持EVS、DSS、DESS。
    * enterpriseProjectId  指定企业项目id进行过滤。 传入“all_granted_eps”，代表查询权限范围内的所有企业项目下的云硬盘。 > 说明： >  > 关于企业项目ID的获取及企业项目特性的详细信息，请参考：\"[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)\"。
    *
    * @var string[]
    */
    protected static $getters = [
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'name' => 'getName',
            'status' => 'getStatus',
            'volumeId' => 'getVolumeId',
            'availabilityZone' => 'getAvailabilityZone',
            'id' => 'getId',
            'dedicatedStorageName' => 'getDedicatedStorageName',
            'dedicatedStorageId' => 'getDedicatedStorageId',
            'serviceType' => 'getServiceType',
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['volumeId'] = isset($data['volumeId']) ? $data['volumeId'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['dedicatedStorageName'] = isset($data['dedicatedStorageName']) ? $data['dedicatedStorageName'] : null;
        $this->container['dedicatedStorageId'] = isset($data['dedicatedStorageId']) ? $data['dedicatedStorageId'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
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
    * Gets offset
    *  偏移量。 说明:分页查询快照时使用，与limit配合使用。假如共有30个快照，设置offset为11，limit为10，即为从第12个快照开始查询，一次最多可读取10个快照。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量。 说明:分页查询快照时使用，与limit配合使用。假如共有30个快照，设置offset为11，limit为10，即为从第12个快照开始查询，一次最多可读取10个快照。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  返回结果个数限制，值为大于0的整数。默认值为1000。
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
    * @param int|null $limit 返回结果个数限制，值为大于0的整数。默认值为1000。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets name
    *  云硬盘快照名称。最大支持255个字节。
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
    * @param string|null $name 云硬盘快照名称。最大支持255个字节。
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
    *  云硬盘快照状态，具体请参见A.3 云硬盘快照状态。
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
    * @param string|null $status 云硬盘快照状态，具体请参见A.3 云硬盘快照状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets volumeId
    *  快照所属云硬盘的ID。
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
    * @param string|null $volumeId 快照所属云硬盘的ID。
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
    *  快照所属云硬盘的可用区。
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
    * @param string|null $availabilityZone 快照所属云硬盘的可用区。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets id
    *  指定快照id进行过滤。
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
    * @param string|null $id 指定快照id进行过滤。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets dedicatedStorageName
    *  专属存储的名称。
    *
    * @return string|null
    */
    public function getDedicatedStorageName()
    {
        return $this->container['dedicatedStorageName'];
    }

    /**
    * Sets dedicatedStorageName
    *
    * @param string|null $dedicatedStorageName 专属存储的名称。
    *
    * @return $this
    */
    public function setDedicatedStorageName($dedicatedStorageName)
    {
        $this->container['dedicatedStorageName'] = $dedicatedStorageName;
        return $this;
    }

    /**
    * Gets dedicatedStorageId
    *  专属存储ID。
    *
    * @return string|null
    */
    public function getDedicatedStorageId()
    {
        return $this->container['dedicatedStorageId'];
    }

    /**
    * Sets dedicatedStorageId
    *
    * @param string|null $dedicatedStorageId 专属存储ID。
    *
    * @return $this
    */
    public function setDedicatedStorageId($dedicatedStorageId)
    {
        $this->container['dedicatedStorageId'] = $dedicatedStorageId;
        return $this;
    }

    /**
    * Gets serviceType
    *  服务类型。仅支持EVS、DSS、DESS。
    *
    * @return string|null
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param string|null $serviceType 服务类型。仅支持EVS、DSS、DESS。
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  指定企业项目id进行过滤。 传入“all_granted_eps”，代表查询权限范围内的所有企业项目下的云硬盘。 > 说明： >  > 关于企业项目ID的获取及企业项目特性的详细信息，请参考：\"[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)\"。
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
    * @param string|null $enterpriseProjectId 指定企业项目id进行过滤。 传入“all_granted_eps”，代表查询权限范围内的所有企业项目下的云硬盘。 > 说明： >  > 关于企业项目ID的获取及企业项目特性的详细信息，请参考：\"[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)\"。
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

