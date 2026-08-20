<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CcbEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CcbEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * approvalTime  审批时间。
    * category  工作项类型，审批对象固定为CCB。
    * ccb2review  审批对象关联的评审单ID。
    * coId  关联的变更对象ID。
    * id  审批对象ID。
    * owner  owner
    * approvalComments  审批意见。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'approvalTime' => 'string',
            'category' => 'string',
            'ccb2review' => 'string',
            'coId' => 'string',
            'id' => 'string',
            'owner' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity',
            'approvalComments' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * approvalTime  审批时间。
    * category  工作项类型，审批对象固定为CCB。
    * ccb2review  审批对象关联的评审单ID。
    * coId  关联的变更对象ID。
    * id  审批对象ID。
    * owner  owner
    * approvalComments  审批意见。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'approvalTime' => null,
        'category' => null,
        'ccb2review' => null,
        'coId' => null,
        'id' => null,
        'owner' => null,
        'approvalComments' => null
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
    * approvalTime  审批时间。
    * category  工作项类型，审批对象固定为CCB。
    * ccb2review  审批对象关联的评审单ID。
    * coId  关联的变更对象ID。
    * id  审批对象ID。
    * owner  owner
    * approvalComments  审批意见。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'approvalTime' => 'approval_time',
            'category' => 'category',
            'ccb2review' => 'ccb2review',
            'coId' => 'co_id',
            'id' => 'id',
            'owner' => 'owner',
            'approvalComments' => 'approval_comments'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * approvalTime  审批时间。
    * category  工作项类型，审批对象固定为CCB。
    * ccb2review  审批对象关联的评审单ID。
    * coId  关联的变更对象ID。
    * id  审批对象ID。
    * owner  owner
    * approvalComments  审批意见。
    *
    * @var string[]
    */
    protected static $setters = [
            'approvalTime' => 'setApprovalTime',
            'category' => 'setCategory',
            'ccb2review' => 'setCcb2review',
            'coId' => 'setCoId',
            'id' => 'setId',
            'owner' => 'setOwner',
            'approvalComments' => 'setApprovalComments'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * approvalTime  审批时间。
    * category  工作项类型，审批对象固定为CCB。
    * ccb2review  审批对象关联的评审单ID。
    * coId  关联的变更对象ID。
    * id  审批对象ID。
    * owner  owner
    * approvalComments  审批意见。
    *
    * @var string[]
    */
    protected static $getters = [
            'approvalTime' => 'getApprovalTime',
            'category' => 'getCategory',
            'ccb2review' => 'getCcb2review',
            'coId' => 'getCoId',
            'id' => 'getId',
            'owner' => 'getOwner',
            'approvalComments' => 'getApprovalComments'
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
    const CATEGORY_CCB = 'CCB';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_CCB,
        ];
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
        $this->container['approvalTime'] = isset($data['approvalTime']) ? $data['approvalTime'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['ccb2review'] = isset($data['ccb2review']) ? $data['ccb2review'] : null;
        $this->container['coId'] = isset($data['coId']) ? $data['coId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['approvalComments'] = isset($data['approvalComments']) ? $data['approvalComments'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['approvalTime']) && (mb_strlen($this->container['approvalTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'approvalTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['approvalTime']) && (mb_strlen($this->container['approvalTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'approvalTime', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getCategoryAllowableValues();
                if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) > 3)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) < 3)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['ccb2review']) && (mb_strlen($this->container['ccb2review']) > 19)) {
                $invalidProperties[] = "invalid value for 'ccb2review', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['ccb2review']) && (mb_strlen($this->container['ccb2review']) < 18)) {
                $invalidProperties[] = "invalid value for 'ccb2review', the character length must be bigger than or equal to 18.";
            }
            if (!is_null($this->container['coId']) && (mb_strlen($this->container['coId']) > 19)) {
                $invalidProperties[] = "invalid value for 'coId', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['coId']) && (mb_strlen($this->container['coId']) < 18)) {
                $invalidProperties[] = "invalid value for 'coId', the character length must be bigger than or equal to 18.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 19)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 18)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 18.";
            }
            if (!is_null($this->container['approvalComments']) && (mb_strlen($this->container['approvalComments']) > 256)) {
                $invalidProperties[] = "invalid value for 'approvalComments', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['approvalComments']) && (mb_strlen($this->container['approvalComments']) < 0)) {
                $invalidProperties[] = "invalid value for 'approvalComments', the character length must be bigger than or equal to 0.";
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
    * Gets approvalTime
    *  审批时间。
    *
    * @return string|null
    */
    public function getApprovalTime()
    {
        return $this->container['approvalTime'];
    }

    /**
    * Sets approvalTime
    *
    * @param string|null $approvalTime 审批时间。
    *
    * @return $this
    */
    public function setApprovalTime($approvalTime)
    {
        $this->container['approvalTime'] = $approvalTime;
        return $this;
    }

    /**
    * Gets category
    *  工作项类型，审批对象固定为CCB。
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
    * @param string|null $category 工作项类型，审批对象固定为CCB。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets ccb2review
    *  审批对象关联的评审单ID。
    *
    * @return string|null
    */
    public function getCcb2review()
    {
        return $this->container['ccb2review'];
    }

    /**
    * Sets ccb2review
    *
    * @param string|null $ccb2review 审批对象关联的评审单ID。
    *
    * @return $this
    */
    public function setCcb2review($ccb2review)
    {
        $this->container['ccb2review'] = $ccb2review;
        return $this;
    }

    /**
    * Gets coId
    *  关联的变更对象ID。
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
    * @param string|null $coId 关联的变更对象ID。
    *
    * @return $this
    */
    public function setCoId($coId)
    {
        $this->container['coId'] = $coId;
        return $this;
    }

    /**
    * Gets id
    *  审批对象ID。
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
    * @param string|null $id 审批对象ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets owner
    *  owner
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null $owner owner
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets approvalComments
    *  审批意见。
    *
    * @return string|null
    */
    public function getApprovalComments()
    {
        return $this->container['approvalComments'];
    }

    /**
    * Sets approvalComments
    *
    * @param string|null $approvalComments 审批意见。
    *
    * @return $this
    */
    public function setApprovalComments($approvalComments)
    {
        $this->container['approvalComments'] = $approvalComments;
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

