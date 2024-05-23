<?php

namespace HuaweiCloud\SDK\Organizations\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InviteAccountReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InviteAccountReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * target  target
    * notes  给收件账号所有者的邮件中的附加信息。
    * tags  要绑定到新创建的账号的标签列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'target' => '\HuaweiCloud\SDK\Organizations\V1\Model\TargetDto',
            'notes' => 'string',
            'tags' => '\HuaweiCloud\SDK\Organizations\V1\Model\TagDto[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * target  target
    * notes  给收件账号所有者的邮件中的附加信息。
    * tags  要绑定到新创建的账号的标签列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'target' => null,
        'notes' => null,
        'tags' => null
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
    * target  target
    * notes  给收件账号所有者的邮件中的附加信息。
    * tags  要绑定到新创建的账号的标签列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'target' => 'target',
            'notes' => 'notes',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * target  target
    * notes  给收件账号所有者的邮件中的附加信息。
    * tags  要绑定到新创建的账号的标签列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'target' => 'setTarget',
            'notes' => 'setNotes',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * target  target
    * notes  给收件账号所有者的邮件中的附加信息。
    * tags  要绑定到新创建的账号的标签列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'target' => 'getTarget',
            'notes' => 'getNotes',
            'tags' => 'getTags'
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
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['target'] === null) {
            $invalidProperties[] = "'target' can't be null";
        }
        if ($this->container['notes'] === null) {
            $invalidProperties[] = "'notes' can't be null";
        }
            if ((mb_strlen($this->container['notes']) > 1024)) {
                $invalidProperties[] = "invalid value for 'notes', the character length must be smaller than or equal to 1024.";
            }
            if (!preg_match("/^[\\s\\S]*$/", $this->container['notes'])) {
                $invalidProperties[] = "invalid value for 'notes', must be conform to the pattern /^[\\s\\S]*$/.";
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
    * Gets target
    *  target
    *
    * @return \HuaweiCloud\SDK\Organizations\V1\Model\TargetDto
    */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
    * Sets target
    *
    * @param \HuaweiCloud\SDK\Organizations\V1\Model\TargetDto $target target
    *
    * @return $this
    */
    public function setTarget($target)
    {
        $this->container['target'] = $target;
        return $this;
    }

    /**
    * Gets notes
    *  给收件账号所有者的邮件中的附加信息。
    *
    * @return string
    */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
    * Sets notes
    *
    * @param string $notes 给收件账号所有者的邮件中的附加信息。
    *
    * @return $this
    */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;
        return $this;
    }

    /**
    * Gets tags
    *  要绑定到新创建的账号的标签列表。
    *
    * @return \HuaweiCloud\SDK\Organizations\V1\Model\TagDto[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Organizations\V1\Model\TagDto[]|null $tags 要绑定到新创建的账号的标签列表。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

