<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListImagesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListImagesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imageType  镜像类型。 - private：私有镜像 - share：共享镜像
    * status  镜像状态。 - 0：CREATING 创建中 - 1：PRODUCTION 生产态，可使用 - 2：CREATE_FAILED 创建失败
    * offset  偏移量为一个大于等于0整数，表示查询该偏移量后面的所有的资源数，默认值为0。
    * limit  每页返回的资源个数。取值范围：1~100（默认值为100），一般设置为10、20、50。
    * imageId  镜像id
    * imageName  镜像名称
    * createSince  起始时间
    * createUntil  截止时间
    * srcProjectId  共享镜像账号的projectId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageType' => 'string',
            'status' => 'int',
            'offset' => 'int',
            'limit' => 'int',
            'imageId' => 'string',
            'imageName' => 'string',
            'createSince' => 'int',
            'createUntil' => 'int',
            'srcProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imageType  镜像类型。 - private：私有镜像 - share：共享镜像
    * status  镜像状态。 - 0：CREATING 创建中 - 1：PRODUCTION 生产态，可使用 - 2：CREATE_FAILED 创建失败
    * offset  偏移量为一个大于等于0整数，表示查询该偏移量后面的所有的资源数，默认值为0。
    * limit  每页返回的资源个数。取值范围：1~100（默认值为100），一般设置为10、20、50。
    * imageId  镜像id
    * imageName  镜像名称
    * createSince  起始时间
    * createUntil  截止时间
    * srcProjectId  共享镜像账号的projectId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageType' => null,
        'status' => null,
        'offset' => null,
        'limit' => null,
        'imageId' => null,
        'imageName' => null,
        'createSince' => 'int64',
        'createUntil' => 'int64',
        'srcProjectId' => null
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
    * imageType  镜像类型。 - private：私有镜像 - share：共享镜像
    * status  镜像状态。 - 0：CREATING 创建中 - 1：PRODUCTION 生产态，可使用 - 2：CREATE_FAILED 创建失败
    * offset  偏移量为一个大于等于0整数，表示查询该偏移量后面的所有的资源数，默认值为0。
    * limit  每页返回的资源个数。取值范围：1~100（默认值为100），一般设置为10、20、50。
    * imageId  镜像id
    * imageName  镜像名称
    * createSince  起始时间
    * createUntil  截止时间
    * srcProjectId  共享镜像账号的projectId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageType' => 'image_type',
            'status' => 'status',
            'offset' => 'offset',
            'limit' => 'limit',
            'imageId' => 'image_id',
            'imageName' => 'image_name',
            'createSince' => 'create_since',
            'createUntil' => 'create_until',
            'srcProjectId' => 'src_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imageType  镜像类型。 - private：私有镜像 - share：共享镜像
    * status  镜像状态。 - 0：CREATING 创建中 - 1：PRODUCTION 生产态，可使用 - 2：CREATE_FAILED 创建失败
    * offset  偏移量为一个大于等于0整数，表示查询该偏移量后面的所有的资源数，默认值为0。
    * limit  每页返回的资源个数。取值范围：1~100（默认值为100），一般设置为10、20、50。
    * imageId  镜像id
    * imageName  镜像名称
    * createSince  起始时间
    * createUntil  截止时间
    * srcProjectId  共享镜像账号的projectId
    *
    * @var string[]
    */
    protected static $setters = [
            'imageType' => 'setImageType',
            'status' => 'setStatus',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'imageId' => 'setImageId',
            'imageName' => 'setImageName',
            'createSince' => 'setCreateSince',
            'createUntil' => 'setCreateUntil',
            'srcProjectId' => 'setSrcProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imageType  镜像类型。 - private：私有镜像 - share：共享镜像
    * status  镜像状态。 - 0：CREATING 创建中 - 1：PRODUCTION 生产态，可使用 - 2：CREATE_FAILED 创建失败
    * offset  偏移量为一个大于等于0整数，表示查询该偏移量后面的所有的资源数，默认值为0。
    * limit  每页返回的资源个数。取值范围：1~100（默认值为100），一般设置为10、20、50。
    * imageId  镜像id
    * imageName  镜像名称
    * createSince  起始时间
    * createUntil  截止时间
    * srcProjectId  共享镜像账号的projectId
    *
    * @var string[]
    */
    protected static $getters = [
            'imageType' => 'getImageType',
            'status' => 'getStatus',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'imageId' => 'getImageId',
            'imageName' => 'getImageName',
            'createSince' => 'getCreateSince',
            'createUntil' => 'getCreateUntil',
            'srcProjectId' => 'getSrcProjectId'
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
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['createSince'] = isset($data['createSince']) ? $data['createSince'] : null;
        $this->container['createUntil'] = isset($data['createUntil']) ? $data['createUntil'] : null;
        $this->container['srcProjectId'] = isset($data['srcProjectId']) ? $data['srcProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) > 16)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] > 128)) {
                $invalidProperties[] = "invalid value for 'status', must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] < -128)) {
                $invalidProperties[] = "invalid value for 'status', must be bigger than or equal to -128.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 8096)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 8096.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 8096)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 8096.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) > 36)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 255)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createSince']) && ($this->container['createSince'] > 20000000000000)) {
                $invalidProperties[] = "invalid value for 'createSince', must be smaller than or equal to 20000000000000.";
            }
            if (!is_null($this->container['createSince']) && ($this->container['createSince'] < 0)) {
                $invalidProperties[] = "invalid value for 'createSince', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createUntil']) && ($this->container['createUntil'] > 20000000000000)) {
                $invalidProperties[] = "invalid value for 'createUntil', must be smaller than or equal to 20000000000000.";
            }
            if (!is_null($this->container['createUntil']) && ($this->container['createUntil'] < 0)) {
                $invalidProperties[] = "invalid value for 'createUntil', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['srcProjectId']) && (mb_strlen($this->container['srcProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'srcProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['srcProjectId']) && (mb_strlen($this->container['srcProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'srcProjectId', the character length must be bigger than or equal to 0.";
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
    * Gets imageType
    *  镜像类型。 - private：私有镜像 - share：共享镜像
    *
    * @return string|null
    */
    public function getImageType()
    {
        return $this->container['imageType'];
    }

    /**
    * Sets imageType
    *
    * @param string|null $imageType 镜像类型。 - private：私有镜像 - share：共享镜像
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
        return $this;
    }

    /**
    * Gets status
    *  镜像状态。 - 0：CREATING 创建中 - 1：PRODUCTION 生产态，可使用 - 2：CREATE_FAILED 创建失败
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 镜像状态。 - 0：CREATING 创建中 - 1：PRODUCTION 生产态，可使用 - 2：CREATE_FAILED 创建失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量为一个大于等于0整数，表示查询该偏移量后面的所有的资源数，默认值为0。
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
    * @param int|null $offset 偏移量为一个大于等于0整数，表示查询该偏移量后面的所有的资源数，默认值为0。
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
    *  每页返回的资源个数。取值范围：1~100（默认值为100），一般设置为10、20、50。
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
    * @param int|null $limit 每页返回的资源个数。取值范围：1~100（默认值为100），一般设置为10、20、50。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets imageId
    *  镜像id
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
    * @param string|null $imageId 镜像id
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets imageName
    *  镜像名称
    *
    * @return string|null
    */
    public function getImageName()
    {
        return $this->container['imageName'];
    }

    /**
    * Sets imageName
    *
    * @param string|null $imageName 镜像名称
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets createSince
    *  起始时间
    *
    * @return int|null
    */
    public function getCreateSince()
    {
        return $this->container['createSince'];
    }

    /**
    * Sets createSince
    *
    * @param int|null $createSince 起始时间
    *
    * @return $this
    */
    public function setCreateSince($createSince)
    {
        $this->container['createSince'] = $createSince;
        return $this;
    }

    /**
    * Gets createUntil
    *  截止时间
    *
    * @return int|null
    */
    public function getCreateUntil()
    {
        return $this->container['createUntil'];
    }

    /**
    * Sets createUntil
    *
    * @param int|null $createUntil 截止时间
    *
    * @return $this
    */
    public function setCreateUntil($createUntil)
    {
        $this->container['createUntil'] = $createUntil;
        return $this;
    }

    /**
    * Gets srcProjectId
    *  共享镜像账号的projectId
    *
    * @return string|null
    */
    public function getSrcProjectId()
    {
        return $this->container['srcProjectId'];
    }

    /**
    * Sets srcProjectId
    *
    * @param string|null $srcProjectId 共享镜像账号的projectId
    *
    * @return $this
    */
    public function setSrcProjectId($srcProjectId)
    {
        $this->container['srcProjectId'] = $srcProjectId;
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

