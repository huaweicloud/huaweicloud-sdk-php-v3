<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuthorizationResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuthorizationResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userId  **参数解释**：用户ID，获取方法请参见[获取用户ID和名称](modelarts_03_0006.xml)。当user_id为all时，表示对所有IAM子用户进行授权，如果已有部分用户已授权，则更新授权。仅当授权类型为委托时，需要该字段。 **约束限制**：不涉及。 **取值范围**：字符串长度在3到32个字符之间，支持大小写字母、数字、中划线。 **默认取值**：不涉及。
    * type  **参数解释**：授权类型。推荐使用委托方式。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - agency：委托 - credential：访问密钥（AK/SK）  **默认取值**：不涉及。
    * content  **参数解释**：授权内容。 **约束限制**： - 当授权类型是委托，该字段为委托名称。 - 当授权类型是访问密钥，该字段为访问密钥ID（AK）。  **取值范围**：长度限制64个字符。 **默认取值**：不涉及。
    * secretKey  **参数解释**：秘密访问密钥（SK）。 **约束限制**：仅当授权类型为访问密钥时，需要该字段。 **取值范围**：字符串长度为40，支持大小写字母、数字。 **默认取值**：不涉及。
    * userName  **参数解释**：用户名。 **约束限制**：当user_id为all-users时，显示为所有用户。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * userType  **参数解释**：用户类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - iam：授权对象类型是IAM子用户，必传字段user_id。 - federate：授权对象类型是联邦用户，必传字段user_name，user_id不传。 - federation-group：授权对象类型是联邦用户组，必传字段user_id，值为联邦用户组的id。 - grant：授权对象类型是委托用户，必传字段user_id，值为委托用户的委托id。 - all-users：授权对象类型是所有用户，必传字段user_id值是all。  **默认取值**：IAM。
    * createTime  **参数解释**：创建时间戳。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userId' => 'string',
            'type' => 'string',
            'content' => 'string',
            'secretKey' => 'string',
            'userName' => 'string',
            'userType' => 'string',
            'createTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userId  **参数解释**：用户ID，获取方法请参见[获取用户ID和名称](modelarts_03_0006.xml)。当user_id为all时，表示对所有IAM子用户进行授权，如果已有部分用户已授权，则更新授权。仅当授权类型为委托时，需要该字段。 **约束限制**：不涉及。 **取值范围**：字符串长度在3到32个字符之间，支持大小写字母、数字、中划线。 **默认取值**：不涉及。
    * type  **参数解释**：授权类型。推荐使用委托方式。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - agency：委托 - credential：访问密钥（AK/SK）  **默认取值**：不涉及。
    * content  **参数解释**：授权内容。 **约束限制**： - 当授权类型是委托，该字段为委托名称。 - 当授权类型是访问密钥，该字段为访问密钥ID（AK）。  **取值范围**：长度限制64个字符。 **默认取值**：不涉及。
    * secretKey  **参数解释**：秘密访问密钥（SK）。 **约束限制**：仅当授权类型为访问密钥时，需要该字段。 **取值范围**：字符串长度为40，支持大小写字母、数字。 **默认取值**：不涉及。
    * userName  **参数解释**：用户名。 **约束限制**：当user_id为all-users时，显示为所有用户。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * userType  **参数解释**：用户类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - iam：授权对象类型是IAM子用户，必传字段user_id。 - federate：授权对象类型是联邦用户，必传字段user_name，user_id不传。 - federation-group：授权对象类型是联邦用户组，必传字段user_id，值为联邦用户组的id。 - grant：授权对象类型是委托用户，必传字段user_id，值为委托用户的委托id。 - all-users：授权对象类型是所有用户，必传字段user_id值是all。  **默认取值**：IAM。
    * createTime  **参数解释**：创建时间戳。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userId' => null,
        'type' => null,
        'content' => null,
        'secretKey' => null,
        'userName' => null,
        'userType' => null,
        'createTime' => 'int64'
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
    * userId  **参数解释**：用户ID，获取方法请参见[获取用户ID和名称](modelarts_03_0006.xml)。当user_id为all时，表示对所有IAM子用户进行授权，如果已有部分用户已授权，则更新授权。仅当授权类型为委托时，需要该字段。 **约束限制**：不涉及。 **取值范围**：字符串长度在3到32个字符之间，支持大小写字母、数字、中划线。 **默认取值**：不涉及。
    * type  **参数解释**：授权类型。推荐使用委托方式。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - agency：委托 - credential：访问密钥（AK/SK）  **默认取值**：不涉及。
    * content  **参数解释**：授权内容。 **约束限制**： - 当授权类型是委托，该字段为委托名称。 - 当授权类型是访问密钥，该字段为访问密钥ID（AK）。  **取值范围**：长度限制64个字符。 **默认取值**：不涉及。
    * secretKey  **参数解释**：秘密访问密钥（SK）。 **约束限制**：仅当授权类型为访问密钥时，需要该字段。 **取值范围**：字符串长度为40，支持大小写字母、数字。 **默认取值**：不涉及。
    * userName  **参数解释**：用户名。 **约束限制**：当user_id为all-users时，显示为所有用户。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * userType  **参数解释**：用户类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - iam：授权对象类型是IAM子用户，必传字段user_id。 - federate：授权对象类型是联邦用户，必传字段user_name，user_id不传。 - federation-group：授权对象类型是联邦用户组，必传字段user_id，值为联邦用户组的id。 - grant：授权对象类型是委托用户，必传字段user_id，值为委托用户的委托id。 - all-users：授权对象类型是所有用户，必传字段user_id值是all。  **默认取值**：IAM。
    * createTime  **参数解释**：创建时间戳。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userId' => 'user_id',
            'type' => 'type',
            'content' => 'content',
            'secretKey' => 'secret_key',
            'userName' => 'user_name',
            'userType' => 'user_type',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userId  **参数解释**：用户ID，获取方法请参见[获取用户ID和名称](modelarts_03_0006.xml)。当user_id为all时，表示对所有IAM子用户进行授权，如果已有部分用户已授权，则更新授权。仅当授权类型为委托时，需要该字段。 **约束限制**：不涉及。 **取值范围**：字符串长度在3到32个字符之间，支持大小写字母、数字、中划线。 **默认取值**：不涉及。
    * type  **参数解释**：授权类型。推荐使用委托方式。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - agency：委托 - credential：访问密钥（AK/SK）  **默认取值**：不涉及。
    * content  **参数解释**：授权内容。 **约束限制**： - 当授权类型是委托，该字段为委托名称。 - 当授权类型是访问密钥，该字段为访问密钥ID（AK）。  **取值范围**：长度限制64个字符。 **默认取值**：不涉及。
    * secretKey  **参数解释**：秘密访问密钥（SK）。 **约束限制**：仅当授权类型为访问密钥时，需要该字段。 **取值范围**：字符串长度为40，支持大小写字母、数字。 **默认取值**：不涉及。
    * userName  **参数解释**：用户名。 **约束限制**：当user_id为all-users时，显示为所有用户。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * userType  **参数解释**：用户类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - iam：授权对象类型是IAM子用户，必传字段user_id。 - federate：授权对象类型是联邦用户，必传字段user_name，user_id不传。 - federation-group：授权对象类型是联邦用户组，必传字段user_id，值为联邦用户组的id。 - grant：授权对象类型是委托用户，必传字段user_id，值为委托用户的委托id。 - all-users：授权对象类型是所有用户，必传字段user_id值是all。  **默认取值**：IAM。
    * createTime  **参数解释**：创建时间戳。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'userId' => 'setUserId',
            'type' => 'setType',
            'content' => 'setContent',
            'secretKey' => 'setSecretKey',
            'userName' => 'setUserName',
            'userType' => 'setUserType',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userId  **参数解释**：用户ID，获取方法请参见[获取用户ID和名称](modelarts_03_0006.xml)。当user_id为all时，表示对所有IAM子用户进行授权，如果已有部分用户已授权，则更新授权。仅当授权类型为委托时，需要该字段。 **约束限制**：不涉及。 **取值范围**：字符串长度在3到32个字符之间，支持大小写字母、数字、中划线。 **默认取值**：不涉及。
    * type  **参数解释**：授权类型。推荐使用委托方式。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - agency：委托 - credential：访问密钥（AK/SK）  **默认取值**：不涉及。
    * content  **参数解释**：授权内容。 **约束限制**： - 当授权类型是委托，该字段为委托名称。 - 当授权类型是访问密钥，该字段为访问密钥ID（AK）。  **取值范围**：长度限制64个字符。 **默认取值**：不涉及。
    * secretKey  **参数解释**：秘密访问密钥（SK）。 **约束限制**：仅当授权类型为访问密钥时，需要该字段。 **取值范围**：字符串长度为40，支持大小写字母、数字。 **默认取值**：不涉及。
    * userName  **参数解释**：用户名。 **约束限制**：当user_id为all-users时，显示为所有用户。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * userType  **参数解释**：用户类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - iam：授权对象类型是IAM子用户，必传字段user_id。 - federate：授权对象类型是联邦用户，必传字段user_name，user_id不传。 - federation-group：授权对象类型是联邦用户组，必传字段user_id，值为联邦用户组的id。 - grant：授权对象类型是委托用户，必传字段user_id，值为委托用户的委托id。 - all-users：授权对象类型是所有用户，必传字段user_id值是all。  **默认取值**：IAM。
    * createTime  **参数解释**：创建时间戳。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'userId' => 'getUserId',
            'type' => 'getType',
            'content' => 'getContent',
            'secretKey' => 'getSecretKey',
            'userName' => 'getUserName',
            'userType' => 'getUserType',
            'createTime' => 'getCreateTime'
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
    const TYPE_AGENCY = 'agency';
    const TYPE_CREDENTIAL = 'credential';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_AGENCY,
            self::TYPE_CREDENTIAL,
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
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['secretKey'] = isset($data['secretKey']) ? $data['secretKey'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['userType'] = isset($data['userType']) ? $data['userType'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
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
    * Gets userId
    *  **参数解释**：用户ID，获取方法请参见[获取用户ID和名称](modelarts_03_0006.xml)。当user_id为all时，表示对所有IAM子用户进行授权，如果已有部分用户已授权，则更新授权。仅当授权类型为委托时，需要该字段。 **约束限制**：不涉及。 **取值范围**：字符串长度在3到32个字符之间，支持大小写字母、数字、中划线。 **默认取值**：不涉及。
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
    * @param string|null $userId **参数解释**：用户ID，获取方法请参见[获取用户ID和名称](modelarts_03_0006.xml)。当user_id为all时，表示对所有IAM子用户进行授权，如果已有部分用户已授权，则更新授权。仅当授权类型为委托时，需要该字段。 **约束限制**：不涉及。 **取值范围**：字符串长度在3到32个字符之间，支持大小写字母、数字、中划线。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：授权类型。推荐使用委托方式。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - agency：委托 - credential：访问密钥（AK/SK）  **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**：授权类型。推荐使用委托方式。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - agency：委托 - credential：访问密钥（AK/SK）  **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets content
    *  **参数解释**：授权内容。 **约束限制**： - 当授权类型是委托，该字段为委托名称。 - 当授权类型是访问密钥，该字段为访问密钥ID（AK）。  **取值范围**：长度限制64个字符。 **默认取值**：不涉及。
    *
    * @return string
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string $content **参数解释**：授权内容。 **约束限制**： - 当授权类型是委托，该字段为委托名称。 - 当授权类型是访问密钥，该字段为访问密钥ID（AK）。  **取值范围**：长度限制64个字符。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets secretKey
    *  **参数解释**：秘密访问密钥（SK）。 **约束限制**：仅当授权类型为访问密钥时，需要该字段。 **取值范围**：字符串长度为40，支持大小写字母、数字。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getSecretKey()
    {
        return $this->container['secretKey'];
    }

    /**
    * Sets secretKey
    *
    * @param string|null $secretKey **参数解释**：秘密访问密钥（SK）。 **约束限制**：仅当授权类型为访问密钥时，需要该字段。 **取值范围**：字符串长度为40，支持大小写字母、数字。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setSecretKey($secretKey)
    {
        $this->container['secretKey'] = $secretKey;
        return $this;
    }

    /**
    * Gets userName
    *  **参数解释**：用户名。 **约束限制**：当user_id为all-users时，显示为所有用户。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $userName **参数解释**：用户名。 **约束限制**：当user_id为all-users时，显示为所有用户。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    *  **参数解释**：用户类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - iam：授权对象类型是IAM子用户，必传字段user_id。 - federate：授权对象类型是联邦用户，必传字段user_name，user_id不传。 - federation-group：授权对象类型是联邦用户组，必传字段user_id，值为联邦用户组的id。 - grant：授权对象类型是委托用户，必传字段user_id，值为委托用户的委托id。 - all-users：授权对象类型是所有用户，必传字段user_id值是all。  **默认取值**：IAM。
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
    * @param string|null $userType **参数解释**：用户类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - iam：授权对象类型是IAM子用户，必传字段user_id。 - federate：授权对象类型是联邦用户，必传字段user_name，user_id不传。 - federation-group：授权对象类型是联邦用户组，必传字段user_id，值为联邦用户组的id。 - grant：授权对象类型是委托用户，必传字段user_id，值为委托用户的委托id。 - all-users：授权对象类型是所有用户，必传字段user_id值是all。  **默认取值**：IAM。
    *
    * @return $this
    */
    public function setUserType($userType)
    {
        $this->container['userType'] = $userType;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释**：创建时间戳。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime **参数解释**：创建时间戳。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

