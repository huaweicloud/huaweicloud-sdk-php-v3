<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CommitStatisticsResultCommitDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CommitStatisticsResultCommitDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authorName  **参数解释：** 作者名称。
    * date  **参数解释：** 提交日期。
    * nickName  **参数解释：** 昵称。
    * tenantName  **参数解释：** 租户名。
    * userName  **参数解释：** 用户名。
    * isMerge  **参数解释：** 是否通过merge合入。 **取值范围：** - true，通过merge合入。 - false，非通过merge合入。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authorName' => 'string',
            'date' => 'string',
            'nickName' => 'string',
            'tenantName' => 'string',
            'userName' => 'string',
            'isMerge' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authorName  **参数解释：** 作者名称。
    * date  **参数解释：** 提交日期。
    * nickName  **参数解释：** 昵称。
    * tenantName  **参数解释：** 租户名。
    * userName  **参数解释：** 用户名。
    * isMerge  **参数解释：** 是否通过merge合入。 **取值范围：** - true，通过merge合入。 - false，非通过merge合入。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authorName' => null,
        'date' => null,
        'nickName' => null,
        'tenantName' => null,
        'userName' => null,
        'isMerge' => null
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
    * authorName  **参数解释：** 作者名称。
    * date  **参数解释：** 提交日期。
    * nickName  **参数解释：** 昵称。
    * tenantName  **参数解释：** 租户名。
    * userName  **参数解释：** 用户名。
    * isMerge  **参数解释：** 是否通过merge合入。 **取值范围：** - true，通过merge合入。 - false，非通过merge合入。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authorName' => 'author_name',
            'date' => 'date',
            'nickName' => 'nick_name',
            'tenantName' => 'tenant_name',
            'userName' => 'user_name',
            'isMerge' => 'is_merge'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authorName  **参数解释：** 作者名称。
    * date  **参数解释：** 提交日期。
    * nickName  **参数解释：** 昵称。
    * tenantName  **参数解释：** 租户名。
    * userName  **参数解释：** 用户名。
    * isMerge  **参数解释：** 是否通过merge合入。 **取值范围：** - true，通过merge合入。 - false，非通过merge合入。
    *
    * @var string[]
    */
    protected static $setters = [
            'authorName' => 'setAuthorName',
            'date' => 'setDate',
            'nickName' => 'setNickName',
            'tenantName' => 'setTenantName',
            'userName' => 'setUserName',
            'isMerge' => 'setIsMerge'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authorName  **参数解释：** 作者名称。
    * date  **参数解释：** 提交日期。
    * nickName  **参数解释：** 昵称。
    * tenantName  **参数解释：** 租户名。
    * userName  **参数解释：** 用户名。
    * isMerge  **参数解释：** 是否通过merge合入。 **取值范围：** - true，通过merge合入。 - false，非通过merge合入。
    *
    * @var string[]
    */
    protected static $getters = [
            'authorName' => 'getAuthorName',
            'date' => 'getDate',
            'nickName' => 'getNickName',
            'tenantName' => 'getTenantName',
            'userName' => 'getUserName',
            'isMerge' => 'getIsMerge'
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
        $this->container['authorName'] = isset($data['authorName']) ? $data['authorName'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
        $this->container['tenantName'] = isset($data['tenantName']) ? $data['tenantName'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['isMerge'] = isset($data['isMerge']) ? $data['isMerge'] : null;
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
    * Gets authorName
    *  **参数解释：** 作者名称。
    *
    * @return string|null
    */
    public function getAuthorName()
    {
        return $this->container['authorName'];
    }

    /**
    * Sets authorName
    *
    * @param string|null $authorName **参数解释：** 作者名称。
    *
    * @return $this
    */
    public function setAuthorName($authorName)
    {
        $this->container['authorName'] = $authorName;
        return $this;
    }

    /**
    * Gets date
    *  **参数解释：** 提交日期。
    *
    * @return string|null
    */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
    * Sets date
    *
    * @param string|null $date **参数解释：** 提交日期。
    *
    * @return $this
    */
    public function setDate($date)
    {
        $this->container['date'] = $date;
        return $this;
    }

    /**
    * Gets nickName
    *  **参数解释：** 昵称。
    *
    * @return string|null
    */
    public function getNickName()
    {
        return $this->container['nickName'];
    }

    /**
    * Sets nickName
    *
    * @param string|null $nickName **参数解释：** 昵称。
    *
    * @return $this
    */
    public function setNickName($nickName)
    {
        $this->container['nickName'] = $nickName;
        return $this;
    }

    /**
    * Gets tenantName
    *  **参数解释：** 租户名。
    *
    * @return string|null
    */
    public function getTenantName()
    {
        return $this->container['tenantName'];
    }

    /**
    * Sets tenantName
    *
    * @param string|null $tenantName **参数解释：** 租户名。
    *
    * @return $this
    */
    public function setTenantName($tenantName)
    {
        $this->container['tenantName'] = $tenantName;
        return $this;
    }

    /**
    * Gets userName
    *  **参数解释：** 用户名。
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
    * @param string|null $userName **参数解释：** 用户名。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets isMerge
    *  **参数解释：** 是否通过merge合入。 **取值范围：** - true，通过merge合入。 - false，非通过merge合入。
    *
    * @return bool|null
    */
    public function getIsMerge()
    {
        return $this->container['isMerge'];
    }

    /**
    * Sets isMerge
    *
    * @param bool|null $isMerge **参数解释：** 是否通过merge合入。 **取值范围：** - true，通过merge合入。 - false，非通过merge合入。
    *
    * @return $this
    */
    public function setIsMerge($isMerge)
    {
        $this->container['isMerge'] = $isMerge;
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

