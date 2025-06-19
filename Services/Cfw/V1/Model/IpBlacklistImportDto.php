<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IpBlacklistImportDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IpBlacklistImportDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * addType  IP黑名单导入的方式，0表示增量导入，在原来的基础上追加；1表示全量导入，新导入的IP黑名单会覆盖已有的IP黑名单
    * ipBlacklist  IP列表，当前支持不同的IP地址之间使用“,” 、“ ”、“;”、“\\r\\n”、“\\n”、“\\t”等分割符进行分割。
    * effectScope  生效范围，1表示生效范围为eip, 2表示生效范围为nat, [1 2]表示 生效范围为eip和nat
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'addType' => 'int',
            'ipBlacklist' => 'string',
            'effectScope' => 'int[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * addType  IP黑名单导入的方式，0表示增量导入，在原来的基础上追加；1表示全量导入，新导入的IP黑名单会覆盖已有的IP黑名单
    * ipBlacklist  IP列表，当前支持不同的IP地址之间使用“,” 、“ ”、“;”、“\\r\\n”、“\\n”、“\\t”等分割符进行分割。
    * effectScope  生效范围，1表示生效范围为eip, 2表示生效范围为nat, [1 2]表示 生效范围为eip和nat
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'addType' => 'int32',
        'ipBlacklist' => null,
        'effectScope' => 'int32'
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
    * addType  IP黑名单导入的方式，0表示增量导入，在原来的基础上追加；1表示全量导入，新导入的IP黑名单会覆盖已有的IP黑名单
    * ipBlacklist  IP列表，当前支持不同的IP地址之间使用“,” 、“ ”、“;”、“\\r\\n”、“\\n”、“\\t”等分割符进行分割。
    * effectScope  生效范围，1表示生效范围为eip, 2表示生效范围为nat, [1 2]表示 生效范围为eip和nat
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'addType' => 'add_type',
            'ipBlacklist' => 'ip_blacklist',
            'effectScope' => 'effect_scope'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * addType  IP黑名单导入的方式，0表示增量导入，在原来的基础上追加；1表示全量导入，新导入的IP黑名单会覆盖已有的IP黑名单
    * ipBlacklist  IP列表，当前支持不同的IP地址之间使用“,” 、“ ”、“;”、“\\r\\n”、“\\n”、“\\t”等分割符进行分割。
    * effectScope  生效范围，1表示生效范围为eip, 2表示生效范围为nat, [1 2]表示 生效范围为eip和nat
    *
    * @var string[]
    */
    protected static $setters = [
            'addType' => 'setAddType',
            'ipBlacklist' => 'setIpBlacklist',
            'effectScope' => 'setEffectScope'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * addType  IP黑名单导入的方式，0表示增量导入，在原来的基础上追加；1表示全量导入，新导入的IP黑名单会覆盖已有的IP黑名单
    * ipBlacklist  IP列表，当前支持不同的IP地址之间使用“,” 、“ ”、“;”、“\\r\\n”、“\\n”、“\\t”等分割符进行分割。
    * effectScope  生效范围，1表示生效范围为eip, 2表示生效范围为nat, [1 2]表示 生效范围为eip和nat
    *
    * @var string[]
    */
    protected static $getters = [
            'addType' => 'getAddType',
            'ipBlacklist' => 'getIpBlacklist',
            'effectScope' => 'getEffectScope'
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
        $this->container['addType'] = isset($data['addType']) ? $data['addType'] : null;
        $this->container['ipBlacklist'] = isset($data['ipBlacklist']) ? $data['ipBlacklist'] : null;
        $this->container['effectScope'] = isset($data['effectScope']) ? $data['effectScope'] : null;
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
    * Gets addType
    *  IP黑名单导入的方式，0表示增量导入，在原来的基础上追加；1表示全量导入，新导入的IP黑名单会覆盖已有的IP黑名单
    *
    * @return int|null
    */
    public function getAddType()
    {
        return $this->container['addType'];
    }

    /**
    * Sets addType
    *
    * @param int|null $addType IP黑名单导入的方式，0表示增量导入，在原来的基础上追加；1表示全量导入，新导入的IP黑名单会覆盖已有的IP黑名单
    *
    * @return $this
    */
    public function setAddType($addType)
    {
        $this->container['addType'] = $addType;
        return $this;
    }

    /**
    * Gets ipBlacklist
    *  IP列表，当前支持不同的IP地址之间使用“,” 、“ ”、“;”、“\\r\\n”、“\\n”、“\\t”等分割符进行分割。
    *
    * @return string|null
    */
    public function getIpBlacklist()
    {
        return $this->container['ipBlacklist'];
    }

    /**
    * Sets ipBlacklist
    *
    * @param string|null $ipBlacklist IP列表，当前支持不同的IP地址之间使用“,” 、“ ”、“;”、“\\r\\n”、“\\n”、“\\t”等分割符进行分割。
    *
    * @return $this
    */
    public function setIpBlacklist($ipBlacklist)
    {
        $this->container['ipBlacklist'] = $ipBlacklist;
        return $this;
    }

    /**
    * Gets effectScope
    *  生效范围，1表示生效范围为eip, 2表示生效范围为nat, [1 2]表示 生效范围为eip和nat
    *
    * @return int[]|null
    */
    public function getEffectScope()
    {
        return $this->container['effectScope'];
    }

    /**
    * Sets effectScope
    *
    * @param int[]|null $effectScope 生效范围，1表示生效范围为eip, 2表示生效范围为nat, [1 2]表示 生效范围为eip和nat
    *
    * @return $this
    */
    public function setEffectScope($effectScope)
    {
        $this->container['effectScope'] = $effectScope;
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

