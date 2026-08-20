<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReviewOpinionEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReviewOpinionEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * category  评审意见对象类型，固定为Opinion。
    * coId  评审意见对象关联的变更对象ID。
    * createdBy  createdBy
    * createdDate  评审意见创建时间。
    * currOwner  currOwner
    * id  评审意见对象ID。
    * modifiedDate  评审意见最后修改时间。
    * reviewComments  评审意见。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'category' => 'string',
            'coId' => 'string',
            'createdBy' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity',
            'createdDate' => 'string',
            'currOwner' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity',
            'id' => 'string',
            'modifiedDate' => 'string',
            'reviewComments' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * category  评审意见对象类型，固定为Opinion。
    * coId  评审意见对象关联的变更对象ID。
    * createdBy  createdBy
    * createdDate  评审意见创建时间。
    * currOwner  currOwner
    * id  评审意见对象ID。
    * modifiedDate  评审意见最后修改时间。
    * reviewComments  评审意见。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'category' => null,
        'coId' => null,
        'createdBy' => null,
        'createdDate' => null,
        'currOwner' => null,
        'id' => null,
        'modifiedDate' => null,
        'reviewComments' => null
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
    * category  评审意见对象类型，固定为Opinion。
    * coId  评审意见对象关联的变更对象ID。
    * createdBy  createdBy
    * createdDate  评审意见创建时间。
    * currOwner  currOwner
    * id  评审意见对象ID。
    * modifiedDate  评审意见最后修改时间。
    * reviewComments  评审意见。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'category' => 'category',
            'coId' => 'co_id',
            'createdBy' => 'created_by',
            'createdDate' => 'created_date',
            'currOwner' => 'curr_owner',
            'id' => 'id',
            'modifiedDate' => 'modified_date',
            'reviewComments' => 'review_comments'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * category  评审意见对象类型，固定为Opinion。
    * coId  评审意见对象关联的变更对象ID。
    * createdBy  createdBy
    * createdDate  评审意见创建时间。
    * currOwner  currOwner
    * id  评审意见对象ID。
    * modifiedDate  评审意见最后修改时间。
    * reviewComments  评审意见。
    *
    * @var string[]
    */
    protected static $setters = [
            'category' => 'setCategory',
            'coId' => 'setCoId',
            'createdBy' => 'setCreatedBy',
            'createdDate' => 'setCreatedDate',
            'currOwner' => 'setCurrOwner',
            'id' => 'setId',
            'modifiedDate' => 'setModifiedDate',
            'reviewComments' => 'setReviewComments'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * category  评审意见对象类型，固定为Opinion。
    * coId  评审意见对象关联的变更对象ID。
    * createdBy  createdBy
    * createdDate  评审意见创建时间。
    * currOwner  currOwner
    * id  评审意见对象ID。
    * modifiedDate  评审意见最后修改时间。
    * reviewComments  评审意见。
    *
    * @var string[]
    */
    protected static $getters = [
            'category' => 'getCategory',
            'coId' => 'getCoId',
            'createdBy' => 'getCreatedBy',
            'createdDate' => 'getCreatedDate',
            'currOwner' => 'getCurrOwner',
            'id' => 'getId',
            'modifiedDate' => 'getModifiedDate',
            'reviewComments' => 'getReviewComments'
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['coId'] = isset($data['coId']) ? $data['coId'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['currOwner'] = isset($data['currOwner']) ? $data['currOwner'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['modifiedDate'] = isset($data['modifiedDate']) ? $data['modifiedDate'] : null;
        $this->container['reviewComments'] = isset($data['reviewComments']) ? $data['reviewComments'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) > 7)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 7.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) < 7)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 7.";
            }
            if (!is_null($this->container['coId']) && (mb_strlen($this->container['coId']) > 19)) {
                $invalidProperties[] = "invalid value for 'coId', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['coId']) && (mb_strlen($this->container['coId']) < 18)) {
                $invalidProperties[] = "invalid value for 'coId', the character length must be bigger than or equal to 18.";
            }
            if (!is_null($this->container['createdDate']) && (mb_strlen($this->container['createdDate']) > 32)) {
                $invalidProperties[] = "invalid value for 'createdDate', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['createdDate']) && (mb_strlen($this->container['createdDate']) < 0)) {
                $invalidProperties[] = "invalid value for 'createdDate', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 19)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 18)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 18.";
            }
            if (!is_null($this->container['modifiedDate']) && (mb_strlen($this->container['modifiedDate']) > 32)) {
                $invalidProperties[] = "invalid value for 'modifiedDate', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['modifiedDate']) && (mb_strlen($this->container['modifiedDate']) < 0)) {
                $invalidProperties[] = "invalid value for 'modifiedDate', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reviewComments']) && (mb_strlen($this->container['reviewComments']) > 256)) {
                $invalidProperties[] = "invalid value for 'reviewComments', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['reviewComments']) && (mb_strlen($this->container['reviewComments']) < 0)) {
                $invalidProperties[] = "invalid value for 'reviewComments', the character length must be bigger than or equal to 0.";
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
    * Gets category
    *  评审意见对象类型，固定为Opinion。
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 评审意见对象类型，固定为Opinion。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets coId
    *  评审意见对象关联的变更对象ID。
    *
    * @return string|null
    */
    public function getCoId()
    {
        return $this->container['coId'];
    }

    /**
    * Sets coId
    *
    * @param string|null $coId 评审意见对象关联的变更对象ID。
    *
    * @return $this
    */
    public function setCoId($coId)
    {
        $this->container['coId'] = $coId;
        return $this;
    }

    /**
    * Gets createdBy
    *  createdBy
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null $createdBy createdBy
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets createdDate
    *  评审意见创建时间。
    *
    * @return string|null
    */
    public function getCreatedDate()
    {
        return $this->container['createdDate'];
    }

    /**
    * Sets createdDate
    *
    * @param string|null $createdDate 评审意见创建时间。
    *
    * @return $this
    */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;
        return $this;
    }

    /**
    * Gets currOwner
    *  currOwner
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null
    */
    public function getCurrOwner()
    {
        return $this->container['currOwner'];
    }

    /**
    * Sets currOwner
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null $currOwner currOwner
    *
    * @return $this
    */
    public function setCurrOwner($currOwner)
    {
        $this->container['currOwner'] = $currOwner;
        return $this;
    }

    /**
    * Gets id
    *  评审意见对象ID。
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
    * @param string|null $id 评审意见对象ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets modifiedDate
    *  评审意见最后修改时间。
    *
    * @return string|null
    */
    public function getModifiedDate()
    {
        return $this->container['modifiedDate'];
    }

    /**
    * Sets modifiedDate
    *
    * @param string|null $modifiedDate 评审意见最后修改时间。
    *
    * @return $this
    */
    public function setModifiedDate($modifiedDate)
    {
        $this->container['modifiedDate'] = $modifiedDate;
        return $this;
    }

    /**
    * Gets reviewComments
    *  评审意见。
    *
    * @return string|null
    */
    public function getReviewComments()
    {
        return $this->container['reviewComments'];
    }

    /**
    * Sets reviewComments
    *
    * @param string|null $reviewComments 评审意见。
    *
    * @return $this
    */
    public function setReviewComments($reviewComments)
    {
        $this->container['reviewComments'] = $reviewComments;
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

