<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IssueNewAssignedTo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IssueNew_assigned_to';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * firstName  **参数解释：** 用户名。 **取值范围：** 不涉及。
    * lastName  **参数解释：** 用户姓名。 **取值范围：** 不涉及。
    * identifier  **参数解释：** 用户32位uuid。 **取值范围：** 不涉及。
    * imageId  **参数解释：** 用户头像id。 **取值范围：** 不涉及。
    * assignedNickName  **参数解释：** 用户昵称。 **取值范围：** 不涉及。
    * name  **参数解释：** 用户名。 **取值范围：** 不涉及。
    * id  **参数解释：** 用户数字id。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'firstName' => 'string',
            'lastName' => 'string',
            'identifier' => 'string',
            'imageId' => 'string',
            'assignedNickName' => 'string',
            'name' => 'string',
            'id' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * firstName  **参数解释：** 用户名。 **取值范围：** 不涉及。
    * lastName  **参数解释：** 用户姓名。 **取值范围：** 不涉及。
    * identifier  **参数解释：** 用户32位uuid。 **取值范围：** 不涉及。
    * imageId  **参数解释：** 用户头像id。 **取值范围：** 不涉及。
    * assignedNickName  **参数解释：** 用户昵称。 **取值范围：** 不涉及。
    * name  **参数解释：** 用户名。 **取值范围：** 不涉及。
    * id  **参数解释：** 用户数字id。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'firstName' => null,
        'lastName' => null,
        'identifier' => null,
        'imageId' => null,
        'assignedNickName' => null,
        'name' => null,
        'id' => 'int32'
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
    * firstName  **参数解释：** 用户名。 **取值范围：** 不涉及。
    * lastName  **参数解释：** 用户姓名。 **取值范围：** 不涉及。
    * identifier  **参数解释：** 用户32位uuid。 **取值范围：** 不涉及。
    * imageId  **参数解释：** 用户头像id。 **取值范围：** 不涉及。
    * assignedNickName  **参数解释：** 用户昵称。 **取值范围：** 不涉及。
    * name  **参数解释：** 用户名。 **取值范围：** 不涉及。
    * id  **参数解释：** 用户数字id。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'firstName' => 'firstName',
            'lastName' => 'lastName',
            'identifier' => 'identifier',
            'imageId' => 'image_id',
            'assignedNickName' => 'assignedNickName',
            'name' => 'name',
            'id' => 'id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * firstName  **参数解释：** 用户名。 **取值范围：** 不涉及。
    * lastName  **参数解释：** 用户姓名。 **取值范围：** 不涉及。
    * identifier  **参数解释：** 用户32位uuid。 **取值范围：** 不涉及。
    * imageId  **参数解释：** 用户头像id。 **取值范围：** 不涉及。
    * assignedNickName  **参数解释：** 用户昵称。 **取值范围：** 不涉及。
    * name  **参数解释：** 用户名。 **取值范围：** 不涉及。
    * id  **参数解释：** 用户数字id。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'firstName' => 'setFirstName',
            'lastName' => 'setLastName',
            'identifier' => 'setIdentifier',
            'imageId' => 'setImageId',
            'assignedNickName' => 'setAssignedNickName',
            'name' => 'setName',
            'id' => 'setId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * firstName  **参数解释：** 用户名。 **取值范围：** 不涉及。
    * lastName  **参数解释：** 用户姓名。 **取值范围：** 不涉及。
    * identifier  **参数解释：** 用户32位uuid。 **取值范围：** 不涉及。
    * imageId  **参数解释：** 用户头像id。 **取值范围：** 不涉及。
    * assignedNickName  **参数解释：** 用户昵称。 **取值范围：** 不涉及。
    * name  **参数解释：** 用户名。 **取值范围：** 不涉及。
    * id  **参数解释：** 用户数字id。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'firstName' => 'getFirstName',
            'lastName' => 'getLastName',
            'identifier' => 'getIdentifier',
            'imageId' => 'getImageId',
            'assignedNickName' => 'getAssignedNickName',
            'name' => 'getName',
            'id' => 'getId'
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
        $this->container['firstName'] = isset($data['firstName']) ? $data['firstName'] : null;
        $this->container['lastName'] = isset($data['lastName']) ? $data['lastName'] : null;
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['assignedNickName'] = isset($data['assignedNickName']) ? $data['assignedNickName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['firstName']) && (mb_strlen($this->container['firstName']) > 60)) {
                $invalidProperties[] = "invalid value for 'firstName', the character length must be smaller than or equal to 60.";
            }
            if (!is_null($this->container['firstName']) && (mb_strlen($this->container['firstName']) < 0)) {
                $invalidProperties[] = "invalid value for 'firstName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastName']) && (mb_strlen($this->container['lastName']) > 60)) {
                $invalidProperties[] = "invalid value for 'lastName', the character length must be smaller than or equal to 60.";
            }
            if (!is_null($this->container['lastName']) && (mb_strlen($this->container['lastName']) < 0)) {
                $invalidProperties[] = "invalid value for 'lastName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['identifier']) && (mb_strlen($this->container['identifier']) > 32)) {
                $invalidProperties[] = "invalid value for 'identifier', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['identifier']) && (mb_strlen($this->container['identifier']) < 32)) {
                $invalidProperties[] = "invalid value for 'identifier', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) > 30)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) < 2)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['assignedNickName']) && (mb_strlen($this->container['assignedNickName']) > 60)) {
                $invalidProperties[] = "invalid value for 'assignedNickName', the character length must be smaller than or equal to 60.";
            }
            if (!is_null($this->container['assignedNickName']) && (mb_strlen($this->container['assignedNickName']) < 2)) {
                $invalidProperties[] = "invalid value for 'assignedNickName', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 60)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 60.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 2)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 0)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 0.";
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
    * Gets firstName
    *  **参数解释：** 用户名。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
    * Sets firstName
    *
    * @param string|null $firstName **参数解释：** 用户名。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setFirstName($firstName)
    {
        $this->container['firstName'] = $firstName;
        return $this;
    }

    /**
    * Gets lastName
    *  **参数解释：** 用户姓名。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
    * Sets lastName
    *
    * @param string|null $lastName **参数解释：** 用户姓名。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setLastName($lastName)
    {
        $this->container['lastName'] = $lastName;
        return $this;
    }

    /**
    * Gets identifier
    *  **参数解释：** 用户32位uuid。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
    * Sets identifier
    *
    * @param string|null $identifier **参数解释：** 用户32位uuid。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;
        return $this;
    }

    /**
    * Gets imageId
    *  **参数解释：** 用户头像id。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string|null $imageId **参数解释：** 用户头像id。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets assignedNickName
    *  **参数解释：** 用户昵称。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getAssignedNickName()
    {
        return $this->container['assignedNickName'];
    }

    /**
    * Sets assignedNickName
    *
    * @param string|null $assignedNickName **参数解释：** 用户昵称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setAssignedNickName($assignedNickName)
    {
        $this->container['assignedNickName'] = $assignedNickName;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 用户名。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释：** 用户名。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释：** 用户数字id。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id **参数解释：** 用户数字id。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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

