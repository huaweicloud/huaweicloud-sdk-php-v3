<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepositoryUserGroupDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepositoryUserGroupDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userGroupName  **参数解释：** 成员组名称 **约束限制：** 不涉及。
    * userGroupId  **参数解释：** 成员组id。 **约束限制：** 不涉及。
    * projectId  **参数解释：** 项目id。 **约束限制：** 不涉及。
    * userCount  **参数解释：** 成员组用户数量。 **约束限制：** 不涉及。
    * description  **参数解释：** 成员组描述。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userGroupName' => 'string',
            'userGroupId' => 'string',
            'projectId' => 'string',
            'userCount' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userGroupName  **参数解释：** 成员组名称 **约束限制：** 不涉及。
    * userGroupId  **参数解释：** 成员组id。 **约束限制：** 不涉及。
    * projectId  **参数解释：** 项目id。 **约束限制：** 不涉及。
    * userCount  **参数解释：** 成员组用户数量。 **约束限制：** 不涉及。
    * description  **参数解释：** 成员组描述。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userGroupName' => null,
        'userGroupId' => null,
        'projectId' => null,
        'userCount' => null,
        'description' => null
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
    * userGroupName  **参数解释：** 成员组名称 **约束限制：** 不涉及。
    * userGroupId  **参数解释：** 成员组id。 **约束限制：** 不涉及。
    * projectId  **参数解释：** 项目id。 **约束限制：** 不涉及。
    * userCount  **参数解释：** 成员组用户数量。 **约束限制：** 不涉及。
    * description  **参数解释：** 成员组描述。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userGroupName' => 'user_group_name',
            'userGroupId' => 'user_group_id',
            'projectId' => 'project_id',
            'userCount' => 'user_count',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userGroupName  **参数解释：** 成员组名称 **约束限制：** 不涉及。
    * userGroupId  **参数解释：** 成员组id。 **约束限制：** 不涉及。
    * projectId  **参数解释：** 项目id。 **约束限制：** 不涉及。
    * userCount  **参数解释：** 成员组用户数量。 **约束限制：** 不涉及。
    * description  **参数解释：** 成员组描述。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'userGroupName' => 'setUserGroupName',
            'userGroupId' => 'setUserGroupId',
            'projectId' => 'setProjectId',
            'userCount' => 'setUserCount',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userGroupName  **参数解释：** 成员组名称 **约束限制：** 不涉及。
    * userGroupId  **参数解释：** 成员组id。 **约束限制：** 不涉及。
    * projectId  **参数解释：** 项目id。 **约束限制：** 不涉及。
    * userCount  **参数解释：** 成员组用户数量。 **约束限制：** 不涉及。
    * description  **参数解释：** 成员组描述。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'userGroupName' => 'getUserGroupName',
            'userGroupId' => 'getUserGroupId',
            'projectId' => 'getProjectId',
            'userCount' => 'getUserCount',
            'description' => 'getDescription'
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
        $this->container['userGroupName'] = isset($data['userGroupName']) ? $data['userGroupName'] : null;
        $this->container['userGroupId'] = isset($data['userGroupId']) ? $data['userGroupId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['userCount'] = isset($data['userCount']) ? $data['userCount'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['userGroupName']) && (mb_strlen($this->container['userGroupName']) > 100000)) {
                $invalidProperties[] = "invalid value for 'userGroupName', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['userGroupName']) && (mb_strlen($this->container['userGroupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'userGroupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userGroupId']) && (mb_strlen($this->container['userGroupId']) > 100000)) {
                $invalidProperties[] = "invalid value for 'userGroupId', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['userGroupId']) && (mb_strlen($this->container['userGroupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'userGroupId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 100000)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userCount']) && (mb_strlen($this->container['userCount']) > 100000)) {
                $invalidProperties[] = "invalid value for 'userCount', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['userCount']) && (mb_strlen($this->container['userCount']) < 1)) {
                $invalidProperties[] = "invalid value for 'userCount', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 100000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
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
    * Gets userGroupName
    *  **参数解释：** 成员组名称 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getUserGroupName()
    {
        return $this->container['userGroupName'];
    }

    /**
    * Sets userGroupName
    *
    * @param string|null $userGroupName **参数解释：** 成员组名称 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setUserGroupName($userGroupName)
    {
        $this->container['userGroupName'] = $userGroupName;
        return $this;
    }

    /**
    * Gets userGroupId
    *  **参数解释：** 成员组id。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getUserGroupId()
    {
        return $this->container['userGroupId'];
    }

    /**
    * Sets userGroupId
    *
    * @param string|null $userGroupId **参数解释：** 成员组id。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setUserGroupId($userGroupId)
    {
        $this->container['userGroupId'] = $userGroupId;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释：** 项目id。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId **参数解释：** 项目id。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets userCount
    *  **参数解释：** 成员组用户数量。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getUserCount()
    {
        return $this->container['userCount'];
    }

    /**
    * Sets userCount
    *
    * @param string|null $userCount **参数解释：** 成员组用户数量。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setUserCount($userCount)
    {
        $this->container['userCount'] = $userCount;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 成员组描述。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释：** 成员组描述。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

