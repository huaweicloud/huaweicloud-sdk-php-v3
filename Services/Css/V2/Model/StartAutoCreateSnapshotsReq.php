<?php

namespace HuaweiCloud\SDK\Css\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StartAutoCreateSnapshotsReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StartAutoCreateSnapshotsReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * indices  指定要恢复的索引名称，多个索引用逗号隔开，默认恢复所有索引。支持使用“\\*”匹配多个索引，例如：2018-06\\*，表示恢复名称前缀是2018-06的所有索引的数据。 0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?特殊字符。 默认值为\\*，表示恢复所有索引。
    * keepday  设置快照保留的天数，范围是1～90。系统在半点时刻会自动删除超过保留天数的快照。
    * period  每天创建快照的时刻，只支持整点，后面需加上时区，格式为“HH:mm z”，“HH:mm”表示整点时间，“z”表示时区。比如“00:00 GMT+08:00”、“01:00 GMT+08:00”等。
    * prefix  自动创建的快照名称前缀，需要用户自己手动输入。只能包含1~32位小写字母、数字、中划线或者下划线，并且以小写字母开头。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'indices' => 'string',
            'keepday' => 'int',
            'period' => 'string',
            'prefix' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * indices  指定要恢复的索引名称，多个索引用逗号隔开，默认恢复所有索引。支持使用“\\*”匹配多个索引，例如：2018-06\\*，表示恢复名称前缀是2018-06的所有索引的数据。 0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?特殊字符。 默认值为\\*，表示恢复所有索引。
    * keepday  设置快照保留的天数，范围是1～90。系统在半点时刻会自动删除超过保留天数的快照。
    * period  每天创建快照的时刻，只支持整点，后面需加上时区，格式为“HH:mm z”，“HH:mm”表示整点时间，“z”表示时区。比如“00:00 GMT+08:00”、“01:00 GMT+08:00”等。
    * prefix  自动创建的快照名称前缀，需要用户自己手动输入。只能包含1~32位小写字母、数字、中划线或者下划线，并且以小写字母开头。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'indices' => null,
        'keepday' => null,
        'period' => null,
        'prefix' => null
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
    * indices  指定要恢复的索引名称，多个索引用逗号隔开，默认恢复所有索引。支持使用“\\*”匹配多个索引，例如：2018-06\\*，表示恢复名称前缀是2018-06的所有索引的数据。 0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?特殊字符。 默认值为\\*，表示恢复所有索引。
    * keepday  设置快照保留的天数，范围是1～90。系统在半点时刻会自动删除超过保留天数的快照。
    * period  每天创建快照的时刻，只支持整点，后面需加上时区，格式为“HH:mm z”，“HH:mm”表示整点时间，“z”表示时区。比如“00:00 GMT+08:00”、“01:00 GMT+08:00”等。
    * prefix  自动创建的快照名称前缀，需要用户自己手动输入。只能包含1~32位小写字母、数字、中划线或者下划线，并且以小写字母开头。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'indices' => 'indices',
            'keepday' => 'keepday',
            'period' => 'period',
            'prefix' => 'prefix'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * indices  指定要恢复的索引名称，多个索引用逗号隔开，默认恢复所有索引。支持使用“\\*”匹配多个索引，例如：2018-06\\*，表示恢复名称前缀是2018-06的所有索引的数据。 0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?特殊字符。 默认值为\\*，表示恢复所有索引。
    * keepday  设置快照保留的天数，范围是1～90。系统在半点时刻会自动删除超过保留天数的快照。
    * period  每天创建快照的时刻，只支持整点，后面需加上时区，格式为“HH:mm z”，“HH:mm”表示整点时间，“z”表示时区。比如“00:00 GMT+08:00”、“01:00 GMT+08:00”等。
    * prefix  自动创建的快照名称前缀，需要用户自己手动输入。只能包含1~32位小写字母、数字、中划线或者下划线，并且以小写字母开头。
    *
    * @var string[]
    */
    protected static $setters = [
            'indices' => 'setIndices',
            'keepday' => 'setKeepday',
            'period' => 'setPeriod',
            'prefix' => 'setPrefix'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * indices  指定要恢复的索引名称，多个索引用逗号隔开，默认恢复所有索引。支持使用“\\*”匹配多个索引，例如：2018-06\\*，表示恢复名称前缀是2018-06的所有索引的数据。 0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?特殊字符。 默认值为\\*，表示恢复所有索引。
    * keepday  设置快照保留的天数，范围是1～90。系统在半点时刻会自动删除超过保留天数的快照。
    * period  每天创建快照的时刻，只支持整点，后面需加上时区，格式为“HH:mm z”，“HH:mm”表示整点时间，“z”表示时区。比如“00:00 GMT+08:00”、“01:00 GMT+08:00”等。
    * prefix  自动创建的快照名称前缀，需要用户自己手动输入。只能包含1~32位小写字母、数字、中划线或者下划线，并且以小写字母开头。
    *
    * @var string[]
    */
    protected static $getters = [
            'indices' => 'getIndices',
            'keepday' => 'getKeepday',
            'period' => 'getPeriod',
            'prefix' => 'getPrefix'
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
        $this->container['indices'] = isset($data['indices']) ? $data['indices'] : null;
        $this->container['keepday'] = isset($data['keepday']) ? $data['keepday'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['prefix'] = isset($data['prefix']) ? $data['prefix'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['keepday'] === null) {
            $invalidProperties[] = "'keepday' can't be null";
        }
        if ($this->container['period'] === null) {
            $invalidProperties[] = "'period' can't be null";
        }
        if ($this->container['prefix'] === null) {
            $invalidProperties[] = "'prefix' can't be null";
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
    * Gets indices
    *  指定要恢复的索引名称，多个索引用逗号隔开，默认恢复所有索引。支持使用“\\*”匹配多个索引，例如：2018-06\\*，表示恢复名称前缀是2018-06的所有索引的数据。 0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?特殊字符。 默认值为\\*，表示恢复所有索引。
    *
    * @return string|null
    */
    public function getIndices()
    {
        return $this->container['indices'];
    }

    /**
    * Sets indices
    *
    * @param string|null $indices 指定要恢复的索引名称，多个索引用逗号隔开，默认恢复所有索引。支持使用“\\*”匹配多个索引，例如：2018-06\\*，表示恢复名称前缀是2018-06的所有索引的数据。 0～1024个字符，不能包含空格和大写字母，且不能包含\\\"\\\\<|>/?特殊字符。 默认值为\\*，表示恢复所有索引。
    *
    * @return $this
    */
    public function setIndices($indices)
    {
        $this->container['indices'] = $indices;
        return $this;
    }

    /**
    * Gets keepday
    *  设置快照保留的天数，范围是1～90。系统在半点时刻会自动删除超过保留天数的快照。
    *
    * @return int
    */
    public function getKeepday()
    {
        return $this->container['keepday'];
    }

    /**
    * Sets keepday
    *
    * @param int $keepday 设置快照保留的天数，范围是1～90。系统在半点时刻会自动删除超过保留天数的快照。
    *
    * @return $this
    */
    public function setKeepday($keepday)
    {
        $this->container['keepday'] = $keepday;
        return $this;
    }

    /**
    * Gets period
    *  每天创建快照的时刻，只支持整点，后面需加上时区，格式为“HH:mm z”，“HH:mm”表示整点时间，“z”表示时区。比如“00:00 GMT+08:00”、“01:00 GMT+08:00”等。
    *
    * @return string
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param string $period 每天创建快照的时刻，只支持整点，后面需加上时区，格式为“HH:mm z”，“HH:mm”表示整点时间，“z”表示时区。比如“00:00 GMT+08:00”、“01:00 GMT+08:00”等。
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets prefix
    *  自动创建的快照名称前缀，需要用户自己手动输入。只能包含1~32位小写字母、数字、中划线或者下划线，并且以小写字母开头。
    *
    * @return string
    */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
    * Sets prefix
    *
    * @param string $prefix 自动创建的快照名称前缀，需要用户自己手动输入。只能包含1~32位小写字母、数字、中划线或者下划线，并且以小写字母开头。
    *
    * @return $this
    */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;
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

