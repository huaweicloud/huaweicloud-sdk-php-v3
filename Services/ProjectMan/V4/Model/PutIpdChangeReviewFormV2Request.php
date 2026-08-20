<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PutIpdChangeReviewFormV2Request implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PutIpdChangeReviewFormV2Request';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    * reviewId  评审单ID，评审单唯一标识。通过查询评审单列表（BR/GR）接口获取，响应消息体中的id字段的值就是评审单ID。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'reviewId' => 'string',
            'body' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\ReviewUpdateBodyV2'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    * reviewId  评审单ID，评审单唯一标识。通过查询评审单列表（BR/GR）接口获取，响应消息体中的id字段的值就是评审单ID。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'reviewId' => null,
        'body' => null
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
    * projectId  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    * reviewId  评审单ID，评审单唯一标识。通过查询评审单列表（BR/GR）接口获取，响应消息体中的id字段的值就是评审单ID。
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'reviewId' => 'review_id',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    * reviewId  评审单ID，评审单唯一标识。通过查询评审单列表（BR/GR）接口获取，响应消息体中的id字段的值就是评审单ID。
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'reviewId' => 'setReviewId',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    * reviewId  评审单ID，评审单唯一标识。通过查询评审单列表（BR/GR）接口获取，响应消息体中的id字段的值就是评审单ID。
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'reviewId' => 'getReviewId',
            'body' => 'getBody'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['reviewId'] = isset($data['reviewId']) ? $data['reviewId'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['reviewId'] === null) {
            $invalidProperties[] = "'reviewId' can't be null";
        }
            if ((mb_strlen($this->container['reviewId']) > 19)) {
                $invalidProperties[] = "invalid value for 'reviewId', the character length must be smaller than or equal to 19.";
            }
            if ((mb_strlen($this->container['reviewId']) < 18)) {
                $invalidProperties[] = "invalid value for 'reviewId', the character length must be bigger than or equal to 18.";
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
    * Gets projectId
    *  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets reviewId
    *  评审单ID，评审单唯一标识。通过查询评审单列表（BR/GR）接口获取，响应消息体中的id字段的值就是评审单ID。
    *
    * @return string
    */
    public function getReviewId()
    {
        return $this->container['reviewId'];
    }

    /**
    * Sets reviewId
    *
    * @param string $reviewId 评审单ID，评审单唯一标识。通过查询评审单列表（BR/GR）接口获取，响应消息体中的id字段的值就是评审单ID。
    *
    * @return $this
    */
    public function setReviewId($reviewId)
    {
        $this->container['reviewId'] = $reviewId;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\ReviewUpdateBodyV2|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\ReviewUpdateBodyV2|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

