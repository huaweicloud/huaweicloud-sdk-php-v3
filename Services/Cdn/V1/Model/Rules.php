<?php

namespace HuaweiCloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Rules implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Rules';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleType  0：全部类型，表示匹配所有文件，默认值。  1：文件类型，表示按文件后缀匹配。  2：文件夹类型，表示按目录匹配。  3：文件全路径类型，表示按文件全路径匹配。
    * content  缓存匹配设置。  当rule_type为0时，为空。  当rule_type为1时，为文件后缀，输入首字符为“.”，以“;”进行分隔，如.jpg;.zip;.exe，并且输入的文件名后缀总数不超过20个。 当rule_type为2时，为目录，输入要求以“/”作为首字符，以“;”进行分隔，如/test/folder01;/test/folder02，并且输入的目录路径总数不超过20个。 当rule_type为3时，为全路径，输入要求以“/”作为首字符，支持匹配指定目录下的具体文件，或者带通配符“\\*”的文件，如/test/index.html或/test/\\*.jpg。
    * ttl  缓存时间。最大支持365天。
    * ttlType  缓存时间单位。1：秒；2：分；3：小时；4：天。
    * priority  此条配置的权重值, 默认值1，数值越大，优先级越高。取值范围为1-100，权重值不能相同。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleType' => 'int',
            'content' => 'string',
            'ttl' => 'int',
            'ttlType' => 'int',
            'priority' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleType  0：全部类型，表示匹配所有文件，默认值。  1：文件类型，表示按文件后缀匹配。  2：文件夹类型，表示按目录匹配。  3：文件全路径类型，表示按文件全路径匹配。
    * content  缓存匹配设置。  当rule_type为0时，为空。  当rule_type为1时，为文件后缀，输入首字符为“.”，以“;”进行分隔，如.jpg;.zip;.exe，并且输入的文件名后缀总数不超过20个。 当rule_type为2时，为目录，输入要求以“/”作为首字符，以“;”进行分隔，如/test/folder01;/test/folder02，并且输入的目录路径总数不超过20个。 当rule_type为3时，为全路径，输入要求以“/”作为首字符，支持匹配指定目录下的具体文件，或者带通配符“\\*”的文件，如/test/index.html或/test/\\*.jpg。
    * ttl  缓存时间。最大支持365天。
    * ttlType  缓存时间单位。1：秒；2：分；3：小时；4：天。
    * priority  此条配置的权重值, 默认值1，数值越大，优先级越高。取值范围为1-100，权重值不能相同。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleType' => 'int32',
        'content' => null,
        'ttl' => 'int32',
        'ttlType' => 'int32',
        'priority' => 'int32'
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
    * ruleType  0：全部类型，表示匹配所有文件，默认值。  1：文件类型，表示按文件后缀匹配。  2：文件夹类型，表示按目录匹配。  3：文件全路径类型，表示按文件全路径匹配。
    * content  缓存匹配设置。  当rule_type为0时，为空。  当rule_type为1时，为文件后缀，输入首字符为“.”，以“;”进行分隔，如.jpg;.zip;.exe，并且输入的文件名后缀总数不超过20个。 当rule_type为2时，为目录，输入要求以“/”作为首字符，以“;”进行分隔，如/test/folder01;/test/folder02，并且输入的目录路径总数不超过20个。 当rule_type为3时，为全路径，输入要求以“/”作为首字符，支持匹配指定目录下的具体文件，或者带通配符“\\*”的文件，如/test/index.html或/test/\\*.jpg。
    * ttl  缓存时间。最大支持365天。
    * ttlType  缓存时间单位。1：秒；2：分；3：小时；4：天。
    * priority  此条配置的权重值, 默认值1，数值越大，优先级越高。取值范围为1-100，权重值不能相同。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleType' => 'rule_type',
            'content' => 'content',
            'ttl' => 'ttl',
            'ttlType' => 'ttl_type',
            'priority' => 'priority'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleType  0：全部类型，表示匹配所有文件，默认值。  1：文件类型，表示按文件后缀匹配。  2：文件夹类型，表示按目录匹配。  3：文件全路径类型，表示按文件全路径匹配。
    * content  缓存匹配设置。  当rule_type为0时，为空。  当rule_type为1时，为文件后缀，输入首字符为“.”，以“;”进行分隔，如.jpg;.zip;.exe，并且输入的文件名后缀总数不超过20个。 当rule_type为2时，为目录，输入要求以“/”作为首字符，以“;”进行分隔，如/test/folder01;/test/folder02，并且输入的目录路径总数不超过20个。 当rule_type为3时，为全路径，输入要求以“/”作为首字符，支持匹配指定目录下的具体文件，或者带通配符“\\*”的文件，如/test/index.html或/test/\\*.jpg。
    * ttl  缓存时间。最大支持365天。
    * ttlType  缓存时间单位。1：秒；2：分；3：小时；4：天。
    * priority  此条配置的权重值, 默认值1，数值越大，优先级越高。取值范围为1-100，权重值不能相同。
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleType' => 'setRuleType',
            'content' => 'setContent',
            'ttl' => 'setTtl',
            'ttlType' => 'setTtlType',
            'priority' => 'setPriority'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleType  0：全部类型，表示匹配所有文件，默认值。  1：文件类型，表示按文件后缀匹配。  2：文件夹类型，表示按目录匹配。  3：文件全路径类型，表示按文件全路径匹配。
    * content  缓存匹配设置。  当rule_type为0时，为空。  当rule_type为1时，为文件后缀，输入首字符为“.”，以“;”进行分隔，如.jpg;.zip;.exe，并且输入的文件名后缀总数不超过20个。 当rule_type为2时，为目录，输入要求以“/”作为首字符，以“;”进行分隔，如/test/folder01;/test/folder02，并且输入的目录路径总数不超过20个。 当rule_type为3时，为全路径，输入要求以“/”作为首字符，支持匹配指定目录下的具体文件，或者带通配符“\\*”的文件，如/test/index.html或/test/\\*.jpg。
    * ttl  缓存时间。最大支持365天。
    * ttlType  缓存时间单位。1：秒；2：分；3：小时；4：天。
    * priority  此条配置的权重值, 默认值1，数值越大，优先级越高。取值范围为1-100，权重值不能相同。
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleType' => 'getRuleType',
            'content' => 'getContent',
            'ttl' => 'getTtl',
            'ttlType' => 'getTtlType',
            'priority' => 'getPriority'
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
        $this->container['ruleType'] = isset($data['ruleType']) ? $data['ruleType'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : null;
        $this->container['ttlType'] = isset($data['ttlType']) ? $data['ttlType'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ruleType'] === null) {
            $invalidProperties[] = "'ruleType' can't be null";
        }
        if ($this->container['ttl'] === null) {
            $invalidProperties[] = "'ttl' can't be null";
        }
        if ($this->container['ttlType'] === null) {
            $invalidProperties[] = "'ttlType' can't be null";
        }
        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
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
    * Gets ruleType
    *  0：全部类型，表示匹配所有文件，默认值。  1：文件类型，表示按文件后缀匹配。  2：文件夹类型，表示按目录匹配。  3：文件全路径类型，表示按文件全路径匹配。
    *
    * @return int
    */
    public function getRuleType()
    {
        return $this->container['ruleType'];
    }

    /**
    * Sets ruleType
    *
    * @param int $ruleType 0：全部类型，表示匹配所有文件，默认值。  1：文件类型，表示按文件后缀匹配。  2：文件夹类型，表示按目录匹配。  3：文件全路径类型，表示按文件全路径匹配。
    *
    * @return $this
    */
    public function setRuleType($ruleType)
    {
        $this->container['ruleType'] = $ruleType;
        return $this;
    }

    /**
    * Gets content
    *  缓存匹配设置。  当rule_type为0时，为空。  当rule_type为1时，为文件后缀，输入首字符为“.”，以“;”进行分隔，如.jpg;.zip;.exe，并且输入的文件名后缀总数不超过20个。 当rule_type为2时，为目录，输入要求以“/”作为首字符，以“;”进行分隔，如/test/folder01;/test/folder02，并且输入的目录路径总数不超过20个。 当rule_type为3时，为全路径，输入要求以“/”作为首字符，支持匹配指定目录下的具体文件，或者带通配符“\\*”的文件，如/test/index.html或/test/\\*.jpg。
    *
    * @return string|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string|null $content 缓存匹配设置。  当rule_type为0时，为空。  当rule_type为1时，为文件后缀，输入首字符为“.”，以“;”进行分隔，如.jpg;.zip;.exe，并且输入的文件名后缀总数不超过20个。 当rule_type为2时，为目录，输入要求以“/”作为首字符，以“;”进行分隔，如/test/folder01;/test/folder02，并且输入的目录路径总数不超过20个。 当rule_type为3时，为全路径，输入要求以“/”作为首字符，支持匹配指定目录下的具体文件，或者带通配符“\\*”的文件，如/test/index.html或/test/\\*.jpg。
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets ttl
    *  缓存时间。最大支持365天。
    *
    * @return int
    */
    public function getTtl()
    {
        return $this->container['ttl'];
    }

    /**
    * Sets ttl
    *
    * @param int $ttl 缓存时间。最大支持365天。
    *
    * @return $this
    */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;
        return $this;
    }

    /**
    * Gets ttlType
    *  缓存时间单位。1：秒；2：分；3：小时；4：天。
    *
    * @return int
    */
    public function getTtlType()
    {
        return $this->container['ttlType'];
    }

    /**
    * Sets ttlType
    *
    * @param int $ttlType 缓存时间单位。1：秒；2：分；3：小时；4：天。
    *
    * @return $this
    */
    public function setTtlType($ttlType)
    {
        $this->container['ttlType'] = $ttlType;
        return $this;
    }

    /**
    * Gets priority
    *  此条配置的权重值, 默认值1，数值越大，优先级越高。取值范围为1-100，权重值不能相同。
    *
    * @return int
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int $priority 此条配置的权重值, 默认值1，数值越大，优先级越高。取值范围为1-100，权重值不能相同。
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
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

