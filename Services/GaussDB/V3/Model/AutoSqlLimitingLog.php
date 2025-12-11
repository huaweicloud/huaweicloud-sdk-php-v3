<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AutoSqlLimitingLog implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AutoSqlLimitingLog';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeId  **参数解释**：  节点ID。  **取值范围**：  只能由英文字母、数字组成，前面为UUID，后缀为no07，长度为36个字符。  **默认取值**：  不涉及。
    * pattern  **参数解释**：  SQL限流规则。  **取值范围**：  由一个或多个关键字（最多为128个关键字）组成，关键字之间通过\"~\"分隔符分开，如select~from~t1。规则中不能包含‘\\’、中英文逗号、‘~~’，不能以‘~’结尾。  **默认取值**：  不涉及。
    * sqlType  **参数解释**：  限流类型。  **取值范围**：  SELECT。  **默认取值**：  不涉及。
    * maxConcurrency  **参数解释**：  最大并发数。  **取值范围**：  [0~1000000000]。  **默认取值**：  不涉及。
    * createAt  **参数解释**：  限流开始时间戳。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * expireAt  **参数解释**：  限流失效时间戳。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeId' => 'string',
            'pattern' => 'string',
            'sqlType' => 'string',
            'maxConcurrency' => 'int',
            'createAt' => 'int',
            'expireAt' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeId  **参数解释**：  节点ID。  **取值范围**：  只能由英文字母、数字组成，前面为UUID，后缀为no07，长度为36个字符。  **默认取值**：  不涉及。
    * pattern  **参数解释**：  SQL限流规则。  **取值范围**：  由一个或多个关键字（最多为128个关键字）组成，关键字之间通过\"~\"分隔符分开，如select~from~t1。规则中不能包含‘\\’、中英文逗号、‘~~’，不能以‘~’结尾。  **默认取值**：  不涉及。
    * sqlType  **参数解释**：  限流类型。  **取值范围**：  SELECT。  **默认取值**：  不涉及。
    * maxConcurrency  **参数解释**：  最大并发数。  **取值范围**：  [0~1000000000]。  **默认取值**：  不涉及。
    * createAt  **参数解释**：  限流开始时间戳。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * expireAt  **参数解释**：  限流失效时间戳。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeId' => null,
        'pattern' => 'int32',
        'sqlType' => null,
        'maxConcurrency' => 'int32',
        'createAt' => 'int64',
        'expireAt' => 'int64'
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
    * nodeId  **参数解释**：  节点ID。  **取值范围**：  只能由英文字母、数字组成，前面为UUID，后缀为no07，长度为36个字符。  **默认取值**：  不涉及。
    * pattern  **参数解释**：  SQL限流规则。  **取值范围**：  由一个或多个关键字（最多为128个关键字）组成，关键字之间通过\"~\"分隔符分开，如select~from~t1。规则中不能包含‘\\’、中英文逗号、‘~~’，不能以‘~’结尾。  **默认取值**：  不涉及。
    * sqlType  **参数解释**：  限流类型。  **取值范围**：  SELECT。  **默认取值**：  不涉及。
    * maxConcurrency  **参数解释**：  最大并发数。  **取值范围**：  [0~1000000000]。  **默认取值**：  不涉及。
    * createAt  **参数解释**：  限流开始时间戳。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * expireAt  **参数解释**：  限流失效时间戳。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeId' => 'node_id',
            'pattern' => 'pattern',
            'sqlType' => 'sql_type',
            'maxConcurrency' => 'max_concurrency',
            'createAt' => 'create_at',
            'expireAt' => 'expire_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeId  **参数解释**：  节点ID。  **取值范围**：  只能由英文字母、数字组成，前面为UUID，后缀为no07，长度为36个字符。  **默认取值**：  不涉及。
    * pattern  **参数解释**：  SQL限流规则。  **取值范围**：  由一个或多个关键字（最多为128个关键字）组成，关键字之间通过\"~\"分隔符分开，如select~from~t1。规则中不能包含‘\\’、中英文逗号、‘~~’，不能以‘~’结尾。  **默认取值**：  不涉及。
    * sqlType  **参数解释**：  限流类型。  **取值范围**：  SELECT。  **默认取值**：  不涉及。
    * maxConcurrency  **参数解释**：  最大并发数。  **取值范围**：  [0~1000000000]。  **默认取值**：  不涉及。
    * createAt  **参数解释**：  限流开始时间戳。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * expireAt  **参数解释**：  限流失效时间戳。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeId' => 'setNodeId',
            'pattern' => 'setPattern',
            'sqlType' => 'setSqlType',
            'maxConcurrency' => 'setMaxConcurrency',
            'createAt' => 'setCreateAt',
            'expireAt' => 'setExpireAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeId  **参数解释**：  节点ID。  **取值范围**：  只能由英文字母、数字组成，前面为UUID，后缀为no07，长度为36个字符。  **默认取值**：  不涉及。
    * pattern  **参数解释**：  SQL限流规则。  **取值范围**：  由一个或多个关键字（最多为128个关键字）组成，关键字之间通过\"~\"分隔符分开，如select~from~t1。规则中不能包含‘\\’、中英文逗号、‘~~’，不能以‘~’结尾。  **默认取值**：  不涉及。
    * sqlType  **参数解释**：  限流类型。  **取值范围**：  SELECT。  **默认取值**：  不涉及。
    * maxConcurrency  **参数解释**：  最大并发数。  **取值范围**：  [0~1000000000]。  **默认取值**：  不涉及。
    * createAt  **参数解释**：  限流开始时间戳。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * expireAt  **参数解释**：  限流失效时间戳。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeId' => 'getNodeId',
            'pattern' => 'getPattern',
            'sqlType' => 'getSqlType',
            'maxConcurrency' => 'getMaxConcurrency',
            'createAt' => 'getCreateAt',
            'expireAt' => 'getExpireAt'
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
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['pattern'] = isset($data['pattern']) ? $data['pattern'] : null;
        $this->container['sqlType'] = isset($data['sqlType']) ? $data['sqlType'] : null;
        $this->container['maxConcurrency'] = isset($data['maxConcurrency']) ? $data['maxConcurrency'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['expireAt'] = isset($data['expireAt']) ? $data['expireAt'] : null;
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
    * Gets nodeId
    *  **参数解释**：  节点ID。  **取值范围**：  只能由英文字母、数字组成，前面为UUID，后缀为no07，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId **参数解释**：  节点ID。  **取值范围**：  只能由英文字母、数字组成，前面为UUID，后缀为no07，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets pattern
    *  **参数解释**：  SQL限流规则。  **取值范围**：  由一个或多个关键字（最多为128个关键字）组成，关键字之间通过\"~\"分隔符分开，如select~from~t1。规则中不能包含‘\\’、中英文逗号、‘~~’，不能以‘~’结尾。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getPattern()
    {
        return $this->container['pattern'];
    }

    /**
    * Sets pattern
    *
    * @param string|null $pattern **参数解释**：  SQL限流规则。  **取值范围**：  由一个或多个关键字（最多为128个关键字）组成，关键字之间通过\"~\"分隔符分开，如select~from~t1。规则中不能包含‘\\’、中英文逗号、‘~~’，不能以‘~’结尾。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setPattern($pattern)
    {
        $this->container['pattern'] = $pattern;
        return $this;
    }

    /**
    * Gets sqlType
    *  **参数解释**：  限流类型。  **取值范围**：  SELECT。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getSqlType()
    {
        return $this->container['sqlType'];
    }

    /**
    * Sets sqlType
    *
    * @param string|null $sqlType **参数解释**：  限流类型。  **取值范围**：  SELECT。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setSqlType($sqlType)
    {
        $this->container['sqlType'] = $sqlType;
        return $this;
    }

    /**
    * Gets maxConcurrency
    *  **参数解释**：  最大并发数。  **取值范围**：  [0~1000000000]。  **默认取值**：  不涉及。
    *
    * @return int|null
    */
    public function getMaxConcurrency()
    {
        return $this->container['maxConcurrency'];
    }

    /**
    * Sets maxConcurrency
    *
    * @param int|null $maxConcurrency **参数解释**：  最大并发数。  **取值范围**：  [0~1000000000]。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setMaxConcurrency($maxConcurrency)
    {
        $this->container['maxConcurrency'] = $maxConcurrency;
        return $this;
    }

    /**
    * Gets createAt
    *  **参数解释**：  限流开始时间戳。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return int|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param int|null $createAt **参数解释**：  限流开始时间戳。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets expireAt
    *  **参数解释**：  限流失效时间戳。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return int|null
    */
    public function getExpireAt()
    {
        return $this->container['expireAt'];
    }

    /**
    * Sets expireAt
    *
    * @param int|null $expireAt **参数解释**：  限流失效时间戳。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setExpireAt($expireAt)
    {
        $this->container['expireAt'] = $expireAt;
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

