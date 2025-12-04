<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowValueListResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowValueListResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  引用表id
    * name  引用表名称
    * type  **参数解释：** 引用表类型 **约束限制：** 不涉及 **取值范围：**  - url  - params  - ip  - cookie  - referer  - user-agent  - header  - response_code  - response_header  - response_body  **默认取值：** 不涉及
    * description  引用表描述
    * values  引用表的值
    * producer  引用表来源：  - 1:表示来源于用户手动创建  - 2:表示来源于智能访问控制自动创建
    * timestamp  创建规则的时间，格式为13位毫秒时间戳
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'type' => 'string',
            'description' => 'string',
            'values' => 'string[]',
            'producer' => 'int',
            'timestamp' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  引用表id
    * name  引用表名称
    * type  **参数解释：** 引用表类型 **约束限制：** 不涉及 **取值范围：**  - url  - params  - ip  - cookie  - referer  - user-agent  - header  - response_code  - response_header  - response_body  **默认取值：** 不涉及
    * description  引用表描述
    * values  引用表的值
    * producer  引用表来源：  - 1:表示来源于用户手动创建  - 2:表示来源于智能访问控制自动创建
    * timestamp  创建规则的时间，格式为13位毫秒时间戳
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'type' => null,
        'description' => null,
        'values' => null,
        'producer' => null,
        'timestamp' => 'int64'
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
    * id  引用表id
    * name  引用表名称
    * type  **参数解释：** 引用表类型 **约束限制：** 不涉及 **取值范围：**  - url  - params  - ip  - cookie  - referer  - user-agent  - header  - response_code  - response_header  - response_body  **默认取值：** 不涉及
    * description  引用表描述
    * values  引用表的值
    * producer  引用表来源：  - 1:表示来源于用户手动创建  - 2:表示来源于智能访问控制自动创建
    * timestamp  创建规则的时间，格式为13位毫秒时间戳
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'type' => 'type',
            'description' => 'description',
            'values' => 'values',
            'producer' => 'producer',
            'timestamp' => 'timestamp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  引用表id
    * name  引用表名称
    * type  **参数解释：** 引用表类型 **约束限制：** 不涉及 **取值范围：**  - url  - params  - ip  - cookie  - referer  - user-agent  - header  - response_code  - response_header  - response_body  **默认取值：** 不涉及
    * description  引用表描述
    * values  引用表的值
    * producer  引用表来源：  - 1:表示来源于用户手动创建  - 2:表示来源于智能访问控制自动创建
    * timestamp  创建规则的时间，格式为13位毫秒时间戳
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'type' => 'setType',
            'description' => 'setDescription',
            'values' => 'setValues',
            'producer' => 'setProducer',
            'timestamp' => 'setTimestamp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  引用表id
    * name  引用表名称
    * type  **参数解释：** 引用表类型 **约束限制：** 不涉及 **取值范围：**  - url  - params  - ip  - cookie  - referer  - user-agent  - header  - response_code  - response_header  - response_body  **默认取值：** 不涉及
    * description  引用表描述
    * values  引用表的值
    * producer  引用表来源：  - 1:表示来源于用户手动创建  - 2:表示来源于智能访问控制自动创建
    * timestamp  创建规则的时间，格式为13位毫秒时间戳
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'type' => 'getType',
            'description' => 'getDescription',
            'values' => 'getValues',
            'producer' => 'getProducer',
            'timestamp' => 'getTimestamp'
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
    const TYPE_URL = 'url';
    const TYPE_PARAMS = 'params';
    const TYPE_IP = 'ip';
    const TYPE_COOKIE = 'cookie';
    const TYPE_REFERER = 'referer';
    const TYPE_USER_AGENT = 'user-agent';
    const TYPE_HEADER = 'header';
    const TYPE_RESPONSE_CODE = 'response_code';
    const TYPE_RESPONSE_HEADER = 'response_header';
    const TYPE_RESPONSE_BODY = 'response_body';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_URL,
            self::TYPE_PARAMS,
            self::TYPE_IP,
            self::TYPE_COOKIE,
            self::TYPE_REFERER,
            self::TYPE_USER_AGENT,
            self::TYPE_HEADER,
            self::TYPE_RESPONSE_CODE,
            self::TYPE_RESPONSE_HEADER,
            self::TYPE_RESPONSE_BODY,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
        $this->container['producer'] = isset($data['producer']) ? $data['producer'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
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
    * Gets id
    *  引用表id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 引用表id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  引用表名称
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
    * @param string|null $name 引用表名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 引用表类型 **约束限制：** 不涉及 **取值范围：**  - url  - params  - ip  - cookie  - referer  - user-agent  - header  - response_code  - response_header  - response_body  **默认取值：** 不涉及
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
    * @param string|null $type **参数解释：** 引用表类型 **约束限制：** 不涉及 **取值范围：**  - url  - params  - ip  - cookie  - referer  - user-agent  - header  - response_code  - response_header  - response_body  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets description
    *  引用表描述
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
    * @param string|null $description 引用表描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets values
    *  引用表的值
    *
    * @return string[]|null
    */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
    * Sets values
    *
    * @param string[]|null $values 引用表的值
    *
    * @return $this
    */
    public function setValues($values)
    {
        $this->container['values'] = $values;
        return $this;
    }

    /**
    * Gets producer
    *  引用表来源：  - 1:表示来源于用户手动创建  - 2:表示来源于智能访问控制自动创建
    *
    * @return int|null
    */
    public function getProducer()
    {
        return $this->container['producer'];
    }

    /**
    * Sets producer
    *
    * @param int|null $producer 引用表来源：  - 1:表示来源于用户手动创建  - 2:表示来源于智能访问控制自动创建
    *
    * @return $this
    */
    public function setProducer($producer)
    {
        $this->container['producer'] = $producer;
        return $this;
    }

    /**
    * Gets timestamp
    *  创建规则的时间，格式为13位毫秒时间戳
    *
    * @return int|null
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param int|null $timestamp 创建规则的时间，格式为13位毫秒时间戳
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
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

