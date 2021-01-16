<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateVolumeResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateVolumeResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'attachments' => '\HuaweiCloud\SDK\Evs\V2\Model\Attachment[]',
            'availabilityZone' => 'string',
            'bootable' => 'string',
            'createdAt' => 'string',
            'id' => 'string',
            'links' => '\HuaweiCloud\SDK\Evs\V2\Model\Link[]',
            'metadata' => '\HuaweiCloud\SDK\Evs\V2\Model\VolumeMetadata',
            'multiattach' => 'bool',
            'name' => 'string',
            'osVolHostAttrhost' => 'string',
            'osVolTenantAttrtenantId' => 'string',
            'shareable' => 'string',
            'size' => 'int',
            'snapshotId' => 'string',
            'sourceVolid' => 'string',
            'status' => 'string',
            'volumeImageMetadata' => 'object',
            'volumeType' => 'string',
            'description' => 'string',
            'osVolumeReplicationextendedStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'attachments' => null,
        'availabilityZone' => null,
        'bootable' => null,
        'createdAt' => null,
        'id' => null,
        'links' => null,
        'metadata' => null,
        'multiattach' => null,
        'name' => null,
        'osVolHostAttrhost' => null,
        'osVolTenantAttrtenantId' => null,
        'shareable' => null,
        'size' => 'int32',
        'snapshotId' => null,
        'sourceVolid' => null,
        'status' => null,
        'volumeImageMetadata' => null,
        'volumeType' => null,
        'description' => null,
        'osVolumeReplicationextendedStatus' => null
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
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'attachments' => 'attachments',
            'availabilityZone' => 'availability_zone',
            'bootable' => 'bootable',
            'createdAt' => 'created_at',
            'id' => 'id',
            'links' => 'links',
            'metadata' => 'metadata',
            'multiattach' => 'multiattach',
            'name' => 'name',
            'osVolHostAttrhost' => 'os-vol-host-attr:host',
            'osVolTenantAttrtenantId' => 'os-vol-tenant-attr:tenant_id',
            'shareable' => 'shareable',
            'size' => 'size',
            'snapshotId' => 'snapshot_id',
            'sourceVolid' => 'source_volid',
            'status' => 'status',
            'volumeImageMetadata' => 'volume_image_metadata',
            'volumeType' => 'volume_type',
            'description' => 'description',
            'osVolumeReplicationextendedStatus' => 'os-volume-replication:extended_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @var string[]
    */
    protected static $setters = [
            'attachments' => 'setAttachments',
            'availabilityZone' => 'setAvailabilityZone',
            'bootable' => 'setBootable',
            'createdAt' => 'setCreatedAt',
            'id' => 'setId',
            'links' => 'setLinks',
            'metadata' => 'setMetadata',
            'multiattach' => 'setMultiattach',
            'name' => 'setName',
            'osVolHostAttrhost' => 'setOsVolHostAttrhost',
            'osVolTenantAttrtenantId' => 'setOsVolTenantAttrtenantId',
            'shareable' => 'setShareable',
            'size' => 'setSize',
            'snapshotId' => 'setSnapshotId',
            'sourceVolid' => 'setSourceVolid',
            'status' => 'setStatus',
            'volumeImageMetadata' => 'setVolumeImageMetadata',
            'volumeType' => 'setVolumeType',
            'description' => 'setDescription',
            'osVolumeReplicationextendedStatus' => 'setOsVolumeReplicationextendedStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @var string[]
    */
    protected static $getters = [
            'attachments' => 'getAttachments',
            'availabilityZone' => 'getAvailabilityZone',
            'bootable' => 'getBootable',
            'createdAt' => 'getCreatedAt',
            'id' => 'getId',
            'links' => 'getLinks',
            'metadata' => 'getMetadata',
            'multiattach' => 'getMultiattach',
            'name' => 'getName',
            'osVolHostAttrhost' => 'getOsVolHostAttrhost',
            'osVolTenantAttrtenantId' => 'getOsVolTenantAttrtenantId',
            'shareable' => 'getShareable',
            'size' => 'getSize',
            'snapshotId' => 'getSnapshotId',
            'sourceVolid' => 'getSourceVolid',
            'status' => 'getStatus',
            'volumeImageMetadata' => 'getVolumeImageMetadata',
            'volumeType' => 'getVolumeType',
            'description' => 'getDescription',
            'osVolumeReplicationextendedStatus' => 'getOsVolumeReplicationextendedStatus'
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
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['bootable'] = isset($data['bootable']) ? $data['bootable'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['multiattach'] = isset($data['multiattach']) ? $data['multiattach'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['osVolHostAttrhost'] = isset($data['osVolHostAttrhost']) ? $data['osVolHostAttrhost'] : null;
        $this->container['osVolTenantAttrtenantId'] = isset($data['osVolTenantAttrtenantId']) ? $data['osVolTenantAttrtenantId'] : null;
        $this->container['shareable'] = isset($data['shareable']) ? $data['shareable'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['snapshotId'] = isset($data['snapshotId']) ? $data['snapshotId'] : null;
        $this->container['sourceVolid'] = isset($data['sourceVolid']) ? $data['sourceVolid'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['volumeImageMetadata'] = isset($data['volumeImageMetadata']) ? $data['volumeImageMetadata'] : null;
        $this->container['volumeType'] = isset($data['volumeType']) ? $data['volumeType'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['osVolumeReplicationextendedStatus'] = isset($data['osVolumeReplicationextendedStatus']) ? $data['osVolumeReplicationextendedStatus'] : null;
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
    * Gets attachments
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\Attachment[]|null
    */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
    * Sets attachments
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\Attachment[]|null $attachments 是否挂载信息。
    *
    * @return $this
    */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;
        return $this;
    }

    /**
    * Gets availabilityZone
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
    * @param string|null $availabilityZone 云硬盘所属AZ。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets bootable
    *
    * @return string|null
    */
    public function getBootable()
    {
        return $this->container['bootable'];
    }

    /**
    * Sets bootable
    *
    * @param string|null $bootable 是否为可启动云硬盘。
    *
    * @return $this
    */
    public function setBootable($bootable)
    {
        $this->container['bootable'] = $bootable;
        return $this;
    }

    /**
    * Gets createdAt
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 创建云硬盘的时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets id
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
    * @param string|null $id 云硬盘ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets links
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\Link[]|null
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\Link[]|null $links 云硬盘uri自描述信息
    *
    * @return $this
    */
    public function setLinks($links)
    {
        $this->container['links'] = $links;
        return $this;
    }

    /**
    * Gets metadata
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\VolumeMetadata|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\VolumeMetadata|null $metadata metadata
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets multiattach
    *
    * @return bool|null
    */
    public function getMultiattach()
    {
        return $this->container['multiattach'];
    }

    /**
    * Sets multiattach
    *
    * @param bool|null $multiattach 是否为可共享云硬盘。
    *
    * @return $this
    */
    public function setMultiattach($multiattach)
    {
        $this->container['multiattach'] = $multiattach;
        return $this;
    }

    /**
    * Gets name
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
    * @param string|null $name 云硬盘名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets osVolHostAttrhost
    *
    * @return string|null
    */
    public function getOsVolHostAttrhost()
    {
        return $this->container['osVolHostAttrhost'];
    }

    /**
    * Sets osVolHostAttrhost
    *
    * @param string|null $osVolHostAttrhost 预留属性。
    *
    * @return $this
    */
    public function setOsVolHostAttrhost($osVolHostAttrhost)
    {
        $this->container['osVolHostAttrhost'] = $osVolHostAttrhost;
        return $this;
    }

    /**
    * Gets osVolTenantAttrtenantId
    *
    * @return string|null
    */
    public function getOsVolTenantAttrtenantId()
    {
        return $this->container['osVolTenantAttrtenantId'];
    }

    /**
    * Sets osVolTenantAttrtenantId
    *
    * @param string|null $osVolTenantAttrtenantId 云硬盘所属的项目ID。
    *
    * @return $this
    */
    public function setOsVolTenantAttrtenantId($osVolTenantAttrtenantId)
    {
        $this->container['osVolTenantAttrtenantId'] = $osVolTenantAttrtenantId;
        return $this;
    }

    /**
    * Gets shareable
    *
    * @return string|null
    */
    public function getShareable()
    {
        return $this->container['shareable'];
    }

    /**
    * Sets shareable
    *
    * @param string|null $shareable 是否为共享云硬盘。
    *
    * @return $this
    */
    public function setShareable($shareable)
    {
        $this->container['shareable'] = $shareable;
        return $this;
    }

    /**
    * Gets size
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 云硬盘大小。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets snapshotId
    *
    * @return string|null
    */
    public function getSnapshotId()
    {
        return $this->container['snapshotId'];
    }

    /**
    * Sets snapshotId
    *
    * @param string|null $snapshotId 快照ID。
    *
    * @return $this
    */
    public function setSnapshotId($snapshotId)
    {
        $this->container['snapshotId'] = $snapshotId;
        return $this;
    }

    /**
    * Gets sourceVolid
    *
    * @return string|null
    */
    public function getSourceVolid()
    {
        return $this->container['sourceVolid'];
    }

    /**
    * Sets sourceVolid
    *
    * @param string|null $sourceVolid 预留字段。
    *
    * @return $this
    */
    public function setSourceVolid($sourceVolid)
    {
        $this->container['sourceVolid'] = $sourceVolid;
        return $this;
    }

    /**
    * Gets status
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
    * @param string|null $status 云硬盘状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets volumeImageMetadata
    *
    * @return object|null
    */
    public function getVolumeImageMetadata()
    {
        return $this->container['volumeImageMetadata'];
    }

    /**
    * Sets volumeImageMetadata
    *
    * @param object|null $volumeImageMetadata 云硬盘镜像的元数据。 > 说明： >  > 关于“volume_image_metadata”字段的详细说明，具体请参见：\"[查询镜像详情](https://support.huaweicloud.com/api-ims/ims_03_0703.html)\"。
    *
    * @return $this
    */
    public function setVolumeImageMetadata($volumeImageMetadata)
    {
        $this->container['volumeImageMetadata'] = $volumeImageMetadata;
        return $this;
    }

    /**
    * Gets volumeType
    *
    * @return string|null
    */
    public function getVolumeType()
    {
        return $this->container['volumeType'];
    }

    /**
    * Sets volumeType
    *
    * @param string|null $volumeType 云硬盘类型。
    *
    * @return $this
    */
    public function setVolumeType($volumeType)
    {
        $this->container['volumeType'] = $volumeType;
        return $this;
    }

    /**
    * Gets description
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
    * @param string|null $description 云硬盘描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets osVolumeReplicationextendedStatus
    *
    * @return string|null
    */
    public function getOsVolumeReplicationextendedStatus()
    {
        return $this->container['osVolumeReplicationextendedStatus'];
    }

    /**
    * Sets osVolumeReplicationextendedStatus
    *
    * @param string|null $osVolumeReplicationextendedStatus 预留属性。
    *
    * @return $this
    */
    public function setOsVolumeReplicationextendedStatus($osVolumeReplicationextendedStatus)
    {
        $this->container['osVolumeReplicationextendedStatus'] = $osVolumeReplicationextendedStatus;
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

