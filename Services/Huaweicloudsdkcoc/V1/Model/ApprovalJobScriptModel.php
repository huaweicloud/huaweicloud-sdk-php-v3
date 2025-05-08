<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApprovalJobScriptModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApprovalJobScriptModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  审批状态 APPROVED:审批通过 REJECTED:审批不通过
    * comments  审批意见
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'comments' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  审批状态 APPROVED:审批通过 REJECTED:审批不通过
    * comments  审批意见
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'comments' => null
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
    * status  审批状态 APPROVED:审批通过 REJECTED:审批不通过
    * comments  审批意见
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'comments' => 'comments'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  审批状态 APPROVED:审批通过 REJECTED:审批不通过
    * comments  审批意见
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'comments' => 'setComments'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  审批状态 APPROVED:审批通过 REJECTED:审批不通过
    * comments  审批意见
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'comments' => 'getComments'
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
    const STATUS_APPROVED = 'APPROVED';
    const STATUS_REJECTED = 'REJECTED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_APPROVED,
            self::STATUS_REJECTED,
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
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
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['comments']) && (mb_strlen($this->container['comments']) > 256)) {
                $invalidProperties[] = "invalid value for 'comments', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['comments']) && (mb_strlen($this->container['comments']) < 1)) {
                $invalidProperties[] = "invalid value for 'comments', the character length must be bigger than or equal to 1.";
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
    *  审批状态 APPROVED:审批通过 REJECTED:审批不通过
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
    * @param string $status 审批状态 APPROVED:审批通过 REJECTED:审批不通过
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets comments
    *  审批意见
    *
    * @return string|null
    */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
    * Sets comments
    *
    * @param string|null $comments 审批意见
    *
    * @return $this
    */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;
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

