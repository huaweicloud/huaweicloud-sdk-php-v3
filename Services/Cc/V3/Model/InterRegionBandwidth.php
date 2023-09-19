<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InterRegionBandwidth implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InterRegionBandwidth';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  域间带宽实例的ID。
    * name  域间带宽实例的名字。
    * description  域间带宽实例的描述。
    * domainId  帐号ID。
    * bandwidthPackageId  带宽包实例的ID。
    * createdAt  域间带宽实例的创建时间。
    * updatedAt  域间带宽实例的更新时间。
    * cloudConnectionId  云连接实例的ID。
    * interRegions  域间实例信息。
    * bandwidth  域间带宽的值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'domainId' => 'string',
            'bandwidthPackageId' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'cloudConnectionId' => 'string',
            'interRegions' => '\HuaweiCloud\SDK\Cc\V3\Model\InterRegion[]',
            'bandwidth' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  域间带宽实例的ID。
    * name  域间带宽实例的名字。
    * description  域间带宽实例的描述。
    * domainId  帐号ID。
    * bandwidthPackageId  带宽包实例的ID。
    * createdAt  域间带宽实例的创建时间。
    * updatedAt  域间带宽实例的更新时间。
    * cloudConnectionId  云连接实例的ID。
    * interRegions  域间实例信息。
    * bandwidth  域间带宽的值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'domainId' => null,
        'bandwidthPackageId' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'cloudConnectionId' => null,
        'interRegions' => null,
        'bandwidth' => 'int32'
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
    * id  域间带宽实例的ID。
    * name  域间带宽实例的名字。
    * description  域间带宽实例的描述。
    * domainId  帐号ID。
    * bandwidthPackageId  带宽包实例的ID。
    * createdAt  域间带宽实例的创建时间。
    * updatedAt  域间带宽实例的更新时间。
    * cloudConnectionId  云连接实例的ID。
    * interRegions  域间实例信息。
    * bandwidth  域间带宽的值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'domainId' => 'domain_id',
            'bandwidthPackageId' => 'bandwidth_package_id',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'cloudConnectionId' => 'cloud_connection_id',
            'interRegions' => 'inter_regions',
            'bandwidth' => 'bandwidth'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  域间带宽实例的ID。
    * name  域间带宽实例的名字。
    * description  域间带宽实例的描述。
    * domainId  帐号ID。
    * bandwidthPackageId  带宽包实例的ID。
    * createdAt  域间带宽实例的创建时间。
    * updatedAt  域间带宽实例的更新时间。
    * cloudConnectionId  云连接实例的ID。
    * interRegions  域间实例信息。
    * bandwidth  域间带宽的值。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'domainId' => 'setDomainId',
            'bandwidthPackageId' => 'setBandwidthPackageId',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'cloudConnectionId' => 'setCloudConnectionId',
            'interRegions' => 'setInterRegions',
            'bandwidth' => 'setBandwidth'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  域间带宽实例的ID。
    * name  域间带宽实例的名字。
    * description  域间带宽实例的描述。
    * domainId  帐号ID。
    * bandwidthPackageId  带宽包实例的ID。
    * createdAt  域间带宽实例的创建时间。
    * updatedAt  域间带宽实例的更新时间。
    * cloudConnectionId  云连接实例的ID。
    * interRegions  域间实例信息。
    * bandwidth  域间带宽的值。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'domainId' => 'getDomainId',
            'bandwidthPackageId' => 'getBandwidthPackageId',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'cloudConnectionId' => 'getCloudConnectionId',
            'interRegions' => 'getInterRegions',
            'bandwidth' => 'getBandwidth'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['bandwidthPackageId'] = isset($data['bandwidthPackageId']) ? $data['bandwidthPackageId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['cloudConnectionId'] = isset($data['cloudConnectionId']) ? $data['cloudConnectionId'] : null;
        $this->container['interRegions'] = isset($data['interRegions']) ? $data['interRegions'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 85)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 85.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 36)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bandwidthPackageId']) && (mb_strlen($this->container['bandwidthPackageId']) > 36)) {
                $invalidProperties[] = "invalid value for 'bandwidthPackageId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['bandwidthPackageId']) && (mb_strlen($this->container['bandwidthPackageId']) < 0)) {
                $invalidProperties[] = "invalid value for 'bandwidthPackageId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cloudConnectionId']) && (mb_strlen($this->container['cloudConnectionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'cloudConnectionId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['cloudConnectionId']) && (mb_strlen($this->container['cloudConnectionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'cloudConnectionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bandwidth']) && ($this->container['bandwidth'] > 999999)) {
                $invalidProperties[] = "invalid value for 'bandwidth', must be smaller than or equal to 999999.";
            }
            if (!is_null($this->container['bandwidth']) && ($this->container['bandwidth'] < 1)) {
                $invalidProperties[] = "invalid value for 'bandwidth', must be bigger than or equal to 1.";
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
    *  域间带宽实例的ID。
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
    * @param string|null $id 域间带宽实例的ID。
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
    *  域间带宽实例的名字。
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
    * @param string|null $name 域间带宽实例的名字。
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
    *  域间带宽实例的描述。
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
    * @param string|null $description 域间带宽实例的描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets domainId
    *  帐号ID。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 帐号ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets bandwidthPackageId
    *  带宽包实例的ID。
    *
    * @return string|null
    */
    public function getBandwidthPackageId()
    {
        return $this->container['bandwidthPackageId'];
    }

    /**
    * Sets bandwidthPackageId
    *
    * @param string|null $bandwidthPackageId 带宽包实例的ID。
    *
    * @return $this
    */
    public function setBandwidthPackageId($bandwidthPackageId)
    {
        $this->container['bandwidthPackageId'] = $bandwidthPackageId;
        return $this;
    }

    /**
    * Gets createdAt
    *  域间带宽实例的创建时间。
    *
    * @return \DateTime|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime|null $createdAt 域间带宽实例的创建时间。
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
    *  域间带宽实例的更新时间。
    *
    * @return \DateTime|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime|null $updatedAt 域间带宽实例的更新时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets cloudConnectionId
    *  云连接实例的ID。
    *
    * @return string|null
    */
    public function getCloudConnectionId()
    {
        return $this->container['cloudConnectionId'];
    }

    /**
    * Sets cloudConnectionId
    *
    * @param string|null $cloudConnectionId 云连接实例的ID。
    *
    * @return $this
    */
    public function setCloudConnectionId($cloudConnectionId)
    {
        $this->container['cloudConnectionId'] = $cloudConnectionId;
        return $this;
    }

    /**
    * Gets interRegions
    *  域间实例信息。
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\InterRegion[]|null
    */
    public function getInterRegions()
    {
        return $this->container['interRegions'];
    }

    /**
    * Sets interRegions
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\InterRegion[]|null $interRegions 域间实例信息。
    *
    * @return $this
    */
    public function setInterRegions($interRegions)
    {
        $this->container['interRegions'] = $interRegions;
        return $this;
    }

    /**
    * Gets bandwidth
    *  域间带宽的值。
    *
    * @return int|null
    */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
    * Sets bandwidth
    *
    * @param int|null $bandwidth 域间带宽的值。
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
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

