<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssociateGroupUserGroupResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssociateGroupUserGroupResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * success  关联成功成员列表
    * failure  关联失败成员列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'success' => '\HuaweiCloud\SDK\CodeHub\V4\Model\MemberBaseDto[]',
            'failure' => '\HuaweiCloud\SDK\CodeHub\V4\Model\FailureForBatchCreateGroupMembersDto[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * success  关联成功成员列表
    * failure  关联失败成员列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'success' => null,
        'failure' => null
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
    * success  关联成功成员列表
    * failure  关联失败成员列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'success' => 'success',
            'failure' => 'failure'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * success  关联成功成员列表
    * failure  关联失败成员列表
    *
    * @var string[]
    */
    protected static $setters = [
            'success' => 'setSuccess',
            'failure' => 'setFailure'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * success  关联成功成员列表
    * failure  关联失败成员列表
    *
    * @var string[]
    */
    protected static $getters = [
            'success' => 'getSuccess',
            'failure' => 'getFailure'
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
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['failure'] = isset($data['failure']) ? $data['failure'] : null;
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
    * Gets success
    *  关联成功成员列表
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\MemberBaseDto[]|null
    */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
    * Sets success
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\MemberBaseDto[]|null $success 关联成功成员列表
    *
    * @return $this
    */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;
        return $this;
    }

    /**
    * Gets failure
    *  关联失败成员列表
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\FailureForBatchCreateGroupMembersDto[]|null
    */
    public function getFailure()
    {
        return $this->container['failure'];
    }

    /**
    * Sets failure
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\FailureForBatchCreateGroupMembersDto[]|null $failure 关联失败成员列表
    *
    * @return $this
    */
    public function setFailure($failure)
    {
        $this->container['failure'] = $failure;
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

