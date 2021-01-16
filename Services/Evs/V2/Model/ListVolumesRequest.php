<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListVolumesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListVolumesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'marker' => 'string',
            'name' => 'string',
            'limit' => 'int',
            'sortKey' => 'string',
            'offset' => 'int',
            'sortDir' => 'string',
            'status' => 'string',
            'metadata' => 'string',
            'availabilityZone' => 'string',
            'multiattach' => 'bool',
            'serviceType' => 'string',
            'dedicatedStorageId' => 'string',
            'dedicatedStorageName' => 'string',
            'volumeTypeId' => 'string',
            'id' => 'string',
            'ids' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'marker' => null,
        'name' => null,
        'limit' => 'int32',
        'sortKey' => null,
        'offset' => 'int32',
        'sortDir' => null,
        'status' => null,
        'metadata' => null,
        'availabilityZone' => null,
        'multiattach' => null,
        'serviceType' => null,
        'dedicatedStorageId' => null,
        'dedicatedStorageName' => null,
        'volumeTypeId' => null,
        'id' => null,
        'ids' => null,
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
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'marker' => 'marker',
            'name' => 'name',
            'limit' => 'limit',
            'sortKey' => 'sort_key',
            'offset' => 'offset',
            'sortDir' => 'sort_dir',
            'status' => 'status',
            'metadata' => 'metadata',
            'availabilityZone' => 'availability_zone',
            'multiattach' => 'multiattach',
            'serviceType' => 'service_type',
            'dedicatedStorageId' => 'dedicated_storage_id',
            'dedicatedStorageName' => 'dedicated_storage_name',
            'volumeTypeId' => 'volume_type_id',
            'id' => 'id',
            'ids' => 'ids',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @var string[]
    */
    protected static $setters = [
            'marker' => 'setMarker',
            'name' => 'setName',
            'limit' => 'setLimit',
            'sortKey' => 'setSortKey',
            'offset' => 'setOffset',
            'sortDir' => 'setSortDir',
            'status' => 'setStatus',
            'metadata' => 'setMetadata',
            'availabilityZone' => 'setAvailabilityZone',
            'multiattach' => 'setMultiattach',
            'serviceType' => 'setServiceType',
            'dedicatedStorageId' => 'setDedicatedStorageId',
            'dedicatedStorageName' => 'setDedicatedStorageName',
            'volumeTypeId' => 'setVolumeTypeId',
            'id' => 'setId',
            'ids' => 'setIds',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @var string[]
    */
    protected static $getters = [
            'marker' => 'getMarker',
            'name' => 'getName',
            'limit' => 'getLimit',
            'sortKey' => 'getSortKey',
            'offset' => 'getOffset',
            'sortDir' => 'getSortDir',
            'status' => 'getStatus',
            'metadata' => 'getMetadata',
            'availabilityZone' => 'getAvailabilityZone',
            'multiattach' => 'getMultiattach',
            'serviceType' => 'getServiceType',
            'dedicatedStorageId' => 'getDedicatedStorageId',
            'dedicatedStorageName' => 'getDedicatedStorageName',
            'volumeTypeId' => 'getVolumeTypeId',
            'id' => 'getId',
            'ids' => 'getIds',
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
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 1000;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['multiattach'] = isset($data['multiattach']) ? $data['multiattach'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['dedicatedStorageId'] = isset($data['dedicatedStorageId']) ? $data['dedicatedStorageId'] : null;
        $this->container['dedicatedStorageName'] = isset($data['dedicatedStorageName']) ? $data['dedicatedStorageName'] : null;
        $this->container['volumeTypeId'] = isset($data['volumeTypeId']) ? $data['volumeTypeId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ids'] = isset($data['ids']) ? $data['ids'] : null;
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
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets marker
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
    * @param string|null $marker marker
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
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
    * @param string|null $name name
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets limit
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
    * @param int|null $limit limit
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets sortKey
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey sortKey
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets offset
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
    * @param int|null $offset offset
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets sortDir
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir sortDir
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
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
    * @param string|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets metadata
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
    * @param string|null $metadata metadata
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
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
    * @param string|null $availabilityZone availabilityZone
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
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
    * @param bool|null $multiattach multiattach
    *
    * @return $this
    */
    public function setMultiattach($multiattach)
    {
        $this->container['multiattach'] = $multiattach;
        return $this;
    }

    /**
    * Gets serviceType
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
    * @param string|null $serviceType serviceType
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets dedicatedStorageId
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
    * @param string|null $dedicatedStorageId dedicatedStorageId
    *
    * @return $this
    */
    public function setDedicatedStorageId($dedicatedStorageId)
    {
        $this->container['dedicatedStorageId'] = $dedicatedStorageId;
        return $this;
    }

    /**
    * Gets dedicatedStorageName
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
    * @param string|null $dedicatedStorageName dedicatedStorageName
    *
    * @return $this
    */
    public function setDedicatedStorageName($dedicatedStorageName)
    {
        $this->container['dedicatedStorageName'] = $dedicatedStorageName;
        return $this;
    }

    /**
    * Gets volumeTypeId
    *
    * @return string|null
    */
    public function getVolumeTypeId()
    {
        return $this->container['volumeTypeId'];
    }

    /**
    * Sets volumeTypeId
    *
    * @param string|null $volumeTypeId volumeTypeId
    *
    * @return $this
    */
    public function setVolumeTypeId($volumeTypeId)
    {
        $this->container['volumeTypeId'] = $volumeTypeId;
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
    * @param string|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets ids
    *
    * @return string|null
    */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
    * Sets ids
    *
    * @param string|null $ids ids
    *
    * @return $this
    */
    public function setIds($ids)
    {
        $this->container['ids'] = $ids;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
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
    * @param string|null $enterpriseProjectId enterpriseProjectId
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

