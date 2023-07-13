<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRealnameAuthenticationReviewResultResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRealnameAuthenticationReviewResultResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * reviewResult  实名认证审核结果，只有状态码为200并且已经提交过实名认证请求才返回： 0：审核中1：不通过2：通过
    * opinion  审批意见，只有状态码为200并且审核不通过才返回。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'reviewResult' => 'int',
            'opinion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * reviewResult  实名认证审核结果，只有状态码为200并且已经提交过实名认证请求才返回： 0：审核中1：不通过2：通过
    * opinion  审批意见，只有状态码为200并且审核不通过才返回。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'reviewResult' => 'int32',
        'opinion' => null
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
    * reviewResult  实名认证审核结果，只有状态码为200并且已经提交过实名认证请求才返回： 0：审核中1：不通过2：通过
    * opinion  审批意见，只有状态码为200并且审核不通过才返回。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'reviewResult' => 'review_result',
            'opinion' => 'opinion'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * reviewResult  实名认证审核结果，只有状态码为200并且已经提交过实名认证请求才返回： 0：审核中1：不通过2：通过
    * opinion  审批意见，只有状态码为200并且审核不通过才返回。
    *
    * @var string[]
    */
    protected static $setters = [
            'reviewResult' => 'setReviewResult',
            'opinion' => 'setOpinion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * reviewResult  实名认证审核结果，只有状态码为200并且已经提交过实名认证请求才返回： 0：审核中1：不通过2：通过
    * opinion  审批意见，只有状态码为200并且审核不通过才返回。
    *
    * @var string[]
    */
    protected static $getters = [
            'reviewResult' => 'getReviewResult',
            'opinion' => 'getOpinion'
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
        $this->container['reviewResult'] = isset($data['reviewResult']) ? $data['reviewResult'] : null;
        $this->container['opinion'] = isset($data['opinion']) ? $data['opinion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets reviewResult
    *  实名认证审核结果，只有状态码为200并且已经提交过实名认证请求才返回： 0：审核中1：不通过2：通过
    *
    * @return int|null
    */
    public function getReviewResult()
    {
        return $this->container['reviewResult'];
    }

    /**
    * Sets reviewResult
    *
    * @param int|null $reviewResult 实名认证审核结果，只有状态码为200并且已经提交过实名认证请求才返回： 0：审核中1：不通过2：通过
    *
    * @return $this
    */
    public function setReviewResult($reviewResult)
    {
        $this->container['reviewResult'] = $reviewResult;
        return $this;
    }

    /**
    * Gets opinion
    *  审批意见，只有状态码为200并且审核不通过才返回。
    *
    * @return string|null
    */
    public function getOpinion()
    {
        return $this->container['opinion'];
    }

    /**
    * Sets opinion
    *
    * @param string|null $opinion 审批意见，只有状态码为200并且审核不通过才返回。
    *
    * @return $this
    */
    public function setOpinion($opinion)
    {
        $this->container['opinion'] = $opinion;
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

