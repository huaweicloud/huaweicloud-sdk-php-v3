<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListImageMembersView implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListImageMembersView';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createTime  共享时间
    * updateTime  更新时间
    * imageId  镜像ID
    * memberId  被共享账号的PROJECT_ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createTime' => 'int',
            'updateTime' => 'int',
            'imageId' => 'string',
            'memberId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createTime  共享时间
    * updateTime  更新时间
    * imageId  镜像ID
    * memberId  被共享账号的PROJECT_ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'imageId' => null,
        'memberId' => null
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
    * createTime  共享时间
    * updateTime  更新时间
    * imageId  镜像ID
    * memberId  被共享账号的PROJECT_ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'imageId' => 'image_id',
            'memberId' => 'member_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createTime  共享时间
    * updateTime  更新时间
    * imageId  镜像ID
    * memberId  被共享账号的PROJECT_ID
    *
    * @var string[]
    */
    protected static $setters = [
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'imageId' => 'setImageId',
            'memberId' => 'setMemberId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createTime  共享时间
    * updateTime  更新时间
    * imageId  镜像ID
    * memberId  被共享账号的PROJECT_ID
    *
    * @var string[]
    */
    protected static $getters = [
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'imageId' => 'getImageId',
            'memberId' => 'getMemberId'
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
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['memberId'] = isset($data['memberId']) ? $data['memberId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 20000000000000)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 20000000000000.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 20000000000000)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 20000000000000.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) > 36)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['memberId']) && (mb_strlen($this->container['memberId']) > 64)) {
                $invalidProperties[] = "invalid value for 'memberId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['memberId']) && (mb_strlen($this->container['memberId']) < 0)) {
                $invalidProperties[] = "invalid value for 'memberId', the character length must be bigger than or equal to 0.";
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
    * Gets createTime
    *  共享时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 共享时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets imageId
    *  镜像ID
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
    * @param string|null $imageId 镜像ID
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
    *  被共享账号的PROJECT_ID
    *
    * @return string|null
    */
    public function getMemberId()
    {
        return $this->container['memberId'];
    }

    /**
    * Sets memberId
    *
    * @param string|null $memberId 被共享账号的PROJECT_ID
    *
    * @return $this
    */
    public function setMemberId($memberId)
    {
        $this->container['memberId'] = $memberId;
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

