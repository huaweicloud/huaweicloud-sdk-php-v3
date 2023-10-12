<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SetRDSBackupCnfReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SetRDSBackupCnfReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * indices  需要备份的索引名。*代表所有索引。
    * prefix  自动创建快照的名称前缀，需要用户自己手动输入。 只能包含1~32位小写字母、数字、中划线或者下划线，并且以小写字母开头。  > 当enable为true时该字段为必选字段
    * period  每天创建快照的时刻，只支持整点，后面需加上时区，格式为“HH:mm z”，“HH:mm”表示整点时间，“z”表示时区。 比如“00:00 GMT+08:00”、“01:00 GMT+08:00”等。  > 当enable为true时该字段为必选字段
    * keepday  自定义设置快照保留的天数，范围是1～90。系统在半点时刻会自动删除超过保留天数的快照。  > 当enable为true时该字段为必选字段
    * enable  是否开启自动创建快照策略。 - true：表示开启自动创建快照策略。 - false：表示关闭自动创建快照策略。
    * deleteAuto  表示关闭自动创建快照策略时，是否需要清除所有自动创建的快照。 默认为“false”，表示不会删除之前已自动创建的快照。 设置为true，表示在关闭自动创建快照策略的同时，删除所有已创建的快照。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'indices' => 'string',
            'prefix' => 'string',
            'period' => 'string',
            'keepday' => 'int',
            'enable' => 'string',
            'deleteAuto' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * indices  需要备份的索引名。*代表所有索引。
    * prefix  自动创建快照的名称前缀，需要用户自己手动输入。 只能包含1~32位小写字母、数字、中划线或者下划线，并且以小写字母开头。  > 当enable为true时该字段为必选字段
    * period  每天创建快照的时刻，只支持整点，后面需加上时区，格式为“HH:mm z”，“HH:mm”表示整点时间，“z”表示时区。 比如“00:00 GMT+08:00”、“01:00 GMT+08:00”等。  > 当enable为true时该字段为必选字段
    * keepday  自定义设置快照保留的天数，范围是1～90。系统在半点时刻会自动删除超过保留天数的快照。  > 当enable为true时该字段为必选字段
    * enable  是否开启自动创建快照策略。 - true：表示开启自动创建快照策略。 - false：表示关闭自动创建快照策略。
    * deleteAuto  表示关闭自动创建快照策略时，是否需要清除所有自动创建的快照。 默认为“false”，表示不会删除之前已自动创建的快照。 设置为true，表示在关闭自动创建快照策略的同时，删除所有已创建的快照。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'indices' => null,
        'prefix' => null,
        'period' => null,
        'keepday' => null,
        'enable' => null,
        'deleteAuto' => null
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
    * indices  需要备份的索引名。*代表所有索引。
    * prefix  自动创建快照的名称前缀，需要用户自己手动输入。 只能包含1~32位小写字母、数字、中划线或者下划线，并且以小写字母开头。  > 当enable为true时该字段为必选字段
    * period  每天创建快照的时刻，只支持整点，后面需加上时区，格式为“HH:mm z”，“HH:mm”表示整点时间，“z”表示时区。 比如“00:00 GMT+08:00”、“01:00 GMT+08:00”等。  > 当enable为true时该字段为必选字段
    * keepday  自定义设置快照保留的天数，范围是1～90。系统在半点时刻会自动删除超过保留天数的快照。  > 当enable为true时该字段为必选字段
    * enable  是否开启自动创建快照策略。 - true：表示开启自动创建快照策略。 - false：表示关闭自动创建快照策略。
    * deleteAuto  表示关闭自动创建快照策略时，是否需要清除所有自动创建的快照。 默认为“false”，表示不会删除之前已自动创建的快照。 设置为true，表示在关闭自动创建快照策略的同时，删除所有已创建的快照。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'indices' => 'indices',
            'prefix' => 'prefix',
            'period' => 'period',
            'keepday' => 'keepday',
            'enable' => 'enable',
            'deleteAuto' => 'deleteAuto'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * indices  需要备份的索引名。*代表所有索引。
    * prefix  自动创建快照的名称前缀，需要用户自己手动输入。 只能包含1~32位小写字母、数字、中划线或者下划线，并且以小写字母开头。  > 当enable为true时该字段为必选字段
    * period  每天创建快照的时刻，只支持整点，后面需加上时区，格式为“HH:mm z”，“HH:mm”表示整点时间，“z”表示时区。 比如“00:00 GMT+08:00”、“01:00 GMT+08:00”等。  > 当enable为true时该字段为必选字段
    * keepday  自定义设置快照保留的天数，范围是1～90。系统在半点时刻会自动删除超过保留天数的快照。  > 当enable为true时该字段为必选字段
    * enable  是否开启自动创建快照策略。 - true：表示开启自动创建快照策略。 - false：表示关闭自动创建快照策略。
    * deleteAuto  表示关闭自动创建快照策略时，是否需要清除所有自动创建的快照。 默认为“false”，表示不会删除之前已自动创建的快照。 设置为true，表示在关闭自动创建快照策略的同时，删除所有已创建的快照。
    *
    * @var string[]
    */
    protected static $setters = [
            'indices' => 'setIndices',
            'prefix' => 'setPrefix',
            'period' => 'setPeriod',
            'keepday' => 'setKeepday',
            'enable' => 'setEnable',
            'deleteAuto' => 'setDeleteAuto'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * indices  需要备份的索引名。*代表所有索引。
    * prefix  自动创建快照的名称前缀，需要用户自己手动输入。 只能包含1~32位小写字母、数字、中划线或者下划线，并且以小写字母开头。  > 当enable为true时该字段为必选字段
    * period  每天创建快照的时刻，只支持整点，后面需加上时区，格式为“HH:mm z”，“HH:mm”表示整点时间，“z”表示时区。 比如“00:00 GMT+08:00”、“01:00 GMT+08:00”等。  > 当enable为true时该字段为必选字段
    * keepday  自定义设置快照保留的天数，范围是1～90。系统在半点时刻会自动删除超过保留天数的快照。  > 当enable为true时该字段为必选字段
    * enable  是否开启自动创建快照策略。 - true：表示开启自动创建快照策略。 - false：表示关闭自动创建快照策略。
    * deleteAuto  表示关闭自动创建快照策略时，是否需要清除所有自动创建的快照。 默认为“false”，表示不会删除之前已自动创建的快照。 设置为true，表示在关闭自动创建快照策略的同时，删除所有已创建的快照。
    *
    * @var string[]
    */
    protected static $getters = [
            'indices' => 'getIndices',
            'prefix' => 'getPrefix',
            'period' => 'getPeriod',
            'keepday' => 'getKeepday',
            'enable' => 'getEnable',
            'deleteAuto' => 'getDeleteAuto'
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
        $this->container['prefix'] = isset($data['prefix']) ? $data['prefix'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['keepday'] = isset($data['keepday']) ? $data['keepday'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['deleteAuto'] = isset($data['deleteAuto']) ? $data['deleteAuto'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['enable'] === null) {
            $invalidProperties[] = "'enable' can't be null";
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
    *  需要备份的索引名。*代表所有索引。
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
    * @param string|null $indices 需要备份的索引名。*代表所有索引。
    *
    * @return $this
    */
    public function setIndices($indices)
    {
        $this->container['indices'] = $indices;
        return $this;
    }

    /**
    * Gets prefix
    *  自动创建快照的名称前缀，需要用户自己手动输入。 只能包含1~32位小写字母、数字、中划线或者下划线，并且以小写字母开头。  > 当enable为true时该字段为必选字段
    *
    * @return string|null
    */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
    * Sets prefix
    *
    * @param string|null $prefix 自动创建快照的名称前缀，需要用户自己手动输入。 只能包含1~32位小写字母、数字、中划线或者下划线，并且以小写字母开头。  > 当enable为true时该字段为必选字段
    *
    * @return $this
    */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;
        return $this;
    }

    /**
    * Gets period
    *  每天创建快照的时刻，只支持整点，后面需加上时区，格式为“HH:mm z”，“HH:mm”表示整点时间，“z”表示时区。 比如“00:00 GMT+08:00”、“01:00 GMT+08:00”等。  > 当enable为true时该字段为必选字段
    *
    * @return string|null
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param string|null $period 每天创建快照的时刻，只支持整点，后面需加上时区，格式为“HH:mm z”，“HH:mm”表示整点时间，“z”表示时区。 比如“00:00 GMT+08:00”、“01:00 GMT+08:00”等。  > 当enable为true时该字段为必选字段
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets keepday
    *  自定义设置快照保留的天数，范围是1～90。系统在半点时刻会自动删除超过保留天数的快照。  > 当enable为true时该字段为必选字段
    *
    * @return int|null
    */
    public function getKeepday()
    {
        return $this->container['keepday'];
    }

    /**
    * Sets keepday
    *
    * @param int|null $keepday 自定义设置快照保留的天数，范围是1～90。系统在半点时刻会自动删除超过保留天数的快照。  > 当enable为true时该字段为必选字段
    *
    * @return $this
    */
    public function setKeepday($keepday)
    {
        $this->container['keepday'] = $keepday;
        return $this;
    }

    /**
    * Gets enable
    *  是否开启自动创建快照策略。 - true：表示开启自动创建快照策略。 - false：表示关闭自动创建快照策略。
    *
    * @return string
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param string $enable 是否开启自动创建快照策略。 - true：表示开启自动创建快照策略。 - false：表示关闭自动创建快照策略。
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets deleteAuto
    *  表示关闭自动创建快照策略时，是否需要清除所有自动创建的快照。 默认为“false”，表示不会删除之前已自动创建的快照。 设置为true，表示在关闭自动创建快照策略的同时，删除所有已创建的快照。
    *
    * @return string|null
    */
    public function getDeleteAuto()
    {
        return $this->container['deleteAuto'];
    }

    /**
    * Sets deleteAuto
    *
    * @param string|null $deleteAuto 表示关闭自动创建快照策略时，是否需要清除所有自动创建的快照。 默认为“false”，表示不会删除之前已自动创建的快照。 设置为true，表示在关闭自动创建快照策略的同时，删除所有已创建的快照。
    *
    * @return $this
    */
    public function setDeleteAuto($deleteAuto)
    {
        $this->container['deleteAuto'] = $deleteAuto;
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

