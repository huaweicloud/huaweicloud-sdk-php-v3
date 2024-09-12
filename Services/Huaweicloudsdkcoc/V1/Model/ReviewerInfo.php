<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReviewerInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReviewerInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * reviewerName  审批人名称（IAM用户名）
    * reviewerId  审批人ID（IAM用户Id）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'reviewerName' => 'string',
            'reviewerId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * reviewerName  审批人名称（IAM用户名）
    * reviewerId  审批人ID（IAM用户Id）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'reviewerName' => null,
        'reviewerId' => null
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
    * reviewerName  审批人名称（IAM用户名）
    * reviewerId  审批人ID（IAM用户Id）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'reviewerName' => 'reviewer_name',
            'reviewerId' => 'reviewer_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * reviewerName  审批人名称（IAM用户名）
    * reviewerId  审批人ID（IAM用户Id）
    *
    * @var string[]
    */
    protected static $setters = [
            'reviewerName' => 'setReviewerName',
            'reviewerId' => 'setReviewerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * reviewerName  审批人名称（IAM用户名）
    * reviewerId  审批人ID（IAM用户Id）
    *
    * @var string[]
    */
    protected static $getters = [
            'reviewerName' => 'getReviewerName',
            'reviewerId' => 'getReviewerId'
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
        $this->container['reviewerName'] = isset($data['reviewerName']) ? $data['reviewerName'] : null;
        $this->container['reviewerId'] = isset($data['reviewerId']) ? $data['reviewerId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['reviewerName'] === null) {
            $invalidProperties[] = "'reviewerName' can't be null";
        }
            if ((mb_strlen($this->container['reviewerName']) > 64)) {
                $invalidProperties[] = "invalid value for 'reviewerName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['reviewerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'reviewerName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['reviewerId'] === null) {
            $invalidProperties[] = "'reviewerId' can't be null";
        }
            if ((mb_strlen($this->container['reviewerId']) > 32)) {
                $invalidProperties[] = "invalid value for 'reviewerId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['reviewerId']) < 0)) {
                $invalidProperties[] = "invalid value for 'reviewerId', the character length must be bigger than or equal to 0.";
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
    * Gets reviewerName
    *  审批人名称（IAM用户名）
    *
    * @return string
    */
    public function getReviewerName()
    {
        return $this->container['reviewerName'];
    }

    /**
    * Sets reviewerName
    *
    * @param string $reviewerName 审批人名称（IAM用户名）
    *
    * @return $this
    */
    public function setReviewerName($reviewerName)
    {
        $this->container['reviewerName'] = $reviewerName;
        return $this;
    }

    /**
    * Gets reviewerId
    *  审批人ID（IAM用户Id）
    *
    * @return string
    */
    public function getReviewerId()
    {
        return $this->container['reviewerId'];
    }

    /**
    * Sets reviewerId
    *
    * @param string $reviewerId 审批人ID（IAM用户Id）
    *
    * @return $this
    */
    public function setReviewerId($reviewerId)
    {
        $this->container['reviewerId'] = $reviewerId;
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
