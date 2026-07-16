<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ViewWorkspaceResponseGrants implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ViewWorkspaceResponse_grants';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userId  IAM用户ID。此参数与user_name必填一个。两者都填优先使用user_id。
    * userName  IAM用户名称。此参数与user_id必填一个。
    * userType  参数解释： 授权用户类型。 约束限制： 如果是联邦用户或者委托用户的话必填。 取值范围： IAM:IAM用户, FEDERATE：联邦用户, AGENCY：委托用户。 默认取值： IAM。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userId' => 'string',
            'userName' => 'string',
            'userType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userId  IAM用户ID。此参数与user_name必填一个。两者都填优先使用user_id。
    * userName  IAM用户名称。此参数与user_id必填一个。
    * userType  参数解释： 授权用户类型。 约束限制： 如果是联邦用户或者委托用户的话必填。 取值范围： IAM:IAM用户, FEDERATE：联邦用户, AGENCY：委托用户。 默认取值： IAM。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userId' => null,
        'userName' => null,
        'userType' => null
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
    * userId  IAM用户ID。此参数与user_name必填一个。两者都填优先使用user_id。
    * userName  IAM用户名称。此参数与user_id必填一个。
    * userType  参数解释： 授权用户类型。 约束限制： 如果是联邦用户或者委托用户的话必填。 取值范围： IAM:IAM用户, FEDERATE：联邦用户, AGENCY：委托用户。 默认取值： IAM。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userId' => 'user_id',
            'userName' => 'user_name',
            'userType' => 'user_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userId  IAM用户ID。此参数与user_name必填一个。两者都填优先使用user_id。
    * userName  IAM用户名称。此参数与user_id必填一个。
    * userType  参数解释： 授权用户类型。 约束限制： 如果是联邦用户或者委托用户的话必填。 取值范围： IAM:IAM用户, FEDERATE：联邦用户, AGENCY：委托用户。 默认取值： IAM。
    *
    * @var string[]
    */
    protected static $setters = [
            'userId' => 'setUserId',
            'userName' => 'setUserName',
            'userType' => 'setUserType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userId  IAM用户ID。此参数与user_name必填一个。两者都填优先使用user_id。
    * userName  IAM用户名称。此参数与user_id必填一个。
    * userType  参数解释： 授权用户类型。 约束限制： 如果是联邦用户或者委托用户的话必填。 取值范围： IAM:IAM用户, FEDERATE：联邦用户, AGENCY：委托用户。 默认取值： IAM。
    *
    * @var string[]
    */
    protected static $getters = [
            'userId' => 'getUserId',
            'userName' => 'getUserName',
            'userType' => 'getUserType'
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
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['userType'] = isset($data['userType']) ? $data['userType'] : null;
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
    * Gets userId
    *  IAM用户ID。此参数与user_name必填一个。两者都填优先使用user_id。
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId IAM用户ID。此参数与user_name必填一个。两者都填优先使用user_id。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets userName
    *  IAM用户名称。此参数与user_id必填一个。
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName IAM用户名称。此参数与user_id必填一个。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets userType
    *  参数解释： 授权用户类型。 约束限制： 如果是联邦用户或者委托用户的话必填。 取值范围： IAM:IAM用户, FEDERATE：联邦用户, AGENCY：委托用户。 默认取值： IAM。
    *
    * @return string|null
    */
    public function getUserType()
    {
        return $this->container['userType'];
    }

    /**
    * Sets userType
    *
    * @param string|null $userType 参数解释： 授权用户类型。 约束限制： 如果是联邦用户或者委托用户的话必填。 取值范围： IAM:IAM用户, FEDERATE：联邦用户, AGENCY：委托用户。 默认取值： IAM。
    *
    * @return $this
    */
    public function setUserType($userType)
    {
        $this->container['userType'] = $userType;
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

