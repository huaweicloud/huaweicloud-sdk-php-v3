<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OpExternalInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OpExternalInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * reviewIdList  审核详情id列表
    * algorithmFailureReason  算法侧失败原因
    * adminAuditFailureReason  管理员驳回的原因
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'reviewIdList' => 'string[]',
            'algorithmFailureReason' => 'string',
            'adminAuditFailureReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * reviewIdList  审核详情id列表
    * algorithmFailureReason  算法侧失败原因
    * adminAuditFailureReason  管理员驳回的原因
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'reviewIdList' => null,
        'algorithmFailureReason' => null,
        'adminAuditFailureReason' => null
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
    * reviewIdList  审核详情id列表
    * algorithmFailureReason  算法侧失败原因
    * adminAuditFailureReason  管理员驳回的原因
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'reviewIdList' => 'review_id_list',
            'algorithmFailureReason' => 'algorithm_failure_reason',
            'adminAuditFailureReason' => 'admin_audit_failure_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * reviewIdList  审核详情id列表
    * algorithmFailureReason  算法侧失败原因
    * adminAuditFailureReason  管理员驳回的原因
    *
    * @var string[]
    */
    protected static $setters = [
            'reviewIdList' => 'setReviewIdList',
            'algorithmFailureReason' => 'setAlgorithmFailureReason',
            'adminAuditFailureReason' => 'setAdminAuditFailureReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * reviewIdList  审核详情id列表
    * algorithmFailureReason  算法侧失败原因
    * adminAuditFailureReason  管理员驳回的原因
    *
    * @var string[]
    */
    protected static $getters = [
            'reviewIdList' => 'getReviewIdList',
            'algorithmFailureReason' => 'getAlgorithmFailureReason',
            'adminAuditFailureReason' => 'getAdminAuditFailureReason'
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
        $this->container['reviewIdList'] = isset($data['reviewIdList']) ? $data['reviewIdList'] : null;
        $this->container['algorithmFailureReason'] = isset($data['algorithmFailureReason']) ? $data['algorithmFailureReason'] : null;
        $this->container['adminAuditFailureReason'] = isset($data['adminAuditFailureReason']) ? $data['adminAuditFailureReason'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['algorithmFailureReason']) && (mb_strlen($this->container['algorithmFailureReason']) > 4096)) {
                $invalidProperties[] = "invalid value for 'algorithmFailureReason', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['algorithmFailureReason']) && (mb_strlen($this->container['algorithmFailureReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'algorithmFailureReason', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['adminAuditFailureReason']) && (mb_strlen($this->container['adminAuditFailureReason']) > 4096)) {
                $invalidProperties[] = "invalid value for 'adminAuditFailureReason', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['adminAuditFailureReason']) && (mb_strlen($this->container['adminAuditFailureReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'adminAuditFailureReason', the character length must be bigger than or equal to 0.";
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
    * Gets reviewIdList
    *  审核详情id列表
    *
    * @return string[]|null
    */
    public function getReviewIdList()
    {
        return $this->container['reviewIdList'];
    }

    /**
    * Sets reviewIdList
    *
    * @param string[]|null $reviewIdList 审核详情id列表
    *
    * @return $this
    */
    public function setReviewIdList($reviewIdList)
    {
        $this->container['reviewIdList'] = $reviewIdList;
        return $this;
    }

    /**
    * Gets algorithmFailureReason
    *  算法侧失败原因
    *
    * @return string|null
    */
    public function getAlgorithmFailureReason()
    {
        return $this->container['algorithmFailureReason'];
    }

    /**
    * Sets algorithmFailureReason
    *
    * @param string|null $algorithmFailureReason 算法侧失败原因
    *
    * @return $this
    */
    public function setAlgorithmFailureReason($algorithmFailureReason)
    {
        $this->container['algorithmFailureReason'] = $algorithmFailureReason;
        return $this;
    }

    /**
    * Gets adminAuditFailureReason
    *  管理员驳回的原因
    *
    * @return string|null
    */
    public function getAdminAuditFailureReason()
    {
        return $this->container['adminAuditFailureReason'];
    }

    /**
    * Sets adminAuditFailureReason
    *
    * @param string|null $adminAuditFailureReason 管理员驳回的原因
    *
    * @return $this
    */
    public function setAdminAuditFailureReason($adminAuditFailureReason)
    {
        $this->container['adminAuditFailureReason'] = $adminAuditFailureReason;
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

