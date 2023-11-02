<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TermAssignmentHeader implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TermAssignmentHeader';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * confidence  信任id
    * steward  管理员
    * source  来源
    * status  状态 枚举值：DISCOVERED、PROPOSED、IMPORTED、VALIDATED、DEPRECATED、OBSOLETE、OTHER
    * createUser  创建人
    * expression  表达式
    * displayText  展示信息
    * termGuid  标签guid
    * relationGuid  关联guid
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'confidence' => 'int',
            'steward' => 'string',
            'source' => 'string',
            'status' => 'string',
            'createUser' => 'string',
            'expression' => 'string',
            'displayText' => 'string',
            'termGuid' => 'string',
            'relationGuid' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * confidence  信任id
    * steward  管理员
    * source  来源
    * status  状态 枚举值：DISCOVERED、PROPOSED、IMPORTED、VALIDATED、DEPRECATED、OBSOLETE、OTHER
    * createUser  创建人
    * expression  表达式
    * displayText  展示信息
    * termGuid  标签guid
    * relationGuid  关联guid
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'confidence' => null,
        'steward' => null,
        'source' => null,
        'status' => null,
        'createUser' => null,
        'expression' => null,
        'displayText' => null,
        'termGuid' => null,
        'relationGuid' => null
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
    * confidence  信任id
    * steward  管理员
    * source  来源
    * status  状态 枚举值：DISCOVERED、PROPOSED、IMPORTED、VALIDATED、DEPRECATED、OBSOLETE、OTHER
    * createUser  创建人
    * expression  表达式
    * displayText  展示信息
    * termGuid  标签guid
    * relationGuid  关联guid
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'confidence' => 'confidence',
            'steward' => 'steward',
            'source' => 'source',
            'status' => 'status',
            'createUser' => 'create_user',
            'expression' => 'expression',
            'displayText' => 'display_text',
            'termGuid' => 'term_guid',
            'relationGuid' => 'relation_guid'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * confidence  信任id
    * steward  管理员
    * source  来源
    * status  状态 枚举值：DISCOVERED、PROPOSED、IMPORTED、VALIDATED、DEPRECATED、OBSOLETE、OTHER
    * createUser  创建人
    * expression  表达式
    * displayText  展示信息
    * termGuid  标签guid
    * relationGuid  关联guid
    *
    * @var string[]
    */
    protected static $setters = [
            'confidence' => 'setConfidence',
            'steward' => 'setSteward',
            'source' => 'setSource',
            'status' => 'setStatus',
            'createUser' => 'setCreateUser',
            'expression' => 'setExpression',
            'displayText' => 'setDisplayText',
            'termGuid' => 'setTermGuid',
            'relationGuid' => 'setRelationGuid'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * confidence  信任id
    * steward  管理员
    * source  来源
    * status  状态 枚举值：DISCOVERED、PROPOSED、IMPORTED、VALIDATED、DEPRECATED、OBSOLETE、OTHER
    * createUser  创建人
    * expression  表达式
    * displayText  展示信息
    * termGuid  标签guid
    * relationGuid  关联guid
    *
    * @var string[]
    */
    protected static $getters = [
            'confidence' => 'getConfidence',
            'steward' => 'getSteward',
            'source' => 'getSource',
            'status' => 'getStatus',
            'createUser' => 'getCreateUser',
            'expression' => 'getExpression',
            'displayText' => 'getDisplayText',
            'termGuid' => 'getTermGuid',
            'relationGuid' => 'getRelationGuid'
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
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
        $this->container['steward'] = isset($data['steward']) ? $data['steward'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['expression'] = isset($data['expression']) ? $data['expression'] : null;
        $this->container['displayText'] = isset($data['displayText']) ? $data['displayText'] : null;
        $this->container['termGuid'] = isset($data['termGuid']) ? $data['termGuid'] : null;
        $this->container['relationGuid'] = isset($data['relationGuid']) ? $data['relationGuid'] : null;
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
    * Gets confidence
    *  信任id
    *
    * @return int|null
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param int|null $confidence 信任id
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
        return $this;
    }

    /**
    * Gets steward
    *  管理员
    *
    * @return string|null
    */
    public function getSteward()
    {
        return $this->container['steward'];
    }

    /**
    * Sets steward
    *
    * @param string|null $steward 管理员
    *
    * @return $this
    */
    public function setSteward($steward)
    {
        $this->container['steward'] = $steward;
        return $this;
    }

    /**
    * Gets source
    *  来源
    *
    * @return string|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string|null $source 来源
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets status
    *  状态 枚举值：DISCOVERED、PROPOSED、IMPORTED、VALIDATED、DEPRECATED、OBSOLETE、OTHER
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 状态 枚举值：DISCOVERED、PROPOSED、IMPORTED、VALIDATED、DEPRECATED、OBSOLETE、OTHER
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createUser
    *  创建人
    *
    * @return string|null
    */
    public function getCreateUser()
    {
        return $this->container['createUser'];
    }

    /**
    * Sets createUser
    *
    * @param string|null $createUser 创建人
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets expression
    *  表达式
    *
    * @return string|null
    */
    public function getExpression()
    {
        return $this->container['expression'];
    }

    /**
    * Sets expression
    *
    * @param string|null $expression 表达式
    *
    * @return $this
    */
    public function setExpression($expression)
    {
        $this->container['expression'] = $expression;
        return $this;
    }

    /**
    * Gets displayText
    *  展示信息
    *
    * @return string|null
    */
    public function getDisplayText()
    {
        return $this->container['displayText'];
    }

    /**
    * Sets displayText
    *
    * @param string|null $displayText 展示信息
    *
    * @return $this
    */
    public function setDisplayText($displayText)
    {
        $this->container['displayText'] = $displayText;
        return $this;
    }

    /**
    * Gets termGuid
    *  标签guid
    *
    * @return string|null
    */
    public function getTermGuid()
    {
        return $this->container['termGuid'];
    }

    /**
    * Sets termGuid
    *
    * @param string|null $termGuid 标签guid
    *
    * @return $this
    */
    public function setTermGuid($termGuid)
    {
        $this->container['termGuid'] = $termGuid;
        return $this;
    }

    /**
    * Gets relationGuid
    *  关联guid
    *
    * @return string|null
    */
    public function getRelationGuid()
    {
        return $this->container['relationGuid'];
    }

    /**
    * Sets relationGuid
    *
    * @param string|null $relationGuid 关联guid
    *
    * @return $this
    */
    public function setRelationGuid($relationGuid)
    {
        $this->container['relationGuid'] = $relationGuid;
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

