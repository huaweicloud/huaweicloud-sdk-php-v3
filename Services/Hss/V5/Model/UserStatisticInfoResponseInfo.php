<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserStatisticInfoResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UserStatisticInfoResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userName  **参数解释**: 资产中的账号名称，用于唯一标识账号 **取值范围**: 字符长度1-64位，参考Windows文件命名规则，支持字母、数字、下划线、中文及!@.-等特殊字符，不含中文标点符号
    * num  **参数解释**: 当前账号关联的资产（主机/容器）数量 **取值范围**: 非负整数，最小值0；单位：台（主机）/个（容器）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userName' => 'string',
            'num' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userName  **参数解释**: 资产中的账号名称，用于唯一标识账号 **取值范围**: 字符长度1-64位，参考Windows文件命名规则，支持字母、数字、下划线、中文及!@.-等特殊字符，不含中文标点符号
    * num  **参数解释**: 当前账号关联的资产（主机/容器）数量 **取值范围**: 非负整数，最小值0；单位：台（主机）/个（容器）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userName' => null,
        'num' => null
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
    * userName  **参数解释**: 资产中的账号名称，用于唯一标识账号 **取值范围**: 字符长度1-64位，参考Windows文件命名规则，支持字母、数字、下划线、中文及!@.-等特殊字符，不含中文标点符号
    * num  **参数解释**: 当前账号关联的资产（主机/容器）数量 **取值范围**: 非负整数，最小值0；单位：台（主机）/个（容器）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userName' => 'user_name',
            'num' => 'num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userName  **参数解释**: 资产中的账号名称，用于唯一标识账号 **取值范围**: 字符长度1-64位，参考Windows文件命名规则，支持字母、数字、下划线、中文及!@.-等特殊字符，不含中文标点符号
    * num  **参数解释**: 当前账号关联的资产（主机/容器）数量 **取值范围**: 非负整数，最小值0；单位：台（主机）/个（容器）
    *
    * @var string[]
    */
    protected static $setters = [
            'userName' => 'setUserName',
            'num' => 'setNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userName  **参数解释**: 资产中的账号名称，用于唯一标识账号 **取值范围**: 字符长度1-64位，参考Windows文件命名规则，支持字母、数字、下划线、中文及!@.-等特殊字符，不含中文标点符号
    * num  **参数解释**: 当前账号关联的资产（主机/容器）数量 **取值范围**: 非负整数，最小值0；单位：台（主机）/个（容器）
    *
    * @var string[]
    */
    protected static $getters = [
            'userName' => 'getUserName',
            'num' => 'getNum'
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
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['num'] = isset($data['num']) ? $data['num'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 128)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 1)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['num']) && ($this->container['num'] > 10000)) {
                $invalidProperties[] = "invalid value for 'num', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['num']) && ($this->container['num'] < 0)) {
                $invalidProperties[] = "invalid value for 'num', must be bigger than or equal to 0.";
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
    * Gets userName
    *  **参数解释**: 资产中的账号名称，用于唯一标识账号 **取值范围**: 字符长度1-64位，参考Windows文件命名规则，支持字母、数字、下划线、中文及!@.-等特殊字符，不含中文标点符号
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName **参数解释**: 资产中的账号名称，用于唯一标识账号 **取值范围**: 字符长度1-64位，参考Windows文件命名规则，支持字母、数字、下划线、中文及!@.-等特殊字符，不含中文标点符号
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets num
    *  **参数解释**: 当前账号关联的资产（主机/容器）数量 **取值范围**: 非负整数，最小值0；单位：台（主机）/个（容器）
    *
    * @return int|null
    */
    public function getNum()
    {
        return $this->container['num'];
    }

    /**
    * Sets num
    *
    * @param int|null $num **参数解释**: 当前账号关联的资产（主机/容器）数量 **取值范围**: 非负整数，最小值0；单位：台（主机）/个（容器）
    *
    * @return $this
    */
    public function setNum($num)
    {
        $this->container['num'] = $num;
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

