<?php

namespace HuaweiCloud\SDK\Ims\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageMember implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageMember';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  共享状态
    * createdAt  共享时间，格式为UTC时间
    * updatedAt  更新时间，格式为UTC时间
    * imageId  镜像ID
    * memberId  成员ID
    * schema  共享视图
    * memberType  共享成员类型
    * urn  共享组织的URN，仅当member_type类型为organization时，才会返回urn字段。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'imageId' => 'string',
            'memberId' => 'string',
            'schema' => 'string',
            'memberType' => 'string',
            'urn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  共享状态
    * createdAt  共享时间，格式为UTC时间
    * updatedAt  更新时间，格式为UTC时间
    * imageId  镜像ID
    * memberId  成员ID
    * schema  共享视图
    * memberType  共享成员类型
    * urn  共享组织的URN，仅当member_type类型为organization时，才会返回urn字段。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'imageId' => null,
        'memberId' => null,
        'schema' => null,
        'memberType' => null,
        'urn' => null
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
    * status  共享状态
    * createdAt  共享时间，格式为UTC时间
    * updatedAt  更新时间，格式为UTC时间
    * imageId  镜像ID
    * memberId  成员ID
    * schema  共享视图
    * memberType  共享成员类型
    * urn  共享组织的URN，仅当member_type类型为organization时，才会返回urn字段。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'imageId' => 'image_id',
            'memberId' => 'member_id',
            'schema' => 'schema',
            'memberType' => 'member_type',
            'urn' => 'urn'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  共享状态
    * createdAt  共享时间，格式为UTC时间
    * updatedAt  更新时间，格式为UTC时间
    * imageId  镜像ID
    * memberId  成员ID
    * schema  共享视图
    * memberType  共享成员类型
    * urn  共享组织的URN，仅当member_type类型为organization时，才会返回urn字段。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'imageId' => 'setImageId',
            'memberId' => 'setMemberId',
            'schema' => 'setSchema',
            'memberType' => 'setMemberType',
            'urn' => 'setUrn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  共享状态
    * createdAt  共享时间，格式为UTC时间
    * updatedAt  更新时间，格式为UTC时间
    * imageId  镜像ID
    * memberId  成员ID
    * schema  共享视图
    * memberType  共享成员类型
    * urn  共享组织的URN，仅当member_type类型为organization时，才会返回urn字段。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'imageId' => 'getImageId',
            'memberId' => 'getMemberId',
            'schema' => 'getSchema',
            'memberType' => 'getMemberType',
            'urn' => 'getUrn'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['memberId'] = isset($data['memberId']) ? $data['memberId'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['memberType'] = isset($data['memberType']) ? $data['memberType'] : null;
        $this->container['urn'] = isset($data['urn']) ? $data['urn'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['imageId'] === null) {
            $invalidProperties[] = "'imageId' can't be null";
        }
        if ($this->container['memberId'] === null) {
            $invalidProperties[] = "'memberId' can't be null";
        }
        if ($this->container['schema'] === null) {
            $invalidProperties[] = "'schema' can't be null";
        }
        if ($this->container['memberType'] === null) {
            $invalidProperties[] = "'memberType' can't be null";
        }
        if ($this->container['urn'] === null) {
            $invalidProperties[] = "'urn' can't be null";
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
    * Gets status
    *  共享状态
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 共享状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createdAt
    *  共享时间，格式为UTC时间
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
    * @param string $createdAt 共享时间，格式为UTC时间
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
    *  更新时间，格式为UTC时间
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
    * @param string $updatedAt 更新时间，格式为UTC时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets imageId
    *  镜像ID
    *
    * @return string
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string $imageId 镜像ID
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets memberId
    *  成员ID
    *
    * @return string
    */
    public function getMemberId()
    {
        return $this->container['memberId'];
    }

    /**
    * Sets memberId
    *
    * @param string $memberId 成员ID
    *
    * @return $this
    */
    public function setMemberId($memberId)
    {
        $this->container['memberId'] = $memberId;
        return $this;
    }

    /**
    * Gets schema
    *  共享视图
    *
    * @return string
    */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
    * Sets schema
    *
    * @param string $schema 共享视图
    *
    * @return $this
    */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;
        return $this;
    }

    /**
    * Gets memberType
    *  共享成员类型
    *
    * @return string
    */
    public function getMemberType()
    {
        return $this->container['memberType'];
    }

    /**
    * Sets memberType
    *
    * @param string $memberType 共享成员类型
    *
    * @return $this
    */
    public function setMemberType($memberType)
    {
        $this->container['memberType'] = $memberType;
        return $this;
    }

    /**
    * Gets urn
    *  共享组织的URN，仅当member_type类型为organization时，才会返回urn字段。
    *
    * @return string
    */
    public function getUrn()
    {
        return $this->container['urn'];
    }

    /**
    * Sets urn
    *
    * @param string $urn 共享组织的URN，仅当member_type类型为organization时，才会返回urn字段。
    *
    * @return $this
    */
    public function setUrn($urn)
    {
        $this->container['urn'] = $urn;
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

